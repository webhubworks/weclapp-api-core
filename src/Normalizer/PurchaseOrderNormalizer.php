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
class PurchaseOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrder::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrder::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrder();
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('invoiced', $data) && \is_int($data['invoiced'])) {
            $data['invoiced'] = (bool) $data['invoiced'];
        }
        if (\array_key_exists('paid', $data) && \is_int($data['paid'])) {
            $data['paid'] = (bool) $data['paid'];
        }
        if (\array_key_exists('received', $data) && \is_int($data['received'])) {
            $data['received'] = (bool) $data['received'];
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
        if (\array_key_exists('disableEmailTemplate', $data) && $data['disableEmailTemplate'] !== null) {
            $object->setDisableEmailTemplate($data['disableEmailTemplate']);
            unset($data['disableEmailTemplate']);
        }
        elseif (\array_key_exists('disableEmailTemplate', $data) && $data['disableEmailTemplate'] === null) {
            $object->setDisableEmailTemplate(null);
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
        if (\array_key_exists('currencyConversionDate', $data) && $data['currencyConversionDate'] !== null) {
            $object->setCurrencyConversionDate($data['currencyConversionDate']);
            unset($data['currencyConversionDate']);
        }
        elseif (\array_key_exists('currencyConversionDate', $data) && $data['currencyConversionDate'] === null) {
            $object->setCurrencyConversionDate(null);
        }
        if (\array_key_exists('currencyConversionRate', $data) && $data['currencyConversionRate'] !== null) {
            $object->setCurrencyConversionRate($data['currencyConversionRate']);
            unset($data['currencyConversionRate']);
        }
        elseif (\array_key_exists('currencyConversionRate', $data) && $data['currencyConversionRate'] === null) {
            $object->setCurrencyConversionRate(null);
        }
        if (\array_key_exists('grossAmount', $data) && $data['grossAmount'] !== null) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        }
        elseif (\array_key_exists('grossAmount', $data) && $data['grossAmount'] === null) {
            $object->setGrossAmount(null);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] !== null) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        }
        elseif (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] === null) {
            $object->setGrossAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('headerDiscount', $data) && $data['headerDiscount'] !== null) {
            $object->setHeaderDiscount($data['headerDiscount']);
            unset($data['headerDiscount']);
        }
        elseif (\array_key_exists('headerDiscount', $data) && $data['headerDiscount'] === null) {
            $object->setHeaderDiscount(null);
        }
        if (\array_key_exists('headerSurcharge', $data) && $data['headerSurcharge'] !== null) {
            $object->setHeaderSurcharge($data['headerSurcharge']);
            unset($data['headerSurcharge']);
        }
        elseif (\array_key_exists('headerSurcharge', $data) && $data['headerSurcharge'] === null) {
            $object->setHeaderSurcharge(null);
        }
        if (\array_key_exists('netAmount', $data) && $data['netAmount'] !== null) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        }
        elseif (\array_key_exists('netAmount', $data) && $data['netAmount'] === null) {
            $object->setNetAmount(null);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] !== null) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        }
        elseif (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] === null) {
            $object->setNetAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] !== null) {
            $object->setNonStandardTaxId($data['nonStandardTaxId']);
            unset($data['nonStandardTaxId']);
        }
        elseif (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] === null) {
            $object->setNonStandardTaxId(null);
        }
        if (\array_key_exists('nonStandardTaxName', $data) && $data['nonStandardTaxName'] !== null) {
            $object->setNonStandardTaxName($data['nonStandardTaxName']);
            unset($data['nonStandardTaxName']);
        }
        elseif (\array_key_exists('nonStandardTaxName', $data) && $data['nonStandardTaxName'] === null) {
            $object->setNonStandardTaxName(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] !== null) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        elseif (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] === null) {
            $object->setPaymentMethodName(null);
        }
        if (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] !== null) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        }
        elseif (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] === null) {
            $object->setRecordCurrencyId(null);
        }
        if (\array_key_exists('recordCurrencyName', $data) && $data['recordCurrencyName'] !== null) {
            $object->setRecordCurrencyName($data['recordCurrencyName']);
            unset($data['recordCurrencyName']);
        }
        elseif (\array_key_exists('recordCurrencyName', $data) && $data['recordCurrencyName'] === null) {
            $object->setRecordCurrencyName(null);
        }
        if (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] !== null) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        }
        elseif (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] === null) {
            $object->setTermOfPaymentId(null);
        }
        if (\array_key_exists('termOfPaymentName', $data) && $data['termOfPaymentName'] !== null) {
            $object->setTermOfPaymentName($data['termOfPaymentName']);
            unset($data['termOfPaymentName']);
        }
        elseif (\array_key_exists('termOfPaymentName', $data) && $data['termOfPaymentName'] === null) {
            $object->setTermOfPaymentName(null);
        }
        if (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] !== null) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        }
        elseif (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] === null) {
            $object->setRecordEmailAddresses(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('responsibleUserUsername', $data) && $data['responsibleUserUsername'] !== null) {
            $object->setResponsibleUserUsername($data['responsibleUserUsername']);
            unset($data['responsibleUserUsername']);
        }
        elseif (\array_key_exists('responsibleUserUsername', $data) && $data['responsibleUserUsername'] === null) {
            $object->setResponsibleUserUsername(null);
        }
        if (\array_key_exists('servicePeriodFrom', $data) && $data['servicePeriodFrom'] !== null) {
            $object->setServicePeriodFrom($data['servicePeriodFrom']);
            unset($data['servicePeriodFrom']);
        }
        elseif (\array_key_exists('servicePeriodFrom', $data) && $data['servicePeriodFrom'] === null) {
            $object->setServicePeriodFrom(null);
        }
        if (\array_key_exists('servicePeriodTo', $data) && $data['servicePeriodTo'] !== null) {
            $object->setServicePeriodTo($data['servicePeriodTo']);
            unset($data['servicePeriodTo']);
        }
        elseif (\array_key_exists('servicePeriodTo', $data) && $data['servicePeriodTo'] === null) {
            $object->setServicePeriodTo(null);
        }
        if (\array_key_exists('supplierId', $data) && $data['supplierId'] !== null) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        }
        elseif (\array_key_exists('supplierId', $data) && $data['supplierId'] === null) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] !== null) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        elseif (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] === null) {
            $object->setSupplierNumber(null);
        }
        if (\array_key_exists('advancePaymentStatus', $data) && $data['advancePaymentStatus'] !== null) {
            $object->setAdvancePaymentStatus($data['advancePaymentStatus']);
            unset($data['advancePaymentStatus']);
        }
        elseif (\array_key_exists('advancePaymentStatus', $data) && $data['advancePaymentStatus'] === null) {
            $object->setAdvancePaymentStatus(null);
        }
        if (\array_key_exists('commercialLanguageCustomer', $data) && $data['commercialLanguageCustomer'] !== null) {
            $object->setCommercialLanguageCustomer($data['commercialLanguageCustomer']);
            unset($data['commercialLanguageCustomer']);
        }
        elseif (\array_key_exists('commercialLanguageCustomer', $data) && $data['commercialLanguageCustomer'] === null) {
            $object->setCommercialLanguageCustomer(null);
        }
        if (\array_key_exists('commission', $data) && $data['commission'] !== null) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        }
        elseif (\array_key_exists('commission', $data) && $data['commission'] === null) {
            $object->setCommission(null);
        }
        if (\array_key_exists('confirmationNumber', $data) && $data['confirmationNumber'] !== null) {
            $object->setConfirmationNumber($data['confirmationNumber']);
            unset($data['confirmationNumber']);
        }
        elseif (\array_key_exists('confirmationNumber', $data) && $data['confirmationNumber'] === null) {
            $object->setConfirmationNumber(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('externalPurchaseOrderNumber', $data) && $data['externalPurchaseOrderNumber'] !== null) {
            $object->setExternalPurchaseOrderNumber($data['externalPurchaseOrderNumber']);
            unset($data['externalPurchaseOrderNumber']);
        }
        elseif (\array_key_exists('externalPurchaseOrderNumber', $data) && $data['externalPurchaseOrderNumber'] === null) {
            $object->setExternalPurchaseOrderNumber(null);
        }
        if (\array_key_exists('formSettingsFromSalesChannel', $data) && $data['formSettingsFromSalesChannel'] !== null) {
            $object->setFormSettingsFromSalesChannel($data['formSettingsFromSalesChannel']);
            unset($data['formSettingsFromSalesChannel']);
        }
        elseif (\array_key_exists('formSettingsFromSalesChannel', $data) && $data['formSettingsFromSalesChannel'] === null) {
            $object->setFormSettingsFromSalesChannel(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('invoiced', $data) && $data['invoiced'] !== null) {
            $object->setInvoiced($data['invoiced']);
            unset($data['invoiced']);
        }
        elseif (\array_key_exists('invoiced', $data) && $data['invoiced'] === null) {
            $object->setInvoiced(null);
        }
        if (\array_key_exists('orderDate', $data) && $data['orderDate'] !== null) {
            $object->setOrderDate($data['orderDate']);
            unset($data['orderDate']);
        }
        elseif (\array_key_exists('orderDate', $data) && $data['orderDate'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('packageTrackingNumber', $data) && $data['packageTrackingNumber'] !== null) {
            $object->setPackageTrackingNumber($data['packageTrackingNumber']);
            unset($data['packageTrackingNumber']);
        }
        elseif (\array_key_exists('packageTrackingNumber', $data) && $data['packageTrackingNumber'] === null) {
            $object->setPackageTrackingNumber(null);
        }
        if (\array_key_exists('packageTrackingUrl', $data) && $data['packageTrackingUrl'] !== null) {
            $object->setPackageTrackingUrl($data['packageTrackingUrl']);
            unset($data['packageTrackingUrl']);
        }
        elseif (\array_key_exists('packageTrackingUrl', $data) && $data['packageTrackingUrl'] === null) {
            $object->setPackageTrackingUrl(null);
        }
        if (\array_key_exists('paid', $data) && $data['paid'] !== null) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        }
        elseif (\array_key_exists('paid', $data) && $data['paid'] === null) {
            $object->setPaid(null);
        }
        if (\array_key_exists('plannedDeliveryDate', $data) && $data['plannedDeliveryDate'] !== null) {
            $object->setPlannedDeliveryDate($data['plannedDeliveryDate']);
            unset($data['plannedDeliveryDate']);
        }
        elseif (\array_key_exists('plannedDeliveryDate', $data) && $data['plannedDeliveryDate'] === null) {
            $object->setPlannedDeliveryDate(null);
        }
        if (\array_key_exists('plannedShippingDate', $data) && $data['plannedShippingDate'] !== null) {
            $object->setPlannedShippingDate($data['plannedShippingDate']);
            unset($data['plannedShippingDate']);
        }
        elseif (\array_key_exists('plannedShippingDate', $data) && $data['plannedShippingDate'] === null) {
            $object->setPlannedShippingDate(null);
        }
        if (\array_key_exists('purchaseOrderItems', $data) && $data['purchaseOrderItems'] !== null) {
            $values_2 = [];
            foreach ($data['purchaseOrderItems'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\PurchaseOrderItem::class, 'json', $context);
            }
            $object->setPurchaseOrderItems($values_2);
            unset($data['purchaseOrderItems']);
        }
        elseif (\array_key_exists('purchaseOrderItems', $data) && $data['purchaseOrderItems'] === null) {
            $object->setPurchaseOrderItems(null);
        }
        if (\array_key_exists('purchaseOrderNumber', $data) && $data['purchaseOrderNumber'] !== null) {
            $object->setPurchaseOrderNumber($data['purchaseOrderNumber']);
            unset($data['purchaseOrderNumber']);
        }
        elseif (\array_key_exists('purchaseOrderNumber', $data) && $data['purchaseOrderNumber'] === null) {
            $object->setPurchaseOrderNumber(null);
        }
        if (\array_key_exists('purchaseOrderRequestId', $data) && $data['purchaseOrderRequestId'] !== null) {
            $object->setPurchaseOrderRequestId($data['purchaseOrderRequestId']);
            unset($data['purchaseOrderRequestId']);
        }
        elseif (\array_key_exists('purchaseOrderRequestId', $data) && $data['purchaseOrderRequestId'] === null) {
            $object->setPurchaseOrderRequestId(null);
        }
        if (\array_key_exists('purchaseOrderType', $data) && $data['purchaseOrderType'] !== null) {
            $object->setPurchaseOrderType($data['purchaseOrderType']);
            unset($data['purchaseOrderType']);
        }
        elseif (\array_key_exists('purchaseOrderType', $data) && $data['purchaseOrderType'] === null) {
            $object->setPurchaseOrderType(null);
        }
        if (\array_key_exists('received', $data) && $data['received'] !== null) {
            $object->setReceived($data['received']);
            unset($data['received']);
        }
        elseif (\array_key_exists('received', $data) && $data['received'] === null) {
            $object->setReceived(null);
        }
        if (\array_key_exists('recordAddress', $data) && $data['recordAddress'] !== null) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        }
        elseif (\array_key_exists('recordAddress', $data) && $data['recordAddress'] === null) {
            $object->setRecordAddress(null);
        }
        if (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] !== null) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        }
        elseif (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] === null) {
            $object->setSalesOrderId(null);
        }
        if (\array_key_exists('salesOrderNumber', $data) && $data['salesOrderNumber'] !== null) {
            $object->setSalesOrderNumber($data['salesOrderNumber']);
            unset($data['salesOrderNumber']);
        }
        elseif (\array_key_exists('salesOrderNumber', $data) && $data['salesOrderNumber'] === null) {
            $object->setSalesOrderNumber(null);
        }
        if (\array_key_exists('senderCountryCode', $data) && $data['senderCountryCode'] !== null) {
            $object->setSenderCountryCode($data['senderCountryCode']);
            unset($data['senderCountryCode']);
        }
        elseif (\array_key_exists('senderCountryCode', $data) && $data['senderCountryCode'] === null) {
            $object->setSenderCountryCode(null);
        }
        if (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] !== null) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        elseif (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] === null) {
            $object->setShipmentMethodId(null);
        }
        if (\array_key_exists('shipmentMethodName', $data) && $data['shipmentMethodName'] !== null) {
            $object->setShipmentMethodName($data['shipmentMethodName']);
            unset($data['shipmentMethodName']);
        }
        elseif (\array_key_exists('shipmentMethodName', $data) && $data['shipmentMethodName'] === null) {
            $object->setShipmentMethodName(null);
        }
        if (\array_key_exists('shippingCarrierId', $data) && $data['shippingCarrierId'] !== null) {
            $object->setShippingCarrierId($data['shippingCarrierId']);
            unset($data['shippingCarrierId']);
        }
        elseif (\array_key_exists('shippingCarrierId', $data) && $data['shippingCarrierId'] === null) {
            $object->setShippingCarrierId(null);
        }
        if (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] !== null) {
            $values_3 = [];
            foreach ($data['shippingCostItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\PurchaseOrderShippingCostItem::class, 'json', $context);
            }
            $object->setShippingCostItems($values_3);
            unset($data['shippingCostItems']);
        }
        elseif (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] === null) {
            $object->setShippingCostItems(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_4 = [];
            foreach ($data['statusHistory'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\PurchaseOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_4);
            unset($data['statusHistory']);
        }
        elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('supplierHabitualExporterLetterOfIntentId', $data) && $data['supplierHabitualExporterLetterOfIntentId'] !== null) {
            $object->setSupplierHabitualExporterLetterOfIntentId($data['supplierHabitualExporterLetterOfIntentId']);
            unset($data['supplierHabitualExporterLetterOfIntentId']);
        }
        elseif (\array_key_exists('supplierHabitualExporterLetterOfIntentId', $data) && $data['supplierHabitualExporterLetterOfIntentId'] === null) {
            $object->setSupplierHabitualExporterLetterOfIntentId(null);
        }
        if (\array_key_exists('supplierQuotationNumber', $data) && $data['supplierQuotationNumber'] !== null) {
            $object->setSupplierQuotationNumber($data['supplierQuotationNumber']);
            unset($data['supplierQuotationNumber']);
        }
        elseif (\array_key_exists('supplierQuotationNumber', $data) && $data['supplierQuotationNumber'] === null) {
            $object->setSupplierQuotationNumber(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        if (\array_key_exists('warehouseName', $data) && $data['warehouseName'] !== null) {
            $object->setWarehouseName($data['warehouseName']);
            unset($data['warehouseName']);
        }
        elseif (\array_key_exists('warehouseName', $data) && $data['warehouseName'] === null) {
            $object->setWarehouseName(null);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
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
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('disableEmailTemplate') && null !== $data->getDisableEmailTemplate()) {
            $dataArray['disableEmailTemplate'] = $data->getDisableEmailTemplate();
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
        if ($data->isInitialized('currencyConversionDate') && null !== $data->getCurrencyConversionDate()) {
            $dataArray['currencyConversionDate'] = $data->getCurrencyConversionDate();
        }
        if ($data->isInitialized('currencyConversionRate') && null !== $data->getCurrencyConversionRate()) {
            $dataArray['currencyConversionRate'] = $data->getCurrencyConversionRate();
        }
        if ($data->isInitialized('grossAmount') && null !== $data->getGrossAmount()) {
            $dataArray['grossAmount'] = $data->getGrossAmount();
        }
        if ($data->isInitialized('grossAmountInCompanyCurrency') && null !== $data->getGrossAmountInCompanyCurrency()) {
            $dataArray['grossAmountInCompanyCurrency'] = $data->getGrossAmountInCompanyCurrency();
        }
        if ($data->isInitialized('headerDiscount') && null !== $data->getHeaderDiscount()) {
            $dataArray['headerDiscount'] = $data->getHeaderDiscount();
        }
        if ($data->isInitialized('headerSurcharge') && null !== $data->getHeaderSurcharge()) {
            $dataArray['headerSurcharge'] = $data->getHeaderSurcharge();
        }
        if ($data->isInitialized('netAmount') && null !== $data->getNetAmount()) {
            $dataArray['netAmount'] = $data->getNetAmount();
        }
        if ($data->isInitialized('netAmountInCompanyCurrency') && null !== $data->getNetAmountInCompanyCurrency()) {
            $dataArray['netAmountInCompanyCurrency'] = $data->getNetAmountInCompanyCurrency();
        }
        if ($data->isInitialized('nonStandardTaxId') && null !== $data->getNonStandardTaxId()) {
            $dataArray['nonStandardTaxId'] = $data->getNonStandardTaxId();
        }
        if ($data->isInitialized('nonStandardTaxName') && null !== $data->getNonStandardTaxName()) {
            $dataArray['nonStandardTaxName'] = $data->getNonStandardTaxName();
        }
        if ($data->isInitialized('paymentMethodId') && null !== $data->getPaymentMethodId()) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentMethodName') && null !== $data->getPaymentMethodName()) {
            $dataArray['paymentMethodName'] = $data->getPaymentMethodName();
        }
        if ($data->isInitialized('recordCurrencyId') && null !== $data->getRecordCurrencyId()) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('recordCurrencyName') && null !== $data->getRecordCurrencyName()) {
            $dataArray['recordCurrencyName'] = $data->getRecordCurrencyName();
        }
        if ($data->isInitialized('termOfPaymentId') && null !== $data->getTermOfPaymentId()) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('termOfPaymentName') && null !== $data->getTermOfPaymentName()) {
            $dataArray['termOfPaymentName'] = $data->getTermOfPaymentName();
        }
        if ($data->isInitialized('recordEmailAddresses') && null !== $data->getRecordEmailAddresses()) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && null !== $data->getResponsibleUserUsername()) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('servicePeriodFrom') && null !== $data->getServicePeriodFrom()) {
            $dataArray['servicePeriodFrom'] = $data->getServicePeriodFrom();
        }
        if ($data->isInitialized('servicePeriodTo') && null !== $data->getServicePeriodTo()) {
            $dataArray['servicePeriodTo'] = $data->getServicePeriodTo();
        }
        if ($data->isInitialized('supplierId') && null !== $data->getSupplierId()) {
            $dataArray['supplierId'] = $data->getSupplierId();
        }
        if ($data->isInitialized('supplierNumber') && null !== $data->getSupplierNumber()) {
            $dataArray['supplierNumber'] = $data->getSupplierNumber();
        }
        if ($data->isInitialized('advancePaymentStatus') && null !== $data->getAdvancePaymentStatus()) {
            $dataArray['advancePaymentStatus'] = $data->getAdvancePaymentStatus();
        }
        if ($data->isInitialized('commercialLanguageCustomer') && null !== $data->getCommercialLanguageCustomer()) {
            $dataArray['commercialLanguageCustomer'] = $data->getCommercialLanguageCustomer();
        }
        if ($data->isInitialized('commission') && null !== $data->getCommission()) {
            $dataArray['commission'] = $data->getCommission();
        }
        if ($data->isInitialized('confirmationNumber') && null !== $data->getConfirmationNumber()) {
            $dataArray['confirmationNumber'] = $data->getConfirmationNumber();
        }
        if ($data->isInitialized('deliveryAddress') && null !== $data->getDeliveryAddress()) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('externalPurchaseOrderNumber') && null !== $data->getExternalPurchaseOrderNumber()) {
            $dataArray['externalPurchaseOrderNumber'] = $data->getExternalPurchaseOrderNumber();
        }
        if ($data->isInitialized('formSettingsFromSalesChannel') && null !== $data->getFormSettingsFromSalesChannel()) {
            $dataArray['formSettingsFromSalesChannel'] = $data->getFormSettingsFromSalesChannel();
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('invoiced') && null !== $data->getInvoiced()) {
            $dataArray['invoiced'] = $data->getInvoiced();
        }
        if ($data->isInitialized('orderDate') && null !== $data->getOrderDate()) {
            $dataArray['orderDate'] = $data->getOrderDate();
        }
        if ($data->isInitialized('packageTrackingNumber') && null !== $data->getPackageTrackingNumber()) {
            $dataArray['packageTrackingNumber'] = $data->getPackageTrackingNumber();
        }
        if ($data->isInitialized('packageTrackingUrl') && null !== $data->getPackageTrackingUrl()) {
            $dataArray['packageTrackingUrl'] = $data->getPackageTrackingUrl();
        }
        if ($data->isInitialized('paid') && null !== $data->getPaid()) {
            $dataArray['paid'] = $data->getPaid();
        }
        if ($data->isInitialized('plannedDeliveryDate') && null !== $data->getPlannedDeliveryDate()) {
            $dataArray['plannedDeliveryDate'] = $data->getPlannedDeliveryDate();
        }
        if ($data->isInitialized('plannedShippingDate') && null !== $data->getPlannedShippingDate()) {
            $dataArray['plannedShippingDate'] = $data->getPlannedShippingDate();
        }
        if ($data->isInitialized('purchaseOrderItems') && null !== $data->getPurchaseOrderItems()) {
            $values_2 = [];
            foreach ($data->getPurchaseOrderItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['purchaseOrderItems'] = $values_2;
        }
        if ($data->isInitialized('purchaseOrderNumber') && null !== $data->getPurchaseOrderNumber()) {
            $dataArray['purchaseOrderNumber'] = $data->getPurchaseOrderNumber();
        }
        if ($data->isInitialized('purchaseOrderRequestId') && null !== $data->getPurchaseOrderRequestId()) {
            $dataArray['purchaseOrderRequestId'] = $data->getPurchaseOrderRequestId();
        }
        if ($data->isInitialized('purchaseOrderType') && null !== $data->getPurchaseOrderType()) {
            $dataArray['purchaseOrderType'] = $data->getPurchaseOrderType();
        }
        if ($data->isInitialized('received') && null !== $data->getReceived()) {
            $dataArray['received'] = $data->getReceived();
        }
        if ($data->isInitialized('recordAddress') && null !== $data->getRecordAddress()) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('salesOrderId') && null !== $data->getSalesOrderId()) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
        }
        if ($data->isInitialized('salesOrderNumber') && null !== $data->getSalesOrderNumber()) {
            $dataArray['salesOrderNumber'] = $data->getSalesOrderNumber();
        }
        if ($data->isInitialized('senderCountryCode') && null !== $data->getSenderCountryCode()) {
            $dataArray['senderCountryCode'] = $data->getSenderCountryCode();
        }
        if ($data->isInitialized('shipmentMethodId') && null !== $data->getShipmentMethodId()) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('shipmentMethodName') && null !== $data->getShipmentMethodName()) {
            $dataArray['shipmentMethodName'] = $data->getShipmentMethodName();
        }
        if ($data->isInitialized('shippingCarrierId') && null !== $data->getShippingCarrierId()) {
            $dataArray['shippingCarrierId'] = $data->getShippingCarrierId();
        }
        if ($data->isInitialized('shippingCostItems') && null !== $data->getShippingCostItems()) {
            $values_3 = [];
            foreach ($data->getShippingCostItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['shippingCostItems'] = $values_3;
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && null !== $data->getStatusHistory()) {
            $values_4 = [];
            foreach ($data->getStatusHistory() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_4;
        }
        if ($data->isInitialized('supplierHabitualExporterLetterOfIntentId') && null !== $data->getSupplierHabitualExporterLetterOfIntentId()) {
            $dataArray['supplierHabitualExporterLetterOfIntentId'] = $data->getSupplierHabitualExporterLetterOfIntentId();
        }
        if ($data->isInitialized('supplierQuotationNumber') && null !== $data->getSupplierQuotationNumber()) {
            $dataArray['supplierQuotationNumber'] = $data->getSupplierQuotationNumber();
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        if ($data->isInitialized('warehouseName') && null !== $data->getWarehouseName()) {
            $dataArray['warehouseName'] = $data->getWarehouseName();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrder::class => false];
    }
}