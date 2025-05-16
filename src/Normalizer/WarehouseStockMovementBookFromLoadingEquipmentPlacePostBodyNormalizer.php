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
class WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] !== null) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        }
        elseif (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] === null) {
            $object->setLoadingEquipmentArticleId(null);
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
        if (\array_key_exists('targetInternalTransportReferenceId', $data) && $data['targetInternalTransportReferenceId'] !== null) {
            $object->setTargetInternalTransportReferenceId($data['targetInternalTransportReferenceId']);
            unset($data['targetInternalTransportReferenceId']);
        }
        elseif (\array_key_exists('targetInternalTransportReferenceId', $data) && $data['targetInternalTransportReferenceId'] === null) {
            $object->setTargetInternalTransportReferenceId(null);
        }
        if (\array_key_exists('targetStoragePlaceId', $data) && $data['targetStoragePlaceId'] !== null) {
            $object->setTargetStoragePlaceId($data['targetStoragePlaceId']);
            unset($data['targetStoragePlaceId']);
        }
        elseif (\array_key_exists('targetStoragePlaceId', $data) && $data['targetStoragePlaceId'] === null) {
            $object->setTargetStoragePlaceId(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        if ($data->isInitialized('movementNote') && null !== $data->getMovementNote()) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('targetInternalTransportReferenceId') && null !== $data->getTargetInternalTransportReferenceId()) {
            $dataArray['targetInternalTransportReferenceId'] = $data->getTargetInternalTransportReferenceId();
        }
        if ($data->isInitialized('targetStoragePlaceId') && null !== $data->getTargetStoragePlaceId()) {
            $dataArray['targetStoragePlaceId'] = $data->getTargetStoragePlaceId();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody::class => false];
    }
}