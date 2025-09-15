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
class SalesOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesOrder::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesOrder::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrder();
        if (\array_key_exists('disableRecordEmailingRule', $data) && \is_int($data['disableRecordEmailingRule'])) {
            $data['disableRecordEmailingRule'] = (bool) $data['disableRecordEmailingRule'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('currencyConversionLocked', $data) && \is_int($data['currencyConversionLocked'])) {
            $data['currencyConversionLocked'] = (bool) $data['currencyConversionLocked'];
        }
        if (\array_key_exists('factoring', $data) && \is_int($data['factoring'])) {
            $data['factoring'] = (bool) $data['factoring'];
        }
        if (\array_key_exists('applyShippingCostsOnlyOnce', $data) && \is_int($data['applyShippingCostsOnlyOnce'])) {
            $data['applyShippingCostsOnlyOnce'] = (bool) $data['applyShippingCostsOnlyOnce'];
        }
        if (\array_key_exists('invoiced', $data) && \is_int($data['invoiced'])) {
            $data['invoiced'] = (bool) $data['invoiced'];
        }
        if (\array_key_exists('onlyServices', $data) && \is_int($data['onlyServices'])) {
            $data['onlyServices'] = (bool) $data['onlyServices'];
        }
        if (\array_key_exists('paid', $data) && \is_int($data['paid'])) {
            $data['paid'] = (bool) $data['paid'];
        }
        if (\array_key_exists('projectModeActive', $data) && \is_int($data['projectModeActive'])) {
            $data['projectModeActive'] = (bool) $data['projectModeActive'];
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
        if (\array_key_exists('servicesFinished', $data) && \is_int($data['servicesFinished'])) {
            $data['servicesFinished'] = (bool) $data['servicesFinished'];
        }
        if (\array_key_exists('shipped', $data) && \is_int($data['shipped'])) {
            $data['shipped'] = (bool) $data['shipped'];
        }
        if (\array_key_exists('template', $data) && \is_int($data['template'])) {
            $data['template'] = (bool) $data['template'];
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
        if (\array_key_exists('currencyConversionDate', $data) && $data['currencyConversionDate'] !== null) {
            $object->setCurrencyConversionDate($data['currencyConversionDate']);
            unset($data['currencyConversionDate']);
        }
        elseif (\array_key_exists('currencyConversionDate', $data) && $data['currencyConversionDate'] === null) {
            $object->setCurrencyConversionDate(null);
        }
        if (\array_key_exists('currencyConversionLocked', $data) && $data['currencyConversionLocked'] !== null) {
            $object->setCurrencyConversionLocked($data['currencyConversionLocked']);
            unset($data['currencyConversionLocked']);
        }
        elseif (\array_key_exists('currencyConversionLocked', $data) && $data['currencyConversionLocked'] === null) {
            $object->setCurrencyConversionLocked(null);
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
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] !== null) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        }
        elseif (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] === null) {
            $object->setRecordCurrencyId(null);
        }
        if (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] !== null) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        }
        elseif (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] === null) {
            $object->setTermOfPaymentId(null);
        }
        if (\array_key_exists('commission', $data) && $data['commission'] !== null) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        }
        elseif (\array_key_exists('commission', $data) && $data['commission'] === null) {
            $object->setCommission(null);
        }
        if (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] !== null) {
            $values_2 = [];
            foreach ($data['commissionSalesPartners'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_2);
            unset($data['commissionSalesPartners']);
        }
        elseif (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] === null) {
            $object->setCommissionSalesPartners(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('dispatchCountryCode', $data) && $data['dispatchCountryCode'] !== null) {
            $object->setDispatchCountryCode($data['dispatchCountryCode']);
            unset($data['dispatchCountryCode']);
        }
        elseif (\array_key_exists('dispatchCountryCode', $data) && $data['dispatchCountryCode'] === null) {
            $object->setDispatchCountryCode(null);
        }
        if (\array_key_exists('factoring', $data) && $data['factoring'] !== null) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        }
        elseif (\array_key_exists('factoring', $data) && $data['factoring'] === null) {
            $object->setFactoring(null);
        }
        if (\array_key_exists('pricingDate', $data) && $data['pricingDate'] !== null) {
            $object->setPricingDate($data['pricingDate']);
            unset($data['pricingDate']);
        }
        elseif (\array_key_exists('pricingDate', $data) && $data['pricingDate'] === null) {
            $object->setPricingDate(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
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
        if (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] !== null) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        elseif (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] === null) {
            $object->setShipmentMethodId(null);
        }
        if (\array_key_exists('defaultShippingCarrierId', $data) && $data['defaultShippingCarrierId'] !== null) {
            $object->setDefaultShippingCarrierId($data['defaultShippingCarrierId']);
            unset($data['defaultShippingCarrierId']);
        }
        elseif (\array_key_exists('defaultShippingCarrierId', $data) && $data['defaultShippingCarrierId'] === null) {
            $object->setDefaultShippingCarrierId(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('deliveryEmailAddresses', $data) && $data['deliveryEmailAddresses'] !== null) {
            $object->setDeliveryEmailAddresses($this->denormalizer->denormalize($data['deliveryEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['deliveryEmailAddresses']);
        }
        elseif (\array_key_exists('deliveryEmailAddresses', $data) && $data['deliveryEmailAddresses'] === null) {
            $object->setDeliveryEmailAddresses(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
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
        if (\array_key_exists('recordAddress', $data) && $data['recordAddress'] !== null) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        }
        elseif (\array_key_exists('recordAddress', $data) && $data['recordAddress'] === null) {
            $object->setRecordAddress(null);
        }
        if (\array_key_exists('salesInvoiceEmailAddresses', $data) && $data['salesInvoiceEmailAddresses'] !== null) {
            $object->setSalesInvoiceEmailAddresses($this->denormalizer->denormalize($data['salesInvoiceEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesInvoiceEmailAddresses']);
        }
        elseif (\array_key_exists('salesInvoiceEmailAddresses', $data) && $data['salesInvoiceEmailAddresses'] === null) {
            $object->setSalesInvoiceEmailAddresses(null);
        }
        if (\array_key_exists('advancePaymentAmount', $data) && $data['advancePaymentAmount'] !== null) {
            $object->setAdvancePaymentAmount($data['advancePaymentAmount']);
            unset($data['advancePaymentAmount']);
        }
        elseif (\array_key_exists('advancePaymentAmount', $data) && $data['advancePaymentAmount'] === null) {
            $object->setAdvancePaymentAmount(null);
        }
        if (\array_key_exists('advancePaymentStatus', $data) && $data['advancePaymentStatus'] !== null) {
            $object->setAdvancePaymentStatus($data['advancePaymentStatus']);
            unset($data['advancePaymentStatus']);
        }
        elseif (\array_key_exists('advancePaymentStatus', $data) && $data['advancePaymentStatus'] === null) {
            $object->setAdvancePaymentStatus(null);
        }
        if (\array_key_exists('applyShippingCostsOnlyOnce', $data) && $data['applyShippingCostsOnlyOnce'] !== null) {
            $object->setApplyShippingCostsOnlyOnce($data['applyShippingCostsOnlyOnce']);
            unset($data['applyShippingCostsOnlyOnce']);
        }
        elseif (\array_key_exists('applyShippingCostsOnlyOnce', $data) && $data['applyShippingCostsOnlyOnce'] === null) {
            $object->setApplyShippingCostsOnlyOnce(null);
        }
        if (\array_key_exists('cashAccountId', $data) && $data['cashAccountId'] !== null) {
            $object->setCashAccountId($data['cashAccountId']);
            unset($data['cashAccountId']);
        }
        elseif (\array_key_exists('cashAccountId', $data) && $data['cashAccountId'] === null) {
            $object->setCashAccountId(null);
        }
        if (\array_key_exists('customerHabitualExporterLetterOfIntentId', $data) && $data['customerHabitualExporterLetterOfIntentId'] !== null) {
            $object->setCustomerHabitualExporterLetterOfIntentId($data['customerHabitualExporterLetterOfIntentId']);
            unset($data['customerHabitualExporterLetterOfIntentId']);
        }
        elseif (\array_key_exists('customerHabitualExporterLetterOfIntentId', $data) && $data['customerHabitualExporterLetterOfIntentId'] === null) {
            $object->setCustomerHabitualExporterLetterOfIntentId(null);
        }
        if (\array_key_exists('defaultShippingReturnCarrierId', $data) && $data['defaultShippingReturnCarrierId'] !== null) {
            $object->setDefaultShippingReturnCarrierId($data['defaultShippingReturnCarrierId']);
            unset($data['defaultShippingReturnCarrierId']);
        }
        elseif (\array_key_exists('defaultShippingReturnCarrierId', $data) && $data['defaultShippingReturnCarrierId'] === null) {
            $object->setDefaultShippingReturnCarrierId(null);
        }
        if (\array_key_exists('ecommerceOrder', $data) && $data['ecommerceOrder'] !== null) {
            $object->setEcommerceOrder($this->denormalizer->denormalize($data['ecommerceOrder'], \Webhubworks\WeclappApiCore\Model\EcommerceOrder::class, 'json', $context));
            unset($data['ecommerceOrder']);
        }
        elseif (\array_key_exists('ecommerceOrder', $data) && $data['ecommerceOrder'] === null) {
            $object->setEcommerceOrder(null);
        }
        if (\array_key_exists('fulfillmentProviderId', $data) && $data['fulfillmentProviderId'] !== null) {
            $object->setFulfillmentProviderId($data['fulfillmentProviderId']);
            unset($data['fulfillmentProviderId']);
        }
        elseif (\array_key_exists('fulfillmentProviderId', $data) && $data['fulfillmentProviderId'] === null) {
            $object->setFulfillmentProviderId(null);
        }
        if (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] !== null) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        elseif (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] === null) {
            $object->setInvoiceRecipientId(null);
        }
        if (\array_key_exists('invoiced', $data) && $data['invoiced'] !== null) {
            $object->setInvoiced($data['invoiced']);
            unset($data['invoiced']);
        }
        elseif (\array_key_exists('invoiced', $data) && $data['invoiced'] === null) {
            $object->setInvoiced(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('onlyServices', $data) && $data['onlyServices'] !== null) {
            $object->setOnlyServices($data['onlyServices']);
            unset($data['onlyServices']);
        }
        elseif (\array_key_exists('onlyServices', $data) && $data['onlyServices'] === null) {
            $object->setOnlyServices(null);
        }
        if (\array_key_exists('orderDate', $data) && $data['orderDate'] !== null) {
            $object->setOrderDate($data['orderDate']);
            unset($data['orderDate']);
        }
        elseif (\array_key_exists('orderDate', $data) && $data['orderDate'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('orderItems', $data) && $data['orderItems'] !== null) {
            $values_3 = [];
            foreach ($data['orderItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\SalesOrderItem::class, 'json', $context);
            }
            $object->setOrderItems($values_3);
            unset($data['orderItems']);
        }
        elseif (\array_key_exists('orderItems', $data) && $data['orderItems'] === null) {
            $object->setOrderItems(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('orderNumberAtCustomer', $data) && $data['orderNumberAtCustomer'] !== null) {
            $object->setOrderNumberAtCustomer($data['orderNumberAtCustomer']);
            unset($data['orderNumberAtCustomer']);
        }
        elseif (\array_key_exists('orderNumberAtCustomer', $data) && $data['orderNumberAtCustomer'] === null) {
            $object->setOrderNumberAtCustomer(null);
        }
        if (\array_key_exists('paid', $data) && $data['paid'] !== null) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        }
        elseif (\array_key_exists('paid', $data) && $data['paid'] === null) {
            $object->setPaid(null);
        }
        if (\array_key_exists('payments', $data) && $data['payments'] !== null) {
            $values_4 = [];
            foreach ($data['payments'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class, 'json', $context);
            }
            $object->setPayments($values_4);
            unset($data['payments']);
        }
        elseif (\array_key_exists('payments', $data) && $data['payments'] === null) {
            $object->setPayments(null);
        }
        if (\array_key_exists('plannedProjectEndDate', $data) && $data['plannedProjectEndDate'] !== null) {
            $object->setPlannedProjectEndDate($data['plannedProjectEndDate']);
            unset($data['plannedProjectEndDate']);
        }
        elseif (\array_key_exists('plannedProjectEndDate', $data) && $data['plannedProjectEndDate'] === null) {
            $object->setPlannedProjectEndDate(null);
        }
        if (\array_key_exists('plannedProjectStartDate', $data) && $data['plannedProjectStartDate'] !== null) {
            $object->setPlannedProjectStartDate($data['plannedProjectStartDate']);
            unset($data['plannedProjectStartDate']);
        }
        elseif (\array_key_exists('plannedProjectStartDate', $data) && $data['plannedProjectStartDate'] === null) {
            $object->setPlannedProjectStartDate(null);
        }
        if (\array_key_exists('projectGoals', $data) && $data['projectGoals'] !== null) {
            $object->setProjectGoals($data['projectGoals']);
            unset($data['projectGoals']);
        }
        elseif (\array_key_exists('projectGoals', $data) && $data['projectGoals'] === null) {
            $object->setProjectGoals(null);
        }
        if (\array_key_exists('projectMembers', $data) && $data['projectMembers'] !== null) {
            $values_5 = [];
            foreach ($data['projectMembers'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\ProjectMembers::class, 'json', $context);
            }
            $object->setProjectMembers($values_5);
            unset($data['projectMembers']);
        }
        elseif (\array_key_exists('projectMembers', $data) && $data['projectMembers'] === null) {
            $object->setProjectMembers(null);
        }
        if (\array_key_exists('projectModeActive', $data) && $data['projectModeActive'] !== null) {
            $object->setProjectModeActive($data['projectModeActive']);
            unset($data['projectModeActive']);
        }
        elseif (\array_key_exists('projectModeActive', $data) && $data['projectModeActive'] === null) {
            $object->setProjectModeActive(null);
        }
        if (\array_key_exists('quotationId', $data) && $data['quotationId'] !== null) {
            $object->setQuotationId($data['quotationId']);
            unset($data['quotationId']);
        }
        elseif (\array_key_exists('quotationId', $data) && $data['quotationId'] === null) {
            $object->setQuotationId(null);
        }
        if (\array_key_exists('recordAsn', $data) && $data['recordAsn'] !== null) {
            $object->setRecordAsn($data['recordAsn']);
            unset($data['recordAsn']);
        }
        elseif (\array_key_exists('recordAsn', $data) && $data['recordAsn'] === null) {
            $object->setRecordAsn(null);
        }
        if (\array_key_exists('recordCommentInheritance', $data) && $data['recordCommentInheritance'] !== null) {
            $object->setRecordCommentInheritance($data['recordCommentInheritance']);
            unset($data['recordCommentInheritance']);
        }
        elseif (\array_key_exists('recordCommentInheritance', $data) && $data['recordCommentInheritance'] === null) {
            $object->setRecordCommentInheritance(null);
        }
        if (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] !== null) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        }
        elseif (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] === null) {
            $object->setRecordEmailAddresses(null);
        }
        if (\array_key_exists('recordFreeTextInheritance', $data) && $data['recordFreeTextInheritance'] !== null) {
            $object->setRecordFreeTextInheritance($data['recordFreeTextInheritance']);
            unset($data['recordFreeTextInheritance']);
        }
        elseif (\array_key_exists('recordFreeTextInheritance', $data) && $data['recordFreeTextInheritance'] === null) {
            $object->setRecordFreeTextInheritance(null);
        }
        if (\array_key_exists('recordOpeningInheritance', $data) && $data['recordOpeningInheritance'] !== null) {
            $object->setRecordOpeningInheritance($data['recordOpeningInheritance']);
            unset($data['recordOpeningInheritance']);
        }
        elseif (\array_key_exists('recordOpeningInheritance', $data) && $data['recordOpeningInheritance'] === null) {
            $object->setRecordOpeningInheritance(null);
        }
        if (\array_key_exists('salesOrderPaymentType', $data) && $data['salesOrderPaymentType'] !== null) {
            $object->setSalesOrderPaymentType($data['salesOrderPaymentType']);
            unset($data['salesOrderPaymentType']);
        }
        elseif (\array_key_exists('salesOrderPaymentType', $data) && $data['salesOrderPaymentType'] === null) {
            $object->setSalesOrderPaymentType(null);
        }
        if (\array_key_exists('sepaDirectDebitMandateId', $data) && $data['sepaDirectDebitMandateId'] !== null) {
            $object->setSepaDirectDebitMandateId($data['sepaDirectDebitMandateId']);
            unset($data['sepaDirectDebitMandateId']);
        }
        elseif (\array_key_exists('sepaDirectDebitMandateId', $data) && $data['sepaDirectDebitMandateId'] === null) {
            $object->setSepaDirectDebitMandateId(null);
        }
        if (\array_key_exists('servicesFinished', $data) && $data['servicesFinished'] !== null) {
            $object->setServicesFinished($data['servicesFinished']);
            unset($data['servicesFinished']);
        }
        elseif (\array_key_exists('servicesFinished', $data) && $data['servicesFinished'] === null) {
            $object->setServicesFinished(null);
        }
        if (\array_key_exists('shipped', $data) && $data['shipped'] !== null) {
            $object->setShipped($data['shipped']);
            unset($data['shipped']);
        }
        elseif (\array_key_exists('shipped', $data) && $data['shipped'] === null) {
            $object->setShipped(null);
        }
        if (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] !== null) {
            $values_6 = [];
            foreach ($data['shippingCostItems'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\SalesOrderShippingCostItem::class, 'json', $context);
            }
            $object->setShippingCostItems($values_6);
            unset($data['shippingCostItems']);
        }
        elseif (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] === null) {
            $object->setShippingCostItems(null);
        }
        if (\array_key_exists('shippingLabelsCount', $data) && $data['shippingLabelsCount'] !== null) {
            $object->setShippingLabelsCount($data['shippingLabelsCount']);
            unset($data['shippingLabelsCount']);
        }
        elseif (\array_key_exists('shippingLabelsCount', $data) && $data['shippingLabelsCount'] === null) {
            $object->setShippingLabelsCount(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_7 = [];
            foreach ($data['statusHistory'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\SalesOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_7);
            unset($data['statusHistory']);
        }
        elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
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
        if ($data->isInitialized('currencyConversionLocked') && null !== $data->getCurrencyConversionLocked()) {
            $dataArray['currencyConversionLocked'] = $data->getCurrencyConversionLocked();
        }
        if ($data->isInitialized('currencyConversionRate') && null !== $data->getCurrencyConversionRate()) {
            $dataArray['currencyConversionRate'] = $data->getCurrencyConversionRate();
        }
        if ($data->isInitialized('headerDiscount') && null !== $data->getHeaderDiscount()) {
            $dataArray['headerDiscount'] = $data->getHeaderDiscount();
        }
        if ($data->isInitialized('headerSurcharge') && null !== $data->getHeaderSurcharge()) {
            $dataArray['headerSurcharge'] = $data->getHeaderSurcharge();
        }
        if ($data->isInitialized('nonStandardTaxId') && null !== $data->getNonStandardTaxId()) {
            $dataArray['nonStandardTaxId'] = $data->getNonStandardTaxId();
        }
        if ($data->isInitialized('paymentMethodId') && null !== $data->getPaymentMethodId()) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('recordCurrencyId') && null !== $data->getRecordCurrencyId()) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('termOfPaymentId') && null !== $data->getTermOfPaymentId()) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('commission') && null !== $data->getCommission()) {
            $dataArray['commission'] = $data->getCommission();
        }
        if ($data->isInitialized('commissionSalesPartners') && null !== $data->getCommissionSalesPartners()) {
            $values_2 = [];
            foreach ($data->getCommissionSalesPartners() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_2;
        }
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('dispatchCountryCode') && null !== $data->getDispatchCountryCode()) {
            $dataArray['dispatchCountryCode'] = $data->getDispatchCountryCode();
        }
        if ($data->isInitialized('factoring') && null !== $data->getFactoring()) {
            $dataArray['factoring'] = $data->getFactoring();
        }
        if ($data->isInitialized('pricingDate') && null !== $data->getPricingDate()) {
            $dataArray['pricingDate'] = $data->getPricingDate();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('salesChannel') && null !== $data->getSalesChannel()) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('servicePeriodFrom') && null !== $data->getServicePeriodFrom()) {
            $dataArray['servicePeriodFrom'] = $data->getServicePeriodFrom();
        }
        if ($data->isInitialized('servicePeriodTo') && null !== $data->getServicePeriodTo()) {
            $dataArray['servicePeriodTo'] = $data->getServicePeriodTo();
        }
        if ($data->isInitialized('shipmentMethodId') && null !== $data->getShipmentMethodId()) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('defaultShippingCarrierId') && null !== $data->getDefaultShippingCarrierId()) {
            $dataArray['defaultShippingCarrierId'] = $data->getDefaultShippingCarrierId();
        }
        if ($data->isInitialized('deliveryAddress') && null !== $data->getDeliveryAddress()) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryEmailAddresses') && null !== $data->getDeliveryEmailAddresses()) {
            $dataArray['deliveryEmailAddresses'] = $this->normalizer->normalize($data->getDeliveryEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('plannedDeliveryDate') && null !== $data->getPlannedDeliveryDate()) {
            $dataArray['plannedDeliveryDate'] = $data->getPlannedDeliveryDate();
        }
        if ($data->isInitialized('plannedShippingDate') && null !== $data->getPlannedShippingDate()) {
            $dataArray['plannedShippingDate'] = $data->getPlannedShippingDate();
        }
        if ($data->isInitialized('recordAddress') && null !== $data->getRecordAddress()) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('salesInvoiceEmailAddresses') && null !== $data->getSalesInvoiceEmailAddresses()) {
            $dataArray['salesInvoiceEmailAddresses'] = $this->normalizer->normalize($data->getSalesInvoiceEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('advancePaymentAmount') && null !== $data->getAdvancePaymentAmount()) {
            $dataArray['advancePaymentAmount'] = $data->getAdvancePaymentAmount();
        }
        if ($data->isInitialized('advancePaymentStatus') && null !== $data->getAdvancePaymentStatus()) {
            $dataArray['advancePaymentStatus'] = $data->getAdvancePaymentStatus();
        }
        if ($data->isInitialized('applyShippingCostsOnlyOnce') && null !== $data->getApplyShippingCostsOnlyOnce()) {
            $dataArray['applyShippingCostsOnlyOnce'] = $data->getApplyShippingCostsOnlyOnce();
        }
        if ($data->isInitialized('cashAccountId') && null !== $data->getCashAccountId()) {
            $dataArray['cashAccountId'] = $data->getCashAccountId();
        }
        if ($data->isInitialized('customerHabitualExporterLetterOfIntentId') && null !== $data->getCustomerHabitualExporterLetterOfIntentId()) {
            $dataArray['customerHabitualExporterLetterOfIntentId'] = $data->getCustomerHabitualExporterLetterOfIntentId();
        }
        if ($data->isInitialized('defaultShippingReturnCarrierId') && null !== $data->getDefaultShippingReturnCarrierId()) {
            $dataArray['defaultShippingReturnCarrierId'] = $data->getDefaultShippingReturnCarrierId();
        }
        if ($data->isInitialized('ecommerceOrder') && null !== $data->getEcommerceOrder()) {
            $dataArray['ecommerceOrder'] = $this->normalizer->normalize($data->getEcommerceOrder(), 'json', $context);
        }
        if ($data->isInitialized('fulfillmentProviderId') && null !== $data->getFulfillmentProviderId()) {
            $dataArray['fulfillmentProviderId'] = $data->getFulfillmentProviderId();
        }
        if ($data->isInitialized('invoiceRecipientId') && null !== $data->getInvoiceRecipientId()) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('onlyServices') && null !== $data->getOnlyServices()) {
            $dataArray['onlyServices'] = $data->getOnlyServices();
        }
        if ($data->isInitialized('orderDate') && null !== $data->getOrderDate()) {
            $dataArray['orderDate'] = $data->getOrderDate();
        }
        if ($data->isInitialized('orderItems') && null !== $data->getOrderItems()) {
            $values_3 = [];
            foreach ($data->getOrderItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['orderItems'] = $values_3;
        }
        if ($data->isInitialized('orderNumber') && null !== $data->getOrderNumber()) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('orderNumberAtCustomer') && null !== $data->getOrderNumberAtCustomer()) {
            $dataArray['orderNumberAtCustomer'] = $data->getOrderNumberAtCustomer();
        }
        if ($data->isInitialized('payments') && null !== $data->getPayments()) {
            $values_4 = [];
            foreach ($data->getPayments() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['payments'] = $values_4;
        }
        if ($data->isInitialized('plannedProjectEndDate') && null !== $data->getPlannedProjectEndDate()) {
            $dataArray['plannedProjectEndDate'] = $data->getPlannedProjectEndDate();
        }
        if ($data->isInitialized('plannedProjectStartDate') && null !== $data->getPlannedProjectStartDate()) {
            $dataArray['plannedProjectStartDate'] = $data->getPlannedProjectStartDate();
        }
        if ($data->isInitialized('projectGoals') && null !== $data->getProjectGoals()) {
            $dataArray['projectGoals'] = $data->getProjectGoals();
        }
        if ($data->isInitialized('projectMembers') && null !== $data->getProjectMembers()) {
            $values_5 = [];
            foreach ($data->getProjectMembers() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['projectMembers'] = $values_5;
        }
        if ($data->isInitialized('projectModeActive') && null !== $data->getProjectModeActive()) {
            $dataArray['projectModeActive'] = $data->getProjectModeActive();
        }
        if ($data->isInitialized('quotationId') && null !== $data->getQuotationId()) {
            $dataArray['quotationId'] = $data->getQuotationId();
        }
        if ($data->isInitialized('recordAsn') && null !== $data->getRecordAsn()) {
            $dataArray['recordAsn'] = $data->getRecordAsn();
        }
        if ($data->isInitialized('recordCommentInheritance') && null !== $data->getRecordCommentInheritance()) {
            $dataArray['recordCommentInheritance'] = $data->getRecordCommentInheritance();
        }
        if ($data->isInitialized('recordEmailAddresses') && null !== $data->getRecordEmailAddresses()) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('recordFreeTextInheritance') && null !== $data->getRecordFreeTextInheritance()) {
            $dataArray['recordFreeTextInheritance'] = $data->getRecordFreeTextInheritance();
        }
        if ($data->isInitialized('recordOpeningInheritance') && null !== $data->getRecordOpeningInheritance()) {
            $dataArray['recordOpeningInheritance'] = $data->getRecordOpeningInheritance();
        }
        if ($data->isInitialized('salesOrderPaymentType') && null !== $data->getSalesOrderPaymentType()) {
            $dataArray['salesOrderPaymentType'] = $data->getSalesOrderPaymentType();
        }
        if ($data->isInitialized('sepaDirectDebitMandateId') && null !== $data->getSepaDirectDebitMandateId()) {
            $dataArray['sepaDirectDebitMandateId'] = $data->getSepaDirectDebitMandateId();
        }
        if ($data->isInitialized('shippingCostItems') && null !== $data->getShippingCostItems()) {
            $values_6 = [];
            foreach ($data->getShippingCostItems() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['shippingCostItems'] = $values_6;
        }
        if ($data->isInitialized('shippingLabelsCount') && null !== $data->getShippingLabelsCount()) {
            $dataArray['shippingLabelsCount'] = $data->getShippingLabelsCount();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('template') && null !== $data->getTemplate()) {
            $dataArray['template'] = $data->getTemplate();
        }
        if ($data->isInitialized('warehouseId') && null !== $data->getWarehouseId()) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
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
        return [\Webhubworks\WeclappApiCore\Model\SalesOrder::class => false];
    }
}