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
class TicketAssignmentRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule();
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
        if (\array_key_exists('assignedPoolingGroupId', $data) && $data['assignedPoolingGroupId'] !== null) {
            $object->setAssignedPoolingGroupId($data['assignedPoolingGroupId']);
            unset($data['assignedPoolingGroupId']);
        }
        elseif (\array_key_exists('assignedPoolingGroupId', $data) && $data['assignedPoolingGroupId'] === null) {
            $object->setAssignedPoolingGroupId(null);
        }
        if (\array_key_exists('assigneeUserId', $data) && $data['assigneeUserId'] !== null) {
            $object->setAssigneeUserId($data['assigneeUserId']);
            unset($data['assigneeUserId']);
        }
        elseif (\array_key_exists('assigneeUserId', $data) && $data['assigneeUserId'] === null) {
            $object->setAssigneeUserId(null);
        }
        if (\array_key_exists('businessHolidaysId', $data) && $data['businessHolidaysId'] !== null) {
            $object->setBusinessHolidaysId($data['businessHolidaysId']);
            unset($data['businessHolidaysId']);
        }
        elseif (\array_key_exists('businessHolidaysId', $data) && $data['businessHolidaysId'] === null) {
            $object->setBusinessHolidaysId(null);
        }
        if (\array_key_exists('businessHoursId', $data) && $data['businessHoursId'] !== null) {
            $object->setBusinessHoursId($data['businessHoursId']);
            unset($data['businessHoursId']);
        }
        elseif (\array_key_exists('businessHoursId', $data) && $data['businessHoursId'] === null) {
            $object->setBusinessHoursId(null);
        }
        if (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] !== null) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        }
        elseif (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] === null) {
            $object->setCommercialLanguage(null);
        }
        if (\array_key_exists('distributionChannel', $data) && $data['distributionChannel'] !== null) {
            $object->setDistributionChannel($data['distributionChannel']);
            unset($data['distributionChannel']);
        }
        elseif (\array_key_exists('distributionChannel', $data) && $data['distributionChannel'] === null) {
            $object->setDistributionChannel(null);
        }
        if (\array_key_exists('parties', $data) && $data['parties'] !== null) {
            $values = [];
            foreach ($data['parties'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setParties($values);
            unset($data['parties']);
        }
        elseif (\array_key_exists('parties', $data) && $data['parties'] === null) {
            $object->setParties(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('targetStatusId', $data) && $data['targetStatusId'] !== null) {
            $object->setTargetStatusId($data['targetStatusId']);
            unset($data['targetStatusId']);
        }
        elseif (\array_key_exists('targetStatusId', $data) && $data['targetStatusId'] === null) {
            $object->setTargetStatusId(null);
        }
        if (\array_key_exists('ticketAssigneeType', $data) && $data['ticketAssigneeType'] !== null) {
            $object->setTicketAssigneeType($data['ticketAssigneeType']);
            unset($data['ticketAssigneeType']);
        }
        elseif (\array_key_exists('ticketAssigneeType', $data) && $data['ticketAssigneeType'] === null) {
            $object->setTicketAssigneeType(null);
        }
        if (\array_key_exists('ticketCategoryId', $data) && $data['ticketCategoryId'] !== null) {
            $object->setTicketCategoryId($data['ticketCategoryId']);
            unset($data['ticketCategoryId']);
        }
        elseif (\array_key_exists('ticketCategoryId', $data) && $data['ticketCategoryId'] === null) {
            $object->setTicketCategoryId(null);
        }
        if (\array_key_exists('ticketChannelId', $data) && $data['ticketChannelId'] !== null) {
            $object->setTicketChannelId($data['ticketChannelId']);
            unset($data['ticketChannelId']);
        }
        elseif (\array_key_exists('ticketChannelId', $data) && $data['ticketChannelId'] === null) {
            $object->setTicketChannelId(null);
        }
        if (\array_key_exists('ticketPriorityId', $data) && $data['ticketPriorityId'] !== null) {
            $object->setTicketPriorityId($data['ticketPriorityId']);
            unset($data['ticketPriorityId']);
        }
        elseif (\array_key_exists('ticketPriorityId', $data) && $data['ticketPriorityId'] === null) {
            $object->setTicketPriorityId(null);
        }
        if (\array_key_exists('ticketTypeId', $data) && $data['ticketTypeId'] !== null) {
            $object->setTicketTypeId($data['ticketTypeId']);
            unset($data['ticketTypeId']);
        }
        elseif (\array_key_exists('ticketTypeId', $data) && $data['ticketTypeId'] === null) {
            $object->setTicketTypeId(null);
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
        if ($data->isInitialized('assignedPoolingGroupId') && null !== $data->getAssignedPoolingGroupId()) {
            $dataArray['assignedPoolingGroupId'] = $data->getAssignedPoolingGroupId();
        }
        if ($data->isInitialized('assigneeUserId') && null !== $data->getAssigneeUserId()) {
            $dataArray['assigneeUserId'] = $data->getAssigneeUserId();
        }
        if ($data->isInitialized('businessHolidaysId') && null !== $data->getBusinessHolidaysId()) {
            $dataArray['businessHolidaysId'] = $data->getBusinessHolidaysId();
        }
        if ($data->isInitialized('businessHoursId') && null !== $data->getBusinessHoursId()) {
            $dataArray['businessHoursId'] = $data->getBusinessHoursId();
        }
        if ($data->isInitialized('commercialLanguage') && null !== $data->getCommercialLanguage()) {
            $dataArray['commercialLanguage'] = $data->getCommercialLanguage();
        }
        if ($data->isInitialized('distributionChannel') && null !== $data->getDistributionChannel()) {
            $dataArray['distributionChannel'] = $data->getDistributionChannel();
        }
        if ($data->isInitialized('parties') && null !== $data->getParties()) {
            $values = [];
            foreach ($data->getParties() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['parties'] = $values;
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('targetStatusId') && null !== $data->getTargetStatusId()) {
            $dataArray['targetStatusId'] = $data->getTargetStatusId();
        }
        if ($data->isInitialized('ticketAssigneeType') && null !== $data->getTicketAssigneeType()) {
            $dataArray['ticketAssigneeType'] = $data->getTicketAssigneeType();
        }
        if ($data->isInitialized('ticketCategoryId') && null !== $data->getTicketCategoryId()) {
            $dataArray['ticketCategoryId'] = $data->getTicketCategoryId();
        }
        if ($data->isInitialized('ticketChannelId') && null !== $data->getTicketChannelId()) {
            $dataArray['ticketChannelId'] = $data->getTicketChannelId();
        }
        if ($data->isInitialized('ticketPriorityId') && null !== $data->getTicketPriorityId()) {
            $dataArray['ticketPriorityId'] = $data->getTicketPriorityId();
        }
        if ($data->isInitialized('ticketTypeId') && null !== $data->getTicketTypeId()) {
            $dataArray['ticketTypeId'] = $data->getTicketTypeId();
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
        return [\Webhubworks\WeclappApiCore\Model\TicketAssignmentRule::class => false];
    }
}