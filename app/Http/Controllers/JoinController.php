<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailOther;
class JoinController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($nursing_home)
    {
        $homes = DB::select('SELECT Name, Needs, Address, `Zip Code`, `Mask Type`, `Mask Fabric`, `Mailing Address`, `Other Information` from nursing_homes');
        return view('join')->with('homes', $homes);
    }
    /**
     * Store the information the user made when submitting the mask donation form
     *
     */
    public function submit(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'options' => 'required',
            'nmasks' => 'required|integer|min:0',
            'mats' => '',
            'delivery' => 'required',
            'check' => ''
        ]);
        $help = 'He/she will do it by themselves.';
        $phone = $request->phone;
        if($phone == null)
        {
            $phone = "(they did not provide phone number)";
        }
        $masks = $request->nmasks;
        if($masks == null)
        {
            $masks = 0;
        }
        $materials = $request->mats;
        if($materials == null)
        {
            $materials = "";
        }
        if($request->check == 'on')
        {
            $help = 'He/she needs someone else to drop off the masks for them.';
        }
        $data = array(
            'Name' => $request->Name,
            'email' => $request->email,
            'phone' => $phone,
            'nhome' => $request->options,
            'nmasks' => $masks,
            'mats' => $materials,
            'delivery' => $request->delivery,
            'myself' => $help
        );
        Mail::to('covid19maskinitiative@gmail.com')->send(new SendMailOther($data));
        $user = Auth::user();
        $user->number_of_masks = ($user->number_of_masks) + $masks;
        $user->other_donations = ($user->other_donations) . " " . ($materials);
        $user->save();
        return redirect()->back()->with("success", "Thank you for donating!");
    }
}