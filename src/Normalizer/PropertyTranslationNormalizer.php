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

class PropertyTranslationNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PropertyTranslation::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PropertyTranslation::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PropertyTranslation;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('propertyName', $data) && $data['propertyName'] !== null) {
            $object->setPropertyName($data['propertyName']);
            unset($data['propertyName']);
        } elseif (\array_key_exists('propertyName', $data) && $data['propertyName'] === null) {
            $object->setPropertyName(null);
        }
        if (\array_key_exists('values', $data) && $data['values'] !== null) {
            $values = [];
            foreach ($data['values'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PropertyTranslationValue::class, 'json', $context);
            }
            $object->setValues($values);
            unset($data['values']);
        } elseif (\array_key_exists('values', $data) && $data['values'] === null) {
            $object->setValues(null);
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
        if ($data->isInitialized('propertyName') && $data->getPropertyName() !== null) {
            $dataArray['propertyName'] = $data->getPropertyName();
        }
        if ($data->isInitialized('values') && $data->getValues() !== null) {
            $values = [];
            foreach ($data->getValues() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['values'] = $values;
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
        return [\Webhubworks\WeclappApiCore\Model\PropertyTranslation::class => false];
    }
}
