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
class JobProgressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\JobProgress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('failedCreateCount', $data)) {
            $object->setFailedCreateCount($data['failedCreateCount']);
            unset($data['failedCreateCount']);
        }
        if (\array_key_exists('failedUpdateCount', $data)) {
            $object->setFailedUpdateCount($data['failedUpdateCount']);
            unset($data['failedUpdateCount']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('succeededCreateCount', $data)) {
            $object->setSucceededCreateCount($data['succeededCreateCount']);
            unset($data['succeededCreateCount']);
        }
        if (\array_key_exists('succeededUpdateCount', $data)) {
            $object->setSucceededUpdateCount($data['succeededUpdateCount']);
            unset($data['succeededUpdateCount']);
        }
        if (\array_key_exists('totalCount', $data)) {
            $object->setTotalCount($data['totalCount']);
            unset($data['totalCount']);
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
        if ($data->isInitialized('failedCreateCount') && null !== $data->getFailedCreateCount()) {
            $dataArray['failedCreateCount'] = $data->getFailedCreateCount();
        }
        if ($data->isInitialized('failedUpdateCount') && null !== $data->getFailedUpdateCount()) {
            $dataArray['failedUpdateCount'] = $data->getFailedUpdateCount();
        }
        if ($data->isInitialized('lastModifiedDate') && null !== $data->getLastModifiedDate()) {
            $dataArray['lastModifiedDate'] = $data->getLastModifiedDate();
        }
        if ($data->isInitialized('succeededCreateCount') && null !== $data->getSucceededCreateCount()) {
            $dataArray['succeededCreateCount'] = $data->getSucceededCreateCount();
        }
        if ($data->isInitialized('succeededUpdateCount') && null !== $data->getSucceededUpdateCount()) {
            $dataArray['succeededUpdateCount'] = $data->getSucceededUpdateCount();
        }
        if ($data->isInitialized('totalCount') && null !== $data->getTotalCount()) {
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