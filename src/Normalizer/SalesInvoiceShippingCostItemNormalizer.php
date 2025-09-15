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
class SalesInvoiceShippingCostItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem();
        if (\array_key_exists('manualUnitPrice', $data) && \is_int($data['manualUnitPrice'])) {
            $data['manualUnitPrice'] = (bool) $data['manualUnitPrice'];
        }
        if (\array_key_exists('manualUnitCost', $data) && \is_int($data['manualUnitCost'])) {
            $data['manualUnitCost'] = (bool) $data['manualUnitCost'];
        }
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('grossAmount', $data) && $data['grossAmount'] !== null) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        }
        elseif (\array_key_exists('grossAmount', $data) && $data['grossAmount'] === null) {
            $object->setGrossAmount(null);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] !== null) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        }
        elseif (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] === null) {
            $object->setGrossAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] !== null) {
            $object->setManualUnitPrice($data['manualUnitPrice']);
            unset($data['manualUnitPrice']);
        }
        elseif (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] === null) {
            $object->setManualUnitPrice(null);
        }
        if (\array_key_exists('netAmount', $data) && $data['netAmount'] !== null) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        }
        elseif (\array_key_exists('netAmount', $data) && $data['netAmount'] === null) {
            $object->setNetAmount(null);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] !== null) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        }
        elseif (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] === null) {
            $object->setNetAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('unitPrice', $data) && $data['unitPrice'] !== null) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        }
        elseif (\array_key_exists('unitPrice', $data) && $data['unitPrice'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('unitPriceInCompanyCurrency', $data) && $data['unitPriceInCompanyCurrency'] !== null) {
            $object->setUnitPriceInCompanyCurrency($data['unitPriceInCompanyCurrency']);
            unset($data['unitPriceInCompanyCurrency']);
        }
        elseif (\array_key_exists('unitPriceInCompanyCurrency', $data) && $data['unitPriceInCompanyCurrency'] === null) {
            $object->setUnitPriceInCompanyCurrency(null);
        }
        if (\array_key_exists('manualUnitCost', $data) && $data['manualUnitCost'] !== null) {
            $object->setManualUnitCost($data['manualUnitCost']);
            unset($data['manualUnitCost']);
        }
        elseif (\array_key_exists('manualUnitCost', $data) && $data['manualUnitCost'] === null) {
            $object->setManualUnitCost(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('unitCost', $data) && $data['unitCost'] !== null) {
            $object->setUnitCost($data['unitCost']);
            unset($data['unitCost']);
        }
        elseif (\array_key_exists('unitCost', $data) && $data['unitCost'] === null) {
            $object->setUnitCost(null);
        }
        if (\array_key_exists('unitCostInCompanyCurrency', $data) && $data['unitCostInCompanyCurrency'] !== null) {
            $object->setUnitCostInCompanyCurrency($data['unitCostInCompanyCurrency']);
            unset($data['unitCostInCompanyCurrency']);
        }
        elseif (\array_key_exists('unitCostInCompanyCurrency', $data) && $data['unitCostInCompanyCurrency'] === null) {
            $object->setUnitCostInCompanyCurrency(null);
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
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('manualUnitPrice') && null !== $data->getManualUnitPrice()) {
            $dataArray['manualUnitPrice'] = $data->getManualUnitPrice();
        }
        if ($data->isInitialized('unitPrice') && null !== $data->getUnitPrice()) {
            $dataArray['unitPrice'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('manualUnitCost') && null !== $data->getManualUnitCost()) {
            $dataArray['manualUnitCost'] = $data->getManualUnitCost();
        }
        if ($data->isInitialized('taxId') && null !== $data->getTaxId()) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('unitCost') && null !== $data->getUnitCost()) {
            $dataArray['unitCost'] = $data->getUnitCost();
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
        return [\Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class => false];
    }
}