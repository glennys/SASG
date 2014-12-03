<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'EmpleadoRol'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmpleadoRol', 'url'=>array('index')),
	array('label'=>'Create EmpleadoRol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('EmpleadoRolgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Rol Empleado</h1>

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
    'id'=>'empleadoRolgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_rol',
        'id_empleado',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("empleadoRol/view/", 
                                            array("id_empleado"=>$data->id_empleado, "id_rol"=>$data->id_rol
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("empleadoRol/update/", 
                                            array("id_empleado"=>$data->id_empleado, "id_rol"=>$data->id_rol
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("empleadoRol/delete/", 
                                            array("id_empleado"=>$data->id_empleado, "id_rol"=>$data->id_rol
											))',
                ),
            ),
        ),
    ),
)); ?>
