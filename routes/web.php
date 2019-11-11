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
Route::post('sale/invoice/add-edit','SalesController@add_edit_invoice');
Route::get('sale/invoice/email/{id}','SalesController@invoice_mail');
Route::get('sale/invoice/print/{id}','SalesController@print_invoice');
Route::get('sale/invoice/delivery_challan/{id}','SalesController@invoice_delivery_challan');
Route::get('sale/invoice/delete/{id}','SalesController@invoice_delete');
Route::get('sale/invoice/get-invoice-details/{id}','SalesController@get_invoice_details');
Route::post('sale/invoice/remainder_mail/{id}','SalesController@invoice_remainder_email');
Route::post('sale/invoice/payment_received','SalesController@receive_payment');

//Customer
Route::get('sale/customers','SalesController@view_customers');
Route::post('sale/customers/add','SalesController@add_customers');
Route::get('sale/customer/delete/{id}','SalesController@delete_customer');
Route::get('sale/customer/view/{id}','SalesController@view_customer');

//Product & Services
Route::get('sale/products-and-services','SalesController@view_products_and_services');
Route::POST('sale/products-and-services/add-edit','SalesController@add_edit_products_and_services');
Route::get('sale/products-and-services/delete/{id}','SalesController@delete_products_and_services');
Route::get('sale/products-and-services/get_products_and_services_details/{id}','SalesController@get_products_and_services_details');


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


/* Expenses */
Route::get('expenses','ExpensesController@index');
Route::post('expenses/add-edit','ExpensesController@add_edit_expenses');
Route::get('expenses/delete/{id}','ExpensesController@delete_expenses');
Route::get('expenses/get-expanses-details/{id}','ExpensesController@get_expenses_details');

Route::get('expenses/suppliers','ExpensesController@suppliers_index');
Route::post('expenses/suppliers/add-edit','ExpensesController@add_edit_suppliers');
Route::get('expenses/suppliers/delete/{id}','ExpensesController@delete_suppliers');
Route::get('expenses/suppliers/get-suppliers-details/{id}','ExpensesController@get_suppliers_details');


/* employee */
Route::get('employee','EmployeesController@index');
Route::post('employee/add-edit-employee','EmployeesController@add_edit_employee');
Route::get('employee/delete/{id}','EmployeesController@delete_employee');
Route::get('employee/get-employee-details/{id}','EmployeesController@get_employee_details');


/* accounting */
// Route::get('accounting', function () {
// 	$data['content'] ='accounting.accounting';
// 	return view('layouts.content',compact('data'));
// });
Route::get('accounting','AccountingController@view_accounting');
Route::post('accounting/add','AccountingController@add_account');
Route::get('accounting/delete/{id}','AccountingController@delete_account');
Route::get('accounting/get_account_details/{id}','AccountingController@get_account_details');
Route::get('accounting/view_accounts','AccountingController@view_accounts');

/* taxes */
Route::post('tax/return/add','TaxesController@insert_tax_return');
Route::get('tax/return/calender','TaxesController@calender');
Route::post('tax/payment-history/add','TaxesController@record_cst_payment');
Route::get('tax/payment-history','TaxesController@tax_payment_history_view');
Route::get('tax/return','TaxesController@tax_return_view');
Route::get('tax/payment-history/delete/{id}','TaxesController@payment_history_del');

Route::get('tax/payment-history/get-payment-details/{id}','TaxesController@get_payment_details');

// purchases
Route::get('purchases/vendor', function () {
	$data['content'] = 'purchases.vendor';
	return view('layouts.content', compact('data'));
});

//recurring expanses

Route::get('purchases/recurring-expenses', function () {
	$data['content'] = 'purchases.recurring-expenses';
	return view('layouts.content', compact('data'));
});

//purchase order

Route::get('purchases/purchase-order', function () {
	$data['content'] = 'purchases.purchase-order';
	return view('layouts.content', compact('data'));
});

//bill

Route::get('purchases/bill', function () {
	$data['content'] = 'purchases.bill';
	return view('layouts.content', compact('data'));
});

//payments made

Route::get('purchases/payments-made', function () {
	$data['content'] = 'purchases.payments-made';
	return view('layouts.content', compact('data'));
});

//vendor credits

Route::get('purchases/vendor-credits', function () {
	$data['content'] = 'purchases.vendor-credits';
	return view('layouts.content', compact('data'));
});

//tax rate
Route::get('tools-master/tax_rate', function () {
	$data['content'] = 'tools-master.tax_rate';
	return view('layouts.content', compact('data'));
});


Route::get('tools-master/currency', function () {
	$data['content'] = 'tools-master.currency';
	return view('layouts.content', compact('data'));
});

//customer2


Route::get('sale/customer2', function () {
	$data['content'] = 'sale.customer2';
	return view('layouts.content', compact('data'));
});

