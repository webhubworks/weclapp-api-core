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
class RecordEmailingRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\RecordEmailingRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\RecordEmailingRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\RecordEmailingRule();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('attachPurchaseOrderRequestCsvFile', $data) && \is_int($data['attachPurchaseOrderRequestCsvFile'])) {
            $data['attachPurchaseOrderRequestCsvFile'] = (bool) $data['attachPurchaseOrderRequestCsvFile'];
        }
        if (\array_key_exists('attachRecordDocument', $data) && \is_int($data['attachRecordDocument'])) {
            $data['attachRecordDocument'] = (bool) $data['attachRecordDocument'];
        }
        if (\array_key_exists('attachReturnLabel', $data) && \is_int($data['attachReturnLabel'])) {
            $data['attachReturnLabel'] = (bool) $data['attachReturnLabel'];
        }
        if (\array_key_exists('attachShippingLabel', $data) && \is_int($data['attachShippingLabel'])) {
            $data['attachShippingLabel'] = (bool) $data['attachShippingLabel'];
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
        if (\array_key_exists('attachPurchaseOrderRequestCsvFile', $data) && $data['attachPurchaseOrderRequestCsvFile'] !== null) {
            $object->setAttachPurchaseOrderRequestCsvFile($data['attachPurchaseOrderRequestCsvFile']);
            unset($data['attachPurchaseOrderRequestCsvFile']);
        }
        elseif (\array_key_exists('attachPurchaseOrderRequestCsvFile', $data) && $data['attachPurchaseOrderRequestCsvFile'] === null) {
            $object->setAttachPurchaseOrderRequestCsvFile(null);
        }
        if (\array_key_exists('attachRecordDocument', $data) && $data['attachRecordDocument'] !== null) {
            $object->setAttachRecordDocument($data['attachRecordDocument']);
            unset($data['attachRecordDocument']);
        }
        elseif (\array_key_exists('attachRecordDocument', $data) && $data['attachRecordDocument'] === null) {
            $object->setAttachRecordDocument(null);
        }
        if (\array_key_exists('attachReturnLabel', $data) && $data['attachReturnLabel'] !== null) {
            $object->setAttachReturnLabel($data['attachReturnLabel']);
            unset($data['attachReturnLabel']);
        }
        elseif (\array_key_exists('attachReturnLabel', $data) && $data['attachReturnLabel'] === null) {
            $object->setAttachReturnLabel(null);
        }
        if (\array_key_exists('attachShippingLabel', $data) && $data['attachShippingLabel'] !== null) {
            $object->setAttachShippingLabel($data['attachShippingLabel']);
            unset($data['attachShippingLabel']);
        }
        elseif (\array_key_exists('attachShippingLabel', $data) && $data['attachShippingLabel'] === null) {
            $object->setAttachShippingLabel(null);
        }
        if (\array_key_exists('bccRecipients', $data) && $data['bccRecipients'] !== null) {
            $object->setBccRecipients($data['bccRecipients']);
            unset($data['bccRecipients']);
        }
        elseif (\array_key_exists('bccRecipients', $data) && $data['bccRecipients'] === null) {
            $object->setBccRecipients(null);
        }
        if (\array_key_exists('ccRecipients', $data) && $data['ccRecipients'] !== null) {
            $object->setCcRecipients($data['ccRecipients']);
            unset($data['ccRecipients']);
        }
        elseif (\array_key_exists('ccRecipients', $data) && $data['ccRecipients'] === null) {
            $object->setCcRecipients(null);
        }
        if (\array_key_exists('event', $data) && $data['event'] !== null) {
            $object->setEvent($data['event']);
            unset($data['event']);
        }
        elseif (\array_key_exists('event', $data) && $data['event'] === null) {
            $object->setEvent(null);
        }
        if (\array_key_exists('mailAccountId', $data) && $data['mailAccountId'] !== null) {
            $object->setMailAccountId($data['mailAccountId']);
            unset($data['mailAccountId']);
        }
        elseif (\array_key_exists('mailAccountId', $data) && $data['mailAccountId'] === null) {
            $object->setMailAccountId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('otherRecipients', $data) && $data['otherRecipients'] !== null) {
            $object->setOtherRecipients($data['otherRecipients']);
            unset($data['otherRecipients']);
        }
        elseif (\array_key_exists('otherRecipients', $data) && $data['otherRecipients'] === null) {
            $object->setOtherRecipients(null);
        }
        if (\array_key_exists('paymentMethodTypes', $data) && $data['paymentMethodTypes'] !== null) {
            $values = [];
            foreach ($data['paymentMethodTypes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPaymentMethodTypes($values);
            unset($data['paymentMethodTypes']);
        }
        elseif (\array_key_exists('paymentMethodTypes', $data) && $data['paymentMethodTypes'] === null) {
            $object->setPaymentMethodTypes(null);
        }
        if (\array_key_exists('recipientType', $data) && $data['recipientType'] !== null) {
            $object->setRecipientType($data['recipientType']);
            unset($data['recipientType']);
        }
        elseif (\array_key_exists('recipientType', $data) && $data['recipientType'] === null) {
            $object->setRecipientType(null);
        }
        if (\array_key_exists('salesChannels', $data) && $data['salesChannels'] !== null) {
            $values_1 = [];
            foreach ($data['salesChannels'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSalesChannels($values_1);
            unset($data['salesChannels']);
        }
        elseif (\array_key_exists('salesChannels', $data) && $data['salesChannels'] === null) {
            $object->setSalesChannels(null);
        }
        if (\array_key_exists('salesInvoiceOrigin', $data) && $data['salesInvoiceOrigin'] !== null) {
            $object->setSalesInvoiceOrigin($data['salesInvoiceOrigin']);
            unset($data['salesInvoiceOrigin']);
        }
        elseif (\array_key_exists('salesInvoiceOrigin', $data) && $data['salesInvoiceOrigin'] === null) {
            $object->setSalesInvoiceOrigin(null);
        }
        if (\array_key_exists('salesInvoiceTypes', $data) && $data['salesInvoiceTypes'] !== null) {
            $values_2 = [];
            foreach ($data['salesInvoiceTypes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSalesInvoiceTypes($values_2);
            unset($data['salesInvoiceTypes']);
        }
        elseif (\array_key_exists('salesInvoiceTypes', $data) && $data['salesInvoiceTypes'] === null) {
            $object->setSalesInvoiceTypes(null);
        }
        if (\array_key_exists('shipmentOutTypes', $data) && $data['shipmentOutTypes'] !== null) {
            $values_3 = [];
            foreach ($data['shipmentOutTypes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setShipmentOutTypes($values_3);
            unset($data['shipmentOutTypes']);
        }
        elseif (\array_key_exists('shipmentOutTypes', $data) && $data['shipmentOutTypes'] === null) {
            $object->setShipmentOutTypes(null);
        }
        if (\array_key_exists('templateId', $data) && $data['templateId'] !== null) {
            $object->setTemplateId($data['templateId']);
            unset($data['templateId']);
        }
        elseif (\array_key_exists('templateId', $data) && $data['templateId'] === null) {
            $object->setTemplateId(null);
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
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('attachPurchaseOrderRequestCsvFile') && null !== $data->getAttachPurchaseOrderRequestCsvFile()) {
            $dataArray['attachPurchaseOrderRequestCsvFile'] = $data->getAttachPurchaseOrderRequestCsvFile();
        }
        if ($data->isInitialized('attachRecordDocument') && null !== $data->getAttachRecordDocument()) {
            $dataArray['attachRecordDocument'] = $data->getAttachRecordDocument();
        }
        if ($data->isInitialized('attachReturnLabel') && null !== $data->getAttachReturnLabel()) {
            $dataArray['attachReturnLabel'] = $data->getAttachReturnLabel();
        }
        if ($data->isInitialized('attachShippingLabel') && null !== $data->getAttachShippingLabel()) {
            $dataArray['attachShippingLabel'] = $data->getAttachShippingLabel();
        }
        if ($data->isInitialized('bccRecipients') && null !== $data->getBccRecipients()) {
            $dataArray['bccRecipients'] = $data->getBccRecipients();
        }
        if ($data->isInitialized('ccRecipients') && null !== $data->getCcRecipients()) {
            $dataArray['ccRecipients'] = $data->getCcRecipients();
        }
        if ($data->isInitialized('event') && null !== $data->getEvent()) {
            $dataArray['event'] = $data->getEvent();
        }
        if ($data->isInitialized('mailAccountId') && null !== $data->getMailAccountId()) {
            $dataArray['mailAccountId'] = $data->getMailAccountId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('otherRecipients') && null !== $data->getOtherRecipients()) {
            $dataArray['otherRecipients'] = $data->getOtherRecipients();
        }
        if ($data->isInitialized('paymentMethodTypes') && null !== $data->getPaymentMethodTypes()) {
            $values = [];
            foreach ($data->getPaymentMethodTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['paymentMethodTypes'] = $values;
        }
        if ($data->isInitialized('recipientType') && null !== $data->getRecipientType()) {
            $dataArray['recipientType'] = $data->getRecipientType();
        }
        if ($data->isInitialized('salesChannels') && null !== $data->getSalesChannels()) {
            $values_1 = [];
            foreach ($data->getSalesChannels() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['salesChannels'] = $values_1;
        }
        if ($data->isInitialized('salesInvoiceOrigin') && null !== $data->getSalesInvoiceOrigin()) {
            $dataArray['salesInvoiceOrigin'] = $data->getSalesInvoiceOrigin();
        }
        if ($data->isInitialized('salesInvoiceTypes') && null !== $data->getSalesInvoiceTypes()) {
            $values_2 = [];
            foreach ($data->getSalesInvoiceTypes() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['salesInvoiceTypes'] = $values_2;
        }
        if ($data->isInitialized('shipmentOutTypes') && null !== $data->getShipmentOutTypes()) {
            $values_3 = [];
            foreach ($data->getShipmentOutTypes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['shipmentOutTypes'] = $values_3;
        }
        if ($data->isInitialized('templateId') && null !== $data->getTemplateId()) {
            $dataArray['templateId'] = $data->getTemplateId();
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
        return [\Webhubworks\WeclappApiCore\Model\RecordEmailingRule::class => false];
    }
}