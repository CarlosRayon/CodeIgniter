<?php

class Validates extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * validateName
     *
     * @param  string $name
     * @return boolean
     */
    public function validateName($name)
    {
        if (!isset($name) || $name == '') {
            return false;
        }
        return true;
    }

       
    /**
     * validateLastName
     *
     * @param  string $lastName
     * @return boolean
     */
    public function validateLastName($lastName)
    {
        if (!isset($lastName) || $lastName == '') {
            return false;
        }
        return true;
    }
    
    /**
     * validateEmail
     *
     * @param  string $email
     * @return boolean
     */
    public function validateEmail($email)
    {
        if (!isset($email) || !$this->isValidMail($email)) {
            return false;
        }
        return true;
    }
    
    /**
     * validatePhone
     *
     * @param  string $phone
     * @return boolean
     */
    public function validatePhone($phone)
    {
        if (!isset($phone) || !$this->isValidPhone($phone)) {
            return false;
        }
        return true;
    }

    /**
     * validateZipCode
     *
     * @param  int $zipcode
     * @return boolean
     */
    public function validateZipCode($zipCode)
    {
        if (!isset($zipCode) || !$this->isValidZipCode($zipCode)) {
            return false;
        }
        return true;
    }


    /**
     * isValidPhone Validate phone
     *
     * @param  int $tel
     * @return boolean
     */
    private function isValidPhone($phone)
    {

        if (!is_numeric($phone)) {
            return false;
        }
        if (!preg_match('/^[9|8|7|6]\d{8}$/', $phone)) {
            return false;
        }

        return true;
    }

    /**
     * isValidPhone Validate zipcode
     *
     * @param  int $tel
     * @return boolean
     */
    private function isValidZipCode($zipCode)
    {

        if (!is_numeric($zipCode)) {
            return false;
        }
        if (!preg_match('/\d{5}$/', $zipCode)) {
            return false;
        }

        return true;
    }

    /**
     * isValidMail Validate email
     *
     * @param  mixed $mail
     *
     * @return void
     */
    private function isValidMail($mail)
    {

        if (trim($mail) != '') {

            // Remove all illegal characters from email
            $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);

            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
        }

        return true;
    }
}
