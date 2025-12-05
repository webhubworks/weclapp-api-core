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
class TaskGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TaskGetResponse200AdditionalProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TaskGetResponse200AdditionalProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TaskGetResponse200AdditionalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bookedBillableWork', $data) && $data['bookedBillableWork'] !== null) {
            $values = [];
            foreach ($data['bookedBillableWork'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBookedBillableWork($values);
            unset($data['bookedBillableWork']);
        }
        elseif (\array_key_exists('bookedBillableWork', $data) && $data['bookedBillableWork'] === null) {
            $object->setBookedBillableWork(null);
        }
        if (\array_key_exists('bookedWork', $data) && $data['bookedWork'] !== null) {
            $values_1 = [];
            foreach ($data['bookedWork'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBookedWork($values_1);
            unset($data['bookedWork']);
        }
        elseif (\array_key_exists('bookedWork', $data) && $data['bookedWork'] === null) {
            $object->setBookedWork(null);
        }
        if (\array_key_exists('costOfServices', $data) && $data['costOfServices'] !== null) {
            $values_2 = [];
            foreach ($data['costOfServices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setCostOfServices($values_2);
            unset($data['costOfServices']);
        }
        elseif (\array_key_exists('costOfServices', $data) && $data['costOfServices'] === null) {
            $object->setCostOfServices(null);
        }
        if (\array_key_exists('fullPositionNumber', $data) && $data['fullPositionNumber'] !== null) {
            $values_3 = [];
            foreach ($data['fullPositionNumber'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setFullPositionNumber($values_3);
            unset($data['fullPositionNumber']);
        }
        elseif (\array_key_exists('fullPositionNumber', $data) && $data['fullPositionNumber'] === null) {
            $object->setFullPositionNumber(null);
        }
        if (\array_key_exists('orderItemNumber', $data) && $data['orderItemNumber'] !== null) {
            $values_4 = [];
            foreach ($data['orderItemNumber'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setOrderItemNumber($values_4);
            unset($data['orderItemNumber']);
        }
        elseif (\array_key_exists('orderItemNumber', $data) && $data['orderItemNumber'] === null) {
            $object->setOrderItemNumber(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bookedBillableWork') && null !== $data->getBookedBillableWork()) {
            $values = [];
            foreach ($data->getBookedBillableWork() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['bookedBillableWork'] = $values;
        }
        if ($data->isInitialized('bookedWork') && null !== $data->getBookedWork()) {
            $values_1 = [];
            foreach ($data->getBookedWork() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['bookedWork'] = $values_1;
        }
        if ($data->isInitialized('costOfServices') && null !== $data->getCostOfServices()) {
            $values_2 = [];
            foreach ($data->getCostOfServices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['costOfServices'] = $values_2;
        }
        if ($data->isInitialized('fullPositionNumber') && null !== $data->getFullPositionNumber()) {
            $values_3 = [];
            foreach ($data->getFullPositionNumber() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['fullPositionNumber'] = $values_3;
        }
        if ($data->isInitialized('orderItemNumber') && null !== $data->getOrderItemNumber()) {
            $values_4 = [];
            foreach ($data->getOrderItemNumber() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['orderItemNumber'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TaskGetResponse200AdditionalProperties::class => false];
    }
}