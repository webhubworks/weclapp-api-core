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
class NestedStoragePlaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\NestedStoragePlace();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('blockedForResupply', $data) && \is_int($data['blockedForResupply'])) {
            $data['blockedForResupply'] = (bool) $data['blockedForResupply'];
        }
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
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('barcode', $data) && $data['barcode'] !== null) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        elseif (\array_key_exists('barcode', $data) && $data['barcode'] === null) {
            $object->setBarcode(null);
        }
        if (\array_key_exists('blockedForResupply', $data) && $data['blockedForResupply'] !== null) {
            $object->setBlockedForResupply($data['blockedForResupply']);
            unset($data['blockedForResupply']);
        }
        elseif (\array_key_exists('blockedForResupply', $data) && $data['blockedForResupply'] === null) {
            $object->setBlockedForResupply(null);
        }
        if (\array_key_exists('blockedForResupplyReasonId', $data) && $data['blockedForResupplyReasonId'] !== null) {
            $object->setBlockedForResupplyReasonId($data['blockedForResupplyReasonId']);
            unset($data['blockedForResupplyReasonId']);
        }
        elseif (\array_key_exists('blockedForResupplyReasonId', $data) && $data['blockedForResupplyReasonId'] === null) {
            $object->setBlockedForResupplyReasonId(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('fieldNumber', $data) && $data['fieldNumber'] !== null) {
            $object->setFieldNumber($data['fieldNumber']);
            unset($data['fieldNumber']);
        }
        elseif (\array_key_exists('fieldNumber', $data) && $data['fieldNumber'] === null) {
            $object->setFieldNumber(null);
        }
        if (\array_key_exists('levelNumber', $data) && $data['levelNumber'] !== null) {
            $object->setLevelNumber($data['levelNumber']);
            unset($data['levelNumber']);
        }
        elseif (\array_key_exists('levelNumber', $data) && $data['levelNumber'] === null) {
            $object->setLevelNumber(null);
        }
        if (\array_key_exists('storagePlaceSizeId', $data) && $data['storagePlaceSizeId'] !== null) {
            $object->setStoragePlaceSizeId($data['storagePlaceSizeId']);
            unset($data['storagePlaceSizeId']);
        }
        elseif (\array_key_exists('storagePlaceSizeId', $data) && $data['storagePlaceSizeId'] === null) {
            $object->setStoragePlaceSizeId(null);
        }
        if (\array_key_exists('storagePlaceType', $data) && $data['storagePlaceType'] !== null) {
            $object->setStoragePlaceType($data['storagePlaceType']);
            unset($data['storagePlaceType']);
        }
        elseif (\array_key_exists('storagePlaceType', $data) && $data['storagePlaceType'] === null) {
            $object->setStoragePlaceType(null);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('barcode') && null !== $data->getBarcode()) {
            $dataArray['barcode'] = $data->getBarcode();
        }
        if ($data->isInitialized('blockedForResupply') && null !== $data->getBlockedForResupply()) {
            $dataArray['blockedForResupply'] = $data->getBlockedForResupply();
        }
        if ($data->isInitialized('blockedForResupplyReasonId') && null !== $data->getBlockedForResupplyReasonId()) {
            $dataArray['blockedForResupplyReasonId'] = $data->getBlockedForResupplyReasonId();
        }
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('fieldNumber') && null !== $data->getFieldNumber()) {
            $dataArray['fieldNumber'] = $data->getFieldNumber();
        }
        if ($data->isInitialized('levelNumber') && null !== $data->getLevelNumber()) {
            $dataArray['levelNumber'] = $data->getLevelNumber();
        }
        if ($data->isInitialized('storagePlaceSizeId') && null !== $data->getStoragePlaceSizeId()) {
            $dataArray['storagePlaceSizeId'] = $data->getStoragePlaceSizeId();
        }
        if ($data->isInitialized('storagePlaceType') && null !== $data->getStoragePlaceType()) {
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