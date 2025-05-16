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
class ArticleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\Article::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\Article::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\Article();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('applyCashDiscount', $data) && \is_int($data['applyCashDiscount'])) {
            $data['applyCashDiscount'] = (bool) $data['applyCashDiscount'];
        }
        if (\array_key_exists('availableInSale', $data) && \is_int($data['availableInSale'])) {
            $data['availableInSale'] = (bool) $data['availableInSale'];
        }
        if (\array_key_exists('batchNumberRequired', $data) && \is_int($data['batchNumberRequired'])) {
            $data['batchNumberRequired'] = (bool) $data['batchNumberRequired'];
        }
        if (\array_key_exists('billOfMaterialPartDeliveryPossible', $data) && \is_int($data['billOfMaterialPartDeliveryPossible'])) {
            $data['billOfMaterialPartDeliveryPossible'] = (bool) $data['billOfMaterialPartDeliveryPossible'];
        }
        if (\array_key_exists('defineIndividualTaskTemplates', $data) && \is_int($data['defineIndividualTaskTemplates'])) {
            $data['defineIndividualTaskTemplates'] = (bool) $data['defineIndividualTaskTemplates'];
        }
        if (\array_key_exists('productionArticle', $data) && \is_int($data['productionArticle'])) {
            $data['productionArticle'] = (bool) $data['productionArticle'];
        }
        if (\array_key_exists('serialNumberRequired', $data) && \is_int($data['serialNumberRequired'])) {
            $data['serialNumberRequired'] = (bool) $data['serialNumberRequired'];
        }
        if (\array_key_exists('showOnDeliveryNote', $data) && \is_int($data['showOnDeliveryNote'])) {
            $data['showOnDeliveryNote'] = (bool) $data['showOnDeliveryNote'];
        }
        if (\array_key_exists('useAvailableForSalesChannels', $data) && \is_int($data['useAvailableForSalesChannels'])) {
            $data['useAvailableForSalesChannels'] = (bool) $data['useAvailableForSalesChannels'];
        }
        if (\array_key_exists('useSalesBillOfMaterialItemPrices', $data) && \is_int($data['useSalesBillOfMaterialItemPrices'])) {
            $data['useSalesBillOfMaterialItemPrices'] = (bool) $data['useSalesBillOfMaterialItemPrices'];
        }
        if (\array_key_exists('useSalesBillOfMaterialItemPricesForPurchase', $data) && \is_int($data['useSalesBillOfMaterialItemPricesForPurchase'])) {
            $data['useSalesBillOfMaterialItemPricesForPurchase'] = (bool) $data['useSalesBillOfMaterialItemPricesForPurchase'];
        }
        if (\array_key_exists('useSalesBillOfMaterialSubitemCosts', $data) && \is_int($data['useSalesBillOfMaterialSubitemCosts'])) {
            $data['useSalesBillOfMaterialSubitemCosts'] = (bool) $data['useSalesBillOfMaterialSubitemCosts'];
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
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttribute::class, 'json', $context);
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
        if (\array_key_exists('accountId', $data)) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        if (\array_key_exists('accountingCodeId', $data)) {
            $object->setAccountingCodeId($data['accountingCodeId']);
            unset($data['accountingCodeId']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('applyCashDiscount', $data)) {
            $object->setApplyCashDiscount($data['applyCashDiscount']);
            unset($data['applyCashDiscount']);
        }
        if (\array_key_exists('articleAlternativeQuantities', $data)) {
            $values_1 = [];
            foreach ($data['articleAlternativeQuantities'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class, 'json', $context);
            }
            $object->setArticleAlternativeQuantities($values_1);
            unset($data['articleAlternativeQuantities']);
        }
        if (\array_key_exists('articleCalculationPrices', $data)) {
            $values_2 = [];
            foreach ($data['articleCalculationPrices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ArticleCalculationPrice::class, 'json', $context);
            }
            $object->setArticleCalculationPrices($values_2);
            unset($data['articleCalculationPrices']);
        }
        if (\array_key_exists('articleCategoryId', $data)) {
            $object->setArticleCategoryId($data['articleCategoryId']);
            unset($data['articleCategoryId']);
        }
        if (\array_key_exists('articleGrossWeight', $data)) {
            $object->setArticleGrossWeight($data['articleGrossWeight']);
            unset($data['articleGrossWeight']);
        }
        if (\array_key_exists('articleHeight', $data)) {
            $object->setArticleHeight($data['articleHeight']);
            unset($data['articleHeight']);
        }
        if (\array_key_exists('articleImages', $data)) {
            $values_3 = [];
            foreach ($data['articleImages'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ArticleImage::class, 'json', $context);
            }
            $object->setArticleImages($values_3);
            unset($data['articleImages']);
        }
        if (\array_key_exists('articleLength', $data)) {
            $object->setArticleLength($data['articleLength']);
            unset($data['articleLength']);
        }
        if (\array_key_exists('articleNetWeight', $data)) {
            $object->setArticleNetWeight($data['articleNetWeight']);
            unset($data['articleNetWeight']);
        }
        if (\array_key_exists('articlePrices', $data)) {
            $values_4 = [];
            foreach ($data['articlePrices'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class, 'json', $context);
            }
            $object->setArticlePrices($values_4);
            unset($data['articlePrices']);
        }
        if (\array_key_exists('articleType', $data)) {
            $object->setArticleType($data['articleType']);
            unset($data['articleType']);
        }
        if (\array_key_exists('articleWidth', $data)) {
            $object->setArticleWidth($data['articleWidth']);
            unset($data['articleWidth']);
        }
        if (\array_key_exists('availableForSalesChannels', $data)) {
            $values_5 = [];
            foreach ($data['availableForSalesChannels'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setAvailableForSalesChannels($values_5);
            unset($data['availableForSalesChannels']);
        }
        if (\array_key_exists('availableInSale', $data)) {
            $object->setAvailableInSale($data['availableInSale']);
            unset($data['availableInSale']);
        }
        if (\array_key_exists('averageDeliveryTime', $data)) {
            $object->setAverageDeliveryTime($data['averageDeliveryTime']);
            unset($data['averageDeliveryTime']);
        }
        if (\array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        }
        if (\array_key_exists('batchNumberRequired', $data)) {
            $object->setBatchNumberRequired($data['batchNumberRequired']);
            unset($data['batchNumberRequired']);
        }
        if (\array_key_exists('billOfMaterialPartDeliveryPossible', $data)) {
            $object->setBillOfMaterialPartDeliveryPossible($data['billOfMaterialPartDeliveryPossible']);
            unset($data['billOfMaterialPartDeliveryPossible']);
        }
        if (\array_key_exists('catalogCode', $data)) {
            $object->setCatalogCode($data['catalogCode']);
            unset($data['catalogCode']);
        }
        if (\array_key_exists('commissionRate', $data)) {
            $object->setCommissionRate($data['commissionRate']);
            unset($data['commissionRate']);
        }
        if (\array_key_exists('contractBillingCycle', $data)) {
            $object->setContractBillingCycle($data['contractBillingCycle']);
            unset($data['contractBillingCycle']);
        }
        if (\array_key_exists('contractBillingMode', $data)) {
            $object->setContractBillingMode($data['contractBillingMode']);
            unset($data['contractBillingMode']);
        }
        if (\array_key_exists('countryOfOriginCode', $data)) {
            $object->setCountryOfOriginCode($data['countryOfOriginCode']);
            unset($data['countryOfOriginCode']);
        }
        if (\array_key_exists('customerArticleNumbers', $data)) {
            $values_6 = [];
            foreach ($data['customerArticleNumbers'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\CustomerSpecificArticleAttributes::class, 'json', $context);
            }
            $object->setCustomerArticleNumbers($values_6);
            unset($data['customerArticleNumbers']);
        }
        if (\array_key_exists('customsDescription', $data)) {
            $object->setCustomsDescription($data['customsDescription']);
            unset($data['customsDescription']);
        }
        if (\array_key_exists('customsTariffNumber', $data)) {
            $object->setCustomsTariffNumber($data['customsTariffNumber']);
            unset($data['customsTariffNumber']);
        }
        if (\array_key_exists('customsTariffNumberId', $data)) {
            $object->setCustomsTariffNumberId($data['customsTariffNumberId']);
            unset($data['customsTariffNumberId']);
        }
        if (\array_key_exists('defaultLoadingEquipmentIdentifierId', $data)) {
            $object->setDefaultLoadingEquipmentIdentifierId($data['defaultLoadingEquipmentIdentifierId']);
            unset($data['defaultLoadingEquipmentIdentifierId']);
        }
        if (\array_key_exists('defaultPriceCalculationType', $data)) {
            $object->setDefaultPriceCalculationType($data['defaultPriceCalculationType']);
            unset($data['defaultPriceCalculationType']);
        }
        if (\array_key_exists('defaultStoragePlaces', $data)) {
            $values_7 = [];
            foreach ($data['defaultStoragePlaces'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setDefaultStoragePlaces($values_7);
            unset($data['defaultStoragePlaces']);
        }
        if (\array_key_exists('defineIndividualTaskTemplates', $data)) {
            $object->setDefineIndividualTaskTemplates($data['defineIndividualTaskTemplates']);
            unset($data['defineIndividualTaskTemplates']);
        }
        if (\array_key_exists('expenseAccountId', $data)) {
            $object->setExpenseAccountId($data['expenseAccountId']);
            unset($data['expenseAccountId']);
        }
        if (\array_key_exists('expenseAccountNumber', $data)) {
            $object->setExpenseAccountNumber($data['expenseAccountNumber']);
            unset($data['expenseAccountNumber']);
        }
        if (\array_key_exists('expirationDays', $data)) {
            $object->setExpirationDays($data['expirationDays']);
            unset($data['expirationDays']);
        }
        if (\array_key_exists('invoicingType', $data)) {
            $object->setInvoicingType($data['invoicingType']);
            unset($data['invoicingType']);
        }
        if (\array_key_exists('launchDate', $data)) {
            $object->setLaunchDate($data['launchDate']);
            unset($data['launchDate']);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data)) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        }
        if (\array_key_exists('longText', $data)) {
            $object->setLongText($data['longText']);
            unset($data['longText']);
        }
        if (\array_key_exists('lowLevelCode', $data)) {
            $object->setLowLevelCode($data['lowLevelCode']);
            unset($data['lowLevelCode']);
        }
        if (\array_key_exists('manufacturerId', $data)) {
            $object->setManufacturerId($data['manufacturerId']);
            unset($data['manufacturerId']);
        }
        if (\array_key_exists('manufacturerName', $data)) {
            $object->setManufacturerName($data['manufacturerName']);
            unset($data['manufacturerName']);
        }
        if (\array_key_exists('marginCalculationPriceType', $data)) {
            $object->setMarginCalculationPriceType($data['marginCalculationPriceType']);
            unset($data['marginCalculationPriceType']);
        }
        if (\array_key_exists('minimumStockQuantity', $data)) {
            $object->setMinimumStockQuantity($data['minimumStockQuantity']);
            unset($data['minimumStockQuantity']);
        }
        if (\array_key_exists('packagingQuantity', $data)) {
            $object->setPackagingQuantity($data['packagingQuantity']);
            unset($data['packagingQuantity']);
        }
        if (\array_key_exists('packagingUnitBaseArticleId', $data)) {
            $object->setPackagingUnitBaseArticleId($data['packagingUnitBaseArticleId']);
            unset($data['packagingUnitBaseArticleId']);
        }
        if (\array_key_exists('packagingUnitParentArticleId', $data)) {
            $object->setPackagingUnitParentArticleId($data['packagingUnitParentArticleId']);
            unset($data['packagingUnitParentArticleId']);
        }
        if (\array_key_exists('plannedWorkingTimePerUnit', $data)) {
            $object->setPlannedWorkingTimePerUnit($data['plannedWorkingTimePerUnit']);
            unset($data['plannedWorkingTimePerUnit']);
        }
        if (\array_key_exists('priceCalculationParameters', $data)) {
            $values_8 = [];
            foreach ($data['priceCalculationParameters'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class, 'json', $context);
            }
            $object->setPriceCalculationParameters($values_8);
            unset($data['priceCalculationParameters']);
        }
        if (\array_key_exists('primarySupplySourceId', $data)) {
            $object->setPrimarySupplySourceId($data['primarySupplySourceId']);
            unset($data['primarySupplySourceId']);
        }
        if (\array_key_exists('procurementLeadDays', $data)) {
            $object->setProcurementLeadDays($data['procurementLeadDays']);
            unset($data['procurementLeadDays']);
        }
        if (\array_key_exists('producerType', $data)) {
            $object->setProducerType($data['producerType']);
            unset($data['producerType']);
        }
        if (\array_key_exists('productionArticle', $data)) {
            $object->setProductionArticle($data['productionArticle']);
            unset($data['productionArticle']);
        }
        if (\array_key_exists('productionBillOfMaterialItems', $data)) {
            $values_9 = [];
            foreach ($data['productionBillOfMaterialItems'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, \Webhubworks\WeclappApiCore\Model\BillOfMaterial::class, 'json', $context);
            }
            $object->setProductionBillOfMaterialItems($values_9);
            unset($data['productionBillOfMaterialItems']);
        }
        if (\array_key_exists('productionConfigurationRule', $data)) {
            $object->setProductionConfigurationRule($data['productionConfigurationRule']);
            unset($data['productionConfigurationRule']);
        }
        if (\array_key_exists('purchaseCostCenterId', $data)) {
            $object->setPurchaseCostCenterId($data['purchaseCostCenterId']);
            unset($data['purchaseCostCenterId']);
        }
        if (\array_key_exists('purchaseCostCenterNumber', $data)) {
            $object->setPurchaseCostCenterNumber($data['purchaseCostCenterNumber']);
            unset($data['purchaseCostCenterNumber']);
        }
        if (\array_key_exists('quantityConversions', $data)) {
            $values_10 = [];
            foreach ($data['quantityConversions'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, \Webhubworks\WeclappApiCore\Model\QuantityConversion::class, 'json', $context);
            }
            $object->setQuantityConversions($values_10);
            unset($data['quantityConversions']);
        }
        if (\array_key_exists('ratingId', $data)) {
            $object->setRatingId($data['ratingId']);
            unset($data['ratingId']);
        }
        if (\array_key_exists('ratingName', $data)) {
            $object->setRatingName($data['ratingName']);
            unset($data['ratingName']);
        }
        if (\array_key_exists('recordItemGroupName', $data)) {
            $object->setRecordItemGroupName($data['recordItemGroupName']);
            unset($data['recordItemGroupName']);
        }
        if (\array_key_exists('safetyStockDays', $data)) {
            $object->setSafetyStockDays($data['safetyStockDays']);
            unset($data['safetyStockDays']);
        }
        if (\array_key_exists('salesBillOfMaterialItems', $data)) {
            $values_11 = [];
            foreach ($data['salesBillOfMaterialItems'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, \Webhubworks\WeclappApiCore\Model\SalesBillOfMaterialArticleItem::class, 'json', $context);
            }
            $object->setSalesBillOfMaterialItems($values_11);
            unset($data['salesBillOfMaterialItems']);
        }
        if (\array_key_exists('salesCostCenterId', $data)) {
            $object->setSalesCostCenterId($data['salesCostCenterId']);
            unset($data['salesCostCenterId']);
        }
        if (\array_key_exists('salesCostCenterNumber', $data)) {
            $object->setSalesCostCenterNumber($data['salesCostCenterNumber']);
            unset($data['salesCostCenterNumber']);
        }
        if (\array_key_exists('sellByDate', $data)) {
            $object->setSellByDate($data['sellByDate']);
            unset($data['sellByDate']);
        }
        if (\array_key_exists('sellFromDate', $data)) {
            $object->setSellFromDate($data['sellFromDate']);
            unset($data['sellFromDate']);
        }
        if (\array_key_exists('serialNumberRequired', $data)) {
            $object->setSerialNumberRequired($data['serialNumberRequired']);
            unset($data['serialNumberRequired']);
        }
        if (\array_key_exists('showOnDeliveryNote', $data)) {
            $object->setShowOnDeliveryNote($data['showOnDeliveryNote']);
            unset($data['showOnDeliveryNote']);
        }
        if (\array_key_exists('statusId', $data)) {
            $object->setStatusId($data['statusId']);
            unset($data['statusId']);
        }
        if (\array_key_exists('supplySources', $data)) {
            $values_12 = [];
            foreach ($data['supplySources'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, \Webhubworks\WeclappApiCore\Model\SupplySource::class, 'json', $context);
            }
            $object->setSupplySources($values_12);
            unset($data['supplySources']);
        }
        if (\array_key_exists('supportUntilDate', $data)) {
            $object->setSupportUntilDate($data['supportUntilDate']);
            unset($data['supportUntilDate']);
        }
        if (\array_key_exists('systemCode', $data)) {
            $object->setSystemCode($data['systemCode']);
            unset($data['systemCode']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_13 = [];
            foreach ($data['tags'] as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setTags($values_13);
            unset($data['tags']);
        }
        if (\array_key_exists('targetStockQuantity', $data)) {
            $object->setTargetStockQuantity($data['targetStockQuantity']);
            unset($data['targetStockQuantity']);
        }
        if (\array_key_exists('useAvailableForSalesChannels', $data)) {
            $object->setUseAvailableForSalesChannels($data['useAvailableForSalesChannels']);
            unset($data['useAvailableForSalesChannels']);
        }
        if (\array_key_exists('useSalesBillOfMaterialItemPrices', $data)) {
            $object->setUseSalesBillOfMaterialItemPrices($data['useSalesBillOfMaterialItemPrices']);
            unset($data['useSalesBillOfMaterialItemPrices']);
        }
        if (\array_key_exists('useSalesBillOfMaterialItemPricesForPurchase', $data)) {
            $object->setUseSalesBillOfMaterialItemPricesForPurchase($data['useSalesBillOfMaterialItemPricesForPurchase']);
            unset($data['useSalesBillOfMaterialItemPricesForPurchase']);
        }
        if (\array_key_exists('useSalesBillOfMaterialSubitemCosts', $data)) {
            $object->setUseSalesBillOfMaterialSubitemCosts($data['useSalesBillOfMaterialSubitemCosts']);
            unset($data['useSalesBillOfMaterialSubitemCosts']);
        }
        foreach ($data as $key => $value_14) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_14;
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
        if ($data->isInitialized('accountId') && null !== $data->getAccountId()) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('accountingCodeId') && null !== $data->getAccountingCodeId()) {
            $dataArray['accountingCodeId'] = $data->getAccountingCodeId();
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('applyCashDiscount') && null !== $data->getApplyCashDiscount()) {
            $dataArray['applyCashDiscount'] = $data->getApplyCashDiscount();
        }
        if ($data->isInitialized('articleAlternativeQuantities') && null !== $data->getArticleAlternativeQuantities()) {
            $values_1 = [];
            foreach ($data->getArticleAlternativeQuantities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['articleAlternativeQuantities'] = $values_1;
        }
        if ($data->isInitialized('articleCalculationPrices') && null !== $data->getArticleCalculationPrices()) {
            $values_2 = [];
            foreach ($data->getArticleCalculationPrices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['articleCalculationPrices'] = $values_2;
        }
        if ($data->isInitialized('articleCategoryId') && null !== $data->getArticleCategoryId()) {
            $dataArray['articleCategoryId'] = $data->getArticleCategoryId();
        }
        if ($data->isInitialized('articleGrossWeight') && null !== $data->getArticleGrossWeight()) {
            $dataArray['articleGrossWeight'] = $data->getArticleGrossWeight();
        }
        if ($data->isInitialized('articleHeight') && null !== $data->getArticleHeight()) {
            $dataArray['articleHeight'] = $data->getArticleHeight();
        }
        if ($data->isInitialized('articleImages') && null !== $data->getArticleImages()) {
            $values_3 = [];
            foreach ($data->getArticleImages() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['articleImages'] = $values_3;
        }
        if ($data->isInitialized('articleLength') && null !== $data->getArticleLength()) {
            $dataArray['articleLength'] = $data->getArticleLength();
        }
        if ($data->isInitialized('articleNetWeight') && null !== $data->getArticleNetWeight()) {
            $dataArray['articleNetWeight'] = $data->getArticleNetWeight();
        }
        if ($data->isInitialized('articlePrices') && null !== $data->getArticlePrices()) {
            $values_4 = [];
            foreach ($data->getArticlePrices() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['articlePrices'] = $values_4;
        }
        if ($data->isInitialized('articleType') && null !== $data->getArticleType()) {
            $dataArray['articleType'] = $data->getArticleType();
        }
        if ($data->isInitialized('articleWidth') && null !== $data->getArticleWidth()) {
            $dataArray['articleWidth'] = $data->getArticleWidth();
        }
        if ($data->isInitialized('availableForSalesChannels') && null !== $data->getAvailableForSalesChannels()) {
            $values_5 = [];
            foreach ($data->getAvailableForSalesChannels() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['availableForSalesChannels'] = $values_5;
        }
        if ($data->isInitialized('availableInSale') && null !== $data->getAvailableInSale()) {
            $dataArray['availableInSale'] = $data->getAvailableInSale();
        }
        if ($data->isInitialized('averageDeliveryTime') && null !== $data->getAverageDeliveryTime()) {
            $dataArray['averageDeliveryTime'] = $data->getAverageDeliveryTime();
        }
        if ($data->isInitialized('barcode') && null !== $data->getBarcode()) {
            $dataArray['barcode'] = $data->getBarcode();
        }
        if ($data->isInitialized('batchNumberRequired') && null !== $data->getBatchNumberRequired()) {
            $dataArray['batchNumberRequired'] = $data->getBatchNumberRequired();
        }
        if ($data->isInitialized('billOfMaterialPartDeliveryPossible') && null !== $data->getBillOfMaterialPartDeliveryPossible()) {
            $dataArray['billOfMaterialPartDeliveryPossible'] = $data->getBillOfMaterialPartDeliveryPossible();
        }
        if ($data->isInitialized('catalogCode') && null !== $data->getCatalogCode()) {
            $dataArray['catalogCode'] = $data->getCatalogCode();
        }
        if ($data->isInitialized('commissionRate') && null !== $data->getCommissionRate()) {
            $dataArray['commissionRate'] = $data->getCommissionRate();
        }
        if ($data->isInitialized('contractBillingCycle') && null !== $data->getContractBillingCycle()) {
            $dataArray['contractBillingCycle'] = $data->getContractBillingCycle();
        }
        if ($data->isInitialized('contractBillingMode') && null !== $data->getContractBillingMode()) {
            $dataArray['contractBillingMode'] = $data->getContractBillingMode();
        }
        if ($data->isInitialized('countryOfOriginCode') && null !== $data->getCountryOfOriginCode()) {
            $dataArray['countryOfOriginCode'] = $data->getCountryOfOriginCode();
        }
        if ($data->isInitialized('customerArticleNumbers') && null !== $data->getCustomerArticleNumbers()) {
            $values_6 = [];
            foreach ($data->getCustomerArticleNumbers() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['customerArticleNumbers'] = $values_6;
        }
        if ($data->isInitialized('customsDescription') && null !== $data->getCustomsDescription()) {
            $dataArray['customsDescription'] = $data->getCustomsDescription();
        }
        if ($data->isInitialized('customsTariffNumber') && null !== $data->getCustomsTariffNumber()) {
            $dataArray['customsTariffNumber'] = $data->getCustomsTariffNumber();
        }
        if ($data->isInitialized('customsTariffNumberId') && null !== $data->getCustomsTariffNumberId()) {
            $dataArray['customsTariffNumberId'] = $data->getCustomsTariffNumberId();
        }
        if ($data->isInitialized('defaultLoadingEquipmentIdentifierId') && null !== $data->getDefaultLoadingEquipmentIdentifierId()) {
            $dataArray['defaultLoadingEquipmentIdentifierId'] = $data->getDefaultLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('defaultPriceCalculationType') && null !== $data->getDefaultPriceCalculationType()) {
            $dataArray['defaultPriceCalculationType'] = $data->getDefaultPriceCalculationType();
        }
        if ($data->isInitialized('defaultStoragePlaces') && null !== $data->getDefaultStoragePlaces()) {
            $values_7 = [];
            foreach ($data->getDefaultStoragePlaces() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['defaultStoragePlaces'] = $values_7;
        }
        if ($data->isInitialized('defineIndividualTaskTemplates') && null !== $data->getDefineIndividualTaskTemplates()) {
            $dataArray['defineIndividualTaskTemplates'] = $data->getDefineIndividualTaskTemplates();
        }
        if ($data->isInitialized('expenseAccountId') && null !== $data->getExpenseAccountId()) {
            $dataArray['expenseAccountId'] = $data->getExpenseAccountId();
        }
        if ($data->isInitialized('expenseAccountNumber') && null !== $data->getExpenseAccountNumber()) {
            $dataArray['expenseAccountNumber'] = $data->getExpenseAccountNumber();
        }
        if ($data->isInitialized('expirationDays') && null !== $data->getExpirationDays()) {
            $dataArray['expirationDays'] = $data->getExpirationDays();
        }
        if ($data->isInitialized('invoicingType') && null !== $data->getInvoicingType()) {
            $dataArray['invoicingType'] = $data->getInvoicingType();
        }
        if ($data->isInitialized('launchDate') && null !== $data->getLaunchDate()) {
            $dataArray['launchDate'] = $data->getLaunchDate();
        }
        if ($data->isInitialized('loadingEquipmentArticleId') && null !== $data->getLoadingEquipmentArticleId()) {
            $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        }
        if ($data->isInitialized('longText') && null !== $data->getLongText()) {
            $dataArray['longText'] = $data->getLongText();
        }
        if ($data->isInitialized('lowLevelCode') && null !== $data->getLowLevelCode()) {
            $dataArray['lowLevelCode'] = $data->getLowLevelCode();
        }
        if ($data->isInitialized('manufacturerId') && null !== $data->getManufacturerId()) {
            $dataArray['manufacturerId'] = $data->getManufacturerId();
        }
        if ($data->isInitialized('manufacturerName') && null !== $data->getManufacturerName()) {
            $dataArray['manufacturerName'] = $data->getManufacturerName();
        }
        if ($data->isInitialized('marginCalculationPriceType') && null !== $data->getMarginCalculationPriceType()) {
            $dataArray['marginCalculationPriceType'] = $data->getMarginCalculationPriceType();
        }
        if ($data->isInitialized('minimumStockQuantity') && null !== $data->getMinimumStockQuantity()) {
            $dataArray['minimumStockQuantity'] = $data->getMinimumStockQuantity();
        }
        if ($data->isInitialized('packagingQuantity') && null !== $data->getPackagingQuantity()) {
            $dataArray['packagingQuantity'] = $data->getPackagingQuantity();
        }
        if ($data->isInitialized('packagingUnitBaseArticleId') && null !== $data->getPackagingUnitBaseArticleId()) {
            $dataArray['packagingUnitBaseArticleId'] = $data->getPackagingUnitBaseArticleId();
        }
        if ($data->isInitialized('packagingUnitParentArticleId') && null !== $data->getPackagingUnitParentArticleId()) {
            $dataArray['packagingUnitParentArticleId'] = $data->getPackagingUnitParentArticleId();
        }
        if ($data->isInitialized('plannedWorkingTimePerUnit') && null !== $data->getPlannedWorkingTimePerUnit()) {
            $dataArray['plannedWorkingTimePerUnit'] = $data->getPlannedWorkingTimePerUnit();
        }
        if ($data->isInitialized('priceCalculationParameters') && null !== $data->getPriceCalculationParameters()) {
            $values_8 = [];
            foreach ($data->getPriceCalculationParameters() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['priceCalculationParameters'] = $values_8;
        }
        if ($data->isInitialized('primarySupplySourceId') && null !== $data->getPrimarySupplySourceId()) {
            $dataArray['primarySupplySourceId'] = $data->getPrimarySupplySourceId();
        }
        if ($data->isInitialized('procurementLeadDays') && null !== $data->getProcurementLeadDays()) {
            $dataArray['procurementLeadDays'] = $data->getProcurementLeadDays();
        }
        if ($data->isInitialized('producerType') && null !== $data->getProducerType()) {
            $dataArray['producerType'] = $data->getProducerType();
        }
        if ($data->isInitialized('productionArticle') && null !== $data->getProductionArticle()) {
            $dataArray['productionArticle'] = $data->getProductionArticle();
        }
        if ($data->isInitialized('productionBillOfMaterialItems') && null !== $data->getProductionBillOfMaterialItems()) {
            $values_9 = [];
            foreach ($data->getProductionBillOfMaterialItems() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $dataArray['productionBillOfMaterialItems'] = $values_9;
        }
        if ($data->isInitialized('productionConfigurationRule') && null !== $data->getProductionConfigurationRule()) {
            $dataArray['productionConfigurationRule'] = $data->getProductionConfigurationRule();
        }
        if ($data->isInitialized('purchaseCostCenterId') && null !== $data->getPurchaseCostCenterId()) {
            $dataArray['purchaseCostCenterId'] = $data->getPurchaseCostCenterId();
        }
        if ($data->isInitialized('purchaseCostCenterNumber') && null !== $data->getPurchaseCostCenterNumber()) {
            $dataArray['purchaseCostCenterNumber'] = $data->getPurchaseCostCenterNumber();
        }
        if ($data->isInitialized('quantityConversions') && null !== $data->getQuantityConversions()) {
            $values_10 = [];
            foreach ($data->getQuantityConversions() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $dataArray['quantityConversions'] = $values_10;
        }
        if ($data->isInitialized('ratingId') && null !== $data->getRatingId()) {
            $dataArray['ratingId'] = $data->getRatingId();
        }
        if ($data->isInitialized('ratingName') && null !== $data->getRatingName()) {
            $dataArray['ratingName'] = $data->getRatingName();
        }
        if ($data->isInitialized('recordItemGroupName') && null !== $data->getRecordItemGroupName()) {
            $dataArray['recordItemGroupName'] = $data->getRecordItemGroupName();
        }
        if ($data->isInitialized('safetyStockDays') && null !== $data->getSafetyStockDays()) {
            $dataArray['safetyStockDays'] = $data->getSafetyStockDays();
        }
        if ($data->isInitialized('salesBillOfMaterialItems') && null !== $data->getSalesBillOfMaterialItems()) {
            $values_11 = [];
            foreach ($data->getSalesBillOfMaterialItems() as $value_11) {
                $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $dataArray['salesBillOfMaterialItems'] = $values_11;
        }
        if ($data->isInitialized('salesCostCenterId') && null !== $data->getSalesCostCenterId()) {
            $dataArray['salesCostCenterId'] = $data->getSalesCostCenterId();
        }
        if ($data->isInitialized('salesCostCenterNumber') && null !== $data->getSalesCostCenterNumber()) {
            $dataArray['salesCostCenterNumber'] = $data->getSalesCostCenterNumber();
        }
        if ($data->isInitialized('sellByDate') && null !== $data->getSellByDate()) {
            $dataArray['sellByDate'] = $data->getSellByDate();
        }
        if ($data->isInitialized('sellFromDate') && null !== $data->getSellFromDate()) {
            $dataArray['sellFromDate'] = $data->getSellFromDate();
        }
        if ($data->isInitialized('serialNumberRequired') && null !== $data->getSerialNumberRequired()) {
            $dataArray['serialNumberRequired'] = $data->getSerialNumberRequired();
        }
        if ($data->isInitialized('showOnDeliveryNote') && null !== $data->getShowOnDeliveryNote()) {
            $dataArray['showOnDeliveryNote'] = $data->getShowOnDeliveryNote();
        }
        if ($data->isInitialized('statusId') && null !== $data->getStatusId()) {
            $dataArray['statusId'] = $data->getStatusId();
        }
        if ($data->isInitialized('supplySources') && null !== $data->getSupplySources()) {
            $values_12 = [];
            foreach ($data->getSupplySources() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $dataArray['supplySources'] = $values_12;
        }
        if ($data->isInitialized('supportUntilDate') && null !== $data->getSupportUntilDate()) {
            $dataArray['supportUntilDate'] = $data->getSupportUntilDate();
        }
        if ($data->isInitialized('systemCode') && null !== $data->getSystemCode()) {
            $dataArray['systemCode'] = $data->getSystemCode();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_13 = [];
            foreach ($data->getTags() as $value_13) {
                $values_13[] = $value_13;
            }
            $dataArray['tags'] = $values_13;
        }
        if ($data->isInitialized('targetStockQuantity') && null !== $data->getTargetStockQuantity()) {
            $dataArray['targetStockQuantity'] = $data->getTargetStockQuantity();
        }
        if ($data->isInitialized('useAvailableForSalesChannels') && null !== $data->getUseAvailableForSalesChannels()) {
            $dataArray['useAvailableForSalesChannels'] = $data->getUseAvailableForSalesChannels();
        }
        if ($data->isInitialized('useSalesBillOfMaterialItemPrices') && null !== $data->getUseSalesBillOfMaterialItemPrices()) {
            $dataArray['useSalesBillOfMaterialItemPrices'] = $data->getUseSalesBillOfMaterialItemPrices();
        }
        if ($data->isInitialized('useSalesBillOfMaterialItemPricesForPurchase') && null !== $data->getUseSalesBillOfMaterialItemPricesForPurchase()) {
            $dataArray['useSalesBillOfMaterialItemPricesForPurchase'] = $data->getUseSalesBillOfMaterialItemPricesForPurchase();
        }
        if ($data->isInitialized('useSalesBillOfMaterialSubitemCosts') && null !== $data->getUseSalesBillOfMaterialSubitemCosts()) {
            $dataArray['useSalesBillOfMaterialSubitemCosts'] = $data->getUseSalesBillOfMaterialSubitemCosts();
        }
        foreach ($data as $key => $value_14) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_14;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\Article::class => false];
    }
}