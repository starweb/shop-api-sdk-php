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
class BundledProductsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\BundledProductsModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\BundledProductsModel';
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
        $object = new \Starweb\Api\Generated\Model\BundledProductsModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('singleVariant', $data) && $data['singleVariant'] !== null) {
            $object->setSingleVariant($data['singleVariant']);
            unset($data['singleVariant']);
        }
        elseif (\array_key_exists('singleVariant', $data) && $data['singleVariant'] === null) {
            $object->setSingleVariant(null);
        }
        if (\array_key_exists('bundledProductId', $data) && $data['bundledProductId'] !== null) {
            $object->setBundledProductId($data['bundledProductId']);
            unset($data['bundledProductId']);
        }
        elseif (\array_key_exists('bundledProductId', $data) && $data['bundledProductId'] === null) {
            $object->setBundledProductId(null);
        }
        if (\array_key_exists('variantSku', $data) && $data['variantSku'] !== null) {
            $object->setVariantSku($data['variantSku']);
            unset($data['variantSku']);
        }
        elseif (\array_key_exists('variantSku', $data) && $data['variantSku'] === null) {
            $object->setVariantSku(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('sortIndex', $data) && $data['sortIndex'] !== null) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        elseif (\array_key_exists('sortIndex', $data) && $data['sortIndex'] === null) {
            $object->setSortIndex(null);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $values = array();
            foreach ($data['prices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModel', 'json', $context);
            }
            $object->setPrices($values);
            unset($data['prices']);
        }
        elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
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
        if ($object->isInitialized('singleVariant') && null !== $object->getSingleVariant()) {
            $data['singleVariant'] = $object->getSingleVariant();
        }
        $data['bundledProductId'] = $object->getBundledProductId();
        if ($object->isInitialized('variantSku') && null !== $object->getVariantSku()) {
            $data['variantSku'] = $object->getVariantSku();
        }
        if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        if ($object->isInitialized('prices') && null !== $object->getPrices()) {
            $values = array();
            foreach ($object->getPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['prices'] = $values;
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
        return array('Starweb\\Api\\Generated\\Model\\BundledProductsModel' => false);
    }
}