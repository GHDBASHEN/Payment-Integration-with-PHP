<?php

namespace Stripe\Util;

class ObjectTypes
{
    /**
     * @var array Mapping from object types to resource classes
     */
    const mapping =
        [
            \Stripe\Collection::OBJECT_NAME => \Stripe\Collection::class,
            \Stripe\Issuing\CardDetails::OBJECT_NAME => \Stripe\Issuing\CardDetails::class,
            \Stripe\SearchResult::OBJECT_NAME => \Stripe\SearchResult::class,
            \Stripe\File::OBJECT_NAME_ALT => \Stripe\File::class,
            // object classes: The beginning of the section generated from our OpenAPI spec
            \Stripe\Account::OBJECT_NAME => \Stripe\Account::class,
            \Stripe\AccountLink::OBJECT_NAME => \Stripe\AccountLink::class,
            \Stripe\AccountSession::OBJECT_NAME => \Stripe\AccountSession::class,
            \Stripe\ApplePayDomain::OBJECT_NAME => \Stripe\ApplePayDomain::class,
            \Stripe\Application::OBJECT_NAME => \Stripe\Application::class,
            \Stripe\ApplicationFee::OBJECT_NAME => \Stripe\ApplicationFee::class,
            \Stripe\ApplicationFeeRefund::OBJECT_NAME => \Stripe\ApplicationFeeRefund::class,
            \Stripe\Apps\Secret::OBJECT_NAME => \Stripe\Apps\Secret::class,
            \Stripe\Balance::OBJECT_NAME => \Stripe\Balance::class,
            \Stripe\BalanceTransaction::OBJECT_NAME => \Stripe\BalanceTransaction::class,
            \Stripe\BankAccount::OBJECT_NAME => \Stripe\BankAccount::class,
            \Stripe\Billing\Alert::OBJECT_NAME => \Stripe\Billing\Alert::class,
            \Stripe\Billing\AlertTriggered::OBJECT_NAME => \Stripe\Billing\AlertTriggered::class,
            \Stripe\Billing\CreditBalanceSummary::OBJECT_NAME => \Stripe\Billing\CreditBalanceSummary::class,
            \Stripe\Billing\CreditBalanceTransaction::OBJECT_NAME => \Stripe\Billing\CreditBalanceTransaction::class,
            \Stripe\Billing\CreditGrant::OBJECT_NAME => \Stripe\Billing\CreditGrant::class,
            \Stripe\Billing\Meter::OBJECT_NAME => \Stripe\Billing\Meter::class,
            \Stripe\Billing\MeterEvent::OBJECT_NAME => \Stripe\Billing\MeterEvent::class,
            \Stripe\Billing\MeterEventAdjustment::OBJECT_NAME => \Stripe\Billing\MeterEventAdjustment::class,
            \Stripe\Billing\MeterEventSummary::OBJECT_NAME => \Stripe\Billing\MeterEventSummary::class,
            \Stripe\BillingPortal\Configuration::OBJECT_NAME => \Stripe\BillingPortal\Configuration::class,
            \Stripe\BillingPortal\Session::OBJECT_NAME => \Stripe\BillingPortal\Session::class,
            \Stripe\Capability::OBJECT_NAME => \Stripe\Capability::class,
            \Stripe\Card::OBJECT_NAME => \Stripe\Card::class,
            \Stripe\CashBalance::OBJECT_NAME => \Stripe\CashBalance::class,
            \Stripe\Charge::OBJECT_NAME => \Stripe\Charge::class,
            \Stripe\Checkout\Session::OBJECT_NAME => \Stripe\Checkout\Session::class,
            \Stripe\Climate\Order::OBJECT_NAME => \Stripe\Climate\Order::class,
            \Stripe\Climate\Product::OBJECT_NAME => \Stripe\Climate\Product::class,
            \Stripe\Climate\Supplier::OBJECT_NAME => \Stripe\Climate\Supplier::class,
            \Stripe\ConfirmationToken::OBJECT_NAME => \Stripe\ConfirmationToken::class,
            \Stripe\ConnectCollectionTransfer::OBJECT_NAME => \Stripe\ConnectCollectionTransfer::class,
            \Stripe\CountrySpec::OBJECT_NAME => \Stripe\CountrySpec::class,
            \Stripe\Coupon::OBJECT_NAME => \Stripe\Coupon::class,
            \Stripe\CreditNote::OBJECT_NAME => \Stripe\CreditNote::class,
            \Stripe\CreditNoteLineItem::OBJECT_NAME => \Stripe\CreditNoteLineItem::class,
            \Stripe\Customer::OBJECT_NAME => \Stripe\Customer::class,
            \Stripe\CustomerBalanceTransaction::OBJECT_NAME => \Stripe\CustomerBalanceTransaction::class,
            \Stripe\CustomerCashBalanceTransaction::OBJECT_NAME => \Stripe\CustomerCashBalanceTransaction::class,
            \Stripe\CustomerSession::OBJECT_NAME => \Stripe\CustomerSession::class,
            \Stripe\Discount::OBJECT_NAME => \Stripe\Discount::class,
            \Stripe\Dispute::OBJECT_NAME => \Stripe\Dispute::class,
            \Stripe\Entitlements\ActiveEntitlement::OBJECT_NAME => \Stripe\Entitlements\ActiveEntitlement::class,
            \Stripe\Entitlements\ActiveEntitlementSummary::OBJECT_NAME => \Stripe\Entitlements\ActiveEntitlementSummary::class,
            \Stripe\Entitlements\Feature::OBJECT_NAME => \Stripe\Entitlements\Feature::class,
            \Stripe\EphemeralKey::OBJECT_NAME => \Stripe\EphemeralKey::class,
            \Stripe\Event::OBJECT_NAME => \Stripe\Event::class,
            \Stripe\ExchangeRate::OBJECT_NAME => \Stripe\ExchangeRate::class,
            \Stripe\File::OBJECT_NAME => \Stripe\File::class,
            \Stripe\FileLink::OBJECT_NAME => \Stripe\FileLink::class,
            \Stripe\FinancialConnections\Account::OBJECT_NAME => \Stripe\FinancialConnections\Account::class,
            \Stripe\FinancialConnections\AccountOwner::OBJECT_NAME => \Stripe\FinancialConnections\AccountOwner::class,
            \Stripe\FinancialConnections\AccountOwnership::OBJECT_NAME => \Stripe\FinancialConnections\AccountOwnership::class,
            \Stripe\FinancialConnections\Session::OBJECT_NAME => \Stripe\FinancialConnections\Session::class,
            \Stripe\FinancialConnections\Transaction::OBJECT_NAME => \Stripe\FinancialConnections\Transaction::class,
            \Stripe\Forwarding\Request::OBJECT_NAME => \Stripe\Forwarding\Request::class,
            \Stripe\FundingInstructions::OBJECT_NAME => \Stripe\FundingInstructions::class,
            \Stripe\Identity\VerificationReport::OBJECT_NAME => \Stripe\Identity\VerificationReport::class,
            \Stripe\Identity\VerificationSession::OBJECT_NAME => \Stripe\Identity\VerificationSession::class,
            \Stripe\Invoice::OBJECT_NAME => \Stripe\Invoice::class,
            \Stripe\InvoiceItem::OBJECT_NAME => \Stripe\InvoiceItem::class,
            \Stripe\InvoiceLineItem::OBJECT_NAME => \Stripe\InvoiceLineItem::class,
            \Stripe\InvoiceRenderingTemplate::OBJECT_NAME => \Stripe\InvoiceRenderingTemplate::class,
            \Stripe\Issuing\Authorization::OBJECT_NAME => \Stripe\Issuing\Authorization::class,
            \Stripe\Issuing\Card::OBJECT_NAME => \Stripe\Issuing\Card::class,
            \Stripe\Issuing\Cardholder::OBJECT_NAME => \Stripe\Issuing\Cardholder::class,
            \Stripe\Issuing\Dispute::OBJECT_NAME => \Stripe\Issuing\Dispute::class,
            \Stripe\Issuing\PersonalizationDesign::OBJECT_NAME => \Stripe\Issuing\PersonalizationDesign::class,
            \Stripe\Issuing\PhysicalBundle::OBJECT_NAME => \Stripe\Issuing\PhysicalBundle::class,
            \Stripe\Issuing\Token::OBJECT_NAME => \Stripe\Issuing\Token::class,
            \Stripe\Issuing\Transaction::OBJECT_NAME => \Stripe\Issuing\Transaction::class,
            \Stripe\LineItem::OBJECT_NAME => \Stripe\LineItem::class,
            \Stripe\LoginLink::OBJECT_NAME => \Stripe\LoginLink::class,
            \Stripe\Mandate::OBJECT_NAME => \Stripe\Mandate::class,
            \Stripe\PaymentIntent::OBJECT_NAME => \Stripe\PaymentIntent::class,
            \Stripe\PaymentLink::OBJECT_NAME => \Stripe\PaymentLink::class,
            \Stripe\PaymentMethod::OBJECT_NAME => \Stripe\PaymentMethod::class,
            \Stripe\PaymentMethodConfiguration::OBJECT_NAME => \Stripe\PaymentMethodConfiguration::class,
            \Stripe\PaymentMethodDomain::OBJECT_NAME => \Stripe\PaymentMethodDomain::class,
            \Stripe\Payout::OBJECT_NAME => \Stripe\Payout::class,
            \Stripe\Person::OBJECT_NAME => \Stripe\Person::class,
            \Stripe\Plan::OBJECT_NAME => \Stripe\Plan::class,
            \Stripe\Price::OBJECT_NAME => \Stripe\Price::class,
            \Stripe\Product::OBJECT_NAME => \Stripe\Product::class,
            \Stripe\ProductFeature::OBJECT_NAME => \Stripe\ProductFeature::class,
            \Stripe\PromotionCode::OBJECT_NAME => \Stripe\PromotionCode::class,
            \Stripe\Quote::OBJECT_NAME => \Stripe\Quote::class,
            \Stripe\Radar\EarlyFraudWarning::OBJECT_NAME => \Stripe\Radar\EarlyFraudWarning::class,
            \Stripe\Radar\ValueList::OBJECT_NAME => \Stripe\Radar\ValueList::class,
            \Stripe\Radar\ValueListItem::OBJECT_NAME => \Stripe\Radar\ValueListItem::class,
            \Stripe\Refund::OBJECT_NAME => \Stripe\Refund::class,
            \Stripe\Reporting\ReportRun::OBJECT_NAME => \Stripe\Reporting\ReportRun::class,
            \Stripe\Reporting\ReportType::OBJECT_NAME => \Stripe\Reporting\ReportType::class,
            \Stripe\ReserveTransaction::OBJECT_NAME => \Stripe\ReserveTransaction::class,
            \Stripe\Review::OBJECT_NAME => \Stripe\Review::class,
            \Stripe\SetupAttempt::OBJECT_NAME => \Stripe\SetupAttempt::class,
            \Stripe\SetupIntent::OBJECT_NAME => \Stripe\SetupIntent::class,
            \Stripe\ShippingRate::OBJECT_NAME => \Stripe\ShippingRate::class,
            \Stripe\Sigma\ScheduledQueryRun::OBJECT_NAME => \Stripe\Sigma\ScheduledQueryRun::class,
            \Stripe\Source::OBJECT_NAME => \Stripe\Source::class,
            \Stripe\SourceMandateNotification::OBJECT_NAME => \Stripe\SourceMandateNotification::class,
            \Stripe\SourceTransaction::OBJECT_NAME => \Stripe\SourceTransaction::class,
            \Stripe\Subscription::OBJECT_NAME => \Stripe\Subscription::class,
            \Stripe\SubscriptionItem::OBJECT_NAME => \Stripe\SubscriptionItem::class,
            \Stripe\SubscriptionSchedule::OBJECT_NAME => \Stripe\SubscriptionSchedule::class,
            \Stripe\Tax\Calculation::OBJECT_NAME => \Stripe\Tax\Calculation::class,
            \Stripe\Tax\CalculationLineItem::OBJECT_NAME => \Stripe\Tax\CalculationLineItem::class,
            \Stripe\Tax\Registration::OBJECT_NAME => \Stripe\Tax\Registration::class,
            \Stripe\Tax\Settings::OBJECT_NAME => \Stripe\Tax\Settings::class,
            \Stripe\Tax\Transaction::OBJECT_NAME => \Stripe\Tax\Transaction::class,
            \Stripe\Tax\TransactionLineItem::OBJECT_NAME => \Stripe\Tax\TransactionLineItem::class,
            \Stripe\TaxCode::OBJECT_NAME => \Stripe\TaxCode::class,
            \Stripe\TaxDeductedAtSource::OBJECT_NAME => \Stripe\TaxDeductedAtSource::class,
            \Stripe\TaxId::OBJECT_NAME => \Stripe\TaxId::class,
            \Stripe\TaxRate::OBJECT_NAME => \Stripe\TaxRate::class,
            \Stripe\Terminal\Configuration::OBJECT_NAME => \Stripe\Terminal\Configuration::class,
            \Stripe\Terminal\ConnectionToken::OBJECT_NAME => \Stripe\Terminal\ConnectionToken::class,
            \Stripe\Terminal\Location::OBJECT_NAME => \Stripe\Terminal\Location::class,
            \Stripe\Terminal\Reader::OBJECT_NAME => \Stripe\Terminal\Reader::class,
            \Stripe\TestHelpers\TestClock::OBJECT_NAME => \Stripe\TestHelpers\TestClock::class,
            \Stripe\Token::OBJECT_NAME => \Stripe\Token::class,
            \Stripe\Topup::OBJECT_NAME => \Stripe\Topup::class,
            \Stripe\Transfer::OBJECT_NAME => \Stripe\Transfer::class,
            \Stripe\TransferReversal::OBJECT_NAME => \Stripe\TransferReversal::class,
            \Stripe\Treasury\CreditReversal::OBJECT_NAME => \Stripe\Treasury\CreditReversal::class,
            \Stripe\Treasury\DebitReversal::OBJECT_NAME => \Stripe\Treasury\DebitReversal::class,
            \Stripe\Treasury\FinancialAccount::OBJECT_NAME => \Stripe\Treasury\FinancialAccount::class,
            \Stripe\Treasury\FinancialAccountFeatures::OBJECT_NAME => \Stripe\Treasury\FinancialAccountFeatures::class,
            \Stripe\Treasury\InboundTransfer::OBJECT_NAME => \Stripe\Treasury\InboundTransfer::class,
            \Stripe\Treasury\OutboundPayment::OBJECT_NAME => \Stripe\Treasury\OutboundPayment::class,
            \Stripe\Treasury\OutboundTransfer::OBJECT_NAME => \Stripe\Treasury\OutboundTransfer::class,
            \Stripe\Treasury\ReceivedCredit::OBJECT_NAME => \Stripe\Treasury\ReceivedCredit::class,
            \Stripe\Treasury\ReceivedDebit::OBJECT_NAME => \Stripe\Treasury\ReceivedDebit::class,
            \Stripe\Treasury\Transaction::OBJECT_NAME => \Stripe\Treasury\Transaction::class,
            \Stripe\Treasury\TransactionEntry::OBJECT_NAME => \Stripe\Treasury\TransactionEntry::class,
            \Stripe\UsageRecord::OBJECT_NAME => \Stripe\UsageRecord::class,
            \Stripe\UsageRecordSummary::OBJECT_NAME => \Stripe\UsageRecordSummary::class,
            \Stripe\WebhookEndpoint::OBJECT_NAME => \Stripe\WebhookEndpoint::class,
            // object classes: The end of the section generated from our OpenAPI spec
        ];

    /**
     * @var array Mapping from v2 object types to resource classes
     */
    const v2Mapping = [
        // v2 object classes: The beginning of the section generated from our OpenAPI spec
        \Stripe\V2\Billing\MeterEvent::OBJECT_NAME => \Stripe\V2\Billing\MeterEvent::class,
        \Stripe\V2\Billing\MeterEventAdjustment::OBJECT_NAME => \Stripe\V2\Billing\MeterEventAdjustment::class,
        \Stripe\V2\Billing\MeterEventSession::OBJECT_NAME => \Stripe\V2\Billing\MeterEventSession::class,
        \Stripe\V2\Event::OBJECT_NAME => \Stripe\V2\Event::class,
        \Stripe\V2\EventDestination::OBJECT_NAME => \Stripe\V2\EventDestination::class,
        // v2 object classes: The end of the section generated from our OpenAPI spec
    ];
}