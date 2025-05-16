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
class PurchaseOrderIdIdCreatePurchaseInvoicePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody();
        if (\array_key_exists('allowExistingInvoiceNumber', $data) && \is_int($data['allowExistingInvoiceNumber'])) {
            $data['allowExistingInvoiceNumber'] = (bool) $data['allowExistingInvoiceNumber'];
        }
        if (\array_key_exists('isGross', $data) && \is_int($data['isGross'])) {
            $data['isGross'] = (bool) $data['isGross'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowExistingInvoiceNumber', $data) && $data['allowExistingInvoiceNumber'] !== null) {
            $object->setAllowExistingInvoiceNumber($data['allowExistingInvoiceNumber']);
            unset($data['allowExistingInvoiceNumber']);
        }
        elseif (\array_key_exists('allowExistingInvoiceNumber', $data) && $data['allowExistingInvoiceNumber'] === null) {
            $object->setAllowExistingInvoiceNumber(null);
        }
        if (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] !== null) {
            $object->setInvoiceDate($data['invoiceDate']);
            unset($data['invoiceDate']);
        }
        elseif (\array_key_exists('invoiceDate', $data) && $data['invoiceDate'] === null) {
            $object->setInvoiceDate(null);
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        if (\array_key_exists('invoiceType', $data) && $data['invoiceType'] !== null) {
            $object->setInvoiceType($data['invoiceType']);
            unset($data['invoiceType']);
        }
        elseif (\array_key_exists('invoiceType', $data) && $data['invoiceType'] === null) {
            $object->setInvoiceType(null);
        }
        if (\array_key_exists('isGross', $data) && $data['isGross'] !== null) {
            $object->setIsGross($data['isGross']);
            unset($data['isGross']);
        }
        elseif (\array_key_exists('isGross', $data) && $data['isGross'] === null) {
            $object->setIsGross(null);
        }
        if (\array_key_exists('paymentAmount', $data) && $data['paymentAmount'] !== null) {
            $object->setPaymentAmount($data['paymentAmount']);
            unset($data['paymentAmount']);
        }
        elseif (\array_key_exists('paymentAmount', $data) && $data['paymentAmount'] === null) {
            $object->setPaymentAmount(null);
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
        if ($data->isInitialized('allowExistingInvoiceNumber') && null !== $data->getAllowExistingInvoiceNumber()) {
            $dataArray['allowExistingInvoiceNumber'] = $data->getAllowExistingInvoiceNumber();
        }
        if ($data->isInitialized('invoiceDate') && null !== $data->getInvoiceDate()) {
            $dataArray['invoiceDate'] = $data->getInvoiceDate();
        }
        if ($data->isInitialized('invoiceNumber') && null !== $data->getInvoiceNumber()) {
            $dataArray['invoiceNumber'] = $data->getInvoiceNumber();
        }
        if ($data->isInitialized('invoiceType') && null !== $data->getInvoiceType()) {
            $dataArray['invoiceType'] = $data->getInvoiceType();
        }
        if ($data->isInitialized('isGross') && null !== $data->getIsGross()) {
            $dataArray['isGross'] = $data->getIsGross();
        }
        if ($data->isInitialized('paymentAmount') && null !== $data->getPaymentAmount()) {
            $dataArray['paymentAmount'] = $data->getPaymentAmount();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody::class => false];
    }
}