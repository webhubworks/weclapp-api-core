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

class PurchaseInvoiceShippingCostItemNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem;
        if (\array_key_exists('manualUnitPrice', $data) && \is_int($data['manualUnitPrice'])) {
            $data['manualUnitPrice'] = (bool) $data['manualUnitPrice'];
        }
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
        if (\array_key_exists('articleId', $data) && $data['articleId'] !== null) {
            $object->setArticleId($data['articleId']);
            unset($data['articleId']);
        } elseif (\array_key_exists('articleId', $data) && $data['articleId'] === null) {
            $object->setArticleId(null);
        }
        if (\array_key_exists('articleNumber', $data) && $data['articleNumber'] !== null) {
            $object->setArticleNumber($data['articleNumber']);
            unset($data['articleNumber']);
        } elseif (\array_key_exists('articleNumber', $data) && $data['articleNumber'] === null) {
            $object->setArticleNumber(null);
        }
        if (\array_key_exists('grossAmount', $data) && $data['grossAmount'] !== null) {
            $object->setGrossAmount($data['grossAmount']);
            unset($data['grossAmount']);
        } elseif (\array_key_exists('grossAmount', $data) && $data['grossAmount'] === null) {
            $object->setGrossAmount(null);
        }
        if (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] !== null) {
            $object->setGrossAmountInCompanyCurrency($data['grossAmountInCompanyCurrency']);
            unset($data['grossAmountInCompanyCurrency']);
        } elseif (\array_key_exists('grossAmountInCompanyCurrency', $data) && $data['grossAmountInCompanyCurrency'] === null) {
            $object->setGrossAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] !== null) {
            $object->setManualUnitPrice($data['manualUnitPrice']);
            unset($data['manualUnitPrice']);
        } elseif (\array_key_exists('manualUnitPrice', $data) && $data['manualUnitPrice'] === null) {
            $object->setManualUnitPrice(null);
        }
        if (\array_key_exists('netAmount', $data) && $data['netAmount'] !== null) {
            $object->setNetAmount($data['netAmount']);
            unset($data['netAmount']);
        } elseif (\array_key_exists('netAmount', $data) && $data['netAmount'] === null) {
            $object->setNetAmount(null);
        }
        if (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] !== null) {
            $object->setNetAmountInCompanyCurrency($data['netAmountInCompanyCurrency']);
            unset($data['netAmountInCompanyCurrency']);
        } elseif (\array_key_exists('netAmountInCompanyCurrency', $data) && $data['netAmountInCompanyCurrency'] === null) {
            $object->setNetAmountInCompanyCurrency(null);
        }
        if (\array_key_exists('unitPrice', $data) && $data['unitPrice'] !== null) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        } elseif (\array_key_exists('unitPrice', $data) && $data['unitPrice'] === null) {
            $object->setUnitPrice(null);
        }
        if (\array_key_exists('unitPriceInCompanyCurrency', $data) && $data['unitPriceInCompanyCurrency'] !== null) {
            $object->setUnitPriceInCompanyCurrency($data['unitPriceInCompanyCurrency']);
            unset($data['unitPriceInCompanyCurrency']);
        } elseif (\array_key_exists('unitPriceInCompanyCurrency', $data) && $data['unitPriceInCompanyCurrency'] === null) {
            $object->setUnitPriceInCompanyCurrency(null);
        }
        if (\array_key_exists('taxId', $data) && $data['taxId'] !== null) {
            $object->setTaxId($data['taxId']);
            unset($data['taxId']);
        } elseif (\array_key_exists('taxId', $data) && $data['taxId'] === null) {
            $object->setTaxId(null);
        }
        if (\array_key_exists('taxName', $data) && $data['taxName'] !== null) {
            $object->setTaxName($data['taxName']);
            unset($data['taxName']);
        } elseif (\array_key_exists('taxName', $data) && $data['taxName'] === null) {
            $object->setTaxName(null);
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
        if ($data->isInitialized('articleId') && $data->getArticleId() !== null) {
            $dataArray['articleId'] = $data->getArticleId();
        }
        if ($data->isInitialized('articleNumber') && $data->getArticleNumber() !== null) {
            $dataArray['articleNumber'] = $data->getArticleNumber();
        }
        if ($data->isInitialized('grossAmount') && $data->getGrossAmount() !== null) {
            $dataArray['grossAmount'] = $data->getGrossAmount();
        }
        if ($data->isInitialized('grossAmountInCompanyCurrency') && $data->getGrossAmountInCompanyCurrency() !== null) {
            $dataArray['grossAmountInCompanyCurrency'] = $data->getGrossAmountInCompanyCurrency();
        }
        if ($data->isInitialized('manualUnitPrice') && $data->getManualUnitPrice() !== null) {
            $dataArray['manualUnitPrice'] = $data->getManualUnitPrice();
        }
        if ($data->isInitialized('netAmount') && $data->getNetAmount() !== null) {
            $dataArray['netAmount'] = $data->getNetAmount();
        }
        if ($data->isInitialized('netAmountInCompanyCurrency') && $data->getNetAmountInCompanyCurrency() !== null) {
            $dataArray['netAmountInCompanyCurrency'] = $data->getNetAmountInCompanyCurrency();
        }
        if ($data->isInitialized('unitPrice') && $data->getUnitPrice() !== null) {
            $dataArray['unitPrice'] = $data->getUnitPrice();
        }
        if ($data->isInitialized('unitPriceInCompanyCurrency') && $data->getUnitPriceInCompanyCurrency() !== null) {
            $dataArray['unitPriceInCompanyCurrency'] = $data->getUnitPriceInCompanyCurrency();
        }
        if ($data->isInitialized('taxId') && $data->getTaxId() !== null) {
            $dataArray['taxId'] = $data->getTaxId();
        }
        if ($data->isInitialized('taxName') && $data->getTaxName() !== null) {
            $dataArray['taxName'] = $data->getTaxName();
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
        return [\Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem::class => false];
    }
}
