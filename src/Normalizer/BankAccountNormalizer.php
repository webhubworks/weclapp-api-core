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
        if (\array_key_exists('accountHolder', $data) && $data['accountHolder'] !== null) {
            $object->setAccountHolder($data['accountHolder']);
            unset($data['accountHolder']);
        } elseif (\array_key_exists('accountHolder', $data) && $data['accountHolder'] === null) {
            $object->setAccountHolder(null);
        }
        if (\array_key_exists('accountId', $data) && $data['accountId'] !== null) {
            $object->setAccountId($data['accountId']);
            unset($data['accountId']);
        } elseif (\array_key_exists('accountId', $data) && $data['accountId'] === null) {
            $object->setAccountId(null);
        }
        if (\array_key_exists('accountNumber', $data) && $data['accountNumber'] !== null) {
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        } elseif (\array_key_exists('accountNumber', $data) && $data['accountNumber'] === null) {
            $object->setAccountNumber(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        } elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('autoSync', $data) && $data['autoSync'] !== null) {
            $object->setAutoSync($data['autoSync']);
            unset($data['autoSync']);
        } elseif (\array_key_exists('autoSync', $data) && $data['autoSync'] === null) {
            $object->setAutoSync(null);
        }
        if (\array_key_exists('automaticProcessing', $data) && $data['automaticProcessing'] !== null) {
            $object->setAutomaticProcessing($data['automaticProcessing']);
            unset($data['automaticProcessing']);
        } elseif (\array_key_exists('automaticProcessing', $data) && $data['automaticProcessing'] === null) {
            $object->setAutomaticProcessing(null);
        }
        if (\array_key_exists('balance', $data) && $data['balance'] !== null) {
            $object->setBalance($data['balance']);
            unset($data['balance']);
        } elseif (\array_key_exists('balance', $data) && $data['balance'] === null) {
            $object->setBalance(null);
        }
        if (\array_key_exists('bankCode', $data) && $data['bankCode'] !== null) {
            $object->setBankCode($data['bankCode']);
            unset($data['bankCode']);
        } elseif (\array_key_exists('bankCode', $data) && $data['bankCode'] === null) {
            $object->setBankCode(null);
        }
        if (\array_key_exists('connectionFailure', $data) && $data['connectionFailure'] !== null) {
            $object->setConnectionFailure($data['connectionFailure']);
            unset($data['connectionFailure']);
        } elseif (\array_key_exists('connectionFailure', $data) && $data['connectionFailure'] === null) {
            $object->setConnectionFailure(null);
        }
        if (\array_key_exists('creditInstitute', $data) && $data['creditInstitute'] !== null) {
            $object->setCreditInstitute($data['creditInstitute']);
            unset($data['creditInstitute']);
        } elseif (\array_key_exists('creditInstitute', $data) && $data['creditInstitute'] === null) {
            $object->setCreditInstitute(null);
        }
        if (\array_key_exists('creditInstituteCity', $data) && $data['creditInstituteCity'] !== null) {
            $object->setCreditInstituteCity($data['creditInstituteCity']);
            unset($data['creditInstituteCity']);
        } elseif (\array_key_exists('creditInstituteCity', $data) && $data['creditInstituteCity'] === null) {
            $object->setCreditInstituteCity(null);
        }
        if (\array_key_exists('creditInstituteStreet', $data) && $data['creditInstituteStreet'] !== null) {
            $object->setCreditInstituteStreet($data['creditInstituteStreet']);
            unset($data['creditInstituteStreet']);
        } elseif (\array_key_exists('creditInstituteStreet', $data) && $data['creditInstituteStreet'] === null) {
            $object->setCreditInstituteStreet(null);
        }
        if (\array_key_exists('creditInstituteZip', $data) && $data['creditInstituteZip'] !== null) {
            $object->setCreditInstituteZip($data['creditInstituteZip']);
            unset($data['creditInstituteZip']);
        } elseif (\array_key_exists('creditInstituteZip', $data) && $data['creditInstituteZip'] === null) {
            $object->setCreditInstituteZip(null);
        }
        if (\array_key_exists('creditLine', $data) && $data['creditLine'] !== null) {
            $object->setCreditLine($data['creditLine']);
            unset($data['creditLine']);
        } elseif (\array_key_exists('creditLine', $data) && $data['creditLine'] === null) {
            $object->setCreditLine(null);
        }
        if (\array_key_exists('currencyId', $data) && $data['currencyId'] !== null) {
            $object->setCurrencyId($data['currencyId']);
            unset($data['currencyId']);
        } elseif (\array_key_exists('currencyId', $data) && $data['currencyId'] === null) {
            $object->setCurrencyId(null);
        }
        if (\array_key_exists('differentSepaCreditorIdentifier', $data) && $data['differentSepaCreditorIdentifier'] !== null) {
            $object->setDifferentSepaCreditorIdentifier($data['differentSepaCreditorIdentifier']);
            unset($data['differentSepaCreditorIdentifier']);
        } elseif (\array_key_exists('differentSepaCreditorIdentifier', $data) && $data['differentSepaCreditorIdentifier'] === null) {
            $object->setDifferentSepaCreditorIdentifier(null);
        }
        if (\array_key_exists('enabledForElectronicPaymentTransactions', $data) && $data['enabledForElectronicPaymentTransactions'] !== null) {
            $object->setEnabledForElectronicPaymentTransactions($data['enabledForElectronicPaymentTransactions']);
            unset($data['enabledForElectronicPaymentTransactions']);
        } elseif (\array_key_exists('enabledForElectronicPaymentTransactions', $data) && $data['enabledForElectronicPaymentTransactions'] === null) {
            $object->setEnabledForElectronicPaymentTransactions(null);
        }
        if (\array_key_exists('iban', $data) && $data['iban'] !== null) {
            $object->setIban($data['iban']);
            unset($data['iban']);
        } elseif (\array_key_exists('iban', $data) && $data['iban'] === null) {
            $object->setIban(null);
        }
        if (\array_key_exists('incidentalCostsOfMonetaryTrafficAccountId', $data) && $data['incidentalCostsOfMonetaryTrafficAccountId'] !== null) {
            $object->setIncidentalCostsOfMonetaryTrafficAccountId($data['incidentalCostsOfMonetaryTrafficAccountId']);
            unset($data['incidentalCostsOfMonetaryTrafficAccountId']);
        } elseif (\array_key_exists('incidentalCostsOfMonetaryTrafficAccountId', $data) && $data['incidentalCostsOfMonetaryTrafficAccountId'] === null) {
            $object->setIncidentalCostsOfMonetaryTrafficAccountId(null);
        }
        if (\array_key_exists('incidentalCostsOfMonetaryTrafficTaxId', $data) && $data['incidentalCostsOfMonetaryTrafficTaxId'] !== null) {
            $object->setIncidentalCostsOfMonetaryTrafficTaxId($data['incidentalCostsOfMonetaryTrafficTaxId']);
            unset($data['incidentalCostsOfMonetaryTrafficTaxId']);
        } elseif (\array_key_exists('incidentalCostsOfMonetaryTrafficTaxId', $data) && $data['incidentalCostsOfMonetaryTrafficTaxId'] === null) {
            $object->setIncidentalCostsOfMonetaryTrafficTaxId(null);
        }
        if (\array_key_exists('lastDownload', $data) && $data['lastDownload'] !== null) {
            $object->setLastDownload($data['lastDownload']);
            unset($data['lastDownload']);
        } elseif (\array_key_exists('lastDownload', $data) && $data['lastDownload'] === null) {
            $object->setLastDownload(null);
        }
        if (\array_key_exists('primary', $data) && $data['primary'] !== null) {
            $object->setPrimary($data['primary']);
            unset($data['primary']);
        } elseif (\array_key_exists('primary', $data) && $data['primary'] === null) {
            $object->setPrimary(null);
        }
        if (\array_key_exists('qrIban', $data) && $data['qrIban'] !== null) {
            $object->setQrIban($data['qrIban']);
            unset($data['qrIban']);
        } elseif (\array_key_exists('qrIban', $data) && $data['qrIban'] === null) {
            $object->setQrIban(null);
        }
        if (\array_key_exists('qrIdentifier', $data) && $data['qrIdentifier'] !== null) {
            $object->setQrIdentifier($data['qrIdentifier']);
            unset($data['qrIdentifier']);
        } elseif (\array_key_exists('qrIdentifier', $data) && $data['qrIdentifier'] === null) {
            $object->setQrIdentifier(null);
        }
        if (\array_key_exists('swiftBic', $data) && $data['swiftBic'] !== null) {
            $object->setSwiftBic($data['swiftBic']);
            unset($data['swiftBic']);
        } elseif (\array_key_exists('swiftBic', $data) && $data['swiftBic'] === null) {
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
