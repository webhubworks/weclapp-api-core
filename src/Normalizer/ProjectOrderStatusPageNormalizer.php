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
class ProjectOrderStatusPageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ProjectOrderStatusPage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ProjectOrderStatusPage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ProjectOrderStatusPage();
        if (\array_key_exists('commentsVisible', $data) && \is_int($data['commentsVisible'])) {
            $data['commentsVisible'] = (bool) $data['commentsVisible'];
        }
        if (\array_key_exists('createComments', $data) && \is_int($data['createComments'])) {
            $data['createComments'] = (bool) $data['createComments'];
        }
        if (\array_key_exists('displayAllTeamMembers', $data) && \is_int($data['displayAllTeamMembers'])) {
            $data['displayAllTeamMembers'] = (bool) $data['displayAllTeamMembers'];
        }
        if (\array_key_exists('documentsVisible', $data) && \is_int($data['documentsVisible'])) {
            $data['documentsVisible'] = (bool) $data['documentsVisible'];
        }
        if (\array_key_exists('mainTasksVisible', $data) && \is_int($data['mainTasksVisible'])) {
            $data['mainTasksVisible'] = (bool) $data['mainTasksVisible'];
        }
        if (\array_key_exists('subTasksVisible', $data) && \is_int($data['subTasksVisible'])) {
            $data['subTasksVisible'] = (bool) $data['subTasksVisible'];
        }
        if (\array_key_exists('ticketsVisible', $data) && \is_int($data['ticketsVisible'])) {
            $data['ticketsVisible'] = (bool) $data['ticketsVisible'];
        }
        if (\array_key_exists('uploadDocument', $data) && \is_int($data['uploadDocument'])) {
            $data['uploadDocument'] = (bool) $data['uploadDocument'];
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
        if (\array_key_exists('commentsVisible', $data) && $data['commentsVisible'] !== null) {
            $object->setCommentsVisible($data['commentsVisible']);
            unset($data['commentsVisible']);
        }
        elseif (\array_key_exists('commentsVisible', $data) && $data['commentsVisible'] === null) {
            $object->setCommentsVisible(null);
        }
        if (\array_key_exists('createComments', $data) && $data['createComments'] !== null) {
            $object->setCreateComments($data['createComments']);
            unset($data['createComments']);
        }
        elseif (\array_key_exists('createComments', $data) && $data['createComments'] === null) {
            $object->setCreateComments(null);
        }
        if (\array_key_exists('displayAllTeamMembers', $data) && $data['displayAllTeamMembers'] !== null) {
            $object->setDisplayAllTeamMembers($data['displayAllTeamMembers']);
            unset($data['displayAllTeamMembers']);
        }
        elseif (\array_key_exists('displayAllTeamMembers', $data) && $data['displayAllTeamMembers'] === null) {
            $object->setDisplayAllTeamMembers(null);
        }
        if (\array_key_exists('documentsVisible', $data) && $data['documentsVisible'] !== null) {
            $object->setDocumentsVisible($data['documentsVisible']);
            unset($data['documentsVisible']);
        }
        elseif (\array_key_exists('documentsVisible', $data) && $data['documentsVisible'] === null) {
            $object->setDocumentsVisible(null);
        }
        if (\array_key_exists('mainTasksVisible', $data) && $data['mainTasksVisible'] !== null) {
            $object->setMainTasksVisible($data['mainTasksVisible']);
            unset($data['mainTasksVisible']);
        }
        elseif (\array_key_exists('mainTasksVisible', $data) && $data['mainTasksVisible'] === null) {
            $object->setMainTasksVisible(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('plannedWorkVisibility', $data) && $data['plannedWorkVisibility'] !== null) {
            $object->setPlannedWorkVisibility($data['plannedWorkVisibility']);
            unset($data['plannedWorkVisibility']);
        }
        elseif (\array_key_exists('plannedWorkVisibility', $data) && $data['plannedWorkVisibility'] === null) {
            $object->setPlannedWorkVisibility(null);
        }
        if (\array_key_exists('projectOrderId', $data) && $data['projectOrderId'] !== null) {
            $object->setProjectOrderId($data['projectOrderId']);
            unset($data['projectOrderId']);
        }
        elseif (\array_key_exists('projectOrderId', $data) && $data['projectOrderId'] === null) {
            $object->setProjectOrderId(null);
        }
        if (\array_key_exists('projectStatusPageUrl', $data) && $data['projectStatusPageUrl'] !== null) {
            $object->setProjectStatusPageUrl($data['projectStatusPageUrl']);
            unset($data['projectStatusPageUrl']);
        }
        elseif (\array_key_exists('projectStatusPageUrl', $data) && $data['projectStatusPageUrl'] === null) {
            $object->setProjectStatusPageUrl(null);
        }
        if (\array_key_exists('realizedWorkVisibility', $data) && $data['realizedWorkVisibility'] !== null) {
            $object->setRealizedWorkVisibility($data['realizedWorkVisibility']);
            unset($data['realizedWorkVisibility']);
        }
        elseif (\array_key_exists('realizedWorkVisibility', $data) && $data['realizedWorkVisibility'] === null) {
            $object->setRealizedWorkVisibility(null);
        }
        if (\array_key_exists('subTasksVisible', $data) && $data['subTasksVisible'] !== null) {
            $object->setSubTasksVisible($data['subTasksVisible']);
            unset($data['subTasksVisible']);
        }
        elseif (\array_key_exists('subTasksVisible', $data) && $data['subTasksVisible'] === null) {
            $object->setSubTasksVisible(null);
        }
        if (\array_key_exists('ticketsVisible', $data) && $data['ticketsVisible'] !== null) {
            $object->setTicketsVisible($data['ticketsVisible']);
            unset($data['ticketsVisible']);
        }
        elseif (\array_key_exists('ticketsVisible', $data) && $data['ticketsVisible'] === null) {
            $object->setTicketsVisible(null);
        }
        if (\array_key_exists('uploadDocument', $data) && $data['uploadDocument'] !== null) {
            $object->setUploadDocument($data['uploadDocument']);
            unset($data['uploadDocument']);
        }
        elseif (\array_key_exists('uploadDocument', $data) && $data['uploadDocument'] === null) {
            $object->setUploadDocument(null);
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
        if ($data->isInitialized('commentsVisible') && null !== $data->getCommentsVisible()) {
            $dataArray['commentsVisible'] = $data->getCommentsVisible();
        }
        if ($data->isInitialized('createComments') && null !== $data->getCreateComments()) {
            $dataArray['createComments'] = $data->getCreateComments();
        }
        if ($data->isInitialized('displayAllTeamMembers') && null !== $data->getDisplayAllTeamMembers()) {
            $dataArray['displayAllTeamMembers'] = $data->getDisplayAllTeamMembers();
        }
        if ($data->isInitialized('documentsVisible') && null !== $data->getDocumentsVisible()) {
            $dataArray['documentsVisible'] = $data->getDocumentsVisible();
        }
        if ($data->isInitialized('mainTasksVisible') && null !== $data->getMainTasksVisible()) {
            $dataArray['mainTasksVisible'] = $data->getMainTasksVisible();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('plannedWorkVisibility') && null !== $data->getPlannedWorkVisibility()) {
            $dataArray['plannedWorkVisibility'] = $data->getPlannedWorkVisibility();
        }
        if ($data->isInitialized('projectOrderId') && null !== $data->getProjectOrderId()) {
            $dataArray['projectOrderId'] = $data->getProjectOrderId();
        }
        if ($data->isInitialized('projectStatusPageUrl') && null !== $data->getProjectStatusPageUrl()) {
            $dataArray['projectStatusPageUrl'] = $data->getProjectStatusPageUrl();
        }
        if ($data->isInitialized('realizedWorkVisibility') && null !== $data->getRealizedWorkVisibility()) {
            $dataArray['realizedWorkVisibility'] = $data->getRealizedWorkVisibility();
        }
        if ($data->isInitialized('subTasksVisible') && null !== $data->getSubTasksVisible()) {
            $dataArray['subTasksVisible'] = $data->getSubTasksVisible();
        }
        if ($data->isInitialized('ticketsVisible') && null !== $data->getTicketsVisible()) {
            $dataArray['ticketsVisible'] = $data->getTicketsVisible();
        }
        if ($data->isInitialized('uploadDocument') && null !== $data->getUploadDocument()) {
            $dataArray['uploadDocument'] = $data->getUploadDocument();
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
        return [\Webhubworks\WeclappApiCore\Model\ProjectOrderStatusPage::class => false];
    }
}