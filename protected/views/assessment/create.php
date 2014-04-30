<?php
/* @var $this AssessmentController */
/* @var $model Assessment */

$this->breadcrumbs=array(
	'Assessments'=>array('index'),
	'Create',
);


?>

<h1>Create Assessment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>