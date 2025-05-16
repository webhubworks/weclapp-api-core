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

class PaymentRunItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PaymentRunItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PaymentRunItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentRunItem;
        if (\array_key_exists('cleared', $data) && \is_int($data['cleared'])) {
            $data['cleared'] = (bool) $data['cleared'];
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
        if (\array_key_exists('amountDiscount', $data)) {
            $object->setAmountDiscount($data['amountDiscount']);
            unset($data['amountDiscount']);
        }
        if (\array_key_exists('amountPayment', $data)) {
            $object->setAmountPayment($data['amountPayment']);
            unset($data['amountPayment']);
        }
        if (\array_key_exists('bankAccountId', $data)) {
            $object->setBankAccountId($data['bankAccountId']);
            unset($data['bankAccountId']);
        }
        if (\array_key_exists('cleared', $data)) {
            $object->setCleared($data['cleared']);
            unset($data['cleared']);
        }
        if (\array_key_exists('conversionRate', $data)) {
            $object->setConversionRate($data['conversionRate']);
            unset($data['conversionRate']);
        }
        if (\array_key_exists('conversionRateDate', $data)) {
            $object->setConversionRateDate($data['conversionRateDate']);
            unset($data['conversionRateDate']);
        }
        if (\array_key_exists('moneyTransaction', $data)) {
            $object->setMoneyTransaction($this->denormalizer->denormalize($data['moneyTransaction'], \Webhubworks\WeclappApiCore\Model\MoneyTransaction::class, 'json', $context));
            unset($data['moneyTransaction']);
        }
        if (\array_key_exists('partyBankAccountId', $data)) {
            $object->setPartyBankAccountId($data['partyBankAccountId']);
            unset($data['partyBankAccountId']);
        }
        if (\array_key_exists('paymentRunId', $data)) {
            $object->setPaymentRunId($data['paymentRunId']);
            unset($data['paymentRunId']);
        }
        if (\array_key_exists('paymentRunPaymentType', $data)) {
            $object->setPaymentRunPaymentType($data['paymentRunPaymentType']);
            unset($data['paymentRunPaymentType']);
        }
        if (\array_key_exists('purchaseOpenItemId', $data)) {
            $object->setPurchaseOpenItemId($data['purchaseOpenItemId']);
            unset($data['purchaseOpenItemId']);
        }
        if (\array_key_exists('purpose', $data)) {
            $object->setPurpose($data['purpose']);
            unset($data['purpose']);
        }
        if (\array_key_exists('recordCurrency', $data)) {
            $object->setRecordCurrency($this->denormalizer->denormalize($data['recordCurrency'], \Webhubworks\WeclappApiCore\Model\Currency::class, 'json', $context));
            unset($data['recordCurrency']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($data->isInitialized('amountDiscount') && $data->getAmountDiscount() !== null) {
            $dataArray['amountDiscount'] = $data->getAmountDiscount();
        }
        if ($data->isInitialized('amountPayment') && $data->getAmountPayment() !== null) {
            $dataArray['amountPayment'] = $data->getAmountPayment();
        }
        if ($data->isInitialized('bankAccountId') && $data->getBankAccountId() !== null) {
            $dataArray['bankAccountId'] = $data->getBankAccountId();
        }
        if ($data->isInitialized('cleared') && $data->getCleared() !== null) {
            $dataArray['cleared'] = $data->getCleared();
        }
        if ($data->isInitialized('conversionRate') && $data->getConversionRate() !== null) {
            $dataArray['conversionRate'] = $data->getConversionRate();
        }
        if ($data->isInitialized('conversionRateDate') && $data->getConversionRateDate() !== null) {
            $dataArray['conversionRateDate'] = $data->getConversionRateDate();
        }
        if ($data->isInitialized('moneyTransaction') && $data->getMoneyTransaction() !== null) {
            $dataArray['moneyTransaction'] = $this->normalizer->normalize($data->getMoneyTransaction(), 'json', $context);
        }
        if ($data->isInitialized('partyBankAccountId') && $data->getPartyBankAccountId() !== null) {
            $dataArray['partyBankAccountId'] = $data->getPartyBankAccountId();
        }
        if ($data->isInitialized('paymentRunId') && $data->getPaymentRunId() !== null) {
            $dataArray['paymentRunId'] = $data->getPaymentRunId();
        }
        if ($data->isInitialized('paymentRunPaymentType') && $data->getPaymentRunPaymentType() !== null) {
            $dataArray['paymentRunPaymentType'] = $data->getPaymentRunPaymentType();
        }
        if ($data->isInitialized('purchaseOpenItemId') && $data->getPurchaseOpenItemId() !== null) {
            $dataArray['purchaseOpenItemId'] = $data->getPurchaseOpenItemId();
        }
        if ($data->isInitialized('purpose') && $data->getPurpose() !== null) {
            $dataArray['purpose'] = $data->getPurpose();
        }
        if ($data->isInitialized('recordCurrency') && $data->getRecordCurrency() !== null) {
            $dataArray['recordCurrency'] = $this->normalizer->normalize($data->getRecordCurrency(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\PaymentRunItem::class => false];
    }
}
