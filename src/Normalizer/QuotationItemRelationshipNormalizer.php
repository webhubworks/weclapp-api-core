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
class QuotationItemRelationshipNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\QuotationItemRelationship::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\QuotationItemRelationship::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\QuotationItemRelationship();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('acceptedQuantity', $data) && $data['acceptedQuantity'] !== null) {
            $object->setAcceptedQuantity($data['acceptedQuantity']);
            unset($data['acceptedQuantity']);
        }
        elseif (\array_key_exists('acceptedQuantity', $data) && $data['acceptedQuantity'] === null) {
            $object->setAcceptedQuantity(null);
        }
        if (\array_key_exists('contractItemId', $data) && $data['contractItemId'] !== null) {
            $object->setContractItemId($data['contractItemId']);
            unset($data['contractItemId']);
        }
        elseif (\array_key_exists('contractItemId', $data) && $data['contractItemId'] === null) {
            $object->setContractItemId(null);
        }
        if (\array_key_exists('projectMaterialItemId', $data) && $data['projectMaterialItemId'] !== null) {
            $object->setProjectMaterialItemId($data['projectMaterialItemId']);
            unset($data['projectMaterialItemId']);
        }
        elseif (\array_key_exists('projectMaterialItemId', $data) && $data['projectMaterialItemId'] === null) {
            $object->setProjectMaterialItemId(null);
        }
        if (\array_key_exists('projectRequirementItemId', $data) && $data['projectRequirementItemId'] !== null) {
            $object->setProjectRequirementItemId($data['projectRequirementItemId']);
            unset($data['projectRequirementItemId']);
        }
        elseif (\array_key_exists('projectRequirementItemId', $data) && $data['projectRequirementItemId'] === null) {
            $object->setProjectRequirementItemId(null);
        }
        if (\array_key_exists('salesInvoiceItemId', $data) && $data['salesInvoiceItemId'] !== null) {
            $object->setSalesInvoiceItemId($data['salesInvoiceItemId']);
            unset($data['salesInvoiceItemId']);
        }
        elseif (\array_key_exists('salesInvoiceItemId', $data) && $data['salesInvoiceItemId'] === null) {
            $object->setSalesInvoiceItemId(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\QuotationItemRelationship::class => false];
    }
}