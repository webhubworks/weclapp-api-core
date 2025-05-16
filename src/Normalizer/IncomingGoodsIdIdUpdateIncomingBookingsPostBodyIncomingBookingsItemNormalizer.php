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
        if (\array_key_exists('articleValuationPrice', $data) && $data['articleValuationPrice'] !== null) {
            $object->setArticleValuationPrice($data['articleValuationPrice']);
            unset($data['articleValuationPrice']);
        } elseif (\array_key_exists('articleValuationPrice', $data) && $data['articleValuationPrice'] === null) {
            $object->setArticleValuationPrice(null);
        }
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        } elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('bookIntoWarehouse', $data) && $data['bookIntoWarehouse'] !== null) {
            $object->setBookIntoWarehouse($data['bookIntoWarehouse']);
            unset($data['bookIntoWarehouse']);
        } elseif (\array_key_exists('bookIntoWarehouse', $data) && $data['bookIntoWarehouse'] === null) {
            $object->setBookIntoWarehouse(null);
        }
        if (\array_key_exists('confirmedByUserId', $data) && $data['confirmedByUserId'] !== null) {
            $object->setConfirmedByUserId($data['confirmedByUserId']);
            unset($data['confirmedByUserId']);
        } elseif (\array_key_exists('confirmedByUserId', $data) && $data['confirmedByUserId'] === null) {
            $object->setConfirmedByUserId(null);
        }
        if (\array_key_exists('confirmedByUserIdDeprecated', $data) && $data['confirmedByUserIdDeprecated'] !== null) {
            $object->setConfirmedByUserIdDeprecated($data['confirmedByUserIdDeprecated']);
            unset($data['confirmedByUserIdDeprecated']);
        } elseif (\array_key_exists('confirmedByUserIdDeprecated', $data) && $data['confirmedByUserIdDeprecated'] === null) {
            $object->setConfirmedByUserIdDeprecated(null);
        }
        if (\array_key_exists('confirmedDate', $data) && $data['confirmedDate'] !== null) {
            $object->setConfirmedDate($data['confirmedDate']);
            unset($data['confirmedDate']);
        } elseif (\array_key_exists('confirmedDate', $data) && $data['confirmedDate'] === null) {
            $object->setConfirmedDate(null);
        }
        if (\array_key_exists('confirmedDateDeprecated', $data) && $data['confirmedDateDeprecated'] !== null) {
            $object->setConfirmedDateDeprecated($data['confirmedDateDeprecated']);
            unset($data['confirmedDateDeprecated']);
        } elseif (\array_key_exists('confirmedDateDeprecated', $data) && $data['confirmedDateDeprecated'] === null) {
            $object->setConfirmedDateDeprecated(null);
        }
        if (\array_key_exists('confirmedQuantityDeprecated', $data) && $data['confirmedQuantityDeprecated'] !== null) {
            $object->setConfirmedQuantityDeprecated($data['confirmedQuantityDeprecated']);
            unset($data['confirmedQuantityDeprecated']);
        } elseif (\array_key_exists('confirmedQuantityDeprecated', $data) && $data['confirmedQuantityDeprecated'] === null) {
            $object->setConfirmedQuantityDeprecated(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $object->setExpirationDate($data['expirationDate']);
            unset($data['expirationDate']);
        } elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('incomingGoodsItemId', $data) && $data['incomingGoodsItemId'] !== null) {
            $object->setIncomingGoodsItemId($data['incomingGoodsItemId']);
            unset($data['incomingGoodsItemId']);
        } elseif (\array_key_exists('incomingGoodsItemId', $data) && $data['incomingGoodsItemId'] === null) {
            $object->setIncomingGoodsItemId(null);
        }
        if (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] !== null) {
            $object->setInternalTransportReferenceId($data['internalTransportReferenceId']);
            unset($data['internalTransportReferenceId']);
        } elseif (\array_key_exists('internalTransportReferenceId', $data) && $data['internalTransportReferenceId'] === null) {
            $object->setInternalTransportReferenceId(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] !== null) {
            $object->setLoadingEquipmentIdentifierId($data['loadingEquipmentIdentifierId']);
            unset($data['loadingEquipmentIdentifierId']);
        } elseif (\array_key_exists('loadingEquipmentIdentifierId', $data) && $data['loadingEquipmentIdentifierId'] === null) {
            $object->setLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values = [];
            foreach ($data['serialNumbers'] as $value) {
                $values[] = $value;
            }
            $object->setSerialNumbers($values);
            unset($data['serialNumbers']);
        } elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        } elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
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
