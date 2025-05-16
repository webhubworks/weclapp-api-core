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

class TransportationOrderNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TransportationOrder::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TransportationOrder::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TransportationOrder;
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
        if (\array_key_exists('assignedUserId', $data)) {
            $object->setAssignedUserId($data['assignedUserId']);
            unset($data['assignedUserId']);
        }
        if (\array_key_exists('destinationStoragePlaceId', $data)) {
            $object->setDestinationStoragePlaceId($data['destinationStoragePlaceId']);
            unset($data['destinationStoragePlaceId']);
        }
        if (\array_key_exists('internalTransportReferenceId', $data)) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data)) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data)) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        }
        if (\array_key_exists('picks', $data)) {
            $values_1 = [];
            foreach ($data['picks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\TransportPick::class, 'json', $context);
            }
            $object->setPicks($values_1);
            unset($data['picks']);
        }
        if (\array_key_exists('productionOrderId', $data)) {
            $object->setProductionOrderId($data['productionOrderId']);
            unset($data['productionOrderId']);
        }
        if (\array_key_exists('shipmentId', $data)) {
            $object->setShipmentId($data['shipmentId']);
            unset($data['shipmentId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_2 = [];
            foreach ($data['statusHistory'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\TransportationOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_2);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('transportationOrderNumber', $data)) {
            $object->setTransportationOrderNumber($data['transportationOrderNumber']);
            unset($data['transportationOrderNumber']);
        }
        if (\array_key_exists('transportationOrderType', $data)) {
            $object->setTransportationOrderType($data['transportationOrderType']);
            unset($data['transportationOrderType']);
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
        if ($data->isInitialized('assignedUserId') && $data->getAssignedUserId() !== null) {
            $dataArray['assignedUserId'] = $data->getAssignedUserId();
        }
        if ($data->isInitialized('destinationStoragePlaceId') && $data->getDestinationStoragePlaceId() !== null) {
            $dataArray['destinationStoragePlaceId'] = $data->getDestinationStoragePlaceId();
        }
        if ($data->isInitialized('internalTransportReferenceId') && $data->getInternalTransportReferenceId() !== null) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('loadingEquipmentArticleId') && $data->getLoadingEquipmentArticleId() !== null) {
            $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && $data->getLoadingEquipmentIdentifierId() !== null) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('picks') && $data->getPicks() !== null) {
            $values_1 = [];
            foreach ($data->getPicks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['picks'] = $values_1;
        }
        if ($data->isInitialized('productionOrderId') && $data->getProductionOrderId() !== null) {
            $dataArray['productionOrderId'] = $data->getProductionOrderId();
        }
        if ($data->isInitialized('shipmentId') && $data->getShipmentId() !== null) {
            $dataArray['shipmentId'] = $data->getShipmentId();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values_2 = [];
            foreach ($data->getStatusHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_2;
        }
        if ($data->isInitialized('transportationOrderNumber') && $data->getTransportationOrderNumber() !== null) {
            $dataArray['transportationOrderNumber'] = $data->getTransportationOrderNumber();
        }
        if ($data->isInitialized('transportationOrderType') && $data->getTransportationOrderType() !== null) {
            $dataArray['transportationOrderType'] = $data->getTransportationOrderType();
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
        return [\Webhubworks\WeclappApiCore\Model\TransportationOrder::class => false];
    }
}
