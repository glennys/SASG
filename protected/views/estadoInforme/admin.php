<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Estado Informes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estado Informes', 'url'=>array('index')),
	array('label'=>'Crear Estado Informe', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estadoInformegrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Estado Informes</h1>

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
    'id'=>'estadoInformegrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_estado',
        'id_informe',
        'fecha_modificacion',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("estadoInforme/view/", 
                                            array("id_estado"=>$data->id_estado, "id_informe"=>$data->id_informe
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("estadoInforme/update/", 
                                            array("id_estado"=>$data->id_estado, "id_informe"=>$data->id_informe
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("estadoInforme/delete/", 
                                            array("id_estado"=>$data->id_estado, "id_informe"=>$data->id_informe
											))',
                ),
            ),
        ),
    ),
)); ?>
