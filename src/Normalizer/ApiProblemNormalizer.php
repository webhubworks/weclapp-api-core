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

class ApiProblemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ApiProblem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ApiProblem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ApiProblem;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('detail', $data)) {
            $object->setDetail($data['detail']);
            unset($data['detail']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($data['error']);
            unset($data['error']);
        }
        if (\array_key_exists('instance', $data)) {
            $object->setInstance($data['instance']);
            unset($data['instance']);
        }
        if (\array_key_exists('messages', $data)) {
            $values = [];
            foreach ($data['messages'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setMessages($values);
            unset($data['messages']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('validationErrors', $data)) {
            $values_2 = [];
            foreach ($data['validationErrors'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ValidationError::class, 'json', $context);
            }
            $object->setValidationErrors($values_2);
            unset($data['validationErrors']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('detail') && $data->getDetail() !== null) {
            $dataArray['detail'] = $data->getDetail();
        }
        if ($data->isInitialized('error') && $data->getError() !== null) {
            $dataArray['error'] = $data->getError();
        }
        if ($data->isInitialized('instance') && $data->getInstance() !== null) {
            $dataArray['instance'] = $data->getInstance();
        }
        if ($data->isInitialized('messages') && $data->getMessages() !== null) {
            $values = [];
            foreach ($data->getMessages() as $value) {
                $values_1 = [];
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $dataArray['messages'] = $values;
        }
        $dataArray['status'] = $data->getStatus();
        $dataArray['title'] = $data->getTitle();
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('validationErrors') && $data->getValidationErrors() !== null) {
            $values_2 = [];
            foreach ($data->getValidationErrors() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['validationErrors'] = $values_2;
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ApiProblem::class => false];
    }
}
