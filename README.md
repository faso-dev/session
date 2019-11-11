# session
This is a basic implementation of PHP super Global $_SESSION to Object representation. This package implement the flash message interface


## Requirements

* php >=7.1.0

## Installation

1. Installation
  ```shell
  $ composer require instantech/session
  ```
2. Usage
  ```php
  <?php
require_once __DIR__.'/vendor/autoload.php';
use Instantech\Session;

session_start();
//Set value in the session with key test
Session::set("test", 'value');
//Get value matched key test
Session::get('test');
//Set a flash message with key success and value IT's success
Session::addFlash('success', "IT's succes");
//Read the flash message with key success
echo Session::flash('success');
//Clear all information in the session
Session::clear();
//Get an array of all value in the session
Session::all();
//Check if some key test exist in the session
Session::has('test');
//Check if some key success exist in the flash message
Session::hasFlash('success');
//Remove the value from the session with key test
Session::remove('test');
  ```
