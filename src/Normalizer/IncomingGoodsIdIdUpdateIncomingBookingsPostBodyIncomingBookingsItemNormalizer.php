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
class IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem();
        if (\array_key_exists('bookIntoWarehouse', $data) && \is_int($data['bookIntoWarehouse'])) {
            $data['bookIntoWarehouse'] = (bool) $data['bookIntoWarehouse'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('articleValuationPrice', $data) && $data['articleValuationPrice'] !== null) {
            $object->setArticleValuationPrice($data['articleValuationPrice']);
            unset($data['articleValuationPrice']);
        }
        elseif (\array_key_exists('articleValuationPrice', $data) && $data['articleValuationPrice'] === null) {
            $object->setArticleValuationPrice(null);
        }
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        }
        elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('bookIntoWarehouse', $data) && $data['bookIntoWarehouse'] !== null) {
            $object->setBookIntoWarehouse($data['bookIntoWarehouse']);
            unset($data['bookIntoWarehouse']);
        }
        elseif (\array_key_exists('bookIntoWarehouse', $data) && $data['bookIntoWarehouse'] === null) {
            $object->setBookIntoWarehouse(null);
        }
        if (\array_key_exists('confirmedByUserId', $data) && $data['confirmedByUserId'] !== null) {
            $object->setConfirmedByUserId($data['confirmedByUserId']);
            unset($data['confirmedByUserId']);
        }
        elseif (\array_key_exists('confirmedByUserId', $data) && $data['confirmedByUserId'] === null) {
            $object->setConfirmedByUserId(null);
        }
        if (\array_key_exists('confirmedByUserIdDeprecated', $data) && $data['confirmedByUserIdDeprecated'] !== null) {
            $object->setConfirmedByUserIdDeprecated($data['confirmedByUserIdDeprecated']);
            unset($data['confirmedByUserIdDeprecated']);
        }
        elseif (\array_key_exists('confirmedByUserIdDeprecated', $data) && $data['confirmedByUserIdDeprecated'] === null) {
            $object->setConfirmedByUserIdDeprecated(null);
        }
        if (\array_key_exists('confirmedDate', $data) && $data['confirmedDate'] !== null) {
            $object->setConfirmedDate($data['confirmedDate']);
            unset($data['confirmedDate']);
        }
        elseif (\array_key_exists('confirmedDate', $data) && $data['confirmedDate'] === null) {
            $object->setConfirmedDate(null);
        }
        if (\array_key_exists('confirmedDateDeprecated', $data) && $data['confirmedDateDeprecated'] !== null) {
            $object->setConfirmedDateDeprecated($data['confirmedDateDeprecated']);
            unset($data['confirmedDateDeprecated']);
        }
        elseif (\array_key_exists('confirmedDateDeprecated', $data) && $data['confirmedDateDeprecated'] === null) {
            $object->setConfirmedDateDeprecated(null);
        }
        if (\array_key_exists('confirmedQuantityDeprecated', $data) && $data['confirmedQuantityDeprecated'] !== null) {
            $object->setConfirmedQuantityDeprecated($data['confirmedQuantityDeprecated']);
            unset($data['confirmedQuantityDeprecated']);
        }
        elseif (\array_key_exists('confirmedQuantityDeprecated', $data) && $data['confirmedQuantityDeprecated'] === null) {
            $object->setConfirmedQuantityDeprecated(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $object->setExpirationDate($data['expirationDate']);
            unset($data['expirationDate']);
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('incomingGoodsItemId', $data) && $data['incomingGoodsItemId'] !== null) {
            $object->setIncomingGoodsItemId($data['incomingGoodsItemId']);
            unset($data['incomingGoodsItemId']);
        }
        elseif (\array_key_exists('incomingGoodsItemId', $data) && $data['incomingGoodsItemId'] === null) {
            $object->setIncomingGoodsItemId(null);
        }
        if (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] !== null) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        }
        elseif (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] === null) {
            $object->setInternalTransportReferenceId(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] !== null) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        }
        elseif (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] === null) {
            $object->setLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values = [];
            foreach ($data['serialNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setSerialNumbers($values);
            unset($data['serialNumbers']);
        }
        elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        }
        elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
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
        if ($data->isInitialized('articleValuationPrice') && null !== $data->getArticleValuationPrice()) {
            $dataArray['articleValuationPrice'] = $data->getArticleValuationPrice();
        }
        if ($data->isInitialized('batchNumber') && null !== $data->getBatchNumber()) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('bookIntoWarehouse') && null !== $data->getBookIntoWarehouse()) {
            $dataArray['bookIntoWarehouse'] = $data->getBookIntoWarehouse();
        }
        if ($data->isInitialized('confirmedQuantityDeprecated') && null !== $data->getConfirmedQuantityDeprecated()) {
            $dataArray['confirmedQuantityDeprecated'] = $data->getConfirmedQuantityDeprecated();
        }
        if ($data->isInitialized('expirationDate') && null !== $data->getExpirationDate()) {
            $dataArray['expirationDate'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('internalTransportReferenceId') && null !== $data->getInternalTransportReferenceId()) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('loadingEquipmentIdentifierId') && null !== $data->getLoadingEquipmentIdentifierId()) {
            $dataArray['loadingEquipmentIdentifierId'] = $data->getLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('serialNumbers') && null !== $data->getSerialNumbers()) {
            $values = [];
            foreach ($data->getSerialNumbers() as $value) {
                $values[] = $value;
            }
            $dataArray['serialNumbers'] = $values;
        }
        if ($data->isInitialized('storagePlaceId') && null !== $data->getStoragePlaceId()) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
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