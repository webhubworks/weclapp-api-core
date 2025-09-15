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
class TaxConfigureSalesTaxesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody();
        if (\array_key_exists('personsThirdCountryFreeTax', $data) && \is_int($data['personsThirdCountryFreeTax'])) {
            $data['personsThirdCountryFreeTax'] = (bool) $data['personsThirdCountryFreeTax'];
        }
        if (\array_key_exists('taxEuPersonsRecipientCountry', $data) && \is_int($data['taxEuPersonsRecipientCountry'])) {
            $data['taxEuPersonsRecipientCountry'] = (bool) $data['taxEuPersonsRecipientCountry'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('personsThirdCountryFreeTax', $data) && $data['personsThirdCountryFreeTax'] !== null) {
            $object->setPersonsThirdCountryFreeTax($data['personsThirdCountryFreeTax']);
            unset($data['personsThirdCountryFreeTax']);
        }
        elseif (\array_key_exists('personsThirdCountryFreeTax', $data) && $data['personsThirdCountryFreeTax'] === null) {
            $object->setPersonsThirdCountryFreeTax(null);
        }
        if (\array_key_exists('taxEuPersonsRecipientCountry', $data) && $data['taxEuPersonsRecipientCountry'] !== null) {
            $object->setTaxEuPersonsRecipientCountry($data['taxEuPersonsRecipientCountry']);
            unset($data['taxEuPersonsRecipientCountry']);
        }
        elseif (\array_key_exists('taxEuPersonsRecipientCountry', $data) && $data['taxEuPersonsRecipientCountry'] === null) {
            $object->setTaxEuPersonsRecipientCountry(null);
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
        $dataArray['countryCode'] = $data->getCountryCode();
        $dataArray['personsThirdCountryFreeTax'] = $data->getPersonsThirdCountryFreeTax();
        $dataArray['taxEuPersonsRecipientCountry'] = $data->getTaxEuPersonsRecipientCountry();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody::class => false];
    }
}