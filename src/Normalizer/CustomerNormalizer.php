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

class CustomerNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Customer::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Customer::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Customer;
        if (\array_key_exists('blocked', $data) && \is_int($data['blocked'])) {
            $data['blocked'] = (bool) $data['blocked'];
        }
        if (\array_key_exists('deliveryBlock', $data) && \is_int($data['deliveryBlock'])) {
            $data['deliveryBlock'] = (bool) $data['deliveryBlock'];
        }
        if (\array_key_exists('insolvent', $data) && \is_int($data['insolvent'])) {
            $data['insolvent'] = (bool) $data['insolvent'];
        }
        if (\array_key_exists('insured', $data) && \is_int($data['insured'])) {
            $data['insured'] = (bool) $data['insured'];
        }
        if (\array_key_exists('invoiceBlock', $data) && \is_int($data['invoiceBlock'])) {
            $data['invoiceBlock'] = (bool) $data['invoiceBlock'];
        }
        if (\array_key_exists('optIn', $data) && \is_int($data['optIn'])) {
            $data['optIn'] = (bool) $data['optIn'];
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
        if (\array_key_exists('responsibleUserFixed', $data) && \is_int($data['responsibleUserFixed'])) {
            $data['responsibleUserFixed'] = (bool) $data['responsibleUserFixed'];
        }
        if (\array_key_exists('useCustomsTariffNumber', $data) && \is_int($data['useCustomsTariffNumber'])) {
            $data['useCustomsTariffNumber'] = (bool) $data['useCustomsTariffNumber'];
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
        if (\array_key_exists('commercialLanguageId', $data) && $data['commercialLanguageId'] !== null) {
            $object->setCommercialLanguageId($data['commercialLanguageId']);
            unset($data['commercialLanguageId']);
        } elseif (\array_key_exists('commercialLanguageId', $data) && $data['commercialLanguageId'] === null) {
            $object->setCommercialLanguageId(null);
        }
        if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
            $values_4 = [];
            foreach ($data['contacts'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\Contact::class, 'json', $context);
            }
            $object->setContacts($values_4);
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
        if (\array_key_exists('primaryContactId', $data) && $data['primaryContactId'] !== null) {
            $object->setPrimaryContactId($data['primaryContactId']);
            unset($data['primaryContactId']);
        } elseif (\array_key_exists('primaryContactId', $data) && $data['primaryContactId'] === null) {
            $object->setPrimaryContactId(null);
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
        if (\array_key_exists('annualRevenue', $data) && $data['annualRevenue'] !== null) {
            $object->setAnnualRevenue($data['annualRevenue']);
            unset($data['annualRevenue']);
        } elseif (\array_key_exists('annualRevenue', $data) && $data['annualRevenue'] === null) {
            $object->setAnnualRevenue(null);
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
        if (\array_key_exists('parentPartyId', $data) && $data['parentPartyId'] !== null) {
            $object->setParentPartyId($data['parentPartyId']);
            unset($data['parentPartyId']);
        } elseif (\array_key_exists('parentPartyId', $data) && $data['parentPartyId'] === null) {
            $object->setParentPartyId(null);
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
        if (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] !== null) {
            $object->setVatRegistrationNumber($data['vatRegistrationNumber']);
            unset($data['vatRegistrationNumber']);
        } elseif (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] === null) {
            $object->setVatRegistrationNumber(null);
        }
        if (\array_key_exists('amountInsured', $data) && $data['amountInsured'] !== null) {
            $object->setAmountInsured($data['amountInsured']);
            unset($data['amountInsured']);
        } elseif (\array_key_exists('amountInsured', $data) && $data['amountInsured'] === null) {
            $object->setAmountInsured(null);
        }
        if (\array_key_exists('bankAccounts', $data) && $data['bankAccounts'] !== null) {
            $values_5 = [];
            foreach ($data['bankAccounts'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class, 'json', $context);
            }
            $object->setBankAccounts($values_5);
            unset($data['bankAccounts']);
        } elseif (\array_key_exists('bankAccounts', $data) && $data['bankAccounts'] === null) {
            $object->setBankAccounts(null);
        }
        if (\array_key_exists('blockNotice', $data) && $data['blockNotice'] !== null) {
            $object->setBlockNotice($data['blockNotice']);
            unset($data['blockNotice']);
        } elseif (\array_key_exists('blockNotice', $data) && $data['blockNotice'] === null) {
            $object->setBlockNotice(null);
        }
        if (\array_key_exists('blocked', $data) && $data['blocked'] !== null) {
            $object->setBlocked($data['blocked']);
            unset($data['blocked']);
        } elseif (\array_key_exists('blocked', $data) && $data['blocked'] === null) {
            $object->setBlocked(null);
        }
        if (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] !== null) {
            $values_6 = [];
            foreach ($data['commissionSalesPartners'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_6);
            unset($data['commissionSalesPartners']);
        } elseif (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] === null) {
            $object->setCommissionSalesPartners(null);
        }
        if (\array_key_exists('creditLimit', $data) && $data['creditLimit'] !== null) {
            $object->setCreditLimit($data['creditLimit']);
            unset($data['creditLimit']);
        } elseif (\array_key_exists('creditLimit', $data) && $data['creditLimit'] === null) {
            $object->setCreditLimit(null);
        }
        if (\array_key_exists('customerNumber', $data) && $data['customerNumber'] !== null) {
            $object->setCustomerNumber($data['customerNumber']);
            unset($data['customerNumber']);
        } elseif (\array_key_exists('customerNumber', $data) && $data['customerNumber'] === null) {
            $object->setCustomerNumber(null);
        }
        if (\array_key_exists('customerRatingId', $data) && $data['customerRatingId'] !== null) {
            $object->setCustomerRatingId($data['customerRatingId']);
            unset($data['customerRatingId']);
        } elseif (\array_key_exists('customerRatingId', $data) && $data['customerRatingId'] === null) {
            $object->setCustomerRatingId(null);
        }
        if (\array_key_exists('customerRatingName', $data) && $data['customerRatingName'] !== null) {
            $object->setCustomerRatingName($data['customerRatingName']);
            unset($data['customerRatingName']);
        } elseif (\array_key_exists('customerRatingName', $data) && $data['customerRatingName'] === null) {
            $object->setCustomerRatingName(null);
        }
        if (\array_key_exists('customerSupplierNumber', $data) && $data['customerSupplierNumber'] !== null) {
            $object->setCustomerSupplierNumber($data['customerSupplierNumber']);
            unset($data['customerSupplierNumber']);
        } elseif (\array_key_exists('customerSupplierNumber', $data) && $data['customerSupplierNumber'] === null) {
            $object->setCustomerSupplierNumber(null);
        }
        if (\array_key_exists('customerTopics', $data) && $data['customerTopics'] !== null) {
            $values_7 = [];
            foreach ($data['customerTopics'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\Entity::class, 'json', $context);
            }
            $object->setCustomerTopics($values_7);
            unset($data['customerTopics']);
        } elseif (\array_key_exists('customerTopics', $data) && $data['customerTopics'] === null) {
            $object->setCustomerTopics(null);
        }
        if (\array_key_exists('defaultHeaderDiscount', $data) && $data['defaultHeaderDiscount'] !== null) {
            $object->setDefaultHeaderDiscount($data['defaultHeaderDiscount']);
            unset($data['defaultHeaderDiscount']);
        } elseif (\array_key_exists('defaultHeaderDiscount', $data) && $data['defaultHeaderDiscount'] === null) {
            $object->setDefaultHeaderDiscount(null);
        }
        if (\array_key_exists('defaultHeaderSurcharge', $data) && $data['defaultHeaderSurcharge'] !== null) {
            $object->setDefaultHeaderSurcharge($data['defaultHeaderSurcharge']);
            unset($data['defaultHeaderSurcharge']);
        } elseif (\array_key_exists('defaultHeaderSurcharge', $data) && $data['defaultHeaderSurcharge'] === null) {
            $object->setDefaultHeaderSurcharge(null);
        }
        if (\array_key_exists('deliveryBlock', $data) && $data['deliveryBlock'] !== null) {
            $object->setDeliveryBlock($data['deliveryBlock']);
            unset($data['deliveryBlock']);
        } elseif (\array_key_exists('deliveryBlock', $data) && $data['deliveryBlock'] === null) {
            $object->setDeliveryBlock(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('insolvent', $data) && $data['insolvent'] !== null) {
            $object->setInsolvent($data['insolvent']);
            unset($data['insolvent']);
        } elseif (\array_key_exists('insolvent', $data) && $data['insolvent'] === null) {
            $object->setInsolvent(null);
        }
        if (\array_key_exists('insured', $data) && $data['insured'] !== null) {
            $object->setInsured($data['insured']);
            unset($data['insured']);
        } elseif (\array_key_exists('insured', $data) && $data['insured'] === null) {
            $object->setInsured(null);
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
        if (\array_key_exists('lossDescription', $data) && $data['lossDescription'] !== null) {
            $object->setLossDescription($data['lossDescription']);
            unset($data['lossDescription']);
        } elseif (\array_key_exists('lossDescription', $data) && $data['lossDescription'] === null) {
            $object->setLossDescription(null);
        }
        if (\array_key_exists('lossReasonId', $data) && $data['lossReasonId'] !== null) {
            $object->setLossReasonId($data['lossReasonId']);
            unset($data['lossReasonId']);
        } elseif (\array_key_exists('lossReasonId', $data) && $data['lossReasonId'] === null) {
            $object->setLossReasonId(null);
        }
        if (\array_key_exists('lossReasonName', $data) && $data['lossReasonName'] !== null) {
            $object->setLossReasonName($data['lossReasonName']);
            unset($data['lossReasonName']);
        } elseif (\array_key_exists('lossReasonName', $data) && $data['lossReasonName'] === null) {
            $object->setLossReasonName(null);
        }
        if (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] !== null) {
            $object->setNonStandardTaxId($data['nonStandardTaxId']);
            unset($data['nonStandardTaxId']);
        } elseif (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] === null) {
            $object->setNonStandardTaxId(null);
        }
        if (\array_key_exists('oldCustomerNumber', $data) && $data['oldCustomerNumber'] !== null) {
            $object->setOldCustomerNumber($data['oldCustomerNumber']);
            unset($data['oldCustomerNumber']);
        } elseif (\array_key_exists('oldCustomerNumber', $data) && $data['oldCustomerNumber'] === null) {
            $object->setOldCustomerNumber(null);
        }
        if (\array_key_exists('optIn', $data) && $data['optIn'] !== null) {
            $object->setOptIn($data['optIn']);
            unset($data['optIn']);
        } elseif (\array_key_exists('optIn', $data) && $data['optIn'] === null) {
            $object->setOptIn(null);
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
        if (\array_key_exists('referenceNumber', $data) && $data['referenceNumber'] !== null) {
            $object->setReferenceNumber($data['referenceNumber']);
            unset($data['referenceNumber']);
        } elseif (\array_key_exists('referenceNumber', $data) && $data['referenceNumber'] === null) {
            $object->setReferenceNumber(null);
        }
        if (\array_key_exists('responsibleUserFixed', $data) && $data['responsibleUserFixed'] !== null) {
            $object->setResponsibleUserFixed($data['responsibleUserFixed']);
            unset($data['responsibleUserFixed']);
        } elseif (\array_key_exists('responsibleUserFixed', $data) && $data['responsibleUserFixed'] === null) {
            $object->setResponsibleUserFixed(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        } elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
        }
        if (\array_key_exists('salesStageId', $data) && $data['salesStageId'] !== null) {
            $object->setSalesStageId($data['salesStageId']);
            unset($data['salesStageId']);
        } elseif (\array_key_exists('salesStageId', $data) && $data['salesStageId'] === null) {
            $object->setSalesStageId(null);
        }
        if (\array_key_exists('salesStageName', $data) && $data['salesStageName'] !== null) {
            $object->setSalesStageName($data['salesStageName']);
            unset($data['salesStageName']);
        } elseif (\array_key_exists('salesStageName', $data) && $data['salesStageName'] === null) {
            $object->setSalesStageName(null);
        }
        if (\array_key_exists('satisfaction', $data) && $data['satisfaction'] !== null) {
            $object->setSatisfaction($data['satisfaction']);
            unset($data['satisfaction']);
        } elseif (\array_key_exists('satisfaction', $data) && $data['satisfaction'] === null) {
            $object->setSatisfaction(null);
        }
        if (\array_key_exists('useCustomsTariffNumber', $data) && $data['useCustomsTariffNumber'] !== null) {
            $object->setUseCustomsTariffNumber($data['useCustomsTariffNumber']);
            unset($data['useCustomsTariffNumber']);
        } elseif (\array_key_exists('useCustomsTariffNumber', $data) && $data['useCustomsTariffNumber'] === null) {
            $object->setUseCustomsTariffNumber(null);
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
        if ($data->isInitialized('commercialLanguageId') && $data->getCommercialLanguageId() !== null) {
            $dataArray['commercialLanguageId'] = $data->getCommercialLanguageId();
        }
        if ($data->isInitialized('contacts') && $data->getContacts() !== null) {
            $values_4 = [];
            foreach ($data->getContacts() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['contacts'] = $values_4;
        }
        if ($data->isInitialized('currencyId') && $data->getCurrencyId() !== null) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && $data->getCurrencyName() !== null) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('primaryContactId') && $data->getPrimaryContactId() !== null) {
            $dataArray['primaryContactId'] = $data->getPrimaryContactId();
        }
        if ($data->isInitialized('sectorId') && $data->getSectorId() !== null) {
            $dataArray['sectorId'] = $data->getSectorId();
        }
        if ($data->isInitialized('sectorName') && $data->getSectorName() !== null) {
            $dataArray['sectorName'] = $data->getSectorName();
        }
        if ($data->isInitialized('annualRevenue') && $data->getAnnualRevenue() !== null) {
            $dataArray['annualRevenue'] = $data->getAnnualRevenue();
        }
        if ($data->isInitialized('companySizeId') && $data->getCompanySizeId() !== null) {
            $dataArray['companySizeId'] = $data->getCompanySizeId();
        }
        if ($data->isInitialized('companySizeName') && $data->getCompanySizeName() !== null) {
            $dataArray['companySizeName'] = $data->getCompanySizeName();
        }
        if ($data->isInitialized('customerCategoryId') && $data->getCustomerCategoryId() !== null) {
            $dataArray['customerCategoryId'] = $data->getCustomerCategoryId();
        }
        if ($data->isInitialized('customerCategoryName') && $data->getCustomerCategoryName() !== null) {
            $dataArray['customerCategoryName'] = $data->getCustomerCategoryName();
        }
        if ($data->isInitialized('parentPartyId') && $data->getParentPartyId() !== null) {
            $dataArray['parentPartyId'] = $data->getParentPartyId();
        }
        if ($data->isInitialized('paymentMethodId') && $data->getPaymentMethodId() !== null) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentMethodName') && $data->getPaymentMethodName() !== null) {
            $dataArray['paymentMethodName'] = $data->getPaymentMethodName();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && $data->getResponsibleUserUsername() !== null) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('shipmentMethodId') && $data->getShipmentMethodId() !== null) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('shipmentMethodName') && $data->getShipmentMethodName() !== null) {
            $dataArray['shipmentMethodName'] = $data->getShipmentMethodName();
        }
        if ($data->isInitialized('termOfPaymentId') && $data->getTermOfPaymentId() !== null) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('termOfPaymentName') && $data->getTermOfPaymentName() !== null) {
            $dataArray['termOfPaymentName'] = $data->getTermOfPaymentName();
        }
        if ($data->isInitialized('vatRegistrationNumber') && $data->getVatRegistrationNumber() !== null) {
            $dataArray['vatRegistrationNumber'] = $data->getVatRegistrationNumber();
        }
        if ($data->isInitialized('amountInsured') && $data->getAmountInsured() !== null) {
            $dataArray['amountInsured'] = $data->getAmountInsured();
        }
        if ($data->isInitialized('bankAccounts') && $data->getBankAccounts() !== null) {
            $values_5 = [];
            foreach ($data->getBankAccounts() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['bankAccounts'] = $values_5;
        }
        if ($data->isInitialized('blockNotice') && $data->getBlockNotice() !== null) {
            $dataArray['blockNotice'] = $data->getBlockNotice();
        }
        if ($data->isInitialized('blocked') && $data->getBlocked() !== null) {
            $dataArray['blocked'] = $data->getBlocked();
        }
        if ($data->isInitialized('commissionSalesPartners') && $data->getCommissionSalesPartners() !== null) {
            $values_6 = [];
            foreach ($data->getCommissionSalesPartners() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_6;
        }
        if ($data->isInitialized('creditLimit') && $data->getCreditLimit() !== null) {
            $dataArray['creditLimit'] = $data->getCreditLimit();
        }
        if ($data->isInitialized('customerNumber') && $data->getCustomerNumber() !== null) {
            $dataArray['customerNumber'] = $data->getCustomerNumber();
        }
        if ($data->isInitialized('customerRatingId') && $data->getCustomerRatingId() !== null) {
            $dataArray['customerRatingId'] = $data->getCustomerRatingId();
        }
        if ($data->isInitialized('customerRatingName') && $data->getCustomerRatingName() !== null) {
            $dataArray['customerRatingName'] = $data->getCustomerRatingName();
        }
        if ($data->isInitialized('customerSupplierNumber') && $data->getCustomerSupplierNumber() !== null) {
            $dataArray['customerSupplierNumber'] = $data->getCustomerSupplierNumber();
        }
        if ($data->isInitialized('customerTopics') && $data->getCustomerTopics() !== null) {
            $values_7 = [];
            foreach ($data->getCustomerTopics() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['customerTopics'] = $values_7;
        }
        if ($data->isInitialized('defaultHeaderDiscount') && $data->getDefaultHeaderDiscount() !== null) {
            $dataArray['defaultHeaderDiscount'] = $data->getDefaultHeaderDiscount();
        }
        if ($data->isInitialized('defaultHeaderSurcharge') && $data->getDefaultHeaderSurcharge() !== null) {
            $dataArray['defaultHeaderSurcharge'] = $data->getDefaultHeaderSurcharge();
        }
        if ($data->isInitialized('deliveryBlock') && $data->getDeliveryBlock() !== null) {
            $dataArray['deliveryBlock'] = $data->getDeliveryBlock();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('insolvent') && $data->getInsolvent() !== null) {
            $dataArray['insolvent'] = $data->getInsolvent();
        }
        if ($data->isInitialized('insured') && $data->getInsured() !== null) {
            $dataArray['insured'] = $data->getInsured();
        }
        if ($data->isInitialized('invoiceBlock') && $data->getInvoiceBlock() !== null) {
            $dataArray['invoiceBlock'] = $data->getInvoiceBlock();
        }
        if ($data->isInitialized('invoiceRecipientId') && $data->getInvoiceRecipientId() !== null) {
            $dataArray['invoiceRecipientId'] = $data->getInvoiceRecipientId();
        }
        if ($data->isInitialized('leadSourceId') && $data->getLeadSourceId() !== null) {
            $dataArray['leadSourceId'] = $data->getLeadSourceId();
        }
        if ($data->isInitialized('leadSourceName') && $data->getLeadSourceName() !== null) {
            $dataArray['leadSourceName'] = $data->getLeadSourceName();
        }
        if ($data->isInitialized('lossDescription') && $data->getLossDescription() !== null) {
            $dataArray['lossDescription'] = $data->getLossDescription();
        }
        if ($data->isInitialized('lossReasonId') && $data->getLossReasonId() !== null) {
            $dataArray['lossReasonId'] = $data->getLossReasonId();
        }
        if ($data->isInitialized('lossReasonName') && $data->getLossReasonName() !== null) {
            $dataArray['lossReasonName'] = $data->getLossReasonName();
        }
        if ($data->isInitialized('nonStandardTaxId') && $data->getNonStandardTaxId() !== null) {
            $dataArray['nonStandardTaxId'] = $data->getNonStandardTaxId();
        }
        if ($data->isInitialized('oldCustomerNumber') && $data->getOldCustomerNumber() !== null) {
            $dataArray['oldCustomerNumber'] = $data->getOldCustomerNumber();
        }
        if ($data->isInitialized('optIn') && $data->getOptIn() !== null) {
            $dataArray['optIn'] = $data->getOptIn();
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
        if ($data->isInitialized('referenceNumber') && $data->getReferenceNumber() !== null) {
            $dataArray['referenceNumber'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('responsibleUserFixed') && $data->getResponsibleUserFixed() !== null) {
            $dataArray['responsibleUserFixed'] = $data->getResponsibleUserFixed();
        }
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('salesStageId') && $data->getSalesStageId() !== null) {
            $dataArray['salesStageId'] = $data->getSalesStageId();
        }
        if ($data->isInitialized('salesStageName') && $data->getSalesStageName() !== null) {
            $dataArray['salesStageName'] = $data->getSalesStageName();
        }
        if ($data->isInitialized('satisfaction') && $data->getSatisfaction() !== null) {
            $dataArray['satisfaction'] = $data->getSatisfaction();
        }
        if ($data->isInitialized('useCustomsTariffNumber') && $data->getUseCustomsTariffNumber() !== null) {
            $dataArray['useCustomsTariffNumber'] = $data->getUseCustomsTariffNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\Customer::class => false];
    }
}
