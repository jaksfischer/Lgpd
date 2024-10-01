<?php

namespace JaksonFischer\LgpdMask;
/**
 * @author Jakson Fischer <jakson.jfischer@gmail.com>
 * This class only formats user data; it is not used for validating documents or other purposes.
 * LGPD (Lei Geral de Proteção de Dados) is the Brazilian equivalent of the GDPR (General Data Protection Regulation).
 * See more at https://www.gov.br/esporte/pt-br/acesso-a-informacao/lgpd.
 * This class only contains masks for personal data.
 */

class LgpdMask
{
    /**
     * Mask user name
     * @param mixed $fullName
     * @return string
     */
    public static function maskName($fullName)
    {
        $nameParts = explode(' ', $fullName);

        $firstName = array_shift($nameParts);

        $masked = '';
        foreach($nameParts as $part) {
            $masked .= ' ' . str_repeat('*', strlen($part));
        }

        return $firstName . $masked;
    }

    /**
     * Mask user CPF
     * @param mixed $cpf
     * @return string
     */
    public static function maskCpf($cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        $firstDigits = substr($cpf, 0, 3);

        $masked = $firstDigits . '.***.***-**';

        return $masked;
    }

    /**
     * Mask user RG
     * @param mixed $rg
     * @return string
     */
    public static function maskRg($rg)
    {
        $rg = preg_replace('/[^0-9.-]/', '', $rg);

        $firstDigits = substr($rg, 0, 3);

        $masked = preg_replace('/[0-9]/', '*', substr($rg, 3));

        return $firstDigits . $masked;
    }

    /**
     * Mask user Email
     * @param mixed $email
     * @return string
     */
    public static function maskEmail($email)
    {
        list($user, $domain) = explode('@', $email);

        $firstThree = substr($user, 0, 3);

        $maskedUser = preg_replace('/[a-zA-Z0-9]/', '*', substr($user, 3));

        if (strpos($domain, '.com.br') !== false) {
            $maskedDomain = '****.com.br';
        } else {
            $maskedDomain = '****.com';
        }

        return $firstThree . $maskedUser . '@' . $maskedDomain;
    }

    /**
     * Mask user Phone number
     * @param mixed $phone
     * @return array|string|null
     */
    public static function maskPhone($phone, $numCharsAppear = NULL)
    {
        $cleanPhone = preg_replace('/[^0-9\(\)\.\-\s]/', '', $phone);

        $maskedPhone = preg_replace('/[0-9](?=.*[0-9]{4})/', '*', $cleanPhone);

        return $maskedPhone;
    }

    /**
     * Mask user Date of Birth
     * @param mixed $birthDate
     * @return array|string|null
     */
    public static function maskDateOfBirth($birthDate)
    {
        $maskedDate = preg_replace('/[0-9]/', '*', $birthDate);

        return $maskedDate;
    }
}
