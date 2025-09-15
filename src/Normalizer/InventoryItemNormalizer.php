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
class InventoryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\InventoryItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\InventoryItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\InventoryItem();
        if (\array_key_exists('manualPosition', $data) && \is_int($data['manualPosition'])) {
            $data['manualPosition'] = (bool) $data['manualPosition'];
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('countedQuantity', $data) && $data['countedQuantity'] !== null) {
            $object->setCountedQuantity($data['countedQuantity']);
            unset($data['countedQuantity']);
        }
        elseif (\array_key_exists('countedQuantity', $data) && $data['countedQuantity'] === null) {
            $object->setCountedQuantity(null);
        }
        if (\array_key_exists('expectedQuantity', $data) && $data['expectedQuantity'] !== null) {
            $object->setExpectedQuantity($data['expectedQuantity']);
            unset($data['expectedQuantity']);
        }
        elseif (\array_key_exists('expectedQuantity', $data) && $data['expectedQuantity'] === null) {
            $object->setExpectedQuantity(null);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $object->setExpirationDate($data['expirationDate']);
            unset($data['expirationDate']);
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('inboundDate', $data) && $data['inboundDate'] !== null) {
            $object->setInboundDate($data['inboundDate']);
            unset($data['inboundDate']);
        }
        elseif (\array_key_exists('inboundDate', $data) && $data['inboundDate'] === null) {
            $object->setInboundDate(null);
        }
        if (\array_key_exists('inventoryId', $data) && $data['inventoryId'] !== null) {
            $object->setInventoryId($data['inventoryId']);
            unset($data['inventoryId']);
        }
        elseif (\array_key_exists('inventoryId', $data) && $data['inventoryId'] === null) {
            $object->setInventoryId(null);
        }
        if (\array_key_exists('inventorySerialNumbers', $data) && $data['inventorySerialNumbers'] !== null) {
            $values = [];
            foreach ($data['inventorySerialNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\InventorySerialNumber::class, 'json', $context);
            }
            $object->setInventorySerialNumbers($values);
            unset($data['inventorySerialNumbers']);
        }
        elseif (\array_key_exists('inventorySerialNumbers', $data) && $data['inventorySerialNumbers'] === null) {
            $object->setInventorySerialNumbers(null);
        }
        if (\array_key_exists('inventoryTransportReferenceId', $data) && $data['inventoryTransportReferenceId'] !== null) {
            $object->setInventoryTransportReferenceId($data['inventoryTransportReferenceId']);
            unset($data['inventoryTransportReferenceId']);
        }
        elseif (\array_key_exists('inventoryTransportReferenceId', $data) && $data['inventoryTransportReferenceId'] === null) {
            $object->setInventoryTransportReferenceId(null);
        }
        if (\array_key_exists('manualPosition', $data) && $data['manualPosition'] !== null) {
            $object->setManualPosition($data['manualPosition']);
            unset($data['manualPosition']);
        }
        elseif (\array_key_exists('manualPosition', $data) && $data['manualPosition'] === null) {
            $object->setManualPosition(null);
        }
        if (\array_key_exists('orderItemId', $data) && $data['orderItemId'] !== null) {
            $object->setOrderItemId($data['orderItemId']);
            unset($data['orderItemId']);
        }
        elseif (\array_key_exists('orderItemId', $data) && $data['orderItemId'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('replacementValue', $data) && $data['replacementValue'] !== null) {
            $object->setReplacementValue($data['replacementValue']);
            unset($data['replacementValue']);
        }
        elseif (\array_key_exists('replacementValue', $data) && $data['replacementValue'] === null) {
            $object->setReplacementValue(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        }
        elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
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
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('batchNumber') && null !== $data->getBatchNumber()) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('comment') && null !== $data->getComment()) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('countedQuantity') && null !== $data->getCountedQuantity()) {
            $dataArray['countedQuantity'] = $data->getCountedQuantity();
        }
        if ($data->isInitialized('expirationDate') && null !== $data->getExpirationDate()) {
            $dataArray['expirationDate'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('inboundDate') && null !== $data->getInboundDate()) {
            $dataArray['inboundDate'] = $data->getInboundDate();
        }
        if ($data->isInitialized('inventoryId') && null !== $data->getInventoryId()) {
            $dataArray['inventoryId'] = $data->getInventoryId();
        }
        if ($data->isInitialized('inventorySerialNumbers') && null !== $data->getInventorySerialNumbers()) {
            $values = [];
            foreach ($data->getInventorySerialNumbers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['inventorySerialNumbers'] = $values;
        }
        if ($data->isInitialized('inventoryTransportReferenceId') && null !== $data->getInventoryTransportReferenceId()) {
            $dataArray['inventoryTransportReferenceId'] = $data->getInventoryTransportReferenceId();
        }
        if ($data->isInitialized('orderItemId') && null !== $data->getOrderItemId()) {
            $dataArray['orderItemId'] = $data->getOrderItemId();
        }
        if ($data->isInitialized('replacementValue') && null !== $data->getReplacementValue()) {
            $dataArray['replacementValue'] = $data->getReplacementValue();
        }
        if ($data->isInitialized('storagePlaceId') && null !== $data->getStoragePlaceId()) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
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
        return [\Webhubworks\WeclappApiCore\Model\InventoryItem::class => false];
    }
}