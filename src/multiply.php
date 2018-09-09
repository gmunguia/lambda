<?php

namespace L;

global $_multiply;

$_multiply = curryN(2, function ($a, $b) {
    return $a * $b;
});

function multiply(...$args)
{
    global $_multiply;
    return $_multiply(...$args);
}
