<?php

class Pages extends CActiveRecord
{
   // public $type = '1';
    public $Vendors_idVendors = '1';
    public $Images_idImages = '1';
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    public function tableName()
    {
        return 'Pages';
    }
   
    public function behaviors()
    {
        return array(
            'nestedSetBehavior'=>array(
                'class'=>'ext.NestedSets.NestedSetBehavior',
                'leftAttribute'=>'lft',
                'rightAttribute'=>'rgt',
                'levelAttribute'=>'level',
            ),
        );
    }

    
    public function rules()
    {
        return array(
            array('name','required'),
            array('type, name, content, title, price', 'default')
        );
    }
    
	public function attributeLabels()
	{
		return array(
			'name' => 'Name',
			'content' => 'Content',
            'title' => 'Title',
            'type' => 'Type',
            'price' => 'Price',
		);
	}
    
    public function show()
    {
        
    }
    
}
