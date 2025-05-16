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
class ProductionOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\ProductionOrder();
        if (\array_key_exists('picksComplete', $data) && \is_int($data['picksComplete'])) {
            $data['picksComplete'] = (bool) $data['picksComplete'];
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
        if (\array_key_exists('actualEndDate', $data)) {
            $object->setActualEndDate($data['actualEndDate']);
            unset($data['actualEndDate']);
        }
        if (\array_key_exists('actualQuantity', $data)) {
            $object->setActualQuantity($data['actualQuantity']);
            unset($data['actualQuantity']);
        }
        if (\array_key_exists('actualStartDate', $data)) {
            $object->setActualStartDate($data['actualStartDate']);
            unset($data['actualStartDate']);
        }
        if (\array_key_exists('articleId', $data)) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        if (\array_key_exists('articleNumber', $data)) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        if (\array_key_exists('assemblyStoragePlaceId', $data)) {
            $object->setAssemblyStoragePlaceId($data['assemblyStoragePlaceId']);
            unset($data['assemblyStoragePlaceId']);
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($data['availability']);
            unset($data['availability']);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data)) {
            $object->setAvailabilityForAllWarehouses($data['availabilityForAllWarehouses']);
            unset($data['availabilityForAllWarehouses']);
        }
        if (\array_key_exists('pickingInstructions', $data)) {
            $object->setPickingInstructions($data['pickingInstructions']);
            unset($data['pickingInstructions']);
        }
        if (\array_key_exists('picksComplete', $data)) {
            $object->setPicksComplete($data['picksComplete']);
            unset($data['picksComplete']);
        }
        if (\array_key_exists('productionOrderItems', $data)) {
            $values_1 = [];
            foreach ($data['productionOrderItems'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ProductionOrderItem::class, 'json', $context);
            }
            $object->setProductionOrderItems($values_1);
            unset($data['productionOrderItems']);
        }
        if (\array_key_exists('productionOrderNumber', $data)) {
            $object->setProductionOrderNumber($data['productionOrderNumber']);
            unset($data['productionOrderNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_2 = [];
            foreach ($data['statusHistory'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ProductionOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_2);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('targetEndDate', $data)) {
            $object->setTargetEndDate($data['targetEndDate']);
            unset($data['targetEndDate']);
        }
        if (\array_key_exists('targetQuantity', $data)) {
            $object->setTargetQuantity($data['targetQuantity']);
            unset($data['targetQuantity']);
        }
        if (\array_key_exists('targetStartDate', $data)) {
            $object->setTargetStartDate($data['targetStartDate']);
            unset($data['targetStartDate']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        if (\array_key_exists('warehouseName', $data)) {
            $object->setWarehouseName($data['warehouseName']);
            unset($data['warehouseName']);
        }
        if (\array_key_exists('workItems', $data)) {
            $values_3 = [];
            foreach ($data['workItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class, 'json', $context);
            }
            $object->setWorkItems($values_3);
            unset($data['workItems']);
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
        if ($data->isInitialized('actualEndDate') && null !== $data->getActualEndDate()) {
            $dataArray['actualEndDate'] = $data->getActualEndDate();
        }
        if ($data->isInitialized('actualQuantity') && null !== $data->getActualQuantity()) {
            $dataArray['actualQuantity'] = $data->getActualQuantity();
        }
        if ($data->isInitialized('actualStartDate') && null !== $data->getActualStartDate()) {
            $dataArray['actualStartDate'] = $data->getActualStartDate();
        }
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleNumber') && null !== $data->getArticleNumber()) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('assemblyStoragePlaceId') && null !== $data->getAssemblyStoragePlaceId()) {
            $dataArray['assemblyStoragePlaceId'] = $data->getAssemblyStoragePlaceId();
        }
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && null !== $data->getAvailabilityForAllWarehouses()) {
            $dataArray['availabilityForAllWarehouses'] = $data->getAvailabilityForAllWarehouses();
        }
        if ($data->isInitialized('pickingInstructions') && null !== $data->getPickingInstructions()) {
            $dataArray['pickingInstructions'] = $data->getPickingInstructions();
        }
        if ($data->isInitialized('picksComplete') && null !== $data->getPicksComplete()) {
            $dataArray['picksComplete'] = $data->getPicksComplete();
        }
        if ($data->isInitialized('productionOrderItems') && null !== $data->getProductionOrderItems()) {
            $values_1 = [];
            foreach ($data->getProductionOrderItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['productionOrderItems'] = $values_1;
        }
        if ($data->isInitialized('productionOrderNumber') && null !== $data->getProductionOrderNumber()) {
            $dataArray['productionOrderNumber'] = $data->getProductionOrderNumber();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && null !== $data->getStatusHistory()) {
            $values_2 = [];
            foreach ($data->getStatusHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_2;
        }
        if ($data->isInitialized('targetEndDate') && null !== $data->getTargetEndDate()) {
            $dataArray['targetEndDate'] = $data->getTargetEndDate();
        }
        if ($data->isInitialized('targetQuantity') && null !== $data->getTargetQuantity()) {
            $dataArray['targetQuantity'] = $data->getTargetQuantity();
        }
        if ($data->isInitialized('targetStartDate') && null !== $data->getTargetStartDate()) {
            $dataArray['targetStartDate'] = $data->getTargetStartDate();
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        if ($data->isInitialized('warehouseName') && null !== $data->getWarehouseName()) {
            $dataArray['warehouseName'] = $data->getWarehouseName();
        }
        if ($data->isInitialized('workItems') && null !== $data->getWorkItems()) {
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