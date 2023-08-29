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
class OrderPutModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderPutModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderPutModel';
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
        $object = new \Starweb\Api\Generated\Model\OrderPutModel();
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
        if (\array_key_exists('orderId', $data)) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        }
        if (\array_key_exists('modifiedAt', $data)) {
            $object->setModifiedAt($data['modifiedAt']);
            unset($data['modifiedAt']);
        }
        if (\array_key_exists('baseCurrencyCode', $data)) {
            $object->setBaseCurrencyCode($data['baseCurrencyCode']);
            unset($data['baseCurrencyCode']);
        }
        if (\array_key_exists('shopCountryCode', $data)) {
            $object->setShopCountryCode($data['shopCountryCode']);
            unset($data['shopCountryCode']);
        }
        if (\array_key_exists('totalAmount', $data)) {
            $object->setTotalAmount($data['totalAmount']);
            unset($data['totalAmount']);
        }
        if (\array_key_exists('totalVat', $data)) {
            $object->setTotalVat($data['totalVat']);
            unset($data['totalVat']);
        }
        if (\array_key_exists('amountToPay', $data)) {
            $object->setAmountToPay($data['amountToPay']);
            unset($data['amountToPay']);
        }
        if (\array_key_exists('totalAmountInBaseCurrency', $data)) {
            $object->setTotalAmountInBaseCurrency($data['totalAmountInBaseCurrency']);
            unset($data['totalAmountInBaseCurrency']);
        }
        if (\array_key_exists('totalVatInBaseCurrency', $data)) {
            $object->setTotalVatInBaseCurrency($data['totalVatInBaseCurrency']);
            unset($data['totalVatInBaseCurrency']);
        }
        if (\array_key_exists('amountToPayInBaseCurrency', $data)) {
            $object->setAmountToPayInBaseCurrency($data['amountToPayInBaseCurrency']);
            unset($data['amountToPayInBaseCurrency']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
            unset($data['statusId']);
        }
        if (\array_key_exists('onOrderStatusChangeSendEmail', $data)) {
            $object->setOnOrderStatusChangeSendEmail($data['onOrderStatusChangeSendEmail']);
            unset($data['onOrderStatusChangeSendEmail']);
        }
        if (\array_key_exists('onOrderStatusChangeProcessPayment', $data)) {
            $object->setOnOrderStatusChangeProcessPayment($data['onOrderStatusChangeProcessPayment']);
            unset($data['onOrderStatusChangeProcessPayment']);
        }
        if (\array_key_exists('shippingMethodId', $data)) {
            $object->setShippingMethodId($data['shippingMethodId']);
            unset($data['shippingMethodId']);
        }
        if (\array_key_exists('paymentMethodId', $data)) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        if (\array_key_exists('paymentMethodIdCode', $data)) {
            $object->setPaymentMethodIdCode($data['paymentMethodIdCode']);
            unset($data['paymentMethodIdCode']);
        }
        if (\array_key_exists('paymentMethodName', $data)) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        if (\array_key_exists('paymentFee', $data)) {
            $object->setPaymentFee($data['paymentFee']);
            unset($data['paymentFee']);
        }
        if (\array_key_exists('paymentVatRate', $data)) {
            $object->setPaymentVatRate($data['paymentVatRate']);
            unset($data['paymentVatRate']);
        }
        if (\array_key_exists('shippingMethodName', $data)) {
            $object->setShippingMethodName($data['shippingMethodName']);
            unset($data['shippingMethodName']);
        }
        if (\array_key_exists('shippingCost', $data)) {
            $object->setShippingCost($data['shippingCost']);
            unset($data['shippingCost']);
        }
        if (\array_key_exists('shippingVatRate', $data)) {
            $object->setShippingVatRate($data['shippingVatRate']);
            unset($data['shippingVatRate']);
        }
        if (\array_key_exists('totalWeight', $data)) {
            $object->setTotalWeight($data['totalWeight']);
            unset($data['totalWeight']);
        }
        if (\array_key_exists('customInfo1', $data)) {
            $object->setCustomInfo1($data['customInfo1']);
            unset($data['customInfo1']);
        }
        if (\array_key_exists('customInfo2', $data)) {
            $object->setCustomInfo2($data['customInfo2']);
            unset($data['customInfo2']);
        }
        if (\array_key_exists('customInfo3', $data)) {
            $object->setCustomInfo3($data['customInfo3']);
            unset($data['customInfo3']);
        }
        if (\array_key_exists('customInfo4', $data)) {
            $object->setCustomInfo4($data['customInfo4']);
            unset($data['customInfo4']);
        }
        if (\array_key_exists('discountCode', $data)) {
            $object->setDiscountCode($data['discountCode']);
            unset($data['discountCode']);
        }
        if (\array_key_exists('amountPaid', $data)) {
            $object->setAmountPaid($data['amountPaid']);
            unset($data['amountPaid']);
        }
        if (\array_key_exists('amountPaidInBaseCurrency', $data)) {
            $object->setAmountPaidInBaseCurrency($data['amountPaidInBaseCurrency']);
            unset($data['amountPaidInBaseCurrency']);
        }
        if (\array_key_exists('isComplete', $data)) {
            $object->setIsComplete($data['isComplete']);
            unset($data['isComplete']);
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->setCurrencyCode($data['currencyCode']);
            unset($data['currencyCode']);
        }
        if (\array_key_exists('currencyExchangeRate', $data)) {
            $object->setCurrencyExchangeRate($data['currencyExchangeRate']);
            unset($data['currencyExchangeRate']);
        }
        if (\array_key_exists('currencyPrecision', $data)) {
            $object->setCurrencyPrecision($data['currencyPrecision']);
            unset($data['currencyPrecision']);
        }
        if (\array_key_exists('langCode', $data)) {
            $object->setLangCode($data['langCode']);
            unset($data['langCode']);
        }
        if (\array_key_exists('paymentReference', $data)) {
            $object->setPaymentReference($data['paymentReference']);
            unset($data['paymentReference']);
        }
        if (\array_key_exists('paymentStatus', $data)) {
            $object->setPaymentStatus($data['paymentStatus']);
            unset($data['paymentStatus']);
        }
        if (\array_key_exists('isRead', $data)) {
            $object->setIsRead($data['isRead']);
            unset($data['isRead']);
        }
        if (\array_key_exists('hasComment', $data)) {
            $object->setHasComment($data['hasComment']);
            unset($data['hasComment']);
        }
        if (\array_key_exists('internalComment', $data)) {
            $object->setInternalComment($data['internalComment']);
            unset($data['internalComment']);
        }
        if (\array_key_exists('shippingTrackerType', $data)) {
            $object->setShippingTrackerType($data['shippingTrackerType']);
            unset($data['shippingTrackerType']);
        }
        if (\array_key_exists('shippingTrackingNo', $data)) {
            $object->setShippingTrackingNo($data['shippingTrackingNo']);
            unset($data['shippingTrackingNo']);
        }
        if (\array_key_exists('originalCustomerEmail', $data)) {
            $object->setOriginalCustomerEmail($data['originalCustomerEmail']);
            unset($data['originalCustomerEmail']);
        }
        if (\array_key_exists('originalCustomerNationalIdNo', $data)) {
            $object->setOriginalCustomerNationalIdNo($data['originalCustomerNationalIdNo']);
            unset($data['originalCustomerNationalIdNo']);
        }
        if (\array_key_exists('originalCustomerVatNo', $data)) {
            $object->setOriginalCustomerVatNo($data['originalCustomerVatNo']);
            unset($data['originalCustomerVatNo']);
        }
        if (\array_key_exists('originalCustomerCustomInfo1', $data)) {
            $object->setOriginalCustomerCustomInfo1($data['originalCustomerCustomInfo1']);
            unset($data['originalCustomerCustomInfo1']);
        }
        if (\array_key_exists('originalCustomerCustomInfo2', $data)) {
            $object->setOriginalCustomerCustomInfo2($data['originalCustomerCustomInfo2']);
            unset($data['originalCustomerCustomInfo2']);
        }
        if (\array_key_exists('items', $data)) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\OrderItemModel', 'json', $context);
            }
            $object->setItems($values);
            unset($data['items']);
        }
        if (\array_key_exists('addresses', $data)) {
            $object->setAddresses($this->denormalizer->denormalize($data['addresses'], 'Starweb\\Api\\Generated\\Model\\OrderAddressModel', 'json', $context));
            unset($data['addresses']);
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
        $data['statusId'] = $object->getStatusId();
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
        return array('Starweb\\Api\\Generated\\Model\\OrderPutModel' => false);
    }
}