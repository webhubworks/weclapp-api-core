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
class RecurringEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\RecurringEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\RecurringEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\RecurringEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('endsOn', $data) && $data['endsOn'] !== null) {
            $object->setEndsOn($data['endsOn']);
            unset($data['endsOn']);
        }
        elseif (\array_key_exists('endsOn', $data) && $data['endsOn'] === null) {
            $object->setEndsOn(null);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('endsOn') && null !== $data->getEndsOn()) {
            $dataArray['endsOn'] = $data->getEndsOn();
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
        return [\Webhubworks\WeclappApiCore\Model\RecurringEvent::class => false];
    }
}