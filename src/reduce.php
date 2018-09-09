<?php

namespace L;

use FunctionalPHP\FantasyLand;

global $_reduce;

$_iterable_reduce = function ($f, $initial, $foldable) {
    $acc = $initial;
    foreach ($foldable as $index => $value) {
        $acc = $f($acc, $value, $index);
    }
    return $acc;
};

$_reduce = curryN(3, function ($f, $initial, $foldable) use (
    $_iterable_reduce
) {
    if ($foldable instanceof FantasyLand\Foldable) {
        return $foldable->reduce($f, $initial);
    }

    if (is_iterable($foldable)) {
        return $_iterable_reduce($f, $initial, $foldable);
    }

    throw new Exception('`reduce` not implemented for given object');
});

function reduce(...$args)
{
    global $_reduce;
    return $_reduce(...$args);
}
