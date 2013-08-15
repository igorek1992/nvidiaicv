<?php
return array(
    'shopper' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => '',
        'bizRule' => 'return (!Yii::app()->user->isGuest && Yii::app()->user->isShopper);',
        'data' => ''
    ),
    
    'admin' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => '',
        'bizRule' => 'return (!Yii::app()->user->isGuest && Yii::app()->user->isAdmin);',
        'data' => ''
    ),
    
);
?>