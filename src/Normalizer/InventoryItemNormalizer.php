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
        if (\array_key_exists('articleId', $data)) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        if (\array_key_exists('batchNumber', $data)) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('countedQuantity', $data)) {
            $object->setCountedQuantity($data['countedQuantity']);
            unset($data['countedQuantity']);
        }
        if (\array_key_exists('expectedQuantity', $data)) {
            $object->setExpectedQuantity($data['expectedQuantity']);
            unset($data['expectedQuantity']);
        }
        if (\array_key_exists('expirationDate', $data)) {
            $object->setExpirationDate($data['expirationDate']);
            unset($data['expirationDate']);
        }
        if (\array_key_exists('inboundDate', $data)) {
            $object->setInboundDate($data['inboundDate']);
            unset($data['inboundDate']);
        }
        if (\array_key_exists('inventoryId', $data)) {
            $object->setInventoryId($data['inventoryId']);
            unset($data['inventoryId']);
        }
        if (\array_key_exists('inventorySerialNumbers', $data)) {
            $values = [];
            foreach ($data['inventorySerialNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\InventorySerialNumber::class, 'json', $context);
            }
            $object->setInventorySerialNumbers($values);
            unset($data['inventorySerialNumbers']);
        }
        if (\array_key_exists('inventoryTransportReferenceId', $data)) {
            $object->setInventoryTransportReferenceId($data['inventoryTransportReferenceId']);
            unset($data['inventoryTransportReferenceId']);
        }
        if (\array_key_exists('manualPosition', $data)) {
            $object->setManualPosition($data['manualPosition']);
            unset($data['manualPosition']);
        }
        if (\array_key_exists('orderItemId', $data)) {
            $object->setOrderItemId($data['orderItemId']);
            unset($data['orderItemId']);
        }
        if (\array_key_exists('positionNumber', $data)) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        if (\array_key_exists('replacementValue', $data)) {
            $object->setReplacementValue($data['replacementValue']);
            unset($data['replacementValue']);
        }
        if (\array_key_exists('storagePlaceId', $data)) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
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
        if ($data->isInitialized('expectedQuantity') && null !== $data->getExpectedQuantity()) {
            $dataArray['expectedQuantity'] = $data->getExpectedQuantity();
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
        if ($data->isInitialized('manualPosition') && null !== $data->getManualPosition()) {
            $dataArray['manualPosition'] = $data->getManualPosition();
        }
        if ($data->isInitialized('orderItemId') && null !== $data->getOrderItemId()) {
            $dataArray['orderItemId'] = $data->getOrderItemId();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
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