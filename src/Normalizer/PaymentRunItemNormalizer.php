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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('amountDiscount', $data) && $data['amountDiscount'] !== null) {
            $object->setAmountDiscount($data['amountDiscount']);
            unset($data['amountDiscount']);
        } elseif (\array_key_exists('amountDiscount', $data) && $data['amountDiscount'] === null) {
            $object->setAmountDiscount(null);
        }
        if (\array_key_exists('amountPayment', $data) && $data['amountPayment'] !== null) {
            $object->setAmountPayment($data['amountPayment']);
            unset($data['amountPayment']);
        } elseif (\array_key_exists('amountPayment', $data) && $data['amountPayment'] === null) {
            $object->setAmountPayment(null);
        }
        if (\array_key_exists('bankAccountId', $data) && $data['bankAccountId'] !== null) {
            $object->setBankAccountId($data['bankAccountId']);
            unset($data['bankAccountId']);
        } elseif (\array_key_exists('bankAccountId', $data) && $data['bankAccountId'] === null) {
            $object->setBankAccountId(null);
        }
        if (\array_key_exists('cleared', $data) && $data['cleared'] !== null) {
            $object->setCleared($data['cleared']);
            unset($data['cleared']);
        } elseif (\array_key_exists('cleared', $data) && $data['cleared'] === null) {
            $object->setCleared(null);
        }
        if (\array_key_exists('conversionRate', $data) && $data['conversionRate'] !== null) {
            $object->setConversionRate($data['conversionRate']);
            unset($data['conversionRate']);
        } elseif (\array_key_exists('conversionRate', $data) && $data['conversionRate'] === null) {
            $object->setConversionRate(null);
        }
        if (\array_key_exists('conversionRateDate', $data) && $data['conversionRateDate'] !== null) {
            $object->setConversionRateDate($data['conversionRateDate']);
            unset($data['conversionRateDate']);
        } elseif (\array_key_exists('conversionRateDate', $data) && $data['conversionRateDate'] === null) {
            $object->setConversionRateDate(null);
        }
        if (\array_key_exists('moneyTransaction', $data) && $data['moneyTransaction'] !== null) {
            $object->setMoneyTransaction($this->denormalizer->denormalize($data['moneyTransaction'], \Webhubworks\WeclappApiCore\Model\MoneyTransaction::class, 'json', $context));
            unset($data['moneyTransaction']);
        } elseif (\array_key_exists('moneyTransaction', $data) && $data['moneyTransaction'] === null) {
            $object->setMoneyTransaction(null);
        }
        if (\array_key_exists('partyBankAccountId', $data) && $data['partyBankAccountId'] !== null) {
            $object->setPartyBankAccountId($data['partyBankAccountId']);
            unset($data['partyBankAccountId']);
        } elseif (\array_key_exists('partyBankAccountId', $data) && $data['partyBankAccountId'] === null) {
            $object->setPartyBankAccountId(null);
        }
        if (\array_key_exists('paymentRunId', $data) && $data['paymentRunId'] !== null) {
            $object->setPaymentRunId($data['paymentRunId']);
            unset($data['paymentRunId']);
        } elseif (\array_key_exists('paymentRunId', $data) && $data['paymentRunId'] === null) {
            $object->setPaymentRunId(null);
        }
        if (\array_key_exists('paymentRunPaymentType', $data) && $data['paymentRunPaymentType'] !== null) {
            $object->setPaymentRunPaymentType($data['paymentRunPaymentType']);
            unset($data['paymentRunPaymentType']);
        } elseif (\array_key_exists('paymentRunPaymentType', $data) && $data['paymentRunPaymentType'] === null) {
            $object->setPaymentRunPaymentType(null);
        }
        if (\array_key_exists('purchaseOpenItemId', $data) && $data['purchaseOpenItemId'] !== null) {
            $object->setPurchaseOpenItemId($data['purchaseOpenItemId']);
            unset($data['purchaseOpenItemId']);
        } elseif (\array_key_exists('purchaseOpenItemId', $data) && $data['purchaseOpenItemId'] === null) {
            $object->setPurchaseOpenItemId(null);
        }
        if (\array_key_exists('purpose', $data) && $data['purpose'] !== null) {
            $object->setPurpose($data['purpose']);
            unset($data['purpose']);
        } elseif (\array_key_exists('purpose', $data) && $data['purpose'] === null) {
            $object->setPurpose(null);
        }
        if (\array_key_exists('recordCurrency', $data) && $data['recordCurrency'] !== null) {
            $object->setRecordCurrency($this->denormalizer->denormalize($data['recordCurrency'], \Webhubworks\WeclappApiCore\Model\Currency::class, 'json', $context));
            unset($data['recordCurrency']);
        } elseif (\array_key_exists('recordCurrency', $data) && $data['recordCurrency'] === null) {
            $object->setRecordCurrency(null);
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
