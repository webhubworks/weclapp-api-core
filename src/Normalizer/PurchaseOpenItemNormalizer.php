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

class PurchaseOpenItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOpenItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOpenItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOpenItem;
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
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('amountDiscount', $data)) {
            $object->setAmountDiscount($data['amountDiscount']);
            unset($data['amountDiscount']);
        }
        if (\array_key_exists('amountOpen', $data)) {
            $object->setAmountOpen($data['amountOpen']);
            unset($data['amountOpen']);
        }
        if (\array_key_exists('amountPaid', $data)) {
            $object->setAmountPaid($data['amountPaid']);
            unset($data['amountPaid']);
        }
        if (\array_key_exists('clearanceDate', $data)) {
            $object->setClearanceDate($data['clearanceDate']);
            unset($data['clearanceDate']);
        }
        if (\array_key_exists('cleared', $data)) {
            $object->setCleared($data['cleared']);
            unset($data['cleared']);
        }
        if (\array_key_exists('openItemNumber', $data)) {
            $object->setOpenItemNumber($data['openItemNumber']);
            unset($data['openItemNumber']);
        }
        if (\array_key_exists('openItemType', $data)) {
            $object->setOpenItemType($data['openItemType']);
            unset($data['openItemType']);
        }
        if (\array_key_exists('paymentApplications', $data)) {
            $values = [];
            foreach ($data['paymentApplications'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PaymentApplication::class, 'json', $context);
            }
            $object->setPaymentApplications($values);
            unset($data['paymentApplications']);
        }
        if (\array_key_exists('purchaseInvoiceId', $data)) {
            $object->setPurchaseInvoiceId($data['purchaseInvoiceId']);
            unset($data['purchaseInvoiceId']);
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
        if ($data->isInitialized('amountDiscount') && $data->getAmountDiscount() !== null) {
            $dataArray['amountDiscount'] = $data->getAmountDiscount();
        }
        if ($data->isInitialized('amountOpen') && $data->getAmountOpen() !== null) {
            $dataArray['amountOpen'] = $data->getAmountOpen();
        }
        if ($data->isInitialized('amountPaid') && $data->getAmountPaid() !== null) {
            $dataArray['amountPaid'] = $data->getAmountPaid();
        }
        if ($data->isInitialized('clearanceDate') && $data->getClearanceDate() !== null) {
            $dataArray['clearanceDate'] = $data->getClearanceDate();
        }
        if ($data->isInitialized('cleared') && $data->getCleared() !== null) {
            $dataArray['cleared'] = $data->getCleared();
        }
        if ($data->isInitialized('openItemNumber') && $data->getOpenItemNumber() !== null) {
            $dataArray['openItemNumber'] = $data->getOpenItemNumber();
        }
        if ($data->isInitialized('openItemType') && $data->getOpenItemType() !== null) {
            $dataArray['openItemType'] = $data->getOpenItemType();
        }
        if ($data->isInitialized('paymentApplications') && $data->getPaymentApplications() !== null) {
            $values = [];
            foreach ($data->getPaymentApplications() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['paymentApplications'] = $values;
        }
        if ($data->isInitialized('purchaseInvoiceId') && $data->getPurchaseInvoiceId() !== null) {
            $dataArray['purchaseInvoiceId'] = $data->getPurchaseInvoiceId();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOpenItem::class => false];
    }
}
