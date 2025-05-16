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
class BankAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\BankAccount::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\BankAccount::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\BankAccount();
        if (\array_key_exists('active', $data) && \is_int($data['active'])) {
            $data['active'] = (bool) $data['active'];
        }
        if (\array_key_exists('autoSync', $data) && \is_int($data['autoSync'])) {
            $data['autoSync'] = (bool) $data['autoSync'];
        }
        if (\array_key_exists('enabledForElectronicPaymentTransactions', $data) && \is_int($data['enabledForElectronicPaymentTransactions'])) {
            $data['enabledForElectronicPaymentTransactions'] = (bool) $data['enabledForElectronicPaymentTransactions'];
        }
        if (\array_key_exists('primary', $data) && \is_int($data['primary'])) {
            $data['primary'] = (bool) $data['primary'];
        }
        if (null === $data || false === \is_array($data)) {
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
        if (\array_key_exists('accountHolder', $data)) {
            $object->setAccountHolder($data['accountHolder']);
            unset($data['accountHolder']);
        }
        if (\array_key_exists('accountId', $data)) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        if (\array_key_exists('autoSync', $data)) {
            $object->setAutoSync($data['autoSync']);
            unset($data['autoSync']);
        }
        if (\array_key_exists('automaticProcessing', $data)) {
            $object->setAutomaticProcessing($data['automaticProcessing']);
            unset($data['automaticProcessing']);
        }
        if (\array_key_exists('balance', $data)) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        }
        if (\array_key_exists('bankCode', $data)) {
            $object->setBankCode($data['bankCode']);
            unset($data['bankCode']);
        }
        if (\array_key_exists('connectionFailure', $data)) {
            $object->setConnectionFailure($data['connectionFailure']);
            unset($data['connectionFailure']);
        }
        if (\array_key_exists('creditInstitute', $data)) {
            $object->setCreditInstitute($data['creditInstitute']);
            unset($data['creditInstitute']);
        }
        if (\array_key_exists('creditInstituteCity', $data)) {
            $object->setCreditInstituteCity($data['creditInstituteCity']);
            unset($data['creditInstituteCity']);
        }
        if (\array_key_exists('creditInstituteStreet', $data)) {
            $object->setCreditInstituteStreet($data['creditInstituteStreet']);
            unset($data['creditInstituteStreet']);
        }
        if (\array_key_exists('creditInstituteZip', $data)) {
            $object->setCreditInstituteZip($data['creditInstituteZip']);
            unset($data['creditInstituteZip']);
        }
        if (\array_key_exists('creditLine', $data)) {
            $object->setCreditLine($data['creditLine']);
            unset($data['creditLine']);
        }
        if (\array_key_exists('currencyId', $data)) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        if (\array_key_exists('differentSepaCreditorIdentifier', $data)) {
            $object->setDifferentSepaCreditorIdentifier($data['differentSepaCreditorIdentifier']);
            unset($data['differentSepaCreditorIdentifier']);
        }
        if (\array_key_exists('enabledForElectronicPaymentTransactions', $data)) {
            $object->setEnabledForElectronicPaymentTransactions($data['enabledForElectronicPaymentTransactions']);
            unset($data['enabledForElectronicPaymentTransactions']);
        }
        if (\array_key_exists('iban', $data)) {
            $object->setIban($data['iban']);
            unset($data['iban']);
        }
        if (\array_key_exists('incidentalCostsOfMonetaryTrafficAccountId', $data)) {
            $object->setIncidentalCostsOfMonetaryTrafficAccountId($data['incidentalCostsOfMonetaryTrafficAccountId']);
            unset($data['incidentalCostsOfMonetaryTrafficAccountId']);
        }
        if (\array_key_exists('incidentalCostsOfMonetaryTrafficTaxId', $data)) {
            $object->setIncidentalCostsOfMonetaryTrafficTaxId($data['incidentalCostsOfMonetaryTrafficTaxId']);
            unset($data['incidentalCostsOfMonetaryTrafficTaxId']);
        }
        if (\array_key_exists('lastDownload', $data)) {
            $object->setLastDownload($data['lastDownload']);
            unset($data['lastDownload']);
        }
        if (\array_key_exists('primary', $data)) {
            $object->setPrimary($data['primary']);
            unset($data['primary']);
        }
        if (\array_key_exists('qrIban', $data)) {
            $object->setQrIban($data['qrIban']);
            unset($data['qrIban']);
        }
        if (\array_key_exists('qrIdentifier', $data)) {
            $object->setQrIdentifier($data['qrIdentifier']);
            unset($data['qrIdentifier']);
        }
        if (\array_key_exists('swiftBic', $data)) {
            $object->setSwiftBic($data['swiftBic']);
            unset($data['swiftBic']);
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
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('accountHolder') && null !== $data->getAccountHolder()) {
            $dataArray['accountHolder'] = $data->getAccountHolder();
        }
        if ($data->isInitialized('accountId') && null !== $data->getAccountId()) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('active') && null !== $data->getActive()) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('autoSync') && null !== $data->getAutoSync()) {
            $dataArray['autoSync'] = $data->getAutoSync();
        }
        if ($data->isInitialized('automaticProcessing') && null !== $data->getAutomaticProcessing()) {
            $dataArray['automaticProcessing'] = $data->getAutomaticProcessing();
        }
        if ($data->isInitialized('balance') && null !== $data->getBalance()) {
            $dataArray['balance'] = $data->getBalance();
        }
        if ($data->isInitialized('bankCode') && null !== $data->getBankCode()) {
            $dataArray['bankCode'] = $data->getBankCode();
        }
        if ($data->isInitialized('connectionFailure') && null !== $data->getConnectionFailure()) {
            $dataArray['connectionFailure'] = $data->getConnectionFailure();
        }
        if ($data->isInitialized('creditInstitute') && null !== $data->getCreditInstitute()) {
            $dataArray['creditInstitute'] = $data->getCreditInstitute();
        }
        if ($data->isInitialized('creditInstituteCity') && null !== $data->getCreditInstituteCity()) {
            $dataArray['creditInstituteCity'] = $data->getCreditInstituteCity();
        }
        if ($data->isInitialized('creditInstituteStreet') && null !== $data->getCreditInstituteStreet()) {
            $dataArray['creditInstituteStreet'] = $data->getCreditInstituteStreet();
        }
        if ($data->isInitialized('creditInstituteZip') && null !== $data->getCreditInstituteZip()) {
            $dataArray['creditInstituteZip'] = $data->getCreditInstituteZip();
        }
        if ($data->isInitialized('creditLine') && null !== $data->getCreditLine()) {
            $dataArray['creditLine'] = $data->getCreditLine();
        }
        if ($data->isInitialized('currencyId') && null !== $data->getCurrencyId()) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('differentSepaCreditorIdentifier') && null !== $data->getDifferentSepaCreditorIdentifier()) {
            $dataArray['differentSepaCreditorIdentifier'] = $data->getDifferentSepaCreditorIdentifier();
        }
        if ($data->isInitialized('enabledForElectronicPaymentTransactions') && null !== $data->getEnabledForElectronicPaymentTransactions()) {
            $dataArray['enabledForElectronicPaymentTransactions'] = $data->getEnabledForElectronicPaymentTransactions();
        }
        if ($data->isInitialized('iban') && null !== $data->getIban()) {
            $dataArray['iban'] = $data->getIban();
        }
        if ($data->isInitialized('incidentalCostsOfMonetaryTrafficAccountId') && null !== $data->getIncidentalCostsOfMonetaryTrafficAccountId()) {
            $dataArray['incidentalCostsOfMonetaryTrafficAccountId'] = $data->getIncidentalCostsOfMonetaryTrafficAccountId();
        }
        if ($data->isInitialized('incidentalCostsOfMonetaryTrafficTaxId') && null !== $data->getIncidentalCostsOfMonetaryTrafficTaxId()) {
            $dataArray['incidentalCostsOfMonetaryTrafficTaxId'] = $data->getIncidentalCostsOfMonetaryTrafficTaxId();
        }
        if ($data->isInitialized('lastDownload') && null !== $data->getLastDownload()) {
            $dataArray['lastDownload'] = $data->getLastDownload();
        }
        if ($data->isInitialized('primary') && null !== $data->getPrimary()) {
            $dataArray['primary'] = $data->getPrimary();
        }
        if ($data->isInitialized('qrIban') && null !== $data->getQrIban()) {
            $dataArray['qrIban'] = $data->getQrIban();
        }
        if ($data->isInitialized('qrIdentifier') && null !== $data->getQrIdentifier()) {
            $dataArray['qrIdentifier'] = $data->getQrIdentifier();
        }
        if ($data->isInitialized('swiftBic') && null !== $data->getSwiftBic()) {
            $dataArray['swiftBic'] = $data->getSwiftBic();
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
        return [\Webhubworks\WeclappApiCore\Model\BankAccount::class => false];
    }
}