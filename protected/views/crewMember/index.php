<?php
/* @var $this CrewMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Crew Members',
);


?>

<h1>Crew Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'enablePagination'=>false,
	'summaryText'=>'',	
));
?>
