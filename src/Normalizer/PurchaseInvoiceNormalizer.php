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
class PurchaseInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseInvoice::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseInvoice::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseInvoice();
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('createdViaOcr', $data) && \is_int($data['createdViaOcr'])) {
            $data['createdViaOcr'] = (bool) $data['createdViaOcr'];
        }
        if (\array_key_exists('creditResetsOrderState', $data) && \is_int($data['creditResetsOrderState'])) {
            $data['creditResetsOrderState'] = (bool) $data['creditResetsOrderState'];
        }
        if (\array_key_exists('grossPrices', $data) && \is_int($data['grossPrices'])) {
            $data['grossPrices'] = (bool) $data['grossPrices'];
        }
        if (\array_key_exists('paymentBlock', $data) && \is_int($data['paymentBlock'])) {
            $data['paymentBlock'] = (bool) $data['paymentBlock'];
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
        if (\array_key_exists('bookingDate', $data) && $data['bookingDate'] !== null) {
            $object->setBookingDate($data['bookingDate']);
            unset($data['bookingDate']);
        }
        elseif (\array_key_exists('bookingDate', $data) && $data['bookingDate'] === null) {
            $object->setBookingDate(null);
        }
        if (\array_key_exists('bookingText', $data) && $data['bookingText'] !== null) {
            $object->setBookingText($data['bookingText']);
            unset($data['bookingText']);
        }
        elseif (\array_key_exists('bookingText', $data) && $data['bookingText'] === null) {
            $object->setBookingText(null);
        }
        if (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] !== null) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        }
        elseif (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] === null) {
            $object->setCancellationDate(null);
        }
        if (\array_key_exists('costCenterId', $data) && $data['costCenterId'] !== null) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        elseif (\array_key_exists('costCenterId', $data) && $data['costCenterId'] === null) {
            $object->setCostCenterId(null);
        }
        if (\array_key_exists('costCenterNumber', $data) && $data['costCenterNumber'] !== null) {
            $object->setCostCenterNumber($data['costCenterNumber']);
            unset($data['costCenterNumber']);
        }
        elseif (\array_key_exists('costCenterNumber', $data) && $data['costCenterNumber'] === null) {
            $object->setCostCenterNumber(null);
        }
        if (\array_key_exists('costTypeId', $data) && $data['costTypeId'] !== null) {
            $object->setCostTypeId($data['costTypeId']);
            unset($data['costTypeId']);
        }
        elseif (\array_key_exists('costTypeId', $data) && $data['costTypeId'] === null) {
            $object->setCostTypeId(null);
        }
        if (\array_key_exists('createdViaOcr', $data) && $data['createdViaOcr'] !== null) {
            $object->setCreatedViaOcr($data['createdViaOcr']);
            unset($data['createdViaOcr']);
        }
        elseif (\array_key_exists('createdViaOcr', $data) && $data['createdViaOcr'] === null) {
            $object->setCreatedViaOcr(null);
        }
        if (\array_key_exists('creditResetsOrderState', $data) && $data['creditResetsOrderState'] !== null) {
            $object->setCreditResetsOrderState($data['creditResetsOrderState']);
            unset($data['creditResetsOrderState']);
        }
        elseif (\array_key_exists('creditResetsOrderState', $data) && $data['creditResetsOrderState'] === null) {
            $object->setCreditResetsOrderState(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] !== null) {
            $object->setDeliveryDate($data['deliveryDate']);
            unset($data['deliveryDate']);
        }
        elseif (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] === null) {
            $object->setDeliveryDate(null);
        }
        if (\array_key_exists('dueDate', $data) && $data['dueDate'] !== null) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        }
        elseif (\array_key_exists('dueDate', $data) && $data['dueDate'] === null) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('grossAmountOfHeaderTaxes', $data) && $data['grossAmountOfHeaderTaxes'] !== null) {
            $object->setGrossAmountOfHeaderTaxes($data['grossAmountOfHeaderTaxes']);
            unset($data['grossAmountOfHeaderTaxes']);
        }
        elseif (\array_key_exists('grossAmountOfHeaderTaxes', $data) && $data['grossAmountOfHeaderTaxes'] === null) {
            $object->setGrossAmountOfHeaderTaxes(null);
        }
        if (\array_key_exists('grossAmountOfHeaderTaxesInCompanyCurrency', $data) && $data['grossAmountOfHeaderTaxesInCompanyCurrency'] !== null) {
            $object->setGrossAmountOfHeaderTaxesInCompanyCurrency($data['grossAmountOfHeaderTaxesInCompanyCurrency']);
            unset($data['grossAmountOfHeaderTaxesInCompanyCurrency']);
        }
        elseif (\array_key_exists('grossAmountOfHeaderTaxesInCompanyCurrency', $data) && $data['grossAmountOfHeaderTaxesInCompanyCurrency'] === null) {
            $object->setGrossAmountOfHeaderTaxesInCompanyCurrency(null);
        }
        if (\array_key_exists('grossPrices', $data) && $data['grossPrices'] !== null) {
            $object->setGrossPrices($data['grossPrices']);
            unset($data['grossPrices']);
        }
        elseif (\array_key_exists('grossPrices', $data) && $data['grossPrices'] === null) {
            $object->setGrossPrices(null);
        }
        if (\array_key_exists('importSalesTaxAmount', $data) && $data['importSalesTaxAmount'] !== null) {
            $object->setImportSalesTaxAmount($data['importSalesTaxAmount']);
            unset($data['importSalesTaxAmount']);
        }
        elseif (\array_key_exists('importSalesTaxAmount', $data) && $data['importSalesTaxAmount'] === null) {
            $object->setImportSalesTaxAmount(null);
        }
        if (\array_key_exists('importSalesTaxId', $data) && $data['importSalesTaxId'] !== null) {
            $object->setImportSalesTaxId($data['importSalesTaxId']);
            unset($data['importSalesTaxId']);
        }
        elseif (\array_key_exists('importSalesTaxId', $data) && $data['importSalesTaxId'] === null) {
            $object->setImportSalesTaxId(null);
        }
        if (\array_key_exists('internalInvoiceNumber', $data) && $data['internalInvoiceNumber'] !== null) {
            $object->setInternalInvoiceNumber($data['internalInvoiceNumber']);
            unset($data['internalInvoiceNumber']);
        }
        elseif (\array_key_exists('internalInvoiceNumber', $data) && $data['internalInvoiceNumber'] === null) {
            $object->setInternalInvoiceNumber(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] !== null) {
            $object->setInvoiceDate($data['invoiceDate']);
            unset($data['invoiceDate']);
        }
        elseif (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] === null) {
            $object->setInvoiceDate(null);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('paymentBlock', $data) && $data['paymentBlock'] !== null) {
            $object->setPaymentBlock($data['paymentBlock']);
            unset($data['paymentBlock']);
        }
        elseif (\array_key_exists('paymentBlock', $data) && $data['paymentBlock'] === null) {
            $object->setPaymentBlock(null);
        }
        if (\array_key_exists('paymentBlockNote', $data) && $data['paymentBlockNote'] !== null) {
            $object->setPaymentBlockNote($data['paymentBlockNote']);
            unset($data['paymentBlockNote']);
        }
        elseif (\array_key_exists('paymentBlockNote', $data) && $data['paymentBlockNote'] === null) {
            $object->setPaymentBlockNote(null);
        }
        if (\array_key_exists('paymentStatus', $data) && $data['paymentStatus'] !== null) {
            $object->setPaymentStatus($data['paymentStatus']);
            unset($data['paymentStatus']);
        }
        elseif (\array_key_exists('paymentStatus', $data) && $data['paymentStatus'] === null) {
            $object->setPaymentStatus(null);
        }
        if (\array_key_exists('precedingPurchaseInvoiceId', $data) && $data['precedingPurchaseInvoiceId'] !== null) {
            $object->setPrecedingPurchaseInvoiceId($data['precedingPurchaseInvoiceId']);
            unset($data['precedingPurchaseInvoiceId']);
        }
        elseif (\array_key_exists('precedingPurchaseInvoiceId', $data) && $data['precedingPurchaseInvoiceId'] === null) {
            $object->setPrecedingPurchaseInvoiceId(null);
        }
        if (\array_key_exists('pricingDate', $data) && $data['pricingDate'] !== null) {
            $object->setPricingDate($data['pricingDate']);
            unset($data['pricingDate']);
        }
        elseif (\array_key_exists('pricingDate', $data) && $data['pricingDate'] === null) {
            $object->setPricingDate(null);
        }
        if (\array_key_exists('purchaseInvoiceItems', $data) && $data['purchaseInvoiceItems'] !== null) {
            $values_2 = [];
            foreach ($data['purchaseInvoiceItems'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem::class, 'json', $context);
            }
            $object->setPurchaseInvoiceItems($values_2);
            unset($data['purchaseInvoiceItems']);
        }
        elseif (\array_key_exists('purchaseInvoiceItems', $data) && $data['purchaseInvoiceItems'] === null) {
            $object->setPurchaseInvoiceItems(null);
        }
        if (\array_key_exists('purchaseInvoiceType', $data) && $data['purchaseInvoiceType'] !== null) {
            $object->setPurchaseInvoiceType($data['purchaseInvoiceType']);
            unset($data['purchaseInvoiceType']);
        }
        elseif (\array_key_exists('purchaseInvoiceType', $data) && $data['purchaseInvoiceType'] === null) {
            $object->setPurchaseInvoiceType(null);
        }
        if (\array_key_exists('purchaseOrders', $data) && $data['purchaseOrders'] !== null) {
            $values_3 = [];
            foreach ($data['purchaseOrders'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPurchaseOrders($values_3);
            unset($data['purchaseOrders']);
        }
        elseif (\array_key_exists('purchaseOrders', $data) && $data['purchaseOrders'] === null) {
            $object->setPurchaseOrders(null);
        }
        if (\array_key_exists('recordAddress', $data) && $data['recordAddress'] !== null) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        }
        elseif (\array_key_exists('recordAddress', $data) && $data['recordAddress'] === null) {
            $object->setRecordAddress(null);
        }
        if (\array_key_exists('senderCountryCode', $data) && $data['senderCountryCode'] !== null) {
            $object->setSenderCountryCode($data['senderCountryCode']);
            unset($data['senderCountryCode']);
        }
        elseif (\array_key_exists('senderCountryCode', $data) && $data['senderCountryCode'] === null) {
            $object->setSenderCountryCode(null);
        }
        if (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] !== null) {
            $values_4 = [];
            foreach ($data['shippingCostItems'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem::class, 'json', $context);
            }
            $object->setShippingCostItems($values_4);
            unset($data['shippingCostItems']);
        }
        elseif (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] === null) {
            $object->setShippingCostItems(null);
        }
        if (\array_key_exists('shippingDate', $data) && $data['shippingDate'] !== null) {
            $object->setShippingDate($data['shippingDate']);
            unset($data['shippingDate']);
        }
        elseif (\array_key_exists('shippingDate', $data) && $data['shippingDate'] === null) {
            $object->setShippingDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_5 = [];
            foreach ($data['statusHistory'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_5);
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
        if (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] !== null) {
            $object->setVatRegistrationNumber($data['vatRegistrationNumber']);
            unset($data['vatRegistrationNumber']);
        }
        elseif (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] === null) {
            $object->setVatRegistrationNumber(null);
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
        if ($data->isInitialized('bookingDate') && null !== $data->getBookingDate()) {
            $dataArray['bookingDate'] = $data->getBookingDate();
        }
        if ($data->isInitialized('bookingText') && null !== $data->getBookingText()) {
            $dataArray['bookingText'] = $data->getBookingText();
        }
        if ($data->isInitialized('cancellationDate') && null !== $data->getCancellationDate()) {
            $dataArray['cancellationDate'] = $data->getCancellationDate();
        }
        if ($data->isInitialized('costCenterId') && null !== $data->getCostCenterId()) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('costCenterNumber') && null !== $data->getCostCenterNumber()) {
            $dataArray['costCenterNumber'] = $data->getCostCenterNumber();
        }
        if ($data->isInitialized('costTypeId') && null !== $data->getCostTypeId()) {
            $dataArray['costTypeId'] = $data->getCostTypeId();
        }
        if ($data->isInitialized('createdViaOcr') && null !== $data->getCreatedViaOcr()) {
            $dataArray['createdViaOcr'] = $data->getCreatedViaOcr();
        }
        if ($data->isInitialized('creditResetsOrderState') && null !== $data->getCreditResetsOrderState()) {
            $dataArray['creditResetsOrderState'] = $data->getCreditResetsOrderState();
        }
        if ($data->isInitialized('deliveryAddress') && null !== $data->getDeliveryAddress()) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryDate') && null !== $data->getDeliveryDate()) {
            $dataArray['deliveryDate'] = $data->getDeliveryDate();
        }
        if ($data->isInitialized('dueDate') && null !== $data->getDueDate()) {
            $dataArray['dueDate'] = $data->getDueDate();
        }
        if ($data->isInitialized('grossAmountOfHeaderTaxes') && null !== $data->getGrossAmountOfHeaderTaxes()) {
            $dataArray['grossAmountOfHeaderTaxes'] = $data->getGrossAmountOfHeaderTaxes();
        }
        if ($data->isInitialized('grossAmountOfHeaderTaxesInCompanyCurrency') && null !== $data->getGrossAmountOfHeaderTaxesInCompanyCurrency()) {
            $dataArray['grossAmountOfHeaderTaxesInCompanyCurrency'] = $data->getGrossAmountOfHeaderTaxesInCompanyCurrency();
        }
        if ($data->isInitialized('grossPrices') && null !== $data->getGrossPrices()) {
            $dataArray['grossPrices'] = $data->getGrossPrices();
        }
        if ($data->isInitialized('importSalesTaxAmount') && null !== $data->getImportSalesTaxAmount()) {
            $dataArray['importSalesTaxAmount'] = $data->getImportSalesTaxAmount();
        }
        if ($data->isInitialized('importSalesTaxId') && null !== $data->getImportSalesTaxId()) {
            $dataArray['importSalesTaxId'] = $data->getImportSalesTaxId();
        }
        if ($data->isInitialized('internalInvoiceNumber') && null !== $data->getInternalInvoiceNumber()) {
            $dataArray['internalInvoiceNumber'] = $data->getInternalInvoiceNumber();
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('invoiceDate') && null !== $data->getInvoiceDate()) {
            $dataArray['invoiceDate'] = $data->getInvoiceDate();
        }
        if ($data->isInitialized('invoiceNumber') && null !== $data->getInvoiceNumber()) {
            $dataArray['invoiceNumber'] = $data->getInvoiceNumber();
        }
        if ($data->isInitialized('paymentBlock') && null !== $data->getPaymentBlock()) {
            $dataArray['paymentBlock'] = $data->getPaymentBlock();
        }
        if ($data->isInitialized('paymentBlockNote') && null !== $data->getPaymentBlockNote()) {
            $dataArray['paymentBlockNote'] = $data->getPaymentBlockNote();
        }
        if ($data->isInitialized('paymentStatus') && null !== $data->getPaymentStatus()) {
            $dataArray['paymentStatus'] = $data->getPaymentStatus();
        }
        if ($data->isInitialized('precedingPurchaseInvoiceId') && null !== $data->getPrecedingPurchaseInvoiceId()) {
            $dataArray['precedingPurchaseInvoiceId'] = $data->getPrecedingPurchaseInvoiceId();
        }
        if ($data->isInitialized('pricingDate') && null !== $data->getPricingDate()) {
            $dataArray['pricingDate'] = $data->getPricingDate();
        }
        if ($data->isInitialized('purchaseInvoiceItems') && null !== $data->getPurchaseInvoiceItems()) {
            $values_2 = [];
            foreach ($data->getPurchaseInvoiceItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['purchaseInvoiceItems'] = $values_2;
        }
        if ($data->isInitialized('purchaseInvoiceType') && null !== $data->getPurchaseInvoiceType()) {
            $dataArray['purchaseInvoiceType'] = $data->getPurchaseInvoiceType();
        }
        if ($data->isInitialized('purchaseOrders') && null !== $data->getPurchaseOrders()) {
            $values_3 = [];
            foreach ($data->getPurchaseOrders() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['purchaseOrders'] = $values_3;
        }
        if ($data->isInitialized('recordAddress') && null !== $data->getRecordAddress()) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('senderCountryCode') && null !== $data->getSenderCountryCode()) {
            $dataArray['senderCountryCode'] = $data->getSenderCountryCode();
        }
        if ($data->isInitialized('shippingCostItems') && null !== $data->getShippingCostItems()) {
            $values_4 = [];
            foreach ($data->getShippingCostItems() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['shippingCostItems'] = $values_4;
        }
        if ($data->isInitialized('shippingDate') && null !== $data->getShippingDate()) {
            $dataArray['shippingDate'] = $data->getShippingDate();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && null !== $data->getStatusHistory()) {
            $values_5 = [];
            foreach ($data->getStatusHistory() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_5;
        }
        if ($data->isInitialized('supplierHabitualExporterLetterOfIntentId') && null !== $data->getSupplierHabitualExporterLetterOfIntentId()) {
            $dataArray['supplierHabitualExporterLetterOfIntentId'] = $data->getSupplierHabitualExporterLetterOfIntentId();
        }
        if ($data->isInitialized('vatRegistrationNumber') && null !== $data->getVatRegistrationNumber()) {
            $dataArray['vatRegistrationNumber'] = $data->getVatRegistrationNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseInvoice::class => false];
    }
}