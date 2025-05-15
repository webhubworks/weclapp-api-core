<?php

namespace Weclapp\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Weclapp\Generated\Runtime\Normalizer\CheckArray;
use Weclapp\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ArticleGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Weclapp\Generated\Model\ArticleGetResponse200AdditionalProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Weclapp\Generated\Model\ArticleGetResponse200AdditionalProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Weclapp\Generated\Model\ArticleGetResponse200AdditionalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aggregateStock', $data)) {
            $values = [];
            foreach ($data['aggregateStock'] as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Weclapp\Generated\Model\AggregateStock::class, 'json', $context);
                }
                $values[] = $values_1;
            }
            $object->setAggregateStock($values);
            unset($data['aggregateStock']);
        }
        if (\array_key_exists('averagePrice', $data)) {
            $values_2 = [];
            foreach ($data['averagePrice'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Weclapp\Generated\Model\Amount::class, 'json', $context);
            }
            $object->setAveragePrice($values_2);
            unset($data['averagePrice']);
        }
        if (\array_key_exists('currentSalesPrice', $data)) {
            $values_3 = [];
            foreach ($data['currentSalesPrice'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Weclapp\Generated\Model\PriceData::class, 'json', $context);
            }
            $object->setCurrentSalesPrice($values_3);
            unset($data['currentSalesPrice']);
        }
        if (\array_key_exists('pickableStockQuantity', $data)) {
            $values_4 = [];
            foreach ($data['pickableStockQuantity'] as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Weclapp\Generated\Model\WarehouseQuantity::class, 'json', $context);
                }
                $values_4[] = $values_5;
            }
            $object->setPickableStockQuantity($values_4);
            unset($data['pickableStockQuantity']);
        }
        if (\array_key_exists('reservedStockQuantity', $data)) {
            $values_6 = [];
            foreach ($data['reservedStockQuantity'] as $value_6) {
                $values_7 = [];
                foreach ($value_6 as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \Weclapp\Generated\Model\WarehouseQuantity::class, 'json', $context);
                }
                $values_6[] = $values_7;
            }
            $object->setReservedStockQuantity($values_6);
            unset($data['reservedStockQuantity']);
        }
        if (\array_key_exists('totalStockQuantity', $data)) {
            $values_8 = [];
            foreach ($data['totalStockQuantity'] as $value_8) {
                $values_9 = [];
                foreach ($value_8 as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, \Weclapp\Generated\Model\WarehouseQuantity::class, 'json', $context);
                }
                $values_8[] = $values_9;
            }
            $object->setTotalStockQuantity($values_8);
            unset($data['totalStockQuantity']);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('aggregateStock') && null !== $data->getAggregateStock()) {
            $values = [];
            foreach ($data->getAggregateStock() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[] = $values_1;
            }
            $dataArray['aggregateStock'] = $values;
        }
        if ($data->isInitialized('averagePrice') && null !== $data->getAveragePrice()) {
            $values_2 = [];
            foreach ($data->getAveragePrice() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['averagePrice'] = $values_2;
        }
        if ($data->isInitialized('currentSalesPrice') && null !== $data->getCurrentSalesPrice()) {
            $values_3 = [];
            foreach ($data->getCurrentSalesPrice() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['currentSalesPrice'] = $values_3;
        }
        if ($data->isInitialized('pickableStockQuantity') && null !== $data->getPickableStockQuantity()) {
            $values_4 = [];
            foreach ($data->getPickableStockQuantity() as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $values_4[] = $values_5;
            }
            $dataArray['pickableStockQuantity'] = $values_4;
        }
        if ($data->isInitialized('reservedStockQuantity') && null !== $data->getReservedStockQuantity()) {
            $values_6 = [];
            foreach ($data->getReservedStockQuantity() as $value_6) {
                $values_7 = [];
                foreach ($value_6 as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $values_6[] = $values_7;
            }
            $dataArray['reservedStockQuantity'] = $values_6;
        }
        if ($data->isInitialized('totalStockQuantity') && null !== $data->getTotalStockQuantity()) {
            $values_8 = [];
            foreach ($data->getTotalStockQuantity() as $value_8) {
                $values_9 = [];
                foreach ($value_8 as $value_9) {
                    $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
                }
                $values_8[] = $values_9;
            }
            $dataArray['totalStockQuantity'] = $values_8;
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_10;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Weclapp\Generated\Model\ArticleGetResponse200AdditionalProperties::class => false];
    }
}