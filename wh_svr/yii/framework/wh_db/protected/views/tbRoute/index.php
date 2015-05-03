<?php
/* @var $this TbRouteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Routes',
);

$this->menu=array(
	array('label'=>'Create TbRoute', 'url'=>array('create')),
	array('label'=>'Manage TbRoute', 'url'=>array('admin')),
);
?>

<h1>Tb Routes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
