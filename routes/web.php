<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/services/airport-limo', function () {
    return view('services.airport-limo');
})->name('services.airport-limo');

Route::get('services/airport-taxi', function () {
    return view('services.airport-taxi');
})->name('services.airport-taxi');

Route::get('services/luxury-limousine-service', function () {
    return view('services.luxury-limousine-service');
})->name('services.luxury-limousine-service');

Route::get('services/toronto-airport-limo-service', function () {
    return view('services.toronto-airport-limo-service');
})->name('services.toronto-airport-limo-service');

Route::get('/our-fleet', function () {
    return view('our-fleet');
})->name('our-fleet');

Route::get('/rates', function () {
    return view('rates');
})->name('rates');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/airport-taxis', function () {
    return view('airport-taxis');
})->name('airport-taxis');

Route::post('/farecalculation', [LocationController::class, 'fareCalculation'])->name('fare.calculation');



//Limo to Airport link list
Route::get('/airport-limos', function () {
    return view('airport-limos');
})->name('airport-limos');

Route::get('/airport-limo/airport-limo-acton', function(){
    return view('airport-limo.airport-limo-acton');
})->name('airport-limo.airport-limo-acton');

Route::get('/airport-limo/airport-limo-ajax', function () {
    return view('airport-limo.airport-limo-ajax');
})->name('airport-limo.airport-limo-ajax');

Route::get('/airport-limo/airport-limo-aldershot',function(){
    return view('airport-limo.airport-limo-aldershot');
})->name('airport-limo.airport-limo-aldershot');

Route::get('/airport-limo/airport-limo-alliston',function(){
    return view('airport-limo.airport-limo-alliston');
})->name('airport-limo.airport-limo-alliston');

Route::get('/airport-limo/airport-limo-alton',function(){
    return view('airport-limo.airport-limo-alton');
})->name('airport-limo.airport-limo-alton');

Route::get('/airport-limo/airport-limo-ancaster',function(){
    return view('airport-limo.airport-limo-ancaster');
})->name('airport-limo.airport-limo-ancaster');

Route::get('/airport-limo/airport-limo-angus',function(){
    return view('airport-limo.airport-limo-angus');
})->name('airport-limo.airport-limo-angus');

Route::get('/airport-limo/airport-limo-arthur',function(){
    return view('airport-limo.airport-limo-arthur');
})->name('airport-limo.airport-limo-arthur');

Route::get('/airport-limo/airport-limo-ashburn',function(){
    return view('airport-limo.airport-limo-ashburn');
})->name('airport-limo.airport-limo-ashburn');

Route::get('/airport-limo/airport-limo-aurora',function(){
    return view('airport-limo.airport-limo-aurora');
})->name('airport-limo.airport-limo-aurora');

Route::get('/airport-limo/airport-limo-ballantrae',function(){
    return view('airport-limo.airport-limo-ballantrae');
})->name('airport-limo.airport-limo-ballantrae');

Route::get('/airport-limo/airport-limo-barrie', function () {
    return view('airport-limo.airport-limo-barrie');
})->name('airport-limo.airport-limo-barrie');

Route::get('/airport-limo/airport-limo-beamsville',function(){
    return view('airport-limo.airport-limo-beamsville');
})->name('airport-limo.airport-limo-beamsville');

Route::get('/airport-limo/airport-limo-beaverton',function(){
    return view('airport-limo.airport-limo-beaverton');
})->name('airport-limo.airport-limo-beaverton');

Route::get('/airport-limo/airport-limo-beeton',function(){
    return view('airport-limo.airport-limo-beeton');
})->name('airport-limo.airport-limo-beeton');

Route::get('/airport-limo/airport-limo-belleville',function(){
    return view('airport-limo.airport-limo-belleville');
})->name('airport-limo.airport-limo-belleville');

Route::get('/airport-limo/airport-limo-binbrook',function(){
    return view('airport-limo.airport-limo-binbrook');
})->name('airport-limo.airport-limo-binbrook');

Route::get('/airport-limo/airport-limo-bolton',function(){
    return view('airport-limo.airport-limo-bolton');
})->name('airport-limo.airport-limo-bolton');

Route::get('/airport-limo/airport-limo-bond-head',function(){
    return view('airport-limo.airport-limo-bond-head');
})->name('airport-limo.airport-limo-bond-head');

Route::get('/airport-limo/airport-limo-bowmanville',function(){
    return view('airport-limo.airport-limo-bowmanville');
})->name('airport-limo.airport-limo-bowmanville');

Route::get('/airport-limo/airport-limo-bracebridge',function(){
    return view('airport-limo.airport-limo-bracebridge');
})->name('airport-limo.airport-limo-bracebridge');

Route::get('/airport-limo/airport-limo-bradford',function(){
    return view('airport-limo.airport-limo-bradford');
})->name('airport-limo.airport-limo-bradford');

Route::get('/airport-limo/airport-limo-brampton', function () {
    return view('airport-limo.airport-limo-brampton');
})->name('airport-limo.airport-limo-brampton');

Route::get('/airport-limo/airport-limo-brantford',function(){
    return view('airport-limo.airport-limo-brantford');
})->name('airport-limo.airport-limo-brantford');

Route::get('/airport-limo/airport-limo-brighton',function(){
    return view('airport-limo.airport-limo-brighton');
})->name('airport-limo.airport-limo-brighton');

Route::get('/airport-limo/airport-limo-brockville',function(){
    return view('airport-limo/airport-limo-brockville');
})->name('airport-limo.airport-limo-brockville');

Route::get('/airport-limo/airport-limo-brooklin',function(){
    return view('airport-limo/airport-limo-brooklin');
})->name('airport-limo.airport-limo-brooklin');

Route::get('/airport-limo/airport-limo-brougham',function(){
    return view('airport-limo/airport-limo-brougham');
})->name('airport-limo.airport-limo-brougham');

Route::get('/airport-limo/airport-limo-burford',function(){
    return view('airport-limo/airport-limo-burford');
})->name('airport-limo.airport-limo-burford');

Route::get('/airport-limo/airport-limo-burlington',function(){
    return view('airport-limo/airport-limo-burlington');
})->name('airport-limo.airport-limo-burlington');

Route::get('/airport-limo/airport-limo-buttonville',function(){
    return view('airport-limo/airport-limo-buttonville');
})->name('airport-limo.airport-limo-buttonville');

Route::get('/airport-limo/airport-limo-caledon-east',function(){
    return view('airport-limo/airport-limo-caledon-east');
})->name('airport-limo.airport-limo-caledon-east');

Route::get('/airport-limo/airport-limo-caledonia',function(){
    return view('airport-limo/airport-limo-caledonia');
})->name('airport-limo.airport-limo-caledonia');

Route::get('/airport-limo/airport-limo-cambridge',function(){
    return view('airport-limo/airport-limo-cambridge');
})->name('airport-limo.airport-limo-cambridge');

