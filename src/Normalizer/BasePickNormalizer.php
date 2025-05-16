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

class BasePickNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BasePick::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BasePick::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BasePick;
        if ($data === null || \is_array($data) === false) {
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
        if (\array_key_exists('batchNumber', $data)) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        if (\array_key_exists('confirmedByUserId', $data)) {
            $object->setConfirmedByUserId($data['confirmedByUserId']);
            unset($data['confirmedByUserId']);
        }
        if (\array_key_exists('confirmedDate', $data)) {
            $object->setConfirmedDate($data['confirmedDate']);
            unset($data['confirmedDate']);
        }
        if (\array_key_exists('internalTransportReferenceId', $data)) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('serialNumbers', $data)) {
            $values = [];
            foreach ($data['serialNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setSerialNumbers($values);
            unset($data['serialNumbers']);
        }
        if (\array_key_exists('storagePlaceId', $data)) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        }
        if (\array_key_exists('bookedDate', $data)) {
            $object->setBookedDate($data['bookedDate']);
            unset($data['bookedDate']);
        }
        if (\array_key_exists('orderItemId', $data)) {
            $object->setOrderItemId($data['orderItemId']);
            unset($data['orderItemId']);
        }
        if (\array_key_exists('sourceInternalTransportReferenceId', $data)) {
            $object->setSourceInternalTransportReferenceId($data['sourceInternalTransportReferenceId']);
            unset($data['sourceInternalTransportReferenceId']);
        }
        if (\array_key_exists('sourceStoragePlaceId', $data)) {
            $object->setSourceStoragePlaceId($data['sourceStoragePlaceId']);
            unset($data['sourceStoragePlaceId']);
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
        if ($data->isInitialized('batchNumber') && $data->getBatchNumber() !== null) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('confirmedByUserId') && $data->getConfirmedByUserId() !== null) {
            $dataArray['confirmedByUserId'] = $data->getConfirmedByUserId();
        }
        if ($data->isInitialized('confirmedDate') && $data->getConfirmedDate() !== null) {
            $dataArray['confirmedDate'] = $data->getConfirmedDate();
        }
        if ($data->isInitialized('internalTransportReferenceId') && $data->getInternalTransportReferenceId() !== null) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('quantity') && $data->getQuantity() !== null) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('serialNumbers') && $data->getSerialNumbers() !== null) {
            $values = [];
            foreach ($data->getSerialNumbers() as $value) {
                $values[] = $value;
            }
            $dataArray['serialNumbers'] = $values;
        }
        if ($data->isInitialized('storagePlaceId') && $data->getStoragePlaceId() !== null) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
        }
        if ($data->isInitialized('bookedDate') && $data->getBookedDate() !== null) {
            $dataArray['bookedDate'] = $data->getBookedDate();
        }
        if ($data->isInitialized('orderItemId') && $data->getOrderItemId() !== null) {
            $dataArray['orderItemId'] = $data->getOrderItemId();
        }
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
        return [\Webhubworks\WeclappApiCore\Model\BasePick::class => false];
    }
}
