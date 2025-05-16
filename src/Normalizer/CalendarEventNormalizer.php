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

class CalendarEventNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CalendarEvent::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CalendarEvent::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CalendarEvent;
        if (\array_key_exists('allDayEvent', $data) && \is_int($data['allDayEvent'])) {
            $data['allDayEvent'] = (bool) $data['allDayEvent'];
        }
        if (\array_key_exists('deleted', $data) && \is_int($data['deleted'])) {
            $data['deleted'] = (bool) $data['deleted'];
        }
        if (\array_key_exists('privateEvent', $data) && \is_int($data['privateEvent'])) {
            $data['privateEvent'] = (bool) $data['privateEvent'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        if (\array_key_exists('lastModifiedDate', $data)) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        if (\array_key_exists('allDayEvent', $data)) {
            $object->setAllDayEvent($data['allDayEvent']);
            unset($data['allDayEvent']);
        }
        if (\array_key_exists('attendees', $data)) {
            $values = [];
            foreach ($data['attendees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CalendarEventAttendee::class, 'json', $context);
            }
            $object->setAttendees($values);
            unset($data['attendees']);
        }
        if (\array_key_exists('calendarId', $data)) {
            $object->setCalendarId($data['calendarId']);
            unset($data['calendarId']);
        }
        if (\array_key_exists('concerningId', $data)) {
            $object->setConcerningId($data['concerningId']);
            unset($data['concerningId']);
        }
        if (\array_key_exists('contactId', $data)) {
            $object->setContactId($data['contactId']);
            unset($data['contactId']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
            unset($data['deleted']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('privateEvent', $data)) {
            $object->setPrivateEvent($data['privateEvent']);
            unset($data['privateEvent']);
        }
        if (\array_key_exists('recurringEvent', $data)) {
            $object->setRecurringEvent($this->denormalizer->denormalize($data['recurringEvent'], \Webhubworks\WeclappApiCore\Model\RecurringEvent::class, 'json', $context));
            unset($data['recurringEvent']);
        }
        if (\array_key_exists('references', $data)) {
            $values_1 = [];
            foreach ($data['references'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setReferences($values_1);
            unset($data['references']);
        }
        if (\array_key_exists('reminderSendType', $data)) {
            $object->setReminderSendType($data['reminderSendType']);
            unset($data['reminderSendType']);
        }
        if (\array_key_exists('reminderTime', $data)) {
            $object->setReminderTime($data['reminderTime']);
            unset($data['reminderTime']);
        }
        if (\array_key_exists('showAs', $data)) {
            $object->setShowAs($data['showAs']);
            unset($data['showAs']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('allDayEvent') && $data->getAllDayEvent() !== null) {
            $dataArray['allDayEvent'] = $data->getAllDayEvent();
        }
        if ($data->isInitialized('attendees') && $data->getAttendees() !== null) {
            $values = [];
            foreach ($data->getAttendees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attendees'] = $values;
        }
        if ($data->isInitialized('calendarId') && $data->getCalendarId() !== null) {
            $dataArray['calendarId'] = $data->getCalendarId();
        }
        if ($data->isInitialized('concerningId') && $data->getConcerningId() !== null) {
            $dataArray['concerningId'] = $data->getConcerningId();
        }
        if ($data->isInitialized('contactId') && $data->getContactId() !== null) {
            $dataArray['contactId'] = $data->getContactId();
        }
        if ($data->isInitialized('deleted') && $data->getDeleted() !== null) {
            $dataArray['deleted'] = $data->getDeleted();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('location') && $data->getLocation() !== null) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('privateEvent') && $data->getPrivateEvent() !== null) {
            $dataArray['privateEvent'] = $data->getPrivateEvent();
        }
        if ($data->isInitialized('recurringEvent') && $data->getRecurringEvent() !== null) {
            $dataArray['recurringEvent'] = $this->normalizer->normalize($data->getRecurringEvent(), 'json', $context);
        }
        if ($data->isInitialized('references') && $data->getReferences() !== null) {
            $values_1 = [];
            foreach ($data->getReferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['references'] = $values_1;
        }
        if ($data->isInitialized('reminderSendType') && $data->getReminderSendType() !== null) {
            $dataArray['reminderSendType'] = $data->getReminderSendType();
        }
        if ($data->isInitialized('reminderTime') && $data->getReminderTime() !== null) {
            $dataArray['reminderTime'] = $data->getReminderTime();
        }
        if ($data->isInitialized('showAs') && $data->getShowAs() !== null) {
            $dataArray['showAs'] = $data->getShowAs();
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('subject') && $data->getSubject() !== null) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('userId') && $data->getUserId() !== null) {
            $dataArray['userId'] = $data->getUserId();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\CalendarEvent::class => false];
    }
}
