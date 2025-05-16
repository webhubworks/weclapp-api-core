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

class BankAccountNormalizer implements DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        $object = new \Webhubworks\WeclappApiCore\Model\BankAccount;
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
        if ($data->isInitialized('version') && $data->getVersion() !== null) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('accountHolder') && $data->getAccountHolder() !== null) {
            $dataArray['accountHolder'] = $data->getAccountHolder();
        }
        if ($data->isInitialized('accountId') && $data->getAccountId() !== null) {
            $dataArray['accountId'] = $data->getAccountId();
        }
        if ($data->isInitialized('accountNumber') && $data->getAccountNumber() !== null) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('active') && $data->getActive() !== null) {
            $dataArray['active'] = $data->getActive();
        }
        if ($data->isInitialized('autoSync') && $data->getAutoSync() !== null) {
            $dataArray['autoSync'] = $data->getAutoSync();
        }
        if ($data->isInitialized('automaticProcessing') && $data->getAutomaticProcessing() !== null) {
            $dataArray['automaticProcessing'] = $data->getAutomaticProcessing();
        }
        if ($data->isInitialized('balance') && $data->getBalance() !== null) {
            $dataArray['balance'] = $data->getBalance();
        }
        if ($data->isInitialized('bankCode') && $data->getBankCode() !== null) {
            $dataArray['bankCode'] = $data->getBankCode();
        }
        if ($data->isInitialized('connectionFailure') && $data->getConnectionFailure() !== null) {
            $dataArray['connectionFailure'] = $data->getConnectionFailure();
        }
        if ($data->isInitialized('creditInstitute') && $data->getCreditInstitute() !== null) {
            $dataArray['creditInstitute'] = $data->getCreditInstitute();
        }
        if ($data->isInitialized('creditInstituteCity') && $data->getCreditInstituteCity() !== null) {
            $dataArray['creditInstituteCity'] = $data->getCreditInstituteCity();
        }
        if ($data->isInitialized('creditInstituteStreet') && $data->getCreditInstituteStreet() !== null) {
            $dataArray['creditInstituteStreet'] = $data->getCreditInstituteStreet();
        }
        if ($data->isInitialized('creditInstituteZip') && $data->getCreditInstituteZip() !== null) {
            $dataArray['creditInstituteZip'] = $data->getCreditInstituteZip();
        }
        if ($data->isInitialized('creditLine') && $data->getCreditLine() !== null) {
            $dataArray['creditLine'] = $data->getCreditLine();
        }
        if ($data->isInitialized('currencyId') && $data->getCurrencyId() !== null) {
            $dataArray['currencyId'] = $data->getCurrencyId();
        }
        if ($data->isInitialized('differentSepaCreditorIdentifier') && $data->getDifferentSepaCreditorIdentifier() !== null) {
            $dataArray['differentSepaCreditorIdentifier'] = $data->getDifferentSepaCreditorIdentifier();
        }
        if ($data->isInitialized('enabledForElectronicPaymentTransactions') && $data->getEnabledForElectronicPaymentTransactions() !== null) {
            $dataArray['enabledForElectronicPaymentTransactions'] = $data->getEnabledForElectronicPaymentTransactions();
        }
        if ($data->isInitialized('iban') && $data->getIban() !== null) {
            $dataArray['iban'] = $data->getIban();
        }
        if ($data->isInitialized('incidentalCostsOfMonetaryTrafficAccountId') && $data->getIncidentalCostsOfMonetaryTrafficAccountId() !== null) {
            $dataArray['incidentalCostsOfMonetaryTrafficAccountId'] = $data->getIncidentalCostsOfMonetaryTrafficAccountId();
        }
        if ($data->isInitialized('incidentalCostsOfMonetaryTrafficTaxId') && $data->getIncidentalCostsOfMonetaryTrafficTaxId() !== null) {
            $dataArray['incidentalCostsOfMonetaryTrafficTaxId'] = $data->getIncidentalCostsOfMonetaryTrafficTaxId();
        }
        if ($data->isInitialized('lastDownload') && $data->getLastDownload() !== null) {
            $dataArray['lastDownload'] = $data->getLastDownload();
        }
        if ($data->isInitialized('primary') && $data->getPrimary() !== null) {
            $dataArray['primary'] = $data->getPrimary();
        }
        if ($data->isInitialized('qrIban') && $data->getQrIban() !== null) {
            $dataArray['qrIban'] = $data->getQrIban();
        }
        if ($data->isInitialized('qrIdentifier') && $data->getQrIdentifier() !== null) {
            $dataArray['qrIdentifier'] = $data->getQrIdentifier();
        }
        if ($data->isInitialized('swiftBic') && $data->getSwiftBic() !== null) {
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
