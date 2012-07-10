<?php 

/* Requires PHP5 */

$objects = simplexml_load_file($argv[1]);

foreach ($objects->object as $function) {
    $location = get($function, 'location', '')
    if ($location == '')
        continue; // Ignore objects which have no location

    $type = get($function, 'type', '')
    $tags = get($function, 'tags', '')
    if (istrue($function, 'private'))
        $tags = rtrim("private " . $tags)

    $resources
    $provides
    $parameters
    $summary
    $description
    $examples
    $mixins
    $properties
    $methods
    $return-types
    
    if ($type == 'function') {
        if (istrue($function, 'classlike')) {
            // Process as a class
            $superclass = get($function, 'superclass', '');
            if (istrue($function, 'privateparent')) 
                $superclass = '';

            // TODO
        } else {
            // process as namespace method

            // TODO
        }
    } else {
        // process as a namespace variable or ignore
    }

    // process no-type objects as namespaces and Function objects as classes
}

function istrue($dict, $key)
{
    if isset($dict[$key]) {
        $val = strtolower($dict[$key]);
        if $val == 'true' or $val == strtolower($key):
            return true;
    }
    return false;
}

function get($dict, $key, $default=null)
{
    if isset($dict[$key])
        return $dict[$key];
    return $default;
}

?>
