<?php

namespace Weclapp\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Weclapp\Generated\Runtime\Normalizer\CheckArray;
use Weclapp\Generated\Runtime\Normalizer\ValidatorTrait;

class PriceCalculationParameterV1Normalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Weclapp\Generated\Model\PriceCalculationParameterV1;
        if ($data === null || \is_array($data) === false) {
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('fixSurcharge') && $data->getFixSurcharge() !== null) {
            $dataArray['fixSurcharge'] = $data->getFixSurcharge();
        }
        if ($data->isInitialized('fromScale') && $data->getFromScale() !== null) {
            $dataArray['fromScale'] = $data->getFromScale();
        }
        if ($data->isInitialized('lowerPurchasePriceBound') && $data->getLowerPurchasePriceBound() !== null) {
            $dataArray['lowerPurchasePriceBound'] = $data->getLowerPurchasePriceBound();
        }
        if ($data->isInitialized('margin') && $data->getMargin() !== null) {
            $dataArray['margin'] = $data->getMargin();
        }
        if ($data->isInitialized('percentSurcharge') && $data->getPercentSurcharge() !== null) {
            $dataArray['percentSurcharge'] = $data->getPercentSurcharge();
        }
        if ($data->isInitialized('profit') && $data->getProfit() !== null) {
            $dataArray['profit'] = $data->getProfit();
        }
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
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
