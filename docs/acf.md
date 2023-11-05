# Advanced Custom Fields Pro Installer

Readme -> https://github.com/pivvenit/acf-composer-bridge

<!-- TOC -->
* [Advanced Custom Fields Pro Installer](#advanced-custom-fields-pro-installer)
  * [0. Get the Key](#0-get-the-key)
  * [1. Add the repository to `composer.json`](#1-add-the-repository-to-composerjson)
  * [2. Configure the key](#2-configure-the-key)
    * [2.1 Global configuration](#21-global-configuration)
    * [2.2 Project configuration](#22-project-configuration)
  * [3.0 Install ACF Pro](#30-install-acf-pro)
<!-- TOC -->

## 0. Get the Key

Get the key at https://www.advancedcustomfields.com/my-account/view-licenses

## 1. Add the repository to `composer.json`

add the following to your `composer.json` file `repositories`:

```json
{
  "type": "composer",
  "url": "https://pivvenit.github.io/acf-composer-bridge/composer/v3/wordpress-muplugin"
}
```

or 

```json
{
  "type": "composer",
  "url": "https://pivvenit.github.io/acf-composer-bridge/composer/v3/wordpress-plugin"
}
```

## 2. Configure the key

Chose between **global** or **project-specific** configuration.

### 2.1 Global configuration

Open composer settings file `open ~/.composer/config.json` 

And add the following:

```json
{
  "config": {
    "acf-pro-key": "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
  }
}
```

### 2.2 Project configuration

Open .env file and add the following:

```dotenv
# ACF Pro Key
# https://www.advancedcustomfields.com/my-account/view-licenses
ACF_PRO_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

## 3.0 Install ACF Pro

```bash
composer require advanced-custom-fields/advanced-custom-fields-pro
```
