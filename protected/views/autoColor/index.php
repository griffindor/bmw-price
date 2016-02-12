<?php
/* @var $this AutoColorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auto Colors',
);

$this->menu=array(
	array('label'=>'Create AutoColor', 'url'=>array('create')),
	array('label'=>'Manage AutoColor', 'url'=>array('admin')),
);
?>

<h1>Auto Colors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
