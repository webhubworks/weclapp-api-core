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
class ContractNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Contract::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Contract::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Contract();
        if (\array_key_exists('disableEmailTemplate', $data) && \is_int($data['disableEmailTemplate'])) {
            $data['disableEmailTemplate'] = (bool) $data['disableEmailTemplate'];
        }
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('automaticExtension', $data) && \is_int($data['automaticExtension'])) {
            $data['automaticExtension'] = (bool) $data['automaticExtension'];
        }
        if (\array_key_exists('differingCorrespondenceAddress', $data) && \is_int($data['differingCorrespondenceAddress'])) {
            $data['differingCorrespondenceAddress'] = (bool) $data['differingCorrespondenceAddress'];
        }
        if (\array_key_exists('differingDeliveryAddress', $data) && \is_int($data['differingDeliveryAddress'])) {
            $data['differingDeliveryAddress'] = (bool) $data['differingDeliveryAddress'];
        }
        if (\array_key_exists('differingInvoiceAddress', $data) && \is_int($data['differingInvoiceAddress'])) {
            $data['differingInvoiceAddress'] = (bool) $data['differingInvoiceAddress'];
        }
        if (\array_key_exists('factoring', $data) && \is_int($data['factoring'])) {
            $data['factoring'] = (bool) $data['factoring'];
        }
        if (\array_key_exists('template', $data) && \is_int($data['template'])) {
            $data['template'] = (bool) $data['template'];
        }
        if (\array_key_exists('unlimited', $data) && \is_int($data['unlimited'])) {
            $data['unlimited'] = (bool) $data['unlimited'];
        }
        if (null === $data || false === \is_array($data)) {
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
        if (\array_key_exists('additionalAddresses', $data)) {
            $values_2 = [];
            foreach ($data['additionalAddresses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ContractAdditionalAddress::class, 'json', $context);
            }
            $object->setAdditionalAddresses($values_2);
            unset($data['additionalAddresses']);
        }
        if (\array_key_exists('authorizationUnitId', $data)) {
            $object->setAuthorizationUnitId($data['authorizationUnitId']);
            unset($data['authorizationUnitId']);
        }
        if (\array_key_exists('automaticExtension', $data)) {
            $object->setAutomaticExtension($data['automaticExtension']);
            unset($data['automaticExtension']);
        }
        if (\array_key_exists('billUntil', $data)) {
            $object->setBillUntil($data['billUntil']);
            unset($data['billUntil']);
        }
        if (\array_key_exists('billingDay', $data)) {
            $object->setBillingDay($data['billingDay']);
            unset($data['billingDay']);
        }
        if (\array_key_exists('billingTargetInvoiceStatus', $data)) {
            $object->setBillingTargetInvoiceStatus($data['billingTargetInvoiceStatus']);
            unset($data['billingTargetInvoiceStatus']);
        }
        if (\array_key_exists('billingType', $data)) {
            $object->setBillingType($data['billingType']);
            unset($data['billingType']);
        }
        if (\array_key_exists('cancellationDate', $data)) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        }
        if (\array_key_exists('cancellationPeriodQuantity', $data)) {
            $object->setCancellationPeriodQuantity($data['cancellationPeriodQuantity']);
            unset($data['cancellationPeriodQuantity']);
        }
        if (\array_key_exists('cancellationPeriodSoftframe', $data)) {
            $object->setCancellationPeriodSoftframe($data['cancellationPeriodSoftframe']);
            unset($data['cancellationPeriodSoftframe']);
        }
        if (\array_key_exists('cancellationPeriodUnit', $data)) {
            $object->setCancellationPeriodUnit($data['cancellationPeriodUnit']);
            unset($data['cancellationPeriodUnit']);
        }
        if (\array_key_exists('commission', $data)) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        }
        if (\array_key_exists('commissionSalesPartners', $data)) {
            $values_3 = [];
            foreach ($data['commissionSalesPartners'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_3);
            unset($data['commissionSalesPartners']);
        }
        if (\array_key_exists('contractCostItems', $data)) {
            $values_4 = [];
            foreach ($data['contractCostItems'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\ContractCostItem::class, 'json', $context);
            }
            $object->setContractCostItems($values_4);
            unset($data['contractCostItems']);
        }
        if (\array_key_exists('contractDate', $data)) {
            $object->setContractDate($data['contractDate']);
            unset($data['contractDate']);
        }
        if (\array_key_exists('contractItems', $data)) {
            $values_5 = [];
            foreach ($data['contractItems'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\ContractItem::class, 'json', $context);
            }
            $object->setContractItems($values_5);
            unset($data['contractItems']);
        }
        if (\array_key_exists('contractNumber', $data)) {
            $object->setContractNumber($data['contractNumber']);
            unset($data['contractNumber']);
        }
        if (\array_key_exists('contractNumberAtParty', $data)) {
            $object->setContractNumberAtParty($data['contractNumberAtParty']);
            unset($data['contractNumberAtParty']);
        }
        if (\array_key_exists('contractStatus', $data)) {
            $object->setContractStatus($data['contractStatus']);
            unset($data['contractStatus']);
        }
        if (\array_key_exists('correspondenceAddress', $data)) {
            $object->setCorrespondenceAddress($this->denormalizer->denormalize($data['correspondenceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['correspondenceAddress']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('deliveryEmailAddresses', $data)) {
            $object->setDeliveryEmailAddresses($this->denormalizer->denormalize($data['deliveryEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['deliveryEmailAddresses']);
        }
        if (\array_key_exists('differingCorrespondenceAddress', $data)) {
            $object->setDifferingCorrespondenceAddress($data['differingCorrespondenceAddress']);
            unset($data['differingCorrespondenceAddress']);
        }
        if (\array_key_exists('differingDeliveryAddress', $data)) {
            $object->setDifferingDeliveryAddress($data['differingDeliveryAddress']);
            unset($data['differingDeliveryAddress']);
        }
        if (\array_key_exists('differingInvoiceAddress', $data)) {
            $object->setDifferingInvoiceAddress($data['differingInvoiceAddress']);
            unset($data['differingInvoiceAddress']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        if (\array_key_exists('extensionQuantity', $data)) {
            $object->setExtensionQuantity($data['extensionQuantity']);
            unset($data['extensionQuantity']);
        }
        if (\array_key_exists('extensionUnit', $data)) {
            $object->setExtensionUnit($data['extensionUnit']);
            unset($data['extensionUnit']);
        }
        if (\array_key_exists('factoring', $data)) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        }
        if (\array_key_exists('invoiceAddress', $data)) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        }
        if (\array_key_exists('invoiceRecipientId', $data)) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        if (\array_key_exists('latestCancellationWarningQuantity', $data)) {
            $object->setLatestCancellationWarningQuantity($data['latestCancellationWarningQuantity']);
            unset($data['latestCancellationWarningQuantity']);
        }
        if (\array_key_exists('latestCancellationWarningUnit', $data)) {
            $object->setLatestCancellationWarningUnit($data['latestCancellationWarningUnit']);
            unset($data['latestCancellationWarningUnit']);
        }
        if (\array_key_exists('latestPossibleTerminationDate', $data)) {
            $object->setLatestPossibleTerminationDate($data['latestPossibleTerminationDate']);
            unset($data['latestPossibleTerminationDate']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('nextContractBillingDate', $data)) {
            $object->setNextContractBillingDate($data['nextContractBillingDate']);
            unset($data['nextContractBillingDate']);
        }
        if (\array_key_exists('nonStandardInputTaxId', $data)) {
            $object->setNonStandardInputTaxId($data['nonStandardInputTaxId']);
            unset($data['nonStandardInputTaxId']);
        }
        if (\array_key_exists('orderNumberAtCustomer', $data)) {
            $object->setOrderNumberAtCustomer($data['orderNumberAtCustomer']);
            unset($data['orderNumberAtCustomer']);
        }
        if (\array_key_exists('partyId', $data)) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        if (\array_key_exists('paymentMethodId', $data)) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        if (\array_key_exists('pricingDate', $data)) {
            $object->setPricingDate($data['pricingDate']);
            unset($data['pricingDate']);
        }
        if (\array_key_exists('purchaseEmailAddresses', $data)) {
            $object->setPurchaseEmailAddresses($this->denormalizer->denormalize($data['purchaseEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['purchaseEmailAddresses']);
        }
        if (\array_key_exists('recordCurrencyId', $data)) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        }
        if (\array_key_exists('recordCurrencyName', $data)) {
            $object->setRecordCurrencyName($data['recordCurrencyName']);
            unset($data['recordCurrencyName']);
        }
        if (\array_key_exists('recordEmailAddresses', $data)) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        }
        if (\array_key_exists('reminderDate', $data)) {
            $object->setReminderDate($data['reminderDate']);
            unset($data['reminderDate']);
        }
        if (\array_key_exists('reminderSendType', $data)) {
            $object->setReminderSendType($data['reminderSendType']);
            unset($data['reminderSendType']);
        }
        if (\array_key_exists('reminderType', $data)) {
            $object->setReminderType($data['reminderType']);
            unset($data['reminderType']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('salesChannel', $data)) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        if (\array_key_exists('salesInvoiceEmailAddresses', $data)) {
            $object->setSalesInvoiceEmailAddresses($this->denormalizer->denormalize($data['salesInvoiceEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesInvoiceEmailAddresses']);
        }
        if (\array_key_exists('salesOrderEmailAddresses', $data)) {
            $object->setSalesOrderEmailAddresses($this->denormalizer->denormalize($data['salesOrderEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesOrderEmailAddresses']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        if (\array_key_exists('termOfPaymentId', $data)) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        }
        if (\array_key_exists('terminationReasonId', $data)) {
            $object->setTerminationReasonId($data['terminationReasonId']);
            unset($data['terminationReasonId']);
        }
        if (\array_key_exists('ticketServiceLevelAgreementId', $data)) {
            $object->setTicketServiceLevelAgreementId($data['ticketServiceLevelAgreementId']);
            unset($data['ticketServiceLevelAgreementId']);
        }
        if (\array_key_exists('types', $data)) {
            $values_6 = [];
            foreach ($data['types'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTypes($values_6);
            unset($data['types']);
        }
        if (\array_key_exists('unlimited', $data)) {
            $object->setUnlimited($data['unlimited']);
            unset($data['unlimited']);
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
        if ($data->isInitialized('additionalAddresses') && null !== $data->getAdditionalAddresses()) {
            $values_2 = [];
            foreach ($data->getAdditionalAddresses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['additionalAddresses'] = $values_2;
        }
        if ($data->isInitialized('authorizationUnitId') && null !== $data->getAuthorizationUnitId()) {
            $dataArray['authorizationUnitId'] = $data->getAuthorizationUnitId();
        }
        if ($data->isInitialized('automaticExtension') && null !== $data->getAutomaticExtension()) {
            $dataArray['automaticExtension'] = $data->getAutomaticExtension();
        }
        if ($data->isInitialized('billUntil') && null !== $data->getBillUntil()) {
            $dataArray['billUntil'] = $data->getBillUntil();
        }
        if ($data->isInitialized('billingDay') && null !== $data->getBillingDay()) {
            $dataArray['billingDay'] = $data->getBillingDay();
        }
        if ($data->isInitialized('billingTargetInvoiceStatus') && null !== $data->getBillingTargetInvoiceStatus()) {
            $dataArray['billingTargetInvoiceStatus'] = $data->getBillingTargetInvoiceStatus();
        }
        if ($data->isInitialized('billingType') && null !== $data->getBillingType()) {
            $dataArray['billingType'] = $data->getBillingType();
        }
        if ($data->isInitialized('cancellationDate') && null !== $data->getCancellationDate()) {
            $dataArray['cancellationDate'] = $data->getCancellationDate();
        }
        if ($data->isInitialized('cancellationPeriodQuantity') && null !== $data->getCancellationPeriodQuantity()) {
            $dataArray['cancellationPeriodQuantity'] = $data->getCancellationPeriodQuantity();
        }
        if ($data->isInitialized('cancellationPeriodSoftframe') && null !== $data->getCancellationPeriodSoftframe()) {
            $dataArray['cancellationPeriodSoftframe'] = $data->getCancellationPeriodSoftframe();
        }
        if ($data->isInitialized('cancellationPeriodUnit') && null !== $data->getCancellationPeriodUnit()) {
            $dataArray['cancellationPeriodUnit'] = $data->getCancellationPeriodUnit();
        }
        if ($data->isInitialized('commission') && null !== $data->getCommission()) {
            $dataArray['commission'] = $data->getCommission();
        }
        if ($data->isInitialized('commissionSalesPartners') && null !== $data->getCommissionSalesPartners()) {
            $values_3 = [];
            foreach ($data->getCommissionSalesPartners() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_3;
        }
        if ($data->isInitialized('contractCostItems') && null !== $data->getContractCostItems()) {
            $values_4 = [];
            foreach ($data->getContractCostItems() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['contractCostItems'] = $values_4;
        }
        if ($data->isInitialized('contractDate') && null !== $data->getContractDate()) {
            $dataArray['contractDate'] = $data->getContractDate();
        }
        if ($data->isInitialized('contractItems') && null !== $data->getContractItems()) {
            $values_5 = [];
            foreach ($data->getContractItems() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['contractItems'] = $values_5;
        }
        if ($data->isInitialized('contractNumber') && null !== $data->getContractNumber()) {
            $dataArray['contractNumber'] = $data->getContractNumber();
        }
        if ($data->isInitialized('contractNumberAtParty') && null !== $data->getContractNumberAtParty()) {
            $dataArray['contractNumberAtParty'] = $data->getContractNumberAtParty();
        }
        if ($data->isInitialized('contractStatus') && null !== $data->getContractStatus()) {
            $dataArray['contractStatus'] = $data->getContractStatus();
        }
        if ($data->isInitialized('correspondenceAddress') && null !== $data->getCorrespondenceAddress()) {
            $dataArray['correspondenceAddress'] = $this->normalizer->normalize($data->getCorrespondenceAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryAddress') && null !== $data->getDeliveryAddress()) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryEmailAddresses') && null !== $data->getDeliveryEmailAddresses()) {
            $dataArray['deliveryEmailAddresses'] = $this->normalizer->normalize($data->getDeliveryEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('differingCorrespondenceAddress') && null !== $data->getDifferingCorrespondenceAddress()) {
            $dataArray['differingCorrespondenceAddress'] = $data->getDifferingCorrespondenceAddress();
        }
        if ($data->isInitialized('differingDeliveryAddress') && null !== $data->getDifferingDeliveryAddress()) {
            $dataArray['differingDeliveryAddress'] = $data->getDifferingDeliveryAddress();
        }
        if ($data->isInitialized('differingInvoiceAddress') && null !== $data->getDifferingInvoiceAddress()) {
            $dataArray['differingInvoiceAddress'] = $data->getDifferingInvoiceAddress();
        }
        if ($data->isInitialized('endDate') && null !== $data->getEndDate()) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('extensionQuantity') && null !== $data->getExtensionQuantity()) {
            $dataArray['extensionQuantity'] = $data->getExtensionQuantity();
        }
        if ($data->isInitialized('extensionUnit') && null !== $data->getExtensionUnit()) {
            $dataArray['extensionUnit'] = $data->getExtensionUnit();
        }
        if ($data->isInitialized('factoring') && null !== $data->getFactoring()) {
            $dataArray['factoring'] = $data->getFactoring();
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('invoiceRecipientId') && null !== $data->getInvoiceRecipientId()) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('latestCancellationWarningQuantity') && null !== $data->getLatestCancellationWarningQuantity()) {
            $dataArray['latestCancellationWarningQuantity'] = $data->getLatestCancellationWarningQuantity();
        }
        if ($data->isInitialized('latestCancellationWarningUnit') && null !== $data->getLatestCancellationWarningUnit()) {
            $dataArray['latestCancellationWarningUnit'] = $data->getLatestCancellationWarningUnit();
        }
        if ($data->isInitialized('latestPossibleTerminationDate') && null !== $data->getLatestPossibleTerminationDate()) {
            $dataArray['latestPossibleTerminationDate'] = $data->getLatestPossibleTerminationDate();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('nextContractBillingDate') && null !== $data->getNextContractBillingDate()) {
            $dataArray['nextContractBillingDate'] = $data->getNextContractBillingDate();
        }
        if ($data->isInitialized('nonStandardInputTaxId') && null !== $data->getNonStandardInputTaxId()) {
            $dataArray['nonStandardInputTaxId'] = $data->getNonStandardInputTaxId();
        }
        if ($data->isInitialized('orderNumberAtCustomer') && null !== $data->getOrderNumberAtCustomer()) {
            $dataArray['orderNumberAtCustomer'] = $data->getOrderNumberAtCustomer();
        }
        if ($data->isInitialized('partyId') && null !== $data->getPartyId()) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('paymentMethodId') && null !== $data->getPaymentMethodId()) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('pricingDate') && null !== $data->getPricingDate()) {
            $dataArray['pricingDate'] = $data->getPricingDate();
        }
        if ($data->isInitialized('purchaseEmailAddresses') && null !== $data->getPurchaseEmailAddresses()) {
            $dataArray['purchaseEmailAddresses'] = $this->normalizer->normalize($data->getPurchaseEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('recordCurrencyId') && null !== $data->getRecordCurrencyId()) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('recordCurrencyName') && null !== $data->getRecordCurrencyName()) {
            $dataArray['recordCurrencyName'] = $data->getRecordCurrencyName();
        }
        if ($data->isInitialized('recordEmailAddresses') && null !== $data->getRecordEmailAddresses()) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('reminderDate') && null !== $data->getReminderDate()) {
            $dataArray['reminderDate'] = $data->getReminderDate();
        }
        if ($data->isInitialized('reminderSendType') && null !== $data->getReminderSendType()) {
            $dataArray['reminderSendType'] = $data->getReminderSendType();
        }
        if ($data->isInitialized('reminderType') && null !== $data->getReminderType()) {
            $dataArray['reminderType'] = $data->getReminderType();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('salesChannel') && null !== $data->getSalesChannel()) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('salesInvoiceEmailAddresses') && null !== $data->getSalesInvoiceEmailAddresses()) {
            $dataArray['salesInvoiceEmailAddresses'] = $this->normalizer->normalize($data->getSalesInvoiceEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('salesOrderEmailAddresses') && null !== $data->getSalesOrderEmailAddresses()) {
            $dataArray['salesOrderEmailAddresses'] = $this->normalizer->normalize($data->getSalesOrderEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('template') && null !== $data->getTemplate()) {
            $dataArray['template'] = $data->getTemplate();
        }
        if ($data->isInitialized('termOfPaymentId') && null !== $data->getTermOfPaymentId()) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('terminationReasonId') && null !== $data->getTerminationReasonId()) {
            $dataArray['terminationReasonId'] = $data->getTerminationReasonId();
        }
        if ($data->isInitialized('ticketServiceLevelAgreementId') && null !== $data->getTicketServiceLevelAgreementId()) {
            $dataArray['ticketServiceLevelAgreementId'] = $data->getTicketServiceLevelAgreementId();
        }
        if ($data->isInitialized('types') && null !== $data->getTypes()) {
            $values_6 = [];
            foreach ($data->getTypes() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['types'] = $values_6;
        }
        if ($data->isInitialized('unlimited') && null !== $data->getUnlimited()) {
            $dataArray['unlimited'] = $data->getUnlimited();
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
        return [\Webhubworks\WeclappApiCore\Model\Contract::class => false];
    }
}