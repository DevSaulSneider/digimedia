
<?php 
if (isset($_POST['enviar'])){
 if(!empty('nombre') && !empty('telefono')&& !empty('email')){
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $asunto='area';
    $mensaje='aea';
    $header="From: noreply@example.com" . "\r\n";
    $header.="Reply-To: noreply@example.com" ."\r\n";
    $mail=mail($email,$asunto,$mensaje,$header);
    if($mail){
        echo "<h4>Mail Enviado</h4>";
    }
 }

}


?>