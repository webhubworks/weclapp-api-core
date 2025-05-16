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
class StorageLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\StorageLocation();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (null === $data || false === \is_array($data)) {
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('blockStoragePlaces') && null !== $data->getBlockStoragePlaces()) {
            $values_1 = [];
            foreach ($data->getBlockStoragePlaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['blockStoragePlaces'] = $values_1;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shelves') && null !== $data->getShelves()) {
            $values_2 = [];
            foreach ($data->getShelves() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['shelves'] = $values_2;
        }
        if ($data->isInitialized('shortIdentifier') && null !== $data->getShortIdentifier()) {
            $dataArray['shortIdentifier'] = $data->getShortIdentifier();
        }
        if ($data->isInitialized('storagePlaceTypeSettingsBlocked') && null !== $data->getStoragePlaceTypeSettingsBlocked()) {
            $dataArray['storagePlaceTypeSettingsBlocked'] = $this->normalizer->normalize($data->getStoragePlaceTypeSettingsBlocked(), 'json', $context);
        }
        if ($data->isInitialized('storagePlaceTypeSettingsPicking') && null !== $data->getStoragePlaceTypeSettingsPicking()) {
            $dataArray['storagePlaceTypeSettingsPicking'] = $this->normalizer->normalize($data->getStoragePlaceTypeSettingsPicking(), 'json', $context);
        }
        if ($data->isInitialized('storagePlaceTypeSettingsStock') && null !== $data->getStoragePlaceTypeSettingsStock()) {
            $dataArray['storagePlaceTypeSettingsStock'] = $this->normalizer->normalize($data->getStoragePlaceTypeSettingsStock(), 'json', $context);
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
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