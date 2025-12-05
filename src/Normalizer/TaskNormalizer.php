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
class TaskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Task::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Task::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Task();
        if (\array_key_exists('allowOverBooking', $data) && \is_int($data['allowOverBooking'])) {
            $data['allowOverBooking'] = (bool) $data['allowOverBooking'];
        }
        if (\array_key_exists('allowTimeBooking', $data) && \is_int($data['allowTimeBooking'])) {
            $data['allowTimeBooking'] = (bool) $data['allowTimeBooking'];
        }
        if (\array_key_exists('billableStatus', $data) && \is_int($data['billableStatus'])) {
            $data['billableStatus'] = (bool) $data['billableStatus'];
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('allowOverBooking', $data) && $data['allowOverBooking'] !== null) {
            $object->setAllowOverBooking($data['allowOverBooking']);
            unset($data['allowOverBooking']);
        }
        elseif (\array_key_exists('allowOverBooking', $data) && $data['allowOverBooking'] === null) {
            $object->setAllowOverBooking(null);
        }
        if (\array_key_exists('allowTimeBooking', $data) && $data['allowTimeBooking'] !== null) {
            $object->setAllowTimeBooking($data['allowTimeBooking']);
            unset($data['allowTimeBooking']);
        }
        elseif (\array_key_exists('allowTimeBooking', $data) && $data['allowTimeBooking'] === null) {
            $object->setAllowTimeBooking(null);
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
            $values_1 = [];
            foreach ($data['assignees'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\TaskAssignee::class, 'json', $context);
            }
            $object->setAssignees($values_1);
            unset($data['assignees']);
        }
        elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
            $object->setAssignees(null);
        }
        if (\array_key_exists('billableStatus', $data) && $data['billableStatus'] !== null) {
            $object->setBillableStatus($data['billableStatus']);
            unset($data['billableStatus']);
        }
        elseif (\array_key_exists('billableStatus', $data) && $data['billableStatus'] === null) {
            $object->setBillableStatus(null);
        }
        if (\array_key_exists('calendarEventId', $data) && $data['calendarEventId'] !== null) {
            $object->setCalendarEventId($data['calendarEventId']);
            unset($data['calendarEventId']);
        }
        elseif (\array_key_exists('calendarEventId', $data) && $data['calendarEventId'] === null) {
            $object->setCalendarEventId(null);
        }
        if (\array_key_exists('creatorUserId', $data) && $data['creatorUserId'] !== null) {
            $object->setCreatorUserId($data['creatorUserId']);
            unset($data['creatorUserId']);
        }
        elseif (\array_key_exists('creatorUserId', $data) && $data['creatorUserId'] === null) {
            $object->setCreatorUserId(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('dateFrom', $data) && $data['dateFrom'] !== null) {
            $object->setDateFrom($data['dateFrom']);
            unset($data['dateFrom']);
        }
        elseif (\array_key_exists('dateFrom', $data) && $data['dateFrom'] === null) {
            $object->setDateFrom(null);
        }
        if (\array_key_exists('dateTo', $data) && $data['dateTo'] !== null) {
            $object->setDateTo($data['dateTo']);
            unset($data['dateTo']);
        }
        elseif (\array_key_exists('dateTo', $data) && $data['dateTo'] === null) {
            $object->setDateTo(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('entityReferences', $data) && $data['entityReferences'] !== null) {
            $values_2 = [];
            foreach ($data['entityReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values_2);
            unset($data['entityReferences']);
        }
        elseif (\array_key_exists('entityReferences', $data) && $data['entityReferences'] === null) {
            $object->setEntityReferences(null);
        }
        if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
            $object->setIdentifier($data['identifier']);
            unset($data['identifier']);
        }
        elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
            $object->setIdentifier(null);
        }
        if (\array_key_exists('invoicingStatus', $data) && $data['invoicingStatus'] !== null) {
            $object->setInvoicingStatus($data['invoicingStatus']);
            unset($data['invoicingStatus']);
        }
        elseif (\array_key_exists('invoicingStatus', $data) && $data['invoicingStatus'] === null) {
            $object->setInvoicingStatus(null);
        }
        if (\array_key_exists('lastReminderDateForOverdue', $data) && $data['lastReminderDateForOverdue'] !== null) {
            $object->setLastReminderDateForOverdue($data['lastReminderDateForOverdue']);
            unset($data['lastReminderDateForOverdue']);
        }
        elseif (\array_key_exists('lastReminderDateForOverdue', $data) && $data['lastReminderDateForOverdue'] === null) {
            $object->setLastReminderDateForOverdue(null);
        }
        if (\array_key_exists('orderItemId', $data) && $data['orderItemId'] !== null) {
            $object->setOrderItemId($data['orderItemId']);
            unset($data['orderItemId']);
        }
        elseif (\array_key_exists('orderItemId', $data) && $data['orderItemId'] === null) {
            $object->setOrderItemId(null);
        }
        if (\array_key_exists('parentTaskId', $data) && $data['parentTaskId'] !== null) {
            $object->setParentTaskId($data['parentTaskId']);
            unset($data['parentTaskId']);
        }
        elseif (\array_key_exists('parentTaskId', $data) && $data['parentTaskId'] === null) {
            $object->setParentTaskId(null);
        }
        if (\array_key_exists('performanceRecordedStatus', $data) && $data['performanceRecordedStatus'] !== null) {
            $object->setPerformanceRecordedStatus($data['performanceRecordedStatus']);
            unset($data['performanceRecordedStatus']);
        }
        elseif (\array_key_exists('performanceRecordedStatus', $data) && $data['performanceRecordedStatus'] === null) {
            $object->setPerformanceRecordedStatus(null);
        }
        if (\array_key_exists('plannedEffort', $data) && $data['plannedEffort'] !== null) {
            $object->setPlannedEffort($data['plannedEffort']);
            unset($data['plannedEffort']);
        }
        elseif (\array_key_exists('plannedEffort', $data) && $data['plannedEffort'] === null) {
            $object->setPlannedEffort(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('previousTaskId', $data) && $data['previousTaskId'] !== null) {
            $object->setPreviousTaskId($data['previousTaskId']);
            unset($data['previousTaskId']);
        }
        elseif (\array_key_exists('previousTaskId', $data) && $data['previousTaskId'] === null) {
            $object->setPreviousTaskId(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('taskLists', $data) && $data['taskLists'] !== null) {
            $values_3 = [];
            foreach ($data['taskLists'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTaskLists($values_3);
            unset($data['taskLists']);
        }
        elseif (\array_key_exists('taskLists', $data) && $data['taskLists'] === null) {
            $object->setTaskLists(null);
        }
        if (\array_key_exists('taskMailAccount', $data) && $data['taskMailAccount'] !== null) {
            $object->setTaskMailAccount($this->denormalizer->denormalize($data['taskMailAccount'], \Webhubworks\WeclappApiCore\Model\TaskMailAccount::class, 'json', $context));
            unset($data['taskMailAccount']);
        }
        elseif (\array_key_exists('taskMailAccount', $data) && $data['taskMailAccount'] === null) {
            $object->setTaskMailAccount(null);
        }
        if (\array_key_exists('taskPriority', $data) && $data['taskPriority'] !== null) {
            $object->setTaskPriority($data['taskPriority']);
            unset($data['taskPriority']);
        }
        elseif (\array_key_exists('taskPriority', $data) && $data['taskPriority'] === null) {
            $object->setTaskPriority(null);
        }
        if (\array_key_exists('taskStatus', $data) && $data['taskStatus'] !== null) {
            $object->setTaskStatus($data['taskStatus']);
            unset($data['taskStatus']);
        }
        elseif (\array_key_exists('taskStatus', $data) && $data['taskStatus'] === null) {
            $object->setTaskStatus(null);
        }
        if (\array_key_exists('taskTopics', $data) && $data['taskTopics'] !== null) {
            $values_4 = [];
            foreach ($data['taskTopics'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTaskTopics($values_4);
            unset($data['taskTopics']);
        }
        elseif (\array_key_exists('taskTopics', $data) && $data['taskTopics'] === null) {
            $object->setTaskTopics(null);
        }
        if (\array_key_exists('taskTypes', $data) && $data['taskTypes'] !== null) {
            $values_5 = [];
            foreach ($data['taskTypes'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTaskTypes($values_5);
            unset($data['taskTypes']);
        }
        elseif (\array_key_exists('taskTypes', $data) && $data['taskTypes'] === null) {
            $object->setTaskTypes(null);
        }
        if (\array_key_exists('taskVisibilityType', $data) && $data['taskVisibilityType'] !== null) {
            $object->setTaskVisibilityType($data['taskVisibilityType']);
            unset($data['taskVisibilityType']);
        }
        elseif (\array_key_exists('taskVisibilityType', $data) && $data['taskVisibilityType'] === null) {
            $object->setTaskVisibilityType(null);
        }
        if (\array_key_exists('ticketId', $data) && $data['ticketId'] !== null) {
            $object->setTicketId($data['ticketId']);
            unset($data['ticketId']);
        }
        elseif (\array_key_exists('ticketId', $data) && $data['ticketId'] === null) {
            $object->setTicketId(null);
        }
        if (\array_key_exists('userOfLastStatusChangeId', $data) && $data['userOfLastStatusChangeId'] !== null) {
            $object->setUserOfLastStatusChangeId($data['userOfLastStatusChangeId']);
            unset($data['userOfLastStatusChangeId']);
        }
        elseif (\array_key_exists('userOfLastStatusChangeId', $data) && $data['userOfLastStatusChangeId'] === null) {
            $object->setUserOfLastStatusChangeId(null);
        }
        if (\array_key_exists('watchers', $data) && $data['watchers'] !== null) {
            $values_6 = [];
            foreach ($data['watchers'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setWatchers($values_6);
            unset($data['watchers']);
        }
        elseif (\array_key_exists('watchers', $data) && $data['watchers'] === null) {
            $object->setWatchers(null);
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_7;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('allowOverBooking') && null !== $data->getAllowOverBooking()) {
            $dataArray['allowOverBooking'] = $data->getAllowOverBooking();
        }
        if ($data->isInitialized('allowTimeBooking') && null !== $data->getAllowTimeBooking()) {
            $dataArray['allowTimeBooking'] = $data->getAllowTimeBooking();
        }
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('assignees') && null !== $data->getAssignees()) {
            $values_1 = [];
            foreach ($data->getAssignees() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['assignees'] = $values_1;
        }
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('dateFrom') && null !== $data->getDateFrom()) {
            $dataArray['dateFrom'] = $data->getDateFrom();
        }
        if ($data->isInitialized('dateTo') && null !== $data->getDateTo()) {
            $dataArray['dateTo'] = $data->getDateTo();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('entityReferences') && null !== $data->getEntityReferences()) {
            $values_2 = [];
            foreach ($data->getEntityReferences() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['entityReferences'] = $values_2;
        }
        if ($data->isInitialized('invoicingStatus') && null !== $data->getInvoicingStatus()) {
            $dataArray['invoicingStatus'] = $data->getInvoicingStatus();
        }
        if ($data->isInitialized('orderItemId') && null !== $data->getOrderItemId()) {
            $dataArray['orderItemId'] = $data->getOrderItemId();
        }
        if ($data->isInitialized('parentTaskId') && null !== $data->getParentTaskId()) {
            $dataArray['parentTaskId'] = $data->getParentTaskId();
        }
        if ($data->isInitialized('performanceRecordedStatus') && null !== $data->getPerformanceRecordedStatus()) {
            $dataArray['performanceRecordedStatus'] = $data->getPerformanceRecordedStatus();
        }
        if ($data->isInitialized('plannedEffort') && null !== $data->getPlannedEffort()) {
            $dataArray['plannedEffort'] = $data->getPlannedEffort();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('previousTaskId') && null !== $data->getPreviousTaskId()) {
            $dataArray['previousTaskId'] = $data->getPreviousTaskId();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('taskLists') && null !== $data->getTaskLists()) {
            $values_3 = [];
            foreach ($data->getTaskLists() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['taskLists'] = $values_3;
        }
        if ($data->isInitialized('taskMailAccount') && null !== $data->getTaskMailAccount()) {
            $dataArray['taskMailAccount'] = $this->normalizer->normalize($data->getTaskMailAccount(), 'json', $context);
        }
        if ($data->isInitialized('taskPriority') && null !== $data->getTaskPriority()) {
            $dataArray['taskPriority'] = $data->getTaskPriority();
        }
        if ($data->isInitialized('taskStatus') && null !== $data->getTaskStatus()) {
            $dataArray['taskStatus'] = $data->getTaskStatus();
        }
        if ($data->isInitialized('taskTopics') && null !== $data->getTaskTopics()) {
            $values_4 = [];
            foreach ($data->getTaskTopics() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['taskTopics'] = $values_4;
        }
        if ($data->isInitialized('taskTypes') && null !== $data->getTaskTypes()) {
            $values_5 = [];
            foreach ($data->getTaskTypes() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['taskTypes'] = $values_5;
        }
        if ($data->isInitialized('taskVisibilityType') && null !== $data->getTaskVisibilityType()) {
            $dataArray['taskVisibilityType'] = $data->getTaskVisibilityType();
        }
        if ($data->isInitialized('ticketId') && null !== $data->getTicketId()) {
            $dataArray['ticketId'] = $data->getTicketId();
        }
        if ($data->isInitialized('watchers') && null !== $data->getWatchers()) {
            $values_6 = [];
            foreach ($data->getWatchers() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['watchers'] = $values_6;
        }
        foreach ($data as $key => $value_7) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_7;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Task::class => false];
    }
}