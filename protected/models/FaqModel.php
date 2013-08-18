<?php

/**
 * This is the model class for table "Faq".
 *
 * The followings are the available columns in table 'Faq':
 * @property integer $id
 * @property string $answer
 * @property string $question
 * @property string $faqId
 */
class FaqModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FaqModel the static model class
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
		return 'Faq';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('answer, question, faqId,faqHrefId', 'required'),
			array('answer', 'length', 'max'=>100),
			array('question', 'length', 'max'=>200),
			array('faqId,faqHrefId', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, answer, question, faqId,faqHrefId', 'safe', 'on'=>'search'),
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
			'answer' => 'Answer',
			'question' => 'Question',
			'faqId' => 'Faq ID',
                        'faqHrefId' => 'Faq Href ID'
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
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('faqId',$this->faqId,true);
                $criteria->compare('faqHrefId',$this->faqHrefId,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}