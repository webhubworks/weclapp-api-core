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

class ProductionOrderNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ProductionOrder::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ProductionOrder::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ProductionOrder;
        if (\array_key_exists('picksComplete', $data) && \is_int($data['picksComplete'])) {
            $data['picksComplete'] = (bool) $data['picksComplete'];
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
        if (\array_key_exists('actualEndDate', $data) && $data['actualEndDate'] !== null) {
            $object->setActualEndDate($data['actualEndDate']);
            unset($data['actualEndDate']);
        } elseif (\array_key_exists('actualEndDate', $data) && $data['actualEndDate'] === null) {
            $object->setActualEndDate(null);
        }
        if (\array_key_exists('actualQuantity', $data) && $data['actualQuantity'] !== null) {
            $object->setActualQuantity($data['actualQuantity']);
            unset($data['actualQuantity']);
        } elseif (\array_key_exists('actualQuantity', $data) && $data['actualQuantity'] === null) {
            $object->setActualQuantity(null);
        }
        if (\array_key_exists('actualStartDate', $data) && $data['actualStartDate'] !== null) {
            $object->setActualStartDate($data['actualStartDate']);
            unset($data['actualStartDate']);
        } elseif (\array_key_exists('actualStartDate', $data) && $data['actualStartDate'] === null) {
            $object->setActualStartDate(null);
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        } elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('assemblyStoragePlaceId', $data) && $data['assemblyStoragePlaceId'] !== null) {
            $object->setAssemblyStoragePlaceId($data['assemblyStoragePlaceId']);
            unset($data['assemblyStoragePlaceId']);
        } elseif (\array_key_exists('assemblyStoragePlaceId', $data) && $data['assemblyStoragePlaceId'] === null) {
            $object->setAssemblyStoragePlaceId(null);
        }
        if (\array_key_exists('availability', $data) && $data['availability'] !== null) {
            $object->setAvailability($data['availability']);
            unset($data['availability']);
        } elseif (\array_key_exists('availability', $data) && $data['availability'] === null) {
            $object->setAvailability(null);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data) && $data['availabilityForAllWarehouses'] !== null) {
            $object->setAvailabilityForAllWarehouses($data['availabilityForAllWarehouses']);
            unset($data['availabilityForAllWarehouses']);
        } elseif (\array_key_exists('availabilityForAllWarehouses', $data) && $data['availabilityForAllWarehouses'] === null) {
            $object->setAvailabilityForAllWarehouses(null);
        }
        if (\array_key_exists('pickingInstructions', $data) && $data['pickingInstructions'] !== null) {
            $object->setPickingInstructions($data['pickingInstructions']);
            unset($data['pickingInstructions']);
        } elseif (\array_key_exists('pickingInstructions', $data) && $data['pickingInstructions'] === null) {
            $object->setPickingInstructions(null);
        }
        if (\array_key_exists('picksComplete', $data) && $data['picksComplete'] !== null) {
            $object->setPicksComplete($data['picksComplete']);
            unset($data['picksComplete']);
        } elseif (\array_key_exists('picksComplete', $data) && $data['picksComplete'] === null) {
            $object->setPicksComplete(null);
        }
        if (\array_key_exists('productionOrderItems', $data) && $data['productionOrderItems'] !== null) {
            $values_1 = [];
            foreach ($data['productionOrderItems'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ProductionOrderItem::class, 'json', $context);
            }
            $object->setProductionOrderItems($values_1);
            unset($data['productionOrderItems']);
        } elseif (\array_key_exists('productionOrderItems', $data) && $data['productionOrderItems'] === null) {
            $object->setProductionOrderItems(null);
        }
        if (\array_key_exists('productionOrderNumber', $data) && $data['productionOrderNumber'] !== null) {
            $object->setProductionOrderNumber($data['productionOrderNumber']);
            unset($data['productionOrderNumber']);
        } elseif (\array_key_exists('productionOrderNumber', $data) && $data['productionOrderNumber'] === null) {
            $object->setProductionOrderNumber(null);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ProductionOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_2);
            unset($data['statusHistory']);
        } elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('targetEndDate', $data) && $data['targetEndDate'] !== null) {
            $object->setTargetEndDate($data['targetEndDate']);
            unset($data['targetEndDate']);
        } elseif (\array_key_exists('targetEndDate', $data) && $data['targetEndDate'] === null) {
            $object->setTargetEndDate(null);
        }
        if (\array_key_exists('targetQuantity', $data) && $data['targetQuantity'] !== null) {
            $object->setTargetQuantity($data['targetQuantity']);
            unset($data['targetQuantity']);
        } elseif (\array_key_exists('targetQuantity', $data) && $data['targetQuantity'] === null) {
            $object->setTargetQuantity(null);
        }
        if (\array_key_exists('targetStartDate', $data) && $data['targetStartDate'] !== null) {
            $object->setTargetStartDate($data['targetStartDate']);
            unset($data['targetStartDate']);
        } elseif (\array_key_exists('targetStartDate', $data) && $data['targetStartDate'] === null) {
            $object->setTargetStartDate(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        if (\array_key_exists('warehouseName', $data) && $data['warehouseName'] !== null) {
            $object->setWarehouseName($data['warehouseName']);
            unset($data['warehouseName']);
        } elseif (\array_key_exists('warehouseName', $data) && $data['warehouseName'] === null) {
            $object->setWarehouseName(null);
        }
        if (\array_key_exists('workItems', $data) && $data['workItems'] !== null) {
            $values_3 = [];
            foreach ($data['workItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class, 'json', $context);
            }
            $object->setWorkItems($values_3);
            unset($data['workItems']);
        } elseif (\array_key_exists('workItems', $data) && $data['workItems'] === null) {
            $object->setWorkItems(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($data->isInitialized('actualEndDate') && $data->getActualEndDate() !== null) {
            $dataArray['actualEndDate'] = $data->getActualEndDate();
        }
        if ($data->isInitialized('actualQuantity') && $data->getActualQuantity() !== null) {
            $dataArray['actualQuantity'] = $data->getActualQuantity();
        }
        if ($data->isInitialized('actualStartDate') && $data->getActualStartDate() !== null) {
            $dataArray['actualStartDate'] = $data->getActualStartDate();
        }
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleNumber') && $data->getArticleNumber() !== null) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('assemblyStoragePlaceId') && $data->getAssemblyStoragePlaceId() !== null) {
            $dataArray['assemblyStoragePlaceId'] = $data->getAssemblyStoragePlaceId();
        }
        if ($data->isInitialized('availability') && $data->getAvailability() !== null) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && $data->getAvailabilityForAllWarehouses() !== null) {
            $dataArray['availabilityForAllWarehouses'] = $data->getAvailabilityForAllWarehouses();
        }
        if ($data->isInitialized('pickingInstructions') && $data->getPickingInstructions() !== null) {
            $dataArray['pickingInstructions'] = $data->getPickingInstructions();
        }
        if ($data->isInitialized('picksComplete') && $data->getPicksComplete() !== null) {
            $dataArray['picksComplete'] = $data->getPicksComplete();
        }
        if ($data->isInitialized('productionOrderItems') && $data->getProductionOrderItems() !== null) {
            $values_1 = [];
            foreach ($data->getProductionOrderItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['productionOrderItems'] = $values_1;
        }
        if ($data->isInitialized('productionOrderNumber') && $data->getProductionOrderNumber() !== null) {
            $dataArray['productionOrderNumber'] = $data->getProductionOrderNumber();
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
        if ($data->isInitialized('targetEndDate') && $data->getTargetEndDate() !== null) {
            $dataArray['targetEndDate'] = $data->getTargetEndDate();
        }
        if ($data->isInitialized('targetQuantity') && $data->getTargetQuantity() !== null) {
            $dataArray['targetQuantity'] = $data->getTargetQuantity();
        }
        if ($data->isInitialized('targetStartDate') && $data->getTargetStartDate() !== null) {
            $dataArray['targetStartDate'] = $data->getTargetStartDate();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        if ($data->isInitialized('warehouseName') && $data->getWarehouseName() !== null) {
            $dataArray['warehouseName'] = $data->getWarehouseName();
        }
        if ($data->isInitialized('workItems') && $data->getWorkItems() !== null) {
            $values_3 = [];
            foreach ($data->getWorkItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['workItems'] = $values_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ProductionOrder::class => false];
    }
}
