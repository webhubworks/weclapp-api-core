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
        if (\array_key_exists('assignedPoolingGroupId', $data) && $data['assignedPoolingGroupId'] !== null) {
            $object->setAssignedPoolingGroupId($data['assignedPoolingGroupId']);
            unset($data['assignedPoolingGroupId']);
        }
        elseif (\array_key_exists('assignedPoolingGroupId', $data) && $data['assignedPoolingGroupId'] === null) {
            $object->setAssignedPoolingGroupId(null);
        }
        if (\array_key_exists('assignedUserId', $data) && $data['assignedUserId'] !== null) {
            $object->setAssignedUserId($data['assignedUserId']);
            unset($data['assignedUserId']);
        }
        elseif (\array_key_exists('assignedUserId', $data) && $data['assignedUserId'] === null) {
            $object->setAssignedUserId(null);
        }
        if (\array_key_exists('billable', $data) && $data['billable'] !== null) {
            $object->setBillable($data['billable']);
            unset($data['billable']);
        }
        elseif (\array_key_exists('billable', $data) && $data['billable'] === null) {
            $object->setBillable(null);
        }
        if (\array_key_exists('billableStatus', $data) && $data['billableStatus'] !== null) {
            $object->setBillableStatus($data['billableStatus']);
            unset($data['billableStatus']);
        }
        elseif (\array_key_exists('billableStatus', $data) && $data['billableStatus'] === null) {
            $object->setBillableStatus(null);
        }
        if (\array_key_exists('ccEmailAddresses', $data) && $data['ccEmailAddresses'] !== null) {
            $object->setCcEmailAddresses($data['ccEmailAddresses']);
            unset($data['ccEmailAddresses']);
        }
        elseif (\array_key_exists('ccEmailAddresses', $data) && $data['ccEmailAddresses'] === null) {
            $object->setCcEmailAddresses(null);
        }
        if (\array_key_exists('contactId', $data) && $data['contactId'] !== null) {
            $object->setContactId($data['contactId']);
            unset($data['contactId']);
        }
        elseif (\array_key_exists('contactId', $data) && $data['contactId'] === null) {
            $object->setContactId(null);
        }
        if (\array_key_exists('contractId', $data) && $data['contractId'] !== null) {
            $object->setContractId($data['contractId']);
            unset($data['contractId']);
        }
        elseif (\array_key_exists('contractId', $data) && $data['contractId'] === null) {
            $object->setContractId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('disableEmailTemplates', $data) && $data['disableEmailTemplates'] !== null) {
            $object->setDisableEmailTemplates($data['disableEmailTemplates']);
            unset($data['disableEmailTemplates']);
        }
        elseif (\array_key_exists('disableEmailTemplates', $data) && $data['disableEmailTemplates'] === null) {
            $object->setDisableEmailTemplates(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('entityReferences', $data) && $data['entityReferences'] !== null) {
            $values_1 = [];
            foreach ($data['entityReferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\EntityReference::class, 'json', $context);
            }
            $object->setEntityReferences($values_1);
            unset($data['entityReferences']);
        }
        elseif (\array_key_exists('entityReferences', $data) && $data['entityReferences'] === null) {
            $object->setEntityReferences(null);
        }
        if (\array_key_exists('finishedDate', $data) && $data['finishedDate'] !== null) {
            $object->setFinishedDate($data['finishedDate']);
            unset($data['finishedDate']);
        }
        elseif (\array_key_exists('finishedDate', $data) && $data['finishedDate'] === null) {
            $object->setFinishedDate(null);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('followUpDate', $data) && $data['followUpDate'] !== null) {
            $object->setFollowUpDate($data['followUpDate']);
            unset($data['followUpDate']);
        }
        elseif (\array_key_exists('followUpDate', $data) && $data['followUpDate'] === null) {
            $object->setFollowUpDate(null);
        }
        if (\array_key_exists('invoicingStatus', $data) && $data['invoicingStatus'] !== null) {
            $object->setInvoicingStatus($data['invoicingStatus']);
            unset($data['invoicingStatus']);
        }
        elseif (\array_key_exists('invoicingStatus', $data) && $data['invoicingStatus'] === null) {
            $object->setInvoicingStatus(null);
        }
        if (\array_key_exists('isTemplate', $data) && $data['isTemplate'] !== null) {
            $object->setIsTemplate($data['isTemplate']);
            unset($data['isTemplate']);
        }
        elseif (\array_key_exists('isTemplate', $data) && $data['isTemplate'] === null) {
            $object->setIsTemplate(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('legacyArticleId', $data) && $data['legacyArticleId'] !== null) {
            $object->setLegacyArticleId($data['legacyArticleId']);
            unset($data['legacyArticleId']);
        }
        elseif (\array_key_exists('legacyArticleId', $data) && $data['legacyArticleId'] === null) {
            $object->setLegacyArticleId(null);
        }
        if (\array_key_exists('legacyTimeAndMaterialTicket', $data) && $data['legacyTimeAndMaterialTicket'] !== null) {
            $object->setLegacyTimeAndMaterialTicket($data['legacyTimeAndMaterialTicket']);
            unset($data['legacyTimeAndMaterialTicket']);
        }
        elseif (\array_key_exists('legacyTimeAndMaterialTicket', $data) && $data['legacyTimeAndMaterialTicket'] === null) {
            $object->setLegacyTimeAndMaterialTicket(null);
        }
        if (\array_key_exists('mail2TicketId', $data) && $data['mail2TicketId'] !== null) {
            $object->setMail2TicketId($data['mail2TicketId']);
            unset($data['mail2TicketId']);
        }
        elseif (\array_key_exists('mail2TicketId', $data) && $data['mail2TicketId'] === null) {
            $object->setMail2TicketId(null);
        }
        if (\array_key_exists('mobilePhoneNumber', $data) && $data['mobilePhoneNumber'] !== null) {
            $object->setMobilePhoneNumber($data['mobilePhoneNumber']);
            unset($data['mobilePhoneNumber']);
        }
        elseif (\array_key_exists('mobilePhoneNumber', $data) && $data['mobilePhoneNumber'] === null) {
            $object->setMobilePhoneNumber(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('partyId', $data) && $data['partyId'] !== null) {
            $object->setPartyId($data['partyId']);
            unset($data['partyId']);
        }
        elseif (\array_key_exists('partyId', $data) && $data['partyId'] === null) {
            $object->setPartyId(null);
        }
        if (\array_key_exists('performanceRecordedStatus', $data) && $data['performanceRecordedStatus'] !== null) {
            $object->setPerformanceRecordedStatus($data['performanceRecordedStatus']);
            unset($data['performanceRecordedStatus']);
        }
        elseif (\array_key_exists('performanceRecordedStatus', $data) && $data['performanceRecordedStatus'] === null) {
            $object->setPerformanceRecordedStatus(null);
        }
        if (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] !== null) {
            $object->setPhoneNumber($data['phoneNumber']);
            unset($data['phoneNumber']);
        }
        elseif (\array_key_exists('phoneNumber', $data) && $data['phoneNumber'] === null) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('publicPageExpirationDate', $data) && $data['publicPageExpirationDate'] !== null) {
            $object->setPublicPageExpirationDate($data['publicPageExpirationDate']);
            unset($data['publicPageExpirationDate']);
        }
        elseif (\array_key_exists('publicPageExpirationDate', $data) && $data['publicPageExpirationDate'] === null) {
            $object->setPublicPageExpirationDate(null);
        }
        if (\array_key_exists('publicPageUuid', $data) && $data['publicPageUuid'] !== null) {
            $object->setPublicPageUuid($data['publicPageUuid']);
            unset($data['publicPageUuid']);
        }
        elseif (\array_key_exists('publicPageUuid', $data) && $data['publicPageUuid'] === null) {
            $object->setPublicPageUuid(null);
        }
        if (\array_key_exists('resolvedYourIssue', $data) && $data['resolvedYourIssue'] !== null) {
            $object->setResolvedYourIssue($data['resolvedYourIssue']);
            unset($data['resolvedYourIssue']);
        }
        elseif (\array_key_exists('resolvedYourIssue', $data) && $data['resolvedYourIssue'] === null) {
            $object->setResolvedYourIssue(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        }
        elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('room', $data) && $data['room'] !== null) {
            $object->setRoom($data['room']);
            unset($data['room']);
        }
        elseif (\array_key_exists('room', $data) && $data['room'] === null) {
            $object->setRoom(null);
        }
        if (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] !== null) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        }
        elseif (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] === null) {
            $object->setSalesOrderId(null);
        }
        if (\array_key_exists('solutionDueDate', $data) && $data['solutionDueDate'] !== null) {
            $object->setSolutionDueDate($data['solutionDueDate']);
            unset($data['solutionDueDate']);
        }
        elseif (\array_key_exists('solutionDueDate', $data) && $data['solutionDueDate'] === null) {
            $object->setSolutionDueDate(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
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
        if (\array_key_exists('ticketCategoryId', $data) && $data['ticketCategoryId'] !== null) {
            $object->setTicketCategoryId($data['ticketCategoryId']);
            unset($data['ticketCategoryId']);
        }
        elseif (\array_key_exists('ticketCategoryId', $data) && $data['ticketCategoryId'] === null) {
            $object->setTicketCategoryId(null);
        }
        if (\array_key_exists('ticketChannelId', $data) && $data['ticketChannelId'] !== null) {
            $object->setTicketChannelId($data['ticketChannelId']);
            unset($data['ticketChannelId']);
        }
        elseif (\array_key_exists('ticketChannelId', $data) && $data['ticketChannelId'] === null) {
            $object->setTicketChannelId(null);
        }
        if (\array_key_exists('ticketNumber', $data) && $data['ticketNumber'] !== null) {
            $object->setTicketNumber($data['ticketNumber']);
            unset($data['ticketNumber']);
        }
        elseif (\array_key_exists('ticketNumber', $data) && $data['ticketNumber'] === null) {
            $object->setTicketNumber(null);
        }
        if (\array_key_exists('ticketPriorityId', $data) && $data['ticketPriorityId'] !== null) {
            $object->setTicketPriorityId($data['ticketPriorityId']);
            unset($data['ticketPriorityId']);
        }
        elseif (\array_key_exists('ticketPriorityId', $data) && $data['ticketPriorityId'] === null) {
            $object->setTicketPriorityId(null);
        }
        if (\array_key_exists('ticketRating', $data) && $data['ticketRating'] !== null) {
            $object->setTicketRating($data['ticketRating']);
            unset($data['ticketRating']);
        }
        elseif (\array_key_exists('ticketRating', $data) && $data['ticketRating'] === null) {
            $object->setTicketRating(null);
        }
        if (\array_key_exists('ticketRatingComment', $data) && $data['ticketRatingComment'] !== null) {
            $object->setTicketRatingComment($data['ticketRatingComment']);
            unset($data['ticketRatingComment']);
        }
        elseif (\array_key_exists('ticketRatingComment', $data) && $data['ticketRatingComment'] === null) {
            $object->setTicketRatingComment(null);
        }
        if (\array_key_exists('ticketRatingDate', $data) && $data['ticketRatingDate'] !== null) {
            $object->setTicketRatingDate($data['ticketRatingDate']);
            unset($data['ticketRatingDate']);
        }
        elseif (\array_key_exists('ticketRatingDate', $data) && $data['ticketRatingDate'] === null) {
            $object->setTicketRatingDate(null);
        }
        if (\array_key_exists('ticketServiceLevelAgreementId', $data) && $data['ticketServiceLevelAgreementId'] !== null) {
            $object->setTicketServiceLevelAgreementId($data['ticketServiceLevelAgreementId']);
            unset($data['ticketServiceLevelAgreementId']);
        }
        elseif (\array_key_exists('ticketServiceLevelAgreementId', $data) && $data['ticketServiceLevelAgreementId'] === null) {
            $object->setTicketServiceLevelAgreementId(null);
        }
        if (\array_key_exists('ticketStatusId', $data) && $data['ticketStatusId'] !== null) {
            $object->setTicketStatusId($data['ticketStatusId']);
            unset($data['ticketStatusId']);
        }
        elseif (\array_key_exists('ticketStatusId', $data) && $data['ticketStatusId'] === null) {
            $object->setTicketStatusId(null);
        }
        if (\array_key_exists('ticketTypeId', $data) && $data['ticketTypeId'] !== null) {
            $object->setTicketTypeId($data['ticketTypeId']);
            unset($data['ticketTypeId']);
        }
        elseif (\array_key_exists('ticketTypeId', $data) && $data['ticketTypeId'] === null) {
            $object->setTicketTypeId(null);
        }
        if (\array_key_exists('watchers', $data) && $data['watchers'] !== null) {
            $values_3 = [];
            foreach ($data['watchers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setWatchers($values_3);
            unset($data['watchers']);
        }
        elseif (\array_key_exists('watchers', $data) && $data['watchers'] === null) {
            $object->setWatchers(null);
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