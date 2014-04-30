<?php
/* @var $this AssessmentController */
/* @var $model Assessment */

$this->breadcrumbs=array(
	'Assessments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Assessment', 'url'=>array('index')),
	array('label'=>'Create Assessment', 'url'=>array('create')),
	array('label'=>'Update Assessment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Assessment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assessment', 'url'=>array('admin')),
);
?>

<h1>View Assessment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_dataworks_no',
		'address',
		
		array(
            'name'=>'Precinct',
            'type'=>'text',
            'value'=>$model->precinct->name,
        ),	
		
		array(
            'name'=>'Pre Start Checks',
            'type'=>'text',
            'value'=>implode(", " , $model->pre_start_checks)
        ),		

		array(
            'name'=>'Site Specific Preparation',
            'type'=>'text',
            'value'=>implode(", " , $model->site_specific_preparation)
        ),		

/*
		'notify_emergency_services_utility_providers',
		'emergency_services_utility_providers_note',
		'existing_property_damage',
		'property_damage_details',
		'mobile_phone_coverage',
		'control_plan',
		'site_specific_preparation_notes',
		'task_id',
		'task_notes',
		'equipment_id',
		'equipment_notes',
		'environmental_hazard_id',
		'environmental_hazard_notes',
		'tree_hazard_assessment_id',
		'tree_hazard_assessment_notes',
		'crew_members', */
	),
)); ?>
