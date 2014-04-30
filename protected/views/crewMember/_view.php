<?php
/* @var $this CrewMemberController */
/* @var $data CrewMember */
?>

<ul data-role="listview">
 <li>
 	<a href="trees_site_assessment/createMember/<?php echo CHtml::encode($data->id); ?>">
		<h2><?php echo CHtml::encode($data->first_name); ?></h2></a>
  <ul>
   <li><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>
	<?php echo CHtml::encode($data->first_name); ?></li>
	<li><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>
	<?php echo CHtml::encode($data->last_name); ?></li>
    <li><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>
	<?php echo CHtml::encode($data->create_user); ?></li>
	<li><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>
	<?php echo CHtml::encode($data->create_time); ?></li>
     <li><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>
	<?php echo CHtml::encode($data->update_user); ?></li>
    <li><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>
	<?php echo CHtml::encode($data->update_time); ?></li>
	<a href="/trees_site_assessment/crewMember/" data-role="button"data-theme="b">Back</a>
 </ul>
	
</li>

</ul>