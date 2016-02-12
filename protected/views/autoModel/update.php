<?php
/* @var $this AutoModelController */
/* @var $model AutoModel */

$this->breadcrumbs=array(
	'Auto Models'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AutoModel', 'url'=>array('index')),
	array('label'=>'Create AutoModel', 'url'=>array('create')),
	array('label'=>'View AutoModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AutoModel', 'url'=>array('admin')),
);
?>

<h1>Update AutoModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>