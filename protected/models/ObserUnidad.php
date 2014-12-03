<?php

/**
 * This is the model class for table "auditoria.observaciones_unidad".
 *
 * The followings are the available columns in table 'auditoria.observaciones_unidad':
 * @property integer $id_observaciones
 * @property integer $id_unidades
 * @property integer $id_empleado_consultor
 * @property string $plan_general
 * @property integer $id_estado
 * @property string $fecha_asignacion
 */
class ObserUnidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.observaciones_unidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_observaciones, id_unidades', 'required'),
			array('id_observaciones, id_unidades, id_empleado_consultor, id_estado', 'numerical', 'integerOnly'=>true),
			array('plan_general', 'length', 'max'=>255),
			array('fecha_asignacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observaciones, id_unidades, id_empleado_consultor, plan_general, id_estado, fecha_asignacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_observaciones' => 'Id Observaciones',
			'id_unidades' => 'Id Unidades',
			'id_empleado_consultor' => 'Id Empleado Consultor',
			'plan_general' => 'Plan General',
			'id_estado' => 'Id Estado',
			'fecha_asignacion' => 'Fecha Asignacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_observaciones',$this->id_observaciones);
		$criteria->compare('id_unidades',$this->id_unidades);
		$criteria->compare('id_empleado_consultor',$this->id_empleado_consultor);
		$criteria->compare('plan_general',$this->plan_general,true);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('fecha_asignacion',$this->fecha_asignacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ObserUnidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors()
    {
        return array(
                'CTimestampBehavior' => array(
                    'class' => 'zii.behaviors.CTimestampBehavior',
                    'createAttribute' => 'fe_crea',
                    'updateAttribute' => 'fe_modf',
                    'setUpdateOnCreate' => true,
                ),

                'BlameableBehavior' => array(
                    'class' => 'application.components.BlameableBehavior',
                    'createdByColumn' => 'usr_crea',
                    'updatedByColumn' => 'usr_modf',
                ),
        );
    }
}
