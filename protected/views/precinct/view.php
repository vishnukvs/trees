<?php
/* @var $this PrecinctController */
/* @var $model Precinct */

$this->breadcrumbs=array(
	'Precincts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Precinct', 'url'=>array('index')),
	array('label'=>'Create Precinct', 'url'=>array('create')),
	array('label'=>'Update Precinct', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Precinct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Precinct', 'url'=>array('admin')),
);
?>

<h1>View Precinct #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'create_user',
		'create_time',
		'update_user',
		'update_time',
	),
)); ?>
