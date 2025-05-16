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

class ProductionOrderWorkItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem;
        if (\array_key_exists('book', $data) && \is_int($data['book'])) {
            $data['book'] = (bool) $data['book'];
        }
        if (\array_key_exists('manualItem', $data) && \is_int($data['manualItem'])) {
            $data['manualItem'] = (bool) $data['manualItem'];
        }
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
        if (\array_key_exists('book', $data)) {
            $object->setBook($data['book']);
            unset($data['book']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('manualItem', $data)) {
            $object->setManualItem($data['manualItem']);
            unset($data['manualItem']);
        }
        if (\array_key_exists('positionNumber', $data)) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        if (\array_key_exists('shortDescription', $data)) {
            $object->setShortDescription($data['shortDescription']);
            unset($data['shortDescription']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('targetEndDate', $data)) {
            $object->setTargetEndDate($data['targetEndDate']);
            unset($data['targetEndDate']);
        }
        if (\array_key_exists('targetOrderTime', $data)) {
            $object->setTargetOrderTime($data['targetOrderTime']);
            unset($data['targetOrderTime']);
        }
        if (\array_key_exists('targetStartDate', $data)) {
            $object->setTargetStartDate($data['targetStartDate']);
            unset($data['targetStartDate']);
        }
        if (\array_key_exists('timeType', $data)) {
            $object->setTimeType($data['timeType']);
            unset($data['timeType']);
        }
        if (\array_key_exists('unitTime', $data)) {
            $object->setUnitTime($data['unitTime']);
            unset($data['unitTime']);
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
        if ($data->isInitialized('book') && $data->getBook() !== null) {
            $dataArray['book'] = $data->getBook();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('manualItem') && $data->getManualItem() !== null) {
            $dataArray['manualItem'] = $data->getManualItem();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('shortDescription') && $data->getShortDescription() !== null) {
            $dataArray['shortDescription'] = $data->getShortDescription();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('targetEndDate') && $data->getTargetEndDate() !== null) {
            $dataArray['targetEndDate'] = $data->getTargetEndDate();
        }
        if ($data->isInitialized('targetOrderTime') && $data->getTargetOrderTime() !== null) {
            $dataArray['targetOrderTime'] = $data->getTargetOrderTime();
        }
        if ($data->isInitialized('targetStartDate') && $data->getTargetStartDate() !== null) {
            $dataArray['targetStartDate'] = $data->getTargetStartDate();
        }
        if ($data->isInitialized('timeType') && $data->getTimeType() !== null) {
            $dataArray['timeType'] = $data->getTimeType();
        }
        if ($data->isInitialized('unitTime') && $data->getUnitTime() !== null) {
            $dataArray['unitTime'] = $data->getUnitTime();
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
        return [\Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class => false];
    }
}
