<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


//$uploaddir = 'uploads/';
//$uploadfile = $uploaddir . basename($_FILES['anexo']['name']);

/*if (move_uploaded_file($_FILES['anexo']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}*/

$dir = 'upload/';
$file = $_FILES['anexo']; 
// Move o arquivo da pasta temporaria de upload para a pasta de destino 
if (move_uploaded_file($file['tmp_name'], "$dir/" . $file['name'])) { 
    echo "Arquivo enviado com sucesso!"; 
    echo header('Location: index.php');
    
} 
else { 
    echo "Erro, o arquivo não pode ser enviado."; 
}      

$mail = new PHPMailer();


$mail->IsSMTP();

$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // secure transfer enabled REQUIRED for GMail
$mail->SMTPAutoTLS = false;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;

$mail->Username = "ppauloces27@gmail.com";
$mail->Password = "Pbamaral123";
$mail->SetFrom($_POST['email']);

$mail->addAddress('ppauloces27@gmail.com', 'PHP');
//$mail->addAttachment($uploadfile);
$mail->addAttachment("$dir/".$file['name']);
$mail->Subject = "Formulário";
$mail->isHTML(true);
$mail->msgHTML('
    <h1>' . $mail->Subject . '</h1>'.
    '<p>'. $_POST['message'] . '</p>'.
    '<p>Enviado por:'. $_POST['email'] . ' ('.$_POST['nome'].')</p> <br> '
);


$mail->AltBody = "Mensagem padrão do email";  

if(!$mail->send()){
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Eita 🤨',
        text: 'Alguma coisa deu errado, tenta de novo aí!',
        </script>";
}else {
    echo "<script>
    Swal.fire(
        'Email enviado!',
        'Recebi seu email aqui 😉',
        'success'
      )
      </script>";
}
?>