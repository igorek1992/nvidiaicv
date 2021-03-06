<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ForgotForm extends CFormModel
{

    public $firstname;
    public $lastname;
    public $login;
    public $email;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('firstname, lastname,login,email', 'required'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'firstname'=>'First Name',
            'lastname'=>'Last Name',
            'login'=>'Your Login',
            'email'=>'Email',
        );
    }

   
    

    

}
