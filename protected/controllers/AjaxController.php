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
                'deny',
                'actions'=>array('findUserByEmail', 'assignTest', 'unblockPoints', 'takeTicket', 'assignTicket'),
                'users' => array('?'),
            ),
        );
    }

    public function actionGetStateOptions($country)
    {
        
        if ($states = StateModel::getStatesByCountry($country))
        {
            echo CHtml::tag('option', array('value' => ''), CHtml::encode(' - Select State - '));
            foreach ($states as $id => $state)
            {
                echo CHtml::tag('option', array('value' => $id), CHtml::encode($state));
            }
        }
        else
        {
            echo CHtml::tag('option', array('value' => ''), 'No states found');
        }
    }

    
}