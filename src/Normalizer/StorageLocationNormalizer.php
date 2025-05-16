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

class StorageLocationNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\StorageLocation::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\StorageLocation::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\StorageLocation;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
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
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('blockStoragePlaces', $data) && $data['blockStoragePlaces'] !== null) {
            $values_1 = [];
            foreach ($data['blockStoragePlaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class, 'json', $context);
            }
            $object->setBlockStoragePlaces($values_1);
            unset($data['blockStoragePlaces']);
        } elseif (\array_key_exists('blockStoragePlaces', $data) && $data['blockStoragePlaces'] === null) {
            $object->setBlockStoragePlaces(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('shelves', $data) && $data['shelves'] !== null) {
            $values_2 = [];
            foreach ($data['shelves'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setShelves($values_2);
            unset($data['shelves']);
        } elseif (\array_key_exists('shelves', $data) && $data['shelves'] === null) {
            $object->setShelves(null);
        }
        if (\array_key_exists('shortIdentifier', $data) && $data['shortIdentifier'] !== null) {
            $object->setShortIdentifier($data['shortIdentifier']);
            unset($data['shortIdentifier']);
        } elseif (\array_key_exists('shortIdentifier', $data) && $data['shortIdentifier'] === null) {
            $object->setShortIdentifier(null);
        }
        if (\array_key_exists('storagePlaceTypeSettingsBlocked', $data) && $data['storagePlaceTypeSettingsBlocked'] !== null) {
            $object->setStoragePlaceTypeSettingsBlocked($this->denormalizer->denormalize($data['storagePlaceTypeSettingsBlocked'], \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class, 'json', $context));
            unset($data['storagePlaceTypeSettingsBlocked']);
        } elseif (\array_key_exists('storagePlaceTypeSettingsBlocked', $data) && $data['storagePlaceTypeSettingsBlocked'] === null) {
            $object->setStoragePlaceTypeSettingsBlocked(null);
        }
        if (\array_key_exists('storagePlaceTypeSettingsPicking', $data) && $data['storagePlaceTypeSettingsPicking'] !== null) {
            $object->setStoragePlaceTypeSettingsPicking($this->denormalizer->denormalize($data['storagePlaceTypeSettingsPicking'], \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class, 'json', $context));
            unset($data['storagePlaceTypeSettingsPicking']);
        } elseif (\array_key_exists('storagePlaceTypeSettingsPicking', $data) && $data['storagePlaceTypeSettingsPicking'] === null) {
            $object->setStoragePlaceTypeSettingsPicking(null);
        }
        if (\array_key_exists('storagePlaceTypeSettingsStock', $data) && $data['storagePlaceTypeSettingsStock'] !== null) {
            $object->setStoragePlaceTypeSettingsStock($this->denormalizer->denormalize($data['storagePlaceTypeSettingsStock'], \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class, 'json', $context));
            unset($data['storagePlaceTypeSettingsStock']);
        } elseif (\array_key_exists('storagePlaceTypeSettingsStock', $data) && $data['storagePlaceTypeSettingsStock'] === null) {
            $object->setStoragePlaceTypeSettingsStock(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
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
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('blockStoragePlaces') && $data->getBlockStoragePlaces() !== null) {
            $values_1 = [];
            foreach ($data->getBlockStoragePlaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['blockStoragePlaces'] = $values_1;
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shelves') && $data->getShelves() !== null) {
            $values_2 = [];
            foreach ($data->getShelves() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['shelves'] = $values_2;
        }
        if ($data->isInitialized('shortIdentifier') && $data->getShortIdentifier() !== null) {
            $dataArray['shortIdentifier'] = $data->getShortIdentifier();
        }
        if ($data->isInitialized('storagePlaceTypeSettingsBlocked') && $data->getStoragePlaceTypeSettingsBlocked() !== null) {
            $dataArray['storagePlaceTypeSettingsBlocked'] = $this->normalizer->normalize($data->getStoragePlaceTypeSettingsBlocked(), 'json', $context);
        }
        if ($data->isInitialized('storagePlaceTypeSettingsPicking') && $data->getStoragePlaceTypeSettingsPicking() !== null) {
            $dataArray['storagePlaceTypeSettingsPicking'] = $this->normalizer->normalize($data->getStoragePlaceTypeSettingsPicking(), 'json', $context);
        }
        if ($data->isInitialized('storagePlaceTypeSettingsStock') && $data->getStoragePlaceTypeSettingsStock() !== null) {
            $dataArray['storagePlaceTypeSettingsStock'] = $this->normalizer->normalize($data->getStoragePlaceTypeSettingsStock(), 'json', $context);
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
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
        return [\Webhubworks\WeclappApiCore\Model\StorageLocation::class => false];
    }
}
