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
class ReminderRecurringEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('endsOnDate', $data) && $data['endsOnDate'] !== null) {
            $object->setEndsOnDate($data['endsOnDate']);
            unset($data['endsOnDate']);
        }
        elseif (\array_key_exists('endsOnDate', $data) && $data['endsOnDate'] === null) {
            $object->setEndsOnDate(null);
        }
        if (\array_key_exists('eventInterval', $data) && $data['eventInterval'] !== null) {
            $object->setEventInterval($data['eventInterval']);
            unset($data['eventInterval']);
        }
        elseif (\array_key_exists('eventInterval', $data) && $data['eventInterval'] === null) {
            $object->setEventInterval(null);
        }
        if (\array_key_exists('eventOccurrenceCount', $data) && $data['eventOccurrenceCount'] !== null) {
            $object->setEventOccurrenceCount($data['eventOccurrenceCount']);
            unset($data['eventOccurrenceCount']);
        }
        elseif (\array_key_exists('eventOccurrenceCount', $data) && $data['eventOccurrenceCount'] === null) {
            $object->setEventOccurrenceCount(null);
        }
        if (\array_key_exists('eventType', $data) && $data['eventType'] !== null) {
            $object->setEventType($data['eventType']);
            unset($data['eventType']);
        }
        elseif (\array_key_exists('eventType', $data) && $data['eventType'] === null) {
            $object->setEventType(null);
        }
        if (\array_key_exists('repeatOn', $data) && $data['repeatOn'] !== null) {
            $object->setRepeatOn($data['repeatOn']);
            unset($data['repeatOn']);
        }
        elseif (\array_key_exists('repeatOn', $data) && $data['repeatOn'] === null) {
            $object->setRepeatOn(null);
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
        if ($data->isInitialized('endsOnDate') && null !== $data->getEndsOnDate()) {
            $dataArray['endsOnDate'] = $data->getEndsOnDate();
        }
        if ($data->isInitialized('eventInterval') && null !== $data->getEventInterval()) {
            $dataArray['eventInterval'] = $data->getEventInterval();
        }
        if ($data->isInitialized('eventOccurrenceCount') && null !== $data->getEventOccurrenceCount()) {
            $dataArray['eventOccurrenceCount'] = $data->getEventOccurrenceCount();
        }
        if ($data->isInitialized('eventType') && null !== $data->getEventType()) {
            $dataArray['eventType'] = $data->getEventType();
        }
        if ($data->isInitialized('repeatOn') && null !== $data->getRepeatOn()) {
            $dataArray['repeatOn'] = $data->getRepeatOn();
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
        return [\Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class => false];
    }
}