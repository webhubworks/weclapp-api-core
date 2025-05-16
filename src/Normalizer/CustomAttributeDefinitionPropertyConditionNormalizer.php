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

class CustomAttributeDefinitionPropertyConditionNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('conditionOperator', $data)) {
            $object->setConditionOperator($data['conditionOperator']);
            unset($data['conditionOperator']);
        }
        if (\array_key_exists('propertyName', $data)) {
            $object->setPropertyName($data['propertyName']);
            unset($data['propertyName']);
        }
        if (\array_key_exists('propertyType', $data)) {
            $object->setPropertyType($data['propertyType']);
            unset($data['propertyType']);
        }
        if (\array_key_exists('propertyValue', $data)) {
            $object->setPropertyValue($data['propertyValue']);
            unset($data['propertyValue']);
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
        if ($data->isInitialized('conditionOperator') && $data->getConditionOperator() !== null) {
            $dataArray['conditionOperator'] = $data->getConditionOperator();
        }
        if ($data->isInitialized('propertyName') && $data->getPropertyName() !== null) {
            $dataArray['propertyName'] = $data->getPropertyName();
        }
        if ($data->isInitialized('propertyType') && $data->getPropertyType() !== null) {
            $dataArray['propertyType'] = $data->getPropertyType();
        }
        if ($data->isInitialized('propertyValue') && $data->getPropertyValue() !== null) {
            $dataArray['propertyValue'] = $data->getPropertyValue();
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
        return [\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition::class => false];
    }
}
