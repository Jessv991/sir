<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class EMPLTABLE extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'sqlsrv_AXDB30';
    protected $table = 'EMPLTABLE';
    protected $primaryKey = 'EMPLID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'EMPLID',
        'NAME',
        'DIMENSION',
        'DIMENSION2_',
        'DIMENSION3_',
        'TRAINING',
        'ADDRESS',
        'PHONE',
        'PHONELOCAL',
        'USERID',
        'ALTNUM',
        'ZIPCODEID',
        'COUNTRYID',
        'STATEID',
        'COUNTYID',
        'URL',
        'EMAIL',
        'TELEX',
        'CELLULARPHONE',
        'TELEFAX',
        'CALENDARID',
        'BIRTHDATE',
        'ALIAS',
        'PROJPERIODID',
        'ITEMBUYERGROUPID',
        'CITY',
        'STREET',
        'PAGER',
        'SMS',
        'TITLE',
        'REFZIPCODE',
        'VALIDATEPROJEMPL',
        'VALIDATEEMPLCATEGORY',
        'RESIGNREASONCODEID',
        'DEL_TITLEID',
        'SENIORITYDATE',
        'OUTLOOKUSERID',
        'DATELASTSYNCWITHOUTLOOK',
        'SYNCINTERVAL',
        'TIMELASTSYNCWITHOUTLOOK',
        'SYNCWITHOUTLOOK',
        'ACTIVATEANSWER',
        'HRMABSENCESETUPID',
        'ABSENCEFROMDATE',
        'WORKINGHOURS',
        'WORKINGHOURS2_',
        'WORKINGHOURS3_',
        'WORKINGHOURS4_',
        'WORKINGHOURS5_',
        'WORKINGHOURS6_',
        'WORKINGHOURS7_',
        'PROBATIONDATE',
        'EMPLOYEETERMINATIONNOTICEUNIT',
        'EMPLOYERTERMINATIONNOTICEUNIT',
        'EMPLOYERTERMINATIONNOTICE',
        'EMPLOYEETERMINATIONNOTICE',
        'DEL_HRMEMPLBANKACCOUNTID',
        'PENSIONSTARTDATEEMPLCONTRACT',
        'PENSIONSTARTDATEEMPL',
        'CURRENCY',
        'HRMINCOMETAXCATEGORYID',
        'HRMINCOMETAXCODEID',
        'EMPLOYERSAVINGAMOUNT',
        'EMPLOYEESAVINGAMOUNT',
        'HOLIDAYS',
        'VACATIONPAYMENT',
        'MOVINGALLOWANCEAMOUNT',
        'FIRSTNAME',
        'MIDDLENAME',
        'LASTNAME',
        'SALUTATION',
        'NAMESUFFIX',
        'INTERNALEXTERNAL',
        'EMAILSAVECOPY',
        'STATUS',
        'PBAUSERPROFILE',
        'HRMUNIONIDNEGOTIATOR',
        'HRMUNIONID',
        'HRMSALARYTYPE',
        'HRMSALARYSCALEDATE',
        'HRMACTIVEINACTIVE',
        'HRMVACATIONWITHSALARY',
        'HRMDAYSOFFWITHSALARY',
        'HRMCAREWITHSALARY',
        'HRMSALARYSENIORITYDATE',
        'ACTIVITYREMINDERMINUTES',
        'SMMSYNCHRONIZEDAYSBACK',
        'SMMSYNCHRONIZEDAYSFORWARD',
        'VATNUM',
        'WORKPHONE',
        'PHONELOCAL2',
        'SEDE',
        'SIR_ACTIVE',
        'SIR_PASSWORD',
        'DATAAREAID',
        'RECID',
        'WORKINGCOMPANY',
        'CREATEDDATE',
        'SIR_PASSWORD2',
        'EMPLIDRESPONSABLE',
        'MODIFIEDDATE',
        'MODIFIEDTIME',
        'MODIFIEDBY',
        'CREATEDTIME',
        'CREATEDBY',
        'COMPANYCRM'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'SIR_PASSWORD',
        'SIR_ACTIVE',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'EMPLID' => 'string',
        'NAME' => 'string',
        'DIMENSION' => 'string',
        'DIMENSION2_' => 'string',
        'DIMENSION3_' => 'string',
        'TRAINING' => 'string',
        'ADDRESS' => 'string',
        'PHONE' => 'string',
        'PHONELOCAL' => 'string',
        'USERID' => 'string',
        'ALTNUM' => 'string',
        'ZIPCODEID' => 'string',
        'COUNTRYID' => 'string',
        'STATEID' => 'string',
        'COUNTYID' => 'string',
        'URL' => 'string',
        'EMAIL' => 'string',
        'TELEX' => 'string',
        'CELLULARPHONE' => 'string',
        'TELEFAX' => 'string',
        'CALENDARID' => 'string',
        'BIRTHDATE' => 'datetime',
        'ALIAS' => 'string',
        'PROJPERIODID' => 'string',
        'ITEMBUYERGROUPID' => 'string',
        'CITY' => 'string',
        'STREET' => 'string',
        'PAGER' => 'string',
        'SMS' => 'string',
        'TITLE' => 'string',
        'REFZIPCODE' => 'integer',
        'VALIDATEPROJEMPL' => 'integer',
        'VALIDATEEMPLCATEGORY' => 'integer',
        'RESIGNREASONCODEID' => 'string',
        'DEL_TITLEID' => 'string',
        'SENIORITYDATE' => 'datetime',
        'OUTLOOKUSERID' => 'string',
        'DATELASTSYNCWITHOUTLOOK' => 'datetime',
        'SYNCINTERVAL' => 'integer',
        'TIMELASTSYNCWITHOUTLOOK' => 'integer',
        'SYNCWITHOUTLOOK' => 'integer',
        'ACTIVATEANSWER' => 'integer',
        'HRMABSENCESETUPID' => 'string',
        'ABSENCEFROMDATE' => 'datetime',
        'WORKINGHOURS' => 'float',
        'WORKINGHOURS2_' => 'float',
        'WORKINGHOURS3_' => 'float',
        'WORKINGHOURS4_' => 'float',
        'WORKINGHOURS5_' => 'float',
        'WORKINGHOURS6_' => 'float',
        'WORKINGHOURS7_' => 'float',
        'PROBATIONDATE' => 'datetime',
        'EMPLOYEETERMINATIONNOTICEUNIT' => 'integer',
        'EMPLOYERTERMINATIONNOTICEUNIT' => 'integer',
        'EMPLOYERTERMINATIONNOTICE' => 'integer',
        'EMPLOYEETERMINATIONNOTICE' => 'integer',
        'DEL_HRMEMPLBANKACCOUNTID' => 'string',
        'PENSIONSTARTDATEEMPLCONTRACT' => 'datetime',
        'PENSIONSTARTDATEEMPL' => 'datetime',
        'CURRENCY' => 'string',
        'HRMINCOMETAXCATEGORYID' => 'string',
        'HRMINCOMETAXCODEID' => 'string',
        'EMPLOYERSAVINGAMOUNT' => 'float',
        'EMPLOYEESAVINGAMOUNT' => 'float',
        'HOLIDAYS' => 'float',
        'VACATIONPAYMENT' => 'float',
        'MOVINGALLOWANCEAMOUNT' => 'float',
        'FIRSTNAME' => 'string',
        'MIDDLENAME' => 'string',
        'LASTNAME' => 'string',
        'SALUTATION' => 'integer',
        'NAMESUFFIX' => 'integer',
        'INTERNALEXTERNAL' => 'integer',
        'EMAILSAVECOPY' => 'integer',
        'STATUS' => 'integer',
        'PBAUSERPROFILE' => 'string',
        'HRMUNIONIDNEGOTIATOR' => 'string',
        'HRMUNIONID' => 'string',
        'HRMSALARYTYPE' => 'integer',
        'HRMSALARYSCALEDATE' => 'datetime',
        'HRMACTIVEINACTIVE' => 'integer',
        'HRMVACATIONWITHSALARY' => 'integer',
        'HRMDAYSOFFWITHSALARY' => 'integer',
        'HRMCAREWITHSALARY' => 'integer',
        'HRMSALARYSENIORITYDATE' => 'datetime',
        'ACTIVITYREMINDERMINUTES' => 'integer',
        'SMMSYNCHRONIZEDAYSBACK' => 'integer',
        'SMMSYNCHRONIZEDAYSFORWARD' => 'integer',
        'VATNUM' => 'string',
        'WORKPHONE' => 'string',
        'PHONELOCAL2' => 'string',
        'SEDE' => 'string',
        'SIR_ACTIVE' => 'integer',
        'SIR_PASSWORD' => 'string',
        'DATAAREAID' => 'string',
        'RECID' => 'integer',
        'WORKINGCOMPANY' => 'string',
        'CREATEDDATE' => 'datetime',
        'SIR_PASSWORD' => 'string',
        'EMPLIDRESPONSABLE' => 'string',
        'MODIFIEDDATE' => 'datetime',
        'MODIFIEDTIME' => 'integer',
        'MODIFIEDBY' => 'string',
        'CREATEDTIME' => 'integer',
        'CREATEDBY' => 'string',
        'COMPANYCRM' => 'string',
    ];


    /*  public function getAuthPassword()
    {    
        return $this->SIR_PASSWORD;
    }

    public function getIsActive()
    {    
        return $this->SIR_ACTIVE;
    }

    public function getUserProfile()
    {    
        return $this->PBAUSERPROFILE;
    } */

    public static function getCodigoEmpleado($email)
    {
        $emplid = DB::connection('sqlsrv_AXDB30')->table('EMPLTABLE')
            ->select('EMPLID')
            ->where('EMAIL', $email)
            ->where(function ($query) {
                $query->whereIn('DATAAREAID', ['far', 'vir'])
                    ->orWhere('WORKINGCOMPANY', 'NSL');
            })
            ->limit(1)
            ->first();

        return $emplid?->EMPLID ?? null;
    }

    public static function withValidCredentials($email, $password)
    {
        return static::where('EMAIL', $email)
            ->where('SIR_PASSWORD', $password)
            ->where('SIR_ACTIVE', 1)
            ->where('DATAAREAID', 'vir')
            ->first();
    }
}
