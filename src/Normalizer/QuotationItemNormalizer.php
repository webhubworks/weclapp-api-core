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

class QuotationItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\QuotationItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\QuotationItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\QuotationItem;
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
        }
        if (\array_key_exists('manualUnitPrice', $data) && \is_int($data['manualUnitPrice'])) {
            $data['manualUnitPrice'] = (bool) $data['manualUnitPrice'];
        }
        if (\array_key_exists('addPageBreakBefore', $data) && \is_int($data['addPageBreakBefore'])) {
            $data['addPageBreakBefore'] = (bool) $data['addPageBreakBefore'];
        }
        if (\array_key_exists('manualUnitCost', $data) && \is_int($data['manualUnitCost'])) {
            $data['manualUnitCost'] = (bool) $data['manualUnitCost'];
        }
        if (\array_key_exists('manualPlannedWorkingTimePerUnit', $data) && \is_int($data['manualPlannedWorkingTimePerUnit'])) {
            $data['manualPlannedWorkingTimePerUnit'] = (bool) $data['manualPlannedWorkingTimePerUnit'];
        }
        if (\array_key_exists('alternative', $data) && \is_int($data['alternative'])) {
            $data['alternative'] = (bool) $data['alternative'];
        }
        if (\array_key_exists('optional', $data) && \is_int($data['optional'])) {
            $data['optional'] = (bool) $data['optional'];
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
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        } elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        } elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        } elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        } elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        } elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('descriptionFixed', $data) && $data['descriptionFixed'] !== null) {
            $object->setDescriptionFixed($data['descriptionFixed']);
            unset($data['descriptionFixed']);
        } elseif (\array_key_exists('descriptionFixed', $data) && $data['descriptionFixed'] === null) {
            $object->setDescriptionFixed(null);
        }
        if (\array_key_exists('itemType', $data) && $data['itemType'] !== null) {
            $object->setItemType($data['itemType']);
            unset($data['itemType']);
        } elseif (\array_key_exists('itemType', $data) && $data['itemType'] === null) {
            $object->setItemType(null);
        }
        if (\array_key_exists('manualQuantity', $data) && $data['manualQuantity'] !== null) {
            $object->setManualQuantity($data['manualQuantity']);
            unset($data['manualQuantity']);
        } elseif (\array_key_exists('manualQuantity', $data) && $data['manualQuantity'] === null) {
            $object->setManualQuantity(null);
        }
        if (\array_key_exists('parentItemId', $data) && $data['parentItemId'] !== null) {
            $object->setParentItemId($data['parentItemId']);
            unset($data['parentItemId']);
        } elseif (\array_key_exists('parentItemId', $data) && $data['parentItemId'] === null) {
            $object->setParentItemId(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
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
        if (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] !== null) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        } elseif (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] === null) {
            $object->setDiscountPercentage(null);
        }
        if (\array_key_exists('grossAmount', $data) && $data['grossAmount'] !== null) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        } elseif (\array_key_exists('grossAmount', $data) && $data['grossAmount'] === null) {
            $object->setGrossAmount(null);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] !== null) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        } elseif (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] === null) {
            $object->setGrossAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] !== null) {
            $object->setManualUnitPrice($data['manualUnitPrice']);
            unset($data['manualUnitPrice']);
        } elseif (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] === null) {
            $object->setManualUnitPrice(null);
        }
        if (\array_key_exists('netAmount', $data) && $data['netAmount'] !== null) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        } elseif (\array_key_exists('netAmount', $data) && $data['netAmount'] === null) {
            $object->setNetAmount(null);
        }
        if (\array_key_exists('netAmountForStatistics', $data) && $data['netAmountForStatistics'] !== null) {
            $object->setNetAmountForStatistics($data['netAmountForStatistics']);
            unset($data['netAmountForStatistics']);
        } elseif (\array_key_exists('netAmountForStatistics', $data) && $data['netAmountForStatistics'] === null) {
            $object->setNetAmountForStatistics(null);
        }
        if (\array_key_exists('netAmountForStatisticsInCompanyCurrency', $data) && $data['netAmountForStatisticsInCompanyCurrency'] !== null) {
            $object->setNetAmountForStatisticsInCompanyCurrency($data['netAmountForStatisticsInCompanyCurrency']);
            unset($data['netAmountForStatisticsInCompanyCurrency']);
        } elseif (\array_key_exists('netAmountForStatisticsInCompanyCurrency', $data) && $data['netAmountForStatisticsInCompanyCurrency'] === null) {
            $object->setNetAmountForStatisticsInCompanyCurrency(null);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] !== null) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        } elseif (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] === null) {
            $object->setNetAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('reductionAdditionItems', $data) && $data['reductionAdditionItems'] !== null) {
            $values_1 = [];
            foreach ($data['reductionAdditionItems'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class, 'json', $context);
            }
            $object->setReductionAdditionItems($values_1);
            unset($data['reductionAdditionItems']);
        } elseif (\array_key_exists('reductionAdditionItems', $data) && $data['reductionAdditionItems'] === null) {
            $object->setReductionAdditionItems(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        } elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('taxName', $data) && $data['taxName'] !== null) {
            $object->setTaxName($data['taxName']);
            unset($data['taxName']);
        } elseif (\array_key_exists('taxName', $data) && $data['taxName'] === null) {
            $object->setTaxName(null);
        }
        if (\array_key_exists('unitPrice', $data) && $data['unitPrice'] !== null) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        } elseif (\array_key_exists('unitPrice', $data) && $data['unitPrice'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('unitPriceInCompanyCurrency', $data) && $data['unitPriceInCompanyCurrency'] !== null) {
            $object->setUnitPriceInCompanyCurrency($data['unitPriceInCompanyCurrency']);
            unset($data['unitPriceInCompanyCurrency']);
        } elseif (\array_key_exists('unitPriceInCompanyCurrency', $data) && $data['unitPriceInCompanyCurrency'] === null) {
            $object->setUnitPriceInCompanyCurrency(null);
        }
        if (\array_key_exists('addPageBreakBefore', $data) && $data['addPageBreakBefore'] !== null) {
            $object->setAddPageBreakBefore($data['addPageBreakBefore']);
            unset($data['addPageBreakBefore']);
        } elseif (\array_key_exists('addPageBreakBefore', $data) && $data['addPageBreakBefore'] === null) {
            $object->setAddPageBreakBefore(null);
        }
        if (\array_key_exists('groupName', $data) && $data['groupName'] !== null) {
            $object->setGroupName($data['groupName']);
            unset($data['groupName']);
        } elseif (\array_key_exists('groupName', $data) && $data['groupName'] === null) {
            $object->setGroupName(null);
        }
        if (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] !== null) {
            $values_2 = [];
            foreach ($data['commissionSalesPartners'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class, 'json', $context);
            }
            $object->setCommissionSalesPartners($values_2);
            unset($data['commissionSalesPartners']);
        } elseif (\array_key_exists('commissionSalesPartners', $data) && $data['commissionSalesPartners'] === null) {
            $object->setCommissionSalesPartners(null);
        }
        if (\array_key_exists('manualUnitCost', $data) && $data['manualUnitCost'] !== null) {
            $object->setManualUnitCost($data['manualUnitCost']);
            unset($data['manualUnitCost']);
        } elseif (\array_key_exists('manualUnitCost', $data) && $data['manualUnitCost'] === null) {
            $object->setManualUnitCost(null);
        }
        if (\array_key_exists('recommendedRetailPrice', $data) && $data['recommendedRetailPrice'] !== null) {
            $object->setRecommendedRetailPrice($data['recommendedRetailPrice']);
            unset($data['recommendedRetailPrice']);
        } elseif (\array_key_exists('recommendedRetailPrice', $data) && $data['recommendedRetailPrice'] === null) {
            $object->setRecommendedRetailPrice(null);
        }
        if (\array_key_exists('servicePeriodFrom', $data) && $data['servicePeriodFrom'] !== null) {
            $object->setServicePeriodFrom($data['servicePeriodFrom']);
            unset($data['servicePeriodFrom']);
        } elseif (\array_key_exists('servicePeriodFrom', $data) && $data['servicePeriodFrom'] === null) {
            $object->setServicePeriodFrom(null);
        }
        if (\array_key_exists('servicePeriodTo', $data) && $data['servicePeriodTo'] !== null) {
            $object->setServicePeriodTo($data['servicePeriodTo']);
            unset($data['servicePeriodTo']);
        } elseif (\array_key_exists('servicePeriodTo', $data) && $data['servicePeriodTo'] === null) {
            $object->setServicePeriodTo(null);
        }
        if (\array_key_exists('unitCost', $data) && $data['unitCost'] !== null) {
            $object->setUnitCost($data['unitCost']);
            unset($data['unitCost']);
        } elseif (\array_key_exists('unitCost', $data) && $data['unitCost'] === null) {
            $object->setUnitCost(null);
        }
        if (\array_key_exists('unitCostInCompanyCurrency', $data) && $data['unitCostInCompanyCurrency'] !== null) {
            $object->setUnitCostInCompanyCurrency($data['unitCostInCompanyCurrency']);
            unset($data['unitCostInCompanyCurrency']);
        } elseif (\array_key_exists('unitCostInCompanyCurrency', $data) && $data['unitCostInCompanyCurrency'] === null) {
            $object->setUnitCostInCompanyCurrency(null);
        }
        if (\array_key_exists('invoicingType', $data) && $data['invoicingType'] !== null) {
            $object->setInvoicingType($data['invoicingType']);
            unset($data['invoicingType']);
        } elseif (\array_key_exists('invoicingType', $data) && $data['invoicingType'] === null) {
            $object->setInvoicingType(null);
        }
        if (\array_key_exists('manualPlannedWorkingTimePerUnit', $data) && $data['manualPlannedWorkingTimePerUnit'] !== null) {
            $object->setManualPlannedWorkingTimePerUnit($data['manualPlannedWorkingTimePerUnit']);
            unset($data['manualPlannedWorkingTimePerUnit']);
        } elseif (\array_key_exists('manualPlannedWorkingTimePerUnit', $data) && $data['manualPlannedWorkingTimePerUnit'] === null) {
            $object->setManualPlannedWorkingTimePerUnit(null);
        }
        if (\array_key_exists('plannedDeliveryDate', $data) && $data['plannedDeliveryDate'] !== null) {
            $object->setPlannedDeliveryDate($data['plannedDeliveryDate']);
            unset($data['plannedDeliveryDate']);
        } elseif (\array_key_exists('plannedDeliveryDate', $data) && $data['plannedDeliveryDate'] === null) {
            $object->setPlannedDeliveryDate(null);
        }
        if (\array_key_exists('plannedShippingDate', $data) && $data['plannedShippingDate'] !== null) {
            $object->setPlannedShippingDate($data['plannedShippingDate']);
            unset($data['plannedShippingDate']);
        } elseif (\array_key_exists('plannedShippingDate', $data) && $data['plannedShippingDate'] === null) {
            $object->setPlannedShippingDate(null);
        }
        if (\array_key_exists('plannedWorkingTimePerUnit', $data) && $data['plannedWorkingTimePerUnit'] !== null) {
            $object->setPlannedWorkingTimePerUnit($data['plannedWorkingTimePerUnit']);
            unset($data['plannedWorkingTimePerUnit']);
        } elseif (\array_key_exists('plannedWorkingTimePerUnit', $data) && $data['plannedWorkingTimePerUnit'] === null) {
            $object->setPlannedWorkingTimePerUnit(null);
        }
        if (\array_key_exists('alternative', $data) && $data['alternative'] !== null) {
            $object->setAlternative($data['alternative']);
            unset($data['alternative']);
        } elseif (\array_key_exists('alternative', $data) && $data['alternative'] === null) {
            $object->setAlternative(null);
        }
        if (\array_key_exists('itScopeId', $data) && $data['itScopeId'] !== null) {
            $object->setItScopeId($data['itScopeId']);
            unset($data['itScopeId']);
        } elseif (\array_key_exists('itScopeId', $data) && $data['itScopeId'] === null) {
            $object->setItScopeId(null);
        }
        if (\array_key_exists('optional', $data) && $data['optional'] !== null) {
            $object->setOptional($data['optional']);
            unset($data['optional']);
        } elseif (\array_key_exists('optional', $data) && $data['optional'] === null) {
            $object->setOptional(null);
        }
        if (\array_key_exists('scaleValues', $data) && $data['scaleValues'] !== null) {
            $values_3 = [];
            foreach ($data['scaleValues'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue::class, 'json', $context);
            }
            $object->setScaleValues($values_3);
            unset($data['scaleValues']);
        } elseif (\array_key_exists('scaleValues', $data) && $data['scaleValues'] === null) {
            $object->setScaleValues(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleNumber') && $data->getArticleNumber() !== null) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('note') && $data->getNote() !== null) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('positionNumber') && $data->getPositionNumber() !== null) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('quantity') && $data->getQuantity() !== null) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('descriptionFixed') && $data->getDescriptionFixed() !== null) {
            $dataArray['descriptionFixed'] = $data->getDescriptionFixed();
        }
        if ($data->isInitialized('itemType') && $data->getItemType() !== null) {
            $dataArray['itemType'] = $data->getItemType();
        }
        if ($data->isInitialized('manualQuantity') && $data->getManualQuantity() !== null) {
            $dataArray['manualQuantity'] = $data->getManualQuantity();
        }
        if ($data->isInitialized('parentItemId') && $data->getParentItemId() !== null) {
            $dataArray['parentItemId'] = $data->getParentItemId();
        }
        if ($data->isInitialized('title') && $data->getTitle() !== null) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('unitId') && $data->getUnitId() !== null) {
            $dataArray['unitId'] = $data->getUnitId();
        }
        if ($data->isInitialized('unitName') && $data->getUnitName() !== null) {
            $dataArray['unitName'] = $data->getUnitName();
        }
        if ($data->isInitialized('discountPercentage') && $data->getDiscountPercentage() !== null) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('grossAmount') && $data->getGrossAmount() !== null) {
            $dataArray['grossAmount'] = $data->getGrossAmount();
        }
        if ($data->isInitialized('grossAmountInCompanyCurrency') && $data->getGrossAmountInCompanyCurrency() !== null) {
            $dataArray['grossAmountInCompanyCurrency'] = $data->getGrossAmountInCompanyCurrency();
        }
        if ($data->isInitialized('manualUnitPrice') && $data->getManualUnitPrice() !== null) {
            $dataArray['manualUnitPrice'] = $data->getManualUnitPrice();
        }
        if ($data->isInitialized('netAmount') && $data->getNetAmount() !== null) {
            $dataArray['netAmount'] = $data->getNetAmount();
        }
        if ($data->isInitialized('netAmountForStatistics') && $data->getNetAmountForStatistics() !== null) {
            $dataArray['netAmountForStatistics'] = $data->getNetAmountForStatistics();
        }
        if ($data->isInitialized('netAmountForStatisticsInCompanyCurrency') && $data->getNetAmountForStatisticsInCompanyCurrency() !== null) {
            $dataArray['netAmountForStatisticsInCompanyCurrency'] = $data->getNetAmountForStatisticsInCompanyCurrency();
        }
        if ($data->isInitialized('netAmountInCompanyCurrency') && $data->getNetAmountInCompanyCurrency() !== null) {
            $dataArray['netAmountInCompanyCurrency'] = $data->getNetAmountInCompanyCurrency();
        }
        if ($data->isInitialized('reductionAdditionItems') && $data->getReductionAdditionItems() !== null) {
            $values_1 = [];
            foreach ($data->getReductionAdditionItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['reductionAdditionItems'] = $values_1;
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('taxName') && $data->getTaxName() !== null) {
            $dataArray['taxName'] = $data->getTaxName();
        }
        if ($data->isInitialized('unitPrice') && $data->getUnitPrice() !== null) {
            $dataArray['unitPrice'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('unitPriceInCompanyCurrency') && $data->getUnitPriceInCompanyCurrency() !== null) {
            $dataArray['unitPriceInCompanyCurrency'] = $data->getUnitPriceInCompanyCurrency();
        }
        if ($data->isInitialized('addPageBreakBefore') && $data->getAddPageBreakBefore() !== null) {
            $dataArray['addPageBreakBefore'] = $data->getAddPageBreakBefore();
        }
        if ($data->isInitialized('groupName') && $data->getGroupName() !== null) {
            $dataArray['groupName'] = $data->getGroupName();
        }
        if ($data->isInitialized('commissionSalesPartners') && $data->getCommissionSalesPartners() !== null) {
            $values_2 = [];
            foreach ($data->getCommissionSalesPartners() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['commissionSalesPartners'] = $values_2;
        }
        if ($data->isInitialized('manualUnitCost') && $data->getManualUnitCost() !== null) {
            $dataArray['manualUnitCost'] = $data->getManualUnitCost();
        }
        if ($data->isInitialized('recommendedRetailPrice') && $data->getRecommendedRetailPrice() !== null) {
            $dataArray['recommendedRetailPrice'] = $data->getRecommendedRetailPrice();
        }
        if ($data->isInitialized('servicePeriodFrom') && $data->getServicePeriodFrom() !== null) {
            $dataArray['servicePeriodFrom'] = $data->getServicePeriodFrom();
        }
        if ($data->isInitialized('servicePeriodTo') && $data->getServicePeriodTo() !== null) {
            $dataArray['servicePeriodTo'] = $data->getServicePeriodTo();
        }
        if ($data->isInitialized('unitCost') && $data->getUnitCost() !== null) {
            $dataArray['unitCost'] = $data->getUnitCost();
        }
        if ($data->isInitialized('unitCostInCompanyCurrency') && $data->getUnitCostInCompanyCurrency() !== null) {
            $dataArray['unitCostInCompanyCurrency'] = $data->getUnitCostInCompanyCurrency();
        }
        if ($data->isInitialized('invoicingType') && $data->getInvoicingType() !== null) {
            $dataArray['invoicingType'] = $data->getInvoicingType();
        }
        if ($data->isInitialized('manualPlannedWorkingTimePerUnit') && $data->getManualPlannedWorkingTimePerUnit() !== null) {
            $dataArray['manualPlannedWorkingTimePerUnit'] = $data->getManualPlannedWorkingTimePerUnit();
        }
        if ($data->isInitialized('plannedDeliveryDate') && $data->getPlannedDeliveryDate() !== null) {
            $dataArray['plannedDeliveryDate'] = $data->getPlannedDeliveryDate();
        }
        if ($data->isInitialized('plannedShippingDate') && $data->getPlannedShippingDate() !== null) {
            $dataArray['plannedShippingDate'] = $data->getPlannedShippingDate();
        }
        if ($data->isInitialized('plannedWorkingTimePerUnit') && $data->getPlannedWorkingTimePerUnit() !== null) {
            $dataArray['plannedWorkingTimePerUnit'] = $data->getPlannedWorkingTimePerUnit();
        }
        if ($data->isInitialized('alternative') && $data->getAlternative() !== null) {
            $dataArray['alternative'] = $data->getAlternative();
        }
        if ($data->isInitialized('itScopeId') && $data->getItScopeId() !== null) {
            $dataArray['itScopeId'] = $data->getItScopeId();
        }
        if ($data->isInitialized('optional') && $data->getOptional() !== null) {
            $dataArray['optional'] = $data->getOptional();
        }
        if ($data->isInitialized('scaleValues') && $data->getScaleValues() !== null) {
            $values_3 = [];
            foreach ($data->getScaleValues() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['scaleValues'] = $values_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\QuotationItem::class => false];
    }
}
