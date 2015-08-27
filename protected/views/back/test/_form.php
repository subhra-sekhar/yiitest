<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'test-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model, 'order'); ?>
		<?php echo $form->error($model,'order'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'slug'); ?>
		<?php echo $form->textField($model, 'slug', array('maxlength' => 10)); ?>
		<?php echo $form->error($model,'slug'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('test2s')); ?></label>
		<?php echo $form->checkBoxList($model, 'test2s', GxHtml::encodeEx(GxHtml::listDataEx(Test2::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->