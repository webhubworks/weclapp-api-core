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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('createdDate', $data) && $data['createdDate'] !== null) {
            $object->setCreatedDate($data['createdDate']);
            unset($data['createdDate']);
        }
        elseif (\array_key_exists('createdDate', $data) && $data['createdDate'] === null) {
            $object->setCreatedDate(null);
        }
        if (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] !== null) {
            $object->setLastModifiedDate($data['lastModifiedDate']);
            unset($data['lastModifiedDate']);
        }
        elseif (\array_key_exists('lastModifiedDate', $data) && $data['lastModifiedDate'] === null) {
            $object->setLastModifiedDate(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('accountHolder', $data) && $data['accountHolder'] !== null) {
            $object->setAccountHolder($data['accountHolder']);
            unset($data['accountHolder']);
        }
        elseif (\array_key_exists('accountHolder', $data) && $data['accountHolder'] === null) {
            $object->setAccountHolder(null);
        }
        if (\array_key_exists('accountId', $data) && $data['accountId'] !== null) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        }
        elseif (\array_key_exists('accountId', $data) && $data['accountId'] === null) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('accountNumber', $data) && $data['accountNumber'] !== null) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        elseif (\array_key_exists('accountNumber', $data) && $data['accountNumber'] === null) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('autoSync', $data) && $data['autoSync'] !== null) {
            $object->setAutoSync($data['autoSync']);
            unset($data['autoSync']);
        }
        elseif (\array_key_exists('autoSync', $data) && $data['autoSync'] === null) {
            $object->setAutoSync(null);
        }
        if (\array_key_exists('automaticProcessing', $data) && $data['automaticProcessing'] !== null) {
            $object->setAutomaticProcessing($data['automaticProcessing']);
            unset($data['automaticProcessing']);
        }
        elseif (\array_key_exists('automaticProcessing', $data) && $data['automaticProcessing'] === null) {
            $object->setAutomaticProcessing(null);
        }
        if (\array_key_exists('balance', $data) && $data['balance'] !== null) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        }
        elseif (\array_key_exists('balance', $data) && $data['balance'] === null) {
            $object->setBalance(null);
        }
        if (\array_key_exists('bankCode', $data) && $data['bankCode'] !== null) {
            $object->setBankCode($data['bankCode']);
            unset($data['bankCode']);
        }
        elseif (\array_key_exists('bankCode', $data) && $data['bankCode'] === null) {
            $object->setBankCode(null);
        }
        if (\array_key_exists('connectionFailure', $data) && $data['connectionFailure'] !== null) {
            $object->setConnectionFailure($data['connectionFailure']);
            unset($data['connectionFailure']);
        }
        elseif (\array_key_exists('connectionFailure', $data) && $data['connectionFailure'] === null) {
            $object->setConnectionFailure(null);
        }
        if (\array_key_exists('creditInstitute', $data) && $data['creditInstitute'] !== null) {
            $object->setCreditInstitute($data['creditInstitute']);
            unset($data['creditInstitute']);
        }
        elseif (\array_key_exists('creditInstitute', $data) && $data['creditInstitute'] === null) {
            $object->setCreditInstitute(null);
        }
        if (\array_key_exists('creditInstituteCity', $data) && $data['creditInstituteCity'] !== null) {
            $object->setCreditInstituteCity($data['creditInstituteCity']);
            unset($data['creditInstituteCity']);
        }
        elseif (\array_key_exists('creditInstituteCity', $data) && $data['creditInstituteCity'] === null) {
            $object->setCreditInstituteCity(null);
        }
        if (\array_key_exists('creditInstituteStreet', $data) && $data['creditInstituteStreet'] !== null) {
            $object->setCreditInstituteStreet($data['creditInstituteStreet']);
            unset($data['creditInstituteStreet']);
        }
        elseif (\array_key_exists('creditInstituteStreet', $data) && $data['creditInstituteStreet'] === null) {
            $object->setCreditInstituteStreet(null);
        }
        if (\array_key_exists('creditInstituteZip', $data) && $data['creditInstituteZip'] !== null) {
            $object->setCreditInstituteZip($data['creditInstituteZip']);
            unset($data['creditInstituteZip']);
        }
        elseif (\array_key_exists('creditInstituteZip', $data) && $data['creditInstituteZip'] === null) {
            $object->setCreditInstituteZip(null);
        }
        if (\array_key_exists('creditLine', $data) && $data['creditLine'] !== null) {
            $object->setCreditLine($data['creditLine']);
            unset($data['creditLine']);
        }
        elseif (\array_key_exists('creditLine', $data) && $data['creditLine'] === null) {
            $object->setCreditLine(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        }
        elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('differentSepaCreditorIdentifier', $data) && $data['differentSepaCreditorIdentifier'] !== null) {
            $object->setDifferentSepaCreditorIdentifier($data['differentSepaCreditorIdentifier']);
            unset($data['differentSepaCreditorIdentifier']);
        }
        elseif (\array_key_exists('differentSepaCreditorIdentifier', $data) && $data['differentSepaCreditorIdentifier'] === null) {
            $object->setDifferentSepaCreditorIdentifier(null);
        }
        if (\array_key_exists('enabledForElectronicPaymentTransactions', $data) && $data['enabledForElectronicPaymentTransactions'] !== null) {
            $object->setEnabledForElectronicPaymentTransactions($data['enabledForElectronicPaymentTransactions']);
            unset($data['enabledForElectronicPaymentTransactions']);
        }
        elseif (\array_key_exists('enabledForElectronicPaymentTransactions', $data) && $data['enabledForElectronicPaymentTransactions'] === null) {
            $object->setEnabledForElectronicPaymentTransactions(null);
        }
        if (\array_key_exists('iban', $data) && $data['iban'] !== null) {
            $object->setIban($data['iban']);
            unset($data['iban']);
        }
        elseif (\array_key_exists('iban', $data) && $data['iban'] === null) {
            $object->setIban(null);
        }
        if (\array_key_exists('incidentalCostsOfMonetaryTrafficAccountId', $data) && $data['incidentalCostsOfMonetaryTrafficAccountId'] !== null) {
            $object->setIncidentalCostsOfMonetaryTrafficAccountId($data['incidentalCostsOfMonetaryTrafficAccountId']);
            unset($data['incidentalCostsOfMonetaryTrafficAccountId']);
        }
        elseif (\array_key_exists('incidentalCostsOfMonetaryTrafficAccountId', $data) && $data['incidentalCostsOfMonetaryTrafficAccountId'] === null) {
            $object->setIncidentalCostsOfMonetaryTrafficAccountId(null);
        }
        if (\array_key_exists('incidentalCostsOfMonetaryTrafficTaxId', $data) && $data['incidentalCostsOfMonetaryTrafficTaxId'] !== null) {
            $object->setIncidentalCostsOfMonetaryTrafficTaxId($data['incidentalCostsOfMonetaryTrafficTaxId']);
            unset($data['incidentalCostsOfMonetaryTrafficTaxId']);
        }
        elseif (\array_key_exists('incidentalCostsOfMonetaryTrafficTaxId', $data) && $data['incidentalCostsOfMonetaryTrafficTaxId'] === null) {
            $object->setIncidentalCostsOfMonetaryTrafficTaxId(null);
        }
        if (\array_key_exists('lastDownload', $data) && $data['lastDownload'] !== null) {
            $object->setLastDownload($data['lastDownload']);
            unset($data['lastDownload']);
        }
        elseif (\array_key_exists('lastDownload', $data) && $data['lastDownload'] === null) {
            $object->setLastDownload(null);
        }
        if (\array_key_exists('primary', $data) && $data['primary'] !== null) {
            $object->setPrimary($data['primary']);
            unset($data['primary']);
        }
        elseif (\array_key_exists('primary', $data) && $data['primary'] === null) {
            $object->setPrimary(null);
        }
        if (\array_key_exists('qrIban', $data) && $data['qrIban'] !== null) {
            $object->setQrIban($data['qrIban']);
            unset($data['qrIban']);
        }
        elseif (\array_key_exists('qrIban', $data) && $data['qrIban'] === null) {
            $object->setQrIban(null);
        }
        if (\array_key_exists('qrIdentifier', $data) && $data['qrIdentifier'] !== null) {
            $object->setQrIdentifier($data['qrIdentifier']);
            unset($data['qrIdentifier']);
        }
        elseif (\array_key_exists('qrIdentifier', $data) && $data['qrIdentifier'] === null) {
            $object->setQrIdentifier(null);
        }
        if (\array_key_exists('swiftBic', $data) && $data['swiftBic'] !== null) {
            $object->setSwiftBic($data['swiftBic']);
            unset($data['swiftBic']);
        }
        elseif (\array_key_exists('swiftBic', $data) && $data['swiftBic'] === null) {
            $object->setSwiftBic(null);
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
        if ($data->isInitialized('bankCode') && null !== $data->getBankCode()) {
            $dataArray['bankCode'] = $data->getBankCode();
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