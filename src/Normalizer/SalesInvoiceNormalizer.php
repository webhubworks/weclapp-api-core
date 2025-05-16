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

class SalesInvoiceNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesInvoice::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesInvoice::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesInvoice;
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('factoring', $data) && \is_int($data['factoring'])) {
            $data['factoring'] = (bool) $data['factoring'];
        }
        if (\array_key_exists('cancellationSlipCommissionBlock', $data) && \is_int($data['cancellationSlipCommissionBlock'])) {
            $data['cancellationSlipCommissionBlock'] = (bool) $data['cancellationSlipCommissionBlock'];
        }
        if (\array_key_exists('cancellationSlipCommissionSettlementDone', $data) && \is_int($data['cancellationSlipCommissionSettlementDone'])) {
            $data['cancellationSlipCommissionSettlementDone'] = (bool) $data['cancellationSlipCommissionSettlementDone'];
        }
        if (\array_key_exists('commissionBlock', $data) && \is_int($data['commissionBlock'])) {
            $data['commissionBlock'] = (bool) $data['commissionBlock'];
        }
        if (\array_key_exists('commissionSettlementDone', $data) && \is_int($data['commissionSettlementDone'])) {
            $data['commissionSettlementDone'] = (bool) $data['commissionSettlementDone'];
        }
        if (\array_key_exists('creditResetsOrderState', $data) && \is_int($data['creditResetsOrderState'])) {
            $data['creditResetsOrderState'] = (bool) $data['creditResetsOrderState'];
        }
        if (\array_key_exists('directDebitFileCreated', $data) && \is_int($data['directDebitFileCreated'])) {
            $data['directDebitFileCreated'] = (bool) $data['directDebitFileCreated'];
        }
        if (\array_key_exists('paid', $data) && \is_int($data['paid'])) {
            $data['paid'] = (bool) $data['paid'];
        }
        if (\array_key_exists('recordCommentInheritance', $data) && \is_int($data['recordCommentInheritance'])) {
            $data['recordCommentInheritance'] = (bool) $data['recordCommentInheritance'];
        }
        if (\array_key_exists('recordFreeTextInheritance', $data) && \is_int($data['recordFreeTextInheritance'])) {
            $data['recordFreeTextInheritance'] = (bool) $data['recordFreeTextInheritance'];
        }
        if (\array_key_exists('recordOpeningInheritance', $data) && \is_int($data['recordOpeningInheritance'])) {
            $data['recordOpeningInheritance'] = (bool) $data['recordOpeningInheritance'];
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
        if (\array_key_exists('currencyConversionDate', $data)) {
            $object->setCurrencyConversionDate($data['currencyConversionDate']);
            unset($data['currencyConversionDate']);
        }
        if (\array_key_exists('currencyConversionRate', $data)) {
            $object->setCurrencyConversionRate($data['currencyConversionRate']);
            unset($data['currencyConversionRate']);
        }
        if (\array_key_exists('grossAmount', $data)) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data)) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        }
        if (\array_key_exists('headerDiscount', $data)) {
            $object->setHeaderDiscount($data['headerDiscount']);
            unset($data['headerDiscount']);
        }
        if (\array_key_exists('headerSurcharge', $data)) {
            $object->setHeaderSurcharge($data['headerSurcharge']);
            unset($data['headerSurcharge']);
        }
        if (\array_key_exists('netAmount', $data)) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data)) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        }
        if (\array_key_exists('nonStandardTaxId', $data)) {
            $object->setNonStandardTaxId($data['nonStandardTaxId']);
            unset($data['nonStandardTaxId']);
        }
        if (\array_key_exists('nonStandardTaxName', $data)) {
            $object->setNonStandardTaxName($data['nonStandardTaxName']);
            unset($data['nonStandardTaxName']);
        }
        if (\array_key_exists('paymentMethodId', $data)) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        if (\array_key_exists('paymentMethodName', $data)) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        if (\array_key_exists('recordCurrencyId', $data)) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        }
        if (\array_key_exists('recordCurrencyName', $data)) {
            $object->setRecordCurrencyName($data['recordCurrencyName']);
            unset($data['recordCurrencyName']);
        }
        if (\array_key_exists('termOfPaymentId', $data)) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        }
        if (\array_key_exists('termOfPaymentName', $data)) {
            $object->setTermOfPaymentName($data['termOfPaymentName']);
            unset($data['termOfPaymentName']);
        }
        if (\array_key_exists('commission', $data)) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        }
        if (\array_key_exists('commissionSalesPartners', $data)) {
            $values_2 = [];
            foreach ($data['commissionSalesPartners'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_2);
            unset($data['commissionSalesPartners']);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('customerNumber', $data)) {
            $object->setCustomerNumber($data['customerNumber']);
            unset($data['customerNumber']);
        }
        if (\array_key_exists('dispatchCountryCode', $data)) {
            $object->setDispatchCountryCode($data['dispatchCountryCode']);
            unset($data['dispatchCountryCode']);
        }
        if (\array_key_exists('factoring', $data)) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        }
        if (\array_key_exists('pricingDate', $data)) {
            $object->setPricingDate($data['pricingDate']);
            unset($data['pricingDate']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('responsibleUserUsername', $data)) {
            $object->setResponsibleUserUsername($data['responsibleUserUsername']);
            unset($data['responsibleUserUsername']);
        }
        if (\array_key_exists('salesChannel', $data)) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        if (\array_key_exists('servicePeriodFrom', $data)) {
            $object->setServicePeriodFrom($data['servicePeriodFrom']);
            unset($data['servicePeriodFrom']);
        }
        if (\array_key_exists('servicePeriodTo', $data)) {
            $object->setServicePeriodTo($data['servicePeriodTo']);
            unset($data['servicePeriodTo']);
        }
        if (\array_key_exists('shipmentMethodId', $data)) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        if (\array_key_exists('shipmentMethodName', $data)) {
            $object->setShipmentMethodName($data['shipmentMethodName']);
            unset($data['shipmentMethodName']);
        }
        if (\array_key_exists('bookingDate', $data)) {
            $object->setBookingDate($data['bookingDate']);
            unset($data['bookingDate']);
        }
        if (\array_key_exists('bookingText', $data)) {
            $object->setBookingText($data['bookingText']);
            unset($data['bookingText']);
        }
        if (\array_key_exists('cancellationDate', $data)) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        }
        if (\array_key_exists('cancellationNumber', $data)) {
            $object->setCancellationNumber($data['cancellationNumber']);
            unset($data['cancellationNumber']);
        }
        if (\array_key_exists('cancellationSlipCommissionBlock', $data)) {
            $object->setCancellationSlipCommissionBlock($data['cancellationSlipCommissionBlock']);
            unset($data['cancellationSlipCommissionBlock']);
        }
        if (\array_key_exists('cancellationSlipCommissionSettlementDone', $data)) {
            $object->setCancellationSlipCommissionSettlementDone($data['cancellationSlipCommissionSettlementDone']);
            unset($data['cancellationSlipCommissionSettlementDone']);
        }
        if (\array_key_exists('collectiveInvoicePositionPrintType', $data)) {
            $object->setCollectiveInvoicePositionPrintType($data['collectiveInvoicePositionPrintType']);
            unset($data['collectiveInvoicePositionPrintType']);
        }
        if (\array_key_exists('commissionBlock', $data)) {
            $object->setCommissionBlock($data['commissionBlock']);
            unset($data['commissionBlock']);
        }
        if (\array_key_exists('commissionSettlementDone', $data)) {
            $object->setCommissionSettlementDone($data['commissionSettlementDone']);
            unset($data['commissionSettlementDone']);
        }
        if (\array_key_exists('costCenterId', $data)) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        if (\array_key_exists('costTypeId', $data)) {
            $object->setCostTypeId($data['costTypeId']);
            unset($data['costTypeId']);
        }
        if (\array_key_exists('creditResetsOrderState', $data)) {
            $object->setCreditResetsOrderState($data['creditResetsOrderState']);
            unset($data['creditResetsOrderState']);
        }
        if (\array_key_exists('customerHabitualExporterLetterOfIntentId', $data)) {
            $object->setCustomerHabitualExporterLetterOfIntentId($data['customerHabitualExporterLetterOfIntentId']);
            unset($data['customerHabitualExporterLetterOfIntentId']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('deliveryDate', $data)) {
            $object->setDeliveryDate($data['deliveryDate']);
            unset($data['deliveryDate']);
        }
        if (\array_key_exists('directDebitFileCreated', $data)) {
            $object->setDirectDebitFileCreated($data['directDebitFileCreated']);
            unset($data['directDebitFileCreated']);
        }
        if (\array_key_exists('directDebitFileLatestDate', $data)) {
            $object->setDirectDebitFileLatestDate($data['directDebitFileLatestDate']);
            unset($data['directDebitFileLatestDate']);
        }
        if (\array_key_exists('dueDate', $data)) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        }
        if (\array_key_exists('dunningBlockDateUntilDate', $data)) {
            $object->setDunningBlockDateUntilDate($data['dunningBlockDateUntilDate']);
            unset($data['dunningBlockDateUntilDate']);
        }
        if (\array_key_exists('dunningBlockNote', $data)) {
            $object->setDunningBlockNote($data['dunningBlockNote']);
            unset($data['dunningBlockNote']);
        }
        if (\array_key_exists('dunningBlockState', $data)) {
            $object->setDunningBlockState($data['dunningBlockState']);
            unset($data['dunningBlockState']);
        }
        if (\array_key_exists('invoiceDate', $data)) {
            $object->setInvoiceDate($data['invoiceDate']);
            unset($data['invoiceDate']);
        }
        if (\array_key_exists('invoiceNumber', $data)) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        }
        if (\array_key_exists('orderNumberAtCustomer', $data)) {
            $object->setOrderNumberAtCustomer($data['orderNumberAtCustomer']);
            unset($data['orderNumberAtCustomer']);
        }
        if (\array_key_exists('paid', $data)) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        }
        if (\array_key_exists('paymentStatus', $data)) {
            $object->setPaymentStatus($data['paymentStatus']);
            unset($data['paymentStatus']);
        }
        if (\array_key_exists('precedingSalesInvoiceId', $data)) {
            $object->setPrecedingSalesInvoiceId($data['precedingSalesInvoiceId']);
            unset($data['precedingSalesInvoiceId']);
        }
        if (\array_key_exists('recordAddress', $data)) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        }
        if (\array_key_exists('recordCommentInheritance', $data)) {
            $object->setRecordCommentInheritance($data['recordCommentInheritance']);
            unset($data['recordCommentInheritance']);
        }
        if (\array_key_exists('recordEmailAddresses', $data)) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        }
        if (\array_key_exists('recordFreeTextInheritance', $data)) {
            $object->setRecordFreeTextInheritance($data['recordFreeTextInheritance']);
            unset($data['recordFreeTextInheritance']);
        }
        if (\array_key_exists('recordOpeningInheritance', $data)) {
            $object->setRecordOpeningInheritance($data['recordOpeningInheritance']);
            unset($data['recordOpeningInheritance']);
        }
        if (\array_key_exists('salesInvoiceItems', $data)) {
            $values_3 = [];
            foreach ($data['salesInvoiceItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\SalesInvoiceItem::class, 'json', $context);
            }
            $object->setSalesInvoiceItems($values_3);
            unset($data['salesInvoiceItems']);
        }
        if (\array_key_exists('salesInvoiceType', $data)) {
            $object->setSalesInvoiceType($data['salesInvoiceType']);
            unset($data['salesInvoiceType']);
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
            $values_4 = [];
            foreach ($data['salesOrders'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSalesOrders($values_4);
            unset($data['salesOrders']);
        }
        if (\array_key_exists('sepaDirectDebitMandateId', $data)) {
            $object->setSepaDirectDebitMandateId($data['sepaDirectDebitMandateId']);
            unset($data['sepaDirectDebitMandateId']);
        }
        if (\array_key_exists('shippingCostItems', $data)) {
            $values_5 = [];
            foreach ($data['shippingCostItems'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class, 'json', $context);
            }
            $object->setShippingCostItems($values_5);
            unset($data['shippingCostItems']);
        }
        if (\array_key_exists('shippingDate', $data)) {
            $object->setShippingDate($data['shippingDate']);
            unset($data['shippingDate']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_6 = [];
            foreach ($data['statusHistory'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\SalesInvoiceStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_6);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('vatRegistrationNumber', $data)) {
            $object->setVatRegistrationNumber($data['vatRegistrationNumber']);
            unset($data['vatRegistrationNumber']);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
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
        if ($data->isInitialized('currencyConversionDate') && $data->getCurrencyConversionDate() !== null) {
            $dataArray['currencyConversionDate'] = $data->getCurrencyConversionDate();
        }
        if ($data->isInitialized('currencyConversionRate') && $data->getCurrencyConversionRate() !== null) {
            $dataArray['currencyConversionRate'] = $data->getCurrencyConversionRate();
        }
        if ($data->isInitialized('grossAmount') && $data->getGrossAmount() !== null) {
            $dataArray['grossAmount'] = $data->getGrossAmount();
        }
        if ($data->isInitialized('grossAmountInCompanyCurrency') && $data->getGrossAmountInCompanyCurrency() !== null) {
            $dataArray['grossAmountInCompanyCurrency'] = $data->getGrossAmountInCompanyCurrency();
        }
        if ($data->isInitialized('headerDiscount') && $data->getHeaderDiscount() !== null) {
            $dataArray['headerDiscount'] = $data->getHeaderDiscount();
        }
        if ($data->isInitialized('headerSurcharge') && $data->getHeaderSurcharge() !== null) {
            $dataArray['headerSurcharge'] = $data->getHeaderSurcharge();
        }
        if ($data->isInitialized('netAmount') && $data->getNetAmount() !== null) {
            $dataArray['netAmount'] = $data->getNetAmount();
        }
        if ($data->isInitialized('netAmountInCompanyCurrency') && $data->getNetAmountInCompanyCurrency() !== null) {
            $dataArray['netAmountInCompanyCurrency'] = $data->getNetAmountInCompanyCurrency();
        }
        if ($data->isInitialized('nonStandardTaxId') && $data->getNonStandardTaxId() !== null) {
            $dataArray['nonStandardTaxId'] = $data->getNonStandardTaxId();
        }
        if ($data->isInitialized('nonStandardTaxName') && $data->getNonStandardTaxName() !== null) {
            $dataArray['nonStandardTaxName'] = $data->getNonStandardTaxName();
        }
        if ($data->isInitialized('paymentMethodId') && $data->getPaymentMethodId() !== null) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentMethodName') && $data->getPaymentMethodName() !== null) {
            $dataArray['paymentMethodName'] = $data->getPaymentMethodName();
        }
        if ($data->isInitialized('recordCurrencyId') && $data->getRecordCurrencyId() !== null) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('recordCurrencyName') && $data->getRecordCurrencyName() !== null) {
            $dataArray['recordCurrencyName'] = $data->getRecordCurrencyName();
        }
        if ($data->isInitialized('termOfPaymentId') && $data->getTermOfPaymentId() !== null) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('termOfPaymentName') && $data->getTermOfPaymentName() !== null) {
            $dataArray['termOfPaymentName'] = $data->getTermOfPaymentName();
        }
        if ($data->isInitialized('commission') && $data->getCommission() !== null) {
            $dataArray['commission'] = $data->getCommission();
        }
        if ($data->isInitialized('commissionSalesPartners') && $data->getCommissionSalesPartners() !== null) {
            $values_2 = [];
            foreach ($data->getCommissionSalesPartners() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_2;
        }
        if ($data->isInitialized('customerId') && $data->getCustomerId() !== null) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('customerNumber') && $data->getCustomerNumber() !== null) {
            $dataArray['customerNumber'] = $data->getCustomerNumber();
        }
        if ($data->isInitialized('dispatchCountryCode') && $data->getDispatchCountryCode() !== null) {
            $dataArray['dispatchCountryCode'] = $data->getDispatchCountryCode();
        }
        if ($data->isInitialized('factoring') && $data->getFactoring() !== null) {
            $dataArray['factoring'] = $data->getFactoring();
        }
        if ($data->isInitialized('pricingDate') && $data->getPricingDate() !== null) {
            $dataArray['pricingDate'] = $data->getPricingDate();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && $data->getResponsibleUserUsername() !== null) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('servicePeriodFrom') && $data->getServicePeriodFrom() !== null) {
            $dataArray['servicePeriodFrom'] = $data->getServicePeriodFrom();
        }
        if ($data->isInitialized('servicePeriodTo') && $data->getServicePeriodTo() !== null) {
            $dataArray['servicePeriodTo'] = $data->getServicePeriodTo();
        }
        if ($data->isInitialized('shipmentMethodId') && $data->getShipmentMethodId() !== null) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('shipmentMethodName') && $data->getShipmentMethodName() !== null) {
            $dataArray['shipmentMethodName'] = $data->getShipmentMethodName();
        }
        if ($data->isInitialized('bookingDate') && $data->getBookingDate() !== null) {
            $dataArray['bookingDate'] = $data->getBookingDate();
        }
        if ($data->isInitialized('bookingText') && $data->getBookingText() !== null) {
            $dataArray['bookingText'] = $data->getBookingText();
        }
        if ($data->isInitialized('cancellationDate') && $data->getCancellationDate() !== null) {
            $dataArray['cancellationDate'] = $data->getCancellationDate();
        }
        if ($data->isInitialized('cancellationNumber') && $data->getCancellationNumber() !== null) {
            $dataArray['cancellationNumber'] = $data->getCancellationNumber();
        }
        if ($data->isInitialized('cancellationSlipCommissionBlock') && $data->getCancellationSlipCommissionBlock() !== null) {
            $dataArray['cancellationSlipCommissionBlock'] = $data->getCancellationSlipCommissionBlock();
        }
        if ($data->isInitialized('cancellationSlipCommissionSettlementDone') && $data->getCancellationSlipCommissionSettlementDone() !== null) {
            $dataArray['cancellationSlipCommissionSettlementDone'] = $data->getCancellationSlipCommissionSettlementDone();
        }
        if ($data->isInitialized('collectiveInvoicePositionPrintType') && $data->getCollectiveInvoicePositionPrintType() !== null) {
            $dataArray['collectiveInvoicePositionPrintType'] = $data->getCollectiveInvoicePositionPrintType();
        }
        if ($data->isInitialized('commissionBlock') && $data->getCommissionBlock() !== null) {
            $dataArray['commissionBlock'] = $data->getCommissionBlock();
        }
        if ($data->isInitialized('commissionSettlementDone') && $data->getCommissionSettlementDone() !== null) {
            $dataArray['commissionSettlementDone'] = $data->getCommissionSettlementDone();
        }
        if ($data->isInitialized('costCenterId') && $data->getCostCenterId() !== null) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('costTypeId') && $data->getCostTypeId() !== null) {
            $dataArray['costTypeId'] = $data->getCostTypeId();
        }
        if ($data->isInitialized('creditResetsOrderState') && $data->getCreditResetsOrderState() !== null) {
            $dataArray['creditResetsOrderState'] = $data->getCreditResetsOrderState();
        }
        if ($data->isInitialized('customerHabitualExporterLetterOfIntentId') && $data->getCustomerHabitualExporterLetterOfIntentId() !== null) {
            $dataArray['customerHabitualExporterLetterOfIntentId'] = $data->getCustomerHabitualExporterLetterOfIntentId();
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryDate') && $data->getDeliveryDate() !== null) {
            $dataArray['deliveryDate'] = $data->getDeliveryDate();
        }
        if ($data->isInitialized('directDebitFileCreated') && $data->getDirectDebitFileCreated() !== null) {
            $dataArray['directDebitFileCreated'] = $data->getDirectDebitFileCreated();
        }
        if ($data->isInitialized('directDebitFileLatestDate') && $data->getDirectDebitFileLatestDate() !== null) {
            $dataArray['directDebitFileLatestDate'] = $data->getDirectDebitFileLatestDate();
        }
        if ($data->isInitialized('dueDate') && $data->getDueDate() !== null) {
            $dataArray['dueDate'] = $data->getDueDate();
        }
        if ($data->isInitialized('dunningBlockDateUntilDate') && $data->getDunningBlockDateUntilDate() !== null) {
            $dataArray['dunningBlockDateUntilDate'] = $data->getDunningBlockDateUntilDate();
        }
        if ($data->isInitialized('dunningBlockNote') && $data->getDunningBlockNote() !== null) {
            $dataArray['dunningBlockNote'] = $data->getDunningBlockNote();
        }
        if ($data->isInitialized('dunningBlockState') && $data->getDunningBlockState() !== null) {
            $dataArray['dunningBlockState'] = $data->getDunningBlockState();
        }
        if ($data->isInitialized('invoiceDate') && $data->getInvoiceDate() !== null) {
            $dataArray['invoiceDate'] = $data->getInvoiceDate();
        }
        if ($data->isInitialized('invoiceNumber') && $data->getInvoiceNumber() !== null) {
            $dataArray['invoiceNumber'] = $data->getInvoiceNumber();
        }
        if ($data->isInitialized('orderNumberAtCustomer') && $data->getOrderNumberAtCustomer() !== null) {
            $dataArray['orderNumberAtCustomer'] = $data->getOrderNumberAtCustomer();
        }
        if ($data->isInitialized('paid') && $data->getPaid() !== null) {
            $dataArray['paid'] = $data->getPaid();
        }
        if ($data->isInitialized('paymentStatus') && $data->getPaymentStatus() !== null) {
            $dataArray['paymentStatus'] = $data->getPaymentStatus();
        }
        if ($data->isInitialized('precedingSalesInvoiceId') && $data->getPrecedingSalesInvoiceId() !== null) {
            $dataArray['precedingSalesInvoiceId'] = $data->getPrecedingSalesInvoiceId();
        }
        if ($data->isInitialized('recordAddress') && $data->getRecordAddress() !== null) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('recordCommentInheritance') && $data->getRecordCommentInheritance() !== null) {
            $dataArray['recordCommentInheritance'] = $data->getRecordCommentInheritance();
        }
        if ($data->isInitialized('recordEmailAddresses') && $data->getRecordEmailAddresses() !== null) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('recordFreeTextInheritance') && $data->getRecordFreeTextInheritance() !== null) {
            $dataArray['recordFreeTextInheritance'] = $data->getRecordFreeTextInheritance();
        }
        if ($data->isInitialized('recordOpeningInheritance') && $data->getRecordOpeningInheritance() !== null) {
            $dataArray['recordOpeningInheritance'] = $data->getRecordOpeningInheritance();
        }
        if ($data->isInitialized('salesInvoiceItems') && $data->getSalesInvoiceItems() !== null) {
            $values_3 = [];
            foreach ($data->getSalesInvoiceItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['salesInvoiceItems'] = $values_3;
        }
        if ($data->isInitialized('salesInvoiceType') && $data->getSalesInvoiceType() !== null) {
            $dataArray['salesInvoiceType'] = $data->getSalesInvoiceType();
        }
        if ($data->isInitialized('salesOrderId') && $data->getSalesOrderId() !== null) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
        }
        if ($data->isInitialized('salesOrderNumber') && $data->getSalesOrderNumber() !== null) {
            $dataArray['salesOrderNumber'] = $data->getSalesOrderNumber();
        }
        if ($data->isInitialized('salesOrders') && $data->getSalesOrders() !== null) {
            $values_4 = [];
            foreach ($data->getSalesOrders() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['salesOrders'] = $values_4;
        }
        if ($data->isInitialized('sepaDirectDebitMandateId') && $data->getSepaDirectDebitMandateId() !== null) {
            $dataArray['sepaDirectDebitMandateId'] = $data->getSepaDirectDebitMandateId();
        }
        if ($data->isInitialized('shippingCostItems') && $data->getShippingCostItems() !== null) {
            $values_5 = [];
            foreach ($data->getShippingCostItems() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['shippingCostItems'] = $values_5;
        }
        if ($data->isInitialized('shippingDate') && $data->getShippingDate() !== null) {
            $dataArray['shippingDate'] = $data->getShippingDate();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values_6 = [];
            foreach ($data->getStatusHistory() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_6;
        }
        if ($data->isInitialized('vatRegistrationNumber') && $data->getVatRegistrationNumber() !== null) {
            $dataArray['vatRegistrationNumber'] = $data->getVatRegistrationNumber();
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesInvoice::class => false];
    }
}
