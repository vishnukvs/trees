<?php

/**
 * This is the model class for table "crew_member".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $pass
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $last_login_time
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 * @property integer $role_id
 *
 * The followings are the available model relations:
 * @property Reconciliation[] $reconciliations
 * @property Reconciliation[] $reconciliations1
 */
class crew_member extends LightActiveRecord
{

	public $pass_repeat;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'crew_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, id', 'required'),

			
		   array('create_user, update_user, role_id', 'numerical', 'integerOnly'=>true),
			array('last_login_time, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, pass, email, first_name, last_name, last_login_time, create_user, create_time, update_user, update_time, role_id', 'safe', 'on'=>'search'),
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
			'trees_create_user' => array(self::HAS_MANY, 'Description', 'create_user'),
			'trees_update_user' => array(self::HAS_MANY, 'Description', 'update_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'pass' => 'Password',
			'pass_repeat' => 'Repeat Password',			
			'email' => 'Email',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'last_login_time' => 'Last Login Time',
			'create_user' => 'Create User',
			'create_time' => 'Create Time',
			'update_user' => 'Update User',
			'update_time' => 'Update Time',
			'role_id' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user',$this->update_user);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('role_id',$this->role_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
        protected function afterValidate()
        {
            parent::afterValidate();
            $this->pass = $this->encrypt($this->pass);
        }
        
        public function encrypt($value)
        {
            return sha1($value);

        }
		
		public function getRole()
		{
            return array(
              1 => 'Admin', 
              2 => 'User', 
            );		
		
		}
	
}