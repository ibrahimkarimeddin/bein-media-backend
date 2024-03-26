<?php declare(strict_types=1);

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CategoryLevelEnum extends Enum
{
    const Category = '1';
    const SubCategory = '2';
    const SubSubCategory = '3';
    const SubSubSubCategory= '4';

    public static $all = [self::Category, self::SubCategory, self::SubSubCategory , self::SubSubSubCategory];

}
