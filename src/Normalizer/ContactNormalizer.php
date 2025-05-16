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

class ContactNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Contact::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Contact::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Contact;
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
        if (\array_key_exists('customerCategoryId', $data)) {
            $object->setCustomerCategoryId($data['customerCategoryId']);
            unset($data['customerCategoryId']);
        }
        if (\array_key_exists('customerCategoryName', $data)) {
            $object->setCustomerCategoryName($data['customerCategoryName']);
            unset($data['customerCategoryName']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('fixPhone2', $data)) {
            $object->setFixPhone2($data['fixPhone2']);
            unset($data['fixPhone2']);
        }
        if (\array_key_exists('mobilePhone2', $data)) {
            $object->setMobilePhone2($data['mobilePhone2']);
            unset($data['mobilePhone2']);
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
        if (\array_key_exists('phoneHome', $data)) {
            $object->setPhoneHome($data['phoneHome']);
            unset($data['phoneHome']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($data->isInitialized('customerCategoryId') && $data->getCustomerCategoryId() !== null) {
            $dataArray['customerCategoryId'] = $data->getCustomerCategoryId();
        }
        if ($data->isInitialized('customerCategoryName') && $data->getCustomerCategoryName() !== null) {
            $dataArray['customerCategoryName'] = $data->getCustomerCategoryName();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('fixPhone2') && $data->getFixPhone2() !== null) {
            $dataArray['fixPhone2'] = $data->getFixPhone2();
        }
        if ($data->isInitialized('mobilePhone2') && $data->getMobilePhone2() !== null) {
            $dataArray['mobilePhone2'] = $data->getMobilePhone2();
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
        if ($data->isInitialized('phoneHome') && $data->getPhoneHome() !== null) {
            $dataArray['phoneHome'] = $data->getPhoneHome();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Contact::class => false];
    }
}
