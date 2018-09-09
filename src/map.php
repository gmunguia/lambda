<?php

namespace L;

use FunctionalPHP\FantasyLand;

// The following line allows `map` to be called inside another function. See [].
global $_map;

$_iterable_map = function ($f, $functor) {
    $buffer = [];
    foreach ($functor as $index => $value) {
        $buffer[$index] = $f($value, $index, $functor);
    }
    return $buffer;
};

$_map = curryN(2, function ($f, $functor) use ($_iterable_map) {
    if ($functor instanceof FantasyLand\Functor) {
        return $functor->map($f);
    }

    if (is_iterable($functor)) {
        return $_iterable_map($f, $functor);
    }

    throw new Exception('`map` not implemented for given object');
});

function map(...$args)
{
    global $_map;
    return $_map(...$args);
}
