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

class ManufacturerNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Manufacturer::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Manufacturer::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Manufacturer;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
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
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['address']);
        } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        } elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
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
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('address') && $data->getAddress() !== null) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('email') && $data->getEmail() !== null) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\Manufacturer::class => false];
    }
}
