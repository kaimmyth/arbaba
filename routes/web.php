
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

/* Sale */
Route::prefix('sale')->group(function () 
{

	Route::get('all-sale',function(){
		$data['content'] ='sale.allsale';
		return view('layouts.content',compact('data'));
	});
	Route::get('invoice',function(){
		$data['content'] ='sale.invoice';
		return view('layouts.content',compact('data'));
	});
	Route::get('customers',function(){
		$data['content'] ='sale.customer';
		return view('layouts.content',compact('data'));
	});
	Route::get('products&services',function(){
		$data['content'] ='sale.products-services';
		return view('layouts.content',compact('data'));
	});
});

/* Taxes */
Route::prefix('tax')->group(function () {
	Route::any('return', function(){
		$data['content'] = 'taxes.return';
		return view('layouts.content',compact('data'));
	});
	Route::any('payment-history', function(){
		$data['content'] = 'taxes.payment_history';
		return view('layouts.content',compact('data'));
	});

});

/* Setting */
Route::prefix('company')->group(function () {
	Route::resource('', 'CompanyController');
	Route::post('store', 'CompanyController@store');
	Route::get('destroy/{id}', 'CompanyController@destroy');
	Route::any('edit/{id}', 'CompanyController@edit');
});
Route::get('Expenses','ExpensesController@index');
Route::get('supplier',function(){
	$data['content'] ='Expenses.supplier';
	return view('layouts.content',compact('data'));
});
Route::get('customer',function(){
	$data['content'] ='Expenses.customer';
	return view('layouts.content',compact('data'));
});
Route::get('employee',function(){
	$data['content'] ='Expenses.employee';
	return view('layouts.content',compact('data'));
});

