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
class QuotationIdIdCreatePurchaseOrderRequestPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody();
        if (\array_key_exists('mergeItems', $data) && \is_int($data['mergeItems'])) {
            $data['mergeItems'] = (bool) $data['mergeItems'];
        }
        if (\array_key_exists('useItemQuantity', $data) && \is_int($data['useItemQuantity'])) {
            $data['useItemQuantity'] = (bool) $data['useItemQuantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mergeItems', $data) && $data['mergeItems'] !== null) {
            $object->setMergeItems($data['mergeItems']);
            unset($data['mergeItems']);
        }
        elseif (\array_key_exists('mergeItems', $data) && $data['mergeItems'] === null) {
            $object->setMergeItems(null);
        }
        if (\array_key_exists('quotationItemIds', $data) && $data['quotationItemIds'] !== null) {
            $values = [];
            foreach ($data['quotationItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setQuotationItemIds($values);
            unset($data['quotationItemIds']);
        }
        elseif (\array_key_exists('quotationItemIds', $data) && $data['quotationItemIds'] === null) {
            $object->setQuotationItemIds(null);
        }
        if (\array_key_exists('requestType', $data) && $data['requestType'] !== null) {
            $object->setRequestType($data['requestType']);
            unset($data['requestType']);
        }
        elseif (\array_key_exists('requestType', $data) && $data['requestType'] === null) {
            $object->setRequestType(null);
        }
        if (\array_key_exists('supplierIds', $data) && $data['supplierIds'] !== null) {
            $values_1 = [];
            foreach ($data['supplierIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSupplierIds($values_1);
            unset($data['supplierIds']);
        }
        elseif (\array_key_exists('supplierIds', $data) && $data['supplierIds'] === null) {
            $object->setSupplierIds(null);
        }
        if (\array_key_exists('useItemQuantity', $data) && $data['useItemQuantity'] !== null) {
            $object->setUseItemQuantity($data['useItemQuantity']);
            unset($data['useItemQuantity']);
        }
        elseif (\array_key_exists('useItemQuantity', $data) && $data['useItemQuantity'] === null) {
            $object->setUseItemQuantity(null);
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
        if ($data->isInitialized('mergeItems') && null !== $data->getMergeItems()) {
            $dataArray['mergeItems'] = $data->getMergeItems();
        }
        if ($data->isInitialized('quotationItemIds') && null !== $data->getQuotationItemIds()) {
            $values = [];
            foreach ($data->getQuotationItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['quotationItemIds'] = $values;
        }
        $dataArray['requestType'] = $data->getRequestType();
        if ($data->isInitialized('supplierIds') && null !== $data->getSupplierIds()) {
            $values_1 = [];
            foreach ($data->getSupplierIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['supplierIds'] = $values_1;
        }
        if ($data->isInitialized('useItemQuantity') && null !== $data->getUseItemQuantity()) {
            $dataArray['useItemQuantity'] = $data->getUseItemQuantity();
        }
        $dataArray['warehouseId'] = $data->getWarehouseId();
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody::class => false];
    }
}