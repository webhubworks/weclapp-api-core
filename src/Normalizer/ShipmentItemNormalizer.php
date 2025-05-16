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
class ShipmentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ShipmentItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ShipmentItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ShipmentItem();
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
        }
        if (\array_key_exists('addPageBreakBefore', $data) && \is_int($data['addPageBreakBefore'])) {
            $data['addPageBreakBefore'] = (bool) $data['addPageBreakBefore'];
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
        if (\array_key_exists('addPageBreakBefore', $data)) {
            $object->setAddPageBreakBefore($data['addPageBreakBefore']);
            unset($data['addPageBreakBefore']);
        }
        if (\array_key_exists('availability', $data)) {
            $object->setAvailability($data['availability']);
            unset($data['availability']);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data)) {
            $object->setAvailabilityForAllWarehouses($data['availabilityForAllWarehouses']);
            unset($data['availabilityForAllWarehouses']);
        }
        if (\array_key_exists('groupName', $data)) {
            $object->setGroupName($data['groupName']);
            unset($data['groupName']);
        }
        if (\array_key_exists('picks', $data)) {
            $values_1 = [];
            foreach ($data['picks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ItemPick::class, 'json', $context);
            }
            $object->setPicks($values_1);
            unset($data['picks']);
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
        if ($data->isInitialized('addPageBreakBefore') && null !== $data->getAddPageBreakBefore()) {
            $dataArray['addPageBreakBefore'] = $data->getAddPageBreakBefore();
        }
        if ($data->isInitialized('availability') && null !== $data->getAvailability()) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && null !== $data->getAvailabilityForAllWarehouses()) {
            $dataArray['availabilityForAllWarehouses'] = $data->getAvailabilityForAllWarehouses();
        }
        if ($data->isInitialized('groupName') && null !== $data->getGroupName()) {
            $dataArray['groupName'] = $data->getGroupName();
        }
        if ($data->isInitialized('picks') && null !== $data->getPicks()) {
            $values_1 = [];
            foreach ($data->getPicks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['picks'] = $values_1;
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
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\ShipmentItem::class => false];
    }
}