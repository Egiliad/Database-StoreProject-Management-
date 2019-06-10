<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mradi extends Model
{
    //
    
    protected $fillable = [
    	'projectName',
    	'regNumber',
    	'client',
    	'projectRequirements',
    	'user_id',
    	'days',
    	'requiredby',
    	'field',
    	'assignedto',
        'regDate',
    	'ictCost',
    	'electricalCost',
    	'ventCost',
    	'totalCost',
    	'tenderDoc',
    	'subConstractor',
    	'mainConstractor',
    	'projContract',
    	'taxInvoice',
    	'fee',
    	'paid',
    	'remain',
    	'prostatus',
    	
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }
}
