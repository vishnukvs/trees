<?php
/* @var $this UserController */
/* @var $data User */
?>

<ul data-role="listview">
	<li>
		<a href="light/user/<?php echo CHtml::encode($data->id); ?>">
		<ul>
			<li><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:
				<?php echo CHtml::encode($data->first_name); ?></li>
				
			<li><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:
				<?php echo CHtml::encode($data->last_name); ?></li>

			<li><?php echo CHtml::encode($data->getAttributeLabel('last_login_time')); ?>:
			<?php echo CHtml::encode($data->last_login_time); ?></li>

		</ul>
	</li>
</ul>
