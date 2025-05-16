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

class PartyGetResponse200AdditionalPropertiesNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties::class;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties;
        if ($data === null || \is_array($data) === false) {
            return $object;
        }
        if (\array_key_exists('customerChildrenSalesOrderVolumeCurrentYear', $data) && $data['customerChildrenSalesOrderVolumeCurrentYear'] !== null) {
            $values = [];
            foreach ($data['customerChildrenSalesOrderVolumeCurrentYear'] as $value) {
                $values[] = $value;
            }
            $object->setCustomerChildrenSalesOrderVolumeCurrentYear($values);
            unset($data['customerChildrenSalesOrderVolumeCurrentYear']);
        } elseif (\array_key_exists('customerChildrenSalesOrderVolumeCurrentYear', $data) && $data['customerChildrenSalesOrderVolumeCurrentYear'] === null) {
            $object->setCustomerChildrenSalesOrderVolumeCurrentYear(null);
        }
        if (\array_key_exists('customerChildrenSalesOrderVolumePreviousYear', $data) && $data['customerChildrenSalesOrderVolumePreviousYear'] !== null) {
            $values_1 = [];
            foreach ($data['customerChildrenSalesOrderVolumePreviousYear'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCustomerChildrenSalesOrderVolumePreviousYear($values_1);
            unset($data['customerChildrenSalesOrderVolumePreviousYear']);
        } elseif (\array_key_exists('customerChildrenSalesOrderVolumePreviousYear', $data) && $data['customerChildrenSalesOrderVolumePreviousYear'] === null) {
            $object->setCustomerChildrenSalesOrderVolumePreviousYear(null);
        }
        if (\array_key_exists('customerChildrenSalesRevenueCurrentYear', $data) && $data['customerChildrenSalesRevenueCurrentYear'] !== null) {
            $values_2 = [];
            foreach ($data['customerChildrenSalesRevenueCurrentYear'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCustomerChildrenSalesRevenueCurrentYear($values_2);
            unset($data['customerChildrenSalesRevenueCurrentYear']);
        } elseif (\array_key_exists('customerChildrenSalesRevenueCurrentYear', $data) && $data['customerChildrenSalesRevenueCurrentYear'] === null) {
            $object->setCustomerChildrenSalesRevenueCurrentYear(null);
        }
        if (\array_key_exists('customerChildrenSalesRevenuePreviousYear', $data) && $data['customerChildrenSalesRevenuePreviousYear'] !== null) {
            $values_3 = [];
            foreach ($data['customerChildrenSalesRevenuePreviousYear'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCustomerChildrenSalesRevenuePreviousYear($values_3);
            unset($data['customerChildrenSalesRevenuePreviousYear']);
        } elseif (\array_key_exists('customerChildrenSalesRevenuePreviousYear', $data) && $data['customerChildrenSalesRevenuePreviousYear'] === null) {
            $object->setCustomerChildrenSalesRevenuePreviousYear(null);
        }
        if (\array_key_exists('customerQuotationAcceptancePercentage', $data) && $data['customerQuotationAcceptancePercentage'] !== null) {
            $values_4 = [];
            foreach ($data['customerQuotationAcceptancePercentage'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCustomerQuotationAcceptancePercentage($values_4);
            unset($data['customerQuotationAcceptancePercentage']);
        } elseif (\array_key_exists('customerQuotationAcceptancePercentage', $data) && $data['customerQuotationAcceptancePercentage'] === null) {
            $object->setCustomerQuotationAcceptancePercentage(null);
        }
        if (\array_key_exists('customerQuotationAcceptanceTimeInDays', $data) && $data['customerQuotationAcceptanceTimeInDays'] !== null) {
            $values_5 = [];
            foreach ($data['customerQuotationAcceptanceTimeInDays'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setCustomerQuotationAcceptanceTimeInDays($values_5);
            unset($data['customerQuotationAcceptanceTimeInDays']);
        } elseif (\array_key_exists('customerQuotationAcceptanceTimeInDays', $data) && $data['customerQuotationAcceptanceTimeInDays'] === null) {
            $object->setCustomerQuotationAcceptanceTimeInDays(null);
        }
        if (\array_key_exists('customerReturnPercentageCurrentYear', $data) && $data['customerReturnPercentageCurrentYear'] !== null) {
            $values_6 = [];
            foreach ($data['customerReturnPercentageCurrentYear'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setCustomerReturnPercentageCurrentYear($values_6);
            unset($data['customerReturnPercentageCurrentYear']);
        } elseif (\array_key_exists('customerReturnPercentageCurrentYear', $data) && $data['customerReturnPercentageCurrentYear'] === null) {
            $object->setCustomerReturnPercentageCurrentYear(null);
        }
        if (\array_key_exists('customerReturnPercentagePreviousYear', $data) && $data['customerReturnPercentagePreviousYear'] !== null) {
            $values_7 = [];
            foreach ($data['customerReturnPercentagePreviousYear'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setCustomerReturnPercentagePreviousYear($values_7);
            unset($data['customerReturnPercentagePreviousYear']);
        } elseif (\array_key_exists('customerReturnPercentagePreviousYear', $data) && $data['customerReturnPercentagePreviousYear'] === null) {
            $object->setCustomerReturnPercentagePreviousYear(null);
        }
        if (\array_key_exists('customerSalesOpenItemOverdueSum', $data) && $data['customerSalesOpenItemOverdueSum'] !== null) {
            $values_8 = [];
            foreach ($data['customerSalesOpenItemOverdueSum'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setCustomerSalesOpenItemOverdueSum($values_8);
            unset($data['customerSalesOpenItemOverdueSum']);
        } elseif (\array_key_exists('customerSalesOpenItemOverdueSum', $data) && $data['customerSalesOpenItemOverdueSum'] === null) {
            $object->setCustomerSalesOpenItemOverdueSum(null);
        }
        if (\array_key_exists('customerSalesOpenItemSum', $data) && $data['customerSalesOpenItemSum'] !== null) {
            $values_9 = [];
            foreach ($data['customerSalesOpenItemSum'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setCustomerSalesOpenItemSum($values_9);
            unset($data['customerSalesOpenItemSum']);
        } elseif (\array_key_exists('customerSalesOpenItemSum', $data) && $data['customerSalesOpenItemSum'] === null) {
            $object->setCustomerSalesOpenItemSum(null);
        }
        if (\array_key_exists('customerSalesOrderVolumeCurrentYear', $data) && $data['customerSalesOrderVolumeCurrentYear'] !== null) {
            $values_10 = [];
            foreach ($data['customerSalesOrderVolumeCurrentYear'] as $value_10) {
                $values_10[] = $value_10;
            }
            $object->setCustomerSalesOrderVolumeCurrentYear($values_10);
            unset($data['customerSalesOrderVolumeCurrentYear']);
        } elseif (\array_key_exists('customerSalesOrderVolumeCurrentYear', $data) && $data['customerSalesOrderVolumeCurrentYear'] === null) {
            $object->setCustomerSalesOrderVolumeCurrentYear(null);
        }
        if (\array_key_exists('customerSalesOrderVolumePreviousYear', $data) && $data['customerSalesOrderVolumePreviousYear'] !== null) {
            $values_11 = [];
            foreach ($data['customerSalesOrderVolumePreviousYear'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setCustomerSalesOrderVolumePreviousYear($values_11);
            unset($data['customerSalesOrderVolumePreviousYear']);
        } elseif (\array_key_exists('customerSalesOrderVolumePreviousYear', $data) && $data['customerSalesOrderVolumePreviousYear'] === null) {
            $object->setCustomerSalesOrderVolumePreviousYear(null);
        }
        if (\array_key_exists('customerSalesRevenueCurrentYear', $data) && $data['customerSalesRevenueCurrentYear'] !== null) {
            $values_12 = [];
            foreach ($data['customerSalesRevenueCurrentYear'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setCustomerSalesRevenueCurrentYear($values_12);
            unset($data['customerSalesRevenueCurrentYear']);
        } elseif (\array_key_exists('customerSalesRevenueCurrentYear', $data) && $data['customerSalesRevenueCurrentYear'] === null) {
            $object->setCustomerSalesRevenueCurrentYear(null);
        }
        if (\array_key_exists('customerSalesRevenuePreviousYear', $data) && $data['customerSalesRevenuePreviousYear'] !== null) {
            $values_13 = [];
            foreach ($data['customerSalesRevenuePreviousYear'] as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setCustomerSalesRevenuePreviousYear($values_13);
            unset($data['customerSalesRevenuePreviousYear']);
        } elseif (\array_key_exists('customerSalesRevenuePreviousYear', $data) && $data['customerSalesRevenuePreviousYear'] === null) {
            $object->setCustomerSalesRevenuePreviousYear(null);
        }
        if (\array_key_exists('leadChildrenExpectedRevenueOpportunities', $data) && $data['leadChildrenExpectedRevenueOpportunities'] !== null) {
            $values_14 = [];
            foreach ($data['leadChildrenExpectedRevenueOpportunities'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setLeadChildrenExpectedRevenueOpportunities($values_14);
            unset($data['leadChildrenExpectedRevenueOpportunities']);
        } elseif (\array_key_exists('leadChildrenExpectedRevenueOpportunities', $data) && $data['leadChildrenExpectedRevenueOpportunities'] === null) {
            $object->setLeadChildrenExpectedRevenueOpportunities(null);
        }
        if (\array_key_exists('leadChildrenExpectedRevenueQuotations', $data) && $data['leadChildrenExpectedRevenueQuotations'] !== null) {
            $values_15 = [];
            foreach ($data['leadChildrenExpectedRevenueQuotations'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setLeadChildrenExpectedRevenueQuotations($values_15);
            unset($data['leadChildrenExpectedRevenueQuotations']);
        } elseif (\array_key_exists('leadChildrenExpectedRevenueQuotations', $data) && $data['leadChildrenExpectedRevenueQuotations'] === null) {
            $object->setLeadChildrenExpectedRevenueQuotations(null);
        }
        if (\array_key_exists('leadChildrenQuotationVolume', $data) && $data['leadChildrenQuotationVolume'] !== null) {
            $values_16 = [];
            foreach ($data['leadChildrenQuotationVolume'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setLeadChildrenQuotationVolume($values_16);
            unset($data['leadChildrenQuotationVolume']);
        } elseif (\array_key_exists('leadChildrenQuotationVolume', $data) && $data['leadChildrenQuotationVolume'] === null) {
            $object->setLeadChildrenQuotationVolume(null);
        }
        if (\array_key_exists('leadExpectedRevenueOpportunities', $data) && $data['leadExpectedRevenueOpportunities'] !== null) {
            $values_17 = [];
            foreach ($data['leadExpectedRevenueOpportunities'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setLeadExpectedRevenueOpportunities($values_17);
            unset($data['leadExpectedRevenueOpportunities']);
        } elseif (\array_key_exists('leadExpectedRevenueOpportunities', $data) && $data['leadExpectedRevenueOpportunities'] === null) {
            $object->setLeadExpectedRevenueOpportunities(null);
        }
        if (\array_key_exists('leadExpectedRevenueQuotations', $data) && $data['leadExpectedRevenueQuotations'] !== null) {
            $values_18 = [];
            foreach ($data['leadExpectedRevenueQuotations'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setLeadExpectedRevenueQuotations($values_18);
            unset($data['leadExpectedRevenueQuotations']);
        } elseif (\array_key_exists('leadExpectedRevenueQuotations', $data) && $data['leadExpectedRevenueQuotations'] === null) {
            $object->setLeadExpectedRevenueQuotations(null);
        }
        if (\array_key_exists('leadQuotationVolume', $data) && $data['leadQuotationVolume'] !== null) {
            $values_19 = [];
            foreach ($data['leadQuotationVolume'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setLeadQuotationVolume($values_19);
            unset($data['leadQuotationVolume']);
        } elseif (\array_key_exists('leadQuotationVolume', $data) && $data['leadQuotationVolume'] === null) {
            $object->setLeadQuotationVolume(null);
        }
        if (\array_key_exists('supplierChildrenPurchaseOrderVolumeCurrentYear', $data) && $data['supplierChildrenPurchaseOrderVolumeCurrentYear'] !== null) {
            $values_20 = [];
            foreach ($data['supplierChildrenPurchaseOrderVolumeCurrentYear'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setSupplierChildrenPurchaseOrderVolumeCurrentYear($values_20);
            unset($data['supplierChildrenPurchaseOrderVolumeCurrentYear']);
        } elseif (\array_key_exists('supplierChildrenPurchaseOrderVolumeCurrentYear', $data) && $data['supplierChildrenPurchaseOrderVolumeCurrentYear'] === null) {
            $object->setSupplierChildrenPurchaseOrderVolumeCurrentYear(null);
        }
        if (\array_key_exists('supplierChildrenPurchaseOrderVolumePreviousYear', $data) && $data['supplierChildrenPurchaseOrderVolumePreviousYear'] !== null) {
            $values_21 = [];
            foreach ($data['supplierChildrenPurchaseOrderVolumePreviousYear'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setSupplierChildrenPurchaseOrderVolumePreviousYear($values_21);
            unset($data['supplierChildrenPurchaseOrderVolumePreviousYear']);
        } elseif (\array_key_exists('supplierChildrenPurchaseOrderVolumePreviousYear', $data) && $data['supplierChildrenPurchaseOrderVolumePreviousYear'] === null) {
            $object->setSupplierChildrenPurchaseOrderVolumePreviousYear(null);
        }
        if (\array_key_exists('supplierChildrenPurchaseRevenueCurrentYear', $data) && $data['supplierChildrenPurchaseRevenueCurrentYear'] !== null) {
            $values_22 = [];
            foreach ($data['supplierChildrenPurchaseRevenueCurrentYear'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setSupplierChildrenPurchaseRevenueCurrentYear($values_22);
            unset($data['supplierChildrenPurchaseRevenueCurrentYear']);
        } elseif (\array_key_exists('supplierChildrenPurchaseRevenueCurrentYear', $data) && $data['supplierChildrenPurchaseRevenueCurrentYear'] === null) {
            $object->setSupplierChildrenPurchaseRevenueCurrentYear(null);
        }
        if (\array_key_exists('supplierChildrenPurchaseRevenuePreviousYear', $data) && $data['supplierChildrenPurchaseRevenuePreviousYear'] !== null) {
            $values_23 = [];
            foreach ($data['supplierChildrenPurchaseRevenuePreviousYear'] as $value_23) {
                $values_23[] = $value_23;
            }
            $object->setSupplierChildrenPurchaseRevenuePreviousYear($values_23);
            unset($data['supplierChildrenPurchaseRevenuePreviousYear']);
        } elseif (\array_key_exists('supplierChildrenPurchaseRevenuePreviousYear', $data) && $data['supplierChildrenPurchaseRevenuePreviousYear'] === null) {
            $object->setSupplierChildrenPurchaseRevenuePreviousYear(null);
        }
        if (\array_key_exists('supplierPurchaseOrderVolumeCurrentYear', $data) && $data['supplierPurchaseOrderVolumeCurrentYear'] !== null) {
            $values_24 = [];
            foreach ($data['supplierPurchaseOrderVolumeCurrentYear'] as $value_24) {
                $values_24[] = $value_24;
            }
            $object->setSupplierPurchaseOrderVolumeCurrentYear($values_24);
            unset($data['supplierPurchaseOrderVolumeCurrentYear']);
        } elseif (\array_key_exists('supplierPurchaseOrderVolumeCurrentYear', $data) && $data['supplierPurchaseOrderVolumeCurrentYear'] === null) {
            $object->setSupplierPurchaseOrderVolumeCurrentYear(null);
        }
        if (\array_key_exists('supplierPurchaseOrderVolumePreviousYear', $data) && $data['supplierPurchaseOrderVolumePreviousYear'] !== null) {
            $values_25 = [];
            foreach ($data['supplierPurchaseOrderVolumePreviousYear'] as $value_25) {
                $values_25[] = $value_25;
            }
            $object->setSupplierPurchaseOrderVolumePreviousYear($values_25);
            unset($data['supplierPurchaseOrderVolumePreviousYear']);
        } elseif (\array_key_exists('supplierPurchaseOrderVolumePreviousYear', $data) && $data['supplierPurchaseOrderVolumePreviousYear'] === null) {
            $object->setSupplierPurchaseOrderVolumePreviousYear(null);
        }
        if (\array_key_exists('supplierPurchaseRevenueCurrentYear', $data) && $data['supplierPurchaseRevenueCurrentYear'] !== null) {
            $values_26 = [];
            foreach ($data['supplierPurchaseRevenueCurrentYear'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->setSupplierPurchaseRevenueCurrentYear($values_26);
            unset($data['supplierPurchaseRevenueCurrentYear']);
        } elseif (\array_key_exists('supplierPurchaseRevenueCurrentYear', $data) && $data['supplierPurchaseRevenueCurrentYear'] === null) {
            $object->setSupplierPurchaseRevenueCurrentYear(null);
        }
        if (\array_key_exists('supplierPurchaseRevenuePreviousYear', $data) && $data['supplierPurchaseRevenuePreviousYear'] !== null) {
            $values_27 = [];
            foreach ($data['supplierPurchaseRevenuePreviousYear'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setSupplierPurchaseRevenuePreviousYear($values_27);
            unset($data['supplierPurchaseRevenuePreviousYear']);
        } elseif (\array_key_exists('supplierPurchaseRevenuePreviousYear', $data) && $data['supplierPurchaseRevenuePreviousYear'] === null) {
            $object->setSupplierPurchaseRevenuePreviousYear(null);
        }
        foreach ($data as $key => $value_28) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_28;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('customerChildrenSalesOrderVolumeCurrentYear') && $data->getCustomerChildrenSalesOrderVolumeCurrentYear() !== null) {
            $values = [];
            foreach ($data->getCustomerChildrenSalesOrderVolumeCurrentYear() as $value) {
                $values[] = $value;
            }
            $dataArray['customerChildrenSalesOrderVolumeCurrentYear'] = $values;
        }
        if ($data->isInitialized('customerChildrenSalesOrderVolumePreviousYear') && $data->getCustomerChildrenSalesOrderVolumePreviousYear() !== null) {
            $values_1 = [];
            foreach ($data->getCustomerChildrenSalesOrderVolumePreviousYear() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['customerChildrenSalesOrderVolumePreviousYear'] = $values_1;
        }
        if ($data->isInitialized('customerChildrenSalesRevenueCurrentYear') && $data->getCustomerChildrenSalesRevenueCurrentYear() !== null) {
            $values_2 = [];
            foreach ($data->getCustomerChildrenSalesRevenueCurrentYear() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['customerChildrenSalesRevenueCurrentYear'] = $values_2;
        }
        if ($data->isInitialized('customerChildrenSalesRevenuePreviousYear') && $data->getCustomerChildrenSalesRevenuePreviousYear() !== null) {
            $values_3 = [];
            foreach ($data->getCustomerChildrenSalesRevenuePreviousYear() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['customerChildrenSalesRevenuePreviousYear'] = $values_3;
        }
        if ($data->isInitialized('customerQuotationAcceptancePercentage') && $data->getCustomerQuotationAcceptancePercentage() !== null) {
            $values_4 = [];
            foreach ($data->getCustomerQuotationAcceptancePercentage() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['customerQuotationAcceptancePercentage'] = $values_4;
        }
        if ($data->isInitialized('customerQuotationAcceptanceTimeInDays') && $data->getCustomerQuotationAcceptanceTimeInDays() !== null) {
            $values_5 = [];
            foreach ($data->getCustomerQuotationAcceptanceTimeInDays() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['customerQuotationAcceptanceTimeInDays'] = $values_5;
        }
        if ($data->isInitialized('customerReturnPercentageCurrentYear') && $data->getCustomerReturnPercentageCurrentYear() !== null) {
            $values_6 = [];
            foreach ($data->getCustomerReturnPercentageCurrentYear() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['customerReturnPercentageCurrentYear'] = $values_6;
        }
        if ($data->isInitialized('customerReturnPercentagePreviousYear') && $data->getCustomerReturnPercentagePreviousYear() !== null) {
            $values_7 = [];
            foreach ($data->getCustomerReturnPercentagePreviousYear() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['customerReturnPercentagePreviousYear'] = $values_7;
        }
        if ($data->isInitialized('customerSalesOpenItemOverdueSum') && $data->getCustomerSalesOpenItemOverdueSum() !== null) {
            $values_8 = [];
            foreach ($data->getCustomerSalesOpenItemOverdueSum() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['customerSalesOpenItemOverdueSum'] = $values_8;
        }
        if ($data->isInitialized('customerSalesOpenItemSum') && $data->getCustomerSalesOpenItemSum() !== null) {
            $values_9 = [];
            foreach ($data->getCustomerSalesOpenItemSum() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['customerSalesOpenItemSum'] = $values_9;
        }
        if ($data->isInitialized('customerSalesOrderVolumeCurrentYear') && $data->getCustomerSalesOrderVolumeCurrentYear() !== null) {
            $values_10 = [];
            foreach ($data->getCustomerSalesOrderVolumeCurrentYear() as $value_10) {
                $values_10[] = $value_10;
            }
            $dataArray['customerSalesOrderVolumeCurrentYear'] = $values_10;
        }
        if ($data->isInitialized('customerSalesOrderVolumePreviousYear') && $data->getCustomerSalesOrderVolumePreviousYear() !== null) {
            $values_11 = [];
            foreach ($data->getCustomerSalesOrderVolumePreviousYear() as $value_11) {
                $values_11[] = $value_11;
            }
            $dataArray['customerSalesOrderVolumePreviousYear'] = $values_11;
        }
        if ($data->isInitialized('customerSalesRevenueCurrentYear') && $data->getCustomerSalesRevenueCurrentYear() !== null) {
            $values_12 = [];
            foreach ($data->getCustomerSalesRevenueCurrentYear() as $value_12) {
                $values_12[] = $value_12;
            }
            $dataArray['customerSalesRevenueCurrentYear'] = $values_12;
        }
        if ($data->isInitialized('customerSalesRevenuePreviousYear') && $data->getCustomerSalesRevenuePreviousYear() !== null) {
            $values_13 = [];
            foreach ($data->getCustomerSalesRevenuePreviousYear() as $value_13) {
                $values_13[] = $value_13;
            }
            $dataArray['customerSalesRevenuePreviousYear'] = $values_13;
        }
        if ($data->isInitialized('leadChildrenExpectedRevenueOpportunities') && $data->getLeadChildrenExpectedRevenueOpportunities() !== null) {
            $values_14 = [];
            foreach ($data->getLeadChildrenExpectedRevenueOpportunities() as $value_14) {
                $values_14[] = $value_14;
            }
            $dataArray['leadChildrenExpectedRevenueOpportunities'] = $values_14;
        }
        if ($data->isInitialized('leadChildrenExpectedRevenueQuotations') && $data->getLeadChildrenExpectedRevenueQuotations() !== null) {
            $values_15 = [];
            foreach ($data->getLeadChildrenExpectedRevenueQuotations() as $value_15) {
                $values_15[] = $value_15;
            }
            $dataArray['leadChildrenExpectedRevenueQuotations'] = $values_15;
        }
        if ($data->isInitialized('leadChildrenQuotationVolume') && $data->getLeadChildrenQuotationVolume() !== null) {
            $values_16 = [];
            foreach ($data->getLeadChildrenQuotationVolume() as $value_16) {
                $values_16[] = $value_16;
            }
            $dataArray['leadChildrenQuotationVolume'] = $values_16;
        }
        if ($data->isInitialized('leadExpectedRevenueOpportunities') && $data->getLeadExpectedRevenueOpportunities() !== null) {
            $values_17 = [];
            foreach ($data->getLeadExpectedRevenueOpportunities() as $value_17) {
                $values_17[] = $value_17;
            }
            $dataArray['leadExpectedRevenueOpportunities'] = $values_17;
        }
        if ($data->isInitialized('leadExpectedRevenueQuotations') && $data->getLeadExpectedRevenueQuotations() !== null) {
            $values_18 = [];
            foreach ($data->getLeadExpectedRevenueQuotations() as $value_18) {
                $values_18[] = $value_18;
            }
            $dataArray['leadExpectedRevenueQuotations'] = $values_18;
        }
        if ($data->isInitialized('leadQuotationVolume') && $data->getLeadQuotationVolume() !== null) {
            $values_19 = [];
            foreach ($data->getLeadQuotationVolume() as $value_19) {
                $values_19[] = $value_19;
            }
            $dataArray['leadQuotationVolume'] = $values_19;
        }
        if ($data->isInitialized('supplierChildrenPurchaseOrderVolumeCurrentYear') && $data->getSupplierChildrenPurchaseOrderVolumeCurrentYear() !== null) {
            $values_20 = [];
            foreach ($data->getSupplierChildrenPurchaseOrderVolumeCurrentYear() as $value_20) {
                $values_20[] = $value_20;
            }
            $dataArray['supplierChildrenPurchaseOrderVolumeCurrentYear'] = $values_20;
        }
        if ($data->isInitialized('supplierChildrenPurchaseOrderVolumePreviousYear') && $data->getSupplierChildrenPurchaseOrderVolumePreviousYear() !== null) {
            $values_21 = [];
            foreach ($data->getSupplierChildrenPurchaseOrderVolumePreviousYear() as $value_21) {
                $values_21[] = $value_21;
            }
            $dataArray['supplierChildrenPurchaseOrderVolumePreviousYear'] = $values_21;
        }
        if ($data->isInitialized('supplierChildrenPurchaseRevenueCurrentYear') && $data->getSupplierChildrenPurchaseRevenueCurrentYear() !== null) {
            $values_22 = [];
            foreach ($data->getSupplierChildrenPurchaseRevenueCurrentYear() as $value_22) {
                $values_22[] = $value_22;
            }
            $dataArray['supplierChildrenPurchaseRevenueCurrentYear'] = $values_22;
        }
        if ($data->isInitialized('supplierChildrenPurchaseRevenuePreviousYear') && $data->getSupplierChildrenPurchaseRevenuePreviousYear() !== null) {
            $values_23 = [];
            foreach ($data->getSupplierChildrenPurchaseRevenuePreviousYear() as $value_23) {
                $values_23[] = $value_23;
            }
            $dataArray['supplierChildrenPurchaseRevenuePreviousYear'] = $values_23;
        }
        if ($data->isInitialized('supplierPurchaseOrderVolumeCurrentYear') && $data->getSupplierPurchaseOrderVolumeCurrentYear() !== null) {
            $values_24 = [];
            foreach ($data->getSupplierPurchaseOrderVolumeCurrentYear() as $value_24) {
                $values_24[] = $value_24;
            }
            $dataArray['supplierPurchaseOrderVolumeCurrentYear'] = $values_24;
        }
        if ($data->isInitialized('supplierPurchaseOrderVolumePreviousYear') && $data->getSupplierPurchaseOrderVolumePreviousYear() !== null) {
            $values_25 = [];
            foreach ($data->getSupplierPurchaseOrderVolumePreviousYear() as $value_25) {
                $values_25[] = $value_25;
            }
            $dataArray['supplierPurchaseOrderVolumePreviousYear'] = $values_25;
        }
        if ($data->isInitialized('supplierPurchaseRevenueCurrentYear') && $data->getSupplierPurchaseRevenueCurrentYear() !== null) {
            $values_26 = [];
            foreach ($data->getSupplierPurchaseRevenueCurrentYear() as $value_26) {
                $values_26[] = $value_26;
            }
            $dataArray['supplierPurchaseRevenueCurrentYear'] = $values_26;
        }
        if ($data->isInitialized('supplierPurchaseRevenuePreviousYear') && $data->getSupplierPurchaseRevenuePreviousYear() !== null) {
            $values_27 = [];
            foreach ($data->getSupplierPurchaseRevenuePreviousYear() as $value_27) {
                $values_27[] = $value_27;
            }
            $dataArray['supplierPurchaseRevenuePreviousYear'] = $values_27;
        }
        foreach ($data as $key => $value_28) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_28;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties::class => false];
    }
}
