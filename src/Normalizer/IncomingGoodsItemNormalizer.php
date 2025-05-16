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

class IncomingGoodsItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem;
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
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
        if (\array_key_exists('dropshippingShipmentItemId', $data)) {
            $object->setDropshippingShipmentItemId($data['dropshippingShipmentItemId']);
            unset($data['dropshippingShipmentItemId']);
        }
        if (\array_key_exists('itemGroup', $data)) {
            $object->setItemGroup($data['itemGroup']);
            unset($data['itemGroup']);
        }
        if (\array_key_exists('purchaseOrderItemId', $data)) {
            $object->setPurchaseOrderItemId($data['purchaseOrderItemId']);
            unset($data['purchaseOrderItemId']);
        }
        if (\array_key_exists('returnAssessmentId', $data)) {
            $object->setReturnAssessmentId($data['returnAssessmentId']);
            unset($data['returnAssessmentId']);
        }
        if (\array_key_exists('returnAssessmentName', $data)) {
            $object->setReturnAssessmentName($data['returnAssessmentName']);
            unset($data['returnAssessmentName']);
        }
        if (\array_key_exists('returnDescription', $data)) {
            $object->setReturnDescription($data['returnDescription']);
            unset($data['returnDescription']);
        }
        if (\array_key_exists('returnErrorId', $data)) {
            $object->setReturnErrorId($data['returnErrorId']);
            unset($data['returnErrorId']);
        }
        if (\array_key_exists('returnErrorName', $data)) {
            $object->setReturnErrorName($data['returnErrorName']);
            unset($data['returnErrorName']);
        }
        if (\array_key_exists('returnReasonId', $data)) {
            $object->setReturnReasonId($data['returnReasonId']);
            unset($data['returnReasonId']);
        }
        if (\array_key_exists('returnReasonName', $data)) {
            $object->setReturnReasonName($data['returnReasonName']);
            unset($data['returnReasonName']);
        }
        if (\array_key_exists('returnRectificationId', $data)) {
            $object->setReturnRectificationId($data['returnRectificationId']);
            unset($data['returnRectificationId']);
        }
        if (\array_key_exists('returnRectificationName', $data)) {
            $object->setReturnRectificationName($data['returnRectificationName']);
            unset($data['returnRectificationName']);
        }
        if (\array_key_exists('salesOrderItemId', $data)) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
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
        if ($data->isInitialized('dropshippingShipmentItemId') && $data->getDropshippingShipmentItemId() !== null) {
            $dataArray['dropshippingShipmentItemId'] = $data->getDropshippingShipmentItemId();
        }
        if ($data->isInitialized('itemGroup') && $data->getItemGroup() !== null) {
            $dataArray['itemGroup'] = $data->getItemGroup();
        }
        if ($data->isInitialized('purchaseOrderItemId') && $data->getPurchaseOrderItemId() !== null) {
            $dataArray['purchaseOrderItemId'] = $data->getPurchaseOrderItemId();
        }
        if ($data->isInitialized('returnAssessmentId') && $data->getReturnAssessmentId() !== null) {
            $dataArray['returnAssessmentId'] = $data->getReturnAssessmentId();
        }
        if ($data->isInitialized('returnAssessmentName') && $data->getReturnAssessmentName() !== null) {
            $dataArray['returnAssessmentName'] = $data->getReturnAssessmentName();
        }
        if ($data->isInitialized('returnDescription') && $data->getReturnDescription() !== null) {
            $dataArray['returnDescription'] = $data->getReturnDescription();
        }
        if ($data->isInitialized('returnErrorId') && $data->getReturnErrorId() !== null) {
            $dataArray['returnErrorId'] = $data->getReturnErrorId();
        }
        if ($data->isInitialized('returnErrorName') && $data->getReturnErrorName() !== null) {
            $dataArray['returnErrorName'] = $data->getReturnErrorName();
        }
        if ($data->isInitialized('returnReasonId') && $data->getReturnReasonId() !== null) {
            $dataArray['returnReasonId'] = $data->getReturnReasonId();
        }
        if ($data->isInitialized('returnReasonName') && $data->getReturnReasonName() !== null) {
            $dataArray['returnReasonName'] = $data->getReturnReasonName();
        }
        if ($data->isInitialized('returnRectificationId') && $data->getReturnRectificationId() !== null) {
            $dataArray['returnRectificationId'] = $data->getReturnRectificationId();
        }
        if ($data->isInitialized('returnRectificationName') && $data->getReturnRectificationName() !== null) {
            $dataArray['returnRectificationName'] = $data->getReturnRectificationName();
        }
        if ($data->isInitialized('salesOrderItemId') && $data->getSalesOrderItemId() !== null) {
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
