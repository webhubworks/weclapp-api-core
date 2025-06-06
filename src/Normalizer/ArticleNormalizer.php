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

class ArticleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\Article;
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
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        } elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        } elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttribute::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        } elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        } elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('fixedPurchaseQuantity', $data) && $data['fixedPurchaseQuantity'] !== null) {
            $object->setFixedPurchaseQuantity($data['fixedPurchaseQuantity']);
            unset($data['fixedPurchaseQuantity']);
        } elseif (\array_key_exists('fixedPurchaseQuantity', $data) && $data['fixedPurchaseQuantity'] === null) {
            $object->setFixedPurchaseQuantity(null);
        }
        if (\array_key_exists('internalNote', $data) && $data['internalNote'] !== null) {
            $object->setInternalNote($data['internalNote']);
            unset($data['internalNote']);
        } elseif (\array_key_exists('internalNote', $data) && $data['internalNote'] === null) {
            $object->setInternalNote(null);
        }
        if (\array_key_exists('manufacturerPartNumber', $data) && $data['manufacturerPartNumber'] !== null) {
            $object->setManufacturerPartNumber($data['manufacturerPartNumber']);
            unset($data['manufacturerPartNumber']);
        } elseif (\array_key_exists('manufacturerPartNumber', $data) && $data['manufacturerPartNumber'] === null) {
            $object->setManufacturerPartNumber(null);
        }
        if (\array_key_exists('matchCode', $data) && $data['matchCode'] !== null) {
            $object->setMatchCode($data['matchCode']);
            unset($data['matchCode']);
        } elseif (\array_key_exists('matchCode', $data) && $data['matchCode'] === null) {
            $object->setMatchCode(null);
        }
        if (\array_key_exists('minimumPurchaseQuantity', $data) && $data['minimumPurchaseQuantity'] !== null) {
            $object->setMinimumPurchaseQuantity($data['minimumPurchaseQuantity']);
            unset($data['minimumPurchaseQuantity']);
        } elseif (\array_key_exists('minimumPurchaseQuantity', $data) && $data['minimumPurchaseQuantity'] === null) {
            $object->setMinimumPurchaseQuantity(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('shortDescription1', $data) && $data['shortDescription1'] !== null) {
            $object->setShortDescription1($data['shortDescription1']);
            unset($data['shortDescription1']);
        } elseif (\array_key_exists('shortDescription1', $data) && $data['shortDescription1'] === null) {
            $object->setShortDescription1(null);
        }
        if (\array_key_exists('shortDescription2', $data) && $data['shortDescription2'] !== null) {
            $object->setShortDescription2($data['shortDescription2']);
            unset($data['shortDescription2']);
        } elseif (\array_key_exists('shortDescription2', $data) && $data['shortDescription2'] === null) {
            $object->setShortDescription2(null);
        }
        if (\array_key_exists('taxRateType', $data) && $data['taxRateType'] !== null) {
            $object->setTaxRateType($data['taxRateType']);
            unset($data['taxRateType']);
        } elseif (\array_key_exists('taxRateType', $data) && $data['taxRateType'] === null) {
            $object->setTaxRateType(null);
        }
        if (\array_key_exists('unitId', $data) && $data['unitId'] !== null) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        } elseif (\array_key_exists('unitId', $data) && $data['unitId'] === null) {
            $object->setUnitId(null);
        }
        if (\array_key_exists('unitName', $data) && $data['unitName'] !== null) {
            $object->setUnitName($data['unitName']);
            unset($data['unitName']);
        } elseif (\array_key_exists('unitName', $data) && $data['unitName'] === null) {
            $object->setUnitName(null);
        }
        if (\array_key_exists('accountId', $data) && $data['accountId'] !== null) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        } elseif (\array_key_exists('accountId', $data) && $data['accountId'] === null) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('accountNumber', $data) && $data['accountNumber'] !== null) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        } elseif (\array_key_exists('accountNumber', $data) && $data['accountNumber'] === null) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('accountingCodeId', $data) && $data['accountingCodeId'] !== null) {
            $object->setAccountingCodeId($data['accountingCodeId']);
            unset($data['accountingCodeId']);
        } elseif (\array_key_exists('accountingCodeId', $data) && $data['accountingCodeId'] === null) {
            $object->setAccountingCodeId(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('applyCashDiscount', $data) && $data['applyCashDiscount'] !== null) {
            $object->setApplyCashDiscount($data['applyCashDiscount']);
            unset($data['applyCashDiscount']);
        } elseif (\array_key_exists('applyCashDiscount', $data) && $data['applyCashDiscount'] === null) {
            $object->setApplyCashDiscount(null);
        }
        if (\array_key_exists('articleAlternativeQuantities', $data) && $data['articleAlternativeQuantities'] !== null) {
            $values_1 = [];
            foreach ($data['articleAlternativeQuantities'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class, 'json', $context);
            }
            $object->setArticleAlternativeQuantities($values_1);
            unset($data['articleAlternativeQuantities']);
        } elseif (\array_key_exists('articleAlternativeQuantities', $data) && $data['articleAlternativeQuantities'] === null) {
            $object->setArticleAlternativeQuantities(null);
        }
        if (\array_key_exists('articleCalculationPrices', $data) && $data['articleCalculationPrices'] !== null) {
            $values_2 = [];
            foreach ($data['articleCalculationPrices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\ArticleCalculationPrice::class, 'json', $context);
            }
            $object->setArticleCalculationPrices($values_2);
            unset($data['articleCalculationPrices']);
        } elseif (\array_key_exists('articleCalculationPrices', $data) && $data['articleCalculationPrices'] === null) {
            $object->setArticleCalculationPrices(null);
        }
        if (\array_key_exists('articleCategoryId', $data) && $data['articleCategoryId'] !== null) {
            $object->setArticleCategoryId($data['articleCategoryId']);
            unset($data['articleCategoryId']);
        } elseif (\array_key_exists('articleCategoryId', $data) && $data['articleCategoryId'] === null) {
            $object->setArticleCategoryId(null);
        }
        if (\array_key_exists('articleGrossWeight', $data) && $data['articleGrossWeight'] !== null) {
            $object->setArticleGrossWeight($data['articleGrossWeight']);
            unset($data['articleGrossWeight']);
        } elseif (\array_key_exists('articleGrossWeight', $data) && $data['articleGrossWeight'] === null) {
            $object->setArticleGrossWeight(null);
        }
        if (\array_key_exists('articleHeight', $data) && $data['articleHeight'] !== null) {
            $object->setArticleHeight($data['articleHeight']);
            unset($data['articleHeight']);
        } elseif (\array_key_exists('articleHeight', $data) && $data['articleHeight'] === null) {
            $object->setArticleHeight(null);
        }
        if (\array_key_exists('articleImages', $data) && $data['articleImages'] !== null) {
            $values_3 = [];
            foreach ($data['articleImages'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\ArticleImage::class, 'json', $context);
            }
            $object->setArticleImages($values_3);
            unset($data['articleImages']);
        } elseif (\array_key_exists('articleImages', $data) && $data['articleImages'] === null) {
            $object->setArticleImages(null);
        }
        if (\array_key_exists('articleLength', $data) && $data['articleLength'] !== null) {
            $object->setArticleLength($data['articleLength']);
            unset($data['articleLength']);
        } elseif (\array_key_exists('articleLength', $data) && $data['articleLength'] === null) {
            $object->setArticleLength(null);
        }
        if (\array_key_exists('articleNetWeight', $data) && $data['articleNetWeight'] !== null) {
            $object->setArticleNetWeight($data['articleNetWeight']);
            unset($data['articleNetWeight']);
        } elseif (\array_key_exists('articleNetWeight', $data) && $data['articleNetWeight'] === null) {
            $object->setArticleNetWeight(null);
        }
        if (\array_key_exists('articlePrices', $data) && $data['articlePrices'] !== null) {
            $values_4 = [];
            foreach ($data['articlePrices'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class, 'json', $context);
            }
            $object->setArticlePrices($values_4);
            unset($data['articlePrices']);
        } elseif (\array_key_exists('articlePrices', $data) && $data['articlePrices'] === null) {
            $object->setArticlePrices(null);
        }
        if (\array_key_exists('articleType', $data) && $data['articleType'] !== null) {
            $object->setArticleType($data['articleType']);
            unset($data['articleType']);
        } elseif (\array_key_exists('articleType', $data) && $data['articleType'] === null) {
            $object->setArticleType(null);
        }
        if (\array_key_exists('articleWidth', $data) && $data['articleWidth'] !== null) {
            $object->setArticleWidth($data['articleWidth']);
            unset($data['articleWidth']);
        } elseif (\array_key_exists('articleWidth', $data) && $data['articleWidth'] === null) {
            $object->setArticleWidth(null);
        }
        if (\array_key_exists('availableForSalesChannels', $data) && $data['availableForSalesChannels'] !== null) {
            $values_5 = [];
            foreach ($data['availableForSalesChannels'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setAvailableForSalesChannels($values_5);
            unset($data['availableForSalesChannels']);
        } elseif (\array_key_exists('availableForSalesChannels', $data) && $data['availableForSalesChannels'] === null) {
            $object->setAvailableForSalesChannels(null);
        }
        if (\array_key_exists('availableInSale', $data) && $data['availableInSale'] !== null) {
            $object->setAvailableInSale($data['availableInSale']);
            unset($data['availableInSale']);
        } elseif (\array_key_exists('availableInSale', $data) && $data['availableInSale'] === null) {
            $object->setAvailableInSale(null);
        }
        if (\array_key_exists('averageDeliveryTime', $data) && $data['averageDeliveryTime'] !== null) {
            $object->setAverageDeliveryTime($data['averageDeliveryTime']);
            unset($data['averageDeliveryTime']);
        } elseif (\array_key_exists('averageDeliveryTime', $data) && $data['averageDeliveryTime'] === null) {
            $object->setAverageDeliveryTime(null);
        }
        if (\array_key_exists('barcode', $data) && $data['barcode'] !== null) {
            $object->setBarcode($data['barcode']);
            unset($data['barcode']);
        } elseif (\array_key_exists('barcode', $data) && $data['barcode'] === null) {
            $object->setBarcode(null);
        }
        if (\array_key_exists('batchNumberRequired', $data) && $data['batchNumberRequired'] !== null) {
            $object->setBatchNumberRequired($data['batchNumberRequired']);
            unset($data['batchNumberRequired']);
        } elseif (\array_key_exists('batchNumberRequired', $data) && $data['batchNumberRequired'] === null) {
            $object->setBatchNumberRequired(null);
        }
        if (\array_key_exists('billOfMaterialPartDeliveryPossible', $data) && $data['billOfMaterialPartDeliveryPossible'] !== null) {
            $object->setBillOfMaterialPartDeliveryPossible($data['billOfMaterialPartDeliveryPossible']);
            unset($data['billOfMaterialPartDeliveryPossible']);
        } elseif (\array_key_exists('billOfMaterialPartDeliveryPossible', $data) && $data['billOfMaterialPartDeliveryPossible'] === null) {
            $object->setBillOfMaterialPartDeliveryPossible(null);
        }
        if (\array_key_exists('catalogCode', $data) && $data['catalogCode'] !== null) {
            $object->setCatalogCode($data['catalogCode']);
            unset($data['catalogCode']);
        } elseif (\array_key_exists('catalogCode', $data) && $data['catalogCode'] === null) {
            $object->setCatalogCode(null);
        }
        if (\array_key_exists('commissionRate', $data) && $data['commissionRate'] !== null) {
            $object->setCommissionRate($data['commissionRate']);
            unset($data['commissionRate']);
        } elseif (\array_key_exists('commissionRate', $data) && $data['commissionRate'] === null) {
            $object->setCommissionRate(null);
        }
        if (\array_key_exists('contractBillingCycle', $data) && $data['contractBillingCycle'] !== null) {
            $object->setContractBillingCycle($data['contractBillingCycle']);
            unset($data['contractBillingCycle']);
        } elseif (\array_key_exists('contractBillingCycle', $data) && $data['contractBillingCycle'] === null) {
            $object->setContractBillingCycle(null);
        }
        if (\array_key_exists('contractBillingMode', $data) && $data['contractBillingMode'] !== null) {
            $object->setContractBillingMode($data['contractBillingMode']);
            unset($data['contractBillingMode']);
        } elseif (\array_key_exists('contractBillingMode', $data) && $data['contractBillingMode'] === null) {
            $object->setContractBillingMode(null);
        }
        if (\array_key_exists('countryOfOriginCode', $data) && $data['countryOfOriginCode'] !== null) {
            $object->setCountryOfOriginCode($data['countryOfOriginCode']);
            unset($data['countryOfOriginCode']);
        } elseif (\array_key_exists('countryOfOriginCode', $data) && $data['countryOfOriginCode'] === null) {
            $object->setCountryOfOriginCode(null);
        }
        if (\array_key_exists('customerArticleNumbers', $data) && $data['customerArticleNumbers'] !== null) {
            $values_6 = [];
            foreach ($data['customerArticleNumbers'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Webhubworks\WeclappApiCore\Model\CustomerSpecificArticleAttributes::class, 'json', $context);
            }
            $object->setCustomerArticleNumbers($values_6);
            unset($data['customerArticleNumbers']);
        } elseif (\array_key_exists('customerArticleNumbers', $data) && $data['customerArticleNumbers'] === null) {
            $object->setCustomerArticleNumbers(null);
        }
        if (\array_key_exists('customsDescription', $data) && $data['customsDescription'] !== null) {
            $object->setCustomsDescription($data['customsDescription']);
            unset($data['customsDescription']);
        } elseif (\array_key_exists('customsDescription', $data) && $data['customsDescription'] === null) {
            $object->setCustomsDescription(null);
        }
        if (\array_key_exists('customsTariffNumber', $data) && $data['customsTariffNumber'] !== null) {
            $object->setCustomsTariffNumber($data['customsTariffNumber']);
            unset($data['customsTariffNumber']);
        } elseif (\array_key_exists('customsTariffNumber', $data) && $data['customsTariffNumber'] === null) {
            $object->setCustomsTariffNumber(null);
        }
        if (\array_key_exists('customsTariffNumberId', $data) && $data['customsTariffNumberId'] !== null) {
            $object->setCustomsTariffNumberId($data['customsTariffNumberId']);
            unset($data['customsTariffNumberId']);
        } elseif (\array_key_exists('customsTariffNumberId', $data) && $data['customsTariffNumberId'] === null) {
            $object->setCustomsTariffNumberId(null);
        }
        if (\array_key_exists('defaultLoadingEquipmentIdentifierId', $data) && $data['defaultLoadingEquipmentIdentifierId'] !== null) {
            $object->setDefaultLoadingEquipmentIdentifierId($data['defaultLoadingEquipmentIdentifierId']);
            unset($data['defaultLoadingEquipmentIdentifierId']);
        } elseif (\array_key_exists('defaultLoadingEquipmentIdentifierId', $data) && $data['defaultLoadingEquipmentIdentifierId'] === null) {
            $object->setDefaultLoadingEquipmentIdentifierId(null);
        }
        if (\array_key_exists('defaultPriceCalculationType', $data) && $data['defaultPriceCalculationType'] !== null) {
            $object->setDefaultPriceCalculationType($data['defaultPriceCalculationType']);
            unset($data['defaultPriceCalculationType']);
        } elseif (\array_key_exists('defaultPriceCalculationType', $data) && $data['defaultPriceCalculationType'] === null) {
            $object->setDefaultPriceCalculationType(null);
        }
        if (\array_key_exists('defaultStoragePlaces', $data) && $data['defaultStoragePlaces'] !== null) {
            $values_7 = [];
            foreach ($data['defaultStoragePlaces'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, \Webhubworks\WeclappApiCore\Model\OnlyId::class, 'json', $context);
            }
            $object->setDefaultStoragePlaces($values_7);
            unset($data['defaultStoragePlaces']);
        } elseif (\array_key_exists('defaultStoragePlaces', $data) && $data['defaultStoragePlaces'] === null) {
            $object->setDefaultStoragePlaces(null);
        }
        if (\array_key_exists('defineIndividualTaskTemplates', $data) && $data['defineIndividualTaskTemplates'] !== null) {
            $object->setDefineIndividualTaskTemplates($data['defineIndividualTaskTemplates']);
            unset($data['defineIndividualTaskTemplates']);
        } elseif (\array_key_exists('defineIndividualTaskTemplates', $data) && $data['defineIndividualTaskTemplates'] === null) {
            $object->setDefineIndividualTaskTemplates(null);
        }
        if (\array_key_exists('expenseAccountId', $data) && $data['expenseAccountId'] !== null) {
            $object->setExpenseAccountId($data['expenseAccountId']);
            unset($data['expenseAccountId']);
        } elseif (\array_key_exists('expenseAccountId', $data) && $data['expenseAccountId'] === null) {
            $object->setExpenseAccountId(null);
        }
        if (\array_key_exists('expenseAccountNumber', $data) && $data['expenseAccountNumber'] !== null) {
            $object->setExpenseAccountNumber($data['expenseAccountNumber']);
            unset($data['expenseAccountNumber']);
        } elseif (\array_key_exists('expenseAccountNumber', $data) && $data['expenseAccountNumber'] === null) {
            $object->setExpenseAccountNumber(null);
        }
        if (\array_key_exists('expirationDays', $data) && $data['expirationDays'] !== null) {
            $object->setExpirationDays($data['expirationDays']);
            unset($data['expirationDays']);
        } elseif (\array_key_exists('expirationDays', $data) && $data['expirationDays'] === null) {
            $object->setExpirationDays(null);
        }
        if (\array_key_exists('invoicingType', $data) && $data['invoicingType'] !== null) {
            $object->setInvoicingType($data['invoicingType']);
            unset($data['invoicingType']);
        } elseif (\array_key_exists('invoicingType', $data) && $data['invoicingType'] === null) {
            $object->setInvoicingType(null);
        }
        if (\array_key_exists('launchDate', $data) && $data['launchDate'] !== null) {
            $object->setLaunchDate($data['launchDate']);
            unset($data['launchDate']);
        } elseif (\array_key_exists('launchDate', $data) && $data['launchDate'] === null) {
            $object->setLaunchDate(null);
        }
        if (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] !== null) {
            $object->setLoadingEquipmentArticleId($data['loadingEquipmentArticleId']);
            unset($data['loadingEquipmentArticleId']);
        } elseif (\array_key_exists('loadingEquipmentArticleId', $data) && $data['loadingEquipmentArticleId'] === null) {
            $object->setLoadingEquipmentArticleId(null);
        }
        if (\array_key_exists('longText', $data) && $data['longText'] !== null) {
            $object->setLongText($data['longText']);
            unset($data['longText']);
        } elseif (\array_key_exists('longText', $data) && $data['longText'] === null) {
            $object->setLongText(null);
        }
        if (\array_key_exists('lowLevelCode', $data) && $data['lowLevelCode'] !== null) {
            $object->setLowLevelCode($data['lowLevelCode']);
            unset($data['lowLevelCode']);
        } elseif (\array_key_exists('lowLevelCode', $data) && $data['lowLevelCode'] === null) {
            $object->setLowLevelCode(null);
        }
        if (\array_key_exists('manufacturerId', $data) && $data['manufacturerId'] !== null) {
            $object->setManufacturerId($data['manufacturerId']);
            unset($data['manufacturerId']);
        } elseif (\array_key_exists('manufacturerId', $data) && $data['manufacturerId'] === null) {
            $object->setManufacturerId(null);
        }
        if (\array_key_exists('manufacturerName', $data) && $data['manufacturerName'] !== null) {
            $object->setManufacturerName($data['manufacturerName']);
            unset($data['manufacturerName']);
        } elseif (\array_key_exists('manufacturerName', $data) && $data['manufacturerName'] === null) {
            $object->setManufacturerName(null);
        }
        if (\array_key_exists('marginCalculationPriceType', $data) && $data['marginCalculationPriceType'] !== null) {
            $object->setMarginCalculationPriceType($data['marginCalculationPriceType']);
            unset($data['marginCalculationPriceType']);
        } elseif (\array_key_exists('marginCalculationPriceType', $data) && $data['marginCalculationPriceType'] === null) {
            $object->setMarginCalculationPriceType(null);
        }
        if (\array_key_exists('minimumStockQuantity', $data) && $data['minimumStockQuantity'] !== null) {
            $object->setMinimumStockQuantity($data['minimumStockQuantity']);
            unset($data['minimumStockQuantity']);
        } elseif (\array_key_exists('minimumStockQuantity', $data) && $data['minimumStockQuantity'] === null) {
            $object->setMinimumStockQuantity(null);
        }
        if (\array_key_exists('packagingQuantity', $data) && $data['packagingQuantity'] !== null) {
            $object->setPackagingQuantity($data['packagingQuantity']);
            unset($data['packagingQuantity']);
        } elseif (\array_key_exists('packagingQuantity', $data) && $data['packagingQuantity'] === null) {
            $object->setPackagingQuantity(null);
        }
        if (\array_key_exists('packagingUnitBaseArticleId', $data) && $data['packagingUnitBaseArticleId'] !== null) {
            $object->setPackagingUnitBaseArticleId($data['packagingUnitBaseArticleId']);
            unset($data['packagingUnitBaseArticleId']);
        } elseif (\array_key_exists('packagingUnitBaseArticleId', $data) && $data['packagingUnitBaseArticleId'] === null) {
            $object->setPackagingUnitBaseArticleId(null);
        }
        if (\array_key_exists('packagingUnitParentArticleId', $data) && $data['packagingUnitParentArticleId'] !== null) {
            $object->setPackagingUnitParentArticleId($data['packagingUnitParentArticleId']);
            unset($data['packagingUnitParentArticleId']);
        } elseif (\array_key_exists('packagingUnitParentArticleId', $data) && $data['packagingUnitParentArticleId'] === null) {
            $object->setPackagingUnitParentArticleId(null);
        }
        if (\array_key_exists('plannedWorkingTimePerUnit', $data) && $data['plannedWorkingTimePerUnit'] !== null) {
            $object->setPlannedWorkingTimePerUnit($data['plannedWorkingTimePerUnit']);
            unset($data['plannedWorkingTimePerUnit']);
        } elseif (\array_key_exists('plannedWorkingTimePerUnit', $data) && $data['plannedWorkingTimePerUnit'] === null) {
            $object->setPlannedWorkingTimePerUnit(null);
        }
        if (\array_key_exists('priceCalculationParameters', $data) && $data['priceCalculationParameters'] !== null) {
            $values_8 = [];
            foreach ($data['priceCalculationParameters'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class, 'json', $context);
            }
            $object->setPriceCalculationParameters($values_8);
            unset($data['priceCalculationParameters']);
        } elseif (\array_key_exists('priceCalculationParameters', $data) && $data['priceCalculationParameters'] === null) {
            $object->setPriceCalculationParameters(null);
        }
        if (\array_key_exists('primarySupplySourceId', $data) && $data['primarySupplySourceId'] !== null) {
            $object->setPrimarySupplySourceId($data['primarySupplySourceId']);
            unset($data['primarySupplySourceId']);
        } elseif (\array_key_exists('primarySupplySourceId', $data) && $data['primarySupplySourceId'] === null) {
            $object->setPrimarySupplySourceId(null);
        }
        if (\array_key_exists('procurementLeadDays', $data) && $data['procurementLeadDays'] !== null) {
            $object->setProcurementLeadDays($data['procurementLeadDays']);
            unset($data['procurementLeadDays']);
        } elseif (\array_key_exists('procurementLeadDays', $data) && $data['procurementLeadDays'] === null) {
            $object->setProcurementLeadDays(null);
        }
        if (\array_key_exists('producerType', $data) && $data['producerType'] !== null) {
            $object->setProducerType($data['producerType']);
            unset($data['producerType']);
        } elseif (\array_key_exists('producerType', $data) && $data['producerType'] === null) {
            $object->setProducerType(null);
        }
        if (\array_key_exists('productionArticle', $data) && $data['productionArticle'] !== null) {
            $object->setProductionArticle($data['productionArticle']);
            unset($data['productionArticle']);
        } elseif (\array_key_exists('productionArticle', $data) && $data['productionArticle'] === null) {
            $object->setProductionArticle(null);
        }
        if (\array_key_exists('productionBillOfMaterialItems', $data) && $data['productionBillOfMaterialItems'] !== null) {
            $values_9 = [];
            foreach ($data['productionBillOfMaterialItems'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, \Webhubworks\WeclappApiCore\Model\BillOfMaterial::class, 'json', $context);
            }
            $object->setProductionBillOfMaterialItems($values_9);
            unset($data['productionBillOfMaterialItems']);
        } elseif (\array_key_exists('productionBillOfMaterialItems', $data) && $data['productionBillOfMaterialItems'] === null) {
            $object->setProductionBillOfMaterialItems(null);
        }
        if (\array_key_exists('productionConfigurationRule', $data) && $data['productionConfigurationRule'] !== null) {
            $object->setProductionConfigurationRule($data['productionConfigurationRule']);
            unset($data['productionConfigurationRule']);
        } elseif (\array_key_exists('productionConfigurationRule', $data) && $data['productionConfigurationRule'] === null) {
            $object->setProductionConfigurationRule(null);
        }
        if (\array_key_exists('purchaseCostCenterId', $data) && $data['purchaseCostCenterId'] !== null) {
            $object->setPurchaseCostCenterId($data['purchaseCostCenterId']);
            unset($data['purchaseCostCenterId']);
        } elseif (\array_key_exists('purchaseCostCenterId', $data) && $data['purchaseCostCenterId'] === null) {
            $object->setPurchaseCostCenterId(null);
        }
        if (\array_key_exists('purchaseCostCenterNumber', $data) && $data['purchaseCostCenterNumber'] !== null) {
            $object->setPurchaseCostCenterNumber($data['purchaseCostCenterNumber']);
            unset($data['purchaseCostCenterNumber']);
        } elseif (\array_key_exists('purchaseCostCenterNumber', $data) && $data['purchaseCostCenterNumber'] === null) {
            $object->setPurchaseCostCenterNumber(null);
        }
        if (\array_key_exists('quantityConversions', $data) && $data['quantityConversions'] !== null) {
            $values_10 = [];
            foreach ($data['quantityConversions'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, \Webhubworks\WeclappApiCore\Model\QuantityConversion::class, 'json', $context);
            }
            $object->setQuantityConversions($values_10);
            unset($data['quantityConversions']);
        } elseif (\array_key_exists('quantityConversions', $data) && $data['quantityConversions'] === null) {
            $object->setQuantityConversions(null);
        }
        if (\array_key_exists('ratingId', $data) && $data['ratingId'] !== null) {
            $object->setRatingId($data['ratingId']);
            unset($data['ratingId']);
        } elseif (\array_key_exists('ratingId', $data) && $data['ratingId'] === null) {
            $object->setRatingId(null);
        }
        if (\array_key_exists('ratingName', $data) && $data['ratingName'] !== null) {
            $object->setRatingName($data['ratingName']);
            unset($data['ratingName']);
        } elseif (\array_key_exists('ratingName', $data) && $data['ratingName'] === null) {
            $object->setRatingName(null);
        }
        if (\array_key_exists('recordItemGroupName', $data) && $data['recordItemGroupName'] !== null) {
            $object->setRecordItemGroupName($data['recordItemGroupName']);
            unset($data['recordItemGroupName']);
        } elseif (\array_key_exists('recordItemGroupName', $data) && $data['recordItemGroupName'] === null) {
            $object->setRecordItemGroupName(null);
        }
        if (\array_key_exists('safetyStockDays', $data) && $data['safetyStockDays'] !== null) {
            $object->setSafetyStockDays($data['safetyStockDays']);
            unset($data['safetyStockDays']);
        } elseif (\array_key_exists('safetyStockDays', $data) && $data['safetyStockDays'] === null) {
            $object->setSafetyStockDays(null);
        }
        if (\array_key_exists('salesBillOfMaterialItems', $data) && $data['salesBillOfMaterialItems'] !== null) {
            $values_11 = [];
            foreach ($data['salesBillOfMaterialItems'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, \Webhubworks\WeclappApiCore\Model\SalesBillOfMaterialArticleItem::class, 'json', $context);
            }
            $object->setSalesBillOfMaterialItems($values_11);
            unset($data['salesBillOfMaterialItems']);
        } elseif (\array_key_exists('salesBillOfMaterialItems', $data) && $data['salesBillOfMaterialItems'] === null) {
            $object->setSalesBillOfMaterialItems(null);
        }
        if (\array_key_exists('salesCostCenterId', $data) && $data['salesCostCenterId'] !== null) {
            $object->setSalesCostCenterId($data['salesCostCenterId']);
            unset($data['salesCostCenterId']);
        } elseif (\array_key_exists('salesCostCenterId', $data) && $data['salesCostCenterId'] === null) {
            $object->setSalesCostCenterId(null);
        }
        if (\array_key_exists('salesCostCenterNumber', $data) && $data['salesCostCenterNumber'] !== null) {
            $object->setSalesCostCenterNumber($data['salesCostCenterNumber']);
            unset($data['salesCostCenterNumber']);
        } elseif (\array_key_exists('salesCostCenterNumber', $data) && $data['salesCostCenterNumber'] === null) {
            $object->setSalesCostCenterNumber(null);
        }
        if (\array_key_exists('sellByDate', $data) && $data['sellByDate'] !== null) {
            $object->setSellByDate($data['sellByDate']);
            unset($data['sellByDate']);
        } elseif (\array_key_exists('sellByDate', $data) && $data['sellByDate'] === null) {
            $object->setSellByDate(null);
        }
        if (\array_key_exists('sellFromDate', $data) && $data['sellFromDate'] !== null) {
            $object->setSellFromDate($data['sellFromDate']);
            unset($data['sellFromDate']);
        } elseif (\array_key_exists('sellFromDate', $data) && $data['sellFromDate'] === null) {
            $object->setSellFromDate(null);
        }
        if (\array_key_exists('serialNumberRequired', $data) && $data['serialNumberRequired'] !== null) {
            $object->setSerialNumberRequired($data['serialNumberRequired']);
            unset($data['serialNumberRequired']);
        } elseif (\array_key_exists('serialNumberRequired', $data) && $data['serialNumberRequired'] === null) {
            $object->setSerialNumberRequired(null);
        }
        if (\array_key_exists('showOnDeliveryNote', $data) && $data['showOnDeliveryNote'] !== null) {
            $object->setShowOnDeliveryNote($data['showOnDeliveryNote']);
            unset($data['showOnDeliveryNote']);
        } elseif (\array_key_exists('showOnDeliveryNote', $data) && $data['showOnDeliveryNote'] === null) {
            $object->setShowOnDeliveryNote(null);
        }
        if (\array_key_exists('statusId', $data) && $data['statusId'] !== null) {
            $object->setStatusId($data['statusId']);
            unset($data['statusId']);
        } elseif (\array_key_exists('statusId', $data) && $data['statusId'] === null) {
            $object->setStatusId(null);
        }
        if (\array_key_exists('supplySources', $data) && $data['supplySources'] !== null) {
            $values_12 = [];
            foreach ($data['supplySources'] as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, \Webhubworks\WeclappApiCore\Model\SupplySource::class, 'json', $context);
            }
            $object->setSupplySources($values_12);
            unset($data['supplySources']);
        } elseif (\array_key_exists('supplySources', $data) && $data['supplySources'] === null) {
            $object->setSupplySources(null);
        }
        if (\array_key_exists('supportUntilDate', $data) && $data['supportUntilDate'] !== null) {
            $object->setSupportUntilDate($data['supportUntilDate']);
            unset($data['supportUntilDate']);
        } elseif (\array_key_exists('supportUntilDate', $data) && $data['supportUntilDate'] === null) {
            $object->setSupportUntilDate(null);
        }
        if (\array_key_exists('systemCode', $data) && $data['systemCode'] !== null) {
            $object->setSystemCode($data['systemCode']);
            unset($data['systemCode']);
        } elseif (\array_key_exists('systemCode', $data) && $data['systemCode'] === null) {
            $object->setSystemCode(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_13 = [];
            foreach ($data['tags'] as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setTags($values_13);
            unset($data['tags']);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('targetStockQuantity', $data) && $data['targetStockQuantity'] !== null) {
            $object->setTargetStockQuantity($data['targetStockQuantity']);
            unset($data['targetStockQuantity']);
        } elseif (\array_key_exists('targetStockQuantity', $data) && $data['targetStockQuantity'] === null) {
            $object->setTargetStockQuantity(null);
        }
        if (\array_key_exists('useAvailableForSalesChannels', $data) && $data['useAvailableForSalesChannels'] !== null) {
            $object->setUseAvailableForSalesChannels($data['useAvailableForSalesChannels']);
            unset($data['useAvailableForSalesChannels']);
        } elseif (\array_key_exists('useAvailableForSalesChannels', $data) && $data['useAvailableForSalesChannels'] === null) {
            $object->setUseAvailableForSalesChannels(null);
        }
        if (\array_key_exists('useSalesBillOfMaterialItemPrices', $data) && $data['useSalesBillOfMaterialItemPrices'] !== null) {
            $object->setUseSalesBillOfMaterialItemPrices($data['useSalesBillOfMaterialItemPrices']);
            unset($data['useSalesBillOfMaterialItemPrices']);
        } elseif (\array_key_exists('useSalesBillOfMaterialItemPrices', $data) && $data['useSalesBillOfMaterialItemPrices'] === null) {
            $object->setUseSalesBillOfMaterialItemPrices(null);
        }
        if (\array_key_exists('useSalesBillOfMaterialItemPricesForPurchase', $data) && $data['useSalesBillOfMaterialItemPricesForPurchase'] !== null) {
            $object->setUseSalesBillOfMaterialItemPricesForPurchase($data['useSalesBillOfMaterialItemPricesForPurchase']);
            unset($data['useSalesBillOfMaterialItemPricesForPurchase']);
        } elseif (\array_key_exists('useSalesBillOfMaterialItemPricesForPurchase', $data) && $data['useSalesBillOfMaterialItemPricesForPurchase'] === null) {
            $object->setUseSalesBillOfMaterialItemPricesForPurchase(null);
        }
        if (\array_key_exists('useSalesBillOfMaterialSubitemCosts', $data) && $data['useSalesBillOfMaterialSubitemCosts'] !== null) {
            $object->setUseSalesBillOfMaterialSubitemCosts($data['useSalesBillOfMaterialSubitemCosts']);
            unset($data['useSalesBillOfMaterialSubitemCosts']);
        } elseif (\array_key_exists('useSalesBillOfMaterialSubitemCosts', $data) && $data['useSalesBillOfMaterialSubitemCosts'] === null) {
            $object->setUseSalesBillOfMaterialSubitemCosts(null);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('customAttributes') && $data->getCustomAttributes() !== null) {
            $values = [];
            foreach ($data->getCustomAttributes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleNumber') && $data->getArticleNumber() !== null) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ean') && $data->getEan() !== null) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('fixedPurchaseQuantity') && $data->getFixedPurchaseQuantity() !== null) {
            $dataArray['fixedPurchaseQuantity'] = $data->getFixedPurchaseQuantity();
        }
        if ($data->isInitialized('internalNote') && $data->getInternalNote() !== null) {
            $dataArray['internalNote'] = $data->getInternalNote();
        }
        if ($data->isInitialized('manufacturerPartNumber') && $data->getManufacturerPartNumber() !== null) {
            $dataArray['manufacturerPartNumber'] = $data->getManufacturerPartNumber();
        }
        if ($data->isInitialized('matchCode') && $data->getMatchCode() !== null) {
            $dataArray['matchCode'] = $data->getMatchCode();
        }
        if ($data->isInitialized('minimumPurchaseQuantity') && $data->getMinimumPurchaseQuantity() !== null) {
            $dataArray['minimumPurchaseQuantity'] = $data->getMinimumPurchaseQuantity();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shortDescription1') && $data->getShortDescription1() !== null) {
            $dataArray['shortDescription1'] = $data->getShortDescription1();
        }
        if ($data->isInitialized('shortDescription2') && $data->getShortDescription2() !== null) {
            $dataArray['shortDescription2'] = $data->getShortDescription2();
        }
        if ($data->isInitialized('taxRateType') && $data->getTaxRateType() !== null) {
            $dataArray['taxRateType'] = $data->getTaxRateType();
        }
        if ($data->isInitialized('unitId') && $data->getUnitId() !== null) {
            $dataArray['unitId'] = $data->getUnitId();
        }
        if ($data->isInitialized('unitName') && $data->getUnitName() !== null) {
            $dataArray['unitName'] = $data->getUnitName();
        }
        if ($data->isInitialized('accountId') && $data->getAccountId() !== null) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('accountingCodeId') && $data->getAccountingCodeId() !== null) {
            $dataArray['accountingCodeId'] = $data->getAccountingCodeId();
        }
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('applyCashDiscount') && $data->getApplyCashDiscount() !== null) {
            $dataArray['applyCashDiscount'] = $data->getApplyCashDiscount();
        }
        if ($data->isInitialized('articleAlternativeQuantities') && $data->getArticleAlternativeQuantities() !== null) {
            $values_1 = [];
            foreach ($data->getArticleAlternativeQuantities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['articleAlternativeQuantities'] = $values_1;
        }
        if ($data->isInitialized('articleCalculationPrices') && $data->getArticleCalculationPrices() !== null) {
            $values_2 = [];
            foreach ($data->getArticleCalculationPrices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['articleCalculationPrices'] = $values_2;
        }
        if ($data->isInitialized('articleCategoryId') && $data->getArticleCategoryId() !== null) {
            $dataArray['articleCategoryId'] = $data->getArticleCategoryId();
        }
        if ($data->isInitialized('articleGrossWeight') && $data->getArticleGrossWeight() !== null) {
            $dataArray['articleGrossWeight'] = $data->getArticleGrossWeight();
        }
        if ($data->isInitialized('articleHeight') && $data->getArticleHeight() !== null) {
            $dataArray['articleHeight'] = $data->getArticleHeight();
        }
        if ($data->isInitialized('articleImages') && $data->getArticleImages() !== null) {
            $values_3 = [];
            foreach ($data->getArticleImages() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['articleImages'] = $values_3;
        }
        if ($data->isInitialized('articleLength') && $data->getArticleLength() !== null) {
            $dataArray['articleLength'] = $data->getArticleLength();
        }
        if ($data->isInitialized('articleNetWeight') && $data->getArticleNetWeight() !== null) {
            $dataArray['articleNetWeight'] = $data->getArticleNetWeight();
        }
        if ($data->isInitialized('articlePrices') && $data->getArticlePrices() !== null) {
            $values_4 = [];
            foreach ($data->getArticlePrices() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $dataArray['articlePrices'] = $values_4;
        }
        if ($data->isInitialized('articleType') && $data->getArticleType() !== null) {
            $dataArray['articleType'] = $data->getArticleType();
        }
        if ($data->isInitialized('articleWidth') && $data->getArticleWidth() !== null) {
            $dataArray['articleWidth'] = $data->getArticleWidth();
        }
        if ($data->isInitialized('availableForSalesChannels') && $data->getAvailableForSalesChannels() !== null) {
            $values_5 = [];
            foreach ($data->getAvailableForSalesChannels() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['availableForSalesChannels'] = $values_5;
        }
        if ($data->isInitialized('availableInSale') && $data->getAvailableInSale() !== null) {
            $dataArray['availableInSale'] = $data->getAvailableInSale();
        }
        if ($data->isInitialized('averageDeliveryTime') && $data->getAverageDeliveryTime() !== null) {
            $dataArray['averageDeliveryTime'] = $data->getAverageDeliveryTime();
        }
        if ($data->isInitialized('barcode') && $data->getBarcode() !== null) {
            $dataArray['barcode'] = $data->getBarcode();
        }
        if ($data->isInitialized('batchNumberRequired') && $data->getBatchNumberRequired() !== null) {
            $dataArray['batchNumberRequired'] = $data->getBatchNumberRequired();
        }
        if ($data->isInitialized('billOfMaterialPartDeliveryPossible') && $data->getBillOfMaterialPartDeliveryPossible() !== null) {
            $dataArray['billOfMaterialPartDeliveryPossible'] = $data->getBillOfMaterialPartDeliveryPossible();
        }
        if ($data->isInitialized('catalogCode') && $data->getCatalogCode() !== null) {
            $dataArray['catalogCode'] = $data->getCatalogCode();
        }
        if ($data->isInitialized('commissionRate') && $data->getCommissionRate() !== null) {
            $dataArray['commissionRate'] = $data->getCommissionRate();
        }
        if ($data->isInitialized('contractBillingCycle') && $data->getContractBillingCycle() !== null) {
            $dataArray['contractBillingCycle'] = $data->getContractBillingCycle();
        }
        if ($data->isInitialized('contractBillingMode') && $data->getContractBillingMode() !== null) {
            $dataArray['contractBillingMode'] = $data->getContractBillingMode();
        }
        if ($data->isInitialized('countryOfOriginCode') && $data->getCountryOfOriginCode() !== null) {
            $dataArray['countryOfOriginCode'] = $data->getCountryOfOriginCode();
        }
        if ($data->isInitialized('customerArticleNumbers') && $data->getCustomerArticleNumbers() !== null) {
            $values_6 = [];
            foreach ($data->getCustomerArticleNumbers() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['customerArticleNumbers'] = $values_6;
        }
        if ($data->isInitialized('customsDescription') && $data->getCustomsDescription() !== null) {
            $dataArray['customsDescription'] = $data->getCustomsDescription();
        }
        if ($data->isInitialized('customsTariffNumber') && $data->getCustomsTariffNumber() !== null) {
            $dataArray['customsTariffNumber'] = $data->getCustomsTariffNumber();
        }
        if ($data->isInitialized('customsTariffNumberId') && $data->getCustomsTariffNumberId() !== null) {
            $dataArray['customsTariffNumberId'] = $data->getCustomsTariffNumberId();
        }
        if ($data->isInitialized('defaultLoadingEquipmentIdentifierId') && $data->getDefaultLoadingEquipmentIdentifierId() !== null) {
            $dataArray['defaultLoadingEquipmentIdentifierId'] = $data->getDefaultLoadingEquipmentIdentifierId();
        }
        if ($data->isInitialized('defaultPriceCalculationType') && $data->getDefaultPriceCalculationType() !== null) {
            $dataArray['defaultPriceCalculationType'] = $data->getDefaultPriceCalculationType();
        }
        if ($data->isInitialized('defaultStoragePlaces') && $data->getDefaultStoragePlaces() !== null) {
            $values_7 = [];
            foreach ($data->getDefaultStoragePlaces() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $dataArray['defaultStoragePlaces'] = $values_7;
        }
        if ($data->isInitialized('defineIndividualTaskTemplates') && $data->getDefineIndividualTaskTemplates() !== null) {
            $dataArray['defineIndividualTaskTemplates'] = $data->getDefineIndividualTaskTemplates();
        }
        if ($data->isInitialized('expenseAccountId') && $data->getExpenseAccountId() !== null) {
            $dataArray['expenseAccountId'] = $data->getExpenseAccountId();
        }
        if ($data->isInitialized('expenseAccountNumber') && $data->getExpenseAccountNumber() !== null) {
            $dataArray['expenseAccountNumber'] = $data->getExpenseAccountNumber();
        }
        if ($data->isInitialized('expirationDays') && $data->getExpirationDays() !== null) {
            $dataArray['expirationDays'] = $data->getExpirationDays();
        }
        if ($data->isInitialized('invoicingType') && $data->getInvoicingType() !== null) {
            $dataArray['invoicingType'] = $data->getInvoicingType();
        }
        if ($data->isInitialized('launchDate') && $data->getLaunchDate() !== null) {
            $dataArray['launchDate'] = $data->getLaunchDate();
        }
        if ($data->isInitialized('loadingEquipmentArticleId') && $data->getLoadingEquipmentArticleId() !== null) {
            $dataArray['loadingEquipmentArticleId'] = $data->getLoadingEquipmentArticleId();
        }
        if ($data->isInitialized('longText') && $data->getLongText() !== null) {
            $dataArray['longText'] = $data->getLongText();
        }
        if ($data->isInitialized('lowLevelCode') && $data->getLowLevelCode() !== null) {
            $dataArray['lowLevelCode'] = $data->getLowLevelCode();
        }
        if ($data->isInitialized('manufacturerId') && $data->getManufacturerId() !== null) {
            $dataArray['manufacturerId'] = $data->getManufacturerId();
        }
        if ($data->isInitialized('manufacturerName') && $data->getManufacturerName() !== null) {
            $dataArray['manufacturerName'] = $data->getManufacturerName();
        }
        if ($data->isInitialized('marginCalculationPriceType') && $data->getMarginCalculationPriceType() !== null) {
            $dataArray['marginCalculationPriceType'] = $data->getMarginCalculationPriceType();
        }
        if ($data->isInitialized('minimumStockQuantity') && $data->getMinimumStockQuantity() !== null) {
            $dataArray['minimumStockQuantity'] = $data->getMinimumStockQuantity();
        }
        if ($data->isInitialized('packagingQuantity') && $data->getPackagingQuantity() !== null) {
            $dataArray['packagingQuantity'] = $data->getPackagingQuantity();
        }
        if ($data->isInitialized('packagingUnitBaseArticleId') && $data->getPackagingUnitBaseArticleId() !== null) {
            $dataArray['packagingUnitBaseArticleId'] = $data->getPackagingUnitBaseArticleId();
        }
        if ($data->isInitialized('packagingUnitParentArticleId') && $data->getPackagingUnitParentArticleId() !== null) {
            $dataArray['packagingUnitParentArticleId'] = $data->getPackagingUnitParentArticleId();
        }
        if ($data->isInitialized('plannedWorkingTimePerUnit') && $data->getPlannedWorkingTimePerUnit() !== null) {
            $dataArray['plannedWorkingTimePerUnit'] = $data->getPlannedWorkingTimePerUnit();
        }
        if ($data->isInitialized('priceCalculationParameters') && $data->getPriceCalculationParameters() !== null) {
            $values_8 = [];
            foreach ($data->getPriceCalculationParameters() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $dataArray['priceCalculationParameters'] = $values_8;
        }
        if ($data->isInitialized('primarySupplySourceId') && $data->getPrimarySupplySourceId() !== null) {
            $dataArray['primarySupplySourceId'] = $data->getPrimarySupplySourceId();
        }
        if ($data->isInitialized('procurementLeadDays') && $data->getProcurementLeadDays() !== null) {
            $dataArray['procurementLeadDays'] = $data->getProcurementLeadDays();
        }
        if ($data->isInitialized('producerType') && $data->getProducerType() !== null) {
            $dataArray['producerType'] = $data->getProducerType();
        }
        if ($data->isInitialized('productionArticle') && $data->getProductionArticle() !== null) {
            $dataArray['productionArticle'] = $data->getProductionArticle();
        }
        if ($data->isInitialized('productionBillOfMaterialItems') && $data->getProductionBillOfMaterialItems() !== null) {
            $values_9 = [];
            foreach ($data->getProductionBillOfMaterialItems() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $dataArray['productionBillOfMaterialItems'] = $values_9;
        }
        if ($data->isInitialized('productionConfigurationRule') && $data->getProductionConfigurationRule() !== null) {
            $dataArray['productionConfigurationRule'] = $data->getProductionConfigurationRule();
        }
        if ($data->isInitialized('purchaseCostCenterId') && $data->getPurchaseCostCenterId() !== null) {
            $dataArray['purchaseCostCenterId'] = $data->getPurchaseCostCenterId();
        }
        if ($data->isInitialized('purchaseCostCenterNumber') && $data->getPurchaseCostCenterNumber() !== null) {
            $dataArray['purchaseCostCenterNumber'] = $data->getPurchaseCostCenterNumber();
        }
        if ($data->isInitialized('quantityConversions') && $data->getQuantityConversions() !== null) {
            $values_10 = [];
            foreach ($data->getQuantityConversions() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $dataArray['quantityConversions'] = $values_10;
        }
        if ($data->isInitialized('ratingId') && $data->getRatingId() !== null) {
            $dataArray['ratingId'] = $data->getRatingId();
        }
        if ($data->isInitialized('ratingName') && $data->getRatingName() !== null) {
            $dataArray['ratingName'] = $data->getRatingName();
        }
        if ($data->isInitialized('recordItemGroupName') && $data->getRecordItemGroupName() !== null) {
            $dataArray['recordItemGroupName'] = $data->getRecordItemGroupName();
        }
        if ($data->isInitialized('safetyStockDays') && $data->getSafetyStockDays() !== null) {
            $dataArray['safetyStockDays'] = $data->getSafetyStockDays();
        }
        if ($data->isInitialized('salesBillOfMaterialItems') && $data->getSalesBillOfMaterialItems() !== null) {
            $values_11 = [];
            foreach ($data->getSalesBillOfMaterialItems() as $value_11) {
                $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $dataArray['salesBillOfMaterialItems'] = $values_11;
        }
        if ($data->isInitialized('salesCostCenterId') && $data->getSalesCostCenterId() !== null) {
            $dataArray['salesCostCenterId'] = $data->getSalesCostCenterId();
        }
        if ($data->isInitialized('salesCostCenterNumber') && $data->getSalesCostCenterNumber() !== null) {
            $dataArray['salesCostCenterNumber'] = $data->getSalesCostCenterNumber();
        }
        if ($data->isInitialized('sellByDate') && $data->getSellByDate() !== null) {
            $dataArray['sellByDate'] = $data->getSellByDate();
        }
        if ($data->isInitialized('sellFromDate') && $data->getSellFromDate() !== null) {
            $dataArray['sellFromDate'] = $data->getSellFromDate();
        }
        if ($data->isInitialized('serialNumberRequired') && $data->getSerialNumberRequired() !== null) {
            $dataArray['serialNumberRequired'] = $data->getSerialNumberRequired();
        }
        if ($data->isInitialized('showOnDeliveryNote') && $data->getShowOnDeliveryNote() !== null) {
            $dataArray['showOnDeliveryNote'] = $data->getShowOnDeliveryNote();
        }
        if ($data->isInitialized('statusId') && $data->getStatusId() !== null) {
            $dataArray['statusId'] = $data->getStatusId();
        }
        if ($data->isInitialized('supplySources') && $data->getSupplySources() !== null) {
            $values_12 = [];
            foreach ($data->getSupplySources() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $dataArray['supplySources'] = $values_12;
        }
        if ($data->isInitialized('supportUntilDate') && $data->getSupportUntilDate() !== null) {
            $dataArray['supportUntilDate'] = $data->getSupportUntilDate();
        }
        if ($data->isInitialized('systemCode') && $data->getSystemCode() !== null) {
            $dataArray['systemCode'] = $data->getSystemCode();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_13 = [];
            foreach ($data->getTags() as $value_13) {
                $values_13[] = $value_13;
            }
            $dataArray['tags'] = $values_13;
        }
        if ($data->isInitialized('targetStockQuantity') && $data->getTargetStockQuantity() !== null) {
            $dataArray['targetStockQuantity'] = $data->getTargetStockQuantity();
        }
        if ($data->isInitialized('useAvailableForSalesChannels') && $data->getUseAvailableForSalesChannels() !== null) {
            $dataArray['useAvailableForSalesChannels'] = $data->getUseAvailableForSalesChannels();
        }
        if ($data->isInitialized('useSalesBillOfMaterialItemPrices') && $data->getUseSalesBillOfMaterialItemPrices() !== null) {
            $dataArray['useSalesBillOfMaterialItemPrices'] = $data->getUseSalesBillOfMaterialItemPrices();
        }
        if ($data->isInitialized('useSalesBillOfMaterialItemPricesForPurchase') && $data->getUseSalesBillOfMaterialItemPricesForPurchase() !== null) {
            $dataArray['useSalesBillOfMaterialItemPricesForPurchase'] = $data->getUseSalesBillOfMaterialItemPricesForPurchase();
        }
        if ($data->isInitialized('useSalesBillOfMaterialSubitemCosts') && $data->getUseSalesBillOfMaterialSubitemCosts() !== null) {
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
