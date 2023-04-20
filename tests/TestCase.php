<?php
/**
 * @link https://github.com/tungpham42/number-to-words
 *
 * @copyright (c) PHP Viet
 * @license [MIT](http://www.opensource.org/licenses/MIT)
 */

namespace tungpham42\NumberToWords\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use tungpham42\NumberToWords\Transformer;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 *
 * @since 1.0.0
 */
class TestCase extends BaseTestCase
{
    /**
     * @var \tungpham42\NumberToWords\DictionaryInterface
     */
    protected $dictionary;

    /**
     * @var Transformer
     */
    protected $transformer;

    public function setUp()
    {
        $this->transformer = new Transformer($this->dictionary);
    }
}
