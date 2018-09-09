<?php

namespace L;

function apply($f)
{
    return function ($xs) use ($f) {
        return $f(...$xs);
    };
}
