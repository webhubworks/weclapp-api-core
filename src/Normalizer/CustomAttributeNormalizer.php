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

class CustomAttributeNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CustomAttribute::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CustomAttribute::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CustomAttribute;
        if (\array_key_exists('booleanValue', $data) && \is_int($data['booleanValue'])) {
            $data['booleanValue'] = (bool) $data['booleanValue'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('attributeDefinitionId', $data) && $data['attributeDefinitionId'] !== null) {
            $object->setAttributeDefinitionId($data['attributeDefinitionId']);
            unset($data['attributeDefinitionId']);
        } elseif (\array_key_exists('attributeDefinitionId', $data) && $data['attributeDefinitionId'] === null) {
            $object->setAttributeDefinitionId(null);
        }
        if (\array_key_exists('booleanValue', $data) && $data['booleanValue'] !== null) {
            $object->setBooleanValue($data['booleanValue']);
            unset($data['booleanValue']);
        } elseif (\array_key_exists('booleanValue', $data) && $data['booleanValue'] === null) {
            $object->setBooleanValue(null);
        }
        if (\array_key_exists('dateValue', $data) && $data['dateValue'] !== null) {
            $object->setDateValue($data['dateValue']);
            unset($data['dateValue']);
        } elseif (\array_key_exists('dateValue', $data) && $data['dateValue'] === null) {
            $object->setDateValue(null);
        }
        if (\array_key_exists('entityId', $data) && $data['entityId'] !== null) {
            $object->setEntityId($data['entityId']);
            unset($data['entityId']);
        } elseif (\array_key_exists('entityId', $data) && $data['entityId'] === null) {
            $object->setEntityId(null);
        }
        if (\array_key_exists('entityReferences', $data) && $data['entityReferences'] !== null) {
            $values = [];
            foreach ($data['entityReferences'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values);
            unset($data['entityReferences']);
        } elseif (\array_key_exists('entityReferences', $data) && $data['entityReferences'] === null) {
            $object->setEntityReferences(null);
        }
        if (\array_key_exists('numberValue', $data) && $data['numberValue'] !== null) {
            $object->setNumberValue($data['numberValue']);
            unset($data['numberValue']);
        } elseif (\array_key_exists('numberValue', $data) && $data['numberValue'] === null) {
            $object->setNumberValue(null);
        }
        if (\array_key_exists('selectedValueId', $data) && $data['selectedValueId'] !== null) {
            $object->setSelectedValueId($data['selectedValueId']);
            unset($data['selectedValueId']);
        } elseif (\array_key_exists('selectedValueId', $data) && $data['selectedValueId'] === null) {
            $object->setSelectedValueId(null);
        }
        if (\array_key_exists('selectedValues', $data) && $data['selectedValues'] !== null) {
            $values_1 = [];
            foreach ($data['selectedValues'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSelectedValues($values_1);
            unset($data['selectedValues']);
        } elseif (\array_key_exists('selectedValues', $data) && $data['selectedValues'] === null) {
            $object->setSelectedValues(null);
        }
        if (\array_key_exists('stringValue', $data) && $data['stringValue'] !== null) {
            $object->setStringValue($data['stringValue']);
            unset($data['stringValue']);
        } elseif (\array_key_exists('stringValue', $data) && $data['stringValue'] === null) {
            $object->setStringValue(null);
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
        return [\Webhubworks\WeclappApiCore\Model\CustomAttribute::class => false];
    }
}
