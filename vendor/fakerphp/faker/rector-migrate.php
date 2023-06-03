<?php

declare(strict_types=1);

use Faker\Generator;
use Rector\Config;
use Rector\Transform;

// This file configures rector/rector to replace all deprecated property usages with their equivalent functions.
return static function (Config\RectorConfig $rectorConfig): void {
    $properties = [
        'address',
        'amPm',
        'asciify',
        'biasedNumberBetween',
        'boolean',
        'bothify',
        'buildingNumber',
        'century',
        'chrome',
        'city',
        'citySuffix',
        'colorName',
        'company',
        'companyEmail',
        'companySuffix',
        'country',
        'countryCode',
        'countryISOAlpha3',
        'creditCardDetails',
        'creditCardExpirationDate',
        'creditCardExpirationDateString',
        'creditCardNumber',
        'creditCardType',
        'currencyCode',
        'date',
        'dateTime',
        'dateTimeAD',
        'dateTimeBetween',
        'dateTimeInInterval',
        'dateTimeThisCentury',
        'dateTimeThisDecade',
        'dateTimeThisMonth',
        'dateTimeThisYear',
        'dayOfMonth',
        'dayOfWeek',
        'domainName',
        'domainWord',
        'e164PhoneNumber',
        'email',
        'emoji',
        'file',
        'firefox',
        'firstName',
        'firstNameFemale',
        'firstNameMale',
        'freeEmail',
        'freeEmailDomain',
        'getDefaultTimezone',
        'hexColor',
        'hslColor',
        'hslColorAsArray',
        'iban',
        'image',
        'imageUrl',
        'imei',
        'internetExplorer',
        'iosMobileToken',
        'ipv4',
        'ipv6',
        'iso8601',
        'jobTitle',
        'languageCode',
        'lastName',
        'latitude',
        'lexify',
        'linuxPlatformToken',
        'linuxProcessor',
        'localCoordinates',
        'localIpv4',
        'locale',
        'longitude',
        'macAddress',
        'macPlatformToken',
        'macProcessor',
        'md5',
        'month',
        'monthName',
        'msedge',
        'name',
        'numerify',
        'opera',
        'paragraph',
        'paragraphs',
        'passthrough',
        'password',
        'phoneNumber',
        'postcode',
        'randomAscii',
        'randomDigitNotNull',
        'randomElement',
        'randomElements',
        'randomHtml',
        'randomKey',
        'randomLetter',
        'realText',
        'realTextBetween',
        'regexify',
        'rgbColor',
        'rgbColorAsArray',
        'rgbCssColor',
        'rgbaCssColor',
        'safari',
        'safeColorName',
        'safeEmail',
        'safeEmailDomain',
        'safeHexColor',
        'sentence',
        'sentences',
        'setDefaultTimezone',
        'sha1',
        'sha256',
        'shuffle',
        'shuffleArray',
        'shuffleString',
        'slug',
        'streetAddress',
        'streetName',
        'streetSuffix',
        'swiftBicNumber',
        'text',
        'time',
        'timezone',
        'title',
        'titleFemale',
        'titleMale',
        'tld',
        'toLower',
        'toUpper',
        'unixTime',
        'url',
        'userAgent',
        'userName',
        'uuid',
        'windowsPlatformToken',
        'word',
        'words',
        'year',
    ];

    $rectorConfig->ruleWithConfiguration(
        Transform\Rector\Assign\PropertyFetchToMethodCallRector::class,
        array_map(static function (string $property): Transform\ValueObject\PropertyFetchToMethodCall {
            return new Transform\ValueObject\PropertyFetchToMethodCall(
                Generator::class,
                $property,
                $property,
            );
        }, $properties),
    );
};
