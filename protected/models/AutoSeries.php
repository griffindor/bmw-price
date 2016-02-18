<?php

/**
 * This is the model class for table "auto_series".
 *
 * The followings are the available columns in table 'auto_series':
 * @property string $id
 * @property string $name
 * @property string $priority
 */
class AutoSeries extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auto_series';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>255),
			array('priority', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, priority', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('priority',$this->priority,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AutoSeries the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function upPriority($id){
		$my_model = self::model()->findByPk($id);
		$my_old_priority = $my_model->priority;
		$prev_model = self::model()->findByAttributes(array('priority'=>$my_old_priority-1));
		$my_model->priority = $my_old_priority-1;
		$prev_model->priority = $my_old_priority;
		if($my_model->save()){
			if($prev_model->save()){
				return 'ok';
			}
		}
		return 'Что-то пошло не так.';
	}

	public static function downPriority($id){
		$my_model = self::model()->findByPk($id);
		$my_old_priority = $my_model->priority;
		$next_model = self::model()->findByAttributes(array('priority'=>$my_old_priority+1));
		$my_model->priority = $my_old_priority+1;
		$next_model->priority = $my_old_priority;
		if($my_model->save()){
			if($next_model->save()){
				return 'ok';
			}
		}
		return 'Что-то пошло не так.';
	}

	public static function updateName($id, $name){
		$model = self::model()->findByPk($id);
		if(!empty($model)){
			$model->name = $name;
			if($model->save())
			{
				return true;
			}
		}
		return false;
	}
}
