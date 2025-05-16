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
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('blockStoragePlaces', $data)) {
            $values_1 = [];
            foreach ($data['blockStoragePlaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class, 'json', $context);
            }
            $object->setBlockStoragePlaces($values_1);
            unset($data['blockStoragePlaces']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shelves', $data)) {
            $values_2 = [];
            foreach ($data['shelves'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setShelves($values_2);
            unset($data['shelves']);
        }
        if (\array_key_exists('shortIdentifier', $data)) {
            $object->setShortIdentifier($data['shortIdentifier']);
            unset($data['shortIdentifier']);
        }
        if (\array_key_exists('storagePlaceTypeSettingsBlocked', $data)) {
            $object->setStoragePlaceTypeSettingsBlocked($this->denormalizer->denormalize($data['storagePlaceTypeSettingsBlocked'], \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class, 'json', $context));
            unset($data['storagePlaceTypeSettingsBlocked']);
        }
        if (\array_key_exists('storagePlaceTypeSettingsPicking', $data)) {
            $object->setStoragePlaceTypeSettingsPicking($this->denormalizer->denormalize($data['storagePlaceTypeSettingsPicking'], \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class, 'json', $context));
            unset($data['storagePlaceTypeSettingsPicking']);
        }
        if (\array_key_exists('storagePlaceTypeSettingsStock', $data)) {
            $object->setStoragePlaceTypeSettingsStock($this->denormalizer->denormalize($data['storagePlaceTypeSettingsStock'], \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class, 'json', $context));
            unset($data['storagePlaceTypeSettingsStock']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
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
