<?php

Route::get('/employee', 'EmployeeController@index') -> name('employee.index');
Route::get('/employee/create', 'EmployeeController@create') -> name('employee.create');
Route::post('/employee/store', 'EmployeeController@store') -> name('employee.store');