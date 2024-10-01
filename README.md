
# LgpdMask

## Descrição pt-Br
A classe `LgpdMask` foi desenvolvida para mascarar dados pessoais, em conformidade com a **LGPD (Lei Geral de Proteção de Dados)**, baseada na **GDPR**. Ela pode ser usada para ocultar informações sensíveis, como nome, CPF, RG, telefone, e-mail e data de nascimento, deixando apenas partes visíveis para proteger a privacidade dos usuários.

## Description En
The `LgpdMask` class is designed to mask personal data, in compliance with **LGPD (Lei Geral de Proteção de Dados)**, which is based on **GDPR**. It can be used to hide sensitive information such as name, CPF, RG, phone number, email, and date of birth, leaving only parts visible to protect user privacy.

## Instalação

Instale via [Composer](https://getcomposer.org/):

```bash
composer require jakson-fischer/lgpd-mask
```

## Installation

Install via [Composer](https://getcomposer.org/):

```bash
composer require youruser/lgpd-mask
```

## Métodos Disponíveis
## Available Methods

### 1. `maskName($fullName)`
Mascarar o nome completo, exibindo apenas o primeiro nome.
Mask the full name, displaying only the first name.
#### Exemplo:
```php
LgpdMask::maskName('Carlos Eduardo Silva');
```
**Entrada**: `"Carlos Eduardo Silva"`
**Saída**: `"Carlos ****** *****"`

### 2. `maskCpf($cpf)`
Mascarar um CPF, exibindo apenas os três primeiros dígitos.
Mask a CPF, displaying only the first three digits.
#### Exemplo:
```php
LgpdMask::maskCpf('123.456.789-00');
```
**Entrada**: `"123.456.789-00"`
**Saída**: `"123.***.***-**"`

### 3. `maskRg($rg)`
Mascarar um RG, exibindo apenas os três primeiros dígitos.
Mask an RG, displaying only the first three digits.
#### Exemplo:
```php
LgpdMask::maskRg('12345678-9');
```
**Entrada**: `"12345678-9"`
**Saída**: `"123*****-*"`

### 4. `maskEmail($email)`
Mascarar um e-mail, exibindo apenas os três primeiros caracteres do e-mail e o domínio final (.com ou .com.br).
Mask an email address, showing only the first three characters of the email and the final domain (.com or .com.br).
#### Exemplo:
```php
LgpdMask::maskEmail('exemplo-email@gmail.com');
```
**Entrada**: `"exemplo-email@gmail.com"`
**Saída**: `"exe*********@****.com"`

### 5. `maskPhone($phone)`
Mascarar um número de telefone, exibindo apenas os últimos quatro dígitos, preservando caracteres especiais como `()`, `.` e `-`.
Mask a phone number, showing only the last four digits, while preserving special characters like `()`, `.`, and `-`.
#### Exemplo:
```php
LgpdMask::maskPhone('(11) 98765-4321');
```
**Entrada**: `"(11) 98765-4321"`
**Saída**: `"(**) *****-4321"`

### 6. `maskDateOfBirth($birthDate)`
Mascarar uma data de nascimento, preservando os caracteres `/` ou `-`.
Mask a date of birth, while preserving `/` or `-` characters.
#### Exemplo:
```php
LgpdMask::maskDateOfBirth('15/08/1990');
```
**Entrada**: `"15/08/1990"`
**Saída**: `"**/**/****"`

## Uso

Veja o exemplo de uso abaixo no arquivo `index.php`.

## License

MIT

## Usage

See the usage example below in the `index.php` file.

## License

MIT