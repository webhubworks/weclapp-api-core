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
class ArchivedEmailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ArchivedEmail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ArchivedEmail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ArchivedEmail();
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
        if (\array_key_exists('bccAddresses', $data) && $data['bccAddresses'] !== null) {
            $values = [];
            foreach ($data['bccAddresses'] as $value) {
                $values[] = $value;
            }
            $object->setBccAddresses($values);
            unset($data['bccAddresses']);
        }
        elseif (\array_key_exists('bccAddresses', $data) && $data['bccAddresses'] === null) {
            $object->setBccAddresses(null);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->setBody(null);
        }
        if (\array_key_exists('ccAddresses', $data) && $data['ccAddresses'] !== null) {
            $values_1 = [];
            foreach ($data['ccAddresses'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCcAddresses($values_1);
            unset($data['ccAddresses']);
        }
        elseif (\array_key_exists('ccAddresses', $data) && $data['ccAddresses'] === null) {
            $object->setCcAddresses(null);
        }
        if (\array_key_exists('fromAddress', $data) && $data['fromAddress'] !== null) {
            $object->setFromAddress($data['fromAddress']);
            unset($data['fromAddress']);
        }
        elseif (\array_key_exists('fromAddress', $data) && $data['fromAddress'] === null) {
            $object->setFromAddress(null);
        }
        if (\array_key_exists('messageIdentifier', $data) && $data['messageIdentifier'] !== null) {
            $object->setMessageIdentifier($data['messageIdentifier']);
            unset($data['messageIdentifier']);
        }
        elseif (\array_key_exists('messageIdentifier', $data) && $data['messageIdentifier'] === null) {
            $object->setMessageIdentifier(null);
        }
        if (\array_key_exists('receivedDate', $data) && $data['receivedDate'] !== null) {
            $object->setReceivedDate($data['receivedDate']);
            unset($data['receivedDate']);
        }
        elseif (\array_key_exists('receivedDate', $data) && $data['receivedDate'] === null) {
            $object->setReceivedDate(null);
        }
        if (\array_key_exists('replyToAddress', $data) && $data['replyToAddress'] !== null) {
            $values_2 = [];
            foreach ($data['replyToAddress'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setReplyToAddress($values_2);
            unset($data['replyToAddress']);
        }
        elseif (\array_key_exists('replyToAddress', $data) && $data['replyToAddress'] === null) {
            $object->setReplyToAddress(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('toAddresses', $data) && $data['toAddresses'] !== null) {
            $values_3 = [];
            foreach ($data['toAddresses'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setToAddresses($values_3);
            unset($data['toAddresses']);
        }
        elseif (\array_key_exists('toAddresses', $data) && $data['toAddresses'] === null) {
            $object->setToAddresses(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('bccAddresses') && null !== $data->getBccAddresses()) {
            $values = [];
            foreach ($data->getBccAddresses() as $value) {
                $values[] = $value;
            }
            $dataArray['bccAddresses'] = $values;
        }
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('ccAddresses') && null !== $data->getCcAddresses()) {
            $values_1 = [];
            foreach ($data->getCcAddresses() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ccAddresses'] = $values_1;
        }
        if ($data->isInitialized('fromAddress') && null !== $data->getFromAddress()) {
            $dataArray['fromAddress'] = $data->getFromAddress();
        }
        if ($data->isInitialized('messageIdentifier') && null !== $data->getMessageIdentifier()) {
            $dataArray['messageIdentifier'] = $data->getMessageIdentifier();
        }
        if ($data->isInitialized('receivedDate') && null !== $data->getReceivedDate()) {
            $dataArray['receivedDate'] = $data->getReceivedDate();
        }
        if ($data->isInitialized('replyToAddress') && null !== $data->getReplyToAddress()) {
            $values_2 = [];
            foreach ($data->getReplyToAddress() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['replyToAddress'] = $values_2;
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('toAddresses') && null !== $data->getToAddresses()) {
            $values_3 = [];
            foreach ($data->getToAddresses() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['toAddresses'] = $values_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ArchivedEmail::class => false];
    }
}