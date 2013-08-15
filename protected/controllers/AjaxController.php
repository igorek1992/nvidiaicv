<?php

class AjaxController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'mainModeOnly + findUserByEmail, assignTest, unblockPoints, takeTicket, assignTicket'
        );
    }

    public function accessRules()
    {
        return array(
            array(
                'actions'=>array('LoadSubSpeciality'),
                'users' => array('?'),
            ),
        );
    }

   
    public function actionLoadSubSpeciality()
{
   $data=StateModel::model()->findAll('CountryID=:CountryID', 
   array(':CountryID'=>(int) $_POST['country']));
 
   $data=CHtml::listData($data,'ID','Name');
 
   foreach($data as $value=>$name)
   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
}

    

   

   
}