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
class PurchaseOrderRequestOfferItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItem();
        if (\array_key_exists('accepted', $data) && \is_int($data['accepted'])) {
            $data['accepted'] = (bool) $data['accepted'];
        }
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
        }
        if (\array_key_exists('manualUnitPrice', $data) && \is_int($data['manualUnitPrice'])) {
            $data['manualUnitPrice'] = (bool) $data['manualUnitPrice'];
        }
        if (\array_key_exists('useSupplierArticleNumber', $data) && \is_int($data['useSupplierArticleNumber'])) {
            $data['useSupplierArticleNumber'] = (bool) $data['useSupplierArticleNumber'];
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
        if (\array_key_exists('accepted', $data) && $data['accepted'] !== null) {
            $object->setAccepted($data['accepted']);
            unset($data['accepted']);
        }
        elseif (\array_key_exists('accepted', $data) && $data['accepted'] === null) {
            $object->setAccepted(null);
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('containerQuantity', $data) && $data['containerQuantity'] !== null) {
            $object->setContainerQuantity($data['containerQuantity']);
            unset($data['containerQuantity']);
        }
        elseif (\array_key_exists('containerQuantity', $data) && $data['containerQuantity'] === null) {
            $object->setContainerQuantity(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('descriptionFixed', $data) && $data['descriptionFixed'] !== null) {
            $object->setDescriptionFixed($data['descriptionFixed']);
            unset($data['descriptionFixed']);
        }
        elseif (\array_key_exists('descriptionFixed', $data) && $data['descriptionFixed'] === null) {
            $object->setDescriptionFixed(null);
        }
        if (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] !== null) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        }
        elseif (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] === null) {
            $object->setDiscountPercentage(null);
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
        if (\array_key_exists('manualQuantity', $data) && $data['manualQuantity'] !== null) {
            $object->setManualQuantity($data['manualQuantity']);
            unset($data['manualQuantity']);
        }
        elseif (\array_key_exists('manualQuantity', $data) && $data['manualQuantity'] === null) {
            $object->setManualQuantity(null);
        }
        if (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] !== null) {
            $object->setManualUnitPrice($data['manualUnitPrice']);
            unset($data['manualUnitPrice']);
        }
        elseif (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] === null) {
            $object->setManualUnitPrice(null);
        }
        if (\array_key_exists('minQuantity', $data) && $data['minQuantity'] !== null) {
            $object->setMinQuantity($data['minQuantity']);
            unset($data['minQuantity']);
        }
        elseif (\array_key_exists('minQuantity', $data) && $data['minQuantity'] === null) {
            $object->setMinQuantity(null);
        }
        if (\array_key_exists('netAmount', $data) && $data['netAmount'] !== null) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        }
        elseif (\array_key_exists('netAmount', $data) && $data['netAmount'] === null) {
            $object->setNetAmount(null);
        }
        if (\array_key_exists('netAmountForStatistics', $data) && $data['netAmountForStatistics'] !== null) {
            $object->setNetAmountForStatistics($data['netAmountForStatistics']);
            unset($data['netAmountForStatistics']);
        }
        elseif (\array_key_exists('netAmountForStatistics', $data) && $data['netAmountForStatistics'] === null) {
            $object->setNetAmountForStatistics(null);
        }
        if (\array_key_exists('netAmountForStatisticsInCompanyCurrency', $data) && $data['netAmountForStatisticsInCompanyCurrency'] !== null) {
            $object->setNetAmountForStatisticsInCompanyCurrency($data['netAmountForStatisticsInCompanyCurrency']);
            unset($data['netAmountForStatisticsInCompanyCurrency']);
        }
        elseif (\array_key_exists('netAmountForStatisticsInCompanyCurrency', $data) && $data['netAmountForStatisticsInCompanyCurrency'] === null) {
            $object->setNetAmountForStatisticsInCompanyCurrency(null);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] !== null) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        }
        elseif (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] === null) {
            $object->setNetAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('parentItemId', $data) && $data['parentItemId'] !== null) {
            $object->setParentItemId($data['parentItemId']);
            unset($data['parentItemId']);
        }
        elseif (\array_key_exists('parentItemId', $data) && $data['parentItemId'] === null) {
            $object->setParentItemId(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('procurementLeadDays', $data) && $data['procurementLeadDays'] !== null) {
            $object->setProcurementLeadDays($data['procurementLeadDays']);
            unset($data['procurementLeadDays']);
        }
        elseif (\array_key_exists('procurementLeadDays', $data) && $data['procurementLeadDays'] === null) {
            $object->setProcurementLeadDays(null);
        }
        if (\array_key_exists('purchaseOrderRequestItemId', $data) && $data['purchaseOrderRequestItemId'] !== null) {
            $object->setPurchaseOrderRequestItemId($data['purchaseOrderRequestItemId']);
            unset($data['purchaseOrderRequestItemId']);
        }
        elseif (\array_key_exists('purchaseOrderRequestItemId', $data) && $data['purchaseOrderRequestItemId'] === null) {
            $object->setPurchaseOrderRequestItemId(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('reductionAdditionItems', $data) && $data['reductionAdditionItems'] !== null) {
            $values = [];
            foreach ($data['reductionAdditionItems'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class, 'json', $context);
            }
            $object->setReductionAdditionItems($values);
            unset($data['reductionAdditionItems']);
        }
        elseif (\array_key_exists('reductionAdditionItems', $data) && $data['reductionAdditionItems'] === null) {
            $object->setReductionAdditionItems(null);
        }
        if (\array_key_exists('scaleType', $data) && $data['scaleType'] !== null) {
            $object->setScaleType($data['scaleType']);
            unset($data['scaleType']);
        }
        elseif (\array_key_exists('scaleType', $data) && $data['scaleType'] === null) {
            $object->setScaleType(null);
        }
        if (\array_key_exists('scaleValues', $data) && $data['scaleValues'] !== null) {
            $values_1 = [];
            foreach ($data['scaleValues'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItemScaleValue::class, 'json', $context);
            }
            $object->setScaleValues($values_1);
            unset($data['scaleValues']);
        }
        elseif (\array_key_exists('scaleValues', $data) && $data['scaleValues'] === null) {
            $object->setScaleValues(null);
        }
        if (\array_key_exists('supplierArticleNumber', $data) && $data['supplierArticleNumber'] !== null) {
            $object->setSupplierArticleNumber($data['supplierArticleNumber']);
            unset($data['supplierArticleNumber']);
        }
        elseif (\array_key_exists('supplierArticleNumber', $data) && $data['supplierArticleNumber'] === null) {
            $object->setSupplierArticleNumber(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('taxName', $data) && $data['taxName'] !== null) {
            $object->setTaxName($data['taxName']);
            unset($data['taxName']);
        }
        elseif (\array_key_exists('taxName', $data) && $data['taxName'] === null) {
            $object->setTaxName(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('unitId', $data) && $data['unitId'] !== null) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        }
        elseif (\array_key_exists('unitId', $data) && $data['unitId'] === null) {
            $object->setUnitId(null);
        }
        if (\array_key_exists('unitName', $data) && $data['unitName'] !== null) {
            $object->setUnitName($data['unitName']);
            unset($data['unitName']);
        }
        elseif (\array_key_exists('unitName', $data) && $data['unitName'] === null) {
            $object->setUnitName(null);
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
        if (\array_key_exists('useSupplierArticleNumber', $data) && $data['useSupplierArticleNumber'] !== null) {
            $object->setUseSupplierArticleNumber($data['useSupplierArticleNumber']);
            unset($data['useSupplierArticleNumber']);
        }
        elseif (\array_key_exists('useSupplierArticleNumber', $data) && $data['useSupplierArticleNumber'] === null) {
            $object->setUseSupplierArticleNumber(null);
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
        if ($data->isInitialized('accepted') && null !== $data->getAccepted()) {
            $dataArray['accepted'] = $data->getAccepted();
        }
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleNumber') && null !== $data->getArticleNumber()) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('containerQuantity') && null !== $data->getContainerQuantity()) {
            $dataArray['containerQuantity'] = $data->getContainerQuantity();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('descriptionFixed') && null !== $data->getDescriptionFixed()) {
            $dataArray['descriptionFixed'] = $data->getDescriptionFixed();
        }
        if ($data->isInitialized('discountPercentage') && null !== $data->getDiscountPercentage()) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('grossAmount') && null !== $data->getGrossAmount()) {
            $dataArray['grossAmount'] = $data->getGrossAmount();
        }
        if ($data->isInitialized('grossAmountInCompanyCurrency') && null !== $data->getGrossAmountInCompanyCurrency()) {
            $dataArray['grossAmountInCompanyCurrency'] = $data->getGrossAmountInCompanyCurrency();
        }
        if ($data->isInitialized('manualQuantity') && null !== $data->getManualQuantity()) {
            $dataArray['manualQuantity'] = $data->getManualQuantity();
        }
        if ($data->isInitialized('manualUnitPrice') && null !== $data->getManualUnitPrice()) {
            $dataArray['manualUnitPrice'] = $data->getManualUnitPrice();
        }
        if ($data->isInitialized('minQuantity') && null !== $data->getMinQuantity()) {
            $dataArray['minQuantity'] = $data->getMinQuantity();
        }
        if ($data->isInitialized('netAmount') && null !== $data->getNetAmount()) {
            $dataArray['netAmount'] = $data->getNetAmount();
        }
        if ($data->isInitialized('netAmountForStatistics') && null !== $data->getNetAmountForStatistics()) {
            $dataArray['netAmountForStatistics'] = $data->getNetAmountForStatistics();
        }
        if ($data->isInitialized('netAmountForStatisticsInCompanyCurrency') && null !== $data->getNetAmountForStatisticsInCompanyCurrency()) {
            $dataArray['netAmountForStatisticsInCompanyCurrency'] = $data->getNetAmountForStatisticsInCompanyCurrency();
        }
        if ($data->isInitialized('netAmountInCompanyCurrency') && null !== $data->getNetAmountInCompanyCurrency()) {
            $dataArray['netAmountInCompanyCurrency'] = $data->getNetAmountInCompanyCurrency();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('parentItemId') && null !== $data->getParentItemId()) {
            $dataArray['parentItemId'] = $data->getParentItemId();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('procurementLeadDays') && null !== $data->getProcurementLeadDays()) {
            $dataArray['procurementLeadDays'] = $data->getProcurementLeadDays();
        }
        if ($data->isInitialized('purchaseOrderRequestItemId') && null !== $data->getPurchaseOrderRequestItemId()) {
            $dataArray['purchaseOrderRequestItemId'] = $data->getPurchaseOrderRequestItemId();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('reductionAdditionItems') && null !== $data->getReductionAdditionItems()) {
            $values = [];
            foreach ($data->getReductionAdditionItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['reductionAdditionItems'] = $values;
        }
        if ($data->isInitialized('scaleType') && null !== $data->getScaleType()) {
            $dataArray['scaleType'] = $data->getScaleType();
        }
        if ($data->isInitialized('scaleValues') && null !== $data->getScaleValues()) {
            $values_1 = [];
            foreach ($data->getScaleValues() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['scaleValues'] = $values_1;
        }
        if ($data->isInitialized('supplierArticleNumber') && null !== $data->getSupplierArticleNumber()) {
            $dataArray['supplierArticleNumber'] = $data->getSupplierArticleNumber();
        }
        if ($data->isInitialized('taxId') && null !== $data->getTaxId()) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('taxName') && null !== $data->getTaxName()) {
            $dataArray['taxName'] = $data->getTaxName();
        }
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('unitId') && null !== $data->getUnitId()) {
            $dataArray['unitId'] = $data->getUnitId();
        }
        if ($data->isInitialized('unitName') && null !== $data->getUnitName()) {
            $dataArray['unitName'] = $data->getUnitName();
        }
        if ($data->isInitialized('unitPrice') && null !== $data->getUnitPrice()) {
            $dataArray['unitPrice'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('unitPriceInCompanyCurrency') && null !== $data->getUnitPriceInCompanyCurrency()) {
            $dataArray['unitPriceInCompanyCurrency'] = $data->getUnitPriceInCompanyCurrency();
        }
        if ($data->isInitialized('useSupplierArticleNumber') && null !== $data->getUseSupplierArticleNumber()) {
            $dataArray['useSupplierArticleNumber'] = $data->getUseSupplierArticleNumber();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItem::class => false];
    }
}