<?php

/**
 * This is the model class for table "mtop".
 *
 * The followings are the available columns in table 'mtop':
 * @property string $numero
 * @property string $mtop
 * @property string $tipo
 * @property string $fin_mto
 * @property string $ffi_mto
 * @property string $peso
 * @property string $largo
 * @property string $ancho
 * @property string $alto
 * @property integer $id_veh
 * @property string $foto
 * @property integer $estado
 */
class Mtop extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mtop';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero, mtop, tipo, fin_mto, ffi_mto, id_veh', 'required'),
			array('id_veh, estado', 'numerical', 'integerOnly'=>true),
			array('numero', 'length', 'max'=>7),
			array('mtop', 'length', 'max'=>13),
			array('tipo, peso, largo, ancho, alto', 'length', 'max'=>3),
			array('foto', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('numero, mtop, tipo, fin_mto, ffi_mto, peso, largo, ancho, alto, id_veh, foto, estado', 'safe', 'on'=>'search'),
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
			'numero' => 'Formulario',
			'mtop' => 'Mtop',
			'tipo' => 'Tipo',
			'fin_mto' => 'Fecha Inicial',
			'ffi_mto' => 'Fecha Final',
			'peso' => 'Peso',
			'largo' => 'Largo',
			'ancho' => 'Ancho',
			'alto' => 'Alto',
			'id_veh' => 'Placa',
			'foto' => 'Foto',
			'estado' => 'Estado',
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

		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('mtop',$this->mtop,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('fin_mto',$this->fin_mto,true);
		$criteria->compare('ffi_mto',$this->ffi_mto,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('alto',$this->alto,true);
		$criteria->compare('id_veh',$this->id_veh);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mtop the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
