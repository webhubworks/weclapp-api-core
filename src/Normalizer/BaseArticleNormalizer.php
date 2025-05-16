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

class BaseArticleNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BaseArticle::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BaseArticle::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BaseArticle;
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
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttribute::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        if (\array_key_exists('articleNumber', $data)) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        if (\array_key_exists('fixedPurchaseQuantity', $data)) {
            $object->setFixedPurchaseQuantity($data['fixedPurchaseQuantity']);
            unset($data['fixedPurchaseQuantity']);
        }
        if (\array_key_exists('internalNote', $data)) {
            $object->setInternalNote($data['internalNote']);
            unset($data['internalNote']);
        }
        if (\array_key_exists('manufacturerPartNumber', $data)) {
            $object->setManufacturerPartNumber($data['manufacturerPartNumber']);
            unset($data['manufacturerPartNumber']);
        }
        if (\array_key_exists('matchCode', $data)) {
            $object->setMatchCode($data['matchCode']);
            unset($data['matchCode']);
        }
        if (\array_key_exists('minimumPurchaseQuantity', $data)) {
            $object->setMinimumPurchaseQuantity($data['minimumPurchaseQuantity']);
            unset($data['minimumPurchaseQuantity']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shortDescription1', $data)) {
            $object->setShortDescription1($data['shortDescription1']);
            unset($data['shortDescription1']);
        }
        if (\array_key_exists('shortDescription2', $data)) {
            $object->setShortDescription2($data['shortDescription2']);
            unset($data['shortDescription2']);
        }
        if (\array_key_exists('taxRateType', $data)) {
            $object->setTaxRateType($data['taxRateType']);
            unset($data['taxRateType']);
        }
        if (\array_key_exists('unitId', $data)) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        }
        if (\array_key_exists('unitName', $data)) {
            $object->setUnitName($data['unitName']);
            unset($data['unitName']);
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\BaseArticle::class => false];
    }
}
