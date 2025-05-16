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

class ArticleCategoryNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ArticleCategory::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ArticleCategory::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ArticleCategory;
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
        if (\array_key_exists('articleAccountingCodeId', $data) && $data['articleAccountingCodeId'] !== null) {
            $object->setArticleAccountingCodeId($data['articleAccountingCodeId']);
            unset($data['articleAccountingCodeId']);
        } elseif (\array_key_exists('articleAccountingCodeId', $data) && $data['articleAccountingCodeId'] === null) {
            $object->setArticleAccountingCodeId(null);
        }
        if (\array_key_exists('articleCategoryClassificationId', $data) && $data['articleCategoryClassificationId'] !== null) {
            $object->setArticleCategoryClassificationId($data['articleCategoryClassificationId']);
            unset($data['articleCategoryClassificationId']);
        } elseif (\array_key_exists('articleCategoryClassificationId', $data) && $data['articleCategoryClassificationId'] === null) {
            $object->setArticleCategoryClassificationId(null);
        }
        if (\array_key_exists('costTypeId', $data) && $data['costTypeId'] !== null) {
            $object->setCostTypeId($data['costTypeId']);
            unset($data['costTypeId']);
        } elseif (\array_key_exists('costTypeId', $data) && $data['costTypeId'] === null) {
            $object->setCostTypeId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('imageId', $data) && $data['imageId'] !== null) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        } elseif (\array_key_exists('imageId', $data) && $data['imageId'] === null) {
            $object->setImageId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('parentCategoryId', $data) && $data['parentCategoryId'] !== null) {
            $object->setParentCategoryId($data['parentCategoryId']);
            unset($data['parentCategoryId']);
        } elseif (\array_key_exists('parentCategoryId', $data) && $data['parentCategoryId'] === null) {
            $object->setParentCategoryId(null);
        }
        if (\array_key_exists('purchaseCostCenterId', $data) && $data['purchaseCostCenterId'] !== null) {
            $object->setPurchaseCostCenterId($data['purchaseCostCenterId']);
            unset($data['purchaseCostCenterId']);
        } elseif (\array_key_exists('purchaseCostCenterId', $data) && $data['purchaseCostCenterId'] === null) {
            $object->setPurchaseCostCenterId(null);
        }
        if (\array_key_exists('salesCostCenterId', $data) && $data['salesCostCenterId'] !== null) {
            $object->setSalesCostCenterId($data['salesCostCenterId']);
            unset($data['salesCostCenterId']);
        } elseif (\array_key_exists('salesCostCenterId', $data) && $data['salesCostCenterId'] === null) {
            $object->setSalesCostCenterId(null);
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
        return [\Webhubworks\WeclappApiCore\Model\ArticleCategory::class => false];
    }
}
