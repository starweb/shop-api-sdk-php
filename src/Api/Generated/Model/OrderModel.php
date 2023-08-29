<?php

namespace Starweb\Api\Generated\Model;

class OrderModel extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The orders ID
     *
     * @var int|null
     */
    protected $orderId;
    /**
     * A timestamp of when the order was modified. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $modifiedAt;
    /**
     * An external id of the payment method
     *
     * @var string|null
     */
    protected $paymentMethodExternalId;
    /**
     * An external id of the shipping method
     *
     * @var string|null
     */
    protected $shippingMethodExternalId;
    /**
     * The shops base currency code at the point of order creation
     *
     * @var string|null
     */
    protected $baseCurrencyCode;
    /**
     * The shops country code at the point of order creation
     *
     * @var string|null
     */
    protected $shopCountryCode;
    /**
     * The total order amount
     *
     * @var float|null
     */
    protected $totalAmount;
    /**
     * The total order VAT amount
     *
     * @var float|null
     */
    protected $totalVat;
    /**
     * The total order amount to pay
     *
     * @var float|null
     */
    protected $amountToPay;
    /**
     * The total order amount, in the shops base currency
     *
     * @var float|null
     */
    protected $totalAmountInBaseCurrency;
    /**
     * The total VAT amount, in the shops base currency
     *
     * @var float|null
     */
    protected $totalVatInBaseCurrency;
    /**
     * The total amount to pay, in the shops base currency
     *
     * @var float|null
     */
    protected $amountToPayInBaseCurrency;
    /**
     * A timestamp of when the order was created. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * The ID of the orders customer
     *
     * @var int|null
     */
    protected $customerId;
    /**
     * The ID of the orders status
     *
     * @var int|null
     */
    protected $statusId;
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders for a single call
     *
     * @var bool|null
     */
    protected $onOrderStatusChangeSendEmail = true;
    /**
     * Set this to false to prevent processing payment on changes to statusId. Only applies to payment methods that support processing payments. For example charging a reserved amount or cancel a created invoice
     *
     * @var bool|null
     */
    protected $onOrderStatusChangeProcessPayment = true;
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders for this and all future calls
     *
     * @var bool|null
     */
    protected $sendEmailsOnStatusChange = true;
    /**
     * Id of stock location this order was made for
     *
     * @var int|null
     */
    protected $stockLocationId;
    /**
     * The ID of the orders shipping method
     *
     * @var int|null
     */
    protected $shippingMethodId;
    /**
     * The ID of the orders payment method
     *
     * @var int|null
     */
    protected $paymentMethodId;
    /**
     * The ID code of the payment method.
     *
     * @var string|null
     */
    protected $paymentMethodIdCode;
    /**
     * Title of the orders payment method
     *
     * @var string|null
     */
    protected $paymentMethodName;
    /**
     * Payment fee
     *
     * @var float|null
     */
    protected $paymentFee;
    /**
     * The VAT rate of the paymentFee in percent
     *
     * @var float|null
     */
    protected $paymentVatRate;
    /**
     * Title of the orders shipping method
     *
     * @var string|null
     */
    protected $shippingMethodName;
    /**
     * Shipping cost
     *
     * @var float|null
     */
    protected $shippingCost;
    /**
     * The VAT rate of the shippingCost in percent
     *
     * @var float|null
     */
    protected $shippingVatRate;
    /**
     * The total weight of the order in kg. This field is a calculated summary of all order items
     *
     * @var float|null
     */
    protected $totalWeight;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string|null
     */
    protected $customInfo1;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string|null
     */
    protected $customInfo2;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string|null
     */
    protected $customInfo3;
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @var string|null
     */
    protected $customInfo4;
    /**
     * The code ID of a discount code that was used for this order
     *
     * @var string|null
     */
    protected $discountCode;
    /**
     * The amount paid via the payment method for this order
     *
     * @var float|null
     */
    protected $amountPaid;
    /**
     * Same as amountPaid, but in the shops base currency
     *
     * @var float|null
     */
    protected $amountPaidInBaseCurrency;
    /**
     * Is the order completed (that is, is it completely saved and has the payment method processed and confirmed it)
     *
     * @var bool|null
     */
    protected $isComplete;
    /**
     * The currency code of the currency that was used for this order. Has to be a valid ISO 4217 currency code
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * The exchange rate between this orders currency and the shops base currency. Ff, for example, the shop base currency is SEK and this order was placed in NOK, where 1 SEK = 0.97 NOK - this value would be 0.97
     *
     * @var float|null
     */
    protected $currencyExchangeRate;
    /**
     * The number of decimals to display
     *
     * @var int|null
     */
    protected $currencyPrecision;
    /**
     * Language Code (ISO 639-1) used for placing this order. Has to be a valid lang code that the shop has setup. Used for order update emails, etc. 
     *
     * @var string|null
     */
    protected $langCode;
    /**
     * Reference to the payment methods payment transaction
     *
     * @var string|null
     */
    protected $paymentReference;
    /**
     * Status of the payment methods payment transaction
     *
     * @var string|null
     */
    protected $paymentStatus;
    /**
     * An order is read when an administrator has read it via the admin GUI
     *
     * @var bool|null
     */
    protected $isRead;
    /**
     * Whether the customer or an admin has added a comment to the order
     *
     * @var bool|null
     */
    protected $hasComments;
    /**
     * An internal comment placed by an administrator. Not available to the customer
     *
     * @var string|null
     */
    protected $internalComment;
    /**
     * The ID of the tracking number type. Types are available via: GET /shipping-tracker-types
     *
     * @var int|null
     */
    protected $shippingTrackerType;
    /**
     * The shipping tracking number. Has to be in the format that is used for the chosen tracking type (please contact the freight forwarder regarding this).
     *
     * @var string|null
     */
    protected $shippingTrackingNo;
    /**
     * The email address of the customer at the point of order creation
     *
     * @var string|null
     */
    protected $originalCustomerEmail;
    /**
     * The national id number of the customer at the point of order creation
     *
     * @var string|null
     */
    protected $originalCustomerNationalIdNo;
    /**
     * The VAT number of the customer at the point of order creation
     *
     * @var string|null
     */
    protected $originalCustomerVatNo;
    /**
     * Custom customer info at the point of order creation
     *
     * @var string|null
     */
    protected $originalCustomerCustomInfo1;
    /**
     * Custom customer info at the point of order creation
     *
     * @var string|null
     */
    protected $originalCustomerCustomInfo2;
    /**
     * An ID for this order at some other external service f.ex. Specter
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * Name of the external service the externalId belongs to
     *
     * @var string|null
     */
    protected $externalIdType;
    /**
     * 
     *
     * @var OrderItemModelCollection|null
     */
    protected $items;
    /**
     * 
     *
     * @var OrderAddressCollection|null
     */
    protected $addresses;
    /**
     * 
     *
     * @var OrderExternalServiceModelCollection|null
     */
    protected $externalServices;
    /**
     * 
     *
     * @var CustomerModelItem|null
     */
    protected $customer;
    /**
     * 
     *
     * @var OrderStatusModelItem|null
     */
    protected $status;
    /**
     * The orders ID
     *
     * @return int|null
     */
    public function getOrderId() : ?int
    {
        return $this->orderId;
    }
    /**
     * The orders ID
     *
     * @param int|null $orderId
     *
     * @return self
     */
    public function setOrderId(?int $orderId) : self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * A timestamp of when the order was modified. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getModifiedAt() : ?string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the order was modified. The time should be formatted using ISO-8601
     *
     * @param string|null $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(?string $modifiedAt) : self
    {
        $this->initialized['modifiedAt'] = true;
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
    /**
     * An external id of the payment method
     *
     * @return string|null
     */
    public function getPaymentMethodExternalId() : ?string
    {
        return $this->paymentMethodExternalId;
    }
    /**
     * An external id of the payment method
     *
     * @param string|null $paymentMethodExternalId
     *
     * @return self
     */
    public function setPaymentMethodExternalId(?string $paymentMethodExternalId) : self
    {
        $this->initialized['paymentMethodExternalId'] = true;
        $this->paymentMethodExternalId = $paymentMethodExternalId;
        return $this;
    }
    /**
     * An external id of the shipping method
     *
     * @return string|null
     */
    public function getShippingMethodExternalId() : ?string
    {
        return $this->shippingMethodExternalId;
    }
    /**
     * An external id of the shipping method
     *
     * @param string|null $shippingMethodExternalId
     *
     * @return self
     */
    public function setShippingMethodExternalId(?string $shippingMethodExternalId) : self
    {
        $this->initialized['shippingMethodExternalId'] = true;
        $this->shippingMethodExternalId = $shippingMethodExternalId;
        return $this;
    }
    /**
     * The shops base currency code at the point of order creation
     *
     * @return string|null
     */
    public function getBaseCurrencyCode() : ?string
    {
        return $this->baseCurrencyCode;
    }
    /**
     * The shops base currency code at the point of order creation
     *
     * @param string|null $baseCurrencyCode
     *
     * @return self
     */
    public function setBaseCurrencyCode(?string $baseCurrencyCode) : self
    {
        $this->initialized['baseCurrencyCode'] = true;
        $this->baseCurrencyCode = $baseCurrencyCode;
        return $this;
    }
    /**
     * The shops country code at the point of order creation
     *
     * @return string|null
     */
    public function getShopCountryCode() : ?string
    {
        return $this->shopCountryCode;
    }
    /**
     * The shops country code at the point of order creation
     *
     * @param string|null $shopCountryCode
     *
     * @return self
     */
    public function setShopCountryCode(?string $shopCountryCode) : self
    {
        $this->initialized['shopCountryCode'] = true;
        $this->shopCountryCode = $shopCountryCode;
        return $this;
    }
    /**
     * The total order amount
     *
     * @return float|null
     */
    public function getTotalAmount() : ?float
    {
        return $this->totalAmount;
    }
    /**
     * The total order amount
     *
     * @param float|null $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?float $totalAmount) : self
    {
        $this->initialized['totalAmount'] = true;
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * The total order VAT amount
     *
     * @return float|null
     */
    public function getTotalVat() : ?float
    {
        return $this->totalVat;
    }
    /**
     * The total order VAT amount
     *
     * @param float|null $totalVat
     *
     * @return self
     */
    public function setTotalVat(?float $totalVat) : self
    {
        $this->initialized['totalVat'] = true;
        $this->totalVat = $totalVat;
        return $this;
    }
    /**
     * The total order amount to pay
     *
     * @return float|null
     */
    public function getAmountToPay() : ?float
    {
        return $this->amountToPay;
    }
    /**
     * The total order amount to pay
     *
     * @param float|null $amountToPay
     *
     * @return self
     */
    public function setAmountToPay(?float $amountToPay) : self
    {
        $this->initialized['amountToPay'] = true;
        $this->amountToPay = $amountToPay;
        return $this;
    }
    /**
     * The total order amount, in the shops base currency
     *
     * @return float|null
     */
    public function getTotalAmountInBaseCurrency() : ?float
    {
        return $this->totalAmountInBaseCurrency;
    }
    /**
     * The total order amount, in the shops base currency
     *
     * @param float|null $totalAmountInBaseCurrency
     *
     * @return self
     */
    public function setTotalAmountInBaseCurrency(?float $totalAmountInBaseCurrency) : self
    {
        $this->initialized['totalAmountInBaseCurrency'] = true;
        $this->totalAmountInBaseCurrency = $totalAmountInBaseCurrency;
        return $this;
    }
    /**
     * The total VAT amount, in the shops base currency
     *
     * @return float|null
     */
    public function getTotalVatInBaseCurrency() : ?float
    {
        return $this->totalVatInBaseCurrency;
    }
    /**
     * The total VAT amount, in the shops base currency
     *
     * @param float|null $totalVatInBaseCurrency
     *
     * @return self
     */
    public function setTotalVatInBaseCurrency(?float $totalVatInBaseCurrency) : self
    {
        $this->initialized['totalVatInBaseCurrency'] = true;
        $this->totalVatInBaseCurrency = $totalVatInBaseCurrency;
        return $this;
    }
    /**
     * The total amount to pay, in the shops base currency
     *
     * @return float|null
     */
    public function getAmountToPayInBaseCurrency() : ?float
    {
        return $this->amountToPayInBaseCurrency;
    }
    /**
     * The total amount to pay, in the shops base currency
     *
     * @param float|null $amountToPayInBaseCurrency
     *
     * @return self
     */
    public function setAmountToPayInBaseCurrency(?float $amountToPayInBaseCurrency) : self
    {
        $this->initialized['amountToPayInBaseCurrency'] = true;
        $this->amountToPayInBaseCurrency = $amountToPayInBaseCurrency;
        return $this;
    }
    /**
     * A timestamp of when the order was created. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the order was created. The time should be formatted using ISO-8601
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The ID of the orders customer
     *
     * @return int|null
     */
    public function getCustomerId() : ?int
    {
        return $this->customerId;
    }
    /**
     * The ID of the orders customer
     *
     * @param int|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?int $customerId) : self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * The ID of the orders status
     *
     * @return int|null
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * The ID of the orders status
     *
     * @param int|null $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders for a single call
     *
     * @return bool|null
     */
    public function getOnOrderStatusChangeSendEmail() : ?bool
    {
        return $this->onOrderStatusChangeSendEmail;
    }
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders for a single call
     *
     * @param bool|null $onOrderStatusChangeSendEmail
     *
     * @return self
     */
    public function setOnOrderStatusChangeSendEmail(?bool $onOrderStatusChangeSendEmail) : self
    {
        $this->initialized['onOrderStatusChangeSendEmail'] = true;
        $this->onOrderStatusChangeSendEmail = $onOrderStatusChangeSendEmail;
        return $this;
    }
    /**
     * Set this to false to prevent processing payment on changes to statusId. Only applies to payment methods that support processing payments. For example charging a reserved amount or cancel a created invoice
     *
     * @return bool|null
     */
    public function getOnOrderStatusChangeProcessPayment() : ?bool
    {
        return $this->onOrderStatusChangeProcessPayment;
    }
    /**
     * Set this to false to prevent processing payment on changes to statusId. Only applies to payment methods that support processing payments. For example charging a reserved amount or cancel a created invoice
     *
     * @param bool|null $onOrderStatusChangeProcessPayment
     *
     * @return self
     */
    public function setOnOrderStatusChangeProcessPayment(?bool $onOrderStatusChangeProcessPayment) : self
    {
        $this->initialized['onOrderStatusChangeProcessPayment'] = true;
        $this->onOrderStatusChangeProcessPayment = $onOrderStatusChangeProcessPayment;
        return $this;
    }
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders for this and all future calls
     *
     * @return bool|null
     */
    public function getSendEmailsOnStatusChange() : ?bool
    {
        return $this->sendEmailsOnStatusChange;
    }
    /**
     * Set this to false to prevent sending email to customer on changes to statusId and new orders for this and all future calls
     *
     * @param bool|null $sendEmailsOnStatusChange
     *
     * @return self
     */
    public function setSendEmailsOnStatusChange(?bool $sendEmailsOnStatusChange) : self
    {
        $this->initialized['sendEmailsOnStatusChange'] = true;
        $this->sendEmailsOnStatusChange = $sendEmailsOnStatusChange;
        return $this;
    }
    /**
     * Id of stock location this order was made for
     *
     * @return int|null
     */
    public function getStockLocationId() : ?int
    {
        return $this->stockLocationId;
    }
    /**
     * Id of stock location this order was made for
     *
     * @param int|null $stockLocationId
     *
     * @return self
     */
    public function setStockLocationId(?int $stockLocationId) : self
    {
        $this->initialized['stockLocationId'] = true;
        $this->stockLocationId = $stockLocationId;
        return $this;
    }
    /**
     * The ID of the orders shipping method
     *
     * @return int|null
     */
    public function getShippingMethodId() : ?int
    {
        return $this->shippingMethodId;
    }
    /**
     * The ID of the orders shipping method
     *
     * @param int|null $shippingMethodId
     *
     * @return self
     */
    public function setShippingMethodId(?int $shippingMethodId) : self
    {
        $this->initialized['shippingMethodId'] = true;
        $this->shippingMethodId = $shippingMethodId;
        return $this;
    }
    /**
     * The ID of the orders payment method
     *
     * @return int|null
     */
    public function getPaymentMethodId() : ?int
    {
        return $this->paymentMethodId;
    }
    /**
     * The ID of the orders payment method
     *
     * @param int|null $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(?int $paymentMethodId) : self
    {
        $this->initialized['paymentMethodId'] = true;
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * The ID code of the payment method.
     *
     * @return string|null
     */
    public function getPaymentMethodIdCode() : ?string
    {
        return $this->paymentMethodIdCode;
    }
    /**
     * The ID code of the payment method.
     *
     * @param string|null $paymentMethodIdCode
     *
     * @return self
     */
    public function setPaymentMethodIdCode(?string $paymentMethodIdCode) : self
    {
        $this->initialized['paymentMethodIdCode'] = true;
        $this->paymentMethodIdCode = $paymentMethodIdCode;
        return $this;
    }
    /**
     * Title of the orders payment method
     *
     * @return string|null
     */
    public function getPaymentMethodName() : ?string
    {
        return $this->paymentMethodName;
    }
    /**
     * Title of the orders payment method
     *
     * @param string|null $paymentMethodName
     *
     * @return self
     */
    public function setPaymentMethodName(?string $paymentMethodName) : self
    {
        $this->initialized['paymentMethodName'] = true;
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }
    /**
     * Payment fee
     *
     * @return float|null
     */
    public function getPaymentFee() : ?float
    {
        return $this->paymentFee;
    }
    /**
     * Payment fee
     *
     * @param float|null $paymentFee
     *
     * @return self
     */
    public function setPaymentFee(?float $paymentFee) : self
    {
        $this->initialized['paymentFee'] = true;
        $this->paymentFee = $paymentFee;
        return $this;
    }
    /**
     * The VAT rate of the paymentFee in percent
     *
     * @return float|null
     */
    public function getPaymentVatRate() : ?float
    {
        return $this->paymentVatRate;
    }
    /**
     * The VAT rate of the paymentFee in percent
     *
     * @param float|null $paymentVatRate
     *
     * @return self
     */
    public function setPaymentVatRate(?float $paymentVatRate) : self
    {
        $this->initialized['paymentVatRate'] = true;
        $this->paymentVatRate = $paymentVatRate;
        return $this;
    }
    /**
     * Title of the orders shipping method
     *
     * @return string|null
     */
    public function getShippingMethodName() : ?string
    {
        return $this->shippingMethodName;
    }
    /**
     * Title of the orders shipping method
     *
     * @param string|null $shippingMethodName
     *
     * @return self
     */
    public function setShippingMethodName(?string $shippingMethodName) : self
    {
        $this->initialized['shippingMethodName'] = true;
        $this->shippingMethodName = $shippingMethodName;
        return $this;
    }
    /**
     * Shipping cost
     *
     * @return float|null
     */
    public function getShippingCost() : ?float
    {
        return $this->shippingCost;
    }
    /**
     * Shipping cost
     *
     * @param float|null $shippingCost
     *
     * @return self
     */
    public function setShippingCost(?float $shippingCost) : self
    {
        $this->initialized['shippingCost'] = true;
        $this->shippingCost = $shippingCost;
        return $this;
    }
    /**
     * The VAT rate of the shippingCost in percent
     *
     * @return float|null
     */
    public function getShippingVatRate() : ?float
    {
        return $this->shippingVatRate;
    }
    /**
     * The VAT rate of the shippingCost in percent
     *
     * @param float|null $shippingVatRate
     *
     * @return self
     */
    public function setShippingVatRate(?float $shippingVatRate) : self
    {
        $this->initialized['shippingVatRate'] = true;
        $this->shippingVatRate = $shippingVatRate;
        return $this;
    }
    /**
     * The total weight of the order in kg. This field is a calculated summary of all order items
     *
     * @return float|null
     */
    public function getTotalWeight() : ?float
    {
        return $this->totalWeight;
    }
    /**
     * The total weight of the order in kg. This field is a calculated summary of all order items
     *
     * @param float|null $totalWeight
     *
     * @return self
     */
    public function setTotalWeight(?float $totalWeight) : self
    {
        $this->initialized['totalWeight'] = true;
        $this->totalWeight = $totalWeight;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string|null
     */
    public function getCustomInfo1() : ?string
    {
        return $this->customInfo1;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string|null $customInfo1
     *
     * @return self
     */
    public function setCustomInfo1(?string $customInfo1) : self
    {
        $this->initialized['customInfo1'] = true;
        $this->customInfo1 = $customInfo1;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string|null
     */
    public function getCustomInfo2() : ?string
    {
        return $this->customInfo2;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string|null $customInfo2
     *
     * @return self
     */
    public function setCustomInfo2(?string $customInfo2) : self
    {
        $this->initialized['customInfo2'] = true;
        $this->customInfo2 = $customInfo2;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string|null
     */
    public function getCustomInfo3() : ?string
    {
        return $this->customInfo3;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string|null $customInfo3
     *
     * @return self
     */
    public function setCustomInfo3(?string $customInfo3) : self
    {
        $this->initialized['customInfo3'] = true;
        $this->customInfo3 = $customInfo3;
        return $this;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @return string|null
     */
    public function getCustomInfo4() : ?string
    {
        return $this->customInfo4;
    }
    /**
     * Custom info saved to an order. Can be linked to fields on the checkout page for additional data collection
     *
     * @param string|null $customInfo4
     *
     * @return self
     */
    public function setCustomInfo4(?string $customInfo4) : self
    {
        $this->initialized['customInfo4'] = true;
        $this->customInfo4 = $customInfo4;
        return $this;
    }
    /**
     * The code ID of a discount code that was used for this order
     *
     * @return string|null
     */
    public function getDiscountCode() : ?string
    {
        return $this->discountCode;
    }
    /**
     * The code ID of a discount code that was used for this order
     *
     * @param string|null $discountCode
     *
     * @return self
     */
    public function setDiscountCode(?string $discountCode) : self
    {
        $this->initialized['discountCode'] = true;
        $this->discountCode = $discountCode;
        return $this;
    }
    /**
     * The amount paid via the payment method for this order
     *
     * @return float|null
     */
    public function getAmountPaid() : ?float
    {
        return $this->amountPaid;
    }
    /**
     * The amount paid via the payment method for this order
     *
     * @param float|null $amountPaid
     *
     * @return self
     */
    public function setAmountPaid(?float $amountPaid) : self
    {
        $this->initialized['amountPaid'] = true;
        $this->amountPaid = $amountPaid;
        return $this;
    }
    /**
     * Same as amountPaid, but in the shops base currency
     *
     * @return float|null
     */
    public function getAmountPaidInBaseCurrency() : ?float
    {
        return $this->amountPaidInBaseCurrency;
    }
    /**
     * Same as amountPaid, but in the shops base currency
     *
     * @param float|null $amountPaidInBaseCurrency
     *
     * @return self
     */
    public function setAmountPaidInBaseCurrency(?float $amountPaidInBaseCurrency) : self
    {
        $this->initialized['amountPaidInBaseCurrency'] = true;
        $this->amountPaidInBaseCurrency = $amountPaidInBaseCurrency;
        return $this;
    }
    /**
     * Is the order completed (that is, is it completely saved and has the payment method processed and confirmed it)
     *
     * @return bool|null
     */
    public function getIsComplete() : ?bool
    {
        return $this->isComplete;
    }
    /**
     * Is the order completed (that is, is it completely saved and has the payment method processed and confirmed it)
     *
     * @param bool|null $isComplete
     *
     * @return self
     */
    public function setIsComplete(?bool $isComplete) : self
    {
        $this->initialized['isComplete'] = true;
        $this->isComplete = $isComplete;
        return $this;
    }
    /**
     * The currency code of the currency that was used for this order. Has to be a valid ISO 4217 currency code
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * The currency code of the currency that was used for this order. Has to be a valid ISO 4217 currency code
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * The exchange rate between this orders currency and the shops base currency. Ff, for example, the shop base currency is SEK and this order was placed in NOK, where 1 SEK = 0.97 NOK - this value would be 0.97
     *
     * @return float|null
     */
    public function getCurrencyExchangeRate() : ?float
    {
        return $this->currencyExchangeRate;
    }
    /**
     * The exchange rate between this orders currency and the shops base currency. Ff, for example, the shop base currency is SEK and this order was placed in NOK, where 1 SEK = 0.97 NOK - this value would be 0.97
     *
     * @param float|null $currencyExchangeRate
     *
     * @return self
     */
    public function setCurrencyExchangeRate(?float $currencyExchangeRate) : self
    {
        $this->initialized['currencyExchangeRate'] = true;
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * The number of decimals to display
     *
     * @return int|null
     */
    public function getCurrencyPrecision() : ?int
    {
        return $this->currencyPrecision;
    }
    /**
     * The number of decimals to display
     *
     * @param int|null $currencyPrecision
     *
     * @return self
     */
    public function setCurrencyPrecision(?int $currencyPrecision) : self
    {
        $this->initialized['currencyPrecision'] = true;
        $this->currencyPrecision = $currencyPrecision;
        return $this;
    }
    /**
     * Language Code (ISO 639-1) used for placing this order. Has to be a valid lang code that the shop has setup. Used for order update emails, etc. 
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language Code (ISO 639-1) used for placing this order. Has to be a valid lang code that the shop has setup. Used for order update emails, etc. 
     *
     * @param string|null $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->initialized['langCode'] = true;
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * Reference to the payment methods payment transaction
     *
     * @return string|null
     */
    public function getPaymentReference() : ?string
    {
        return $this->paymentReference;
    }
    /**
     * Reference to the payment methods payment transaction
     *
     * @param string|null $paymentReference
     *
     * @return self
     */
    public function setPaymentReference(?string $paymentReference) : self
    {
        $this->initialized['paymentReference'] = true;
        $this->paymentReference = $paymentReference;
        return $this;
    }
    /**
     * Status of the payment methods payment transaction
     *
     * @return string|null
     */
    public function getPaymentStatus() : ?string
    {
        return $this->paymentStatus;
    }
    /**
     * Status of the payment methods payment transaction
     *
     * @param string|null $paymentStatus
     *
     * @return self
     */
    public function setPaymentStatus(?string $paymentStatus) : self
    {
        $this->initialized['paymentStatus'] = true;
        $this->paymentStatus = $paymentStatus;
        return $this;
    }
    /**
     * An order is read when an administrator has read it via the admin GUI
     *
     * @return bool|null
     */
    public function getIsRead() : ?bool
    {
        return $this->isRead;
    }
    /**
     * An order is read when an administrator has read it via the admin GUI
     *
     * @param bool|null $isRead
     *
     * @return self
     */
    public function setIsRead(?bool $isRead) : self
    {
        $this->initialized['isRead'] = true;
        $this->isRead = $isRead;
        return $this;
    }
    /**
     * Whether the customer or an admin has added a comment to the order
     *
     * @return bool|null
     */
    public function getHasComments() : ?bool
    {
        return $this->hasComments;
    }
    /**
     * Whether the customer or an admin has added a comment to the order
     *
     * @param bool|null $hasComments
     *
     * @return self
     */
    public function setHasComments(?bool $hasComments) : self
    {
        $this->initialized['hasComments'] = true;
        $this->hasComments = $hasComments;
        return $this;
    }
    /**
     * An internal comment placed by an administrator. Not available to the customer
     *
     * @return string|null
     */
    public function getInternalComment() : ?string
    {
        return $this->internalComment;
    }
    /**
     * An internal comment placed by an administrator. Not available to the customer
     *
     * @param string|null $internalComment
     *
     * @return self
     */
    public function setInternalComment(?string $internalComment) : self
    {
        $this->initialized['internalComment'] = true;
        $this->internalComment = $internalComment;
        return $this;
    }
    /**
     * The ID of the tracking number type. Types are available via: GET /shipping-tracker-types
     *
     * @return int|null
     */
    public function getShippingTrackerType() : ?int
    {
        return $this->shippingTrackerType;
    }
    /**
     * The ID of the tracking number type. Types are available via: GET /shipping-tracker-types
     *
     * @param int|null $shippingTrackerType
     *
     * @return self
     */
    public function setShippingTrackerType(?int $shippingTrackerType) : self
    {
        $this->initialized['shippingTrackerType'] = true;
        $this->shippingTrackerType = $shippingTrackerType;
        return $this;
    }
    /**
     * The shipping tracking number. Has to be in the format that is used for the chosen tracking type (please contact the freight forwarder regarding this).
     *
     * @return string|null
     */
    public function getShippingTrackingNo() : ?string
    {
        return $this->shippingTrackingNo;
    }
    /**
     * The shipping tracking number. Has to be in the format that is used for the chosen tracking type (please contact the freight forwarder regarding this).
     *
     * @param string|null $shippingTrackingNo
     *
     * @return self
     */
    public function setShippingTrackingNo(?string $shippingTrackingNo) : self
    {
        $this->initialized['shippingTrackingNo'] = true;
        $this->shippingTrackingNo = $shippingTrackingNo;
        return $this;
    }
    /**
     * The email address of the customer at the point of order creation
     *
     * @return string|null
     */
    public function getOriginalCustomerEmail() : ?string
    {
        return $this->originalCustomerEmail;
    }
    /**
     * The email address of the customer at the point of order creation
     *
     * @param string|null $originalCustomerEmail
     *
     * @return self
     */
    public function setOriginalCustomerEmail(?string $originalCustomerEmail) : self
    {
        $this->initialized['originalCustomerEmail'] = true;
        $this->originalCustomerEmail = $originalCustomerEmail;
        return $this;
    }
    /**
     * The national id number of the customer at the point of order creation
     *
     * @return string|null
     */
    public function getOriginalCustomerNationalIdNo() : ?string
    {
        return $this->originalCustomerNationalIdNo;
    }
    /**
     * The national id number of the customer at the point of order creation
     *
     * @param string|null $originalCustomerNationalIdNo
     *
     * @return self
     */
    public function setOriginalCustomerNationalIdNo(?string $originalCustomerNationalIdNo) : self
    {
        $this->initialized['originalCustomerNationalIdNo'] = true;
        $this->originalCustomerNationalIdNo = $originalCustomerNationalIdNo;
        return $this;
    }
    /**
     * The VAT number of the customer at the point of order creation
     *
     * @return string|null
     */
    public function getOriginalCustomerVatNo() : ?string
    {
        return $this->originalCustomerVatNo;
    }
    /**
     * The VAT number of the customer at the point of order creation
     *
     * @param string|null $originalCustomerVatNo
     *
     * @return self
     */
    public function setOriginalCustomerVatNo(?string $originalCustomerVatNo) : self
    {
        $this->initialized['originalCustomerVatNo'] = true;
        $this->originalCustomerVatNo = $originalCustomerVatNo;
        return $this;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @return string|null
     */
    public function getOriginalCustomerCustomInfo1() : ?string
    {
        return $this->originalCustomerCustomInfo1;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @param string|null $originalCustomerCustomInfo1
     *
     * @return self
     */
    public function setOriginalCustomerCustomInfo1(?string $originalCustomerCustomInfo1) : self
    {
        $this->initialized['originalCustomerCustomInfo1'] = true;
        $this->originalCustomerCustomInfo1 = $originalCustomerCustomInfo1;
        return $this;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @return string|null
     */
    public function getOriginalCustomerCustomInfo2() : ?string
    {
        return $this->originalCustomerCustomInfo2;
    }
    /**
     * Custom customer info at the point of order creation
     *
     * @param string|null $originalCustomerCustomInfo2
     *
     * @return self
     */
    public function setOriginalCustomerCustomInfo2(?string $originalCustomerCustomInfo2) : self
    {
        $this->initialized['originalCustomerCustomInfo2'] = true;
        $this->originalCustomerCustomInfo2 = $originalCustomerCustomInfo2;
        return $this;
    }
    /**
     * An ID for this order at some other external service f.ex. Specter
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * An ID for this order at some other external service f.ex. Specter
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * Name of the external service the externalId belongs to
     *
     * @return string|null
     */
    public function getExternalIdType() : ?string
    {
        return $this->externalIdType;
    }
    /**
     * Name of the external service the externalId belongs to
     *
     * @param string|null $externalIdType
     *
     * @return self
     */
    public function setExternalIdType(?string $externalIdType) : self
    {
        $this->initialized['externalIdType'] = true;
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * 
     *
     * @return OrderItemModelCollection|null
     */
    public function getItems() : ?OrderItemModelCollection
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param OrderItemModelCollection|null $items
     *
     * @return self
     */
    public function setItems(?OrderItemModelCollection $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return OrderAddressCollection|null
     */
    public function getAddresses() : ?OrderAddressCollection
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param OrderAddressCollection|null $addresses
     *
     * @return self
     */
    public function setAddresses(?OrderAddressCollection $addresses) : self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return OrderExternalServiceModelCollection|null
     */
    public function getExternalServices() : ?OrderExternalServiceModelCollection
    {
        return $this->externalServices;
    }
    /**
     * 
     *
     * @param OrderExternalServiceModelCollection|null $externalServices
     *
     * @return self
     */
    public function setExternalServices(?OrderExternalServiceModelCollection $externalServices) : self
    {
        $this->initialized['externalServices'] = true;
        $this->externalServices = $externalServices;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerModelItem|null
     */
    public function getCustomer() : ?CustomerModelItem
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param CustomerModelItem|null $customer
     *
     * @return self
     */
    public function setCustomer(?CustomerModelItem $customer) : self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return OrderStatusModelItem|null
     */
    public function getStatus() : ?OrderStatusModelItem
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param OrderStatusModelItem|null $status
     *
     * @return self
     */
    public function setStatus(?OrderStatusModelItem $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}