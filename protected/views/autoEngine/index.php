<?php
/* @var $this AutoEngineController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auto Engines',
);

$this->menu=array(
	array('label'=>'Create AutoEngine', 'url'=>array('create')),
	array('label'=>'Manage AutoEngine', 'url'=>array('admin')),
);
?>

<h1>Auto Engines</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
