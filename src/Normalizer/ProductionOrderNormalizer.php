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
        if (\array_key_exists('actualEndDate', $data) && $data['actualEndDate'] !== null) {
            $object->setActualEndDate($data['actualEndDate']);
            unset($data['actualEndDate']);
        }
        elseif (\array_key_exists('actualEndDate', $data) && $data['actualEndDate'] === null) {
            $object->setActualEndDate(null);
        }
        if (\array_key_exists('actualQuantity', $data) && $data['actualQuantity'] !== null) {
            $object->setActualQuantity($data['actualQuantity']);
            unset($data['actualQuantity']);
        }
        elseif (\array_key_exists('actualQuantity', $data) && $data['actualQuantity'] === null) {
            $object->setActualQuantity(null);
        }
        if (\array_key_exists('actualStartDate', $data) && $data['actualStartDate'] !== null) {
            $object->setActualStartDate($data['actualStartDate']);
            unset($data['actualStartDate']);
        }
        elseif (\array_key_exists('actualStartDate', $data) && $data['actualStartDate'] === null) {
            $object->setActualStartDate(null);
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('assemblyStoragePlaceId', $data) && $data['assemblyStoragePlaceId'] !== null) {
            $object->setAssemblyStoragePlaceId($data['assemblyStoragePlaceId']);
            unset($data['assemblyStoragePlaceId']);
        }
        elseif (\array_key_exists('assemblyStoragePlaceId', $data) && $data['assemblyStoragePlaceId'] === null) {
            $object->setAssemblyStoragePlaceId(null);
        }
        if (\array_key_exists('pickingInstructions', $data) && $data['pickingInstructions'] !== null) {
            $object->setPickingInstructions($data['pickingInstructions']);
            unset($data['pickingInstructions']);
        }
        elseif (\array_key_exists('pickingInstructions', $data) && $data['pickingInstructions'] === null) {
            $object->setPickingInstructions(null);
        }
        if (\array_key_exists('picksComplete', $data) && $data['picksComplete'] !== null) {
            $object->setPicksComplete($data['picksComplete']);
            unset($data['picksComplete']);
        }
        elseif (\array_key_exists('picksComplete', $data) && $data['picksComplete'] === null) {
            $object->setPicksComplete(null);
        }
        if (\array_key_exists('productionOrderItems', $data) && $data['productionOrderItems'] !== null) {
            $values_1 = [];
            foreach ($data['productionOrderItems'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ProductionOrderItem::class, 'json', $context);
            }
            $object->setProductionOrderItems($values_1);
            unset($data['productionOrderItems']);
        }
        elseif (\array_key_exists('productionOrderItems', $data) && $data['productionOrderItems'] === null) {
            $object->setProductionOrderItems(null);
        }
        if (\array_key_exists('productionOrderNumber', $data) && $data['productionOrderNumber'] !== null) {
            $object->setProductionOrderNumber($data['productionOrderNumber']);
            unset($data['productionOrderNumber']);
        }
        elseif (\array_key_exists('productionOrderNumber', $data) && $data['productionOrderNumber'] === null) {
            $object->setProductionOrderNumber(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_2 = [];
            foreach ($data['statusHistory'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ProductionOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_2);
            unset($data['statusHistory']);
        }
        elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('targetEndDate', $data) && $data['targetEndDate'] !== null) {
            $object->setTargetEndDate($data['targetEndDate']);
            unset($data['targetEndDate']);
        }
        elseif (\array_key_exists('targetEndDate', $data) && $data['targetEndDate'] === null) {
            $object->setTargetEndDate(null);
        }
        if (\array_key_exists('targetQuantity', $data) && $data['targetQuantity'] !== null) {
            $object->setTargetQuantity($data['targetQuantity']);
            unset($data['targetQuantity']);
        }
        elseif (\array_key_exists('targetQuantity', $data) && $data['targetQuantity'] === null) {
            $object->setTargetQuantity(null);
        }
        if (\array_key_exists('targetStartDate', $data) && $data['targetStartDate'] !== null) {
            $object->setTargetStartDate($data['targetStartDate']);
            unset($data['targetStartDate']);
        }
        elseif (\array_key_exists('targetStartDate', $data) && $data['targetStartDate'] === null) {
            $object->setTargetStartDate(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        if (\array_key_exists('workItems', $data) && $data['workItems'] !== null) {
            $values_3 = [];
            foreach ($data['workItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class, 'json', $context);
            }
            $object->setWorkItems($values_3);
            unset($data['workItems']);
        }
        elseif (\array_key_exists('workItems', $data) && $data['workItems'] === null) {
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
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('assemblyStoragePlaceId') && null !== $data->getAssemblyStoragePlaceId()) {
            $dataArray['assemblyStoragePlaceId'] = $data->getAssemblyStoragePlaceId();
        }
        if ($data->isInitialized('pickingInstructions') && null !== $data->getPickingInstructions()) {
            $dataArray['pickingInstructions'] = $data->getPickingInstructions();
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
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ProductionOrder::class => false];
    }
}