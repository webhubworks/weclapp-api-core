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

class UserRoleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\UserRole::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\UserRole::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\UserRole;
        if (\array_key_exists('allPermissionsEnabled', $data) && \is_int($data['allPermissionsEnabled'])) {
            $data['allPermissionsEnabled'] = (bool) $data['allPermissionsEnabled'];
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
        if (\array_key_exists('allPermissionsEnabled', $data) && $data['allPermissionsEnabled'] !== null) {
            $object->setAllPermissionsEnabled($data['allPermissionsEnabled']);
            unset($data['allPermissionsEnabled']);
        } elseif (\array_key_exists('allPermissionsEnabled', $data) && $data['allPermissionsEnabled'] === null) {
            $object->setAllPermissionsEnabled(null);
        }
        if (\array_key_exists('includedUserRoles', $data) && $data['includedUserRoles'] !== null) {
            $values = [];
            foreach ($data['includedUserRoles'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setIncludedUserRoles($values);
            unset($data['includedUserRoles']);
        } elseif (\array_key_exists('includedUserRoles', $data) && $data['includedUserRoles'] === null) {
            $object->setIncludedUserRoles(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('permissions', $data) && $data['permissions'] !== null) {
            $values_1 = [];
            foreach ($data['permissions'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPermissions($values_1);
            unset($data['permissions']);
        } elseif (\array_key_exists('permissions', $data) && $data['permissions'] === null) {
            $object->setPermissions(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($data->isInitialized('allPermissionsEnabled') && $data->getAllPermissionsEnabled() !== null) {
            $dataArray['allPermissionsEnabled'] = $data->getAllPermissionsEnabled();
        }
        if ($data->isInitialized('includedUserRoles') && $data->getIncludedUserRoles() !== null) {
            $values = [];
            foreach ($data->getIncludedUserRoles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['includedUserRoles'] = $values;
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('permissions') && $data->getPermissions() !== null) {
            $values_1 = [];
            foreach ($data->getPermissions() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['permissions'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\UserRole::class => false];
    }
}
