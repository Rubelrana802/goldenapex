<?php



Route::get('/', function () {
    return view('admin.login.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Add invoice */
Route::get('/invoice/new', 'invoiceController@index');
Route::post('/invoice/manage', 'invoiceController@save');
Route::get('/invoice/pos', 'invoiceController@pos');
Route::get('/invoice/edit/{id}', 'invoiceController@edit');
Route::post('/invoice/edit', 'invoiceController@update');
Route::get('/invoice/delete/{id}', 'invoiceController@delete');
/* End invoice */


/* Add category */
Route::get('/category/save', 'categoryController@index');
Route::post('/category/save', 'categoryController@save');
Route::get('/category/manage', 'categoryController@manage');
Route::get('/category/edit/{id}', 'categoryController@edit');
Route::post('/category/edit', 'categoryController@update');
Route::get('/category/delete/{id}', 'categoryController@delete');
/* End category */


/*Start Unit*/
Route::get('/unit/add', 'unitController@index');
Route::post('/unit/save', 'unitController@save');
Route::get('/unit/manage', 'unitController@manage');
Route::get('/unit/edit/{id}','unitController@edit');
Route::post('/unit/update','unitController@update');
Route::get('/unit/delete/{id}', 'unitController@delete');
/*end Unit*/

/*start supplier*/
Route::get('/supplier/add', 'supplierController@index');
Route::post('/supplier/save', 'supplierController@save');
Route::get('/supplier/manage', 'supplierController@manage');
Route::get('/supplier/edit/{id}','supplierController@edit');
Route::post('/supplier/update','supplierController@update');
Route::get('/supplier/delete/{id}', 'supplierController@delete');
/*end supplier*/

/*start customer*/
Route::get('/customer/add', 'customerController@index');
Route::post('/customer/save', 'customerController@save');
Route::get('/customer/manage', 'customerController@manage');
Route::get('/customer/edit/{id}','customerController@edit');
Route::post('/customer/update','customerController@update');
Route::get('/customer/delete/{id}', 'customerController@delete');
Route::get('customer/credit', 'customerController@managecredit');
Route::get('/customer/paid', 'customerController@managepaid');
/*end customer*/


/*start tax*/
Route::get('/tax/add', 'taxController@index');
Route::post('/tax/save', 'taxController@save');
Route::get('/tax/manage', 'taxController@manage');
Route::get('/tax/edit/{id}','taxController@edit');
Route::post('/tax/update','taxController@update');
Route::get('/tax/delete/{id}', 'taxController@delete');
/*end tax*/


/*start product*/
Route::get('/product/add', 'productController@index');
Route::post('/product/save', 'productController@save');
Route::get('/product/manage', 'productController@manage');
Route::get('/product/edit/{id}','productController@edit');
Route::post('/product/update','productController@update');
Route::get('/product/delete/{id}', 'productController@delete');
/*end Product*/

/*start bank*/
Route::get('/bank/add', 'bankController@index');
Route::post('/bank/save', 'bankController@save');
Route::get('/bank/manage', 'bankController@manage');
Route::get('/bank/edit/{id}','bankController@edit');
Route::post('/bank/update','bankController@update');
Route::get('/bank/transaction', 'bankController@transaction');
/*end bank*/

/*Office loan start*/
Route::get('/officeloan/add', 'officeloadController@index');
Route::post('/officeloan/save', 'officeloadController@save');
Route::get('/officeloan/loan', 'officeloadController@loan');
Route::get('/officeloan/payment', 'officeloadController@payment');
Route::get('/loan/manage', 'officeloadController@manageloan');
Route::get('/officeloan/manage', 'officeloadController@manage');
Route::get('/officeloan/edit/{id}','officeloadController@edit');
Route::post('/officeloan/update','officeloadController@update');
Route::get('/officeloan/transaction', 'officeloadController@transaction');
/*Office loan end*/


Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');