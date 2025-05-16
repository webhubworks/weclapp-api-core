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

class ProductionWorkScheduleItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem;
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
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('costCenterId', $data)) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('multipleHumanOperation', $data)) {
            $object->setMultipleHumanOperation($data['multipleHumanOperation']);
            unset($data['multipleHumanOperation']);
        }
        if (\array_key_exists('multipleMachineOperation', $data)) {
            $object->setMultipleMachineOperation($data['multipleMachineOperation']);
            unset($data['multipleMachineOperation']);
        }
        if (\array_key_exists('positionNumber', $data)) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        if (\array_key_exists('productionWorkScheduleId', $data)) {
            $object->setProductionWorkScheduleId($data['productionWorkScheduleId']);
            unset($data['productionWorkScheduleId']);
        }
        if (\array_key_exists('quantityBase', $data)) {
            $object->setQuantityBase($data['quantityBase']);
            unset($data['quantityBase']);
        }
        if (\array_key_exists('setupTime', $data)) {
            $object->setSetupTime($data['setupTime']);
            unset($data['setupTime']);
        }
        if (\array_key_exists('shortDescription', $data)) {
            $object->setShortDescription($data['shortDescription']);
            unset($data['shortDescription']);
        }
        if (\array_key_exists('timeType', $data)) {
            $object->setTimeType($data['timeType']);
            unset($data['timeType']);
        }
        if (\array_key_exists('timeUnit', $data)) {
            $object->setTimeUnit($data['timeUnit']);
            unset($data['timeUnit']);
        }
        if (\array_key_exists('unitTime', $data)) {
            $object->setUnitTime($data['unitTime']);
            unset($data['unitTime']);
        }
        if (\array_key_exists('validFrom', $data)) {
            $object->setValidFrom($data['validFrom']);
            unset($data['validFrom']);
        }
        if (\array_key_exists('validTo', $data)) {
            $object->setValidTo($data['validTo']);
            unset($data['validTo']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('costCenterId') && $data->getCostCenterId() !== null) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('multipleHumanOperation') && $data->getMultipleHumanOperation() !== null) {
            $dataArray['multipleHumanOperation'] = $data->getMultipleHumanOperation();
        }
        if ($data->isInitialized('multipleMachineOperation') && $data->getMultipleMachineOperation() !== null) {
            $dataArray['multipleMachineOperation'] = $data->getMultipleMachineOperation();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('productionWorkScheduleId') && $data->getProductionWorkScheduleId() !== null) {
            $dataArray['productionWorkScheduleId'] = $data->getProductionWorkScheduleId();
        }
        if ($data->isInitialized('quantityBase') && $data->getQuantityBase() !== null) {
            $dataArray['quantityBase'] = $data->getQuantityBase();
        }
        if ($data->isInitialized('setupTime') && $data->getSetupTime() !== null) {
            $dataArray['setupTime'] = $data->getSetupTime();
        }
        if ($data->isInitialized('shortDescription') && $data->getShortDescription() !== null) {
            $dataArray['shortDescription'] = $data->getShortDescription();
        }
        if ($data->isInitialized('timeType') && $data->getTimeType() !== null) {
            $dataArray['timeType'] = $data->getTimeType();
        }
        if ($data->isInitialized('timeUnit') && $data->getTimeUnit() !== null) {
            $dataArray['timeUnit'] = $data->getTimeUnit();
        }
        if ($data->isInitialized('unitTime') && $data->getUnitTime() !== null) {
            $dataArray['unitTime'] = $data->getUnitTime();
        }
        if ($data->isInitialized('validFrom') && $data->getValidFrom() !== null) {
            $dataArray['validFrom'] = $data->getValidFrom();
        }
        if ($data->isInitialized('validTo') && $data->getValidTo() !== null) {
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
