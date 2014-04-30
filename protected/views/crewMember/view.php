<?php
/* @var $this CrewMemberController */
/* @var $model CrewMember */

$this->breadcrumbs=array(
	'Crew Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CrewMember', 'url'=>array('index')),
	array('label'=>'Create CrewMember', 'url'=>array('create')),
	array('label'=>'Update CrewMember', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CrewMember', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CrewMember', 'url'=>array('admin')),
);
?>

<h1>View CrewMember #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'first_name',
		'last_name',
		'create_user',
		'create_time',
		'update_user',
		'update_time',
	),
)); ?>
