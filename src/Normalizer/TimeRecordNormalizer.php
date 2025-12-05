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
class TimeRecordNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TimeRecord::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TimeRecord::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TimeRecord();
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
        }
        if (\array_key_exists('printOnPerformanceRecord', $data) && \is_int($data['printOnPerformanceRecord'])) {
            $data['printOnPerformanceRecord'] = (bool) $data['printOnPerformanceRecord'];
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
            unset($data['billable']);
        }
        elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('billableDurationSeconds', $data) && $data['billableDurationSeconds'] !== null) {
            $object->setBillableDurationSeconds($data['billableDurationSeconds']);
            unset($data['billableDurationSeconds']);
        }
        elseif (\array_key_exists('billableDurationSeconds', $data) && $data['billableDurationSeconds'] === null) {
            $object->setBillableDurationSeconds(null);
        }
        if (\array_key_exists('billableInvoiceStatus', $data) && $data['billableInvoiceStatus'] !== null) {
            $object->setBillableInvoiceStatus($data['billableInvoiceStatus']);
            unset($data['billableInvoiceStatus']);
        }
        elseif (\array_key_exists('billableInvoiceStatus', $data) && $data['billableInvoiceStatus'] === null) {
            $object->setBillableInvoiceStatus(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('durationSeconds', $data) && $data['durationSeconds'] !== null) {
            $object->setDurationSeconds($data['durationSeconds']);
            unset($data['durationSeconds']);
        }
        elseif (\array_key_exists('durationSeconds', $data) && $data['durationSeconds'] === null) {
            $object->setDurationSeconds(null);
        }
        if (\array_key_exists('externalConnectionSourceId', $data) && $data['externalConnectionSourceId'] !== null) {
            $object->setExternalConnectionSourceId($data['externalConnectionSourceId']);
            unset($data['externalConnectionSourceId']);
        }
        elseif (\array_key_exists('externalConnectionSourceId', $data) && $data['externalConnectionSourceId'] === null) {
            $object->setExternalConnectionSourceId(null);
        }
        if (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] !== null) {
            $object->setHourlyRate($data['hourlyRate']);
            unset($data['hourlyRate']);
        }
        elseif (\array_key_exists('hourlyRate', $data) && $data['hourlyRate'] === null) {
            $object->setHourlyRate(null);
        }
        if (\array_key_exists('performanceRecordedStatus', $data) && $data['performanceRecordedStatus'] !== null) {
            $object->setPerformanceRecordedStatus($data['performanceRecordedStatus']);
            unset($data['performanceRecordedStatus']);
        }
        elseif (\array_key_exists('performanceRecordedStatus', $data) && $data['performanceRecordedStatus'] === null) {
            $object->setPerformanceRecordedStatus(null);
        }
        if (\array_key_exists('placeOfServiceId', $data) && $data['placeOfServiceId'] !== null) {
            $object->setPlaceOfServiceId($data['placeOfServiceId']);
            unset($data['placeOfServiceId']);
        }
        elseif (\array_key_exists('placeOfServiceId', $data) && $data['placeOfServiceId'] === null) {
            $object->setPlaceOfServiceId(null);
        }
        if (\array_key_exists('printOnPerformanceRecord', $data) && $data['printOnPerformanceRecord'] !== null) {
            $object->setPrintOnPerformanceRecord($data['printOnPerformanceRecord']);
            unset($data['printOnPerformanceRecord']);
        }
        elseif (\array_key_exists('printOnPerformanceRecord', $data) && $data['printOnPerformanceRecord'] === null) {
            $object->setPrintOnPerformanceRecord(null);
        }
        if (\array_key_exists('projectId', $data) && $data['projectId'] !== null) {
            $object->setProjectId($data['projectId']);
            unset($data['projectId']);
        }
        elseif (\array_key_exists('projectId', $data) && $data['projectId'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('projectTaskId', $data) && $data['projectTaskId'] !== null) {
            $object->setProjectTaskId($data['projectTaskId']);
            unset($data['projectTaskId']);
        }
        elseif (\array_key_exists('projectTaskId', $data) && $data['projectTaskId'] === null) {
            $object->setProjectTaskId(null);
        }
        if (\array_key_exists('salesInvoiceId', $data) && $data['salesInvoiceId'] !== null) {
            $object->setSalesInvoiceId($data['salesInvoiceId']);
            unset($data['salesInvoiceId']);
        }
        elseif (\array_key_exists('salesInvoiceId', $data) && $data['salesInvoiceId'] === null) {
            $object->setSalesInvoiceId(null);
        }
        if (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] !== null) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        }
        elseif (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] === null) {
            $object->setSalesOrderId(null);
        }
        if (\array_key_exists('salesOrderTicketId', $data) && $data['salesOrderTicketId'] !== null) {
            $object->setSalesOrderTicketId($data['salesOrderTicketId']);
            unset($data['salesOrderTicketId']);
        }
        elseif (\array_key_exists('salesOrderTicketId', $data) && $data['salesOrderTicketId'] === null) {
            $object->setSalesOrderTicketId(null);
        }
        if (\array_key_exists('serviceQuotaId', $data) && $data['serviceQuotaId'] !== null) {
            $object->setServiceQuotaId($data['serviceQuotaId']);
            unset($data['serviceQuotaId']);
        }
        elseif (\array_key_exists('serviceQuotaId', $data) && $data['serviceQuotaId'] === null) {
            $object->setServiceQuotaId(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('taskId', $data) && $data['taskId'] !== null) {
            $object->setTaskId($data['taskId']);
            unset($data['taskId']);
        }
        elseif (\array_key_exists('taskId', $data) && $data['taskId'] === null) {
            $object->setTaskId(null);
        }
        if (\array_key_exists('ticketId', $data) && $data['ticketId'] !== null) {
            $object->setTicketId($data['ticketId']);
            unset($data['ticketId']);
        }
        elseif (\array_key_exists('ticketId', $data) && $data['ticketId'] === null) {
            $object->setTicketId(null);
        }
        if (\array_key_exists('timeRecordSource', $data) && $data['timeRecordSource'] !== null) {
            $object->setTimeRecordSource($data['timeRecordSource']);
            unset($data['timeRecordSource']);
        }
        elseif (\array_key_exists('timeRecordSource', $data) && $data['timeRecordSource'] === null) {
            $object->setTimeRecordSource(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('billableDurationSeconds') && null !== $data->getBillableDurationSeconds()) {
            $dataArray['billableDurationSeconds'] = $data->getBillableDurationSeconds();
        }
        if ($data->isInitialized('billableInvoiceStatus') && null !== $data->getBillableInvoiceStatus()) {
            $dataArray['billableInvoiceStatus'] = $data->getBillableInvoiceStatus();
        }
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('durationSeconds') && null !== $data->getDurationSeconds()) {
            $dataArray['durationSeconds'] = $data->getDurationSeconds();
        }
        if ($data->isInitialized('hourlyRate') && null !== $data->getHourlyRate()) {
            $dataArray['hourlyRate'] = $data->getHourlyRate();
        }
        if ($data->isInitialized('performanceRecordedStatus') && null !== $data->getPerformanceRecordedStatus()) {
            $dataArray['performanceRecordedStatus'] = $data->getPerformanceRecordedStatus();
        }
        if ($data->isInitialized('placeOfServiceId') && null !== $data->getPlaceOfServiceId()) {
            $dataArray['placeOfServiceId'] = $data->getPlaceOfServiceId();
        }
        if ($data->isInitialized('printOnPerformanceRecord') && null !== $data->getPrintOnPerformanceRecord()) {
            $dataArray['printOnPerformanceRecord'] = $data->getPrintOnPerformanceRecord();
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['projectId'] = $data->getProjectId();
        }
        if ($data->isInitialized('projectTaskId') && null !== $data->getProjectTaskId()) {
            $dataArray['projectTaskId'] = $data->getProjectTaskId();
        }
        if ($data->isInitialized('salesInvoiceId') && null !== $data->getSalesInvoiceId()) {
            $dataArray['salesInvoiceId'] = $data->getSalesInvoiceId();
        }
        if ($data->isInitialized('salesOrderId') && null !== $data->getSalesOrderId()) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
        }
        if ($data->isInitialized('salesOrderTicketId') && null !== $data->getSalesOrderTicketId()) {
            $dataArray['salesOrderTicketId'] = $data->getSalesOrderTicketId();
        }
        if ($data->isInitialized('serviceQuotaId') && null !== $data->getServiceQuotaId()) {
            $dataArray['serviceQuotaId'] = $data->getServiceQuotaId();
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('taskId') && null !== $data->getTaskId()) {
            $dataArray['taskId'] = $data->getTaskId();
        }
        if ($data->isInitialized('ticketId') && null !== $data->getTicketId()) {
            $dataArray['ticketId'] = $data->getTicketId();
        }
        if ($data->isInitialized('timeRecordSource') && null !== $data->getTimeRecordSource()) {
            $dataArray['timeRecordSource'] = $data->getTimeRecordSource();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['userId'] = $data->getUserId();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TimeRecord::class => false];
    }
}