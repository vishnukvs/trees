<?php

/**
 * This is the model class for table "assessment".
 *
 * The followings are the available columns in table 'assessment':
 * @property integer $id
 * @property string $job_dataworks_no
 * @property string $address
 * @property integer $precinct_id
 * @property string $pre_start_checks
 * @property string $site_specific_preparation
 * @property boolean $notify_emergency_services_utility_providers
 * @property string $notify_emergency_services_utility_providers_note
 */
class Assessment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'assessment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_dataworks_no, address, precinct_id, pre_start_checks, site_specific_preparation, notify_emergency_services_utility_providers', 'required'),
			array('precinct_id, notify_emergency_services_utility_providers', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, job_dataworks_no, address, precinct_id, pre_start_checks, site_specific_preparation, notify_emergency_services_utility_providers', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'job_dataworks_no' => 'Job Dataworks No',
			'address' => 'Address',
			'precinct_id' => 'Precinct',
			'pre_start_checks' => 'Pre Start Checks',
			'site_specific_preparation' => 'Site Specific Preparation',
			'notify_emergency_services_utility_providers' => 'Notify Emergency Services / Utility Providers',
			'notify_emergency_services_utility_providers_note' => 'Emergency Services / Utility Provider Notes',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('job_dataworks_no',$this->job_dataworks_no,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('precinct_id',$this->precinct_id);
		$criteria->compare('pre_start_checks',$this->pre_start_checks,true);
		$criteria->compare('site_specific_preparation',$this->site_specific_preparation,true);
		$criteria->compare('notify_emergency_services_utility_providers',$this->notify_emergency_services_utility_providers);
		$criteria->compare('notify_emergency_services_utility_providers_note',$this->notify_emergency_services_utility_providers_note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Assessment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	public function beforeSave() 
    {
		// convert to Postgres Array
		if($this->pre_start_checks!=='')
			$this->pre_start_checks="{". implode(',',$this->pre_start_checks) ."}";
			
		if($this->site_specific_preparation!=='')
			$this->site_specific_preparation="{". implode(',',$this->site_specific_preparation) ."}";			

		return parent::beforeSave();
    }
    
    
    public function afterFind()
    {
        // convert from Postgres Array to PHP Array
		if($this->pre_start_checks!=='')
			$this->pre_start_checks=explode(',',substr($this->pre_start_checks, 1, -1));
			
		if($this->site_specific_preparation!=='')
			$this->site_specific_preparation=explode(',',substr($this->site_specific_preparation, 1, -1));

		parent::afterFind();            
    }	    	
	
	
}
