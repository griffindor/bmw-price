<?php
/* @var $this AutoPackageController */
/* @var $model AutoPackage */

$this->breadcrumbs=array(
	'Auto Packages'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AutoPackage', 'url'=>array('index')),
	array('label'=>'Create AutoPackage', 'url'=>array('create')),
	array('label'=>'View AutoPackage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AutoPackage', 'url'=>array('admin')),
);
?>

<h1>Update AutoPackage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>