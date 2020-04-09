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
    return view('dashboard1');
});

Route::get('/v2', function () {
    return view('dashboard2');
});

Route::get('/v3', function () {
    return view('dashboard3');
});

Route::get('widgets', function() {
	return view('components.widgets');
});


Route::group(['prefix' => 'charts'], function() {

	Route::get('chartjs', function() {
		return view('components.charts.chartjs');
	});

	Route::get('flot', function() {
		return view('components.charts.flot');
	});

	Route::get('inline', function() {
		return view('components.charts.inline');
	});

});


Route::group(['prefix' => 'UI'], function() {

	Route::get('general', function(){
		return view('components.ui_elements.general');
	});
	Route::get('icons', function(){
		return view('components.ui_elements.icons');
	});

	Route::get('buttons', function(){
		return view('components.ui_elements.buttons');
	});

	Route::get('sliders', function(){
		return view('components.ui_elements.sliders');
	});


	Route::get('modals', function(){
		return view('components.ui_elements.modals');
	});

	Route::get('tabs', function(){
		return view('components.ui_elements.tabs');
	});

	Route::get('timeline', function(){
		return view('components.ui_elements.timeline');
	});

	Route::get('ribbon', function(){
		return view('components.ui_elements.ribbons');
	});

});


Route::group(['prefix' => 'layoutOptions'], function() {

	Route::get('top_nav', function(){
		return view('components.layout_options.top_nav');
	});

	Route::get('top_nav_sidebar', function() {
		return view('components.layout_options.top_nav_sidebar');
	});

	Route::get('boxed', function() {
		return view('components.layout_options.boxed');
	});

	Route::get('fixed_sidebar', function() {
		return view('components.layout_options.fixed_sidebar');
	});

	Route::get('fixed_navbar', function() {
		return view('components.layout_options.fixed_navbar');
	});

	Route::get('fixed_footer', function() {
		return view('components.layout_options.fixed_footer');
	});

	Route::get('collapsed_sidebar', function() {
		return view('components.layout_options.collapsed_sidebar');
	});
});

Route::group(['prefix' => 'form'], function() {
	
	Route::get('general', function() {
		return view('components.form.general');
	});

	Route::get('advanced', function() {
		return view('components.form.advanced');
	});

	Route::get('editor', function() {
		return view('components.form.editor');
	});

	Route::get('validation', function() {
		return view('components.form.validation');
	});
});


Route::group(['prefix' => 'table'], function() {
	
	Route::get('simple', function() {
		return view('components.table.simple');
	});

	Route::get('datatable', function() {
		return view('components.table.datatable');
	});

	Route::get('jsgrid', function() {
		return view('components.table.jsgrid');
	});

});

Route::group(['prefix' => 'extras'], function() {
	
	Route::get('login', function() {
		return view('components.extras.login');
	});

	Route::get('register', function() {
		return view('components.extras.register');
	});

	Route::get('forgot_password', function() {
		return view('components.extras.forget_password');
	});

});