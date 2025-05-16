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
class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Address();
        if (\array_key_exists('deliveryAddress', $data) && \is_int($data['deliveryAddress'])) {
            $data['deliveryAddress'] = (bool) $data['deliveryAddress'];
        }
        if (\array_key_exists('invoiceAddress', $data) && \is_int($data['invoiceAddress'])) {
            $data['invoiceAddress'] = (bool) $data['invoiceAddress'];
        }
        if (\array_key_exists('primeAddress', $data) && \is_int($data['primeAddress'])) {
            $data['primeAddress'] = (bool) $data['primeAddress'];
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
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
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
        if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($data['deliveryAddress']);
            unset($data['deliveryAddress']);
        }
        elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('globalLocationNumber', $data) && $data['globalLocationNumber'] !== null) {
            $object->setGlobalLocationNumber($data['globalLocationNumber']);
            unset($data['globalLocationNumber']);
        }
        elseif (\array_key_exists('globalLocationNumber', $data) && $data['globalLocationNumber'] === null) {
            $object->setGlobalLocationNumber(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($data['invoiceAddress']);
            unset($data['invoiceAddress']);
        }
        elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] !== null) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        }
        elseif (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] === null) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('postOfficeBoxCity', $data) && $data['postOfficeBoxCity'] !== null) {
            $object->setPostOfficeBoxCity($data['postOfficeBoxCity']);
            unset($data['postOfficeBoxCity']);
        }
        elseif (\array_key_exists('postOfficeBoxCity', $data) && $data['postOfficeBoxCity'] === null) {
            $object->setPostOfficeBoxCity(null);
        }
        if (\array_key_exists('postOfficeBoxNumber', $data) && $data['postOfficeBoxNumber'] !== null) {
            $object->setPostOfficeBoxNumber($data['postOfficeBoxNumber']);
            unset($data['postOfficeBoxNumber']);
        }
        elseif (\array_key_exists('postOfficeBoxNumber', $data) && $data['postOfficeBoxNumber'] === null) {
            $object->setPostOfficeBoxNumber(null);
        }
        if (\array_key_exists('postOfficeBoxZipCode', $data) && $data['postOfficeBoxZipCode'] !== null) {
            $object->setPostOfficeBoxZipCode($data['postOfficeBoxZipCode']);
            unset($data['postOfficeBoxZipCode']);
        }
        elseif (\array_key_exists('postOfficeBoxZipCode', $data) && $data['postOfficeBoxZipCode'] === null) {
            $object->setPostOfficeBoxZipCode(null);
        }
        if (\array_key_exists('primeAddress', $data) && $data['primeAddress'] !== null) {
            $object->setPrimeAddress($data['primeAddress']);
            unset($data['primeAddress']);
        }
        elseif (\array_key_exists('primeAddress', $data) && $data['primeAddress'] === null) {
            $object->setPrimeAddress(null);
        }
        if (\array_key_exists('salutation', $data) && $data['salutation'] !== null) {
            $object->setSalutation($data['salutation']);
            unset($data['salutation']);
        }
        elseif (\array_key_exists('salutation', $data) && $data['salutation'] === null) {
            $object->setSalutation(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('street1', $data) && $data['street1'] !== null) {
            $object->setStreet1($data['street1']);
            unset($data['street1']);
        }
        elseif (\array_key_exists('street1', $data) && $data['street1'] === null) {
            $object->setStreet1(null);
        }
        if (\array_key_exists('street2', $data) && $data['street2'] !== null) {
            $object->setStreet2($data['street2']);
            unset($data['street2']);
        }
        elseif (\array_key_exists('street2', $data) && $data['street2'] === null) {
            $object->setStreet2(null);
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
        if (\array_key_exists('zipcode', $data) && $data['zipcode'] !== null) {
            $object->setZipcode($data['zipcode']);
            unset($data['zipcode']);
        }
        elseif (\array_key_exists('zipcode', $data) && $data['zipcode'] === null) {
            $object->setZipcode(null);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('company2') && null !== $data->getCompany2()) {
            $dataArray['company2'] = $data->getCompany2();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        if ($data->isInitialized('deliveryAddress') && null !== $data->getDeliveryAddress()) {
            $dataArray['deliveryAddress'] = $data->getDeliveryAddress();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('globalLocationNumber') && null !== $data->getGlobalLocationNumber()) {
            $dataArray['globalLocationNumber'] = $data->getGlobalLocationNumber();
        }
        if ($data->isInitialized('invoiceAddress') && null !== $data->getInvoiceAddress()) {
            $dataArray['invoiceAddress'] = $data->getInvoiceAddress();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('postOfficeBoxCity') && null !== $data->getPostOfficeBoxCity()) {
            $dataArray['postOfficeBoxCity'] = $data->getPostOfficeBoxCity();
        }
        if ($data->isInitialized('postOfficeBoxNumber') && null !== $data->getPostOfficeBoxNumber()) {
            $dataArray['postOfficeBoxNumber'] = $data->getPostOfficeBoxNumber();
        }
        if ($data->isInitialized('postOfficeBoxZipCode') && null !== $data->getPostOfficeBoxZipCode()) {
            $dataArray['postOfficeBoxZipCode'] = $data->getPostOfficeBoxZipCode();
        }
        if ($data->isInitialized('primeAddress') && null !== $data->getPrimeAddress()) {
            $dataArray['primeAddress'] = $data->getPrimeAddress();
        }
        if ($data->isInitialized('salutation') && null !== $data->getSalutation()) {
            $dataArray['salutation'] = $data->getSalutation();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['state'] = $data->getState();
        }
        if ($data->isInitialized('street1') && null !== $data->getStreet1()) {
            $dataArray['street1'] = $data->getStreet1();
        }
        if ($data->isInitialized('street2') && null !== $data->getStreet2()) {
            $dataArray['street2'] = $data->getStreet2();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('titleId') && null !== $data->getTitleId()) {
            $dataArray['titleId'] = $data->getTitleId();
        }
        if ($data->isInitialized('zipcode') && null !== $data->getZipcode()) {
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