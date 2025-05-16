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

class PurchaseInvoiceItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem;
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
        }
        if (\array_key_exists('manualUnitPrice', $data) && \is_int($data['manualUnitPrice'])) {
            $data['manualUnitPrice'] = (bool) $data['manualUnitPrice'];
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
        if (\array_key_exists('customAttributes', $data)) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('articleId', $data)) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        }
        if (\array_key_exists('articleNumber', $data)) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('positionNumber', $data)) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('descriptionFixed', $data)) {
            $object->setDescriptionFixed($data['descriptionFixed']);
            unset($data['descriptionFixed']);
        }
        if (\array_key_exists('itemType', $data)) {
            $object->setItemType($data['itemType']);
            unset($data['itemType']);
        }
        if (\array_key_exists('manualQuantity', $data)) {
            $object->setManualQuantity($data['manualQuantity']);
            unset($data['manualQuantity']);
        }
        if (\array_key_exists('parentItemId', $data)) {
            $object->setParentItemId($data['parentItemId']);
            unset($data['parentItemId']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('unitId', $data)) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        }
        if (\array_key_exists('unitName', $data)) {
            $object->setUnitName($data['unitName']);
            unset($data['unitName']);
        }
        if (\array_key_exists('discountPercentage', $data)) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        }
        if (\array_key_exists('grossAmount', $data)) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data)) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        }
        if (\array_key_exists('manualUnitPrice', $data)) {
            $object->setManualUnitPrice($data['manualUnitPrice']);
            unset($data['manualUnitPrice']);
        }
        if (\array_key_exists('netAmount', $data)) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        }
        if (\array_key_exists('netAmountForStatistics', $data)) {
            $object->setNetAmountForStatistics($data['netAmountForStatistics']);
            unset($data['netAmountForStatistics']);
        }
        if (\array_key_exists('netAmountForStatisticsInCompanyCurrency', $data)) {
            $object->setNetAmountForStatisticsInCompanyCurrency($data['netAmountForStatisticsInCompanyCurrency']);
            unset($data['netAmountForStatisticsInCompanyCurrency']);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data)) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        }
        if (\array_key_exists('reductionAdditionItems', $data)) {
            $values_1 = [];
            foreach ($data['reductionAdditionItems'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class, 'json', $context);
            }
            $object->setReductionAdditionItems($values_1);
            unset($data['reductionAdditionItems']);
        }
        if (\array_key_exists('taxId', $data)) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        }
        if (\array_key_exists('taxName', $data)) {
            $object->setTaxName($data['taxName']);
            unset($data['taxName']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        }
        if (\array_key_exists('unitPriceInCompanyCurrency', $data)) {
            $object->setUnitPriceInCompanyCurrency($data['unitPriceInCompanyCurrency']);
            unset($data['unitPriceInCompanyCurrency']);
        }
        if (\array_key_exists('accountId', $data)) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        if (\array_key_exists('contractItemId', $data)) {
            $object->setContractItemId($data['contractItemId']);
            unset($data['contractItemId']);
        }
        if (\array_key_exists('cost2CostCenterId', $data)) {
            $object->setCost2CostCenterId($data['cost2CostCenterId']);
            unset($data['cost2CostCenterId']);
        }
        if (\array_key_exists('costCenterItems', $data)) {
            $values_2 = [];
            foreach ($data['costCenterItems'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage::class, 'json', $context);
            }
            $object->setCostCenterItems($values_2);
            unset($data['costCenterItems']);
        }
        if (\array_key_exists('costTypeId', $data)) {
            $object->setCostTypeId($data['costTypeId']);
            unset($data['costTypeId']);
        }
        if (\array_key_exists('creditedInvoiceItemId', $data)) {
            $object->setCreditedInvoiceItemId($data['creditedInvoiceItemId']);
            unset($data['creditedInvoiceItemId']);
        }
        if (\array_key_exists('deliveryDate', $data)) {
            $object->setDeliveryDate($data['deliveryDate']);
            unset($data['deliveryDate']);
        }
        if (\array_key_exists('purchaseInvoiceItemRelationship', $data)) {
            $values_3 = [];
            foreach ($data['purchaseInvoiceItemRelationship'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItemRelationship::class, 'json', $context);
            }
            $object->setPurchaseInvoiceItemRelationship($values_3);
            unset($data['purchaseInvoiceItemRelationship']);
        }
        if (\array_key_exists('servicePeriodFromDate', $data)) {
            $object->setServicePeriodFromDate($data['servicePeriodFromDate']);
            unset($data['servicePeriodFromDate']);
        }
        if (\array_key_exists('servicePeriodToDate', $data)) {
            $object->setServicePeriodToDate($data['servicePeriodToDate']);
            unset($data['servicePeriodToDate']);
        }
        if (\array_key_exists('shippingDate', $data)) {
            $object->setShippingDate($data['shippingDate']);
            unset($data['shippingDate']);
        }
        if (\array_key_exists('supplierArticleId', $data)) {
            $object->setSupplierArticleId($data['supplierArticleId']);
            unset($data['supplierArticleId']);
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
        if ($data->isInitialized('accountId') && $data->getAccountId() !== null) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('contractItemId') && $data->getContractItemId() !== null) {
            $dataArray['contractItemId'] = $data->getContractItemId();
        }
        if ($data->isInitialized('cost2CostCenterId') && $data->getCost2CostCenterId() !== null) {
            $dataArray['cost2CostCenterId'] = $data->getCost2CostCenterId();
        }
        if ($data->isInitialized('costCenterItems') && $data->getCostCenterItems() !== null) {
            $values_2 = [];
            foreach ($data->getCostCenterItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['costCenterItems'] = $values_2;
        }
        if ($data->isInitialized('costTypeId') && $data->getCostTypeId() !== null) {
            $dataArray['costTypeId'] = $data->getCostTypeId();
        }
        if ($data->isInitialized('creditedInvoiceItemId') && $data->getCreditedInvoiceItemId() !== null) {
            $dataArray['creditedInvoiceItemId'] = $data->getCreditedInvoiceItemId();
        }
        if ($data->isInitialized('deliveryDate') && $data->getDeliveryDate() !== null) {
            $dataArray['deliveryDate'] = $data->getDeliveryDate();
        }
        if ($data->isInitialized('purchaseInvoiceItemRelationship') && $data->getPurchaseInvoiceItemRelationship() !== null) {
            $values_3 = [];
            foreach ($data->getPurchaseInvoiceItemRelationship() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['purchaseInvoiceItemRelationship'] = $values_3;
        }
        if ($data->isInitialized('servicePeriodFromDate') && $data->getServicePeriodFromDate() !== null) {
            $dataArray['servicePeriodFromDate'] = $data->getServicePeriodFromDate();
        }
        if ($data->isInitialized('servicePeriodToDate') && $data->getServicePeriodToDate() !== null) {
            $dataArray['servicePeriodToDate'] = $data->getServicePeriodToDate();
        }
        if ($data->isInitialized('shippingDate') && $data->getShippingDate() !== null) {
            $dataArray['shippingDate'] = $data->getShippingDate();
        }
        if ($data->isInitialized('supplierArticleId') && $data->getSupplierArticleId() !== null) {
            $dataArray['supplierArticleId'] = $data->getSupplierArticleId();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem::class => false];
    }
}
