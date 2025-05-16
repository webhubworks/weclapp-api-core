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
class IncomingGoodsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem();
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
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
        if (\array_key_exists('customAttributes', $data) && $data['customAttributes'] !== null) {
            $values = [];
            foreach ($data['customAttributes'] as $value) {
                $values[] = $value;
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
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
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('positionNumber', $data) && $data['positionNumber'] !== null) {
            $object->setPositionNumber($data['positionNumber']);
            unset($data['positionNumber']);
        }
        elseif (\array_key_exists('positionNumber', $data) && $data['positionNumber'] === null) {
            $object->setPositionNumber(null);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
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
        if (\array_key_exists('itemType', $data) && $data['itemType'] !== null) {
            $object->setItemType($data['itemType']);
            unset($data['itemType']);
        }
        elseif (\array_key_exists('itemType', $data) && $data['itemType'] === null) {
            $object->setItemType(null);
        }
        if (\array_key_exists('manualQuantity', $data) && $data['manualQuantity'] !== null) {
            $object->setManualQuantity($data['manualQuantity']);
            unset($data['manualQuantity']);
        }
        elseif (\array_key_exists('manualQuantity', $data) && $data['manualQuantity'] === null) {
            $object->setManualQuantity(null);
        }
        if (\array_key_exists('parentItemId', $data) && $data['parentItemId'] !== null) {
            $object->setParentItemId($data['parentItemId']);
            unset($data['parentItemId']);
        }
        elseif (\array_key_exists('parentItemId', $data) && $data['parentItemId'] === null) {
            $object->setParentItemId(null);
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
        if (\array_key_exists('dropshippingShipmentItemId', $data) && $data['dropshippingShipmentItemId'] !== null) {
            $object->setDropshippingShipmentItemId($data['dropshippingShipmentItemId']);
            unset($data['dropshippingShipmentItemId']);
        }
        elseif (\array_key_exists('dropshippingShipmentItemId', $data) && $data['dropshippingShipmentItemId'] === null) {
            $object->setDropshippingShipmentItemId(null);
        }
        if (\array_key_exists('itemGroup', $data) && $data['itemGroup'] !== null) {
            $object->setItemGroup($data['itemGroup']);
            unset($data['itemGroup']);
        }
        elseif (\array_key_exists('itemGroup', $data) && $data['itemGroup'] === null) {
            $object->setItemGroup(null);
        }
        if (\array_key_exists('purchaseOrderItemId', $data) && $data['purchaseOrderItemId'] !== null) {
            $object->setPurchaseOrderItemId($data['purchaseOrderItemId']);
            unset($data['purchaseOrderItemId']);
        }
        elseif (\array_key_exists('purchaseOrderItemId', $data) && $data['purchaseOrderItemId'] === null) {
            $object->setPurchaseOrderItemId(null);
        }
        if (\array_key_exists('returnAssessmentId', $data) && $data['returnAssessmentId'] !== null) {
            $object->setReturnAssessmentId($data['returnAssessmentId']);
            unset($data['returnAssessmentId']);
        }
        elseif (\array_key_exists('returnAssessmentId', $data) && $data['returnAssessmentId'] === null) {
            $object->setReturnAssessmentId(null);
        }
        if (\array_key_exists('returnAssessmentName', $data) && $data['returnAssessmentName'] !== null) {
            $object->setReturnAssessmentName($data['returnAssessmentName']);
            unset($data['returnAssessmentName']);
        }
        elseif (\array_key_exists('returnAssessmentName', $data) && $data['returnAssessmentName'] === null) {
            $object->setReturnAssessmentName(null);
        }
        if (\array_key_exists('returnDescription', $data) && $data['returnDescription'] !== null) {
            $object->setReturnDescription($data['returnDescription']);
            unset($data['returnDescription']);
        }
        elseif (\array_key_exists('returnDescription', $data) && $data['returnDescription'] === null) {
            $object->setReturnDescription(null);
        }
        if (\array_key_exists('returnErrorId', $data) && $data['returnErrorId'] !== null) {
            $object->setReturnErrorId($data['returnErrorId']);
            unset($data['returnErrorId']);
        }
        elseif (\array_key_exists('returnErrorId', $data) && $data['returnErrorId'] === null) {
            $object->setReturnErrorId(null);
        }
        if (\array_key_exists('returnErrorName', $data) && $data['returnErrorName'] !== null) {
            $object->setReturnErrorName($data['returnErrorName']);
            unset($data['returnErrorName']);
        }
        elseif (\array_key_exists('returnErrorName', $data) && $data['returnErrorName'] === null) {
            $object->setReturnErrorName(null);
        }
        if (\array_key_exists('returnReasonId', $data) && $data['returnReasonId'] !== null) {
            $object->setReturnReasonId($data['returnReasonId']);
            unset($data['returnReasonId']);
        }
        elseif (\array_key_exists('returnReasonId', $data) && $data['returnReasonId'] === null) {
            $object->setReturnReasonId(null);
        }
        if (\array_key_exists('returnReasonName', $data) && $data['returnReasonName'] !== null) {
            $object->setReturnReasonName($data['returnReasonName']);
            unset($data['returnReasonName']);
        }
        elseif (\array_key_exists('returnReasonName', $data) && $data['returnReasonName'] === null) {
            $object->setReturnReasonName(null);
        }
        if (\array_key_exists('returnRectificationId', $data) && $data['returnRectificationId'] !== null) {
            $object->setReturnRectificationId($data['returnRectificationId']);
            unset($data['returnRectificationId']);
        }
        elseif (\array_key_exists('returnRectificationId', $data) && $data['returnRectificationId'] === null) {
            $object->setReturnRectificationId(null);
        }
        if (\array_key_exists('returnRectificationName', $data) && $data['returnRectificationName'] !== null) {
            $object->setReturnRectificationName($data['returnRectificationName']);
            unset($data['returnRectificationName']);
        }
        elseif (\array_key_exists('returnRectificationName', $data) && $data['returnRectificationName'] === null) {
            $object->setReturnRectificationName(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
                $values[] = $value;
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleId') && null !== $data->getArticleId()) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleNumber') && null !== $data->getArticleNumber()) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('positionNumber') && null !== $data->getPositionNumber()) {
            $dataArray['positionNumber'] = $data->getPositionNumber();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('descriptionFixed') && null !== $data->getDescriptionFixed()) {
            $dataArray['descriptionFixed'] = $data->getDescriptionFixed();
        }
        if ($data->isInitialized('itemType') && null !== $data->getItemType()) {
            $dataArray['itemType'] = $data->getItemType();
        }
        if ($data->isInitialized('manualQuantity') && null !== $data->getManualQuantity()) {
            $dataArray['manualQuantity'] = $data->getManualQuantity();
        }
        if ($data->isInitialized('parentItemId') && null !== $data->getParentItemId()) {
            $dataArray['parentItemId'] = $data->getParentItemId();
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
        if ($data->isInitialized('dropshippingShipmentItemId') && null !== $data->getDropshippingShipmentItemId()) {
            $dataArray['dropshippingShipmentItemId'] = $data->getDropshippingShipmentItemId();
        }
        if ($data->isInitialized('itemGroup') && null !== $data->getItemGroup()) {
            $dataArray['itemGroup'] = $data->getItemGroup();
        }
        if ($data->isInitialized('purchaseOrderItemId') && null !== $data->getPurchaseOrderItemId()) {
            $dataArray['purchaseOrderItemId'] = $data->getPurchaseOrderItemId();
        }
        if ($data->isInitialized('returnAssessmentId') && null !== $data->getReturnAssessmentId()) {
            $dataArray['returnAssessmentId'] = $data->getReturnAssessmentId();
        }
        if ($data->isInitialized('returnAssessmentName') && null !== $data->getReturnAssessmentName()) {
            $dataArray['returnAssessmentName'] = $data->getReturnAssessmentName();
        }
        if ($data->isInitialized('returnDescription') && null !== $data->getReturnDescription()) {
            $dataArray['returnDescription'] = $data->getReturnDescription();
        }
        if ($data->isInitialized('returnErrorId') && null !== $data->getReturnErrorId()) {
            $dataArray['returnErrorId'] = $data->getReturnErrorId();
        }
        if ($data->isInitialized('returnErrorName') && null !== $data->getReturnErrorName()) {
            $dataArray['returnErrorName'] = $data->getReturnErrorName();
        }
        if ($data->isInitialized('returnReasonId') && null !== $data->getReturnReasonId()) {
            $dataArray['returnReasonId'] = $data->getReturnReasonId();
        }
        if ($data->isInitialized('returnReasonName') && null !== $data->getReturnReasonName()) {
            $dataArray['returnReasonName'] = $data->getReturnReasonName();
        }
        if ($data->isInitialized('returnRectificationId') && null !== $data->getReturnRectificationId()) {
            $dataArray['returnRectificationId'] = $data->getReturnRectificationId();
        }
        if ($data->isInitialized('returnRectificationName') && null !== $data->getReturnRectificationName()) {
            $dataArray['returnRectificationName'] = $data->getReturnRectificationName();
        }
        if ($data->isInitialized('salesOrderItemId') && null !== $data->getSalesOrderItemId()) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class => false];
    }
}