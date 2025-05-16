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

class TicketAssignmentRuleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule;
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
        if (\array_key_exists('assignedPoolingGroupId', $data)) {
            $object->setAssignedPoolingGroupId($data['assignedPoolingGroupId']);
            unset($data['assignedPoolingGroupId']);
        }
        if (\array_key_exists('assigneeUserId', $data)) {
            $object->setAssigneeUserId($data['assigneeUserId']);
            unset($data['assigneeUserId']);
        }
        if (\array_key_exists('commercialLanguage', $data)) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        }
        if (\array_key_exists('distributionChannel', $data)) {
            $object->setDistributionChannel($data['distributionChannel']);
            unset($data['distributionChannel']);
        }
        if (\array_key_exists('partyId', $data)) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('targetStatusId', $data)) {
            $object->setTargetStatusId($data['targetStatusId']);
            unset($data['targetStatusId']);
        }
        if (\array_key_exists('ticketAssigneeType', $data)) {
            $object->setTicketAssigneeType($data['ticketAssigneeType']);
            unset($data['ticketAssigneeType']);
        }
        if (\array_key_exists('ticketCategoryId', $data)) {
            $object->setTicketCategoryId($data['ticketCategoryId']);
            unset($data['ticketCategoryId']);
        }
        if (\array_key_exists('ticketChannelId', $data)) {
            $object->setTicketChannelId($data['ticketChannelId']);
            unset($data['ticketChannelId']);
        }
        if (\array_key_exists('ticketPriorityId', $data)) {
            $object->setTicketPriorityId($data['ticketPriorityId']);
            unset($data['ticketPriorityId']);
        }
        if (\array_key_exists('ticketTypeId', $data)) {
            $object->setTicketTypeId($data['ticketTypeId']);
            unset($data['ticketTypeId']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('assignedPoolingGroupId') && $data->getAssignedPoolingGroupId() !== null) {
            $dataArray['assignedPoolingGroupId'] = $data->getAssignedPoolingGroupId();
        }
        if ($data->isInitialized('assigneeUserId') && $data->getAssigneeUserId() !== null) {
            $dataArray['assigneeUserId'] = $data->getAssigneeUserId();
        }
        if ($data->isInitialized('commercialLanguage') && $data->getCommercialLanguage() !== null) {
            $dataArray['commercialLanguage'] = $data->getCommercialLanguage();
        }
        if ($data->isInitialized('distributionChannel') && $data->getDistributionChannel() !== null) {
            $dataArray['distributionChannel'] = $data->getDistributionChannel();
        }
        if ($data->isInitialized('partyId') && $data->getPartyId() !== null) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('targetStatusId') && $data->getTargetStatusId() !== null) {
            $dataArray['targetStatusId'] = $data->getTargetStatusId();
        }
        if ($data->isInitialized('ticketAssigneeType') && $data->getTicketAssigneeType() !== null) {
            $dataArray['ticketAssigneeType'] = $data->getTicketAssigneeType();
        }
        if ($data->isInitialized('ticketCategoryId') && $data->getTicketCategoryId() !== null) {
            $dataArray['ticketCategoryId'] = $data->getTicketCategoryId();
        }
        if ($data->isInitialized('ticketChannelId') && $data->getTicketChannelId() !== null) {
            $dataArray['ticketChannelId'] = $data->getTicketChannelId();
        }
        if ($data->isInitialized('ticketPriorityId') && $data->getTicketPriorityId() !== null) {
            $dataArray['ticketPriorityId'] = $data->getTicketPriorityId();
        }
        if ($data->isInitialized('ticketTypeId') && $data->getTicketTypeId() !== null) {
            $dataArray['ticketTypeId'] = $data->getTicketTypeId();
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
        return [\Webhubworks\WeclappApiCore\Model\TicketAssignmentRule::class => false];
    }
}
