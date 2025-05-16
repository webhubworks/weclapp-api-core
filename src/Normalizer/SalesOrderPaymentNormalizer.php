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

class SalesOrderPaymentNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\SalesOrderPayment;
        if (\array_key_exists('conditionMet', $data) && \is_int($data['conditionMet'])) {
            $data['conditionMet'] = (bool) $data['conditionMet'];
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
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('condition', $data)) {
            $object->setCondition($data['condition']);
            unset($data['condition']);
        }
        if (\array_key_exists('conditionMet', $data)) {
            $object->setConditionMet($data['conditionMet']);
            unset($data['conditionMet']);
        }
        if (\array_key_exists('dueDate', $data)) {
            $object->setDueDate($data['dueDate']);
            unset($data['dueDate']);
        }
        if (\array_key_exists('positionNumber', $data)) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        if (\array_key_exists('salesInvoiceId', $data)) {
            $object->setSalesInvoiceId($data['salesInvoiceId']);
            unset($data['salesInvoiceId']);
        }
        if (\array_key_exists('salesInvoices', $data)) {
            $values = [];
            foreach ($data['salesInvoices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setSalesInvoices($values);
            unset($data['salesInvoices']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('amount') && $data->getAmount() !== null) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('condition') && $data->getCondition() !== null) {
            $dataArray['condition'] = $data->getCondition();
        }
        if ($data->isInitialized('conditionMet') && $data->getConditionMet() !== null) {
            $dataArray['conditionMet'] = $data->getConditionMet();
        }
        if ($data->isInitialized('dueDate') && $data->getDueDate() !== null) {
            $dataArray['dueDate'] = $data->getDueDate();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('salesInvoiceId') && $data->getSalesInvoiceId() !== null) {
            $dataArray['salesInvoiceId'] = $data->getSalesInvoiceId();
        }
        if ($data->isInitialized('salesInvoices') && $data->getSalesInvoices() !== null) {
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
