<?php

namespace L;

function curryN($arity, $fn)
{
    return function (...$args) use ($arity, $fn) {
        if (sizeof($args) >= $arity) {
            return $fn(...$args);
        }

        return curryN(
            $arity - sizeof($args),
            Internal\partialApply($fn, ...$args)
        );
    };
}
