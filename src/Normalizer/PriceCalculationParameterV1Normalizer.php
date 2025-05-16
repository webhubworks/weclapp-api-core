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
class PriceCalculationParameterV1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('fixSurcharge', $data) && $data['fixSurcharge'] !== null) {
            $object->setFixSurcharge($data['fixSurcharge']);
            unset($data['fixSurcharge']);
        }
        elseif (\array_key_exists('fixSurcharge', $data) && $data['fixSurcharge'] === null) {
            $object->setFixSurcharge(null);
        }
        if (\array_key_exists('fromScale', $data) && $data['fromScale'] !== null) {
            $object->setFromScale($data['fromScale']);
            unset($data['fromScale']);
        }
        elseif (\array_key_exists('fromScale', $data) && $data['fromScale'] === null) {
            $object->setFromScale(null);
        }
        if (\array_key_exists('lowerPurchasePriceBound', $data) && $data['lowerPurchasePriceBound'] !== null) {
            $object->setLowerPurchasePriceBound($data['lowerPurchasePriceBound']);
            unset($data['lowerPurchasePriceBound']);
        }
        elseif (\array_key_exists('lowerPurchasePriceBound', $data) && $data['lowerPurchasePriceBound'] === null) {
            $object->setLowerPurchasePriceBound(null);
        }
        if (\array_key_exists('margin', $data) && $data['margin'] !== null) {
            $object->setMargin($data['margin']);
            unset($data['margin']);
        }
        elseif (\array_key_exists('margin', $data) && $data['margin'] === null) {
            $object->setMargin(null);
        }
        if (\array_key_exists('percentSurcharge', $data) && $data['percentSurcharge'] !== null) {
            $object->setPercentSurcharge($data['percentSurcharge']);
            unset($data['percentSurcharge']);
        }
        elseif (\array_key_exists('percentSurcharge', $data) && $data['percentSurcharge'] === null) {
            $object->setPercentSurcharge(null);
        }
        if (\array_key_exists('profit', $data) && $data['profit'] !== null) {
            $object->setProfit($data['profit']);
            unset($data['profit']);
        }
        elseif (\array_key_exists('profit', $data) && $data['profit'] === null) {
            $object->setProfit(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
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
        return [\Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class => false];
    }
}