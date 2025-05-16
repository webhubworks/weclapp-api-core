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

class StoragePlaceNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\StoragePlace::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\StoragePlace::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\StoragePlace;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('blockedForResupply', $data) && \is_int($data['blockedForResupply'])) {
            $data['blockedForResupply'] = (bool) $data['blockedForResupply'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('barcode', $data) && $data['barcode'] !== null) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        } elseif (\array_key_exists('barcode', $data) && $data['barcode'] === null) {
            $object->setBarcode(null);
        }
        if (\array_key_exists('blockedForResupply', $data) && $data['blockedForResupply'] !== null) {
            $object->setBlockedForResupply($data['blockedForResupply']);
            unset($data['blockedForResupply']);
        } elseif (\array_key_exists('blockedForResupply', $data) && $data['blockedForResupply'] === null) {
            $object->setBlockedForResupply(null);
        }
        if (\array_key_exists('blockedForResupplyReasonId', $data) && $data['blockedForResupplyReasonId'] !== null) {
            $object->setBlockedForResupplyReasonId($data['blockedForResupplyReasonId']);
            unset($data['blockedForResupplyReasonId']);
        } elseif (\array_key_exists('blockedForResupplyReasonId', $data) && $data['blockedForResupplyReasonId'] === null) {
            $object->setBlockedForResupplyReasonId(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        } elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('fieldNumber', $data) && $data['fieldNumber'] !== null) {
            $object->setFieldNumber($data['fieldNumber']);
            unset($data['fieldNumber']);
        } elseif (\array_key_exists('fieldNumber', $data) && $data['fieldNumber'] === null) {
            $object->setFieldNumber(null);
        }
        if (\array_key_exists('levelNumber', $data) && $data['levelNumber'] !== null) {
            $object->setLevelNumber($data['levelNumber']);
            unset($data['levelNumber']);
        } elseif (\array_key_exists('levelNumber', $data) && $data['levelNumber'] === null) {
            $object->setLevelNumber(null);
        }
        if (\array_key_exists('storagePlaceSizeId', $data) && $data['storagePlaceSizeId'] !== null) {
            $object->setStoragePlaceSizeId($data['storagePlaceSizeId']);
            unset($data['storagePlaceSizeId']);
        } elseif (\array_key_exists('storagePlaceSizeId', $data) && $data['storagePlaceSizeId'] === null) {
            $object->setStoragePlaceSizeId(null);
        }
        if (\array_key_exists('storagePlaceType', $data) && $data['storagePlaceType'] !== null) {
            $object->setStoragePlaceType($data['storagePlaceType']);
            unset($data['storagePlaceType']);
        } elseif (\array_key_exists('storagePlaceType', $data) && $data['storagePlaceType'] === null) {
            $object->setStoragePlaceType(null);
        }
        if (\array_key_exists('currentInventoryId', $data) && $data['currentInventoryId'] !== null) {
            $object->setCurrentInventoryId($data['currentInventoryId']);
            unset($data['currentInventoryId']);
        } elseif (\array_key_exists('currentInventoryId', $data) && $data['currentInventoryId'] === null) {
            $object->setCurrentInventoryId(null);
        }
        if (\array_key_exists('shelfId', $data) && $data['shelfId'] !== null) {
            $object->setShelfId($data['shelfId']);
            unset($data['shelfId']);
        } elseif (\array_key_exists('shelfId', $data) && $data['shelfId'] === null) {
            $object->setShelfId(null);
        }
        if (\array_key_exists('shelfStorageLocationId', $data) && $data['shelfStorageLocationId'] !== null) {
            $object->setShelfStorageLocationId($data['shelfStorageLocationId']);
            unset($data['shelfStorageLocationId']);
        } elseif (\array_key_exists('shelfStorageLocationId', $data) && $data['shelfStorageLocationId'] === null) {
            $object->setShelfStorageLocationId(null);
        }
        if (\array_key_exists('storageLocationId', $data) && $data['storageLocationId'] !== null) {
            $object->setStorageLocationId($data['storageLocationId']);
            unset($data['storageLocationId']);
        } elseif (\array_key_exists('storageLocationId', $data) && $data['storageLocationId'] === null) {
            $object->setStorageLocationId(null);
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
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('barcode') && $data->getBarcode() !== null) {
            $dataArray['barcode'] = $data->getBarcode();
        }
        if ($data->isInitialized('blockedForResupply') && $data->getBlockedForResupply() !== null) {
            $dataArray['blockedForResupply'] = $data->getBlockedForResupply();
        }
        if ($data->isInitialized('blockedForResupplyReasonId') && $data->getBlockedForResupplyReasonId() !== null) {
            $dataArray['blockedForResupplyReasonId'] = $data->getBlockedForResupplyReasonId();
        }
        if ($data->isInitialized('customerId') && $data->getCustomerId() !== null) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('fieldNumber') && $data->getFieldNumber() !== null) {
            $dataArray['fieldNumber'] = $data->getFieldNumber();
        }
        if ($data->isInitialized('levelNumber') && $data->getLevelNumber() !== null) {
            $dataArray['levelNumber'] = $data->getLevelNumber();
        }
        if ($data->isInitialized('storagePlaceSizeId') && $data->getStoragePlaceSizeId() !== null) {
            $dataArray['storagePlaceSizeId'] = $data->getStoragePlaceSizeId();
        }
        if ($data->isInitialized('storagePlaceType') && $data->getStoragePlaceType() !== null) {
            $dataArray['storagePlaceType'] = $data->getStoragePlaceType();
        }
        if ($data->isInitialized('currentInventoryId') && $data->getCurrentInventoryId() !== null) {
            $dataArray['currentInventoryId'] = $data->getCurrentInventoryId();
        }
        if ($data->isInitialized('shelfId') && $data->getShelfId() !== null) {
            $dataArray['shelfId'] = $data->getShelfId();
        }
        if ($data->isInitialized('shelfStorageLocationId') && $data->getShelfStorageLocationId() !== null) {
            $dataArray['shelfStorageLocationId'] = $data->getShelfStorageLocationId();
        }
        if ($data->isInitialized('storageLocationId') && $data->getStorageLocationId() !== null) {
            $dataArray['storageLocationId'] = $data->getStorageLocationId();
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
        return [\Webhubworks\WeclappApiCore\Model\StoragePlace::class => false];
    }
}
