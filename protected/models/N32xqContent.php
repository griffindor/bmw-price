<?php

/**
 * This is the model class for table "n32xq_content".
 *
 * The followings are the available columns in table 'n32xq_content':
 * @property string $id
 * @property string $asset_id
 * @property string $title
 * @property string $alias
 * @property string $introtext
 * @property string $fulltext
 * @property integer $state
 * @property string $catid
 * @property string $created
 * @property string $created_by
 * @property string $created_by_alias
 * @property string $modified
 * @property string $modified_by
 * @property string $checked_out
 * @property string $checked_out_time
 * @property string $publish_up
 * @property string $publish_down
 * @property string $images
 * @property string $urls
 * @property string $attribs
 * @property string $version
 * @property integer $ordering
 * @property string $metakey
 * @property string $metadesc
 * @property string $access
 * @property string $hits
 * @property string $metadata
 * @property integer $featured
 * @property string $language
 * @property string $xreference
 */
class N32xqContent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'n32xq_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('introtext, fulltext, images, urls, attribs, metakey, metadesc, metadata, language, xreference', 'required'),
			array('state, ordering, featured', 'numerical', 'integerOnly'=>true),
			array('asset_id, catid, created_by, modified_by, checked_out, version, access, hits', 'length', 'max'=>10),
			array('title, alias, created_by_alias', 'length', 'max'=>255),
			array('attribs', 'length', 'max'=>5120),
			array('language', 'length', 'max'=>7),
			array('xreference', 'length', 'max'=>50),
			array('created, modified, checked_out_time, publish_up, publish_down', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, asset_id, title, alias, introtext, fulltext, state, catid, created, created_by, created_by_alias, modified, modified_by, checked_out, checked_out_time, publish_up, publish_down, images, urls, attribs, version, ordering, metakey, metadesc, access, hits, metadata, featured, language, xreference', 'safe', 'on'=>'search'),
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
			'asset_id' => 'Asset',
			'title' => 'Title',
			'alias' => 'Alias',
			'introtext' => 'Introtext',
			'fulltext' => 'Fulltext',
			'state' => 'State',
			'catid' => 'Catid',
			'created' => 'Created',
			'created_by' => 'Created By',
			'created_by_alias' => 'Created By Alias',
			'modified' => 'Modified',
			'modified_by' => 'Modified By',
			'checked_out' => 'Checked Out',
			'checked_out_time' => 'Checked Out Time',
			'publish_up' => 'Publish Up',
			'publish_down' => 'Publish Down',
			'images' => 'Images',
			'urls' => 'Urls',
			'attribs' => 'Attribs',
			'version' => 'Version',
			'ordering' => 'Ordering',
			'metakey' => 'Metakey',
			'metadesc' => 'Metadesc',
			'access' => 'Access',
			'hits' => 'Hits',
			'metadata' => 'Metadata',
			'featured' => 'Featured',
			'language' => 'Language',
			'xreference' => 'Xreference',
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
		$criteria->compare('asset_id',$this->asset_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('introtext',$this->introtext,true);
		$criteria->compare('fulltext',$this->fulltext,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('catid',$this->catid,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_by_alias',$this->created_by_alias,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('checked_out',$this->checked_out,true);
		$criteria->compare('checked_out_time',$this->checked_out_time,true);
		$criteria->compare('publish_up',$this->publish_up,true);
		$criteria->compare('publish_down',$this->publish_down,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('urls',$this->urls,true);
		$criteria->compare('attribs',$this->attribs,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('ordering',$this->ordering);
		$criteria->compare('metakey',$this->metakey,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('access',$this->access,true);
		$criteria->compare('hits',$this->hits,true);
		$criteria->compare('metadata',$this->metadata,true);
		$criteria->compare('featured',$this->featured);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('xreference',$this->xreference,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return N32xqContent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
