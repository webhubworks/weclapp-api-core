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
class ShipmentGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200AdditionalProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200AdditionalProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200AdditionalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('availability', $data) && $data['availability'] !== null) {
            $values = [];
            foreach ($data['availability'] as $value) {
                $values[] = $value;
            }
            $object->setAvailability($values);
            unset($data['availability']);
        }
        elseif (\array_key_exists('availability', $data) && $data['availability'] === null) {
            $object->setAvailability(null);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data) && $data['availabilityForAllWarehouses'] !== null) {
            $values_1 = [];
            foreach ($data['availabilityForAllWarehouses'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAvailabilityForAllWarehouses($values_1);
            unset($data['availabilityForAllWarehouses']);
        }
        elseif (\array_key_exists('availabilityForAllWarehouses', $data) && $data['availabilityForAllWarehouses'] === null) {
            $object->setAvailabilityForAllWarehouses(null);
        }
        if (\array_key_exists('itemsAvailability', $data) && $data['itemsAvailability'] !== null) {
            $values_2 = [];
            foreach ($data['itemsAvailability'] as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ItemAvailability::class, 'json', $context);
                }
                $values_2[] = $values_3;
            }
            $object->setItemsAvailability($values_2);
            unset($data['itemsAvailability']);
        }
        elseif (\array_key_exists('itemsAvailability', $data) && $data['itemsAvailability'] === null) {
            $object->setItemsAvailability(null);
        }
        if (\array_key_exists('itemsAvailabilityForAllWarehouses', $data) && $data['itemsAvailabilityForAllWarehouses'] !== null) {
            $values_4 = [];
            foreach ($data['itemsAvailabilityForAllWarehouses'] as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\ItemAvailability::class, 'json', $context);
                }
                $values_4[] = $values_5;
            }
            $object->setItemsAvailabilityForAllWarehouses($values_4);
            unset($data['itemsAvailabilityForAllWarehouses']);
        }
        elseif (\array_key_exists('itemsAvailabilityForAllWarehouses', $data) && $data['itemsAvailabilityForAllWarehouses'] === null) {
            $object->setItemsAvailabilityForAllWarehouses(null);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $values = [];
            foreach ($data->getAvailability() as $value) {
                $values[] = $value;
            }
            $dataArray['availability'] = $values;
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && null !== $data->getAvailabilityForAllWarehouses()) {
            $values_1 = [];
            foreach ($data->getAvailabilityForAllWarehouses() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['availabilityForAllWarehouses'] = $values_1;
        }
        if ($data->isInitialized('itemsAvailability') && null !== $data->getItemsAvailability()) {
            $values_2 = [];
            foreach ($data->getItemsAvailability() as $value_2) {
                $values_3 = [];
                foreach ($value_2 as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_2[] = $values_3;
            }
            $dataArray['itemsAvailability'] = $values_2;
        }
        if ($data->isInitialized('itemsAvailabilityForAllWarehouses') && null !== $data->getItemsAvailabilityForAllWarehouses()) {
            $values_4 = [];
            foreach ($data->getItemsAvailabilityForAllWarehouses() as $value_4) {
                $values_5 = [];
                foreach ($value_4 as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $values_4[] = $values_5;
            }
            $dataArray['itemsAvailabilityForAllWarehouses'] = $values_4;
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200AdditionalProperties::class => false];
    }
}