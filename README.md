# Pananames.com API

- API version: 2.0.0
- Package version: 2.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Pananames/php-api.git"
    }
  ],
  "require": {
    "Pananames/php-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Pananames\Api\DomainsApi;

$domainsApi = new DomainsApi('SIGNATURE', 'URL' = '');

$response = $domainsApi->check('domain-example.com');

if ($response->hasErrors()) {
  $errors = $response->getErrors();

  //Log etc.

  return;
}

$data = $response->getData();
$meta = $response->getMeta();

$httpCode = $response->getHttpCode();

$isSuccessful = $response->isSuccessful();
$isAvailable = $data->getAvailable();
$isPremium = $data->getPremium();

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://api-staging.pananames.com/merchant/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getBalance**](docs/Api/AccountApi.md#getbalance) | **GET** /account/balance | Get current balance.
*DomainsApi* | [**check**](docs/Api/DomainsApi.md#check) | **GET** /domains/{domain}/check | Check the domain availability.
*DomainsApi* | [**delete**](docs/Api/DomainsApi.md#delete) | **DELETE** /domains/{domain} | Delete domain.
*DomainsApi* | [**disableAutoRenew**](docs/Api/DomainsApi.md#disableautorenew) | **DELETE** /domains/{domain}/auto_renew | Disable auto renew.
*DomainsApi* | [**enableAutoRenew**](docs/Api/DomainsApi.md#enableautorenew) | **PUT** /domains/{domain}/auto_renew | Enable auto renew.
*DomainsApi* | [**getClaim**](docs/Api/DomainsApi.md#getclaim) | **GET** /domains/{domain}/claim | Get claim information.
*DomainsApi* | [**getInfo**](docs/Api/DomainsApi.md#getinfo) | **GET** /domains/{domain} | Get information about the domain.
*DomainsApi* | [**getList**](docs/Api/DomainsApi.md#getlist) | **GET** /domains | Get paged list of your domains.
*DomainsApi* | [**getStatusCodes**](docs/Api/DomainsApi.md#getstatuscodes) | **GET** /domains/{domain}/status_codes | Get status codes.
*DomainsApi* | [**redeem**](docs/Api/DomainsApi.md#redeem) | **PUT** /domains/{domain}/redeem | Restore domain.
*DomainsApi* | [**register**](docs/Api/DomainsApi.md#register) | **POST** /domains | Register a domain name.
*DomainsApi* | [**renew**](docs/Api/DomainsApi.md#renew) | **PUT** /domains/{domain}/renew | Renew tne domain.
*DomainsApi* | [**resendVerificationEmail**](docs/Api/DomainsApi.md#resendverificationemail) | **PUT** /domains/{domain}/resend | Resend email.
*NameServersApi* | [**createChildDns**](docs/Api/NameServersApi.md#createchilddns) | **POST** /domains/{domain}/child_name_servers | Create new child name server.
*NameServersApi* | [**createDnsRecord**](docs/Api/NameServersApi.md#creatednsrecord) | **POST** /domains/{domain}/name_server_records | Create new name server record.
*NameServersApi* | [**deleteChildDns**](docs/Api/NameServersApi.md#deletechilddns) | **DELETE** /domains/{domain}/child_name_servers | Delete child name server.
*NameServersApi* | [**deleteDnsRecord**](docs/Api/NameServersApi.md#deletednsrecord) | **DELETE** /domains/{domain}/name_server_records | Delete name server record.
*NameServersApi* | [**getChildDns**](docs/Api/NameServersApi.md#getchilddns) | **GET** /domains/{domain}/child_name_servers | Get child name servers.
*NameServersApi* | [**getDnsRecords**](docs/Api/NameServersApi.md#getdnsrecords) | **GET** /domains/{domain}/name_server_records | Get name server records.
*NameServersApi* | [**getDnsServers**](docs/Api/NameServersApi.md#getdnsservers) | **GET** /domains/{domain}/name_servers | Get name servers.
*NameServersApi* | [**setDnsServers**](docs/Api/NameServersApi.md#setdnsservers) | **PUT** /domains/{domain}/name_servers | Set name servers.
*NameServersApi* | [**updateChildDns**](docs/Api/NameServersApi.md#updatechilddns) | **PUT** /domains/{domain}/child_name_servers | Update existing child name server.
*NameServersApi* | [**updateDnsRecord**](docs/Api/NameServersApi.md#updatednsrecord) | **PUT** /domains/{domain}/name_server_records | Update existing name server record.
*OtherApi* | [**getEmails**](docs/Api/OtherApi.md#getemails) | **GET** /emails | Get account related emails.
*OtherApi* | [**getTlds**](docs/Api/OtherApi.md#gettlds) | **GET** /tlds | Get full list of available TLDs.
*RedirectApi* | [**disable**](docs/Api/RedirectApi.md#disable) | **DELETE** /domains/{domain}/redirect | Disable redirect.
*RedirectApi* | [**enable**](docs/Api/RedirectApi.md#enable) | **PUT** /domains/{domain}/redirect | Enable redirect.
*RedirectApi* | [**getRedirect**](docs/Api/RedirectApi.md#getredirect) | **GET** /domains/{domain}/redirect | Get current redirect URL.
*TransferInApi* | [**cancel**](docs/Api/TransferInApi.md#cancel) | **DELETE** /transfers_in | Cancel transfers in.
*TransferInApi* | [**getTransferList**](docs/Api/TransferInApi.md#gettransferlist) | **GET** /transfers_in | Get active transfers in.
*TransferInApi* | [**initTransferIn**](docs/Api/TransferInApi.md#inittransferin) | **POST** /transfers_in | Init transfers in.
*TransferOutApi* | [**cancelTransferOut**](docs/Api/TransferOutApi.md#canceltransferout) | **DELETE** /domains/{domain}/transfer_out | Cancel transfer out.
*TransferOutApi* | [**initTransferOut**](docs/Api/TransferOutApi.md#inittransferout) | **PUT** /domains/{domain}/transfer_out | Init transfer out.
*WHOISApi* | [**disableWhoisPrivacy**](docs/Api/WHOISApi.md#disablewhoisprivacy) | **DELETE** /domains/{domain}/whois_privacy | Disable WHOIS privacy.
*WHOISApi* | [**enableWhoisPrivacy**](docs/Api/WHOISApi.md#enablewhoisprivacy) | **PUT** /domains/{domain}/whois_privacy | Enable WHOIS privacy.
*WHOISApi* | [**getWhois**](docs/Api/WHOISApi.md#getwhois) | **GET** /domains/{domain}/whois | Get WHOIS information.
*WHOISApi* | [**getWhoisPrivacy**](docs/Api/WHOISApi.md#getwhoisprivacy) | **GET** /domains/{domain}/whois_privacy | Get WHOIS privacy status.
*WHOISApi* | [**setWhois**](docs/Api/WHOISApi.md#setwhois) | **PUT** /domains/{domain}/whois | Set WHOIS information.


## Documentation For Models

 - [AutoRenewResponse](docs/Model/AutoRenewResponse.md)
 - [AutoRenewResponseData](docs/Model/AutoRenewResponseData.md)
 - [Balance](docs/Model/Balance.md)
 - [BalanceResponse](docs/Model/BalanceResponse.md)
 - [CheckInfo](docs/Model/CheckInfo.md)
 - [CheckResponse](docs/Model/CheckResponse.md)
 - [ChildNameServer](docs/Model/ChildNameServer.md)
 - [ChildNameServerDeleteRequest](docs/Model/ChildNameServerDeleteRequest.md)
 - [ChildNameServerResponse](docs/Model/ChildNameServerResponse.md)
 - [ChildNameServersListResponse](docs/Model/ChildNameServersListResponse.md)
 - [Claim](docs/Model/Claim.md)
 - [ClaimContact](docs/Model/ClaimContact.md)
 - [ClaimResponse](docs/Model/ClaimResponse.md)
 - [Contact](docs/Model/Contact.md)
 - [DomainInfo](docs/Model/DomainInfo.md)
 - [DomainInfoResponse](docs/Model/DomainInfoResponse.md)
 - [DomainRedirectResponse](docs/Model/DomainRedirectResponse.md)
 - [DomainRedirectResponseData](docs/Model/DomainRedirectResponseData.md)
 - [DomainRedirectUpdateRequest](docs/Model/DomainRedirectUpdateRequest.md)
 - [DomainsListResponse](docs/Model/DomainsListResponse.md)
 - [EmailInfo](docs/Model/EmailInfo.md)
 - [EmailInfoDomains](docs/Model/EmailInfoDomains.md)
 - [EmailsListResponse](docs/Model/EmailsListResponse.md)
 - [EmptyResponse](docs/Model/EmptyResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [NameServerRecord](docs/Model/NameServerRecord.md)
 - [NameServerRecordDeleteRequest](docs/Model/NameServerRecordDeleteRequest.md)
 - [NameServerRecordResponse](docs/Model/NameServerRecordResponse.md)
 - [NameServerRecordsListResponse](docs/Model/NameServerRecordsListResponse.md)
 - [NameServersResponse](docs/Model/NameServersResponse.md)
 - [NameServersUpdateRequest](docs/Model/NameServersUpdateRequest.md)
 - [PaginationMeta](docs/Model/PaginationMeta.md)
 - [Prices](docs/Model/Prices.md)
 - [RegistrationData](docs/Model/RegistrationData.md)
 - [RenewRequest](docs/Model/RenewRequest.md)
 - [RenewResponse](docs/Model/RenewResponse.md)
 - [RenewResponseData](docs/Model/RenewResponseData.md)
 - [StatusCodesListResponse](docs/Model/StatusCodesListResponse.md)
 - [TldsListResponse](docs/Model/TldsListResponse.md)
 - [TldsListResponseData](docs/Model/TldsListResponseData.md)
 - [TransferInCancelRequest](docs/Model/TransferInCancelRequest.md)
 - [TransferInInfo](docs/Model/TransferInInfo.md)
 - [TransferInRequest](docs/Model/TransferInRequest.md)
 - [TransferInResponse](docs/Model/TransferInResponse.md)
 - [TransfersInListResponse](docs/Model/TransfersInListResponse.md)
 - [WhoisInfoUpdateRequest](docs/Model/WhoisInfoUpdateRequest.md)
 - [WhoisPrivacyResponse](docs/Model/WhoisPrivacyResponse.md)
 - [WhoisPrivacyResponseData](docs/Model/WhoisPrivacyResponseData.md)
 - [WhoisResponse](docs/Model/WhoisResponse.md)
 - [WhoisResponseData](docs/Model/WhoisResponseData.md)
 - [WhoisResponseMeta](docs/Model/WhoisResponseMeta.md)


## Documentation For Authorization


## key

- **Type**: API key
- **API key parameter name**: SIGNATURE
- **Location**: HTTP header


## Author




