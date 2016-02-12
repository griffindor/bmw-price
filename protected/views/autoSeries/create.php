<?php
/* @var $this AutoSeriesController */
/* @var $model AutoSeries */

$this->breadcrumbs=array(
	'Auto Series'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AutoSeries', 'url'=>array('index')),
	array('label'=>'Manage AutoSeries', 'url'=>array('admin')),
);
?>

<h1>Create AutoSeries</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>