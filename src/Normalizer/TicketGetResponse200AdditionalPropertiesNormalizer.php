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
class TicketGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketGetResponse200AdditionalProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketGetResponse200AdditionalProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketGetResponse200AdditionalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assignmentTime', $data) && $data['assignmentTime'] !== null) {
            $values = [];
            foreach ($data['assignmentTime'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setAssignmentTime($values);
            unset($data['assignmentTime']);
        }
        elseif (\array_key_exists('assignmentTime', $data) && $data['assignmentTime'] === null) {
            $object->setAssignmentTime(null);
        }
        if (\array_key_exists('billableTime', $data) && $data['billableTime'] !== null) {
            $values_1 = [];
            foreach ($data['billableTime'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setBillableTime($values_1);
            unset($data['billableTime']);
        }
        elseif (\array_key_exists('billableTime', $data) && $data['billableTime'] === null) {
            $object->setBillableTime(null);
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
        if (\array_key_exists('invoiceableTime', $data) && $data['invoiceableTime'] !== null) {
            $values_3 = [];
            foreach ($data['invoiceableTime'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setInvoiceableTime($values_3);
            unset($data['invoiceableTime']);
        }
        elseif (\array_key_exists('invoiceableTime', $data) && $data['invoiceableTime'] === null) {
            $object->setInvoiceableTime(null);
        }
        if (\array_key_exists('processTime', $data) && $data['processTime'] !== null) {
            $values_4 = [];
            foreach ($data['processTime'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setProcessTime($values_4);
            unset($data['processTime']);
        }
        elseif (\array_key_exists('processTime', $data) && $data['processTime'] === null) {
            $object->setProcessTime(null);
        }
        if (\array_key_exists('resolutionTime', $data) && $data['resolutionTime'] !== null) {
            $values_5 = [];
            foreach ($data['resolutionTime'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setResolutionTime($values_5);
            unset($data['resolutionTime']);
        }
        elseif (\array_key_exists('resolutionTime', $data) && $data['resolutionTime'] === null) {
            $object->setResolutionTime(null);
        }
        if (\array_key_exists('responseTime', $data) && $data['responseTime'] !== null) {
            $values_6 = [];
            foreach ($data['responseTime'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\Duration::class, 'json', $context);
            }
            $object->setResponseTime($values_6);
            unset($data['responseTime']);
        }
        elseif (\array_key_exists('responseTime', $data) && $data['responseTime'] === null) {
            $object->setResponseTime(null);
        }
        if (\array_key_exists('tasksCompleted', $data) && $data['tasksCompleted'] !== null) {
            $values_7 = [];
            foreach ($data['tasksCompleted'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setTasksCompleted($values_7);
            unset($data['tasksCompleted']);
        }
        elseif (\array_key_exists('tasksCompleted', $data) && $data['tasksCompleted'] === null) {
            $object->setTasksCompleted(null);
        }
        if (\array_key_exists('tasksCompletedPercentage', $data) && $data['tasksCompletedPercentage'] !== null) {
            $values_8 = [];
            foreach ($data['tasksCompletedPercentage'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setTasksCompletedPercentage($values_8);
            unset($data['tasksCompletedPercentage']);
        }
        elseif (\array_key_exists('tasksCompletedPercentage', $data) && $data['tasksCompletedPercentage'] === null) {
            $object->setTasksCompletedPercentage(null);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_9;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('assignmentTime') && null !== $data->getAssignmentTime()) {
            $values = [];
            foreach ($data->getAssignmentTime() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['assignmentTime'] = $values;
        }
        if ($data->isInitialized('billableTime') && null !== $data->getBillableTime()) {
            $values_1 = [];
            foreach ($data->getBillableTime() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['billableTime'] = $values_1;
        }
        if ($data->isInitialized('costOfServices') && null !== $data->getCostOfServices()) {
            $values_2 = [];
            foreach ($data->getCostOfServices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['costOfServices'] = $values_2;
        }
        if ($data->isInitialized('invoiceableTime') && null !== $data->getInvoiceableTime()) {
            $values_3 = [];
            foreach ($data->getInvoiceableTime() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['invoiceableTime'] = $values_3;
        }
        if ($data->isInitialized('processTime') && null !== $data->getProcessTime()) {
            $values_4 = [];
            foreach ($data->getProcessTime() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['processTime'] = $values_4;
        }
        if ($data->isInitialized('resolutionTime') && null !== $data->getResolutionTime()) {
            $values_5 = [];
            foreach ($data->getResolutionTime() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['resolutionTime'] = $values_5;
        }
        if ($data->isInitialized('responseTime') && null !== $data->getResponseTime()) {
            $values_6 = [];
            foreach ($data->getResponseTime() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['responseTime'] = $values_6;
        }
        if ($data->isInitialized('tasksCompleted') && null !== $data->getTasksCompleted()) {
            $values_7 = [];
            foreach ($data->getTasksCompleted() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['tasksCompleted'] = $values_7;
        }
        if ($data->isInitialized('tasksCompletedPercentage') && null !== $data->getTasksCompletedPercentage()) {
            $values_8 = [];
            foreach ($data->getTasksCompletedPercentage() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['tasksCompletedPercentage'] = $values_8;
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_9;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TicketGetResponse200AdditionalProperties::class => false];
    }
}