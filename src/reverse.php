<?php

namespace L;

use FunctionalPHP\FantasyLand;

// The following line allows `reverse` to be called inside another function. See [].
global $_reverse;

$_iterable_reverse = function ($collection) {
    $buffer = [];
    foreach ($collection as $value) {
        array_unshift($buffer, $value);
    }
    return $buffer;
};

// TODO: string_reverse

$_reverse = function ($collection) use ($_iterable_reverse) {
    if (is_iterable($collection)) {
        return $_iterable_reverse($collection);
    }

    throw new Exception('`reverse` not implemented for given object');
};

function reverse(...$args)
{
    global $_reverse;
    return $_reverse(...$args);
}
