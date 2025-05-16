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
class PickNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Pick::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Pick::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Pick();
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
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('confirmedByUserId', $data) && $data['confirmedByUserId'] !== null) {
            $object->setConfirmedByUserId($data['confirmedByUserId']);
            unset($data['confirmedByUserId']);
        }
        elseif (\array_key_exists('confirmedByUserId', $data) && $data['confirmedByUserId'] === null) {
            $object->setConfirmedByUserId(null);
        }
        if (\array_key_exists('confirmedDate', $data) && $data['confirmedDate'] !== null) {
            $object->setConfirmedDate($data['confirmedDate']);
            unset($data['confirmedDate']);
        }
        elseif (\array_key_exists('confirmedDate', $data) && $data['confirmedDate'] === null) {
            $object->setConfirmedDate(null);
        }
        if (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] !== null) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        elseif (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] === null) {
            $object->setInternalTransportReferenceId(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values = [];
            foreach ($data['serialNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setSerialNumbers($values);
            unset($data['serialNumbers']);
        }
        elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        }
        elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
        }
        if (\array_key_exists('bookedDate', $data) && $data['bookedDate'] !== null) {
            $object->setBookedDate($data['bookedDate']);
            unset($data['bookedDate']);
        }
        elseif (\array_key_exists('bookedDate', $data) && $data['bookedDate'] === null) {
            $object->setBookedDate(null);
        }
        if (\array_key_exists('orderItemId', $data) && $data['orderItemId'] !== null) {
            $object->setOrderItemId($data['orderItemId']);
            unset($data['orderItemId']);
        }
        elseif (\array_key_exists('orderItemId', $data) && $data['orderItemId'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('sourceInternalTransportReferenceId', $data) && $data['sourceInternalTransportReferenceId'] !== null) {
            $object->setSourceInternalTransportReferenceId($data['sourceInternalTransportReferenceId']);
            unset($data['sourceInternalTransportReferenceId']);
        }
        elseif (\array_key_exists('sourceInternalTransportReferenceId', $data) && $data['sourceInternalTransportReferenceId'] === null) {
            $object->setSourceInternalTransportReferenceId(null);
        }
        if (\array_key_exists('sourceStoragePlaceId', $data) && $data['sourceStoragePlaceId'] !== null) {
            $object->setSourceStoragePlaceId($data['sourceStoragePlaceId']);
            unset($data['sourceStoragePlaceId']);
        }
        elseif (\array_key_exists('sourceStoragePlaceId', $data) && $data['sourceStoragePlaceId'] === null) {
            $object->setSourceStoragePlaceId(null);
        }
        if (\array_key_exists('packagingUnitBaseArticleId', $data) && $data['packagingUnitBaseArticleId'] !== null) {
            $object->setPackagingUnitBaseArticleId($data['packagingUnitBaseArticleId']);
            unset($data['packagingUnitBaseArticleId']);
        }
        elseif (\array_key_exists('packagingUnitBaseArticleId', $data) && $data['packagingUnitBaseArticleId'] === null) {
            $object->setPackagingUnitBaseArticleId(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('productionOrderItemId', $data) && $data['productionOrderItemId'] !== null) {
            $object->setProductionOrderItemId($data['productionOrderItemId']);
            unset($data['productionOrderItemId']);
        }
        elseif (\array_key_exists('productionOrderItemId', $data) && $data['productionOrderItemId'] === null) {
            $object->setProductionOrderItemId(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
        }
        if (\array_key_exists('shipmentItemId', $data) && $data['shipmentItemId'] !== null) {
            $object->setShipmentItemId($data['shipmentItemId']);
            unset($data['shipmentItemId']);
        }
        elseif (\array_key_exists('shipmentItemId', $data) && $data['shipmentItemId'] === null) {
            $object->setShipmentItemId(null);
        }
        if (\array_key_exists('transportationOrderId', $data) && $data['transportationOrderId'] !== null) {
            $object->setTransportationOrderId($data['transportationOrderId']);
            unset($data['transportationOrderId']);
        }
        elseif (\array_key_exists('transportationOrderId', $data) && $data['transportationOrderId'] === null) {
            $object->setTransportationOrderId(null);
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
        if ($data->isInitialized('batchNumber') && null !== $data->getBatchNumber()) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('confirmedByUserId') && null !== $data->getConfirmedByUserId()) {
            $dataArray['confirmedByUserId'] = $data->getConfirmedByUserId();
        }
        if ($data->isInitialized('confirmedDate') && null !== $data->getConfirmedDate()) {
            $dataArray['confirmedDate'] = $data->getConfirmedDate();
        }
        if ($data->isInitialized('internalTransportReferenceId') && null !== $data->getInternalTransportReferenceId()) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('serialNumbers') && null !== $data->getSerialNumbers()) {
            $values = [];
            foreach ($data->getSerialNumbers() as $value) {
                $values[] = $value;
            }
            $dataArray['serialNumbers'] = $values;
        }
        if ($data->isInitialized('storagePlaceId') && null !== $data->getStoragePlaceId()) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
        }
        if ($data->isInitialized('bookedDate') && null !== $data->getBookedDate()) {
            $dataArray['bookedDate'] = $data->getBookedDate();
        }
        if ($data->isInitialized('orderItemId') && null !== $data->getOrderItemId()) {
            $dataArray['orderItemId'] = $data->getOrderItemId();
        }
        if ($data->isInitialized('sourceInternalTransportReferenceId') && null !== $data->getSourceInternalTransportReferenceId()) {
            $dataArray['sourceInternalTransportReferenceId'] = $data->getSourceInternalTransportReferenceId();
        }
        if ($data->isInitialized('sourceStoragePlaceId') && null !== $data->getSourceStoragePlaceId()) {
            $dataArray['sourceStoragePlaceId'] = $data->getSourceStoragePlaceId();
        }
        if ($data->isInitialized('packagingUnitBaseArticleId') && null !== $data->getPackagingUnitBaseArticleId()) {
            $dataArray['packagingUnitBaseArticleId'] = $data->getPackagingUnitBaseArticleId();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('productionOrderItemId') && null !== $data->getProductionOrderItemId()) {
            $dataArray['productionOrderItemId'] = $data->getProductionOrderItemId();
        }
        if ($data->isInitialized('salesOrderItemId') && null !== $data->getSalesOrderItemId()) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        if ($data->isInitialized('shipmentItemId') && null !== $data->getShipmentItemId()) {
            $dataArray['shipmentItemId'] = $data->getShipmentItemId();
        }
        if ($data->isInitialized('transportationOrderId') && null !== $data->getTransportationOrderId()) {
            $dataArray['transportationOrderId'] = $data->getTransportationOrderId();
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
        return [\Webhubworks\WeclappApiCore\Model\Pick::class => false];
    }
}