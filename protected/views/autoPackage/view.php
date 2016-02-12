<?php
/* @var $this AutoPackageController */
/* @var $model AutoPackage */

$this->breadcrumbs=array(
	'Auto Packages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AutoPackage', 'url'=>array('index')),
	array('label'=>'Create AutoPackage', 'url'=>array('create')),
	array('label'=>'Update AutoPackage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AutoPackage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AutoPackage', 'url'=>array('admin')),
);
?>

<h1>View AutoPackage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
