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
class WarehouseStockMovementBookOntoInternalTransportReferencePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody();
        if (\array_key_exists('bookFromLoadingEquipmentPlace', $data) && \is_int($data['bookFromLoadingEquipmentPlace'])) {
            $data['bookFromLoadingEquipmentPlace'] = (bool) $data['bookFromLoadingEquipmentPlace'];
        }
        if (\array_key_exists('bookLoadingEquipmentOnDissolveOfPreferred', $data) && \is_int($data['bookLoadingEquipmentOnDissolveOfPreferred'])) {
            $data['bookLoadingEquipmentOnDissolveOfPreferred'] = (bool) $data['bookLoadingEquipmentOnDissolveOfPreferred'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('articleId', $data)) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        if (\array_key_exists('baseArticleQuantity', $data)) {
            $object->setBaseArticleQuantity($data['baseArticleQuantity']);
            unset($data['baseArticleQuantity']);
        }
        if (\array_key_exists('batchNumber', $data)) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        if (\array_key_exists('bookFromLoadingEquipmentPlace', $data)) {
            $object->setBookFromLoadingEquipmentPlace($data['bookFromLoadingEquipmentPlace']);
            unset($data['bookFromLoadingEquipmentPlace']);
        }
        if (\array_key_exists('bookLoadingEquipmentOnDissolveOfPreferred', $data)) {
            $object->setBookLoadingEquipmentOnDissolveOfPreferred($data['bookLoadingEquipmentOnDissolveOfPreferred']);
            unset($data['bookLoadingEquipmentOnDissolveOfPreferred']);
        }
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data)) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data)) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        }
        if (\array_key_exists('movementNote', $data)) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        }
        if (\array_key_exists('serialNumbers', $data)) {
            $values_1 = [];
            foreach ($data['serialNumbers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSerialNumbers($values_1);
            unset($data['serialNumbers']);
        }
        if (\array_key_exists('sourceInternalTransportReferenceId', $data)) {
            $object->setSourceInternalTransportReferenceId($data['sourceInternalTransportReferenceId']);
            unset($data['sourceInternalTransportReferenceId']);
        }
        if (\array_key_exists('sourceStoragePlaceId', $data)) {
            $object->setSourceStoragePlaceId($data['sourceStoragePlaceId']);
            unset($data['sourceStoragePlaceId']);
        }
        if (\array_key_exists('targetInternalTransportReferenceId', $data)) {
            $object->setTargetInternalTransportReferenceId($data['targetInternalTransportReferenceId']);
            unset($data['targetInternalTransportReferenceId']);
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
        $dataArray['baseArticleQuantity'] = $data->getBaseArticleQuantity();
        if ($data->isInitialized('batchNumber') && null !== $data->getBatchNumber()) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('bookFromLoadingEquipmentPlace') && null !== $data->getBookFromLoadingEquipmentPlace()) {
            $dataArray['bookFromLoadingEquipmentPlace'] = $data->getBookFromLoadingEquipmentPlace();
        }
        if ($data->isInitialized('bookLoadingEquipmentOnDissolveOfPreferred') && null !== $data->getBookLoadingEquipmentOnDissolveOfPreferred()) {
            $dataArray['bookLoadingEquipmentOnDissolveOfPreferred'] = $data->getBookLoadingEquipmentOnDissolveOfPreferred();
        }
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('loadingEquipmentArticleId') && null !== $data->getLoadingEquipmentArticleId()) {
            $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && null !== $data->getLoadingEquipmentIdentifierId()) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('movementNote') && null !== $data->getMovementNote()) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        if ($data->isInitialized('serialNumbers') && null !== $data->getSerialNumbers()) {
            $values_1 = [];
            foreach ($data->getSerialNumbers() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['serialNumbers'] = $values_1;
        }
        if ($data->isInitialized('sourceInternalTransportReferenceId') && null !== $data->getSourceInternalTransportReferenceId()) {
            $dataArray['sourceInternalTransportReferenceId'] = $data->getSourceInternalTransportReferenceId();
        }
        if ($data->isInitialized('sourceStoragePlaceId') && null !== $data->getSourceStoragePlaceId()) {
            $dataArray['sourceStoragePlaceId'] = $data->getSourceStoragePlaceId();
        }
        if ($data->isInitialized('targetInternalTransportReferenceId') && null !== $data->getTargetInternalTransportReferenceId()) {
            $dataArray['targetInternalTransportReferenceId'] = $data->getTargetInternalTransportReferenceId();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class => false];
    }
}