<?php

/**
 * This is the model class for table "Blog".
 *
 * The followings are the available columns in table 'Blog':
 * @property integer $id
 * @property integer $title
 * @property string $image
 * @property string $shirtDesc
 * @property string $fullDesc
 */
class BlogModel extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return BlogModel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Blog';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, image, shirtDesc, fullDesc,date', 'required'),
            array('title', 'length', 'max' => 100),
            array('date','dateValidator'),
            array('image', 'file', 'types' => 'jpg,png', 'on' => 'insert'),
            array('image', 'file', 'types' => 'jpg,png', 'allowEmpty' => true, 'on' => 'update'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, image, shirtDesc, fullDesc', 'safe', 'on' => 'search'),
        );
    }
    
    public function dateValidator(){
        $date = $this->date;
        $format = date("F j, Y, g:i a",$this->date);
        return $format;
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'shirtDesc' => 'Shirt Desc',
            'fullDesc' => 'Full Desc',
        );
    }

    public function getOlderId($id) {
        $olderId = BlogModel::model()->find(array(
            'condition' => 'id < :id',
            'order' => 'id DESC',
            "limit" => 1,
            'params' => array(':id' => $id)));
        $empty = "#";

        if (is_object($olderId)) {
            return $olderId->id;
        }

        if (empty($olderId)) {
            return $empty;
        }
    }
    
    public function getNewerId($id) {
        $olderId = BlogModel::model()->find(array(
            'condition' => 'id > :id',
            "limit" => 1,
            'params' => array(':id' => $id)));
        $empty = "#";

        if (is_object($olderId)) {
            return $olderId->id;
        }

        if (empty($olderId)) {
            return $empty;
        }
    }
    

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
//        $criteria->compare('title', $this->title);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('shirtDesc', $this->shirtDesc, true);
        $criteria->compare('fullDesc', $this->fullDesc, true);
        $criteria->compare('date', $this->date, true);
        $this->getDbCriteria()->mergeWith(array(
        'condition'=>"title LIKE :title",
        'params'=>array(':title'=>"%$this->title%"),
         )); 

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 3,
            ),
        ));
    }

    public function behaviors() {
        return array(
            'UploadBehavior' => array(
                'class' => 'application.models.behaviors.UploadImageBehavior',
                'imageAttrs' => array(
                    'image' => array('width' => '360', 'height' => '200', 'resize' => false),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads/',
            )
        );
    }

}