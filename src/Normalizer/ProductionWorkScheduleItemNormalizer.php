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
class ProductionWorkScheduleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem();
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('costCenterId', $data) && $data['costCenterId'] !== null) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        elseif (\array_key_exists('costCenterId', $data) && $data['costCenterId'] === null) {
            $object->setCostCenterId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('multipleHumanOperation', $data) && $data['multipleHumanOperation'] !== null) {
            $object->setMultipleHumanOperation($data['multipleHumanOperation']);
            unset($data['multipleHumanOperation']);
        }
        elseif (\array_key_exists('multipleHumanOperation', $data) && $data['multipleHumanOperation'] === null) {
            $object->setMultipleHumanOperation(null);
        }
        if (\array_key_exists('multipleMachineOperation', $data) && $data['multipleMachineOperation'] !== null) {
            $object->setMultipleMachineOperation($data['multipleMachineOperation']);
            unset($data['multipleMachineOperation']);
        }
        elseif (\array_key_exists('multipleMachineOperation', $data) && $data['multipleMachineOperation'] === null) {
            $object->setMultipleMachineOperation(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('productionWorkScheduleId', $data) && $data['productionWorkScheduleId'] !== null) {
            $object->setProductionWorkScheduleId($data['productionWorkScheduleId']);
            unset($data['productionWorkScheduleId']);
        }
        elseif (\array_key_exists('productionWorkScheduleId', $data) && $data['productionWorkScheduleId'] === null) {
            $object->setProductionWorkScheduleId(null);
        }
        if (\array_key_exists('quantityBase', $data) && $data['quantityBase'] !== null) {
            $object->setQuantityBase($data['quantityBase']);
            unset($data['quantityBase']);
        }
        elseif (\array_key_exists('quantityBase', $data) && $data['quantityBase'] === null) {
            $object->setQuantityBase(null);
        }
        if (\array_key_exists('setupTime', $data) && $data['setupTime'] !== null) {
            $object->setSetupTime($data['setupTime']);
            unset($data['setupTime']);
        }
        elseif (\array_key_exists('setupTime', $data) && $data['setupTime'] === null) {
            $object->setSetupTime(null);
        }
        if (\array_key_exists('shortDescription', $data) && $data['shortDescription'] !== null) {
            $object->setShortDescription($data['shortDescription']);
            unset($data['shortDescription']);
        }
        elseif (\array_key_exists('shortDescription', $data) && $data['shortDescription'] === null) {
            $object->setShortDescription(null);
        }
        if (\array_key_exists('timeType', $data) && $data['timeType'] !== null) {
            $object->setTimeType($data['timeType']);
            unset($data['timeType']);
        }
        elseif (\array_key_exists('timeType', $data) && $data['timeType'] === null) {
            $object->setTimeType(null);
        }
        if (\array_key_exists('timeUnit', $data) && $data['timeUnit'] !== null) {
            $object->setTimeUnit($data['timeUnit']);
            unset($data['timeUnit']);
        }
        elseif (\array_key_exists('timeUnit', $data) && $data['timeUnit'] === null) {
            $object->setTimeUnit(null);
        }
        if (\array_key_exists('unitTime', $data) && $data['unitTime'] !== null) {
            $object->setUnitTime($data['unitTime']);
            unset($data['unitTime']);
        }
        elseif (\array_key_exists('unitTime', $data) && $data['unitTime'] === null) {
            $object->setUnitTime(null);
        }
        if (\array_key_exists('validFrom', $data) && $data['validFrom'] !== null) {
            $object->setValidFrom($data['validFrom']);
            unset($data['validFrom']);
        }
        elseif (\array_key_exists('validFrom', $data) && $data['validFrom'] === null) {
            $object->setValidFrom(null);
        }
        if (\array_key_exists('validTo', $data) && $data['validTo'] !== null) {
            $object->setValidTo($data['validTo']);
            unset($data['validTo']);
        }
        elseif (\array_key_exists('validTo', $data) && $data['validTo'] === null) {
            $object->setValidTo(null);
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
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('costCenterId') && null !== $data->getCostCenterId()) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('multipleHumanOperation') && null !== $data->getMultipleHumanOperation()) {
            $dataArray['multipleHumanOperation'] = $data->getMultipleHumanOperation();
        }
        if ($data->isInitialized('multipleMachineOperation') && null !== $data->getMultipleMachineOperation()) {
            $dataArray['multipleMachineOperation'] = $data->getMultipleMachineOperation();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('quantityBase') && null !== $data->getQuantityBase()) {
            $dataArray['quantityBase'] = $data->getQuantityBase();
        }
        if ($data->isInitialized('setupTime') && null !== $data->getSetupTime()) {
            $dataArray['setupTime'] = $data->getSetupTime();
        }
        if ($data->isInitialized('shortDescription') && null !== $data->getShortDescription()) {
            $dataArray['shortDescription'] = $data->getShortDescription();
        }
        if ($data->isInitialized('timeType') && null !== $data->getTimeType()) {
            $dataArray['timeType'] = $data->getTimeType();
        }
        if ($data->isInitialized('timeUnit') && null !== $data->getTimeUnit()) {
            $dataArray['timeUnit'] = $data->getTimeUnit();
        }
        if ($data->isInitialized('unitTime') && null !== $data->getUnitTime()) {
            $dataArray['unitTime'] = $data->getUnitTime();
        }
        if ($data->isInitialized('validFrom') && null !== $data->getValidFrom()) {
            $dataArray['validFrom'] = $data->getValidFrom();
        }
        if ($data->isInitialized('validTo') && null !== $data->getValidTo()) {
            $dataArray['validTo'] = $data->getValidTo();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem::class => false];
    }
}