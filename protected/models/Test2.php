<?php

Yii::import('application.models._base.BaseTest2');

class Test2 extends BaseTest2
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}