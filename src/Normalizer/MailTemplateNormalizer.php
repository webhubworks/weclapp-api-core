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

class MailTemplateNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\MailTemplate::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\MailTemplate::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\MailTemplate;
        if (\array_key_exists('useAsDefault', $data) && \is_int($data['useAsDefault'])) {
            $data['useAsDefault'] = (bool) $data['useAsDefault'];
        }
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
        if (\array_key_exists('bccEmailAddresses', $data)) {
            $object->setBccEmailAddresses($data['bccEmailAddresses']);
            unset($data['bccEmailAddresses']);
        }
        if (\array_key_exists('ccEmailAddresses', $data)) {
            $object->setCcEmailAddresses($data['ccEmailAddresses']);
            unset($data['ccEmailAddresses']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('toEmailAddresses', $data)) {
            $object->setToEmailAddresses($data['toEmailAddresses']);
            unset($data['toEmailAddresses']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('useAsDefault', $data)) {
            $object->setUseAsDefault($data['useAsDefault']);
            unset($data['useAsDefault']);
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
        if ($data->isInitialized('bccEmailAddresses') && $data->getBccEmailAddresses() !== null) {
            $dataArray['bccEmailAddresses'] = $data->getBccEmailAddresses();
        }
        if ($data->isInitialized('ccEmailAddresses') && $data->getCcEmailAddresses() !== null) {
            $dataArray['ccEmailAddresses'] = $data->getCcEmailAddresses();
        }
        if ($data->isInitialized('creatorId') && $data->getCreatorId() !== null) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('subject') && $data->getSubject() !== null) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('text') && $data->getText() !== null) {
            $dataArray['text'] = $data->getText();
        }
        if ($data->isInitialized('toEmailAddresses') && $data->getToEmailAddresses() !== null) {
            $dataArray['toEmailAddresses'] = $data->getToEmailAddresses();
        }
        if ($data->isInitialized('type') && $data->getType() !== null) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('useAsDefault') && $data->getUseAsDefault() !== null) {
            $dataArray['useAsDefault'] = $data->getUseAsDefault();
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
        return [\Webhubworks\WeclappApiCore\Model\MailTemplate::class => false];
    }
}
