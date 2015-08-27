<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'test2-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'test_id'); ?>
		<?php echo $form->dropDownList($model, 'test_id', GxHtml::listDataEx(Test::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'test_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->