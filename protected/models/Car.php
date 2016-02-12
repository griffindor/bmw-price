<?php

/**
 * This is the model class for table "car".
 *
 * The followings are the available columns in table 'car':
 * @property string $id
 * @property string $model_id
 * @property string $color_id
 * @property string $engine_id
 * @property string $package_id
 * @property string $price_euro
 * @property string $version
 * @property integer $sold
 * @property string $sold_dt
 * @property string $create_dt
 * @property string $price_upd_dt
 * @property integer $priority
 *
 * The followings are the available model relations:
 * @property AutoColor $color
 * @property AutoEngine $engine
 * @property AutoModel $model
 * @property AutoPackage $package
 */
class Car extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'car';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('model_id, color_id, engine_id, package_id, price_euro, version, create_dt, price_upd_dt, priority', 'required'),
			array('sold, priority', 'numerical', 'integerOnly'=>true),
			array('model_id', 'length', 'max'=>10),
			array('color_id, engine_id, package_id, price_euro, version', 'length', 'max'=>11),
			array('sold_dt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, model_id, color_id, engine_id, package_id, price_euro, version, sold, sold_dt, create_dt, price_upd_dt, priority', 'safe', 'on'=>'search'),
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
			'color' => array(self::BELONGS_TO, 'AutoColor', 'color_id'),
			'engine' => array(self::BELONGS_TO, 'AutoEngine', 'engine_id'),
			'model' => array(self::BELONGS_TO, 'AutoModel', 'model_id'),
			'package' => array(self::BELONGS_TO, 'AutoPackage', 'package_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'model_id' => 'Model',
			'color_id' => 'Color',
			'engine_id' => 'Engine',
			'package_id' => 'Package',
			'price_euro' => 'Price Euro',
			'version' => 'Version',
			'sold' => 'Sold',
			'sold_dt' => 'Sold Dt',
			'create_dt' => 'Create Dt',
			'price_upd_dt' => 'Price Upd Dt',
			'priority' => 'Priority',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('model_id',$this->model_id,true);
		$criteria->compare('color_id',$this->color_id,true);
		$criteria->compare('engine_id',$this->engine_id,true);
		$criteria->compare('package_id',$this->package_id,true);
		$criteria->compare('price_euro',$this->price_euro,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('sold',$this->sold);
		$criteria->compare('sold_dt',$this->sold_dt,true);
		$criteria->compare('create_dt',$this->create_dt,true);
		$criteria->compare('price_upd_dt',$this->price_upd_dt,true);
		$criteria->compare('priority',$this->priority);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Car the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
