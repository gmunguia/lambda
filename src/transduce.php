<?php

namespace L;

global $_transduce;

$_transduce = curryN(4, function ($xform, $accumulate, $initial, $collection) {
    return reduce($xform($accumulate), $initial, $collection);
});

function transduce(...$args)
{
    global $_transduce;
    return $_transduce(...$args);
}
