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
class CustomAttributeDefinitionPropertyConditionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('conditionOperator', $data) && $data['conditionOperator'] !== null) {
            $object->setConditionOperator($data['conditionOperator']);
            unset($data['conditionOperator']);
        }
        elseif (\array_key_exists('conditionOperator', $data) && $data['conditionOperator'] === null) {
            $object->setConditionOperator(null);
        }
        if (\array_key_exists('propertyName', $data) && $data['propertyName'] !== null) {
            $object->setPropertyName($data['propertyName']);
            unset($data['propertyName']);
        }
        elseif (\array_key_exists('propertyName', $data) && $data['propertyName'] === null) {
            $object->setPropertyName(null);
        }
        if (\array_key_exists('propertyType', $data) && $data['propertyType'] !== null) {
            $object->setPropertyType($data['propertyType']);
            unset($data['propertyType']);
        }
        elseif (\array_key_exists('propertyType', $data) && $data['propertyType'] === null) {
            $object->setPropertyType(null);
        }
        if (\array_key_exists('propertyValue', $data) && $data['propertyValue'] !== null) {
            $object->setPropertyValue($data['propertyValue']);
            unset($data['propertyValue']);
        }
        elseif (\array_key_exists('propertyValue', $data) && $data['propertyValue'] === null) {
            $object->setPropertyValue(null);
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
        if ($data->isInitialized('conditionOperator') && null !== $data->getConditionOperator()) {
            $dataArray['conditionOperator'] = $data->getConditionOperator();
        }
        if ($data->isInitialized('propertyName') && null !== $data->getPropertyName()) {
            $dataArray['propertyName'] = $data->getPropertyName();
        }
        if ($data->isInitialized('propertyType') && null !== $data->getPropertyType()) {
            $dataArray['propertyType'] = $data->getPropertyType();
        }
        if ($data->isInitialized('propertyValue') && null !== $data->getPropertyValue()) {
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