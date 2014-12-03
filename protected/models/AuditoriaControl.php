<?php

/**
 * This is the model class for table "auditoria.auditoria_control".
 *
 * The followings are the available columns in table 'auditoria.auditoria_control':
 * @property integer $id_auditoria_control
 * @property string $fecha_creacion
 * @property string $modulo
 * @property string $metodo
 * @property string $direccion_ip
 * @property string $usuario
 */
class AuditoriaControl extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auditoria.auditoria_control';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('modulo, metodo, direccion_ip, usuario', 'length', 'max'=>255),
			array('fecha_creacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_auditoria_control, fecha_creacion, modulo, metodo, direccion_ip, usuario', 'safe', 'on'=>'search'),
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
			'id_auditoria_control' => 'Id Auditoria Control',
			'fecha_creacion' => 'Fecha Creacion',
			'modulo' => 'Modulo',
			'metodo' => 'Metodo',
			'direccion_ip' => 'Direccion Ip',
			'usuario' => 'Usuario',
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

		$criteria->compare('id_auditoria_control',$this->id_auditoria_control);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('modulo',$this->modulo,true);
		$criteria->compare('metodo',$this->metodo,true);
		$criteria->compare('direccion_ip',$this->direccion_ip,true);
		$criteria->compare('usuario',$this->usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AuditoriaControl the static model class
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
