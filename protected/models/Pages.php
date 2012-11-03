<?php

/**
 * This is the model class for table "Pages".
 *
 * The followings are the available columns in table 'Pages':
 * @property integer $idPages
 * @property integer $lft
 * @property integer $rgt
 * @property integer $level
 * @property integer $type
 * @property string $name
 * @property string $content
 * @property string $title
 * @property integer $price
 * @property integer $Vendors_idVendors
 * @property integer $Images_idImages
 *
 * The followings are the available model relations:
 * @property Vendors $vendorsIdVendors
 * @property Images $imagesIdImages
 */
class Pages extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pages the static model class
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
		return 'Pages';
	}
	
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lft, rgt, level, Vendors_idVendors, Images_idImages', 'required'),
			array('lft, rgt, level, type, price, Vendors_idVendors, Images_idImages', 'numerical', 'integerOnly'=>true),
			array('name, title', 'length', 'max'=>330),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPages, lft, rgt, level, type, name, content, title, price, Vendors_idVendors, Images_idImages', 'safe', 'on'=>'search'),
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
			'vendorsIdVendors' => array(self::BELONGS_TO, 'Vendors', 'Vendors_idVendors'),
			'imagesIdImages' => array(self::BELONGS_TO, 'Images', 'Images_idImages'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPages' => 'Id Pages',
			'lft' => 'Lft',
			'rgt' => 'Rgt',
			'level' => 'Level',
			'type' => 'Type',
			'name' => 'Name',
			'content' => 'Content',
			'title' => 'Title',
			'price' => 'Price',
			'Vendors_idVendors' => 'Vendors Id Vendors',
			'Images_idImages' => 'Images Id Images',
		);
	}
	// Подключаем nested_sets_behavior
	
	public function behaviors()
	{
	    return array(
	        'nestedSetBehavior'=>array(
	            'class'=>'ext.yiiext.behaviors.model.trees.NestedSetBehavior',
	            'leftAttribute'=>'lft',
	            'rightAttribute'=>'rgt',
	            'levelAttribute'=>'level',
	        ),
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

		$criteria->compare('idPages',$this->idPages);
		$criteria->compare('lft',$this->lft);
		$criteria->compare('rgt',$this->rgt);
		$criteria->compare('level',$this->level);
		$criteria->compare('type',$this->type);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('Vendors_idVendors',$this->Vendors_idVendors);
		$criteria->compare('Images_idImages',$this->Images_idImages);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}