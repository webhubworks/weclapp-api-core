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

class SalesInvoiceIdIdAddSalesOrdersPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('collectiveInvoicePositionPrintType', $data) && $data['collectiveInvoicePositionPrintType'] !== null) {
            $object->setCollectiveInvoicePositionPrintType($data['collectiveInvoicePositionPrintType']);
            unset($data['collectiveInvoicePositionPrintType']);
        } elseif (\array_key_exists('collectiveInvoicePositionPrintType', $data) && $data['collectiveInvoicePositionPrintType'] === null) {
            $object->setCollectiveInvoicePositionPrintType(null);
        }
        if (\array_key_exists('salesOrderIds', $data) && $data['salesOrderIds'] !== null) {
            $values = [];
            foreach ($data['salesOrderIds'] as $value) {
                $values[] = $value;
            }
            $object->setSalesOrderIds($values);
            unset($data['salesOrderIds']);
        } elseif (\array_key_exists('salesOrderIds', $data) && $data['salesOrderIds'] === null) {
            $object->setSalesOrderIds(null);
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
        if ($data->isInitialized('collectiveInvoicePositionPrintType') && $data->getCollectiveInvoicePositionPrintType() !== null) {
            $dataArray['collectiveInvoicePositionPrintType'] = $data->getCollectiveInvoicePositionPrintType();
        }
        $values = [];
        foreach ($data->getSalesOrderIds() as $value) {
            $values[] = $value;
        }
        $dataArray['salesOrderIds'] = $values;
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody::class => false];
    }
}
