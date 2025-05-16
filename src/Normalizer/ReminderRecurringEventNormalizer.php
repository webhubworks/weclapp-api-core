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

class ReminderRecurringEventNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('endsOnDate', $data)) {
            $object->setEndsOnDate($data['endsOnDate']);
            unset($data['endsOnDate']);
        }
        if (\array_key_exists('eventInterval', $data)) {
            $object->setEventInterval($data['eventInterval']);
            unset($data['eventInterval']);
        }
        if (\array_key_exists('eventOccurrenceCount', $data)) {
            $object->setEventOccurrenceCount($data['eventOccurrenceCount']);
            unset($data['eventOccurrenceCount']);
        }
        if (\array_key_exists('eventType', $data)) {
            $object->setEventType($data['eventType']);
            unset($data['eventType']);
        }
        if (\array_key_exists('repeatOn', $data)) {
            $object->setRepeatOn($data['repeatOn']);
            unset($data['repeatOn']);
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
        if ($data->isInitialized('endsOnDate') && $data->getEndsOnDate() !== null) {
            $dataArray['endsOnDate'] = $data->getEndsOnDate();
        }
        if ($data->isInitialized('eventInterval') && $data->getEventInterval() !== null) {
            $dataArray['eventInterval'] = $data->getEventInterval();
        }
        if ($data->isInitialized('eventOccurrenceCount') && $data->getEventOccurrenceCount() !== null) {
            $dataArray['eventOccurrenceCount'] = $data->getEventOccurrenceCount();
        }
        if ($data->isInitialized('eventType') && $data->getEventType() !== null) {
            $dataArray['eventType'] = $data->getEventType();
        }
        if ($data->isInitialized('repeatOn') && $data->getRepeatOn() !== null) {
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
