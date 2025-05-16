<?php

namespace Webhubworks\WeclappApiCore\Normalizer;

use Webhubworks\WeclappApiCore\Runtime\Normalizer\CheckArray;
use Webhubworks\WeclappApiCore\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Webhubworks\WeclappApiCore\Model\AbstractBillOfMaterial::class => \Webhubworks\WeclappApiCore\Normalizer\AbstractBillOfMaterialNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AbstractBookRecord::class => \Webhubworks\WeclappApiCore\Normalizer\AbstractBookRecordNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AbstractEntity::class => \Webhubworks\WeclappApiCore\Normalizer\AbstractEntityNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AbstractEntityWithCustomAttributes::class => \Webhubworks\WeclappApiCore\Normalizer\AbstractEntityWithCustomAttributesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AbstractParty::class => \Webhubworks\WeclappApiCore\Normalizer\AbstractPartyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransaction::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransactionDetail::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionDetailNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Address::class => \Webhubworks\WeclappApiCore\Normalizer\AddressNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AggregatePackagingUnit::class => \Webhubworks\WeclappApiCore\Normalizer\AggregatePackagingUnitNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AggregateStock::class => \Webhubworks\WeclappApiCore\Normalizer\AggregateStockNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Amount::class => \Webhubworks\WeclappApiCore\Normalizer\AmountNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ApiProblem::class => \Webhubworks\WeclappApiCore\Normalizer\ApiProblemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArchivedEmail::class => \Webhubworks\WeclappApiCore\Normalizer\ArchivedEmailNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Article::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleAlternativeQuantityNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCalculationPrice::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCalculationPriceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCategory::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleImage::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleImageNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleItemGroup::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleItemGroupItem::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticlePrice::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceWithoutArticleReferenceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutSalesChannel::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceWithoutSalesChannelNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleSupplySource::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Attendance::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BankAccount::class => \Webhubworks\WeclappApiCore\Normalizer\BankAccountNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseArticle::class => \Webhubworks\WeclappApiCore\Normalizer\BaseArticleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseMinimalRecordItem::class => \Webhubworks\WeclappApiCore\Normalizer\BaseMinimalRecordItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BasePick::class => \Webhubworks\WeclappApiCore\Normalizer\BasePickNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BasePurchaseRecord::class => \Webhubworks\WeclappApiCore\Normalizer\BasePurchaseRecordNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseRecord::class => \Webhubworks\WeclappApiCore\Normalizer\BaseRecordNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseRecordItem::class => \Webhubworks\WeclappApiCore\Normalizer\BaseRecordItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseRecordItemWithMoney::class => \Webhubworks\WeclappApiCore\Normalizer\BaseRecordItemWithMoneyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseRecordItemWithPrintSettings::class => \Webhubworks\WeclappApiCore\Normalizer\BaseRecordItemWithPrintSettingsNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseRecordWithMoney::class => \Webhubworks\WeclappApiCore\Normalizer\BaseRecordWithMoneyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseSalesRecord::class => \Webhubworks\WeclappApiCore\Normalizer\BaseSalesRecordNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseSalesRecordItemWithCost::class => \Webhubworks\WeclappApiCore\Normalizer\BaseSalesRecordItemWithCostNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseSalesRecordItemWithService::class => \Webhubworks\WeclappApiCore\Normalizer\BaseSalesRecordItemWithServiceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseSalesRecordWithAddresses::class => \Webhubworks\WeclappApiCore\Normalizer\BaseSalesRecordWithAddressesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseShipment::class => \Webhubworks\WeclappApiCore\Normalizer\BaseShipmentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BaseShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\BaseShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BatchBookingRecord::class => \Webhubworks\WeclappApiCore\Normalizer\BatchBookingRecordNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BatchNumber::class => \Webhubworks\WeclappApiCore\Normalizer\BatchNumberNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BatchSerialNumber::class => \Webhubworks\WeclappApiCore\Normalizer\BatchSerialNumberNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BillOfMaterial::class => \Webhubworks\WeclappApiCore\Normalizer\BillOfMaterialNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class => \Webhubworks\WeclappApiCore\Normalizer\BlanketPurchaseOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\BlanketPurchaseOrderStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Calendar::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarEvent::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarEventNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarEventAttendee::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarEventAttendeeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarSharingPermissions::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarSharingPermissionsNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Campaign::class => \Webhubworks\WeclappApiCore\Normalizer\CampaignNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CampaignParticipant::class => \Webhubworks\WeclappApiCore\Normalizer\CampaignParticipantNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CashAccount::class => \Webhubworks\WeclappApiCore\Normalizer\CashAccountNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Comment::class => \Webhubworks\WeclappApiCore\Normalizer\CommentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CommercialLanguage::class => \Webhubworks\WeclappApiCore\Normalizer\CommercialLanguageNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class => \Webhubworks\WeclappApiCore\Normalizer\CommissionSalesPartnerNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ConditionsForEntityType::class => \Webhubworks\WeclappApiCore\Normalizer\ConditionsForEntityTypeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Contact::class => \Webhubworks\WeclappApiCore\Normalizer\ContactNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Contract::class => \Webhubworks\WeclappApiCore\Normalizer\ContractNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractAdditionalAddress::class => \Webhubworks\WeclappApiCore\Normalizer\ContractAdditionalAddressNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnit::class => \Webhubworks\WeclappApiCore\Normalizer\ContractAuthorizationUnitNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\ContractCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractItem::class => \Webhubworks\WeclappApiCore\Normalizer\ContractItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostCenter::class => \Webhubworks\WeclappApiCore\Normalizer\CostCenterNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage::class => \Webhubworks\WeclappApiCore\Normalizer\CostCenterWithDistributionPercentageNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostType::class => \Webhubworks\WeclappApiCore\Normalizer\CostTypeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmEvent::class => \Webhubworks\WeclappApiCore\Normalizer\CrmEventNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Currency::class => \Webhubworks\WeclappApiCore\Normalizer\CurrencyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttribute::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionConditionsNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionListValue::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionListValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionOrder::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPermission::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionPermissionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionPropertyConditionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionTranslation::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionTranslationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomValue::class => \Webhubworks\WeclappApiCore\Normalizer\CustomValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Customer::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerOrLead::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerOrLeadNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerSpecificArticleAttributes::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerSpecificArticleAttributesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DemoTestSystemInfo::class => \Webhubworks\WeclappApiCore\Normalizer\DemoTestSystemInfoNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Document::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentVersion::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentVersionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Duration::class => \Webhubworks\WeclappApiCore\Normalizer\DurationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\EcommerceOrder::class => \Webhubworks\WeclappApiCore\Normalizer\EcommerceOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\EmailAddresses::class => \Webhubworks\WeclappApiCore\Normalizer\EmailAddressesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Entity::class => \Webhubworks\WeclappApiCore\Normalizer\EntityNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\EntityReference::class => \Webhubworks\WeclappApiCore\Normalizer\EntityReferenceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ExternalConnection::class => \Webhubworks\WeclappApiCore\Normalizer\ExternalConnectionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FastProductionBookingResult::class => \Webhubworks\WeclappApiCore\Normalizer\FastProductionBookingResultNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FinancialYear::class => \Webhubworks\WeclappApiCore\Normalizer\FinancialYearNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FulfillmentProvider::class => \Webhubworks\WeclappApiCore\Normalizer\FulfillmentProviderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingBooking::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingBookingNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoods::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InternalTransportReference::class => \Webhubworks\WeclappApiCore\Normalizer\InternalTransportReferenceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Inventory::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryGroup::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryGroupNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryItem::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventorySerialNumber::class => \Webhubworks\WeclappApiCore\Normalizer\InventorySerialNumberNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryTransportReference::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryTransportReferenceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ItemPick::class => \Webhubworks\WeclappApiCore\Normalizer\ItemPickNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\JobProgress::class => \Webhubworks\WeclappApiCore\Normalizer\JobProgressNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\JobResult::class => \Webhubworks\WeclappApiCore\Normalizer\JobResultNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Lead::class => \Webhubworks\WeclappApiCore\Normalizer\LeadNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LedgerAccount::class => \Webhubworks\WeclappApiCore\Normalizer\LedgerAccountNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\License::class => \Webhubworks\WeclappApiCore\Normalizer\LicenseNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier::class => \Webhubworks\WeclappApiCore\Normalizer\LoadingEquipmentIdentifierNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MailTemplate::class => \Webhubworks\WeclappApiCore\Normalizer\MailTemplateNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Manufacturer::class => \Webhubworks\WeclappApiCore\Normalizer\ManufacturerNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MinimalStoragePlace::class => \Webhubworks\WeclappApiCore\Normalizer\MinimalStoragePlaceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MoneyTransaction::class => \Webhubworks\WeclappApiCore\Normalizer\MoneyTransactionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class => \Webhubworks\WeclappApiCore\Normalizer\NestedStoragePlaceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Notification::class => \Webhubworks\WeclappApiCore\Normalizer\NotificationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OnlineAccount::class => \Webhubworks\WeclappApiCore\Normalizer\OnlineAccountNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OnlyId::class => \Webhubworks\WeclappApiCore\Normalizer\OnlyIdNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpenItem::class => \Webhubworks\WeclappApiCore\Normalizer\OpenItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Opportunity::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PackagingUnit::class => \Webhubworks\WeclappApiCore\Normalizer\PackagingUnitNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Party::class => \Webhubworks\WeclappApiCore\Normalizer\PartyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class => \Webhubworks\WeclappApiCore\Normalizer\PartyBankAccountNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyButNotContact::class => \Webhubworks\WeclappApiCore\Normalizer\PartyButNotContactNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyEmailAddresses::class => \Webhubworks\WeclappApiCore\Normalizer\PartyEmailAddressesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class => \Webhubworks\WeclappApiCore\Normalizer\PartyHabitualExporterLetterOfIntentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentApplication::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentApplicationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentMethod::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentMethodNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentRun::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentRunNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentRunItem::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentRunItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Period::class => \Webhubworks\WeclappApiCore\Normalizer\PeriodNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Pick::class => \Webhubworks\WeclappApiCore\Normalizer\PickNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PriceCalculationParameter::class => \Webhubworks\WeclappApiCore\Normalizer\PriceCalculationParameterNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class => \Webhubworks\WeclappApiCore\Normalizer\PriceCalculationParameterV1Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PriceData::class => \Webhubworks\WeclappApiCore\Normalizer\PriceDataNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PriceDataReductionAdditionItem::class => \Webhubworks\WeclappApiCore\Normalizer\PriceDataReductionAdditionItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrder::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderItem::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderWorkItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleAssignmentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProjectMembers::class => \Webhubworks\WeclappApiCore\Normalizer\ProjectMembersNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PropertyTranslation::class => \Webhubworks\WeclappApiCore\Normalizer\PropertyTranslationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PropertyTranslationValue::class => \Webhubworks\WeclappApiCore\Normalizer\PropertyTranslationValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoice::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItemRelationship::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceItemRelationshipNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrder::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestItemScaleValue::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestItemScaleValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOffer::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestOfferNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestOfferItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItemScaleValue::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestOfferItemScaleValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisition::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuantityConversion::class => \Webhubworks\WeclappApiCore\Normalizer\QuantityConversionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Quotation::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationItem::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationItemScaleValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RecordAddress::class => \Webhubworks\WeclappApiCore\Normalizer\RecordAddressNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RecordEmailingRule::class => \Webhubworks\WeclappApiCore\Normalizer\RecordEmailingRuleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RecurringEvent::class => \Webhubworks\WeclappApiCore\Normalizer\RecurringEventNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ReductionAddition::class => \Webhubworks\WeclappApiCore\Normalizer\ReductionAdditionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class => \Webhubworks\WeclappApiCore\Normalizer\ReductionAdditionItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Region::class => \Webhubworks\WeclappApiCore\Normalizer\RegionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Releases::class => \Webhubworks\WeclappApiCore\Normalizer\ReleasesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Reminder::class => \Webhubworks\WeclappApiCore\Normalizer\ReminderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class => \Webhubworks\WeclappApiCore\Normalizer\ReminderRecurringEventNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RemotePrintJob::class => \Webhubworks\WeclappApiCore\Normalizer\RemotePrintJobNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesBillOfMaterialArticleItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesBillOfMaterialArticleItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesChannel::class => \Webhubworks\WeclappApiCore\Normalizer\SalesChannelNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoice::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceItemRelationship::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceItemRelationshipNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrder::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderPaymentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesShippingCostItem::class => \Webhubworks\WeclappApiCore\Normalizer\SalesShippingCostItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesStage::class => \Webhubworks\WeclappApiCore\Normalizer\SalesStageNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesStageHistory::class => \Webhubworks\WeclappApiCore\Normalizer\SalesStageHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate::class => \Webhubworks\WeclappApiCore\Normalizer\SepaDirectDebitMandateNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SerialNumber::class => \Webhubworks\WeclappApiCore\Normalizer\SerialNumberNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Shelf::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Shipment::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentItem::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentMethod::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentMethodNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnDescriptionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentStatus::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentStatusNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShippingCarrier::class => \Webhubworks\WeclappApiCore\Normalizer\ShippingCarrierNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocation::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlace::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceSize::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceSizeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceTypeSettingsNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SuccessResponse::class => \Webhubworks\WeclappApiCore\Normalizer\SuccessResponseNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Supplier::class => \Webhubworks\WeclappApiCore\Normalizer\SupplierNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SupplySource::class => \Webhubworks\WeclappApiCore\Normalizer\SupplySourceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Tag::class => \Webhubworks\WeclappApiCore\Normalizer\TagNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Tax::class => \Webhubworks\WeclappApiCore\Normalizer\TaxNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxDeterminationRule::class => \Webhubworks\WeclappApiCore\Normalizer\TaxDeterminationRuleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TermOfPayment::class => \Webhubworks\WeclappApiCore\Normalizer\TermOfPaymentNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TermOfPaymentCondition::class => \Webhubworks\WeclappApiCore\Normalizer\TermOfPaymentConditionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Ticket::class => \Webhubworks\WeclappApiCore\Normalizer\TicketNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule::class => \Webhubworks\WeclappApiCore\Normalizer\TicketAssignmentRuleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketCategory::class => \Webhubworks\WeclappApiCore\Normalizer\TicketCategoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketFaq::class => \Webhubworks\WeclappApiCore\Normalizer\TicketFaqNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketPoolingGroup::class => \Webhubworks\WeclappApiCore\Normalizer\TicketPoolingGroupNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketPoolingGroupMember::class => \Webhubworks\WeclappApiCore\Normalizer\TicketPoolingGroupMemberNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement::class => \Webhubworks\WeclappApiCore\Normalizer\TicketServiceLevelAgreementNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget::class => \Webhubworks\WeclappApiCore\Normalizer\TicketServiceLevelAgreementTargetNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketStatus::class => \Webhubworks\WeclappApiCore\Normalizer\TicketStatusNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketType::class => \Webhubworks\WeclappApiCore\Normalizer\TicketTypeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Translation::class => \Webhubworks\WeclappApiCore\Normalizer\TranslationNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TranslationValue::class => \Webhubworks\WeclappApiCore\Normalizer\TranslationValueNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportPick::class => \Webhubworks\WeclappApiCore\Normalizer\TransportPickNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrder::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderStatusHistory::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderStatusHistoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Unit::class => \Webhubworks\WeclappApiCore\Normalizer\UnitNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\User::class => \Webhubworks\WeclappApiCore\Normalizer\UserNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserRole::class => \Webhubworks\WeclappApiCore\Normalizer\UserRoleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ValidationError::class => \Webhubworks\WeclappApiCore\Normalizer\ValidationErrorNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticle::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleAttribute::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleAttributeNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleAttributeOption::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleAttributeOptionNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleVariant::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleVariantNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleVariantWithoutReference::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleVariantWithoutReferenceNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Warehouse::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseQuantity::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseQuantityNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStock::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\Webhook::class => \Webhubworks\WeclappApiCore\Normalizer\WebhookNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WeclappOs::class => \Webhubworks\WeclappApiCore\Normalizer\WeclappOsNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransactionGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionBatchBookingPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBookingDto::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionBatchBookingPostBodyBatchBookingDtoNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionBatchBookingPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AccountingTransactionCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AccountingTransactionCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArchivedEmailGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArchivedEmailGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArchivedEmailCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArchivedEmailCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArchivedEmailIdIdRemoveReferencePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArchivedEmailIdIdRemoveReferencePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArchivedEmailIdIdRemoveReferencePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArchivedEmailIdIdRemoveReferencePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdChangeUnitPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdChangeUnitPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdCreateDatasheetPdfPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateLabelPdfPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdCreateLabelPdfPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdPackagingUnitStructureGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleIdIdUploadArticleImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleIdIdUploadArticleImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleAccountingCodeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleAccountingCodeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCategoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCategoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryClassificationGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleCategoryClassificationCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleItemGroupGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleItemGroupCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleItemGroupCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticlePriceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticlePriceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticlePriceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleRatingGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleRatingGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleRatingCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleRatingCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleStatusGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleStatusGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleStatusCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleStatusCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ArticleSupplySourceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceCurrentAttendanceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceCurrentAttendanceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceLogOffPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceLogOffPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceLogOffPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceLogOffPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceLogOnPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceLogOnPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\AttendanceLogOnPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\AttendanceLogOnPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BankAccountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BankAccountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BankAccountCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BankAccountCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BatchNumberGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BatchNumberGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BatchNumberCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BatchNumberCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BlanketPurchaseOrderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BlanketPurchaseOrderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\BlanketPurchaseOrderIdIdGenerateReleasesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\BlanketPurchaseOrderIdIdGenerateReleasesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarIdIdDeleteCalendarAndMoveEventsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarIdIdDeleteCalendarAndMoveEventsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarIdIdImportiCalPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarIdIdImportiCalPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarEventGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarEventGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CalendarEventCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CalendarEventCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CampaignGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CampaignGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CampaignCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CampaignCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CampaignParticipantGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CampaignParticipantGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CampaignParticipantCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CampaignParticipantCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CashAccountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CashAccountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CashAccountCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CashAccountCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CommentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CommentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CommentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CommentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CommercialLanguageGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CommercialLanguageGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CommercialLanguageCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CommercialLanguageCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CompanySizeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CompanySizeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CompanySizeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CompanySizeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContactGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContactGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContactCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContactCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContactIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContactIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractIdIdCreateContractDocumentPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ContractIdIdCreateContractDocumentPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnitGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractAuthorizationUnitGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnitCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractAuthorizationUnitCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractBillingGroupGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractBillingGroupGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractBillingGroupCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractBillingGroupCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractTerminationReasonGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractTerminationReasonGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ContractTerminationReasonCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ContractTerminationReasonCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostCenterGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CostCenterGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostCenterCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CostCenterCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostCenterGroupGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CostCenterGroupGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostCenterGroupCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CostCenterGroupCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostTypeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CostTypeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CostTypeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CostTypeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmCallCategoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CrmCallCategoryGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmCallCategoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CrmCallCategoryCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmEventGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CrmEventGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmEventCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CrmEventCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmEventCategoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CrmEventCategoryGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CrmEventCategoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CrmEventCategoryCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CurrencyGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CurrencyGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CurrencyCompanyCurrencyGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CurrencyCompanyCurrencyGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CurrencyCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CurrencyCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionReadOrderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionReadOrderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionUpdateOrderPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostBodyOrderItem::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionUpdateOrderPostBodyOrderItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomAttributeDefinitionUpdateOrderPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerCategoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerCategoryGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerCategoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerCategoryCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerLeadLossReasonGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerLeadLossReasonGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerLeadLossReasonCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerLeadLossReasonCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerTopicGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerTopicGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomerTopicCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomerTopicCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomsTariffNumberGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomsTariffNumberGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\CustomsTariffNumberCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\CustomsTariffNumberCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentCopyPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentCopyPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentCopyPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentIdIdCopyPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentIdIdCopyPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentIdIdCopyPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentIdIdCopyPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentIdIdUploadPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentIdIdUploadPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\DocumentUploadPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\DocumentUploadPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ExternalConnectionGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ExternalConnectionGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ExternalConnectionCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ExternalConnectionCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FinancialYearGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\FinancialYearGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FinancialYearCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\FinancialYearCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FinancialYearIdIdGeneratePeriodsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\FinancialYearIdIdGeneratePeriodsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FinancialYearIdIdGeneratePeriodsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\FinancialYearIdIdGeneratePeriodsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FulfillmentProviderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\FulfillmentProviderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\FulfillmentProviderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\FulfillmentProviderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdAddPurchaseOrdersPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdAddPurchaseOrdersPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdAddPurchaseOrdersPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdAddPurchaseOrdersPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCompensationShipmentPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateCompensationShipmentPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCompensationShipmentPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateCompensationShipmentPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCreditNotePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateCreditNotePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCreditNotePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateCreditNotePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreatePurchaseInvoicePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreatePurchaseInvoicePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreatePurchaseInvoicePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreatePurchaseInvoicePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateReturnLabelsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateReturnLabelsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateReturnLabelsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateReturnLabelsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateSupplierReturnPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateSupplierReturnPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateSupplierReturnPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdCreateSupplierReturnPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdIncomingBookingsGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdIncomingBookingsGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\IncomingGoodsIdIdUpdateIncomingBookingsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InternalTransportReferenceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InternalTransportReferenceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceIdIdCreateLabelPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\InternalTransportReferenceIdIdCreateLabelPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryCreatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryCreatePostBodyInventoryNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryCreatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryCreatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryGroupGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryGroupGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryGroupCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryGroupCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryItemGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryItemGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryItemCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryItemCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryTransportReferenceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryTransportReferenceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\InventoryTransportReferenceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\InventoryTransportReferenceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\JobAbortGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\JobAbortGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\JobStatusGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\JobStatusGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadIdIdConvertLeadToCustomerGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadIdIdConvertLeadToCustomerGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadRatingGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadRatingGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadRatingCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadRatingCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadSourceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadSourceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LeadSourceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LeadSourceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LedgerAccountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LedgerAccountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LedgerAccountCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LedgerAccountCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LegalFormGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LegalFormGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LegalFormCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LegalFormCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifierGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LoadingEquipmentIdentifierGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifierCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\LoadingEquipmentIdentifierCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MailTemplateGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\MailTemplateGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MailTemplateCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\MailTemplateCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ManufacturerGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ManufacturerGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ManufacturerCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ManufacturerCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MetaQueryFilterPropertiesGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\MetaQueryFilterPropertiesGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MetaQuerySortPropertiesGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\MetaQuerySortPropertiesGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\MetaResourcesGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\MetaResourcesGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\NotificationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\NotificationGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\NotificationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\NotificationCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\NotificationIdIdMarkReadPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\NotificationIdIdMarkReadPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\NotificationIdIdMarkReadPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\NotificationIdIdMarkReadPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityIdIdLinkQuotationPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityIdIdLinkQuotationPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityIdIdLinkQuotationPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityIdIdLinkQuotationPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityTopicGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityTopicGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityTopicCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityTopicCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityWinLossReasonGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityWinLossReasonGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\OpportunityWinLossReasonCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\OpportunityWinLossReasonCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PartyGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\PartyGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PartyCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyIdIdCreatePublicPagePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PartyIdIdCreatePublicPagePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyIdIdCreatePublicPagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PartyIdIdCreatePublicPagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PartyIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyRatingGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PartyRatingGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PartyRatingCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PartyRatingCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentMethodGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentMethodGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentMethodCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentMethodCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentRunGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentRunGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentRunCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentRunCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentRunItemGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentRunItemGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PaymentRunItemCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PaymentRunItemCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PersonDepartmentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PersonDepartmentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PersonDepartmentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PersonDepartmentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PersonRoleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PersonRoleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PersonRoleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PersonRoleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PersonalAccountingCodeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PersonalAccountingCodeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PersonalAccountingCodeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PersonalAccountingCodeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PickGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PickGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PickCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PickCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PickCheckReasonGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PickCheckReasonGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PickCheckReasonCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PickCheckReasonCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PlaceOfServiceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PlaceOfServiceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PlaceOfServiceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PlaceOfServiceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PriceCalculationParameterGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PriceCalculationParameterCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderFastProductionBookingPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderFastProductionBookingPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderFastProductionBookingPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderFastProductionBookingPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionOrderIdIdCreatePickingListPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionOrderIdIdCreatePickingListPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignmentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleAssignmentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignmentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ProductionWorkScheduleAssignmentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PropertyTranslationReadPropertyTranslationsGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PropertyTranslationReadPropertyTranslationsGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PropertyTranslationUpdatePropertyTranslationsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem::class => \Webhubworks\WeclappApiCore\Normalizer\PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PropertyTranslationUpdatePropertyTranslationsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateContractPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdCreateContractPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateContractPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdCreateContractPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateCreditNotePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdCreateCreditNotePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateCreditNotePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdCreateCreditNotePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdResetTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdResetTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdResetTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdResetTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemIdIdCreatePaymentApplicationPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemIdIdCreatePaymentApplicationPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemIdIdUpdatePaymentStatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOpenItemIdIdUpdatePaymentStatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCancelDropshippingShipmentsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCancelDropshippingShipmentsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateContractPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateContractPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateContractPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateContractPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateDropshippingDeliveryNotePdfPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateDropshippingDeliveryNotePdfPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateIncomingGoodsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateIncomingGoodsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateIncomingGoodsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateIncomingGoodsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreatePurchaseInvoicePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreatePurchaseInvoicePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateSupplierReturnPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateSupplierReturnPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateSupplierReturnPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdCreateSupplierReturnPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdProcessDropshippingPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParametersNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderIdIdProcessDropshippingPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdCreatePurchaseOrderPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdExportItemsAsCsvPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseOrderRequestIdIdPushPurchasePricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionDeleteAllRequisitionsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionDeleteAllRequisitionsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStartMaterialPlanningRunPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionStartMaterialPlanningRunPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStartMaterialPlanningRunPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\PurchaseRequisitionStartMaterialPlanningRunPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdAcceptPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdAcceptPostBodyAcceptQuotationItemsItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdAcceptPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdAddDefaultScalePricesToItemsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdAddDefaultScalePricesToItemsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdAddDefaultScalePricesToItemsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdAddDefaultScalePricesToItemsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCalculateSalesPricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCalculateSalesPricesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateNewVersionPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCreateNewVersionPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateNewVersionPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCreateNewVersionPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePublicPageLinkPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCreatePublicPageLinkPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCreatePurchaseOrderRequestPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCreatePurchaseOrderRequestPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateQuotationPdfPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdCreateQuotationPdfPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdDisablePublicPageLinkPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdDisablePublicPageLinkPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdInquirePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdInquirePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdInquirePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdInquirePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdRecalculateCostsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdRecalculateCostsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdRecalculateCostsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdRecalculateCostsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdResetTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdResetTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdResetTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdResetTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdSetCostsForItemsWithoutCostPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdSetCostsForItemsWithoutCostPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdSetCostsForItemsWithoutCostPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdSetCostsForItemsWithoutCostPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdUpdatePricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdUpdatePricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\QuotationIdIdUpdatePricesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\QuotationIdIdUpdatePricesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RecordEmailingRuleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RecordEmailingRuleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RecordEmailingRuleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RecordEmailingRuleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RegionGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RegionGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RegionCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RegionCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ReminderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ReminderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ReminderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ReminderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RemotePrintJobGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RemotePrintJobGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RemotePrintJobCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RemotePrintJobCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\RemotePrintJobCreatePrintJobWithDocumentPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\RemotePrintJobCreatePrintJobWithDocumentPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesChannelActiveSalesChannelsGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesChannelActiveSalesChannelsGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdAddSalesOrdersPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdAddSalesOrdersPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdCalculateSalesPricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdCalculateSalesPricesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateContractPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdCreateContractPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateContractPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdCreateContractPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateCreditNotePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdCreateCreditNotePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateCreditNotePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdCreateCreditNotePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdRecalculateCostsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdRecalculateCostsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdRecalculateCostsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdRecalculateCostsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdResetTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdResetTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdResetTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdResetTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdUpdatePricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdUpdatePricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdUpdatePricesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesInvoiceIdIdUpdatePricesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItemGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItemCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdCreatePaymentApplicationPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemIdIdCreatePaymentApplicationPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdCreatePaymentApplicationPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemIdIdCreatePaymentApplicationPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdUpdatePaymentStatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemIdIdUpdatePaymentStatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdUpdatePaymentStatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOpenItemIdIdUpdatePaymentStatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderDefaultValuesForCreateGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderDefaultValuesForCreateGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdActivateProjectViewPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdActivateProjectViewPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdActivateProjectViewPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdActivateProjectViewPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCalculateSalesPricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCalculateSalesPricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCalculateSalesPricesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCalculateSalesPricesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCancelOrManuallyClosePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCancelOrManuallyClosePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCancelOrManuallyClosePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCancelOrManuallyClosePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateAdvancePaymentRequestPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateAdvancePaymentRequestPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateAdvancePaymentRequestPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateAdvancePaymentRequestPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateContractPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateContractPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateContractPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateContractPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateCustomerReturnPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateCustomerReturnPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateCustomerReturnPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateCustomerReturnPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateDropshippingPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateDropshippingPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePartPaymentInvoicePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePartPaymentInvoicePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePartPaymentInvoicePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePartPaymentInvoicePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePrepaymentFinalInvoicePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePrepaymentFinalInvoicePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePrepaymentFinalInvoicePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePrepaymentFinalInvoicePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateProductionOrdersPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateProductionOrdersPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateProductionOrdersPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateProductionOrdersPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePurchaseOrderPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePurchaseOrderPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePurchaseOrderRequestPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreatePurchaseOrderRequestPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateReturnLabelsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateReturnLabelsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateReturnLabelsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateReturnLabelsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateSalesInvoicePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateSalesInvoicePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateSalesInvoicePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateSalesInvoicePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShipmentPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateShipmentPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShipmentPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateShipmentPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShippingLabelsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateShippingLabelsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShippingLabelsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdCreateShippingLabelsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdManuallyClosePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdManuallyClosePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdManuallyClosePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdManuallyClosePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdRecalculateCostsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdRecalculateCostsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdRecalculateCostsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdRecalculateCostsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdResetTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdResetTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdResetTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdResetTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdSetCostsForItemsWithoutCostPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdSetCostsForItemsWithoutCostPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdSetCostsForItemsWithoutCostPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdSetCostsForItemsWithoutCostPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdShipOrderForExternalFulfillmentPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdShipOrderForExternalFulfillmentPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdShipOrderForExternalFulfillmentPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdShipOrderForExternalFulfillmentPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleProjectTeamPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdToggleProjectTeamPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleProjectTeamPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdToggleProjectTeamPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleServicesFinishedPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdToggleServicesFinishedPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleServicesFinishedPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdToggleServicesFinishedPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdUpdatePricesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdUpdatePricesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdUpdatePricesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesOrderIdIdUpdatePricesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesStageGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesStageGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SalesStageCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SalesStageCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SectorGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SectorGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SectorCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SectorCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandateGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SepaDirectDebitMandateGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandateCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SepaDirectDebitMandateCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SerialNumberGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SerialNumberGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SerialNumberCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SerialNumberCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShelfGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShelfCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShelfIdIdActivatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfIdIdActivatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShelfIdIdActivatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfIdIdActivatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfIdIdDeactivatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShelfIdIdDeactivatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreatePickingListPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreatePickingListPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateReturnLabelsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateReturnLabelsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateReturnLabelsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateReturnLabelsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateSalesInvoicePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateSalesInvoicePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateSalesInvoicePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateSalesInvoicePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelPdfPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateShippingLabelPdfPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateShippingLabelsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentIdIdCreateShippingLabelsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentMethodGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentMethodGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentMethodCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentMethodCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnAssessmentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnAssessmentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnAssessmentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnAssessmentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnErrorGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnErrorGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnErrorCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnErrorCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnReasonGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnReasonGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnReasonCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnReasonCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnRectificationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnRectificationGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShipmentReturnRectificationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShipmentReturnRectificationCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShippingCarrierGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShippingCarrierGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\ShippingCarrierCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\ShippingCarrierCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdActivatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationIdIdActivatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdActivatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationIdIdActivatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdDeactivatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationIdIdDeactivatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdDeactivatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StorageLocationIdIdDeactivatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceBlockingReasonGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceBlockingReasonGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceBlockingReasonCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceBlockingReasonCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceSizeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceSizeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\StoragePlaceSizeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\StoragePlaceSizeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SupplierGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SupplierGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SupplierCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SupplierCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SupplierIdIdUploadImagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SupplierIdIdUploadImagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SystemCreateDemoTestSystemPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\SystemCreateDemoTestSystemPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SystemCreateDemoTestSystemPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SystemCreateDemoTestSystemPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SystemDemoTestSystemInfoGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SystemDemoTestSystemInfoGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SystemLicensesGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SystemLicensesGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\SystemPermissionsGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\SystemPermissionsGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TagGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TagGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TagCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TagCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxConfigurePurchaseTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TaxConfigurePurchaseTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxConfigurePurchaseTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxConfigurePurchaseTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TaxConfigureSalesTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxConfigureSalesTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxFindPurchaseTaxGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxFindPurchaseTaxGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxFindSalesTaxGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxFindSalesTaxGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TaxResetSystemTaxesPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxResetSystemTaxesPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxDeterminationRuleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxDeterminationRuleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TaxDeterminationRuleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TaxDeterminationRuleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TermOfPaymentGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TermOfPaymentGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TermOfPaymentCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TermOfPaymentCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketGetResponse200AdditionalProperties::class => \Webhubworks\WeclappApiCore\Normalizer\TicketGetResponse200AdditionalPropertiesNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdCreatePublicPagePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdCreatePublicPagePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdCreatePublicPagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdCreatePublicPagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdDisablePublicPagePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdDisablePublicPagePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdDisablePublicPagePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdDisablePublicPagePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdLinkSalesOrderPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdLinkSalesOrderPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdLinkSalesOrderPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdLinkSalesOrderPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdUnlinkSalesOrderPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdUnlinkSalesOrderPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketIdIdUnlinkSalesOrderPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketIdIdUnlinkSalesOrderPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketAssignmentRuleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketAssignmentRuleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketAssignmentRuleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketAssignmentRuleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketCategoryGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketCategoryGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketCategoryCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketCategoryCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketChannelGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketChannelGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketChannelCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketChannelCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketFaqGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketFaqGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketFaqCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketFaqCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketPoolingGroupGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketPoolingGroupGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketPoolingGroupCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketPoolingGroupCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketServiceLevelAgreementGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketServiceLevelAgreementCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketStatusGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketStatusGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketStatusCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketStatusCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketTypeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketTypeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TicketTypeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TicketTypeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TitleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TitleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TitleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TitleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TranslationGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TranslationGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TranslationCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TranslationCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdCreatePickPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdCreatePickPostBodyExistingReservationsItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdCreatePickPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickingListPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdCreatePickingListPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdInternalTransportReferencesForPickUpGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdInternalTransportReferencesForPickUpGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPickPickPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdPickPickPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPickPickPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdPickPickPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdPutDownInternalTransportReferencePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\TransportationOrderIdIdPutDownInternalTransportReferencePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UnitGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UnitGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UnitCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UnitCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UserGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UserCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserCurrentUserGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UserCurrentUserGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserIdIdInvitePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\UserIdIdInvitePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserIdIdInvitePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UserIdIdInvitePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserRoleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UserRoleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserRoleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\UserRoleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserRoleDisableUserRolesDuringTrialPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\UserRoleDisableUserRolesDuringTrialPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\UserRoleEnableUserRolesDuringTrialPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\UserRoleEnableUserRolesDuringTrialPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleAttributeGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleAttributeGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleAttributeCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleAttributeCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleVariantGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleVariantGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\VariantArticleVariantCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\VariantArticleVariantCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseIdIdActivatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseIdIdActivatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseIdIdActivatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseIdIdActivatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseIdIdDeactivatePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseIdIdDeactivatePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseIdIdDeactivatePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseIdIdDeactivatePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookDirectStockTransferPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostBodyCustomAttributesItem::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookDirectStockTransferPostBodyCustomAttributesItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookDirectStockTransferPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookFromLoadingEquipmentPlacePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookIncomingMovementPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookIncomingMovementPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookOntoInternalTransportReferencePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookOntoInternalTransportReferencePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookOutgoingMovementPostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostBodyCustomAttributesItem::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookOutgoingMovementPostBodyCustomAttributesItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookOutgoingMovementPostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItemNormalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementBookToLoadingEquipmentPlacePostResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WarehouseStockMovementCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WebhookGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WebhookGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WebhookCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WebhookCountGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WeclappOsGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WeclappOsGetResponse200Normalizer::class,
        
        \Webhubworks\WeclappApiCore\Model\WeclappOsCountGetResponse200::class => \Webhubworks\WeclappApiCore\Normalizer\WeclappOsCountGetResponse200Normalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Webhubworks\WeclappApiCore\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Webhubworks\WeclappApiCore\Model\AbstractBillOfMaterial::class => false,
            \Webhubworks\WeclappApiCore\Model\AbstractBookRecord::class => false,
            \Webhubworks\WeclappApiCore\Model\AbstractEntity::class => false,
            \Webhubworks\WeclappApiCore\Model\AbstractEntityWithCustomAttributes::class => false,
            \Webhubworks\WeclappApiCore\Model\AbstractParty::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransaction::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransactionDetail::class => false,
            \Webhubworks\WeclappApiCore\Model\Address::class => false,
            \Webhubworks\WeclappApiCore\Model\AggregatePackagingUnit::class => false,
            \Webhubworks\WeclappApiCore\Model\AggregateStock::class => false,
            \Webhubworks\WeclappApiCore\Model\Amount::class => false,
            \Webhubworks\WeclappApiCore\Model\ApiProblem::class => false,
            \Webhubworks\WeclappApiCore\Model\ArchivedEmail::class => false,
            \Webhubworks\WeclappApiCore\Model\Article::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleAlternativeQuantity::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCalculationPrice::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategory::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleImage::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroup::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroupItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePrice::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutArticleReference::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceWithoutSalesChannel::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySource::class => false,
            \Webhubworks\WeclappApiCore\Model\Attendance::class => false,
            \Webhubworks\WeclappApiCore\Model\BankAccount::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseArticle::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseMinimalRecordItem::class => false,
            \Webhubworks\WeclappApiCore\Model\BasePick::class => false,
            \Webhubworks\WeclappApiCore\Model\BasePurchaseRecord::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseRecord::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseRecordItem::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseRecordItemWithMoney::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseRecordItemWithPrintSettings::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseRecordWithMoney::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseSalesRecord::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseSalesRecordItemWithCost::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseSalesRecordItemWithService::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseSalesRecordWithAddresses::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseShipment::class => false,
            \Webhubworks\WeclappApiCore\Model\BaseShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\BatchBookingRecord::class => false,
            \Webhubworks\WeclappApiCore\Model\BatchNumber::class => false,
            \Webhubworks\WeclappApiCore\Model\BatchSerialNumber::class => false,
            \Webhubworks\WeclappApiCore\Model\BillOfMaterial::class => false,
            \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\Calendar::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarEvent::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarEventAttendee::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarSharingPermissions::class => false,
            \Webhubworks\WeclappApiCore\Model\Campaign::class => false,
            \Webhubworks\WeclappApiCore\Model\CampaignParticipant::class => false,
            \Webhubworks\WeclappApiCore\Model\CashAccount::class => false,
            \Webhubworks\WeclappApiCore\Model\Comment::class => false,
            \Webhubworks\WeclappApiCore\Model\CommercialLanguage::class => false,
            \Webhubworks\WeclappApiCore\Model\CommissionSalesPartner::class => false,
            \Webhubworks\WeclappApiCore\Model\ConditionsForEntityType::class => false,
            \Webhubworks\WeclappApiCore\Model\Contact::class => false,
            \Webhubworks\WeclappApiCore\Model\Contract::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractAdditionalAddress::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnit::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractItem::class => false,
            \Webhubworks\WeclappApiCore\Model\CostCenter::class => false,
            \Webhubworks\WeclappApiCore\Model\CostCenterWithDistributionPercentage::class => false,
            \Webhubworks\WeclappApiCore\Model\CostType::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmEvent::class => false,
            \Webhubworks\WeclappApiCore\Model\Currency::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttribute::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinition::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionConditions::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionListValue::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPermission::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionPropertyCondition::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionTranslation::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomValue::class => false,
            \Webhubworks\WeclappApiCore\Model\Customer::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerOrLead::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerSpecificArticleAttributes::class => false,
            \Webhubworks\WeclappApiCore\Model\DemoTestSystemInfo::class => false,
            \Webhubworks\WeclappApiCore\Model\Document::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentVersion::class => false,
            \Webhubworks\WeclappApiCore\Model\Duration::class => false,
            \Webhubworks\WeclappApiCore\Model\EcommerceOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\EmailAddresses::class => false,
            \Webhubworks\WeclappApiCore\Model\Entity::class => false,
            \Webhubworks\WeclappApiCore\Model\EntityReference::class => false,
            \Webhubworks\WeclappApiCore\Model\ExternalConnection::class => false,
            \Webhubworks\WeclappApiCore\Model\FastProductionBookingResult::class => false,
            \Webhubworks\WeclappApiCore\Model\FinancialYear::class => false,
            \Webhubworks\WeclappApiCore\Model\FulfillmentProvider::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingBooking::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoods::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsItem::class => false,
            \Webhubworks\WeclappApiCore\Model\InternalTransportReference::class => false,
            \Webhubworks\WeclappApiCore\Model\Inventory::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryGroup::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryItem::class => false,
            \Webhubworks\WeclappApiCore\Model\InventorySerialNumber::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryTransportReference::class => false,
            \Webhubworks\WeclappApiCore\Model\ItemPick::class => false,
            \Webhubworks\WeclappApiCore\Model\JobProgress::class => false,
            \Webhubworks\WeclappApiCore\Model\JobResult::class => false,
            \Webhubworks\WeclappApiCore\Model\Lead::class => false,
            \Webhubworks\WeclappApiCore\Model\LedgerAccount::class => false,
            \Webhubworks\WeclappApiCore\Model\License::class => false,
            \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifier::class => false,
            \Webhubworks\WeclappApiCore\Model\MailTemplate::class => false,
            \Webhubworks\WeclappApiCore\Model\Manufacturer::class => false,
            \Webhubworks\WeclappApiCore\Model\MinimalStoragePlace::class => false,
            \Webhubworks\WeclappApiCore\Model\MoneyTransaction::class => false,
            \Webhubworks\WeclappApiCore\Model\NestedStoragePlace::class => false,
            \Webhubworks\WeclappApiCore\Model\Notification::class => false,
            \Webhubworks\WeclappApiCore\Model\OnlineAccount::class => false,
            \Webhubworks\WeclappApiCore\Model\OnlyId::class => false,
            \Webhubworks\WeclappApiCore\Model\OpenItem::class => false,
            \Webhubworks\WeclappApiCore\Model\Opportunity::class => false,
            \Webhubworks\WeclappApiCore\Model\PackagingUnit::class => false,
            \Webhubworks\WeclappApiCore\Model\Party::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyBankAccount::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyButNotContact::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyEmailAddresses::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyHabitualExporterLetterOfIntent::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentApplication::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentMethod::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentRun::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentRunItem::class => false,
            \Webhubworks\WeclappApiCore\Model\Period::class => false,
            \Webhubworks\WeclappApiCore\Model\Pick::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceCalculationParameter::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterV1::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceData::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceDataReductionAdditionItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderWorkItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkSchedule::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignment::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ProjectMembers::class => false,
            \Webhubworks\WeclappApiCore\Model\PropertyTranslation::class => false,
            \Webhubworks\WeclappApiCore\Model\PropertyTranslationValue::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoice::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceItemRelationship::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequest::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestItemScaleValue::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOffer::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestOfferItemScaleValue::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisition::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\QuantityConversion::class => false,
            \Webhubworks\WeclappApiCore\Model\Quotation::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationItem::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationItemScaleValue::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\RecordAddress::class => false,
            \Webhubworks\WeclappApiCore\Model\RecordEmailingRule::class => false,
            \Webhubworks\WeclappApiCore\Model\RecurringEvent::class => false,
            \Webhubworks\WeclappApiCore\Model\ReductionAddition::class => false,
            \Webhubworks\WeclappApiCore\Model\ReductionAdditionItem::class => false,
            \Webhubworks\WeclappApiCore\Model\Region::class => false,
            \Webhubworks\WeclappApiCore\Model\Releases::class => false,
            \Webhubworks\WeclappApiCore\Model\Reminder::class => false,
            \Webhubworks\WeclappApiCore\Model\ReminderRecurringEvent::class => false,
            \Webhubworks\WeclappApiCore\Model\RemotePrintJob::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesBillOfMaterialArticleItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesChannel::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoice::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceItemRelationship::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderPayment::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesShippingCostItem::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesStage::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesStageHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandate::class => false,
            \Webhubworks\WeclappApiCore\Model\SerialNumber::class => false,
            \Webhubworks\WeclappApiCore\Model\Shelf::class => false,
            \Webhubworks\WeclappApiCore\Model\Shipment::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentItem::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentMethod::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnDescription::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentStatus::class => false,
            \Webhubworks\WeclappApiCore\Model\ShippingCarrier::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocation::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlace::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceSize::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceTypeSettings::class => false,
            \Webhubworks\WeclappApiCore\Model\SuccessResponse::class => false,
            \Webhubworks\WeclappApiCore\Model\Supplier::class => false,
            \Webhubworks\WeclappApiCore\Model\SupplySource::class => false,
            \Webhubworks\WeclappApiCore\Model\Tag::class => false,
            \Webhubworks\WeclappApiCore\Model\Tax::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxDeterminationRule::class => false,
            \Webhubworks\WeclappApiCore\Model\TermOfPayment::class => false,
            \Webhubworks\WeclappApiCore\Model\TermOfPaymentCondition::class => false,
            \Webhubworks\WeclappApiCore\Model\Ticket::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketAssignmentRule::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketCategory::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketFaq::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketPoolingGroup::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketPoolingGroupMember::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreement::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementTarget::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketStatus::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketType::class => false,
            \Webhubworks\WeclappApiCore\Model\Translation::class => false,
            \Webhubworks\WeclappApiCore\Model\TranslationValue::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportPick::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrder::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderStatusHistory::class => false,
            \Webhubworks\WeclappApiCore\Model\Unit::class => false,
            \Webhubworks\WeclappApiCore\Model\User::class => false,
            \Webhubworks\WeclappApiCore\Model\UserRole::class => false,
            \Webhubworks\WeclappApiCore\Model\ValidationError::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticle::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleAttribute::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleAttributeOption::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleVariant::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleVariantWithoutReference::class => false,
            \Webhubworks\WeclappApiCore\Model\Warehouse::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseQuantity::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStock::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovement::class => false,
            \Webhubworks\WeclappApiCore\Model\Webhook::class => false,
            \Webhubworks\WeclappApiCore\Model\WeclappOs::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransactionGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostBodyBatchBookingDto::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransactionBatchBookingPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AccountingTransactionCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArchivedEmailGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArchivedEmailCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArchivedEmailIdIdRemoveReferencePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArchivedEmailIdIdRemoveReferencePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdChangeUnitPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateDatasheetPdfPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdCreateLabelPdfPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdPackagingUnitStructureGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleIdIdUploadArticleImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleAccountingCodeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleCategoryClassificationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroupGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleItemGroupCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticlePriceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleRatingGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleRatingCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleStatusGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleStatusCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\ArticleSupplySourceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceCurrentAttendanceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceLogOffPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceLogOffPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceLogOnPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\AttendanceLogOnPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BankAccountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BankAccountCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BatchNumberGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BatchNumberCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarIdIdDeleteCalendarAndMoveEventsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarIdIdImportiCalPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarEventGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CalendarEventCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CampaignGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CampaignCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CampaignParticipantGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CampaignParticipantCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CashAccountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CashAccountCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CommentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CommentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CommercialLanguageGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CommercialLanguageCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CompanySizeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CompanySizeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContactGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContactCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContactIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractIdIdCreateContractDocumentPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnitGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractAuthorizationUnitCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractBillingGroupGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractBillingGroupCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractTerminationReasonGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ContractTerminationReasonCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CostCenterGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CostCenterCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CostCenterGroupGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CostCenterGroupCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CostTypeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CostTypeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmCallCategoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmCallCategoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmEventGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmEventCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmEventCategoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CrmEventCategoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CurrencyGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CurrencyCompanyCurrencyGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CurrencyCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionReadOrderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostBodyOrderItem::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomAttributeDefinitionUpdateOrderPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerCategoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerCategoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerLeadLossReasonGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerLeadLossReasonCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerTopicGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomerTopicCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomsTariffNumberGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\CustomsTariffNumberCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentCopyPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentCopyPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentIdIdCopyPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentIdIdCopyPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentIdIdUploadPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\DocumentUploadPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ExternalConnectionGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ExternalConnectionCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\FinancialYearGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\FinancialYearCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\FinancialYearIdIdGeneratePeriodsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\FinancialYearIdIdGeneratePeriodsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\FulfillmentProviderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\FulfillmentProviderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdAddPurchaseOrdersPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdAddPurchaseOrdersPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCompensationShipmentPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCompensationShipmentPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCreditNotePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateCreditNotePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreatePurchaseInvoicePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreatePurchaseInvoicePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateReturnLabelsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateReturnLabelsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateSupplierReturnPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdCreateSupplierReturnPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdIncomingBookingsGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostBodyIncomingBookingsItem::class => false,
            \Webhubworks\WeclappApiCore\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InternalTransportReferenceIdIdCreateLabelPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryCreatePostBodyInventory::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryCreatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryGroupGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryGroupCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryItemGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryItemCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryTransportReferenceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\InventoryTransportReferenceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\JobAbortGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\JobStatusGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadIdIdConvertLeadToCustomerGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadRatingGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadRatingCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadSourceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LeadSourceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LedgerAccountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LedgerAccountCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LegalFormGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LegalFormCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifierGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\LoadingEquipmentIdentifierCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\MailTemplateGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\MailTemplateCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ManufacturerGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ManufacturerCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\MetaQueryFilterPropertiesGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\MetaQuerySortPropertiesGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\MetaResourcesGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\NotificationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\NotificationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\NotificationIdIdMarkReadPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\NotificationIdIdMarkReadPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityIdIdLinkQuotationPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityIdIdLinkQuotationPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityTopicGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityTopicCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityWinLossReasonGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\OpportunityWinLossReasonCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyIdIdCreatePublicPagePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyIdIdCreatePublicPagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyRatingGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PartyRatingCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentMethodGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentMethodCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentRunGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentRunCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentRunItemGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PaymentRunItemCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PersonDepartmentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PersonDepartmentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PersonRoleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PersonRoleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PersonalAccountingCodeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PersonalAccountingCodeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PickGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PickCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PickCheckReasonGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PickCheckReasonCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PlaceOfServiceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PlaceOfServiceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PriceCalculationParameterCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderFastProductionBookingPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderFastProductionBookingPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionOrderIdIdCreatePickingListPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignmentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ProductionWorkScheduleAssignmentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PropertyTranslationReadPropertyTranslationsGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostBodyPropertyTranslationsItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PropertyTranslationUpdatePropertyTranslationsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateContractPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateContractPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateCreditNotePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdCreateCreditNotePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdResetTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdResetTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateContractPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateContractPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateDropshippingDeliveryNotePdfPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateIncomingGoodsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateIncomingGoodsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateSupplierReturnPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdCreateSupplierReturnPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyProcessPurchaseOrderItemsItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostBodyShipmentParameters::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderIdIdProcessDropshippingPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostBodyOfferItemToUpdateSupplierInformationItem::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionDeleteAllRequisitionsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStartMaterialPlanningRunPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\PurchaseRequisitionStartMaterialPlanningRunPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostBodyAcceptQuotationItemsItem::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdAcceptPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdAddDefaultScalePricesToItemsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdAddDefaultScalePricesToItemsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCalculateSalesPricesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateNewVersionPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateNewVersionPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePublicPageLinkPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreatePurchaseOrderRequestPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdCreateQuotationPdfPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdDisablePublicPageLinkPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdInquirePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdInquirePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdRecalculateCostsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdRecalculateCostsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdResetTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdResetTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdSetCostsForItemsWithoutCostPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdSetCostsForItemsWithoutCostPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdUpdatePricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\QuotationIdIdUpdatePricesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RecordEmailingRuleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RecordEmailingRuleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RegionGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RegionCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ReminderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ReminderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RemotePrintJobGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RemotePrintJobCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\RemotePrintJobCreatePrintJobWithDocumentPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesChannelActiveSalesChannelsGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdAddSalesOrdersPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCalculateSalesPricesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateContractPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateContractPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateCreditNotePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdCreateCreditNotePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdRecalculateCostsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdRecalculateCostsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdResetTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdResetTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdSetCostsForItemsWithoutCostPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdUpdatePricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesInvoiceIdIdUpdatePricesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItemGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItemCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdCreatePaymentApplicationPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdCreatePaymentApplicationPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdUpdatePaymentStatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOpenItemIdIdUpdatePaymentStatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderDefaultValuesForCreateGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdActivateProjectViewPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdActivateProjectViewPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCalculateSalesPricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCalculateSalesPricesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCancelOrManuallyClosePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCancelOrManuallyClosePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateAdvancePaymentRequestPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateAdvancePaymentRequestPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateContractPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateContractPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateCustomerReturnPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateCustomerReturnPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateDropshippingPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePartPaymentInvoicePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePartPaymentInvoicePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePrepaymentFinalInvoicePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePrepaymentFinalInvoicePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateProductionOrdersPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateProductionOrdersPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateReturnLabelsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateReturnLabelsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateSalesInvoicePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateSalesInvoicePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShipmentPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShipmentPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShippingLabelsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdCreateShippingLabelsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdManuallyClosePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdManuallyClosePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdRecalculateCostsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdRecalculateCostsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdResetTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdResetTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdSetCostsForItemsWithoutCostPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdSetCostsForItemsWithoutCostPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdShipOrderForExternalFulfillmentPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdShipOrderForExternalFulfillmentPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleProjectTeamPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleProjectTeamPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleServicesFinishedPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdToggleServicesFinishedPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdUpdatePricesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesOrderIdIdUpdatePricesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesStageGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SalesStageCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SectorGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SectorCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandateGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SepaDirectDebitMandateCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SerialNumberGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SerialNumberCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShelfGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShelfCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShelfIdIdActivatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ShelfIdIdActivatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ShelfIdIdDeactivatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreatePickingListPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateReturnLabelsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateReturnLabelsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateSalesInvoicePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateSalesInvoicePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelPdfPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentIdIdCreateShippingLabelsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentMethodGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentMethodCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnAssessmentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnAssessmentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnErrorGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnErrorCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnReasonGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnReasonCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnRectificationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShipmentReturnRectificationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShippingCarrierGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\ShippingCarrierCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdActivatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdActivatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdDeactivatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\StorageLocationIdIdDeactivatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceBlockingReasonGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceBlockingReasonCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceSizeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\StoragePlaceSizeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SupplierGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SupplierCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SupplierIdIdUploadImagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SystemCreateDemoTestSystemPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\SystemCreateDemoTestSystemPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SystemDemoTestSystemInfoGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SystemLicensesGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\SystemPermissionsGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TagGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TagCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxConfigurePurchaseTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxConfigurePurchaseTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxConfigureSalesTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxFindPurchaseTaxGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxFindSalesTaxGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxResetSystemTaxesPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxDeterminationRuleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TaxDeterminationRuleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TermOfPaymentGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TermOfPaymentCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketGetResponse200AdditionalProperties::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdCreatePublicPagePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdCreatePublicPagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdDisablePublicPagePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdDisablePublicPagePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdLinkSalesOrderPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdLinkSalesOrderPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdUnlinkSalesOrderPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketIdIdUnlinkSalesOrderPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketAssignmentRuleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketAssignmentRuleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketCategoryGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketCategoryCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketChannelGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketChannelCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketFaqGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketFaqCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketPoolingGroupGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketPoolingGroupCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketServiceLevelAgreementCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketStatusGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketStatusCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketTypeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TicketTypeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TitleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TitleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TranslationGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TranslationCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostBodyExistingReservationsItem::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreatePickingListPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdInternalTransportReferencesForPickUpGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPickPickPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPickPickPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UnitGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UnitCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserCurrentUserGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserIdIdInvitePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\UserIdIdInvitePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserRoleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserRoleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\UserRoleDisableUserRolesDuringTrialPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\UserRoleEnableUserRolesDuringTrialPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleAttributeGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleAttributeCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleVariantGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\VariantArticleVariantCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseIdIdActivatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseIdIdActivatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseIdIdDeactivatePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseIdIdDeactivatePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostBodyCustomAttributesItem::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookDirectStockTransferPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostBodyCustomAttributesItem::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostBodyCustomAttributesItem::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookIncomingMovementPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostBodyCustomAttributesItem::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostBodyCustomAttributesItem::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookOutgoingMovementPostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBody::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostBodyCustomAttributesItem::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WarehouseStockMovementCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WebhookGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WebhookCountGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WeclappOsGetResponse200::class => false,
            \Webhubworks\WeclappApiCore\Model\WeclappOsCountGetResponse200::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}