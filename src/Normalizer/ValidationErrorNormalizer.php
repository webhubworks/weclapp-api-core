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
class ValidationErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ValidationError::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ValidationError::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ValidationError();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowed', $data)) {
            $values = [];
            foreach ($data['allowed'] as $value) {
                $values[] = $value;
            }
            $object->setAllowed($values);
            unset($data['allowed']);
        }
        if (\array_key_exists('detail', $data)) {
            $object->setDetail($data['detail']);
            unset($data['detail']);
        }
        if (\array_key_exists('errorCode', $data)) {
            $object->setErrorCode($data['errorCode']);
            unset($data['errorCode']);
        }
        if (\array_key_exists('instance', $data)) {
            $object->setInstance($data['instance']);
            unset($data['instance']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('allowed') && null !== $data->getAllowed()) {
            $values = [];
            foreach ($data->getAllowed() as $value) {
                $values[] = $value;
            }
            $dataArray['allowed'] = $values;
        }
        if ($data->isInitialized('detail') && null !== $data->getDetail()) {
            $dataArray['detail'] = $data->getDetail();
        }
        if ($data->isInitialized('errorCode') && null !== $data->getErrorCode()) {
            $dataArray['errorCode'] = $data->getErrorCode();
        }
        if ($data->isInitialized('instance') && null !== $data->getInstance()) {
            $dataArray['instance'] = $data->getInstance();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        $dataArray['title'] = $data->getTitle();
        $dataArray['type'] = $data->getType();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ValidationError::class => false];
    }
}