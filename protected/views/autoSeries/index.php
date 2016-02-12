<?php
/* @var $this AutoSeriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auto Series',
);

$this->menu=array(
	array('label'=>'Create AutoSeries', 'url'=>array('create')),
	array('label'=>'Manage AutoSeries', 'url'=>array('admin')),
);
?>

<h1>Auto Series</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
