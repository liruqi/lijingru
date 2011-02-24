<?php

/**
 * This is the model class for table "ljr_verycd".
 *
 * The followings are the available columns in table 'ljr_verycd':
 * @property integer $verycdid
 * @property string $title
 * @property string $status
 * @property string $brief
 * @property string $pubtime
 * @property string $updtime
 * @property string $category1
 * @property string $category2
 * @property string $ed2k
 * @property string $content
 */
class Verycd extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Verycd the static model class
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
		return 'ljr_verycd';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, status, brief, pubtime, updtime, category1, category2, ed2k, content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('verycdid, title, status, brief, pubtime, updtime, category1, category2, ed2k, content', 'safe', 'on'=>'search'),
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
			'verycdid' => '资源ID',
			'title' => '标题',
			'status' => 'Status',
			'brief' => '简介',
			'pubtime' => '发布时间',
			'updtime' => '更新时间',
			'category1' => 'Category1',
			'category2' => 'Category2',
			'ed2k' => 'Ed2k',
			'content' => 'Content',
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

		$criteria->compare('verycdid',$this->verycdid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('brief',$this->brief,true);
		$criteria->compare('pubtime',$this->pubtime,true);
		$criteria->compare('updtime',$this->updtime,true);
		$criteria->compare('category1',$this->category1,true);
		$criteria->compare('category2',$this->category2,true);
		$criteria->compare('ed2k',$this->ed2k,true);
		$criteria->compare('content',$this->content,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
