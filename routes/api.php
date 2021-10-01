<?php

use App\Http\Controllers\API\CustomerController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//CUSTOMER
Route::post('/store-customer', [CustomerController::class, 'storeCustomer']);
Route::post('/update-customer/{id}', [CustomerController::class, 'updateCustomer']);
Route::post('/customers', [CustomerController::class, 'getCustomers']);
Route::post('/customer/{id}', [CustomerController::class, 'getCustomer']);




