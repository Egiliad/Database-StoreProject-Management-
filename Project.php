<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
    	'projectName',
    	'regNumber',
    	'client',
    	'member1',
        'member2',
        'member3',
        'member4',
    	'user_id',
    	'days',
    	'requiredby',
    	'field1',
        'field2',
        'field3',
        'field4',
    	// 'assignedto',
        'regDate',
    	'ictCost',
    	'electricalCost',
    	'ventCost',
    	'totalCost',
    	'tenderDoc',
    	'contractor1',
        'contractor2',
        'contractor3',
    	'mainConstractor',
    	'contract1',
        'contract2',
        'contract3',
        'contract4',
    	'invoiceNumber',
        'invoiceDate',
        'remark',
    	'fee',
    	'paid',
    	'remain',
    	'prostatus',
    	
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }
}
