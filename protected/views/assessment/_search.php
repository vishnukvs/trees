<?php
/* @var $this AssessmentController */
/* @var $model Assessment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_dataworks_no'); ?>
		<?php echo $form->textArea($model,'job_dataworks_no',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precinct_id'); ?>
		<?php echo $form->textField($model,'precinct_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pre_start_checks'); ?>
		<?php echo $form->textField($model,'pre_start_checks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_specific_preparation'); ?>
		<?php echo $form->textField($model,'site_specific_preparation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notify_emergency_services_utility_providers'); ?>
		<?php echo $form->checkBox($model,'notify_emergency_services_utility_providers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emergency_services_utility_providers_note'); ?>
		<?php echo $form->textArea($model,'emergency_services_utility_providers_note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'existing_property_damage'); ?>
		<?php echo $form->checkBox($model,'existing_property_damage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'property_damage_details'); ?>
		<?php echo $form->textArea($model,'property_damage_details',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile_phone_coverage'); ?>
		<?php echo $form->checkBox($model,'mobile_phone_coverage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'control_plan'); ?>
		<?php echo $form->textArea($model,'control_plan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site_specific_preparation_notes'); ?>
		<?php echo $form->textArea($model,'site_specific_preparation_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_id'); ?>
		<?php echo $form->textField($model,'task_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_notes'); ?>
		<?php echo $form->textArea($model,'task_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'equipment_id'); ?>
		<?php echo $form->textField($model,'equipment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'equipment_notes'); ?>
		<?php echo $form->textArea($model,'equipment_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'environmental_hazard_id'); ?>
		<?php echo $form->textField($model,'environmental_hazard_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'environmental_hazard_notes'); ?>
		<?php echo $form->textArea($model,'environmental_hazard_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tree_hazard_assessment_id'); ?>
		<?php echo $form->textField($model,'tree_hazard_assessment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tree_hazard_assessment_notes'); ?>
		<?php echo $form->textArea($model,'tree_hazard_assessment_notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'crew_member_id'); ?>
		<?php echo $form->textField($model,'crew_member_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->