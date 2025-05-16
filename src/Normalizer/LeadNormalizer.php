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

class LeadNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Lead;
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
        if (\array_key_exists('commercialLanguageId', $data)) {
            $object->setCommercialLanguageId($data['commercialLanguageId']);
            unset($data['commercialLanguageId']);
        }
        if (\array_key_exists('contacts', $data)) {
            $values_4 = [];
            foreach ($data['contacts'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\Contact::class, 'json', $context);
            }
            $object->setContacts($values_4);
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
        if (\array_key_exists('primaryContactId', $data)) {
            $object->setPrimaryContactId($data['primaryContactId']);
            unset($data['primaryContactId']);
        }
        if (\array_key_exists('sectorId', $data)) {
            $object->setSectorId($data['sectorId']);
            unset($data['sectorId']);
        }
        if (\array_key_exists('sectorName', $data)) {
            $object->setSectorName($data['sectorName']);
            unset($data['sectorName']);
        }
        if (\array_key_exists('annualRevenue', $data)) {
            $object->setAnnualRevenue($data['annualRevenue']);
            unset($data['annualRevenue']);
        }
        if (\array_key_exists('companySizeId', $data)) {
            $object->setCompanySizeId($data['companySizeId']);
            unset($data['companySizeId']);
        }
        if (\array_key_exists('companySizeName', $data)) {
            $object->setCompanySizeName($data['companySizeName']);
            unset($data['companySizeName']);
        }
        if (\array_key_exists('customerCategoryId', $data)) {
            $object->setCustomerCategoryId($data['customerCategoryId']);
            unset($data['customerCategoryId']);
        }
        if (\array_key_exists('customerCategoryName', $data)) {
            $object->setCustomerCategoryName($data['customerCategoryName']);
            unset($data['customerCategoryName']);
        }
        if (\array_key_exists('parentPartyId', $data)) {
            $object->setParentPartyId($data['parentPartyId']);
            unset($data['parentPartyId']);
        }
        if (\array_key_exists('paymentMethodId', $data)) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        if (\array_key_exists('paymentMethodName', $data)) {
            $object->setPaymentMethodName($data['paymentMethodName']);
            unset($data['paymentMethodName']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('responsibleUserUsername', $data)) {
            $object->setResponsibleUserUsername($data['responsibleUserUsername']);
            unset($data['responsibleUserUsername']);
        }
        if (\array_key_exists('shipmentMethodId', $data)) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        }
        if (\array_key_exists('shipmentMethodName', $data)) {
            $object->setShipmentMethodName($data['shipmentMethodName']);
            unset($data['shipmentMethodName']);
        }
        if (\array_key_exists('termOfPaymentId', $data)) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        }
        if (\array_key_exists('termOfPaymentName', $data)) {
            $object->setTermOfPaymentName($data['termOfPaymentName']);
            unset($data['termOfPaymentName']);
        }
        if (\array_key_exists('vatRegistrationNumber', $data)) {
            $object->setVatRegistrationNumber($data['vatRegistrationNumber']);
            unset($data['vatRegistrationNumber']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('leadNumber', $data)) {
            $object->setLeadNumber($data['leadNumber']);
            unset($data['leadNumber']);
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
        if (\array_key_exists('leadTopics', $data)) {
            $values_5 = [];
            foreach ($data['leadTopics'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\Entity::class, 'json', $context);
            }
            $object->setLeadTopics($values_5);
            unset($data['leadTopics']);
        }
        if (\array_key_exists('lossDescription', $data)) {
            $object->setLossDescription($data['lossDescription']);
            unset($data['lossDescription']);
        }
        if (\array_key_exists('lossReasonId', $data)) {
            $object->setLossReasonId($data['lossReasonId']);
            unset($data['lossReasonId']);
        }
        if (\array_key_exists('lossReasonName', $data)) {
            $object->setLossReasonName($data['lossReasonName']);
            unset($data['lossReasonName']);
        }
        if (\array_key_exists('oldLeadNumber', $data)) {
            $object->setOldLeadNumber($data['oldLeadNumber']);
            unset($data['oldLeadNumber']);
        }
        if (\array_key_exists('optIn', $data)) {
            $object->setOptIn($data['optIn']);
            unset($data['optIn']);
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
        if (\array_key_exists('responsibleUserFixed', $data)) {
            $object->setResponsibleUserFixed($data['responsibleUserFixed']);
            unset($data['responsibleUserFixed']);
        }
        if (\array_key_exists('salesChannel', $data)) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        if (\array_key_exists('salesStageId', $data)) {
            $object->setSalesStageId($data['salesStageId']);
            unset($data['salesStageId']);
        }
        if (\array_key_exists('salesStageName', $data)) {
            $object->setSalesStageName($data['salesStageName']);
            unset($data['salesStageName']);
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
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('leadNumber') && $data->getLeadNumber() !== null) {
            $dataArray['leadNumber'] = $data->getLeadNumber();
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
        if ($data->isInitialized('leadTopics') && $data->getLeadTopics() !== null) {
            $values_5 = [];
            foreach ($data->getLeadTopics() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['leadTopics'] = $values_5;
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
        if ($data->isInitialized('oldLeadNumber') && $data->getOldLeadNumber() !== null) {
            $dataArray['oldLeadNumber'] = $data->getOldLeadNumber();
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
