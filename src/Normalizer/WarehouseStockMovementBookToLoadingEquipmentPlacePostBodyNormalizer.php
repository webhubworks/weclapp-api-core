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

class WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] !== null) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        } elseif (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] === null) {
            $object->setLoadingEquipmentArticleId(null);
        }
        if (\array_key_exists('movementNote', $data) && $data['movementNote'] !== null) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        } elseif (\array_key_exists('movementNote', $data) && $data['movementNote'] === null) {
            $object->setMovementNote(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('sourceInternalTransportReferenceId', $data) && $data['sourceInternalTransportReferenceId'] !== null) {
            $object->setSourceInternalTransportReferenceId($data['sourceInternalTransportReferenceId']);
            unset($data['sourceInternalTransportReferenceId']);
        } elseif (\array_key_exists('sourceInternalTransportReferenceId', $data) && $data['sourceInternalTransportReferenceId'] === null) {
            $object->setSourceInternalTransportReferenceId(null);
        }
        if (\array_key_exists('sourceStoragePlaceId', $data) && $data['sourceStoragePlaceId'] !== null) {
            $object->setSourceStoragePlaceId($data['sourceStoragePlaceId']);
            unset($data['sourceStoragePlaceId']);
        } elseif (\array_key_exists('sourceStoragePlaceId', $data) && $data['sourceStoragePlaceId'] === null) {
            $object->setSourceStoragePlaceId(null);
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
        if ($data->isInitialized('sourceInternalTransportReferenceId') && $data->getSourceInternalTransportReferenceId() !== null) {
            $dataArray['sourceInternalTransportReferenceId'] = $data->getSourceInternalTransportReferenceId();
        }
        if ($data->isInitialized('sourceStoragePlaceId') && $data->getSourceStoragePlaceId() !== null) {
            $dataArray['sourceStoragePlaceId'] = $data->getSourceStoragePlaceId();
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
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody::class => false];
    }
}
