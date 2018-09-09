<?php

namespace L;

function unapply($f)
{
    return function (...$xs) use ($f) {
        return $f($xs);
    };
}
