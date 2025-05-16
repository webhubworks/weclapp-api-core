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
        if (\array_key_exists('bccAddresses', $data)) {
            $values = [];
            foreach ($data['bccAddresses'] as $value) {
                $values[] = $value;
            }
            $object->setBccAddresses($values);
            unset($data['bccAddresses']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('ccAddresses', $data)) {
            $values_1 = [];
            foreach ($data['ccAddresses'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCcAddresses($values_1);
            unset($data['ccAddresses']);
        }
        if (\array_key_exists('fromAddress', $data)) {
            $object->setFromAddress($data['fromAddress']);
            unset($data['fromAddress']);
        }
        if (\array_key_exists('messageIdentifier', $data)) {
            $object->setMessageIdentifier($data['messageIdentifier']);
            unset($data['messageIdentifier']);
        }
        if (\array_key_exists('receivedDate', $data)) {
            $object->setReceivedDate($data['receivedDate']);
            unset($data['receivedDate']);
        }
        if (\array_key_exists('replyToAddress', $data)) {
            $values_2 = [];
            foreach ($data['replyToAddress'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setReplyToAddress($values_2);
            unset($data['replyToAddress']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        if (\array_key_exists('toAddresses', $data)) {
            $values_3 = [];
            foreach ($data['toAddresses'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setToAddresses($values_3);
            unset($data['toAddresses']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
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