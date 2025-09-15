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
class PurchaseRequisitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseRequisition();
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('earliestRequiredDate', $data) && $data['earliestRequiredDate'] !== null) {
            $object->setEarliestRequiredDate($data['earliestRequiredDate']);
            unset($data['earliestRequiredDate']);
        }
        elseif (\array_key_exists('earliestRequiredDate', $data) && $data['earliestRequiredDate'] === null) {
            $object->setEarliestRequiredDate(null);
        }
        if (\array_key_exists('internalShipmentId', $data) && $data['internalShipmentId'] !== null) {
            $object->setInternalShipmentId($data['internalShipmentId']);
            unset($data['internalShipmentId']);
        }
        elseif (\array_key_exists('internalShipmentId', $data) && $data['internalShipmentId'] === null) {
            $object->setInternalShipmentId(null);
        }
        if (\array_key_exists('latestRequiredDate', $data) && $data['latestRequiredDate'] !== null) {
            $object->setLatestRequiredDate($data['latestRequiredDate']);
            unset($data['latestRequiredDate']);
        }
        elseif (\array_key_exists('latestRequiredDate', $data) && $data['latestRequiredDate'] === null) {
            $object->setLatestRequiredDate(null);
        }
        if (\array_key_exists('packagingUnitToOrderId', $data) && $data['packagingUnitToOrderId'] !== null) {
            $object->setPackagingUnitToOrderId($data['packagingUnitToOrderId']);
            unset($data['packagingUnitToOrderId']);
        }
        elseif (\array_key_exists('packagingUnitToOrderId', $data) && $data['packagingUnitToOrderId'] === null) {
            $object->setPackagingUnitToOrderId(null);
        }
        if (\array_key_exists('productionOrderId', $data) && $data['productionOrderId'] !== null) {
            $object->setProductionOrderId($data['productionOrderId']);
            unset($data['productionOrderId']);
        }
        elseif (\array_key_exists('productionOrderId', $data) && $data['productionOrderId'] === null) {
            $object->setProductionOrderId(null);
        }
        if (\array_key_exists('productionOrderItemId', $data) && $data['productionOrderItemId'] !== null) {
            $object->setProductionOrderItemId($data['productionOrderItemId']);
            unset($data['productionOrderItemId']);
        }
        elseif (\array_key_exists('productionOrderItemId', $data) && $data['productionOrderItemId'] === null) {
            $object->setProductionOrderItemId(null);
        }
        if (\array_key_exists('proposedDate', $data) && $data['proposedDate'] !== null) {
            $object->setProposedDate($data['proposedDate']);
            unset($data['proposedDate']);
        }
        elseif (\array_key_exists('proposedDate', $data) && $data['proposedDate'] === null) {
            $object->setProposedDate(null);
        }
        if (\array_key_exists('proposedQuantity', $data) && $data['proposedQuantity'] !== null) {
            $object->setProposedQuantity($data['proposedQuantity']);
            unset($data['proposedQuantity']);
        }
        elseif (\array_key_exists('proposedQuantity', $data) && $data['proposedQuantity'] === null) {
            $object->setProposedQuantity(null);
        }
        if (\array_key_exists('purchaseOrderId', $data) && $data['purchaseOrderId'] !== null) {
            $object->setPurchaseOrderId($data['purchaseOrderId']);
            unset($data['purchaseOrderId']);
        }
        elseif (\array_key_exists('purchaseOrderId', $data) && $data['purchaseOrderId'] === null) {
            $object->setPurchaseOrderId(null);
        }
        if (\array_key_exists('requirementQuantity', $data) && $data['requirementQuantity'] !== null) {
            $object->setRequirementQuantity($data['requirementQuantity']);
            unset($data['requirementQuantity']);
        }
        elseif (\array_key_exists('requirementQuantity', $data) && $data['requirementQuantity'] === null) {
            $object->setRequirementQuantity(null);
        }
        if (\array_key_exists('requisitionNumber', $data) && $data['requisitionNumber'] !== null) {
            $object->setRequisitionNumber($data['requisitionNumber']);
            unset($data['requisitionNumber']);
        }
        elseif (\array_key_exists('requisitionNumber', $data) && $data['requisitionNumber'] === null) {
            $object->setRequisitionNumber(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_1 = [];
            foreach ($data['statusHistory'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_1);
            unset($data['statusHistory']);
        }
        elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('supplierId', $data) && $data['supplierId'] !== null) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        }
        elseif (\array_key_exists('supplierId', $data) && $data['supplierId'] === null) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
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
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('packagingUnitToOrderId') && null !== $data->getPackagingUnitToOrderId()) {
            $dataArray['packagingUnitToOrderId'] = $data->getPackagingUnitToOrderId();
        }
        if ($data->isInitialized('proposedQuantity') && null !== $data->getProposedQuantity()) {
            $dataArray['proposedQuantity'] = $data->getProposedQuantity();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('supplierId') && null !== $data->getSupplierId()) {
            $dataArray['supplierId'] = $data->getSupplierId();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseRequisition::class => false];
    }
}