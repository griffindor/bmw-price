<?php
/* @var $this AutoSeriesController */
/* @var $model AutoSeries */

$this->breadcrumbs=array(
	'Auto Series'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AutoSeries', 'url'=>array('index')),
	array('label'=>'Create AutoSeries', 'url'=>array('create')),
	array('label'=>'View AutoSeries', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AutoSeries', 'url'=>array('admin')),
);
?>

<h1>Update AutoSeries <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>