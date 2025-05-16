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

class JobProgressNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\JobProgress::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\JobProgress::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\JobProgress;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('failedCreateCount', $data) && $data['failedCreateCount'] !== null) {
            $object->setFailedCreateCount($data['failedCreateCount']);
            unset($data['failedCreateCount']);
        } elseif (\array_key_exists('failedCreateCount', $data) && $data['failedCreateCount'] === null) {
            $object->setFailedCreateCount(null);
        }
        if (\array_key_exists('failedUpdateCount', $data) && $data['failedUpdateCount'] !== null) {
            $object->setFailedUpdateCount($data['failedUpdateCount']);
            unset($data['failedUpdateCount']);
        } elseif (\array_key_exists('failedUpdateCount', $data) && $data['failedUpdateCount'] === null) {
            $object->setFailedUpdateCount(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('succeededCreateCount', $data) && $data['succeededCreateCount'] !== null) {
            $object->setSucceededCreateCount($data['succeededCreateCount']);
            unset($data['succeededCreateCount']);
        } elseif (\array_key_exists('succeededCreateCount', $data) && $data['succeededCreateCount'] === null) {
            $object->setSucceededCreateCount(null);
        }
        if (\array_key_exists('succeededUpdateCount', $data) && $data['succeededUpdateCount'] !== null) {
            $object->setSucceededUpdateCount($data['succeededUpdateCount']);
            unset($data['succeededUpdateCount']);
        } elseif (\array_key_exists('succeededUpdateCount', $data) && $data['succeededUpdateCount'] === null) {
            $object->setSucceededUpdateCount(null);
        }
        if (\array_key_exists('totalCount', $data) && $data['totalCount'] !== null) {
            $object->setTotalCount($data['totalCount']);
            unset($data['totalCount']);
        } elseif (\array_key_exists('totalCount', $data) && $data['totalCount'] === null) {
            $object->setTotalCount(null);
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
        if ($data->isInitialized('failedCreateCount') && $data->getFailedCreateCount() !== null) {
            $dataArray['failedCreateCount'] = $data->getFailedCreateCount();
        }
        if ($data->isInitialized('failedUpdateCount') && $data->getFailedUpdateCount() !== null) {
            $dataArray['failedUpdateCount'] = $data->getFailedUpdateCount();
        }
        if ($data->isInitialized('lastModifiedDate') && $data->getLastModifiedDate() !== null) {
            $dataArray['lastModifiedDate'] = $data->getLastModifiedDate();
        }
        if ($data->isInitialized('succeededCreateCount') && $data->getSucceededCreateCount() !== null) {
            $dataArray['succeededCreateCount'] = $data->getSucceededCreateCount();
        }
        if ($data->isInitialized('succeededUpdateCount') && $data->getSucceededUpdateCount() !== null) {
            $dataArray['succeededUpdateCount'] = $data->getSucceededUpdateCount();
        }
        if ($data->isInitialized('totalCount') && $data->getTotalCount() !== null) {
            $dataArray['totalCount'] = $data->getTotalCount();
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
        return [\Webhubworks\WeclappApiCore\Model\JobProgress::class => false];
    }
}
