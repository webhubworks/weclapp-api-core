<?php

namespace Webhubworks\WeclappApiCore\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\CheckArray;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\ValidatorTrait;

class ArticleSupplySourceGetResponse200AdditionalPropertiesNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('currentPurchasePrice', $data) && $data['currentPurchasePrice'] !== null) {
            $values = [];
            foreach ($data['currentPurchasePrice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PriceData::class, 'json', $context);
            }
            $object->setCurrentPurchasePrice($values);
            unset($data['currentPurchasePrice']);
        } elseif (\array_key_exists('currentPurchasePrice', $data) && $data['currentPurchasePrice'] === null) {
            $object->setCurrentPurchasePrice(null);
        }
        if (\array_key_exists('currentPurchasePriceInCompanyCurrency', $data) && $data['currentPurchasePriceInCompanyCurrency'] !== null) {
            $values_1 = [];
            foreach ($data['currentPurchasePriceInCompanyCurrency'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setCurrentPurchasePriceInCompanyCurrency($values_1);
            unset($data['currentPurchasePriceInCompanyCurrency']);
        } elseif (\array_key_exists('currentPurchasePriceInCompanyCurrency', $data) && $data['currentPurchasePriceInCompanyCurrency'] === null) {
            $object->setCurrentPurchasePriceInCompanyCurrency(null);
        }
        if (\array_key_exists('lastPurchaseOrderDate', $data) && $data['lastPurchaseOrderDate'] !== null) {
            $values_2 = [];
            foreach ($data['lastPurchaseOrderDate'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLastPurchaseOrderDate($values_2);
            unset($data['lastPurchaseOrderDate']);
        } elseif (\array_key_exists('lastPurchaseOrderDate', $data) && $data['lastPurchaseOrderDate'] === null) {
            $object->setLastPurchaseOrderDate(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('currentPurchasePrice') && $data->getCurrentPurchasePrice() !== null) {
            $values = [];
            foreach ($data->getCurrentPurchasePrice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['currentPurchasePrice'] = $values;
        }
        if ($data->isInitialized('currentPurchasePriceInCompanyCurrency') && $data->getCurrentPurchasePriceInCompanyCurrency() !== null) {
            $values_1 = [];
            foreach ($data->getCurrentPurchasePriceInCompanyCurrency() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['currentPurchasePriceInCompanyCurrency'] = $values_1;
        }
        if ($data->isInitialized('lastPurchaseOrderDate') && $data->getLastPurchaseOrderDate() !== null) {
            $values_2 = [];
            foreach ($data->getLastPurchaseOrderDate() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['lastPurchaseOrderDate'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => false];
    }
}
