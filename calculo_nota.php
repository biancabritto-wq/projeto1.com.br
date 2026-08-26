<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;
if ($media >= 9) {
    echo "Sua média é $media e você está Aprovado com honras!";
}elseif ($media >= 7) {
    echo "Sua média é $media e você está Aprovado!";
} elseif ($media >= 5) {
    echo "Sua média é $media e você está em Recuperação!";
} else {
    echo "Sua média é $media e você está Reprovado!";
}
?>