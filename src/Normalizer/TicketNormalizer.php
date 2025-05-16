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
class TicketNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Ticket::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Ticket::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Ticket();
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
        }
        if (\array_key_exists('billableStatus', $data) && \is_int($data['billableStatus'])) {
            $data['billableStatus'] = (bool) $data['billableStatus'];
        }
        if (\array_key_exists('disableEmailTemplates', $data) && \is_int($data['disableEmailTemplates'])) {
            $data['disableEmailTemplates'] = (bool) $data['disableEmailTemplates'];
        }
        if (\array_key_exists('isTemplate', $data) && \is_int($data['isTemplate'])) {
            $data['isTemplate'] = (bool) $data['isTemplate'];
        }
        if (\array_key_exists('legacyTimeAndMaterialTicket', $data) && \is_int($data['legacyTimeAndMaterialTicket'])) {
            $data['legacyTimeAndMaterialTicket'] = (bool) $data['legacyTimeAndMaterialTicket'];
        }
        if (\array_key_exists('resolvedYourIssue', $data) && \is_int($data['resolvedYourIssue'])) {
            $data['resolvedYourIssue'] = (bool) $data['resolvedYourIssue'];
        }
        if (null === $data || false === \is_array($data)) {
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
        if (\array_key_exists('assignedPoolingGroupId', $data)) {
            $object->setAssignedPoolingGroupId($data['assignedPoolingGroupId']);
            unset($data['assignedPoolingGroupId']);
        }
        if (\array_key_exists('assignedUserId', $data)) {
            $object->setAssignedUserId($data['assignedUserId']);
            unset($data['assignedUserId']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
            unset($data['billable']);
        }
        if (\array_key_exists('billableStatus', $data)) {
            $object->setBillableStatus($data['billableStatus']);
            unset($data['billableStatus']);
        }
        if (\array_key_exists('ccEmailAddresses', $data)) {
            $object->setCcEmailAddresses($data['ccEmailAddresses']);
            unset($data['ccEmailAddresses']);
        }
        if (\array_key_exists('contactId', $data)) {
            $object->setContactId($data['contactId']);
            unset($data['contactId']);
        }
        if (\array_key_exists('contractId', $data)) {
            $object->setContractId($data['contractId']);
            unset($data['contractId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('disableEmailTemplates', $data)) {
            $object->setDisableEmailTemplates($data['disableEmailTemplates']);
            unset($data['disableEmailTemplates']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('entityReferences', $data)) {
            $values_1 = [];
            foreach ($data['entityReferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values_1);
            unset($data['entityReferences']);
        }
        if (\array_key_exists('finishedDate', $data)) {
            $object->setFinishedDate($data['finishedDate']);
            unset($data['finishedDate']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('followUpDate', $data)) {
            $object->setFollowUpDate($data['followUpDate']);
            unset($data['followUpDate']);
        }
        if (\array_key_exists('invoicingStatus', $data)) {
            $object->setInvoicingStatus($data['invoicingStatus']);
            unset($data['invoicingStatus']);
        }
        if (\array_key_exists('isTemplate', $data)) {
            $object->setIsTemplate($data['isTemplate']);
            unset($data['isTemplate']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        if (\array_key_exists('legacyArticleId', $data)) {
            $object->setLegacyArticleId($data['legacyArticleId']);
            unset($data['legacyArticleId']);
        }
        if (\array_key_exists('legacyTimeAndMaterialTicket', $data)) {
            $object->setLegacyTimeAndMaterialTicket($data['legacyTimeAndMaterialTicket']);
            unset($data['legacyTimeAndMaterialTicket']);
        }
        if (\array_key_exists('mail2TicketId', $data)) {
            $object->setMail2TicketId($data['mail2TicketId']);
            unset($data['mail2TicketId']);
        }
        if (\array_key_exists('mobilePhoneNumber', $data)) {
            $object->setMobilePhoneNumber($data['mobilePhoneNumber']);
            unset($data['mobilePhoneNumber']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('partyId', $data)) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        if (\array_key_exists('performanceRecordedStatus', $data)) {
            $object->setPerformanceRecordedStatus($data['performanceRecordedStatus']);
            unset($data['performanceRecordedStatus']);
        }
        if (\array_key_exists('phoneNumber', $data)) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        }
        if (\array_key_exists('publicPageExpirationDate', $data)) {
            $object->setPublicPageExpirationDate($data['publicPageExpirationDate']);
            unset($data['publicPageExpirationDate']);
        }
        if (\array_key_exists('publicPageUuid', $data)) {
            $object->setPublicPageUuid($data['publicPageUuid']);
            unset($data['publicPageUuid']);
        }
        if (\array_key_exists('resolvedYourIssue', $data)) {
            $object->setResolvedYourIssue($data['resolvedYourIssue']);
            unset($data['resolvedYourIssue']);
        }
        if (\array_key_exists('responsibleUserId', $data)) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        if (\array_key_exists('room', $data)) {
            $object->setRoom($data['room']);
            unset($data['room']);
        }
        if (\array_key_exists('salesOrderId', $data)) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        }
        if (\array_key_exists('solutionDueDate', $data)) {
            $object->setSolutionDueDate($data['solutionDueDate']);
            unset($data['solutionDueDate']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_2 = [];
            foreach ($data['tags'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
            unset($data['tags']);
        }
        if (\array_key_exists('ticketCategoryId', $data)) {
            $object->setTicketCategoryId($data['ticketCategoryId']);
            unset($data['ticketCategoryId']);
        }
        if (\array_key_exists('ticketChannelId', $data)) {
            $object->setTicketChannelId($data['ticketChannelId']);
            unset($data['ticketChannelId']);
        }
        if (\array_key_exists('ticketNumber', $data)) {
            $object->setTicketNumber($data['ticketNumber']);
            unset($data['ticketNumber']);
        }
        if (\array_key_exists('ticketPriorityId', $data)) {
            $object->setTicketPriorityId($data['ticketPriorityId']);
            unset($data['ticketPriorityId']);
        }
        if (\array_key_exists('ticketRating', $data)) {
            $object->setTicketRating($data['ticketRating']);
            unset($data['ticketRating']);
        }
        if (\array_key_exists('ticketRatingComment', $data)) {
            $object->setTicketRatingComment($data['ticketRatingComment']);
            unset($data['ticketRatingComment']);
        }
        if (\array_key_exists('ticketRatingDate', $data)) {
            $object->setTicketRatingDate($data['ticketRatingDate']);
            unset($data['ticketRatingDate']);
        }
        if (\array_key_exists('ticketServiceLevelAgreementId', $data)) {
            $object->setTicketServiceLevelAgreementId($data['ticketServiceLevelAgreementId']);
            unset($data['ticketServiceLevelAgreementId']);
        }
        if (\array_key_exists('ticketStatusId', $data)) {
            $object->setTicketStatusId($data['ticketStatusId']);
            unset($data['ticketStatusId']);
        }
        if (\array_key_exists('ticketTypeId', $data)) {
            $object->setTicketTypeId($data['ticketTypeId']);
            unset($data['ticketTypeId']);
        }
        if (\array_key_exists('watchers', $data)) {
            $values_3 = [];
            foreach ($data['watchers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setWatchers($values_3);
            unset($data['watchers']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('assignedPoolingGroupId') && null !== $data->getAssignedPoolingGroupId()) {
            $dataArray['assignedPoolingGroupId'] = $data->getAssignedPoolingGroupId();
        }
        if ($data->isInitialized('assignedUserId') && null !== $data->getAssignedUserId()) {
            $dataArray['assignedUserId'] = $data->getAssignedUserId();
        }
        if ($data->isInitialized('billable') && null !== $data->getBillable()) {
            $dataArray['billable'] = $data->getBillable();
        }
        if ($data->isInitialized('billableStatus') && null !== $data->getBillableStatus()) {
            $dataArray['billableStatus'] = $data->getBillableStatus();
        }
        if ($data->isInitialized('ccEmailAddresses') && null !== $data->getCcEmailAddresses()) {
            $dataArray['ccEmailAddresses'] = $data->getCcEmailAddresses();
        }
        if ($data->isInitialized('contactId') && null !== $data->getContactId()) {
            $dataArray['contactId'] = $data->getContactId();
        }
        if ($data->isInitialized('contractId') && null !== $data->getContractId()) {
            $dataArray['contractId'] = $data->getContractId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('disableEmailTemplates') && null !== $data->getDisableEmailTemplates()) {
            $dataArray['disableEmailTemplates'] = $data->getDisableEmailTemplates();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('entityReferences') && null !== $data->getEntityReferences()) {
            $values_1 = [];
            foreach ($data->getEntityReferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['entityReferences'] = $values_1;
        }
        if ($data->isInitialized('finishedDate') && null !== $data->getFinishedDate()) {
            $dataArray['finishedDate'] = $data->getFinishedDate();
        }
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('followUpDate') && null !== $data->getFollowUpDate()) {
            $dataArray['followUpDate'] = $data->getFollowUpDate();
        }
        if ($data->isInitialized('invoicingStatus') && null !== $data->getInvoicingStatus()) {
            $dataArray['invoicingStatus'] = $data->getInvoicingStatus();
        }
        if ($data->isInitialized('isTemplate') && null !== $data->getIsTemplate()) {
            $dataArray['isTemplate'] = $data->getIsTemplate();
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('legacyArticleId') && null !== $data->getLegacyArticleId()) {
            $dataArray['legacyArticleId'] = $data->getLegacyArticleId();
        }
        if ($data->isInitialized('legacyTimeAndMaterialTicket') && null !== $data->getLegacyTimeAndMaterialTicket()) {
            $dataArray['legacyTimeAndMaterialTicket'] = $data->getLegacyTimeAndMaterialTicket();
        }
        if ($data->isInitialized('mail2TicketId') && null !== $data->getMail2TicketId()) {
            $dataArray['mail2TicketId'] = $data->getMail2TicketId();
        }
        if ($data->isInitialized('mobilePhoneNumber') && null !== $data->getMobilePhoneNumber()) {
            $dataArray['mobilePhoneNumber'] = $data->getMobilePhoneNumber();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('partyId') && null !== $data->getPartyId()) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('performanceRecordedStatus') && null !== $data->getPerformanceRecordedStatus()) {
            $dataArray['performanceRecordedStatus'] = $data->getPerformanceRecordedStatus();
        }
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('publicPageExpirationDate') && null !== $data->getPublicPageExpirationDate()) {
            $dataArray['publicPageExpirationDate'] = $data->getPublicPageExpirationDate();
        }
        if ($data->isInitialized('publicPageUuid') && null !== $data->getPublicPageUuid()) {
            $dataArray['publicPageUuid'] = $data->getPublicPageUuid();
        }
        if ($data->isInitialized('resolvedYourIssue') && null !== $data->getResolvedYourIssue()) {
            $dataArray['resolvedYourIssue'] = $data->getResolvedYourIssue();
        }
        if ($data->isInitialized('responsibleUserId') && null !== $data->getResponsibleUserId()) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('room') && null !== $data->getRoom()) {
            $dataArray['room'] = $data->getRoom();
        }
        if ($data->isInitialized('salesOrderId') && null !== $data->getSalesOrderId()) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
        }
        if ($data->isInitialized('solutionDueDate') && null !== $data->getSolutionDueDate()) {
            $dataArray['solutionDueDate'] = $data->getSolutionDueDate();
        }
        if ($data->isInitialized('subject') && null !== $data->getSubject()) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('ticketCategoryId') && null !== $data->getTicketCategoryId()) {
            $dataArray['ticketCategoryId'] = $data->getTicketCategoryId();
        }
        if ($data->isInitialized('ticketChannelId') && null !== $data->getTicketChannelId()) {
            $dataArray['ticketChannelId'] = $data->getTicketChannelId();
        }
        if ($data->isInitialized('ticketNumber') && null !== $data->getTicketNumber()) {
            $dataArray['ticketNumber'] = $data->getTicketNumber();
        }
        if ($data->isInitialized('ticketPriorityId') && null !== $data->getTicketPriorityId()) {
            $dataArray['ticketPriorityId'] = $data->getTicketPriorityId();
        }
        if ($data->isInitialized('ticketRating') && null !== $data->getTicketRating()) {
            $dataArray['ticketRating'] = $data->getTicketRating();
        }
        if ($data->isInitialized('ticketRatingComment') && null !== $data->getTicketRatingComment()) {
            $dataArray['ticketRatingComment'] = $data->getTicketRatingComment();
        }
        if ($data->isInitialized('ticketRatingDate') && null !== $data->getTicketRatingDate()) {
            $dataArray['ticketRatingDate'] = $data->getTicketRatingDate();
        }
        if ($data->isInitialized('ticketServiceLevelAgreementId') && null !== $data->getTicketServiceLevelAgreementId()) {
            $dataArray['ticketServiceLevelAgreementId'] = $data->getTicketServiceLevelAgreementId();
        }
        if ($data->isInitialized('ticketStatusId') && null !== $data->getTicketStatusId()) {
            $dataArray['ticketStatusId'] = $data->getTicketStatusId();
        }
        if ($data->isInitialized('ticketTypeId') && null !== $data->getTicketTypeId()) {
            $dataArray['ticketTypeId'] = $data->getTicketTypeId();
        }
        if ($data->isInitialized('watchers') && null !== $data->getWatchers()) {
            $values_3 = [];
            foreach ($data->getWatchers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['watchers'] = $values_3;
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
        return [\Webhubworks\WeclappApiCore\Model\Ticket::class => false];
    }
}