<?php require '../root.php';
//  Konstan jalur akses.

require dirBase.'system/views/view.php';
//  Kelas view untuk pengaturan halaman.

$view = new view('contact');
//  Instansiasi kelas view.

/////////////////////////////////////////////////

$view->head(
//  Method bagian head.

array( // berkas CSS.
'result.css'),

array('no')); // Tanpa JS.

/////////////////////////////////////////////////

if( !isset($_POST['fullname']) || !isset($_POST['email']) ||
    !isset($_POST['phone']) || !isset($_POST['message']) ||
    !isset($_POST['captcha'])){
    //  Jika terdapat $_POST yang tidak tersedia. ?>

    <script>throwToast('warning', 'Terdapat form yang tidak tersedia', 'pages/contact')</script>
    <!-- Arahkan ke halaman contact dengan pesan terdapat form yang tidak tersedia. -->

<?php }

if( empty($_POST['fullname']) || empty($_POST['email']) ||
    empty($_POST['phone']) || empty($_POST['message']) ||
    empty($_POST['captcha'])){
    //  Jika terdapat $_POST yang kosong. ?>

    <script>throwToast('warning', 'Terdapat form kosong', 'pages/contact')</script>
    <!-- Arahkan ke halaman contact dengan pesan terdapat form yang kosong. -->

<?php }

if ($_POST['captcha'] != $_SESSION['captcha']){
//  Jika nilai captcha tidak sama dengan session. ?>

    <script>throwToast('error', 'Captcha tidak sama', 'pages/contact')</script>
    <!-- Arahkan ke halaman contact dengan pesan captcha tidak sama. -->

<?php }

$view->openData();
//  Buka akses basis data.

$idContact = 'cont-'.date('jnygis');
$fullname = $view->data->real_escape_string($_POST['fullname']);
$email = $view->data->real_escape_string($_POST['email']);
$phone = $view->data->real_escape_string($_POST['phone']);
$message = $view->data->real_escape_string($_POST['message']);
$captcha = $view->data->real_escape_string($_POST['captcha']);
//  Bersihkan tiap nilai lalu input ke variabel masing - masing.

$sql = $view->data->prepare("INSERT INTO contact VALUES(?, ?, ?, ?, ?, NOW())");
$sql->bind_param('sssss', $idContact, $fullname, $email, $phone, $message);
$sql->execute();
//  Eksekusi SQL.

