<?php

// Read the variables being posted from the form.
$cCustomerName  = $_REQUEST["name"];
$cCustomerEmail = $_REQUEST["email"];
$cCustomerPhone = $_REQUEST["phone"];
$cCustomerSubject = $_REQUEST["subject"];
$cCustomerMessage = $_REQUEST["message"];
$cCustomerNumber = $_REQUEST["number"];
$cCustomerAlergie1 = $_REQUEST["alergie1"];
$cCustomerAlergie2 = $_REQUEST["alergie2"];
$cCustomerAlergie3 = $_REQUEST["alergie3"];
$cCustomerCatering = $_REQUEST["catering"];
$cCustomerTheme = $_REQUEST["color"];
$cCustomerFile = $_REQUEST["file"];


// Call back URL
$sURltoCall     = $_REQUEST["callbackurl"];
// define your additional fields here

// prepare the email body.
// PLAIN TEXT FORMAT
$cEmailBody = "";
$cEmailBody .= "Information from Web form completed online by Web visitor @ " .date("Y-d-m").chr(13);
$cEmailBody .= "============================================================".chr(13);
$cEmailBody .= "Customer Name : ".$cCustomerName.chr(13);
$cEmailBody .= "Customer Email : ".$cCustomerEmail.chr(13);
$cEmailBody .= "Customer Phone : ".$cCustomerPhone.chr(13);
$cEmailBody .= "Customer Subject : ".$cCustomerSubject.chr(13);
$cEmailBody .= "Customer Message : ".$cCustomerMessage.chr(13);
$cEmailBody .= "Number of People : ".$cCustomerNumber.chr(13);
$cEmailBody .= "Alergies : ".$cCustomerAlergie1." ".$cCustomerAlergie2." ".$cCustomerAlergie3.chr(13);
$cEmailBody .= "Catering : ".$cCustomerCatering.chr(13);
$cEmailBody .= "Colour Theme : ".$cCustomerTheme.chr(13);
$cEmailBody .= "Attachments/Files : ".$cCustomerFile.chr(13);

// add additional fields here...

// YOU MAY STYLE THE PLAIN TEXT WITH HTML TAG's and yout email program will resender it accordingly if you prefer to have a better formatted email.



// Send the mail with default header settings and using my email, replace my email address to test, once done, put mine back so i can see that the uoutput gets emailed to me
// which indicates successfully execution of contact form.

mail("jofuz@pm.me","Online Web query - bakemyday.ie website",$cEmailBody);

echo "mail sent";

//

if (isset($sURltoCall)) {
    echo '<meta http-equiv="refresh" content="0;url='.$sURltoCall.'">';
	}else {
	echo '<meta http-equiv="refresh" content="0;url=index.html">';
		}



?>