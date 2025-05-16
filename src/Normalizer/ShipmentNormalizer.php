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

class ShipmentNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Shipment::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Shipment::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Shipment;
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('picksComplete', $data) && \is_int($data['picksComplete'])) {
            $data['picksComplete'] = (bool) $data['picksComplete'];
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
        if (\array_key_exists('additionalDeliveryInformation', $data)) {
            $object->setAdditionalDeliveryInformation($data['additionalDeliveryInformation']);
            unset($data['additionalDeliveryInformation']);
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($data['availability']);
            unset($data['availability']);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data)) {
            $object->setAvailabilityForAllWarehouses($data['availabilityForAllWarehouses']);
            unset($data['availabilityForAllWarehouses']);
        }
        if (\array_key_exists('consolidationStoragePlaceId', $data)) {
            $object->setConsolidationStoragePlaceId($data['consolidationStoragePlaceId']);
            unset($data['consolidationStoragePlaceId']);
        }
        if (\array_key_exists('customerPurchaseOrderNumber', $data)) {
            $object->setCustomerPurchaseOrderNumber($data['customerPurchaseOrderNumber']);
            unset($data['customerPurchaseOrderNumber']);
        }
        if (\array_key_exists('declaredValueAmount', $data)) {
            $object->setDeclaredValueAmount($data['declaredValueAmount']);
            unset($data['declaredValueAmount']);
        }
        if (\array_key_exists('declaredValueAmountCurrencyId', $data)) {
            $object->setDeclaredValueAmountCurrencyId($data['declaredValueAmountCurrencyId']);
            unset($data['declaredValueAmountCurrencyId']);
        }
        if (\array_key_exists('declaredValueAmountCurrencyName', $data)) {
            $object->setDeclaredValueAmountCurrencyName($data['declaredValueAmountCurrencyName']);
            unset($data['declaredValueAmountCurrencyName']);
        }
        if (\array_key_exists('deliveryDate', $data)) {
            $object->setDeliveryDate($data['deliveryDate']);
            unset($data['deliveryDate']);
        }
        if (\array_key_exists('destinationStoragePlaceId', $data)) {
            $object->setDestinationStoragePlaceId($data['destinationStoragePlaceId']);
            unset($data['destinationStoragePlaceId']);
        }
        if (\array_key_exists('destinationWarehouseId', $data)) {
            $object->setDestinationWarehouseId($data['destinationWarehouseId']);
            unset($data['destinationWarehouseId']);
        }
        if (\array_key_exists('destinationWarehouseName', $data)) {
            $object->setDestinationWarehouseName($data['destinationWarehouseName']);
            unset($data['destinationWarehouseName']);
        }
        if (\array_key_exists('dhlReceiverId', $data)) {
            $object->setDhlReceiverId($data['dhlReceiverId']);
            unset($data['dhlReceiverId']);
        }
        if (\array_key_exists('invoiceRecipientId', $data)) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        if (\array_key_exists('packageHeight', $data)) {
            $object->setPackageHeight($data['packageHeight']);
            unset($data['packageHeight']);
        }
        if (\array_key_exists('packageLength', $data)) {
            $object->setPackageLength($data['packageLength']);
            unset($data['packageLength']);
        }
        if (\array_key_exists('packageReferenceNumber', $data)) {
            $object->setPackageReferenceNumber($data['packageReferenceNumber']);
            unset($data['packageReferenceNumber']);
        }
        if (\array_key_exists('packageReturnTrackingNumber', $data)) {
            $object->setPackageReturnTrackingNumber($data['packageReturnTrackingNumber']);
            unset($data['packageReturnTrackingNumber']);
        }
        if (\array_key_exists('packageReturnTrackingUrl', $data)) {
            $object->setPackageReturnTrackingUrl($data['packageReturnTrackingUrl']);
            unset($data['packageReturnTrackingUrl']);
        }
        if (\array_key_exists('packageTrackingNumber', $data)) {
            $object->setPackageTrackingNumber($data['packageTrackingNumber']);
            unset($data['packageTrackingNumber']);
        }
        if (\array_key_exists('packageTrackingUrl', $data)) {
            $object->setPackageTrackingUrl($data['packageTrackingUrl']);
            unset($data['packageTrackingUrl']);
        }
        if (\array_key_exists('packageWeight', $data)) {
            $object->setPackageWeight($data['packageWeight']);
            unset($data['packageWeight']);
        }
        if (\array_key_exists('packageWidth', $data)) {
            $object->setPackageWidth($data['packageWidth']);
            unset($data['packageWidth']);
        }
        if (\array_key_exists('pickingInstructions', $data)) {
            $object->setPickingInstructions($data['pickingInstructions']);
            unset($data['pickingInstructions']);
        }
        if (\array_key_exists('picksComplete', $data)) {
            $object->setPicksComplete($data['picksComplete']);
            unset($data['picksComplete']);
        }
        if (\array_key_exists('purchaseOrders', $data)) {
            $values_4 = [];
            foreach ($data['purchaseOrders'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPurchaseOrders($values_4);
            unset($data['purchaseOrders']);
        }
        if (\array_key_exists('recipientCustomerNumber', $data)) {
            $object->setRecipientCustomerNumber($data['recipientCustomerNumber']);
            unset($data['recipientCustomerNumber']);
        }
        if (\array_key_exists('recipientPartyId', $data)) {
            $object->setRecipientPartyId($data['recipientPartyId']);
            unset($data['recipientPartyId']);
        }
        if (\array_key_exists('recipientSupplierNumber', $data)) {
            $object->setRecipientSupplierNumber($data['recipientSupplierNumber']);
            unset($data['recipientSupplierNumber']);
        }
        if (\array_key_exists('recordEmailAddresses', $data)) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('salesInvoiceEmailAddresses', $data)) {
            $object->setSalesInvoiceEmailAddresses($this->denormalizer->denormalize($data['salesInvoiceEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesInvoiceEmailAddresses']);
        }
        if (\array_key_exists('shipmentItems', $data)) {
            $values_5 = [];
            foreach ($data['shipmentItems'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\ShipmentItem::class, 'json', $context);
            }
            $object->setShipmentItems($values_5);
            unset($data['shipmentItems']);
        }
        if (\array_key_exists('shipmentMethodId', $data)) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        if (\array_key_exists('shipmentMethodName', $data)) {
            $object->setShipmentMethodName($data['shipmentMethodName']);
            unset($data['shipmentMethodName']);
        }
        if (\array_key_exists('shipmentNumber', $data)) {
            $object->setShipmentNumber($data['shipmentNumber']);
            unset($data['shipmentNumber']);
        }
        if (\array_key_exists('shipmentType', $data)) {
            $object->setShipmentType($data['shipmentType']);
            unset($data['shipmentType']);
        }
        if (\array_key_exists('shippedFromAddress', $data)) {
            $object->setShippedFromAddress($this->denormalizer->denormalize($data['shippedFromAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['shippedFromAddress']);
        }
        if (\array_key_exists('shippingCarrierId', $data)) {
            $object->setShippingCarrierId($data['shippingCarrierId']);
            unset($data['shippingCarrierId']);
        }
        if (\array_key_exists('shippingCarrierName', $data)) {
            $object->setShippingCarrierName($data['shippingCarrierName']);
            unset($data['shippingCarrierName']);
        }
        if (\array_key_exists('shippingDate', $data)) {
            $object->setShippingDate($data['shippingDate']);
            unset($data['shippingDate']);
        }
        if (\array_key_exists('shippingLabelsCount', $data)) {
            $object->setShippingLabelsCount($data['shippingLabelsCount']);
            unset($data['shippingLabelsCount']);
        }
        if (\array_key_exists('shippingReturnCarrierId', $data)) {
            $object->setShippingReturnCarrierId($data['shippingReturnCarrierId']);
            unset($data['shippingReturnCarrierId']);
        }
        if (\array_key_exists('shippingReturnCarrierName', $data)) {
            $object->setShippingReturnCarrierName($data['shippingReturnCarrierName']);
            unset($data['shippingReturnCarrierName']);
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
        if ($data->isInitialized('additionalDeliveryInformation') && $data->getAdditionalDeliveryInformation() !== null) {
            $dataArray['additionalDeliveryInformation'] = $data->getAdditionalDeliveryInformation();
        }
        if ($data->isInitialized('availability') && $data->getAvailability() !== null) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && $data->getAvailabilityForAllWarehouses() !== null) {
            $dataArray['availabilityForAllWarehouses'] = $data->getAvailabilityForAllWarehouses();
        }
        if ($data->isInitialized('consolidationStoragePlaceId') && $data->getConsolidationStoragePlaceId() !== null) {
            $dataArray['consolidationStoragePlaceId'] = $data->getConsolidationStoragePlaceId();
        }
        if ($data->isInitialized('customerPurchaseOrderNumber') && $data->getCustomerPurchaseOrderNumber() !== null) {
            $dataArray['customerPurchaseOrderNumber'] = $data->getCustomerPurchaseOrderNumber();
        }
        if ($data->isInitialized('declaredValueAmount') && $data->getDeclaredValueAmount() !== null) {
            $dataArray['declaredValueAmount'] = $data->getDeclaredValueAmount();
        }
        if ($data->isInitialized('declaredValueAmountCurrencyId') && $data->getDeclaredValueAmountCurrencyId() !== null) {
            $dataArray['declaredValueAmountCurrencyId'] = $data->getDeclaredValueAmountCurrencyId();
        }
        if ($data->isInitialized('declaredValueAmountCurrencyName') && $data->getDeclaredValueAmountCurrencyName() !== null) {
            $dataArray['declaredValueAmountCurrencyName'] = $data->getDeclaredValueAmountCurrencyName();
        }
        if ($data->isInitialized('deliveryDate') && $data->getDeliveryDate() !== null) {
            $dataArray['deliveryDate'] = $data->getDeliveryDate();
        }
        if ($data->isInitialized('destinationStoragePlaceId') && $data->getDestinationStoragePlaceId() !== null) {
            $dataArray['destinationStoragePlaceId'] = $data->getDestinationStoragePlaceId();
        }
        if ($data->isInitialized('destinationWarehouseId') && $data->getDestinationWarehouseId() !== null) {
            $dataArray['destinationWarehouseId'] = $data->getDestinationWarehouseId();
        }
        if ($data->isInitialized('destinationWarehouseName') && $data->getDestinationWarehouseName() !== null) {
            $dataArray['destinationWarehouseName'] = $data->getDestinationWarehouseName();
        }
        if ($data->isInitialized('dhlReceiverId') && $data->getDhlReceiverId() !== null) {
            $dataArray['dhlReceiverId'] = $data->getDhlReceiverId();
        }
        if ($data->isInitialized('invoiceRecipientId') && $data->getInvoiceRecipientId() !== null) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('packageHeight') && $data->getPackageHeight() !== null) {
            $dataArray['packageHeight'] = $data->getPackageHeight();
        }
        if ($data->isInitialized('packageLength') && $data->getPackageLength() !== null) {
            $dataArray['packageLength'] = $data->getPackageLength();
        }
        if ($data->isInitialized('packageReferenceNumber') && $data->getPackageReferenceNumber() !== null) {
            $dataArray['packageReferenceNumber'] = $data->getPackageReferenceNumber();
        }
        if ($data->isInitialized('packageReturnTrackingNumber') && $data->getPackageReturnTrackingNumber() !== null) {
            $dataArray['packageReturnTrackingNumber'] = $data->getPackageReturnTrackingNumber();
        }
        if ($data->isInitialized('packageReturnTrackingUrl') && $data->getPackageReturnTrackingUrl() !== null) {
            $dataArray['packageReturnTrackingUrl'] = $data->getPackageReturnTrackingUrl();
        }
        if ($data->isInitialized('packageTrackingNumber') && $data->getPackageTrackingNumber() !== null) {
            $dataArray['packageTrackingNumber'] = $data->getPackageTrackingNumber();
        }
        if ($data->isInitialized('packageTrackingUrl') && $data->getPackageTrackingUrl() !== null) {
            $dataArray['packageTrackingUrl'] = $data->getPackageTrackingUrl();
        }
        if ($data->isInitialized('packageWeight') && $data->getPackageWeight() !== null) {
            $dataArray['packageWeight'] = $data->getPackageWeight();
        }
        if ($data->isInitialized('packageWidth') && $data->getPackageWidth() !== null) {
            $dataArray['packageWidth'] = $data->getPackageWidth();
        }
        if ($data->isInitialized('pickingInstructions') && $data->getPickingInstructions() !== null) {
            $dataArray['pickingInstructions'] = $data->getPickingInstructions();
        }
        if ($data->isInitialized('picksComplete') && $data->getPicksComplete() !== null) {
            $dataArray['picksComplete'] = $data->getPicksComplete();
        }
        if ($data->isInitialized('purchaseOrders') && $data->getPurchaseOrders() !== null) {
            $values_4 = [];
            foreach ($data->getPurchaseOrders() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['purchaseOrders'] = $values_4;
        }
        if ($data->isInitialized('recipientCustomerNumber') && $data->getRecipientCustomerNumber() !== null) {
            $dataArray['recipientCustomerNumber'] = $data->getRecipientCustomerNumber();
        }
        if ($data->isInitialized('recipientPartyId') && $data->getRecipientPartyId() !== null) {
            $dataArray['recipientPartyId'] = $data->getRecipientPartyId();
        }
        if ($data->isInitialized('recipientSupplierNumber') && $data->getRecipientSupplierNumber() !== null) {
            $dataArray['recipientSupplierNumber'] = $data->getRecipientSupplierNumber();
        }
        if ($data->isInitialized('recordEmailAddresses') && $data->getRecordEmailAddresses() !== null) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('salesInvoiceEmailAddresses') && $data->getSalesInvoiceEmailAddresses() !== null) {
            $dataArray['salesInvoiceEmailAddresses'] = $this->normalizer->normalize($data->getSalesInvoiceEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('shipmentItems') && $data->getShipmentItems() !== null) {
            $values_5 = [];
            foreach ($data->getShipmentItems() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['shipmentItems'] = $values_5;
        }
        if ($data->isInitialized('shipmentMethodId') && $data->getShipmentMethodId() !== null) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('shipmentMethodName') && $data->getShipmentMethodName() !== null) {
            $dataArray['shipmentMethodName'] = $data->getShipmentMethodName();
        }
        if ($data->isInitialized('shipmentNumber') && $data->getShipmentNumber() !== null) {
            $dataArray['shipmentNumber'] = $data->getShipmentNumber();
        }
        if ($data->isInitialized('shipmentType') && $data->getShipmentType() !== null) {
            $dataArray['shipmentType'] = $data->getShipmentType();
        }
        if ($data->isInitialized('shippedFromAddress') && $data->getShippedFromAddress() !== null) {
            $dataArray['shippedFromAddress'] = $this->normalizer->normalize($data->getShippedFromAddress(), 'json', $context);
        }
        if ($data->isInitialized('shippingCarrierId') && $data->getShippingCarrierId() !== null) {
            $dataArray['shippingCarrierId'] = $data->getShippingCarrierId();
        }
        if ($data->isInitialized('shippingCarrierName') && $data->getShippingCarrierName() !== null) {
            $dataArray['shippingCarrierName'] = $data->getShippingCarrierName();
        }
        if ($data->isInitialized('shippingDate') && $data->getShippingDate() !== null) {
            $dataArray['shippingDate'] = $data->getShippingDate();
        }
        if ($data->isInitialized('shippingLabelsCount') && $data->getShippingLabelsCount() !== null) {
            $dataArray['shippingLabelsCount'] = $data->getShippingLabelsCount();
        }
        if ($data->isInitialized('shippingReturnCarrierId') && $data->getShippingReturnCarrierId() !== null) {
            $dataArray['shippingReturnCarrierId'] = $data->getShippingReturnCarrierId();
        }
        if ($data->isInitialized('shippingReturnCarrierName') && $data->getShippingReturnCarrierName() !== null) {
            $dataArray['shippingReturnCarrierName'] = $data->getShippingReturnCarrierName();
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
        return [\Webhubworks\WeclappApiCore\Model\Shipment::class => false];
    }
}
