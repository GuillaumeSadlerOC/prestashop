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

namespace LegacyTests\Integration\PrestaShopBundle\Test;

use Context;
use Currency;
use Employee;
use Language;
use Link;
use PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider;
use PrestaShop\PrestaShop\Adapter\LegacyContext;
use PrestaShop\PrestaShop\Core\Addon\Theme\Theme;
use PrestaShop\PrestaShop\Core\Kpi\Row\KpiRowPresenterInterface;
use Psr\Log\NullLogger;

use Shop;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as TestCase;
use Symfony\Component\Routing\Router;
use Symfony\Component\Translation\Translator;

/**
 * Responsible of e2e and integration tests using Symfony.
 * It is the same as LegacyTests\Integration\PrestaShopBundle\Test\WebTestCase
 * but lighter as it does not restore the database, but it still setup
 * a Symfony context.
 */
class LightWebTestCase extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var Translator
     */
    protected $translator;

    protected function setUp()
    {
        parent::setUp();
        $this->client = self::createClient();
        $this->router = self::$kernel->getContainer()->get('router');
        $this->translator = self::$kernel->getContainer()->get('translator');

        $employeeMock = $this->getMockBuilder(Employee::class)
            ->getMock();
        $employeeMock->id_profile = 1;

        $contextMock = $this->getMockBuilder(Context::class)
            ->setMethods(array('getTranslator', 'getContext'))
            ->disableOriginalConstructor()
            ->getMock();

        $contextMock->method('getTranslator')
            ->will($this->returnValue($this->translator));

        $contextMock->method('getContext')
            ->will($this->returnValue($contextMock));

        $contextMock->employee = $employeeMock;

        $shopMock = $this->getMockBuilder(Shop::class)
            ->setMethods(array('getBaseURL'))
            ->disableOriginalConstructor()
            ->getMock();

        $shopMock->id = 1;
        $shopMock->method('getBaseURL')
            ->willReturn('my-awesome-url.com');

        $contextMock->shop = $shopMock;

        $contextMock->shop->theme = new Theme([
            'name' => 'classic',
            'directory' => _PS_ROOT_DIR_.'/themes/',
        ]);

        $countryMock = $this->getMockBuilder(Country::class)
            ->getMock();
        $countryMock->iso_code = 'en';

        $contextMock->country = $countryMock;

        $languageFixture = new Language(1);

        $contextMock->language = $languageFixture;

        $currencyMock = $this->getMockBuilder(Currency::class)
            ->disableOriginalConstructor()
            ->getMock();

        $contextMock->currency = $currencyMock;

        $currencyDataProviderMock = $this->getMockBuilder(CurrencyDataProvider::class)
            ->disableOriginalConstructor()
            ->setMethods(['getDefaultCurrencyIsoCode', 'getDefaultCurrency'])
            ->getMock();

        $linkMock = $this
            ->getMockBuilder(Link::class)
            ->disableOriginalConstructor()
            ->getMock();

        $contextMock->link = $linkMock;

        $currencyDataProviderMock->method('getDefaultCurrencyIsoCode')
            ->will($this->returnValue('en'));
        $currencyDataProviderMock->method('getDefaultCurrency')
            ->will($this->returnValue($currencyMock));

        $kpiRowPresenterMock = $this->getMockBuilder(KpiRowPresenterInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['present'])
            ->getMock();

        $kpiRowPresenterMock->method('present')
            ->will($this->returnValue(['allowRefresh' => false, 'kpis' => ['a', 'b', 'c']]));

        $smartyMock = $this
            ->getMockBuilder(\Smarty::class)
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $legacyContextMock = $this->getMockBuilder(LegacyContext::class)
            ->setMethods([
                'getContext',
                'getEmployeeLanguageIso',
                'getEmployeeCurrency',
                'getRootUrl',
                'getLanguages',
                'getLanguage',
                'getAdminLink',
                'getAvailableLanguages',
                'getSmarty',
            ])
            ->disableAutoload()
            ->disableOriginalConstructor()
            ->getMock();

        $legacyContextMock->method('getSmarty')
            ->willReturn($smartyMock);

        $legacyContextMock->method('getContext')
            ->willReturn($contextMock);

        $legacyContextMock->method('getLanguages')
            ->will(
                $this->returnValue(
                    [
                        [
                            'id_lang' => '1',
                            'name' => 'English (English)',
                            'iso_code' => 'en',
                            'language_code' => 'en-us',
                            'locale' => 'en-US',
                        ],
                        [
                            'id_lang' => '2',
                            'name' => 'Fran??ais (French)',
                            'iso_code' => 'fr',
                            'language_code' => 'fr',
                            'locale' => 'fr-FR',
                        ],
                    ]
                )
            );

        $legacyContextMock->method('getLanguage')
            ->will(
                $this->returnValue($languageFixture)
            );

        $legacyContextMock->method('getAvailableLanguages')
            ->willReturn(
                [
                    [
                        'id_lang' => '1',
                        'name' => 'English (English)',
                        'iso_code' => 'en',
                        'language_code' => 'en-us',
                        'locale' => 'en-US',
                        'active' => true,
                    ],
                    [
                        'id_lang' => '2',
                        'name' => 'Fran??ais (French)',
                        'iso_code' => 'fr',
                        'language_code' => 'fr',
                        'locale' => 'fr-FR',
                        'active' => false,
                    ],
                ]
            );

        self::$kernel->getContainer()->set('prestashop.adapter.data_provider.currency', $currencyDataProviderMock);
        self::$kernel->getContainer()->set('prestashop.adapter.legacy.context', $legacyContextMock);
        self::$kernel->getContainer()->set('prestashop.core.kpi_row.presenter', $kpiRowPresenterMock);
        self::$kernel->getContainer()->set('logger', new NullLogger());
    }

    protected function enableDemoMode()
    {
        $configurationMock = $this->getMockBuilder('\PrestaShop\PrestaShop\Adapter\Configuration')
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->disableAutoload()
            ->getMock();

        $values = array(
            array('_PS_MODE_DEMO_', null, true),
            array('_PS_MODULE_DIR_', null, __DIR__ . '/../../../resources/modules/'),
        );

        $configurationMock->method('get')
            ->will($this->returnValueMap($values));

        self::$kernel->getContainer()->set('prestashop.adapter.legacy.configuration', $configurationMock);
    }
}
