<?php

/**
 * This is the model class for table "matricula".
 *
 * The followings are the available columns in table 'matricula':
 * @property string $id
 * @property integer $idveh
 * @property string $image
 * @property string $anioini
 * @property string $aniofin
 * @property integer $id_propietario
 * @property string $obs_mat
 * @property integer $est_mat
 * @property integer $idtipov
 *
 * The followings are the available model relations:
 * @property Vehiculo $idveh0
 */
class Matricula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matricula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, idveh, anioini, aniofin, id_propietario, obs_mat, idtipov', 'required'),
			array('idveh, id_propietario, est_mat, idtipov', 'numerical', 'integerOnly'=>true),

			array('id', 'length', 'max'=>9),
			array('image, obs_mat', 'length', 'max'=>300),

			array('id','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idveh, image, anioini, aniofin, id_propietario, obs_mat, est_mat, idtipov, nombre, placa_actual, nom_pro', 'safe', 'on'=>'search'),
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
			'idveh0' => array(self::BELONGS_TO, 'Vehiculo', 'idveh'),
			'idtip0' => array(self::BELONGS_TO, 'Tipoveh', 'idtipov'),
			'idpro' => array(self::BELONGS_TO, 'propietario', 'id_propietario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Formulario',
			'idveh' => 'Placa',
			'idtipov' => 'Tipo de Vehiculo',
			'anioini' => 'Año de Emision',
			'aniofin' => 'Año de Caducidad',
			'id_propietario' => 'Propietario',
			'obs_mat' => 'Observacion',
			'est_mat' => 'Estado',
			
			'image' => 'Image',
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
	public $nombre;
	public $placa_actual;
	public $nom_pro;
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('idveh',$this->idveh);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('anioini',$this->anioini,true);
		$criteria->compare('aniofin',$this->aniofin,true);
		$criteria->compare('id_propietario',$this->id_propietario);
		$criteria->compare('obs_mat',$this->obs_mat,true);
		$criteria->compare('est_mat',$this->est_mat);
		$criteria->compare('idtipov',$this->idtipov);
		 $criteria->addSearchCondition('idtip0.nombre',$this->nombre,true);
		  $criteria->addSearchCondition('idveh0.placa_actual',$this->placa_actual,true);
		   $criteria->addSearchCondition('idpro.nom_pro',$this->nom_pro,true);

		$criteria->with = array('idtip0','idveh0','idpro');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matricula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
