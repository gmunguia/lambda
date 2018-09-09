<?php

namespace L\Internal;

function partialApply($fn, ...$args)
{
    return function (...$restArgs) use ($fn, $args) {
        return $fn(...$args, ...$restArgs);
    };
}
