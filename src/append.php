<?php

namespace L;

use FunctionalPHP\FantasyLand;

// The following line allows `map` to be called inside another function. See [].
global $_append;

$_iterable_append = function ($x, $xs) {
    // xs is copied, not modified in place.
    $xs[] = $x;
    return $xs;
};

$_append = curryN(2, function ($x, $xs) use ($_iterable_append) {
    if ($xs instanceof FantasyLand\Semigroup) {
        return $xs->concat($x);
    }

    if (is_iterable($xs)) {
        return $_iterable_append($x, $xs);
    }

    throw new Exception('`append` not implemented for given object');
});

function append(...$args)
{
    global $_append;
    return $_append(...$args);
}
