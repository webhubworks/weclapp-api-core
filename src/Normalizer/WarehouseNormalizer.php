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
class WarehouseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Warehouse();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('standard', $data) && \is_int($data['standard'])) {
            $data['standard'] = (bool) $data['standard'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('defaultConsolidationStoragePlaceId', $data)) {
            $object->setDefaultConsolidationStoragePlaceId($data['defaultConsolidationStoragePlaceId']);
            unset($data['defaultConsolidationStoragePlaceId']);
        }
        if (\array_key_exists('defaultProductionStoragePlaceId', $data)) {
            $object->setDefaultProductionStoragePlaceId($data['defaultProductionStoragePlaceId']);
            unset($data['defaultProductionStoragePlaceId']);
        }
        if (\array_key_exists('defaultReturnsStoragePlaceId', $data)) {
            $object->setDefaultReturnsStoragePlaceId($data['defaultReturnsStoragePlaceId']);
            unset($data['defaultReturnsStoragePlaceId']);
        }
        if (\array_key_exists('defaultStoragePlaceId', $data)) {
            $object->setDefaultStoragePlaceId($data['defaultStoragePlaceId']);
            unset($data['defaultStoragePlaceId']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('directBookingInternalTransportReferenceId', $data)) {
            $object->setDirectBookingInternalTransportReferenceId($data['directBookingInternalTransportReferenceId']);
            unset($data['directBookingInternalTransportReferenceId']);
        }
        if (\array_key_exists('invoiceAddress', $data)) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        if (\array_key_exists('loadingEquipmentStoragePlace', $data)) {
            $object->setLoadingEquipmentStoragePlace($this->denormalizer->denormalize($data['loadingEquipmentStoragePlace'], \Webhubworks\WeclappApiCore\Model\MinimalStoragePlace::class, 'json', $context));
            unset($data['loadingEquipmentStoragePlace']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('primaryAddress', $data)) {
            $object->setPrimaryAddress($this->denormalizer->denormalize($data['primaryAddress'], \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context));
            unset($data['primaryAddress']);
        }
        if (\array_key_exists('shortIdentifier', $data)) {
            $object->setShortIdentifier($data['shortIdentifier']);
            unset($data['shortIdentifier']);
        }
        if (\array_key_exists('standard', $data)) {
            $object->setStandard($data['standard']);
            unset($data['standard']);
        }
        if (\array_key_exists('transitStoragePlace', $data)) {
            $object->setTransitStoragePlace($this->denormalizer->denormalize($data['transitStoragePlace'], \Webhubworks\WeclappApiCore\Model\MinimalStoragePlace::class, 'json', $context));
            unset($data['transitStoragePlace']);
        }
        if (\array_key_exists('warehouseType', $data)) {
            $object->setWarehouseType($data['warehouseType']);
            unset($data['warehouseType']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('defaultConsolidationStoragePlaceId') && null !== $data->getDefaultConsolidationStoragePlaceId()) {
            $dataArray['defaultConsolidationStoragePlaceId'] = $data->getDefaultConsolidationStoragePlaceId();
        }
        if ($data->isInitialized('defaultProductionStoragePlaceId') && null !== $data->getDefaultProductionStoragePlaceId()) {
            $dataArray['defaultProductionStoragePlaceId'] = $data->getDefaultProductionStoragePlaceId();
        }
        if ($data->isInitialized('defaultReturnsStoragePlaceId') && null !== $data->getDefaultReturnsStoragePlaceId()) {
            $dataArray['defaultReturnsStoragePlaceId'] = $data->getDefaultReturnsStoragePlaceId();
        }
        if ($data->isInitialized('defaultStoragePlaceId') && null !== $data->getDefaultStoragePlaceId()) {
            $dataArray['defaultStoragePlaceId'] = $data->getDefaultStoragePlaceId();
        }
        if ($data->isInitialized('deliveryAddress') && null !== $data->getDeliveryAddress()) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('directBookingInternalTransportReferenceId') && null !== $data->getDirectBookingInternalTransportReferenceId()) {
            $dataArray['directBookingInternalTransportReferenceId'] = $data->getDirectBookingInternalTransportReferenceId();
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('loadingEquipmentStoragePlace') && null !== $data->getLoadingEquipmentStoragePlace()) {
            $dataArray['loadingEquipmentStoragePlace'] = $this->normalizer->normalize($data->getLoadingEquipmentStoragePlace(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('primaryAddress') && null !== $data->getPrimaryAddress()) {
            $dataArray['primaryAddress'] = $this->normalizer->normalize($data->getPrimaryAddress(), 'json', $context);
        }
        if ($data->isInitialized('shortIdentifier') && null !== $data->getShortIdentifier()) {
            $dataArray['shortIdentifier'] = $data->getShortIdentifier();
        }
        if ($data->isInitialized('standard') && null !== $data->getStandard()) {
            $dataArray['standard'] = $data->getStandard();
        }
        if ($data->isInitialized('transitStoragePlace') && null !== $data->getTransitStoragePlace()) {
            $dataArray['transitStoragePlace'] = $this->normalizer->normalize($data->getTransitStoragePlace(), 'json', $context);
        }
        if ($data->isInitialized('warehouseType') && null !== $data->getWarehouseType()) {
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