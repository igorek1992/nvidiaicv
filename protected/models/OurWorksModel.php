<?php

/**
 * This is the model class for table "OurWorks".
 *
 * The followings are the available columns in table 'OurWorks':
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $imageContent
 * @property string $content
 * @property string $href
 */
class OurWorksModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OurWorksModel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'OurWorks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title,content, href,hrefId', 'required'),
                        array('image,imageContent', 'required', 'on' => 'insert'),
			array('image, imageContent, content', 'length', 'max'=>1000),
			array('title', 'length', 'max'=>30),
			array('href', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, image, title, imageContent, content, href,hrefId', 'safe', 'on'=>'search'),
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
			'image' => 'Image',
			'title' => 'Title',
			'imageContent' => 'Image Content',
			'content' => 'Content',
			'href' => 'Href',
                        'hrefId' => 'Href Id,Example: portfolioModal1',
		);
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
		$criteria->compare('image',$this->image,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('imageContent',$this->imageContent,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('href',$this->href,true);
                $criteria->compare('hrefId',$this->hrefId,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function behaviors()
    {
        return array(
            'UploadBehavior' => array(
                'class' => 'application.models.behaviors.UploadImageBehavior',
                'imageAttrs' => array(
                    'image' => array('width' => '900', 'height' => '300', 'resize' =>false),
                    'imageContent' => array('width' => '900', 'height' => '300', 'resize' =>false),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads/',
            )
        );
    }
}