<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EstadoObservacioness'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EstadoObservacioness', 'url'=>array('index')),
	array('label'=>'Create EstadoObservaciones', 'url'=>array('create')),
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

<h1>Manage EstadoObservacioness</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
