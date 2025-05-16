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

class PartyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Party;
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
        if (\array_key_exists('addresses', $data) && $data['addresses'] !== null) {
            $values_1 = [];
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context);
            }
            $object->setAddresses($values_1);
            unset($data['addresses']);
        } elseif (\array_key_exists('addresses', $data) && $data['addresses'] === null) {
            $object->setAddresses(null);
        }
        if (\array_key_exists('birthDate', $data) && $data['birthDate'] !== null) {
            $object->setBirthDate($data['birthDate']);
            unset($data['birthDate']);
        } elseif (\array_key_exists('birthDate', $data) && $data['birthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        } elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('company2', $data) && $data['company2'] !== null) {
            $object->setCompany2($data['company2']);
            unset($data['company2']);
        } elseif (\array_key_exists('company2', $data) && $data['company2'] === null) {
            $object->setCompany2(null);
        }
        if (\array_key_exists('deliveryAddressId', $data) && $data['deliveryAddressId'] !== null) {
            $object->setDeliveryAddressId($data['deliveryAddressId']);
            unset($data['deliveryAddressId']);
        } elseif (\array_key_exists('deliveryAddressId', $data) && $data['deliveryAddressId'] === null) {
            $object->setDeliveryAddressId(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($data['fax']);
            unset($data['fax']);
        } elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        } elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('invoiceAddressId', $data) && $data['invoiceAddressId'] !== null) {
            $object->setInvoiceAddressId($data['invoiceAddressId']);
            unset($data['invoiceAddressId']);
        } elseif (\array_key_exists('invoiceAddressId', $data) && $data['invoiceAddressId'] === null) {
            $object->setInvoiceAddressId(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        } elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('middleName', $data) && $data['middleName'] !== null) {
            $object->setMiddleName($data['middleName']);
            unset($data['middleName']);
        } elseif (\array_key_exists('middleName', $data) && $data['middleName'] === null) {
            $object->setMiddleName(null);
        }
        if (\array_key_exists('mobilePhone1', $data) && $data['mobilePhone1'] !== null) {
            $object->setMobilePhone1($data['mobilePhone1']);
            unset($data['mobilePhone1']);
        } elseif (\array_key_exists('mobilePhone1', $data) && $data['mobilePhone1'] === null) {
            $object->setMobilePhone1(null);
        }
        if (\array_key_exists('onlineAccounts', $data) && $data['onlineAccounts'] !== null) {
            $values_2 = [];
            foreach ($data['onlineAccounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlineAccount::class, 'json', $context);
            }
            $object->setOnlineAccounts($values_2);
            unset($data['onlineAccounts']);
        } elseif (\array_key_exists('onlineAccounts', $data) && $data['onlineAccounts'] === null) {
            $object->setOnlineAccounts(null);
        }
        if (\array_key_exists('partyType', $data) && $data['partyType'] !== null) {
            $object->setPartyType($data['partyType']);
            unset($data['partyType']);
        } elseif (\array_key_exists('partyType', $data) && $data['partyType'] === null) {
            $object->setPartyType(null);
        }
        if (\array_key_exists('personCompany', $data) && $data['personCompany'] !== null) {
            $object->setPersonCompany($data['personCompany']);
            unset($data['personCompany']);
        } elseif (\array_key_exists('personCompany', $data) && $data['personCompany'] === null) {
            $object->setPersonCompany(null);
        }
        if (\array_key_exists('personDepartmentId', $data) && $data['personDepartmentId'] !== null) {
            $object->setPersonDepartmentId($data['personDepartmentId']);
            unset($data['personDepartmentId']);
        } elseif (\array_key_exists('personDepartmentId', $data) && $data['personDepartmentId'] === null) {
            $object->setPersonDepartmentId(null);
        }
        if (\array_key_exists('personRoleId', $data) && $data['personRoleId'] !== null) {
            $object->setPersonRoleId($data['personRoleId']);
            unset($data['personRoleId']);
        } elseif (\array_key_exists('personRoleId', $data) && $data['personRoleId'] === null) {
            $object->setPersonRoleId(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
            unset($data['phone']);
        } elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('primaryAddressId', $data) && $data['primaryAddressId'] !== null) {
            $object->setPrimaryAddressId($data['primaryAddressId']);
            unset($data['primaryAddressId']);
        } elseif (\array_key_exists('primaryAddressId', $data) && $data['primaryAddressId'] === null) {
            $object->setPrimaryAddressId(null);
        }
        if (\array_key_exists('salutation', $data) && $data['salutation'] !== null) {
            $object->setSalutation($data['salutation']);
            unset($data['salutation']);
        } elseif (\array_key_exists('salutation', $data) && $data['salutation'] === null) {
            $object->setSalutation(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_3 = [];
            foreach ($data['tags'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTags($values_3);
            unset($data['tags']);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('titleId', $data) && $data['titleId'] !== null) {
            $object->setTitleId($data['titleId']);
            unset($data['titleId']);
        } elseif (\array_key_exists('titleId', $data) && $data['titleId'] === null) {
            $object->setTitleId(null);
        }
        if (\array_key_exists('website', $data) && $data['website'] !== null) {
            $object->setWebsite($data['website']);
            unset($data['website']);
        } elseif (\array_key_exists('website', $data) && $data['website'] === null) {
            $object->setWebsite(null);
        }
        if (\array_key_exists('allowPurchaseOrderCreation', $data) && $data['allowPurchaseOrderCreation'] !== null) {
            $object->setAllowPurchaseOrderCreation($data['allowPurchaseOrderCreation']);
            unset($data['allowPurchaseOrderCreation']);
        } elseif (\array_key_exists('allowPurchaseOrderCreation', $data) && $data['allowPurchaseOrderCreation'] === null) {
            $object->setAllowPurchaseOrderCreation(null);
        }
        if (\array_key_exists('bankAccounts', $data) && $data['bankAccounts'] !== null) {
            $values_4 = [];
            foreach ($data['bankAccounts'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class, 'json', $context);
            }
            $object->setBankAccounts($values_4);
            unset($data['bankAccounts']);
        } elseif (\array_key_exists('bankAccounts', $data) && $data['bankAccounts'] === null) {
            $object->setBankAccounts(null);
        }
        if (\array_key_exists('commercialLanguageId', $data) && $data['commercialLanguageId'] !== null) {
            $object->setCommercialLanguageId($data['commercialLanguageId']);
            unset($data['commercialLanguageId']);
        } elseif (\array_key_exists('commercialLanguageId', $data) && $data['commercialLanguageId'] === null) {
            $object->setCommercialLanguageId(null);
        }
        if (\array_key_exists('commissionBlock', $data) && $data['commissionBlock'] !== null) {
            $object->setCommissionBlock($data['commissionBlock']);
            unset($data['commissionBlock']);
        } elseif (\array_key_exists('commissionBlock', $data) && $data['commissionBlock'] === null) {
            $object->setCommissionBlock(null);
        }
        if (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] !== null) {
            $values_5 = [];
            foreach ($data['commissionSalesPartners'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_5);
            unset($data['commissionSalesPartners']);
        } elseif (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] === null) {
            $object->setCommissionSalesPartners(null);
        }
        if (\array_key_exists('companySizeId', $data) && $data['companySizeId'] !== null) {
            $object->setCompanySizeId($data['companySizeId']);
            unset($data['companySizeId']);
        } elseif (\array_key_exists('companySizeId', $data) && $data['companySizeId'] === null) {
            $object->setCompanySizeId(null);
        }
        if (\array_key_exists('companySizeName', $data) && $data['companySizeName'] !== null) {
            $object->setCompanySizeName($data['companySizeName']);
            unset($data['companySizeName']);
        } elseif (\array_key_exists('companySizeName', $data) && $data['companySizeName'] === null) {
            $object->setCompanySizeName(null);
        }
        if (\array_key_exists('competitor', $data) && $data['competitor'] !== null) {
            $object->setCompetitor($data['competitor']);
            unset($data['competitor']);
        } elseif (\array_key_exists('competitor', $data) && $data['competitor'] === null) {
            $object->setCompetitor(null);
        }
        if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
            $values_6 = [];
            foreach ($data['contacts'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setContacts($values_6);
            unset($data['contacts']);
        } elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
            $object->setContacts(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        } elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('currencyName', $data) && $data['currencyName'] !== null) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        } elseif (\array_key_exists('currencyName', $data) && $data['currencyName'] === null) {
            $object->setCurrencyName(null);
        }
        if (\array_key_exists('customer', $data) && $data['customer'] !== null) {
            $object->setCustomer($data['customer']);
            unset($data['customer']);
        } elseif (\array_key_exists('customer', $data) && $data['customer'] === null) {
            $object->setCustomer(null);
        }
        if (\array_key_exists('customerAllowDropshippingOrderCreation', $data) && $data['customerAllowDropshippingOrderCreation'] !== null) {
            $object->setCustomerAllowDropshippingOrderCreation($data['customerAllowDropshippingOrderCreation']);
            unset($data['customerAllowDropshippingOrderCreation']);
        } elseif (\array_key_exists('customerAllowDropshippingOrderCreation', $data) && $data['customerAllowDropshippingOrderCreation'] === null) {
            $object->setCustomerAllowDropshippingOrderCreation(null);
        }
        if (\array_key_exists('customerAmountInsured', $data) && $data['customerAmountInsured'] !== null) {
            $object->setCustomerAmountInsured($data['customerAmountInsured']);
            unset($data['customerAmountInsured']);
        } elseif (\array_key_exists('customerAmountInsured', $data) && $data['customerAmountInsured'] === null) {
            $object->setCustomerAmountInsured(null);
        }
        if (\array_key_exists('customerAnnualRevenue', $data) && $data['customerAnnualRevenue'] !== null) {
            $object->setCustomerAnnualRevenue($data['customerAnnualRevenue']);
            unset($data['customerAnnualRevenue']);
        } elseif (\array_key_exists('customerAnnualRevenue', $data) && $data['customerAnnualRevenue'] === null) {
            $object->setCustomerAnnualRevenue(null);
        }
        if (\array_key_exists('customerBlockNotice', $data) && $data['customerBlockNotice'] !== null) {
            $object->setCustomerBlockNotice($data['customerBlockNotice']);
            unset($data['customerBlockNotice']);
        } elseif (\array_key_exists('customerBlockNotice', $data) && $data['customerBlockNotice'] === null) {
            $object->setCustomerBlockNotice(null);
        }
        if (\array_key_exists('customerBlocked', $data) && $data['customerBlocked'] !== null) {
            $object->setCustomerBlocked($data['customerBlocked']);
            unset($data['customerBlocked']);
        } elseif (\array_key_exists('customerBlocked', $data) && $data['customerBlocked'] === null) {
            $object->setCustomerBlocked(null);
        }
        if (\array_key_exists('customerBusinessType', $data) && $data['customerBusinessType'] !== null) {
            $object->setCustomerBusinessType($data['customerBusinessType']);
            unset($data['customerBusinessType']);
        } elseif (\array_key_exists('customerBusinessType', $data) && $data['customerBusinessType'] === null) {
            $object->setCustomerBusinessType(null);
        }
        if (\array_key_exists('customerCategoryId', $data) && $data['customerCategoryId'] !== null) {
            $object->setCustomerCategoryId($data['customerCategoryId']);
            unset($data['customerCategoryId']);
        } elseif (\array_key_exists('customerCategoryId', $data) && $data['customerCategoryId'] === null) {
            $object->setCustomerCategoryId(null);
        }
        if (\array_key_exists('customerCategoryName', $data) && $data['customerCategoryName'] !== null) {
            $object->setCustomerCategoryName($data['customerCategoryName']);
            unset($data['customerCategoryName']);
        } elseif (\array_key_exists('customerCategoryName', $data) && $data['customerCategoryName'] === null) {
            $object->setCustomerCategoryName(null);
        }
        if (\array_key_exists('customerCreditLimit', $data) && $data['customerCreditLimit'] !== null) {
            $object->setCustomerCreditLimit($data['customerCreditLimit']);
            unset($data['customerCreditLimit']);
        } elseif (\array_key_exists('customerCreditLimit', $data) && $data['customerCreditLimit'] === null) {
            $object->setCustomerCreditLimit(null);
        }
        if (\array_key_exists('customerCurrentSalesStageId', $data) && $data['customerCurrentSalesStageId'] !== null) {
            $object->setCustomerCurrentSalesStageId($data['customerCurrentSalesStageId']);
            unset($data['customerCurrentSalesStageId']);
        } elseif (\array_key_exists('customerCurrentSalesStageId', $data) && $data['customerCurrentSalesStageId'] === null) {
            $object->setCustomerCurrentSalesStageId(null);
        }
        if (\array_key_exists('customerCurrentSalesStageName', $data) && $data['customerCurrentSalesStageName'] !== null) {
            $object->setCustomerCurrentSalesStageName($data['customerCurrentSalesStageName']);
            unset($data['customerCurrentSalesStageName']);
        } elseif (\array_key_exists('customerCurrentSalesStageName', $data) && $data['customerCurrentSalesStageName'] === null) {
            $object->setCustomerCurrentSalesStageName(null);
        }
        if (\array_key_exists('customerDebtorAccountId', $data) && $data['customerDebtorAccountId'] !== null) {
            $object->setCustomerDebtorAccountId($data['customerDebtorAccountId']);
            unset($data['customerDebtorAccountId']);
        } elseif (\array_key_exists('customerDebtorAccountId', $data) && $data['customerDebtorAccountId'] === null) {
            $object->setCustomerDebtorAccountId(null);
        }
        if (\array_key_exists('customerDebtorAccountNumber', $data) && $data['customerDebtorAccountNumber'] !== null) {
            $object->setCustomerDebtorAccountNumber($data['customerDebtorAccountNumber']);
            unset($data['customerDebtorAccountNumber']);
        } elseif (\array_key_exists('customerDebtorAccountNumber', $data) && $data['customerDebtorAccountNumber'] === null) {
            $object->setCustomerDebtorAccountNumber(null);
        }
        if (\array_key_exists('customerDebtorAccountingCodeId', $data) && $data['customerDebtorAccountingCodeId'] !== null) {
            $object->setCustomerDebtorAccountingCodeId($data['customerDebtorAccountingCodeId']);
            unset($data['customerDebtorAccountingCodeId']);
        } elseif (\array_key_exists('customerDebtorAccountingCodeId', $data) && $data['customerDebtorAccountingCodeId'] === null) {
            $object->setCustomerDebtorAccountingCodeId(null);
        }
        if (\array_key_exists('customerDefaultHeaderDiscount', $data) && $data['customerDefaultHeaderDiscount'] !== null) {
            $object->setCustomerDefaultHeaderDiscount($data['customerDefaultHeaderDiscount']);
            unset($data['customerDefaultHeaderDiscount']);
        } elseif (\array_key_exists('customerDefaultHeaderDiscount', $data) && $data['customerDefaultHeaderDiscount'] === null) {
            $object->setCustomerDefaultHeaderDiscount(null);
        }
        if (\array_key_exists('customerDefaultHeaderSurcharge', $data) && $data['customerDefaultHeaderSurcharge'] !== null) {
            $object->setCustomerDefaultHeaderSurcharge($data['customerDefaultHeaderSurcharge']);
            unset($data['customerDefaultHeaderSurcharge']);
        } elseif (\array_key_exists('customerDefaultHeaderSurcharge', $data) && $data['customerDefaultHeaderSurcharge'] === null) {
            $object->setCustomerDefaultHeaderSurcharge(null);
        }
        if (\array_key_exists('customerDefaultShippingCarrierId', $data) && $data['customerDefaultShippingCarrierId'] !== null) {
            $object->setCustomerDefaultShippingCarrierId($data['customerDefaultShippingCarrierId']);
            unset($data['customerDefaultShippingCarrierId']);
        } elseif (\array_key_exists('customerDefaultShippingCarrierId', $data) && $data['customerDefaultShippingCarrierId'] === null) {
            $object->setCustomerDefaultShippingCarrierId(null);
        }
        if (\array_key_exists('customerDeliveryBlock', $data) && $data['customerDeliveryBlock'] !== null) {
            $object->setCustomerDeliveryBlock($data['customerDeliveryBlock']);
            unset($data['customerDeliveryBlock']);
        } elseif (\array_key_exists('customerDeliveryBlock', $data) && $data['customerDeliveryBlock'] === null) {
            $object->setCustomerDeliveryBlock(null);
        }
        if (\array_key_exists('customerInsolvent', $data) && $data['customerInsolvent'] !== null) {
            $object->setCustomerInsolvent($data['customerInsolvent']);
            unset($data['customerInsolvent']);
        } elseif (\array_key_exists('customerInsolvent', $data) && $data['customerInsolvent'] === null) {
            $object->setCustomerInsolvent(null);
        }
        if (\array_key_exists('customerInsured', $data) && $data['customerInsured'] !== null) {
            $object->setCustomerInsured($data['customerInsured']);
            unset($data['customerInsured']);
        } elseif (\array_key_exists('customerInsured', $data) && $data['customerInsured'] === null) {
            $object->setCustomerInsured(null);
        }
        if (\array_key_exists('customerInternalNote', $data) && $data['customerInternalNote'] !== null) {
            $object->setCustomerInternalNote($data['customerInternalNote']);
            unset($data['customerInternalNote']);
        } elseif (\array_key_exists('customerInternalNote', $data) && $data['customerInternalNote'] === null) {
            $object->setCustomerInternalNote(null);
        }
        if (\array_key_exists('customerLossDescription', $data) && $data['customerLossDescription'] !== null) {
            $object->setCustomerLossDescription($data['customerLossDescription']);
            unset($data['customerLossDescription']);
        } elseif (\array_key_exists('customerLossDescription', $data) && $data['customerLossDescription'] === null) {
            $object->setCustomerLossDescription(null);
        }
        if (\array_key_exists('customerLossReasonId', $data) && $data['customerLossReasonId'] !== null) {
            $object->setCustomerLossReasonId($data['customerLossReasonId']);
            unset($data['customerLossReasonId']);
        } elseif (\array_key_exists('customerLossReasonId', $data) && $data['customerLossReasonId'] === null) {
            $object->setCustomerLossReasonId(null);
        }
        if (\array_key_exists('customerLossReasonName', $data) && $data['customerLossReasonName'] !== null) {
            $object->setCustomerLossReasonName($data['customerLossReasonName']);
            unset($data['customerLossReasonName']);
        } elseif (\array_key_exists('customerLossReasonName', $data) && $data['customerLossReasonName'] === null) {
            $object->setCustomerLossReasonName(null);
        }
        if (\array_key_exists('customerNonStandardTaxId', $data) && $data['customerNonStandardTaxId'] !== null) {
            $object->setCustomerNonStandardTaxId($data['customerNonStandardTaxId']);
            unset($data['customerNonStandardTaxId']);
        } elseif (\array_key_exists('customerNonStandardTaxId', $data) && $data['customerNonStandardTaxId'] === null) {
            $object->setCustomerNonStandardTaxId(null);
        }
        if (\array_key_exists('customerNumber', $data) && $data['customerNumber'] !== null) {
            $object->setCustomerNumber($data['customerNumber']);
            unset($data['customerNumber']);
        } elseif (\array_key_exists('customerNumber', $data) && $data['customerNumber'] === null) {
            $object->setCustomerNumber(null);
        }
        if (\array_key_exists('customerNumberOld', $data) && $data['customerNumberOld'] !== null) {
            $object->setCustomerNumberOld($data['customerNumberOld']);
            unset($data['customerNumberOld']);
        } elseif (\array_key_exists('customerNumberOld', $data) && $data['customerNumberOld'] === null) {
            $object->setCustomerNumberOld(null);
        }
        if (\array_key_exists('customerPaymentMethodId', $data) && $data['customerPaymentMethodId'] !== null) {
            $object->setCustomerPaymentMethodId($data['customerPaymentMethodId']);
            unset($data['customerPaymentMethodId']);
        } elseif (\array_key_exists('customerPaymentMethodId', $data) && $data['customerPaymentMethodId'] === null) {
            $object->setCustomerPaymentMethodId(null);
        }
        if (\array_key_exists('customerPaymentMethodName', $data) && $data['customerPaymentMethodName'] !== null) {
            $object->setCustomerPaymentMethodName($data['customerPaymentMethodName']);
            unset($data['customerPaymentMethodName']);
        } elseif (\array_key_exists('customerPaymentMethodName', $data) && $data['customerPaymentMethodName'] === null) {
            $object->setCustomerPaymentMethodName(null);
        }
        if (\array_key_exists('customerSalesChannel', $data) && $data['customerSalesChannel'] !== null) {
            $object->setCustomerSalesChannel($data['customerSalesChannel']);
            unset($data['customerSalesChannel']);
        } elseif (\array_key_exists('customerSalesChannel', $data) && $data['customerSalesChannel'] === null) {
            $object->setCustomerSalesChannel(null);
        }
        if (\array_key_exists('customerSalesOrderPaymentType', $data) && $data['customerSalesOrderPaymentType'] !== null) {
            $object->setCustomerSalesOrderPaymentType($data['customerSalesOrderPaymentType']);
            unset($data['customerSalesOrderPaymentType']);
        } elseif (\array_key_exists('customerSalesOrderPaymentType', $data) && $data['customerSalesOrderPaymentType'] === null) {
            $object->setCustomerSalesOrderPaymentType(null);
        }
        if (\array_key_exists('customerSalesProbability', $data) && $data['customerSalesProbability'] !== null) {
            $object->setCustomerSalesProbability($data['customerSalesProbability']);
            unset($data['customerSalesProbability']);
        } elseif (\array_key_exists('customerSalesProbability', $data) && $data['customerSalesProbability'] === null) {
            $object->setCustomerSalesProbability(null);
        }
        if (\array_key_exists('customerSalesStageHistory', $data) && $data['customerSalesStageHistory'] !== null) {
            $values_7 = [];
            foreach ($data['customerSalesStageHistory'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\SalesStageHistory::class, 'json', $context);
            }
            $object->setCustomerSalesStageHistory($values_7);
            unset($data['customerSalesStageHistory']);
        } elseif (\array_key_exists('customerSalesStageHistory', $data) && $data['customerSalesStageHistory'] === null) {
            $object->setCustomerSalesStageHistory(null);
        }
        if (\array_key_exists('customerSatisfaction', $data) && $data['customerSatisfaction'] !== null) {
            $object->setCustomerSatisfaction($data['customerSatisfaction']);
            unset($data['customerSatisfaction']);
        } elseif (\array_key_exists('customerSatisfaction', $data) && $data['customerSatisfaction'] === null) {
            $object->setCustomerSatisfaction(null);
        }
        if (\array_key_exists('customerShipmentMethodId', $data) && $data['customerShipmentMethodId'] !== null) {
            $object->setCustomerShipmentMethodId($data['customerShipmentMethodId']);
            unset($data['customerShipmentMethodId']);
        } elseif (\array_key_exists('customerShipmentMethodId', $data) && $data['customerShipmentMethodId'] === null) {
            $object->setCustomerShipmentMethodId(null);
        }
        if (\array_key_exists('customerShipmentMethodName', $data) && $data['customerShipmentMethodName'] !== null) {
            $object->setCustomerShipmentMethodName($data['customerShipmentMethodName']);
            unset($data['customerShipmentMethodName']);
        } elseif (\array_key_exists('customerShipmentMethodName', $data) && $data['customerShipmentMethodName'] === null) {
            $object->setCustomerShipmentMethodName(null);
        }
        if (\array_key_exists('customerSupplierNumber', $data) && $data['customerSupplierNumber'] !== null) {
            $object->setCustomerSupplierNumber($data['customerSupplierNumber']);
            unset($data['customerSupplierNumber']);
        } elseif (\array_key_exists('customerSupplierNumber', $data) && $data['customerSupplierNumber'] === null) {
            $object->setCustomerSupplierNumber(null);
        }
        if (\array_key_exists('customerTermOfPaymentId', $data) && $data['customerTermOfPaymentId'] !== null) {
            $object->setCustomerTermOfPaymentId($data['customerTermOfPaymentId']);
            unset($data['customerTermOfPaymentId']);
        } elseif (\array_key_exists('customerTermOfPaymentId', $data) && $data['customerTermOfPaymentId'] === null) {
            $object->setCustomerTermOfPaymentId(null);
        }
        if (\array_key_exists('customerTermOfPaymentName', $data) && $data['customerTermOfPaymentName'] !== null) {
            $object->setCustomerTermOfPaymentName($data['customerTermOfPaymentName']);
            unset($data['customerTermOfPaymentName']);
        } elseif (\array_key_exists('customerTermOfPaymentName', $data) && $data['customerTermOfPaymentName'] === null) {
            $object->setCustomerTermOfPaymentName(null);
        }
        if (\array_key_exists('customerUseCustomsTariffNumber', $data) && $data['customerUseCustomsTariffNumber'] !== null) {
            $object->setCustomerUseCustomsTariffNumber($data['customerUseCustomsTariffNumber']);
            unset($data['customerUseCustomsTariffNumber']);
        } elseif (\array_key_exists('customerUseCustomsTariffNumber', $data) && $data['customerUseCustomsTariffNumber'] === null) {
            $object->setCustomerUseCustomsTariffNumber(null);
        }
        if (\array_key_exists('deliveryEmailAddressesId', $data) && $data['deliveryEmailAddressesId'] !== null) {
            $object->setDeliveryEmailAddressesId($data['deliveryEmailAddressesId']);
            unset($data['deliveryEmailAddressesId']);
        } elseif (\array_key_exists('deliveryEmailAddressesId', $data) && $data['deliveryEmailAddressesId'] === null) {
            $object->setDeliveryEmailAddressesId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('dunningAddressId', $data) && $data['dunningAddressId'] !== null) {
            $object->setDunningAddressId($data['dunningAddressId']);
            unset($data['dunningAddressId']);
        } elseif (\array_key_exists('dunningAddressId', $data) && $data['dunningAddressId'] === null) {
            $object->setDunningAddressId(null);
        }
        if (\array_key_exists('dunningEmailAddressesId', $data) && $data['dunningEmailAddressesId'] !== null) {
            $object->setDunningEmailAddressesId($data['dunningEmailAddressesId']);
            unset($data['dunningEmailAddressesId']);
        } elseif (\array_key_exists('dunningEmailAddressesId', $data) && $data['dunningEmailAddressesId'] === null) {
            $object->setDunningEmailAddressesId(null);
        }
        if (\array_key_exists('enableDropshippingInNewSupplySources', $data) && $data['enableDropshippingInNewSupplySources'] !== null) {
            $object->setEnableDropshippingInNewSupplySources($data['enableDropshippingInNewSupplySources']);
            unset($data['enableDropshippingInNewSupplySources']);
        } elseif (\array_key_exists('enableDropshippingInNewSupplySources', $data) && $data['enableDropshippingInNewSupplySources'] === null) {
            $object->setEnableDropshippingInNewSupplySources(null);
        }
        if (\array_key_exists('eoriNumber', $data) && $data['eoriNumber'] !== null) {
            $object->setEoriNumber($data['eoriNumber']);
            unset($data['eoriNumber']);
        } elseif (\array_key_exists('eoriNumber', $data) && $data['eoriNumber'] === null) {
            $object->setEoriNumber(null);
        }
        if (\array_key_exists('factoring', $data) && $data['factoring'] !== null) {
            $object->setFactoring($data['factoring']);
            unset($data['factoring']);
        } elseif (\array_key_exists('factoring', $data) && $data['factoring'] === null) {
            $object->setFactoring(null);
        }
        if (\array_key_exists('fixPhone2', $data) && $data['fixPhone2'] !== null) {
            $object->setFixPhone2($data['fixPhone2']);
            unset($data['fixPhone2']);
        } elseif (\array_key_exists('fixPhone2', $data) && $data['fixPhone2'] === null) {
            $object->setFixPhone2(null);
        }
        if (\array_key_exists('fixedResponsibleUser', $data) && $data['fixedResponsibleUser'] !== null) {
            $object->setFixedResponsibleUser($data['fixedResponsibleUser']);
            unset($data['fixedResponsibleUser']);
        } elseif (\array_key_exists('fixedResponsibleUser', $data) && $data['fixedResponsibleUser'] === null) {
            $object->setFixedResponsibleUser(null);
        }
        if (\array_key_exists('formerSalesPartner', $data) && $data['formerSalesPartner'] !== null) {
            $object->setFormerSalesPartner($data['formerSalesPartner']);
            unset($data['formerSalesPartner']);
        } elseif (\array_key_exists('formerSalesPartner', $data) && $data['formerSalesPartner'] === null) {
            $object->setFormerSalesPartner(null);
        }
        if (\array_key_exists('habitualExporter', $data) && $data['habitualExporter'] !== null) {
            $object->setHabitualExporter($data['habitualExporter']);
            unset($data['habitualExporter']);
        } elseif (\array_key_exists('habitualExporter', $data) && $data['habitualExporter'] === null) {
            $object->setHabitualExporter(null);
        }
        if (\array_key_exists('imageId', $data) && $data['imageId'] !== null) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        } elseif (\array_key_exists('imageId', $data) && $data['imageId'] === null) {
            $object->setImageId(null);
        }
        if (\array_key_exists('invoiceBlock', $data) && $data['invoiceBlock'] !== null) {
            $object->setInvoiceBlock($data['invoiceBlock']);
            unset($data['invoiceBlock']);
        } elseif (\array_key_exists('invoiceBlock', $data) && $data['invoiceBlock'] === null) {
            $object->setInvoiceBlock(null);
        }
        if (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] !== null) {
            $object->setInvoiceRecipientId($data['invoiceRecipientId']);
            unset($data['invoiceRecipientId']);
        } elseif (\array_key_exists('invoiceRecipientId', $data) && $data['invoiceRecipientId'] === null) {
            $object->setInvoiceRecipientId(null);
        }
        if (\array_key_exists('leadRatingId', $data) && $data['leadRatingId'] !== null) {
            $object->setLeadRatingId($data['leadRatingId']);
            unset($data['leadRatingId']);
        } elseif (\array_key_exists('leadRatingId', $data) && $data['leadRatingId'] === null) {
            $object->setLeadRatingId(null);
        }
        if (\array_key_exists('leadRatingName', $data) && $data['leadRatingName'] !== null) {
            $object->setLeadRatingName($data['leadRatingName']);
            unset($data['leadRatingName']);
        } elseif (\array_key_exists('leadRatingName', $data) && $data['leadRatingName'] === null) {
            $object->setLeadRatingName(null);
        }
        if (\array_key_exists('leadSourceId', $data) && $data['leadSourceId'] !== null) {
            $object->setLeadSourceId($data['leadSourceId']);
            unset($data['leadSourceId']);
        } elseif (\array_key_exists('leadSourceId', $data) && $data['leadSourceId'] === null) {
            $object->setLeadSourceId(null);
        }
        if (\array_key_exists('leadSourceName', $data) && $data['leadSourceName'] !== null) {
            $object->setLeadSourceName($data['leadSourceName']);
            unset($data['leadSourceName']);
        } elseif (\array_key_exists('leadSourceName', $data) && $data['leadSourceName'] === null) {
            $object->setLeadSourceName(null);
        }
        if (\array_key_exists('leadStatus', $data) && $data['leadStatus'] !== null) {
            $object->setLeadStatus($data['leadStatus']);
            unset($data['leadStatus']);
        } elseif (\array_key_exists('leadStatus', $data) && $data['leadStatus'] === null) {
            $object->setLeadStatus(null);
        }
        if (\array_key_exists('legalFormId', $data) && $data['legalFormId'] !== null) {
            $object->setLegalFormId($data['legalFormId']);
            unset($data['legalFormId']);
        } elseif (\array_key_exists('legalFormId', $data) && $data['legalFormId'] === null) {
            $object->setLegalFormId(null);
        }
        if (\array_key_exists('legalFormName', $data) && $data['legalFormName'] !== null) {
            $object->setLegalFormName($data['legalFormName']);
            unset($data['legalFormName']);
        } elseif (\array_key_exists('legalFormName', $data) && $data['legalFormName'] === null) {
            $object->setLegalFormName(null);
        }
        if (\array_key_exists('mobilePhone2', $data) && $data['mobilePhone2'] !== null) {
            $object->setMobilePhone2($data['mobilePhone2']);
            unset($data['mobilePhone2']);
        } elseif (\array_key_exists('mobilePhone2', $data) && $data['mobilePhone2'] === null) {
            $object->setMobilePhone2(null);
        }
        if (\array_key_exists('optInEmail', $data) && $data['optInEmail'] !== null) {
            $object->setOptInEmail($data['optInEmail']);
            unset($data['optInEmail']);
        } elseif (\array_key_exists('optInEmail', $data) && $data['optInEmail'] === null) {
            $object->setOptInEmail(null);
        }
        if (\array_key_exists('optInLetter', $data) && $data['optInLetter'] !== null) {
            $object->setOptInLetter($data['optInLetter']);
            unset($data['optInLetter']);
        } elseif (\array_key_exists('optInLetter', $data) && $data['optInLetter'] === null) {
            $object->setOptInLetter(null);
        }
        if (\array_key_exists('optInPhone', $data) && $data['optInPhone'] !== null) {
            $object->setOptInPhone($data['optInPhone']);
            unset($data['optInPhone']);
        } elseif (\array_key_exists('optInPhone', $data) && $data['optInPhone'] === null) {
            $object->setOptInPhone(null);
        }
        if (\array_key_exists('optInSms', $data) && $data['optInSms'] !== null) {
            $object->setOptInSms($data['optInSms']);
            unset($data['optInSms']);
        } elseif (\array_key_exists('optInSms', $data) && $data['optInSms'] === null) {
            $object->setOptInSms(null);
        }
        if (\array_key_exists('parentPartyId', $data) && $data['parentPartyId'] !== null) {
            $object->setParentPartyId($data['parentPartyId']);
            unset($data['parentPartyId']);
        } elseif (\array_key_exists('parentPartyId', $data) && $data['parentPartyId'] === null) {
            $object->setParentPartyId(null);
        }
        if (\array_key_exists('partyEmailAddresses', $data) && $data['partyEmailAddresses'] !== null) {
            $values_8 = [];
            foreach ($data['partyEmailAddresses'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Webhubworks\WeclappApiCore\Model\PartyEmailAddresses::class, 'json', $context);
            }
            $object->setPartyEmailAddresses($values_8);
            unset($data['partyEmailAddresses']);
        } elseif (\array_key_exists('partyEmailAddresses', $data) && $data['partyEmailAddresses'] === null) {
            $object->setPartyEmailAddresses(null);
        }
        if (\array_key_exists('partyHabitualExporterLettersOfIntent', $data) && $data['partyHabitualExporterLettersOfIntent'] !== null) {
            $values_9 = [];
            foreach ($data['partyHabitualExporterLettersOfIntent'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class, 'json', $context);
            }
            $object->setPartyHabitualExporterLettersOfIntent($values_9);
            unset($data['partyHabitualExporterLettersOfIntent']);
        } elseif (\array_key_exists('partyHabitualExporterLettersOfIntent', $data) && $data['partyHabitualExporterLettersOfIntent'] === null) {
            $object->setPartyHabitualExporterLettersOfIntent(null);
        }
        if (\array_key_exists('phoneHome', $data) && $data['phoneHome'] !== null) {
            $object->setPhoneHome($data['phoneHome']);
            unset($data['phoneHome']);
        } elseif (\array_key_exists('phoneHome', $data) && $data['phoneHome'] === null) {
            $object->setPhoneHome(null);
        }
        if (\array_key_exists('primaryContactId', $data) && $data['primaryContactId'] !== null) {
            $object->setPrimaryContactId($data['primaryContactId']);
            unset($data['primaryContactId']);
        } elseif (\array_key_exists('primaryContactId', $data) && $data['primaryContactId'] === null) {
            $object->setPrimaryContactId(null);
        }
        if (\array_key_exists('publicPageExpirationDate', $data) && $data['publicPageExpirationDate'] !== null) {
            $object->setPublicPageExpirationDate($data['publicPageExpirationDate']);
            unset($data['publicPageExpirationDate']);
        } elseif (\array_key_exists('publicPageExpirationDate', $data) && $data['publicPageExpirationDate'] === null) {
            $object->setPublicPageExpirationDate(null);
        }
        if (\array_key_exists('publicPageUuid', $data) && $data['publicPageUuid'] !== null) {
            $object->setPublicPageUuid($data['publicPageUuid']);
            unset($data['publicPageUuid']);
        } elseif (\array_key_exists('publicPageUuid', $data) && $data['publicPageUuid'] === null) {
            $object->setPublicPageUuid(null);
        }
        if (\array_key_exists('purchaseEmailAddressesId', $data) && $data['purchaseEmailAddressesId'] !== null) {
            $object->setPurchaseEmailAddressesId($data['purchaseEmailAddressesId']);
            unset($data['purchaseEmailAddressesId']);
        } elseif (\array_key_exists('purchaseEmailAddressesId', $data) && $data['purchaseEmailAddressesId'] === null) {
            $object->setPurchaseEmailAddressesId(null);
        }
        if (\array_key_exists('purchaseViaPlafond', $data) && $data['purchaseViaPlafond'] !== null) {
            $object->setPurchaseViaPlafond($data['purchaseViaPlafond']);
            unset($data['purchaseViaPlafond']);
        } elseif (\array_key_exists('purchaseViaPlafond', $data) && $data['purchaseViaPlafond'] === null) {
            $object->setPurchaseViaPlafond(null);
        }
        if (\array_key_exists('quotationEmailAddressesId', $data) && $data['quotationEmailAddressesId'] !== null) {
            $object->setQuotationEmailAddressesId($data['quotationEmailAddressesId']);
            unset($data['quotationEmailAddressesId']);
        } elseif (\array_key_exists('quotationEmailAddressesId', $data) && $data['quotationEmailAddressesId'] === null) {
            $object->setQuotationEmailAddressesId(null);
        }
        if (\array_key_exists('ratingId', $data) && $data['ratingId'] !== null) {
            $object->setRatingId($data['ratingId']);
            unset($data['ratingId']);
        } elseif (\array_key_exists('ratingId', $data) && $data['ratingId'] === null) {
            $object->setRatingId(null);
        }
        if (\array_key_exists('ratingName', $data) && $data['ratingName'] !== null) {
            $object->setRatingName($data['ratingName']);
            unset($data['ratingName']);
        } elseif (\array_key_exists('ratingName', $data) && $data['ratingName'] === null) {
            $object->setRatingName(null);
        }
        if (\array_key_exists('referenceNumber', $data) && $data['referenceNumber'] !== null) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        } elseif (\array_key_exists('referenceNumber', $data) && $data['referenceNumber'] === null) {
            $object->setReferenceNumber(null);
        }
        if (\array_key_exists('regionId', $data) && $data['regionId'] !== null) {
            $object->setRegionId($data['regionId']);
            unset($data['regionId']);
        } elseif (\array_key_exists('regionId', $data) && $data['regionId'] === null) {
            $object->setRegionId(null);
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
        if (\array_key_exists('salesInvoiceEmailAddressesId', $data) && $data['salesInvoiceEmailAddressesId'] !== null) {
            $object->setSalesInvoiceEmailAddressesId($data['salesInvoiceEmailAddressesId']);
            unset($data['salesInvoiceEmailAddressesId']);
        } elseif (\array_key_exists('salesInvoiceEmailAddressesId', $data) && $data['salesInvoiceEmailAddressesId'] === null) {
            $object->setSalesInvoiceEmailAddressesId(null);
        }
        if (\array_key_exists('salesOrderEmailAddressesId', $data) && $data['salesOrderEmailAddressesId'] !== null) {
            $object->setSalesOrderEmailAddressesId($data['salesOrderEmailAddressesId']);
            unset($data['salesOrderEmailAddressesId']);
        } elseif (\array_key_exists('salesOrderEmailAddressesId', $data) && $data['salesOrderEmailAddressesId'] === null) {
            $object->setSalesOrderEmailAddressesId(null);
        }
        if (\array_key_exists('salesPartner', $data) && $data['salesPartner'] !== null) {
            $object->setSalesPartner($data['salesPartner']);
            unset($data['salesPartner']);
        } elseif (\array_key_exists('salesPartner', $data) && $data['salesPartner'] === null) {
            $object->setSalesPartner(null);
        }
        if (\array_key_exists('salesPartnerDefaultCommissionFix', $data) && $data['salesPartnerDefaultCommissionFix'] !== null) {
            $object->setSalesPartnerDefaultCommissionFix($data['salesPartnerDefaultCommissionFix']);
            unset($data['salesPartnerDefaultCommissionFix']);
        } elseif (\array_key_exists('salesPartnerDefaultCommissionFix', $data) && $data['salesPartnerDefaultCommissionFix'] === null) {
            $object->setSalesPartnerDefaultCommissionFix(null);
        }
        if (\array_key_exists('salesPartnerDefaultCommissionPercentage', $data) && $data['salesPartnerDefaultCommissionPercentage'] !== null) {
            $object->setSalesPartnerDefaultCommissionPercentage($data['salesPartnerDefaultCommissionPercentage']);
            unset($data['salesPartnerDefaultCommissionPercentage']);
        } elseif (\array_key_exists('salesPartnerDefaultCommissionPercentage', $data) && $data['salesPartnerDefaultCommissionPercentage'] === null) {
            $object->setSalesPartnerDefaultCommissionPercentage(null);
        }
        if (\array_key_exists('salesPartnerDefaultCommissionType', $data) && $data['salesPartnerDefaultCommissionType'] !== null) {
            $object->setSalesPartnerDefaultCommissionType($data['salesPartnerDefaultCommissionType']);
            unset($data['salesPartnerDefaultCommissionType']);
        } elseif (\array_key_exists('salesPartnerDefaultCommissionType', $data) && $data['salesPartnerDefaultCommissionType'] === null) {
            $object->setSalesPartnerDefaultCommissionType(null);
        }
        if (\array_key_exists('sectorId', $data) && $data['sectorId'] !== null) {
            $object->setSectorId($data['sectorId']);
            unset($data['sectorId']);
        } elseif (\array_key_exists('sectorId', $data) && $data['sectorId'] === null) {
            $object->setSectorId(null);
        }
        if (\array_key_exists('sectorName', $data) && $data['sectorName'] !== null) {
            $object->setSectorName($data['sectorName']);
            unset($data['sectorName']);
        } elseif (\array_key_exists('sectorName', $data) && $data['sectorName'] === null) {
            $object->setSectorName(null);
        }
        if (\array_key_exists('supplier', $data) && $data['supplier'] !== null) {
            $object->setSupplier($data['supplier']);
            unset($data['supplier']);
        } elseif (\array_key_exists('supplier', $data) && $data['supplier'] === null) {
            $object->setSupplier(null);
        }
        if (\array_key_exists('supplierCreditorAccountId', $data) && $data['supplierCreditorAccountId'] !== null) {
            $object->setSupplierCreditorAccountId($data['supplierCreditorAccountId']);
            unset($data['supplierCreditorAccountId']);
        } elseif (\array_key_exists('supplierCreditorAccountId', $data) && $data['supplierCreditorAccountId'] === null) {
            $object->setSupplierCreditorAccountId(null);
        }
        if (\array_key_exists('supplierCreditorAccountNumber', $data) && $data['supplierCreditorAccountNumber'] !== null) {
            $object->setSupplierCreditorAccountNumber($data['supplierCreditorAccountNumber']);
            unset($data['supplierCreditorAccountNumber']);
        } elseif (\array_key_exists('supplierCreditorAccountNumber', $data) && $data['supplierCreditorAccountNumber'] === null) {
            $object->setSupplierCreditorAccountNumber(null);
        }
        if (\array_key_exists('supplierCreditorAccountingCodeId', $data) && $data['supplierCreditorAccountingCodeId'] !== null) {
            $object->setSupplierCreditorAccountingCodeId($data['supplierCreditorAccountingCodeId']);
            unset($data['supplierCreditorAccountingCodeId']);
        } elseif (\array_key_exists('supplierCreditorAccountingCodeId', $data) && $data['supplierCreditorAccountingCodeId'] === null) {
            $object->setSupplierCreditorAccountingCodeId(null);
        }
        if (\array_key_exists('supplierCustomerNumberAtSupplier', $data) && $data['supplierCustomerNumberAtSupplier'] !== null) {
            $object->setSupplierCustomerNumberAtSupplier($data['supplierCustomerNumberAtSupplier']);
            unset($data['supplierCustomerNumberAtSupplier']);
        } elseif (\array_key_exists('supplierCustomerNumberAtSupplier', $data) && $data['supplierCustomerNumberAtSupplier'] === null) {
            $object->setSupplierCustomerNumberAtSupplier(null);
        }
        if (\array_key_exists('supplierDefaultShippingCarrierId', $data) && $data['supplierDefaultShippingCarrierId'] !== null) {
            $object->setSupplierDefaultShippingCarrierId($data['supplierDefaultShippingCarrierId']);
            unset($data['supplierDefaultShippingCarrierId']);
        } elseif (\array_key_exists('supplierDefaultShippingCarrierId', $data) && $data['supplierDefaultShippingCarrierId'] === null) {
            $object->setSupplierDefaultShippingCarrierId(null);
        }
        if (\array_key_exists('supplierInternalNote', $data) && $data['supplierInternalNote'] !== null) {
            $object->setSupplierInternalNote($data['supplierInternalNote']);
            unset($data['supplierInternalNote']);
        } elseif (\array_key_exists('supplierInternalNote', $data) && $data['supplierInternalNote'] === null) {
            $object->setSupplierInternalNote(null);
        }
        if (\array_key_exists('supplierMinimumPurchaseOrderAmount', $data) && $data['supplierMinimumPurchaseOrderAmount'] !== null) {
            $object->setSupplierMinimumPurchaseOrderAmount($data['supplierMinimumPurchaseOrderAmount']);
            unset($data['supplierMinimumPurchaseOrderAmount']);
        } elseif (\array_key_exists('supplierMinimumPurchaseOrderAmount', $data) && $data['supplierMinimumPurchaseOrderAmount'] === null) {
            $object->setSupplierMinimumPurchaseOrderAmount(null);
        }
        if (\array_key_exists('supplierNonStandardTaxId', $data) && $data['supplierNonStandardTaxId'] !== null) {
            $object->setSupplierNonStandardTaxId($data['supplierNonStandardTaxId']);
            unset($data['supplierNonStandardTaxId']);
        } elseif (\array_key_exists('supplierNonStandardTaxId', $data) && $data['supplierNonStandardTaxId'] === null) {
            $object->setSupplierNonStandardTaxId(null);
        }
        if (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] !== null) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        } elseif (\array_key_exists('supplierNumber', $data) && $data['supplierNumber'] === null) {
            $object->setSupplierNumber(null);
        }
        if (\array_key_exists('supplierNumberOld', $data) && $data['supplierNumberOld'] !== null) {
            $object->setSupplierNumberOld($data['supplierNumberOld']);
            unset($data['supplierNumberOld']);
        } elseif (\array_key_exists('supplierNumberOld', $data) && $data['supplierNumberOld'] === null) {
            $object->setSupplierNumberOld(null);
        }
        if (\array_key_exists('supplierOrderBlock', $data) && $data['supplierOrderBlock'] !== null) {
            $object->setSupplierOrderBlock($data['supplierOrderBlock']);
            unset($data['supplierOrderBlock']);
        } elseif (\array_key_exists('supplierOrderBlock', $data) && $data['supplierOrderBlock'] === null) {
            $object->setSupplierOrderBlock(null);
        }
        if (\array_key_exists('supplierPaymentMethodId', $data) && $data['supplierPaymentMethodId'] !== null) {
            $object->setSupplierPaymentMethodId($data['supplierPaymentMethodId']);
            unset($data['supplierPaymentMethodId']);
        } elseif (\array_key_exists('supplierPaymentMethodId', $data) && $data['supplierPaymentMethodId'] === null) {
            $object->setSupplierPaymentMethodId(null);
        }
        if (\array_key_exists('supplierPaymentMethodName', $data) && $data['supplierPaymentMethodName'] !== null) {
            $object->setSupplierPaymentMethodName($data['supplierPaymentMethodName']);
            unset($data['supplierPaymentMethodName']);
        } elseif (\array_key_exists('supplierPaymentMethodName', $data) && $data['supplierPaymentMethodName'] === null) {
            $object->setSupplierPaymentMethodName(null);
        }
        if (\array_key_exists('supplierShipmentMethodId', $data) && $data['supplierShipmentMethodId'] !== null) {
            $object->setSupplierShipmentMethodId($data['supplierShipmentMethodId']);
            unset($data['supplierShipmentMethodId']);
        } elseif (\array_key_exists('supplierShipmentMethodId', $data) && $data['supplierShipmentMethodId'] === null) {
            $object->setSupplierShipmentMethodId(null);
        }
        if (\array_key_exists('supplierShipmentMethodName', $data) && $data['supplierShipmentMethodName'] !== null) {
            $object->setSupplierShipmentMethodName($data['supplierShipmentMethodName']);
            unset($data['supplierShipmentMethodName']);
        } elseif (\array_key_exists('supplierShipmentMethodName', $data) && $data['supplierShipmentMethodName'] === null) {
            $object->setSupplierShipmentMethodName(null);
        }
        if (\array_key_exists('supplierTermOfPaymentId', $data) && $data['supplierTermOfPaymentId'] !== null) {
            $object->setSupplierTermOfPaymentId($data['supplierTermOfPaymentId']);
            unset($data['supplierTermOfPaymentId']);
        } elseif (\array_key_exists('supplierTermOfPaymentId', $data) && $data['supplierTermOfPaymentId'] === null) {
            $object->setSupplierTermOfPaymentId(null);
        }
        if (\array_key_exists('supplierTermOfPaymentName', $data) && $data['supplierTermOfPaymentName'] !== null) {
            $object->setSupplierTermOfPaymentName($data['supplierTermOfPaymentName']);
            unset($data['supplierTermOfPaymentName']);
        } elseif (\array_key_exists('supplierTermOfPaymentName', $data) && $data['supplierTermOfPaymentName'] === null) {
            $object->setSupplierTermOfPaymentName(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        } elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('topics', $data) && $data['topics'] !== null) {
            $values_10 = [];
            foreach ($data['topics'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, \Webhubworks\WeclappApiCore\Model\Entity::class, 'json', $context);
            }
            $object->setTopics($values_10);
            unset($data['topics']);
        } elseif (\array_key_exists('topics', $data) && $data['topics'] === null) {
            $object->setTopics(null);
        }
        if (\array_key_exists('vatIdentificationNumber', $data) && $data['vatIdentificationNumber'] !== null) {
            $object->setVatIdentificationNumber($data['vatIdentificationNumber']);
            unset($data['vatIdentificationNumber']);
        } elseif (\array_key_exists('vatIdentificationNumber', $data) && $data['vatIdentificationNumber'] === null) {
            $object->setVatIdentificationNumber(null);
        }
        if (\array_key_exists('xRechnungLeitwegId', $data) && $data['xRechnungLeitwegId'] !== null) {
            $object->setXRechnungLeitwegId($data['xRechnungLeitwegId']);
            unset($data['xRechnungLeitwegId']);
        } elseif (\array_key_exists('xRechnungLeitwegId', $data) && $data['xRechnungLeitwegId'] === null) {
            $object->setXRechnungLeitwegId(null);
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
        if ($data->isInitialized('addresses') && $data->getAddresses() !== null) {
            $values_1 = [];
            foreach ($data->getAddresses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['addresses'] = $values_1;
        }
        if ($data->isInitialized('birthDate') && $data->getBirthDate() !== null) {
            $dataArray['birthDate'] = $data->getBirthDate();
        }
        if ($data->isInitialized('company') && $data->getCompany() !== null) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('company2') && $data->getCompany2() !== null) {
            $dataArray['company2'] = $data->getCompany2();
        }
        if ($data->isInitialized('deliveryAddressId') && $data->getDeliveryAddressId() !== null) {
            $dataArray['deliveryAddressId'] = $data->getDeliveryAddressId();
        }
        if ($data->isInitialized('email') && $data->getEmail() !== null) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('fax') && $data->getFax() !== null) {
            $dataArray['fax'] = $data->getFax();
        }
        if ($data->isInitialized('firstName') && $data->getFirstName() !== null) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('invoiceAddressId') && $data->getInvoiceAddressId() !== null) {
            $dataArray['invoiceAddressId'] = $data->getInvoiceAddressId();
        }
        if ($data->isInitialized('lastName') && $data->getLastName() !== null) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('middleName') && $data->getMiddleName() !== null) {
            $dataArray['middleName'] = $data->getMiddleName();
        }
        if ($data->isInitialized('mobilePhone1') && $data->getMobilePhone1() !== null) {
            $dataArray['mobilePhone1'] = $data->getMobilePhone1();
        }
        if ($data->isInitialized('onlineAccounts') && $data->getOnlineAccounts() !== null) {
            $values_2 = [];
            foreach ($data->getOnlineAccounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['onlineAccounts'] = $values_2;
        }
        if ($data->isInitialized('partyType') && $data->getPartyType() !== null) {
            $dataArray['partyType'] = $data->getPartyType();
        }
        if ($data->isInitialized('personCompany') && $data->getPersonCompany() !== null) {
            $dataArray['personCompany'] = $data->getPersonCompany();
        }
        if ($data->isInitialized('personDepartmentId') && $data->getPersonDepartmentId() !== null) {
            $dataArray['personDepartmentId'] = $data->getPersonDepartmentId();
        }
        if ($data->isInitialized('personRoleId') && $data->getPersonRoleId() !== null) {
            $dataArray['personRoleId'] = $data->getPersonRoleId();
        }
        if ($data->isInitialized('phone') && $data->getPhone() !== null) {
            $dataArray['phone'] = $data->getPhone();
        }
        if ($data->isInitialized('primaryAddressId') && $data->getPrimaryAddressId() !== null) {
            $dataArray['primaryAddressId'] = $data->getPrimaryAddressId();
        }
        if ($data->isInitialized('salutation') && $data->getSalutation() !== null) {
            $dataArray['salutation'] = $data->getSalutation();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_3 = [];
            foreach ($data->getTags() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['tags'] = $values_3;
        }
        if ($data->isInitialized('title') && $data->getTitle() !== null) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('titleId') && $data->getTitleId() !== null) {
            $dataArray['titleId'] = $data->getTitleId();
        }
        if ($data->isInitialized('website') && $data->getWebsite() !== null) {
            $dataArray['website'] = $data->getWebsite();
        }
        if ($data->isInitialized('allowPurchaseOrderCreation') && $data->getAllowPurchaseOrderCreation() !== null) {
            $dataArray['allowPurchaseOrderCreation'] = $data->getAllowPurchaseOrderCreation();
        }
        if ($data->isInitialized('bankAccounts') && $data->getBankAccounts() !== null) {
            $values_4 = [];
            foreach ($data->getBankAccounts() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['bankAccounts'] = $values_4;
        }
        if ($data->isInitialized('commercialLanguageId') && $data->getCommercialLanguageId() !== null) {
            $dataArray['commercialLanguageId'] = $data->getCommercialLanguageId();
        }
        if ($data->isInitialized('commissionBlock') && $data->getCommissionBlock() !== null) {
            $dataArray['commissionBlock'] = $data->getCommissionBlock();
        }
        if ($data->isInitialized('commissionSalesPartners') && $data->getCommissionSalesPartners() !== null) {
            $values_5 = [];
            foreach ($data->getCommissionSalesPartners() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_5;
        }
        if ($data->isInitialized('companySizeId') && $data->getCompanySizeId() !== null) {
            $dataArray['companySizeId'] = $data->getCompanySizeId();
        }
        if ($data->isInitialized('companySizeName') && $data->getCompanySizeName() !== null) {
            $dataArray['companySizeName'] = $data->getCompanySizeName();
        }
        if ($data->isInitialized('competitor') && $data->getCompetitor() !== null) {
            $dataArray['competitor'] = $data->getCompetitor();
        }
        if ($data->isInitialized('contacts') && $data->getContacts() !== null) {
            $values_6 = [];
            foreach ($data->getContacts() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['contacts'] = $values_6;
        }
        if ($data->isInitialized('currencyId') && $data->getCurrencyId() !== null) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && $data->getCurrencyName() !== null) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('customer') && $data->getCustomer() !== null) {
            $dataArray['customer'] = $data->getCustomer();
        }
        if ($data->isInitialized('customerAllowDropshippingOrderCreation') && $data->getCustomerAllowDropshippingOrderCreation() !== null) {
            $dataArray['customerAllowDropshippingOrderCreation'] = $data->getCustomerAllowDropshippingOrderCreation();
        }
        if ($data->isInitialized('customerAmountInsured') && $data->getCustomerAmountInsured() !== null) {
            $dataArray['customerAmountInsured'] = $data->getCustomerAmountInsured();
        }
        if ($data->isInitialized('customerAnnualRevenue') && $data->getCustomerAnnualRevenue() !== null) {
            $dataArray['customerAnnualRevenue'] = $data->getCustomerAnnualRevenue();
        }
        if ($data->isInitialized('customerBlockNotice') && $data->getCustomerBlockNotice() !== null) {
            $dataArray['customerBlockNotice'] = $data->getCustomerBlockNotice();
        }
        if ($data->isInitialized('customerBlocked') && $data->getCustomerBlocked() !== null) {
            $dataArray['customerBlocked'] = $data->getCustomerBlocked();
        }
        if ($data->isInitialized('customerBusinessType') && $data->getCustomerBusinessType() !== null) {
            $dataArray['customerBusinessType'] = $data->getCustomerBusinessType();
        }
        if ($data->isInitialized('customerCategoryId') && $data->getCustomerCategoryId() !== null) {
            $dataArray['customerCategoryId'] = $data->getCustomerCategoryId();
        }
        if ($data->isInitialized('customerCategoryName') && $data->getCustomerCategoryName() !== null) {
            $dataArray['customerCategoryName'] = $data->getCustomerCategoryName();
        }
        if ($data->isInitialized('customerCreditLimit') && $data->getCustomerCreditLimit() !== null) {
            $dataArray['customerCreditLimit'] = $data->getCustomerCreditLimit();
        }
        if ($data->isInitialized('customerCurrentSalesStageId') && $data->getCustomerCurrentSalesStageId() !== null) {
            $dataArray['customerCurrentSalesStageId'] = $data->getCustomerCurrentSalesStageId();
        }
        if ($data->isInitialized('customerCurrentSalesStageName') && $data->getCustomerCurrentSalesStageName() !== null) {
            $dataArray['customerCurrentSalesStageName'] = $data->getCustomerCurrentSalesStageName();
        }
        if ($data->isInitialized('customerDebtorAccountId') && $data->getCustomerDebtorAccountId() !== null) {
            $dataArray['customerDebtorAccountId'] = $data->getCustomerDebtorAccountId();
        }
        if ($data->isInitialized('customerDebtorAccountNumber') && $data->getCustomerDebtorAccountNumber() !== null) {
            $dataArray['customerDebtorAccountNumber'] = $data->getCustomerDebtorAccountNumber();
        }
        if ($data->isInitialized('customerDebtorAccountingCodeId') && $data->getCustomerDebtorAccountingCodeId() !== null) {
            $dataArray['customerDebtorAccountingCodeId'] = $data->getCustomerDebtorAccountingCodeId();
        }
        if ($data->isInitialized('customerDefaultHeaderDiscount') && $data->getCustomerDefaultHeaderDiscount() !== null) {
            $dataArray['customerDefaultHeaderDiscount'] = $data->getCustomerDefaultHeaderDiscount();
        }
        if ($data->isInitialized('customerDefaultHeaderSurcharge') && $data->getCustomerDefaultHeaderSurcharge() !== null) {
            $dataArray['customerDefaultHeaderSurcharge'] = $data->getCustomerDefaultHeaderSurcharge();
        }
        if ($data->isInitialized('customerDefaultShippingCarrierId') && $data->getCustomerDefaultShippingCarrierId() !== null) {
            $dataArray['customerDefaultShippingCarrierId'] = $data->getCustomerDefaultShippingCarrierId();
        }
        if ($data->isInitialized('customerDeliveryBlock') && $data->getCustomerDeliveryBlock() !== null) {
            $dataArray['customerDeliveryBlock'] = $data->getCustomerDeliveryBlock();
        }
        if ($data->isInitialized('customerInsolvent') && $data->getCustomerInsolvent() !== null) {
            $dataArray['customerInsolvent'] = $data->getCustomerInsolvent();
        }
        if ($data->isInitialized('customerInsured') && $data->getCustomerInsured() !== null) {
            $dataArray['customerInsured'] = $data->getCustomerInsured();
        }
        if ($data->isInitialized('customerInternalNote') && $data->getCustomerInternalNote() !== null) {
            $dataArray['customerInternalNote'] = $data->getCustomerInternalNote();
        }
        if ($data->isInitialized('customerLossDescription') && $data->getCustomerLossDescription() !== null) {
            $dataArray['customerLossDescription'] = $data->getCustomerLossDescription();
        }
        if ($data->isInitialized('customerLossReasonId') && $data->getCustomerLossReasonId() !== null) {
            $dataArray['customerLossReasonId'] = $data->getCustomerLossReasonId();
        }
        if ($data->isInitialized('customerLossReasonName') && $data->getCustomerLossReasonName() !== null) {
            $dataArray['customerLossReasonName'] = $data->getCustomerLossReasonName();
        }
        if ($data->isInitialized('customerNonStandardTaxId') && $data->getCustomerNonStandardTaxId() !== null) {
            $dataArray['customerNonStandardTaxId'] = $data->getCustomerNonStandardTaxId();
        }
        if ($data->isInitialized('customerNumber') && $data->getCustomerNumber() !== null) {
            $dataArray['customerNumber'] = $data->getCustomerNumber();
        }
        if ($data->isInitialized('customerNumberOld') && $data->getCustomerNumberOld() !== null) {
            $dataArray['customerNumberOld'] = $data->getCustomerNumberOld();
        }
        if ($data->isInitialized('customerPaymentMethodId') && $data->getCustomerPaymentMethodId() !== null) {
            $dataArray['customerPaymentMethodId'] = $data->getCustomerPaymentMethodId();
        }
        if ($data->isInitialized('customerPaymentMethodName') && $data->getCustomerPaymentMethodName() !== null) {
            $dataArray['customerPaymentMethodName'] = $data->getCustomerPaymentMethodName();
        }
        if ($data->isInitialized('customerSalesChannel') && $data->getCustomerSalesChannel() !== null) {
            $dataArray['customerSalesChannel'] = $data->getCustomerSalesChannel();
        }
        if ($data->isInitialized('customerSalesOrderPaymentType') && $data->getCustomerSalesOrderPaymentType() !== null) {
            $dataArray['customerSalesOrderPaymentType'] = $data->getCustomerSalesOrderPaymentType();
        }
        if ($data->isInitialized('customerSalesProbability') && $data->getCustomerSalesProbability() !== null) {
            $dataArray['customerSalesProbability'] = $data->getCustomerSalesProbability();
        }
        if ($data->isInitialized('customerSalesStageHistory') && $data->getCustomerSalesStageHistory() !== null) {
            $values_7 = [];
            foreach ($data->getCustomerSalesStageHistory() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['customerSalesStageHistory'] = $values_7;
        }
        if ($data->isInitialized('customerSatisfaction') && $data->getCustomerSatisfaction() !== null) {
            $dataArray['customerSatisfaction'] = $data->getCustomerSatisfaction();
        }
        if ($data->isInitialized('customerShipmentMethodId') && $data->getCustomerShipmentMethodId() !== null) {
            $dataArray['customerShipmentMethodId'] = $data->getCustomerShipmentMethodId();
        }
        if ($data->isInitialized('customerShipmentMethodName') && $data->getCustomerShipmentMethodName() !== null) {
            $dataArray['customerShipmentMethodName'] = $data->getCustomerShipmentMethodName();
        }
        if ($data->isInitialized('customerSupplierNumber') && $data->getCustomerSupplierNumber() !== null) {
            $dataArray['customerSupplierNumber'] = $data->getCustomerSupplierNumber();
        }
        if ($data->isInitialized('customerTermOfPaymentId') && $data->getCustomerTermOfPaymentId() !== null) {
            $dataArray['customerTermOfPaymentId'] = $data->getCustomerTermOfPaymentId();
        }
        if ($data->isInitialized('customerTermOfPaymentName') && $data->getCustomerTermOfPaymentName() !== null) {
            $dataArray['customerTermOfPaymentName'] = $data->getCustomerTermOfPaymentName();
        }
        if ($data->isInitialized('customerUseCustomsTariffNumber') && $data->getCustomerUseCustomsTariffNumber() !== null) {
            $dataArray['customerUseCustomsTariffNumber'] = $data->getCustomerUseCustomsTariffNumber();
        }
        if ($data->isInitialized('deliveryEmailAddressesId') && $data->getDeliveryEmailAddressesId() !== null) {
            $dataArray['deliveryEmailAddressesId'] = $data->getDeliveryEmailAddressesId();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('dunningAddressId') && $data->getDunningAddressId() !== null) {
            $dataArray['dunningAddressId'] = $data->getDunningAddressId();
        }
        if ($data->isInitialized('dunningEmailAddressesId') && $data->getDunningEmailAddressesId() !== null) {
            $dataArray['dunningEmailAddressesId'] = $data->getDunningEmailAddressesId();
        }
        if ($data->isInitialized('enableDropshippingInNewSupplySources') && $data->getEnableDropshippingInNewSupplySources() !== null) {
            $dataArray['enableDropshippingInNewSupplySources'] = $data->getEnableDropshippingInNewSupplySources();
        }
        if ($data->isInitialized('eoriNumber') && $data->getEoriNumber() !== null) {
            $dataArray['eoriNumber'] = $data->getEoriNumber();
        }
        if ($data->isInitialized('factoring') && $data->getFactoring() !== null) {
            $dataArray['factoring'] = $data->getFactoring();
        }
        if ($data->isInitialized('fixPhone2') && $data->getFixPhone2() !== null) {
            $dataArray['fixPhone2'] = $data->getFixPhone2();
        }
        if ($data->isInitialized('fixedResponsibleUser') && $data->getFixedResponsibleUser() !== null) {
            $dataArray['fixedResponsibleUser'] = $data->getFixedResponsibleUser();
        }
        if ($data->isInitialized('formerSalesPartner') && $data->getFormerSalesPartner() !== null) {
            $dataArray['formerSalesPartner'] = $data->getFormerSalesPartner();
        }
        if ($data->isInitialized('habitualExporter') && $data->getHabitualExporter() !== null) {
            $dataArray['habitualExporter'] = $data->getHabitualExporter();
        }
        if ($data->isInitialized('imageId') && $data->getImageId() !== null) {
            $dataArray['imageId'] = $data->getImageId();
        }
        if ($data->isInitialized('invoiceBlock') && $data->getInvoiceBlock() !== null) {
            $dataArray['invoiceBlock'] = $data->getInvoiceBlock();
        }
        if ($data->isInitialized('invoiceRecipientId') && $data->getInvoiceRecipientId() !== null) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('leadRatingId') && $data->getLeadRatingId() !== null) {
            $dataArray['leadRatingId'] = $data->getLeadRatingId();
        }
        if ($data->isInitialized('leadRatingName') && $data->getLeadRatingName() !== null) {
            $dataArray['leadRatingName'] = $data->getLeadRatingName();
        }
        if ($data->isInitialized('leadSourceId') && $data->getLeadSourceId() !== null) {
            $dataArray['leadSourceId'] = $data->getLeadSourceId();
        }
        if ($data->isInitialized('leadSourceName') && $data->getLeadSourceName() !== null) {
            $dataArray['leadSourceName'] = $data->getLeadSourceName();
        }
        if ($data->isInitialized('leadStatus') && $data->getLeadStatus() !== null) {
            $dataArray['leadStatus'] = $data->getLeadStatus();
        }
        if ($data->isInitialized('legalFormId') && $data->getLegalFormId() !== null) {
            $dataArray['legalFormId'] = $data->getLegalFormId();
        }
        if ($data->isInitialized('legalFormName') && $data->getLegalFormName() !== null) {
            $dataArray['legalFormName'] = $data->getLegalFormName();
        }
        if ($data->isInitialized('mobilePhone2') && $data->getMobilePhone2() !== null) {
            $dataArray['mobilePhone2'] = $data->getMobilePhone2();
        }
        if ($data->isInitialized('optInEmail') && $data->getOptInEmail() !== null) {
            $dataArray['optInEmail'] = $data->getOptInEmail();
        }
        if ($data->isInitialized('optInLetter') && $data->getOptInLetter() !== null) {
            $dataArray['optInLetter'] = $data->getOptInLetter();
        }
        if ($data->isInitialized('optInPhone') && $data->getOptInPhone() !== null) {
            $dataArray['optInPhone'] = $data->getOptInPhone();
        }
        if ($data->isInitialized('optInSms') && $data->getOptInSms() !== null) {
            $dataArray['optInSms'] = $data->getOptInSms();
        }
        if ($data->isInitialized('parentPartyId') && $data->getParentPartyId() !== null) {
            $dataArray['parentPartyId'] = $data->getParentPartyId();
        }
        if ($data->isInitialized('partyEmailAddresses') && $data->getPartyEmailAddresses() !== null) {
            $values_8 = [];
            foreach ($data->getPartyEmailAddresses() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['partyEmailAddresses'] = $values_8;
        }
        if ($data->isInitialized('partyHabitualExporterLettersOfIntent') && $data->getPartyHabitualExporterLettersOfIntent() !== null) {
            $values_9 = [];
            foreach ($data->getPartyHabitualExporterLettersOfIntent() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $dataArray['partyHabitualExporterLettersOfIntent'] = $values_9;
        }
        if ($data->isInitialized('phoneHome') && $data->getPhoneHome() !== null) {
            $dataArray['phoneHome'] = $data->getPhoneHome();
        }
        if ($data->isInitialized('primaryContactId') && $data->getPrimaryContactId() !== null) {
            $dataArray['primaryContactId'] = $data->getPrimaryContactId();
        }
        if ($data->isInitialized('publicPageExpirationDate') && $data->getPublicPageExpirationDate() !== null) {
            $dataArray['publicPageExpirationDate'] = $data->getPublicPageExpirationDate();
        }
        if ($data->isInitialized('publicPageUuid') && $data->getPublicPageUuid() !== null) {
            $dataArray['publicPageUuid'] = $data->getPublicPageUuid();
        }
        if ($data->isInitialized('purchaseEmailAddressesId') && $data->getPurchaseEmailAddressesId() !== null) {
            $dataArray['purchaseEmailAddressesId'] = $data->getPurchaseEmailAddressesId();
        }
        if ($data->isInitialized('purchaseViaPlafond') && $data->getPurchaseViaPlafond() !== null) {
            $dataArray['purchaseViaPlafond'] = $data->getPurchaseViaPlafond();
        }
        if ($data->isInitialized('quotationEmailAddressesId') && $data->getQuotationEmailAddressesId() !== null) {
            $dataArray['quotationEmailAddressesId'] = $data->getQuotationEmailAddressesId();
        }
        if ($data->isInitialized('ratingId') && $data->getRatingId() !== null) {
            $dataArray['ratingId'] = $data->getRatingId();
        }
        if ($data->isInitialized('ratingName') && $data->getRatingName() !== null) {
            $dataArray['ratingName'] = $data->getRatingName();
        }
        if ($data->isInitialized('referenceNumber') && $data->getReferenceNumber() !== null) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('regionId') && $data->getRegionId() !== null) {
            $dataArray['regionId'] = $data->getRegionId();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && $data->getResponsibleUserUsername() !== null) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('salesInvoiceEmailAddressesId') && $data->getSalesInvoiceEmailAddressesId() !== null) {
            $dataArray['salesInvoiceEmailAddressesId'] = $data->getSalesInvoiceEmailAddressesId();
        }
        if ($data->isInitialized('salesOrderEmailAddressesId') && $data->getSalesOrderEmailAddressesId() !== null) {
            $dataArray['salesOrderEmailAddressesId'] = $data->getSalesOrderEmailAddressesId();
        }
        if ($data->isInitialized('salesPartner') && $data->getSalesPartner() !== null) {
            $dataArray['salesPartner'] = $data->getSalesPartner();
        }
        if ($data->isInitialized('salesPartnerDefaultCommissionFix') && $data->getSalesPartnerDefaultCommissionFix() !== null) {
            $dataArray['salesPartnerDefaultCommissionFix'] = $data->getSalesPartnerDefaultCommissionFix();
        }
        if ($data->isInitialized('salesPartnerDefaultCommissionPercentage') && $data->getSalesPartnerDefaultCommissionPercentage() !== null) {
            $dataArray['salesPartnerDefaultCommissionPercentage'] = $data->getSalesPartnerDefaultCommissionPercentage();
        }
        if ($data->isInitialized('salesPartnerDefaultCommissionType') && $data->getSalesPartnerDefaultCommissionType() !== null) {
            $dataArray['salesPartnerDefaultCommissionType'] = $data->getSalesPartnerDefaultCommissionType();
        }
        if ($data->isInitialized('sectorId') && $data->getSectorId() !== null) {
            $dataArray['sectorId'] = $data->getSectorId();
        }
        if ($data->isInitialized('sectorName') && $data->getSectorName() !== null) {
            $dataArray['sectorName'] = $data->getSectorName();
        }
        if ($data->isInitialized('supplier') && $data->getSupplier() !== null) {
            $dataArray['supplier'] = $data->getSupplier();
        }
        if ($data->isInitialized('supplierCreditorAccountId') && $data->getSupplierCreditorAccountId() !== null) {
            $dataArray['supplierCreditorAccountId'] = $data->getSupplierCreditorAccountId();
        }
        if ($data->isInitialized('supplierCreditorAccountNumber') && $data->getSupplierCreditorAccountNumber() !== null) {
            $dataArray['supplierCreditorAccountNumber'] = $data->getSupplierCreditorAccountNumber();
        }
        if ($data->isInitialized('supplierCreditorAccountingCodeId') && $data->getSupplierCreditorAccountingCodeId() !== null) {
            $dataArray['supplierCreditorAccountingCodeId'] = $data->getSupplierCreditorAccountingCodeId();
        }
        if ($data->isInitialized('supplierCustomerNumberAtSupplier') && $data->getSupplierCustomerNumberAtSupplier() !== null) {
            $dataArray['supplierCustomerNumberAtSupplier'] = $data->getSupplierCustomerNumberAtSupplier();
        }
        if ($data->isInitialized('supplierDefaultShippingCarrierId') && $data->getSupplierDefaultShippingCarrierId() !== null) {
            $dataArray['supplierDefaultShippingCarrierId'] = $data->getSupplierDefaultShippingCarrierId();
        }
        if ($data->isInitialized('supplierInternalNote') && $data->getSupplierInternalNote() !== null) {
            $dataArray['supplierInternalNote'] = $data->getSupplierInternalNote();
        }
        if ($data->isInitialized('supplierMinimumPurchaseOrderAmount') && $data->getSupplierMinimumPurchaseOrderAmount() !== null) {
            $dataArray['supplierMinimumPurchaseOrderAmount'] = $data->getSupplierMinimumPurchaseOrderAmount();
        }
        if ($data->isInitialized('supplierNonStandardTaxId') && $data->getSupplierNonStandardTaxId() !== null) {
            $dataArray['supplierNonStandardTaxId'] = $data->getSupplierNonStandardTaxId();
        }
        if ($data->isInitialized('supplierNumber') && $data->getSupplierNumber() !== null) {
            $dataArray['supplierNumber'] = $data->getSupplierNumber();
        }
        if ($data->isInitialized('supplierNumberOld') && $data->getSupplierNumberOld() !== null) {
            $dataArray['supplierNumberOld'] = $data->getSupplierNumberOld();
        }
        if ($data->isInitialized('supplierOrderBlock') && $data->getSupplierOrderBlock() !== null) {
            $dataArray['supplierOrderBlock'] = $data->getSupplierOrderBlock();
        }
        if ($data->isInitialized('supplierPaymentMethodId') && $data->getSupplierPaymentMethodId() !== null) {
            $dataArray['supplierPaymentMethodId'] = $data->getSupplierPaymentMethodId();
        }
        if ($data->isInitialized('supplierPaymentMethodName') && $data->getSupplierPaymentMethodName() !== null) {
            $dataArray['supplierPaymentMethodName'] = $data->getSupplierPaymentMethodName();
        }
        if ($data->isInitialized('supplierShipmentMethodId') && $data->getSupplierShipmentMethodId() !== null) {
            $dataArray['supplierShipmentMethodId'] = $data->getSupplierShipmentMethodId();
        }
        if ($data->isInitialized('supplierShipmentMethodName') && $data->getSupplierShipmentMethodName() !== null) {
            $dataArray['supplierShipmentMethodName'] = $data->getSupplierShipmentMethodName();
        }
        if ($data->isInitialized('supplierTermOfPaymentId') && $data->getSupplierTermOfPaymentId() !== null) {
            $dataArray['supplierTermOfPaymentId'] = $data->getSupplierTermOfPaymentId();
        }
        if ($data->isInitialized('supplierTermOfPaymentName') && $data->getSupplierTermOfPaymentName() !== null) {
            $dataArray['supplierTermOfPaymentName'] = $data->getSupplierTermOfPaymentName();
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('topics') && $data->getTopics() !== null) {
            $values_10 = [];
            foreach ($data->getTopics() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $dataArray['topics'] = $values_10;
        }
        if ($data->isInitialized('vatIdentificationNumber') && $data->getVatIdentificationNumber() !== null) {
            $dataArray['vatIdentificationNumber'] = $data->getVatIdentificationNumber();
        }
        if ($data->isInitialized('xRechnungLeitwegId') && $data->getXRechnungLeitwegId() !== null) {
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
