<?php

namespace L;

function fn($fn)
{
    return function (...$args) use ($fn) {
        return call_user_func_array($fn, $args);
    };
}
