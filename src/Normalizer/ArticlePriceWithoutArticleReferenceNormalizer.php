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

class ArticlePriceWithoutArticleReferenceNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference;
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
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        } elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('currencyName', $data) && $data['currencyName'] !== null) {
            $object->setCurrencyName($data['currencyName']);
            unset($data['currencyName']);
        } elseif (\array_key_exists('currencyName', $data) && $data['currencyName'] === null) {
            $object->setCurrencyName(null);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        } elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('endDate', $data) && $data['endDate'] !== null) {
            $object->setEndDate($data['endDate']);
            unset($data['endDate']);
        } elseif (\array_key_exists('endDate', $data) && $data['endDate'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('lastModifiedByUserId', $data) && $data['lastModifiedByUserId'] !== null) {
            $object->setLastModifiedByUserId($data['lastModifiedByUserId']);
            unset($data['lastModifiedByUserId']);
        } elseif (\array_key_exists('lastModifiedByUserId', $data) && $data['lastModifiedByUserId'] === null) {
            $object->setLastModifiedByUserId(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
            unset($data['price']);
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('priceScaleType', $data) && $data['priceScaleType'] !== null) {
            $object->setPriceScaleType($data['priceScaleType']);
            unset($data['priceScaleType']);
        } elseif (\array_key_exists('priceScaleType', $data) && $data['priceScaleType'] === null) {
            $object->setPriceScaleType(null);
        }
        if (\array_key_exists('priceScaleValue', $data) && $data['priceScaleValue'] !== null) {
            $object->setPriceScaleValue($data['priceScaleValue']);
            unset($data['priceScaleValue']);
        } elseif (\array_key_exists('priceScaleValue', $data) && $data['priceScaleValue'] === null) {
            $object->setPriceScaleValue(null);
        }
        if (\array_key_exists('reductionAdditions', $data) && $data['reductionAdditions'] !== null) {
            $values = [];
            foreach ($data['reductionAdditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Webhubworks\WeclappApiCore\Model\ReductionAddition::class, 'json', $context);
            }
            $object->setReductionAdditions($values);
            unset($data['reductionAdditions']);
        } elseif (\array_key_exists('reductionAdditions', $data) && $data['reductionAdditions'] === null) {
            $object->setReductionAdditions(null);
        }
        if (\array_key_exists('startDate', $data) && $data['startDate'] !== null) {
            $object->setStartDate($data['startDate']);
            unset($data['startDate']);
        } elseif (\array_key_exists('startDate', $data) && $data['startDate'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        } elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
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
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
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
        return [\Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class => false];
    }
}
