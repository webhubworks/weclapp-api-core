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
class PaymentApplicationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PaymentApplication::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PaymentApplication::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PaymentApplication();
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
        if (\array_key_exists('amountApplied', $data)) {
            $object->setAmountApplied($data['amountApplied']);
            unset($data['amountApplied']);
        }
        if (\array_key_exists('amountAppliedOriginCurrency', $data)) {
            $object->setAmountAppliedOriginCurrency($data['amountAppliedOriginCurrency']);
            unset($data['amountAppliedOriginCurrency']);
        }
        if (\array_key_exists('amountCostsOfMonetaryTraffic', $data)) {
            $object->setAmountCostsOfMonetaryTraffic($data['amountCostsOfMonetaryTraffic']);
            unset($data['amountCostsOfMonetaryTraffic']);
        }
        if (\array_key_exists('amountDiscountApplied', $data)) {
            $object->setAmountDiscountApplied($data['amountDiscountApplied']);
            unset($data['amountDiscountApplied']);
        }
        if (\array_key_exists('createdById', $data)) {
            $object->setCreatedById($data['createdById']);
            unset($data['createdById']);
        }
        if (\array_key_exists('moneyTransactionId', $data)) {
            $object->setMoneyTransactionId($data['moneyTransactionId']);
            unset($data['moneyTransactionId']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('amountApplied') && null !== $data->getAmountApplied()) {
            $dataArray['amountApplied'] = $data->getAmountApplied();
        }
        if ($data->isInitialized('amountAppliedOriginCurrency') && null !== $data->getAmountAppliedOriginCurrency()) {
            $dataArray['amountAppliedOriginCurrency'] = $data->getAmountAppliedOriginCurrency();
        }
        if ($data->isInitialized('amountCostsOfMonetaryTraffic') && null !== $data->getAmountCostsOfMonetaryTraffic()) {
            $dataArray['amountCostsOfMonetaryTraffic'] = $data->getAmountCostsOfMonetaryTraffic();
        }
        if ($data->isInitialized('amountDiscountApplied') && null !== $data->getAmountDiscountApplied()) {
            $dataArray['amountDiscountApplied'] = $data->getAmountDiscountApplied();
        }
        if ($data->isInitialized('createdById') && null !== $data->getCreatedById()) {
            $dataArray['createdById'] = $data->getCreatedById();
        }
        if ($data->isInitialized('moneyTransactionId') && null !== $data->getMoneyTransactionId()) {
            $dataArray['moneyTransactionId'] = $data->getMoneyTransactionId();
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
        return [\Webhubworks\WeclappApiCore\Model\PaymentApplication::class => false];
    }
}