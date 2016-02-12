<?php
/* @var $this AutoPackageController */
/* @var $model AutoPackage */

$this->breadcrumbs=array(
	'Auto Packages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AutoPackage', 'url'=>array('index')),
	array('label'=>'Manage AutoPackage', 'url'=>array('admin')),
);
?>

<h1>Create AutoPackage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>