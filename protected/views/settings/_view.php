<?php
/* @var $this SettingsController */
/* @var $data Settings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_path_dev_local')); ?>:</b>
	<?php echo CHtml::encode($data->img_path_dev_local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_path_remote')); ?>:</b>
	<?php echo CHtml::encode($data->img_path_remote); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_path_site')); ?>:</b>
	<?php echo CHtml::encode($data->img_path_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mode')); ?>:</b>
	<?php echo CHtml::encode($data->mode); ?>
	<br />


</div>