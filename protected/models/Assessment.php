<?php

/**
 * This is the model class for table "assessment".
 *
 * The followings are the available columns in table 'assessment':
 * @property integer $id
 * @property string $job_dataworks_no
 * @property string $address
 * @property integer $precinct_id
 * @property integer $no_of_trees_requiring_work
 * @property integer $unit_id
 * @property string $pre_start_checks
 * @property string $site_specific_preparation
 * @property boolean $notify_emergency_services_utility_providers
 * @property string $emergency_services_utility_providers_note
 * @property boolean $existing_property_damage
 * @property string $property_damage_details
 * @property boolean $mobile_phone_coverage
 * @property string $control_plan
 * @property string $site_specific_preparation_notes
 * @property string $task_id
 * @property string $task_notes
 * @property string $equipment_id
 * @property string $equipment_notes
 * @property string $environmental_hazard_id
 * @property string $environmental_hazard_notes
 * @property string $tree_hazard_assessment_id
 * @property string $tree_hazard_assessment_notes
 * @property string $crew_member_id
 */
class Assessment extends TreesSiteAssessmentActiveRecord
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
			array('job_dataworks_no, address, precinct_id, no_of_trees_requiring_work, unit_id, pre_start_checks, site_specific_preparation, notify_emergency_services_utility_providers, existing_property_damage, mobile_phone_coverage, task_id, equipment_id, environmental_hazard_id, tree_hazard_assessment_id, crew_member_id', 'required'),
			array('precinct_id, no_of_trees_requiring_work, unit_id', 'numerical', 'integerOnly'=>true, 'min'=>1),
			array('site_specific_preparation, emergency_services_utility_providers_note, property_damage_details, control_plan, site_specific_preparation_notes, task_notes, equipment_notes, environmental_hazard_notes, tree_hazard_assessment_notes', 'safe'),
			array('emergency_services_utility_providers_note, property_damage_details, control_plan, site_specific_preparation_notes, task_notes, equipment_notes, environmental_hazard_notes, tree_hazard_assessment_notes', 'filter', 'filter'=>'trim'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, job_dataworks_no, address, precinct_id, pre_start_checks, site_specific_preparation, notify_emergency_services_utility_providers, emergency_services_utility_providers_note, existing_property_damage, property_damage_details, mobile_phone_coverage, control_plan, site_specific_preparation_notes, task_id, task_notes, equipment_id, equipment_notes, environmental_hazard_id, environmental_hazard_notes, tree_hazard_assessment_id, tree_hazard_assessment_notes, crew_member_id', 'safe', 'on'=>'search'),
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
			'precinct' => array(self::BELONGS_TO, 'Precinct', 'precinct_id'),
		
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
			'no_of_trees_requiring_work' => 'No of Trees Requiring Work',
			'unit_id' => 'Unit No',
			'pre_start_checks' => 'Pre Start Checks',
			'site_specific_preparation' => 'Site Specific Preparation',
			'notify_emergency_services_utility_providers' => 'Notify Emergency Services Utility Providers',
			'emergency_services_utility_providers_note' => 'Emergency Services Utility Providers Note',
			'existing_property_damage' => 'Existing Property Damage',
			'property_damage_details' => 'Property Damage Details',
			'mobile_phone_coverage' => 'Mobile Phone Coverage',
			'control_plan' => 'Control Plan',
			'site_specific_preparation_notes' => 'Site Specific Preparation Notes',
			'task_id' => 'Task',
			'task_notes' => 'Task Notes',
			'equipment_id' => 'Equipment',
			'equipment_notes' => 'Equipment Notes',
			'environmental_hazard_id' => 'Environmental Hazard',
			'environmental_hazard_notes' => 'Environmental Hazard Notes',
			'tree_hazard_assessment_id' => 'Tree Hazard Assessment',
			'tree_hazard_assessment_notes' => 'Tree Hazard Assessment Notes',
			'crew_member_id' => 'Crew Members',
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
		$criteria->compare('no_of_trees_requiring_work',$this->no_of_trees_requiring_work);
		$criteria->compare('unit_id',$this->unit_id);
		$criteria->compare('pre_start_checks',$this->pre_start_checks,true);
		$criteria->compare('site_specific_preparation',$this->site_specific_preparation,true);
		$criteria->compare('notify_emergency_services_utility_providers',$this->notify_emergency_services_utility_providers);
		$criteria->compare('emergency_services_utility_providers_note',$this->emergency_services_utility_providers_note,true);
		$criteria->compare('existing_property_damage',$this->existing_property_damage);
		$criteria->compare('property_damage_details',$this->property_damage_details,true);
		$criteria->compare('mobile_phone_coverage',$this->mobile_phone_coverage);
		$criteria->compare('control_plan',$this->control_plan,true);
		$criteria->compare('site_specific_preparation_notes',$this->site_specific_preparation_notes,true);
		$criteria->compare('task_id',$this->task_id,true);
		$criteria->compare('task_notes',$this->task_notes,true);
		$criteria->compare('equipment_id',$this->equipment_id,true);
		$criteria->compare('equipment_notes',$this->equipment_notes,true);
		$criteria->compare('environmental_hazard_id',$this->environmental_hazard_id,true);
		$criteria->compare('environmental_hazard_notes',$this->environmental_hazard_notes,true);
		$criteria->compare('tree_hazard_assessment_id',$this->tree_hazard_assessment_id,true);
		$criteria->compare('tree_hazard_assessment_notes',$this->tree_hazard_assessment_notes,true);
		$criteria->compare('crew_member_id',$this->crew_member_id,true);

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

		if($this->task_id!=='')
			$this->task_id="{". implode(',',$this->task_id) ."}";

		if($this->equipment_id!=='')
			$this->equipment_id="{". implode(',',$this->equipment_id) ."}";	

		if($this->environmental_hazard_id!=='')
			$this->environmental_hazard_id="{". implode(',',$this->environmental_hazard_id) ."}";		

		if($this->tree_hazard_assessment_id!=='')
			$this->tree_hazard_assessment_id="{". implode(',',$this->tree_hazard_assessment_id) ."}";					
			
		if($this->crew_member_id!=='')
			$this->crew_member_id="{". implode(',',$this->crew_member_id) ."}";				

		return parent::beforeSave();
    }
    
    
    public function afterFind()
    {
        // convert from Postgres Array to PHP Array
		if($this->pre_start_checks!=='')
			$this->pre_start_checks=explode(',',substr($this->pre_start_checks, 1, -1));
			
		if($this->site_specific_preparation!=='')
			$this->site_specific_preparation=explode(',',substr($this->site_specific_preparation, 1, -1));

		if($this->task_id!=='')
			$this->task_id=explode(',',substr($this->task_id, 1, -1));

		if($this->equipment_id!=='')
			$this->equipment_id=explode(',',substr($this->equipment_id, 1, -1));					

		if($this->environmental_hazard_id!=='')
			$this->environmental_hazard_id=explode(',',substr($this->environmental_hazard_id, 1, -1));			

		if($this->tree_hazard_assessment_id!=='')
			$this->tree_hazard_assessment_id=explode(',',substr($this->tree_hazard_assessment_id, 1, -1));		

			if($this->crew_member_id!=='')
			$this->crew_member_id=explode(',',substr($this->crew_member_id, 1, -1));
			
		return parent::afterFind();            
    }	

	/**
	 * @return array a list of links that point to the post list filtered by every tag of this post
	 */
	public function getTagLinks()
	{
		$links=array();
		foreach(PreStartChecks::string2array($this->pre_start_checks) as $tag)
			$links[]=CHtml::link(CHtml::encode($tag), array('post/index', 'tag'=>$tag));
		return $links;
	}
	
	public function beforeValidate()
	{
		if($this->notify_emergency_services_utility_providers == 1 && trim($this->emergency_services_utility_providers_note) == null)
		{
			$this->addError("emergency_services_utility_providers_note",
					"Please Provide Emergency Services/Utility providers information.");
		}

		if($this->existing_property_damage == 1 && trim($this->property_damage_details) == null)
		{
			$this->addError("property_damage_details",
					"Please Provide Property Damage Details.");
		}
		
		if($this->mobile_phone_coverage == 0 && trim($this->control_plan) == null)
		{
			$this->addError("control_plan",
					"Please Provide Control Plan.");
		}		
		 


	return parent::beforeValidate();


	}
	
	
	

	
}
