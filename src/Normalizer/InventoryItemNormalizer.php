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

class InventoryItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\InventoryItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\InventoryItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\InventoryItem;
        if (\array_key_exists('manualPosition', $data) && \is_int($data['manualPosition'])) {
            $data['manualPosition'] = (bool) $data['manualPosition'];
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('batchNumber', $data) && $data['batchNumber'] !== null) {
            $object->setBatchNumber($data['batchNumber']);
            unset($data['batchNumber']);
        } elseif (\array_key_exists('batchNumber', $data) && $data['batchNumber'] === null) {
            $object->setBatchNumber(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('countedQuantity', $data) && $data['countedQuantity'] !== null) {
            $object->setCountedQuantity($data['countedQuantity']);
            unset($data['countedQuantity']);
        } elseif (\array_key_exists('countedQuantity', $data) && $data['countedQuantity'] === null) {
            $object->setCountedQuantity(null);
        }
        if (\array_key_exists('expectedQuantity', $data) && $data['expectedQuantity'] !== null) {
            $object->setExpectedQuantity($data['expectedQuantity']);
            unset($data['expectedQuantity']);
        } elseif (\array_key_exists('expectedQuantity', $data) && $data['expectedQuantity'] === null) {
            $object->setExpectedQuantity(null);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $object->setExpirationDate($data['expirationDate']);
            unset($data['expirationDate']);
        } elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('inboundDate', $data) && $data['inboundDate'] !== null) {
            $object->setInboundDate($data['inboundDate']);
            unset($data['inboundDate']);
        } elseif (\array_key_exists('inboundDate', $data) && $data['inboundDate'] === null) {
            $object->setInboundDate(null);
        }
        if (\array_key_exists('inventoryId', $data) && $data['inventoryId'] !== null) {
            $object->setInventoryId($data['inventoryId']);
            unset($data['inventoryId']);
        } elseif (\array_key_exists('inventoryId', $data) && $data['inventoryId'] === null) {
            $object->setInventoryId(null);
        }
        if (\array_key_exists('inventorySerialNumbers', $data) && $data['inventorySerialNumbers'] !== null) {
            $values = [];
            foreach ($data['inventorySerialNumbers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\InventorySerialNumber::class, 'json', $context);
            }
            $object->setInventorySerialNumbers($values);
            unset($data['inventorySerialNumbers']);
        } elseif (\array_key_exists('inventorySerialNumbers', $data) && $data['inventorySerialNumbers'] === null) {
            $object->setInventorySerialNumbers(null);
        }
        if (\array_key_exists('inventoryTransportReferenceId', $data) && $data['inventoryTransportReferenceId'] !== null) {
            $object->setInventoryTransportReferenceId($data['inventoryTransportReferenceId']);
            unset($data['inventoryTransportReferenceId']);
        } elseif (\array_key_exists('inventoryTransportReferenceId', $data) && $data['inventoryTransportReferenceId'] === null) {
            $object->setInventoryTransportReferenceId(null);
        }
        if (\array_key_exists('manualPosition', $data) && $data['manualPosition'] !== null) {
            $object->setManualPosition($data['manualPosition']);
            unset($data['manualPosition']);
        } elseif (\array_key_exists('manualPosition', $data) && $data['manualPosition'] === null) {
            $object->setManualPosition(null);
        }
        if (\array_key_exists('orderItemId', $data) && $data['orderItemId'] !== null) {
            $object->setOrderItemId($data['orderItemId']);
            unset($data['orderItemId']);
        } elseif (\array_key_exists('orderItemId', $data) && $data['orderItemId'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        } elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('replacementValue', $data) && $data['replacementValue'] !== null) {
            $object->setReplacementValue($data['replacementValue']);
            unset($data['replacementValue']);
        } elseif (\array_key_exists('replacementValue', $data) && $data['replacementValue'] === null) {
            $object->setReplacementValue(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        } elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
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
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('batchNumber') && $data->getBatchNumber() !== null) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('comment') && $data->getComment() !== null) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('countedQuantity') && $data->getCountedQuantity() !== null) {
            $dataArray['countedQuantity'] = $data->getCountedQuantity();
        }
        if ($data->isInitialized('expectedQuantity') && $data->getExpectedQuantity() !== null) {
            $dataArray['expectedQuantity'] = $data->getExpectedQuantity();
        }
        if ($data->isInitialized('expirationDate') && $data->getExpirationDate() !== null) {
            $dataArray['expirationDate'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('inboundDate') && $data->getInboundDate() !== null) {
            $dataArray['inboundDate'] = $data->getInboundDate();
        }
        if ($data->isInitialized('inventoryId') && $data->getInventoryId() !== null) {
            $dataArray['inventoryId'] = $data->getInventoryId();
        }
        if ($data->isInitialized('inventorySerialNumbers') && $data->getInventorySerialNumbers() !== null) {
            $values = [];
            foreach ($data->getInventorySerialNumbers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['inventorySerialNumbers'] = $values;
        }
        if ($data->isInitialized('inventoryTransportReferenceId') && $data->getInventoryTransportReferenceId() !== null) {
            $dataArray['inventoryTransportReferenceId'] = $data->getInventoryTransportReferenceId();
        }
        if ($data->isInitialized('manualPosition') && $data->getManualPosition() !== null) {
            $dataArray['manualPosition'] = $data->getManualPosition();
        }
        if ($data->isInitialized('orderItemId') && $data->getOrderItemId() !== null) {
            $dataArray['orderItemId'] = $data->getOrderItemId();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('replacementValue') && $data->getReplacementValue() !== null) {
            $dataArray['replacementValue'] = $data->getReplacementValue();
        }
        if ($data->isInitialized('storagePlaceId') && $data->getStoragePlaceId() !== null) {
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
        return [\Webhubworks\WeclappApiCore\Model\InventoryItem::class => false];
    }
}
