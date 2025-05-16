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

class BlanketPurchaseOrderNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder;
        if (\array_key_exists('sentToRecipient', $data) && \is_int($data['sentToRecipient'])) {
            $data['sentToRecipient'] = (bool) $data['sentToRecipient'];
        }
        if (\array_key_exists('useManualUnitPrice', $data) && \is_int($data['useManualUnitPrice'])) {
            $data['useManualUnitPrice'] = (bool) $data['useManualUnitPrice'];
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('blanketPurchaseOrderNumber', $data) && $data['blanketPurchaseOrderNumber'] !== null) {
            $object->setBlanketPurchaseOrderNumber($data['blanketPurchaseOrderNumber']);
            unset($data['blanketPurchaseOrderNumber']);
        } elseif (\array_key_exists('blanketPurchaseOrderNumber', $data) && $data['blanketPurchaseOrderNumber'] === null) {
            $object->setBlanketPurchaseOrderNumber(null);
        }
        if (\array_key_exists('calculationMode', $data) && $data['calculationMode'] !== null) {
            $object->setCalculationMode($data['calculationMode']);
            unset($data['calculationMode']);
        } elseif (\array_key_exists('calculationMode', $data) && $data['calculationMode'] === null) {
            $object->setCalculationMode(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
            unset($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] !== null) {
            $object->setCommercialLanguage($data['commercialLanguage']);
            unset($data['commercialLanguage']);
        } elseif (\array_key_exists('commercialLanguage', $data) && $data['commercialLanguage'] === null) {
            $object->setCommercialLanguage(null);
        }
        if (\array_key_exists('confirmationNumber', $data) && $data['confirmationNumber'] !== null) {
            $object->setConfirmationNumber($data['confirmationNumber']);
            unset($data['confirmationNumber']);
        } elseif (\array_key_exists('confirmationNumber', $data) && $data['confirmationNumber'] === null) {
            $object->setConfirmationNumber(null);
        }
        if (\array_key_exists('creatorId', $data) && $data['creatorId'] !== null) {
            $object->setCreatorId($data['creatorId']);
            unset($data['creatorId']);
        } elseif (\array_key_exists('creatorId', $data) && $data['creatorId'] === null) {
            $object->setCreatorId(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] !== null) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data['deliveryAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['deliveryAddress']);
        } elseif (\array_key_exists('deliveryAddress', $data) && $data['deliveryAddress'] === null) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] !== null) {
            $object->setDiscountPercentage($data['discountPercentage']);
            unset($data['discountPercentage']);
        } elseif (\array_key_exists('discountPercentage', $data) && $data['discountPercentage'] === null) {
            $object->setDiscountPercentage(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        } elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('formSettingsFromDistributionChannel', $data) && $data['formSettingsFromDistributionChannel'] !== null) {
            $object->setFormSettingsFromDistributionChannel($data['formSettingsFromDistributionChannel']);
            unset($data['formSettingsFromDistributionChannel']);
        } elseif (\array_key_exists('formSettingsFromDistributionChannel', $data) && $data['formSettingsFromDistributionChannel'] === null) {
            $object->setFormSettingsFromDistributionChannel(null);
        }
        if (\array_key_exists('headerDiscount', $data) && $data['headerDiscount'] !== null) {
            $object->setHeaderDiscount($data['headerDiscount']);
            unset($data['headerDiscount']);
        } elseif (\array_key_exists('headerDiscount', $data) && $data['headerDiscount'] === null) {
            $object->setHeaderDiscount(null);
        }
        if (\array_key_exists('headerSurcharge', $data) && $data['headerSurcharge'] !== null) {
            $object->setHeaderSurcharge($data['headerSurcharge']);
            unset($data['headerSurcharge']);
        } elseif (\array_key_exists('headerSurcharge', $data) && $data['headerSurcharge'] === null) {
            $object->setHeaderSurcharge(null);
        }
        if (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] !== null) {
            $object->setInvoiceAddress($this->denormalizer->denormalize($data['invoiceAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['invoiceAddress']);
        } elseif (\array_key_exists('invoiceAddress', $data) && $data['invoiceAddress'] === null) {
            $object->setInvoiceAddress(null);
        }
        if (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] !== null) {
            $object->setNonStandardTaxId($data['nonStandardTaxId']);
            unset($data['nonStandardTaxId']);
        } elseif (\array_key_exists('nonStandardTaxId', $data) && $data['nonStandardTaxId'] === null) {
            $object->setNonStandardTaxId(null);
        }
        if (\array_key_exists('orderDate', $data) && $data['orderDate'] !== null) {
            $object->setOrderDate($data['orderDate']);
            unset($data['orderDate']);
        } elseif (\array_key_exists('orderDate', $data) && $data['orderDate'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('orderQuantity', $data) && $data['orderQuantity'] !== null) {
            $object->setOrderQuantity($data['orderQuantity']);
            unset($data['orderQuantity']);
        } elseif (\array_key_exists('orderQuantity', $data) && $data['orderQuantity'] === null) {
            $object->setOrderQuantity(null);
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        } elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('recipientCountryCode', $data) && $data['recipientCountryCode'] !== null) {
            $object->setRecipientCountryCode($data['recipientCountryCode']);
            unset($data['recipientCountryCode']);
        } elseif (\array_key_exists('recipientCountryCode', $data) && $data['recipientCountryCode'] === null) {
            $object->setRecipientCountryCode(null);
        }
        if (\array_key_exists('recordAddress', $data) && $data['recordAddress'] !== null) {
            $object->setRecordAddress($this->denormalizer->denormalize($data['recordAddress'], \Webhubworks\WeclappApiCore\Model\RecordAddress::class, 'json', $context));
            unset($data['recordAddress']);
        } elseif (\array_key_exists('recordAddress', $data) && $data['recordAddress'] === null) {
            $object->setRecordAddress(null);
        }
        if (\array_key_exists('recordComment', $data) && $data['recordComment'] !== null) {
            $object->setRecordComment($data['recordComment']);
            unset($data['recordComment']);
        } elseif (\array_key_exists('recordComment', $data) && $data['recordComment'] === null) {
            $object->setRecordComment(null);
        }
        if (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] !== null) {
            $object->setRecordCurrencyId($data['recordCurrencyId']);
            unset($data['recordCurrencyId']);
        } elseif (\array_key_exists('recordCurrencyId', $data) && $data['recordCurrencyId'] === null) {
            $object->setRecordCurrencyId(null);
        }
        if (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] !== null) {
            $object->setRecordEmailAddresses($this->denormalizer->denormalize($data['recordEmailAddresses'], \Webhubworks\WeclappApiCore\Model\EmailAddresses::class, 'json', $context));
            unset($data['recordEmailAddresses']);
        } elseif (\array_key_exists('recordEmailAddresses', $data) && $data['recordEmailAddresses'] === null) {
            $object->setRecordEmailAddresses(null);
        }
        if (\array_key_exists('recordFreeText', $data) && $data['recordFreeText'] !== null) {
            $object->setRecordFreeText($data['recordFreeText']);
            unset($data['recordFreeText']);
        } elseif (\array_key_exists('recordFreeText', $data) && $data['recordFreeText'] === null) {
            $object->setRecordFreeText(null);
        }
        if (\array_key_exists('recordOpening', $data) && $data['recordOpening'] !== null) {
            $object->setRecordOpening($data['recordOpening']);
            unset($data['recordOpening']);
        } elseif (\array_key_exists('recordOpening', $data) && $data['recordOpening'] === null) {
            $object->setRecordOpening(null);
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
        if (\array_key_exists('releases', $data) && $data['releases'] !== null) {
            $values_2 = [];
            foreach ($data['releases'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Webhubworks\WeclappApiCore\Model\Releases::class, 'json', $context);
            }
            $object->setReleases($values_2);
            unset($data['releases']);
        } elseif (\array_key_exists('releases', $data) && $data['releases'] === null) {
            $object->setReleases(null);
        }
        if (\array_key_exists('residualQuantity', $data) && $data['residualQuantity'] !== null) {
            $object->setResidualQuantity($data['residualQuantity']);
            unset($data['residualQuantity']);
        } elseif (\array_key_exists('residualQuantity', $data) && $data['residualQuantity'] === null) {
            $object->setResidualQuantity(null);
        }
        if (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] !== null) {
            $object->setResponsibleUserId($data['responsibleUserId']);
            unset($data['responsibleUserId']);
        } elseif (\array_key_exists('responsibleUserId', $data) && $data['responsibleUserId'] === null) {
            $object->setResponsibleUserId(null);
        }
        if (\array_key_exists('senderCountryCode', $data) && $data['senderCountryCode'] !== null) {
            $object->setSenderCountryCode($data['senderCountryCode']);
            unset($data['senderCountryCode']);
        } elseif (\array_key_exists('senderCountryCode', $data) && $data['senderCountryCode'] === null) {
            $object->setSenderCountryCode(null);
        }
        if (\array_key_exists('sentToRecipient', $data) && $data['sentToRecipient'] !== null) {
            $object->setSentToRecipient($data['sentToRecipient']);
            unset($data['sentToRecipient']);
        } elseif (\array_key_exists('sentToRecipient', $data) && $data['sentToRecipient'] === null) {
            $object->setSentToRecipient(null);
        }
        if (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] !== null) {
            $object->setShipmentMethodId($data['shipmentMethodId']);
            unset($data['shipmentMethodId']);
        } elseif (\array_key_exists('shipmentMethodId', $data) && $data['shipmentMethodId'] === null) {
            $object->setShipmentMethodId(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        } elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('statusHistory', $data) && $data['statusHistory'] !== null) {
            $values_3 = [];
            foreach ($data['statusHistory'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderStatusHistory::class, 'json', $context);
            }
            $object->setStatusHistory($values_3);
            unset($data['statusHistory']);
        } elseif (\array_key_exists('statusHistory', $data) && $data['statusHistory'] === null) {
            $object->setStatusHistory(null);
        }
        if (\array_key_exists('supplierBlanketPurchaseOrderNumber', $data) && $data['supplierBlanketPurchaseOrderNumber'] !== null) {
            $object->setSupplierBlanketPurchaseOrderNumber($data['supplierBlanketPurchaseOrderNumber']);
            unset($data['supplierBlanketPurchaseOrderNumber']);
        } elseif (\array_key_exists('supplierBlanketPurchaseOrderNumber', $data) && $data['supplierBlanketPurchaseOrderNumber'] === null) {
            $object->setSupplierBlanketPurchaseOrderNumber(null);
        }
        if (\array_key_exists('supplierId', $data) && $data['supplierId'] !== null) {
            $object->setSupplierId($data['supplierId']);
            unset($data['supplierId']);
        } elseif (\array_key_exists('supplierId', $data) && $data['supplierId'] === null) {
            $object->setSupplierId(null);
        }
        if (\array_key_exists('supplierQuotationNumber', $data) && $data['supplierQuotationNumber'] !== null) {
            $object->setSupplierQuotationNumber($data['supplierQuotationNumber']);
            unset($data['supplierQuotationNumber']);
        } elseif (\array_key_exists('supplierQuotationNumber', $data) && $data['supplierQuotationNumber'] === null) {
            $object->setSupplierQuotationNumber(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTags($values_4);
            unset($data['tags']);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        } elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] !== null) {
            $object->setTermOfPaymentId($data['termOfPaymentId']);
            unset($data['termOfPaymentId']);
        } elseif (\array_key_exists('termOfPaymentId', $data) && $data['termOfPaymentId'] === null) {
            $object->setTermOfPaymentId(null);
        }
        if (\array_key_exists('unitPrice', $data) && $data['unitPrice'] !== null) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        } elseif (\array_key_exists('unitPrice', $data) && $data['unitPrice'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('useManualUnitPrice', $data) && $data['useManualUnitPrice'] !== null) {
            $object->setUseManualUnitPrice($data['useManualUnitPrice']);
            unset($data['useManualUnitPrice']);
        } elseif (\array_key_exists('useManualUnitPrice', $data) && $data['useManualUnitPrice'] === null) {
            $object->setUseManualUnitPrice(null);
        }
        if (\array_key_exists('warehouseId', $data) && $data['warehouseId'] !== null) {
            $object->setWarehouseId($data['warehouseId']);
            unset($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && $data['warehouseId'] === null) {
            $object->setWarehouseId(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('blanketPurchaseOrderNumber') && $data->getBlanketPurchaseOrderNumber() !== null) {
            $dataArray['blanketPurchaseOrderNumber'] = $data->getBlanketPurchaseOrderNumber();
        }
        if ($data->isInitialized('calculationMode') && $data->getCalculationMode() !== null) {
            $dataArray['calculationMode'] = $data->getCalculationMode();
        }
        if ($data->isInitialized('comment') && $data->getComment() !== null) {
            $dataArray['comment'] = $data->getComment();
        }
        if ($data->isInitialized('commercialLanguage') && $data->getCommercialLanguage() !== null) {
            $dataArray['commercialLanguage'] = $data->getCommercialLanguage();
        }
        if ($data->isInitialized('confirmationNumber') && $data->getConfirmationNumber() !== null) {
            $dataArray['confirmationNumber'] = $data->getConfirmationNumber();
        }
        if ($data->isInitialized('creatorId') && $data->getCreatorId() !== null) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('deliveryAddress') && $data->getDeliveryAddress() !== null) {
            $dataArray['deliveryAddress'] = $this->normalizer->normalize($data->getDeliveryAddress(), 'json', $context);
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('discountPercentage') && $data->getDiscountPercentage() !== null) {
            $dataArray['discountPercentage'] = $data->getDiscountPercentage();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('formSettingsFromDistributionChannel') && $data->getFormSettingsFromDistributionChannel() !== null) {
            $dataArray['formSettingsFromDistributionChannel'] = $data->getFormSettingsFromDistributionChannel();
        }
        if ($data->isInitialized('headerDiscount') && $data->getHeaderDiscount() !== null) {
            $dataArray['headerDiscount'] = $data->getHeaderDiscount();
        }
        if ($data->isInitialized('headerSurcharge') && $data->getHeaderSurcharge() !== null) {
            $dataArray['headerSurcharge'] = $data->getHeaderSurcharge();
        }
        if ($data->isInitialized('invoiceAddress') && $data->getInvoiceAddress() !== null) {
            $dataArray['invoiceAddress'] = $this->normalizer->normalize($data->getInvoiceAddress(), 'json', $context);
        }
        if ($data->isInitialized('nonStandardTaxId') && $data->getNonStandardTaxId() !== null) {
            $dataArray['nonStandardTaxId'] = $data->getNonStandardTaxId();
        }
        if ($data->isInitialized('orderDate') && $data->getOrderDate() !== null) {
            $dataArray['orderDate'] = $data->getOrderDate();
        }
        if ($data->isInitialized('orderQuantity') && $data->getOrderQuantity() !== null) {
            $dataArray['orderQuantity'] = $data->getOrderQuantity();
        }
        if ($data->isInitialized('paymentMethodId') && $data->getPaymentMethodId() !== null) {
            $dataArray['paymentMethodId'] = $data->getPaymentMethodId();
        }
        if ($data->isInitialized('recipientCountryCode') && $data->getRecipientCountryCode() !== null) {
            $dataArray['recipientCountryCode'] = $data->getRecipientCountryCode();
        }
        if ($data->isInitialized('recordAddress') && $data->getRecordAddress() !== null) {
            $dataArray['recordAddress'] = $this->normalizer->normalize($data->getRecordAddress(), 'json', $context);
        }
        if ($data->isInitialized('recordComment') && $data->getRecordComment() !== null) {
            $dataArray['recordComment'] = $data->getRecordComment();
        }
        if ($data->isInitialized('recordCurrencyId') && $data->getRecordCurrencyId() !== null) {
            $dataArray['recordCurrencyId'] = $data->getRecordCurrencyId();
        }
        if ($data->isInitialized('recordEmailAddresses') && $data->getRecordEmailAddresses() !== null) {
            $dataArray['recordEmailAddresses'] = $this->normalizer->normalize($data->getRecordEmailAddresses(), 'json', $context);
        }
        if ($data->isInitialized('recordFreeText') && $data->getRecordFreeText() !== null) {
            $dataArray['recordFreeText'] = $data->getRecordFreeText();
        }
        if ($data->isInitialized('recordOpening') && $data->getRecordOpening() !== null) {
            $dataArray['recordOpening'] = $data->getRecordOpening();
        }
        if ($data->isInitialized('reductionAdditionItems') && $data->getReductionAdditionItems() !== null) {
            $values_1 = [];
            foreach ($data->getReductionAdditionItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['reductionAdditionItems'] = $values_1;
        }
        if ($data->isInitialized('releases') && $data->getReleases() !== null) {
            $values_2 = [];
            foreach ($data->getReleases() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['releases'] = $values_2;
        }
        if ($data->isInitialized('residualQuantity') && $data->getResidualQuantity() !== null) {
            $dataArray['residualQuantity'] = $data->getResidualQuantity();
        }
        if ($data->isInitialized('responsibleUserId') && $data->getResponsibleUserId() !== null) {
            $dataArray['responsibleUserId'] = $data->getResponsibleUserId();
        }
        if ($data->isInitialized('senderCountryCode') && $data->getSenderCountryCode() !== null) {
            $dataArray['senderCountryCode'] = $data->getSenderCountryCode();
        }
        if ($data->isInitialized('sentToRecipient') && $data->getSentToRecipient() !== null) {
            $dataArray['sentToRecipient'] = $data->getSentToRecipient();
        }
        if ($data->isInitialized('shipmentMethodId') && $data->getShipmentMethodId() !== null) {
            $dataArray['shipmentMethodId'] = $data->getShipmentMethodId();
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
        }
        if ($data->isInitialized('status') && $data->getStatus() !== null) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('statusHistory') && $data->getStatusHistory() !== null) {
            $values_3 = [];
            foreach ($data->getStatusHistory() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['statusHistory'] = $values_3;
        }
        if ($data->isInitialized('supplierBlanketPurchaseOrderNumber') && $data->getSupplierBlanketPurchaseOrderNumber() !== null) {
            $dataArray['supplierBlanketPurchaseOrderNumber'] = $data->getSupplierBlanketPurchaseOrderNumber();
        }
        if ($data->isInitialized('supplierId') && $data->getSupplierId() !== null) {
            $dataArray['supplierId'] = $data->getSupplierId();
        }
        if ($data->isInitialized('supplierQuotationNumber') && $data->getSupplierQuotationNumber() !== null) {
            $dataArray['supplierQuotationNumber'] = $data->getSupplierQuotationNumber();
        }
        if ($data->isInitialized('tags') && $data->getTags() !== null) {
            $values_4 = [];
            foreach ($data->getTags() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['tags'] = $values_4;
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('termOfPaymentId') && $data->getTermOfPaymentId() !== null) {
            $dataArray['termOfPaymentId'] = $data->getTermOfPaymentId();
        }
        if ($data->isInitialized('unitPrice') && $data->getUnitPrice() !== null) {
            $dataArray['unitPrice'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('useManualUnitPrice') && $data->getUseManualUnitPrice() !== null) {
            $dataArray['useManualUnitPrice'] = $data->getUseManualUnitPrice();
        }
        if ($data->isInitialized('warehouseId') && $data->getWarehouseId() !== null) {
            $dataArray['warehouseId'] = $data->getWarehouseId();
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class => false];
    }
}
