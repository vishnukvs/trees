<?php
/* @var $this CrewMemberController */
/* @var $model CrewMember */

$this->breadcrumbs=array(
	'Crew Members'=>array('index'),
	'Create',
);


?>

<h1>Create CrewMember</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>