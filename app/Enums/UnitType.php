<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UnitType extends Enum
{
    const FLAT =   0;
    const SHOP =   1;
    const ROOM = 2;
    const STORE = 3;
    const VILLA = 4;
    const WAREHOUSE = 5;
    const OFFICE = 6;
    const LAND = 7;
}
