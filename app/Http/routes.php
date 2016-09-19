<?php
/*
|---------------------------------------------------
|Auth Routes
|---------------------------------------------------
 */
Route::group(['middleware'=>'web'],function(){
    //Frontend routes...
    Route::get('/',function(){return 1;});
    //Auth routes...
    Route::auth();
});
