<?php

namespace L;

global $_add;

$_add = curryN(2, function ($a, $b) {
    return $a + $b;
});

function add(...$args)
{
    global $_add;
    return $_add(...$args);
}
