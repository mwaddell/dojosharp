<?php 

/*
DoJoSharp - ScriptSharp Bindings for the DojoToolKit

### Requires PHP5 ###

Copyright (c) 2012, Pangaea Information Technologies, Ltd., http://www.pangaeatech.com/
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
 
  * Redistributions of source code must retain the above copyright
    notice, this list of conditions and the following disclaimer.
  * Redistributions in binary form must reproduce the above copyright
    notice, this list of conditions and the following disclaimer in the
    documentation and/or other materials provided with the distribution.
  * Neither the name of Pangaea Information Technologies, nor the names of
    its contributors may be used to endorse or promote products derived from
    this software without specific prior written permission.
        
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS OR CONTRIBUTORS BE
LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF
THE POSSIBILITY OF SUCH DAMAGE.
*/

$objects = simplexml_load_file($argv[1]);

foreach ($objects->object as $function) {
    if (istrue($function, 'private'))
        continue; // Do not process private objects

    $location = get($function, 'location', '')
    if ($location == '')
        continue; // Ignore objects which have no location

    $type = get($function, 'type', '')
    $tags = get($function, 'tags', '')

    if ($tags == "internal"

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
