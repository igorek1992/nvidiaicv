<?php

/**
 * This is the model class for table "Users".
 *
 * The followings are the available columns in table 'Users':
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $country
 * @property string $city
 * @property string $email
 * @property string $type
 * @property string $password
 */
class UsersModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UsersModel the static model class
	 */
        public $confirm;
        
        const USER_TYPE_ADMIN = 'admin';
        const USER_TYPE_SHOPPER = 'shopper';

    /**
     * @var array User types
     */
    public static $userTypes = array(
        self::USER_TYPE_ADMIN => 'Admin',
        self::USER_TYPE_SHOPPER => 'Shopper',
    );
    
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstName, lastName, country, city, email,password,confirm,username', 'required'),
			array('firstName, lastName,username', 'length', 'max'=>50),
			array('country', 'length', 'max'=>40),
			array('email', 'length', 'max'=>60),
                        array('email', 'email', 'message'=>'Email is not valid'),
			array('type', 'length', 'max'=>20),
			array('password,confirm', 'length', 'max'=>120),
                        array('password', 'match', 'pattern' => '((?=.*\\d)(?=.*[a-z]).{4,20})', 'message' => 'Password must have numbers and letters and length at least 4 characters and maximum of 20'),
                        array('password', 'compare', 'compareAttribute'=>'confirm','message'=>'Confirm Password not equal Password'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstName, lastName, country, city, email, type, password, confirm,username', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'firstName' => 'First Name',
			'lastName' => 'Last Name',
			'country' => 'Country',
			'city' => 'City',
			'email' => 'Email',
                        'username' =>'Username',
			'type' => 'Type',
			'password' => 'Password',
		);
	}
        
          protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->type = self::USER_TYPE_SHOPPER;
                $newPassword =  utf8_encode( crypt($this->password) );
                $this->password = $newPassword;
            }
            return true;
        }
        else
            return false;
    }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('firstName',$this->firstName,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('email',$this->email,true);
                $criteria->compare('username',$this->email,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
       
}