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

class IncomingGoodsNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\IncomingGoods::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\IncomingGoods::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\IncomingGoods;
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
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
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('commercialLanguage', $data)) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('disableEmailTemplate', $data)) {
            $object->setDisableEmailTemplate($data['disableEmailTemplate']);
            unset($data['disableEmailTemplate']);
        }
        if (\array_key_exists('recordComment', $data)) {
            $object->setRecordComment($data['recordComment']);
            unset($data['recordComment']);
        }
        if (\array_key_exists('recordFreeText', $data)) {
            $object->setRecordFreeText($data['recordFreeText']);
            unset($data['recordFreeText']);
        }
        if (\array_key_exists('recordOpening', $data)) {
            $object->setRecordOpening($data['recordOpening']);
            unset($data['recordOpening']);
        }
        if (\array_key_exists('sentToRecipient', $data)) {
            $object->setSentToRecipient($data['sentToRecipient']);
            unset($data['sentToRecipient']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        if (\array_key_exists('invoiceAddress', $data)) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        if (\array_key_exists('recipientAddress', $data)) {
            $object->setRecipientAddress($this->denormalizer->denormalize($data['recipientAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recipientAddress']);
        }
        if (\array_key_exists('salesOrderId', $data)) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        }
        if (\array_key_exists('salesOrderNumber', $data)) {
            $object->setSalesOrderNumber($data['salesOrderNumber']);
            unset($data['salesOrderNumber']);
        }
        if (\array_key_exists('salesOrders', $data)) {
            $values_2 = [];
            foreach ($data['salesOrders'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSalesOrders($values_2);
            unset($data['salesOrders']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_3 = [];
            foreach ($data['statusHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ShipmentStatus::class, 'json', $context);
            }
            $object->setStatusHistory($values_3);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('customerDeliveryAddress', $data)) {
            $object->setCustomerDeliveryAddress($this->denormalizer->denormalize($data['customerDeliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['customerDeliveryAddress']);
        }
        if (\array_key_exists('customerInvoiceAddress', $data)) {
            $object->setCustomerInvoiceAddress($this->denormalizer->denormalize($data['customerInvoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['customerInvoiceAddress']);
        }
        if (\array_key_exists('deliveryNoteNumber', $data)) {
            $object->setDeliveryNoteNumber($data['deliveryNoteNumber']);
            unset($data['deliveryNoteNumber']);
        }
        if (\array_key_exists('dhlReceiverId', $data)) {
            $object->setDhlReceiverId($data['dhlReceiverId']);
            unset($data['dhlReceiverId']);
        }
        if (\array_key_exists('dropshippingShipmentId', $data)) {
            $object->setDropshippingShipmentId($data['dropshippingShipmentId']);
            unset($data['dropshippingShipmentId']);
        }
        if (\array_key_exists('incomingGoodsItems', $data)) {
            $values_4 = [];
            foreach ($data['incomingGoodsItems'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class, 'json', $context);
            }
            $object->setIncomingGoodsItems($values_4);
            unset($data['incomingGoodsItems']);
        }
        if (\array_key_exists('incomingGoodsNumber', $data)) {
            $object->setIncomingGoodsNumber($data['incomingGoodsNumber']);
            unset($data['incomingGoodsNumber']);
        }
        if (\array_key_exists('incomingGoodsType', $data)) {
            $object->setIncomingGoodsType($data['incomingGoodsType']);
            unset($data['incomingGoodsType']);
        }
        if (\array_key_exists('invoiceRecipientId', $data)) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        if (\array_key_exists('purchaseOrderId', $data)) {
            $object->setPurchaseOrderId($data['purchaseOrderId']);
            unset($data['purchaseOrderId']);
        }
        if (\array_key_exists('purchaseOrderNumber', $data)) {
            $object->setPurchaseOrderNumber($data['purchaseOrderNumber']);
            unset($data['purchaseOrderNumber']);
        }
        if (\array_key_exists('purchaseOrders', $data)) {
            $values_5 = [];
            foreach ($data['purchaseOrders'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPurchaseOrders($values_5);
            unset($data['purchaseOrders']);
        }
        if (\array_key_exists('relatedShipmentId', $data)) {
            $object->setRelatedShipmentId($data['relatedShipmentId']);
            unset($data['relatedShipmentId']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('returnAddress', $data)) {
            $object->setReturnAddress($this->denormalizer->denormalize($data['returnAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['returnAddress']);
        }
        if (\array_key_exists('senderCustomerNumber', $data)) {
            $object->setSenderCustomerNumber($data['senderCustomerNumber']);
            unset($data['senderCustomerNumber']);
        }
        if (\array_key_exists('senderPartyId', $data)) {
            $object->setSenderPartyId($data['senderPartyId']);
            unset($data['senderPartyId']);
        }
        if (\array_key_exists('senderSupplierNumber', $data)) {
            $object->setSenderSupplierNumber($data['senderSupplierNumber']);
            unset($data['senderSupplierNumber']);
        }
        if (\array_key_exists('shippingReturnCarrierId', $data)) {
            $object->setShippingReturnCarrierId($data['shippingReturnCarrierId']);
            unset($data['shippingReturnCarrierId']);
        }
        if (\array_key_exists('sourceWarehouseId', $data)) {
            $object->setSourceWarehouseId($data['sourceWarehouseId']);
            unset($data['sourceWarehouseId']);
        }
        if (\array_key_exists('sourceWarehouseName', $data)) {
            $object->setSourceWarehouseName($data['sourceWarehouseName']);
            unset($data['sourceWarehouseName']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        if (\array_key_exists('warehouseName', $data)) {
            $object->setWarehouseName($data['warehouseName']);
            unset($data['warehouseName']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
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
        if ($data->isInitialized('commercialLanguage') && $data->getCommercialLanguage() !== null) {
            $dataArray['commercialLanguage'] = $data->getCommercialLanguage();
        }
        if ($data->isInitialized('creatorId') && $data->getCreatorId() !== null) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('disableEmailTemplate') && $data->getDisableEmailTemplate() !== null) {
            $dataArray['disableEmailTemplate'] = $data->getDisableEmailTemplate();
        }
        if ($data->isInitialized('recordComment') && $data->getRecordComment() !== null) {
            $dataArray['recordComment'] = $data->getRecordComment();
        }
        if ($data->isInitialized('recordFreeText') && $data->getRecordFreeText() !== null) {
            $dataArray['recordFreeText'] = $data->getRecordFreeText();
        }
        if ($data->isInitialized('recordOpening') && $data->getRecordOpening() !== null) {
            $dataArray['recordOpening'] = $data->getRecordOpening();
        }
        if ($data->isInitialized('sentToRecipient') && $data->getSentToRecipient() !== null) {
            $dataArray['sentToRecipient'] = $data->getSentToRecipient();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('recipientAddress') && $data->getRecipientAddress() !== null) {
            $dataArray['recipientAddress'] = $this->normalizer->normalize($data->getRecipientAddress(), 'json', $context);
        }
        if ($data->isInitialized('salesOrderId') && $data->getSalesOrderId() !== null) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
        }
        if ($data->isInitialized('salesOrderNumber') && $data->getSalesOrderNumber() !== null) {
            $dataArray['salesOrderNumber'] = $data->getSalesOrderNumber();
        }
        if ($data->isInitialized('salesOrders') && $data->getSalesOrders() !== null) {
            $values_2 = [];
            foreach ($data->getSalesOrders() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['salesOrders'] = $values_2;
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values_3 = [];
            foreach ($data->getStatusHistory() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_3;
        }
        if ($data->isInitialized('customerDeliveryAddress') && $data->getCustomerDeliveryAddress() !== null) {
            $dataArray['customerDeliveryAddress'] = $this->normalizer->normalize($data->getCustomerDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('customerInvoiceAddress') && $data->getCustomerInvoiceAddress() !== null) {
            $dataArray['customerInvoiceAddress'] = $this->normalizer->normalize($data->getCustomerInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryNoteNumber') && $data->getDeliveryNoteNumber() !== null) {
            $dataArray['deliveryNoteNumber'] = $data->getDeliveryNoteNumber();
        }
        if ($data->isInitialized('dhlReceiverId') && $data->getDhlReceiverId() !== null) {
            $dataArray['dhlReceiverId'] = $data->getDhlReceiverId();
        }
        if ($data->isInitialized('dropshippingShipmentId') && $data->getDropshippingShipmentId() !== null) {
            $dataArray['dropshippingShipmentId'] = $data->getDropshippingShipmentId();
        }
        if ($data->isInitialized('incomingGoodsItems') && $data->getIncomingGoodsItems() !== null) {
            $values_4 = [];
            foreach ($data->getIncomingGoodsItems() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['incomingGoodsItems'] = $values_4;
        }
        if ($data->isInitialized('incomingGoodsNumber') && $data->getIncomingGoodsNumber() !== null) {
            $dataArray['incomingGoodsNumber'] = $data->getIncomingGoodsNumber();
        }
        if ($data->isInitialized('incomingGoodsType') && $data->getIncomingGoodsType() !== null) {
            $dataArray['incomingGoodsType'] = $data->getIncomingGoodsType();
        }
        if ($data->isInitialized('invoiceRecipientId') && $data->getInvoiceRecipientId() !== null) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('purchaseOrderId') && $data->getPurchaseOrderId() !== null) {
            $dataArray['purchaseOrderId'] = $data->getPurchaseOrderId();
        }
        if ($data->isInitialized('purchaseOrderNumber') && $data->getPurchaseOrderNumber() !== null) {
            $dataArray['purchaseOrderNumber'] = $data->getPurchaseOrderNumber();
        }
        if ($data->isInitialized('purchaseOrders') && $data->getPurchaseOrders() !== null) {
            $values_5 = [];
            foreach ($data->getPurchaseOrders() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['purchaseOrders'] = $values_5;
        }
        if ($data->isInitialized('relatedShipmentId') && $data->getRelatedShipmentId() !== null) {
            $dataArray['relatedShipmentId'] = $data->getRelatedShipmentId();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('returnAddress') && $data->getReturnAddress() !== null) {
            $dataArray['returnAddress'] = $this->normalizer->normalize($data->getReturnAddress(), 'json', $context);
        }
        if ($data->isInitialized('senderCustomerNumber') && $data->getSenderCustomerNumber() !== null) {
            $dataArray['senderCustomerNumber'] = $data->getSenderCustomerNumber();
        }
        if ($data->isInitialized('senderPartyId') && $data->getSenderPartyId() !== null) {
            $dataArray['senderPartyId'] = $data->getSenderPartyId();
        }
        if ($data->isInitialized('senderSupplierNumber') && $data->getSenderSupplierNumber() !== null) {
            $dataArray['senderSupplierNumber'] = $data->getSenderSupplierNumber();
        }
        if ($data->isInitialized('shippingReturnCarrierId') && $data->getShippingReturnCarrierId() !== null) {
            $dataArray['shippingReturnCarrierId'] = $data->getShippingReturnCarrierId();
        }
        if ($data->isInitialized('sourceWarehouseId') && $data->getSourceWarehouseId() !== null) {
            $dataArray['sourceWarehouseId'] = $data->getSourceWarehouseId();
        }
        if ($data->isInitialized('sourceWarehouseName') && $data->getSourceWarehouseName() !== null) {
            $dataArray['sourceWarehouseName'] = $data->getSourceWarehouseName();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        if ($data->isInitialized('warehouseName') && $data->getWarehouseName() !== null) {
            $dataArray['warehouseName'] = $data->getWarehouseName();
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\IncomingGoods::class => false];
    }
}
