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

class ArticlePriceWithoutSalesChannelNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Weclapp\Generated\Model\ArticlePriceWithoutSalesChannel::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Weclapp\Generated\Model\ArticlePriceWithoutSalesChannel::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Weclapp\Generated\Model\ArticlePriceWithoutSalesChannel;
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
        if (\array_key_exists('currencyId', $data)) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        if (\array_key_exists('currencyName', $data)) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        }
        if (\array_key_exists('lastModifiedByUserId', $data)) {
            $object->setLastModifiedByUserId($data['lastModifiedByUserId']);
            unset($data['lastModifiedByUserId']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (\array_key_exists('priceScaleType', $data)) {
            $object->setPriceScaleType($data['priceScaleType']);
            unset($data['priceScaleType']);
        }
        if (\array_key_exists('priceScaleValue', $data)) {
            $object->setPriceScaleValue($data['priceScaleValue']);
            unset($data['priceScaleValue']);
        }
        if (\array_key_exists('reductionAdditions', $data)) {
            $values = [];
            foreach ($data['reductionAdditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Weclapp\Generated\Model\ReductionAddition::class, 'json', $context);
            }
            $object->setReductionAdditions($values);
            unset($data['reductionAdditions']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
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
        if ($data->isInitialized('currencyId') && $data->getCurrencyId() !== null) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('currencyName') && $data->getCurrencyName() !== null) {
            $dataArray['currencyName'] = $data->getCurrencyName();
        }
        if ($data->isInitialized('customerId') && $data->getCustomerId() !== null) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('description') && $data->getDescription() !== null) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('endDate') && $data->getEndDate() !== null) {
            $dataArray['endDate'] = $data->getEndDate();
        }
        if ($data->isInitialized('lastModifiedByUserId') && $data->getLastModifiedByUserId() !== null) {
            $dataArray['lastModifiedByUserId'] = $data->getLastModifiedByUserId();
        }
        if ($data->isInitialized('price') && $data->getPrice() !== null) {
            $dataArray['price'] = $data->getPrice();
        }
        if ($data->isInitialized('priceScaleType') && $data->getPriceScaleType() !== null) {
            $dataArray['priceScaleType'] = $data->getPriceScaleType();
        }
        if ($data->isInitialized('priceScaleValue') && $data->getPriceScaleValue() !== null) {
            $dataArray['priceScaleValue'] = $data->getPriceScaleValue();
        }
        if ($data->isInitialized('reductionAdditions') && $data->getReductionAdditions() !== null) {
            $values = [];
            foreach ($data->getReductionAdditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['reductionAdditions'] = $values;
        }
        if ($data->isInitialized('startDate') && $data->getStartDate() !== null) {
            $dataArray['startDate'] = $data->getStartDate();
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
        return [\Weclapp\Generated\Model\ArticlePriceWithoutSalesChannel::class => false];
    }
}
