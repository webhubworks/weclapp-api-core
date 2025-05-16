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
class PartyGetResponse200AdditionalPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerChildrenSalesOrderVolumeCurrentYear', $data)) {
            $values = [];
            foreach ($data['customerChildrenSalesOrderVolumeCurrentYear'] as $value) {
                $values[] = $value;
            }
            $object->setCustomerChildrenSalesOrderVolumeCurrentYear($values);
            unset($data['customerChildrenSalesOrderVolumeCurrentYear']);
        }
        if (\array_key_exists('customerChildrenSalesOrderVolumePreviousYear', $data)) {
            $values_1 = [];
            foreach ($data['customerChildrenSalesOrderVolumePreviousYear'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCustomerChildrenSalesOrderVolumePreviousYear($values_1);
            unset($data['customerChildrenSalesOrderVolumePreviousYear']);
        }
        if (\array_key_exists('customerChildrenSalesRevenueCurrentYear', $data)) {
            $values_2 = [];
            foreach ($data['customerChildrenSalesRevenueCurrentYear'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCustomerChildrenSalesRevenueCurrentYear($values_2);
            unset($data['customerChildrenSalesRevenueCurrentYear']);
        }
        if (\array_key_exists('customerChildrenSalesRevenuePreviousYear', $data)) {
            $values_3 = [];
            foreach ($data['customerChildrenSalesRevenuePreviousYear'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCustomerChildrenSalesRevenuePreviousYear($values_3);
            unset($data['customerChildrenSalesRevenuePreviousYear']);
        }
        if (\array_key_exists('customerQuotationAcceptancePercentage', $data)) {
            $values_4 = [];
            foreach ($data['customerQuotationAcceptancePercentage'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCustomerQuotationAcceptancePercentage($values_4);
            unset($data['customerQuotationAcceptancePercentage']);
        }
        if (\array_key_exists('customerQuotationAcceptanceTimeInDays', $data)) {
            $values_5 = [];
            foreach ($data['customerQuotationAcceptanceTimeInDays'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setCustomerQuotationAcceptanceTimeInDays($values_5);
            unset($data['customerQuotationAcceptanceTimeInDays']);
        }
        if (\array_key_exists('customerReturnPercentageCurrentYear', $data)) {
            $values_6 = [];
            foreach ($data['customerReturnPercentageCurrentYear'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setCustomerReturnPercentageCurrentYear($values_6);
            unset($data['customerReturnPercentageCurrentYear']);
        }
        if (\array_key_exists('customerReturnPercentagePreviousYear', $data)) {
            $values_7 = [];
            foreach ($data['customerReturnPercentagePreviousYear'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setCustomerReturnPercentagePreviousYear($values_7);
            unset($data['customerReturnPercentagePreviousYear']);
        }
        if (\array_key_exists('customerSalesOpenItemOverdueSum', $data)) {
            $values_8 = [];
            foreach ($data['customerSalesOpenItemOverdueSum'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setCustomerSalesOpenItemOverdueSum($values_8);
            unset($data['customerSalesOpenItemOverdueSum']);
        }
        if (\array_key_exists('customerSalesOpenItemSum', $data)) {
            $values_9 = [];
            foreach ($data['customerSalesOpenItemSum'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setCustomerSalesOpenItemSum($values_9);
            unset($data['customerSalesOpenItemSum']);
        }
        if (\array_key_exists('customerSalesOrderVolumeCurrentYear', $data)) {
            $values_10 = [];
            foreach ($data['customerSalesOrderVolumeCurrentYear'] as $value_10) {
                $values_10[] = $value_10;
            }
            $object->setCustomerSalesOrderVolumeCurrentYear($values_10);
            unset($data['customerSalesOrderVolumeCurrentYear']);
        }
        if (\array_key_exists('customerSalesOrderVolumePreviousYear', $data)) {
            $values_11 = [];
            foreach ($data['customerSalesOrderVolumePreviousYear'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setCustomerSalesOrderVolumePreviousYear($values_11);
            unset($data['customerSalesOrderVolumePreviousYear']);
        }
        if (\array_key_exists('customerSalesRevenueCurrentYear', $data)) {
            $values_12 = [];
            foreach ($data['customerSalesRevenueCurrentYear'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setCustomerSalesRevenueCurrentYear($values_12);
            unset($data['customerSalesRevenueCurrentYear']);
        }
        if (\array_key_exists('customerSalesRevenuePreviousYear', $data)) {
            $values_13 = [];
            foreach ($data['customerSalesRevenuePreviousYear'] as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setCustomerSalesRevenuePreviousYear($values_13);
            unset($data['customerSalesRevenuePreviousYear']);
        }
        if (\array_key_exists('leadChildrenExpectedRevenueOpportunities', $data)) {
            $values_14 = [];
            foreach ($data['leadChildrenExpectedRevenueOpportunities'] as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setLeadChildrenExpectedRevenueOpportunities($values_14);
            unset($data['leadChildrenExpectedRevenueOpportunities']);
        }
        if (\array_key_exists('leadChildrenExpectedRevenueQuotations', $data)) {
            $values_15 = [];
            foreach ($data['leadChildrenExpectedRevenueQuotations'] as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setLeadChildrenExpectedRevenueQuotations($values_15);
            unset($data['leadChildrenExpectedRevenueQuotations']);
        }
        if (\array_key_exists('leadChildrenQuotationVolume', $data)) {
            $values_16 = [];
            foreach ($data['leadChildrenQuotationVolume'] as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setLeadChildrenQuotationVolume($values_16);
            unset($data['leadChildrenQuotationVolume']);
        }
        if (\array_key_exists('leadExpectedRevenueOpportunities', $data)) {
            $values_17 = [];
            foreach ($data['leadExpectedRevenueOpportunities'] as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setLeadExpectedRevenueOpportunities($values_17);
            unset($data['leadExpectedRevenueOpportunities']);
        }
        if (\array_key_exists('leadExpectedRevenueQuotations', $data)) {
            $values_18 = [];
            foreach ($data['leadExpectedRevenueQuotations'] as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setLeadExpectedRevenueQuotations($values_18);
            unset($data['leadExpectedRevenueQuotations']);
        }
        if (\array_key_exists('leadQuotationVolume', $data)) {
            $values_19 = [];
            foreach ($data['leadQuotationVolume'] as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setLeadQuotationVolume($values_19);
            unset($data['leadQuotationVolume']);
        }
        if (\array_key_exists('supplierChildrenPurchaseOrderVolumeCurrentYear', $data)) {
            $values_20 = [];
            foreach ($data['supplierChildrenPurchaseOrderVolumeCurrentYear'] as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setSupplierChildrenPurchaseOrderVolumeCurrentYear($values_20);
            unset($data['supplierChildrenPurchaseOrderVolumeCurrentYear']);
        }
        if (\array_key_exists('supplierChildrenPurchaseOrderVolumePreviousYear', $data)) {
            $values_21 = [];
            foreach ($data['supplierChildrenPurchaseOrderVolumePreviousYear'] as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setSupplierChildrenPurchaseOrderVolumePreviousYear($values_21);
            unset($data['supplierChildrenPurchaseOrderVolumePreviousYear']);
        }
        if (\array_key_exists('supplierChildrenPurchaseRevenueCurrentYear', $data)) {
            $values_22 = [];
            foreach ($data['supplierChildrenPurchaseRevenueCurrentYear'] as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setSupplierChildrenPurchaseRevenueCurrentYear($values_22);
            unset($data['supplierChildrenPurchaseRevenueCurrentYear']);
        }
        if (\array_key_exists('supplierChildrenPurchaseRevenuePreviousYear', $data)) {
            $values_23 = [];
            foreach ($data['supplierChildrenPurchaseRevenuePreviousYear'] as $value_23) {
                $values_23[] = $value_23;
            }
            $object->setSupplierChildrenPurchaseRevenuePreviousYear($values_23);
            unset($data['supplierChildrenPurchaseRevenuePreviousYear']);
        }
        if (\array_key_exists('supplierPurchaseOrderVolumeCurrentYear', $data)) {
            $values_24 = [];
            foreach ($data['supplierPurchaseOrderVolumeCurrentYear'] as $value_24) {
                $values_24[] = $value_24;
            }
            $object->setSupplierPurchaseOrderVolumeCurrentYear($values_24);
            unset($data['supplierPurchaseOrderVolumeCurrentYear']);
        }
        if (\array_key_exists('supplierPurchaseOrderVolumePreviousYear', $data)) {
            $values_25 = [];
            foreach ($data['supplierPurchaseOrderVolumePreviousYear'] as $value_25) {
                $values_25[] = $value_25;
            }
            $object->setSupplierPurchaseOrderVolumePreviousYear($values_25);
            unset($data['supplierPurchaseOrderVolumePreviousYear']);
        }
        if (\array_key_exists('supplierPurchaseRevenueCurrentYear', $data)) {
            $values_26 = [];
            foreach ($data['supplierPurchaseRevenueCurrentYear'] as $value_26) {
                $values_26[] = $value_26;
            }
            $object->setSupplierPurchaseRevenueCurrentYear($values_26);
            unset($data['supplierPurchaseRevenueCurrentYear']);
        }
        if (\array_key_exists('supplierPurchaseRevenuePreviousYear', $data)) {
            $values_27 = [];
            foreach ($data['supplierPurchaseRevenuePreviousYear'] as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setSupplierPurchaseRevenuePreviousYear($values_27);
            unset($data['supplierPurchaseRevenuePreviousYear']);
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
        if ($data->isInitialized('customerChildrenSalesOrderVolumeCurrentYear') && null !== $data->getCustomerChildrenSalesOrderVolumeCurrentYear()) {
            $values = [];
            foreach ($data->getCustomerChildrenSalesOrderVolumeCurrentYear() as $value) {
                $values[] = $value;
            }
            $dataArray['customerChildrenSalesOrderVolumeCurrentYear'] = $values;
        }
        if ($data->isInitialized('customerChildrenSalesOrderVolumePreviousYear') && null !== $data->getCustomerChildrenSalesOrderVolumePreviousYear()) {
            $values_1 = [];
            foreach ($data->getCustomerChildrenSalesOrderVolumePreviousYear() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['customerChildrenSalesOrderVolumePreviousYear'] = $values_1;
        }
        if ($data->isInitialized('customerChildrenSalesRevenueCurrentYear') && null !== $data->getCustomerChildrenSalesRevenueCurrentYear()) {
            $values_2 = [];
            foreach ($data->getCustomerChildrenSalesRevenueCurrentYear() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['customerChildrenSalesRevenueCurrentYear'] = $values_2;
        }
        if ($data->isInitialized('customerChildrenSalesRevenuePreviousYear') && null !== $data->getCustomerChildrenSalesRevenuePreviousYear()) {
            $values_3 = [];
            foreach ($data->getCustomerChildrenSalesRevenuePreviousYear() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['customerChildrenSalesRevenuePreviousYear'] = $values_3;
        }
        if ($data->isInitialized('customerQuotationAcceptancePercentage') && null !== $data->getCustomerQuotationAcceptancePercentage()) {
            $values_4 = [];
            foreach ($data->getCustomerQuotationAcceptancePercentage() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['customerQuotationAcceptancePercentage'] = $values_4;
        }
        if ($data->isInitialized('customerQuotationAcceptanceTimeInDays') && null !== $data->getCustomerQuotationAcceptanceTimeInDays()) {
            $values_5 = [];
            foreach ($data->getCustomerQuotationAcceptanceTimeInDays() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['customerQuotationAcceptanceTimeInDays'] = $values_5;
        }
        if ($data->isInitialized('customerReturnPercentageCurrentYear') && null !== $data->getCustomerReturnPercentageCurrentYear()) {
            $values_6 = [];
            foreach ($data->getCustomerReturnPercentageCurrentYear() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['customerReturnPercentageCurrentYear'] = $values_6;
        }
        if ($data->isInitialized('customerReturnPercentagePreviousYear') && null !== $data->getCustomerReturnPercentagePreviousYear()) {
            $values_7 = [];
            foreach ($data->getCustomerReturnPercentagePreviousYear() as $value_7) {
                $values_7[] = $value_7;
            }
            $dataArray['customerReturnPercentagePreviousYear'] = $values_7;
        }
        if ($data->isInitialized('customerSalesOpenItemOverdueSum') && null !== $data->getCustomerSalesOpenItemOverdueSum()) {
            $values_8 = [];
            foreach ($data->getCustomerSalesOpenItemOverdueSum() as $value_8) {
                $values_8[] = $value_8;
            }
            $dataArray['customerSalesOpenItemOverdueSum'] = $values_8;
        }
        if ($data->isInitialized('customerSalesOpenItemSum') && null !== $data->getCustomerSalesOpenItemSum()) {
            $values_9 = [];
            foreach ($data->getCustomerSalesOpenItemSum() as $value_9) {
                $values_9[] = $value_9;
            }
            $dataArray['customerSalesOpenItemSum'] = $values_9;
        }
        if ($data->isInitialized('customerSalesOrderVolumeCurrentYear') && null !== $data->getCustomerSalesOrderVolumeCurrentYear()) {
            $values_10 = [];
            foreach ($data->getCustomerSalesOrderVolumeCurrentYear() as $value_10) {
                $values_10[] = $value_10;
            }
            $dataArray['customerSalesOrderVolumeCurrentYear'] = $values_10;
        }
        if ($data->isInitialized('customerSalesOrderVolumePreviousYear') && null !== $data->getCustomerSalesOrderVolumePreviousYear()) {
            $values_11 = [];
            foreach ($data->getCustomerSalesOrderVolumePreviousYear() as $value_11) {
                $values_11[] = $value_11;
            }
            $dataArray['customerSalesOrderVolumePreviousYear'] = $values_11;
        }
        if ($data->isInitialized('customerSalesRevenueCurrentYear') && null !== $data->getCustomerSalesRevenueCurrentYear()) {
            $values_12 = [];
            foreach ($data->getCustomerSalesRevenueCurrentYear() as $value_12) {
                $values_12[] = $value_12;
            }
            $dataArray['customerSalesRevenueCurrentYear'] = $values_12;
        }
        if ($data->isInitialized('customerSalesRevenuePreviousYear') && null !== $data->getCustomerSalesRevenuePreviousYear()) {
            $values_13 = [];
            foreach ($data->getCustomerSalesRevenuePreviousYear() as $value_13) {
                $values_13[] = $value_13;
            }
            $dataArray['customerSalesRevenuePreviousYear'] = $values_13;
        }
        if ($data->isInitialized('leadChildrenExpectedRevenueOpportunities') && null !== $data->getLeadChildrenExpectedRevenueOpportunities()) {
            $values_14 = [];
            foreach ($data->getLeadChildrenExpectedRevenueOpportunities() as $value_14) {
                $values_14[] = $value_14;
            }
            $dataArray['leadChildrenExpectedRevenueOpportunities'] = $values_14;
        }
        if ($data->isInitialized('leadChildrenExpectedRevenueQuotations') && null !== $data->getLeadChildrenExpectedRevenueQuotations()) {
            $values_15 = [];
            foreach ($data->getLeadChildrenExpectedRevenueQuotations() as $value_15) {
                $values_15[] = $value_15;
            }
            $dataArray['leadChildrenExpectedRevenueQuotations'] = $values_15;
        }
        if ($data->isInitialized('leadChildrenQuotationVolume') && null !== $data->getLeadChildrenQuotationVolume()) {
            $values_16 = [];
            foreach ($data->getLeadChildrenQuotationVolume() as $value_16) {
                $values_16[] = $value_16;
            }
            $dataArray['leadChildrenQuotationVolume'] = $values_16;
        }
        if ($data->isInitialized('leadExpectedRevenueOpportunities') && null !== $data->getLeadExpectedRevenueOpportunities()) {
            $values_17 = [];
            foreach ($data->getLeadExpectedRevenueOpportunities() as $value_17) {
                $values_17[] = $value_17;
            }
            $dataArray['leadExpectedRevenueOpportunities'] = $values_17;
        }
        if ($data->isInitialized('leadExpectedRevenueQuotations') && null !== $data->getLeadExpectedRevenueQuotations()) {
            $values_18 = [];
            foreach ($data->getLeadExpectedRevenueQuotations() as $value_18) {
                $values_18[] = $value_18;
            }
            $dataArray['leadExpectedRevenueQuotations'] = $values_18;
        }
        if ($data->isInitialized('leadQuotationVolume') && null !== $data->getLeadQuotationVolume()) {
            $values_19 = [];
            foreach ($data->getLeadQuotationVolume() as $value_19) {
                $values_19[] = $value_19;
            }
            $dataArray['leadQuotationVolume'] = $values_19;
        }
        if ($data->isInitialized('supplierChildrenPurchaseOrderVolumeCurrentYear') && null !== $data->getSupplierChildrenPurchaseOrderVolumeCurrentYear()) {
            $values_20 = [];
            foreach ($data->getSupplierChildrenPurchaseOrderVolumeCurrentYear() as $value_20) {
                $values_20[] = $value_20;
            }
            $dataArray['supplierChildrenPurchaseOrderVolumeCurrentYear'] = $values_20;
        }
        if ($data->isInitialized('supplierChildrenPurchaseOrderVolumePreviousYear') && null !== $data->getSupplierChildrenPurchaseOrderVolumePreviousYear()) {
            $values_21 = [];
            foreach ($data->getSupplierChildrenPurchaseOrderVolumePreviousYear() as $value_21) {
                $values_21[] = $value_21;
            }
            $dataArray['supplierChildrenPurchaseOrderVolumePreviousYear'] = $values_21;
        }
        if ($data->isInitialized('supplierChildrenPurchaseRevenueCurrentYear') && null !== $data->getSupplierChildrenPurchaseRevenueCurrentYear()) {
            $values_22 = [];
            foreach ($data->getSupplierChildrenPurchaseRevenueCurrentYear() as $value_22) {
                $values_22[] = $value_22;
            }
            $dataArray['supplierChildrenPurchaseRevenueCurrentYear'] = $values_22;
        }
        if ($data->isInitialized('supplierChildrenPurchaseRevenuePreviousYear') && null !== $data->getSupplierChildrenPurchaseRevenuePreviousYear()) {
            $values_23 = [];
            foreach ($data->getSupplierChildrenPurchaseRevenuePreviousYear() as $value_23) {
                $values_23[] = $value_23;
            }
            $dataArray['supplierChildrenPurchaseRevenuePreviousYear'] = $values_23;
        }
        if ($data->isInitialized('supplierPurchaseOrderVolumeCurrentYear') && null !== $data->getSupplierPurchaseOrderVolumeCurrentYear()) {
            $values_24 = [];
            foreach ($data->getSupplierPurchaseOrderVolumeCurrentYear() as $value_24) {
                $values_24[] = $value_24;
            }
            $dataArray['supplierPurchaseOrderVolumeCurrentYear'] = $values_24;
        }
        if ($data->isInitialized('supplierPurchaseOrderVolumePreviousYear') && null !== $data->getSupplierPurchaseOrderVolumePreviousYear()) {
            $values_25 = [];
            foreach ($data->getSupplierPurchaseOrderVolumePreviousYear() as $value_25) {
                $values_25[] = $value_25;
            }
            $dataArray['supplierPurchaseOrderVolumePreviousYear'] = $values_25;
        }
        if ($data->isInitialized('supplierPurchaseRevenueCurrentYear') && null !== $data->getSupplierPurchaseRevenueCurrentYear()) {
            $values_26 = [];
            foreach ($data->getSupplierPurchaseRevenueCurrentYear() as $value_26) {
                $values_26[] = $value_26;
            }
            $dataArray['supplierPurchaseRevenueCurrentYear'] = $values_26;
        }
        if ($data->isInitialized('supplierPurchaseRevenuePreviousYear') && null !== $data->getSupplierPurchaseRevenuePreviousYear()) {
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