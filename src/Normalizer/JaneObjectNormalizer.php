<?php

namespace Webhubworks\WeclappApiCore\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\CheckArray;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\ValidatorTrait;

class JaneObjectNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    protected $normalizers = [

        \Webhubworks\WeclappApiCore\Model\Amount::class => \Webhubworks\WeclappApiCore\Normalizer\AmountNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\Article::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleAlternativeQuantityNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCalculationPrice::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCalculationPriceNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCategory::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleImage::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleImageNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleItemGroup::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleItemGroupItem::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupItemNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticlePrice::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceWithoutArticleReferenceNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutSalesChannel::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceWithoutSalesChannelNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleSupplySource::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\BillOfMaterial::class => \Webhubworks\WeclappApiCore\Normalizer\BillOfMaterialNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\CustomAttribute::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\CustomValue::class => \Webhubworks\WeclappApiCore\Normalizer\CustomValueNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\CustomerSpecificArticleAttributes::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerSpecificArticleAttributesNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\EntityReference::class => \Webhubworks\WeclappApiCore\Normalizer\EntityReferenceNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\OnlyId::class => \Webhubworks\WeclappApiCore\Normalizer\OnlyIdNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class => \Webhubworks\WeclappApiCore\Normalizer\PriceCalculationParameterV1Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\PriceData::class => \Webhubworks\WeclappApiCore\Normalizer\PriceDataNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\PriceDataReductionAdditionItem::class => \Webhubworks\WeclappApiCore\Normalizer\PriceDataReductionAdditionItemNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\QuantityConversion::class => \Webhubworks\WeclappApiCore\Normalizer\QuantityConversionNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ReductionAddition::class => \Webhubworks\WeclappApiCore\Normalizer\ReductionAdditionNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\SalesBillOfMaterialArticleItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesBillOfMaterialArticleItemNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\SuccessResponse::class => \Webhubworks\WeclappApiCore\Normalizer\SuccessResponseNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\SupplySource::class => \Webhubworks\WeclappApiCore\Normalizer\SupplySourceNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleGetResponse200AdditionalPropertiesNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdChangeUnitPostBodyNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdChangeUnitPostResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdCreateDatasheetPdfPostBodyNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateLabelPdfPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdCreateLabelPdfPostBodyNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdPackagingUnitStructureGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleIdIdUploadArticleImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdUploadArticleImagePostResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleAccountingCodeGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleAccountingCodeCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCategoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCategoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryIdIdUploadImagePostResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryClassificationGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryClassificationCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleItemGroupGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleItemGroupCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticlePriceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticlePriceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleRatingGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleRatingGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleRatingCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleRatingCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleStatusGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleStatusGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleStatusCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleStatusCountGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceGetResponse200Normalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceGetResponse200AdditionalPropertiesNormalizer::class,

        \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceCountGetResponse200Normalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Webhubworks\WeclappApiCore\Runtime\Normalizer\ReferenceNormalizer::class,
    ];

    protected $normalizersCache = [];

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($data, $format, $context);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $type, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass;
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [

            \Webhubworks\WeclappApiCore\Model\Amount::class => false,
            \Webhubworks\WeclappApiCore\Model\Article::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCalculationPrice::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategory::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleImage::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroup::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroupItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePrice::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutSalesChannel::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySource::class => false,
            \Webhubworks\WeclappApiCore\Model\BillOfMaterial::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttribute::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomValue::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerSpecificArticleAttributes::class => false,
            \Webhubworks\WeclappApiCore\Model\EntityReference::class => false,
            \Webhubworks\WeclappApiCore\Model\OnlyId::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceData::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceDataReductionAdditionItem::class => false,
            \Webhubworks\WeclappApiCore\Model\QuantityConversion::class => false,
            \Webhubworks\WeclappApiCore\Model\ReductionAddition::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesBillOfMaterialArticleItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SuccessResponse::class => false,
            \Webhubworks\WeclappApiCore\Model\SupplySource::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateLabelPdfPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdUploadArticleImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroupGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroupCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleRatingGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleRatingCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleStatusGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleStatusCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceCountGetResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}
