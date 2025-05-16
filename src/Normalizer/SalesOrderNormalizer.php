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

class SalesOrderNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrder;
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
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
        if (\array_key_exists('defaultShippingCarrierId', $data)) {
            $object->setDefaultShippingCarrierId($data['defaultShippingCarrierId']);
            unset($data['defaultShippingCarrierId']);
        }
        if (\array_key_exists('defaultShippingCarrierName', $data)) {
            $object->setDefaultShippingCarrierName($data['defaultShippingCarrierName']);
            unset($data['defaultShippingCarrierName']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('deliveryEmailAddresses', $data)) {
            $object->setDeliveryEmailAddresses($this->denormalizer->denormalize($data['deliveryEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['deliveryEmailAddresses']);
        }
        if (\array_key_exists('invoiceAddress', $data)) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        if (\array_key_exists('plannedDeliveryDate', $data)) {
            $object->setPlannedDeliveryDate($data['plannedDeliveryDate']);
            unset($data['plannedDeliveryDate']);
        }
        if (\array_key_exists('plannedShippingDate', $data)) {
            $object->setPlannedShippingDate($data['plannedShippingDate']);
            unset($data['plannedShippingDate']);
        }
        if (\array_key_exists('recordAddress', $data)) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        }
        if (\array_key_exists('salesInvoiceEmailAddresses', $data)) {
            $object->setSalesInvoiceEmailAddresses($this->denormalizer->denormalize($data['salesInvoiceEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesInvoiceEmailAddresses']);
        }
        if (\array_key_exists('advancePaymentAmount', $data)) {
            $object->setAdvancePaymentAmount($data['advancePaymentAmount']);
            unset($data['advancePaymentAmount']);
        }
        if (\array_key_exists('advancePaymentStatus', $data)) {
            $object->setAdvancePaymentStatus($data['advancePaymentStatus']);
            unset($data['advancePaymentStatus']);
        }
        if (\array_key_exists('applyShippingCostsOnlyOnce', $data)) {
            $object->setApplyShippingCostsOnlyOnce($data['applyShippingCostsOnlyOnce']);
            unset($data['applyShippingCostsOnlyOnce']);
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($data['availability']);
            unset($data['availability']);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data)) {
            $object->setAvailabilityForAllWarehouses($data['availabilityForAllWarehouses']);
            unset($data['availabilityForAllWarehouses']);
        }
        if (\array_key_exists('cashAccountId', $data)) {
            $object->setCashAccountId($data['cashAccountId']);
            unset($data['cashAccountId']);
        }
        if (\array_key_exists('customerHabitualExporterLetterOfIntentId', $data)) {
            $object->setCustomerHabitualExporterLetterOfIntentId($data['customerHabitualExporterLetterOfIntentId']);
            unset($data['customerHabitualExporterLetterOfIntentId']);
        }
        if (\array_key_exists('defaultShippingReturnCarrierId', $data)) {
            $object->setDefaultShippingReturnCarrierId($data['defaultShippingReturnCarrierId']);
            unset($data['defaultShippingReturnCarrierId']);
        }
        if (\array_key_exists('defaultShippingReturnCarrierName', $data)) {
            $object->setDefaultShippingReturnCarrierName($data['defaultShippingReturnCarrierName']);
            unset($data['defaultShippingReturnCarrierName']);
        }
        if (\array_key_exists('ecommerceOrder', $data)) {
            $object->setEcommerceOrder($this->denormalizer->denormalize($data['ecommerceOrder'], \Webhubworks\WeclappApiCore\Model\EcommerceOrder::class, 'json', $context));
            unset($data['ecommerceOrder']);
        }
        if (\array_key_exists('fulfillmentProviderId', $data)) {
            $object->setFulfillmentProviderId($data['fulfillmentProviderId']);
            unset($data['fulfillmentProviderId']);
        }
        if (\array_key_exists('invoiceRecipientId', $data)) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        if (\array_key_exists('invoiced', $data)) {
            $object->setInvoiced($data['invoiced']);
            unset($data['invoiced']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('onlyServices', $data)) {
            $object->setOnlyServices($data['onlyServices']);
            unset($data['onlyServices']);
        }
        if (\array_key_exists('orderDate', $data)) {
            $object->setOrderDate($data['orderDate']);
            unset($data['orderDate']);
        }
        if (\array_key_exists('orderItems', $data)) {
            $values_3 = [];
            foreach ($data['orderItems'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\SalesOrderItem::class, 'json', $context);
            }
            $object->setOrderItems($values_3);
            unset($data['orderItems']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
            unset($data['orderNumber']);
        }
        if (\array_key_exists('orderNumberAtCustomer', $data)) {
            $object->setOrderNumberAtCustomer($data['orderNumberAtCustomer']);
            unset($data['orderNumberAtCustomer']);
        }
        if (\array_key_exists('paid', $data)) {
            $object->setPaid($data['paid']);
            unset($data['paid']);
        }
        if (\array_key_exists('payments', $data)) {
            $values_4 = [];
            foreach ($data['payments'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class, 'json', $context);
            }
            $object->setPayments($values_4);
            unset($data['payments']);
        }
        if (\array_key_exists('plannedProjectEndDate', $data)) {
            $object->setPlannedProjectEndDate($data['plannedProjectEndDate']);
            unset($data['plannedProjectEndDate']);
        }
        if (\array_key_exists('plannedProjectStartDate', $data)) {
            $object->setPlannedProjectStartDate($data['plannedProjectStartDate']);
            unset($data['plannedProjectStartDate']);
        }
        if (\array_key_exists('projectGoals', $data)) {
            $object->setProjectGoals($data['projectGoals']);
            unset($data['projectGoals']);
        }
        if (\array_key_exists('projectMembers', $data)) {
            $values_5 = [];
            foreach ($data['projectMembers'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\ProjectMembers::class, 'json', $context);
            }
            $object->setProjectMembers($values_5);
            unset($data['projectMembers']);
        }
        if (\array_key_exists('projectModeActive', $data)) {
            $object->setProjectModeActive($data['projectModeActive']);
            unset($data['projectModeActive']);
        }
        if (\array_key_exists('quotationId', $data)) {
            $object->setQuotationId($data['quotationId']);
            unset($data['quotationId']);
        }
        if (\array_key_exists('quotationNumber', $data)) {
            $object->setQuotationNumber($data['quotationNumber']);
            unset($data['quotationNumber']);
        }
        if (\array_key_exists('recordAsn', $data)) {
            $object->setRecordAsn($data['recordAsn']);
            unset($data['recordAsn']);
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
        if (\array_key_exists('salesOrderPaymentType', $data)) {
            $object->setSalesOrderPaymentType($data['salesOrderPaymentType']);
            unset($data['salesOrderPaymentType']);
        }
        if (\array_key_exists('sepaDirectDebitMandateId', $data)) {
            $object->setSepaDirectDebitMandateId($data['sepaDirectDebitMandateId']);
            unset($data['sepaDirectDebitMandateId']);
        }
        if (\array_key_exists('servicesFinished', $data)) {
            $object->setServicesFinished($data['servicesFinished']);
            unset($data['servicesFinished']);
        }
        if (\array_key_exists('shipped', $data)) {
            $object->setShipped($data['shipped']);
            unset($data['shipped']);
        }
        if (\array_key_exists('shippingCostItems', $data)) {
            $values_6 = [];
            foreach ($data['shippingCostItems'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\SalesOrderShippingCostItem::class, 'json', $context);
            }
            $object->setShippingCostItems($values_6);
            unset($data['shippingCostItems']);
        }
        if (\array_key_exists('shippingLabelsCount', $data)) {
            $object->setShippingLabelsCount($data['shippingLabelsCount']);
            unset($data['shippingLabelsCount']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('statusHistory', $data)) {
            $values_7 = [];
            foreach ($data['statusHistory'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\SalesOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_7);
            unset($data['statusHistory']);
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        if (\array_key_exists('warehouseId', $data)) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        }
        if (\array_key_exists('warehouseName', $data)) {
            $object->setWarehouseName($data['warehouseName']);
            unset($data['warehouseName']);
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
        if ($data->isInitialized('defaultShippingCarrierId') && $data->getDefaultShippingCarrierId() !== null) {
            $dataArray['defaultShippingCarrierId'] = $data->getDefaultShippingCarrierId();
        }
        if ($data->isInitialized('defaultShippingCarrierName') && $data->getDefaultShippingCarrierName() !== null) {
            $dataArray['defaultShippingCarrierName'] = $data->getDefaultShippingCarrierName();
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryEmailAddresses') && $data->getDeliveryEmailAddresses() !== null) {
            $dataArray['deliveryEmailAddresses'] = $this->normalizer->normalize($data->getDeliveryEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('plannedDeliveryDate') && $data->getPlannedDeliveryDate() !== null) {
            $dataArray['plannedDeliveryDate'] = $data->getPlannedDeliveryDate();
        }
        if ($data->isInitialized('plannedShippingDate') && $data->getPlannedShippingDate() !== null) {
            $dataArray['plannedShippingDate'] = $data->getPlannedShippingDate();
        }
        if ($data->isInitialized('recordAddress') && $data->getRecordAddress() !== null) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('salesInvoiceEmailAddresses') && $data->getSalesInvoiceEmailAddresses() !== null) {
            $dataArray['salesInvoiceEmailAddresses'] = $this->normalizer->normalize($data->getSalesInvoiceEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('advancePaymentAmount') && $data->getAdvancePaymentAmount() !== null) {
            $dataArray['advancePaymentAmount'] = $data->getAdvancePaymentAmount();
        }
        if ($data->isInitialized('advancePaymentStatus') && $data->getAdvancePaymentStatus() !== null) {
            $dataArray['advancePaymentStatus'] = $data->getAdvancePaymentStatus();
        }
        if ($data->isInitialized('applyShippingCostsOnlyOnce') && $data->getApplyShippingCostsOnlyOnce() !== null) {
            $dataArray['applyShippingCostsOnlyOnce'] = $data->getApplyShippingCostsOnlyOnce();
        }
        if ($data->isInitialized('availability') && $data->getAvailability() !== null) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && $data->getAvailabilityForAllWarehouses() !== null) {
            $dataArray['availabilityForAllWarehouses'] = $data->getAvailabilityForAllWarehouses();
        }
        if ($data->isInitialized('cashAccountId') && $data->getCashAccountId() !== null) {
            $dataArray['cashAccountId'] = $data->getCashAccountId();
        }
        if ($data->isInitialized('customerHabitualExporterLetterOfIntentId') && $data->getCustomerHabitualExporterLetterOfIntentId() !== null) {
            $dataArray['customerHabitualExporterLetterOfIntentId'] = $data->getCustomerHabitualExporterLetterOfIntentId();
        }
        if ($data->isInitialized('defaultShippingReturnCarrierId') && $data->getDefaultShippingReturnCarrierId() !== null) {
            $dataArray['defaultShippingReturnCarrierId'] = $data->getDefaultShippingReturnCarrierId();
        }
        if ($data->isInitialized('defaultShippingReturnCarrierName') && $data->getDefaultShippingReturnCarrierName() !== null) {
            $dataArray['defaultShippingReturnCarrierName'] = $data->getDefaultShippingReturnCarrierName();
        }
        if ($data->isInitialized('ecommerceOrder') && $data->getEcommerceOrder() !== null) {
            $dataArray['ecommerceOrder'] = $this->normalizer->normalize($data->getEcommerceOrder(), 'json', $context);
        }
        if ($data->isInitialized('fulfillmentProviderId') && $data->getFulfillmentProviderId() !== null) {
            $dataArray['fulfillmentProviderId'] = $data->getFulfillmentProviderId();
        }
        if ($data->isInitialized('invoiceRecipientId') && $data->getInvoiceRecipientId() !== null) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('invoiced') && $data->getInvoiced() !== null) {
            $dataArray['invoiced'] = $data->getInvoiced();
        }
        if ($data->isInitialized('note') && $data->getNote() !== null) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('onlyServices') && $data->getOnlyServices() !== null) {
            $dataArray['onlyServices'] = $data->getOnlyServices();
        }
        if ($data->isInitialized('orderDate') && $data->getOrderDate() !== null) {
            $dataArray['orderDate'] = $data->getOrderDate();
        }
        if ($data->isInitialized('orderItems') && $data->getOrderItems() !== null) {
            $values_3 = [];
            foreach ($data->getOrderItems() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['orderItems'] = $values_3;
        }
        if ($data->isInitialized('orderNumber') && $data->getOrderNumber() !== null) {
            $dataArray['orderNumber'] = $data->getOrderNumber();
        }
        if ($data->isInitialized('orderNumberAtCustomer') && $data->getOrderNumberAtCustomer() !== null) {
            $dataArray['orderNumberAtCustomer'] = $data->getOrderNumberAtCustomer();
        }
        if ($data->isInitialized('paid') && $data->getPaid() !== null) {
            $dataArray['paid'] = $data->getPaid();
        }
        if ($data->isInitialized('payments') && $data->getPayments() !== null) {
            $values_4 = [];
            foreach ($data->getPayments() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['payments'] = $values_4;
        }
        if ($data->isInitialized('plannedProjectEndDate') && $data->getPlannedProjectEndDate() !== null) {
            $dataArray['plannedProjectEndDate'] = $data->getPlannedProjectEndDate();
        }
        if ($data->isInitialized('plannedProjectStartDate') && $data->getPlannedProjectStartDate() !== null) {
            $dataArray['plannedProjectStartDate'] = $data->getPlannedProjectStartDate();
        }
        if ($data->isInitialized('projectGoals') && $data->getProjectGoals() !== null) {
            $dataArray['projectGoals'] = $data->getProjectGoals();
        }
        if ($data->isInitialized('projectMembers') && $data->getProjectMembers() !== null) {
            $values_5 = [];
            foreach ($data->getProjectMembers() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['projectMembers'] = $values_5;
        }
        if ($data->isInitialized('projectModeActive') && $data->getProjectModeActive() !== null) {
            $dataArray['projectModeActive'] = $data->getProjectModeActive();
        }
        if ($data->isInitialized('quotationId') && $data->getQuotationId() !== null) {
            $dataArray['quotationId'] = $data->getQuotationId();
        }
        if ($data->isInitialized('quotationNumber') && $data->getQuotationNumber() !== null) {
            $dataArray['quotationNumber'] = $data->getQuotationNumber();
        }
        if ($data->isInitialized('recordAsn') && $data->getRecordAsn() !== null) {
            $dataArray['recordAsn'] = $data->getRecordAsn();
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
        if ($data->isInitialized('salesOrderPaymentType') && $data->getSalesOrderPaymentType() !== null) {
            $dataArray['salesOrderPaymentType'] = $data->getSalesOrderPaymentType();
        }
        if ($data->isInitialized('sepaDirectDebitMandateId') && $data->getSepaDirectDebitMandateId() !== null) {
            $dataArray['sepaDirectDebitMandateId'] = $data->getSepaDirectDebitMandateId();
        }
        if ($data->isInitialized('servicesFinished') && $data->getServicesFinished() !== null) {
            $dataArray['servicesFinished'] = $data->getServicesFinished();
        }
        if ($data->isInitialized('shipped') && $data->getShipped() !== null) {
            $dataArray['shipped'] = $data->getShipped();
        }
        if ($data->isInitialized('shippingCostItems') && $data->getShippingCostItems() !== null) {
            $values_6 = [];
            foreach ($data->getShippingCostItems() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['shippingCostItems'] = $values_6;
        }
        if ($data->isInitialized('shippingLabelsCount') && $data->getShippingLabelsCount() !== null) {
            $dataArray['shippingLabelsCount'] = $data->getShippingLabelsCount();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values_7 = [];
            foreach ($data->getStatusHistory() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_7;
        }
        if ($data->isInitialized('template') && $data->getTemplate() !== null) {
            $dataArray['template'] = $data->getTemplate();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        if ($data->isInitialized('warehouseName') && $data->getWarehouseName() !== null) {
            $dataArray['warehouseName'] = $data->getWarehouseName();
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesOrder::class => false];
    }
}
