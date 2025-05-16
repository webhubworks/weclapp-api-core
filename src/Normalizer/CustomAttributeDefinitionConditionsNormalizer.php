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
class CustomAttributeDefinitionConditionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions();
        if (\array_key_exists('ignoreConditionsIfValueIsSet', $data) && \is_int($data['ignoreConditionsIfValueIsSet'])) {
            $data['ignoreConditionsIfValueIsSet'] = (bool) $data['ignoreConditionsIfValueIsSet'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('conditionsForEntityType', $data)) {
            $values = [];
            foreach ($data['conditionsForEntityType'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\ConditionsForEntityType::class, 'json', $context);
            }
            $object->setConditionsForEntityType($values);
            unset($data['conditionsForEntityType']);
        }
        if (\array_key_exists('ignoreConditionsIfValueIsSet', $data)) {
            $object->setIgnoreConditionsIfValueIsSet($data['ignoreConditionsIfValueIsSet']);
            unset($data['ignoreConditionsIfValueIsSet']);
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
        if ($data->isInitialized('conditionsForEntityType') && null !== $data->getConditionsForEntityType()) {
            $values = [];
            foreach ($data->getConditionsForEntityType() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['conditionsForEntityType'] = $values;
        }
        if ($data->isInitialized('ignoreConditionsIfValueIsSet') && null !== $data->getIgnoreConditionsIfValueIsSet()) {
            $dataArray['ignoreConditionsIfValueIsSet'] = $data->getIgnoreConditionsIfValueIsSet();
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
        return [\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class => false];
    }
}