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
        if (\array_key_exists('assignedUserId', $data) && $data['assignedUserId'] !== null) {
            $object->setAssignedUserId($data['assignedUserId']);
            unset($data['assignedUserId']);
        } elseif (\array_key_exists('assignedUserId', $data) && $data['assignedUserId'] === null) {
            $object->setAssignedUserId(null);
        }
        if (\array_key_exists('destinationStoragePlaceId', $data) && $data['destinationStoragePlaceId'] !== null) {
            $object->setDestinationStoragePlaceId($data['destinationStoragePlaceId']);
            unset($data['destinationStoragePlaceId']);
        } elseif (\array_key_exists('destinationStoragePlaceId', $data) && $data['destinationStoragePlaceId'] === null) {
            $object->setDestinationStoragePlaceId(null);
        }
        if (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] !== null) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        } elseif (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] === null) {
            $object->setInternalTransportReferenceId(null);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] !== null) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        } elseif (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] === null) {
            $object->setLoadingEquipmentArticleId(null);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] !== null) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        } elseif (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] === null) {
            $object->setLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('picks', $data) && $data['picks'] !== null) {
            $values_1 = [];
            foreach ($data['picks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\TransportPick::class, 'json', $context);
            }
            $object->setPicks($values_1);
            unset($data['picks']);
        } elseif (\array_key_exists('picks', $data) && $data['picks'] === null) {
            $object->setPicks(null);
        }
        if (\array_key_exists('productionOrderId', $data) && $data['productionOrderId'] !== null) {
            $object->setProductionOrderId($data['productionOrderId']);
            unset($data['productionOrderId']);
        } elseif (\array_key_exists('productionOrderId', $data) && $data['productionOrderId'] === null) {
            $object->setProductionOrderId(null);
        }
        if (\array_key_exists('shipmentId', $data) && $data['shipmentId'] !== null) {
            $object->setShipmentId($data['shipmentId']);
            unset($data['shipmentId']);
        } elseif (\array_key_exists('shipmentId', $data) && $data['shipmentId'] === null) {
            $object->setShipmentId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_2 = [];
            foreach ($data['statusHistory'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\TransportationOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_2);
            unset($data['statusHistory']);
        } elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('transportationOrderNumber', $data) && $data['transportationOrderNumber'] !== null) {
            $object->setTransportationOrderNumber($data['transportationOrderNumber']);
            unset($data['transportationOrderNumber']);
        } elseif (\array_key_exists('transportationOrderNumber', $data) && $data['transportationOrderNumber'] === null) {
            $object->setTransportationOrderNumber(null);
        }
        if (\array_key_exists('transportationOrderType', $data) && $data['transportationOrderType'] !== null) {
            $object->setTransportationOrderType($data['transportationOrderType']);
            unset($data['transportationOrderType']);
        } elseif (\array_key_exists('transportationOrderType', $data) && $data['transportationOrderType'] === null) {
            $object->setTransportationOrderType(null);
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
