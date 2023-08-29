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
class ProductVariantPriceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductVariantPriceModel();
        if (\array_key_exists('priceExVat', $data) && \is_int($data['priceExVat'])) {
            $data['priceExVat'] = (double) $data['priceExVat'];
        }
        if (\array_key_exists('specialPriceExVat', $data) && \is_int($data['specialPriceExVat'])) {
            $data['specialPriceExVat'] = (double) $data['specialPriceExVat'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pricelistId', $data) && $data['pricelistId'] !== null) {
            $object->setPricelistId($data['pricelistId']);
            unset($data['pricelistId']);
        }
        elseif (\array_key_exists('pricelistId', $data) && $data['pricelistId'] === null) {
            $object->setPricelistId(null);
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
        if (\array_key_exists('priceExVat', $data) && $data['priceExVat'] !== null) {
            $object->setPriceExVat($data['priceExVat']);
            unset($data['priceExVat']);
        }
        elseif (\array_key_exists('priceExVat', $data) && $data['priceExVat'] === null) {
            $object->setPriceExVat(null);
        }
        if (\array_key_exists('specialPriceExVat', $data) && $data['specialPriceExVat'] !== null) {
            $object->setSpecialPriceExVat($data['specialPriceExVat']);
            unset($data['specialPriceExVat']);
        }
        elseif (\array_key_exists('specialPriceExVat', $data) && $data['specialPriceExVat'] === null) {
            $object->setSpecialPriceExVat(null);
        }
        if (\array_key_exists('volumePrices', $data) && $data['volumePrices'] !== null) {
            $object->setVolumePrices($this->denormalizer->denormalize($data['volumePrices'], 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModelCollection', 'json', $context));
            unset($data['volumePrices']);
        }
        elseif (\array_key_exists('volumePrices', $data) && $data['volumePrices'] === null) {
            $object->setVolumePrices(null);
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
        $data['pricelistId'] = $object->getPricelistId();
        if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if ($object->isInitialized('externalIdType') && null !== $object->getExternalIdType()) {
            $data['externalIdType'] = $object->getExternalIdType();
        }
        if ($object->isInitialized('priceExVat') && null !== $object->getPriceExVat()) {
            $data['priceExVat'] = $object->getPriceExVat();
        }
        if ($object->isInitialized('specialPriceExVat') && null !== $object->getSpecialPriceExVat()) {
            $data['specialPriceExVat'] = $object->getSpecialPriceExVat();
        }
        if ($object->isInitialized('volumePrices') && null !== $object->getVolumePrices()) {
            $data['volumePrices'] = $this->normalizer->normalize($object->getVolumePrices(), 'json', $context);
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
        return array('Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel' => false);
    }
}