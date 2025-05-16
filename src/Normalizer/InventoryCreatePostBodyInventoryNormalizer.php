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

class InventoryCreatePostBodyInventoryNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('counter', $data) && $data['counter'] !== null) {
            $object->setCounter($data['counter']);
            unset($data['counter']);
        } elseif (\array_key_exists('counter', $data) && $data['counter'] === null) {
            $object->setCounter(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        } elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('inventoryGroupId', $data) && $data['inventoryGroupId'] !== null) {
            $object->setInventoryGroupId($data['inventoryGroupId']);
            unset($data['inventoryGroupId']);
        } elseif (\array_key_exists('inventoryGroupId', $data) && $data['inventoryGroupId'] === null) {
            $object->setInventoryGroupId(null);
        }
        if (\array_key_exists('inventoryNumber', $data) && $data['inventoryNumber'] !== null) {
            $object->setInventoryNumber($data['inventoryNumber']);
            unset($data['inventoryNumber']);
        } elseif (\array_key_exists('inventoryNumber', $data) && $data['inventoryNumber'] === null) {
            $object->setInventoryNumber(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('levelOfDetail', $data) && $data['levelOfDetail'] !== null) {
            $object->setLevelOfDetail($data['levelOfDetail']);
            unset($data['levelOfDetail']);
        } elseif (\array_key_exists('levelOfDetail', $data) && $data['levelOfDetail'] === null) {
            $object->setLevelOfDetail(null);
        }
        if (\array_key_exists('managerId', $data) && $data['managerId'] !== null) {
            $object->setManagerId($data['managerId']);
            unset($data['managerId']);
        } elseif (\array_key_exists('managerId', $data) && $data['managerId'] === null) {
            $object->setManagerId(null);
        }
        if (\array_key_exists('recorder', $data) && $data['recorder'] !== null) {
            $object->setRecorder($data['recorder']);
            unset($data['recorder']);
        } elseif (\array_key_exists('recorder', $data) && $data['recorder'] === null) {
            $object->setRecorder(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        } elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values = [];
            foreach ($data['statusHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\InventoryStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values);
            unset($data['statusHistory']);
        } elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
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
        if ($data->isInitialized('counter') && $data->getCounter() !== null) {
            $dataArray['counter'] = $data->getCounter();
        }
        if ($data->isInitialized('createdDate') && $data->getCreatedDate() !== null) {
            $dataArray['createdDate'] = $data->getCreatedDate();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('id') && $data->getId() !== null) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('inventoryGroupId') && $data->getInventoryGroupId() !== null) {
            $dataArray['inventoryGroupId'] = $data->getInventoryGroupId();
        }
        if ($data->isInitialized('inventoryNumber') && $data->getInventoryNumber() !== null) {
            $dataArray['inventoryNumber'] = $data->getInventoryNumber();
        }
        if ($data->isInitialized('lastModifiedDate') && $data->getLastModifiedDate() !== null) {
            $dataArray['lastModifiedDate'] = $data->getLastModifiedDate();
        }
        if ($data->isInitialized('levelOfDetail') && $data->getLevelOfDetail() !== null) {
            $dataArray['levelOfDetail'] = $data->getLevelOfDetail();
        }
        if ($data->isInitialized('managerId') && $data->getManagerId() !== null) {
            $dataArray['managerId'] = $data->getManagerId();
        }
        if ($data->isInitialized('recorder') && $data->getRecorder() !== null) {
            $dataArray['recorder'] = $data->getRecorder();
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values = [];
            foreach ($data->getStatusHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['statusHistory'] = $values;
        }
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
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
