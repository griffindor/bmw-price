<?php
/* @var $this AutoColorController */
/* @var $model AutoColor */

$this->breadcrumbs=array(
	'Auto Colors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AutoColor', 'url'=>array('index')),
	array('label'=>'Manage AutoColor', 'url'=>array('admin')),
);
?>

<h1>Create AutoColor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>