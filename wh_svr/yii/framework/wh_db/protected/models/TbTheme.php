<?php

/**
 * This is the model class for table "tbTheme".
 *
 * The followings are the available columns in table 'tbTheme':
 * @property string $iThemeID
 * @property string $szName
 * @property string $szDesc
 * @property string $iRouteNum
 * @property integer $iPrority
 * @property string $dtDate
 * @property string $dtUpdatetime
 */
class TbTheme extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbTheme';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iPrority', 'numerical', 'integerOnly'=>true),
			array('szName', 'length', 'max'=>128),
			array('szDesc', 'length', 'max'=>1024),
			array('iRouteNum', 'length', 'max'=>10),
			array('dtDate, dtUpdatetime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iThemeID, szName, szDesc, iRouteNum, iPrority, dtDate, dtUpdatetime', 'safe', 'on'=>'search'),
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
			'iThemeID' => '主题id',
			'szName' => '主题名称',
			'szDesc' => '主题描述',
			'iRouteNum' => '线路条数',
			'iPrority' => '优先级',
			'dtDate' => '主题投放时间',
			'dtUpdatetime' => '更新时间',
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

		$criteria->compare('iThemeID',$this->iThemeID,true);
		$criteria->compare('szName',$this->szName,true);
		$criteria->compare('szDesc',$this->szDesc,true);
		$criteria->compare('iRouteNum',$this->iRouteNum,true);
		$criteria->compare('iPrority',$this->iPrority);
		$criteria->compare('dtDate',$this->dtDate,true);
		$criteria->compare('dtUpdatetime',$this->dtUpdatetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbTheme the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
