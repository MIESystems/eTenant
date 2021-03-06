<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ContractStatus extends Enum
{
    const ACTIVE =   0;
    const EXPIRED =   1;
    const TERMINATED = 2;
    const RENEWED = 3;
    const PENDING = 4;
}
