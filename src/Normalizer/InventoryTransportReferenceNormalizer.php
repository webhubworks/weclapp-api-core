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

class InventoryTransportReferenceNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\InventoryTransportReference::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\InventoryTransportReference::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\InventoryTransportReference;
        if (\array_key_exists('manualReference', $data) && \is_int($data['manualReference'])) {
            $data['manualReference'] = (bool) $data['manualReference'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('internalTransportNumber', $data) && $data['internalTransportNumber'] !== null) {
            $object->setInternalTransportNumber($data['internalTransportNumber']);
            unset($data['internalTransportNumber']);
        } elseif (\array_key_exists('internalTransportNumber', $data) && $data['internalTransportNumber'] === null) {
            $object->setInternalTransportNumber(null);
        }
        if (\array_key_exists('inventoryId', $data) && $data['inventoryId'] !== null) {
            $object->setInventoryId($data['inventoryId']);
            unset($data['inventoryId']);
        } elseif (\array_key_exists('inventoryId', $data) && $data['inventoryId'] === null) {
            $object->setInventoryId(null);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] !== null) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        } elseif (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] === null) {
            $object->setLoadingEquipmentArticleId(null);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] !== null) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        } elseif (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] === null) {
            $object->setLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('manualReference', $data) && $data['manualReference'] !== null) {
            $object->setManualReference($data['manualReference']);
            unset($data['manualReference']);
        } elseif (\array_key_exists('manualReference', $data) && $data['manualReference'] === null) {
            $object->setManualReference(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($data->isInitialized('internalTransportNumber') && $data->getInternalTransportNumber() !== null) {
            $dataArray['internalTransportNumber'] = $data->getInternalTransportNumber();
        }
        if ($data->isInitialized('inventoryId') && $data->getInventoryId() !== null) {
            $dataArray['inventoryId'] = $data->getInventoryId();
        }
        if ($data->isInitialized('loadingEquipmentArticleId') && $data->getLoadingEquipmentArticleId() !== null) {
            $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && $data->getLoadingEquipmentIdentifierId() !== null) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('manualReference') && $data->getManualReference() !== null) {
            $dataArray['manualReference'] = $data->getManualReference();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\InventoryTransportReference::class => false];
    }
}
