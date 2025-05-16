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

class SalesOrderGetResponse200AdditionalPropertiesNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('bookedBillableWork', $data)) {
            $values = [];
            foreach ($data['bookedBillableWork'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBookedBillableWork($values);
            unset($data['bookedBillableWork']);
        }
        if (\array_key_exists('bookedWork', $data)) {
            $values_1 = [];
            foreach ($data['bookedWork'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBookedWork($values_1);
            unset($data['bookedWork']);
        }
        if (\array_key_exists('costOfServices', $data)) {
            $values_2 = [];
            foreach ($data['costOfServices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setCostOfServices($values_2);
            unset($data['costOfServices']);
        }
        if (\array_key_exists('invoiceableServices', $data)) {
            $values_3 = [];
            foreach ($data['invoiceableServices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setInvoiceableServices($values_3);
            unset($data['invoiceableServices']);
        }
        if (\array_key_exists('invoicedServices', $data)) {
            $values_4 = [];
            foreach ($data['invoicedServices'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setInvoicedServices($values_4);
            unset($data['invoicedServices']);
        }
        if (\array_key_exists('notInvoicedServices', $data)) {
            $values_5 = [];
            foreach ($data['notInvoicedServices'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\Amount::class, 'json', $context);
            }
            $object->setNotInvoicedServices($values_5);
            unset($data['notInvoicedServices']);
        }
        if (\array_key_exists('plannedBillableEffort', $data)) {
            $values_6 = [];
            foreach ($data['plannedBillableEffort'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setPlannedBillableEffort($values_6);
            unset($data['plannedBillableEffort']);
        }
        if (\array_key_exists('plannedEffort', $data)) {
            $values_7 = [];
            foreach ($data['plannedEffort'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setPlannedEffort($values_7);
            unset($data['plannedEffort']);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bookedBillableWork') && $data->getBookedBillableWork() !== null) {
            $values = [];
            foreach ($data->getBookedBillableWork() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['bookedBillableWork'] = $values;
        }
        if ($data->isInitialized('bookedWork') && $data->getBookedWork() !== null) {
            $values_1 = [];
            foreach ($data->getBookedWork() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['bookedWork'] = $values_1;
        }
        if ($data->isInitialized('costOfServices') && $data->getCostOfServices() !== null) {
            $values_2 = [];
            foreach ($data->getCostOfServices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['costOfServices'] = $values_2;
        }
        if ($data->isInitialized('invoiceableServices') && $data->getInvoiceableServices() !== null) {
            $values_3 = [];
            foreach ($data->getInvoiceableServices() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['invoiceableServices'] = $values_3;
        }
        if ($data->isInitialized('invoicedServices') && $data->getInvoicedServices() !== null) {
            $values_4 = [];
            foreach ($data->getInvoicedServices() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['invoicedServices'] = $values_4;
        }
        if ($data->isInitialized('notInvoicedServices') && $data->getNotInvoicedServices() !== null) {
            $values_5 = [];
            foreach ($data->getNotInvoicedServices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['notInvoicedServices'] = $values_5;
        }
        if ($data->isInitialized('plannedBillableEffort') && $data->getPlannedBillableEffort() !== null) {
            $values_6 = [];
            foreach ($data->getPlannedBillableEffort() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['plannedBillableEffort'] = $values_6;
        }
        if ($data->isInitialized('plannedEffort') && $data->getPlannedEffort() !== null) {
            $values_7 = [];
            foreach ($data->getPlannedEffort() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['plannedEffort'] = $values_7;
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_8;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties::class => false];
    }
}
