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
class AccountingTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\AccountingTransaction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\AccountingTransaction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\AccountingTransaction();
        if (\array_key_exists('draft', $data) && \is_int($data['draft'])) {
            $data['draft'] = (bool) $data['draft'];
        }
        if (\array_key_exists('reverseTransaction', $data) && \is_int($data['reverseTransaction'])) {
            $data['reverseTransaction'] = (bool) $data['reverseTransaction'];
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
        if (\array_key_exists('accountingImportDate', $data)) {
            $object->setAccountingImportDate($data['accountingImportDate']);
            unset($data['accountingImportDate']);
        }
        if (\array_key_exists('conversionRate', $data)) {
            $object->setConversionRate($data['conversionRate']);
            unset($data['conversionRate']);
        }
        if (\array_key_exists('conversionRateDate', $data)) {
            $object->setConversionRateDate($data['conversionRateDate']);
            unset($data['conversionRateDate']);
        }
        if (\array_key_exists('currencyId', $data)) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        if (\array_key_exists('currencyName', $data)) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
            unset($data['draft']);
        }
        if (\array_key_exists('externalRecordNumber', $data)) {
            $object->setExternalRecordNumber($data['externalRecordNumber']);
            unset($data['externalRecordNumber']);
        }
        if (\array_key_exists('internalRecordNumber', $data)) {
            $object->setInternalRecordNumber($data['internalRecordNumber']);
            unset($data['internalRecordNumber']);
        }
        if (\array_key_exists('reverseTransaction', $data)) {
            $object->setReverseTransaction($data['reverseTransaction']);
            unset($data['reverseTransaction']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('transactionDate', $data)) {
            $object->setTransactionDate($data['transactionDate']);
            unset($data['transactionDate']);
        }
        if (\array_key_exists('transactionDetails', $data)) {
            $values = [];
            foreach ($data['transactionDetails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\AccountingTransactionDetail::class, 'json', $context);
            }
            $object->setTransactionDetails($values);
            unset($data['transactionDetails']);
        }
        if (\array_key_exists('transactionEstablishDate', $data)) {
            $object->setTransactionEstablishDate($data['transactionEstablishDate']);
            unset($data['transactionEstablishDate']);
        }
        if (\array_key_exists('transactionNumber', $data)) {
            $object->setTransactionNumber($data['transactionNumber']);
            unset($data['transactionNumber']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if ($data->isInitialized('accountingImportDate') && null !== $data->getAccountingImportDate()) {
            $dataArray['accountingImportDate'] = $data->getAccountingImportDate();
        }
        if ($data->isInitialized('conversionRate') && null !== $data->getConversionRate()) {
            $dataArray['conversionRate'] = $data->getConversionRate();
        }
        if ($data->isInitialized('conversionRateDate') && null !== $data->getConversionRateDate()) {
            $dataArray['conversionRateDate'] = $data->getConversionRateDate();
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && null !== $data->getCurrencyName()) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('draft') && null !== $data->getDraft()) {
            $dataArray['draft'] = $data->getDraft();
        }
        if ($data->isInitialized('externalRecordNumber') && null !== $data->getExternalRecordNumber()) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('internalRecordNumber') && null !== $data->getInternalRecordNumber()) {
            $dataArray['internalRecordNumber'] = $data->getInternalRecordNumber();
        }
        if ($data->isInitialized('reverseTransaction') && null !== $data->getReverseTransaction()) {
            $dataArray['reverseTransaction'] = $data->getReverseTransaction();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('transactionDate') && null !== $data->getTransactionDate()) {
            $dataArray['transactionDate'] = $data->getTransactionDate();
        }
        if ($data->isInitialized('transactionDetails') && null !== $data->getTransactionDetails()) {
            $values = [];
            foreach ($data->getTransactionDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['transactionDetails'] = $values;
        }
        if ($data->isInitialized('transactionEstablishDate') && null !== $data->getTransactionEstablishDate()) {
            $dataArray['transactionEstablishDate'] = $data->getTransactionEstablishDate();
        }
        if ($data->isInitialized('transactionNumber') && null !== $data->getTransactionNumber()) {
            $dataArray['transactionNumber'] = $data->getTransactionNumber();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
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
        return [\Webhubworks\WeclappApiCore\Model\AccountingTransaction::class => false];
    }
}