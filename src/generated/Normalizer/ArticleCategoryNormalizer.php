<?php

namespace Weclapp\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Weclapp\Generated\Runtime\Normalizer\CheckArray;
use Weclapp\Generated\Runtime\Normalizer\ValidatorTrait;

class ArticleCategoryNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Weclapp\Generated\Model\ArticleCategory::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Weclapp\Generated\Model\ArticleCategory::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Weclapp\Generated\Model\ArticleCategory;
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
        if (\array_key_exists('articleAccountingCodeId', $data)) {
            $object->setArticleAccountingCodeId($data['articleAccountingCodeId']);
            unset($data['articleAccountingCodeId']);
        }
        if (\array_key_exists('articleCategoryClassificationId', $data)) {
            $object->setArticleCategoryClassificationId($data['articleCategoryClassificationId']);
            unset($data['articleCategoryClassificationId']);
        }
        if (\array_key_exists('costTypeId', $data)) {
            $object->setCostTypeId($data['costTypeId']);
            unset($data['costTypeId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('imageId', $data)) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('parentCategoryId', $data)) {
            $object->setParentCategoryId($data['parentCategoryId']);
            unset($data['parentCategoryId']);
        }
        if (\array_key_exists('purchaseCostCenterId', $data)) {
            $object->setPurchaseCostCenterId($data['purchaseCostCenterId']);
            unset($data['purchaseCostCenterId']);
        }
        if (\array_key_exists('salesCostCenterId', $data)) {
            $object->setSalesCostCenterId($data['salesCostCenterId']);
            unset($data['salesCostCenterId']);
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('articleAccountingCodeId') && $data->getArticleAccountingCodeId() !== null) {
            $dataArray['articleAccountingCodeId'] = $data->getArticleAccountingCodeId();
        }
        if ($data->isInitialized('articleCategoryClassificationId') && $data->getArticleCategoryClassificationId() !== null) {
            $dataArray['articleCategoryClassificationId'] = $data->getArticleCategoryClassificationId();
        }
        if ($data->isInitialized('costTypeId') && $data->getCostTypeId() !== null) {
            $dataArray['costTypeId'] = $data->getCostTypeId();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('imageId') && $data->getImageId() !== null) {
            $dataArray['imageId'] = $data->getImageId();
        }
        if ($data->isInitialized('name') && $data->getName() !== null) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parentCategoryId') && $data->getParentCategoryId() !== null) {
            $dataArray['parentCategoryId'] = $data->getParentCategoryId();
        }
        if ($data->isInitialized('purchaseCostCenterId') && $data->getPurchaseCostCenterId() !== null) {
            $dataArray['purchaseCostCenterId'] = $data->getPurchaseCostCenterId();
        }
        if ($data->isInitialized('salesCostCenterId') && $data->getSalesCostCenterId() !== null) {
            $dataArray['salesCostCenterId'] = $data->getSalesCostCenterId();
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
        return [\Weclapp\Generated\Model\ArticleCategory::class => false];
    }
}
