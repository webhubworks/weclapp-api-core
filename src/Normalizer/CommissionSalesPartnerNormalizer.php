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

class CommissionSalesPartnerNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner;
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
        if (\array_key_exists('commissionFix', $data)) {
            $object->setCommissionFix($data['commissionFix']);
            unset($data['commissionFix']);
        }
        if (\array_key_exists('commissionPercentage', $data)) {
            $object->setCommissionPercentage($data['commissionPercentage']);
            unset($data['commissionPercentage']);
        }
        if (\array_key_exists('commissionType', $data)) {
            $object->setCommissionType($data['commissionType']);
            unset($data['commissionType']);
        }
        if (\array_key_exists('salesPartnerSupplierId', $data)) {
            $object->setSalesPartnerSupplierId($data['salesPartnerSupplierId']);
            unset($data['salesPartnerSupplierId']);
        }
        if (\array_key_exists('salesPartnerSupplierNumber', $data)) {
            $object->setSalesPartnerSupplierNumber($data['salesPartnerSupplierNumber']);
            unset($data['salesPartnerSupplierNumber']);
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
        if ($data->isInitialized('commissionFix') && $data->getCommissionFix() !== null) {
            $dataArray['commissionFix'] = $data->getCommissionFix();
        }
        if ($data->isInitialized('commissionPercentage') && $data->getCommissionPercentage() !== null) {
            $dataArray['commissionPercentage'] = $data->getCommissionPercentage();
        }
        if ($data->isInitialized('commissionType') && $data->getCommissionType() !== null) {
            $dataArray['commissionType'] = $data->getCommissionType();
        }
        if ($data->isInitialized('salesPartnerSupplierId') && $data->getSalesPartnerSupplierId() !== null) {
            $dataArray['salesPartnerSupplierId'] = $data->getSalesPartnerSupplierId();
        }
        if ($data->isInitialized('salesPartnerSupplierNumber') && $data->getSalesPartnerSupplierNumber() !== null) {
            $dataArray['salesPartnerSupplierNumber'] = $data->getSalesPartnerSupplierNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class => false];
    }
}
