<?php

namespace Webhub\Weclapp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webhub\Weclapp\Runtime\Normalizer\CheckArray;
use Webhub\Weclapp\Runtime\Normalizer\ValidatorTrait;

class CustomAttributeNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhub\Weclapp\Model\CustomAttribute::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhub\Weclapp\Model\CustomAttribute::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhub\Weclapp\Model\CustomAttribute;
        if (\array_key_exists('booleanValue', $data) && \is_int($data['booleanValue'])) {
            $data['booleanValue'] = (bool) $data['booleanValue'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('attributeDefinitionId', $data)) {
            $object->setAttributeDefinitionId($data['attributeDefinitionId']);
            unset($data['attributeDefinitionId']);
        }
        if (\array_key_exists('booleanValue', $data)) {
            $object->setBooleanValue($data['booleanValue']);
            unset($data['booleanValue']);
        }
        if (\array_key_exists('dateValue', $data)) {
            $object->setDateValue($data['dateValue']);
            unset($data['dateValue']);
        }
        if (\array_key_exists('entityId', $data)) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        }
        if (\array_key_exists('entityReferences', $data)) {
            $values = [];
            foreach ($data['entityReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhub\Weclapp\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values);
            unset($data['entityReferences']);
        }
        if (\array_key_exists('numberValue', $data)) {
            $object->setNumberValue($data['numberValue']);
            unset($data['numberValue']);
        }
        if (\array_key_exists('selectedValueId', $data)) {
            $object->setSelectedValueId($data['selectedValueId']);
            unset($data['selectedValueId']);
        }
        if (\array_key_exists('selectedValues', $data)) {
            $values_1 = [];
            foreach ($data['selectedValues'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhub\Weclapp\Model\OnlyId::class, 'json', $context);
            }
            $object->setSelectedValues($values_1);
            unset($data['selectedValues']);
        }
        if (\array_key_exists('stringValue', $data)) {
            $object->setStringValue($data['stringValue']);
            unset($data['stringValue']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('attributeDefinitionId') && $data->getAttributeDefinitionId() !== null) {
            $dataArray['attributeDefinitionId'] = $data->getAttributeDefinitionId();
        }
        if ($data->isInitialized('booleanValue') && $data->getBooleanValue() !== null) {
            $dataArray['booleanValue'] = $data->getBooleanValue();
        }
        if ($data->isInitialized('dateValue') && $data->getDateValue() !== null) {
            $dataArray['dateValue'] = $data->getDateValue();
        }
        if ($data->isInitialized('entityId') && $data->getEntityId() !== null) {
            $dataArray['entityId'] = $data->getEntityId();
        }
        if ($data->isInitialized('entityReferences') && $data->getEntityReferences() !== null) {
            $values = [];
            foreach ($data->getEntityReferences() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['entityReferences'] = $values;
        }
        if ($data->isInitialized('numberValue') && $data->getNumberValue() !== null) {
            $dataArray['numberValue'] = $data->getNumberValue();
        }
        if ($data->isInitialized('selectedValueId') && $data->getSelectedValueId() !== null) {
            $dataArray['selectedValueId'] = $data->getSelectedValueId();
        }
        if ($data->isInitialized('selectedValues') && $data->getSelectedValues() !== null) {
            $values_1 = [];
            foreach ($data->getSelectedValues() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['selectedValues'] = $values_1;
        }
        if ($data->isInitialized('stringValue') && $data->getStringValue() !== null) {
            $dataArray['stringValue'] = $data->getStringValue();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhub\Weclapp\Model\CustomAttribute::class => false];
    }
}
