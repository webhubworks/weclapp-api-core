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
class WarehouseStockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStock::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStock::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStock();
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('batchNumberId', $data) && $data['batchNumberId'] !== null) {
            $object->setBatchNumberId($data['batchNumberId']);
            unset($data['batchNumberId']);
        }
        elseif (\array_key_exists('batchNumberId', $data) && $data['batchNumberId'] === null) {
            $object->setBatchNumberId(null);
        }
        if (\array_key_exists('inboundDate', $data) && $data['inboundDate'] !== null) {
            $object->setInboundDate($data['inboundDate']);
            unset($data['inboundDate']);
        }
        elseif (\array_key_exists('inboundDate', $data) && $data['inboundDate'] === null) {
            $object->setInboundDate(null);
        }
        if (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] !== null) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        elseif (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] === null) {
            $object->setInternalTransportReferenceId(null);
        }
        if (\array_key_exists('packagingUnits', $data) && $data['packagingUnits'] !== null) {
            $values = [];
            foreach ($data['packagingUnits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PackagingUnit::class, 'json', $context);
            }
            $object->setPackagingUnits($values);
            unset($data['packagingUnits']);
        }
        elseif (\array_key_exists('packagingUnits', $data) && $data['packagingUnits'] === null) {
            $object->setPackagingUnits(null);
        }
        if (\array_key_exists('picks', $data) && $data['picks'] !== null) {
            $values_1 = [];
            foreach ($data['picks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPicks($values_1);
            unset($data['picks']);
        }
        elseif (\array_key_exists('picks', $data) && $data['picks'] === null) {
            $object->setPicks(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values_2 = [];
            foreach ($data['serialNumbers'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSerialNumbers($values_2);
            unset($data['serialNumbers']);
        }
        elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        }
        elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
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
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('batchNumberId') && null !== $data->getBatchNumberId()) {
            $dataArray['batchNumberId'] = $data->getBatchNumberId();
        }
        if ($data->isInitialized('inboundDate') && null !== $data->getInboundDate()) {
            $dataArray['inboundDate'] = $data->getInboundDate();
        }
        if ($data->isInitialized('internalTransportReferenceId') && null !== $data->getInternalTransportReferenceId()) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('packagingUnits') && null !== $data->getPackagingUnits()) {
            $values = [];
            foreach ($data->getPackagingUnits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['packagingUnits'] = $values;
        }
        if ($data->isInitialized('picks') && null !== $data->getPicks()) {
            $values_1 = [];
            foreach ($data->getPicks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['picks'] = $values_1;
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('salesOrderItemId') && null !== $data->getSalesOrderItemId()) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        if ($data->isInitialized('serialNumbers') && null !== $data->getSerialNumbers()) {
            $values_2 = [];
            foreach ($data->getSerialNumbers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['serialNumbers'] = $values_2;
        }
        if ($data->isInitialized('storagePlaceId') && null !== $data->getStoragePlaceId()) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStock::class => false];
    }
}