<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'UnidadesResponsabless'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UnidadesResponsabless', 'url'=>array('index')),
	array('label'=>'Create UnidadesResponsables', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('unidadesResponsablesgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage UnidadesResponsabless</h1>

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
    'id'=>'unidadesResponsablesgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_unidad',
        'id_observaciones',
        'fecha_creacion',
        'nombre_responsable',
        'telefono',
        'unidades_involucradas',
        'fecha_inicio_estimada',
        'fecha_fin_estimada',
        'indicador_logro',
        'evento',
        'correo',
        'unidades_apoyo',
        'id_estado',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("unidadesResponsables/view/", 
                                            array("id_unidad"=>$data->id_unidad, "id_observaciones"=>$data->id_observaciones
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("unidadesResponsables/update/", 
                                            array("id_unidad"=>$data->id_unidad, "id_observaciones"=>$data->id_observaciones
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("unidadesResponsables/delete/", 
                                            array("id_unidad"=>$data->id_unidad, "id_observaciones"=>$data->id_observaciones
											))',
                ),
            ),
        ),
    ),
)); ?>
