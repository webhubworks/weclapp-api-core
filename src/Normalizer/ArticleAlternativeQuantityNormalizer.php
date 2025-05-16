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

class ArticleAlternativeQuantityNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity;
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
        if (\array_key_exists('minimumOrderQuantity', $data) && $data['minimumOrderQuantity'] !== null) {
            $object->setMinimumOrderQuantity($data['minimumOrderQuantity']);
            unset($data['minimumOrderQuantity']);
        } elseif (\array_key_exists('minimumOrderQuantity', $data) && $data['minimumOrderQuantity'] === null) {
            $object->setMinimumOrderQuantity(null);
        }
        if (\array_key_exists('minimumStockQuantity', $data) && $data['minimumStockQuantity'] !== null) {
            $object->setMinimumStockQuantity($data['minimumStockQuantity']);
            unset($data['minimumStockQuantity']);
        } elseif (\array_key_exists('minimumStockQuantity', $data) && $data['minimumStockQuantity'] === null) {
            $object->setMinimumStockQuantity(null);
        }
        if (\array_key_exists('targetStockQuantity', $data) && $data['targetStockQuantity'] !== null) {
            $object->setTargetStockQuantity($data['targetStockQuantity']);
            unset($data['targetStockQuantity']);
        } elseif (\array_key_exists('targetStockQuantity', $data) && $data['targetStockQuantity'] === null) {
            $object->setTargetStockQuantity(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        if (\array_key_exists('warehouseName', $data) && $data['warehouseName'] !== null) {
            $object->setWarehouseName($data['warehouseName']);
            unset($data['warehouseName']);
        } elseif (\array_key_exists('warehouseName', $data) && $data['warehouseName'] === null) {
            $object->setWarehouseName(null);
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
        if ($data->isInitialized('minimumOrderQuantity') && $data->getMinimumOrderQuantity() !== null) {
            $dataArray['minimumOrderQuantity'] = $data->getMinimumOrderQuantity();
        }
        if ($data->isInitialized('minimumStockQuantity') && $data->getMinimumStockQuantity() !== null) {
            $dataArray['minimumStockQuantity'] = $data->getMinimumStockQuantity();
        }
        if ($data->isInitialized('targetStockQuantity') && $data->getTargetStockQuantity() !== null) {
            $dataArray['targetStockQuantity'] = $data->getTargetStockQuantity();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        if ($data->isInitialized('warehouseName') && $data->getWarehouseName() !== null) {
            $dataArray['warehouseName'] = $data->getWarehouseName();
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
        return [\Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class => false];
    }
}
