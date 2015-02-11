<?php

/**
 *
 * Frontend Routes
 *
 */

Route::get("/", array("as" => "homepage", function(){
    return "Homepage";
}));

/**
 *
 * Backend Routes
 *
 */
Route::group(array("prefix" => "admin"), function(){

    Route::group(array("before" => "guest"), function(){
        Route::get("login", array("as" => "admin.login", "uses" => "UserController@login"));
        Route::post("login", array("as" => "admin.login", "uses" => "UserController@doLogin"));
    });

    Route::group(array("before" => "auth"), function(){
        Route::get("/", array("as" => "admin.dashboard", "uses" => "DashboardController@index"));

        Route::get("logout", array("as" => "admin.logout", "uses" => "UserController@logout"));
    });

});