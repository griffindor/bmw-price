<?php
/* @var $this AutoColorController */
/* @var $model AutoColor */

$this->breadcrumbs=array(
	'Auto Colors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AutoColor', 'url'=>array('index')),
	array('label'=>'Create AutoColor', 'url'=>array('create')),
	array('label'=>'View AutoColor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AutoColor', 'url'=>array('admin')),
);
?>

<h1>Update AutoColor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>