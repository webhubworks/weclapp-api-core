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
class OpportunityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Opportunity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Opportunity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Opportunity();
        if (\array_key_exists('hotLead', $data) && \is_int($data['hotLead'])) {
            $data['hotLead'] = (bool) $data['hotLead'];
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
        if (\array_key_exists('contactId', $data) && $data['contactId'] !== null) {
            $object->setContactId($data['contactId']);
            unset($data['contactId']);
        }
        elseif (\array_key_exists('contactId', $data) && $data['contactId'] === null) {
            $object->setContactId(null);
        }
        if (\array_key_exists('creatorId', $data) && $data['creatorId'] !== null) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        }
        elseif (\array_key_exists('creatorId', $data) && $data['creatorId'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('expectedDeliveryDate', $data) && $data['expectedDeliveryDate'] !== null) {
            $object->setExpectedDeliveryDate($data['expectedDeliveryDate']);
            unset($data['expectedDeliveryDate']);
        }
        elseif (\array_key_exists('expectedDeliveryDate', $data) && $data['expectedDeliveryDate'] === null) {
            $object->setExpectedDeliveryDate(null);
        }
        if (\array_key_exists('expectedSignatureDate', $data) && $data['expectedSignatureDate'] !== null) {
            $object->setExpectedSignatureDate($data['expectedSignatureDate']);
            unset($data['expectedSignatureDate']);
        }
        elseif (\array_key_exists('expectedSignatureDate', $data) && $data['expectedSignatureDate'] === null) {
            $object->setExpectedSignatureDate(null);
        }
        if (\array_key_exists('hotLead', $data) && $data['hotLead'] !== null) {
            $object->setHotLead($data['hotLead']);
            unset($data['hotLead']);
        }
        elseif (\array_key_exists('hotLead', $data) && $data['hotLead'] === null) {
            $object->setHotLead(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('nextCallDate', $data) && $data['nextCallDate'] !== null) {
            $object->setNextCallDate($data['nextCallDate']);
            unset($data['nextCallDate']);
        }
        elseif (\array_key_exists('nextCallDate', $data) && $data['nextCallDate'] === null) {
            $object->setNextCallDate(null);
        }
        if (\array_key_exists('opportunityNumber', $data) && $data['opportunityNumber'] !== null) {
            $object->setOpportunityNumber($data['opportunityNumber']);
            unset($data['opportunityNumber']);
        }
        elseif (\array_key_exists('opportunityNumber', $data) && $data['opportunityNumber'] === null) {
            $object->setOpportunityNumber(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('revenue', $data) && $data['revenue'] !== null) {
            $object->setRevenue($data['revenue']);
            unset($data['revenue']);
        }
        elseif (\array_key_exists('revenue', $data) && $data['revenue'] === null) {
            $object->setRevenue(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
        }
        if (\array_key_exists('salesProbability', $data) && $data['salesProbability'] !== null) {
            $object->setSalesProbability($data['salesProbability']);
            unset($data['salesProbability']);
        }
        elseif (\array_key_exists('salesProbability', $data) && $data['salesProbability'] === null) {
            $object->setSalesProbability(null);
        }
        if (\array_key_exists('salesStageHistory', $data) && $data['salesStageHistory'] !== null) {
            $values_1 = [];
            foreach ($data['salesStageHistory'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\SalesStageHistory::class, 'json', $context);
            }
            $object->setSalesStageHistory($values_1);
            unset($data['salesStageHistory']);
        }
        elseif (\array_key_exists('salesStageHistory', $data) && $data['salesStageHistory'] === null) {
            $object->setSalesStageHistory(null);
        }
        if (\array_key_exists('salesStageId', $data) && $data['salesStageId'] !== null) {
            $object->setSalesStageId($data['salesStageId']);
            unset($data['salesStageId']);
        }
        elseif (\array_key_exists('salesStageId', $data) && $data['salesStageId'] === null) {
            $object->setSalesStageId(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('topics', $data) && $data['topics'] !== null) {
            $values_3 = [];
            foreach ($data['topics'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setTopics($values_3);
            unset($data['topics']);
        }
        elseif (\array_key_exists('topics', $data) && $data['topics'] === null) {
            $object->setTopics(null);
        }
        if (\array_key_exists('winLossDescription', $data) && $data['winLossDescription'] !== null) {
            $object->setWinLossDescription($data['winLossDescription']);
            unset($data['winLossDescription']);
        }
        elseif (\array_key_exists('winLossDescription', $data) && $data['winLossDescription'] === null) {
            $object->setWinLossDescription(null);
        }
        if (\array_key_exists('winLossReasonId', $data) && $data['winLossReasonId'] !== null) {
            $object->setWinLossReasonId($data['winLossReasonId']);
            unset($data['winLossReasonId']);
        }
        elseif (\array_key_exists('winLossReasonId', $data) && $data['winLossReasonId'] === null) {
            $object->setWinLossReasonId(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($data->isInitialized('contactId') && null !== $data->getContactId()) {
            $dataArray['contactId'] = $data->getContactId();
        }
        if ($data->isInitialized('customerId') && null !== $data->getCustomerId()) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('expectedDeliveryDate') && null !== $data->getExpectedDeliveryDate()) {
            $dataArray['expectedDeliveryDate'] = $data->getExpectedDeliveryDate();
        }
        if ($data->isInitialized('expectedSignatureDate') && null !== $data->getExpectedSignatureDate()) {
            $dataArray['expectedSignatureDate'] = $data->getExpectedSignatureDate();
        }
        if ($data->isInitialized('hotLead') && null !== $data->getHotLead()) {
            $dataArray['hotLead'] = $data->getHotLead();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('nextCallDate') && null !== $data->getNextCallDate()) {
            $dataArray['nextCallDate'] = $data->getNextCallDate();
        }
        if ($data->isInitialized('opportunityNumber') && null !== $data->getOpportunityNumber()) {
            $dataArray['opportunityNumber'] = $data->getOpportunityNumber();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('revenue') && null !== $data->getRevenue()) {
            $dataArray['revenue'] = $data->getRevenue();
        }
        if ($data->isInitialized('salesChannel') && null !== $data->getSalesChannel()) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('salesProbability') && null !== $data->getSalesProbability()) {
            $dataArray['salesProbability'] = $data->getSalesProbability();
        }
        if ($data->isInitialized('salesStageId') && null !== $data->getSalesStageId()) {
            $dataArray['salesStageId'] = $data->getSalesStageId();
        }
        if ($data->isInitialized('startDate') && null !== $data->getStartDate()) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('topics') && null !== $data->getTopics()) {
            $values_2 = [];
            foreach ($data->getTopics() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['topics'] = $values_2;
        }
        if ($data->isInitialized('winLossDescription') && null !== $data->getWinLossDescription()) {
            $dataArray['winLossDescription'] = $data->getWinLossDescription();
        }
        if ($data->isInitialized('winLossReasonId') && null !== $data->getWinLossReasonId()) {
            $dataArray['winLossReasonId'] = $data->getWinLossReasonId();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Opportunity::class => false];
    }
}