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

class PartyButNotContactNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PartyButNotContact::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PartyButNotContact::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PartyButNotContact;
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
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\PartyButNotContact::class => false];
    }
}
