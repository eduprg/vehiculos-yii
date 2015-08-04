<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));

?>

$this->menu=array(
array('label'=>'Lista de <?php echo $this->modelClass; ?>','url'=>array('index')),
array('label'=>'Administrar <?php echo $this->modelClass; ?>','url'=>array('admin')),
);
?>

<h2>Crear <?php echo $this->modelClass; ?></h2>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
