<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Starweb\Api\Generated\Runtime\Normalizer\CheckArray;
use Starweb\Api\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrderUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderUpdateModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderUpdateModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Starweb\Api\Generated\Model\OrderUpdateModel();
        if (\array_key_exists('totalAmount', $data) && \is_int($data['totalAmount'])) {
            $data['totalAmount'] = (double) $data['totalAmount'];
        }
        if (\array_key_exists('totalVat', $data) && \is_int($data['totalVat'])) {
            $data['totalVat'] = (double) $data['totalVat'];
        }
        if (\array_key_exists('amountToPay', $data) && \is_int($data['amountToPay'])) {
            $data['amountToPay'] = (double) $data['amountToPay'];
        }
        if (\array_key_exists('totalAmountInBaseCurrency', $data) && \is_int($data['totalAmountInBaseCurrency'])) {
            $data['totalAmountInBaseCurrency'] = (double) $data['totalAmountInBaseCurrency'];
        }
        if (\array_key_exists('totalVatInBaseCurrency', $data) && \is_int($data['totalVatInBaseCurrency'])) {
            $data['totalVatInBaseCurrency'] = (double) $data['totalVatInBaseCurrency'];
        }
        if (\array_key_exists('amountToPayInBaseCurrency', $data) && \is_int($data['amountToPayInBaseCurrency'])) {
            $data['amountToPayInBaseCurrency'] = (double) $data['amountToPayInBaseCurrency'];
        }
        if (\array_key_exists('paymentFee', $data) && \is_int($data['paymentFee'])) {
            $data['paymentFee'] = (double) $data['paymentFee'];
        }
        if (\array_key_exists('paymentVatRate', $data) && \is_int($data['paymentVatRate'])) {
            $data['paymentVatRate'] = (double) $data['paymentVatRate'];
        }
        if (\array_key_exists('shippingCost', $data) && \is_int($data['shippingCost'])) {
            $data['shippingCost'] = (double) $data['shippingCost'];
        }
        if (\array_key_exists('shippingVatRate', $data) && \is_int($data['shippingVatRate'])) {
            $data['shippingVatRate'] = (double) $data['shippingVatRate'];
        }
        if (\array_key_exists('totalWeight', $data) && \is_int($data['totalWeight'])) {
            $data['totalWeight'] = (double) $data['totalWeight'];
        }
        if (\array_key_exists('amountPaid', $data) && \is_int($data['amountPaid'])) {
            $data['amountPaid'] = (double) $data['amountPaid'];
        }
        if (\array_key_exists('amountPaidInBaseCurrency', $data) && \is_int($data['amountPaidInBaseCurrency'])) {
            $data['amountPaidInBaseCurrency'] = (double) $data['amountPaidInBaseCurrency'];
        }
        if (\array_key_exists('currencyExchangeRate', $data) && \is_int($data['currencyExchangeRate'])) {
            $data['currencyExchangeRate'] = (double) $data['currencyExchangeRate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderId', $data) && $data['orderId'] !== null) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        }
        elseif (\array_key_exists('orderId', $data) && $data['orderId'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('modifiedAt', $data) && $data['modifiedAt'] !== null) {
            $object->setModifiedAt($data['modifiedAt']);
            unset($data['modifiedAt']);
        }
        elseif (\array_key_exists('modifiedAt', $data) && $data['modifiedAt'] === null) {
            $object->setModifiedAt(null);
        }
        if (\array_key_exists('baseCurrencyCode', $data) && $data['baseCurrencyCode'] !== null) {
            $object->setBaseCurrencyCode($data['baseCurrencyCode']);
            unset($data['baseCurrencyCode']);
        }
        elseif (\array_key_exists('baseCurrencyCode', $data) && $data['baseCurrencyCode'] === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (\array_key_exists('shopCountryCode', $data) && $data['shopCountryCode'] !== null) {
            $object->setShopCountryCode($data['shopCountryCode']);
            unset($data['shopCountryCode']);
        }
        elseif (\array_key_exists('shopCountryCode', $data) && $data['shopCountryCode'] === null) {
            $object->setShopCountryCode(null);
        }
        if (\array_key_exists('totalAmount', $data) && $data['totalAmount'] !== null) {
            $object->setTotalAmount($data['totalAmount']);
            unset($data['totalAmount']);
        }
        elseif (\array_key_exists('totalAmount', $data) && $data['totalAmount'] === null) {
            $object->setTotalAmount(null);
        }
        if (\array_key_exists('totalVat', $data) && $data['totalVat'] !== null) {
            $object->setTotalVat($data['totalVat']);
            unset($data['totalVat']);
        }
        elseif (\array_key_exists('totalVat', $data) && $data['totalVat'] === null) {
            $object->setTotalVat(null);
        }
        if (\array_key_exists('amountToPay', $data) && $data['amountToPay'] !== null) {
            $object->setAmountToPay($data['amountToPay']);
            unset($data['amountToPay']);
        }
        elseif (\array_key_exists('amountToPay', $data) && $data['amountToPay'] === null) {
            $object->setAmountToPay(null);
        }
        if (\array_key_exists('totalAmountInBaseCurrency', $data) && $data['totalAmountInBaseCurrency'] !== null) {
            $object->setTotalAmountInBaseCurrency($data['totalAmountInBaseCurrency']);
            unset($data['totalAmountInBaseCurrency']);
        }
        elseif (\array_key_exists('totalAmountInBaseCurrency', $data) && $data['totalAmountInBaseCurrency'] === null) {
            $object->setTotalAmountInBaseCurrency(null);
        }
        if (\array_key_exists('totalVatInBaseCurrency', $data) && $data['totalVatInBaseCurrency'] !== null) {
            $object->setTotalVatInBaseCurrency($data['totalVatInBaseCurrency']);
            unset($data['totalVatInBaseCurrency']);
        }
        elseif (\array_key_exists('totalVatInBaseCurrency', $data) && $data['totalVatInBaseCurrency'] === null) {
            $object->setTotalVatInBaseCurrency(null);
        }
        if (\array_key_exists('amountToPayInBaseCurrency', $data) && $data['amountToPayInBaseCurrency'] !== null) {
            $object->setAmountToPayInBaseCurrency($data['amountToPayInBaseCurrency']);
            unset($data['amountToPayInBaseCurrency']);
        }
        elseif (\array_key_exists('amountToPayInBaseCurrency', $data) && $data['amountToPayInBaseCurrency'] === null) {
            $object->setAmountToPayInBaseCurrency(null);
        }
        if (\array_key_exists('createdAt', $data) && $data['createdAt'] !== null) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        elseif (\array_key_exists('createdAt', $data) && $data['createdAt'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('statusId', $data) && $data['statusId'] !== null) {
            $object->setStatusId($data['statusId']);
            unset($data['statusId']);
        }
        elseif (\array_key_exists('statusId', $data) && $data['statusId'] === null) {
            $object->setStatusId(null);
        }
        if (\array_key_exists('onOrderStatusChangeSendEmail', $data) && $data['onOrderStatusChangeSendEmail'] !== null) {
            $object->setOnOrderStatusChangeSendEmail($data['onOrderStatusChangeSendEmail']);
            unset($data['onOrderStatusChangeSendEmail']);
        }
        elseif (\array_key_exists('onOrderStatusChangeSendEmail', $data) && $data['onOrderStatusChangeSendEmail'] === null) {
            $object->setOnOrderStatusChangeSendEmail(null);
        }
        if (\array_key_exists('onOrderStatusChangeProcessPayment', $data) && $data['onOrderStatusChangeProcessPayment'] !== null) {
            $object->setOnOrderStatusChangeProcessPayment($data['onOrderStatusChangeProcessPayment']);
            unset($data['onOrderStatusChangeProcessPayment']);
        }
        elseif (\array_key_exists('onOrderStatusChangeProcessPayment', $data) && $data['onOrderStatusChangeProcessPayment'] === null) {
            $object->setOnOrderStatusChangeProcessPayment(null);
        }
        if (\array_key_exists('shippingMethodId', $data) && $data['shippingMethodId'] !== null) {
            $object->setShippingMethodId($data['shippingMethodId']);
            unset($data['shippingMethodId']);
        }
        elseif (\array_key_exists('shippingMethodId', $data) && $data['shippingMethodId'] === null) {
            $object->setShippingMethodId(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('paymentMethodIdCode', $data) && $data['paymentMethodIdCode'] !== null) {
            $object->setPaymentMethodIdCode($data['paymentMethodIdCode']);
            unset($data['paymentMethodIdCode']);
        }
        elseif (\array_key_exists('paymentMethodIdCode', $data) && $data['paymentMethodIdCode'] === null) {
            $object->setPaymentMethodIdCode(null);
        }
        if (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] !== null) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        elseif (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] === null) {
            $object->setPaymentMethodName(null);
        }
        if (\array_key_exists('paymentFee', $data) && $data['paymentFee'] !== null) {
            $object->setPaymentFee($data['paymentFee']);
            unset($data['paymentFee']);
        }
        elseif (\array_key_exists('paymentFee', $data) && $data['paymentFee'] === null) {
            $object->setPaymentFee(null);
        }
        if (\array_key_exists('paymentVatRate', $data) && $data['paymentVatRate'] !== null) {
            $object->setPaymentVatRate($data['paymentVatRate']);
            unset($data['paymentVatRate']);
        }
        elseif (\array_key_exists('paymentVatRate', $data) && $data['paymentVatRate'] === null) {
            $object->setPaymentVatRate(null);
        }
        if (\array_key_exists('shippingMethodName', $data) && $data['shippingMethodName'] !== null) {
            $object->setShippingMethodName($data['shippingMethodName']);
            unset($data['shippingMethodName']);
        }
        elseif (\array_key_exists('shippingMethodName', $data) && $data['shippingMethodName'] === null) {
            $object->setShippingMethodName(null);
        }
        if (\array_key_exists('shippingCost', $data) && $data['shippingCost'] !== null) {
            $object->setShippingCost($data['shippingCost']);
            unset($data['shippingCost']);
        }
        elseif (\array_key_exists('shippingCost', $data) && $data['shippingCost'] === null) {
            $object->setShippingCost(null);
        }
        if (\array_key_exists('shippingVatRate', $data) && $data['shippingVatRate'] !== null) {
            $object->setShippingVatRate($data['shippingVatRate']);
            unset($data['shippingVatRate']);
        }
        elseif (\array_key_exists('shippingVatRate', $data) && $data['shippingVatRate'] === null) {
            $object->setShippingVatRate(null);
        }
        if (\array_key_exists('totalWeight', $data) && $data['totalWeight'] !== null) {
            $object->setTotalWeight($data['totalWeight']);
            unset($data['totalWeight']);
        }
        elseif (\array_key_exists('totalWeight', $data) && $data['totalWeight'] === null) {
            $object->setTotalWeight(null);
        }
        if (\array_key_exists('customInfo1', $data) && $data['customInfo1'] !== null) {
            $object->setCustomInfo1($data['customInfo1']);
            unset($data['customInfo1']);
        }
        elseif (\array_key_exists('customInfo1', $data) && $data['customInfo1'] === null) {
            $object->setCustomInfo1(null);
        }
        if (\array_key_exists('customInfo2', $data) && $data['customInfo2'] !== null) {
            $object->setCustomInfo2($data['customInfo2']);
            unset($data['customInfo2']);
        }
        elseif (\array_key_exists('customInfo2', $data) && $data['customInfo2'] === null) {
            $object->setCustomInfo2(null);
        }
        if (\array_key_exists('customInfo3', $data) && $data['customInfo3'] !== null) {
            $object->setCustomInfo3($data['customInfo3']);
            unset($data['customInfo3']);
        }
        elseif (\array_key_exists('customInfo3', $data) && $data['customInfo3'] === null) {
            $object->setCustomInfo3(null);
        }
        if (\array_key_exists('customInfo4', $data) && $data['customInfo4'] !== null) {
            $object->setCustomInfo4($data['customInfo4']);
            unset($data['customInfo4']);
        }
        elseif (\array_key_exists('customInfo4', $data) && $data['customInfo4'] === null) {
            $object->setCustomInfo4(null);
        }
        if (\array_key_exists('discountCode', $data) && $data['discountCode'] !== null) {
            $object->setDiscountCode($data['discountCode']);
            unset($data['discountCode']);
        }
        elseif (\array_key_exists('discountCode', $data) && $data['discountCode'] === null) {
            $object->setDiscountCode(null);
        }
        if (\array_key_exists('amountPaid', $data) && $data['amountPaid'] !== null) {
            $object->setAmountPaid($data['amountPaid']);
            unset($data['amountPaid']);
        }
        elseif (\array_key_exists('amountPaid', $data) && $data['amountPaid'] === null) {
            $object->setAmountPaid(null);
        }
        if (\array_key_exists('amountPaidInBaseCurrency', $data) && $data['amountPaidInBaseCurrency'] !== null) {
            $object->setAmountPaidInBaseCurrency($data['amountPaidInBaseCurrency']);
            unset($data['amountPaidInBaseCurrency']);
        }
        elseif (\array_key_exists('amountPaidInBaseCurrency', $data) && $data['amountPaidInBaseCurrency'] === null) {
            $object->setAmountPaidInBaseCurrency(null);
        }
        if (\array_key_exists('isComplete', $data) && $data['isComplete'] !== null) {
            $object->setIsComplete($data['isComplete']);
            unset($data['isComplete']);
        }
        elseif (\array_key_exists('isComplete', $data) && $data['isComplete'] === null) {
            $object->setIsComplete(null);
        }
        if (\array_key_exists('currencyCode', $data) && $data['currencyCode'] !== null) {
            $object->setCurrencyCode($data['currencyCode']);
            unset($data['currencyCode']);
        }
        elseif (\array_key_exists('currencyCode', $data) && $data['currencyCode'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('currencyExchangeRate', $data) && $data['currencyExchangeRate'] !== null) {
            $object->setCurrencyExchangeRate($data['currencyExchangeRate']);
            unset($data['currencyExchangeRate']);
        }
        elseif (\array_key_exists('currencyExchangeRate', $data) && $data['currencyExchangeRate'] === null) {
            $object->setCurrencyExchangeRate(null);
        }
        if (\array_key_exists('currencyPrecision', $data) && $data['currencyPrecision'] !== null) {
            $object->setCurrencyPrecision($data['currencyPrecision']);
            unset($data['currencyPrecision']);
        }
        elseif (\array_key_exists('currencyPrecision', $data) && $data['currencyPrecision'] === null) {
            $object->setCurrencyPrecision(null);
        }
        if (\array_key_exists('langCode', $data) && $data['langCode'] !== null) {
            $object->setLangCode($data['langCode']);
            unset($data['langCode']);
        }
        elseif (\array_key_exists('langCode', $data) && $data['langCode'] === null) {
            $object->setLangCode(null);
        }
        if (\array_key_exists('paymentReference', $data) && $data['paymentReference'] !== null) {
            $object->setPaymentReference($data['paymentReference']);
            unset($data['paymentReference']);
        }
        elseif (\array_key_exists('paymentReference', $data) && $data['paymentReference'] === null) {
            $object->setPaymentReference(null);
        }
        if (\array_key_exists('paymentStatus', $data) && $data['paymentStatus'] !== null) {
            $object->setPaymentStatus($data['paymentStatus']);
            unset($data['paymentStatus']);
        }
        elseif (\array_key_exists('paymentStatus', $data) && $data['paymentStatus'] === null) {
            $object->setPaymentStatus(null);
        }
        if (\array_key_exists('isRead', $data) && $data['isRead'] !== null) {
            $object->setIsRead($data['isRead']);
            unset($data['isRead']);
        }
        elseif (\array_key_exists('isRead', $data) && $data['isRead'] === null) {
            $object->setIsRead(null);
        }
        if (\array_key_exists('hasComment', $data) && $data['hasComment'] !== null) {
            $object->setHasComment($data['hasComment']);
            unset($data['hasComment']);
        }
        elseif (\array_key_exists('hasComment', $data) && $data['hasComment'] === null) {
            $object->setHasComment(null);
        }
        if (\array_key_exists('internalComment', $data) && $data['internalComment'] !== null) {
            $object->setInternalComment($data['internalComment']);
            unset($data['internalComment']);
        }
        elseif (\array_key_exists('internalComment', $data) && $data['internalComment'] === null) {
            $object->setInternalComment(null);
        }
        if (\array_key_exists('shippingTrackerType', $data) && $data['shippingTrackerType'] !== null) {
            $object->setShippingTrackerType($data['shippingTrackerType']);
            unset($data['shippingTrackerType']);
        }
        elseif (\array_key_exists('shippingTrackerType', $data) && $data['shippingTrackerType'] === null) {
            $object->setShippingTrackerType(null);
        }
        if (\array_key_exists('shippingTrackingNo', $data) && $data['shippingTrackingNo'] !== null) {
            $object->setShippingTrackingNo($data['shippingTrackingNo']);
            unset($data['shippingTrackingNo']);
        }
        elseif (\array_key_exists('shippingTrackingNo', $data) && $data['shippingTrackingNo'] === null) {
            $object->setShippingTrackingNo(null);
        }
        if (\array_key_exists('originalCustomerEmail', $data) && $data['originalCustomerEmail'] !== null) {
            $object->setOriginalCustomerEmail($data['originalCustomerEmail']);
            unset($data['originalCustomerEmail']);
        }
        elseif (\array_key_exists('originalCustomerEmail', $data) && $data['originalCustomerEmail'] === null) {
            $object->setOriginalCustomerEmail(null);
        }
        if (\array_key_exists('originalCustomerNationalIdNo', $data) && $data['originalCustomerNationalIdNo'] !== null) {
            $object->setOriginalCustomerNationalIdNo($data['originalCustomerNationalIdNo']);
            unset($data['originalCustomerNationalIdNo']);
        }
        elseif (\array_key_exists('originalCustomerNationalIdNo', $data) && $data['originalCustomerNationalIdNo'] === null) {
            $object->setOriginalCustomerNationalIdNo(null);
        }
        if (\array_key_exists('originalCustomerVatNo', $data) && $data['originalCustomerVatNo'] !== null) {
            $object->setOriginalCustomerVatNo($data['originalCustomerVatNo']);
            unset($data['originalCustomerVatNo']);
        }
        elseif (\array_key_exists('originalCustomerVatNo', $data) && $data['originalCustomerVatNo'] === null) {
            $object->setOriginalCustomerVatNo(null);
        }
        if (\array_key_exists('originalCustomerCustomInfo1', $data) && $data['originalCustomerCustomInfo1'] !== null) {
            $object->setOriginalCustomerCustomInfo1($data['originalCustomerCustomInfo1']);
            unset($data['originalCustomerCustomInfo1']);
        }
        elseif (\array_key_exists('originalCustomerCustomInfo1', $data) && $data['originalCustomerCustomInfo1'] === null) {
            $object->setOriginalCustomerCustomInfo1(null);
        }
        if (\array_key_exists('originalCustomerCustomInfo2', $data) && $data['originalCustomerCustomInfo2'] !== null) {
            $object->setOriginalCustomerCustomInfo2($data['originalCustomerCustomInfo2']);
            unset($data['originalCustomerCustomInfo2']);
        }
        elseif (\array_key_exists('originalCustomerCustomInfo2', $data) && $data['originalCustomerCustomInfo2'] === null) {
            $object->setOriginalCustomerCustomInfo2(null);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('externalIdType', $data) && $data['externalIdType'] !== null) {
            $object->setExternalIdType($data['externalIdType']);
            unset($data['externalIdType']);
        }
        elseif (\array_key_exists('externalIdType', $data) && $data['externalIdType'] === null) {
            $object->setExternalIdType(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\OrderItemModel', 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('addresses', $data) && $data['addresses'] !== null) {
            $object->setAddresses($this->denormalizer->denormalize($data['addresses'], 'Starweb\\Api\\Generated\\Model\\OrderAddressModel', 'json', $context));
            unset($data['addresses']);
        }
        elseif (\array_key_exists('addresses', $data) && $data['addresses'] === null) {
            $object->setAddresses(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if ($object->isInitialized('statusId') && null !== $object->getStatusId()) {
            $data['statusId'] = $object->getStatusId();
        }
        if ($object->isInitialized('onOrderStatusChangeSendEmail') && null !== $object->getOnOrderStatusChangeSendEmail()) {
            $data['onOrderStatusChangeSendEmail'] = $object->getOnOrderStatusChangeSendEmail();
        }
        if ($object->isInitialized('onOrderStatusChangeProcessPayment') && null !== $object->getOnOrderStatusChangeProcessPayment()) {
            $data['onOrderStatusChangeProcessPayment'] = $object->getOnOrderStatusChangeProcessPayment();
        }
        if ($object->isInitialized('shippingMethodId') && null !== $object->getShippingMethodId()) {
            $data['shippingMethodId'] = $object->getShippingMethodId();
        }
        if ($object->isInitialized('paymentMethodId') && null !== $object->getPaymentMethodId()) {
            $data['paymentMethodId'] = $object->getPaymentMethodId();
        }
        if ($object->isInitialized('paymentMethodName') && null !== $object->getPaymentMethodName()) {
            $data['paymentMethodName'] = $object->getPaymentMethodName();
        }
        if ($object->isInitialized('paymentFee') && null !== $object->getPaymentFee()) {
            $data['paymentFee'] = $object->getPaymentFee();
        }
        if ($object->isInitialized('paymentVatRate') && null !== $object->getPaymentVatRate()) {
            $data['paymentVatRate'] = $object->getPaymentVatRate();
        }
        if ($object->isInitialized('shippingMethodName') && null !== $object->getShippingMethodName()) {
            $data['shippingMethodName'] = $object->getShippingMethodName();
        }
        if ($object->isInitialized('shippingCost') && null !== $object->getShippingCost()) {
            $data['shippingCost'] = $object->getShippingCost();
        }
        if ($object->isInitialized('shippingVatRate') && null !== $object->getShippingVatRate()) {
            $data['shippingVatRate'] = $object->getShippingVatRate();
        }
        if ($object->isInitialized('customInfo1') && null !== $object->getCustomInfo1()) {
            $data['customInfo1'] = $object->getCustomInfo1();
        }
        if ($object->isInitialized('customInfo2') && null !== $object->getCustomInfo2()) {
            $data['customInfo2'] = $object->getCustomInfo2();
        }
        if ($object->isInitialized('customInfo3') && null !== $object->getCustomInfo3()) {
            $data['customInfo3'] = $object->getCustomInfo3();
        }
        if ($object->isInitialized('customInfo4') && null !== $object->getCustomInfo4()) {
            $data['customInfo4'] = $object->getCustomInfo4();
        }
        if ($object->isInitialized('discountCode') && null !== $object->getDiscountCode()) {
            $data['discountCode'] = $object->getDiscountCode();
        }
        if ($object->isInitialized('amountPaid') && null !== $object->getAmountPaid()) {
            $data['amountPaid'] = $object->getAmountPaid();
        }
        if ($object->isInitialized('isComplete') && null !== $object->getIsComplete()) {
            $data['isComplete'] = $object->getIsComplete();
        }
        if ($object->isInitialized('currencyCode') && null !== $object->getCurrencyCode()) {
            $data['currencyCode'] = $object->getCurrencyCode();
        }
        if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
            $data['currencyExchangeRate'] = $object->getCurrencyExchangeRate();
        }
        if ($object->isInitialized('currencyPrecision') && null !== $object->getCurrencyPrecision()) {
            $data['currencyPrecision'] = $object->getCurrencyPrecision();
        }
        if ($object->isInitialized('langCode') && null !== $object->getLangCode()) {
            $data['langCode'] = $object->getLangCode();
        }
        if ($object->isInitialized('paymentReference') && null !== $object->getPaymentReference()) {
            $data['paymentReference'] = $object->getPaymentReference();
        }
        if ($object->isInitialized('paymentStatus') && null !== $object->getPaymentStatus()) {
            $data['paymentStatus'] = $object->getPaymentStatus();
        }
        if ($object->isInitialized('isRead') && null !== $object->getIsRead()) {
            $data['isRead'] = $object->getIsRead();
        }
        if ($object->isInitialized('internalComment') && null !== $object->getInternalComment()) {
            $data['internalComment'] = $object->getInternalComment();
        }
        if ($object->isInitialized('shippingTrackerType') && null !== $object->getShippingTrackerType()) {
            $data['shippingTrackerType'] = $object->getShippingTrackerType();
        }
        if ($object->isInitialized('shippingTrackingNo') && null !== $object->getShippingTrackingNo()) {
            $data['shippingTrackingNo'] = $object->getShippingTrackingNo();
        }
        if ($object->isInitialized('originalCustomerEmail') && null !== $object->getOriginalCustomerEmail()) {
            $data['originalCustomerEmail'] = $object->getOriginalCustomerEmail();
        }
        if ($object->isInitialized('originalCustomerNationalIdNo') && null !== $object->getOriginalCustomerNationalIdNo()) {
            $data['originalCustomerNationalIdNo'] = $object->getOriginalCustomerNationalIdNo();
        }
        if ($object->isInitialized('originalCustomerVatNo') && null !== $object->getOriginalCustomerVatNo()) {
            $data['originalCustomerVatNo'] = $object->getOriginalCustomerVatNo();
        }
        if ($object->isInitialized('originalCustomerCustomInfo1') && null !== $object->getOriginalCustomerCustomInfo1()) {
            $data['originalCustomerCustomInfo1'] = $object->getOriginalCustomerCustomInfo1();
        }
        if ($object->isInitialized('originalCustomerCustomInfo2') && null !== $object->getOriginalCustomerCustomInfo2()) {
            $data['originalCustomerCustomInfo2'] = $object->getOriginalCustomerCustomInfo2();
        }
        if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if ($object->isInitialized('externalIdType') && null !== $object->getExternalIdType()) {
            $data['externalIdType'] = $object->getExternalIdType();
        }
        if ($object->isInitialized('items') && null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['items'] = $values;
        }
        if ($object->isInitialized('addresses') && null !== $object->getAddresses()) {
            $data['addresses'] = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\OrderUpdateModel' => false);
    }
}