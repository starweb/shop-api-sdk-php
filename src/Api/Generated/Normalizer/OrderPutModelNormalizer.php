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
        elseif (property_exists($data, 'orderId') && $data->{'orderId'} === null) {
            $object->setOrderId(null);
        }
        if (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} !== null) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        elseif (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} === null) {
            $object->setModifiedAt(null);
        }
        if (property_exists($data, 'baseCurrencyCode') && $data->{'baseCurrencyCode'} !== null) {
            $object->setBaseCurrencyCode($data->{'baseCurrencyCode'});
        }
        elseif (property_exists($data, 'baseCurrencyCode') && $data->{'baseCurrencyCode'} === null) {
            $object->setBaseCurrencyCode(null);
        }
        if (property_exists($data, 'shopCountryCode') && $data->{'shopCountryCode'} !== null) {
            $object->setShopCountryCode($data->{'shopCountryCode'});
        }
        elseif (property_exists($data, 'shopCountryCode') && $data->{'shopCountryCode'} === null) {
            $object->setShopCountryCode(null);
        }
        if (property_exists($data, 'totalAmount') && $data->{'totalAmount'} !== null) {
            $object->setTotalAmount($data->{'totalAmount'});
        }
        elseif (property_exists($data, 'totalAmount') && $data->{'totalAmount'} === null) {
            $object->setTotalAmount(null);
        }
        if (property_exists($data, 'totalVat') && $data->{'totalVat'} !== null) {
            $object->setTotalVat($data->{'totalVat'});
        }
        elseif (property_exists($data, 'totalVat') && $data->{'totalVat'} === null) {
            $object->setTotalVat(null);
        }
        if (property_exists($data, 'amountToPay') && $data->{'amountToPay'} !== null) {
            $object->setAmountToPay($data->{'amountToPay'});
        }
        elseif (property_exists($data, 'amountToPay') && $data->{'amountToPay'} === null) {
            $object->setAmountToPay(null);
        }
        if (property_exists($data, 'totalAmountInBaseCurrency') && $data->{'totalAmountInBaseCurrency'} !== null) {
            $object->setTotalAmountInBaseCurrency($data->{'totalAmountInBaseCurrency'});
        }
        elseif (property_exists($data, 'totalAmountInBaseCurrency') && $data->{'totalAmountInBaseCurrency'} === null) {
            $object->setTotalAmountInBaseCurrency(null);
        }
        if (property_exists($data, 'totalVatInBaseCurrency') && $data->{'totalVatInBaseCurrency'} !== null) {
            $object->setTotalVatInBaseCurrency($data->{'totalVatInBaseCurrency'});
        }
        elseif (property_exists($data, 'totalVatInBaseCurrency') && $data->{'totalVatInBaseCurrency'} === null) {
            $object->setTotalVatInBaseCurrency(null);
        }
        if (property_exists($data, 'amountToPayInBaseCurrency') && $data->{'amountToPayInBaseCurrency'} !== null) {
            $object->setAmountToPayInBaseCurrency($data->{'amountToPayInBaseCurrency'});
        }
        elseif (property_exists($data, 'amountToPayInBaseCurrency') && $data->{'amountToPayInBaseCurrency'} === null) {
            $object->setAmountToPayInBaseCurrency(null);
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        elseif (property_exists($data, 'createdAt') && $data->{'createdAt'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'customerId') && $data->{'customerId'} !== null) {
            $object->setCustomerId($data->{'customerId'});
        }
        elseif (property_exists($data, 'customerId') && $data->{'customerId'} === null) {
            $object->setCustomerId(null);
        }
        if (property_exists($data, 'statusId') && $data->{'statusId'} !== null) {
            $object->setStatusId($data->{'statusId'});
        }
        elseif (property_exists($data, 'statusId') && $data->{'statusId'} === null) {
            $object->setStatusId(null);
        }
        if (property_exists($data, 'onOrderStatusChangeSendEmail') && $data->{'onOrderStatusChangeSendEmail'} !== null) {
            $object->setOnOrderStatusChangeSendEmail($data->{'onOrderStatusChangeSendEmail'});
        }
        elseif (property_exists($data, 'onOrderStatusChangeSendEmail') && $data->{'onOrderStatusChangeSendEmail'} === null) {
            $object->setOnOrderStatusChangeSendEmail(null);
        }
        if (property_exists($data, 'onOrderStatusChangeProcessPayment') && $data->{'onOrderStatusChangeProcessPayment'} !== null) {
            $object->setOnOrderStatusChangeProcessPayment($data->{'onOrderStatusChangeProcessPayment'});
        }
        elseif (property_exists($data, 'onOrderStatusChangeProcessPayment') && $data->{'onOrderStatusChangeProcessPayment'} === null) {
            $object->setOnOrderStatusChangeProcessPayment(null);
        }
        if (property_exists($data, 'shippingMethodId') && $data->{'shippingMethodId'} !== null) {
            $object->setShippingMethodId($data->{'shippingMethodId'});
        }
        elseif (property_exists($data, 'shippingMethodId') && $data->{'shippingMethodId'} === null) {
            $object->setShippingMethodId(null);
        }
        if (property_exists($data, 'paymentMethodId') && $data->{'paymentMethodId'} !== null) {
            $object->setPaymentMethodId($data->{'paymentMethodId'});
        }
        elseif (property_exists($data, 'paymentMethodId') && $data->{'paymentMethodId'} === null) {
            $object->setPaymentMethodId(null);
        }
        if (property_exists($data, 'paymentMethodIdCode') && $data->{'paymentMethodIdCode'} !== null) {
            $object->setPaymentMethodIdCode($data->{'paymentMethodIdCode'});
        }
        elseif (property_exists($data, 'paymentMethodIdCode') && $data->{'paymentMethodIdCode'} === null) {
            $object->setPaymentMethodIdCode(null);
        }
        if (property_exists($data, 'paymentMethodName') && $data->{'paymentMethodName'} !== null) {
            $object->setPaymentMethodName($data->{'paymentMethodName'});
        }
        elseif (property_exists($data, 'paymentMethodName') && $data->{'paymentMethodName'} === null) {
            $object->setPaymentMethodName(null);
        }
        if (property_exists($data, 'paymentFee') && $data->{'paymentFee'} !== null) {
            $object->setPaymentFee($data->{'paymentFee'});
        }
        elseif (property_exists($data, 'paymentFee') && $data->{'paymentFee'} === null) {
            $object->setPaymentFee(null);
        }
        if (property_exists($data, 'paymentVatRate') && $data->{'paymentVatRate'} !== null) {
            $object->setPaymentVatRate($data->{'paymentVatRate'});
        }
        elseif (property_exists($data, 'paymentVatRate') && $data->{'paymentVatRate'} === null) {
            $object->setPaymentVatRate(null);
        }
        if (property_exists($data, 'shippingMethodName') && $data->{'shippingMethodName'} !== null) {
            $object->setShippingMethodName($data->{'shippingMethodName'});
        }
        elseif (property_exists($data, 'shippingMethodName') && $data->{'shippingMethodName'} === null) {
            $object->setShippingMethodName(null);
        }
        if (property_exists($data, 'shippingCost') && $data->{'shippingCost'} !== null) {
            $object->setShippingCost($data->{'shippingCost'});
        }
        elseif (property_exists($data, 'shippingCost') && $data->{'shippingCost'} === null) {
            $object->setShippingCost(null);
        }
        if (property_exists($data, 'shippingVatRate') && $data->{'shippingVatRate'} !== null) {
            $object->setShippingVatRate($data->{'shippingVatRate'});
        }
        elseif (property_exists($data, 'shippingVatRate') && $data->{'shippingVatRate'} === null) {
            $object->setShippingVatRate(null);
        }
        if (property_exists($data, 'totalWeight') && $data->{'totalWeight'} !== null) {
            $object->setTotalWeight($data->{'totalWeight'});
        }
        elseif (property_exists($data, 'totalWeight') && $data->{'totalWeight'} === null) {
            $object->setTotalWeight(null);
        }
        if (property_exists($data, 'customInfo1') && $data->{'customInfo1'} !== null) {
            $object->setCustomInfo1($data->{'customInfo1'});
        }
        elseif (property_exists($data, 'customInfo1') && $data->{'customInfo1'} === null) {
            $object->setCustomInfo1(null);
        }
        if (property_exists($data, 'customInfo2') && $data->{'customInfo2'} !== null) {
            $object->setCustomInfo2($data->{'customInfo2'});
        }
        elseif (property_exists($data, 'customInfo2') && $data->{'customInfo2'} === null) {
            $object->setCustomInfo2(null);
        }
        if (property_exists($data, 'customInfo3') && $data->{'customInfo3'} !== null) {
            $object->setCustomInfo3($data->{'customInfo3'});
        }
        elseif (property_exists($data, 'customInfo3') && $data->{'customInfo3'} === null) {
            $object->setCustomInfo3(null);
        }
        if (property_exists($data, 'customInfo4') && $data->{'customInfo4'} !== null) {
            $object->setCustomInfo4($data->{'customInfo4'});
        }
        elseif (property_exists($data, 'customInfo4') && $data->{'customInfo4'} === null) {
            $object->setCustomInfo4(null);
        }
        if (property_exists($data, 'discountCode') && $data->{'discountCode'} !== null) {
            $object->setDiscountCode($data->{'discountCode'});
        }
        elseif (property_exists($data, 'discountCode') && $data->{'discountCode'} === null) {
            $object->setDiscountCode(null);
        }
        if (property_exists($data, 'amountPaid') && $data->{'amountPaid'} !== null) {
            $object->setAmountPaid($data->{'amountPaid'});
        }
        elseif (property_exists($data, 'amountPaid') && $data->{'amountPaid'} === null) {
            $object->setAmountPaid(null);
        }
        if (property_exists($data, 'amountPaidInBaseCurrency') && $data->{'amountPaidInBaseCurrency'} !== null) {
            $object->setAmountPaidInBaseCurrency($data->{'amountPaidInBaseCurrency'});
        }
        elseif (property_exists($data, 'amountPaidInBaseCurrency') && $data->{'amountPaidInBaseCurrency'} === null) {
            $object->setAmountPaidInBaseCurrency(null);
        }
        if (property_exists($data, 'isComplete') && $data->{'isComplete'} !== null) {
            $object->setIsComplete($data->{'isComplete'});
        }
        elseif (property_exists($data, 'isComplete') && $data->{'isComplete'} === null) {
            $object->setIsComplete(null);
        }
        if (property_exists($data, 'currencyCode') && $data->{'currencyCode'} !== null) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        elseif (property_exists($data, 'currencyCode') && $data->{'currencyCode'} === null) {
            $object->setCurrencyCode(null);
        }
        if (property_exists($data, 'currencyExchangeRate') && $data->{'currencyExchangeRate'} !== null) {
            $object->setCurrencyExchangeRate($data->{'currencyExchangeRate'});
        }
        elseif (property_exists($data, 'currencyExchangeRate') && $data->{'currencyExchangeRate'} === null) {
            $object->setCurrencyExchangeRate(null);
        }
        if (property_exists($data, 'currencyPrecision') && $data->{'currencyPrecision'} !== null) {
            $object->setCurrencyPrecision($data->{'currencyPrecision'});
        }
        elseif (property_exists($data, 'currencyPrecision') && $data->{'currencyPrecision'} === null) {
            $object->setCurrencyPrecision(null);
        }
        if (property_exists($data, 'langCode') && $data->{'langCode'} !== null) {
            $object->setLangCode($data->{'langCode'});
        }
        elseif (property_exists($data, 'langCode') && $data->{'langCode'} === null) {
            $object->setLangCode(null);
        }
        if (property_exists($data, 'paymentReference') && $data->{'paymentReference'} !== null) {
            $object->setPaymentReference($data->{'paymentReference'});
        }
        elseif (property_exists($data, 'paymentReference') && $data->{'paymentReference'} === null) {
            $object->setPaymentReference(null);
        }
        if (property_exists($data, 'paymentStatus') && $data->{'paymentStatus'} !== null) {
            $object->setPaymentStatus($data->{'paymentStatus'});
        }
        elseif (property_exists($data, 'paymentStatus') && $data->{'paymentStatus'} === null) {
            $object->setPaymentStatus(null);
        }
        if (property_exists($data, 'isRead') && $data->{'isRead'} !== null) {
            $object->setIsRead($data->{'isRead'});
        }
        elseif (property_exists($data, 'isRead') && $data->{'isRead'} === null) {
            $object->setIsRead(null);
        }
        if (property_exists($data, 'hasComment') && $data->{'hasComment'} !== null) {
            $object->setHasComment($data->{'hasComment'});
        }
        elseif (property_exists($data, 'hasComment') && $data->{'hasComment'} === null) {
            $object->setHasComment(null);
        }
        if (property_exists($data, 'internalComment') && $data->{'internalComment'} !== null) {
            $object->setInternalComment($data->{'internalComment'});
        }
        elseif (property_exists($data, 'internalComment') && $data->{'internalComment'} === null) {
            $object->setInternalComment(null);
        }
        if (property_exists($data, 'shippingTrackerType') && $data->{'shippingTrackerType'} !== null) {
            $object->setShippingTrackerType($data->{'shippingTrackerType'});
        }
        elseif (property_exists($data, 'shippingTrackerType') && $data->{'shippingTrackerType'} === null) {
            $object->setShippingTrackerType(null);
        }
        if (property_exists($data, 'shippingTrackingNo') && $data->{'shippingTrackingNo'} !== null) {
            $object->setShippingTrackingNo($data->{'shippingTrackingNo'});
        }
        elseif (property_exists($data, 'shippingTrackingNo') && $data->{'shippingTrackingNo'} === null) {
            $object->setShippingTrackingNo(null);
        }
        if (property_exists($data, 'originalCustomerEmail') && $data->{'originalCustomerEmail'} !== null) {
            $object->setOriginalCustomerEmail($data->{'originalCustomerEmail'});
        }
        elseif (property_exists($data, 'originalCustomerEmail') && $data->{'originalCustomerEmail'} === null) {
            $object->setOriginalCustomerEmail(null);
        }
        if (property_exists($data, 'originalCustomerNationalIdNo') && $data->{'originalCustomerNationalIdNo'} !== null) {
            $object->setOriginalCustomerNationalIdNo($data->{'originalCustomerNationalIdNo'});
        }
        elseif (property_exists($data, 'originalCustomerNationalIdNo') && $data->{'originalCustomerNationalIdNo'} === null) {
            $object->setOriginalCustomerNationalIdNo(null);
        }
        if (property_exists($data, 'originalCustomerVatNo') && $data->{'originalCustomerVatNo'} !== null) {
            $object->setOriginalCustomerVatNo($data->{'originalCustomerVatNo'});
        }
        elseif (property_exists($data, 'originalCustomerVatNo') && $data->{'originalCustomerVatNo'} === null) {
            $object->setOriginalCustomerVatNo(null);
        }
        if (property_exists($data, 'originalCustomerCustomInfo1') && $data->{'originalCustomerCustomInfo1'} !== null) {
            $object->setOriginalCustomerCustomInfo1($data->{'originalCustomerCustomInfo1'});
        }
        elseif (property_exists($data, 'originalCustomerCustomInfo1') && $data->{'originalCustomerCustomInfo1'} === null) {
            $object->setOriginalCustomerCustomInfo1(null);
        }
        if (property_exists($data, 'originalCustomerCustomInfo2') && $data->{'originalCustomerCustomInfo2'} !== null) {
            $object->setOriginalCustomerCustomInfo2($data->{'originalCustomerCustomInfo2'});
        }
        elseif (property_exists($data, 'originalCustomerCustomInfo2') && $data->{'originalCustomerCustomInfo2'} === null) {
            $object->setOriginalCustomerCustomInfo2(null);
        }
        if (property_exists($data, 'items') && $data->{'items'} !== null) {
            $values = array();
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\OrderItemModel', 'json', $context);
            }
            $object->setItems($values);
        }
        elseif (property_exists($data, 'items') && $data->{'items'} === null) {
            $object->setItems(null);
        }
        if (property_exists($data, 'addresses') && $data->{'addresses'} !== null) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Starweb\\Api\\Generated\\Model\\OrderAddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'addresses') && $data->{'addresses'} === null) {
            $object->setAddresses(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        else {
            $data->{'createdAt'} = null;
        }
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        }
        else {
            $data->{'customerId'} = null;
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        else {
            $data->{'statusId'} = null;
        }
        if (null !== $object->getOnOrderStatusChangeSendEmail()) {
            $data->{'onOrderStatusChangeSendEmail'} = $object->getOnOrderStatusChangeSendEmail();
        }
        else {
            $data->{'onOrderStatusChangeSendEmail'} = null;
        }
        if (null !== $object->getOnOrderStatusChangeProcessPayment()) {
            $data->{'onOrderStatusChangeProcessPayment'} = $object->getOnOrderStatusChangeProcessPayment();
        }
        else {
            $data->{'onOrderStatusChangeProcessPayment'} = null;
        }
        if (null !== $object->getShippingMethodId()) {
            $data->{'shippingMethodId'} = $object->getShippingMethodId();
        }
        else {
            $data->{'shippingMethodId'} = null;
        }
        if (null !== $object->getPaymentMethodId()) {
            $data->{'paymentMethodId'} = $object->getPaymentMethodId();
        }
        else {
            $data->{'paymentMethodId'} = null;
        }
        if (null !== $object->getPaymentMethodName()) {
            $data->{'paymentMethodName'} = $object->getPaymentMethodName();
        }
        else {
            $data->{'paymentMethodName'} = null;
        }
        if (null !== $object->getPaymentFee()) {
            $data->{'paymentFee'} = $object->getPaymentFee();
        }
        else {
            $data->{'paymentFee'} = null;
        }
        if (null !== $object->getPaymentVatRate()) {
            $data->{'paymentVatRate'} = $object->getPaymentVatRate();
        }
        else {
            $data->{'paymentVatRate'} = null;
        }
        if (null !== $object->getShippingMethodName()) {
            $data->{'shippingMethodName'} = $object->getShippingMethodName();
        }
        else {
            $data->{'shippingMethodName'} = null;
        }
        if (null !== $object->getShippingCost()) {
            $data->{'shippingCost'} = $object->getShippingCost();
        }
        else {
            $data->{'shippingCost'} = null;
        }
        if (null !== $object->getShippingVatRate()) {
            $data->{'shippingVatRate'} = $object->getShippingVatRate();
        }
        else {
            $data->{'shippingVatRate'} = null;
        }
        if (null !== $object->getCustomInfo1()) {
            $data->{'customInfo1'} = $object->getCustomInfo1();
        }
        else {
            $data->{'customInfo1'} = null;
        }
        if (null !== $object->getCustomInfo2()) {
            $data->{'customInfo2'} = $object->getCustomInfo2();
        }
        else {
            $data->{'customInfo2'} = null;
        }
        if (null !== $object->getCustomInfo3()) {
            $data->{'customInfo3'} = $object->getCustomInfo3();
        }
        else {
            $data->{'customInfo3'} = null;
        }
        if (null !== $object->getCustomInfo4()) {
            $data->{'customInfo4'} = $object->getCustomInfo4();
        }
        else {
            $data->{'customInfo4'} = null;
        }
        if (null !== $object->getDiscountCode()) {
            $data->{'discountCode'} = $object->getDiscountCode();
        }
        else {
            $data->{'discountCode'} = null;
        }
        if (null !== $object->getAmountPaid()) {
            $data->{'amountPaid'} = $object->getAmountPaid();
        }
        else {
            $data->{'amountPaid'} = null;
        }
        if (null !== $object->getIsComplete()) {
            $data->{'isComplete'} = $object->getIsComplete();
        }
        else {
            $data->{'isComplete'} = null;
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        else {
            $data->{'currencyCode'} = null;
        }
        if (null !== $object->getCurrencyExchangeRate()) {
            $data->{'currencyExchangeRate'} = $object->getCurrencyExchangeRate();
        }
        else {
            $data->{'currencyExchangeRate'} = null;
        }
        if (null !== $object->getCurrencyPrecision()) {
            $data->{'currencyPrecision'} = $object->getCurrencyPrecision();
        }
        else {
            $data->{'currencyPrecision'} = null;
        }
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        else {
            $data->{'langCode'} = null;
        }
        if (null !== $object->getPaymentReference()) {
            $data->{'paymentReference'} = $object->getPaymentReference();
        }
        else {
            $data->{'paymentReference'} = null;
        }
        if (null !== $object->getPaymentStatus()) {
            $data->{'paymentStatus'} = $object->getPaymentStatus();
        }
        else {
            $data->{'paymentStatus'} = null;
        }
        if (null !== $object->getIsRead()) {
            $data->{'isRead'} = $object->getIsRead();
        }
        else {
            $data->{'isRead'} = null;
        }
        if (null !== $object->getInternalComment()) {
            $data->{'internalComment'} = $object->getInternalComment();
        }
        else {
            $data->{'internalComment'} = null;
        }
        if (null !== $object->getShippingTrackerType()) {
            $data->{'shippingTrackerType'} = $object->getShippingTrackerType();
        }
        else {
            $data->{'shippingTrackerType'} = null;
        }
        if (null !== $object->getShippingTrackingNo()) {
            $data->{'shippingTrackingNo'} = $object->getShippingTrackingNo();
        }
        else {
            $data->{'shippingTrackingNo'} = null;
        }
        if (null !== $object->getOriginalCustomerEmail()) {
            $data->{'originalCustomerEmail'} = $object->getOriginalCustomerEmail();
        }
        else {
            $data->{'originalCustomerEmail'} = null;
        }
        if (null !== $object->getOriginalCustomerNationalIdNo()) {
            $data->{'originalCustomerNationalIdNo'} = $object->getOriginalCustomerNationalIdNo();
        }
        else {
            $data->{'originalCustomerNationalIdNo'} = null;
        }
        if (null !== $object->getOriginalCustomerVatNo()) {
            $data->{'originalCustomerVatNo'} = $object->getOriginalCustomerVatNo();
        }
        else {
            $data->{'originalCustomerVatNo'} = null;
        }
        if (null !== $object->getOriginalCustomerCustomInfo1()) {
            $data->{'originalCustomerCustomInfo1'} = $object->getOriginalCustomerCustomInfo1();
        }
        else {
            $data->{'originalCustomerCustomInfo1'} = null;
        }
        if (null !== $object->getOriginalCustomerCustomInfo2()) {
            $data->{'originalCustomerCustomInfo2'} = $object->getOriginalCustomerCustomInfo2();
        }
        else {
            $data->{'originalCustomerCustomInfo2'} = null;
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        else {
            $data->{'items'} = null;
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        else {
            $data->{'addresses'} = null;
        }
        return $data;
    }
}