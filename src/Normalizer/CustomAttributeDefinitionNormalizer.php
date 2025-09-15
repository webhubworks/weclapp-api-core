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
class CustomAttributeDefinitionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('attributeDescription', $data) && $data['attributeDescription'] !== null) {
            $object->setAttributeDescription($data['attributeDescription']);
            unset($data['attributeDescription']);
        }
        elseif (\array_key_exists('attributeDescription', $data) && $data['attributeDescription'] === null) {
            $object->setAttributeDescription(null);
        }
        if (\array_key_exists('attributeEntityType', $data) && $data['attributeEntityType'] !== null) {
            $object->setAttributeEntityType($data['attributeEntityType']);
            unset($data['attributeEntityType']);
        }
        elseif (\array_key_exists('attributeEntityType', $data) && $data['attributeEntityType'] === null) {
            $object->setAttributeEntityType(null);
        }
        if (\array_key_exists('attributeKey', $data) && $data['attributeKey'] !== null) {
            $object->setAttributeKey($data['attributeKey']);
            unset($data['attributeKey']);
        }
        elseif (\array_key_exists('attributeKey', $data) && $data['attributeKey'] === null) {
            $object->setAttributeKey(null);
        }
        if (\array_key_exists('attributeLabels', $data) && $data['attributeLabels'] !== null) {
            $values = [];
            foreach ($data['attributeLabels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionTranslation::class, 'json', $context);
            }
            $object->setAttributeLabels($values);
            unset($data['attributeLabels']);
        }
        elseif (\array_key_exists('attributeLabels', $data) && $data['attributeLabels'] === null) {
            $object->setAttributeLabels(null);
        }
        if (\array_key_exists('attributeType', $data) && $data['attributeType'] !== null) {
            $object->setAttributeType($data['attributeType']);
            unset($data['attributeType']);
        }
        elseif (\array_key_exists('attributeType', $data) && $data['attributeType'] === null) {
            $object->setAttributeType(null);
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $object->setConditions($this->denormalizer->denormalize($data['conditions'], \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class, 'json', $context));
            unset($data['conditions']);
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('defaultBooleanValue', $data) && $data['defaultBooleanValue'] !== null) {
            $object->setDefaultBooleanValue($data['defaultBooleanValue']);
            unset($data['defaultBooleanValue']);
        }
        elseif (\array_key_exists('defaultBooleanValue', $data) && $data['defaultBooleanValue'] === null) {
            $object->setDefaultBooleanValue(null);
        }
        if (\array_key_exists('defaultDateValue', $data) && $data['defaultDateValue'] !== null) {
            $object->setDefaultDateValue($data['defaultDateValue']);
            unset($data['defaultDateValue']);
        }
        elseif (\array_key_exists('defaultDateValue', $data) && $data['defaultDateValue'] === null) {
            $object->setDefaultDateValue(null);
        }
        if (\array_key_exists('defaultNumberValue', $data) && $data['defaultNumberValue'] !== null) {
            $object->setDefaultNumberValue($data['defaultNumberValue']);
            unset($data['defaultNumberValue']);
        }
        elseif (\array_key_exists('defaultNumberValue', $data) && $data['defaultNumberValue'] === null) {
            $object->setDefaultNumberValue(null);
        }
        if (\array_key_exists('defaultStringValue', $data) && $data['defaultStringValue'] !== null) {
            $object->setDefaultStringValue($data['defaultStringValue']);
            unset($data['defaultStringValue']);
        }
        elseif (\array_key_exists('defaultStringValue', $data) && $data['defaultStringValue'] === null) {
            $object->setDefaultStringValue(null);
        }
        if (\array_key_exists('entities', $data) && $data['entities'] !== null) {
            $values_1 = [];
            foreach ($data['entities'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEntities($values_1);
            unset($data['entities']);
        }
        elseif (\array_key_exists('entities', $data) && $data['entities'] === null) {
            $object->setEntities(null);
        }
        if (\array_key_exists('groupName', $data) && $data['groupName'] !== null) {
            $object->setGroupName($data['groupName']);
            unset($data['groupName']);
        }
        elseif (\array_key_exists('groupName', $data) && $data['groupName'] === null) {
            $object->setGroupName(null);
        }
        if (\array_key_exists('label', $data) && $data['label'] !== null) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        elseif (\array_key_exists('label', $data) && $data['label'] === null) {
            $object->setLabel(null);
        }
        if (\array_key_exists('legacyEntities', $data) && $data['legacyEntities'] !== null) {
            $values_2 = [];
            foreach ($data['legacyEntities'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLegacyEntities($values_2);
            unset($data['legacyEntities']);
        }
        elseif (\array_key_exists('legacyEntities', $data) && $data['legacyEntities'] === null) {
            $object->setLegacyEntities(null);
        }
        if (\array_key_exists('mandatory', $data) && $data['mandatory'] !== null) {
            $object->setMandatory($data['mandatory']);
            unset($data['mandatory']);
        }
        elseif (\array_key_exists('mandatory', $data) && $data['mandatory'] === null) {
            $object->setMandatory(null);
        }
        if (\array_key_exists('permissions', $data) && $data['permissions'] !== null) {
            $values_3 = [];
            foreach ($data['permissions'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPermission::class, 'json', $context);
            }
            $object->setPermissions($values_3);
            unset($data['permissions']);
        }
        elseif (\array_key_exists('permissions', $data) && $data['permissions'] === null) {
            $object->setPermissions(null);
        }
        if (\array_key_exists('publicPageTypes', $data) && $data['publicPageTypes'] !== null) {
            $values_4 = [];
            foreach ($data['publicPageTypes'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPublicPageTypes($values_4);
            unset($data['publicPageTypes']);
        }
        elseif (\array_key_exists('publicPageTypes', $data) && $data['publicPageTypes'] === null) {
            $object->setPublicPageTypes(null);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('selectableValues', $data) && $data['selectableValues'] !== null) {
            $values_5 = [];
            foreach ($data['selectableValues'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionListValue::class, 'json', $context);
            }
            $object->setSelectableValues($values_5);
            unset($data['selectableValues']);
        }
        elseif (\array_key_exists('selectableValues', $data) && $data['selectableValues'] === null) {
            $object->setSelectableValues(null);
        }
        if (\array_key_exists('showAttributeEntityType', $data) && $data['showAttributeEntityType'] !== null) {
            $object->setShowAttributeEntityType($data['showAttributeEntityType']);
            unset($data['showAttributeEntityType']);
        }
        elseif (\array_key_exists('showAttributeEntityType', $data) && $data['showAttributeEntityType'] === null) {
            $object->setShowAttributeEntityType(null);
        }
        if (\array_key_exists('showInOverview', $data) && $data['showInOverview'] !== null) {
            $object->setShowInOverview($data['showInOverview']);
            unset($data['showInOverview']);
        }
        elseif (\array_key_exists('showInOverview', $data) && $data['showInOverview'] === null) {
            $object->setShowInOverview(null);
        }
        if (\array_key_exists('showOnCreationDialog', $data) && $data['showOnCreationDialog'] !== null) {
            $object->setShowOnCreationDialog($data['showOnCreationDialog']);
            unset($data['showOnCreationDialog']);
        }
        elseif (\array_key_exists('showOnCreationDialog', $data) && $data['showOnCreationDialog'] === null) {
            $object->setShowOnCreationDialog(null);
        }
        if (\array_key_exists('systemCustomAttribute', $data) && $data['systemCustomAttribute'] !== null) {
            $object->setSystemCustomAttribute($data['systemCustomAttribute']);
            unset($data['systemCustomAttribute']);
        }
        elseif (\array_key_exists('systemCustomAttribute', $data) && $data['systemCustomAttribute'] === null) {
            $object->setSystemCustomAttribute(null);
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
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('attributeDescription') && null !== $data->getAttributeDescription()) {
            $dataArray['attributeDescription'] = $data->getAttributeDescription();
        }
        if ($data->isInitialized('attributeEntityType') && null !== $data->getAttributeEntityType()) {
            $dataArray['attributeEntityType'] = $data->getAttributeEntityType();
        }
        if ($data->isInitialized('attributeKey') && null !== $data->getAttributeKey()) {
            $dataArray['attributeKey'] = $data->getAttributeKey();
        }
        if ($data->isInitialized('attributeLabels') && null !== $data->getAttributeLabels()) {
            $values = [];
            foreach ($data->getAttributeLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['attributeLabels'] = $values;
        }
        if ($data->isInitialized('attributeType') && null !== $data->getAttributeType()) {
            $dataArray['attributeType'] = $data->getAttributeType();
        }
        if ($data->isInitialized('conditions') && null !== $data->getConditions()) {
            $dataArray['conditions'] = $this->normalizer->normalize($data->getConditions(), 'json', $context);
        }
        if ($data->isInitialized('defaultBooleanValue') && null !== $data->getDefaultBooleanValue()) {
            $dataArray['defaultBooleanValue'] = $data->getDefaultBooleanValue();
        }
        if ($data->isInitialized('defaultDateValue') && null !== $data->getDefaultDateValue()) {
            $dataArray['defaultDateValue'] = $data->getDefaultDateValue();
        }
        if ($data->isInitialized('defaultNumberValue') && null !== $data->getDefaultNumberValue()) {
            $dataArray['defaultNumberValue'] = $data->getDefaultNumberValue();
        }
        if ($data->isInitialized('defaultStringValue') && null !== $data->getDefaultStringValue()) {
            $dataArray['defaultStringValue'] = $data->getDefaultStringValue();
        }
        if ($data->isInitialized('entities') && null !== $data->getEntities()) {
            $values_1 = [];
            foreach ($data->getEntities() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['entities'] = $values_1;
        }
        if ($data->isInitialized('groupName') && null !== $data->getGroupName()) {
            $dataArray['groupName'] = $data->getGroupName();
        }
        if ($data->isInitialized('label') && null !== $data->getLabel()) {
            $dataArray['label'] = $data->getLabel();
        }
        if ($data->isInitialized('legacyEntities') && null !== $data->getLegacyEntities()) {
            $values_2 = [];
            foreach ($data->getLegacyEntities() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['legacyEntities'] = $values_2;
        }
        if ($data->isInitialized('mandatory') && null !== $data->getMandatory()) {
            $dataArray['mandatory'] = $data->getMandatory();
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $values_3 = [];
            foreach ($data->getPermissions() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['permissions'] = $values_3;
        }
        if ($data->isInitialized('publicPageTypes') && null !== $data->getPublicPageTypes()) {
            $values_4 = [];
            foreach ($data->getPublicPageTypes() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['publicPageTypes'] = $values_4;
        }
        if ($data->isInitialized('readOnly') && null !== $data->getReadOnly()) {
            $dataArray['readOnly'] = $data->getReadOnly();
        }
        if ($data->isInitialized('selectableValues') && null !== $data->getSelectableValues()) {
            $values_5 = [];
            foreach ($data->getSelectableValues() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['selectableValues'] = $values_5;
        }
        if ($data->isInitialized('showAttributeEntityType') && null !== $data->getShowAttributeEntityType()) {
            $dataArray['showAttributeEntityType'] = $data->getShowAttributeEntityType();
        }
        if ($data->isInitialized('showInOverview') && null !== $data->getShowInOverview()) {
            $dataArray['showInOverview'] = $data->getShowInOverview();
        }
        if ($data->isInitialized('showOnCreationDialog') && null !== $data->getShowOnCreationDialog()) {
            $dataArray['showOnCreationDialog'] = $data->getShowOnCreationDialog();
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