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
class WarehouseStockMovementBookIncomingMovementPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('articleValuationPrice', $data) && $data['articleValuationPrice'] !== null) {
            $object->setArticleValuationPrice($data['articleValuationPrice']);
            unset($data['articleValuationPrice']);
        }
        elseif (\array_key_exists('articleValuationPrice', $data) && $data['articleValuationPrice'] === null) {
            $object->setArticleValuationPrice(null);
        }
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('batchNumberExpirationDate', $data) && $data['batchNumberExpirationDate'] !== null) {
            $object->setBatchNumberExpirationDate($data['batchNumberExpirationDate']);
            unset($data['batchNumberExpirationDate']);
        }
        elseif (\array_key_exists('batchNumberExpirationDate', $data) && $data['batchNumberExpirationDate'] === null) {
            $object->setBatchNumberExpirationDate(null);
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] !== null) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        elseif (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] === null) {
            $object->setInternalTransportReferenceId(null);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] !== null) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        }
        elseif (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] === null) {
            $object->setLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('movementNote', $data) && $data['movementNote'] !== null) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        }
        elseif (\array_key_exists('movementNote', $data) && $data['movementNote'] === null) {
            $object->setMovementNote(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values_1 = [];
            foreach ($data['serialNumbers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSerialNumbers($values_1);
            unset($data['serialNumbers']);
        }
        elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('targetStoragePlaceId', $data) && $data['targetStoragePlaceId'] !== null) {
            $object->setTargetStoragePlaceId($data['targetStoragePlaceId']);
            unset($data['targetStoragePlaceId']);
        }
        elseif (\array_key_exists('targetStoragePlaceId', $data) && $data['targetStoragePlaceId'] === null) {
            $object->setTargetStoragePlaceId(null);
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
        $dataArray['articleId'] = $data->getArticleId();
        if ($data->isInitialized('articleValuationPrice') && null !== $data->getArticleValuationPrice()) {
            $dataArray['articleValuationPrice'] = $data->getArticleValuationPrice();
        }
        if ($data->isInitialized('batchNumber') && null !== $data->getBatchNumber()) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('batchNumberExpirationDate') && null !== $data->getBatchNumberExpirationDate()) {
            $dataArray['batchNumberExpirationDate'] = $data->getBatchNumberExpirationDate();
        }
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('internalTransportReferenceId') && null !== $data->getInternalTransportReferenceId()) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && null !== $data->getLoadingEquipmentIdentifierId()) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('movementNote') && null !== $data->getMovementNote()) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('serialNumbers') && null !== $data->getSerialNumbers()) {
            $values_1 = [];
            foreach ($data->getSerialNumbers() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['serialNumbers'] = $values_1;
        }
        if ($data->isInitialized('targetStoragePlaceId') && null !== $data->getTargetStoragePlaceId()) {
            $dataArray['targetStoragePlaceId'] = $data->getTargetStoragePlaceId();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody::class => false];
    }
}