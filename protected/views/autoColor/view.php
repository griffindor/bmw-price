<?php
/* @var $this AutoColorController */
/* @var $model AutoColor */

$this->breadcrumbs=array(
	'Auto Colors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AutoColor', 'url'=>array('index')),
	array('label'=>'Create AutoColor', 'url'=>array('create')),
	array('label'=>'Update AutoColor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AutoColor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AutoColor', 'url'=>array('admin')),
);
?>

<h1>View AutoColor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
