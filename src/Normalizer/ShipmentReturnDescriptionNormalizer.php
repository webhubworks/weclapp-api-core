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

class ShipmentReturnDescriptionNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription;
        if (\array_key_exists('customerReturn', $data) && \is_int($data['customerReturn'])) {
            $data['customerReturn'] = (bool) $data['customerReturn'];
        }
        if (\array_key_exists('supplierReturn', $data) && \is_int($data['supplierReturn'])) {
            $data['supplierReturn'] = (bool) $data['supplierReturn'];
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
        if (\array_key_exists('customerReturn', $data) && $data['customerReturn'] !== null) {
            $object->setCustomerReturn($data['customerReturn']);
            unset($data['customerReturn']);
        } elseif (\array_key_exists('customerReturn', $data) && $data['customerReturn'] === null) {
            $object->setCustomerReturn(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
            unset($data['position']);
        } elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
        }
        if (\array_key_exists('supplierReturn', $data) && $data['supplierReturn'] !== null) {
            $object->setSupplierReturn($data['supplierReturn']);
            unset($data['supplierReturn']);
        } elseif (\array_key_exists('supplierReturn', $data) && $data['supplierReturn'] === null) {
            $object->setSupplierReturn(null);
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
        if ($data->isInitialized('customerReturn') && $data->getCustomerReturn() !== null) {
            $dataArray['customerReturn'] = $data->getCustomerReturn();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('position') && $data->getPosition() !== null) {
            $dataArray['position'] = $data->getPosition();
        }
        if ($data->isInitialized('supplierReturn') && $data->getSupplierReturn() !== null) {
            $dataArray['supplierReturn'] = $data->getSupplierReturn();
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
        return [\Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription::class => false];
    }
}
