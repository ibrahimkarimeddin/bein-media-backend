<?php declare(strict_types=1);

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class DiscountTypeEnum extends Enum
{
    const PRECENT = 'precent';
    const VALUE = 'value';


    public static $all = [self::PRECENT, self::VALUE];

}
