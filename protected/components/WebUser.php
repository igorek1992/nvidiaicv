<?php

include_once(Yii::app()->basePath . '/models/UsersModel.php');

class WebUser extends CWebUser
{

    public $isShopper = false;
    public $isAdmin = false;
    
    private $_model = null;

    /**
     * @var int
     */
    public $specialityID;

    public function init()
    {
        parent::init();

        $this->setUserType();
    }

    /**
     * Get's user model
     * @author Anna Nosova <its.lynx@gmail.com>
     *
     * @return object
     */
    public function getModel()
    {
        if (!$this->isGuest && $this->_model === null)
        {
            $this->_model = UsersModel::model()->findByPk($this->id);
        }
        return $this->_model;
    }

    /**
     * @author Anna Nosova <its.lynx@gmail.com>
     */
    private function setUserType()
    {
        if (!$this->isGuest)
        {
            switch ($this->type)
            {

                case UsersModel::USER_TYPE_ADMIN:
                    $this->isAdmin = true;
                    break;

                case UsersModel::USER_TYPE_SHOPPER:
                    $this->isShopper = true;
                    break;
            }
        }
    }

    /**
     * @param bool $fromCookie
     * @author Anna Nosova <its.lynx@gmail.com>
     */
    protected function afterLogin($fromCookie)
    {
        $this->setUserType();

//        UserShoppingCartModel::synchronizeCartWithDB($this->id);

        parent::afterLogin($fromCookie);
    }

}

?>