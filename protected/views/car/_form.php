<?php
/* @var $this CarController */
/* @var $model Car */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'car-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'model_id'); ?>
		<?php echo $form->textField($model,'model_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'model_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color_id'); ?>
		<?php echo $form->textField($model,'color_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'color_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'engine_id'); ?>
		<?php echo $form->textField($model,'engine_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'engine_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_id'); ?>
		<?php echo $form->textField($model,'package_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_euro'); ?>
		<?php echo $form->textField($model,'price_euro',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'price_euro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sold'); ?>
		<?php echo $form->textField($model,'sold'); ?>
		<?php echo $form->error($model,'sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sold_dt'); ?>
		<?php echo $form->textField($model,'sold_dt'); ?>
		<?php echo $form->error($model,'sold_dt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_dt'); ?>
		<?php echo $form->textField($model,'create_dt'); ?>
		<?php echo $form->error($model,'create_dt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_upd_dt'); ?>
		<?php echo $form->textField($model,'price_upd_dt'); ?>
		<?php echo $form->error($model,'price_upd_dt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->