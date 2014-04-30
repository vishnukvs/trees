<?php
/* @var $this PrecinctController */
/* @var $data Precinct */
?>

<ul data-role="listview">
<li>
	
<h2><?php echo CHtml::encode($data->name); ?></h2>

 <ul>
	<li>
	
	</li>
	<li>
	<?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>
	<?php echo CHtml::encode($data->create_user); ?>
	</li>
	<li>
	<?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>
	<?php echo CHtml::encode($data->create_time); ?>
	</li>
	<li><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>
	<?php echo CHtml::encode($data->update_user); ?></li>
    <li><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>
	<?php echo CHtml::encode($data->update_time); ?></li>
	<a href="/trees_site_assessment/precinct/" data-role="button"data-theme="b">Back</a>
</ul>
</li>
</ul>