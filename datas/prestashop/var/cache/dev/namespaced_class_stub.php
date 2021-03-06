<?php 
namespace PrestaShop\PrestaShop\Adapter\Entity;

class Configuration extends \Configuration {};
class CustomerMessage extends \CustomerMessage {};
class Attribute extends \Attribute {};
class Zone extends \Zone {};
class Access extends \Access {};
class Attachment extends \Attachment {};
abstract class Cache extends \Cache {};
class CacheApc extends \CacheApc {};
class CacheMemcache extends \CacheMemcache {};
class CacheXcache extends \CacheXcache {};
class CacheMemcached extends \CacheMemcached {};
class AddressChecksum extends \AddressChecksum {};
class Feature extends \Feature {};
class PhpEncryption extends \PhpEncryption {};
class SupplyOrder extends \SupplyOrder {};
abstract class StockManagerModule extends \StockManagerModule {};
class SupplyOrderState extends \SupplyOrderState {};
class SupplyOrderHistory extends \SupplyOrderHistory {};
class StockMvtReason extends \StockMvtReason {};
class StockManagerFactory extends \StockManagerFactory {};
class SupplyOrderDetail extends \SupplyOrderDetail {};
class WarehouseProductLocation extends \WarehouseProductLocation {};
class StockAvailable extends \StockAvailable {};
class StockMvt extends \StockMvt {};
class Warehouse extends \Warehouse {};
class StockManager extends \StockManager {};
class StockMvtWS extends \StockMvtWS {};
class SupplyOrderReceiptHistory extends \SupplyOrderReceiptHistory {};
class Stock extends \Stock {};
class Guest extends \Guest {};
class LinkProxy extends \LinkProxy {};
class ConnectionsSource extends \ConnectionsSource {};
class PDFGenerator extends \PDFGenerator {};
class HTMLTemplateDeliverySlip extends \HTMLTemplateDeliverySlip {};
class HTMLTemplateOrderSlip extends \HTMLTemplateOrderSlip {};
abstract class HTMLTemplate extends \HTMLTemplate {};
class HTMLTemplateInvoice extends \HTMLTemplateInvoice {};
class PDF extends \PDF {};
class HTMLTemplateSupplyOrderForm extends \HTMLTemplateSupplyOrderForm {};
class HTMLTemplateOrderReturn extends \HTMLTemplateOrderReturn {};
abstract class TaxManagerModule extends \TaxManagerModule {};
class TaxRulesTaxManager extends \TaxRulesTaxManager {};
class Tax extends \Tax {};
class TaxRule extends \TaxRule {};
class TaxConfiguration extends \TaxConfiguration {};
class TaxRulesGroup extends \TaxRulesGroup {};
class TaxCalculator extends \TaxCalculator {};
class TaxManagerFactory extends \TaxManagerFactory {};
class Language extends \Language {};
class Image extends \Image {};
class SpecificPrice extends \SpecificPrice {};
class Link extends \Link {};
class WarehouseAddress extends \WarehouseAddress {};
class Carrier extends \Carrier {};
abstract class CarrierModule extends \CarrierModule {};
abstract class ModuleGrid extends \ModuleGrid {};
abstract class ModuleGraph extends \ModuleGraph {};
abstract class ModuleGridEngine extends \ModuleGridEngine {};
abstract class ModuleGraphEngine extends \ModuleGraphEngine {};
abstract class Module extends \Module {};
class Country extends \Country {};
class Supplier extends \Supplier {};
class Address extends \Address {};
class PhpEncryptionEngine extends \PhpEncryptionEngine {};
class PrestaShopLogger extends \PrestaShopLogger {};
class Meta extends \Meta {};
class CccReducer extends \CccReducer {};
class StylesheetManager extends \StylesheetManager {};
abstract class AbstractAssetManager extends \AbstractAssetManager {};
class CssMinifier extends \CssMinifier {};
class JsMinifier extends \JsMinifier {};
class JavascriptManager extends \JavascriptManager {};
abstract class ObjectModel extends \ObjectModel {};
class SmartyResourceModule extends \SmartyResourceModule {};
class SmartyDevTemplate extends \SmartyDevTemplate {};
class SmartyResourceParent extends \SmartyResourceParent {};
class TemplateFinder extends \TemplateFinder {};
class SmartyCustom extends \SmartyCustom {};
class SmartyCustomTemplate extends \SmartyCustomTemplate {};
class ProductDownload extends \ProductDownload {};
class AttributeLang extends \AttributeLang {};
class OrderReturnStateLang extends \OrderReturnStateLang {};
class RiskLang extends \RiskLang {};
class ContactLang extends \ContactLang {};
class ProfileLang extends \ProfileLang {};
class QuickAccessLang extends \QuickAccessLang {};
class FeatureValueLang extends \FeatureValueLang {};
class GenderLang extends \GenderLang {};
class SupplyOrderStateLang extends \SupplyOrderStateLang {};
class DataLang extends \DataLang {};
class CategoryLang extends \CategoryLang {};
class GroupLang extends \GroupLang {};
class FeatureLang extends \FeatureLang {};
class ThemeLang extends \ThemeLang {};
class ConfigurationLang extends \ConfigurationLang {};
class TabLang extends \TabLang {};
class AttributeGroupLang extends \AttributeGroupLang {};
class MetaLang extends \MetaLang {};
class OrderMessageLang extends \OrderMessageLang {};
class CarrierLang extends \CarrierLang {};
class OrderStateLang extends \OrderStateLang {};
class StockMvtReasonLang extends \StockMvtReasonLang {};
class CmsCategoryLang extends \CmsCategoryLang {};
class Message extends \Message {};
class CartRule extends \CartRule {};
class Chart extends \Chart {};
class Category extends \Category {};
class PrestaShopDatabaseException extends \PrestaShopDatabaseException {};
class PrestaShopException extends \PrestaShopException {};
class PrestaShopObjectNotFoundException extends \PrestaShopObjectNotFoundException {};
class PrestaShopPaymentException extends \PrestaShopPaymentException {};
class PrestaShopModuleException extends \PrestaShopModuleException {};
class Shop extends \Shop {};
class ShopUrl extends \ShopUrl {};
class ShopGroup extends \ShopGroup {};
class Search extends \Search {};
class CMSRole extends \CMSRole {};
class LocalizationPack extends \LocalizationPack {};
class AttributeGroup extends \AttributeGroup {};
class CustomerThread extends \CustomerThread {};
class Windows extends \Windows {};
class ProductPresenterFactory extends \ProductPresenterFactory {};
class Store extends \Store {};
class Product extends \Product {};
abstract class TreeToolbarButton extends \TreeToolbarButton {};
class TreeToolbarSearchCategories extends \TreeToolbarSearchCategories {};
class TreeToolbarLink extends \TreeToolbarLink {};
class TreeToolbar extends \TreeToolbar {};
class Tree extends \Tree {};
class TreeToolbarSearch extends \TreeToolbarSearch {};
class CartChecksum extends \CartChecksum {};
class CheckoutPersonalInformationStep extends \CheckoutPersonalInformationStep {};
class CheckoutDeliveryStep extends \CheckoutDeliveryStep {};
abstract class AbstractCheckoutStep extends \AbstractCheckoutStep {};
class DeliveryOptionsFinder extends \DeliveryOptionsFinder {};
class CheckoutProcess extends \CheckoutProcess {};
class CheckoutPaymentStep extends \CheckoutPaymentStep {};
class PaymentOptionsFinder extends \PaymentOptionsFinder {};
class CheckoutSession extends \CheckoutSession {};
class ConditionsToApproveFinder extends \ConditionsToApproveFinder {};
class CheckoutAddressesStep extends \CheckoutAddressesStep {};
class AddressValidator extends \AddressValidator {};
class DateRange extends \DateRange {};
class Manufacturer extends \Manufacturer {};
class Connection extends \Connection {};
class Delivery extends \Delivery {};
class FileLogger extends \FileLogger {};
abstract class AbstractLogger extends \AbstractLogger {};
class WebserviceException extends \WebserviceException {};
class WebserviceRequest extends \WebserviceRequest {};
class WebserviceOutputBuilder extends \WebserviceOutputBuilder {};
class WebserviceSpecificManagementSearch extends \WebserviceSpecificManagementSearch {};
class WebserviceOutputJSON extends \WebserviceOutputJSON {};
class WebserviceKey extends \WebserviceKey {};
class WebserviceOutputXML extends \WebserviceOutputXML {};
class WebserviceSpecificManagementImages extends \WebserviceSpecificManagementImages {};
abstract class ProductPresentingFrontController extends \ProductPresentingFrontController {};
class ModuleFrontController extends \ModuleFrontController {};
abstract class Controller extends \Controller {};
class FrontController extends \FrontController {};
class AdminController extends \AdminController {};
abstract class ProductListingFrontController extends \ProductListingFrontController {};
abstract class ModuleAdminController extends \ModuleAdminController {};
abstract class PaymentModule extends \PaymentModule {};
class ProductSupplier extends \ProductSupplier {};
class RangePrice extends \RangePrice {};
class RangeWeight extends \RangeWeight {};
class Tag extends \Tag {};
class AddressFormat extends \AddressFormat {};
class Customer extends \Customer {};
class SupplierAddress extends \SupplierAddress {};
class RequestSql extends \RequestSql {};
class Media extends \Media {};
class Alias extends \Alias {};
class State extends \State {};
class Mail extends \Mail {};
class ConfigurationKPI extends \ConfigurationKPI {};
class ProductAssembler extends \ProductAssembler {};
class ConfigurationTest extends \ConfigurationTest {};
class Curve extends \Curve {};
class OrderPayment extends \OrderPayment {};
class OrderCarrier extends \OrderCarrier {};
class OrderDetail extends \OrderDetail {};
class OrderInvoice extends \OrderInvoice {};
class OrderReturn extends \OrderReturn {};
class OrderCartRule extends \OrderCartRule {};
class OrderDiscount extends \OrderDiscount {};
class OrderReturnState extends \OrderReturnState {};
class OrderHistory extends \OrderHistory {};
class OrderMessage extends \OrderMessage {};
class Order extends \Order {};
class OrderSlip extends \OrderSlip {};
class OrderState extends \OrderState {};
class Employee extends \Employee {};
class Customization extends \Customization {};
class CSV extends \CSV {};
class CMS extends \CMS {};
class SearchEngine extends \SearchEngine {};
class QqUploadedFileXhr extends \QqUploadedFileXhr {};
class CMSCategory extends \CMSCategory {};
class FeatureValue extends \FeatureValue {};
class ProductSale extends \ProductSale {};
class Referrer extends \Referrer {};
class Translate extends \Translate {};
class Cookie extends \Cookie {};
class Gender extends \Gender {};
class Combination extends \Combination {};
class SpecificPriceRule extends \SpecificPriceRule {};
class Uploader extends \Uploader {};
class ImageType extends \ImageType {};
class Group extends \Group {};
class Currency extends \Currency {};
class HelperList extends \HelperList {};
class HelperTreeShops extends \HelperTreeShops {};
class HelperKpi extends \HelperKpi {};
class HelperOptions extends \HelperOptions {};
class Helper extends \Helper {};
class HelperForm extends \HelperForm {};
class HelperUploader extends \HelperUploader {};
class HelperTreeCategories extends \HelperTreeCategories {};
class HelperShop extends \HelperShop {};
class HelperImageUploader extends \HelperImageUploader {};
class HelperCalendar extends \HelperCalendar {};
class HelperView extends \HelperView {};
class HelperKpiRow extends \HelperKpiRow {};
class Tab extends \Tab {};
class ValidateConstraintTranslator extends \ValidateConstraintTranslator {};
class QuickAccess extends \QuickAccess {};
abstract class Db extends \Db {};
class DbQuery extends \DbQuery {};
class DbPDO extends \DbPDO {};
class DbMySQLi extends \DbMySQLi {};
class TranslatedConfiguration extends \TranslatedConfiguration {};
class ManufacturerAddress extends \ManufacturerAddress {};
class QqUploadedFileForm extends \QqUploadedFileForm {};
class Context extends \Context {};
class Cart extends \Cart {};
class PhpEncryptionLegacyEngine extends \PhpEncryptionLegacyEngine {};
class Tools extends \Tools {};
class ImageManager extends \ImageManager {};
class Page extends \Page {};
class FileUploader extends \FileUploader {};
class GroupReduction extends \GroupReduction {};
class Contact extends \Contact {};
class Pack extends \Pack {};
class CustomerAddress extends \CustomerAddress {};
abstract class AbstractForm extends \AbstractForm {};
class CustomerPersister extends \CustomerPersister {};
class CustomerFormatter extends \CustomerFormatter {};
class CustomerAddressFormatter extends \CustomerAddressFormatter {};
class CustomerAddressForm extends \CustomerAddressForm {};
class FormField extends \FormField {};
class CustomerLoginFormatter extends \CustomerLoginFormatter {};
class CustomerAddressPersister extends \CustomerAddressPersister {};
class CustomerLoginForm extends \CustomerLoginForm {};
class CustomerForm extends \CustomerForm {};
class Risk extends \Risk {};
class Notification extends \Notification {};
class CustomizationField extends \CustomizationField {};
class Hook extends \Hook {};
class PrestaShopBackup extends \PrestaShopBackup {};
class Profile extends \Profile {};
class Dispatcher extends \Dispatcher {};
class Upgrader extends \Upgrader {};
class PrestaShopCollection extends \PrestaShopCollection {};
class Validate extends \Validate {};
