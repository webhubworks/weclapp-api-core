<?php

namespace Webhub\Weclapp\Normalizer;

use Webhub\Weclapp\Runtime\Normalizer\CheckArray;
use Webhub\Weclapp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Webhub\Weclapp\Model\Amount::class => \Webhub\Weclapp\Normalizer\AmountNormalizer::class,
        
        \Webhub\Weclapp\Model\Article::class => \Webhub\Weclapp\Normalizer\ArticleNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleAlternativeQuantity::class => \Webhub\Weclapp\Normalizer\ArticleAlternativeQuantityNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCalculationPrice::class => \Webhub\Weclapp\Normalizer\ArticleCalculationPriceNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCategory::class => \Webhub\Weclapp\Normalizer\ArticleCategoryNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleImage::class => \Webhub\Weclapp\Normalizer\ArticleImageNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleItemGroup::class => \Webhub\Weclapp\Normalizer\ArticleItemGroupNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleItemGroupItem::class => \Webhub\Weclapp\Normalizer\ArticleItemGroupItemNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticlePrice::class => \Webhub\Weclapp\Normalizer\ArticlePriceNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticlePriceWithoutArticleReference::class => \Webhub\Weclapp\Normalizer\ArticlePriceWithoutArticleReferenceNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticlePriceWithoutSalesChannel::class => \Webhub\Weclapp\Normalizer\ArticlePriceWithoutSalesChannelNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleSupplySource::class => \Webhub\Weclapp\Normalizer\ArticleSupplySourceNormalizer::class,
        
        \Webhub\Weclapp\Model\BillOfMaterial::class => \Webhub\Weclapp\Normalizer\BillOfMaterialNormalizer::class,
        
        \Webhub\Weclapp\Model\CustomAttribute::class => \Webhub\Weclapp\Normalizer\CustomAttributeNormalizer::class,
        
        \Webhub\Weclapp\Model\CustomValue::class => \Webhub\Weclapp\Normalizer\CustomValueNormalizer::class,
        
        \Webhub\Weclapp\Model\CustomerSpecificArticleAttributes::class => \Webhub\Weclapp\Normalizer\CustomerSpecificArticleAttributesNormalizer::class,
        
        \Webhub\Weclapp\Model\EntityReference::class => \Webhub\Weclapp\Normalizer\EntityReferenceNormalizer::class,
        
        \Webhub\Weclapp\Model\OnlyId::class => \Webhub\Weclapp\Normalizer\OnlyIdNormalizer::class,
        
        \Webhub\Weclapp\Model\PriceCalculationParameterV1::class => \Webhub\Weclapp\Normalizer\PriceCalculationParameterV1Normalizer::class,
        
        \Webhub\Weclapp\Model\PriceData::class => \Webhub\Weclapp\Normalizer\PriceDataNormalizer::class,
        
        \Webhub\Weclapp\Model\PriceDataReductionAdditionItem::class => \Webhub\Weclapp\Normalizer\PriceDataReductionAdditionItemNormalizer::class,
        
        \Webhub\Weclapp\Model\QuantityConversion::class => \Webhub\Weclapp\Normalizer\QuantityConversionNormalizer::class,
        
        \Webhub\Weclapp\Model\ReductionAddition::class => \Webhub\Weclapp\Normalizer\ReductionAdditionNormalizer::class,
        
        \Webhub\Weclapp\Model\SalesBillOfMaterialArticleItem::class => \Webhub\Weclapp\Normalizer\SalesBillOfMaterialArticleItemNormalizer::class,
        
        \Webhub\Weclapp\Model\SuccessResponse::class => \Webhub\Weclapp\Normalizer\SuccessResponseNormalizer::class,
        
        \Webhub\Weclapp\Model\SupplySource::class => \Webhub\Weclapp\Normalizer\SupplySourceNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleGetResponse200AdditionalProperties::class => \Webhub\Weclapp\Normalizer\ArticleGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody::class => \Webhub\Weclapp\Normalizer\ArticleIdIdChangeUnitPostBodyNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostResponse200::class => \Webhub\Weclapp\Normalizer\ArticleIdIdChangeUnitPostResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => \Webhub\Weclapp\Normalizer\ArticleIdIdCreateDatasheetPdfPostBodyNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody::class => \Webhub\Weclapp\Normalizer\ArticleIdIdCreateLabelPdfPostBodyNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleIdIdPackagingUnitStructureGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleIdIdUploadArticleImagePostResponse200::class => \Webhub\Weclapp\Normalizer\ArticleIdIdUploadArticleImagePostResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleAccountingCodeGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleAccountingCodeGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleAccountingCodeCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleAccountingCodeCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCategoryGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleCategoryGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCategoryCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleCategoryCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => \Webhub\Weclapp\Normalizer\ArticleCategoryIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCategoryClassificationGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleCategoryClassificationGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleCategoryClassificationCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleCategoryClassificationCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleItemGroupGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleItemGroupGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleItemGroupCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleItemGroupCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticlePriceGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticlePriceGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticlePriceCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticlePriceCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleRatingGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleRatingGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleRatingCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleRatingCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleStatusGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleStatusGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleStatusCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleStatusCountGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleSupplySourceGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleSupplySourceGetResponse200Normalizer::class,
        
        \Webhub\Weclapp\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => \Webhub\Weclapp\Normalizer\ArticleSupplySourceGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhub\Weclapp\Model\ArticleSupplySourceCountGetResponse200::class => \Webhub\Weclapp\Normalizer\ArticleSupplySourceCountGetResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Webhub\Weclapp\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
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
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Webhub\Weclapp\Model\Amount::class => false,
            \Webhub\Weclapp\Model\Article::class => false,
            \Webhub\Weclapp\Model\ArticleAlternativeQuantity::class => false,
            \Webhub\Weclapp\Model\ArticleCalculationPrice::class => false,
            \Webhub\Weclapp\Model\ArticleCategory::class => false,
            \Webhub\Weclapp\Model\ArticleImage::class => false,
            \Webhub\Weclapp\Model\ArticleItemGroup::class => false,
            \Webhub\Weclapp\Model\ArticleItemGroupItem::class => false,
            \Webhub\Weclapp\Model\ArticlePrice::class => false,
            \Webhub\Weclapp\Model\ArticlePriceWithoutArticleReference::class => false,
            \Webhub\Weclapp\Model\ArticlePriceWithoutSalesChannel::class => false,
            \Webhub\Weclapp\Model\ArticleSupplySource::class => false,
            \Webhub\Weclapp\Model\BillOfMaterial::class => false,
            \Webhub\Weclapp\Model\CustomAttribute::class => false,
            \Webhub\Weclapp\Model\CustomValue::class => false,
            \Webhub\Weclapp\Model\CustomerSpecificArticleAttributes::class => false,
            \Webhub\Weclapp\Model\EntityReference::class => false,
            \Webhub\Weclapp\Model\OnlyId::class => false,
            \Webhub\Weclapp\Model\PriceCalculationParameterV1::class => false,
            \Webhub\Weclapp\Model\PriceData::class => false,
            \Webhub\Weclapp\Model\PriceDataReductionAdditionItem::class => false,
            \Webhub\Weclapp\Model\QuantityConversion::class => false,
            \Webhub\Weclapp\Model\ReductionAddition::class => false,
            \Webhub\Weclapp\Model\SalesBillOfMaterialArticleItem::class => false,
            \Webhub\Weclapp\Model\SuccessResponse::class => false,
            \Webhub\Weclapp\Model\SupplySource::class => false,
            \Webhub\Weclapp\Model\ArticleGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleGetResponse200AdditionalProperties::class => false,
            \Webhub\Weclapp\Model\ArticleCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostBody::class => false,
            \Webhub\Weclapp\Model\ArticleIdIdChangeUnitPostResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => false,
            \Webhub\Weclapp\Model\ArticleIdIdCreateLabelPdfPostBody::class => false,
            \Webhub\Weclapp\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleIdIdUploadArticleImagePostResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleAccountingCodeGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleAccountingCodeCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleCategoryGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleCategoryCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleCategoryClassificationGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleCategoryClassificationCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleItemGroupGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleItemGroupCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticlePriceGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticlePriceCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleRatingGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleRatingCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleStatusGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleStatusCountGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleSupplySourceGetResponse200::class => false,
            \Webhub\Weclapp\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => false,
            \Webhub\Weclapp\Model\ArticleSupplySourceCountGetResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}