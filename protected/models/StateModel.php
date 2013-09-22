<?php

/**
 * This is the model class for table "State".
 *
 * The followings are the available columns in table 'State':
 * @property integer $ID
 * @property integer $CountryID
 * @property string $Name
 * @property integer $Rank
 * @property integer $IsTaxable
 */
class StateModel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StateModel the static model class
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
		return 'State';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CountryID, Name', 'required'),
			array('CountryID, Rank, IsTaxable', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, CountryID, Name, Rank, IsTaxable', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'CountryID' => 'Country',
			'Name' => 'Name',
			'Rank' => 'Rank',
			'IsTaxable' => 'Is Taxable',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('CountryID',$this->CountryID);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Rank',$this->Rank);
		$criteria->compare('IsTaxable',$this->IsTaxable);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public static function getStatesByCountry($CountryID =0)
	{
		$states = array();
		$criteria=new CDbCriteria;
		$criteria->addCondition('CountryID = :CountryID');
		$criteria->params = array(':CountryID' => (int) $CountryID);
		$criteria->order = 'Rank, Name';
		if ($models = self::model()->findAll($criteria))
		{
			foreach ($models as $model)
			{
				$states[$model->ID] = $model->Name;
			}
		}
		return $states;
	}
}