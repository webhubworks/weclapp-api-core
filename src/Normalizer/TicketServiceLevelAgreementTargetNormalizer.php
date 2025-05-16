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
class TicketServiceLevelAgreementTargetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget();
        if (\array_key_exists('notification', $data) && \is_int($data['notification'])) {
            $data['notification'] = (bool) $data['notification'];
        }
        if (\array_key_exists('sendEscalationEmail', $data) && \is_int($data['sendEscalationEmail'])) {
            $data['sendEscalationEmail'] = (bool) $data['sendEscalationEmail'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assignmentTimeQuantity', $data)) {
            $object->setAssignmentTimeQuantity($data['assignmentTimeQuantity']);
            unset($data['assignmentTimeQuantity']);
        }
        if (\array_key_exists('assignmentTimeUnit', $data)) {
            $object->setAssignmentTimeUnit($data['assignmentTimeUnit']);
            unset($data['assignmentTimeUnit']);
        }
        if (\array_key_exists('businessHolidaysId', $data)) {
            $object->setBusinessHolidaysId($data['businessHolidaysId']);
            unset($data['businessHolidaysId']);
        }
        if (\array_key_exists('businessHoursId', $data)) {
            $object->setBusinessHoursId($data['businessHoursId']);
            unset($data['businessHoursId']);
        }
        if (\array_key_exists('firstReplyTimeQuantity', $data)) {
            $object->setFirstReplyTimeQuantity($data['firstReplyTimeQuantity']);
            unset($data['firstReplyTimeQuantity']);
        }
        if (\array_key_exists('firstReplyTimeUnit', $data)) {
            $object->setFirstReplyTimeUnit($data['firstReplyTimeUnit']);
            unset($data['firstReplyTimeUnit']);
        }
        if (\array_key_exists('notification', $data)) {
            $object->setNotification($data['notification']);
            unset($data['notification']);
        }
        if (\array_key_exists('priorityId', $data)) {
            $object->setPriorityId($data['priorityId']);
            unset($data['priorityId']);
        }
        if (\array_key_exists('sendEscalationEmail', $data)) {
            $object->setSendEscalationEmail($data['sendEscalationEmail']);
            unset($data['sendEscalationEmail']);
        }
        if (\array_key_exists('solutionTimeQuantity', $data)) {
            $object->setSolutionTimeQuantity($data['solutionTimeQuantity']);
            unset($data['solutionTimeQuantity']);
        }
        if (\array_key_exists('solutionTimeUnit', $data)) {
            $object->setSolutionTimeUnit($data['solutionTimeUnit']);
            unset($data['solutionTimeUnit']);
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
        if ($data->isInitialized('assignmentTimeQuantity') && null !== $data->getAssignmentTimeQuantity()) {
            $dataArray['assignmentTimeQuantity'] = $data->getAssignmentTimeQuantity();
        }
        if ($data->isInitialized('assignmentTimeUnit') && null !== $data->getAssignmentTimeUnit()) {
            $dataArray['assignmentTimeUnit'] = $data->getAssignmentTimeUnit();
        }
        if ($data->isInitialized('businessHolidaysId') && null !== $data->getBusinessHolidaysId()) {
            $dataArray['businessHolidaysId'] = $data->getBusinessHolidaysId();
        }
        if ($data->isInitialized('businessHoursId') && null !== $data->getBusinessHoursId()) {
            $dataArray['businessHoursId'] = $data->getBusinessHoursId();
        }
        if ($data->isInitialized('firstReplyTimeQuantity') && null !== $data->getFirstReplyTimeQuantity()) {
            $dataArray['firstReplyTimeQuantity'] = $data->getFirstReplyTimeQuantity();
        }
        if ($data->isInitialized('firstReplyTimeUnit') && null !== $data->getFirstReplyTimeUnit()) {
            $dataArray['firstReplyTimeUnit'] = $data->getFirstReplyTimeUnit();
        }
        if ($data->isInitialized('notification') && null !== $data->getNotification()) {
            $dataArray['notification'] = $data->getNotification();
        }
        if ($data->isInitialized('priorityId') && null !== $data->getPriorityId()) {
            $dataArray['priorityId'] = $data->getPriorityId();
        }
        if ($data->isInitialized('sendEscalationEmail') && null !== $data->getSendEscalationEmail()) {
            $dataArray['sendEscalationEmail'] = $data->getSendEscalationEmail();
        }
        if ($data->isInitialized('solutionTimeQuantity') && null !== $data->getSolutionTimeQuantity()) {
            $dataArray['solutionTimeQuantity'] = $data->getSolutionTimeQuantity();
        }
        if ($data->isInitialized('solutionTimeUnit') && null !== $data->getSolutionTimeUnit()) {
            $dataArray['solutionTimeUnit'] = $data->getSolutionTimeUnit();
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
        return [\Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget::class => false];
    }
}