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

class DocumentCopyPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('entityId', $data) && $data['entityId'] !== null) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        } elseif (\array_key_exists('entityId', $data) && $data['entityId'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('entityName', $data) && $data['entityName'] !== null) {
            $object->setEntityName($data['entityName']);
            unset($data['entityName']);
        } elseif (\array_key_exists('entityName', $data) && $data['entityName'] === null) {
            $object->setEntityName(null);
        }
        if (\array_key_exists('sourceDocumentId', $data) && $data['sourceDocumentId'] !== null) {
            $object->setSourceDocumentId($data['sourceDocumentId']);
            unset($data['sourceDocumentId']);
        } elseif (\array_key_exists('sourceDocumentId', $data) && $data['sourceDocumentId'] === null) {
            $object->setSourceDocumentId(null);
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
        $dataArray['entityId'] = $data->getEntityId();
        $dataArray['entityName'] = $data->getEntityName();
        $dataArray['sourceDocumentId'] = $data->getSourceDocumentId();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody::class => false];
    }
}
