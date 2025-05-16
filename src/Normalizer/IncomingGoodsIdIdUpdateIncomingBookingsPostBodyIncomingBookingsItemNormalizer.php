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

class IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem;
        if (\array_key_exists('bookIntoWarehouse', $data) && \is_int($data['bookIntoWarehouse'])) {
            $data['bookIntoWarehouse'] = (bool) $data['bookIntoWarehouse'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('articleValuationPrice', $data)) {
            $object->setArticleValuationPrice($data['articleValuationPrice']);
            unset($data['articleValuationPrice']);
        }
        if (\array_key_exists('batchNumber', $data)) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        if (\array_key_exists('bookIntoWarehouse', $data)) {
            $object->setBookIntoWarehouse($data['bookIntoWarehouse']);
            unset($data['bookIntoWarehouse']);
        }
        if (\array_key_exists('confirmedByUserId', $data)) {
            $object->setConfirmedByUserId($data['confirmedByUserId']);
            unset($data['confirmedByUserId']);
        }
        if (\array_key_exists('confirmedByUserIdDeprecated', $data)) {
            $object->setConfirmedByUserIdDeprecated($data['confirmedByUserIdDeprecated']);
            unset($data['confirmedByUserIdDeprecated']);
        }
        if (\array_key_exists('confirmedDate', $data)) {
            $object->setConfirmedDate($data['confirmedDate']);
            unset($data['confirmedDate']);
        }
        if (\array_key_exists('confirmedDateDeprecated', $data)) {
            $object->setConfirmedDateDeprecated($data['confirmedDateDeprecated']);
            unset($data['confirmedDateDeprecated']);
        }
        if (\array_key_exists('confirmedQuantityDeprecated', $data)) {
            $object->setConfirmedQuantityDeprecated($data['confirmedQuantityDeprecated']);
            unset($data['confirmedQuantityDeprecated']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('expirationDate', $data)) {
            $object->setExpirationDate($data['expirationDate']);
            unset($data['expirationDate']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('incomingGoodsItemId', $data)) {
            $object->setIncomingGoodsItemId($data['incomingGoodsItemId']);
            unset($data['incomingGoodsItemId']);
        }
        if (\array_key_exists('internalTransportReferenceId', $data)) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data)) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
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
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
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
        if ($data->isInitialized('articleValuationPrice') && $data->getArticleValuationPrice() !== null) {
            $dataArray['articleValuationPrice'] = $data->getArticleValuationPrice();
        }
        if ($data->isInitialized('batchNumber') && $data->getBatchNumber() !== null) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('bookIntoWarehouse') && $data->getBookIntoWarehouse() !== null) {
            $dataArray['bookIntoWarehouse'] = $data->getBookIntoWarehouse();
        }
        if ($data->isInitialized('confirmedByUserId') && $data->getConfirmedByUserId() !== null) {
            $dataArray['confirmedByUserId'] = $data->getConfirmedByUserId();
        }
        if ($data->isInitialized('confirmedByUserIdDeprecated') && $data->getConfirmedByUserIdDeprecated() !== null) {
            $dataArray['confirmedByUserIdDeprecated'] = $data->getConfirmedByUserIdDeprecated();
        }
        if ($data->isInitialized('confirmedDate') && $data->getConfirmedDate() !== null) {
            $dataArray['confirmedDate'] = $data->getConfirmedDate();
        }
        if ($data->isInitialized('confirmedDateDeprecated') && $data->getConfirmedDateDeprecated() !== null) {
            $dataArray['confirmedDateDeprecated'] = $data->getConfirmedDateDeprecated();
        }
        if ($data->isInitialized('confirmedQuantityDeprecated') && $data->getConfirmedQuantityDeprecated() !== null) {
            $dataArray['confirmedQuantityDeprecated'] = $data->getConfirmedQuantityDeprecated();
        }
        if ($data->isInitialized('createdDate') && $data->getCreatedDate() !== null) {
            $dataArray['createdDate'] = $data->getCreatedDate();
        }
        if ($data->isInitialized('expirationDate') && $data->getExpirationDate() !== null) {
            $dataArray['expirationDate'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('id') && $data->getId() !== null) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('incomingGoodsItemId') && $data->getIncomingGoodsItemId() !== null) {
            $dataArray['incomingGoodsItemId'] = $data->getIncomingGoodsItemId();
        }
        if ($data->isInitialized('internalTransportReferenceId') && $data->getInternalTransportReferenceId() !== null) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('lastModifiedDate') && $data->getLastModifiedDate() !== null) {
            $dataArray['lastModifiedDate'] = $data->getLastModifiedDate();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && $data->getLoadingEquipmentIdentifierId() !== null) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
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
        return [\Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem::class => false];
    }
}
