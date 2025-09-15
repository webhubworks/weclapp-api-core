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
class SalesOrderGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties();
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
        if (\array_key_exists('bookedBillableWork', $data) && $data['bookedBillableWork'] !== null) {
            $values_2 = [];
            foreach ($data['bookedBillableWork'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBookedBillableWork($values_2);
            unset($data['bookedBillableWork']);
        }
        elseif (\array_key_exists('bookedBillableWork', $data) && $data['bookedBillableWork'] === null) {
            $object->setBookedBillableWork(null);
        }
        if (\array_key_exists('bookedWork', $data) && $data['bookedWork'] !== null) {
            $values_3 = [];
            foreach ($data['bookedWork'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBookedWork($values_3);
            unset($data['bookedWork']);
        }
        elseif (\array_key_exists('bookedWork', $data) && $data['bookedWork'] === null) {
            $object->setBookedWork(null);
        }
        if (\array_key_exists('consignment', $data) && $data['consignment'] !== null) {
            $values_4 = [];
            foreach ($data['consignment'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setConsignment($values_4);
            unset($data['consignment']);
        }
        elseif (\array_key_exists('consignment', $data) && $data['consignment'] === null) {
            $object->setConsignment(null);
        }
        if (\array_key_exists('costOfServices', $data) && $data['costOfServices'] !== null) {
            $values_5 = [];
            foreach ($data['costOfServices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setCostOfServices($values_5);
            unset($data['costOfServices']);
        }
        elseif (\array_key_exists('costOfServices', $data) && $data['costOfServices'] === null) {
            $object->setCostOfServices(null);
        }
        if (\array_key_exists('invoiceableServices', $data) && $data['invoiceableServices'] !== null) {
            $values_6 = [];
            foreach ($data['invoiceableServices'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setInvoiceableServices($values_6);
            unset($data['invoiceableServices']);
        }
        elseif (\array_key_exists('invoiceableServices', $data) && $data['invoiceableServices'] === null) {
            $object->setInvoiceableServices(null);
        }
        if (\array_key_exists('invoicedServices', $data) && $data['invoicedServices'] !== null) {
            $values_7 = [];
            foreach ($data['invoicedServices'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setInvoicedServices($values_7);
            unset($data['invoicedServices']);
        }
        elseif (\array_key_exists('invoicedServices', $data) && $data['invoicedServices'] === null) {
            $object->setInvoicedServices(null);
        }
        if (\array_key_exists('itemsAvailability', $data) && $data['itemsAvailability'] !== null) {
            $values_8 = [];
            foreach ($data['itemsAvailability'] as $value_8) {
                $values_9 = [];
                foreach ($value_8 as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, \Webhubworks\WeclappApiCore\Model\ItemAvailability::class, 'json', $context);
                }
                $values_8[] = $values_9;
            }
            $object->setItemsAvailability($values_8);
            unset($data['itemsAvailability']);
        }
        elseif (\array_key_exists('itemsAvailability', $data) && $data['itemsAvailability'] === null) {
            $object->setItemsAvailability(null);
        }
        if (\array_key_exists('itemsAvailabilityForAllWarehouses', $data) && $data['itemsAvailabilityForAllWarehouses'] !== null) {
            $values_10 = [];
            foreach ($data['itemsAvailabilityForAllWarehouses'] as $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, \Webhubworks\WeclappApiCore\Model\ItemAvailability::class, 'json', $context);
                }
                $values_10[] = $values_11;
            }
            $object->setItemsAvailabilityForAllWarehouses($values_10);
            unset($data['itemsAvailabilityForAllWarehouses']);
        }
        elseif (\array_key_exists('itemsAvailabilityForAllWarehouses', $data) && $data['itemsAvailabilityForAllWarehouses'] === null) {
            $object->setItemsAvailabilityForAllWarehouses(null);
        }
        if (\array_key_exists('notInvoicedServices', $data) && $data['notInvoicedServices'] !== null) {
            $values_12 = [];
            foreach ($data['notInvoicedServices'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setNotInvoicedServices($values_12);
            unset($data['notInvoicedServices']);
        }
        elseif (\array_key_exists('notInvoicedServices', $data) && $data['notInvoicedServices'] === null) {
            $object->setNotInvoicedServices(null);
        }
        if (\array_key_exists('plannedBillableEffort', $data) && $data['plannedBillableEffort'] !== null) {
            $values_13 = [];
            foreach ($data['plannedBillableEffort'] as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setPlannedBillableEffort($values_13);
            unset($data['plannedBillableEffort']);
        }
        elseif (\array_key_exists('plannedBillableEffort', $data) && $data['plannedBillableEffort'] === null) {
            $object->setPlannedBillableEffort(null);
        }
        if (\array_key_exists('plannedEffort', $data) && $data['plannedEffort'] !== null) {
            $values_14 = [];
            foreach ($data['plannedEffort'] as $value_14) {
                $values_14[] = $this->denormalizer->denormalize($value_14, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setPlannedEffort($values_14);
            unset($data['plannedEffort']);
        }
        elseif (\array_key_exists('plannedEffort', $data) && $data['plannedEffort'] === null) {
            $object->setPlannedEffort(null);
        }
        foreach ($data as $key => $value_15) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_15;
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
        if ($data->isInitialized('bookedBillableWork') && null !== $data->getBookedBillableWork()) {
            $values_2 = [];
            foreach ($data->getBookedBillableWork() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['bookedBillableWork'] = $values_2;
        }
        if ($data->isInitialized('bookedWork') && null !== $data->getBookedWork()) {
            $values_3 = [];
            foreach ($data->getBookedWork() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['bookedWork'] = $values_3;
        }
        if ($data->isInitialized('consignment') && null !== $data->getConsignment()) {
            $values_4 = [];
            foreach ($data->getConsignment() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['consignment'] = $values_4;
        }
        if ($data->isInitialized('costOfServices') && null !== $data->getCostOfServices()) {
            $values_5 = [];
            foreach ($data->getCostOfServices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['costOfServices'] = $values_5;
        }
        if ($data->isInitialized('invoiceableServices') && null !== $data->getInvoiceableServices()) {
            $values_6 = [];
            foreach ($data->getInvoiceableServices() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['invoiceableServices'] = $values_6;
        }
        if ($data->isInitialized('invoicedServices') && null !== $data->getInvoicedServices()) {
            $values_7 = [];
            foreach ($data->getInvoicedServices() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['invoicedServices'] = $values_7;
        }
        if ($data->isInitialized('itemsAvailability') && null !== $data->getItemsAvailability()) {
            $values_8 = [];
            foreach ($data->getItemsAvailability() as $value_8) {
                $values_9 = [];
                foreach ($value_8 as $value_9) {
                    $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
                }
                $values_8[] = $values_9;
            }
            $dataArray['itemsAvailability'] = $values_8;
        }
        if ($data->isInitialized('itemsAvailabilityForAllWarehouses') && null !== $data->getItemsAvailabilityForAllWarehouses()) {
            $values_10 = [];
            foreach ($data->getItemsAvailabilityForAllWarehouses() as $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10[] = $values_11;
            }
            $dataArray['itemsAvailabilityForAllWarehouses'] = $values_10;
        }
        if ($data->isInitialized('notInvoicedServices') && null !== $data->getNotInvoicedServices()) {
            $values_12 = [];
            foreach ($data->getNotInvoicedServices() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $dataArray['notInvoicedServices'] = $values_12;
        }
        if ($data->isInitialized('plannedBillableEffort') && null !== $data->getPlannedBillableEffort()) {
            $values_13 = [];
            foreach ($data->getPlannedBillableEffort() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $dataArray['plannedBillableEffort'] = $values_13;
        }
        if ($data->isInitialized('plannedEffort') && null !== $data->getPlannedEffort()) {
            $values_14 = [];
            foreach ($data->getPlannedEffort() as $value_14) {
                $values_14[] = $this->normalizer->normalize($value_14, 'json', $context);
            }
            $dataArray['plannedEffort'] = $values_14;
        }
        foreach ($data as $key => $value_15) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_15;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties::class => false];
    }
}