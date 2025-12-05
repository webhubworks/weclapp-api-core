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
class TaskTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TaskTemplate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TaskTemplate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TaskTemplate();
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
            $values_1 = [];
            foreach ($data['assignees'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\TaskTemplateAssignee::class, 'json', $context);
            }
            $object->setAssignees($values_1);
            unset($data['assignees']);
        }
        elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
            $object->setAssignees(null);
        }
        if (\array_key_exists('creatorUserId', $data) && $data['creatorUserId'] !== null) {
            $object->setCreatorUserId($data['creatorUserId']);
            unset($data['creatorUserId']);
        }
        elseif (\array_key_exists('creatorUserId', $data) && $data['creatorUserId'] === null) {
            $object->setCreatorUserId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('entityReferences', $data) && $data['entityReferences'] !== null) {
            $values_2 = [];
            foreach ($data['entityReferences'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values_2);
            unset($data['entityReferences']);
        }
        elseif (\array_key_exists('entityReferences', $data) && $data['entityReferences'] === null) {
            $object->setEntityReferences(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('parentTaskTemplateId', $data) && $data['parentTaskTemplateId'] !== null) {
            $object->setParentTaskTemplateId($data['parentTaskTemplateId']);
            unset($data['parentTaskTemplateId']);
        }
        elseif (\array_key_exists('parentTaskTemplateId', $data) && $data['parentTaskTemplateId'] === null) {
            $object->setParentTaskTemplateId(null);
        }
        if (\array_key_exists('plannedEffort', $data) && $data['plannedEffort'] !== null) {
            $object->setPlannedEffort($data['plannedEffort']);
            unset($data['plannedEffort']);
        }
        elseif (\array_key_exists('plannedEffort', $data) && $data['plannedEffort'] === null) {
            $object->setPlannedEffort(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('taskPriority', $data) && $data['taskPriority'] !== null) {
            $object->setTaskPriority($data['taskPriority']);
            unset($data['taskPriority']);
        }
        elseif (\array_key_exists('taskPriority', $data) && $data['taskPriority'] === null) {
            $object->setTaskPriority(null);
        }
        if (\array_key_exists('taskTopics', $data) && $data['taskTopics'] !== null) {
            $values_3 = [];
            foreach ($data['taskTopics'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTaskTopics($values_3);
            unset($data['taskTopics']);
        }
        elseif (\array_key_exists('taskTopics', $data) && $data['taskTopics'] === null) {
            $object->setTaskTopics(null);
        }
        if (\array_key_exists('taskTypes', $data) && $data['taskTypes'] !== null) {
            $values_4 = [];
            foreach ($data['taskTypes'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTaskTypes($values_4);
            unset($data['taskTypes']);
        }
        elseif (\array_key_exists('taskTypes', $data) && $data['taskTypes'] === null) {
            $object->setTaskTypes(null);
        }
        if (\array_key_exists('taskVisibilityType', $data) && $data['taskVisibilityType'] !== null) {
            $object->setTaskVisibilityType($data['taskVisibilityType']);
            unset($data['taskVisibilityType']);
        }
        elseif (\array_key_exists('taskVisibilityType', $data) && $data['taskVisibilityType'] === null) {
            $object->setTaskVisibilityType(null);
        }
        if (\array_key_exists('watchers', $data) && $data['watchers'] !== null) {
            $values_5 = [];
            foreach ($data['watchers'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setWatchers($values_5);
            unset($data['watchers']);
        }
        elseif (\array_key_exists('watchers', $data) && $data['watchers'] === null) {
            $object->setWatchers(null);
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
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('assignees') && null !== $data->getAssignees()) {
            $values_1 = [];
            foreach ($data->getAssignees() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['assignees'] = $values_1;
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('entityReferences') && null !== $data->getEntityReferences()) {
            $values_2 = [];
            foreach ($data->getEntityReferences() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['entityReferences'] = $values_2;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parentTaskTemplateId') && null !== $data->getParentTaskTemplateId()) {
            $dataArray['parentTaskTemplateId'] = $data->getParentTaskTemplateId();
        }
        if ($data->isInitialized('plannedEffort') && null !== $data->getPlannedEffort()) {
            $dataArray['plannedEffort'] = $data->getPlannedEffort();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('taskPriority') && null !== $data->getTaskPriority()) {
            $dataArray['taskPriority'] = $data->getTaskPriority();
        }
        if ($data->isInitialized('taskTopics') && null !== $data->getTaskTopics()) {
            $values_3 = [];
            foreach ($data->getTaskTopics() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['taskTopics'] = $values_3;
        }
        if ($data->isInitialized('taskTypes') && null !== $data->getTaskTypes()) {
            $values_4 = [];
            foreach ($data->getTaskTypes() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['taskTypes'] = $values_4;
        }
        if ($data->isInitialized('taskVisibilityType') && null !== $data->getTaskVisibilityType()) {
            $dataArray['taskVisibilityType'] = $data->getTaskVisibilityType();
        }
        if ($data->isInitialized('watchers') && null !== $data->getWatchers()) {
            $values_5 = [];
            foreach ($data->getWatchers() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $dataArray['watchers'] = $values_5;
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
        return [\Webhubworks\WeclappApiCore\Model\TaskTemplate::class => false];
    }
}