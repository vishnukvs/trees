<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<?php 
   /* Yii::app()->clientScript->registerCoreScript('jquery'); 	*/
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/form.css');
?>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta content='width=device-width, initial-scale=1' name='viewport' />
<meta content='yes' name='apple-mobile-web-app-capable' />
<meta content='black' name='apple-mobile-web-app-status-bar-style' />


</head>

<body>
<?php
$url = Yii::app()->request->requestUri;
?>

<div data-role="page" id="page1" data-url="<?php echo $url; ?>">
	<?php 

		$htmlOptions = array('data-role' => 'header', 'class' => 'localnav', 'style' => 'margin:0;');

		$linkOptionsLeft  = array('data-icon'=>'grid', 'data-role' => 'button',  'data-theme' => 'a', 'rel' => 'external', 'class'=>'ui-btn-left');

		$linkOptionsRight = array('data-role' => 'button',  'data-theme' => 'a', 'rel' => 'external', 'class'=>'ui-btn-right');
		
		$items = array();

		if (Yii::app()->user->isGuest) {
				$items[] = array('label'=>'Login', 
					'url'=>array('/site/login'),
					'linkOptions' => $linkOptionsRight);
		}
		else {
				$items[] = array('label'=>'Logout (' . Yii::app()->user->name . ')',
					'url'=>array('/site/logout'), 
					'linkOptions' => $linkOptionsRight);						

				$items[] = array('label'=>'Search...', 
					'url'=>array('/description/search'),
					'linkOptions'=> $linkOptionsLeft);
		}

		$this->widget('zii.widgets.CMenu',array(
				'activeCssClass' => 'ui-btn-active ui-state-persist',
				'activateParents' => true,
				'htmlOptions' => $htmlOptions,
				'items'=> $items
		));
	?>	
			

	

    <div data-role="content">
    <?php echo $content; ?>
    </div><!-- content -->
	

	<div data-role="footer" data-id="footer" data-position="fixed" >
		<div data-role="navbar">
			<?php 
				$htmlOptions = array('data-role' => 'footer', 'class' => 'localnav',);
				
				$items = array();

				if (Yii::app()->user->isGuest) {
					$items[] = null;
				} 
				else {
				
					$items[] = array('label'=>'Home',
						'url'=>array('/'),
						'linkOptions' => array(
							'data-icon'=>'home ', 
							'data-mini'=>'true',
							'data-direction'=>'reverse',
							)						
						
						);
				
					$items[] = array('label'=>'Create New',
						'url'=>array('/description/create'),
						'linkOptions' => array(
							'data-icon'=>'grid ', 
							'data-mini'=>'true',
							'data-direction'=>'reverse',
							)						
						
						);
						
					/* $items[] = array('label'=>'Last 10 Activities',
						'url'=>array('#'),
						'linkOptions' => array(
							'data-icon'=>'grid ', 
							'data-mini'=>'true',
							'data-direction'=>'reverse',
							)						
						);	

					$items[] = array('label'=>'New Items',
						'url'=>array('/site/items'),
						'linkOptions' => array(
							'data-icon'=>'grid ', 
							'data-mini'=>'true',
							'data-direction'=>'reverse',
							)						
						);	*/							
						

				}
					
				$this->widget('zii.widgets.CMenu',array(
					'activeCssClass' => 'active',
					'activateParents' => true,
					'htmlOptions' => $htmlOptions,
					'items'=> $items
				)
			); 
			?>		
		
		</div><!-- /navbar -->
		
	</div><!-- /footer -->	
	


</div><!-- page --><!-- page -->

</body>
</html>
