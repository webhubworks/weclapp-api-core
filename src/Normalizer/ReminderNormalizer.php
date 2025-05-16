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

class ReminderNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Reminder;
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
        if (\array_key_exists('additionalRecipients', $data)) {
            $values = [];
            foreach ($data['additionalRecipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setAdditionalRecipients($values);
            unset($data['additionalRecipients']);
        }
        if (\array_key_exists('ccMail', $data)) {
            $object->setCcMail($data['ccMail']);
            unset($data['ccMail']);
        }
        if (\array_key_exists('entityId', $data)) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        if (\array_key_exists('entityName', $data)) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        }
        if (\array_key_exists('lastReminderSentDate', $data)) {
            $object->setLastReminderSentDate($data['lastReminderSentDate']);
            unset($data['lastReminderSentDate']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('recurringEvent', $data)) {
            $object->setRecurringEvent($this->denormalizer->denormalize($data['recurringEvent'], \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class, 'json', $context));
            unset($data['recurringEvent']);
        }
        if (\array_key_exists('reminderDate', $data)) {
            $object->setReminderDate($data['reminderDate']);
            unset($data['reminderDate']);
        }
        if (\array_key_exists('sendType', $data)) {
            $object->setSendType($data['sendType']);
            unset($data['sendType']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('additionalRecipients') && $data->getAdditionalRecipients() !== null) {
            $values = [];
            foreach ($data->getAdditionalRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['additionalRecipients'] = $values;
        }
        if ($data->isInitialized('ccMail') && $data->getCcMail() !== null) {
            $dataArray['ccMail'] = $data->getCcMail();
        }
        if ($data->isInitialized('entityId') && $data->getEntityId() !== null) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('entityName') && $data->getEntityName() !== null) {
            $dataArray['entityName'] = $data->getEntityName();
        }
        if ($data->isInitialized('lastReminderSentDate') && $data->getLastReminderSentDate() !== null) {
            $dataArray['lastReminderSentDate'] = $data->getLastReminderSentDate();
        }
        if ($data->isInitialized('message') && $data->getMessage() !== null) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('recurringEvent') && $data->getRecurringEvent() !== null) {
            $dataArray['recurringEvent'] = $this->normalizer->normalize($data->getRecurringEvent(), 'json', $context);
        }
        if ($data->isInitialized('reminderDate') && $data->getReminderDate() !== null) {
            $dataArray['reminderDate'] = $data->getReminderDate();
        }
        if ($data->isInitialized('sendType') && $data->getSendType() !== null) {
            $dataArray['sendType'] = $data->getSendType();
        }
        if ($data->isInitialized('subject') && $data->getSubject() !== null) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('userId') && $data->getUserId() !== null) {
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
        return [\Webhubworks\WeclappApiCore\Model\Reminder::class => false];
    }
}
