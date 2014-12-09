<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Rol Moduloss'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Rol Moduloss', 'url'=>array('index')),
	array('label'=>'Crear Rol Modulos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rolModulosgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Rol Moduloss</h1>

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
    'id'=>'rolModulosgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_rol',
        'id_permisos',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolModulos/view/", 
                                            array("id_permisos"=>$data->id_permisos, "id_rol"=>$data->id_rol
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolModulos/update/", 
                                            array("id_permisos"=>$data->id_permisos, "id_rol"=>$data->id_rol
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("rolModulos/delete/", 
                                            array("id_permisos"=>$data->id_permisos, "id_rol"=>$data->id_rol
											))',
                ),
            ),
        ),
    ),
)); ?>
