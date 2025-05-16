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

class CustomAttributeDefinitionNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition;
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('defaultBooleanValue', $data) && \is_int($data['defaultBooleanValue'])) {
            $data['defaultBooleanValue'] = (bool) $data['defaultBooleanValue'];
        }
        if (\array_key_exists('mandatory', $data) && \is_int($data['mandatory'])) {
            $data['mandatory'] = (bool) $data['mandatory'];
        }
        if (\array_key_exists('readOnly', $data) && \is_int($data['readOnly'])) {
            $data['readOnly'] = (bool) $data['readOnly'];
        }
        if (\array_key_exists('showAttributeEntityType', $data) && \is_int($data['showAttributeEntityType'])) {
            $data['showAttributeEntityType'] = (bool) $data['showAttributeEntityType'];
        }
        if (\array_key_exists('showInOverview', $data) && \is_int($data['showInOverview'])) {
            $data['showInOverview'] = (bool) $data['showInOverview'];
        }
        if (\array_key_exists('showOnCreationDialog', $data) && \is_int($data['showOnCreationDialog'])) {
            $data['showOnCreationDialog'] = (bool) $data['showOnCreationDialog'];
        }
        if (\array_key_exists('systemCustomAttribute', $data) && \is_int($data['systemCustomAttribute'])) {
            $data['systemCustomAttribute'] = (bool) $data['systemCustomAttribute'];
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
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('attributeDescription', $data)) {
            $object->setAttributeDescription($data['attributeDescription']);
            unset($data['attributeDescription']);
        }
        if (\array_key_exists('attributeEntityType', $data)) {
            $object->setAttributeEntityType($data['attributeEntityType']);
            unset($data['attributeEntityType']);
        }
        if (\array_key_exists('attributeKey', $data)) {
            $object->setAttributeKey($data['attributeKey']);
            unset($data['attributeKey']);
        }
        if (\array_key_exists('attributeLabels', $data)) {
            $values = [];
            foreach ($data['attributeLabels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionTranslation::class, 'json', $context);
            }
            $object->setAttributeLabels($values);
            unset($data['attributeLabels']);
        }
        if (\array_key_exists('attributeType', $data)) {
            $object->setAttributeType($data['attributeType']);
            unset($data['attributeType']);
        }
        if (\array_key_exists('conditions', $data)) {
            $object->setConditions($this->denormalizer->denormalize($data['conditions'], \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class, 'json', $context));
            unset($data['conditions']);
        }
        if (\array_key_exists('defaultBooleanValue', $data)) {
            $object->setDefaultBooleanValue($data['defaultBooleanValue']);
            unset($data['defaultBooleanValue']);
        }
        if (\array_key_exists('defaultDateValue', $data)) {
            $object->setDefaultDateValue($data['defaultDateValue']);
            unset($data['defaultDateValue']);
        }
        if (\array_key_exists('defaultNumberValue', $data)) {
            $object->setDefaultNumberValue($data['defaultNumberValue']);
            unset($data['defaultNumberValue']);
        }
        if (\array_key_exists('defaultStringValue', $data)) {
            $object->setDefaultStringValue($data['defaultStringValue']);
            unset($data['defaultStringValue']);
        }
        if (\array_key_exists('entities', $data)) {
            $values_1 = [];
            foreach ($data['entities'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEntities($values_1);
            unset($data['entities']);
        }
        if (\array_key_exists('groupName', $data)) {
            $object->setGroupName($data['groupName']);
            unset($data['groupName']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        if (\array_key_exists('legacyEntities', $data)) {
            $values_2 = [];
            foreach ($data['legacyEntities'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLegacyEntities($values_2);
            unset($data['legacyEntities']);
        }
        if (\array_key_exists('mandatory', $data)) {
            $object->setMandatory($data['mandatory']);
            unset($data['mandatory']);
        }
        if (\array_key_exists('permissions', $data)) {
            $values_3 = [];
            foreach ($data['permissions'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPermission::class, 'json', $context);
            }
            $object->setPermissions($values_3);
            unset($data['permissions']);
        }
        if (\array_key_exists('publicPageTypes', $data)) {
            $values_4 = [];
            foreach ($data['publicPageTypes'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPublicPageTypes($values_4);
            unset($data['publicPageTypes']);
        }
        if (\array_key_exists('readOnly', $data)) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        if (\array_key_exists('selectableValues', $data)) {
            $values_5 = [];
            foreach ($data['selectableValues'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionListValue::class, 'json', $context);
            }
            $object->setSelectableValues($values_5);
            unset($data['selectableValues']);
        }
        if (\array_key_exists('showAttributeEntityType', $data)) {
            $object->setShowAttributeEntityType($data['showAttributeEntityType']);
            unset($data['showAttributeEntityType']);
        }
        if (\array_key_exists('showInOverview', $data)) {
            $object->setShowInOverview($data['showInOverview']);
            unset($data['showInOverview']);
        }
        if (\array_key_exists('showOnCreationDialog', $data)) {
            $object->setShowOnCreationDialog($data['showOnCreationDialog']);
            unset($data['showOnCreationDialog']);
        }
        if (\array_key_exists('systemCustomAttribute', $data)) {
            $object->setSystemCustomAttribute($data['systemCustomAttribute']);
            unset($data['systemCustomAttribute']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
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
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('attributeDescription') && $data->getAttributeDescription() !== null) {
            $dataArray['attributeDescription'] = $data->getAttributeDescription();
        }
        if ($data->isInitialized('attributeEntityType') && $data->getAttributeEntityType() !== null) {
            $dataArray['attributeEntityType'] = $data->getAttributeEntityType();
        }
        if ($data->isInitialized('attributeKey') && $data->getAttributeKey() !== null) {
            $dataArray['attributeKey'] = $data->getAttributeKey();
        }
        if ($data->isInitialized('attributeLabels') && $data->getAttributeLabels() !== null) {
            $values = [];
            foreach ($data->getAttributeLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attributeLabels'] = $values;
        }
        if ($data->isInitialized('attributeType') && $data->getAttributeType() !== null) {
            $dataArray['attributeType'] = $data->getAttributeType();
        }
        if ($data->isInitialized('conditions') && $data->getConditions() !== null) {
            $dataArray['conditions'] = $this->normalizer->normalize($data->getConditions(), 'json', $context);
        }
        if ($data->isInitialized('defaultBooleanValue') && $data->getDefaultBooleanValue() !== null) {
            $dataArray['defaultBooleanValue'] = $data->getDefaultBooleanValue();
        }
        if ($data->isInitialized('defaultDateValue') && $data->getDefaultDateValue() !== null) {
            $dataArray['defaultDateValue'] = $data->getDefaultDateValue();
        }
        if ($data->isInitialized('defaultNumberValue') && $data->getDefaultNumberValue() !== null) {
            $dataArray['defaultNumberValue'] = $data->getDefaultNumberValue();
        }
        if ($data->isInitialized('defaultStringValue') && $data->getDefaultStringValue() !== null) {
            $dataArray['defaultStringValue'] = $data->getDefaultStringValue();
        }
        if ($data->isInitialized('entities') && $data->getEntities() !== null) {
            $values_1 = [];
            foreach ($data->getEntities() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['entities'] = $values_1;
        }
        if ($data->isInitialized('groupName') && $data->getGroupName() !== null) {
            $dataArray['groupName'] = $data->getGroupName();
        }
        if ($data->isInitialized('label') && $data->getLabel() !== null) {
            $dataArray['label'] = $data->getLabel();
        }
        if ($data->isInitialized('legacyEntities') && $data->getLegacyEntities() !== null) {
            $values_2 = [];
            foreach ($data->getLegacyEntities() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['legacyEntities'] = $values_2;
        }
        if ($data->isInitialized('mandatory') && $data->getMandatory() !== null) {
            $dataArray['mandatory'] = $data->getMandatory();
        }
        if ($data->isInitialized('permissions') && $data->getPermissions() !== null) {
            $values_3 = [];
            foreach ($data->getPermissions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['permissions'] = $values_3;
        }
        if ($data->isInitialized('publicPageTypes') && $data->getPublicPageTypes() !== null) {
            $values_4 = [];
            foreach ($data->getPublicPageTypes() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['publicPageTypes'] = $values_4;
        }
        if ($data->isInitialized('readOnly') && $data->getReadOnly() !== null) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('selectableValues') && $data->getSelectableValues() !== null) {
            $values_5 = [];
            foreach ($data->getSelectableValues() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['selectableValues'] = $values_5;
        }
        if ($data->isInitialized('showAttributeEntityType') && $data->getShowAttributeEntityType() !== null) {
            $dataArray['showAttributeEntityType'] = $data->getShowAttributeEntityType();
        }
        if ($data->isInitialized('showInOverview') && $data->getShowInOverview() !== null) {
            $dataArray['showInOverview'] = $data->getShowInOverview();
        }
        if ($data->isInitialized('showOnCreationDialog') && $data->getShowOnCreationDialog() !== null) {
            $dataArray['showOnCreationDialog'] = $data->getShowOnCreationDialog();
        }
        if ($data->isInitialized('systemCustomAttribute') && $data->getSystemCustomAttribute() !== null) {
            $dataArray['systemCustomAttribute'] = $data->getSystemCustomAttribute();
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition::class => false];
    }
}
