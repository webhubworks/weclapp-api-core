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
        if (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] !== null) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        } elseif (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] === null) {
            $object->setCommercialLanguage(null);
        }
        if (\array_key_exists('creatorId', $data) && $data['creatorId'] !== null) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        } elseif (\array_key_exists('creatorId', $data) && $data['creatorId'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('disableEmailTemplate', $data) && $data['disableEmailTemplate'] !== null) {
            $object->setDisableEmailTemplate($data['disableEmailTemplate']);
            unset($data['disableEmailTemplate']);
        } elseif (\array_key_exists('disableEmailTemplate', $data) && $data['disableEmailTemplate'] === null) {
            $object->setDisableEmailTemplate(null);
        }
        if (\array_key_exists('recordComment', $data) && $data['recordComment'] !== null) {
            $object->setRecordComment($data['recordComment']);
            unset($data['recordComment']);
        } elseif (\array_key_exists('recordComment', $data) && $data['recordComment'] === null) {
            $object->setRecordComment(null);
        }
        if (\array_key_exists('recordFreeText', $data) && $data['recordFreeText'] !== null) {
            $object->setRecordFreeText($data['recordFreeText']);
            unset($data['recordFreeText']);
        } elseif (\array_key_exists('recordFreeText', $data) && $data['recordFreeText'] === null) {
            $object->setRecordFreeText(null);
        }
        if (\array_key_exists('recordOpening', $data) && $data['recordOpening'] !== null) {
            $object->setRecordOpening($data['recordOpening']);
            unset($data['recordOpening']);
        } elseif (\array_key_exists('recordOpening', $data) && $data['recordOpening'] === null) {
            $object->setRecordOpening(null);
        }
        if (\array_key_exists('sentToRecipient', $data) && $data['sentToRecipient'] !== null) {
            $object->setSentToRecipient($data['sentToRecipient']);
            unset($data['sentToRecipient']);
        } elseif (\array_key_exists('sentToRecipient', $data) && $data['sentToRecipient'] === null) {
            $object->setSentToRecipient(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('currencyConversionDate', $data) && $data['currencyConversionDate'] !== null) {
            $object->setCurrencyConversionDate($data['currencyConversionDate']);
            unset($data['currencyConversionDate']);
        } elseif (\array_key_exists('currencyConversionDate', $data) && $data['currencyConversionDate'] === null) {
            $object->setCurrencyConversionDate(null);
        }
        if (\array_key_exists('currencyConversionRate', $data) && $data['currencyConversionRate'] !== null) {
            $object->setCurrencyConversionRate($data['currencyConversionRate']);
            unset($data['currencyConversionRate']);
        } elseif (\array_key_exists('currencyConversionRate', $data) && $data['currencyConversionRate'] === null) {
            $object->setCurrencyConversionRate(null);
        }
        if (\array_key_exists('grossAmount', $data) && $data['grossAmount'] !== null) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        } elseif (\array_key_exists('grossAmount', $data) && $data['grossAmount'] === null) {
            $object->setGrossAmount(null);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] !== null) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        } elseif (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] === null) {
            $object->setGrossAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('headerDiscount', $data) && $data['headerDiscount'] !== null) {
            $object->setHeaderDiscount($data['headerDiscount']);
            unset($data['headerDiscount']);
        } elseif (\array_key_exists('headerDiscount', $data) && $data['headerDiscount'] === null) {
            $object->setHeaderDiscount(null);
        }
        if (\array_key_exists('headerSurcharge', $data) && $data['headerSurcharge'] !== null) {
            $object->setHeaderSurcharge($data['headerSurcharge']);
            unset($data['headerSurcharge']);
        } elseif (\array_key_exists('headerSurcharge', $data) && $data['headerSurcharge'] === null) {
            $object->setHeaderSurcharge(null);
        }
        if (\array_key_exists('netAmount', $data) && $data['netAmount'] !== null) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        } elseif (\array_key_exists('netAmount', $data) && $data['netAmount'] === null) {
            $object->setNetAmount(null);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] !== null) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        } elseif (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] === null) {
            $object->setNetAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] !== null) {
            $object->setNonStandardTaxId($data['nonStandardTaxId']);
            unset($data['nonStandardTaxId']);
        } elseif (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] === null) {
            $object->setNonStandardTaxId(null);
        }
        if (\array_key_exists('nonStandardTaxName', $data) && $data['nonStandardTaxName'] !== null) {
            $object->setNonStandardTaxName($data['nonStandardTaxName']);
            unset($data['nonStandardTaxName']);
        } elseif (\array_key_exists('nonStandardTaxName', $data) && $data['nonStandardTaxName'] === null) {
            $object->setNonStandardTaxName(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        } elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] !== null) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        } elseif (\array_key_exists('paymentMethodName', $data) && $data['paymentMethodName'] === null) {
            $object->setPaymentMethodName(null);
        }
        if (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] !== null) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        } elseif (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] === null) {
            $object->setRecordCurrencyId(null);
        }
        if (\array_key_exists('recordCurrencyName', $data) && $data['recordCurrencyName'] !== null) {
            $object->setRecordCurrencyName($data['recordCurrencyName']);
            unset($data['recordCurrencyName']);
        } elseif (\array_key_exists('recordCurrencyName', $data) && $data['recordCurrencyName'] === null) {
            $object->setRecordCurrencyName(null);
        }
        if (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] !== null) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        } elseif (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] === null) {
            $object->setTermOfPaymentId(null);
        }
        if (\array_key_exists('termOfPaymentName', $data) && $data['termOfPaymentName'] !== null) {
            $object->setTermOfPaymentName($data['termOfPaymentName']);
            unset($data['termOfPaymentName']);
        } elseif (\array_key_exists('termOfPaymentName', $data) && $data['termOfPaymentName'] === null) {
            $object->setTermOfPaymentName(null);
        }
        if (\array_key_exists('commission', $data) && $data['commission'] !== null) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        } elseif (\array_key_exists('commission', $data) && $data['commission'] === null) {
            $object->setCommission(null);
        }
        if (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] !== null) {
            $values_2 = [];
            foreach ($data['commissionSalesPartners'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_2);
            unset($data['commissionSalesPartners']);
        } elseif (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] === null) {
            $object->setCommissionSalesPartners(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        } elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('customerNumber', $data) && $data['customerNumber'] !== null) {
            $object->setCustomerNumber($data['customerNumber']);
            unset($data['customerNumber']);
        } elseif (\array_key_exists('customerNumber', $data) && $data['customerNumber'] === null) {
            $object->setCustomerNumber(null);
        }
        if (\array_key_exists('dispatchCountryCode', $data) && $data['dispatchCountryCode'] !== null) {
            $object->setDispatchCountryCode($data['dispatchCountryCode']);
            unset($data['dispatchCountryCode']);
        } elseif (\array_key_exists('dispatchCountryCode', $data) && $data['dispatchCountryCode'] === null) {
            $object->setDispatchCountryCode(null);
        }
        if (\array_key_exists('factoring', $data) && $data['factoring'] !== null) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        } elseif (\array_key_exists('factoring', $data) && $data['factoring'] === null) {
            $object->setFactoring(null);
        }
        if (\array_key_exists('pricingDate', $data) && $data['pricingDate'] !== null) {
            $object->setPricingDate($data['pricingDate']);
            unset($data['pricingDate']);
        } elseif (\array_key_exists('pricingDate', $data) && $data['pricingDate'] === null) {
            $object->setPricingDate(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        } elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('responsibleUserUsername', $data) && $data['responsibleUserUsername'] !== null) {
            $object->setResponsibleUserUsername($data['responsibleUserUsername']);
            unset($data['responsibleUserUsername']);
        } elseif (\array_key_exists('responsibleUserUsername', $data) && $data['responsibleUserUsername'] === null) {
            $object->setResponsibleUserUsername(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        } elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
        }
        if (\array_key_exists('servicePeriodFrom', $data) && $data['servicePeriodFrom'] !== null) {
            $object->setServicePeriodFrom($data['servicePeriodFrom']);
            unset($data['servicePeriodFrom']);
        } elseif (\array_key_exists('servicePeriodFrom', $data) && $data['servicePeriodFrom'] === null) {
            $object->setServicePeriodFrom(null);
        }
        if (\array_key_exists('servicePeriodTo', $data) && $data['servicePeriodTo'] !== null) {
            $object->setServicePeriodTo($data['servicePeriodTo']);
            unset($data['servicePeriodTo']);
        } elseif (\array_key_exists('servicePeriodTo', $data) && $data['servicePeriodTo'] === null) {
            $object->setServicePeriodTo(null);
        }
        if (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] !== null) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        } elseif (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] === null) {
            $object->setShipmentMethodId(null);
        }
        if (\array_key_exists('shipmentMethodName', $data) && $data['shipmentMethodName'] !== null) {
            $object->setShipmentMethodName($data['shipmentMethodName']);
            unset($data['shipmentMethodName']);
        } elseif (\array_key_exists('shipmentMethodName', $data) && $data['shipmentMethodName'] === null) {
            $object->setShipmentMethodName(null);
        }
        if (\array_key_exists('bookingDate', $data) && $data['bookingDate'] !== null) {
            $object->setBookingDate($data['bookingDate']);
            unset($data['bookingDate']);
        } elseif (\array_key_exists('bookingDate', $data) && $data['bookingDate'] === null) {
            $object->setBookingDate(null);
        }
        if (\array_key_exists('bookingText', $data) && $data['bookingText'] !== null) {
            $object->setBookingText($data['bookingText']);
            unset($data['bookingText']);
        } elseif (\array_key_exists('bookingText', $data) && $data['bookingText'] === null) {
            $object->setBookingText(null);
        }
        if (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] !== null) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        } elseif (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] === null) {
            $object->setCancellationDate(null);
        }
        if (\array_key_exists('cancellationNumber', $data) && $data['cancellationNumber'] !== null) {
            $object->setCancellationNumber($data['cancellationNumber']);
            unset($data['cancellationNumber']);
        } elseif (\array_key_exists('cancellationNumber', $data) && $data['cancellationNumber'] === null) {
            $object->setCancellationNumber(null);
        }
        if (\array_key_exists('cancellationSlipCommissionBlock', $data) && $data['cancellationSlipCommissionBlock'] !== null) {
            $object->setCancellationSlipCommissionBlock($data['cancellationSlipCommissionBlock']);
            unset($data['cancellationSlipCommissionBlock']);
        } elseif (\array_key_exists('cancellationSlipCommissionBlock', $data) && $data['cancellationSlipCommissionBlock'] === null) {
            $object->setCancellationSlipCommissionBlock(null);
        }
        if (\array_key_exists('cancellationSlipCommissionSettlementDone', $data) && $data['cancellationSlipCommissionSettlementDone'] !== null) {
            $object->setCancellationSlipCommissionSettlementDone($data['cancellationSlipCommissionSettlementDone']);
            unset($data['cancellationSlipCommissionSettlementDone']);
        } elseif (\array_key_exists('cancellationSlipCommissionSettlementDone', $data) && $data['cancellationSlipCommissionSettlementDone'] === null) {
            $object->setCancellationSlipCommissionSettlementDone(null);
        }
        if (\array_key_exists('collectiveInvoicePositionPrintType', $data) && $data['collectiveInvoicePositionPrintType'] !== null) {
            $object->setCollectiveInvoicePositionPrintType($data['collectiveInvoicePositionPrintType']);
            unset($data['collectiveInvoicePositionPrintType']);
        } elseif (\array_key_exists('collectiveInvoicePositionPrintType', $data) && $data['collectiveInvoicePositionPrintType'] === null) {
            $object->setCollectiveInvoicePositionPrintType(null);
        }
        if (\array_key_exists('commissionBlock', $data) && $data['commissionBlock'] !== null) {
            $object->setCommissionBlock($data['commissionBlock']);
            unset($data['commissionBlock']);
        } elseif (\array_key_exists('commissionBlock', $data) && $data['commissionBlock'] === null) {
            $object->setCommissionBlock(null);
        }
        if (\array_key_exists('commissionSettlementDone', $data) && $data['commissionSettlementDone'] !== null) {
            $object->setCommissionSettlementDone($data['commissionSettlementDone']);
            unset($data['commissionSettlementDone']);
        } elseif (\array_key_exists('commissionSettlementDone', $data) && $data['commissionSettlementDone'] === null) {
            $object->setCommissionSettlementDone(null);
        }
        if (\array_key_exists('costCenterId', $data) && $data['costCenterId'] !== null) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        } elseif (\array_key_exists('costCenterId', $data) && $data['costCenterId'] === null) {
            $object->setCostCenterId(null);
        }
        if (\array_key_exists('costTypeId', $data) && $data['costTypeId'] !== null) {
            $object->setCostTypeId($data['costTypeId']);
            unset($data['costTypeId']);
        } elseif (\array_key_exists('costTypeId', $data) && $data['costTypeId'] === null) {
            $object->setCostTypeId(null);
        }
        if (\array_key_exists('creditResetsOrderState', $data) && $data['creditResetsOrderState'] !== null) {
            $object->setCreditResetsOrderState($data['creditResetsOrderState']);
            unset($data['creditResetsOrderState']);
        } elseif (\array_key_exists('creditResetsOrderState', $data) && $data['creditResetsOrderState'] === null) {
            $object->setCreditResetsOrderState(null);
        }
        if (\array_key_exists('customerHabitualExporterLetterOfIntentId', $data) && $data['customerHabitualExporterLetterOfIntentId'] !== null) {
            $object->setCustomerHabitualExporterLetterOfIntentId($data['customerHabitualExporterLetterOfIntentId']);
            unset($data['customerHabitualExporterLetterOfIntentId']);
        } elseif (\array_key_exists('customerHabitualExporterLetterOfIntentId', $data) && $data['customerHabitualExporterLetterOfIntentId'] === null) {
            $object->setCustomerHabitualExporterLetterOfIntentId(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        } elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] !== null) {
            $object->setDeliveryDate($data['deliveryDate']);
            unset($data['deliveryDate']);
        } elseif (\array_key_exists('deliveryDate', $data) && $data['deliveryDate'] === null) {
            $object->setDeliveryDate(null);
        }
        if (\array_key_exists('directDebitFileCreated', $data) && $data['directDebitFileCreated'] !== null) {
            $object->setDirectDebitFileCreated($data['directDebitFileCreated']);
            unset($data['directDebitFileCreated']);
        } elseif (\array_key_exists('directDebitFileCreated', $data) && $data['directDebitFileCreated'] === null) {
            $object->setDirectDebitFileCreated(null);
        }
        if (\array_key_exists('directDebitFileLatestDate', $data) && $data['directDebitFileLatestDate'] !== null) {
            $object->setDirectDebitFileLatestDate($data['directDebitFileLatestDate']);
            unset($data['directDebitFileLatestDate']);
        } elseif (\array_key_exists('directDebitFileLatestDate', $data) && $data['directDebitFileLatestDate'] === null) {
            $object->setDirectDebitFileLatestDate(null);
        }
        if (\array_key_exists('dueDate', $data) && $data['dueDate'] !== null) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        } elseif (\array_key_exists('dueDate', $data) && $data['dueDate'] === null) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('dunningBlockDateUntilDate', $data) && $data['dunningBlockDateUntilDate'] !== null) {
            $object->setDunningBlockDateUntilDate($data['dunningBlockDateUntilDate']);
            unset($data['dunningBlockDateUntilDate']);
        } elseif (\array_key_exists('dunningBlockDateUntilDate', $data) && $data['dunningBlockDateUntilDate'] === null) {
            $object->setDunningBlockDateUntilDate(null);
        }
        if (\array_key_exists('dunningBlockNote', $data) && $data['dunningBlockNote'] !== null) {
            $object->setDunningBlockNote($data['dunningBlockNote']);
            unset($data['dunningBlockNote']);
        } elseif (\array_key_exists('dunningBlockNote', $data) && $data['dunningBlockNote'] === null) {
            $object->setDunningBlockNote(null);
        }
        if (\array_key_exists('dunningBlockState', $data) && $data['dunningBlockState'] !== null) {
            $object->setDunningBlockState($data['dunningBlockState']);
            unset($data['dunningBlockState']);
        } elseif (\array_key_exists('dunningBlockState', $data) && $data['dunningBlockState'] === null) {
            $object->setDunningBlockState(null);
        }
        if (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] !== null) {
            $object->setInvoiceDate($data['invoiceDate']);
            unset($data['invoiceDate']);
        } elseif (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] === null) {
            $object->setInvoiceDate(null);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        } elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('orderNumberAtCustomer', $data) && $data['orderNumberAtCustomer'] !== null) {
            $object->setOrderNumberAtCustomer($data['orderNumberAtCustomer']);
            unset($data['orderNumberAtCustomer']);
        } elseif (\array_key_exists('orderNumberAtCustomer', $data) && $data['orderNumberAtCustomer'] === null) {
            $object->setOrderNumberAtCustomer(null);
        }
        if (\array_key_exists('paid', $data) && $data['paid'] !== null) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        } elseif (\array_key_exists('paid', $data) && $data['paid'] === null) {
            $object->setPaid(null);
        }
        if (\array_key_exists('paymentStatus', $data) && $data['paymentStatus'] !== null) {
            $object->setPaymentStatus($data['paymentStatus']);
            unset($data['paymentStatus']);
        } elseif (\array_key_exists('paymentStatus', $data) && $data['paymentStatus'] === null) {
            $object->setPaymentStatus(null);
        }
        if (\array_key_exists('precedingSalesInvoiceId', $data) && $data['precedingSalesInvoiceId'] !== null) {
            $object->setPrecedingSalesInvoiceId($data['precedingSalesInvoiceId']);
            unset($data['precedingSalesInvoiceId']);
        } elseif (\array_key_exists('precedingSalesInvoiceId', $data) && $data['precedingSalesInvoiceId'] === null) {
            $object->setPrecedingSalesInvoiceId(null);
        }
        if (\array_key_exists('recordAddress', $data) && $data['recordAddress'] !== null) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        } elseif (\array_key_exists('recordAddress', $data) && $data['recordAddress'] === null) {
            $object->setRecordAddress(null);
        }
        if (\array_key_exists('recordCommentInheritance', $data) && $data['recordCommentInheritance'] !== null) {
            $object->setRecordCommentInheritance($data['recordCommentInheritance']);
            unset($data['recordCommentInheritance']);
        } elseif (\array_key_exists('recordCommentInheritance', $data) && $data['recordCommentInheritance'] === null) {
            $object->setRecordCommentInheritance(null);
        }
        if (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] !== null) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        } elseif (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] === null) {
            $object->setRecordEmailAddresses(null);
        }
        if (\array_key_exists('recordFreeTextInheritance', $data) && $data['recordFreeTextInheritance'] !== null) {
            $object->setRecordFreeTextInheritance($data['recordFreeTextInheritance']);
            unset($data['recordFreeTextInheritance']);
        } elseif (\array_key_exists('recordFreeTextInheritance', $data) && $data['recordFreeTextInheritance'] === null) {
            $object->setRecordFreeTextInheritance(null);
        }
        if (\array_key_exists('recordOpeningInheritance', $data) && $data['recordOpeningInheritance'] !== null) {
            $object->setRecordOpeningInheritance($data['recordOpeningInheritance']);
            unset($data['recordOpeningInheritance']);
        } elseif (\array_key_exists('recordOpeningInheritance', $data) && $data['recordOpeningInheritance'] === null) {
            $object->setRecordOpeningInheritance(null);
        }
        if (\array_key_exists('salesInvoiceItems', $data) && $data['salesInvoiceItems'] !== null) {
            $values_3 = [];
            foreach ($data['salesInvoiceItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\SalesInvoiceItem::class, 'json', $context);
            }
            $object->setSalesInvoiceItems($values_3);
            unset($data['salesInvoiceItems']);
        } elseif (\array_key_exists('salesInvoiceItems', $data) && $data['salesInvoiceItems'] === null) {
            $object->setSalesInvoiceItems(null);
        }
        if (\array_key_exists('salesInvoiceType', $data) && $data['salesInvoiceType'] !== null) {
            $object->setSalesInvoiceType($data['salesInvoiceType']);
            unset($data['salesInvoiceType']);
        } elseif (\array_key_exists('salesInvoiceType', $data) && $data['salesInvoiceType'] === null) {
            $object->setSalesInvoiceType(null);
        }
        if (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] !== null) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        } elseif (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] === null) {
            $object->setSalesOrderId(null);
        }
        if (\array_key_exists('salesOrderNumber', $data) && $data['salesOrderNumber'] !== null) {
            $object->setSalesOrderNumber($data['salesOrderNumber']);
            unset($data['salesOrderNumber']);
        } elseif (\array_key_exists('salesOrderNumber', $data) && $data['salesOrderNumber'] === null) {
            $object->setSalesOrderNumber(null);
        }
        if (\array_key_exists('salesOrders', $data) && $data['salesOrders'] !== null) {
            $values_4 = [];
            foreach ($data['salesOrders'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSalesOrders($values_4);
            unset($data['salesOrders']);
        } elseif (\array_key_exists('salesOrders', $data) && $data['salesOrders'] === null) {
            $object->setSalesOrders(null);
        }
        if (\array_key_exists('sepaDirectDebitMandateId', $data) && $data['sepaDirectDebitMandateId'] !== null) {
            $object->setSepaDirectDebitMandateId($data['sepaDirectDebitMandateId']);
            unset($data['sepaDirectDebitMandateId']);
        } elseif (\array_key_exists('sepaDirectDebitMandateId', $data) && $data['sepaDirectDebitMandateId'] === null) {
            $object->setSepaDirectDebitMandateId(null);
        }
        if (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] !== null) {
            $values_5 = [];
            foreach ($data['shippingCostItems'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class, 'json', $context);
            }
            $object->setShippingCostItems($values_5);
            unset($data['shippingCostItems']);
        } elseif (\array_key_exists('shippingCostItems', $data) && $data['shippingCostItems'] === null) {
            $object->setShippingCostItems(null);
        }
        if (\array_key_exists('shippingDate', $data) && $data['shippingDate'] !== null) {
            $object->setShippingDate($data['shippingDate']);
            unset($data['shippingDate']);
        } elseif (\array_key_exists('shippingDate', $data) && $data['shippingDate'] === null) {
            $object->setShippingDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_6 = [];
            foreach ($data['statusHistory'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\SalesInvoiceStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_6);
            unset($data['statusHistory']);
        } elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] !== null) {
            $object->setVatRegistrationNumber($data['vatRegistrationNumber']);
            unset($data['vatRegistrationNumber']);
        } elseif (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] === null) {
            $object->setVatRegistrationNumber(null);
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
