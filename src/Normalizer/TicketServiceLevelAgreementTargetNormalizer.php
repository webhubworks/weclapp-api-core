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

class TicketServiceLevelAgreementTargetNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget;
        if (\array_key_exists('notification', $data) && \is_int($data['notification'])) {
            $data['notification'] = (bool) $data['notification'];
        }
        if (\array_key_exists('sendEscalationEmail', $data) && \is_int($data['sendEscalationEmail'])) {
            $data['sendEscalationEmail'] = (bool) $data['sendEscalationEmail'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('assignmentTimeQuantity', $data) && $data['assignmentTimeQuantity'] !== null) {
            $object->setAssignmentTimeQuantity($data['assignmentTimeQuantity']);
            unset($data['assignmentTimeQuantity']);
        } elseif (\array_key_exists('assignmentTimeQuantity', $data) && $data['assignmentTimeQuantity'] === null) {
            $object->setAssignmentTimeQuantity(null);
        }
        if (\array_key_exists('assignmentTimeUnit', $data) && $data['assignmentTimeUnit'] !== null) {
            $object->setAssignmentTimeUnit($data['assignmentTimeUnit']);
            unset($data['assignmentTimeUnit']);
        } elseif (\array_key_exists('assignmentTimeUnit', $data) && $data['assignmentTimeUnit'] === null) {
            $object->setAssignmentTimeUnit(null);
        }
        if (\array_key_exists('businessHolidaysId', $data) && $data['businessHolidaysId'] !== null) {
            $object->setBusinessHolidaysId($data['businessHolidaysId']);
            unset($data['businessHolidaysId']);
        } elseif (\array_key_exists('businessHolidaysId', $data) && $data['businessHolidaysId'] === null) {
            $object->setBusinessHolidaysId(null);
        }
        if (\array_key_exists('businessHoursId', $data) && $data['businessHoursId'] !== null) {
            $object->setBusinessHoursId($data['businessHoursId']);
            unset($data['businessHoursId']);
        } elseif (\array_key_exists('businessHoursId', $data) && $data['businessHoursId'] === null) {
            $object->setBusinessHoursId(null);
        }
        if (\array_key_exists('firstReplyTimeQuantity', $data) && $data['firstReplyTimeQuantity'] !== null) {
            $object->setFirstReplyTimeQuantity($data['firstReplyTimeQuantity']);
            unset($data['firstReplyTimeQuantity']);
        } elseif (\array_key_exists('firstReplyTimeQuantity', $data) && $data['firstReplyTimeQuantity'] === null) {
            $object->setFirstReplyTimeQuantity(null);
        }
        if (\array_key_exists('firstReplyTimeUnit', $data) && $data['firstReplyTimeUnit'] !== null) {
            $object->setFirstReplyTimeUnit($data['firstReplyTimeUnit']);
            unset($data['firstReplyTimeUnit']);
        } elseif (\array_key_exists('firstReplyTimeUnit', $data) && $data['firstReplyTimeUnit'] === null) {
            $object->setFirstReplyTimeUnit(null);
        }
        if (\array_key_exists('notification', $data) && $data['notification'] !== null) {
            $object->setNotification($data['notification']);
            unset($data['notification']);
        } elseif (\array_key_exists('notification', $data) && $data['notification'] === null) {
            $object->setNotification(null);
        }
        if (\array_key_exists('priorityId', $data) && $data['priorityId'] !== null) {
            $object->setPriorityId($data['priorityId']);
            unset($data['priorityId']);
        } elseif (\array_key_exists('priorityId', $data) && $data['priorityId'] === null) {
            $object->setPriorityId(null);
        }
        if (\array_key_exists('sendEscalationEmail', $data) && $data['sendEscalationEmail'] !== null) {
            $object->setSendEscalationEmail($data['sendEscalationEmail']);
            unset($data['sendEscalationEmail']);
        } elseif (\array_key_exists('sendEscalationEmail', $data) && $data['sendEscalationEmail'] === null) {
            $object->setSendEscalationEmail(null);
        }
        if (\array_key_exists('solutionTimeQuantity', $data) && $data['solutionTimeQuantity'] !== null) {
            $object->setSolutionTimeQuantity($data['solutionTimeQuantity']);
            unset($data['solutionTimeQuantity']);
        } elseif (\array_key_exists('solutionTimeQuantity', $data) && $data['solutionTimeQuantity'] === null) {
            $object->setSolutionTimeQuantity(null);
        }
        if (\array_key_exists('solutionTimeUnit', $data) && $data['solutionTimeUnit'] !== null) {
            $object->setSolutionTimeUnit($data['solutionTimeUnit']);
            unset($data['solutionTimeUnit']);
        } elseif (\array_key_exists('solutionTimeUnit', $data) && $data['solutionTimeUnit'] === null) {
            $object->setSolutionTimeUnit(null);
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
        if ($data->isInitialized('assignmentTimeQuantity') && $data->getAssignmentTimeQuantity() !== null) {
            $dataArray['assignmentTimeQuantity'] = $data->getAssignmentTimeQuantity();
        }
        if ($data->isInitialized('assignmentTimeUnit') && $data->getAssignmentTimeUnit() !== null) {
            $dataArray['assignmentTimeUnit'] = $data->getAssignmentTimeUnit();
        }
        if ($data->isInitialized('businessHolidaysId') && $data->getBusinessHolidaysId() !== null) {
            $dataArray['businessHolidaysId'] = $data->getBusinessHolidaysId();
        }
        if ($data->isInitialized('businessHoursId') && $data->getBusinessHoursId() !== null) {
            $dataArray['businessHoursId'] = $data->getBusinessHoursId();
        }
        if ($data->isInitialized('firstReplyTimeQuantity') && $data->getFirstReplyTimeQuantity() !== null) {
            $dataArray['firstReplyTimeQuantity'] = $data->getFirstReplyTimeQuantity();
        }
        if ($data->isInitialized('firstReplyTimeUnit') && $data->getFirstReplyTimeUnit() !== null) {
            $dataArray['firstReplyTimeUnit'] = $data->getFirstReplyTimeUnit();
        }
        if ($data->isInitialized('notification') && $data->getNotification() !== null) {
            $dataArray['notification'] = $data->getNotification();
        }
        if ($data->isInitialized('priorityId') && $data->getPriorityId() !== null) {
            $dataArray['priorityId'] = $data->getPriorityId();
        }
        if ($data->isInitialized('sendEscalationEmail') && $data->getSendEscalationEmail() !== null) {
            $dataArray['sendEscalationEmail'] = $data->getSendEscalationEmail();
        }
        if ($data->isInitialized('solutionTimeQuantity') && $data->getSolutionTimeQuantity() !== null) {
            $dataArray['solutionTimeQuantity'] = $data->getSolutionTimeQuantity();
        }
        if ($data->isInitialized('solutionTimeUnit') && $data->getSolutionTimeUnit() !== null) {
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
