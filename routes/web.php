<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExpanseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\EmployeeController;


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

Route::middleware(
    [ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ]
)->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');









    Route::controller(ExpanseController::class)->group(function () {
        Route::get('/expanse/head', 'ExpHead')->name('expanse.head');
        Route::get('/expanse/create/head', 'CreateHead')->name('create.expanse.head');
        Route::post('/store/create/exp', 'AddExpHead')->name('store.expHead');

        Route::get('/expanse/edit/head/{id}', 'ExpheadEdit');

        Route::get('/expanse/head/delete/{id}','DeleteHead');

        Route::post('/expanse/head/update/{id}', 'UpdateExpHead');



        Route::get('/expanse/show', 'ExpShow')->name('expanse.show');
        Route::get('/expanse/create', 'CreateExp')->name('create.expanse');
        Route::post('/expanse/store', 'StoreExp')->name('store.exp');
        Route::get('/expanse/edit/{id}', 'ExpEdit');


        Route::get('/expanse/delete/{id}', 'DeleteExp');


        Route::post('/expanse/update/{id}', 'UpdateExp');




    });







    Route::controller(IncomeController::class)->group(function () {
        Route::get('/income/head', 'IncomeHead')->name('income.head');
        Route::get('/income/create/head', 'CreateHead')->name('create.income.head');
        Route::post('/store/create', 'AddIncomeHead')->name('store.incomeHead');
        Route::get('/income/edit/head/{id}', 'IncomeheadEdit');

        Route::get('/Income/head/delete/{id}','DeleteHead');

        Route::post('/income/head/update/{id}', 'UpdateincomeHead');



        Route::get('/income/show', 'IncomeShow')->name('income.show');
        Route::get('/income/create', 'CreateIncome')->name('create.income');
        Route::post('/income/store', 'StoreIncome')->name('store.income');
        Route::get('/income/edit/{id}', 'IncomeEdit');


        Route::get('/income/delete/{id}', 'DeleteIncome');


        Route::post('/income/update/{id}', 'UpdateIncome');




    });


    Route::controller(EmployeeController::class)->group(function(){

        Route::get('employee/show','ShowEmp')->name('employee.show');
        Route::get('employee/head','EmployeeHead')->name('employee.head');
        Route::post('store/employee','StoreEmp')->name('store.empHead');


        Route::get('/employee/edit/{id}',  'Edit');
        Route::post('/employee/update/{id}',  'Update');
        Route::get('/employee/delete/{id}',  'Delete');



    });

    Route::get('/expense-income', [AdminController::class, 'expenseIncome'])->name('expense.income');
    


    Route::group(['middleware' => ['permission:publish articles|create user|edit user| delete user|role user|create role|edit role|delete role']

], function () {

        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);



    });









});


