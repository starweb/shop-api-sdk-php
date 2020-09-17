<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OrderPutModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderPutModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderPutModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\OrderPutModel();
        if (property_exists($data, 'orderId') && $data->{'orderId'} !== null) {
            $object->setOrderId($data->{'orderId'});
        }
        if (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} !== null) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        if (property_exists($data, 'baseCurrencyCode') && $data->{'baseCurrencyCode'} !== null) {
            $object->setBaseCurrencyCode($data->{'baseCurrencyCode'});
        }
        if (property_exists($data, 'shopCountryCode') && $data->{'shopCountryCode'} !== null) {
            $object->setShopCountryCode($data->{'shopCountryCode'});
        }
        if (property_exists($data, 'totalAmount') && $data->{'totalAmount'} !== null) {
            $object->setTotalAmount($data->{'totalAmount'});
        }
        if (property_exists($data, 'totalVat') && $data->{'totalVat'} !== null) {
            $object->setTotalVat($data->{'totalVat'});
        }
        if (property_exists($data, 'amountToPay') && $data->{'amountToPay'} !== null) {
            $object->setAmountToPay($data->{'amountToPay'});
        }
        if (property_exists($data, 'totalAmountInBaseCurrency') && $data->{'totalAmountInBaseCurrency'} !== null) {
            $object->setTotalAmountInBaseCurrency($data->{'totalAmountInBaseCurrency'});
        }
        if (property_exists($data, 'totalVatInBaseCurrency') && $data->{'totalVatInBaseCurrency'} !== null) {
            $object->setTotalVatInBaseCurrency($data->{'totalVatInBaseCurrency'});
        }
        if (property_exists($data, 'amountToPayInBaseCurrency') && $data->{'amountToPayInBaseCurrency'} !== null) {
            $object->setAmountToPayInBaseCurrency($data->{'amountToPayInBaseCurrency'});
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'customerId') && $data->{'customerId'} !== null) {
            $object->setCustomerId($data->{'customerId'});
        }
        if (property_exists($data, 'statusId') && $data->{'statusId'} !== null) {
            $object->setStatusId($data->{'statusId'});
        }
        if (property_exists($data, 'onOrderStatusChangeSendEmail') && $data->{'onOrderStatusChangeSendEmail'} !== null) {
            $object->setOnOrderStatusChangeSendEmail($data->{'onOrderStatusChangeSendEmail'});
        }
        if (property_exists($data, 'onOrderStatusChangeProcessPayment') && $data->{'onOrderStatusChangeProcessPayment'} !== null) {
            $object->setOnOrderStatusChangeProcessPayment($data->{'onOrderStatusChangeProcessPayment'});
        }
        if (property_exists($data, 'shippingMethodId') && $data->{'shippingMethodId'} !== null) {
            $object->setShippingMethodId($data->{'shippingMethodId'});
        }
        if (property_exists($data, 'paymentMethodId') && $data->{'paymentMethodId'} !== null) {
            $object->setPaymentMethodId($data->{'paymentMethodId'});
        }
        if (property_exists($data, 'paymentMethodIdCode') && $data->{'paymentMethodIdCode'} !== null) {
            $object->setPaymentMethodIdCode($data->{'paymentMethodIdCode'});
        }
        if (property_exists($data, 'paymentMethodName') && $data->{'paymentMethodName'} !== null) {
            $object->setPaymentMethodName($data->{'paymentMethodName'});
        }
        if (property_exists($data, 'paymentFee') && $data->{'paymentFee'} !== null) {
            $object->setPaymentFee($data->{'paymentFee'});
        }
        if (property_exists($data, 'paymentVatRate') && $data->{'paymentVatRate'} !== null) {
            $object->setPaymentVatRate($data->{'paymentVatRate'});
        }
        if (property_exists($data, 'shippingMethodName') && $data->{'shippingMethodName'} !== null) {
            $object->setShippingMethodName($data->{'shippingMethodName'});
        }
        if (property_exists($data, 'shippingCost') && $data->{'shippingCost'} !== null) {
            $object->setShippingCost($data->{'shippingCost'});
        }
        if (property_exists($data, 'shippingVatRate') && $data->{'shippingVatRate'} !== null) {
            $object->setShippingVatRate($data->{'shippingVatRate'});
        }
        if (property_exists($data, 'totalWeight') && $data->{'totalWeight'} !== null) {
            $object->setTotalWeight($data->{'totalWeight'});
        }
        if (property_exists($data, 'customInfo1') && $data->{'customInfo1'} !== null) {
            $object->setCustomInfo1($data->{'customInfo1'});
        }
        if (property_exists($data, 'customInfo2') && $data->{'customInfo2'} !== null) {
            $object->setCustomInfo2($data->{'customInfo2'});
        }
        if (property_exists($data, 'customInfo3') && $data->{'customInfo3'} !== null) {
            $object->setCustomInfo3($data->{'customInfo3'});
        }
        if (property_exists($data, 'customInfo4') && $data->{'customInfo4'} !== null) {
            $object->setCustomInfo4($data->{'customInfo4'});
        }
        if (property_exists($data, 'discountCode') && $data->{'discountCode'} !== null) {
            $object->setDiscountCode($data->{'discountCode'});
        }
        if (property_exists($data, 'amountPaid') && $data->{'amountPaid'} !== null) {
            $object->setAmountPaid($data->{'amountPaid'});
        }
        if (property_exists($data, 'amountPaidInBaseCurrency') && $data->{'amountPaidInBaseCurrency'} !== null) {
            $object->setAmountPaidInBaseCurrency($data->{'amountPaidInBaseCurrency'});
        }
        if (property_exists($data, 'isComplete') && $data->{'isComplete'} !== null) {
            $object->setIsComplete($data->{'isComplete'});
        }
        if (property_exists($data, 'currencyCode') && $data->{'currencyCode'} !== null) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'currencyExchangeRate') && $data->{'currencyExchangeRate'} !== null) {
            $object->setCurrencyExchangeRate($data->{'currencyExchangeRate'});
        }
        if (property_exists($data, 'currencyPrecision') && $data->{'currencyPrecision'} !== null) {
            $object->setCurrencyPrecision($data->{'currencyPrecision'});
        }
        if (property_exists($data, 'langCode') && $data->{'langCode'} !== null) {
            $object->setLangCode($data->{'langCode'});
        }
        if (property_exists($data, 'paymentReference') && $data->{'paymentReference'} !== null) {
            $object->setPaymentReference($data->{'paymentReference'});
        }
        if (property_exists($data, 'paymentStatus') && $data->{'paymentStatus'} !== null) {
            $object->setPaymentStatus($data->{'paymentStatus'});
        }
        if (property_exists($data, 'isRead') && $data->{'isRead'} !== null) {
            $object->setIsRead($data->{'isRead'});
        }
        if (property_exists($data, 'hasComment') && $data->{'hasComment'} !== null) {
            $object->setHasComment($data->{'hasComment'});
        }
        if (property_exists($data, 'internalComment') && $data->{'internalComment'} !== null) {
            $object->setInternalComment($data->{'internalComment'});
        }
        if (property_exists($data, 'shippingTrackerType') && $data->{'shippingTrackerType'} !== null) {
            $object->setShippingTrackerType($data->{'shippingTrackerType'});
        }
        if (property_exists($data, 'shippingTrackingNo') && $data->{'shippingTrackingNo'} !== null) {
            $object->setShippingTrackingNo($data->{'shippingTrackingNo'});
        }
        if (property_exists($data, 'originalCustomerEmail') && $data->{'originalCustomerEmail'} !== null) {
            $object->setOriginalCustomerEmail($data->{'originalCustomerEmail'});
        }
        if (property_exists($data, 'originalCustomerNationalIdNo') && $data->{'originalCustomerNationalIdNo'} !== null) {
            $object->setOriginalCustomerNationalIdNo($data->{'originalCustomerNationalIdNo'});
        }
        if (property_exists($data, 'originalCustomerVatNo') && $data->{'originalCustomerVatNo'} !== null) {
            $object->setOriginalCustomerVatNo($data->{'originalCustomerVatNo'});
        }
        if (property_exists($data, 'originalCustomerCustomInfo1') && $data->{'originalCustomerCustomInfo1'} !== null) {
            $object->setOriginalCustomerCustomInfo1($data->{'originalCustomerCustomInfo1'});
        }
        if (property_exists($data, 'originalCustomerCustomInfo2') && $data->{'originalCustomerCustomInfo2'} !== null) {
            $object->setOriginalCustomerCustomInfo2($data->{'originalCustomerCustomInfo2'});
        }
        if (property_exists($data, 'items') && $data->{'items'} !== null) {
            $values = array();
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\OrderItemModel', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'addresses') && $data->{'addresses'} !== null) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Starweb\\Api\\Generated\\Model\\OrderAddressModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        if (null !== $object->getOnOrderStatusChangeSendEmail()) {
            $data->{'onOrderStatusChangeSendEmail'} = $object->getOnOrderStatusChangeSendEmail();
        }
        if (null !== $object->getOnOrderStatusChangeProcessPayment()) {
            $data->{'onOrderStatusChangeProcessPayment'} = $object->getOnOrderStatusChangeProcessPayment();
        }
        if (null !== $object->getShippingMethodId()) {
            $data->{'shippingMethodId'} = $object->getShippingMethodId();
        }
        if (null !== $object->getPaymentMethodId()) {
            $data->{'paymentMethodId'} = $object->getPaymentMethodId();
        }
        if (null !== $object->getPaymentMethodName()) {
            $data->{'paymentMethodName'} = $object->getPaymentMethodName();
        }
        if (null !== $object->getPaymentFee()) {
            $data->{'paymentFee'} = $object->getPaymentFee();
        }
        if (null !== $object->getPaymentVatRate()) {
            $data->{'paymentVatRate'} = $object->getPaymentVatRate();
        }
        if (null !== $object->getShippingMethodName()) {
            $data->{'shippingMethodName'} = $object->getShippingMethodName();
        }
        if (null !== $object->getShippingCost()) {
            $data->{'shippingCost'} = $object->getShippingCost();
        }
        if (null !== $object->getShippingVatRate()) {
            $data->{'shippingVatRate'} = $object->getShippingVatRate();
        }
        if (null !== $object->getCustomInfo1()) {
            $data->{'customInfo1'} = $object->getCustomInfo1();
        }
        if (null !== $object->getCustomInfo2()) {
            $data->{'customInfo2'} = $object->getCustomInfo2();
        }
        if (null !== $object->getCustomInfo3()) {
            $data->{'customInfo3'} = $object->getCustomInfo3();
        }
        if (null !== $object->getCustomInfo4()) {
            $data->{'customInfo4'} = $object->getCustomInfo4();
        }
        if (null !== $object->getDiscountCode()) {
            $data->{'discountCode'} = $object->getDiscountCode();
        }
        if (null !== $object->getAmountPaid()) {
            $data->{'amountPaid'} = $object->getAmountPaid();
        }
        if (null !== $object->getIsComplete()) {
            $data->{'isComplete'} = $object->getIsComplete();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getCurrencyExchangeRate()) {
            $data->{'currencyExchangeRate'} = $object->getCurrencyExchangeRate();
        }
        if (null !== $object->getCurrencyPrecision()) {
            $data->{'currencyPrecision'} = $object->getCurrencyPrecision();
        }
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        if (null !== $object->getPaymentReference()) {
            $data->{'paymentReference'} = $object->getPaymentReference();
        }
        if (null !== $object->getPaymentStatus()) {
            $data->{'paymentStatus'} = $object->getPaymentStatus();
        }
        if (null !== $object->getIsRead()) {
            $data->{'isRead'} = $object->getIsRead();
        }
        if (null !== $object->getInternalComment()) {
            $data->{'internalComment'} = $object->getInternalComment();
        }
        if (null !== $object->getShippingTrackerType()) {
            $data->{'shippingTrackerType'} = $object->getShippingTrackerType();
        }
        if (null !== $object->getShippingTrackingNo()) {
            $data->{'shippingTrackingNo'} = $object->getShippingTrackingNo();
        }
        if (null !== $object->getOriginalCustomerEmail()) {
            $data->{'originalCustomerEmail'} = $object->getOriginalCustomerEmail();
        }
        if (null !== $object->getOriginalCustomerNationalIdNo()) {
            $data->{'originalCustomerNationalIdNo'} = $object->getOriginalCustomerNationalIdNo();
        }
        if (null !== $object->getOriginalCustomerVatNo()) {
            $data->{'originalCustomerVatNo'} = $object->getOriginalCustomerVatNo();
        }
        if (null !== $object->getOriginalCustomerCustomInfo1()) {
            $data->{'originalCustomerCustomInfo1'} = $object->getOriginalCustomerCustomInfo1();
        }
        if (null !== $object->getOriginalCustomerCustomInfo2()) {
            $data->{'originalCustomerCustomInfo2'} = $object->getOriginalCustomerCustomInfo2();
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        return $data;
    }
}