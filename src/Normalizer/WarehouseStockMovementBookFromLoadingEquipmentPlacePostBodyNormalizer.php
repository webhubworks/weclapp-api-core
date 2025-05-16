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

class WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data)) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        }
        if (\array_key_exists('movementNote', $data)) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('targetInternalTransportReferenceId', $data)) {
            $object->setTargetInternalTransportReferenceId($data['targetInternalTransportReferenceId']);
            unset($data['targetInternalTransportReferenceId']);
        }
        if (\array_key_exists('targetStoragePlaceId', $data)) {
            $object->setTargetStoragePlaceId($data['targetStoragePlaceId']);
            unset($data['targetStoragePlaceId']);
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
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        if ($data->isInitialized('movementNote') && $data->getMovementNote() !== null) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        $dataArray['quantity'] = $data->getQuantity();
        if ($data->isInitialized('targetInternalTransportReferenceId') && $data->getTargetInternalTransportReferenceId() !== null) {
            $dataArray['targetInternalTransportReferenceId'] = $data->getTargetInternalTransportReferenceId();
        }
        if ($data->isInitialized('targetStoragePlaceId') && $data->getTargetStoragePlaceId() !== null) {
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
