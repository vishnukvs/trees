<?php
/* @var $this CrewMemberController */
/* @var $model CrewMember */

$this->breadcrumbs=array(
	'Crew Members'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CrewMember', 'url'=>array('index')),
	array('label'=>'Create CrewMember', 'url'=>array('create')),
	array('label'=>'View CrewMember', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CrewMember', 'url'=>array('admin')),
);
?>

<h1>Update CrewMember <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>