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

class PurchaseOrderIdIdCreatePurchaseInvoicePostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody;
        if (\array_key_exists('allowExistingInvoiceNumber', $data) && \is_int($data['allowExistingInvoiceNumber'])) {
            $data['allowExistingInvoiceNumber'] = (bool) $data['allowExistingInvoiceNumber'];
        }
        if (\array_key_exists('isGross', $data) && \is_int($data['isGross'])) {
            $data['isGross'] = (bool) $data['isGross'];
        }
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('allowExistingInvoiceNumber', $data)) {
            $object->setAllowExistingInvoiceNumber($data['allowExistingInvoiceNumber']);
            unset($data['allowExistingInvoiceNumber']);
        }
        if (\array_key_exists('invoiceDate', $data)) {
            $object->setInvoiceDate($data['invoiceDate']);
            unset($data['invoiceDate']);
        }
        if (\array_key_exists('invoiceNumber', $data)) {
            $object->setInvoiceNumber($data['invoiceNumber']);
            unset($data['invoiceNumber']);
        }
        if (\array_key_exists('invoiceType', $data)) {
            $object->setInvoiceType($data['invoiceType']);
            unset($data['invoiceType']);
        }
        if (\array_key_exists('isGross', $data)) {
            $object->setIsGross($data['isGross']);
            unset($data['isGross']);
        }
        if (\array_key_exists('paymentAmount', $data)) {
            $object->setPaymentAmount($data['paymentAmount']);
            unset($data['paymentAmount']);
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
        if ($data->isInitialized('allowExistingInvoiceNumber') && $data->getAllowExistingInvoiceNumber() !== null) {
            $dataArray['allowExistingInvoiceNumber'] = $data->getAllowExistingInvoiceNumber();
        }
        if ($data->isInitialized('invoiceDate') && $data->getInvoiceDate() !== null) {
            $dataArray['invoiceDate'] = $data->getInvoiceDate();
        }
        if ($data->isInitialized('invoiceNumber') && $data->getInvoiceNumber() !== null) {
            $dataArray['invoiceNumber'] = $data->getInvoiceNumber();
        }
        if ($data->isInitialized('invoiceType') && $data->getInvoiceType() !== null) {
            $dataArray['invoiceType'] = $data->getInvoiceType();
        }
        if ($data->isInitialized('isGross') && $data->getIsGross() !== null) {
            $dataArray['isGross'] = $data->getIsGross();
        }
        if ($data->isInitialized('paymentAmount') && $data->getPaymentAmount() !== null) {
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
