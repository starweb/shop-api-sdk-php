<?php declare(strict_types=1);

namespace Starweb\Api\Resource;

final class Resources
{

    public const RESOURCE_NAMESPACE = 'Starweb\\Api\\Resource';

    public const CURRENCY = 'Currency';
    public const CUSTOMER_ADDRESS = 'CustomerAddress';
    public const CUSTOMER_EXTERNAL_SERVICE = 'CustomerExternalService';
    public const CUSTOMER_TAG = 'CustomerTag';
    public const CUSTOMER = 'Customer';
    public const MEDIA_FILE = 'MediaFile';
    public const ORDER_ADDRESS = 'OrderAddress';
    public const ORDER_COMMENT = 'OrderComment';
    public const ORDER_EXTERNAL_SERVICE = 'OrderExternalService';
    public const ORDER_ITEM = 'OrderItem';
    public const ORDER_STATUS = 'OrderStatus';
    public const ORDER = 'Order';
    public const PAYMENT_METHOD = 'PaymentMethod';
    public const PRICELIST = 'Pricelist';
    public const PRODUCT_ATTRIBUTE = 'ProductAttribute';
    public const PRODUCT_CATEGORY = 'ProductCategory';
    public const PRODUCT_CATEGORY_LINK = 'ProductCategoryLink';
    public const PRODUCT_LANGUAGE = 'ProductLanguage';
    public const PRODUCT_MANUFACTURER = 'ProductManufacturer';
    public const PRODUCT_MEDIA_FILE_LINK = 'ProductMediaFileLink';
    public const PRODUCT_META_DATA = 'ProductMetaData';
    public const PRODUCT_META_DATA_TYPE =    'ProductMetaDataType';
    public const PRODUCT_STOCK_STATUS ='ProductStockStatus';
    public const PRODUCT_UNIT ='ProductUnit';
    public const PRODUCT_VARIANT_ATTRIBUTE_VALUE ='ProductVariantAttributeValue';
    public const PRODUCT_VARIANT_ATTRIBUTE ='ProductVariantAttribute';
    public const PRODUCT_VARIANT_PRICELIST_PRICE ='ProductVariantPricelistPrice';
    public const PRODUCT_VARIANT ='ProductVariant';
    public const PRODUCT_VAT_RATE ='ProductVatRate';
    public const PRODUCT ='Product';
    public const SHIPPING_METHOD ='ShippingMethod';
    public const SHIPPING_TRACKING_TYPE ='ShippingTrackingType';
    public const SHOP ='Shop';
    public const TAG ='Tag';

    /**
     * @var string[]|null
     */
    private static $resources;

    /**
     * @return array
     *
     * @throws \ReflectionException
     */
    public static function getResources(): array
    {
        if (self::$resources === null) {
            $reflectionClass = new \ReflectionClass(__CLASS__);
            $constants = $reflectionClass->getConstants();
            unset($constants['RESOURCE_NAMESPACE']);
            self::$resources = $constants;
        }

        return self::$resources;
    }
}
