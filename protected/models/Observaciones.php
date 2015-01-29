<?php

/**
 * This is the model class for table "auditoria.observaciones".
 *
 * The followings are the available columns in table 'auditoria.observaciones':
 * @property integer $id_observaciones
 * @property integer $id_informe
 * @property integer $id_unidad
 * @property integer $id_naturaleza
 * @property integer $id_tipo_criticidad
 * @property integer $id_tipo_observacion
 * @property integer $id_impacto
 * @property integer $id_clasificacion
 * @property integer $id_estado
 * @property string $recomendacion
 * @property boolean $cerrada
 * @property string $detalle_observacion
 * @property string $accion_correctiva
 * @property string $fecha_inicio_accion_correctiva
 * @property string $fecha_fin_accion_correctiva
 * @property string $plan_accion_general
 * @property string $codigo
 * @property string $codigo_observacion
 * @property string $in_stat
 * @property string $usr_crea
 * @property string $fe_crea
 * @property string $usr_modf
 * @property string $fe_modf
 *
 * The followings are the available model relations:
 * @property Informe $idInforme
 * @property Unidad $idUnidad
 * @property TipoObservacion $idTipoObservacion
 * @property TipoCriticidad $idTipoCriticidad
 * @property Impacto $idImpacto
 * @property Naturaleza $idNaturaleza
 * @property Clasificacion $idClasificacion
 * @property Estado $idEstado
 * @property Actividad[] $actividads
 * @property AdjuntoNaturaleza[] $adjuntoNaturalezas
 * @property Unidad[] $auditoria.unidads
 * @property ObservacionesConsultor[] $observacionesConsultors
 * @property LiderObservacionHistorial[] $liderObservacionHistorials
 * @property ObservacionesUnidadConsultor[] $observacionesUnidadConsultors
 * @property Procesos[] $auditoria.procesoses
 * @property AdjuntoSeguimientoObservacion[] $adjuntoSeguimientoObservacions
 */
class Observaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.observaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_inicio_accion_correctiva', 'required'),
			array('id_informe, id_unidad, id_naturaleza, id_tipo_criticidad, id_tipo_observacion, id_impacto, id_clasificacion, id_estado', 'numerical', 'integerOnly'=>true),
			array('recomendacion, detalle_observacion, accion_correctiva, plan_accion_general, codigo, codigo_observacion, criterio, causa, efecto', 'length', 'max'=>255),
			//array('in_stat', 'length', 'max'=>1),
			//array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('cerrada, fecha_inicio_accion_correctiva, fecha_fin_accion_correctiva, criterio, causa, efecto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observaciones, id_informe, id_unidad, id_naturaleza, id_tipo_criticidad, id_tipo_observacion, id_impacto, id_clasificacion, id_estado, recomendacion, cerrada, detalle_observacion, accion_correctiva, fecha_inicio_accion_correctiva, fecha_fin_accion_correctiva, plan_accion_general, codigo, codigo_observacion, criterio, causa, efecto', 'safe', 'on'=>'search'),
		);
	}    
	/*
	riesgo character varying(255),
  criterio character varying(255),
  causa character varying(255),
  efecto


	*/



	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idInforme' => array(self::BELONGS_TO, 'Informe', 'id_informe'),
			'idUnidad' => array(self::BELONGS_TO, 'Unidad', 'id_unidad'),
			'idTipoObservacion' => array(self::BELONGS_TO, 'TipoObservacion', 'id_tipo_observacion'),
			'idTipoCriticidad' => array(self::BELONGS_TO, 'TipoCriticidad', 'id_tipo_criticidad'),
			'idImpacto' => array(self::BELONGS_TO, 'Impacto', 'id_impacto'),
			'idNaturaleza' => array(self::BELONGS_TO, 'Naturaleza', 'id_naturaleza'),
			'idClasificacion' => array(self::BELONGS_TO, 'Clasificacion', 'id_clasificacion'),
			'idEstado' => array(self::BELONGS_TO, 'Estado', 'id_estado'),
			'actividads' => array(self::HAS_MANY, 'Actividad', 'id_observaciones'),
			'adjuntoNaturalezas' => array(self::HAS_MANY, 'AdjuntoNaturaleza', 'id_observacion'),
			'auditoria.unidads' => array(self::MANY_MANY, 'Unidad', 'observaciones_unidad(id_observaciones, id_unidades)'),
			'observacionesConsultors' => array(self::HAS_MANY, 'ObservacionesConsultor', 'id_observaciones'),
			'liderObservacionHistorials' => array(self::HAS_MANY, 'LiderObservacionHistorial', 'id_observacion'),
			'observacionesUnidadConsultors' => array(self::HAS_MANY, 'ObservacionesUnidadConsultor', 'id_observaciones'),
			'auditoria.procesoses' => array(self::MANY_MANY, 'Procesos', 'estado_observaciones(id_observaciones, id_proceso)'),
			'adjuntoSeguimientoObservacions' => array(self::HAS_MANY, 'AdjuntoSeguimientoObservacion', 'id_observacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_observaciones' => 'Id Observaciones',
			'id_informe' => 'Id Informe',
			'id_unidad' => 'Id Unidad',
			'id_naturaleza' => 'Id Naturaleza',
			'id_tipo_criticidad' => 'Id Tipo Criticidad',
			'id_tipo_observacion' => 'Id Tipo Observacion',
			'id_impacto' => 'Id Impacto',
			'id_clasificacion' => 'Id Clasificacion',
			'id_estado' => 'Id Estado',
			'recomendacion' => 'Recomendación',
			'cerrada' => 'Cerrada',
			'detalle_observacion' => 'Detalle Observacion',
			'accion_correctiva' => 'esta es la narrativa del plan de accion general',
			'fecha_inicio_accion_correctiva' => 'Fecha Inicio Accion Correctiva',
			'fecha_fin_accion_correctiva' => 'Fecha Fin Accion Correctiva',
			'plan_accion_general' => 'Plan Accion General',
			'codigo' => 'Codigo',
			'codigo_observacion' => 'Codigo Observacion',
			
  			'criterio' =>  'Criterio',
  			'causa' => 'Causa',
  			'efecto' =>  'Efecto',
  			'descripcion' => 'Descripción'

			/*'in_stat' => 'In Stat',
			'usr_crea' => 'Usr Crea',
			'fe_crea' => 'Fe Crea',
			'usr_modf' => 'Usr Modf',
			'fe_modf' => 'Fe Modf',*/
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
		$criteria->compare('id_informe',$this->id_informe);
		$criteria->compare('id_unidad',$this->id_unidad);
		$criteria->compare('id_naturaleza',$this->id_naturaleza);
		$criteria->compare('id_tipo_criticidad',$this->id_tipo_criticidad);
		$criteria->compare('id_tipo_observacion',$this->id_tipo_observacion);
		$criteria->compare('id_impacto',$this->id_impacto);
		$criteria->compare('id_clasificacion',$this->id_clasificacion);
		$criteria->compare('id_estado',$this->id_estado);
		$criteria->compare('recomendacion',$this->recomendacion,true);
		$criteria->compare('cerrada',$this->cerrada);
		$criteria->compare('detalle_observacion',$this->detalle_observacion,true);
		$criteria->compare('accion_correctiva',$this->accion_correctiva,true);
		$criteria->compare('fecha_inicio_accion_correctiva',$this->fecha_inicio_accion_correctiva,true);
		$criteria->compare('fecha_fin_accion_correctiva',$this->fecha_fin_accion_correctiva,true);
		$criteria->compare('plan_accion_general',$this->plan_accion_general,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('codigo_observacion',$this->codigo_observacion,true);
		
  		$criteria->compare('criterio',$this->criterio,true);
  		$criteria->compare('causa',$this->causa,true); 
  		$criteria->compare('efecto',$this->efecto,true);  


		/*$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);*/

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Observaciones the static model class
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
