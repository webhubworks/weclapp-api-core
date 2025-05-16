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

class TaxDeterminationRuleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TaxDeterminationRule::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TaxDeterminationRule::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TaxDeterminationRule;
        if (\array_key_exists('sales', $data) && \is_int($data['sales'])) {
            $data['sales'] = (bool) $data['sales'];
        }
        if (\array_key_exists('validVatId', $data) && \is_int($data['validVatId'])) {
            $data['validVatId'] = (bool) $data['validVatId'];
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
        if (\array_key_exists('accountingCodeId', $data)) {
            $object->setAccountingCodeId($data['accountingCodeId']);
            unset($data['accountingCodeId']);
        }
        if (\array_key_exists('customerDebtorAccountingCodeId', $data)) {
            $object->setCustomerDebtorAccountingCodeId($data['customerDebtorAccountingCodeId']);
            unset($data['customerDebtorAccountingCodeId']);
        }
        if (\array_key_exists('dispatchCountryCode', $data)) {
            $object->setDispatchCountryCode($data['dispatchCountryCode']);
            unset($data['dispatchCountryCode']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        if (\array_key_exists('partyType', $data)) {
            $object->setPartyType($data['partyType']);
            unset($data['partyType']);
        }
        if (\array_key_exists('recipientCountryCode', $data)) {
            $object->setRecipientCountryCode($data['recipientCountryCode']);
            unset($data['recipientCountryCode']);
        }
        if (\array_key_exists('sales', $data)) {
            $object->setSales($data['sales']);
            unset($data['sales']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        }
        if (\array_key_exists('taxId', $data)) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        if (\array_key_exists('taxRateType', $data)) {
            $object->setTaxRateType($data['taxRateType']);
            unset($data['taxRateType']);
        }
        if (\array_key_exists('validVatId', $data)) {
            $object->setValidVatId($data['validVatId']);
            unset($data['validVatId']);
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
        if ($data->isInitialized('accountingCodeId') && $data->getAccountingCodeId() !== null) {
            $dataArray['accountingCodeId'] = $data->getAccountingCodeId();
        }
        if ($data->isInitialized('customerDebtorAccountingCodeId') && $data->getCustomerDebtorAccountingCodeId() !== null) {
            $dataArray['customerDebtorAccountingCodeId'] = $data->getCustomerDebtorAccountingCodeId();
        }
        if ($data->isInitialized('dispatchCountryCode') && $data->getDispatchCountryCode() !== null) {
            $dataArray['dispatchCountryCode'] = $data->getDispatchCountryCode();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('partyType') && $data->getPartyType() !== null) {
            $dataArray['partyType'] = $data->getPartyType();
        }
        if ($data->isInitialized('recipientCountryCode') && $data->getRecipientCountryCode() !== null) {
            $dataArray['recipientCountryCode'] = $data->getRecipientCountryCode();
        }
        if ($data->isInitialized('sales') && $data->getSales() !== null) {
            $dataArray['sales'] = $data->getSales();
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('taxRateType') && $data->getTaxRateType() !== null) {
            $dataArray['taxRateType'] = $data->getTaxRateType();
        }
        if ($data->isInitialized('validVatId') && $data->getValidVatId() !== null) {
            $dataArray['validVatId'] = $data->getValidVatId();
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
        return [\Webhubworks\WeclappApiCore\Model\TaxDeterminationRule::class => false];
    }
}
