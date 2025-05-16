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
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
            unset($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
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
        if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        } elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($data['deliveryAddress']);
            unset($data['deliveryAddress']);
        } elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        } elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('globalLocationNumber', $data) && $data['globalLocationNumber'] !== null) {
            $object->setGlobalLocationNumber($data['globalLocationNumber']);
            unset($data['globalLocationNumber']);
        } elseif (\array_key_exists('globalLocationNumber', $data) && $data['globalLocationNumber'] === null) {
            $object->setGlobalLocationNumber(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($data['invoiceAddress']);
            unset($data['invoiceAddress']);
        } elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        } elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] !== null) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        } elseif (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] === null) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('postOfficeBoxCity', $data) && $data['postOfficeBoxCity'] !== null) {
            $object->setPostOfficeBoxCity($data['postOfficeBoxCity']);
            unset($data['postOfficeBoxCity']);
        } elseif (\array_key_exists('postOfficeBoxCity', $data) && $data['postOfficeBoxCity'] === null) {
            $object->setPostOfficeBoxCity(null);
        }
        if (\array_key_exists('postOfficeBoxNumber', $data) && $data['postOfficeBoxNumber'] !== null) {
            $object->setPostOfficeBoxNumber($data['postOfficeBoxNumber']);
            unset($data['postOfficeBoxNumber']);
        } elseif (\array_key_exists('postOfficeBoxNumber', $data) && $data['postOfficeBoxNumber'] === null) {
            $object->setPostOfficeBoxNumber(null);
        }
        if (\array_key_exists('postOfficeBoxZipCode', $data) && $data['postOfficeBoxZipCode'] !== null) {
            $object->setPostOfficeBoxZipCode($data['postOfficeBoxZipCode']);
            unset($data['postOfficeBoxZipCode']);
        } elseif (\array_key_exists('postOfficeBoxZipCode', $data) && $data['postOfficeBoxZipCode'] === null) {
            $object->setPostOfficeBoxZipCode(null);
        }
        if (\array_key_exists('primeAddress', $data) && $data['primeAddress'] !== null) {
            $object->setPrimeAddress($data['primeAddress']);
            unset($data['primeAddress']);
        } elseif (\array_key_exists('primeAddress', $data) && $data['primeAddress'] === null) {
            $object->setPrimeAddress(null);
        }
        if (\array_key_exists('salutation', $data) && $data['salutation'] !== null) {
            $object->setSalutation($data['salutation']);
            unset($data['salutation']);
        } elseif (\array_key_exists('salutation', $data) && $data['salutation'] === null) {
            $object->setSalutation(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
            unset($data['state']);
        } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('street1', $data) && $data['street1'] !== null) {
            $object->setStreet1($data['street1']);
            unset($data['street1']);
        } elseif (\array_key_exists('street1', $data) && $data['street1'] === null) {
            $object->setStreet1(null);
        }
        if (\array_key_exists('street2', $data) && $data['street2'] !== null) {
            $object->setStreet2($data['street2']);
            unset($data['street2']);
        } elseif (\array_key_exists('street2', $data) && $data['street2'] === null) {
            $object->setStreet2(null);
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
        if (\array_key_exists('zipcode', $data) && $data['zipcode'] !== null) {
            $object->setZipcode($data['zipcode']);
            unset($data['zipcode']);
        } elseif (\array_key_exists('zipcode', $data) && $data['zipcode'] === null) {
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
