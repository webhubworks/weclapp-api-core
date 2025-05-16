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

class WarehouseStockMovementNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement;
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
        if (\array_key_exists('articleId', $data)) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        if (\array_key_exists('batchNumber', $data)) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        if (\array_key_exists('batchNumberId', $data)) {
            $object->setBatchNumberId($data['batchNumberId']);
            unset($data['batchNumberId']);
        }
        if (\array_key_exists('costCenterId', $data)) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        if (\array_key_exists('incomingGoodsItemId', $data)) {
            $object->setIncomingGoodsItemId($data['incomingGoodsItemId']);
            unset($data['incomingGoodsItemId']);
        }
        if (\array_key_exists('internalTransportReferenceId', $data)) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        if (\array_key_exists('movementNote', $data)) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        }
        if (\array_key_exists('movementNumber', $data)) {
            $object->setMovementNumber($data['movementNumber']);
            unset($data['movementNumber']);
        }
        if (\array_key_exists('postingDate', $data)) {
            $object->setPostingDate($data['postingDate']);
            unset($data['postingDate']);
        }
        if (\array_key_exists('productionOrderId', $data)) {
            $object->setProductionOrderId($data['productionOrderId']);
            unset($data['productionOrderId']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('salesOrderItemId', $data)) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        if (\array_key_exists('serialNumbers', $data)) {
            $values_1 = [];
            foreach ($data['serialNumbers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSerialNumbers($values_1);
            unset($data['serialNumbers']);
        }
        if (\array_key_exists('shipmentItemId', $data)) {
            $object->setShipmentItemId($data['shipmentItemId']);
            unset($data['shipmentItemId']);
        }
        if (\array_key_exists('stockMovementType', $data)) {
            $object->setStockMovementType($data['stockMovementType']);
            unset($data['stockMovementType']);
        }
        if (\array_key_exists('storagePlaceId', $data)) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        }
        if (\array_key_exists('transportationOrderId', $data)) {
            $object->setTransportationOrderId($data['transportationOrderId']);
            unset($data['transportationOrderId']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        if (\array_key_exists('valuationPrice', $data)) {
            $object->setValuationPrice($data['valuationPrice']);
            unset($data['valuationPrice']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('batchNumber') && $data->getBatchNumber() !== null) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('batchNumberId') && $data->getBatchNumberId() !== null) {
            $dataArray['batchNumberId'] = $data->getBatchNumberId();
        }
        if ($data->isInitialized('costCenterId') && $data->getCostCenterId() !== null) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('incomingGoodsItemId') && $data->getIncomingGoodsItemId() !== null) {
            $dataArray['incomingGoodsItemId'] = $data->getIncomingGoodsItemId();
        }
        if ($data->isInitialized('internalTransportReferenceId') && $data->getInternalTransportReferenceId() !== null) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('movementNote') && $data->getMovementNote() !== null) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        if ($data->isInitialized('movementNumber') && $data->getMovementNumber() !== null) {
            $dataArray['movementNumber'] = $data->getMovementNumber();
        }
        if ($data->isInitialized('postingDate') && $data->getPostingDate() !== null) {
            $dataArray['postingDate'] = $data->getPostingDate();
        }
        if ($data->isInitialized('productionOrderId') && $data->getProductionOrderId() !== null) {
            $dataArray['productionOrderId'] = $data->getProductionOrderId();
        }
        if ($data->isInitialized('quantity') && $data->getQuantity() !== null) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('salesOrderItemId') && $data->getSalesOrderItemId() !== null) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        if ($data->isInitialized('serialNumbers') && $data->getSerialNumbers() !== null) {
            $values_1 = [];
            foreach ($data->getSerialNumbers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['serialNumbers'] = $values_1;
        }
        if ($data->isInitialized('shipmentItemId') && $data->getShipmentItemId() !== null) {
            $dataArray['shipmentItemId'] = $data->getShipmentItemId();
        }
        if ($data->isInitialized('stockMovementType') && $data->getStockMovementType() !== null) {
            $dataArray['stockMovementType'] = $data->getStockMovementType();
        }
        if ($data->isInitialized('storagePlaceId') && $data->getStoragePlaceId() !== null) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
        }
        if ($data->isInitialized('transportationOrderId') && $data->getTransportationOrderId() !== null) {
            $dataArray['transportationOrderId'] = $data->getTransportationOrderId();
        }
        if ($data->isInitialized('userId') && $data->getUserId() !== null) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('valuationPrice') && $data->getValuationPrice() !== null) {
            $dataArray['valuationPrice'] = $data->getValuationPrice();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class => false];
    }
}
