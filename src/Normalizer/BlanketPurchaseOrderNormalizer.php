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

class BlanketPurchaseOrderNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder;
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('useManualUnitPrice', $data) && \is_int($data['useManualUnitPrice'])) {
            $data['useManualUnitPrice'] = (bool) $data['useManualUnitPrice'];
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
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttribute::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('articleId', $data)) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        if (\array_key_exists('blanketPurchaseOrderNumber', $data)) {
            $object->setBlanketPurchaseOrderNumber($data['blanketPurchaseOrderNumber']);
            unset($data['blanketPurchaseOrderNumber']);
        }
        if (\array_key_exists('calculationMode', $data)) {
            $object->setCalculationMode($data['calculationMode']);
            unset($data['calculationMode']);
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        }
        if (\array_key_exists('commercialLanguage', $data)) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        }
        if (\array_key_exists('confirmationNumber', $data)) {
            $object->setConfirmationNumber($data['confirmationNumber']);
            unset($data['confirmationNumber']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('discountPercentage', $data)) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        if (\array_key_exists('formSettingsFromDistributionChannel', $data)) {
            $object->setFormSettingsFromDistributionChannel($data['formSettingsFromDistributionChannel']);
            unset($data['formSettingsFromDistributionChannel']);
        }
        if (\array_key_exists('headerDiscount', $data)) {
            $object->setHeaderDiscount($data['headerDiscount']);
            unset($data['headerDiscount']);
        }
        if (\array_key_exists('headerSurcharge', $data)) {
            $object->setHeaderSurcharge($data['headerSurcharge']);
            unset($data['headerSurcharge']);
        }
        if (\array_key_exists('invoiceAddress', $data)) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        if (\array_key_exists('nonStandardTaxId', $data)) {
            $object->setNonStandardTaxId($data['nonStandardTaxId']);
            unset($data['nonStandardTaxId']);
        }
        if (\array_key_exists('orderDate', $data)) {
            $object->setOrderDate($data['orderDate']);
            unset($data['orderDate']);
        }
        if (\array_key_exists('orderQuantity', $data)) {
            $object->setOrderQuantity($data['orderQuantity']);
            unset($data['orderQuantity']);
        }
        if (\array_key_exists('paymentMethodId', $data)) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        if (\array_key_exists('recipientCountryCode', $data)) {
            $object->setRecipientCountryCode($data['recipientCountryCode']);
            unset($data['recipientCountryCode']);
        }
        if (\array_key_exists('recordAddress', $data)) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        }
        if (\array_key_exists('recordComment', $data)) {
            $object->setRecordComment($data['recordComment']);
            unset($data['recordComment']);
        }
        if (\array_key_exists('recordCurrencyId', $data)) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        }
        if (\array_key_exists('recordEmailAddresses', $data)) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        }
        if (\array_key_exists('recordFreeText', $data)) {
            $object->setRecordFreeText($data['recordFreeText']);
            unset($data['recordFreeText']);
        }
        if (\array_key_exists('recordOpening', $data)) {
            $object->setRecordOpening($data['recordOpening']);
            unset($data['recordOpening']);
        }
        if (\array_key_exists('reductionAdditionItems', $data)) {
            $values_1 = [];
            foreach ($data['reductionAdditionItems'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class, 'json', $context);
            }
            $object->setReductionAdditionItems($values_1);
            unset($data['reductionAdditionItems']);
        }
        if (\array_key_exists('releases', $data)) {
            $values_2 = [];
            foreach ($data['releases'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\Releases::class, 'json', $context);
            }
            $object->setReleases($values_2);
            unset($data['releases']);
        }
        if (\array_key_exists('residualQuantity', $data)) {
            $object->setResidualQuantity($data['residualQuantity']);
            unset($data['residualQuantity']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('senderCountryCode', $data)) {
            $object->setSenderCountryCode($data['senderCountryCode']);
            unset($data['senderCountryCode']);
        }
        if (\array_key_exists('sentToRecipient', $data)) {
            $object->setSentToRecipient($data['sentToRecipient']);
            unset($data['sentToRecipient']);
        }
        if (\array_key_exists('shipmentMethodId', $data)) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_3 = [];
            foreach ($data['statusHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_3);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('supplierBlanketPurchaseOrderNumber', $data)) {
            $object->setSupplierBlanketPurchaseOrderNumber($data['supplierBlanketPurchaseOrderNumber']);
            unset($data['supplierBlanketPurchaseOrderNumber']);
        }
        if (\array_key_exists('supplierId', $data)) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        }
        if (\array_key_exists('supplierQuotationNumber', $data)) {
            $object->setSupplierQuotationNumber($data['supplierQuotationNumber']);
            unset($data['supplierQuotationNumber']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTags($values_4);
            unset($data['tags']);
        }
        if (\array_key_exists('taxId', $data)) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        if (\array_key_exists('termOfPaymentId', $data)) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        }
        if (\array_key_exists('useManualUnitPrice', $data)) {
            $object->setUseManualUnitPrice($data['useManualUnitPrice']);
            unset($data['useManualUnitPrice']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('blanketPurchaseOrderNumber') && $data->getBlanketPurchaseOrderNumber() !== null) {
            $dataArray['blanketPurchaseOrderNumber'] = $data->getBlanketPurchaseOrderNumber();
        }
        if ($data->isInitialized('calculationMode') && $data->getCalculationMode() !== null) {
            $dataArray['calculationMode'] = $data->getCalculationMode();
        }
        if ($data->isInitialized('comment') && $data->getComment() !== null) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('commercialLanguage') && $data->getCommercialLanguage() !== null) {
            $dataArray['commercialLanguage'] = $data->getCommercialLanguage();
        }
        if ($data->isInitialized('confirmationNumber') && $data->getConfirmationNumber() !== null) {
            $dataArray['confirmationNumber'] = $data->getConfirmationNumber();
        }
        if ($data->isInitialized('creatorId') && $data->getCreatorId() !== null) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('discountPercentage') && $data->getDiscountPercentage() !== null) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('formSettingsFromDistributionChannel') && $data->getFormSettingsFromDistributionChannel() !== null) {
            $dataArray['formSettingsFromDistributionChannel'] = $data->getFormSettingsFromDistributionChannel();
        }
        if ($data->isInitialized('headerDiscount') && $data->getHeaderDiscount() !== null) {
            $dataArray['headerDiscount'] = $data->getHeaderDiscount();
        }
        if ($data->isInitialized('headerSurcharge') && $data->getHeaderSurcharge() !== null) {
            $dataArray['headerSurcharge'] = $data->getHeaderSurcharge();
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('nonStandardTaxId') && $data->getNonStandardTaxId() !== null) {
            $dataArray['nonStandardTaxId'] = $data->getNonStandardTaxId();
        }
        if ($data->isInitialized('orderDate') && $data->getOrderDate() !== null) {
            $dataArray['orderDate'] = $data->getOrderDate();
        }
        if ($data->isInitialized('orderQuantity') && $data->getOrderQuantity() !== null) {
            $dataArray['orderQuantity'] = $data->getOrderQuantity();
        }
        if ($data->isInitialized('paymentMethodId') && $data->getPaymentMethodId() !== null) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('recipientCountryCode') && $data->getRecipientCountryCode() !== null) {
            $dataArray['recipientCountryCode'] = $data->getRecipientCountryCode();
        }
        if ($data->isInitialized('recordAddress') && $data->getRecordAddress() !== null) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('recordComment') && $data->getRecordComment() !== null) {
            $dataArray['recordComment'] = $data->getRecordComment();
        }
        if ($data->isInitialized('recordCurrencyId') && $data->getRecordCurrencyId() !== null) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('recordEmailAddresses') && $data->getRecordEmailAddresses() !== null) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('recordFreeText') && $data->getRecordFreeText() !== null) {
            $dataArray['recordFreeText'] = $data->getRecordFreeText();
        }
        if ($data->isInitialized('recordOpening') && $data->getRecordOpening() !== null) {
            $dataArray['recordOpening'] = $data->getRecordOpening();
        }
        if ($data->isInitialized('reductionAdditionItems') && $data->getReductionAdditionItems() !== null) {
            $values_1 = [];
            foreach ($data->getReductionAdditionItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['reductionAdditionItems'] = $values_1;
        }
        if ($data->isInitialized('releases') && $data->getReleases() !== null) {
            $values_2 = [];
            foreach ($data->getReleases() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['releases'] = $values_2;
        }
        if ($data->isInitialized('residualQuantity') && $data->getResidualQuantity() !== null) {
            $dataArray['residualQuantity'] = $data->getResidualQuantity();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('senderCountryCode') && $data->getSenderCountryCode() !== null) {
            $dataArray['senderCountryCode'] = $data->getSenderCountryCode();
        }
        if ($data->isInitialized('sentToRecipient') && $data->getSentToRecipient() !== null) {
            $dataArray['sentToRecipient'] = $data->getSentToRecipient();
        }
        if ($data->isInitialized('shipmentMethodId') && $data->getShipmentMethodId() !== null) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
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
        if ($data->isInitialized('supplierBlanketPurchaseOrderNumber') && $data->getSupplierBlanketPurchaseOrderNumber() !== null) {
            $dataArray['supplierBlanketPurchaseOrderNumber'] = $data->getSupplierBlanketPurchaseOrderNumber();
        }
        if ($data->isInitialized('supplierId') && $data->getSupplierId() !== null) {
            $dataArray['supplierId'] = $data->getSupplierId();
        }
        if ($data->isInitialized('supplierQuotationNumber') && $data->getSupplierQuotationNumber() !== null) {
            $dataArray['supplierQuotationNumber'] = $data->getSupplierQuotationNumber();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_4 = [];
            foreach ($data->getTags() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['tags'] = $values_4;
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('termOfPaymentId') && $data->getTermOfPaymentId() !== null) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('unitPrice') && $data->getUnitPrice() !== null) {
            $dataArray['unitPrice'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('useManualUnitPrice') && $data->getUseManualUnitPrice() !== null) {
            $dataArray['useManualUnitPrice'] = $data->getUseManualUnitPrice();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class => false];
    }
}
