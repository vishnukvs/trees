<?php
/* @var $this PrecinctController */
/* @var $model Precinct */

$this->breadcrumbs=array(
	'Precincts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Precinct', 'url'=>array('index')),
	array('label'=>'Create Precinct', 'url'=>array('create')),
	array('label'=>'View Precinct', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Precinct', 'url'=>array('admin')),
);
?>

<h1>Update Precinct <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>