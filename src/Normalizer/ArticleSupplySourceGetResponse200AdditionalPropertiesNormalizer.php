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
class ArticleSupplySourceGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currentPurchasePrice', $data)) {
            $values = [];
            foreach ($data['currentPurchasePrice'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PriceData::class, 'json', $context);
            }
            $object->setCurrentPurchasePrice($values);
            unset($data['currentPurchasePrice']);
        }
        if (\array_key_exists('currentPurchasePriceInCompanyCurrency', $data)) {
            $values_1 = [];
            foreach ($data['currentPurchasePriceInCompanyCurrency'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setCurrentPurchasePriceInCompanyCurrency($values_1);
            unset($data['currentPurchasePriceInCompanyCurrency']);
        }
        if (\array_key_exists('lastPurchaseOrderDate', $data)) {
            $values_2 = [];
            foreach ($data['lastPurchaseOrderDate'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLastPurchaseOrderDate($values_2);
            unset($data['lastPurchaseOrderDate']);
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
        if ($data->isInitialized('currentPurchasePrice') && null !== $data->getCurrentPurchasePrice()) {
            $values = [];
            foreach ($data->getCurrentPurchasePrice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['currentPurchasePrice'] = $values;
        }
        if ($data->isInitialized('currentPurchasePriceInCompanyCurrency') && null !== $data->getCurrentPurchasePriceInCompanyCurrency()) {
            $values_1 = [];
            foreach ($data->getCurrentPurchasePriceInCompanyCurrency() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['currentPurchasePriceInCompanyCurrency'] = $values_1;
        }
        if ($data->isInitialized('lastPurchaseOrderDate') && null !== $data->getLastPurchaseOrderDate()) {
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