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