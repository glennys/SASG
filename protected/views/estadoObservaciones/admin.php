<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Observacioness'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estado Observacioness', 'url'=>array('index')),
	array('label'=>'Crear Estado Observaciones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estadoObservacionesgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estado Observacioness</h1>

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
    'id'=>'estadoObservacionesgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_proceso',
        'id_observaciones',
        'id_estado',
        'fecha_asignacion',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("estadoObservaciones/view/", 
                                            array("id_proceso"=>$data->id_proceso, "id_observaciones"=>$data->id_observaciones
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("estadoObservaciones/update/", 
                                            array("id_proceso"=>$data->id_proceso, "id_observaciones"=>$data->id_observaciones
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("estadoObservaciones/delete/", 
                                            array("id_proceso"=>$data->id_proceso, "id_observaciones"=>$data->id_observaciones
											))',
                ),
            ),
        ),
    ),
)); ?>
