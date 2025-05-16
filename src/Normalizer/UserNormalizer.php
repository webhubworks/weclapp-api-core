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

class UserNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\User::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\User::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\User;
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
        if (\array_key_exists('birthDate', $data)) {
            $object->setBirthDate($data['birthDate']);
            unset($data['birthDate']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('faxNumber', $data)) {
            $object->setFaxNumber($data['faxNumber']);
            unset($data['faxNumber']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('imageId', $data)) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        if (\array_key_exists('licenses', $data)) {
            $values_1 = [];
            foreach ($data['licenses'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLicenses($values_1);
            unset($data['licenses']);
        }
        if (\array_key_exists('mobilePhoneNumber', $data)) {
            $object->setMobilePhoneNumber($data['mobilePhoneNumber']);
            unset($data['mobilePhoneNumber']);
        }
        if (\array_key_exists('phoneNumber', $data)) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('userRoles', $data)) {
            $values_2 = [];
            foreach ($data['userRoles'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setUserRoles($values_2);
            unset($data['userRoles']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($data->isInitialized('birthDate') && $data->getBirthDate() !== null) {
            $dataArray['birthDate'] = $data->getBirthDate();
        }
        if ($data->isInitialized('email') && $data->getEmail() !== null) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('faxNumber') && $data->getFaxNumber() !== null) {
            $dataArray['faxNumber'] = $data->getFaxNumber();
        }
        if ($data->isInitialized('firstName') && $data->getFirstName() !== null) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('imageId') && $data->getImageId() !== null) {
            $dataArray['imageId'] = $data->getImageId();
        }
        if ($data->isInitialized('lastName') && $data->getLastName() !== null) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('licenses') && $data->getLicenses() !== null) {
            $values_1 = [];
            foreach ($data->getLicenses() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['licenses'] = $values_1;
        }
        if ($data->isInitialized('mobilePhoneNumber') && $data->getMobilePhoneNumber() !== null) {
            $dataArray['mobilePhoneNumber'] = $data->getMobilePhoneNumber();
        }
        if ($data->isInitialized('phoneNumber') && $data->getPhoneNumber() !== null) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('title') && $data->getTitle() !== null) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('userRoles') && $data->getUserRoles() !== null) {
            $values_2 = [];
            foreach ($data->getUserRoles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['userRoles'] = $values_2;
        }
        if ($data->isInitialized('username') && $data->getUsername() !== null) {
            $dataArray['username'] = $data->getUsername();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\User::class => false];
    }
}
