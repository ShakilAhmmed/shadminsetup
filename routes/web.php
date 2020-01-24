<?php



 Route::group(['namespace' => 'Shadmin\Setup\Http\Controllers', 'middleware' => ['web']], function(){
       Route::resource('/setup','SetupController');
});