if($sql->affected_rows == 1){
//  Jika ekseskusi SQL berhasil.

    require 'mailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = gethostbyname('mail.conary.id');
    $mail->SMTPAuth = true;
    $mail->Username = 'ask@conary.id';
    $mail->Password = 'hoax1597531';
    // $mail->SMTPSecure = 'STARTTLS';
    $mail->SMTPAutoTLS = false;
    $mail->Port = 25;

    $mail->setFrom('sales@bintara.id', 'Customer Service Bintara');
    $mail->addBCC('sales@bintara.id');
    $mail->addAddress($email, $fullname);
    $mail->Subject = "Message Sent";
    $mail->IsHTML(true);

    $mail->Body = "<!DOCTYPE HTML><html><head> <title>[SUBJECT]</title> <meta charset='UTF-8'/> <style type='text/css'> @media screen and (max-width: 600px){table[class='container']{width: 95% !important}}#outlook a{padding: 0}body{width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; margin: 0; padding: 0}.ExternalClass{width: 100%}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height: 100%}#backgroundTable{margin: 0; padding: 0; width: 100% !important; line-height: 100% !important}img{outline: none; text-decoration: none; -ms-interpolation-mode: bicubic}a img{border: none}.image_fix{display: block}p{margin: 1em 0}h1, h2, h3, h4, h5, h6{color: black !important}table td{border-collapse: collapse}table{border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt}a{text-decoration: none; color: #000}@media only screen and (max-device-width: 480px){a[href^='tel'], a[href^='sms']{text-decoration: none; color: black; pointer-events: none; cursor: default}.mobile_link a[href^='tel'], .mobile_link a[href^='sms']{text-decoration: default; color: orange !important; pointer-events: auto; cursor: default}}@media only screen and (min-device-width: 768px)and (max-device-width: 1024px){a[href^='tel'], a[href^='sms']{text-decoration: none; color: blue; pointer-events: none; cursor: default}.mobile_link a[href^='tel'], .mobile_link a[href^='sms']{text-decoration: default; color: orange !important; pointer-events: auto; cursor: default}}h2{color: #181818; font-family: Helvetica, sans-serif; font-size: 26px; line-height: 22px; font-weight: bold}a.link1{}a.link2{color: #fff; text-decoration: none; font-family: Helvetica, sans-serif; font-size: 16px; color: #fff; border-radius: 4px}p{color: #555; font-family: Helvetica, sans-serif; font-size: 16px; line-height: 160%}</style> <script type='colorScheme' class='swatch active'>{'name':'Default','bgBody':'ffffff','link':'fff','color':'555555','bgItem':'ffffff','title':'181818'}</script></head><body> <table cellpadding='0' width='100%' cellspacing='0' border='0' id='backgroundTable' class='bgBody'> <tr> <td> <table cellpadding='0' width='620' class='container' align='center' cellspacing='0' border='0'> <tr> <td> <table cellpadding='0' cellspacing='0' border='0' align='center' width='600' class='container'> <tr> <td class='bgItem'> <div> <table cellpadding='0' cellspacing='0' border='0' align='center' width='600' class='container'> <tr height='40'> <td width='200'>&nbsp;</td><td width='200'>&nbsp;</td><td width='200'>&nbsp;</td></tr><tr> <td width='200' valign='top'>&nbsp;</td><td width='200' valign='top' align='center'> <div> <div align='center'> <img src='".urlBase."assets/img/email/logo.png' width='120' height='160' alt='Logo'/> </div></div></td><td width='200' valign='top'>&nbsp;</td></tr><tr height='25'> <td width='200'>&nbsp;</td><td width='200'>&nbsp;</td><td width='200'>&nbsp;</td></tr></table> </div><div> <table cellpadding='0' cellspacing='0' border='0' align='center' width='600' class='container'> <tr> <td width='100%' colspan='3' align='center' style='padding-bottom:10px;padding-top:25px'> <div> <div align='center'> <h2>Message Sent</h2> </div></div></td></tr><tr> <td width='100'>&nbsp;</td><td width='400' align='center'> <div> <div align='center'> <p>hai ".$fullname.", <br/> <br/> Thank you for contacting us by contact form page. We will response your message as soon as possible via email</p></div></div></td><td width='100'>&nbsp;</td></tr></table> </div><div> <table cellpadding='0' cellspacing='0' border='0' align='center' width='600' class='container' style='margin-top: 40px; font-size:12px;color:#181818;font-family:Helvetica, Arial, sans-serif;'> <tr> <td width='100' colspan='2' style='padding-bottom:30px'> <hr style='height:1px;border:none;color:#333;background-color:#ddd'/> </td></tr><tr> <td width='100' style='padding-bottom: 10px'>Fullname</td><td style='padding-bottom: 10px'>".$fullname."</td></tr><tr> <td width='100' style='padding-bottom: 10px'>Email</td><td style='padding-bottom: 10px'>".$email."</td></tr><tr> <td width='100' style='padding-bottom: 10px'>Phone</td><td style='padding-bottom: 10px'>".$phone."</td></tr><tr> <td width='100' style='padding-bottom: 10px'>Message</td><td style='padding-bottom: 10px'>".$message."</td></tr></table> </div><div> <table cellpadding='0' cellspacing='0' border='0' align='center' width='600' class='container'> <tr> <td width='100%' colspan='2' style='padding-top:30px'> <hr style='height:1px;border:none;color:#333;background-color:#ddd'/> </td></tr><tr> <td width='60%' height='70' valign='top' style='padding-top:20px'> <div> <div align='left'> <span style='font-size:12px;color:#181818;font-family:Helvetica, Arial, sans-serif;line-height:200%'> <a href='#'>Bintara</a>. Digital Transformation Solution.</span><br/><span style='font-size:10px;color:#555;font-family:Helvetica, Arial, sans-serif;line-height:200%'> email: info@bintara.id</span> </div></div></td></tr></table> </div></td></tr></table> </td></tr></table> </td></tr></table></body></html>";

    $mail->send(); 
    //	Kirim email. ?>

    <script>throwToast('success', 'Pesan berhasil kami terima', 'pages/contact')</script>
    <!-- Arahkan ke halaman contact dengan pesan berhasil kami terima. -->

    <?php

} else { ?>

    <script>throwToast('error', 'Pesan gagal kami terima', 'pages/contact')</script>
    <!-- Arahkan ke halaman contact dengan pesan gagal kami terima. -->

<?php } ?>