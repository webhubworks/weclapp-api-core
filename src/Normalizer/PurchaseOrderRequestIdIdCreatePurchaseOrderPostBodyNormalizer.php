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

class PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('offerId', $data) && $data['offerId'] !== null) {
            $object->setOfferId($data['offerId']);
            unset($data['offerId']);
        } elseif (\array_key_exists('offerId', $data) && $data['offerId'] === null) {
            $object->setOfferId(null);
        }
        if (\array_key_exists('offerItemToUpdateSupplierInformation', $data) && $data['offerItemToUpdateSupplierInformation'] !== null) {
            $values = [];
            foreach ($data['offerItemToUpdateSupplierInformation'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem::class, 'json', $context);
            }
            $object->setOfferItemToUpdateSupplierInformation($values);
            unset($data['offerItemToUpdateSupplierInformation']);
        } elseif (\array_key_exists('offerItemToUpdateSupplierInformation', $data) && $data['offerItemToUpdateSupplierInformation'] === null) {
            $object->setOfferItemToUpdateSupplierInformation(null);
        }
        if (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] !== null) {
            $object->setSalesOrderId($data['salesOrderId']);
            unset($data['salesOrderId']);
        } elseif (\array_key_exists('salesOrderId', $data) && $data['salesOrderId'] === null) {
            $object->setSalesOrderId(null);
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
        $dataArray['offerId'] = $data->getOfferId();
        $values = [];
        foreach ($data->getOfferItemToUpdateSupplierInformation() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['offerItemToUpdateSupplierInformation'] = $values;
        if ($data->isInitialized('salesOrderId') && $data->getSalesOrderId() !== null) {
            $dataArray['salesOrderId'] = $data->getSalesOrderId();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody::class => false];
    }
}
