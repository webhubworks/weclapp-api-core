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

class ContractNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Contract;
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
        if (\array_key_exists('additionalAddresses', $data) && $data['additionalAddresses'] !== null) {
            $values_2 = [];
            foreach ($data['additionalAddresses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ContractAdditionalAddress::class, 'json', $context);
            }
            $object->setAdditionalAddresses($values_2);
            unset($data['additionalAddresses']);
        } elseif (\array_key_exists('additionalAddresses', $data) && $data['additionalAddresses'] === null) {
            $object->setAdditionalAddresses(null);
        }
        if (\array_key_exists('authorizationUnitId', $data) && $data['authorizationUnitId'] !== null) {
            $object->setAuthorizationUnitId($data['authorizationUnitId']);
            unset($data['authorizationUnitId']);
        } elseif (\array_key_exists('authorizationUnitId', $data) && $data['authorizationUnitId'] === null) {
            $object->setAuthorizationUnitId(null);
        }
        if (\array_key_exists('automaticExtension', $data) && $data['automaticExtension'] !== null) {
            $object->setAutomaticExtension($data['automaticExtension']);
            unset($data['automaticExtension']);
        } elseif (\array_key_exists('automaticExtension', $data) && $data['automaticExtension'] === null) {
            $object->setAutomaticExtension(null);
        }
        if (\array_key_exists('billUntil', $data) && $data['billUntil'] !== null) {
            $object->setBillUntil($data['billUntil']);
            unset($data['billUntil']);
        } elseif (\array_key_exists('billUntil', $data) && $data['billUntil'] === null) {
            $object->setBillUntil(null);
        }
        if (\array_key_exists('billingDay', $data) && $data['billingDay'] !== null) {
            $object->setBillingDay($data['billingDay']);
            unset($data['billingDay']);
        } elseif (\array_key_exists('billingDay', $data) && $data['billingDay'] === null) {
            $object->setBillingDay(null);
        }
        if (\array_key_exists('billingTargetInvoiceStatus', $data) && $data['billingTargetInvoiceStatus'] !== null) {
            $object->setBillingTargetInvoiceStatus($data['billingTargetInvoiceStatus']);
            unset($data['billingTargetInvoiceStatus']);
        } elseif (\array_key_exists('billingTargetInvoiceStatus', $data) && $data['billingTargetInvoiceStatus'] === null) {
            $object->setBillingTargetInvoiceStatus(null);
        }
        if (\array_key_exists('billingType', $data) && $data['billingType'] !== null) {
            $object->setBillingType($data['billingType']);
            unset($data['billingType']);
        } elseif (\array_key_exists('billingType', $data) && $data['billingType'] === null) {
            $object->setBillingType(null);
        }
        if (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] !== null) {
            $object->setCancellationDate($data['cancellationDate']);
            unset($data['cancellationDate']);
        } elseif (\array_key_exists('cancellationDate', $data) && $data['cancellationDate'] === null) {
            $object->setCancellationDate(null);
        }
        if (\array_key_exists('cancellationPeriodQuantity', $data) && $data['cancellationPeriodQuantity'] !== null) {
            $object->setCancellationPeriodQuantity($data['cancellationPeriodQuantity']);
            unset($data['cancellationPeriodQuantity']);
        } elseif (\array_key_exists('cancellationPeriodQuantity', $data) && $data['cancellationPeriodQuantity'] === null) {
            $object->setCancellationPeriodQuantity(null);
        }
        if (\array_key_exists('cancellationPeriodSoftframe', $data) && $data['cancellationPeriodSoftframe'] !== null) {
            $object->setCancellationPeriodSoftframe($data['cancellationPeriodSoftframe']);
            unset($data['cancellationPeriodSoftframe']);
        } elseif (\array_key_exists('cancellationPeriodSoftframe', $data) && $data['cancellationPeriodSoftframe'] === null) {
            $object->setCancellationPeriodSoftframe(null);
        }
        if (\array_key_exists('cancellationPeriodUnit', $data) && $data['cancellationPeriodUnit'] !== null) {
            $object->setCancellationPeriodUnit($data['cancellationPeriodUnit']);
            unset($data['cancellationPeriodUnit']);
        } elseif (\array_key_exists('cancellationPeriodUnit', $data) && $data['cancellationPeriodUnit'] === null) {
            $object->setCancellationPeriodUnit(null);
        }
        if (\array_key_exists('commission', $data) && $data['commission'] !== null) {
            $object->setCommission($data['commission']);
            unset($data['commission']);
        } elseif (\array_key_exists('commission', $data) && $data['commission'] === null) {
            $object->setCommission(null);
        }
        if (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] !== null) {
            $values_3 = [];
            foreach ($data['commissionSalesPartners'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_3);
            unset($data['commissionSalesPartners']);
        } elseif (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] === null) {
            $object->setCommissionSalesPartners(null);
        }
        if (\array_key_exists('contractCostItems', $data) && $data['contractCostItems'] !== null) {
            $values_4 = [];
            foreach ($data['contractCostItems'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\ContractCostItem::class, 'json', $context);
            }
            $object->setContractCostItems($values_4);
            unset($data['contractCostItems']);
        } elseif (\array_key_exists('contractCostItems', $data) && $data['contractCostItems'] === null) {
            $object->setContractCostItems(null);
        }
        if (\array_key_exists('contractDate', $data) && $data['contractDate'] !== null) {
            $object->setContractDate($data['contractDate']);
            unset($data['contractDate']);
        } elseif (\array_key_exists('contractDate', $data) && $data['contractDate'] === null) {
            $object->setContractDate(null);
        }
        if (\array_key_exists('contractItems', $data) && $data['contractItems'] !== null) {
            $values_5 = [];
            foreach ($data['contractItems'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\ContractItem::class, 'json', $context);
            }
            $object->setContractItems($values_5);
            unset($data['contractItems']);
        } elseif (\array_key_exists('contractItems', $data) && $data['contractItems'] === null) {
            $object->setContractItems(null);
        }
        if (\array_key_exists('contractNumber', $data) && $data['contractNumber'] !== null) {
            $object->setContractNumber($data['contractNumber']);
            unset($data['contractNumber']);
        } elseif (\array_key_exists('contractNumber', $data) && $data['contractNumber'] === null) {
            $object->setContractNumber(null);
        }
        if (\array_key_exists('contractNumberAtParty', $data) && $data['contractNumberAtParty'] !== null) {
            $object->setContractNumberAtParty($data['contractNumberAtParty']);
            unset($data['contractNumberAtParty']);
        } elseif (\array_key_exists('contractNumberAtParty', $data) && $data['contractNumberAtParty'] === null) {
            $object->setContractNumberAtParty(null);
        }
        if (\array_key_exists('contractStatus', $data) && $data['contractStatus'] !== null) {
            $object->setContractStatus($data['contractStatus']);
            unset($data['contractStatus']);
        } elseif (\array_key_exists('contractStatus', $data) && $data['contractStatus'] === null) {
            $object->setContractStatus(null);
        }
        if (\array_key_exists('correspondenceAddress', $data) && $data['correspondenceAddress'] !== null) {
            $object->setCorrespondenceAddress($this->denormalizer->denormalize($data['correspondenceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['correspondenceAddress']);
        } elseif (\array_key_exists('correspondenceAddress', $data) && $data['correspondenceAddress'] === null) {
            $object->setCorrespondenceAddress(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        } elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('deliveryEmailAddresses', $data) && $data['deliveryEmailAddresses'] !== null) {
            $object->setDeliveryEmailAddresses($this->denormalizer->denormalize($data['deliveryEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['deliveryEmailAddresses']);
        } elseif (\array_key_exists('deliveryEmailAddresses', $data) && $data['deliveryEmailAddresses'] === null) {
            $object->setDeliveryEmailAddresses(null);
        }
        if (\array_key_exists('differingCorrespondenceAddress', $data) && $data['differingCorrespondenceAddress'] !== null) {
            $object->setDifferingCorrespondenceAddress($data['differingCorrespondenceAddress']);
            unset($data['differingCorrespondenceAddress']);
        } elseif (\array_key_exists('differingCorrespondenceAddress', $data) && $data['differingCorrespondenceAddress'] === null) {
            $object->setDifferingCorrespondenceAddress(null);
        }
        if (\array_key_exists('differingDeliveryAddress', $data) && $data['differingDeliveryAddress'] !== null) {
            $object->setDifferingDeliveryAddress($data['differingDeliveryAddress']);
            unset($data['differingDeliveryAddress']);
        } elseif (\array_key_exists('differingDeliveryAddress', $data) && $data['differingDeliveryAddress'] === null) {
            $object->setDifferingDeliveryAddress(null);
        }
        if (\array_key_exists('differingInvoiceAddress', $data) && $data['differingInvoiceAddress'] !== null) {
            $object->setDifferingInvoiceAddress($data['differingInvoiceAddress']);
            unset($data['differingInvoiceAddress']);
        } elseif (\array_key_exists('differingInvoiceAddress', $data) && $data['differingInvoiceAddress'] === null) {
            $object->setDifferingInvoiceAddress(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        } elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('extensionQuantity', $data) && $data['extensionQuantity'] !== null) {
            $object->setExtensionQuantity($data['extensionQuantity']);
            unset($data['extensionQuantity']);
        } elseif (\array_key_exists('extensionQuantity', $data) && $data['extensionQuantity'] === null) {
            $object->setExtensionQuantity(null);
        }
        if (\array_key_exists('extensionUnit', $data) && $data['extensionUnit'] !== null) {
            $object->setExtensionUnit($data['extensionUnit']);
            unset($data['extensionUnit']);
        } elseif (\array_key_exists('extensionUnit', $data) && $data['extensionUnit'] === null) {
            $object->setExtensionUnit(null);
        }
        if (\array_key_exists('factoring', $data) && $data['factoring'] !== null) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        } elseif (\array_key_exists('factoring', $data) && $data['factoring'] === null) {
            $object->setFactoring(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        } elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] !== null) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        } elseif (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] === null) {
            $object->setInvoiceRecipientId(null);
        }
        if (\array_key_exists('latestCancellationWarningQuantity', $data) && $data['latestCancellationWarningQuantity'] !== null) {
            $object->setLatestCancellationWarningQuantity($data['latestCancellationWarningQuantity']);
            unset($data['latestCancellationWarningQuantity']);
        } elseif (\array_key_exists('latestCancellationWarningQuantity', $data) && $data['latestCancellationWarningQuantity'] === null) {
            $object->setLatestCancellationWarningQuantity(null);
        }
        if (\array_key_exists('latestCancellationWarningUnit', $data) && $data['latestCancellationWarningUnit'] !== null) {
            $object->setLatestCancellationWarningUnit($data['latestCancellationWarningUnit']);
            unset($data['latestCancellationWarningUnit']);
        } elseif (\array_key_exists('latestCancellationWarningUnit', $data) && $data['latestCancellationWarningUnit'] === null) {
            $object->setLatestCancellationWarningUnit(null);
        }
        if (\array_key_exists('latestPossibleTerminationDate', $data) && $data['latestPossibleTerminationDate'] !== null) {
            $object->setLatestPossibleTerminationDate($data['latestPossibleTerminationDate']);
            unset($data['latestPossibleTerminationDate']);
        } elseif (\array_key_exists('latestPossibleTerminationDate', $data) && $data['latestPossibleTerminationDate'] === null) {
            $object->setLatestPossibleTerminationDate(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('nextContractBillingDate', $data) && $data['nextContractBillingDate'] !== null) {
            $object->setNextContractBillingDate($data['nextContractBillingDate']);
            unset($data['nextContractBillingDate']);
        } elseif (\array_key_exists('nextContractBillingDate', $data) && $data['nextContractBillingDate'] === null) {
            $object->setNextContractBillingDate(null);
        }
        if (\array_key_exists('nonStandardInputTaxId', $data) && $data['nonStandardInputTaxId'] !== null) {
            $object->setNonStandardInputTaxId($data['nonStandardInputTaxId']);
            unset($data['nonStandardInputTaxId']);
        } elseif (\array_key_exists('nonStandardInputTaxId', $data) && $data['nonStandardInputTaxId'] === null) {
            $object->setNonStandardInputTaxId(null);
        }
        if (\array_key_exists('orderNumberAtCustomer', $data) && $data['orderNumberAtCustomer'] !== null) {
            $object->setOrderNumberAtCustomer($data['orderNumberAtCustomer']);
            unset($data['orderNumberAtCustomer']);
        } elseif (\array_key_exists('orderNumberAtCustomer', $data) && $data['orderNumberAtCustomer'] === null) {
            $object->setOrderNumberAtCustomer(null);
        }
        if (\array_key_exists('partyId', $data) && $data['partyId'] !== null) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        } elseif (\array_key_exists('partyId', $data) && $data['partyId'] === null) {
            $object->setPartyId(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        } elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('pricingDate', $data) && $data['pricingDate'] !== null) {
            $object->setPricingDate($data['pricingDate']);
            unset($data['pricingDate']);
        } elseif (\array_key_exists('pricingDate', $data) && $data['pricingDate'] === null) {
            $object->setPricingDate(null);
        }
        if (\array_key_exists('purchaseEmailAddresses', $data) && $data['purchaseEmailAddresses'] !== null) {
            $object->setPurchaseEmailAddresses($this->denormalizer->denormalize($data['purchaseEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['purchaseEmailAddresses']);
        } elseif (\array_key_exists('purchaseEmailAddresses', $data) && $data['purchaseEmailAddresses'] === null) {
            $object->setPurchaseEmailAddresses(null);
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
        if (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] !== null) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        } elseif (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] === null) {
            $object->setRecordEmailAddresses(null);
        }
        if (\array_key_exists('reminderDate', $data) && $data['reminderDate'] !== null) {
            $object->setReminderDate($data['reminderDate']);
            unset($data['reminderDate']);
        } elseif (\array_key_exists('reminderDate', $data) && $data['reminderDate'] === null) {
            $object->setReminderDate(null);
        }
        if (\array_key_exists('reminderSendType', $data) && $data['reminderSendType'] !== null) {
            $object->setReminderSendType($data['reminderSendType']);
            unset($data['reminderSendType']);
        } elseif (\array_key_exists('reminderSendType', $data) && $data['reminderSendType'] === null) {
            $object->setReminderSendType(null);
        }
        if (\array_key_exists('reminderType', $data) && $data['reminderType'] !== null) {
            $object->setReminderType($data['reminderType']);
            unset($data['reminderType']);
        } elseif (\array_key_exists('reminderType', $data) && $data['reminderType'] === null) {
            $object->setReminderType(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        } elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        } elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
        }
        if (\array_key_exists('salesInvoiceEmailAddresses', $data) && $data['salesInvoiceEmailAddresses'] !== null) {
            $object->setSalesInvoiceEmailAddresses($this->denormalizer->denormalize($data['salesInvoiceEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesInvoiceEmailAddresses']);
        } elseif (\array_key_exists('salesInvoiceEmailAddresses', $data) && $data['salesInvoiceEmailAddresses'] === null) {
            $object->setSalesInvoiceEmailAddresses(null);
        }
        if (\array_key_exists('salesOrderEmailAddresses', $data) && $data['salesOrderEmailAddresses'] !== null) {
            $object->setSalesOrderEmailAddresses($this->denormalizer->denormalize($data['salesOrderEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['salesOrderEmailAddresses']);
        } elseif (\array_key_exists('salesOrderEmailAddresses', $data) && $data['salesOrderEmailAddresses'] === null) {
            $object->setSalesOrderEmailAddresses(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        } elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        } elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
        }
        if (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] !== null) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        } elseif (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] === null) {
            $object->setTermOfPaymentId(null);
        }
        if (\array_key_exists('terminationReasonId', $data) && $data['terminationReasonId'] !== null) {
            $object->setTerminationReasonId($data['terminationReasonId']);
            unset($data['terminationReasonId']);
        } elseif (\array_key_exists('terminationReasonId', $data) && $data['terminationReasonId'] === null) {
            $object->setTerminationReasonId(null);
        }
        if (\array_key_exists('ticketServiceLevelAgreementId', $data) && $data['ticketServiceLevelAgreementId'] !== null) {
            $object->setTicketServiceLevelAgreementId($data['ticketServiceLevelAgreementId']);
            unset($data['ticketServiceLevelAgreementId']);
        } elseif (\array_key_exists('ticketServiceLevelAgreementId', $data) && $data['ticketServiceLevelAgreementId'] === null) {
            $object->setTicketServiceLevelAgreementId(null);
        }
        if (\array_key_exists('types', $data) && $data['types'] !== null) {
            $values_6 = [];
            foreach ($data['types'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTypes($values_6);
            unset($data['types']);
        } elseif (\array_key_exists('types', $data) && $data['types'] === null) {
            $object->setTypes(null);
        }
        if (\array_key_exists('unlimited', $data) && $data['unlimited'] !== null) {
            $object->setUnlimited($data['unlimited']);
            unset($data['unlimited']);
        } elseif (\array_key_exists('unlimited', $data) && $data['unlimited'] === null) {
            $object->setUnlimited(null);
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
        if ($data->isInitialized('additionalAddresses') && $data->getAdditionalAddresses() !== null) {
            $values_2 = [];
            foreach ($data->getAdditionalAddresses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['additionalAddresses'] = $values_2;
        }
        if ($data->isInitialized('authorizationUnitId') && $data->getAuthorizationUnitId() !== null) {
            $dataArray['authorizationUnitId'] = $data->getAuthorizationUnitId();
        }
        if ($data->isInitialized('automaticExtension') && $data->getAutomaticExtension() !== null) {
            $dataArray['automaticExtension'] = $data->getAutomaticExtension();
        }
        if ($data->isInitialized('billUntil') && $data->getBillUntil() !== null) {
            $dataArray['billUntil'] = $data->getBillUntil();
        }
        if ($data->isInitialized('billingDay') && $data->getBillingDay() !== null) {
            $dataArray['billingDay'] = $data->getBillingDay();
        }
        if ($data->isInitialized('billingTargetInvoiceStatus') && $data->getBillingTargetInvoiceStatus() !== null) {
            $dataArray['billingTargetInvoiceStatus'] = $data->getBillingTargetInvoiceStatus();
        }
        if ($data->isInitialized('billingType') && $data->getBillingType() !== null) {
            $dataArray['billingType'] = $data->getBillingType();
        }
        if ($data->isInitialized('cancellationDate') && $data->getCancellationDate() !== null) {
            $dataArray['cancellationDate'] = $data->getCancellationDate();
        }
        if ($data->isInitialized('cancellationPeriodQuantity') && $data->getCancellationPeriodQuantity() !== null) {
            $dataArray['cancellationPeriodQuantity'] = $data->getCancellationPeriodQuantity();
        }
        if ($data->isInitialized('cancellationPeriodSoftframe') && $data->getCancellationPeriodSoftframe() !== null) {
            $dataArray['cancellationPeriodSoftframe'] = $data->getCancellationPeriodSoftframe();
        }
        if ($data->isInitialized('cancellationPeriodUnit') && $data->getCancellationPeriodUnit() !== null) {
            $dataArray['cancellationPeriodUnit'] = $data->getCancellationPeriodUnit();
        }
        if ($data->isInitialized('commission') && $data->getCommission() !== null) {
            $dataArray['commission'] = $data->getCommission();
        }
        if ($data->isInitialized('commissionSalesPartners') && $data->getCommissionSalesPartners() !== null) {
            $values_3 = [];
            foreach ($data->getCommissionSalesPartners() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_3;
        }
        if ($data->isInitialized('contractCostItems') && $data->getContractCostItems() !== null) {
            $values_4 = [];
            foreach ($data->getContractCostItems() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['contractCostItems'] = $values_4;
        }
        if ($data->isInitialized('contractDate') && $data->getContractDate() !== null) {
            $dataArray['contractDate'] = $data->getContractDate();
        }
        if ($data->isInitialized('contractItems') && $data->getContractItems() !== null) {
            $values_5 = [];
            foreach ($data->getContractItems() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['contractItems'] = $values_5;
        }
        if ($data->isInitialized('contractNumber') && $data->getContractNumber() !== null) {
            $dataArray['contractNumber'] = $data->getContractNumber();
        }
        if ($data->isInitialized('contractNumberAtParty') && $data->getContractNumberAtParty() !== null) {
            $dataArray['contractNumberAtParty'] = $data->getContractNumberAtParty();
        }
        if ($data->isInitialized('contractStatus') && $data->getContractStatus() !== null) {
            $dataArray['contractStatus'] = $data->getContractStatus();
        }
        if ($data->isInitialized('correspondenceAddress') && $data->getCorrespondenceAddress() !== null) {
            $dataArray['correspondenceAddress'] = $this->normalizer->normalize($data->getCorrespondenceAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('deliveryEmailAddresses') && $data->getDeliveryEmailAddresses() !== null) {
            $dataArray['deliveryEmailAddresses'] = $this->normalizer->normalize($data->getDeliveryEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('differingCorrespondenceAddress') && $data->getDifferingCorrespondenceAddress() !== null) {
            $dataArray['differingCorrespondenceAddress'] = $data->getDifferingCorrespondenceAddress();
        }
        if ($data->isInitialized('differingDeliveryAddress') && $data->getDifferingDeliveryAddress() !== null) {
            $dataArray['differingDeliveryAddress'] = $data->getDifferingDeliveryAddress();
        }
        if ($data->isInitialized('differingInvoiceAddress') && $data->getDifferingInvoiceAddress() !== null) {
            $dataArray['differingInvoiceAddress'] = $data->getDifferingInvoiceAddress();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('extensionQuantity') && $data->getExtensionQuantity() !== null) {
            $dataArray['extensionQuantity'] = $data->getExtensionQuantity();
        }
        if ($data->isInitialized('extensionUnit') && $data->getExtensionUnit() !== null) {
            $dataArray['extensionUnit'] = $data->getExtensionUnit();
        }
        if ($data->isInitialized('factoring') && $data->getFactoring() !== null) {
            $dataArray['factoring'] = $data->getFactoring();
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('invoiceRecipientId') && $data->getInvoiceRecipientId() !== null) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('latestCancellationWarningQuantity') && $data->getLatestCancellationWarningQuantity() !== null) {
            $dataArray['latestCancellationWarningQuantity'] = $data->getLatestCancellationWarningQuantity();
        }
        if ($data->isInitialized('latestCancellationWarningUnit') && $data->getLatestCancellationWarningUnit() !== null) {
            $dataArray['latestCancellationWarningUnit'] = $data->getLatestCancellationWarningUnit();
        }
        if ($data->isInitialized('latestPossibleTerminationDate') && $data->getLatestPossibleTerminationDate() !== null) {
            $dataArray['latestPossibleTerminationDate'] = $data->getLatestPossibleTerminationDate();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('nextContractBillingDate') && $data->getNextContractBillingDate() !== null) {
            $dataArray['nextContractBillingDate'] = $data->getNextContractBillingDate();
        }
        if ($data->isInitialized('nonStandardInputTaxId') && $data->getNonStandardInputTaxId() !== null) {
            $dataArray['nonStandardInputTaxId'] = $data->getNonStandardInputTaxId();
        }
        if ($data->isInitialized('orderNumberAtCustomer') && $data->getOrderNumberAtCustomer() !== null) {
            $dataArray['orderNumberAtCustomer'] = $data->getOrderNumberAtCustomer();
        }
        if ($data->isInitialized('partyId') && $data->getPartyId() !== null) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('paymentMethodId') && $data->getPaymentMethodId() !== null) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('pricingDate') && $data->getPricingDate() !== null) {
            $dataArray['pricingDate'] = $data->getPricingDate();
        }
        if ($data->isInitialized('purchaseEmailAddresses') && $data->getPurchaseEmailAddresses() !== null) {
            $dataArray['purchaseEmailAddresses'] = $this->normalizer->normalize($data->getPurchaseEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('recordCurrencyId') && $data->getRecordCurrencyId() !== null) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('recordCurrencyName') && $data->getRecordCurrencyName() !== null) {
            $dataArray['recordCurrencyName'] = $data->getRecordCurrencyName();
        }
        if ($data->isInitialized('recordEmailAddresses') && $data->getRecordEmailAddresses() !== null) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('reminderDate') && $data->getReminderDate() !== null) {
            $dataArray['reminderDate'] = $data->getReminderDate();
        }
        if ($data->isInitialized('reminderSendType') && $data->getReminderSendType() !== null) {
            $dataArray['reminderSendType'] = $data->getReminderSendType();
        }
        if ($data->isInitialized('reminderType') && $data->getReminderType() !== null) {
            $dataArray['reminderType'] = $data->getReminderType();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('salesInvoiceEmailAddresses') && $data->getSalesInvoiceEmailAddresses() !== null) {
            $dataArray['salesInvoiceEmailAddresses'] = $this->normalizer->normalize($data->getSalesInvoiceEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('salesOrderEmailAddresses') && $data->getSalesOrderEmailAddresses() !== null) {
            $dataArray['salesOrderEmailAddresses'] = $this->normalizer->normalize($data->getSalesOrderEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('template') && $data->getTemplate() !== null) {
            $dataArray['template'] = $data->getTemplate();
        }
        if ($data->isInitialized('termOfPaymentId') && $data->getTermOfPaymentId() !== null) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('terminationReasonId') && $data->getTerminationReasonId() !== null) {
            $dataArray['terminationReasonId'] = $data->getTerminationReasonId();
        }
        if ($data->isInitialized('ticketServiceLevelAgreementId') && $data->getTicketServiceLevelAgreementId() !== null) {
            $dataArray['ticketServiceLevelAgreementId'] = $data->getTicketServiceLevelAgreementId();
        }
        if ($data->isInitialized('types') && $data->getTypes() !== null) {
            $values_6 = [];
            foreach ($data->getTypes() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['types'] = $values_6;
        }
        if ($data->isInitialized('unlimited') && $data->getUnlimited() !== null) {
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
