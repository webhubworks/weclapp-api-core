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
        if (\array_key_exists('birthDate', $data) && $data['birthDate'] !== null) {
            $object->setBirthDate($data['birthDate']);
            unset($data['birthDate']);
        } elseif (\array_key_exists('birthDate', $data) && $data['birthDate'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('faxNumber', $data) && $data['faxNumber'] !== null) {
            $object->setFaxNumber($data['faxNumber']);
            unset($data['faxNumber']);
        } elseif (\array_key_exists('faxNumber', $data) && $data['faxNumber'] === null) {
            $object->setFaxNumber(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        } elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('imageId', $data) && $data['imageId'] !== null) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        } elseif (\array_key_exists('imageId', $data) && $data['imageId'] === null) {
            $object->setImageId(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        } elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('licenses', $data) && $data['licenses'] !== null) {
            $values_1 = [];
            foreach ($data['licenses'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLicenses($values_1);
            unset($data['licenses']);
        } elseif (\array_key_exists('licenses', $data) && $data['licenses'] === null) {
            $object->setLicenses(null);
        }
        if (\array_key_exists('mobilePhoneNumber', $data) && $data['mobilePhoneNumber'] !== null) {
            $object->setMobilePhoneNumber($data['mobilePhoneNumber']);
            unset($data['mobilePhoneNumber']);
        } elseif (\array_key_exists('mobilePhoneNumber', $data) && $data['mobilePhoneNumber'] === null) {
            $object->setMobilePhoneNumber(null);
        }
        if (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] !== null) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        } elseif (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] === null) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('userRoles', $data) && $data['userRoles'] !== null) {
            $values_2 = [];
            foreach ($data['userRoles'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setUserRoles($values_2);
            unset($data['userRoles']);
        } elseif (\array_key_exists('userRoles', $data) && $data['userRoles'] === null) {
            $object->setUserRoles(null);
        }
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $object->setUsername($data['username']);
            unset($data['username']);
        } elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
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
