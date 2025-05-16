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

class PropertyTranslationUpdatePropertyTranslationsPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody;
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
        if (\array_key_exists('propertyTranslations', $data) && $data['propertyTranslations'] !== null) {
            $values = [];
            foreach ($data['propertyTranslations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem::class, 'json', $context);
            }
            $object->setPropertyTranslations($values);
            unset($data['propertyTranslations']);
        } elseif (\array_key_exists('propertyTranslations', $data) && $data['propertyTranslations'] === null) {
            $object->setPropertyTranslations(null);
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
        $dataArray['entityId'] = $data->getEntityId();
        $dataArray['entityName'] = $data->getEntityName();
        $values = [];
        foreach ($data->getPropertyTranslations() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['propertyTranslations'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody::class => false];
    }
}
