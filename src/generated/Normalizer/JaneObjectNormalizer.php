<?php

namespace Weclapp\Generated\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Weclapp\Generated\Runtime\Normalizer\CheckArray;
use Weclapp\Generated\Runtime\Normalizer\ValidatorTrait;

class JaneObjectNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    protected $normalizers = [

        \Weclapp\Generated\Model\Amount::class => \Weclapp\Generated\Normalizer\AmountNormalizer::class,

        \Weclapp\Generated\Model\Article::class => \Weclapp\Generated\Normalizer\ArticleNormalizer::class,

        \Weclapp\Generated\Model\ArticleAlternativeQuantity::class => \Weclapp\Generated\Normalizer\ArticleAlternativeQuantityNormalizer::class,

        \Weclapp\Generated\Model\ArticleCalculationPrice::class => \Weclapp\Generated\Normalizer\ArticleCalculationPriceNormalizer::class,

        \Weclapp\Generated\Model\ArticleCategory::class => \Weclapp\Generated\Normalizer\ArticleCategoryNormalizer::class,

        \Weclapp\Generated\Model\ArticleImage::class => \Weclapp\Generated\Normalizer\ArticleImageNormalizer::class,

        \Weclapp\Generated\Model\ArticleItemGroup::class => \Weclapp\Generated\Normalizer\ArticleItemGroupNormalizer::class,

        \Weclapp\Generated\Model\ArticleItemGroupItem::class => \Weclapp\Generated\Normalizer\ArticleItemGroupItemNormalizer::class,

        \Weclapp\Generated\Model\ArticlePrice::class => \Weclapp\Generated\Normalizer\ArticlePriceNormalizer::class,

        \Weclapp\Generated\Model\ArticlePriceWithoutArticleReference::class => \Weclapp\Generated\Normalizer\ArticlePriceWithoutArticleReferenceNormalizer::class,

        \Weclapp\Generated\Model\ArticlePriceWithoutSalesChannel::class => \Weclapp\Generated\Normalizer\ArticlePriceWithoutSalesChannelNormalizer::class,

        \Weclapp\Generated\Model\ArticleSupplySource::class => \Weclapp\Generated\Normalizer\ArticleSupplySourceNormalizer::class,

        \Weclapp\Generated\Model\BillOfMaterial::class => \Weclapp\Generated\Normalizer\BillOfMaterialNormalizer::class,

        \Weclapp\Generated\Model\CustomAttribute::class => \Weclapp\Generated\Normalizer\CustomAttributeNormalizer::class,

        \Weclapp\Generated\Model\CustomValue::class => \Weclapp\Generated\Normalizer\CustomValueNormalizer::class,

        \Weclapp\Generated\Model\CustomerSpecificArticleAttributes::class => \Weclapp\Generated\Normalizer\CustomerSpecificArticleAttributesNormalizer::class,

        \Weclapp\Generated\Model\EntityReference::class => \Weclapp\Generated\Normalizer\EntityReferenceNormalizer::class,

        \Weclapp\Generated\Model\OnlyId::class => \Weclapp\Generated\Normalizer\OnlyIdNormalizer::class,

        \Weclapp\Generated\Model\PriceCalculationParameterV1::class => \Weclapp\Generated\Normalizer\PriceCalculationParameterV1Normalizer::class,

        \Weclapp\Generated\Model\PriceData::class => \Weclapp\Generated\Normalizer\PriceDataNormalizer::class,

        \Weclapp\Generated\Model\PriceDataReductionAdditionItem::class => \Weclapp\Generated\Normalizer\PriceDataReductionAdditionItemNormalizer::class,

        \Weclapp\Generated\Model\QuantityConversion::class => \Weclapp\Generated\Normalizer\QuantityConversionNormalizer::class,

        \Weclapp\Generated\Model\ReductionAddition::class => \Weclapp\Generated\Normalizer\ReductionAdditionNormalizer::class,

        \Weclapp\Generated\Model\SalesBillOfMaterialArticleItem::class => \Weclapp\Generated\Normalizer\SalesBillOfMaterialArticleItemNormalizer::class,

        \Weclapp\Generated\Model\SuccessResponse::class => \Weclapp\Generated\Normalizer\SuccessResponseNormalizer::class,

        \Weclapp\Generated\Model\SupplySource::class => \Weclapp\Generated\Normalizer\SupplySourceNormalizer::class,

        \Weclapp\Generated\Model\ArticleGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleGetResponse200AdditionalProperties::class => \Weclapp\Generated\Normalizer\ArticleGetResponse200AdditionalPropertiesNormalizer::class,

        \Weclapp\Generated\Model\ArticleCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleIdIdChangeUnitPostBody::class => \Weclapp\Generated\Normalizer\ArticleIdIdChangeUnitPostBodyNormalizer::class,

        \Weclapp\Generated\Model\ArticleIdIdChangeUnitPostResponse200::class => \Weclapp\Generated\Normalizer\ArticleIdIdChangeUnitPostResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => \Weclapp\Generated\Normalizer\ArticleIdIdCreateDatasheetPdfPostBodyNormalizer::class,

        \Weclapp\Generated\Model\ArticleIdIdCreateLabelPdfPostBody::class => \Weclapp\Generated\Normalizer\ArticleIdIdCreateLabelPdfPostBodyNormalizer::class,

        \Weclapp\Generated\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleIdIdPackagingUnitStructureGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleIdIdUploadArticleImagePostResponse200::class => \Weclapp\Generated\Normalizer\ArticleIdIdUploadArticleImagePostResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleAccountingCodeGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleAccountingCodeGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleAccountingCodeCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleAccountingCodeCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleCategoryGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleCategoryGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleCategoryCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleCategoryCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => \Weclapp\Generated\Normalizer\ArticleCategoryIdIdUploadImagePostResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleCategoryClassificationGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleCategoryClassificationGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleCategoryClassificationCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleCategoryClassificationCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleItemGroupGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleItemGroupGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleItemGroupCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleItemGroupCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticlePriceGetResponse200::class => \Weclapp\Generated\Normalizer\ArticlePriceGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticlePriceCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticlePriceCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleRatingGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleRatingGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleRatingCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleRatingCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleStatusGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleStatusGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleStatusCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleStatusCountGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleSupplySourceGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleSupplySourceGetResponse200Normalizer::class,

        \Weclapp\Generated\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => \Weclapp\Generated\Normalizer\ArticleSupplySourceGetResponse200AdditionalPropertiesNormalizer::class,

        \Weclapp\Generated\Model\ArticleSupplySourceCountGetResponse200::class => \Weclapp\Generated\Normalizer\ArticleSupplySourceCountGetResponse200Normalizer::class,

        \Jane\Component\JsonSchemaRuntime\Reference::class => \Weclapp\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
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

            \Weclapp\Generated\Model\Amount::class => false,
            \Weclapp\Generated\Model\Article::class => false,
            \Weclapp\Generated\Model\ArticleAlternativeQuantity::class => false,
            \Weclapp\Generated\Model\ArticleCalculationPrice::class => false,
            \Weclapp\Generated\Model\ArticleCategory::class => false,
            \Weclapp\Generated\Model\ArticleImage::class => false,
            \Weclapp\Generated\Model\ArticleItemGroup::class => false,
            \Weclapp\Generated\Model\ArticleItemGroupItem::class => false,
            \Weclapp\Generated\Model\ArticlePrice::class => false,
            \Weclapp\Generated\Model\ArticlePriceWithoutArticleReference::class => false,
            \Weclapp\Generated\Model\ArticlePriceWithoutSalesChannel::class => false,
            \Weclapp\Generated\Model\ArticleSupplySource::class => false,
            \Weclapp\Generated\Model\BillOfMaterial::class => false,
            \Weclapp\Generated\Model\CustomAttribute::class => false,
            \Weclapp\Generated\Model\CustomValue::class => false,
            \Weclapp\Generated\Model\CustomerSpecificArticleAttributes::class => false,
            \Weclapp\Generated\Model\EntityReference::class => false,
            \Weclapp\Generated\Model\OnlyId::class => false,
            \Weclapp\Generated\Model\PriceCalculationParameterV1::class => false,
            \Weclapp\Generated\Model\PriceData::class => false,
            \Weclapp\Generated\Model\PriceDataReductionAdditionItem::class => false,
            \Weclapp\Generated\Model\QuantityConversion::class => false,
            \Weclapp\Generated\Model\ReductionAddition::class => false,
            \Weclapp\Generated\Model\SalesBillOfMaterialArticleItem::class => false,
            \Weclapp\Generated\Model\SuccessResponse::class => false,
            \Weclapp\Generated\Model\SupplySource::class => false,
            \Weclapp\Generated\Model\ArticleGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleGetResponse200AdditionalProperties::class => false,
            \Weclapp\Generated\Model\ArticleCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleIdIdChangeUnitPostBody::class => false,
            \Weclapp\Generated\Model\ArticleIdIdChangeUnitPostResponse200::class => false,
            \Weclapp\Generated\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => false,
            \Weclapp\Generated\Model\ArticleIdIdCreateLabelPdfPostBody::class => false,
            \Weclapp\Generated\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleIdIdUploadArticleImagePostResponse200::class => false,
            \Weclapp\Generated\Model\ArticleAccountingCodeGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleAccountingCodeCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleCategoryGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleCategoryCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => false,
            \Weclapp\Generated\Model\ArticleCategoryClassificationGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleCategoryClassificationCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleItemGroupGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleItemGroupCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticlePriceGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticlePriceCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleRatingGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleRatingCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleStatusGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleStatusCountGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleSupplySourceGetResponse200::class => false,
            \Weclapp\Generated\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => false,
            \Weclapp\Generated\Model\ArticleSupplySourceCountGetResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}
