<?php
    echo "ACTIVATED";

    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMPT Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "justinjp126@gmail.com";
        $mail->Password = "Justin4686";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //email settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("justinjp126@gmail.com");
        $mail->Subject = $name;
        $mail->Body = $message;

        if($mail->send()) {
            $response = ("Email is sent!");
        }
        else
            $response =  ("Something is wrong: <br><br>" . $mail->ErrorInfo);

        exit(json_encode(array("response" => $response)));
    }
?>