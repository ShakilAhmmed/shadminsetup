<?php

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setup')->create([
        	'id'=>1,
        	'company_name'=>'Test',
        	'company_phone'=>'0184',
        	'company_email'=>'test@package.com',
        	'company_address'=>'Test',
        	'company_facebook_profile'=>'Test',
        	'company_logo'=>'https://i.ya-webdesign.com/images/avatar-png-3.png',
        ]);
    }
}
