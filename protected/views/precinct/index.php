<?php
/* @var $this PrecinctController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Precincts',
);


?>
<ul  
    data-role="listview" 
	data-filter="true" 
	data-filter-placeholder="Find a Precincts..." 
	data-filter-theme="d">
</ul>

<h1>Precincts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'enablePagination'=>false,
	'summaryText'=>'',	
));
