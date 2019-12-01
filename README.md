# Anax Weather Module

This module works together with an Anax installation.

The module is used for displaying weather forecast for nextcoming week and previous month.
Also for validating and geotagging Ip addresses.

REST APIs is included with GET methods which returns JSON data.

## Install as Anax module

This is how you install the module into an existing [Anax](https://packagist.org/packages/anax/anax-ramverk1-me) installation.

### Install using composer

```
composer require blixter/weather-module
```

### Install using scaffold postprocessing file

The module supports a postprocessing installation script, to be used with Anax scaffolding. The script executes the default installation.

```
bash vendor/blixter/weather/.anax/scaffold/postprocess.d/400_weather.bash
```

Run this script after `composer require` is done or use the commands below for step by step installation.

**Important:** Manually create a new file `config/keys.php` and add valid API keys. See `config/keys_sample.php`.

### Configuration and Service setup

Copy the configuration files.
```
rsync -av vendor/blixter/weather/config .
```

### Src files

Copy the controllers and model files.

```
rsync -av vendor/blixter/weather/src ./
```

### view files

Copy the view files.

```
rsync -av vendor/blixter/weather/view ./
```

### Copy the test files

Copy testfiles with included testcases using phpunit.

```
rsync -av vendor/blixter/weather/test ./
```

## Dependency

This is a Anax module and primarly intended to be used together with the Anax framework.

## License

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.

```
 .
..:  Copyright (c) 2019 Robin Blixter (r.blixter89@gmail.com)
```
