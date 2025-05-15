<?php

namespace Webhub\Weclapp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Webhub\Weclapp\Runtime\Normalizer\CheckArray;
use Webhub\Weclapp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ArticleSupplySourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhub\Weclapp\Model\ArticleSupplySource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhub\Weclapp\Model\ArticleSupplySource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhub\Weclapp\Model\ArticleSupplySource();
        if (\array_key_exists('dropshippingPossible', $data) && \is_int($data['dropshippingPossible'])) {
            $data['dropshippingPossible'] = (bool) $data['dropshippingPossible'];
        }
        if (\array_key_exists('ignoreInDropshippingAutomation', $data) && \is_int($data['ignoreInDropshippingAutomation'])) {
            $data['ignoreInDropshippingAutomation'] = (bool) $data['ignoreInDropshippingAutomation'];
        }
        if (null === $data || false === \is_array($data)) {
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
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhub\Weclapp\Model\CustomAttribute::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('articleNumber', $data)) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        if (\array_key_exists('fixedPurchaseQuantity', $data)) {
            $object->setFixedPurchaseQuantity($data['fixedPurchaseQuantity']);
            unset($data['fixedPurchaseQuantity']);
        }
        if (\array_key_exists('internalNote', $data)) {
            $object->setInternalNote($data['internalNote']);
            unset($data['internalNote']);
        }
        if (\array_key_exists('manufacturerPartNumber', $data)) {
            $object->setManufacturerPartNumber($data['manufacturerPartNumber']);
            unset($data['manufacturerPartNumber']);
        }
        if (\array_key_exists('matchCode', $data)) {
            $object->setMatchCode($data['matchCode']);
            unset($data['matchCode']);
        }
        if (\array_key_exists('minimumPurchaseQuantity', $data)) {
            $object->setMinimumPurchaseQuantity($data['minimumPurchaseQuantity']);
            unset($data['minimumPurchaseQuantity']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shortDescription1', $data)) {
            $object->setShortDescription1($data['shortDescription1']);
            unset($data['shortDescription1']);
        }
        if (\array_key_exists('shortDescription2', $data)) {
            $object->setShortDescription2($data['shortDescription2']);
            unset($data['shortDescription2']);
        }
        if (\array_key_exists('taxRateType', $data)) {
            $object->setTaxRateType($data['taxRateType']);
            unset($data['taxRateType']);
        }
        if (\array_key_exists('unitId', $data)) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        }
        if (\array_key_exists('unitName', $data)) {
            $object->setUnitName($data['unitName']);
            unset($data['unitName']);
        }
        if (\array_key_exists('articlePrices', $data)) {
            $values_1 = [];
            foreach ($data['articlePrices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhub\Weclapp\Model\ArticlePriceWithoutSalesChannel::class, 'json', $context);
            }
            $object->setArticlePrices($values_1);
            unset($data['articlePrices']);
        }
        if (\array_key_exists('dropshippingPossible', $data)) {
            $object->setDropshippingPossible($data['dropshippingPossible']);
            unset($data['dropshippingPossible']);
        }
        if (\array_key_exists('ignoreInDropshippingAutomation', $data)) {
            $object->setIgnoreInDropshippingAutomation($data['ignoreInDropshippingAutomation']);
            unset($data['ignoreInDropshippingAutomation']);
        }
        if (\array_key_exists('procurementLeadDays', $data)) {
            $object->setProcurementLeadDays($data['procurementLeadDays']);
            unset($data['procurementLeadDays']);
        }
        if (\array_key_exists('supplierId', $data)) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        }
        if (\array_key_exists('supplierNumber', $data)) {
            $object->setSupplierNumber($data['supplierNumber']);
            unset($data['supplierNumber']);
        }
        if (\array_key_exists('supplierStockQuantity', $data)) {
            $object->setSupplierStockQuantity($data['supplierStockQuantity']);
            unset($data['supplierStockQuantity']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && null !== $data->getCustomAttributes()) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleNumber') && null !== $data->getArticleNumber()) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ean') && null !== $data->getEan()) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('fixedPurchaseQuantity') && null !== $data->getFixedPurchaseQuantity()) {
            $dataArray['fixedPurchaseQuantity'] = $data->getFixedPurchaseQuantity();
        }
        if ($data->isInitialized('internalNote') && null !== $data->getInternalNote()) {
            $dataArray['internalNote'] = $data->getInternalNote();
        }
        if ($data->isInitialized('manufacturerPartNumber') && null !== $data->getManufacturerPartNumber()) {
            $dataArray['manufacturerPartNumber'] = $data->getManufacturerPartNumber();
        }
        if ($data->isInitialized('matchCode') && null !== $data->getMatchCode()) {
            $dataArray['matchCode'] = $data->getMatchCode();
        }
        if ($data->isInitialized('minimumPurchaseQuantity') && null !== $data->getMinimumPurchaseQuantity()) {
            $dataArray['minimumPurchaseQuantity'] = $data->getMinimumPurchaseQuantity();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shortDescription1') && null !== $data->getShortDescription1()) {
            $dataArray['shortDescription1'] = $data->getShortDescription1();
        }
        if ($data->isInitialized('shortDescription2') && null !== $data->getShortDescription2()) {
            $dataArray['shortDescription2'] = $data->getShortDescription2();
        }
        if ($data->isInitialized('taxRateType') && null !== $data->getTaxRateType()) {
            $dataArray['taxRateType'] = $data->getTaxRateType();
        }
        if ($data->isInitialized('unitId') && null !== $data->getUnitId()) {
            $dataArray['unitId'] = $data->getUnitId();
        }
        if ($data->isInitialized('unitName') && null !== $data->getUnitName()) {
            $dataArray['unitName'] = $data->getUnitName();
        }
        if ($data->isInitialized('articlePrices') && null !== $data->getArticlePrices()) {
            $values_1 = [];
            foreach ($data->getArticlePrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['articlePrices'] = $values_1;
        }
        if ($data->isInitialized('dropshippingPossible') && null !== $data->getDropshippingPossible()) {
            $dataArray['dropshippingPossible'] = $data->getDropshippingPossible();
        }
        if ($data->isInitialized('ignoreInDropshippingAutomation') && null !== $data->getIgnoreInDropshippingAutomation()) {
            $dataArray['ignoreInDropshippingAutomation'] = $data->getIgnoreInDropshippingAutomation();
        }
        if ($data->isInitialized('procurementLeadDays') && null !== $data->getProcurementLeadDays()) {
            $dataArray['procurementLeadDays'] = $data->getProcurementLeadDays();
        }
        if ($data->isInitialized('supplierId') && null !== $data->getSupplierId()) {
            $dataArray['supplierId'] = $data->getSupplierId();
        }
        if ($data->isInitialized('supplierNumber') && null !== $data->getSupplierNumber()) {
            $dataArray['supplierNumber'] = $data->getSupplierNumber();
        }
        if ($data->isInitialized('supplierStockQuantity') && null !== $data->getSupplierStockQuantity()) {
            $dataArray['supplierStockQuantity'] = $data->getSupplierStockQuantity();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhub\Weclapp\Model\ArticleSupplySource::class => false];
    }
}