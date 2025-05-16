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
class PartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Party::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Party::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Party();
        if (\array_key_exists('allowPurchaseOrderCreation', $data) && \is_int($data['allowPurchaseOrderCreation'])) {
            $data['allowPurchaseOrderCreation'] = (bool) $data['allowPurchaseOrderCreation'];
        }
        if (\array_key_exists('commissionBlock', $data) && \is_int($data['commissionBlock'])) {
            $data['commissionBlock'] = (bool) $data['commissionBlock'];
        }
        if (\array_key_exists('competitor', $data) && \is_int($data['competitor'])) {
            $data['competitor'] = (bool) $data['competitor'];
        }
        if (\array_key_exists('customer', $data) && \is_int($data['customer'])) {
            $data['customer'] = (bool) $data['customer'];
        }
        if (\array_key_exists('customerAllowDropshippingOrderCreation', $data) && \is_int($data['customerAllowDropshippingOrderCreation'])) {
            $data['customerAllowDropshippingOrderCreation'] = (bool) $data['customerAllowDropshippingOrderCreation'];
        }
        if (\array_key_exists('customerBlocked', $data) && \is_int($data['customerBlocked'])) {
            $data['customerBlocked'] = (bool) $data['customerBlocked'];
        }
        if (\array_key_exists('customerDeliveryBlock', $data) && \is_int($data['customerDeliveryBlock'])) {
            $data['customerDeliveryBlock'] = (bool) $data['customerDeliveryBlock'];
        }
        if (\array_key_exists('customerInsolvent', $data) && \is_int($data['customerInsolvent'])) {
            $data['customerInsolvent'] = (bool) $data['customerInsolvent'];
        }
        if (\array_key_exists('customerInsured', $data) && \is_int($data['customerInsured'])) {
            $data['customerInsured'] = (bool) $data['customerInsured'];
        }
        if (\array_key_exists('customerUseCustomsTariffNumber', $data) && \is_int($data['customerUseCustomsTariffNumber'])) {
            $data['customerUseCustomsTariffNumber'] = (bool) $data['customerUseCustomsTariffNumber'];
        }
        if (\array_key_exists('enableDropshippingInNewSupplySources', $data) && \is_int($data['enableDropshippingInNewSupplySources'])) {
            $data['enableDropshippingInNewSupplySources'] = (bool) $data['enableDropshippingInNewSupplySources'];
        }
        if (\array_key_exists('factoring', $data) && \is_int($data['factoring'])) {
            $data['factoring'] = (bool) $data['factoring'];
        }
        if (\array_key_exists('fixedResponsibleUser', $data) && \is_int($data['fixedResponsibleUser'])) {
            $data['fixedResponsibleUser'] = (bool) $data['fixedResponsibleUser'];
        }
        if (\array_key_exists('formerSalesPartner', $data) && \is_int($data['formerSalesPartner'])) {
            $data['formerSalesPartner'] = (bool) $data['formerSalesPartner'];
        }
        if (\array_key_exists('habitualExporter', $data) && \is_int($data['habitualExporter'])) {
            $data['habitualExporter'] = (bool) $data['habitualExporter'];
        }
        if (\array_key_exists('invoiceBlock', $data) && \is_int($data['invoiceBlock'])) {
            $data['invoiceBlock'] = (bool) $data['invoiceBlock'];
        }
        if (\array_key_exists('optInEmail', $data) && \is_int($data['optInEmail'])) {
            $data['optInEmail'] = (bool) $data['optInEmail'];
        }
        if (\array_key_exists('optInLetter', $data) && \is_int($data['optInLetter'])) {
            $data['optInLetter'] = (bool) $data['optInLetter'];
        }
        if (\array_key_exists('optInPhone', $data) && \is_int($data['optInPhone'])) {
            $data['optInPhone'] = (bool) $data['optInPhone'];
        }
        if (\array_key_exists('optInSms', $data) && \is_int($data['optInSms'])) {
            $data['optInSms'] = (bool) $data['optInSms'];
        }
        if (\array_key_exists('purchaseViaPlafond', $data) && \is_int($data['purchaseViaPlafond'])) {
            $data['purchaseViaPlafond'] = (bool) $data['purchaseViaPlafond'];
        }
        if (\array_key_exists('salesPartner', $data) && \is_int($data['salesPartner'])) {
            $data['salesPartner'] = (bool) $data['salesPartner'];
        }
        if (\array_key_exists('supplier', $data) && \is_int($data['supplier'])) {
            $data['supplier'] = (bool) $data['supplier'];
        }
        if (\array_key_exists('supplierOrderBlock', $data) && \is_int($data['supplierOrderBlock'])) {
            $data['supplierOrderBlock'] = (bool) $data['supplierOrderBlock'];
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
        if (\array_key_exists('addresses', $data)) {
            $values_1 = [];
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context);
            }
            $object->setAddresses($values_1);
            unset($data['addresses']);
        }
        if (\array_key_exists('birthDate', $data)) {
            $object->setBirthDate($data['birthDate']);
            unset($data['birthDate']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (\array_key_exists('company2', $data)) {
            $object->setCompany2($data['company2']);
            unset($data['company2']);
        }
        if (\array_key_exists('deliveryAddressId', $data)) {
            $object->setDeliveryAddressId($data['deliveryAddressId']);
            unset($data['deliveryAddressId']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('fax', $data)) {
            $object->setFax($data['fax']);
            unset($data['fax']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('invoiceAddressId', $data)) {
            $object->setInvoiceAddressId($data['invoiceAddressId']);
            unset($data['invoiceAddressId']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        if (\array_key_exists('middleName', $data)) {
            $object->setMiddleName($data['middleName']);
            unset($data['middleName']);
        }
        if (\array_key_exists('mobilePhone1', $data)) {
            $object->setMobilePhone1($data['mobilePhone1']);
            unset($data['mobilePhone1']);
        }
        if (\array_key_exists('onlineAccounts', $data)) {
            $values_2 = [];
            foreach ($data['onlineAccounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlineAccount::class, 'json', $context);
            }
            $object->setOnlineAccounts($values_2);
            unset($data['onlineAccounts']);
        }
        if (\array_key_exists('partyType', $data)) {
            $object->setPartyType($data['partyType']);
            unset($data['partyType']);
        }
        if (\array_key_exists('personCompany', $data)) {
            $object->setPersonCompany($data['personCompany']);
            unset($data['personCompany']);
        }
        if (\array_key_exists('personDepartmentId', $data)) {
            $object->setPersonDepartmentId($data['personDepartmentId']);
            unset($data['personDepartmentId']);
        }
        if (\array_key_exists('personRoleId', $data)) {
            $object->setPersonRoleId($data['personRoleId']);
            unset($data['personRoleId']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
            unset($data['phone']);
        }
        if (\array_key_exists('primaryAddressId', $data)) {
            $object->setPrimaryAddressId($data['primaryAddressId']);
            unset($data['primaryAddressId']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
            unset($data['salutation']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_3 = [];
            foreach ($data['tags'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTags($values_3);
            unset($data['tags']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('titleId', $data)) {
            $object->setTitleId($data['titleId']);
            unset($data['titleId']);
        }
        if (\array_key_exists('website', $data)) {
            $object->setWebsite($data['website']);
            unset($data['website']);
        }
        if (\array_key_exists('allowPurchaseOrderCreation', $data)) {
            $object->setAllowPurchaseOrderCreation($data['allowPurchaseOrderCreation']);
            unset($data['allowPurchaseOrderCreation']);
        }
        if (\array_key_exists('bankAccounts', $data)) {
            $values_4 = [];
            foreach ($data['bankAccounts'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class, 'json', $context);
            }
            $object->setBankAccounts($values_4);
            unset($data['bankAccounts']);
        }
        if (\array_key_exists('commercialLanguageId', $data)) {
            $object->setCommercialLanguageId($data['commercialLanguageId']);
            unset($data['commercialLanguageId']);
        }
        if (\array_key_exists('commissionBlock', $data)) {
            $object->setCommissionBlock($data['commissionBlock']);
            unset($data['commissionBlock']);
        }
        if (\array_key_exists('commissionSalesPartners', $data)) {
            $values_5 = [];
            foreach ($data['commissionSalesPartners'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_5);
            unset($data['commissionSalesPartners']);
        }
        if (\array_key_exists('companySizeId', $data)) {
            $object->setCompanySizeId($data['companySizeId']);
            unset($data['companySizeId']);
        }
        if (\array_key_exists('companySizeName', $data)) {
            $object->setCompanySizeName($data['companySizeName']);
            unset($data['companySizeName']);
        }
        if (\array_key_exists('competitor', $data)) {
            $object->setCompetitor($data['competitor']);
            unset($data['competitor']);
        }
        if (\array_key_exists('contacts', $data)) {
            $values_6 = [];
            foreach ($data['contacts'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setContacts($values_6);
            unset($data['contacts']);
        }
        if (\array_key_exists('currencyId', $data)) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        if (\array_key_exists('currencyName', $data)) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        }
        if (\array_key_exists('customer', $data)) {
            $object->setCustomer($data['customer']);
            unset($data['customer']);
        }
        if (\array_key_exists('customerAllowDropshippingOrderCreation', $data)) {
            $object->setCustomerAllowDropshippingOrderCreation($data['customerAllowDropshippingOrderCreation']);
            unset($data['customerAllowDropshippingOrderCreation']);
        }
        if (\array_key_exists('customerAmountInsured', $data)) {
            $object->setCustomerAmountInsured($data['customerAmountInsured']);
            unset($data['customerAmountInsured']);
        }
        if (\array_key_exists('customerAnnualRevenue', $data)) {
            $object->setCustomerAnnualRevenue($data['customerAnnualRevenue']);
            unset($data['customerAnnualRevenue']);
        }
        if (\array_key_exists('customerBlockNotice', $data)) {
            $object->setCustomerBlockNotice($data['customerBlockNotice']);
            unset($data['customerBlockNotice']);
        }
        if (\array_key_exists('customerBlocked', $data)) {
            $object->setCustomerBlocked($data['customerBlocked']);
            unset($data['customerBlocked']);
        }
        if (\array_key_exists('customerBusinessType', $data)) {
            $object->setCustomerBusinessType($data['customerBusinessType']);
            unset($data['customerBusinessType']);
        }
        if (\array_key_exists('customerCategoryId', $data)) {
            $object->setCustomerCategoryId($data['customerCategoryId']);
            unset($data['customerCategoryId']);
        }
        if (\array_key_exists('customerCategoryName', $data)) {
            $object->setCustomerCategoryName($data['customerCategoryName']);
            unset($data['customerCategoryName']);
        }
        if (\array_key_exists('customerCreditLimit', $data)) {
            $object->setCustomerCreditLimit($data['customerCreditLimit']);
            unset($data['customerCreditLimit']);
        }
        if (\array_key_exists('customerCurrentSalesStageId', $data)) {
            $object->setCustomerCurrentSalesStageId($data['customerCurrentSalesStageId']);
            unset($data['customerCurrentSalesStageId']);
        }
        if (\array_key_exists('customerCurrentSalesStageName', $data)) {
            $object->setCustomerCurrentSalesStageName($data['customerCurrentSalesStageName']);
            unset($data['customerCurrentSalesStageName']);
        }
        if (\array_key_exists('customerDebtorAccountId', $data)) {
            $object->setCustomerDebtorAccountId($data['customerDebtorAccountId']);
            unset($data['customerDebtorAccountId']);
        }
        if (\array_key_exists('customerDebtorAccountNumber', $data)) {
            $object->setCustomerDebtorAccountNumber($data['customerDebtorAccountNumber']);
            unset($data['customerDebtorAccountNumber']);
        }
        if (\array_key_exists('customerDebtorAccountingCodeId', $data)) {
            $object->setCustomerDebtorAccountingCodeId($data['customerDebtorAccountingCodeId']);
            unset($data['customerDebtorAccountingCodeId']);
        }
        if (\array_key_exists('customerDefaultHeaderDiscount', $data)) {
            $object->setCustomerDefaultHeaderDiscount($data['customerDefaultHeaderDiscount']);
            unset($data['customerDefaultHeaderDiscount']);
        }
        if (\array_key_exists('customerDefaultHeaderSurcharge', $data)) {
            $object->setCustomerDefaultHeaderSurcharge($data['customerDefaultHeaderSurcharge']);
            unset($data['customerDefaultHeaderSurcharge']);
        }
        if (\array_key_exists('customerDefaultShippingCarrierId', $data)) {
            $object->setCustomerDefaultShippingCarrierId($data['customerDefaultShippingCarrierId']);
            unset($data['customerDefaultShippingCarrierId']);
        }
        if (\array_key_exists('customerDeliveryBlock', $data)) {
            $object->setCustomerDeliveryBlock($data['customerDeliveryBlock']);
            unset($data['customerDeliveryBlock']);
        }
        if (\array_key_exists('customerInsolvent', $data)) {
            $object->setCustomerInsolvent($data['customerInsolvent']);
            unset($data['customerInsolvent']);
        }
        if (\array_key_exists('customerInsured', $data)) {
            $object->setCustomerInsured($data['customerInsured']);
            unset($data['customerInsured']);
        }
        if (\array_key_exists('customerInternalNote', $data)) {
            $object->setCustomerInternalNote($data['customerInternalNote']);
            unset($data['customerInternalNote']);
        }
        if (\array_key_exists('customerLossDescription', $data)) {
            $object->setCustomerLossDescription($data['customerLossDescription']);
            unset($data['customerLossDescription']);
        }
        if (\array_key_exists('customerLossReasonId', $data)) {
            $object->setCustomerLossReasonId($data['customerLossReasonId']);
            unset($data['customerLossReasonId']);
        }
        if (\array_key_exists('customerLossReasonName', $data)) {
            $object->setCustomerLossReasonName($data['customerLossReasonName']);
            unset($data['customerLossReasonName']);
        }
        if (\array_key_exists('customerNonStandardTaxId', $data)) {
            $object->setCustomerNonStandardTaxId($data['customerNonStandardTaxId']);
            unset($data['customerNonStandardTaxId']);
        }
        if (\array_key_exists('customerNumber', $data)) {
            $object->setCustomerNumber($data['customerNumber']);
            unset($data['customerNumber']);
        }
        if (\array_key_exists('customerNumberOld', $data)) {
            $object->setCustomerNumberOld($data['customerNumberOld']);
            unset($data['customerNumberOld']);
        }
        if (\array_key_exists('customerPaymentMethodId', $data)) {
            $object->setCustomerPaymentMethodId($data['customerPaymentMethodId']);
            unset($data['customerPaymentMethodId']);
        }
        if (\array_key_exists('customerPaymentMethodName', $data)) {
            $object->setCustomerPaymentMethodName($data['customerPaymentMethodName']);
            unset($data['customerPaymentMethodName']);
        }
        if (\array_key_exists('customerSalesChannel', $data)) {
            $object->setCustomerSalesChannel($data['customerSalesChannel']);
            unset($data['customerSalesChannel']);
        }
        if (\array_key_exists('customerSalesOrderPaymentType', $data)) {
            $object->setCustomerSalesOrderPaymentType($data['customerSalesOrderPaymentType']);
            unset($data['customerSalesOrderPaymentType']);
        }
        if (\array_key_exists('customerSalesProbability', $data)) {
            $object->setCustomerSalesProbability($data['customerSalesProbability']);
            unset($data['customerSalesProbability']);
        }
        if (\array_key_exists('customerSalesStageHistory', $data)) {
            $values_7 = [];
            foreach ($data['customerSalesStageHistory'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\SalesStageHistory::class, 'json', $context);
            }
            $object->setCustomerSalesStageHistory($values_7);
            unset($data['customerSalesStageHistory']);
        }
        if (\array_key_exists('customerSatisfaction', $data)) {
            $object->setCustomerSatisfaction($data['customerSatisfaction']);
            unset($data['customerSatisfaction']);
        }
        if (\array_key_exists('customerShipmentMethodId', $data)) {
            $object->setCustomerShipmentMethodId($data['customerShipmentMethodId']);
            unset($data['customerShipmentMethodId']);
        }
        if (\array_key_exists('customerShipmentMethodName', $data)) {
            $object->setCustomerShipmentMethodName($data['customerShipmentMethodName']);
            unset($data['customerShipmentMethodName']);
        }
        if (\array_key_exists('customerSupplierNumber', $data)) {
            $object->setCustomerSupplierNumber($data['customerSupplierNumber']);
            unset($data['customerSupplierNumber']);
        }
        if (\array_key_exists('customerTermOfPaymentId', $data)) {
            $object->setCustomerTermOfPaymentId($data['customerTermOfPaymentId']);
            unset($data['customerTermOfPaymentId']);
        }
        if (\array_key_exists('customerTermOfPaymentName', $data)) {
            $object->setCustomerTermOfPaymentName($data['customerTermOfPaymentName']);
            unset($data['customerTermOfPaymentName']);
        }
        if (\array_key_exists('customerUseCustomsTariffNumber', $data)) {
            $object->setCustomerUseCustomsTariffNumber($data['customerUseCustomsTariffNumber']);
            unset($data['customerUseCustomsTariffNumber']);
        }
        if (\array_key_exists('deliveryEmailAddressesId', $data)) {
            $object->setDeliveryEmailAddressesId($data['deliveryEmailAddressesId']);
            unset($data['deliveryEmailAddressesId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('dunningAddressId', $data)) {
            $object->setDunningAddressId($data['dunningAddressId']);
            unset($data['dunningAddressId']);
        }
        if (\array_key_exists('dunningEmailAddressesId', $data)) {
            $object->setDunningEmailAddressesId($data['dunningEmailAddressesId']);
            unset($data['dunningEmailAddressesId']);
        }
        if (\array_key_exists('enableDropshippingInNewSupplySources', $data)) {
            $object->setEnableDropshippingInNewSupplySources($data['enableDropshippingInNewSupplySources']);
            unset($data['enableDropshippingInNewSupplySources']);
        }
        if (\array_key_exists('eoriNumber', $data)) {
            $object->setEoriNumber($data['eoriNumber']);
            unset($data['eoriNumber']);
        }
        if (\array_key_exists('factoring', $data)) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        }
        if (\array_key_exists('fixPhone2', $data)) {
            $object->setFixPhone2($data['fixPhone2']);
            unset($data['fixPhone2']);
        }
        if (\array_key_exists('fixedResponsibleUser', $data)) {
            $object->setFixedResponsibleUser($data['fixedResponsibleUser']);
            unset($data['fixedResponsibleUser']);
        }
        if (\array_key_exists('formerSalesPartner', $data)) {
            $object->setFormerSalesPartner($data['formerSalesPartner']);
            unset($data['formerSalesPartner']);
        }
        if (\array_key_exists('habitualExporter', $data)) {
            $object->setHabitualExporter($data['habitualExporter']);
            unset($data['habitualExporter']);
        }
        if (\array_key_exists('imageId', $data)) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        }
        if (\array_key_exists('invoiceBlock', $data)) {
            $object->setInvoiceBlock($data['invoiceBlock']);
            unset($data['invoiceBlock']);
        }
        if (\array_key_exists('invoiceRecipientId', $data)) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        }
        if (\array_key_exists('leadRatingId', $data)) {
            $object->setLeadRatingId($data['leadRatingId']);
            unset($data['leadRatingId']);
        }
        if (\array_key_exists('leadRatingName', $data)) {
            $object->setLeadRatingName($data['leadRatingName']);
            unset($data['leadRatingName']);
        }
        if (\array_key_exists('leadSourceId', $data)) {
            $object->setLeadSourceId($data['leadSourceId']);
            unset($data['leadSourceId']);
        }
        if (\array_key_exists('leadSourceName', $data)) {
            $object->setLeadSourceName($data['leadSourceName']);
            unset($data['leadSourceName']);
        }
        if (\array_key_exists('leadStatus', $data)) {
            $object->setLeadStatus($data['leadStatus']);
            unset($data['leadStatus']);
        }
        if (\array_key_exists('legalFormId', $data)) {
            $object->setLegalFormId($data['legalFormId']);
            unset($data['legalFormId']);
        }
        if (\array_key_exists('legalFormName', $data)) {
            $object->setLegalFormName($data['legalFormName']);
            unset($data['legalFormName']);
        }
        if (\array_key_exists('mobilePhone2', $data)) {
            $object->setMobilePhone2($data['mobilePhone2']);
            unset($data['mobilePhone2']);
        }
        if (\array_key_exists('optInEmail', $data)) {
            $object->setOptInEmail($data['optInEmail']);
            unset($data['optInEmail']);
        }
        if (\array_key_exists('optInLetter', $data)) {
            $object->setOptInLetter($data['optInLetter']);
            unset($data['optInLetter']);
        }
        if (\array_key_exists('optInPhone', $data)) {
            $object->setOptInPhone($data['optInPhone']);
            unset($data['optInPhone']);
        }
        if (\array_key_exists('optInSms', $data)) {
            $object->setOptInSms($data['optInSms']);
            unset($data['optInSms']);
        }
        if (\array_key_exists('parentPartyId', $data)) {
            $object->setParentPartyId($data['parentPartyId']);
            unset($data['parentPartyId']);
        }
        if (\array_key_exists('partyEmailAddresses', $data)) {
            $values_8 = [];
            foreach ($data['partyEmailAddresses'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Webhubworks\WeclappApiCore\Model\PartyEmailAddresses::class, 'json', $context);
            }
            $object->setPartyEmailAddresses($values_8);
            unset($data['partyEmailAddresses']);
        }
        if (\array_key_exists('partyHabitualExporterLettersOfIntent', $data)) {
            $values_9 = [];
            foreach ($data['partyHabitualExporterLettersOfIntent'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class, 'json', $context);
            }
            $object->setPartyHabitualExporterLettersOfIntent($values_9);
            unset($data['partyHabitualExporterLettersOfIntent']);
        }
        if (\array_key_exists('phoneHome', $data)) {
            $object->setPhoneHome($data['phoneHome']);
            unset($data['phoneHome']);
        }
        if (\array_key_exists('primaryContactId', $data)) {
            $object->setPrimaryContactId($data['primaryContactId']);
            unset($data['primaryContactId']);
        }
        if (\array_key_exists('publicPageExpirationDate', $data)) {
            $object->setPublicPageExpirationDate($data['publicPageExpirationDate']);
            unset($data['publicPageExpirationDate']);
        }
        if (\array_key_exists('publicPageUuid', $data)) {
            $object->setPublicPageUuid($data['publicPageUuid']);
            unset($data['publicPageUuid']);
        }
        if (\array_key_exists('purchaseEmailAddressesId', $data)) {
            $object->setPurchaseEmailAddressesId($data['purchaseEmailAddressesId']);
            unset($data['purchaseEmailAddressesId']);
        }
        if (\array_key_exists('purchaseViaPlafond', $data)) {
            $object->setPurchaseViaPlafond($data['purchaseViaPlafond']);
            unset($data['purchaseViaPlafond']);
        }
        if (\array_key_exists('quotationEmailAddressesId', $data)) {
            $object->setQuotationEmailAddressesId($data['quotationEmailAddressesId']);
            unset($data['quotationEmailAddressesId']);
        }
        if (\array_key_exists('ratingId', $data)) {
            $object->setRatingId($data['ratingId']);
            unset($data['ratingId']);
        }
        if (\array_key_exists('ratingName', $data)) {
            $object->setRatingName($data['ratingName']);
            unset($data['ratingName']);
        }
        if (\array_key_exists('referenceNumber', $data)) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        }
        if (\array_key_exists('regionId', $data)) {
            $object->setRegionId($data['regionId']);
            unset($data['regionId']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('responsibleUserUsername', $data)) {
            $object->setResponsibleUserUsername($data['responsibleUserUsername']);
            unset($data['responsibleUserUsername']);
        }
        if (\array_key_exists('salesInvoiceEmailAddressesId', $data)) {
            $object->setSalesInvoiceEmailAddressesId($data['salesInvoiceEmailAddressesId']);
            unset($data['salesInvoiceEmailAddressesId']);
        }
        if (\array_key_exists('salesOrderEmailAddressesId', $data)) {
            $object->setSalesOrderEmailAddressesId($data['salesOrderEmailAddressesId']);
            unset($data['salesOrderEmailAddressesId']);
        }
        if (\array_key_exists('salesPartner', $data)) {
            $object->setSalesPartner($data['salesPartner']);
            unset($data['salesPartner']);
        }
        if (\array_key_exists('salesPartnerDefaultCommissionFix', $data)) {
            $object->setSalesPartnerDefaultCommissionFix($data['salesPartnerDefaultCommissionFix']);
            unset($data['salesPartnerDefaultCommissionFix']);
        }
        if (\array_key_exists('salesPartnerDefaultCommissionPercentage', $data)) {
            $object->setSalesPartnerDefaultCommissionPercentage($data['salesPartnerDefaultCommissionPercentage']);
            unset($data['salesPartnerDefaultCommissionPercentage']);
        }
        if (\array_key_exists('salesPartnerDefaultCommissionType', $data)) {
            $object->setSalesPartnerDefaultCommissionType($data['salesPartnerDefaultCommissionType']);
            unset($data['salesPartnerDefaultCommissionType']);
        }
        if (\array_key_exists('sectorId', $data)) {
            $object->setSectorId($data['sectorId']);
            unset($data['sectorId']);
        }
        if (\array_key_exists('sectorName', $data)) {
            $object->setSectorName($data['sectorName']);
            unset($data['sectorName']);
        }
        if (\array_key_exists('supplier', $data)) {
            $object->setSupplier($data['supplier']);
            unset($data['supplier']);
        }
        if (\array_key_exists('supplierCreditorAccountId', $data)) {
            $object->setSupplierCreditorAccountId($data['supplierCreditorAccountId']);
            unset($data['supplierCreditorAccountId']);
        }
        if (\array_key_exists('supplierCreditorAccountNumber', $data)) {
            $object->setSupplierCreditorAccountNumber($data['supplierCreditorAccountNumber']);
            unset($data['supplierCreditorAccountNumber']);
        }
        if (\array_key_exists('supplierCreditorAccountingCodeId', $data)) {
            $object->setSupplierCreditorAccountingCodeId($data['supplierCreditorAccountingCodeId']);
            unset($data['supplierCreditorAccountingCodeId']);
        }
        if (\array_key_exists('supplierCustomerNumberAtSupplier', $data)) {
            $object->setSupplierCustomerNumberAtSupplier($data['supplierCustomerNumberAtSupplier']);
            unset($data['supplierCustomerNumberAtSupplier']);
        }
        if (\array_key_exists('supplierDefaultShippingCarrierId', $data)) {
            $object->setSupplierDefaultShippingCarrierId($data['supplierDefaultShippingCarrierId']);
            unset($data['supplierDefaultShippingCarrierId']);
        }
        if (\array_key_exists('supplierInternalNote', $data)) {
            $object->setSupplierInternalNote($data['supplierInternalNote']);
            unset($data['supplierInternalNote']);
        }
        if (\array_key_exists('supplierMinimumPurchaseOrderAmount', $data)) {
            $object->setSupplierMinimumPurchaseOrderAmount($data['supplierMinimumPurchaseOrderAmount']);
            unset($data['supplierMinimumPurchaseOrderAmount']);
        }
        if (\array_key_exists('supplierNonStandardTaxId', $data)) {
            $object->setSupplierNonStandardTaxId($data['supplierNonStandardTaxId']);
            unset($data['supplierNonStandardTaxId']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('supplierNumberOld', $data)) {
            $object->setSupplierNumberOld($data['supplierNumberOld']);
            unset($data['supplierNumberOld']);
        }
        if (\array_key_exists('supplierOrderBlock', $data)) {
            $object->setSupplierOrderBlock($data['supplierOrderBlock']);
            unset($data['supplierOrderBlock']);
        }
        if (\array_key_exists('supplierPaymentMethodId', $data)) {
            $object->setSupplierPaymentMethodId($data['supplierPaymentMethodId']);
            unset($data['supplierPaymentMethodId']);
        }
        if (\array_key_exists('supplierPaymentMethodName', $data)) {
            $object->setSupplierPaymentMethodName($data['supplierPaymentMethodName']);
            unset($data['supplierPaymentMethodName']);
        }
        if (\array_key_exists('supplierShipmentMethodId', $data)) {
            $object->setSupplierShipmentMethodId($data['supplierShipmentMethodId']);
            unset($data['supplierShipmentMethodId']);
        }
        if (\array_key_exists('supplierShipmentMethodName', $data)) {
            $object->setSupplierShipmentMethodName($data['supplierShipmentMethodName']);
            unset($data['supplierShipmentMethodName']);
        }
        if (\array_key_exists('supplierTermOfPaymentId', $data)) {
            $object->setSupplierTermOfPaymentId($data['supplierTermOfPaymentId']);
            unset($data['supplierTermOfPaymentId']);
        }
        if (\array_key_exists('supplierTermOfPaymentName', $data)) {
            $object->setSupplierTermOfPaymentName($data['supplierTermOfPaymentName']);
            unset($data['supplierTermOfPaymentName']);
        }
        if (\array_key_exists('taxId', $data)) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        if (\array_key_exists('topics', $data)) {
            $values_10 = [];
            foreach ($data['topics'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, \Webhubworks\WeclappApiCore\Model\Entity::class, 'json', $context);
            }
            $object->setTopics($values_10);
            unset($data['topics']);
        }
        if (\array_key_exists('vatIdentificationNumber', $data)) {
            $object->setVatIdentificationNumber($data['vatIdentificationNumber']);
            unset($data['vatIdentificationNumber']);
        }
        if (\array_key_exists('xRechnungLeitwegId', $data)) {
            $object->setXRechnungLeitwegId($data['xRechnungLeitwegId']);
            unset($data['xRechnungLeitwegId']);
        }
        foreach ($data as $key => $value_11) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_11;
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
        if ($data->isInitialized('addresses') && null !== $data->getAddresses()) {
            $values_1 = [];
            foreach ($data->getAddresses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['addresses'] = $values_1;
        }
        if ($data->isInitialized('birthDate') && null !== $data->getBirthDate()) {
            $dataArray['birthDate'] = $data->getBirthDate();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('company2') && null !== $data->getCompany2()) {
            $dataArray['company2'] = $data->getCompany2();
        }
        if ($data->isInitialized('deliveryAddressId') && null !== $data->getDeliveryAddressId()) {
            $dataArray['deliveryAddressId'] = $data->getDeliveryAddressId();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('fax') && null !== $data->getFax()) {
            $dataArray['fax'] = $data->getFax();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('invoiceAddressId') && null !== $data->getInvoiceAddressId()) {
            $dataArray['invoiceAddressId'] = $data->getInvoiceAddressId();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('middleName') && null !== $data->getMiddleName()) {
            $dataArray['middleName'] = $data->getMiddleName();
        }
        if ($data->isInitialized('mobilePhone1') && null !== $data->getMobilePhone1()) {
            $dataArray['mobilePhone1'] = $data->getMobilePhone1();
        }
        if ($data->isInitialized('onlineAccounts') && null !== $data->getOnlineAccounts()) {
            $values_2 = [];
            foreach ($data->getOnlineAccounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['onlineAccounts'] = $values_2;
        }
        if ($data->isInitialized('partyType') && null !== $data->getPartyType()) {
            $dataArray['partyType'] = $data->getPartyType();
        }
        if ($data->isInitialized('personCompany') && null !== $data->getPersonCompany()) {
            $dataArray['personCompany'] = $data->getPersonCompany();
        }
        if ($data->isInitialized('personDepartmentId') && null !== $data->getPersonDepartmentId()) {
            $dataArray['personDepartmentId'] = $data->getPersonDepartmentId();
        }
        if ($data->isInitialized('personRoleId') && null !== $data->getPersonRoleId()) {
            $dataArray['personRoleId'] = $data->getPersonRoleId();
        }
        if ($data->isInitialized('phone') && null !== $data->getPhone()) {
            $dataArray['phone'] = $data->getPhone();
        }
        if ($data->isInitialized('primaryAddressId') && null !== $data->getPrimaryAddressId()) {
            $dataArray['primaryAddressId'] = $data->getPrimaryAddressId();
        }
        if ($data->isInitialized('salutation') && null !== $data->getSalutation()) {
            $dataArray['salutation'] = $data->getSalutation();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_3 = [];
            foreach ($data->getTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['tags'] = $values_3;
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('titleId') && null !== $data->getTitleId()) {
            $dataArray['titleId'] = $data->getTitleId();
        }
        if ($data->isInitialized('website') && null !== $data->getWebsite()) {
            $dataArray['website'] = $data->getWebsite();
        }
        if ($data->isInitialized('allowPurchaseOrderCreation') && null !== $data->getAllowPurchaseOrderCreation()) {
            $dataArray['allowPurchaseOrderCreation'] = $data->getAllowPurchaseOrderCreation();
        }
        if ($data->isInitialized('bankAccounts') && null !== $data->getBankAccounts()) {
            $values_4 = [];
            foreach ($data->getBankAccounts() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['bankAccounts'] = $values_4;
        }
        if ($data->isInitialized('commercialLanguageId') && null !== $data->getCommercialLanguageId()) {
            $dataArray['commercialLanguageId'] = $data->getCommercialLanguageId();
        }
        if ($data->isInitialized('commissionBlock') && null !== $data->getCommissionBlock()) {
            $dataArray['commissionBlock'] = $data->getCommissionBlock();
        }
        if ($data->isInitialized('commissionSalesPartners') && null !== $data->getCommissionSalesPartners()) {
            $values_5 = [];
            foreach ($data->getCommissionSalesPartners() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_5;
        }
        if ($data->isInitialized('companySizeId') && null !== $data->getCompanySizeId()) {
            $dataArray['companySizeId'] = $data->getCompanySizeId();
        }
        if ($data->isInitialized('companySizeName') && null !== $data->getCompanySizeName()) {
            $dataArray['companySizeName'] = $data->getCompanySizeName();
        }
        if ($data->isInitialized('competitor') && null !== $data->getCompetitor()) {
            $dataArray['competitor'] = $data->getCompetitor();
        }
        if ($data->isInitialized('contacts') && null !== $data->getContacts()) {
            $values_6 = [];
            foreach ($data->getContacts() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['contacts'] = $values_6;
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && null !== $data->getCurrencyName()) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('customer') && null !== $data->getCustomer()) {
            $dataArray['customer'] = $data->getCustomer();
        }
        if ($data->isInitialized('customerAllowDropshippingOrderCreation') && null !== $data->getCustomerAllowDropshippingOrderCreation()) {
            $dataArray['customerAllowDropshippingOrderCreation'] = $data->getCustomerAllowDropshippingOrderCreation();
        }
        if ($data->isInitialized('customerAmountInsured') && null !== $data->getCustomerAmountInsured()) {
            $dataArray['customerAmountInsured'] = $data->getCustomerAmountInsured();
        }
        if ($data->isInitialized('customerAnnualRevenue') && null !== $data->getCustomerAnnualRevenue()) {
            $dataArray['customerAnnualRevenue'] = $data->getCustomerAnnualRevenue();
        }
        if ($data->isInitialized('customerBlockNotice') && null !== $data->getCustomerBlockNotice()) {
            $dataArray['customerBlockNotice'] = $data->getCustomerBlockNotice();
        }
        if ($data->isInitialized('customerBlocked') && null !== $data->getCustomerBlocked()) {
            $dataArray['customerBlocked'] = $data->getCustomerBlocked();
        }
        if ($data->isInitialized('customerBusinessType') && null !== $data->getCustomerBusinessType()) {
            $dataArray['customerBusinessType'] = $data->getCustomerBusinessType();
        }
        if ($data->isInitialized('customerCategoryId') && null !== $data->getCustomerCategoryId()) {
            $dataArray['customerCategoryId'] = $data->getCustomerCategoryId();
        }
        if ($data->isInitialized('customerCategoryName') && null !== $data->getCustomerCategoryName()) {
            $dataArray['customerCategoryName'] = $data->getCustomerCategoryName();
        }
        if ($data->isInitialized('customerCreditLimit') && null !== $data->getCustomerCreditLimit()) {
            $dataArray['customerCreditLimit'] = $data->getCustomerCreditLimit();
        }
        if ($data->isInitialized('customerCurrentSalesStageId') && null !== $data->getCustomerCurrentSalesStageId()) {
            $dataArray['customerCurrentSalesStageId'] = $data->getCustomerCurrentSalesStageId();
        }
        if ($data->isInitialized('customerCurrentSalesStageName') && null !== $data->getCustomerCurrentSalesStageName()) {
            $dataArray['customerCurrentSalesStageName'] = $data->getCustomerCurrentSalesStageName();
        }
        if ($data->isInitialized('customerDebtorAccountId') && null !== $data->getCustomerDebtorAccountId()) {
            $dataArray['customerDebtorAccountId'] = $data->getCustomerDebtorAccountId();
        }
        if ($data->isInitialized('customerDebtorAccountNumber') && null !== $data->getCustomerDebtorAccountNumber()) {
            $dataArray['customerDebtorAccountNumber'] = $data->getCustomerDebtorAccountNumber();
        }
        if ($data->isInitialized('customerDebtorAccountingCodeId') && null !== $data->getCustomerDebtorAccountingCodeId()) {
            $dataArray['customerDebtorAccountingCodeId'] = $data->getCustomerDebtorAccountingCodeId();
        }
        if ($data->isInitialized('customerDefaultHeaderDiscount') && null !== $data->getCustomerDefaultHeaderDiscount()) {
            $dataArray['customerDefaultHeaderDiscount'] = $data->getCustomerDefaultHeaderDiscount();
        }
        if ($data->isInitialized('customerDefaultHeaderSurcharge') && null !== $data->getCustomerDefaultHeaderSurcharge()) {
            $dataArray['customerDefaultHeaderSurcharge'] = $data->getCustomerDefaultHeaderSurcharge();
        }
        if ($data->isInitialized('customerDefaultShippingCarrierId') && null !== $data->getCustomerDefaultShippingCarrierId()) {
            $dataArray['customerDefaultShippingCarrierId'] = $data->getCustomerDefaultShippingCarrierId();
        }
        if ($data->isInitialized('customerDeliveryBlock') && null !== $data->getCustomerDeliveryBlock()) {
            $dataArray['customerDeliveryBlock'] = $data->getCustomerDeliveryBlock();
        }
        if ($data->isInitialized('customerInsolvent') && null !== $data->getCustomerInsolvent()) {
            $dataArray['customerInsolvent'] = $data->getCustomerInsolvent();
        }
        if ($data->isInitialized('customerInsured') && null !== $data->getCustomerInsured()) {
            $dataArray['customerInsured'] = $data->getCustomerInsured();
        }
        if ($data->isInitialized('customerInternalNote') && null !== $data->getCustomerInternalNote()) {
            $dataArray['customerInternalNote'] = $data->getCustomerInternalNote();
        }
        if ($data->isInitialized('customerLossDescription') && null !== $data->getCustomerLossDescription()) {
            $dataArray['customerLossDescription'] = $data->getCustomerLossDescription();
        }
        if ($data->isInitialized('customerLossReasonId') && null !== $data->getCustomerLossReasonId()) {
            $dataArray['customerLossReasonId'] = $data->getCustomerLossReasonId();
        }
        if ($data->isInitialized('customerLossReasonName') && null !== $data->getCustomerLossReasonName()) {
            $dataArray['customerLossReasonName'] = $data->getCustomerLossReasonName();
        }
        if ($data->isInitialized('customerNonStandardTaxId') && null !== $data->getCustomerNonStandardTaxId()) {
            $dataArray['customerNonStandardTaxId'] = $data->getCustomerNonStandardTaxId();
        }
        if ($data->isInitialized('customerNumber') && null !== $data->getCustomerNumber()) {
            $dataArray['customerNumber'] = $data->getCustomerNumber();
        }
        if ($data->isInitialized('customerNumberOld') && null !== $data->getCustomerNumberOld()) {
            $dataArray['customerNumberOld'] = $data->getCustomerNumberOld();
        }
        if ($data->isInitialized('customerPaymentMethodId') && null !== $data->getCustomerPaymentMethodId()) {
            $dataArray['customerPaymentMethodId'] = $data->getCustomerPaymentMethodId();
        }
        if ($data->isInitialized('customerPaymentMethodName') && null !== $data->getCustomerPaymentMethodName()) {
            $dataArray['customerPaymentMethodName'] = $data->getCustomerPaymentMethodName();
        }
        if ($data->isInitialized('customerSalesChannel') && null !== $data->getCustomerSalesChannel()) {
            $dataArray['customerSalesChannel'] = $data->getCustomerSalesChannel();
        }
        if ($data->isInitialized('customerSalesOrderPaymentType') && null !== $data->getCustomerSalesOrderPaymentType()) {
            $dataArray['customerSalesOrderPaymentType'] = $data->getCustomerSalesOrderPaymentType();
        }
        if ($data->isInitialized('customerSalesProbability') && null !== $data->getCustomerSalesProbability()) {
            $dataArray['customerSalesProbability'] = $data->getCustomerSalesProbability();
        }
        if ($data->isInitialized('customerSalesStageHistory') && null !== $data->getCustomerSalesStageHistory()) {
            $values_7 = [];
            foreach ($data->getCustomerSalesStageHistory() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['customerSalesStageHistory'] = $values_7;
        }
        if ($data->isInitialized('customerSatisfaction') && null !== $data->getCustomerSatisfaction()) {
            $dataArray['customerSatisfaction'] = $data->getCustomerSatisfaction();
        }
        if ($data->isInitialized('customerShipmentMethodId') && null !== $data->getCustomerShipmentMethodId()) {
            $dataArray['customerShipmentMethodId'] = $data->getCustomerShipmentMethodId();
        }
        if ($data->isInitialized('customerShipmentMethodName') && null !== $data->getCustomerShipmentMethodName()) {
            $dataArray['customerShipmentMethodName'] = $data->getCustomerShipmentMethodName();
        }
        if ($data->isInitialized('customerSupplierNumber') && null !== $data->getCustomerSupplierNumber()) {
            $dataArray['customerSupplierNumber'] = $data->getCustomerSupplierNumber();
        }
        if ($data->isInitialized('customerTermOfPaymentId') && null !== $data->getCustomerTermOfPaymentId()) {
            $dataArray['customerTermOfPaymentId'] = $data->getCustomerTermOfPaymentId();
        }
        if ($data->isInitialized('customerTermOfPaymentName') && null !== $data->getCustomerTermOfPaymentName()) {
            $dataArray['customerTermOfPaymentName'] = $data->getCustomerTermOfPaymentName();
        }
        if ($data->isInitialized('customerUseCustomsTariffNumber') && null !== $data->getCustomerUseCustomsTariffNumber()) {
            $dataArray['customerUseCustomsTariffNumber'] = $data->getCustomerUseCustomsTariffNumber();
        }
        if ($data->isInitialized('deliveryEmailAddressesId') && null !== $data->getDeliveryEmailAddressesId()) {
            $dataArray['deliveryEmailAddressesId'] = $data->getDeliveryEmailAddressesId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('dunningAddressId') && null !== $data->getDunningAddressId()) {
            $dataArray['dunningAddressId'] = $data->getDunningAddressId();
        }
        if ($data->isInitialized('dunningEmailAddressesId') && null !== $data->getDunningEmailAddressesId()) {
            $dataArray['dunningEmailAddressesId'] = $data->getDunningEmailAddressesId();
        }
        if ($data->isInitialized('enableDropshippingInNewSupplySources') && null !== $data->getEnableDropshippingInNewSupplySources()) {
            $dataArray['enableDropshippingInNewSupplySources'] = $data->getEnableDropshippingInNewSupplySources();
        }
        if ($data->isInitialized('eoriNumber') && null !== $data->getEoriNumber()) {
            $dataArray['eoriNumber'] = $data->getEoriNumber();
        }
        if ($data->isInitialized('factoring') && null !== $data->getFactoring()) {
            $dataArray['factoring'] = $data->getFactoring();
        }
        if ($data->isInitialized('fixPhone2') && null !== $data->getFixPhone2()) {
            $dataArray['fixPhone2'] = $data->getFixPhone2();
        }
        if ($data->isInitialized('fixedResponsibleUser') && null !== $data->getFixedResponsibleUser()) {
            $dataArray['fixedResponsibleUser'] = $data->getFixedResponsibleUser();
        }
        if ($data->isInitialized('formerSalesPartner') && null !== $data->getFormerSalesPartner()) {
            $dataArray['formerSalesPartner'] = $data->getFormerSalesPartner();
        }
        if ($data->isInitialized('habitualExporter') && null !== $data->getHabitualExporter()) {
            $dataArray['habitualExporter'] = $data->getHabitualExporter();
        }
        if ($data->isInitialized('imageId') && null !== $data->getImageId()) {
            $dataArray['imageId'] = $data->getImageId();
        }
        if ($data->isInitialized('invoiceBlock') && null !== $data->getInvoiceBlock()) {
            $dataArray['invoiceBlock'] = $data->getInvoiceBlock();
        }
        if ($data->isInitialized('invoiceRecipientId') && null !== $data->getInvoiceRecipientId()) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('leadRatingId') && null !== $data->getLeadRatingId()) {
            $dataArray['leadRatingId'] = $data->getLeadRatingId();
        }
        if ($data->isInitialized('leadRatingName') && null !== $data->getLeadRatingName()) {
            $dataArray['leadRatingName'] = $data->getLeadRatingName();
        }
        if ($data->isInitialized('leadSourceId') && null !== $data->getLeadSourceId()) {
            $dataArray['leadSourceId'] = $data->getLeadSourceId();
        }
        if ($data->isInitialized('leadSourceName') && null !== $data->getLeadSourceName()) {
            $dataArray['leadSourceName'] = $data->getLeadSourceName();
        }
        if ($data->isInitialized('leadStatus') && null !== $data->getLeadStatus()) {
            $dataArray['leadStatus'] = $data->getLeadStatus();
        }
        if ($data->isInitialized('legalFormId') && null !== $data->getLegalFormId()) {
            $dataArray['legalFormId'] = $data->getLegalFormId();
        }
        if ($data->isInitialized('legalFormName') && null !== $data->getLegalFormName()) {
            $dataArray['legalFormName'] = $data->getLegalFormName();
        }
        if ($data->isInitialized('mobilePhone2') && null !== $data->getMobilePhone2()) {
            $dataArray['mobilePhone2'] = $data->getMobilePhone2();
        }
        if ($data->isInitialized('optInEmail') && null !== $data->getOptInEmail()) {
            $dataArray['optInEmail'] = $data->getOptInEmail();
        }
        if ($data->isInitialized('optInLetter') && null !== $data->getOptInLetter()) {
            $dataArray['optInLetter'] = $data->getOptInLetter();
        }
        if ($data->isInitialized('optInPhone') && null !== $data->getOptInPhone()) {
            $dataArray['optInPhone'] = $data->getOptInPhone();
        }
        if ($data->isInitialized('optInSms') && null !== $data->getOptInSms()) {
            $dataArray['optInSms'] = $data->getOptInSms();
        }
        if ($data->isInitialized('parentPartyId') && null !== $data->getParentPartyId()) {
            $dataArray['parentPartyId'] = $data->getParentPartyId();
        }
        if ($data->isInitialized('partyEmailAddresses') && null !== $data->getPartyEmailAddresses()) {
            $values_8 = [];
            foreach ($data->getPartyEmailAddresses() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['partyEmailAddresses'] = $values_8;
        }
        if ($data->isInitialized('partyHabitualExporterLettersOfIntent') && null !== $data->getPartyHabitualExporterLettersOfIntent()) {
            $values_9 = [];
            foreach ($data->getPartyHabitualExporterLettersOfIntent() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $dataArray['partyHabitualExporterLettersOfIntent'] = $values_9;
        }
        if ($data->isInitialized('phoneHome') && null !== $data->getPhoneHome()) {
            $dataArray['phoneHome'] = $data->getPhoneHome();
        }
        if ($data->isInitialized('primaryContactId') && null !== $data->getPrimaryContactId()) {
            $dataArray['primaryContactId'] = $data->getPrimaryContactId();
        }
        if ($data->isInitialized('publicPageExpirationDate') && null !== $data->getPublicPageExpirationDate()) {
            $dataArray['publicPageExpirationDate'] = $data->getPublicPageExpirationDate();
        }
        if ($data->isInitialized('publicPageUuid') && null !== $data->getPublicPageUuid()) {
            $dataArray['publicPageUuid'] = $data->getPublicPageUuid();
        }
        if ($data->isInitialized('purchaseEmailAddressesId') && null !== $data->getPurchaseEmailAddressesId()) {
            $dataArray['purchaseEmailAddressesId'] = $data->getPurchaseEmailAddressesId();
        }
        if ($data->isInitialized('purchaseViaPlafond') && null !== $data->getPurchaseViaPlafond()) {
            $dataArray['purchaseViaPlafond'] = $data->getPurchaseViaPlafond();
        }
        if ($data->isInitialized('quotationEmailAddressesId') && null !== $data->getQuotationEmailAddressesId()) {
            $dataArray['quotationEmailAddressesId'] = $data->getQuotationEmailAddressesId();
        }
        if ($data->isInitialized('ratingId') && null !== $data->getRatingId()) {
            $dataArray['ratingId'] = $data->getRatingId();
        }
        if ($data->isInitialized('ratingName') && null !== $data->getRatingName()) {
            $dataArray['ratingName'] = $data->getRatingName();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('regionId') && null !== $data->getRegionId()) {
            $dataArray['regionId'] = $data->getRegionId();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && null !== $data->getResponsibleUserUsername()) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('salesInvoiceEmailAddressesId') && null !== $data->getSalesInvoiceEmailAddressesId()) {
            $dataArray['salesInvoiceEmailAddressesId'] = $data->getSalesInvoiceEmailAddressesId();
        }
        if ($data->isInitialized('salesOrderEmailAddressesId') && null !== $data->getSalesOrderEmailAddressesId()) {
            $dataArray['salesOrderEmailAddressesId'] = $data->getSalesOrderEmailAddressesId();
        }
        if ($data->isInitialized('salesPartner') && null !== $data->getSalesPartner()) {
            $dataArray['salesPartner'] = $data->getSalesPartner();
        }
        if ($data->isInitialized('salesPartnerDefaultCommissionFix') && null !== $data->getSalesPartnerDefaultCommissionFix()) {
            $dataArray['salesPartnerDefaultCommissionFix'] = $data->getSalesPartnerDefaultCommissionFix();
        }
        if ($data->isInitialized('salesPartnerDefaultCommissionPercentage') && null !== $data->getSalesPartnerDefaultCommissionPercentage()) {
            $dataArray['salesPartnerDefaultCommissionPercentage'] = $data->getSalesPartnerDefaultCommissionPercentage();
        }
        if ($data->isInitialized('salesPartnerDefaultCommissionType') && null !== $data->getSalesPartnerDefaultCommissionType()) {
            $dataArray['salesPartnerDefaultCommissionType'] = $data->getSalesPartnerDefaultCommissionType();
        }
        if ($data->isInitialized('sectorId') && null !== $data->getSectorId()) {
            $dataArray['sectorId'] = $data->getSectorId();
        }
        if ($data->isInitialized('sectorName') && null !== $data->getSectorName()) {
            $dataArray['sectorName'] = $data->getSectorName();
        }
        if ($data->isInitialized('supplier') && null !== $data->getSupplier()) {
            $dataArray['supplier'] = $data->getSupplier();
        }
        if ($data->isInitialized('supplierCreditorAccountId') && null !== $data->getSupplierCreditorAccountId()) {
            $dataArray['supplierCreditorAccountId'] = $data->getSupplierCreditorAccountId();
        }
        if ($data->isInitialized('supplierCreditorAccountNumber') && null !== $data->getSupplierCreditorAccountNumber()) {
            $dataArray['supplierCreditorAccountNumber'] = $data->getSupplierCreditorAccountNumber();
        }
        if ($data->isInitialized('supplierCreditorAccountingCodeId') && null !== $data->getSupplierCreditorAccountingCodeId()) {
            $dataArray['supplierCreditorAccountingCodeId'] = $data->getSupplierCreditorAccountingCodeId();
        }
        if ($data->isInitialized('supplierCustomerNumberAtSupplier') && null !== $data->getSupplierCustomerNumberAtSupplier()) {
            $dataArray['supplierCustomerNumberAtSupplier'] = $data->getSupplierCustomerNumberAtSupplier();
        }
        if ($data->isInitialized('supplierDefaultShippingCarrierId') && null !== $data->getSupplierDefaultShippingCarrierId()) {
            $dataArray['supplierDefaultShippingCarrierId'] = $data->getSupplierDefaultShippingCarrierId();
        }
        if ($data->isInitialized('supplierInternalNote') && null !== $data->getSupplierInternalNote()) {
            $dataArray['supplierInternalNote'] = $data->getSupplierInternalNote();
        }
        if ($data->isInitialized('supplierMinimumPurchaseOrderAmount') && null !== $data->getSupplierMinimumPurchaseOrderAmount()) {
            $dataArray['supplierMinimumPurchaseOrderAmount'] = $data->getSupplierMinimumPurchaseOrderAmount();
        }
        if ($data->isInitialized('supplierNonStandardTaxId') && null !== $data->getSupplierNonStandardTaxId()) {
            $dataArray['supplierNonStandardTaxId'] = $data->getSupplierNonStandardTaxId();
        }
        if ($data->isInitialized('supplierNumber') && null !== $data->getSupplierNumber()) {
            $dataArray['supplierNumber'] = $data->getSupplierNumber();
        }
        if ($data->isInitialized('supplierNumberOld') && null !== $data->getSupplierNumberOld()) {
            $dataArray['supplierNumberOld'] = $data->getSupplierNumberOld();
        }
        if ($data->isInitialized('supplierOrderBlock') && null !== $data->getSupplierOrderBlock()) {
            $dataArray['supplierOrderBlock'] = $data->getSupplierOrderBlock();
        }
        if ($data->isInitialized('supplierPaymentMethodId') && null !== $data->getSupplierPaymentMethodId()) {
            $dataArray['supplierPaymentMethodId'] = $data->getSupplierPaymentMethodId();
        }
        if ($data->isInitialized('supplierPaymentMethodName') && null !== $data->getSupplierPaymentMethodName()) {
            $dataArray['supplierPaymentMethodName'] = $data->getSupplierPaymentMethodName();
        }
        if ($data->isInitialized('supplierShipmentMethodId') && null !== $data->getSupplierShipmentMethodId()) {
            $dataArray['supplierShipmentMethodId'] = $data->getSupplierShipmentMethodId();
        }
        if ($data->isInitialized('supplierShipmentMethodName') && null !== $data->getSupplierShipmentMethodName()) {
            $dataArray['supplierShipmentMethodName'] = $data->getSupplierShipmentMethodName();
        }
        if ($data->isInitialized('supplierTermOfPaymentId') && null !== $data->getSupplierTermOfPaymentId()) {
            $dataArray['supplierTermOfPaymentId'] = $data->getSupplierTermOfPaymentId();
        }
        if ($data->isInitialized('supplierTermOfPaymentName') && null !== $data->getSupplierTermOfPaymentName()) {
            $dataArray['supplierTermOfPaymentName'] = $data->getSupplierTermOfPaymentName();
        }
        if ($data->isInitialized('taxId') && null !== $data->getTaxId()) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('topics') && null !== $data->getTopics()) {
            $values_10 = [];
            foreach ($data->getTopics() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $dataArray['topics'] = $values_10;
        }
        if ($data->isInitialized('vatIdentificationNumber') && null !== $data->getVatIdentificationNumber()) {
            $dataArray['vatIdentificationNumber'] = $data->getVatIdentificationNumber();
        }
        if ($data->isInitialized('xRechnungLeitwegId') && null !== $data->getXRechnungLeitwegId()) {
            $dataArray['xRechnungLeitwegId'] = $data->getXRechnungLeitwegId();
        }
        foreach ($data as $key => $value_11) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_11;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Party::class => false];
    }
}