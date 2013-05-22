<?php

/**
 * Circular buffer implementation TESTS
 * Author: Max Barnas
 * Date: 2013.05.22
 **/

/** 
 * Tests to run 
 **/
$tests = array(
    'testIfBufferIsEmpty'
);

require_once "circular_buffer.php";

/** 
  * Preparing tested object 
  **/
function init() 
{
    return new CB();
}

/** 
 * Actual loop for running tests 
 **/
function run() {
    global $tests;
    foreach ($tests as $test) {
        if (function_exists($test)) {
            $results[$test] = call_user_func($test, init());
        }
    }

    echo '<pre>';
    var_dump($results);
    echo '</pre>';
}

function testIfBufferIsEmpty($obj)
{
    return false;
}

run();