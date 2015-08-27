<?php

/**
 * This is the model base class for the table "test_2".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Test2".
 *
 * Columns in table "test_2" available as properties of the model,
 * followed by relations of table "test_2" available as properties of the model.
 *
 * @property integer $id
 * @property integer $test_id
 * @property string $name
 *
 * @property Test $test
 */
abstract class BaseTest2 extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'test_2';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Test2|Test2s', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name', 'required'),
			array('test_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>10),
			array('test_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, test_id, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'test' => array(self::BELONGS_TO, 'Test', 'test_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'test_id' => null,
			'name' => Yii::t('app', 'Name'),
			'test' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('test_id', $this->test_id);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}