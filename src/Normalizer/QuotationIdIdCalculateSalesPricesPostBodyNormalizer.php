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
class QuotationIdIdCalculateSalesPricesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('calculationMode', $data) && $data['calculationMode'] !== null) {
            $object->setCalculationMode($data['calculationMode']);
            unset($data['calculationMode']);
        }
        elseif (\array_key_exists('calculationMode', $data) && $data['calculationMode'] === null) {
            $object->setCalculationMode(null);
        }
        if (\array_key_exists('percentage', $data) && $data['percentage'] !== null) {
            $object->setPercentage($data['percentage']);
            unset($data['percentage']);
        }
        elseif (\array_key_exists('percentage', $data) && $data['percentage'] === null) {
            $object->setPercentage(null);
        }
        if (\array_key_exists('quotationItemIds', $data) && $data['quotationItemIds'] !== null) {
            $values = [];
            foreach ($data['quotationItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setQuotationItemIds($values);
            unset($data['quotationItemIds']);
        }
        elseif (\array_key_exists('quotationItemIds', $data) && $data['quotationItemIds'] === null) {
            $object->setQuotationItemIds(null);
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
        $dataArray['calculationMode'] = $data->getCalculationMode();
        $dataArray['percentage'] = $data->getPercentage();
        if ($data->isInitialized('quotationItemIds') && null !== $data->getQuotationItemIds()) {
            $values = [];
            foreach ($data->getQuotationItemIds() as $value) {
                $values[] = $value;
            }
            $dataArray['quotationItemIds'] = $values;
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
        return [\Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody::class => false];
    }
}