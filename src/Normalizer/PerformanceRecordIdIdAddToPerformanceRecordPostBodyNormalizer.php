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
class PerformanceRecordIdIdAddToPerformanceRecordPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PerformanceRecordIdIdAddToPerformanceRecordPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PerformanceRecordIdIdAddToPerformanceRecordPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PerformanceRecordIdIdAddToPerformanceRecordPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('orderItemIds', $data) && $data['orderItemIds'] !== null) {
            $values = [];
            foreach ($data['orderItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setOrderItemIds($values);
            unset($data['orderItemIds']);
        }
        elseif (\array_key_exists('orderItemIds', $data) && $data['orderItemIds'] === null) {
            $object->setOrderItemIds(null);
        }
        if (\array_key_exists('taskIds', $data) && $data['taskIds'] !== null) {
            $values_1 = [];
            foreach ($data['taskIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTaskIds($values_1);
            unset($data['taskIds']);
        }
        elseif (\array_key_exists('taskIds', $data) && $data['taskIds'] === null) {
            $object->setTaskIds(null);
        }
        if (\array_key_exists('timeRecordIds', $data) && $data['timeRecordIds'] !== null) {
            $values_2 = [];
            foreach ($data['timeRecordIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTimeRecordIds($values_2);
            unset($data['timeRecordIds']);
        }
        elseif (\array_key_exists('timeRecordIds', $data) && $data['timeRecordIds'] === null) {
            $object->setTimeRecordIds(null);
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
        if ($data->isInitialized('orderItemIds') && null !== $data->getOrderItemIds()) {
            $values = [];
            foreach ($data->getOrderItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['orderItemIds'] = $values;
        }
        if ($data->isInitialized('taskIds') && null !== $data->getTaskIds()) {
            $values_1 = [];
            foreach ($data->getTaskIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['taskIds'] = $values_1;
        }
        if ($data->isInitialized('timeRecordIds') && null !== $data->getTimeRecordIds()) {
            $values_2 = [];
            foreach ($data->getTimeRecordIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['timeRecordIds'] = $values_2;
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
        return [\Webhubworks\WeclappApiCore\Model\PerformanceRecordIdIdAddToPerformanceRecordPostBody::class => false];
    }
}