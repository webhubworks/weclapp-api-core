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
class PriceCalculationParameterV1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Weclapp\Generated\Model\PriceCalculationParameterV1::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Weclapp\Generated\Model\PriceCalculationParameterV1::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Weclapp\Generated\Model\PriceCalculationParameterV1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('fixSurcharge', $data)) {
            $object->setFixSurcharge($data['fixSurcharge']);
            unset($data['fixSurcharge']);
        }
        if (\array_key_exists('fromScale', $data)) {
            $object->setFromScale($data['fromScale']);
            unset($data['fromScale']);
        }
        if (\array_key_exists('lowerPurchasePriceBound', $data)) {
            $object->setLowerPurchasePriceBound($data['lowerPurchasePriceBound']);
            unset($data['lowerPurchasePriceBound']);
        }
        if (\array_key_exists('margin', $data)) {
            $object->setMargin($data['margin']);
            unset($data['margin']);
        }
        if (\array_key_exists('percentSurcharge', $data)) {
            $object->setPercentSurcharge($data['percentSurcharge']);
            unset($data['percentSurcharge']);
        }
        if (\array_key_exists('profit', $data)) {
            $object->setProfit($data['profit']);
            unset($data['profit']);
        }
        if (\array_key_exists('salesChannel', $data)) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('fixSurcharge') && null !== $data->getFixSurcharge()) {
            $dataArray['fixSurcharge'] = $data->getFixSurcharge();
        }
        if ($data->isInitialized('fromScale') && null !== $data->getFromScale()) {
            $dataArray['fromScale'] = $data->getFromScale();
        }
        if ($data->isInitialized('lowerPurchasePriceBound') && null !== $data->getLowerPurchasePriceBound()) {
            $dataArray['lowerPurchasePriceBound'] = $data->getLowerPurchasePriceBound();
        }
        if ($data->isInitialized('margin') && null !== $data->getMargin()) {
            $dataArray['margin'] = $data->getMargin();
        }
        if ($data->isInitialized('percentSurcharge') && null !== $data->getPercentSurcharge()) {
            $dataArray['percentSurcharge'] = $data->getPercentSurcharge();
        }
        if ($data->isInitialized('profit') && null !== $data->getProfit()) {
            $dataArray['profit'] = $data->getProfit();
        }
        if ($data->isInitialized('salesChannel') && null !== $data->getSalesChannel()) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
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
        return [\Weclapp\Generated\Model\PriceCalculationParameterV1::class => false];
    }
}