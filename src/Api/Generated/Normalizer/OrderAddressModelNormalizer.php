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
class OrderAddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderAddressModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderAddressModel';
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
        $object = new \Starweb\Api\Generated\Model\OrderAddressModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('originalInvoice', $data) && $data['originalInvoice'] !== null) {
            $object->setOriginalInvoice($this->denormalizer->denormalize($data['originalInvoice'], 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
            unset($data['originalInvoice']);
        }
        elseif (\array_key_exists('originalInvoice', $data) && $data['originalInvoice'] === null) {
            $object->setOriginalInvoice(null);
        }
        if (\array_key_exists('originalDelivery', $data) && $data['originalDelivery'] !== null) {
            $object->setOriginalDelivery($this->denormalizer->denormalize($data['originalDelivery'], 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
            unset($data['originalDelivery']);
        }
        elseif (\array_key_exists('originalDelivery', $data) && $data['originalDelivery'] === null) {
            $object->setOriginalDelivery(null);
        }
        if (\array_key_exists('customerInvoice', $data) && $data['customerInvoice'] !== null) {
            $object->setCustomerInvoice($this->denormalizer->denormalize($data['customerInvoice'], 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
            unset($data['customerInvoice']);
        }
        elseif (\array_key_exists('customerInvoice', $data) && $data['customerInvoice'] === null) {
            $object->setCustomerInvoice(null);
        }
        if (\array_key_exists('customerDelivery', $data) && $data['customerDelivery'] !== null) {
            $object->setCustomerDelivery($this->denormalizer->denormalize($data['customerDelivery'], 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
            unset($data['customerDelivery']);
        }
        elseif (\array_key_exists('customerDelivery', $data) && $data['customerDelivery'] === null) {
            $object->setCustomerDelivery(null);
        }
        if (\array_key_exists('paymentMethodInvoice', $data) && $data['paymentMethodInvoice'] !== null) {
            $object->setPaymentMethodInvoice($this->denormalizer->denormalize($data['paymentMethodInvoice'], 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
            unset($data['paymentMethodInvoice']);
        }
        elseif (\array_key_exists('paymentMethodInvoice', $data) && $data['paymentMethodInvoice'] === null) {
            $object->setPaymentMethodInvoice(null);
        }
        if (\array_key_exists('paymentMethodDelivery', $data) && $data['paymentMethodDelivery'] !== null) {
            $object->setPaymentMethodDelivery($this->denormalizer->denormalize($data['paymentMethodDelivery'], 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
            unset($data['paymentMethodDelivery']);
        }
        elseif (\array_key_exists('paymentMethodDelivery', $data) && $data['paymentMethodDelivery'] === null) {
            $object->setPaymentMethodDelivery(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('originalInvoice') && null !== $object->getOriginalInvoice()) {
            $data['originalInvoice'] = $this->normalizer->normalize($object->getOriginalInvoice(), 'json', $context);
        }
        if ($object->isInitialized('originalDelivery') && null !== $object->getOriginalDelivery()) {
            $data['originalDelivery'] = $this->normalizer->normalize($object->getOriginalDelivery(), 'json', $context);
        }
        if ($object->isInitialized('customerInvoice') && null !== $object->getCustomerInvoice()) {
            $data['customerInvoice'] = $this->normalizer->normalize($object->getCustomerInvoice(), 'json', $context);
        }
        if ($object->isInitialized('customerDelivery') && null !== $object->getCustomerDelivery()) {
            $data['customerDelivery'] = $this->normalizer->normalize($object->getCustomerDelivery(), 'json', $context);
        }
        if ($object->isInitialized('paymentMethodInvoice') && null !== $object->getPaymentMethodInvoice()) {
            $data['paymentMethodInvoice'] = $this->normalizer->normalize($object->getPaymentMethodInvoice(), 'json', $context);
        }
        if ($object->isInitialized('paymentMethodDelivery') && null !== $object->getPaymentMethodDelivery()) {
            $data['paymentMethodDelivery'] = $this->normalizer->normalize($object->getPaymentMethodDelivery(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\OrderAddressModel' => false);
    }
}