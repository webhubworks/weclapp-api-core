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

class NestedStoragePlaceNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\NestedStoragePlace;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('blockedForResupply', $data) && \is_int($data['blockedForResupply'])) {
            $data['blockedForResupply'] = (bool) $data['blockedForResupply'];
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
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        if (\array_key_exists('blockedForResupply', $data)) {
            $object->setBlockedForResupply($data['blockedForResupply']);
            unset($data['blockedForResupply']);
        }
        if (\array_key_exists('blockedForResupplyReasonId', $data)) {
            $object->setBlockedForResupplyReasonId($data['blockedForResupplyReasonId']);
            unset($data['blockedForResupplyReasonId']);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('fieldNumber', $data)) {
            $object->setFieldNumber($data['fieldNumber']);
            unset($data['fieldNumber']);
        }
        if (\array_key_exists('levelNumber', $data)) {
            $object->setLevelNumber($data['levelNumber']);
            unset($data['levelNumber']);
        }
        if (\array_key_exists('storagePlaceSizeId', $data)) {
            $object->setStoragePlaceSizeId($data['storagePlaceSizeId']);
            unset($data['storagePlaceSizeId']);
        }
        if (\array_key_exists('storagePlaceType', $data)) {
            $object->setStoragePlaceType($data['storagePlaceType']);
            unset($data['storagePlaceType']);
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class => false];
    }
}
