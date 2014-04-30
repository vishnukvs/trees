<?php
/* @var $this AssessmentController */
/* @var $model Assessment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'assessment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'job_dataworks_no'); ?>
		<?php echo $form->textField($model,'job_dataworks_no'); ?>
		<?php echo $form->error($model,'job_dataworks_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precinct_id'); ?>
		<?php echo $form->dropDownList($model,'precinct_id', CHtml::listData(Precinct::model()->findAll(), 'id', 'name'), array('empty'=>'Select Precinct')); ?>	
		<?php echo $form->error($model,'precinct_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'no_of_trees_requiring_work'); ?>
		<?php echo $form->textField($model,'no_of_trees_requiring_work'); ?>
		<?php echo $form->error($model,'no_of_trees_requiring_work'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_id'); ?>
		<?php echo $form->textField($model,'unit_id'); ?>
		<?php echo $form->error($model,'unit_id'); ?>
	</div>	
	
	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'pre_start_checks'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'pre_start_checks'); ?></legend>
				<?php $models = PreStartCheck::model()->findAll(array('order' => 'id'));?>
				<?php $list = CHtml::listData($models, 'id', 'name')?>
				<?php echo $form->CheckBoxList($model,'pre_start_checks',$list, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'pre_start_checks'); ?>		
			</fieldset>
	</div>


	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'site_specific_preparation'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'site_specific_preparation'); ?></legend>
				<?php $models = SiteSpecificPreparation::model()->findAll(array('order' => 'id'));?>
				<?php $list = CHtml::listData($models, 'id', 'name')?>
				<?php echo $form->CheckBoxList($model,'site_specific_preparation',$list, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'site_specific_preparation'); ?>		
			</fieldset>
	</div>
	
<div data-role="fieldcontain">
	<fieldset data-role="controlgroup" data-type="horizontal" >		
	<div class="row">
		<?php echo $form->labelEx($model,'notify_emergency_services_utility_providers'); ?>
		<?php echo $form->radioButtonList($model, 'notify_emergency_services_utility_providers', array(1 => 'Yes', 0 => 'No'), 
					array('separator' => '',)); 
		?>
		<?php echo $form->error($model,'notify_emergency_services_utility_providers'); ?>
	</div>
	</fieldset>
</div>	

	<div class="row" style="display: block">
		<?php echo $form->labelEx($model,'emergency_services_utility_providers_note'); ?>
		<?php echo $form->textArea($model,'emergency_services_utility_providers_note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'emergency_services_utility_providers_note'); ?>
	</div>

	<fieldset data-role="controlgroup" data-type="horizontal" >	
		<div class="row">
			<?php echo $form->labelEx($model,'existing_property_damage'); ?>
			<?php echo $form->radioButtonList($model, 'existing_property_damage', array(1 => 'Yes', 0 => 'No'), array('separator' => '')); ?>	
			<?php echo $form->error($model,'existing_property_damage'); ?>
		</div>
	</fieldset>

	<div class="row">
		<?php echo $form->labelEx($model,'property_damage_details'); ?>
		<?php echo $form->textArea($model,'property_damage_details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'property_damage_details'); ?>
	</div>

	<fieldset data-role="controlgroup" data-type="horizontal" >	
		<div class="row">
			<?php echo $form->labelEx($model,'mobile_phone_coverage'); ?>
			<?php echo $form->radioButtonList($model, 'mobile_phone_coverage', array(1 => 'Yes', 0 => 'No'), array('separator' => '')); ?>		
			<?php echo $form->error($model,'mobile_phone_coverage'); ?>
		</div>
	</fieldset>		


	<div class="row">
		<?php echo $form->labelEx($model,'control_plan'); ?>
		<?php echo $form->textArea($model,'control_plan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'control_plan'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'site_specific_preparation_notes'); ?>
		<?php echo $form->textArea($model,'site_specific_preparation_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'site_specific_preparation_notes'); ?>
	</div>


	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'task_id'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'task_id'); ?></legend>
				<?php $models = Task::model()->findAll(array('order' => 'id'));?>
				<?php $list = CHtml::listData($models, 'id', 'name')?>
				<?php echo $form->CheckBoxList($model,'task_id',$list, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'task_id'); ?>		
			</fieldset>
	</div>		

	<div class="row">
		<?php echo $form->labelEx($model,'task_notes'); ?>
		<?php echo $form->textArea($model,'task_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'task_notes'); ?>
	</div>
	
	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'equipment_id'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'equipment_id'); ?></legend>
				<?php $models = Equipment::model()->findAll(array('order' => 'id'));?>
				<?php $list = CHtml::listData($models, 'id', 'name')?>
				<?php echo $form->CheckBoxList($model,'equipment_id',$list, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'equipment_id'); ?>		
			</fieldset>
	</div>		

	<div class="row">
		<?php echo $form->labelEx($model,'equipment_notes'); ?>
		<?php echo $form->textArea($model,'equipment_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'equipment_notes'); ?>
	</div>

	
	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'environmental_hazard_id'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'environmental_hazard_id'); ?></legend>
				<?php $models = EnvironmentalHazard::model()->findAll(array('order' => 'id'));?>
				<?php $list = CHtml::listData($models, 'id', 'name')?>
				<?php echo $form->CheckBoxList($model,'environmental_hazard_id',$list, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'environmental_hazard_id'); ?>		
			</fieldset>
	</div>		

	<div class="row">
		<?php echo $form->labelEx($model,'environmental_hazard_notes'); ?>
		<?php echo $form->textArea($model,'environmental_hazard_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'environmental_hazard_notes'); ?>
	</div>
	
	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'tree_hazard_assessment_id'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'tree_hazard_assessment_id'); ?></legend>
				<?php $models = TreeHazardAssessment::model()->findAll(array('order' => 'id'));?>
				<?php $list = CHtml::listData($models, 'id', 'name')?>
				<?php echo $form->CheckBoxList($model,'tree_hazard_assessment_id',$list, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'tree_hazard_assessment_id'); ?>		
			</fieldset>
	</div>		

	<div class="row">
		<?php echo $form->labelEx($model,'tree_hazard_assessment_notes'); ?>
		<?php echo $form->textArea($model,'tree_hazard_assessment_notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tree_hazard_assessment_notes'); ?>
	</div>

	<div data-role="collapsible">
		<h4><?php echo $form->labelEx($model,'crew_member_id'); ?></h4>
			<fieldset data-role="controlgroup">
				<legend><?php echo $form->labelEx($model,'crew_member_id'); ?></legend>
				<?php 
					$crews = CrewMember::model()->findAll(array('order' => 'id'));
					$data = array();
					foreach ($crews as $crew)
						$data[$crew->id] = $crew->first_name . ' ' . $crew->last_name;				
				?>
				<?php echo $form->CheckBoxList($model,'crew_member_id',$data, array('separator'=>'',)); ?>
				<?php echo $form->error($model,'crew_member_id'); ?>		
			</fieldset>
	</div>	
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->