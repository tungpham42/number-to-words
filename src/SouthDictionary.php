<?php
/**
 * @link https://github.com/tungpham42/number-to-words
 *
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace tungpham42\NumberToWords;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 *
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
        'ngàn tỷ',
        'triệu tỷ',
    ];

    /**
     * {@inheritdoc}
     */
    public function tripletTenSeparator(): string
    {
        return 'lẻ';
    }

    /**
     * {@inheritdoc}
     */
    public function specialTripletUnitFour(): string
    {
        return 'bốn';
    }
}
