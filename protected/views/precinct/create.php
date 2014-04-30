<?php
/* @var $this PrecinctController */
/* @var $model Precinct */

$this->breadcrumbs=array(
	'Precincts'=>array('index'),
	'Create',
);


?>

<h1>Create Precinct</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>