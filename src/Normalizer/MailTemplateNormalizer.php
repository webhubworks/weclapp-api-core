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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('bccEmailAddresses', $data) && $data['bccEmailAddresses'] !== null) {
            $object->setBccEmailAddresses($data['bccEmailAddresses']);
            unset($data['bccEmailAddresses']);
        } elseif (\array_key_exists('bccEmailAddresses', $data) && $data['bccEmailAddresses'] === null) {
            $object->setBccEmailAddresses(null);
        }
        if (\array_key_exists('ccEmailAddresses', $data) && $data['ccEmailAddresses'] !== null) {
            $object->setCcEmailAddresses($data['ccEmailAddresses']);
            unset($data['ccEmailAddresses']);
        } elseif (\array_key_exists('ccEmailAddresses', $data) && $data['ccEmailAddresses'] === null) {
            $object->setCcEmailAddresses(null);
        }
        if (\array_key_exists('creatorId', $data) && $data['creatorId'] !== null) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        } elseif (\array_key_exists('creatorId', $data) && $data['creatorId'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        } elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('text', $data) && $data['text'] !== null) {
            $object->setText($data['text']);
            unset($data['text']);
        } elseif (\array_key_exists('text', $data) && $data['text'] === null) {
            $object->setText(null);
        }
        if (\array_key_exists('toEmailAddresses', $data) && $data['toEmailAddresses'] !== null) {
            $object->setToEmailAddresses($data['toEmailAddresses']);
            unset($data['toEmailAddresses']);
        } elseif (\array_key_exists('toEmailAddresses', $data) && $data['toEmailAddresses'] === null) {
            $object->setToEmailAddresses(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('useAsDefault', $data) && $data['useAsDefault'] !== null) {
            $object->setUseAsDefault($data['useAsDefault']);
            unset($data['useAsDefault']);
        } elseif (\array_key_exists('useAsDefault', $data) && $data['useAsDefault'] === null) {
            $object->setUseAsDefault(null);
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
