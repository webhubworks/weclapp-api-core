<?php

namespace Webhubworks\WeclappApiCore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\CheckArray;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class QuotationItemScaleValueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue();
        if (\array_key_exists('fromSalesPrice', $data) && \is_int($data['fromSalesPrice'])) {
            $data['fromSalesPrice'] = (bool) $data['fromSalesPrice'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] !== null) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        }
        elseif (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] === null) {
            $object->setDiscountPercentage(null);
        }
        if (\array_key_exists('fromSalesPrice', $data) && $data['fromSalesPrice'] !== null) {
            $object->setFromSalesPrice($data['fromSalesPrice']);
            unset($data['fromSalesPrice']);
        }
        elseif (\array_key_exists('fromSalesPrice', $data) && $data['fromSalesPrice'] === null) {
            $object->setFromSalesPrice(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('reductionAdditionItems', $data) && $data['reductionAdditionItems'] !== null) {
            $values = [];
            foreach ($data['reductionAdditionItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PriceDataReductionAdditionItem::class, 'json', $context);
            }
            $object->setReductionAdditionItems($values);
            unset($data['reductionAdditionItems']);
        }
        elseif (\array_key_exists('reductionAdditionItems', $data) && $data['reductionAdditionItems'] === null) {
            $object->setReductionAdditionItems(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('discountPercentage') && null !== $data->getDiscountPercentage()) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('fromSalesPrice') && null !== $data->getFromSalesPrice()) {
            $dataArray['fromSalesPrice'] = $data->getFromSalesPrice();
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $data->getPrice();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue::class => false];
    }
}