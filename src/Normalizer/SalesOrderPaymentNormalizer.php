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
class SalesOrderPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrderPayment();
        if (\array_key_exists('conditionMet', $data) && \is_int($data['conditionMet'])) {
            $data['conditionMet'] = (bool) $data['conditionMet'];
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
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('condition', $data) && $data['condition'] !== null) {
            $object->setCondition($data['condition']);
            unset($data['condition']);
        }
        elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
            $object->setCondition(null);
        }
        if (\array_key_exists('conditionMet', $data) && $data['conditionMet'] !== null) {
            $object->setConditionMet($data['conditionMet']);
            unset($data['conditionMet']);
        }
        elseif (\array_key_exists('conditionMet', $data) && $data['conditionMet'] === null) {
            $object->setConditionMet(null);
        }
        if (\array_key_exists('dueDate', $data) && $data['dueDate'] !== null) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        }
        elseif (\array_key_exists('dueDate', $data) && $data['dueDate'] === null) {
            $object->setDueDate(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('salesInvoiceId', $data) && $data['salesInvoiceId'] !== null) {
            $object->setSalesInvoiceId($data['salesInvoiceId']);
            unset($data['salesInvoiceId']);
        }
        elseif (\array_key_exists('salesInvoiceId', $data) && $data['salesInvoiceId'] === null) {
            $object->setSalesInvoiceId(null);
        }
        if (\array_key_exists('salesInvoices', $data) && $data['salesInvoices'] !== null) {
            $values = [];
            foreach ($data['salesInvoices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSalesInvoices($values);
            unset($data['salesInvoices']);
        }
        elseif (\array_key_exists('salesInvoices', $data) && $data['salesInvoices'] === null) {
            $object->setSalesInvoices(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($data->isInitialized('amount') && null !== $data->getAmount()) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('condition') && null !== $data->getCondition()) {
            $dataArray['condition'] = $data->getCondition();
        }
        if ($data->isInitialized('conditionMet') && null !== $data->getConditionMet()) {
            $dataArray['conditionMet'] = $data->getConditionMet();
        }
        if ($data->isInitialized('dueDate') && null !== $data->getDueDate()) {
            $dataArray['dueDate'] = $data->getDueDate();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('salesInvoiceId') && null !== $data->getSalesInvoiceId()) {
            $dataArray['salesInvoiceId'] = $data->getSalesInvoiceId();
        }
        if ($data->isInitialized('salesInvoices') && null !== $data->getSalesInvoices()) {
            $values = [];
            foreach ($data->getSalesInvoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['salesInvoices'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class => false];
    }
}