<?php
/* @var $this AutoModelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Auto Models',
);

$this->menu=array(
	array('label'=>'Create AutoModel', 'url'=>array('create')),
	array('label'=>'Manage AutoModel', 'url'=>array('admin')),
);
?>

<h1>Auto Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
