<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir las clases de PHPMailer
    require './mailer/PHPMailer.php';
    require './mailer/SMTP.php';
    require './mailer/Exception.php';

    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $conforme = isset($_POST['conforme']) ? "Sí" : "No";

    // Crear una nueva instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'workjosemi98@gmail.com'; // Tu dirección de correo electrónico de Gmail
        $mail->Password = 'ybqn blhq odvs esxp'; // Tu contraseña de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configurar el remitente y los destinatarios
        $mail->setFrom($correo, $nombre); // Correo y nombre del remitente
        $mail->addAddress('workjosemi98@gmail.com'); // Correo del destinatario
        $mail->addAddress($correo); // Agregar al remitente como destinatario adicional

        // Establecer el asunto del correo electrónico
        $mail->Subject = 'Nuevo mensaje de formulario de contacto';

        // Construir el cuerpo del mensaje HTML con diseño mejorado
        $html_body = '
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Nuevo mensaje de formulario de contacto</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f0f0f0;
                        margin: 0;
                        padding: 0;
                    }
                    .container {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #ffffff;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }
                    h1 {
                        text-align: center;
                        color: #333333;
                    }
                    p {
                        color: #666666;
                    }
                    .message-box {
                        background-color: #f9f9f9;
                        padding: 20px;
                        border-radius: 5px;
                        margin-top: 20px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>Nuevo mensaje de formulario de contacto</h1>
                    <p><strong>Nombre:</strong> ' . $nombre . '</p>
                    <p><strong>Correo Electrónico:</strong> ' . $correo . '</p>
                    <div class="message-box">
                        <p><strong>Mensaje:</strong></p>
                        <p>' . nl2br($mensaje) . '</p>
                    </div>
                    <p><strong>Acepta los términos y condiciones:</strong> ' . $conforme . '</p>
                </div>
            </body>
            </html>
        ';

        // Establecer el cuerpo del mensaje como HTML
        $mail->isHTML(true);
        $mail->Body = $html_body;

        // Enviar el correo electrónico
        $mail->send();

        // Redireccionar a una página de confirmación
        header('Location: index.html');
        exit();
    } catch (Exception $e) {
        // Manejar cualquier excepción que ocurra durante el envío del correo electrónico
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
