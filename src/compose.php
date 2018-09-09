<?php

namespace L;

/**
 * Right-to-left function composition.
 *
 * Example: call_user_func(compose(f, g), x) === f(g(x))
 *
 * @param callable $fns,... Functions to be composed.
 * @return callable Composed function.
 */
function compose(
    $fn /* ... fns ($fn is a placeholder to require at least one argument) */
) {
    $fns = array_reverse(func_get_args());
    return function () use ($fns) {
        $xs = func_get_args();
        $firstFn = array_shift($fns);
        return array_reduce(
            $fns,
            function ($acc, $fn) {
                return $fn($acc);
            },
            call_user_func_array($firstFn, $xs)
        );
    };
}
