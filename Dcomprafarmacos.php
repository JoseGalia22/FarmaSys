<?php

/**
 * This is the model class for table "dcomprafarmacos".
 *
 * The followings are the available columns in table 'dcomprafarmacos':
 * @property integer $idcomprafarmacos
 * @property integer $idfarmacos
 * @property integer $cantidad
 * @property double $monto
 * @property integer $tipopago
 * @property integer $idusuario
 * @property integer $idcompra
 *
 * The followings are the available model relations:
 * @property Dusuario $idusuario0
 */
class Dcomprafarmacos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dcomprafarmacos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idfarmacos, cantidad, monto, tipopago, idusuario, idcompra', 'required'),
			array('idfarmacos, cantidad, tipopago, idusuario, idcompra', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcomprafarmacos, idfarmacos, cantidad, monto, tipopago, idusuario, idcompra', 'safe', 'on'=>'search'),
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
			'idusuario0' => array(self::BELONGS_TO, 'Dusuario', 'idusuario'),
                        'idfarmacos0' => array(self::BELONGS_TO, 'Dfarmacos', 'idfarmacos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcomprafarmacos' => 'Idcomprafarmacos',
			'idfarmacos' => 'Nombre Fármaco',
			'cantidad' => 'Cantidad',
			'monto' => 'Monto',
			'tipopago' => 'Tipo Pago',
			'idusuario' => 'Nombre del usuario',
			'idcompra' => 'Número de Compra',
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
	public function search($idcompra)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idcomprafarmacos',$this->idcomprafarmacos);
		$criteria->compare('idfarmacos',$this->idfarmacos);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('tipopago',$this->tipopago);
		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('idcompra',$this->idcompra);
                 $criteria->condition = "idcompra = $idcompra";
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dcomprafarmacos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
