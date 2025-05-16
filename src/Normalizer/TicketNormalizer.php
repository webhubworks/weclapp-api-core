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

class TicketNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Ticket;
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
        if ($data->isInitialized('assignedPoolingGroupId') && $data->getAssignedPoolingGroupId() !== null) {
            $dataArray['assignedPoolingGroupId'] = $data->getAssignedPoolingGroupId();
        }
        if ($data->isInitialized('assignedUserId') && $data->getAssignedUserId() !== null) {
            $dataArray['assignedUserId'] = $data->getAssignedUserId();
        }
        if ($data->isInitialized('billable') && $data->getBillable() !== null) {
            $dataArray['billable'] = $data->getBillable();
        }
        if ($data->isInitialized('billableStatus') && $data->getBillableStatus() !== null) {
            $dataArray['billableStatus'] = $data->getBillableStatus();
        }
        if ($data->isInitialized('ccEmailAddresses') && $data->getCcEmailAddresses() !== null) {
            $dataArray['ccEmailAddresses'] = $data->getCcEmailAddresses();
        }
        if ($data->isInitialized('contactId') && $data->getContactId() !== null) {
            $dataArray['contactId'] = $data->getContactId();
        }
        if ($data->isInitialized('contractId') && $data->getContractId() !== null) {
            $dataArray['contractId'] = $data->getContractId();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('disableEmailTemplates') && $data->getDisableEmailTemplates() !== null) {
            $dataArray['disableEmailTemplates'] = $data->getDisableEmailTemplates();
        }
        if ($data->isInitialized('email') && $data->getEmail() !== null) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('entityReferences') && $data->getEntityReferences() !== null) {
            $values_1 = [];
            foreach ($data->getEntityReferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['entityReferences'] = $values_1;
        }
        if ($data->isInitialized('finishedDate') && $data->getFinishedDate() !== null) {
            $dataArray['finishedDate'] = $data->getFinishedDate();
        }
        if ($data->isInitialized('firstName') && $data->getFirstName() !== null) {
            $dataArray['firstName'] = $data->getFirstName();
        }
        if ($data->isInitialized('followUpDate') && $data->getFollowUpDate() !== null) {
            $dataArray['followUpDate'] = $data->getFollowUpDate();
        }
        if ($data->isInitialized('invoicingStatus') && $data->getInvoicingStatus() !== null) {
            $dataArray['invoicingStatus'] = $data->getInvoicingStatus();
        }
        if ($data->isInitialized('isTemplate') && $data->getIsTemplate() !== null) {
            $dataArray['isTemplate'] = $data->getIsTemplate();
        }
        if ($data->isInitialized('language') && $data->getLanguage() !== null) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('lastName') && $data->getLastName() !== null) {
            $dataArray['lastName'] = $data->getLastName();
        }
        if ($data->isInitialized('legacyArticleId') && $data->getLegacyArticleId() !== null) {
            $dataArray['legacyArticleId'] = $data->getLegacyArticleId();
        }
        if ($data->isInitialized('legacyTimeAndMaterialTicket') && $data->getLegacyTimeAndMaterialTicket() !== null) {
            $dataArray['legacyTimeAndMaterialTicket'] = $data->getLegacyTimeAndMaterialTicket();
        }
        if ($data->isInitialized('mail2TicketId') && $data->getMail2TicketId() !== null) {
            $dataArray['mail2TicketId'] = $data->getMail2TicketId();
        }
        if ($data->isInitialized('mobilePhoneNumber') && $data->getMobilePhoneNumber() !== null) {
            $dataArray['mobilePhoneNumber'] = $data->getMobilePhoneNumber();
        }
        if ($data->isInitialized('note') && $data->getNote() !== null) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('partyId') && $data->getPartyId() !== null) {
            $dataArray['partyId'] = $data->getPartyId();
        }
        if ($data->isInitialized('performanceRecordedStatus') && $data->getPerformanceRecordedStatus() !== null) {
            $dataArray['performanceRecordedStatus'] = $data->getPerformanceRecordedStatus();
        }
        if ($data->isInitialized('phoneNumber') && $data->getPhoneNumber() !== null) {
            $dataArray['phoneNumber'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('publicPageExpirationDate') && $data->getPublicPageExpirationDate() !== null) {
            $dataArray['publicPageExpirationDate'] = $data->getPublicPageExpirationDate();
        }
        if ($data->isInitialized('publicPageUuid') && $data->getPublicPageUuid() !== null) {
            $dataArray['publicPageUuid'] = $data->getPublicPageUuid();
        }
        if ($data->isInitialized('resolvedYourIssue') && $data->getResolvedYourIssue() !== null) {
            $dataArray['resolvedYourIssue'] = $data->getResolvedYourIssue();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('room') && $data->getRoom() !== null) {
            $dataArray['room'] = $data->getRoom();
        }
        if ($data->isInitialized('salesOrderId') && $data->getSalesOrderId() !== null) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
        }
        if ($data->isInitialized('solutionDueDate') && $data->getSolutionDueDate() !== null) {
            $dataArray['solutionDueDate'] = $data->getSolutionDueDate();
        }
        if ($data->isInitialized('subject') && $data->getSubject() !== null) {
            $dataArray['subject'] = $data->getSubject();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_2 = [];
            foreach ($data->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tags'] = $values_2;
        }
        if ($data->isInitialized('ticketCategoryId') && $data->getTicketCategoryId() !== null) {
            $dataArray['ticketCategoryId'] = $data->getTicketCategoryId();
        }
        if ($data->isInitialized('ticketChannelId') && $data->getTicketChannelId() !== null) {
            $dataArray['ticketChannelId'] = $data->getTicketChannelId();
        }
        if ($data->isInitialized('ticketNumber') && $data->getTicketNumber() !== null) {
            $dataArray['ticketNumber'] = $data->getTicketNumber();
        }
        if ($data->isInitialized('ticketPriorityId') && $data->getTicketPriorityId() !== null) {
            $dataArray['ticketPriorityId'] = $data->getTicketPriorityId();
        }
        if ($data->isInitialized('ticketRating') && $data->getTicketRating() !== null) {
            $dataArray['ticketRating'] = $data->getTicketRating();
        }
        if ($data->isInitialized('ticketRatingComment') && $data->getTicketRatingComment() !== null) {
            $dataArray['ticketRatingComment'] = $data->getTicketRatingComment();
        }
        if ($data->isInitialized('ticketRatingDate') && $data->getTicketRatingDate() !== null) {
            $dataArray['ticketRatingDate'] = $data->getTicketRatingDate();
        }
        if ($data->isInitialized('ticketServiceLevelAgreementId') && $data->getTicketServiceLevelAgreementId() !== null) {
            $dataArray['ticketServiceLevelAgreementId'] = $data->getTicketServiceLevelAgreementId();
        }
        if ($data->isInitialized('ticketStatusId') && $data->getTicketStatusId() !== null) {
            $dataArray['ticketStatusId'] = $data->getTicketStatusId();
        }
        if ($data->isInitialized('ticketTypeId') && $data->getTicketTypeId() !== null) {
            $dataArray['ticketTypeId'] = $data->getTicketTypeId();
        }
        if ($data->isInitialized('watchers') && $data->getWatchers() !== null) {
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
