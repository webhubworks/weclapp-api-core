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

class WarehouseNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Warehouse::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Warehouse::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Warehouse;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('standard', $data) && \is_int($data['standard'])) {
            $data['standard'] = (bool) $data['standard'];
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('defaultConsolidationStoragePlaceId', $data) && $data['defaultConsolidationStoragePlaceId'] !== null) {
            $object->setDefaultConsolidationStoragePlaceId($data['defaultConsolidationStoragePlaceId']);
            unset($data['defaultConsolidationStoragePlaceId']);
        } elseif (\array_key_exists('defaultConsolidationStoragePlaceId', $data) && $data['defaultConsolidationStoragePlaceId'] === null) {
            $object->setDefaultConsolidationStoragePlaceId(null);
        }
        if (\array_key_exists('defaultProductionStoragePlaceId', $data) && $data['defaultProductionStoragePlaceId'] !== null) {
            $object->setDefaultProductionStoragePlaceId($data['defaultProductionStoragePlaceId']);
            unset($data['defaultProductionStoragePlaceId']);
        } elseif (\array_key_exists('defaultProductionStoragePlaceId', $data) && $data['defaultProductionStoragePlaceId'] === null) {
            $object->setDefaultProductionStoragePlaceId(null);
        }
        if (\array_key_exists('defaultReturnsStoragePlaceId', $data) && $data['defaultReturnsStoragePlaceId'] !== null) {
            $object->setDefaultReturnsStoragePlaceId($data['defaultReturnsStoragePlaceId']);
            unset($data['defaultReturnsStoragePlaceId']);
        } elseif (\array_key_exists('defaultReturnsStoragePlaceId', $data) && $data['defaultReturnsStoragePlaceId'] === null) {
            $object->setDefaultReturnsStoragePlaceId(null);
        }
        if (\array_key_exists('defaultStoragePlaceId', $data) && $data['defaultStoragePlaceId'] !== null) {
            $object->setDefaultStoragePlaceId($data['defaultStoragePlaceId']);
            unset($data['defaultStoragePlaceId']);
        } elseif (\array_key_exists('defaultStoragePlaceId', $data) && $data['defaultStoragePlaceId'] === null) {
            $object->setDefaultStoragePlaceId(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context));
            unset($data['deliveryAddress']);
        } elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('directBookingInternalTransportReferenceId', $data) && $data['directBookingInternalTransportReferenceId'] !== null) {
            $object->setDirectBookingInternalTransportReferenceId($data['directBookingInternalTransportReferenceId']);
            unset($data['directBookingInternalTransportReferenceId']);
        } elseif (\array_key_exists('directBookingInternalTransportReferenceId', $data) && $data['directBookingInternalTransportReferenceId'] === null) {
            $object->setDirectBookingInternalTransportReferenceId(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context));
            unset($data['invoiceAddress']);
        } elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('loadingEquipmentStoragePlace', $data) && $data['loadingEquipmentStoragePlace'] !== null) {
            $object->setLoadingEquipmentStoragePlace($this->denormalizer->denormalize($data['loadingEquipmentStoragePlace'], \Webhubworks\WeclappApiCore\Model\MinimalStoragePlace::class, 'json', $context));
            unset($data['loadingEquipmentStoragePlace']);
        } elseif (\array_key_exists('loadingEquipmentStoragePlace', $data) && $data['loadingEquipmentStoragePlace'] === null) {
            $object->setLoadingEquipmentStoragePlace(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('primaryAddress', $data) && $data['primaryAddress'] !== null) {
            $object->setPrimaryAddress($this->denormalizer->denormalize($data['primaryAddress'], \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context));
            unset($data['primaryAddress']);
        } elseif (\array_key_exists('primaryAddress', $data) && $data['primaryAddress'] === null) {
            $object->setPrimaryAddress(null);
        }
        if (\array_key_exists('shortIdentifier', $data) && $data['shortIdentifier'] !== null) {
            $object->setShortIdentifier($data['shortIdentifier']);
            unset($data['shortIdentifier']);
        } elseif (\array_key_exists('shortIdentifier', $data) && $data['shortIdentifier'] === null) {
            $object->setShortIdentifier(null);
        }
        if (\array_key_exists('standard', $data) && $data['standard'] !== null) {
            $object->setStandard($data['standard']);
            unset($data['standard']);
        } elseif (\array_key_exists('standard', $data) && $data['standard'] === null) {
            $object->setStandard(null);
        }
        if (\array_key_exists('transitStoragePlace', $data) && $data['transitStoragePlace'] !== null) {
            $object->setTransitStoragePlace($this->denormalizer->denormalize($data['transitStoragePlace'], \Webhubworks\WeclappApiCore\Model\MinimalStoragePlace::class, 'json', $context));
            unset($data['transitStoragePlace']);
        } elseif (\array_key_exists('transitStoragePlace', $data) && $data['transitStoragePlace'] === null) {
            $object->setTransitStoragePlace(null);
        }
        if (\array_key_exists('warehouseType', $data) && $data['warehouseType'] !== null) {
            $object->setWarehouseType($data['warehouseType']);
            unset($data['warehouseType']);
        } elseif (\array_key_exists('warehouseType', $data) && $data['warehouseType'] === null) {
            $object->setWarehouseType(null);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('defaultConsolidationStoragePlaceId') && $data->getDefaultConsolidationStoragePlaceId() !== null) {
            $dataArray['defaultConsolidationStoragePlaceId'] = $data->getDefaultConsolidationStoragePlaceId();
        }
        if ($data->isInitialized('defaultProductionStoragePlaceId') && $data->getDefaultProductionStoragePlaceId() !== null) {
            $dataArray['defaultProductionStoragePlaceId'] = $data->getDefaultProductionStoragePlaceId();
        }
        if ($data->isInitialized('defaultReturnsStoragePlaceId') && $data->getDefaultReturnsStoragePlaceId() !== null) {
            $dataArray['defaultReturnsStoragePlaceId'] = $data->getDefaultReturnsStoragePlaceId();
        }
        if ($data->isInitialized('defaultStoragePlaceId') && $data->getDefaultStoragePlaceId() !== null) {
            $dataArray['defaultStoragePlaceId'] = $data->getDefaultStoragePlaceId();
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('directBookingInternalTransportReferenceId') && $data->getDirectBookingInternalTransportReferenceId() !== null) {
            $dataArray['directBookingInternalTransportReferenceId'] = $data->getDirectBookingInternalTransportReferenceId();
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('loadingEquipmentStoragePlace') && $data->getLoadingEquipmentStoragePlace() !== null) {
            $dataArray['loadingEquipmentStoragePlace'] = $this->normalizer->normalize($data->getLoadingEquipmentStoragePlace(), 'json', $context);
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('primaryAddress') && $data->getPrimaryAddress() !== null) {
            $dataArray['primaryAddress'] = $this->normalizer->normalize($data->getPrimaryAddress(), 'json', $context);
        }
        if ($data->isInitialized('shortIdentifier') && $data->getShortIdentifier() !== null) {
            $dataArray['shortIdentifier'] = $data->getShortIdentifier();
        }
        if ($data->isInitialized('standard') && $data->getStandard() !== null) {
            $dataArray['standard'] = $data->getStandard();
        }
        if ($data->isInitialized('transitStoragePlace') && $data->getTransitStoragePlace() !== null) {
            $dataArray['transitStoragePlace'] = $this->normalizer->normalize($data->getTransitStoragePlace(), 'json', $context);
        }
        if ($data->isInitialized('warehouseType') && $data->getWarehouseType() !== null) {
            $dataArray['warehouseType'] = $data->getWarehouseType();
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
        return [\Webhubworks\WeclappApiCore\Model\Warehouse::class => false];
    }
}
