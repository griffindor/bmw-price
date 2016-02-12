<?php
/* @var $this AutoModelController */
/* @var $model AutoModel */

$this->breadcrumbs=array(
	'Auto Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AutoModel', 'url'=>array('index')),
	array('label'=>'Manage AutoModel', 'url'=>array('admin')),
);
?>

<h1>Create AutoModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>