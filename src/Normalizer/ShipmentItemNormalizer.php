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

class ShipmentItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\ShipmentItem;
        if (\array_key_exists('descriptionFixed', $data) && \is_int($data['descriptionFixed'])) {
            $data['descriptionFixed'] = (bool) $data['descriptionFixed'];
        }
        if (\array_key_exists('manualQuantity', $data) && \is_int($data['manualQuantity'])) {
            $data['manualQuantity'] = (bool) $data['manualQuantity'];
        }
        if (\array_key_exists('addPageBreakBefore', $data) && \is_int($data['addPageBreakBefore'])) {
            $data['addPageBreakBefore'] = (bool) $data['addPageBreakBefore'];
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
        if (\array_key_exists('addPageBreakBefore', $data) && $data['addPageBreakBefore'] !== null) {
            $object->setAddPageBreakBefore($data['addPageBreakBefore']);
            unset($data['addPageBreakBefore']);
        } elseif (\array_key_exists('addPageBreakBefore', $data) && $data['addPageBreakBefore'] === null) {
            $object->setAddPageBreakBefore(null);
        }
        if (\array_key_exists('availability', $data) && $data['availability'] !== null) {
            $object->setAvailability($data['availability']);
            unset($data['availability']);
        } elseif (\array_key_exists('availability', $data) && $data['availability'] === null) {
            $object->setAvailability(null);
        }
        if (\array_key_exists('availabilityForAllWarehouses', $data) && $data['availabilityForAllWarehouses'] !== null) {
            $object->setAvailabilityForAllWarehouses($data['availabilityForAllWarehouses']);
            unset($data['availabilityForAllWarehouses']);
        } elseif (\array_key_exists('availabilityForAllWarehouses', $data) && $data['availabilityForAllWarehouses'] === null) {
            $object->setAvailabilityForAllWarehouses(null);
        }
        if (\array_key_exists('groupName', $data) && $data['groupName'] !== null) {
            $object->setGroupName($data['groupName']);
            unset($data['groupName']);
        } elseif (\array_key_exists('groupName', $data) && $data['groupName'] === null) {
            $object->setGroupName(null);
        }
        if (\array_key_exists('picks', $data) && $data['picks'] !== null) {
            $values_1 = [];
            foreach ($data['picks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Webhubworks\WeclappApiCore\Model\ItemPick::class, 'json', $context);
            }
            $object->setPicks($values_1);
            unset($data['picks']);
        } elseif (\array_key_exists('picks', $data) && $data['picks'] === null) {
            $object->setPicks(null);
        }
        if (\array_key_exists('purchaseOrderItemId', $data) && $data['purchaseOrderItemId'] !== null) {
            $object->setPurchaseOrderItemId($data['purchaseOrderItemId']);
            unset($data['purchaseOrderItemId']);
        } elseif (\array_key_exists('purchaseOrderItemId', $data) && $data['purchaseOrderItemId'] === null) {
            $object->setPurchaseOrderItemId(null);
        }
        if (\array_key_exists('returnAssessmentId', $data) && $data['returnAssessmentId'] !== null) {
            $object->setReturnAssessmentId($data['returnAssessmentId']);
            unset($data['returnAssessmentId']);
        } elseif (\array_key_exists('returnAssessmentId', $data) && $data['returnAssessmentId'] === null) {
            $object->setReturnAssessmentId(null);
        }
        if (\array_key_exists('returnAssessmentName', $data) && $data['returnAssessmentName'] !== null) {
            $object->setReturnAssessmentName($data['returnAssessmentName']);
            unset($data['returnAssessmentName']);
        } elseif (\array_key_exists('returnAssessmentName', $data) && $data['returnAssessmentName'] === null) {
            $object->setReturnAssessmentName(null);
        }
        if (\array_key_exists('returnDescription', $data) && $data['returnDescription'] !== null) {
            $object->setReturnDescription($data['returnDescription']);
            unset($data['returnDescription']);
        } elseif (\array_key_exists('returnDescription', $data) && $data['returnDescription'] === null) {
            $object->setReturnDescription(null);
        }
        if (\array_key_exists('returnErrorId', $data) && $data['returnErrorId'] !== null) {
            $object->setReturnErrorId($data['returnErrorId']);
            unset($data['returnErrorId']);
        } elseif (\array_key_exists('returnErrorId', $data) && $data['returnErrorId'] === null) {
            $object->setReturnErrorId(null);
        }
        if (\array_key_exists('returnErrorName', $data) && $data['returnErrorName'] !== null) {
            $object->setReturnErrorName($data['returnErrorName']);
            unset($data['returnErrorName']);
        } elseif (\array_key_exists('returnErrorName', $data) && $data['returnErrorName'] === null) {
            $object->setReturnErrorName(null);
        }
        if (\array_key_exists('returnReasonId', $data) && $data['returnReasonId'] !== null) {
            $object->setReturnReasonId($data['returnReasonId']);
            unset($data['returnReasonId']);
        } elseif (\array_key_exists('returnReasonId', $data) && $data['returnReasonId'] === null) {
            $object->setReturnReasonId(null);
        }
        if (\array_key_exists('returnReasonName', $data) && $data['returnReasonName'] !== null) {
            $object->setReturnReasonName($data['returnReasonName']);
            unset($data['returnReasonName']);
        } elseif (\array_key_exists('returnReasonName', $data) && $data['returnReasonName'] === null) {
            $object->setReturnReasonName(null);
        }
        if (\array_key_exists('returnRectificationId', $data) && $data['returnRectificationId'] !== null) {
            $object->setReturnRectificationId($data['returnRectificationId']);
            unset($data['returnRectificationId']);
        } elseif (\array_key_exists('returnRectificationId', $data) && $data['returnRectificationId'] === null) {
            $object->setReturnRectificationId(null);
        }
        if (\array_key_exists('returnRectificationName', $data) && $data['returnRectificationName'] !== null) {
            $object->setReturnRectificationName($data['returnRectificationName']);
            unset($data['returnRectificationName']);
        } elseif (\array_key_exists('returnRectificationName', $data) && $data['returnRectificationName'] === null) {
            $object->setReturnRectificationName(null);
        }
        if (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] !== null) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        } elseif (\array_key_exists('salesOrderItemId', $data) && $data['salesOrderItemId'] === null) {
            $object->setSalesOrderItemId(null);
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
        if ($data->isInitialized('addPageBreakBefore') && $data->getAddPageBreakBefore() !== null) {
            $dataArray['addPageBreakBefore'] = $data->getAddPageBreakBefore();
        }
        if ($data->isInitialized('availability') && $data->getAvailability() !== null) {
            $dataArray['availability'] = $data->getAvailability();
        }
        if ($data->isInitialized('availabilityForAllWarehouses') && $data->getAvailabilityForAllWarehouses() !== null) {
            $dataArray['availabilityForAllWarehouses'] = $data->getAvailabilityForAllWarehouses();
        }
        if ($data->isInitialized('groupName') && $data->getGroupName() !== null) {
            $dataArray['groupName'] = $data->getGroupName();
        }
        if ($data->isInitialized('picks') && $data->getPicks() !== null) {
            $values_1 = [];
            foreach ($data->getPicks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['picks'] = $values_1;
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
