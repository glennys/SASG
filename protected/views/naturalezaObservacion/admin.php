<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Naturaleza Observacions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Naturaleza Observacions', 'url'=>array('index')),
	array('label'=>'Crear Naturaleza Observacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('naturalezaObservaciongrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Naturaleza Observacions</h1>

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
    'id'=>'naturalezaObservaciongrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_naturaleza',
        'id_observaciones',
        'id_unidad',
        'fecha_observacion',
        'id_actividad',
        'descripcion',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("naturalezaObservacion/view/", 
                                            array("id_naturaleza"=>$data->id_naturaleza, "id_observaciones"=>$data->id_observaciones, "id_unidad"=>$data->id_unidad, "fecha_observacion"=>$data->fecha_observacion, "id_actividad"=>$data->id_actividad
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("naturalezaObservacion/update/", 
                                            array("id_naturaleza"=>$data->id_naturaleza, "id_observaciones"=>$data->id_observaciones, "id_unidad"=>$data->id_unidad, "fecha_observacion"=>$data->fecha_observacion, "id_actividad"=>$data->id_actividad
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("naturalezaObservacion/delete/", 
                                            array("id_naturaleza"=>$data->id_naturaleza, "id_observaciones"=>$data->id_observaciones, "id_unidad"=>$data->id_unidad, "fecha_observacion"=>$data->fecha_observacion, "id_actividad"=>$data->id_actividad
											))',
                ),
            ),
        ),
    ),
)); ?>
