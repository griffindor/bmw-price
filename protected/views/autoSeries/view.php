<?php
/* @var $this AutoSeriesController */
/* @var $model AutoSeries */

$this->breadcrumbs=array(
	'Auto Series'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AutoSeries', 'url'=>array('index')),
	array('label'=>'Create AutoSeries', 'url'=>array('create')),
	array('label'=>'Update AutoSeries', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AutoSeries', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AutoSeries', 'url'=>array('admin')),
);
?>

<h1>View AutoSeries #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'priority',
		'img',
	),
)); ?>
