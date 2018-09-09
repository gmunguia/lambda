<?php

if (!function_exists('L\curry')) {
    require __DIR__ . '/src/Internal/partialApply.php';
    require __DIR__ . '/src/curryN.php';
    require __DIR__ . '/src/fn.php';
    require __DIR__ . '/src/apply.php';
    require __DIR__ . '/src/unapply.php';
    require __DIR__ . '/src/reverse.php';
    require __DIR__ . '/src/compose.php';
    require __DIR__ . '/src/pipe.php';
    require __DIR__ . '/src/id.php';
    require __DIR__ . '/src/multiply.php';
    require __DIR__ . '/src/add.php';
    require __DIR__ . '/src/reduce.php';
    require __DIR__ . '/src/transduce.php';
    require __DIR__ . '/src/map.php';
    require __DIR__ . '/src/append.php';
    require __DIR__ . '/src/filter.php';
}
