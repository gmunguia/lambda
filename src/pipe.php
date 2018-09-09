<?php

namespace L;

function pipe(...$fns)
{
    return compose(apply(fn('L\compose')), fn('L\reverse'))($fns);
}
