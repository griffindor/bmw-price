<?php
/* @var $this AutoEngineController */
/* @var $model AutoEngine */

$this->breadcrumbs=array(
	'Auto Engines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AutoEngine', 'url'=>array('index')),
	array('label'=>'Manage AutoEngine', 'url'=>array('admin')),
);
?>

<h1>Create AutoEngine</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>