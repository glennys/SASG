<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Módulo Operacioness'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Módulo Operacioness', 'url'=>array('index')),
	array('label'=>'Crear Módulo Operaciones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('moduloOperacionesgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Módulo Operacioness</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'moduloOperacionesgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_permisos',
        'id_operaciones',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("moduloOperaciones/view/", 
                                            array("id_operaciones"=>$data->id_operaciones, "id_permisos"=>$data->id_permisos
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("moduloOperaciones/update/", 
                                            array("id_operaciones"=>$data->id_operaciones, "id_permisos"=>$data->id_permisos
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("moduloOperaciones/delete/", 
                                            array("id_operaciones"=>$data->id_operaciones, "id_permisos"=>$data->id_permisos
											))',
                ),
            ),
        ),
    ),
)); ?>
