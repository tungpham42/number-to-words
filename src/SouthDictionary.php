<?php
/**
 * @link https://github.com/phpviet/number-to-words
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace PHPViet\NumberToWords;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class SouthDictionary extends Dictionary
{

    /**
     * Thay nghìn => ngàn.
     *
     * @var array
     */
    protected static $exponents = [
        '',
        'ngàn',
        'triệu',
        'tỷ',
        'nghìn tỷ',
        'triệu tỷ'
    ];

    /**
     * @inheritDoc
     */
    public function tripletTenSeparator(): string
    {
        return 'lẻ';
    }

    /**
     * @inheritDoc
     */
    public function specialTripletUnitFour(): string
    {
        return 'bốn';
    }

}