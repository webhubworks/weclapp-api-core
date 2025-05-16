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

class PurchaseRequisitionNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseRequisition::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseRequisition::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseRequisition;
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
        if (\array_key_exists('earliestRequiredDate', $data)) {
            $object->setEarliestRequiredDate($data['earliestRequiredDate']);
            unset($data['earliestRequiredDate']);
        }
        if (\array_key_exists('internalShipmentId', $data)) {
            $object->setInternalShipmentId($data['internalShipmentId']);
            unset($data['internalShipmentId']);
        }
        if (\array_key_exists('latestRequiredDate', $data)) {
            $object->setLatestRequiredDate($data['latestRequiredDate']);
            unset($data['latestRequiredDate']);
        }
        if (\array_key_exists('packagingUnitToOrderId', $data)) {
            $object->setPackagingUnitToOrderId($data['packagingUnitToOrderId']);
            unset($data['packagingUnitToOrderId']);
        }
        if (\array_key_exists('productionOrderId', $data)) {
            $object->setProductionOrderId($data['productionOrderId']);
            unset($data['productionOrderId']);
        }
        if (\array_key_exists('productionOrderItemId', $data)) {
            $object->setProductionOrderItemId($data['productionOrderItemId']);
            unset($data['productionOrderItemId']);
        }
        if (\array_key_exists('proposedDate', $data)) {
            $object->setProposedDate($data['proposedDate']);
            unset($data['proposedDate']);
        }
        if (\array_key_exists('proposedQuantity', $data)) {
            $object->setProposedQuantity($data['proposedQuantity']);
            unset($data['proposedQuantity']);
        }
        if (\array_key_exists('purchaseOrderId', $data)) {
            $object->setPurchaseOrderId($data['purchaseOrderId']);
            unset($data['purchaseOrderId']);
        }
        if (\array_key_exists('requirementQuantity', $data)) {
            $object->setRequirementQuantity($data['requirementQuantity']);
            unset($data['requirementQuantity']);
        }
        if (\array_key_exists('requisitionNumber', $data)) {
            $object->setRequisitionNumber($data['requisitionNumber']);
            unset($data['requisitionNumber']);
        }
        if (\array_key_exists('salesOrderItemId', $data)) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_1 = [];
            foreach ($data['statusHistory'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_1);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('supplierId', $data)) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
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
        if ($data->isInitialized('earliestRequiredDate') && $data->getEarliestRequiredDate() !== null) {
            $dataArray['earliestRequiredDate'] = $data->getEarliestRequiredDate();
        }
        if ($data->isInitialized('internalShipmentId') && $data->getInternalShipmentId() !== null) {
            $dataArray['internalShipmentId'] = $data->getInternalShipmentId();
        }
        if ($data->isInitialized('latestRequiredDate') && $data->getLatestRequiredDate() !== null) {
            $dataArray['latestRequiredDate'] = $data->getLatestRequiredDate();
        }
        if ($data->isInitialized('packagingUnitToOrderId') && $data->getPackagingUnitToOrderId() !== null) {
            $dataArray['packagingUnitToOrderId'] = $data->getPackagingUnitToOrderId();
        }
        if ($data->isInitialized('productionOrderId') && $data->getProductionOrderId() !== null) {
            $dataArray['productionOrderId'] = $data->getProductionOrderId();
        }
        if ($data->isInitialized('productionOrderItemId') && $data->getProductionOrderItemId() !== null) {
            $dataArray['productionOrderItemId'] = $data->getProductionOrderItemId();
        }
        if ($data->isInitialized('proposedDate') && $data->getProposedDate() !== null) {
            $dataArray['proposedDate'] = $data->getProposedDate();
        }
        if ($data->isInitialized('proposedQuantity') && $data->getProposedQuantity() !== null) {
            $dataArray['proposedQuantity'] = $data->getProposedQuantity();
        }
        if ($data->isInitialized('purchaseOrderId') && $data->getPurchaseOrderId() !== null) {
            $dataArray['purchaseOrderId'] = $data->getPurchaseOrderId();
        }
        if ($data->isInitialized('requirementQuantity') && $data->getRequirementQuantity() !== null) {
            $dataArray['requirementQuantity'] = $data->getRequirementQuantity();
        }
        if ($data->isInitialized('requisitionNumber') && $data->getRequisitionNumber() !== null) {
            $dataArray['requisitionNumber'] = $data->getRequisitionNumber();
        }
        if ($data->isInitialized('salesOrderItemId') && $data->getSalesOrderItemId() !== null) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values_1 = [];
            foreach ($data->getStatusHistory() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_1;
        }
        if ($data->isInitialized('supplierId') && $data->getSupplierId() !== null) {
            $dataArray['supplierId'] = $data->getSupplierId();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseRequisition::class => false];
    }
}
