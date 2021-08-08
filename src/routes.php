<?php
Route::resource('/entity', 'Usthenet\EntityManager\Controllers\EntityController');


Route::namespace('Usthenet\EntityManager\Controllers')->group(function ()
{
    Route::resources([
        "type-entities"=>"TypeEntityController",
        "type-unities"=>"TypeUnityController",
        "category-unities"=>"CategoryUnityController",
        "entities"=>"EntityController",
        "unities"=>"UnityController",
        "officers"=>"OfficerController",
        "offices"=>"OfficeController",
        "current-offices"=>"CurrentOfficeController",
        ]);
    });
