<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UpdatePasswordForm extends CFormModel
{

    public $password;
    public $username;
    public $confirm;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('password, confirm,username', 'required'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'password'=>'Your new password',
            'confirm'=>'Please confirm password',
            'username'=>'Your Login',
            
        );
    }

   
    

    

}
