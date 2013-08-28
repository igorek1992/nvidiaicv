<?php

/**
 * This is the model class for table "LastNewsAndMovies".
 *
 * The followings are the available columns in table 'LastNewsAndMovies':
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $content
 * @property string $buttonName
 * @property string $buttonUrl
 * @property string $category
 */
class LastNewsAndMoviesModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LastNewsAndMoviesModel the static model class
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
		return 'LastNewsAndMovies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image, title, content, buttonName, buttonUrl, category', 'required'),
			array('title', 'length', 'max'=>100),
                        array('image','file','types'=>'jpg,png', 'on' => 'insert'),
                        array('image','file','types'=>'jpg,png','allowEmpty'=>true,'on' => 'update'),
			array('buttonName', 'length', 'max'=>30),
			array('buttonUrl, category', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, image, title, content, buttonName, buttonUrl, category', 'safe', 'on'=>'search'),
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
			'content' => 'Content',
			'buttonName' => 'Button Name',
			'buttonUrl' => 'Button Url',
			'category' => 'Category',
		);
	}
        
        public static function  getCategory()
    {
        return array(
            'Last News' => 'Last News',
            'movies' => 'Movies',
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
		$criteria->compare('content',$this->content,true);
		$criteria->compare('buttonName',$this->buttonName,true);
		$criteria->compare('buttonUrl',$this->buttonUrl,true);
		$criteria->compare('category',$this->category,true);

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
                    'image' => array('width' => '360', 'height' => '200', 'resize' =>false),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads/',
            )
        );
    }
}