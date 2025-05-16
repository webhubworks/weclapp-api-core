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
class InventoryCreatePostBodyInventoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('counter', $data)) {
            $object->setCounter($data['counter']);
            unset($data['counter']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('inventoryGroupId', $data)) {
            $object->setInventoryGroupId($data['inventoryGroupId']);
            unset($data['inventoryGroupId']);
        }
        if (\array_key_exists('inventoryNumber', $data)) {
            $object->setInventoryNumber($data['inventoryNumber']);
            unset($data['inventoryNumber']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('levelOfDetail', $data)) {
            $object->setLevelOfDetail($data['levelOfDetail']);
            unset($data['levelOfDetail']);
        }
        if (\array_key_exists('managerId', $data)) {
            $object->setManagerId($data['managerId']);
            unset($data['managerId']);
        }
        if (\array_key_exists('recorder', $data)) {
            $object->setRecorder($data['recorder']);
            unset($data['recorder']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values = [];
            foreach ($data['statusHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\InventoryStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
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
        if ($data->isInitialized('counter') && null !== $data->getCounter()) {
            $dataArray['counter'] = $data->getCounter();
        }
        if ($data->isInitialized('createdDate') && null !== $data->getCreatedDate()) {
            $dataArray['createdDate'] = $data->getCreatedDate();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('endDate') && null !== $data->getEndDate()) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('inventoryGroupId') && null !== $data->getInventoryGroupId()) {
            $dataArray['inventoryGroupId'] = $data->getInventoryGroupId();
        }
        if ($data->isInitialized('inventoryNumber') && null !== $data->getInventoryNumber()) {
            $dataArray['inventoryNumber'] = $data->getInventoryNumber();
        }
        if ($data->isInitialized('lastModifiedDate') && null !== $data->getLastModifiedDate()) {
            $dataArray['lastModifiedDate'] = $data->getLastModifiedDate();
        }
        if ($data->isInitialized('levelOfDetail') && null !== $data->getLevelOfDetail()) {
            $dataArray['levelOfDetail'] = $data->getLevelOfDetail();
        }
        if ($data->isInitialized('managerId') && null !== $data->getManagerId()) {
            $dataArray['managerId'] = $data->getManagerId();
        }
        if ($data->isInitialized('recorder') && null !== $data->getRecorder()) {
            $dataArray['recorder'] = $data->getRecorder();
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && null !== $data->getStatusHistory()) {
            $values = [];
            foreach ($data->getStatusHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['statusHistory'] = $values;
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
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
        return [\Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory::class => false];
    }
}