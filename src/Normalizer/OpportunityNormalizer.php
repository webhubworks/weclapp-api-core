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

class OpportunityNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Opportunity;
        if (\array_key_exists('hotLead', $data) && \is_int($data['hotLead'])) {
            $data['hotLead'] = (bool) $data['hotLead'];
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
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('contactId', $data)) {
            $object->setContactId($data['contactId']);
            unset($data['contactId']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('customerNumber', $data)) {
            $object->setCustomerNumber($data['customerNumber']);
            unset($data['customerNumber']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('expectedDeliveryDate', $data)) {
            $object->setExpectedDeliveryDate($data['expectedDeliveryDate']);
            unset($data['expectedDeliveryDate']);
        }
        if (\array_key_exists('expectedSignatureDate', $data)) {
            $object->setExpectedSignatureDate($data['expectedSignatureDate']);
            unset($data['expectedSignatureDate']);
        }
        if (\array_key_exists('hotLead', $data)) {
            $object->setHotLead($data['hotLead']);
            unset($data['hotLead']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('nextCallDate', $data)) {
            $object->setNextCallDate($data['nextCallDate']);
            unset($data['nextCallDate']);
        }
        if (\array_key_exists('opportunityNumber', $data)) {
            $object->setOpportunityNumber($data['opportunityNumber']);
            unset($data['opportunityNumber']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('responsibleUserUsername', $data)) {
            $object->setResponsibleUserUsername($data['responsibleUserUsername']);
            unset($data['responsibleUserUsername']);
        }
        if (\array_key_exists('revenue', $data)) {
            $object->setRevenue($data['revenue']);
            unset($data['revenue']);
        }
        if (\array_key_exists('salesChannel', $data)) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        }
        if (\array_key_exists('salesProbability', $data)) {
            $object->setSalesProbability($data['salesProbability']);
            unset($data['salesProbability']);
        }
        if (\array_key_exists('salesStageHistory', $data)) {
            $values_1 = [];
            foreach ($data['salesStageHistory'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\SalesStageHistory::class, 'json', $context);
            }
            $object->setSalesStageHistory($values_1);
            unset($data['salesStageHistory']);
        }
        if (\array_key_exists('salesStageId', $data)) {
            $object->setSalesStageId($data['salesStageId']);
            unset($data['salesStageId']);
        }
        if (\array_key_exists('salesStageName', $data)) {
            $object->setSalesStageName($data['salesStageName']);
            unset($data['salesStageName']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        if (\array_key_exists('topics', $data)) {
            $values_3 = [];
            foreach ($data['topics'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\Entity::class, 'json', $context);
            }
            $object->setTopics($values_3);
            unset($data['topics']);
        }
        if (\array_key_exists('winLossDescription', $data)) {
            $object->setWinLossDescription($data['winLossDescription']);
            unset($data['winLossDescription']);
        }
        if (\array_key_exists('winLossReasonId', $data)) {
            $object->setWinLossReasonId($data['winLossReasonId']);
            unset($data['winLossReasonId']);
        }
        if (\array_key_exists('winLossReasonName', $data)) {
            $object->setWinLossReasonName($data['winLossReasonName']);
            unset($data['winLossReasonName']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('contactId') && $data->getContactId() !== null) {
            $dataArray['contactId'] = $data->getContactId();
        }
        if ($data->isInitialized('creatorId') && $data->getCreatorId() !== null) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('customerId') && $data->getCustomerId() !== null) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('customerNumber') && $data->getCustomerNumber() !== null) {
            $dataArray['customerNumber'] = $data->getCustomerNumber();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('expectedDeliveryDate') && $data->getExpectedDeliveryDate() !== null) {
            $dataArray['expectedDeliveryDate'] = $data->getExpectedDeliveryDate();
        }
        if ($data->isInitialized('expectedSignatureDate') && $data->getExpectedSignatureDate() !== null) {
            $dataArray['expectedSignatureDate'] = $data->getExpectedSignatureDate();
        }
        if ($data->isInitialized('hotLead') && $data->getHotLead() !== null) {
            $dataArray['hotLead'] = $data->getHotLead();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('nextCallDate') && $data->getNextCallDate() !== null) {
            $dataArray['nextCallDate'] = $data->getNextCallDate();
        }
        if ($data->isInitialized('opportunityNumber') && $data->getOpportunityNumber() !== null) {
            $dataArray['opportunityNumber'] = $data->getOpportunityNumber();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('responsibleUserUsername') && $data->getResponsibleUserUsername() !== null) {
            $dataArray['responsibleUserUsername'] = $data->getResponsibleUserUsername();
        }
        if ($data->isInitialized('revenue') && $data->getRevenue() !== null) {
            $dataArray['revenue'] = $data->getRevenue();
        }
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
        }
        if ($data->isInitialized('salesProbability') && $data->getSalesProbability() !== null) {
            $dataArray['salesProbability'] = $data->getSalesProbability();
        }
        if ($data->isInitialized('salesStageHistory') && $data->getSalesStageHistory() !== null) {
            $values_1 = [];
            foreach ($data->getSalesStageHistory() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['salesStageHistory'] = $values_1;
        }
        if ($data->isInitialized('salesStageId') && $data->getSalesStageId() !== null) {
            $dataArray['salesStageId'] = $data->getSalesStageId();
        }
        if ($data->isInitialized('salesStageName') && $data->getSalesStageName() !== null) {
            $dataArray['salesStageName'] = $data->getSalesStageName();
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('topics') && $data->getTopics() !== null) {
            $values_3 = [];
            foreach ($data->getTopics() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['topics'] = $values_3;
        }
        if ($data->isInitialized('winLossDescription') && $data->getWinLossDescription() !== null) {
            $dataArray['winLossDescription'] = $data->getWinLossDescription();
        }
        if ($data->isInitialized('winLossReasonId') && $data->getWinLossReasonId() !== null) {
            $dataArray['winLossReasonId'] = $data->getWinLossReasonId();
        }
        if ($data->isInitialized('winLossReasonName') && $data->getWinLossReasonName() !== null) {
            $dataArray['winLossReasonName'] = $data->getWinLossReasonName();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Opportunity::class => false];
    }
}
