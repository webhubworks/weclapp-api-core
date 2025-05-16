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

class SalesInvoiceIdIdCalculateSalesPricesPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('calculationMode', $data) && $data['calculationMode'] !== null) {
            $object->setCalculationMode($data['calculationMode']);
            unset($data['calculationMode']);
        } elseif (\array_key_exists('calculationMode', $data) && $data['calculationMode'] === null) {
            $object->setCalculationMode(null);
        }
        if (\array_key_exists('invoiceItemIds', $data) && $data['invoiceItemIds'] !== null) {
            $values = [];
            foreach ($data['invoiceItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setInvoiceItemIds($values);
            unset($data['invoiceItemIds']);
        } elseif (\array_key_exists('invoiceItemIds', $data) && $data['invoiceItemIds'] === null) {
            $object->setInvoiceItemIds(null);
        }
        if (\array_key_exists('percentage', $data) && $data['percentage'] !== null) {
            $object->setPercentage($data['percentage']);
            unset($data['percentage']);
        } elseif (\array_key_exists('percentage', $data) && $data['percentage'] === null) {
            $object->setPercentage(null);
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
        $dataArray['calculationMode'] = $data->getCalculationMode();
        if ($data->isInitialized('invoiceItemIds') && $data->getInvoiceItemIds() !== null) {
            $values = [];
            foreach ($data->getInvoiceItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['invoiceItemIds'] = $values;
        }
        $dataArray['percentage'] = $data->getPercentage();
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody::class => false];
    }
}
