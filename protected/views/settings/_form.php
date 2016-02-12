<?php
/* @var $this SettingsController */
/* @var $model Settings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'img_path_dev_local'); ?>
		<?php echo $form->textField($model,'img_path_dev_local',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_path_dev_local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_path_remote'); ?>
		<?php echo $form->textField($model,'img_path_remote',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_path_remote'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_path_site'); ?>
		<?php echo $form->textField($model,'img_path_site',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'img_path_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mode'); ?>
		<?php echo $form->textField($model,'mode'); ?>
		<?php echo $form->error($model,'mode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->