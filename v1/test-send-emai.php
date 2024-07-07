<?php
// Scripts PHP: Para pruebas manuales del código.
$webmaster_email = 'canodelacuadra@gmail.com';
// Prueba de validación de correo electrónico
// verifica si los correos electrónicos son válidos o no utilizando 
// el filtro de validación de PHP FILTER_VALIDATE_EMAIL
function testEmailValidation() {
    assert(filter_var('test@example.com', FILTER_VALIDATE_EMAIL) !== false, 'Valid email test failed');
    assert(filter_var('invalid-email', FILTER_VALIDATE_EMAIL) === false, 'Invalid email test failed');
}
// assert: Esta función comprueba que la condición proporcionada sea verdadera.
// Si no lo es, lanza una advertencia con el mensaje proporcionado.




// Prueba de envío de correo
function testSendMail() {
    global $webmaster_email;
    $name = 'Test User';
    $email = 'test@example.com';
    $message = 'This is a test message';
    $subject = "Mensaje de $name";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
    assert(mail($webmaster_email, $subject, $body) === true, 'Mail sending test failed');
}
//Las funciones de prueba se llaman una tras otra, 
//y luego se imprime un mensaje si todas las pruebas pasan.
testEmailValidation();
testSendMail();
echo "All tests passed.\n";
?>
