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
class IncomingGoodsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\IncomingGoods();
        if (\array_key_exists('disableRecordEmailingRule', $data) && \is_int($data['disableRecordEmailingRule'])) {
            $data['disableRecordEmailingRule'] = (bool) $data['disableRecordEmailingRule'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] !== null) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        }
        elseif (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] === null) {
            $object->setCommercialLanguage(null);
        }
        if (\array_key_exists('creatorId', $data) && $data['creatorId'] !== null) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        }
        elseif (\array_key_exists('creatorId', $data) && $data['creatorId'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('disableRecordEmailingRule', $data) && $data['disableRecordEmailingRule'] !== null) {
            $object->setDisableRecordEmailingRule($data['disableRecordEmailingRule']);
            unset($data['disableRecordEmailingRule']);
        }
        elseif (\array_key_exists('disableRecordEmailingRule', $data) && $data['disableRecordEmailingRule'] === null) {
            $object->setDisableRecordEmailingRule(null);
        }
        if (\array_key_exists('recordComment', $data) && $data['recordComment'] !== null) {
            $object->setRecordComment($data['recordComment']);
            unset($data['recordComment']);
        }
        elseif (\array_key_exists('recordComment', $data) && $data['recordComment'] === null) {
            $object->setRecordComment(null);
        }
        if (\array_key_exists('recordFreeText', $data) && $data['recordFreeText'] !== null) {
            $object->setRecordFreeText($data['recordFreeText']);
            unset($data['recordFreeText']);
        }
        elseif (\array_key_exists('recordFreeText', $data) && $data['recordFreeText'] === null) {
            $object->setRecordFreeText(null);
        }
        if (\array_key_exists('recordOpening', $data) && $data['recordOpening'] !== null) {
            $object->setRecordOpening($data['recordOpening']);
            unset($data['recordOpening']);
        }
        elseif (\array_key_exists('recordOpening', $data) && $data['recordOpening'] === null) {
            $object->setRecordOpening(null);
        }
        if (\array_key_exists('sentToRecipient', $data) && $data['sentToRecipient'] !== null) {
            $object->setSentToRecipient($data['sentToRecipient']);
            unset($data['sentToRecipient']);
        }
        elseif (\array_key_exists('sentToRecipient', $data) && $data['sentToRecipient'] === null) {
            $object->setSentToRecipient(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('recipientAddress', $data) && $data['recipientAddress'] !== null) {
            $object->setRecipientAddress($this->denormalizer->denormalize($data['recipientAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recipientAddress']);
        }
        elseif (\array_key_exists('recipientAddress', $data) && $data['recipientAddress'] === null) {
            $object->setRecipientAddress(null);
        }
        if (\array_key_exists('salesOrders', $data) && $data['salesOrders'] !== null) {
            $values_2 = [];
            foreach ($data['salesOrders'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSalesOrders($values_2);
            unset($data['salesOrders']);
        }
        elseif (\array_key_exists('salesOrders', $data) && $data['salesOrders'] === null) {
            $object->setSalesOrders(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_3 = [];
            foreach ($data['statusHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ShipmentStatus::class, 'json', $context);
            }
            $object->setStatusHistory($values_3);
            unset($data['statusHistory']);
        }
        elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('customerDeliveryAddress', $data) && $data['customerDeliveryAddress'] !== null) {
            $object->setCustomerDeliveryAddress($this->denormalizer->denormalize($data['customerDeliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['customerDeliveryAddress']);
        }
        elseif (\array_key_exists('customerDeliveryAddress', $data) && $data['customerDeliveryAddress'] === null) {
            $object->setCustomerDeliveryAddress(null);
        }
        if (\array_key_exists('customerInvoiceAddress', $data) && $data['customerInvoiceAddress'] !== null) {
            $object->setCustomerInvoiceAddress($this->denormalizer->denormalize($data['customerInvoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['customerInvoiceAddress']);
        }
        elseif (\array_key_exists('customerInvoiceAddress', $data) && $data['customerInvoiceAddress'] === null) {
            $object->setCustomerInvoiceAddress(null);
        }
        if (\array_key_exists('deliveryNoteNumber', $data) && $data['deliveryNoteNumber'] !== null) {
            $object->setDeliveryNoteNumber($data['deliveryNoteNumber']);
            unset($data['deliveryNoteNumber']);
        }
        elseif (\array_key_exists('deliveryNoteNumber', $data) && $data['deliveryNoteNumber'] === null) {
            $object->setDeliveryNoteNumber(null);
        }
        if (\array_key_exists('dhlReceiverId', $data) && $data['dhlReceiverId'] !== null) {
            $object->setDhlReceiverId($data['dhlReceiverId']);
            unset($data['dhlReceiverId']);
        }
        elseif (\array_key_exists('dhlReceiverId', $data) && $data['dhlReceiverId'] === null) {
            $object->setDhlReceiverId(null);
        }
        if (\array_key_exists('dropshippingShipmentId', $data) && $data['dropshippingShipmentId'] !== null) {
            $object->setDropshippingShipmentId($data['dropshippingShipmentId']);
            unset($data['dropshippingShipmentId']);
        }
        elseif (\array_key_exists('dropshippingShipmentId', $data) && $data['dropshippingShipmentId'] === null) {
            $object->setDropshippingShipmentId(null);
        }
        if (\array_key_exists('incomingGoodsItems', $data) && $data['incomingGoodsItems'] !== null) {
            $values_4 = [];
            foreach ($data['incomingGoodsItems'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class, 'json', $context);
            }
            $object->setIncomingGoodsItems($values_4);
            unset($data['incomingGoodsItems']);
        }
        elseif (\array_key_exists('incomingGoodsItems', $data) && $data['incomingGoodsItems'] === null) {
            $object->setIncomingGoodsItems(null);
        }
        if (\array_key_exists('incomingGoodsNumber', $data) && $data['incomingGoodsNumber'] !== null) {
            $object->setIncomingGoodsNumber($data['incomingGoodsNumber']);
            unset($data['incomingGoodsNumber']);
        }
        elseif (\array_key_exists('incomingGoodsNumber', $data) && $data['incomingGoodsNumber'] === null) {
            $object->setIncomingGoodsNumber(null);
        }
        if (\array_key_exists('incomingGoodsType', $data) && $data['incomingGoodsType'] !== null) {
            $object->setIncomingGoodsType($data['incomingGoodsType']);
            unset($data['incomingGoodsType']);
        }
        elseif (\array_key_exists('incomingGoodsType', $data) && $data['incomingGoodsType'] === null) {
            $object->setIncomingGoodsType(null);
        }
        if (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] !== null) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        elseif (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] === null) {
            $object->setInvoiceRecipientId(null);
        }
        if (\array_key_exists('purchaseOrders', $data) && $data['purchaseOrders'] !== null) {
            $values_5 = [];
            foreach ($data['purchaseOrders'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPurchaseOrders($values_5);
            unset($data['purchaseOrders']);
        }
        elseif (\array_key_exists('purchaseOrders', $data) && $data['purchaseOrders'] === null) {
            $object->setPurchaseOrders(null);
        }
        if (\array_key_exists('relatedShipmentId', $data) && $data['relatedShipmentId'] !== null) {
            $object->setRelatedShipmentId($data['relatedShipmentId']);
            unset($data['relatedShipmentId']);
        }
        elseif (\array_key_exists('relatedShipmentId', $data) && $data['relatedShipmentId'] === null) {
            $object->setRelatedShipmentId(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('returnAddress', $data) && $data['returnAddress'] !== null) {
            $object->setReturnAddress($this->denormalizer->denormalize($data['returnAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['returnAddress']);
        }
        elseif (\array_key_exists('returnAddress', $data) && $data['returnAddress'] === null) {
            $object->setReturnAddress(null);
        }
        if (\array_key_exists('senderCustomerNumber', $data) && $data['senderCustomerNumber'] !== null) {
            $object->setSenderCustomerNumber($data['senderCustomerNumber']);
            unset($data['senderCustomerNumber']);
        }
        elseif (\array_key_exists('senderCustomerNumber', $data) && $data['senderCustomerNumber'] === null) {
            $object->setSenderCustomerNumber(null);
        }
        if (\array_key_exists('senderPartyId', $data) && $data['senderPartyId'] !== null) {
            $object->setSenderPartyId($data['senderPartyId']);
            unset($data['senderPartyId']);
        }
        elseif (\array_key_exists('senderPartyId', $data) && $data['senderPartyId'] === null) {
            $object->setSenderPartyId(null);
        }
        if (\array_key_exists('senderSupplierNumber', $data) && $data['senderSupplierNumber'] !== null) {
            $object->setSenderSupplierNumber($data['senderSupplierNumber']);
            unset($data['senderSupplierNumber']);
        }
        elseif (\array_key_exists('senderSupplierNumber', $data) && $data['senderSupplierNumber'] === null) {
            $object->setSenderSupplierNumber(null);
        }
        if (\array_key_exists('shippingReturnCarrierId', $data) && $data['shippingReturnCarrierId'] !== null) {
            $object->setShippingReturnCarrierId($data['shippingReturnCarrierId']);
            unset($data['shippingReturnCarrierId']);
        }
        elseif (\array_key_exists('shippingReturnCarrierId', $data) && $data['shippingReturnCarrierId'] === null) {
            $object->setShippingReturnCarrierId(null);
        }
        if (\array_key_exists('sourceWarehouseId', $data) && $data['sourceWarehouseId'] !== null) {
            $object->setSourceWarehouseId($data['sourceWarehouseId']);
            unset($data['sourceWarehouseId']);
        }
        elseif (\array_key_exists('sourceWarehouseId', $data) && $data['sourceWarehouseId'] === null) {
            $object->setSourceWarehouseId(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
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
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('commercialLanguage') && null !== $data->getCommercialLanguage()) {
            $dataArray['commercialLanguage'] = $data->getCommercialLanguage();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('disableRecordEmailingRule') && null !== $data->getDisableRecordEmailingRule()) {
            $dataArray['disableRecordEmailingRule'] = $data->getDisableRecordEmailingRule();
        }
        if ($data->isInitialized('recordComment') && null !== $data->getRecordComment()) {
            $dataArray['recordComment'] = $data->getRecordComment();
        }
        if ($data->isInitialized('recordFreeText') && null !== $data->getRecordFreeText()) {
            $dataArray['recordFreeText'] = $data->getRecordFreeText();
        }
        if ($data->isInitialized('recordOpening') && null !== $data->getRecordOpening()) {
            $dataArray['recordOpening'] = $data->getRecordOpening();
        }
        if ($data->isInitialized('sentToRecipient') && null !== $data->getSentToRecipient()) {
            $dataArray['sentToRecipient'] = $data->getSentToRecipient();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('recipientAddress') && null !== $data->getRecipientAddress()) {
            $dataArray['recipientAddress'] = $this->normalizer->normalize($data->getRecipientAddress(), 'json', $context);
        }
        if ($data->isInitialized('salesOrders') && null !== $data->getSalesOrders()) {
            $values_2 = [];
            foreach ($data->getSalesOrders() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['salesOrders'] = $values_2;
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('customerDeliveryAddress') && null !== $data->getCustomerDeliveryAddress()) {
            $dataArray['customerDeliveryAddress'] = $this->normalizer->normalize($data->getCustomerDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('customerInvoiceAddress') && null !== $data->getCustomerInvoiceAddress()) {
            $dataArray['customerInvoiceAddress'] = $this->normalizer->normalize($data->getCustomerInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryNoteNumber') && null !== $data->getDeliveryNoteNumber()) {
            $dataArray['deliveryNoteNumber'] = $data->getDeliveryNoteNumber();
        }
        if ($data->isInitialized('dhlReceiverId') && null !== $data->getDhlReceiverId()) {
            $dataArray['dhlReceiverId'] = $data->getDhlReceiverId();
        }
        if ($data->isInitialized('incomingGoodsItems') && null !== $data->getIncomingGoodsItems()) {
            $values_3 = [];
            foreach ($data->getIncomingGoodsItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['incomingGoodsItems'] = $values_3;
        }
        if ($data->isInitialized('incomingGoodsNumber') && null !== $data->getIncomingGoodsNumber()) {
            $dataArray['incomingGoodsNumber'] = $data->getIncomingGoodsNumber();
        }
        if ($data->isInitialized('incomingGoodsType') && null !== $data->getIncomingGoodsType()) {
            $dataArray['incomingGoodsType'] = $data->getIncomingGoodsType();
        }
        if ($data->isInitialized('invoiceRecipientId') && null !== $data->getInvoiceRecipientId()) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('returnAddress') && null !== $data->getReturnAddress()) {
            $dataArray['returnAddress'] = $this->normalizer->normalize($data->getReturnAddress(), 'json', $context);
        }
        if ($data->isInitialized('senderPartyId') && null !== $data->getSenderPartyId()) {
            $dataArray['senderPartyId'] = $data->getSenderPartyId();
        }
        if ($data->isInitialized('shippingReturnCarrierId') && null !== $data->getShippingReturnCarrierId()) {
            $dataArray['shippingReturnCarrierId'] = $data->getShippingReturnCarrierId();
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\IncomingGoods::class => false];
    }
}