<?php /* @var $this Controller */



?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
<meta charset="utf-8">
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta charset="<?php echo Yii::app()->charset;?>">
<link rel="shortcut icon" type="image/x-icon" href="images/minilogo.jpg">
<link href="css/main.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/Fontasom/css/font-awesome.min.css">


<style type="text/css">
    .navbar-brand{
        padding: 0px;
    }
</style>
</head>
<body style="background-image: url('images/9.png') ;background-size: 90% 90%;">

<header>
    <?php
$this->widget(
    'booster.widgets.TbNavbar',
    array(
    'type' => null, // null or 'inverse'

    'brand' => CHtml::image('images/2.png','TCR & TRANSVELEZ'),
    'brandUrl' => '#',
    'collapse' => true, // requires bootstrap-responsive.css
    'fixed' => false,
    'fluid' => true,
    'items' => array(
    array(
    'class' => 'booster.widgets.TbMenu',
    'type' => 'navbar',
    'items' => array(
    array('label'=>'Inicio', 'url'=>array('/site/index'), 'icon' => 'home',),
     
    array(
    'label' => 'Datos',
    'url' => '#',
    'icon' => 'list-alt',
   
    'items' => array(
        array('label'=>'Propietarios',  'icon' => 'home','url'=>array('/propietario/admin'),'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Tipo-Vehiculo', 'url'=>array('/tipoveh/admin'),'visible'=>!Yii::app()->user->isGuest),
          )
    ),

           array('label'=>'Vehiculos', 'eye_open' => 'tasks', 'url'=>array('/vehiculo/admin'),'visible'=>!Yii::app()->user->isGuest), 

                array('label'=>'Matricula', 'icon' => 'tasks',  'url'=>array('/Matricula/admin'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'SGS', 'icon' => 'globe',  'url'=>array('/sgs/admin'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'MTOP', 'icon' => 'road',  'url'=>array('/mtop/admin'),'visible'=>!Yii::app()->user->isGuest),
           
      
        )
        
     ,),

    array(
    'class' => 'booster.widgets.TbMenu',
    'type' => 'navbar',
    'htmlOptions' => array('class' => 'pull-right',),
    'items' => array(

   
        array(
    
    'url' => '#',
            
    'visible'=> !Yii::app()->user->isGuest,
    'icon' => 'user',
    'items' => array(
        array('label'=>'Lista usuarios','url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest),
       
        array('label'=>'Cerrar sesión('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'icon' => 'off',),
        )),        
        array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'icon' => 'log-in',),

    ),
    ),
    ),

    )
    );?>
    </header>


<div class="container" id="page" style='width: 95%;'>


 <?php if(isset($this->breadcrumbs)):?>
 <?php $this->widget('booster.widgets.TbBreadcrumbs', array(
 'links'=>$this->breadcrumbs,
 )); ?>
 <?php endif?>
 <?php echo $content; ?>
 <hr>
 <footer>
 Copyright &copy; <?php echo date('Y'); ?> <?php echo CHtml::encode(Yii::app()->params['empresa']); ?> | <?php echo CHtml::encode((Yii::app()->name).' '.Yii::app()->params['version']); ?> - All Rights Reserved.<br/>
 arQ
 </footer>

</div><!-- page -->

</body>
</html>
<script type="text/javascript">
    $('.dropdown-menu:last').addClass('pull-right');
</script>