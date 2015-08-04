<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));

?>

	$this->menu=array(
	array('label'=>'Lista de <?php echo $this->modelClass; ?>','url'=>array('index')),
	array('label'=>'Crear <?php echo $this->modelClass; ?>','url'=>array('create')),
	array('label'=>'Ver <?php echo $this->modelClass; ?>','url'=>array('view','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Administrar <?php echo $this->modelClass; ?>','url'=>array('admin')),
	);
	?>

	<h2>Actualizar <?php echo $this->modelClass . " <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h2>

<?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>
