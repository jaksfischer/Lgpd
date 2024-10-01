
<?php

require 'vendor/autoload.php'; // Supondo que você tenha instalado via composer

// Inclua a classe LgpdMask manualmente se não estiver usando Composer:
// require 'path/to/Lgpd.php';

// Exemplo de uso da classe LgpdMask
use LgpdMask;

// Mascarar nome
echo LgpdMask::maskName('Dino da Silva Sauro') . PHP_EOL; // Dino ** ***** *****

// Mascarar CPF
echo LgpdMask::maskCpf('123.456.789-00') . PHP_EOL; // 123.***.***-**

// Mascarar RG
echo LgpdMask::maskRg('12345678-9') . PHP_EOL; // 123*****-*

// Mascarar e-mail
echo LgpdMask::maskEmail('exemplo-email@gmail.com') . PHP_EOL; // exe*********@****.com

// Mascarar telefone
echo LgpdMask::maskPhone('(11) 99999-9999') . PHP_EOL; // (***) *****-9999

// Mascarar data de nascimento
echo LgpdMask::maskDateOfBirth('20/02/1990') . PHP_EOL; // **/**/****
