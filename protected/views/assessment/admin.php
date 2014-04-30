<?php
/* @var $this AssessmentController */
/* @var $model Assessment */

$this->breadcrumbs=array(
	'Assessments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Assessment', 'url'=>array('index')),
	array('label'=>'Create Assessment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#assessment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Assessments</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'assessment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'job_dataworks_no',
		'address',
		'precinct_id',
		array(
            'name'=>'pre_start_checks',
            'type'=>'text',
            'value'=>'implode(", " , $data->pre_start_checks)'
        ),		
		/*
		'site_specific_preparation',
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
		'crew_members',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
