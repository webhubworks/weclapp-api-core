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
class CalendarEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\CalendarEvent();
        if (\array_key_exists('allDayEvent', $data) && \is_int($data['allDayEvent'])) {
            $data['allDayEvent'] = (bool) $data['allDayEvent'];
        }
        if (\array_key_exists('deleted', $data) && \is_int($data['deleted'])) {
            $data['deleted'] = (bool) $data['deleted'];
        }
        if (\array_key_exists('privateEvent', $data) && \is_int($data['privateEvent'])) {
            $data['privateEvent'] = (bool) $data['privateEvent'];
        }
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
        if (\array_key_exists('allDayEvent', $data) && $data['allDayEvent'] !== null) {
            $object->setAllDayEvent($data['allDayEvent']);
            unset($data['allDayEvent']);
        }
        elseif (\array_key_exists('allDayEvent', $data) && $data['allDayEvent'] === null) {
            $object->setAllDayEvent(null);
        }
        if (\array_key_exists('attendees', $data) && $data['attendees'] !== null) {
            $values = [];
            foreach ($data['attendees'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CalendarEventAttendee::class, 'json', $context);
            }
            $object->setAttendees($values);
            unset($data['attendees']);
        }
        elseif (\array_key_exists('attendees', $data) && $data['attendees'] === null) {
            $object->setAttendees(null);
        }
        if (\array_key_exists('calendarId', $data) && $data['calendarId'] !== null) {
            $object->setCalendarId($data['calendarId']);
            unset($data['calendarId']);
        }
        elseif (\array_key_exists('calendarId', $data) && $data['calendarId'] === null) {
            $object->setCalendarId(null);
        }
        if (\array_key_exists('concerningId', $data) && $data['concerningId'] !== null) {
            $object->setConcerningId($data['concerningId']);
            unset($data['concerningId']);
        }
        elseif (\array_key_exists('concerningId', $data) && $data['concerningId'] === null) {
            $object->setConcerningId(null);
        }
        if (\array_key_exists('contactId', $data) && $data['contactId'] !== null) {
            $object->setContactId($data['contactId']);
            unset($data['contactId']);
        }
        elseif (\array_key_exists('contactId', $data) && $data['contactId'] === null) {
            $object->setContactId(null);
        }
        if (\array_key_exists('deleted', $data) && $data['deleted'] !== null) {
            $object->setDeleted($data['deleted']);
            unset($data['deleted']);
        }
        elseif (\array_key_exists('deleted', $data) && $data['deleted'] === null) {
            $object->setDeleted(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('privateEvent', $data) && $data['privateEvent'] !== null) {
            $object->setPrivateEvent($data['privateEvent']);
            unset($data['privateEvent']);
        }
        elseif (\array_key_exists('privateEvent', $data) && $data['privateEvent'] === null) {
            $object->setPrivateEvent(null);
        }
        if (\array_key_exists('recurringEvent', $data) && $data['recurringEvent'] !== null) {
            $object->setRecurringEvent($this->denormalizer->denormalize($data['recurringEvent'], \Webhubworks\WeclappApiCore\Model\RecurringEvent::class, 'json', $context));
            unset($data['recurringEvent']);
        }
        elseif (\array_key_exists('recurringEvent', $data) && $data['recurringEvent'] === null) {
            $object->setRecurringEvent(null);
        }
        if (\array_key_exists('references', $data) && $data['references'] !== null) {
            $values_1 = [];
            foreach ($data['references'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setReferences($values_1);
            unset($data['references']);
        }
        elseif (\array_key_exists('references', $data) && $data['references'] === null) {
            $object->setReferences(null);
        }
        if (\array_key_exists('reminderSendType', $data) && $data['reminderSendType'] !== null) {
            $object->setReminderSendType($data['reminderSendType']);
            unset($data['reminderSendType']);
        }
        elseif (\array_key_exists('reminderSendType', $data) && $data['reminderSendType'] === null) {
            $object->setReminderSendType(null);
        }
        if (\array_key_exists('reminderTime', $data) && $data['reminderTime'] !== null) {
            $object->setReminderTime($data['reminderTime']);
            unset($data['reminderTime']);
        }
        elseif (\array_key_exists('reminderTime', $data) && $data['reminderTime'] === null) {
            $object->setReminderTime(null);
        }
        if (\array_key_exists('showAs', $data) && $data['showAs'] !== null) {
            $object->setShowAs($data['showAs']);
            unset($data['showAs']);
        }
        elseif (\array_key_exists('showAs', $data) && $data['showAs'] === null) {
            $object->setShowAs(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('allDayEvent') && null !== $data->getAllDayEvent()) {
            $dataArray['allDayEvent'] = $data->getAllDayEvent();
        }
        if ($data->isInitialized('attendees') && null !== $data->getAttendees()) {
            $values = [];
            foreach ($data->getAttendees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attendees'] = $values;
        }
        if ($data->isInitialized('calendarId') && null !== $data->getCalendarId()) {
            $dataArray['calendarId'] = $data->getCalendarId();
        }
        if ($data->isInitialized('concerningId') && null !== $data->getConcerningId()) {
            $dataArray['concerningId'] = $data->getConcerningId();
        }
        if ($data->isInitialized('contactId') && null !== $data->getContactId()) {
            $dataArray['contactId'] = $data->getContactId();
        }
        if ($data->isInitialized('deleted') && null !== $data->getDeleted()) {
            $dataArray['deleted'] = $data->getDeleted();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('endDate') && null !== $data->getEndDate()) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('privateEvent') && null !== $data->getPrivateEvent()) {
            $dataArray['privateEvent'] = $data->getPrivateEvent();
        }
        if ($data->isInitialized('recurringEvent') && null !== $data->getRecurringEvent()) {
            $dataArray['recurringEvent'] = $this->normalizer->normalize($data->getRecurringEvent(), 'json', $context);
        }
        if ($data->isInitialized('references') && null !== $data->getReferences()) {
            $values_1 = [];
            foreach ($data->getReferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['references'] = $values_1;
        }
        if ($data->isInitialized('reminderSendType') && null !== $data->getReminderSendType()) {
            $dataArray['reminderSendType'] = $data->getReminderSendType();
        }
        if ($data->isInitialized('reminderTime') && null !== $data->getReminderTime()) {
            $dataArray['reminderTime'] = $data->getReminderTime();
        }
        if ($data->isInitialized('showAs') && null !== $data->getShowAs()) {
            $dataArray['showAs'] = $data->getShowAs();
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
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