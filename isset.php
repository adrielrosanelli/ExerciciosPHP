<?php
$a = "0";
//Isset verifica se a variável existe.
if (isset($a)){
    echo "Essa variavel existe";
}
echo "<br>";
//Teste para induzir ao erro.
if (isset($b) ===false){
    echo "Essa variavel não existe";
}
?>