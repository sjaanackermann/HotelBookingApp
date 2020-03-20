<?php

class Booking{
    
    public $hotelOption, $costTotal, $refNumber, $name, $surname, $email, $checkin, $checkout, $hotela, $hotelb;
    
    function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6){
        $this->name= $n0;
        $this->surname= $n1;
        $this->email= $n2;
        $this->checkin= $n3;
        $this->checkout= $n4;
        $this->hotela= $n5;
        $this->hotelb= $n6;
    }
    
    //PHPMailer send email to user
    function sendEmail($param, $param2){
        //true is real server false is via mailtrap
        if($param2){
            
            try {
                //Server settings
                $param->SMTPDebug = 0;                    // Enable verbose debug output
                $param->isSMTP();                         // Set mailer to use SMTP
                $param->Host       = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
                $param->SMTPAuth   = true;                // Enable SMTP authentication
                $param->Username   = '';    // SMTP username
                $param->Password   = '';    // SMTP password
                $param->SMTPSecure = '';               // Enable TLS encryption, `ssl` also accepted
                $param->Port       = 2525;                // TCP port to connect to

                //Recipients
                $param->setFrom('lyndon@rabbitmacht.co.za', 'lyndon');
                $param->addAddress('lyndon@codespace.co.za', 'a good guy');     // Add a recipient
                $param->addReplyTo('lyndon@rabbitmacht.co.za', 'Information');

                // Content
                $param->isHTML(true);                                  // Set email format to HTML
                $param->Subject = 'Hotel Booking';
                $param->Body    = 
                    "Hi ".$this->name." ".$this->surname. " <br> 
                    Please see details of your booking below <br>
                    Hotel name: <b>".$this->hotelOption->name."</b> <br>
                    From : ".$this->checkin." to : ".$this->checkout. "<br>
                    The cost of the total stay is ". $this->costTotal . "<br>
                    Please deposit funds into the following account<br>
                    Hotel Booking, Standard Bank, 5409098790, 1092, Cheque <br>
                    Using reference Number " .$this->refNumber."<br>
                    Any further queries you have can be directed to <br>
                    admin@thehotelbookingteam.co.za<br>
                    Thanks for your bussiness and we look forward to hearning back from you<br>
                    <br>The Hotel Bookings Team";
                $param->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $param->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$param->ErrorInfo}";
            }
        }
    }
}


?>
