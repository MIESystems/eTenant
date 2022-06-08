<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class InstallmentStatus extends Enum
{
    const UNPAID =   0;
    const PAID =   1;
    const PARTIAL = 2;
    const RETURNED = 3;
    const CANCELLED = 4;
    const HOLD = 5;
}
