<?php
/* @var $this AutoPackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auto Packages',
);

$this->menu=array(
	array('label'=>'Create AutoPackage', 'url'=>array('create')),
	array('label'=>'Manage AutoPackage', 'url'=>array('admin')),
);
?>

<h1>Auto Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
