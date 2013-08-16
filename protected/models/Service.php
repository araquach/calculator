<?php

/**
 * This is the model class for table "service".
 *
 * The followings are the available columns in table 'service':
 * @property integer $id
 * @property string $iris_code
 * @property string $description
 * @property integer $time
 * @property string $offset
 */
class Service extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Service the static model class
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
		return 'service';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iris_code, description, time, offset', 'required'),
			array('time', 'numerical', 'integerOnly'=>true),
			array('iris_code', 'length', 'max'=>10),
			array('description', 'length', 'max'=>256),
			array('offset', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, iris_code, description, time, offset', 'safe', 'on'=>'search'),
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
			'iris_code' => 'Iris Code',
			'description' => 'Description',
			'time' => 'Time',
			'offset' => 'Offset',
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
		$criteria->compare('iris_code',$this->iris_code,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('time',$this->time);
		$criteria->compare('offset',$this->offset,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getCalculatedPrice($time, $employeeCost, $offset) {
		
		$price = ($time * $employeeCost) + $offset;
		
		return $price;
	}

}