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

class PriceCalculationParameterV1Normalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1;
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
        if (\array_key_exists('fixSurcharge', $data) && $data['fixSurcharge'] !== null) {
            $object->setFixSurcharge($data['fixSurcharge']);
            unset($data['fixSurcharge']);
        } elseif (\array_key_exists('fixSurcharge', $data) && $data['fixSurcharge'] === null) {
            $object->setFixSurcharge(null);
        }
        if (\array_key_exists('fromScale', $data) && $data['fromScale'] !== null) {
            $object->setFromScale($data['fromScale']);
            unset($data['fromScale']);
        } elseif (\array_key_exists('fromScale', $data) && $data['fromScale'] === null) {
            $object->setFromScale(null);
        }
        if (\array_key_exists('lowerPurchasePriceBound', $data) && $data['lowerPurchasePriceBound'] !== null) {
            $object->setLowerPurchasePriceBound($data['lowerPurchasePriceBound']);
            unset($data['lowerPurchasePriceBound']);
        } elseif (\array_key_exists('lowerPurchasePriceBound', $data) && $data['lowerPurchasePriceBound'] === null) {
            $object->setLowerPurchasePriceBound(null);
        }
        if (\array_key_exists('margin', $data) && $data['margin'] !== null) {
            $object->setMargin($data['margin']);
            unset($data['margin']);
        } elseif (\array_key_exists('margin', $data) && $data['margin'] === null) {
            $object->setMargin(null);
        }
        if (\array_key_exists('percentSurcharge', $data) && $data['percentSurcharge'] !== null) {
            $object->setPercentSurcharge($data['percentSurcharge']);
            unset($data['percentSurcharge']);
        } elseif (\array_key_exists('percentSurcharge', $data) && $data['percentSurcharge'] === null) {
            $object->setPercentSurcharge(null);
        }
        if (\array_key_exists('profit', $data) && $data['profit'] !== null) {
            $object->setProfit($data['profit']);
            unset($data['profit']);
        } elseif (\array_key_exists('profit', $data) && $data['profit'] === null) {
            $object->setProfit(null);
        }
        if (\array_key_exists('salesChannel', $data) && $data['salesChannel'] !== null) {
            $object->setSalesChannel($data['salesChannel']);
            unset($data['salesChannel']);
        } elseif (\array_key_exists('salesChannel', $data) && $data['salesChannel'] === null) {
            $object->setSalesChannel(null);
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
        if ($data->isInitialized('fixSurcharge') && $data->getFixSurcharge() !== null) {
            $dataArray['fixSurcharge'] = $data->getFixSurcharge();
        }
        if ($data->isInitialized('fromScale') && $data->getFromScale() !== null) {
            $dataArray['fromScale'] = $data->getFromScale();
        }
        if ($data->isInitialized('lowerPurchasePriceBound') && $data->getLowerPurchasePriceBound() !== null) {
            $dataArray['lowerPurchasePriceBound'] = $data->getLowerPurchasePriceBound();
        }
        if ($data->isInitialized('margin') && $data->getMargin() !== null) {
            $dataArray['margin'] = $data->getMargin();
        }
        if ($data->isInitialized('percentSurcharge') && $data->getPercentSurcharge() !== null) {
            $dataArray['percentSurcharge'] = $data->getPercentSurcharge();
        }
        if ($data->isInitialized('profit') && $data->getProfit() !== null) {
            $dataArray['profit'] = $data->getProfit();
        }
        if ($data->isInitialized('salesChannel') && $data->getSalesChannel() !== null) {
            $dataArray['salesChannel'] = $data->getSalesChannel();
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
        return [\Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class => false];
    }
}
