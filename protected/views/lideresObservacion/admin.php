<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Lideres Observación'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Lideres Observación', 'url'=>array('index')),
	array('label'=>'Crear Lideres Observación', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lideresObservaciongrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Lideres Observación</h1>

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
    'id'=>'lideresObservaciongrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_observacion',
        'id_unidad',
        'id_empleado_supervisor',
        'aprobacion',
        'fecha_asignacion',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("lideresObservacion/view/", 
                                            array("id_observacion"=>$data->id_observacion, "id_unidad"=>$data->id_unidad
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("lideresObservacion/update/", 
                                            array("id_observacion"=>$data->id_observacion, "id_unidad"=>$data->id_unidad
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("lideresObservacion/delete/", 
                                            array("id_observacion"=>$data->id_observacion, "id_unidad"=>$data->id_unidad
											))',
                ),
            ),
        ),
    ),
)); ?>
