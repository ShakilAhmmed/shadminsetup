<?php

namespace Shadmin\Setup;

use Illuminate\Database\Eloquent\Model;

class SetupModel extends Model
{
    protected $table="setup";
    protected $primaryKey="id";
    protected $fillable=['company_name','company_phone','company_email','company_address','company_facebook_profile','company_logo'];

    public function validation_rules()
    {
    	return [
    		'company_name'=>'required|max:50',
    		'company_phone'=>'required|max:20',
    		'company_email'=>'required|max:100',
    		'company_address'=>'required',
    	];
    }
}
