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
class LeadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Lead::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Lead::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Lead();
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
        if (\array_key_exists('addresses', $data) && $data['addresses'] !== null) {
            $values_1 = [];
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Address::class, 'json', $context);
            }
            $object->setAddresses($values_1);
            unset($data['addresses']);
        }
        elseif (\array_key_exists('addresses', $data) && $data['addresses'] === null) {
            $object->setAddresses(null);
        }
        if (\array_key_exists('birthDate', $data) && $data['birthDate'] !== null) {
            $object->setBirthDate($data['birthDate']);
            unset($data['birthDate']);
        }
        elseif (\array_key_exists('birthDate', $data) && $data['birthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('company2', $data) && $data['company2'] !== null) {
            $object->setCompany2($data['company2']);
            unset($data['company2']);
        }
        elseif (\array_key_exists('company2', $data) && $data['company2'] === null) {
            $object->setCompany2(null);
        }
        if (\array_key_exists('deliveryAddressId', $data) && $data['deliveryAddressId'] !== null) {
            $object->setDeliveryAddressId($data['deliveryAddressId']);
            unset($data['deliveryAddressId']);
        }
        elseif (\array_key_exists('deliveryAddressId', $data) && $data['deliveryAddressId'] === null) {
            $object->setDeliveryAddressId(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($data['fax']);
            unset($data['fax']);
        }
        elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('invoiceAddressId', $data) && $data['invoiceAddressId'] !== null) {
            $object->setInvoiceAddressId($data['invoiceAddressId']);
            unset($data['invoiceAddressId']);
        }
        elseif (\array_key_exists('invoiceAddressId', $data) && $data['invoiceAddressId'] === null) {
            $object->setInvoiceAddressId(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('middleName', $data) && $data['middleName'] !== null) {
            $object->setMiddleName($data['middleName']);
            unset($data['middleName']);
        }
        elseif (\array_key_exists('middleName', $data) && $data['middleName'] === null) {
            $object->setMiddleName(null);
        }
        if (\array_key_exists('mobilePhone1', $data) && $data['mobilePhone1'] !== null) {
            $object->setMobilePhone1($data['mobilePhone1']);
            unset($data['mobilePhone1']);
        }
        elseif (\array_key_exists('mobilePhone1', $data) && $data['mobilePhone1'] === null) {
            $object->setMobilePhone1(null);
        }
        if (\array_key_exists('onlineAccounts', $data) && $data['onlineAccounts'] !== null) {
            $values_2 = [];
            foreach ($data['onlineAccounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlineAccount::class, 'json', $context);
            }
            $object->setOnlineAccounts($values_2);
            unset($data['onlineAccounts']);
        }
        elseif (\array_key_exists('onlineAccounts', $data) && $data['onlineAccounts'] === null) {
            $object->setOnlineAccounts(null);
        }
        if (\array_key_exists('partyType', $data) && $data['partyType'] !== null) {
            $object->setPartyType($data['partyType']);
            unset($data['partyType']);
        }
        elseif (\array_key_exists('partyType', $data) && $data['partyType'] === null) {
            $object->setPartyType(null);
        }
        if (\array_key_exists('personCompany', $data) && $data['personCompany'] !== null) {
            $object->setPersonCompany($data['personCompany']);
            unset($data['personCompany']);
        }
        elseif (\array_key_exists('personCompany', $data) && $data['personCompany'] === null) {
            $object->setPersonCompany(null);
        }
        if (\array_key_exists('personDepartmentId', $data) && $data['personDepartmentId'] !== null) {
            $object->setPersonDepartmentId($data['personDepartmentId']);
            unset($data['personDepartmentId']);
        }
        elseif (\array_key_exists('personDepartmentId', $data) && $data['personDepartmentId'] === null) {
            $object->setPersonDepartmentId(null);
        }
        if (\array_key_exists('personRoleId', $data) && $data['personRoleId'] !== null) {
            $object->setPersonRoleId($data['personRoleId']);
            unset($data['personRoleId']);
        }
        elseif (\array_key_exists('personRoleId', $data) && $data['personRoleId'] === null) {
            $object->setPersonRoleId(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
            unset($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('primaryAddressId', $data) && $data['primaryAddressId'] !== null) {
            $object->setPrimaryAddressId($data['primaryAddressId']);
            unset($data['primaryAddressId']);
        }
        elseif (\array_key_exists('primaryAddressId', $data) && $data['primaryAddressId'] === null) {
            $object->setPrimaryAddressId(null);
        }
        if (\array_key_exists('salutation', $data) && $data['salutation'] !== null) {
            $object->setSalutation($data['salutation']);
            unset($data['salutation']);
        }
        elseif (\array_key_exists('salutation', $data) && $data['salutation'] === null) {
            $object->setSalutation(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_3 = [];
            foreach ($data['tags'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTags($values_3);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('titleId', $data) && $data['titleId'] !== null) {
            $object->setTitleId($data['titleId']);
            unset($data['titleId']);
        }
        elseif (\array_key_exists('titleId', $data) && $data['titleId'] === null) {
            $object->setTitleId(null);
        }
        if (\array_key_exists('website', $data) && $data['website'] !== null) {
            $object->setWebsite($data['website']);
            unset($data['website']);
        }
        elseif (\array_key_exists('website', $data) && $data['website'] === null) {
            $object->setWebsite(null);
        }
        if (\array_key_exists('commercialLanguageId', $data) && $data['commercialLanguageId'] !== null) {
            $object->setCommercialLanguageId($data['commercialLanguageId']);
            unset($data['commercialLanguageId']);
        }
        elseif (\array_key_exists('commercialLanguageId', $data) && $data['commercialLanguageId'] === null) {
            $object->setCommercialLanguageId(null);
        }
        if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
            $values_4 = [];
            foreach ($data['contacts'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\Contact::class, 'json', $context);
            }
            $object->setContacts($values_4);
            unset($data['contacts']);
        }
        elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
            $object->setContacts(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('currencyName', $data) && $data['currencyName'] !== null) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        }
        elseif (\array_key_exists('currencyName', $data) && $data['currencyName'] === null) {
            $object->setCurrencyName(null);
        }
        if (\array_key_exists('primaryContactId', $data) && $data['primaryContactId'] !== null) {
            $object->setPrimaryContactId($data['primaryContactId']);
            unset($data['primaryContactId']);
        }
        elseif (\array_key_exists('primaryContactId', $data) && $data['primaryContactId'] === null) {
            $object->setPrimaryContactId(null);
        }
        if (\array_key_exists('sectorId', $data) && $data['sectorId'] !== null) {
            $object->setSectorId($data['sectorId']);
            unset($data['sectorId']);
        }
        elseif (\array_key_exists('sectorId', $data) && $data['sectorId'] === null) {
            $object->setSectorId(null);
        }
        if (\array_key_exists('sectorName', $data) && $data['sectorName'] !== null) {
            $object->setSectorName($data['sectorName']);
            unset($data['sectorName']);
        }
        elseif (\array_key_exists('sectorName', $data) && $data['sectorName'] === null) {
            $object->setSectorName(null);
        }
        if (\array_key_exists('annualRevenue', $data) && $data['annualRevenue'] !== null) {
            $object->setAnnualRevenue($data['annualRevenue']);
            unset($data['annualRevenue']);
        }
        elseif (\array_key_exists('annualRevenue', $data) && $data['annualRevenue'] === null) {
            $object->setAnnualRevenue(null);
        }
        if (\array_key_exists('companySizeId', $data) && $data['companySizeId'] !== null) {
            $object->setCompanySizeId($data['companySizeId']);
            unset($data['companySizeId']);
        }
        elseif (\array_key_exists('companySizeId', $data) && $data['companySizeId'] === null) {
            $object->setCompanySizeId(null);
        }
        if (\array_key_exists('companySizeName', $data) && $data['companySizeName'] !== null) {
            $object->setCompanySizeName($data['companySizeName']);
            unset($data['companySizeName']);
        }
        elseif (\array_key_exists('companySizeName', $data) && $data['companySizeName'] === null) {
            $object->setCompanySizeName(null);
        }
        if (\array_key_exists('customerCategoryId', $data) && $data['customerCategoryId'] !== null) {
            $object->setCustomerCategoryId($data['customerCategoryId']);
            unset($data['customerCategoryId']);
        }
        elseif (\array_key_exists('customerCategoryId', $data) && $data['customerCategoryId'] === null) {
            $object->setCustomerCategoryId(null);
        }
        if (\array_key_exists('customerCategoryName', $data) && $data['customerCategoryName'] !== null) {
            $object->setCustomerCategoryName($data['customerCategoryName']);
            unset($data['customerCategoryName']);
        }
        elseif (\array_key_exists('customerCategoryName', $data) && $data['customerCategoryName'] === null) {
            $object->setCustomerCategoryName(null);
        }
        if (\array_key_exists('parentPartyId', $data) && $data['parentPartyId'] !== null) {
            $object->setParentPartyId($data['parentPartyId']);
            unset($data['parentPartyId']);
        }
        elseif (\array_key_exists('parentPartyId', $data) && $data['parentPartyId'] === null) {
            $object->setParentPartyId(null);
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
        if (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] !== null) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        elseif (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] === null) {
            $object->setShipmentMethodId(null);
        }
        if (\array_key_exists('shipmentMethodName', $data) && $data['shipmentMethodName'] !== null) {
            $object->setShipmentMethodName($data['shipmentMethodName']);
            unset($data['shipmentMethodName']);
        }
        elseif (\array_key_exists('shipmentMethodName', $data) && $data['shipmentMethodName'] === null) {
            $object->setShipmentMethodName(null);
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
        if (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] !== null) {
            $object->setVatRegistrationNumber($data['vatRegistrationNumber']);
            unset($data['vatRegistrationNumber']);
        }
        elseif (\array_key_exists('vatRegistrationNumber', $data) && $data['vatRegistrationNumber'] === null) {
            $object->setVatRegistrationNumber(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('leadNumber', $data) && $data['leadNumber'] !== null) {
            $object->setLeadNumber($data['leadNumber']);
            unset($data['leadNumber']);
        }
        elseif (\array_key_exists('leadNumber', $data) && $data['leadNumber'] === null) {
            $object->setLeadNumber(null);
        }
        if (\array_key_exists('leadRatingId', $data) && $data['leadRatingId'] !== null) {
            $object->setLeadRatingId($data['leadRatingId']);
            unset($data['leadRatingId']);
        }
        elseif (\array_key_exists('leadRatingId', $data) && $data['leadRatingId'] === null) {
            $object->setLeadRatingId(null);
        }
        if (\array_key_exists('leadRatingName', $data) && $data['leadRatingName'] !== null) {
            $object->setLeadRatingName($data['leadRatingName']);
            unset($data['leadRatingName']);
        }
        elseif (\array_key_exists('leadRatingName', $data) && $data['leadRatingName'] === null) {
            $object->setLeadRatingName(null);
        }
        if (\array_key_exists('leadSourceId', $data) && $data['leadSourceId'] !== null) {
            $object->setLeadSourceId($data['leadSourceId']);
            unset($data['leadSourceId']);
        }
        elseif (\array_key_exists('leadSourceId', $data) && $data['leadSourceId'] === null) {
            $object->setLeadSourceId(null);
        }
        if (\array_key_exists('leadSourceName', $data) && $data['leadSourceName'] !== null) {
            $object->setLeadSourceName($data['leadSourceName']);
            unset($data['leadSourceName']);
        }
        elseif (\array_key_exists('leadSourceName', $data) && $data['leadSourceName'] === null) {
            $object->setLeadSourceName(null);
        }
        if (\array_key_exists('leadStatus', $data) && $data['leadStatus'] !== null) {
            $object->setLeadStatus($data['leadStatus']);
            unset($data['leadStatus']);
        }
        elseif (\array_key_exists('leadStatus', $data) && $data['leadStatus'] === null) {
            $object->setLeadStatus(null);
        }
        if (\array_key_exists('leadTopics', $data) && $data['leadTopics'] !== null) {
            $values_5 = [];
            foreach ($data['leadTopics'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\Entity::class, 'json', $context);
            }
            $object->setLeadTopics($values_5);
            unset($data['leadTopics']);
        }
        elseif (\array_key_exists('leadTopics', $data) && $data['leadTopics'] === null) {
            $object->setLeadTopics(null);
        }
        if (\array_key_exists('lossDescription', $data) && $data['lossDescription'] !== null) {
            $object->setLossDescription($data['lossDescription']);
            unset($data['lossDescription']);
        }
        elseif (\array_key_exists('lossDescription', $data) && $data['lossDescription'] === null) {
            $object->setLossDescription(null);
        }
        if (\array_key_exists('lossReasonId', $data) && $data['lossReasonId'] !== null) {
            $object->setLossReasonId($data['lossReasonId']);
            unset($data['lossReasonId']);
        }
        elseif (\array_key_exists('lossReasonId', $data) && $data['lossReasonId'] === null) {
            $object->setLossReasonId(null);
        }
        if (\array_key_exists('lossReasonName', $data) && $data['lossReasonName'] !== null) {
            $object->setLossReasonName($data['lossReasonName']);
            unset($data['lossReasonName']);
        }
        elseif (\array_key_exists('lossReasonName', $data) && $data['lossReasonName'] === null) {
            $object->setLossReasonName(null);
        }
        if (\array_key_exists('oldLeadNumber', $data) && $data['oldLeadNumber'] !== null) {
            $object->setOldLeadNumber($data['oldLeadNumber']);
            unset($data['oldLeadNumber']);
        }
        elseif (\array_key_exists('oldLeadNumber', $data) && $data['oldLeadNumber'] === null) {
            $object->setOldLeadNumber(null);
        }
        if (\array_key_exists('optIn', $data) && $data['optIn'] !== null) {
            $object->setOptIn($data['optIn']);
            unset($data['optIn']);
        }
        elseif (\array_key_exists('optIn', $data) && $data['optIn'] === null) {
            $object->setOptIn(null);
        }
        if (\array_key_exists('optInLetter', $data) && $data['optInLetter'] !== null) {
            $object->setOptInLetter($data['optInLetter']);
            unset($data['optInLetter']);
        }
        elseif (\array_key_exists('optInLetter', $data) && $data['optInLetter'] === null) {
            $object->setOptInLetter(null);
        }
        if (\array_key_exists('optInPhone', $data) && $data['optInPhone'] !== null) {
            $object->setOptInPhone($data['optInPhone']);
            unset($data['optInPhone']);
        }
        elseif (\array_key_exists('optInPhone', $data) && $data['optInPhone'] === null) {
            $object->setOptInPhone(null);
        }
        if (\array_key_exists('optInSms', $data) && $data['optInSms'] !== null) {
            $object->setOptInSms($data['optInSms']);
            unset($data['optInSms']);
        }
        elseif (\array_key_exists('optInSms', $data) && $data['optInSms'] === null) {
            $object->setOptInSms(null);
        }
        if (\array_key_exists('responsibleUserFixed', $data) && $data['responsibleUserFixed'] !== null) {
            $object->setResponsibleUserFixed($data['responsibleUserFixed']);
            unset($data['responsibleUserFixed']);
        }
        elseif (\array_key_exists('responsibleUserFixed', $data) && $data['responsibleUserFixed'] === null) {
            $object->setResponsibleUserFixed(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
        }
        if (\array_key_exists('salesStageId', $data) && $data['salesStageId'] !== null) {
            $object->setSalesStageId($data['salesStageId']);
            unset($data['salesStageId']);
        }
        elseif (\array_key_exists('salesStageId', $data) && $data['salesStageId'] === null) {
            $object->setSalesStageId(null);
        }
        if (\array_key_exists('salesStageName', $data) && $data['salesStageName'] !== null) {
            $object->setSalesStageName($data['salesStageName']);
            unset($data['salesStageName']);
        }
        elseif (\array_key_exists('salesStageName', $data) && $data['salesStageName'] === null) {
            $object->setSalesStageName(null);
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
        if ($data->isInitialized('commercialLanguageId') && null !== $data->getCommercialLanguageId()) {
            $dataArray['commercialLanguageId'] = $data->getCommercialLanguageId();
        }
        if ($data->isInitialized('contacts') && null !== $data->getContacts()) {
            $values_4 = [];
            foreach ($data->getContacts() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['contacts'] = $values_4;
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && null !== $data->getCurrencyName()) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('primaryContactId') && null !== $data->getPrimaryContactId()) {
            $dataArray['primaryContactId'] = $data->getPrimaryContactId();
        }
        if ($data->isInitialized('sectorId') && null !== $data->getSectorId()) {
            $dataArray['sectorId'] = $data->getSectorId();
        }
        if ($data->isInitialized('sectorName') && null !== $data->getSectorName()) {
            $dataArray['sectorName'] = $data->getSectorName();
        }
        if ($data->isInitialized('annualRevenue') && null !== $data->getAnnualRevenue()) {
            $dataArray['annualRevenue'] = $data->getAnnualRevenue();
        }
        if ($data->isInitialized('companySizeId') && null !== $data->getCompanySizeId()) {
            $dataArray['companySizeId'] = $data->getCompanySizeId();
        }
        if ($data->isInitialized('companySizeName') && null !== $data->getCompanySizeName()) {
            $dataArray['companySizeName'] = $data->getCompanySizeName();
        }
        if ($data->isInitialized('customerCategoryId') && null !== $data->getCustomerCategoryId()) {
            $dataArray['customerCategoryId'] = $data->getCustomerCategoryId();
        }
        if ($data->isInitialized('customerCategoryName') && null !== $data->getCustomerCategoryName()) {
            $dataArray['customerCategoryName'] = $data->getCustomerCategoryName();
        }
        if ($data->isInitialized('parentPartyId') && null !== $data->getParentPartyId()) {
            $dataArray['parentPartyId'] = $data->getParentPartyId();
        }
        if ($data->isInitialized('paymentMethodId') && null !== $data->getPaymentMethodId()) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('paymentMethodName') && null !== $data->getPaymentMethodName()) {
            $dataArray['paymentMethodName'] = $data->getPaymentMethodName();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && null !== $data->getResponsibleUserUsername()) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('shipmentMethodId') && null !== $data->getShipmentMethodId()) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('shipmentMethodName') && null !== $data->getShipmentMethodName()) {
            $dataArray['shipmentMethodName'] = $data->getShipmentMethodName();
        }
        if ($data->isInitialized('termOfPaymentId') && null !== $data->getTermOfPaymentId()) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('termOfPaymentName') && null !== $data->getTermOfPaymentName()) {
            $dataArray['termOfPaymentName'] = $data->getTermOfPaymentName();
        }
        if ($data->isInitialized('vatRegistrationNumber') && null !== $data->getVatRegistrationNumber()) {
            $dataArray['vatRegistrationNumber'] = $data->getVatRegistrationNumber();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('leadNumber') && null !== $data->getLeadNumber()) {
            $dataArray['leadNumber'] = $data->getLeadNumber();
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
        if ($data->isInitialized('leadTopics') && null !== $data->getLeadTopics()) {
            $values_5 = [];
            foreach ($data->getLeadTopics() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['leadTopics'] = $values_5;
        }
        if ($data->isInitialized('lossDescription') && null !== $data->getLossDescription()) {
            $dataArray['lossDescription'] = $data->getLossDescription();
        }
        if ($data->isInitialized('lossReasonId') && null !== $data->getLossReasonId()) {
            $dataArray['lossReasonId'] = $data->getLossReasonId();
        }
        if ($data->isInitialized('lossReasonName') && null !== $data->getLossReasonName()) {
            $dataArray['lossReasonName'] = $data->getLossReasonName();
        }
        if ($data->isInitialized('oldLeadNumber') && null !== $data->getOldLeadNumber()) {
            $dataArray['oldLeadNumber'] = $data->getOldLeadNumber();
        }
        if ($data->isInitialized('optIn') && null !== $data->getOptIn()) {
            $dataArray['optIn'] = $data->getOptIn();
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
        if ($data->isInitialized('responsibleUserFixed') && null !== $data->getResponsibleUserFixed()) {
            $dataArray['responsibleUserFixed'] = $data->getResponsibleUserFixed();
        }
        if ($data->isInitialized('salesChannel') && null !== $data->getSalesChannel()) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('salesStageId') && null !== $data->getSalesStageId()) {
            $dataArray['salesStageId'] = $data->getSalesStageId();
        }
        if ($data->isInitialized('salesStageName') && null !== $data->getSalesStageName()) {
            $dataArray['salesStageName'] = $data->getSalesStageName();
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
        return [\Webhubworks\WeclappApiCore\Model\Lead::class => false];
    }
}