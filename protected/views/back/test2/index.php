<?php

$this->breadcrumbs = array(
	Test2::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Test2::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Test2::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Test2::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 