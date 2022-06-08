<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class InstallmentType extends Enum
{
    const CASH =   0;
    const CHECK =   1;
    const BANK_TRANSFER = 2;
}
