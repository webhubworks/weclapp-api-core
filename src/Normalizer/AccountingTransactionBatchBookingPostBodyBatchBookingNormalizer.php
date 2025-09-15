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
class AccountingTransactionBatchBookingPostBodyBatchBookingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBooking::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBooking::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBooking();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('batchBookingRecords', $data) && $data['batchBookingRecords'] !== null) {
            $values = [];
            foreach ($data['batchBookingRecords'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\BatchBookingRecord::class, 'json', $context);
            }
            $object->setBatchBookingRecords($values);
            unset($data['batchBookingRecords']);
        }
        elseif (\array_key_exists('batchBookingRecords', $data) && $data['batchBookingRecords'] === null) {
            $object->setBatchBookingRecords(null);
        }
        if (\array_key_exists('bookingText', $data) && $data['bookingText'] !== null) {
            $object->setBookingText($data['bookingText']);
            unset($data['bookingText']);
        }
        elseif (\array_key_exists('bookingText', $data) && $data['bookingText'] === null) {
            $object->setBookingText(null);
        }
        if (\array_key_exists('costCenterId', $data) && $data['costCenterId'] !== null) {
            $object->setCostCenterId($data['costCenterId']);
            unset($data['costCenterId']);
        }
        elseif (\array_key_exists('costCenterId', $data) && $data['costCenterId'] === null) {
            $object->setCostCenterId(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('externalRecordNumber', $data) && $data['externalRecordNumber'] !== null) {
            $object->setExternalRecordNumber($data['externalRecordNumber']);
            unset($data['externalRecordNumber']);
        }
        elseif (\array_key_exists('externalRecordNumber', $data) && $data['externalRecordNumber'] === null) {
            $object->setExternalRecordNumber(null);
        }
        if (\array_key_exists('transactionDate', $data) && $data['transactionDate'] !== null) {
            $object->setTransactionDate($data['transactionDate']);
            unset($data['transactionDate']);
        }
        elseif (\array_key_exists('transactionDate', $data) && $data['transactionDate'] === null) {
            $object->setTransactionDate(null);
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
        if ($data->isInitialized('batchBookingRecords') && null !== $data->getBatchBookingRecords()) {
            $values = [];
            foreach ($data->getBatchBookingRecords() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['batchBookingRecords'] = $values;
        }
        if ($data->isInitialized('bookingText') && null !== $data->getBookingText()) {
            $dataArray['bookingText'] = $data->getBookingText();
        }
        if ($data->isInitialized('costCenterId') && null !== $data->getCostCenterId()) {
            $dataArray['costCenterId'] = $data->getCostCenterId();
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('externalRecordNumber') && null !== $data->getExternalRecordNumber()) {
            $dataArray['externalRecordNumber'] = $data->getExternalRecordNumber();
        }
        if ($data->isInitialized('transactionDate') && null !== $data->getTransactionDate()) {
            $dataArray['transactionDate'] = $data->getTransactionDate();
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
        return [\Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBooking::class => false];
    }
}