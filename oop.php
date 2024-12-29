<?php
class email{
    public $promail;

    function setmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return;
        }
        $this->promail=$email;
    }

    public function getmail(){
       return strtolower($this->promail);
    }
}
$mail= new email;
$mail->setmail("shagor@Gmail.COom");
echo $mail->getmail();





