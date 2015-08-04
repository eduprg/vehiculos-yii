<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
     'type'=>'inverse', // null or 'inverse'
    'brand'=>'CiudadRodrigo',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home','icon'=>'home', 'url'=>array('/site/index')),
                //array('label'=>'About','icon'=>'user', 'url'=>array('/site/page', 'view'=>'about')),
               array('label'=>'Ingresos', 'icon'=>'pencil', 'url'=>'#', 'items'=>array(
                    
                    array('label'=>'Empleados','icon'=>'user', 'url'=>array('/Operador')),
                    array('label'=>'Supervisores', 'icon'=>' icon-eye-open','url'=>array('/Supervisor')),
                    
                    '---',
                    array('label'=>'Obras','icon'=>'icon-road', 'url'=>array('/Obra')),
                ), 'visible'=>!Yii::app()->user->isGuest),
                 array('label'=>'Registro', 'icon'=>'icon-calendar', 'url'=>array('/Registro'), 'visible'=>!Yii::app()->user->isGuest),
                  array('label'=>'Reparto', 'icon'=>'icon-briefcase', 'url'=>array('/Reparto'), 'visible'=>!Yii::app()->user->isGuest),
                 array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Login', 'icon'=>'icon-ok-circle', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')','icon'=>'icon-off', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="cont">
<div class="container">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
</div><!--/.fluid-container-->
	</div>


<div class="extra">
	  <div class="container">
		<div class="row">
		</div> <!-- /row -->
		</div> <!-- /container -->
	</div>
	

</div><!-- page -->
<div class="footer">
	  <div class="container">
		<div class="row">
			<div id="footer-copyright" class="col-md-6">
				About us | Contact us | Terms & Conditions
			</div> <!-- /span6 -->
			<div id="footer-terms" class="col-md-6">
				© 2012-13 Black Bootstrap. <a href="http://nachi.me.pn" target="_blank">Nachi</a>.
			</div> <!-- /.span6 -->
		 </div> <!-- /row -->
	  </div> <!-- /container -->
	</div>
</body>
</html>
