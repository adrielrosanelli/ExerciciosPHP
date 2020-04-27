<?php
//O comando mail está tentando mandar um email mas como a porta smtp não está configurada ele não consegue.
$success = mail('example@example.com', 'Teste', "teste");
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
?>