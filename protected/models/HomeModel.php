<?php

/**
 * This is the model class for table "Home".
 *
 * The followings are the available columns in table 'Home':
 * @property integer $id
 * @property string $title
 * @property string $productTitle
 * @property string $productContent
 * @property string $productImage
 * @property string $buyNowUrl
 * @property string $readMoreUrl
 */
class HomeModel extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return HomeModel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Home';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('productTitle, productContent, productImage, buyNowUrl, readMoreUrl', 'required'),
            array('id', 'numerical', 'integerOnly' => true),
            array('productTitle', 'length', 'max' => 30),
            array('productContent', 'length', 'max' => 100),
            array('productImage', 'length', 'max' => 150),
            array('buyNowUrl, readMoreUrl', 'length', 'max' => 80),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, productTitle, productContent, productImage, buyNowUrl, readMoreUrl', 'safe', 'on' => 'search'),
        );
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
            'productTitle' => 'Product Title',
            'productContent' => 'Product Content',
            'productImage' => 'Product Image',
            'buyNowUrl' => 'Buy Now Url',
            'readMoreUrl' => 'Read More Url',
        );
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
        $criteria->compare('productTitle', $this->productTitle, true);
        $criteria->compare('productContent', $this->productContent, true);
        $criteria->compare('productImage', $this->productImage, true);
        $criteria->compare('buyNowUrl', $this->buyNowUrl, true);
        $criteria->compare('readMoreUrl', $this->readMoreUrl, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}