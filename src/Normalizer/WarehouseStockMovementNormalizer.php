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

class WarehouseStockMovementNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement;
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
        if (\array_key_exists('batchNumberId', $data) && $data['batchNumberId'] !== null) {
            $object->setBatchNumberId($data['batchNumberId']);
            unset($data['batchNumberId']);
        } elseif (\array_key_exists('batchNumberId', $data) && $data['batchNumberId'] === null) {
            $object->setBatchNumberId(null);
        }
        if (\array_key_exists('costCenterId', $data) && $data['costCenterId'] !== null) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        } elseif (\array_key_exists('costCenterId', $data) && $data['costCenterId'] === null) {
            $object->setCostCenterId(null);
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
        if (\array_key_exists('movementNote', $data) && $data['movementNote'] !== null) {
            $object->setMovementNote($data['movementNote']);
            unset($data['movementNote']);
        } elseif (\array_key_exists('movementNote', $data) && $data['movementNote'] === null) {
            $object->setMovementNote(null);
        }
        if (\array_key_exists('movementNumber', $data) && $data['movementNumber'] !== null) {
            $object->setMovementNumber($data['movementNumber']);
            unset($data['movementNumber']);
        } elseif (\array_key_exists('movementNumber', $data) && $data['movementNumber'] === null) {
            $object->setMovementNumber(null);
        }
        if (\array_key_exists('postingDate', $data) && $data['postingDate'] !== null) {
            $object->setPostingDate($data['postingDate']);
            unset($data['postingDate']);
        } elseif (\array_key_exists('postingDate', $data) && $data['postingDate'] === null) {
            $object->setPostingDate(null);
        }
        if (\array_key_exists('productionOrderId', $data) && $data['productionOrderId'] !== null) {
            $object->setProductionOrderId($data['productionOrderId']);
            unset($data['productionOrderId']);
        } elseif (\array_key_exists('productionOrderId', $data) && $data['productionOrderId'] === null) {
            $object->setProductionOrderId(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        } elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
        }
        if (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] !== null) {
            $values_1 = [];
            foreach ($data['serialNumbers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSerialNumbers($values_1);
            unset($data['serialNumbers']);
        } elseif (\array_key_exists('serialNumbers', $data) && $data['serialNumbers'] === null) {
            $object->setSerialNumbers(null);
        }
        if (\array_key_exists('shipmentItemId', $data) && $data['shipmentItemId'] !== null) {
            $object->setShipmentItemId($data['shipmentItemId']);
            unset($data['shipmentItemId']);
        } elseif (\array_key_exists('shipmentItemId', $data) && $data['shipmentItemId'] === null) {
            $object->setShipmentItemId(null);
        }
        if (\array_key_exists('stockMovementType', $data) && $data['stockMovementType'] !== null) {
            $object->setStockMovementType($data['stockMovementType']);
            unset($data['stockMovementType']);
        } elseif (\array_key_exists('stockMovementType', $data) && $data['stockMovementType'] === null) {
            $object->setStockMovementType(null);
        }
        if (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] !== null) {
            $object->setStoragePlaceId($data['storagePlaceId']);
            unset($data['storagePlaceId']);
        } elseif (\array_key_exists('storagePlaceId', $data) && $data['storagePlaceId'] === null) {
            $object->setStoragePlaceId(null);
        }
        if (\array_key_exists('transportationOrderId', $data) && $data['transportationOrderId'] !== null) {
            $object->setTransportationOrderId($data['transportationOrderId']);
            unset($data['transportationOrderId']);
        } elseif (\array_key_exists('transportationOrderId', $data) && $data['transportationOrderId'] === null) {
            $object->setTransportationOrderId(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        } elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('valuationPrice', $data) && $data['valuationPrice'] !== null) {
            $object->setValuationPrice($data['valuationPrice']);
            unset($data['valuationPrice']);
        } elseif (\array_key_exists('valuationPrice', $data) && $data['valuationPrice'] === null) {
            $object->setValuationPrice(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('batchNumber') && $data->getBatchNumber() !== null) {
            $dataArray['batchNumber'] = $data->getBatchNumber();
        }
        if ($data->isInitialized('batchNumberId') && $data->getBatchNumberId() !== null) {
            $dataArray['batchNumberId'] = $data->getBatchNumberId();
        }
        if ($data->isInitialized('costCenterId') && $data->getCostCenterId() !== null) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('incomingGoodsItemId') && $data->getIncomingGoodsItemId() !== null) {
            $dataArray['incomingGoodsItemId'] = $data->getIncomingGoodsItemId();
        }
        if ($data->isInitialized('internalTransportReferenceId') && $data->getInternalTransportReferenceId() !== null) {
            $dataArray['internalTransportReferenceId'] = $data->getInternalTransportReferenceId();
        }
        if ($data->isInitialized('movementNote') && $data->getMovementNote() !== null) {
            $dataArray['movementNote'] = $data->getMovementNote();
        }
        if ($data->isInitialized('movementNumber') && $data->getMovementNumber() !== null) {
            $dataArray['movementNumber'] = $data->getMovementNumber();
        }
        if ($data->isInitialized('postingDate') && $data->getPostingDate() !== null) {
            $dataArray['postingDate'] = $data->getPostingDate();
        }
        if ($data->isInitialized('productionOrderId') && $data->getProductionOrderId() !== null) {
            $dataArray['productionOrderId'] = $data->getProductionOrderId();
        }
        if ($data->isInitialized('quantity') && $data->getQuantity() !== null) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('salesOrderItemId') && $data->getSalesOrderItemId() !== null) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        if ($data->isInitialized('serialNumbers') && $data->getSerialNumbers() !== null) {
            $values_1 = [];
            foreach ($data->getSerialNumbers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['serialNumbers'] = $values_1;
        }
        if ($data->isInitialized('shipmentItemId') && $data->getShipmentItemId() !== null) {
            $dataArray['shipmentItemId'] = $data->getShipmentItemId();
        }
        if ($data->isInitialized('stockMovementType') && $data->getStockMovementType() !== null) {
            $dataArray['stockMovementType'] = $data->getStockMovementType();
        }
        if ($data->isInitialized('storagePlaceId') && $data->getStoragePlaceId() !== null) {
            $dataArray['storagePlaceId'] = $data->getStoragePlaceId();
        }
        if ($data->isInitialized('transportationOrderId') && $data->getTransportationOrderId() !== null) {
            $dataArray['transportationOrderId'] = $data->getTransportationOrderId();
        }
        if ($data->isInitialized('userId') && $data->getUserId() !== null) {
            $dataArray['userId'] = $data->getUserId();
        }
        if ($data->isInitialized('valuationPrice') && $data->getValuationPrice() !== null) {
            $dataArray['valuationPrice'] = $data->getValuationPrice();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class => false];
    }
}
