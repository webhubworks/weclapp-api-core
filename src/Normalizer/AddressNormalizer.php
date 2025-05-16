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

class AddressNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Address::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Address::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Address;
        if (\array_key_exists('deliveryAddress', $data) && \is_int($data['deliveryAddress'])) {
            $data['deliveryAddress'] = (bool) $data['deliveryAddress'];
        }
        if (\array_key_exists('invoiceAddress', $data) && \is_int($data['invoiceAddress'])) {
            $data['invoiceAddress'] = (bool) $data['invoiceAddress'];
        }
        if (\array_key_exists('primeAddress', $data) && \is_int($data['primeAddress'])) {
            $data['primeAddress'] = (bool) $data['primeAddress'];
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
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (\array_key_exists('company2', $data)) {
            $object->setCompany2($data['company2']);
            unset($data['company2']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('deliveryAddress', $data)) {
            $object->setDeliveryAddress($data['deliveryAddress']);
            unset($data['deliveryAddress']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('globalLocationNumber', $data)) {
            $object->setGlobalLocationNumber($data['globalLocationNumber']);
            unset($data['globalLocationNumber']);
        }
        if (\array_key_exists('invoiceAddress', $data)) {
            $object->setInvoiceAddress($data['invoiceAddress']);
            unset($data['invoiceAddress']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        if (\array_key_exists('phoneNumber', $data)) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        }
        if (\array_key_exists('postOfficeBoxCity', $data)) {
            $object->setPostOfficeBoxCity($data['postOfficeBoxCity']);
            unset($data['postOfficeBoxCity']);
        }
        if (\array_key_exists('postOfficeBoxNumber', $data)) {
            $object->setPostOfficeBoxNumber($data['postOfficeBoxNumber']);
            unset($data['postOfficeBoxNumber']);
        }
        if (\array_key_exists('postOfficeBoxZipCode', $data)) {
            $object->setPostOfficeBoxZipCode($data['postOfficeBoxZipCode']);
            unset($data['postOfficeBoxZipCode']);
        }
        if (\array_key_exists('primeAddress', $data)) {
            $object->setPrimeAddress($data['primeAddress']);
            unset($data['primeAddress']);
        }
        if (\array_key_exists('salutation', $data)) {
            $object->setSalutation($data['salutation']);
            unset($data['salutation']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('street1', $data)) {
            $object->setStreet1($data['street1']);
            unset($data['street1']);
        }
        if (\array_key_exists('street2', $data)) {
            $object->setStreet2($data['street2']);
            unset($data['street2']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('titleId', $data)) {
            $object->setTitleId($data['titleId']);
            unset($data['titleId']);
        }
        if (\array_key_exists('zipcode', $data)) {
            $object->setZipcode($data['zipcode']);
            unset($data['zipcode']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($data->isInitialized('city') && $data->getCity() !== null) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('company') && $data->getCompany() !== null) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('company2') && $data->getCompany2() !== null) {
            $dataArray['company2'] = $data->getCompany2();
        }
        if ($data->isInitialized('countryCode') && $data->getCountryCode() !== null) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $data->getDeliveryAddress();
        }
        if ($data->isInitialized('firstName') && $data->getFirstName() !== null) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('globalLocationNumber') && $data->getGlobalLocationNumber() !== null) {
            $dataArray['globalLocationNumber'] = $data->getGlobalLocationNumber();
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $data->getInvoiceAddress();
        }
        if ($data->isInitialized('lastName') && $data->getLastName() !== null) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('phoneNumber') && $data->getPhoneNumber() !== null) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('postOfficeBoxCity') && $data->getPostOfficeBoxCity() !== null) {
            $dataArray['postOfficeBoxCity'] = $data->getPostOfficeBoxCity();
        }
        if ($data->isInitialized('postOfficeBoxNumber') && $data->getPostOfficeBoxNumber() !== null) {
            $dataArray['postOfficeBoxNumber'] = $data->getPostOfficeBoxNumber();
        }
        if ($data->isInitialized('postOfficeBoxZipCode') && $data->getPostOfficeBoxZipCode() !== null) {
            $dataArray['postOfficeBoxZipCode'] = $data->getPostOfficeBoxZipCode();
        }
        if ($data->isInitialized('primeAddress') && $data->getPrimeAddress() !== null) {
            $dataArray['primeAddress'] = $data->getPrimeAddress();
        }
        if ($data->isInitialized('salutation') && $data->getSalutation() !== null) {
            $dataArray['salutation'] = $data->getSalutation();
        }
        if ($data->isInitialized('state') && $data->getState() !== null) {
            $dataArray['state'] = $data->getState();
        }
        if ($data->isInitialized('street1') && $data->getStreet1() !== null) {
            $dataArray['street1'] = $data->getStreet1();
        }
        if ($data->isInitialized('street2') && $data->getStreet2() !== null) {
            $dataArray['street2'] = $data->getStreet2();
        }
        if ($data->isInitialized('title') && $data->getTitle() !== null) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('titleId') && $data->getTitleId() !== null) {
            $dataArray['titleId'] = $data->getTitleId();
        }
        if ($data->isInitialized('zipcode') && $data->getZipcode() !== null) {
            $dataArray['zipcode'] = $data->getZipcode();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Address::class => false];
    }
}
