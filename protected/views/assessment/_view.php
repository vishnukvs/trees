<?php
/* @var $this AssessmentController */
/* @var $data Assessment */
?>

<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d">
	<li>
 <a href="#">
	<h2><?php echo CHtml::encode($data->getAttributeLabel('job_dataworks_no')); ?>:
	<?php echo CHtml::encode($data->job_dataworks_no); ?>
	<br/>
	<?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</p>
	<?php echo CHtml::encode($data->address); ?>
	<?php echo CHtml::encode($data->getAttributeLabel('precinct_id')); ?>:</p>
	<?php echo CHtml::encode($data->precinct_id); ?>
	</h2>
   </a>
</li>
</ul>
		
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pre_start_checks')); ?>:</b>
	<?php echo CHtml::encode($data->pre_start_checks); ?>
	<br />
/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('site_specific_preparation')); ?>:</b>
	<?php echo CHtml::encode($data->site_specific_preparation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notify_emergency_services_utility_providers')); ?>:</b>
	<?php echo CHtml::encode($data->notify_emergency_services_utility_providers); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_services_utility_providers_note')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_services_utility_providers_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existing_property_damage')); ?>:</b>
	<?php echo CHtml::encode($data->existing_property_damage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property_damage_details')); ?>:</b>
	<?php echo CHtml::encode($data->property_damage_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_phone_coverage')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_phone_coverage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('control_plan')); ?>:</b>
	<?php echo CHtml::encode($data->control_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_specific_preparation_notes')); ?>:</b>
	<?php echo CHtml::encode($data->site_specific_preparation_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_id')); ?>:</b>
	<?php echo CHtml::encode($data->task_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_notes')); ?>:</b>
	<?php echo CHtml::encode($data->task_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_notes')); ?>:</b>
	<?php echo CHtml::encode($data->equipment_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('environmental_hazard_id')); ?>:</b>
	<?php echo CHtml::encode($data->environmental_hazard_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('environmental_hazard_notes')); ?>:</b>
	<?php echo CHtml::encode($data->environmental_hazard_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tree_hazard_assessment_id')); ?>:</b>
	<?php echo CHtml::encode($data->tree_hazard_assessment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tree_hazard_assessment_notes')); ?>:</b>
	<?php echo CHtml::encode($data->tree_hazard_assessment_notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crew_members')); ?>:</b>
	<?php echo CHtml::encode($data->crew_members); ?>
	<br />


	*/ ?>

</div>