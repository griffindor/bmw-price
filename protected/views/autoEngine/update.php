<?php
/* @var $this AutoEngineController */
/* @var $model AutoEngine */

$this->breadcrumbs=array(
	'Auto Engines'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AutoEngine', 'url'=>array('index')),
	array('label'=>'Create AutoEngine', 'url'=>array('create')),
	array('label'=>'View AutoEngine', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AutoEngine', 'url'=>array('admin')),
);
?>

<h1>Update AutoEngine <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>