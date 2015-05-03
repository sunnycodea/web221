<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=tbTheme" >1、主题数据表管理</a>
</p>
<p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=tbRoute" >2、主题数据表管理</a>
</p>
<p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=tbDaysInfo" >3、主题数据表管理</a>
</p>
