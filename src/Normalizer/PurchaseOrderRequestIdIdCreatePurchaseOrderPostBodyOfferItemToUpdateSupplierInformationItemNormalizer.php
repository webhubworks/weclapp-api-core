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
class PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem();
        if (\array_key_exists('createOrUpdateArticleSupplySource', $data) && \is_int($data['createOrUpdateArticleSupplySource'])) {
            $data['createOrUpdateArticleSupplySource'] = (bool) $data['createOrUpdateArticleSupplySource'];
        }
        if (\array_key_exists('updateInformation', $data) && \is_int($data['updateInformation'])) {
            $data['updateInformation'] = (bool) $data['updateInformation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('createOrUpdateArticleSupplySource', $data)) {
            $object->setCreateOrUpdateArticleSupplySource($data['createOrUpdateArticleSupplySource']);
            unset($data['createOrUpdateArticleSupplySource']);
        }
        if (\array_key_exists('offerItemId', $data)) {
            $object->setOfferItemId($data['offerItemId']);
            unset($data['offerItemId']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('salesOrderItemId', $data)) {
            $object->setSalesOrderItemId($data['salesOrderItemId']);
            unset($data['salesOrderItemId']);
        }
        if (\array_key_exists('updateInformation', $data)) {
            $object->setUpdateInformation($data['updateInformation']);
            unset($data['updateInformation']);
        }
        if (\array_key_exists('updatePurchasePrice', $data)) {
            $object->setUpdatePurchasePrice($data['updatePurchasePrice']);
            unset($data['updatePurchasePrice']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('createOrUpdateArticleSupplySource') && null !== $data->getCreateOrUpdateArticleSupplySource()) {
            $dataArray['createOrUpdateArticleSupplySource'] = $data->getCreateOrUpdateArticleSupplySource();
        }
        if ($data->isInitialized('offerItemId') && null !== $data->getOfferItemId()) {
            $dataArray['offerItemId'] = $data->getOfferItemId();
        }
        if ($data->isInitialized('quantity') && null !== $data->getQuantity()) {
            $dataArray['quantity'] = $data->getQuantity();
        }
        if ($data->isInitialized('salesOrderItemId') && null !== $data->getSalesOrderItemId()) {
            $dataArray['salesOrderItemId'] = $data->getSalesOrderItemId();
        }
        if ($data->isInitialized('updateInformation') && null !== $data->getUpdateInformation()) {
            $dataArray['updateInformation'] = $data->getUpdateInformation();
        }
        if ($data->isInitialized('updatePurchasePrice') && null !== $data->getUpdatePurchasePrice()) {
            $dataArray['updatePurchasePrice'] = $data->getUpdatePurchasePrice();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem::class => false];
    }
}