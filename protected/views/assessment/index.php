<?php
/* @var $this AssessmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Assessments',
);

$this->menu=array(
	array('label'=>'Create Assessment', 'url'=>array('create')),
	array('label'=>'Manage Assessment', 'url'=>array('admin')),
);
?>

<h1>Assessments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
