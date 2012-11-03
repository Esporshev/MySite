<?php

/**
 * This is the model class for table "Vendors".
 *
 * The followings are the available columns in table 'Vendors':
 * @property integer $idVendors
 * @property string $Name
 * @property string $Country
 *
 * The followings are the available model relations:
 * @property Pages[] $pages
 */
class Vendors extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vendors the static model class
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
		return 'Vendors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name', 'required'),
			array('Name, Country', 'length', 'max'=>330),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idVendors, Name, Country', 'safe', 'on'=>'search'),
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
			'pages' => array(self::HAS_MANY, 'Pages', 'Vendors_idVendors'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVendors' => 'Id Vendors',
			'Name' => 'Name',
			'Country' => 'Country',
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

		$criteria->compare('idVendors',$this->idVendors);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Country',$this->Country,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}