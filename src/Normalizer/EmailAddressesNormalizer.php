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

class EmailAddressesNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\EmailAddresses::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\EmailAddresses::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\EmailAddresses;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('bccAddresses', $data) && $data['bccAddresses'] !== null) {
            $object->setBccAddresses($data['bccAddresses']);
            unset($data['bccAddresses']);
        } elseif (\array_key_exists('bccAddresses', $data) && $data['bccAddresses'] === null) {
            $object->setBccAddresses(null);
        }
        if (\array_key_exists('ccAddresses', $data) && $data['ccAddresses'] !== null) {
            $object->setCcAddresses($data['ccAddresses']);
            unset($data['ccAddresses']);
        } elseif (\array_key_exists('ccAddresses', $data) && $data['ccAddresses'] === null) {
            $object->setCcAddresses(null);
        }
        if (\array_key_exists('toAddresses', $data) && $data['toAddresses'] !== null) {
            $object->setToAddresses($data['toAddresses']);
            unset($data['toAddresses']);
        } elseif (\array_key_exists('toAddresses', $data) && $data['toAddresses'] === null) {
            $object->setToAddresses(null);
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
        if ($data->isInitialized('bccAddresses') && $data->getBccAddresses() !== null) {
            $dataArray['bccAddresses'] = $data->getBccAddresses();
        }
        if ($data->isInitialized('ccAddresses') && $data->getCcAddresses() !== null) {
            $dataArray['ccAddresses'] = $data->getCcAddresses();
        }
        if ($data->isInitialized('toAddresses') && $data->getToAddresses() !== null) {
            $dataArray['toAddresses'] = $data->getToAddresses();
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
        return [\Webhubworks\WeclappApiCore\Model\EmailAddresses::class => false];
    }
}
