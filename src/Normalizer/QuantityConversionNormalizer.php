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

class QuantityConversionNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\QuantityConversion::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\QuantityConversion::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\QuantityConversion;
        if (\array_key_exists('oppositeDirection', $data) && \is_int($data['oppositeDirection'])) {
            $data['oppositeDirection'] = (bool) $data['oppositeDirection'];
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
        if (\array_key_exists('conversionQuantity', $data) && $data['conversionQuantity'] !== null) {
            $object->setConversionQuantity($data['conversionQuantity']);
            unset($data['conversionQuantity']);
        } elseif (\array_key_exists('conversionQuantity', $data) && $data['conversionQuantity'] === null) {
            $object->setConversionQuantity(null);
        }
        if (\array_key_exists('createdUserId', $data) && $data['createdUserId'] !== null) {
            $object->setCreatedUserId($data['createdUserId']);
            unset($data['createdUserId']);
        } elseif (\array_key_exists('createdUserId', $data) && $data['createdUserId'] === null) {
            $object->setCreatedUserId(null);
        }
        if (\array_key_exists('lastEditedUserId', $data) && $data['lastEditedUserId'] !== null) {
            $object->setLastEditedUserId($data['lastEditedUserId']);
            unset($data['lastEditedUserId']);
        } elseif (\array_key_exists('lastEditedUserId', $data) && $data['lastEditedUserId'] === null) {
            $object->setLastEditedUserId(null);
        }
        if (\array_key_exists('oppositeDirection', $data) && $data['oppositeDirection'] !== null) {
            $object->setOppositeDirection($data['oppositeDirection']);
            unset($data['oppositeDirection']);
        } elseif (\array_key_exists('oppositeDirection', $data) && $data['oppositeDirection'] === null) {
            $object->setOppositeDirection(null);
        }
        if (\array_key_exists('unitId', $data) && $data['unitId'] !== null) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        } elseif (\array_key_exists('unitId', $data) && $data['unitId'] === null) {
            $object->setUnitId(null);
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
        if ($data->isInitialized('conversionQuantity') && $data->getConversionQuantity() !== null) {
            $dataArray['conversionQuantity'] = $data->getConversionQuantity();
        }
        if ($data->isInitialized('createdUserId') && $data->getCreatedUserId() !== null) {
            $dataArray['createdUserId'] = $data->getCreatedUserId();
        }
        if ($data->isInitialized('lastEditedUserId') && $data->getLastEditedUserId() !== null) {
            $dataArray['lastEditedUserId'] = $data->getLastEditedUserId();
        }
        if ($data->isInitialized('oppositeDirection') && $data->getOppositeDirection() !== null) {
            $dataArray['oppositeDirection'] = $data->getOppositeDirection();
        }
        if ($data->isInitialized('unitId') && $data->getUnitId() !== null) {
            $dataArray['unitId'] = $data->getUnitId();
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
        return [\Webhubworks\WeclappApiCore\Model\QuantityConversion::class => false];
    }
}
