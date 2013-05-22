<?php

/**
Circular buffer implementation TESTS
**/
$tests = array(
    'testIfBufferIsEmpty'
);

function run() {
    global $tests;
    foreach ($tests as $test) {
        if (function_exists($test)) {
            $results[$test] = call_user_func($test);
        }
    }

    var_dump($results);
}

function testIfBufferIsEmpty()
{
    return false;
}

run();