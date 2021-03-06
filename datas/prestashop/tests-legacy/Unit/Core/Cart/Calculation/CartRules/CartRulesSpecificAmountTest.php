<?php
/**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace LegacyTests\Unit\Core\Cart\Calculation\CartRules;

use LegacyTests\Unit\Core\Cart\Calculation\AbstractCartCalculationTest;

/**
 * behat equivalent : Scenarii/Cart/Calculation/CartRule/amount_specific.feature
 */
class CartRulesSpecificAmountTest extends AbstractCartCalculationTest
{
    /**
     * @dataProvider cartWithOneProductSpecificCartRulesAmountProvider
     */
    public function testCartWithOneProductSpecificCartRulesAmount(
        $productData,
        $expectedTotal,
        $cartRuleData,
        $knownToFailOnV1
    ) {
        $this->addProductsToCart($productData);
        $this->addCartRulesToCart($cartRuleData);
        $this->compareCartTotalTaxIncl($expectedTotal, $knownToFailOnV1);
    }

    public function cartWithOneProductSpecificCartRulesAmountProvider()
    {
        return [
            'empty cart'                                                                      => [
                'products'        => [],
                'expectedTotal'   => 0,
                'cartRules'       => [8],
                'knownToFailOnV1' => false,
            ],
            'one product in cart, quantity 1, one specific 5??? voucher on product #2'          => [
                'products'        => [
                    1 => 1,
                ],
                'expectedTotal'   => static::PRODUCT_FIXTURES[1]['price']
                + static::DEFAULT_SHIPPING_FEE + static::DEFAULT_WRAPPING_FEE,
                // specific discount not applied on product #1
                'cartRules'       => [8],
                'knownToFailOnV1' => false,
            ],
            'one product in cart, quantity 3, one specific 5??? voucher on product #2'          => [
                'products'        => [
                    1 => 3,
                ],
                'expectedTotal'   => 3 * static::PRODUCT_FIXTURES[1]['price']
                + static::DEFAULT_SHIPPING_FEE + static::DEFAULT_WRAPPING_FEE,
                // specific discount not applied on product #1
                'cartRules'       => [8],
                'knownToFailOnV1' => false,
            ],
            '3 products in cart, several quantities, one specific 5??? voucher on product #2'   => [
                'products'        => [
                    2 => 2, // 64.776
                    1 => 3, // 59.43
                    3 => 1, // 31.188
                    // total without rule : 155.41
                ],
                'expectedTotal'   => 3 * static::PRODUCT_FIXTURES[1]['price']
                + 2 * static::PRODUCT_FIXTURES[2]['price']
                + static::PRODUCT_FIXTURES[3]['price']
                - static::CART_RULES_FIXTURES[8]['amount']
                + static::DEFAULT_SHIPPING_FEE + static::DEFAULT_WRAPPING_FEE,
                'cartRules'       => [8],
                'knownToFailOnV1' => false,
            ],
            '3 products in cart, several quantities, one specific 500??? voucher on product #2' => [
                'products'        => [
                    2 => 2, // 64.776
                    1 => 3, // 59.43
                    3 => 1, // 31.188
                    // total without rule : 155.41
                ],
                'expectedTotal'   => 3 * static::PRODUCT_FIXTURES[1]['price']
                + static::PRODUCT_FIXTURES[3]['price']
                + static::DEFAULT_SHIPPING_FEE + static::DEFAULT_WRAPPING_FEE,
                // voucher exceeds #2 total
                'cartRules'       => [9],
                'knownToFailOnV1' => true,
            ],
        ];
    }
}
