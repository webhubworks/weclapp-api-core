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
class ReminderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Reminder::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Reminder::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Reminder();
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
        if (\array_key_exists('additionalRecipients', $data) && $data['additionalRecipients'] !== null) {
            $values = [];
            foreach ($data['additionalRecipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setAdditionalRecipients($values);
            unset($data['additionalRecipients']);
        }
        elseif (\array_key_exists('additionalRecipients', $data) && $data['additionalRecipients'] === null) {
            $object->setAdditionalRecipients(null);
        }
        if (\array_key_exists('ccMail', $data) && $data['ccMail'] !== null) {
            $object->setCcMail($data['ccMail']);
            unset($data['ccMail']);
        }
        elseif (\array_key_exists('ccMail', $data) && $data['ccMail'] === null) {
            $object->setCcMail(null);
        }
        if (\array_key_exists('entityId', $data) && $data['entityId'] !== null) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        elseif (\array_key_exists('entityId', $data) && $data['entityId'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('entityName', $data) && $data['entityName'] !== null) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        elseif (\array_key_exists('entityName', $data) && $data['entityName'] === null) {
            $object->setEntityName(null);
        }
        if (\array_key_exists('lastReminderSentDate', $data) && $data['lastReminderSentDate'] !== null) {
            $object->setLastReminderSentDate($data['lastReminderSentDate']);
            unset($data['lastReminderSentDate']);
        }
        elseif (\array_key_exists('lastReminderSentDate', $data) && $data['lastReminderSentDate'] === null) {
            $object->setLastReminderSentDate(null);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        if (\array_key_exists('recurringEvent', $data) && $data['recurringEvent'] !== null) {
            $object->setRecurringEvent($this->denormalizer->denormalize($data['recurringEvent'], \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class, 'json', $context));
            unset($data['recurringEvent']);
        }
        elseif (\array_key_exists('recurringEvent', $data) && $data['recurringEvent'] === null) {
            $object->setRecurringEvent(null);
        }
        if (\array_key_exists('reminderDate', $data) && $data['reminderDate'] !== null) {
            $object->setReminderDate($data['reminderDate']);
            unset($data['reminderDate']);
        }
        elseif (\array_key_exists('reminderDate', $data) && $data['reminderDate'] === null) {
            $object->setReminderDate(null);
        }
        if (\array_key_exists('sendType', $data) && $data['sendType'] !== null) {
            $object->setSendType($data['sendType']);
            unset($data['sendType']);
        }
        elseif (\array_key_exists('sendType', $data) && $data['sendType'] === null) {
            $object->setSendType(null);
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
        if ($data->isInitialized('additionalRecipients') && null !== $data->getAdditionalRecipients()) {
            $values = [];
            foreach ($data->getAdditionalRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['additionalRecipients'] = $values;
        }
        if ($data->isInitialized('ccMail') && null !== $data->getCcMail()) {
            $dataArray['ccMail'] = $data->getCcMail();
        }
        if ($data->isInitialized('entityId') && null !== $data->getEntityId()) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('entityName') && null !== $data->getEntityName()) {
            $dataArray['entityName'] = $data->getEntityName();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('recurringEvent') && null !== $data->getRecurringEvent()) {
            $dataArray['recurringEvent'] = $this->normalizer->normalize($data->getRecurringEvent(), 'json', $context);
        }
        if ($data->isInitialized('reminderDate') && null !== $data->getReminderDate()) {
            $dataArray['reminderDate'] = $data->getReminderDate();
        }
        if ($data->isInitialized('sendType') && null !== $data->getSendType()) {
            $dataArray['sendType'] = $data->getSendType();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
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
        return [\Webhubworks\WeclappApiCore\Model\Reminder::class => false];
    }
}