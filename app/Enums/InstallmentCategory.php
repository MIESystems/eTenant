<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class InstallmentCategory extends Enum
{
    const INSTALLMENT =   0;
    const SECURITY_DEPOSIT =   1;
    const VAT = 2;
}
