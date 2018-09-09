<?php

namespace L;

// w/a until added to Fantasyland
interface Filterable
{
    public function filter($predicate);
}

// The following line allows `filter` to be called inside another function. See [].
global $_filter;

$_iterable_filter = function ($predicate, $collection) {
    $buffer = [];
    foreach ($collection as $index => $value) {
        if ($predicate($value, $index, $collection)) {
            $buffer[$index] = $value;
        }
    }
    return $buffer;
};

$_filter = curryN(2, function ($predicate, $collection) use (
    $_iterable_filter
) {
    if ($collection instanceof L\Filterable) {
        return $collection->filter($predicate);
    }

    if (is_iterable($collection)) {
        return $_iterable_filter($predicate, $collection);
    }

    throw new Exception('`filter` not implemented for given object');
});

function filter(...$args)
{
    global $_filter;
    return $_filter(...$args);
}
