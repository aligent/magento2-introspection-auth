# magento2-introspection-auth
Magento 2 module to handle authorisation of GraphQL introspection queries.

## Functionality
In Magento 2, GraphQL introspection can be enabled/disabled globally.
This module adds functionality so that when enabled, introspection queries can only be made by authorised users.

## Installation
1. Install the package via composer
```bash
composer require aligent/magento2-introspection-auth
```
2. Enable the module
```bash
bin/magento module:enable Aligent_IntrospectionAuth
```
3. Run the `setup:upgrade` command
```bash
bin/magento setup:upgrade
```

## Configuration
The authorisation functionality can be enabled/disabled via `Stores -> Configuration -> Advanced -> System -> Security -> Enable Introspection Authorisation`
Note that authorisation will only work is GraphQL introspection is enabled. If it is disabled, it will be disabled for all users, regardless of authorisation.

## Permission
In order to be authorised, users/integrations will need the `Aligent_Introspection::introspection_allowed` permission
