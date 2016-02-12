<?php
/* @var $this AutoEngineController */
/* @var $model AutoEngine */

$this->breadcrumbs=array(
	'Auto Engines'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AutoEngine', 'url'=>array('index')),
	array('label'=>'Create AutoEngine', 'url'=>array('create')),
	array('label'=>'Update AutoEngine', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AutoEngine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AutoEngine', 'url'=>array('admin')),
);
?>

<h1>View AutoEngine #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
