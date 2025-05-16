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

class RecordEmailingRuleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\RecordEmailingRule;
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
        if (\array_key_exists('attachPurchaseOrderRequestCsvFile', $data)) {
            $object->setAttachPurchaseOrderRequestCsvFile($data['attachPurchaseOrderRequestCsvFile']);
            unset($data['attachPurchaseOrderRequestCsvFile']);
        }
        if (\array_key_exists('attachRecordDocument', $data)) {
            $object->setAttachRecordDocument($data['attachRecordDocument']);
            unset($data['attachRecordDocument']);
        }
        if (\array_key_exists('attachReturnLabel', $data)) {
            $object->setAttachReturnLabel($data['attachReturnLabel']);
            unset($data['attachReturnLabel']);
        }
        if (\array_key_exists('attachShippingLabel', $data)) {
            $object->setAttachShippingLabel($data['attachShippingLabel']);
            unset($data['attachShippingLabel']);
        }
        if (\array_key_exists('bccRecipients', $data)) {
            $object->setBccRecipients($data['bccRecipients']);
            unset($data['bccRecipients']);
        }
        if (\array_key_exists('ccRecipients', $data)) {
            $object->setCcRecipients($data['ccRecipients']);
            unset($data['ccRecipients']);
        }
        if (\array_key_exists('event', $data)) {
            $object->setEvent($data['event']);
            unset($data['event']);
        }
        if (\array_key_exists('mailAccountId', $data)) {
            $object->setMailAccountId($data['mailAccountId']);
            unset($data['mailAccountId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('otherRecipients', $data)) {
            $object->setOtherRecipients($data['otherRecipients']);
            unset($data['otherRecipients']);
        }
        if (\array_key_exists('paymentMethodTypes', $data)) {
            $values = [];
            foreach ($data['paymentMethodTypes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setPaymentMethodTypes($values);
            unset($data['paymentMethodTypes']);
        }
        if (\array_key_exists('recipientType', $data)) {
            $object->setRecipientType($data['recipientType']);
            unset($data['recipientType']);
        }
        if (\array_key_exists('salesChannels', $data)) {
            $values_1 = [];
            foreach ($data['salesChannels'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSalesChannels($values_1);
            unset($data['salesChannels']);
        }
        if (\array_key_exists('salesInvoiceOrigin', $data)) {
            $object->setSalesInvoiceOrigin($data['salesInvoiceOrigin']);
            unset($data['salesInvoiceOrigin']);
        }
        if (\array_key_exists('salesInvoiceTypes', $data)) {
            $values_2 = [];
            foreach ($data['salesInvoiceTypes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSalesInvoiceTypes($values_2);
            unset($data['salesInvoiceTypes']);
        }
        if (\array_key_exists('shipmentOutTypes', $data)) {
            $values_3 = [];
            foreach ($data['shipmentOutTypes'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setShipmentOutTypes($values_3);
            unset($data['shipmentOutTypes']);
        }
        if (\array_key_exists('templateId', $data)) {
            $object->setTemplateId($data['templateId']);
            unset($data['templateId']);
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
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('attachPurchaseOrderRequestCsvFile') && $data->getAttachPurchaseOrderRequestCsvFile() !== null) {
            $dataArray['attachPurchaseOrderRequestCsvFile'] = $data->getAttachPurchaseOrderRequestCsvFile();
        }
        if ($data->isInitialized('attachRecordDocument') && $data->getAttachRecordDocument() !== null) {
            $dataArray['attachRecordDocument'] = $data->getAttachRecordDocument();
        }
        if ($data->isInitialized('attachReturnLabel') && $data->getAttachReturnLabel() !== null) {
            $dataArray['attachReturnLabel'] = $data->getAttachReturnLabel();
        }
        if ($data->isInitialized('attachShippingLabel') && $data->getAttachShippingLabel() !== null) {
            $dataArray['attachShippingLabel'] = $data->getAttachShippingLabel();
        }
        if ($data->isInitialized('bccRecipients') && $data->getBccRecipients() !== null) {
            $dataArray['bccRecipients'] = $data->getBccRecipients();
        }
        if ($data->isInitialized('ccRecipients') && $data->getCcRecipients() !== null) {
            $dataArray['ccRecipients'] = $data->getCcRecipients();
        }
        if ($data->isInitialized('event') && $data->getEvent() !== null) {
            $dataArray['event'] = $data->getEvent();
        }
        if ($data->isInitialized('mailAccountId') && $data->getMailAccountId() !== null) {
            $dataArray['mailAccountId'] = $data->getMailAccountId();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('otherRecipients') && $data->getOtherRecipients() !== null) {
            $dataArray['otherRecipients'] = $data->getOtherRecipients();
        }
        if ($data->isInitialized('paymentMethodTypes') && $data->getPaymentMethodTypes() !== null) {
            $values = [];
            foreach ($data->getPaymentMethodTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['paymentMethodTypes'] = $values;
        }
        if ($data->isInitialized('recipientType') && $data->getRecipientType() !== null) {
            $dataArray['recipientType'] = $data->getRecipientType();
        }
        if ($data->isInitialized('salesChannels') && $data->getSalesChannels() !== null) {
            $values_1 = [];
            foreach ($data->getSalesChannels() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['salesChannels'] = $values_1;
        }
        if ($data->isInitialized('salesInvoiceOrigin') && $data->getSalesInvoiceOrigin() !== null) {
            $dataArray['salesInvoiceOrigin'] = $data->getSalesInvoiceOrigin();
        }
        if ($data->isInitialized('salesInvoiceTypes') && $data->getSalesInvoiceTypes() !== null) {
            $values_2 = [];
            foreach ($data->getSalesInvoiceTypes() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['salesInvoiceTypes'] = $values_2;
        }
        if ($data->isInitialized('shipmentOutTypes') && $data->getShipmentOutTypes() !== null) {
            $values_3 = [];
            foreach ($data->getShipmentOutTypes() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['shipmentOutTypes'] = $values_3;
        }
        if ($data->isInitialized('templateId') && $data->getTemplateId() !== null) {
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
