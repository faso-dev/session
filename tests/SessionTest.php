<?php
session_start();
use Instantech\Session;

require_once __DIR__.'/../vendor/autoload.php';

Session::set('test', 'value of test');
Session::addFlash('success_save', "It's ok");
echo sprintf("This value should be same with 'value of test' : %s",(Session::get('test') === 'value of test') ? 'true' : 'false').'<br>';
echo sprintf("This value should be same with 'It's ok' : %s",(Session::flash('success_save') === "It's ok") ? 'true' : 'false').'<br>';
echo sprintf("This value should be null : %s",(Session::flash('success_save') === null) ? 'true' : 'false').'<br>';
Session::addFlash('another', 'Another value');
echo sprintf("This value should be eq 1: %s",(count(Session::flashes()) === 1) ? 'true' : 'false').'<br>';
echo sprintf("This value should be eq 2: %s",(count(Session::all()) === 2) ? 'true' : 'false').'<br>';
echo sprintf("This value should be eq 3: %s",(count(Session::all()) === 3) ? 'true' : 'false').'<br>';
Session::clear();
echo sprintf("This value should be eq 0 : %s",(count(Session::all()) === 0) ? 'true' : 'false').'<br>';

