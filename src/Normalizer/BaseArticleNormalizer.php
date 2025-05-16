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
class BaseArticleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\BaseArticle();
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
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\CustomAttribute::class, 'json', $context);
            }
            $object->setCustomAttributes($values);
            unset($data['customAttributes']);
        }
        elseif (\array_key_exists('customAttributes', $data) && $data['customAttributes'] === null) {
            $object->setCustomAttributes(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        }
        elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('fixedPurchaseQuantity', $data) && $data['fixedPurchaseQuantity'] !== null) {
            $object->setFixedPurchaseQuantity($data['fixedPurchaseQuantity']);
            unset($data['fixedPurchaseQuantity']);
        }
        elseif (\array_key_exists('fixedPurchaseQuantity', $data) && $data['fixedPurchaseQuantity'] === null) {
            $object->setFixedPurchaseQuantity(null);
        }
        if (\array_key_exists('internalNote', $data) && $data['internalNote'] !== null) {
            $object->setInternalNote($data['internalNote']);
            unset($data['internalNote']);
        }
        elseif (\array_key_exists('internalNote', $data) && $data['internalNote'] === null) {
            $object->setInternalNote(null);
        }
        if (\array_key_exists('manufacturerPartNumber', $data) && $data['manufacturerPartNumber'] !== null) {
            $object->setManufacturerPartNumber($data['manufacturerPartNumber']);
            unset($data['manufacturerPartNumber']);
        }
        elseif (\array_key_exists('manufacturerPartNumber', $data) && $data['manufacturerPartNumber'] === null) {
            $object->setManufacturerPartNumber(null);
        }
        if (\array_key_exists('matchCode', $data) && $data['matchCode'] !== null) {
            $object->setMatchCode($data['matchCode']);
            unset($data['matchCode']);
        }
        elseif (\array_key_exists('matchCode', $data) && $data['matchCode'] === null) {
            $object->setMatchCode(null);
        }
        if (\array_key_exists('minimumPurchaseQuantity', $data) && $data['minimumPurchaseQuantity'] !== null) {
            $object->setMinimumPurchaseQuantity($data['minimumPurchaseQuantity']);
            unset($data['minimumPurchaseQuantity']);
        }
        elseif (\array_key_exists('minimumPurchaseQuantity', $data) && $data['minimumPurchaseQuantity'] === null) {
            $object->setMinimumPurchaseQuantity(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('shortDescription1', $data) && $data['shortDescription1'] !== null) {
            $object->setShortDescription1($data['shortDescription1']);
            unset($data['shortDescription1']);
        }
        elseif (\array_key_exists('shortDescription1', $data) && $data['shortDescription1'] === null) {
            $object->setShortDescription1(null);
        }
        if (\array_key_exists('shortDescription2', $data) && $data['shortDescription2'] !== null) {
            $object->setShortDescription2($data['shortDescription2']);
            unset($data['shortDescription2']);
        }
        elseif (\array_key_exists('shortDescription2', $data) && $data['shortDescription2'] === null) {
            $object->setShortDescription2(null);
        }
        if (\array_key_exists('taxRateType', $data) && $data['taxRateType'] !== null) {
            $object->setTaxRateType($data['taxRateType']);
            unset($data['taxRateType']);
        }
        elseif (\array_key_exists('taxRateType', $data) && $data['taxRateType'] === null) {
            $object->setTaxRateType(null);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['customAttributes'] = $values;
        }
        if ($data->isInitialized('articleNumber') && null !== $data->getArticleNumber()) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ean') && null !== $data->getEan()) {
            $dataArray['ean'] = $data->getEan();
        }
        if ($data->isInitialized('fixedPurchaseQuantity') && null !== $data->getFixedPurchaseQuantity()) {
            $dataArray['fixedPurchaseQuantity'] = $data->getFixedPurchaseQuantity();
        }
        if ($data->isInitialized('internalNote') && null !== $data->getInternalNote()) {
            $dataArray['internalNote'] = $data->getInternalNote();
        }
        if ($data->isInitialized('manufacturerPartNumber') && null !== $data->getManufacturerPartNumber()) {
            $dataArray['manufacturerPartNumber'] = $data->getManufacturerPartNumber();
        }
        if ($data->isInitialized('matchCode') && null !== $data->getMatchCode()) {
            $dataArray['matchCode'] = $data->getMatchCode();
        }
        if ($data->isInitialized('minimumPurchaseQuantity') && null !== $data->getMinimumPurchaseQuantity()) {
            $dataArray['minimumPurchaseQuantity'] = $data->getMinimumPurchaseQuantity();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shortDescription1') && null !== $data->getShortDescription1()) {
            $dataArray['shortDescription1'] = $data->getShortDescription1();
        }
        if ($data->isInitialized('shortDescription2') && null !== $data->getShortDescription2()) {
            $dataArray['shortDescription2'] = $data->getShortDescription2();
        }
        if ($data->isInitialized('taxRateType') && null !== $data->getTaxRateType()) {
            $dataArray['taxRateType'] = $data->getTaxRateType();
        }
        if ($data->isInitialized('unitId') && null !== $data->getUnitId()) {
            $dataArray['unitId'] = $data->getUnitId();
        }
        if ($data->isInitialized('unitName') && null !== $data->getUnitName()) {
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