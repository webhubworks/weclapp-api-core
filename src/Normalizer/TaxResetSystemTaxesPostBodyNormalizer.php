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
class TaxResetSystemTaxesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody();
        if (\array_key_exists('initAllStores', $data) && \is_int($data['initAllStores'])) {
            $data['initAllStores'] = (bool) $data['initAllStores'];
        }
        if (\array_key_exists('personsThirdCountryFreeTax', $data) && \is_int($data['personsThirdCountryFreeTax'])) {
            $data['personsThirdCountryFreeTax'] = (bool) $data['personsThirdCountryFreeTax'];
        }
        if (\array_key_exists('taxRecipientCountry', $data) && \is_int($data['taxRecipientCountry'])) {
            $data['taxRecipientCountry'] = (bool) $data['taxRecipientCountry'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('initAllStores', $data)) {
            $object->setInitAllStores($data['initAllStores']);
            unset($data['initAllStores']);
        }
        if (\array_key_exists('personsThirdCountryFreeTax', $data)) {
            $object->setPersonsThirdCountryFreeTax($data['personsThirdCountryFreeTax']);
            unset($data['personsThirdCountryFreeTax']);
        }
        if (\array_key_exists('taxRecipientCountry', $data)) {
            $object->setTaxRecipientCountry($data['taxRecipientCountry']);
            unset($data['taxRecipientCountry']);
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
        $dataArray['initAllStores'] = $data->getInitAllStores();
        $dataArray['personsThirdCountryFreeTax'] = $data->getPersonsThirdCountryFreeTax();
        $dataArray['taxRecipientCountry'] = $data->getTaxRecipientCountry();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody::class => false];
    }
}