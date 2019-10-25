
<?php
Route::get('clear-cache', function () {
	$exitCode = Artisan::call('config:clear');
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('view:clear');
	Session::flash('success', 'All Clear');
	echo "DONE";
});

Route::get('update-site', function () {
	$data['content'] = 'errors.comming-soon';
	return view('layouts.content', compact('data'));
});

Route::get('/', function () {
	return view('admin.admin-login');
});
Auth::routes();
Route::get('user-profile', 'HomeController@UserProfile');
Route::any('edit-userprofile', 'HomeController@UpdateProfile');

Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@Dashboard');


// Route::prefix('sale')->group(function () 
// {

// 	// Route::get('all-sale',function(){
// 	// 	$data['content'] ='sale.allsale';
// 	// 	return view('layouts.content',compact('data'));
// 	// });
// 	Route::get('invoice',function(){
// 		$data['content'] ='sale.invoice';
// 		return view('layouts.content',compact('data'));
// 	});
// 	Route::get('customers',function(){
// 		$data['content'] ='sale.customer';
// 		return view('layouts.content',compact('data'));
// 	});
// 	Route::get('products&services',function(){
// 		$data['content'] ='sale.products-services';
// 		return view('layouts.content',compact('data'));
// 	});
// });

/* Sale */

// All Sales
Route::get('sale/all-sale','SalesController@view_all_sales');

// Invoices
Route::get('sale/invoice','SalesController@view_invoices');
Route::post('sale/invoice/add','SalesController@insert_invoice');
Route::get('sale/invoice/email/{id}','SalesController@invoice_mail');

Route::get('sale/customers','SalesController@view_customers');
Route::post('sale/customers/add','SalesController@add_customers');
Route::get('sale/products&services','SalesController@view_products_and_services');
Route::POST('sale/products-and-services/add','SalesController@add_products_and_services');
Route::get('sale/products-and-services/delete/{id}','SalesController@delete_products_and_services');


/* Taxes */
// Route::prefix('tax')->group(function () {
// 	Route::any('return', function(){
// 		$data['content'] = 'taxes.return';
// 		return view('layouts.content',compact('data'));
// 	});
	//  Route::any('payment-history', function(){
	//  	$data['content'] = 'taxes.payment_history';
	//  	return view('layouts.content',compact('data'));
	//  });

// });

/* Setting */
Route::prefix('company')->group(function () {
	Route::resource('', 'CompanyController');
	Route::post('store', 'CompanyController@store');
	Route::get('destroy/{id}', 'CompanyController@destroy');
	Route::any('edit/{id}', 'CompanyController@edit');
});

//Expenses
Route::get('expenses','ExpensesController@index');
Route::post('expenses/add-edit','ExpensesController@add_edit_expenses');
Route::get('expenses/delete/{id}','ExpensesController@delete_expenses');
Route::get('expenses/get-expanses-details/{id}','ExpensesController@get_expenses_details');
Route::post('customer/add','ExpensesController@expenses_customer_insert');

Route::get('supplier',function(){
	$data['content'] ='Expenses.supplier';
	return view('layouts.content',compact('data'));
});


Route::get('customer','ExpensesController@view_customer');

Route::get('employee','ExpensesController@view_employee');
Route::post('employee/add-edit-employee','ExpensesController@add_edit_employee');
Route::get('employee/delete/{id}','ExpensesController@delete_employee');
Route::get('employee/get-employee-details/{id}','ExpensesController@get_employee_details');

	


//Taxes
Route::post('tax/return/add','TaxesController@insert_tax_return');
Route::get('tax/return/calender','TaxesController@calender');
Route::post('tax/payment-history/add','TaxesController@record_cst_payment');
Route::get('tax/payment-history','TaxesController@tax_payment_history_view');
Route::get('tax/return','TaxesController@tax_return_view');
Route::get('tax/payment-history/delete/{id}','TaxesController@payment_history_del');



