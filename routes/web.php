<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
    
});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('student', 'StudentCrudController');
<<<<<<< HEAD
    CRUD::resource('misc', 'MiscCrudController');
=======
    CRUD::resource('schoolyear', 'SchoolYearCrudController');
    CRUD::resource('curriculum_management', 'CurriculumManagementCrudController');
    CRUD::resource('subject_management', 'SubjectManagementCrudController');
    CRUD::resource('year_management', 'YearManagementCrudController');
    CRUD::resource('section_management', 'SectionManagementCrudController');
>>>>>>> 07ad41e1e50b09dc8a8e4e99b84cee5eaffc38e4
    CRUD::resource('tag', 'TagCrudController');
    Route::get('student/{students}/print', 'StudentPrintController@index');
});
