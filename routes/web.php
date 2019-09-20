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
Route::get('addPerm', function () {

    // $permissions = [
    //     // 'Add Master',
    //     // 'Edit Master',
    //     // 'Delete Master',
    //     // 'List Master',
    //     'Add Teacher',
    //     'Edit Teacher',
    //     'Delete Teacher',
    //     'List Teacher',
    //     'Add Student',
    //     'Edit Student',
    //     'Delete Student',
    //     'List Student',
    // ];

    // foreach ($permissions as $permission) {
    //    \Spatie\Permission\Models\Permission::create([
    //        'name'          => str_slug($permission,'_'),
    //        // 'display_name'  => $permission
    //    ]);
    // }

//    return view('welcome');
    return redirect()->route('login');
});


Route::get('/', 'HomeController@index')->name('admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => 'admin.auth', 'namespace' => 'Admin'], function() {
	
    Route::get('tests', ['as' => 'admin.tests.index', 'uses' => 'TestController@index']);
    Route::get('tests/create', ['as' => 'admin.tests.create', 'uses' => 'TestController@create']);
    Route::post('tests', ['as' => 'admin.tests.store', 'uses' => 'TestController@store']);
    Route::get('tests/{id}', [ 'as' => 'admin.tests.show', 'uses' => 'TestController@show' ]);
    Route::get('tests/{id}/edit', ['as' => 'admin.tests.edit', 'uses' => 'TestController@edit']);
    Route::put('tests/{id}', ['as' => 'admin.tests.update', 'uses' => 'TestController@update']);
    Route::get('tests/{id}/destroy', ['as' => 'admin.tests.delete', 'uses' => 'TestController@destroy']);


    Route::get('sessions', ['as' => 'admin.sessions.index', 'uses' => 'SessionController@index']);
    Route::get('sessions/create', ['as' => 'admin.sessions.create', 'uses' => 'SessionController@create']);
    Route::post('sessions', ['as' => 'admin.sessions.store', 'uses' => 'SessionController@store']);
    Route::get('sessions/{id}', [ 'as' => 'admin.sessions.show', 'uses' => 'SessionController@show' ]);
    Route::get('sessions/{id}/edit', ['as' => 'admin.sessions.edit', 'uses' => 'SessionController@edit']);
    Route::put('sessions/{id}', ['as' => 'admin.sessions.update', 'uses' => 'SessionController@update']);
    Route::get('sessions/{id}/destroy', ['as' => 'admin.sessions.delete', 'uses' => 'SessionController@destroy']);

    Route::get('sections', ['as' => 'admin.sections.index', 'uses' => 'SectionController@index']);
    Route::get('sections/create', ['as' => 'admin.sections.create', 'uses' => 'SectionController@create']);
    Route::post('sections', ['as' => 'admin.sections.store', 'uses' => 'SectionController@store']);
    Route::get('sections/{id}', [ 'as' => 'admin.sections.show', 'uses' => 'SectionController@show' ]);
    Route::get('sections/{id}/edit', ['as' => 'admin.sections.edit', 'uses' => 'SectionController@edit']);
    Route::put('sections/{id}', ['as' => 'admin.sections.update', 'uses' => 'SectionController@update']);
    Route::get('sections/{id}/destroy', ['as' => 'admin.sections.delete', 'uses' => 'SectionController@destroy']);

    Route::get('subjects', ['as' => 'admin.subjects.index', 'uses' => 'SubjectController@index']);
    Route::get('subjects/create', ['as' => 'admin.subjects.create', 'uses' => 'SubjectController@create']);
    Route::post('subjects', ['as' => 'admin.subjects.store', 'uses' => 'SubjectController@store']);
    Route::get('subjects/{id}', [ 'as' => 'admin.subjects.show', 'uses' => 'SubjectController@show' ]);
    Route::get('subjects/{id}/edit', ['as' => 'admin.subjects.edit', 'uses' => 'SubjectController@edit']);
    Route::put('subjects/{id}', ['as' => 'admin.subjects.update', 'uses' => 'SubjectController@update']);
    Route::get('subjects/{id}/destroy', ['as' => 'admin.subjects.delete', 'uses' => 'SubjectController@destroy']);

    Route::get('classes', ['as' => 'admin.classes.index', 'uses' => 'ClassController@index']);
    Route::get('classes/create', ['as' => 'admin.classes.create', 'uses' => 'ClassController@create']);
    Route::post('classes', ['as' => 'admin.classes.store', 'uses' => 'ClassController@store']);
    Route::get('classes/{id}', [ 'as' => 'admin.classes.show', 'uses' => 'ClassController@show' ]);
    Route::get('classes/{id}/edit', ['as' => 'admin.classes.edit', 'uses' => 'ClassController@edit']);
    Route::put('classes/{id}', ['as' => 'admin.classes.update', 'uses' => 'ClassController@update']);
    Route::get('classes/{id}/destroy', ['as' => 'admin.classes.delete', 'uses' => 'ClassController@destroy']);

    Route::get('schools', ['as' => 'admin.schools.index', 'uses' => 'SchoolController@index']);
    Route::get('schools/create', ['as' => 'admin.schools.create', 'uses' => 'SchoolController@create']);
    Route::post('schools', ['as' => 'admin.schools.store', 'uses' => 'SchoolController@store']);
    Route::get('schools/{id}', [ 'as' => 'admin.schools.show', 'uses' => 'SchoolController@show' ]);
    Route::get('schools/{id}/edit', ['as' => 'admin.schools.edit', 'uses' => 'SchoolController@edit']);
    Route::put('schools/{id}', ['as' => 'admin.schools.update', 'uses' => 'SchoolController@update']);
    Route::get('schools/{id}/destroy', ['as' => 'admin.schools.delete', 'uses' => 'SchoolController@destroy']);

    Route::get('teachers', ['as' => 'admin.teachers.index', 'uses' => 'TeacherController@index']);
    Route::get('teachers/create', ['as' => 'admin.teachers.create', 'uses' => 'TeacherController@create']);
    Route::post('teachers', ['as' => 'admin.teachers.store', 'uses' => 'TeacherController@store']);
    Route::get('teachers/{id}', [ 'as' => 'admin.teachers.show', 'uses' => 'TeacherController@show' ]);
    Route::get('teachers/{id}/edit', ['as' => 'admin.teachers.edit', 'uses' => 'TeacherController@edit']);
    Route::put('teachers/{id}', ['as' => 'admin.teachers.update', 'uses' => 'TeacherController@update']);
    Route::get('teachers/{id}/destroy', ['as' => 'admin.teachers.delete', 'uses' => 'TeacherController@destroy']);

});