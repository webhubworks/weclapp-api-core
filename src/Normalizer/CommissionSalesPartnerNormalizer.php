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
class CommissionSalesPartnerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('commissionFix', $data) && $data['commissionFix'] !== null) {
            $object->setCommissionFix($data['commissionFix']);
            unset($data['commissionFix']);
        }
        elseif (\array_key_exists('commissionFix', $data) && $data['commissionFix'] === null) {
            $object->setCommissionFix(null);
        }
        if (\array_key_exists('commissionPercentage', $data) && $data['commissionPercentage'] !== null) {
            $object->setCommissionPercentage($data['commissionPercentage']);
            unset($data['commissionPercentage']);
        }
        elseif (\array_key_exists('commissionPercentage', $data) && $data['commissionPercentage'] === null) {
            $object->setCommissionPercentage(null);
        }
        if (\array_key_exists('commissionType', $data) && $data['commissionType'] !== null) {
            $object->setCommissionType($data['commissionType']);
            unset($data['commissionType']);
        }
        elseif (\array_key_exists('commissionType', $data) && $data['commissionType'] === null) {
            $object->setCommissionType(null);
        }
        if (\array_key_exists('salesPartnerSupplierId', $data) && $data['salesPartnerSupplierId'] !== null) {
            $object->setSalesPartnerSupplierId($data['salesPartnerSupplierId']);
            unset($data['salesPartnerSupplierId']);
        }
        elseif (\array_key_exists('salesPartnerSupplierId', $data) && $data['salesPartnerSupplierId'] === null) {
            $object->setSalesPartnerSupplierId(null);
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
        if ($data->isInitialized('commissionFix') && null !== $data->getCommissionFix()) {
            $dataArray['commissionFix'] = $data->getCommissionFix();
        }
        if ($data->isInitialized('commissionPercentage') && null !== $data->getCommissionPercentage()) {
            $dataArray['commissionPercentage'] = $data->getCommissionPercentage();
        }
        if ($data->isInitialized('commissionType') && null !== $data->getCommissionType()) {
            $dataArray['commissionType'] = $data->getCommissionType();
        }
        if ($data->isInitialized('salesPartnerSupplierId') && null !== $data->getSalesPartnerSupplierId()) {
            $dataArray['salesPartnerSupplierId'] = $data->getSalesPartnerSupplierId();
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