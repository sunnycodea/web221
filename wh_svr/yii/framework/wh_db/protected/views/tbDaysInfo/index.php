<?php
/* @var $this TbDaysInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Days Infos',
);

$this->menu=array(
	array('label'=>'Create TbDaysInfo', 'url'=>array('create')),
	array('label'=>'Manage TbDaysInfo', 'url'=>array('admin')),
);
?>

<h1>Tb Days Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
