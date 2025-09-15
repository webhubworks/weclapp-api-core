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
class ApiProblemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\ApiProblem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->setDetail($data['detail']);
            unset($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
        }
        if (\array_key_exists('error', $data) && $data['error'] !== null) {
            $object->setError($data['error']);
            unset($data['error']);
        }
        elseif (\array_key_exists('error', $data) && $data['error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('instance', $data) && $data['instance'] !== null) {
            $object->setInstance($data['instance']);
            unset($data['instance']);
        }
        elseif (\array_key_exists('instance', $data) && $data['instance'] === null) {
            $object->setInstance(null);
        }
        if (\array_key_exists('messages', $data) && $data['messages'] !== null) {
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
        elseif (\array_key_exists('messages', $data) && $data['messages'] === null) {
            $object->setMessages(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('validationErrors', $data) && $data['validationErrors'] !== null) {
            $values_2 = [];
            foreach ($data['validationErrors'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ValidationError::class, 'json', $context);
            }
            $object->setValidationErrors($values_2);
            unset($data['validationErrors']);
        }
        elseif (\array_key_exists('validationErrors', $data) && $data['validationErrors'] === null) {
            $object->setValidationErrors(null);
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
        if ($data->isInitialized('detail') && null !== $data->getDetail()) {
            $dataArray['detail'] = $data->getDetail();
        }
        if ($data->isInitialized('error') && null !== $data->getError()) {
            $dataArray['error'] = $data->getError();
        }
        if ($data->isInitialized('instance') && null !== $data->getInstance()) {
            $dataArray['instance'] = $data->getInstance();
        }
        if ($data->isInitialized('messages') && null !== $data->getMessages()) {
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
        if ($data->isInitialized('validationErrors') && null !== $data->getValidationErrors()) {
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