<?php
/* @var $this TbThemeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Themes',
);

$this->menu=array(
	array('label'=>'Create TbTheme', 'url'=>array('create')),
	array('label'=>'Manage TbTheme', 'url'=>array('admin')),
);
?>

<h1>Tb Themes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
