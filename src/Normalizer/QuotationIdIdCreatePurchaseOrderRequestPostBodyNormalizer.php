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

class QuotationIdIdCreatePurchaseOrderRequestPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody;
        if (\array_key_exists('mergeItems', $data) && \is_int($data['mergeItems'])) {
            $data['mergeItems'] = (bool) $data['mergeItems'];
        }
        if (\array_key_exists('useItemQuantity', $data) && \is_int($data['useItemQuantity'])) {
            $data['useItemQuantity'] = (bool) $data['useItemQuantity'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('mergeItems', $data)) {
            $object->setMergeItems($data['mergeItems']);
            unset($data['mergeItems']);
        }
        if (\array_key_exists('quotationItemIds', $data)) {
            $values = [];
            foreach ($data['quotationItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setQuotationItemIds($values);
            unset($data['quotationItemIds']);
        }
        if (\array_key_exists('requestType', $data)) {
            $object->setRequestType($data['requestType']);
            unset($data['requestType']);
        }
        if (\array_key_exists('supplierIds', $data)) {
            $values_1 = [];
            foreach ($data['supplierIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSupplierIds($values_1);
            unset($data['supplierIds']);
        }
        if (\array_key_exists('useItemQuantity', $data)) {
            $object->setUseItemQuantity($data['useItemQuantity']);
            unset($data['useItemQuantity']);
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
        if ($data->isInitialized('mergeItems') && $data->getMergeItems() !== null) {
            $dataArray['mergeItems'] = $data->getMergeItems();
        }
        if ($data->isInitialized('quotationItemIds') && $data->getQuotationItemIds() !== null) {
            $values = [];
            foreach ($data->getQuotationItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['quotationItemIds'] = $values;
        }
        $dataArray['requestType'] = $data->getRequestType();
        if ($data->isInitialized('supplierIds') && $data->getSupplierIds() !== null) {
            $values_1 = [];
            foreach ($data->getSupplierIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['supplierIds'] = $values_1;
        }
        if ($data->isInitialized('useItemQuantity') && $data->getUseItemQuantity() !== null) {
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
