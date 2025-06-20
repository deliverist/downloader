# Deliverist\Downloader

[![Build Status](https://github.com/deliverist/downloader/workflows/Build/badge.svg)](https://github.com/deliverist/downloader/actions)
[![Downloads this Month](https://img.shields.io/packagist/dm/deliverist/downloader.svg)](https://packagist.org/packages/deliverist/downloader)
[![Latest Stable Version](https://poser.pugx.org/deliverist/downloader/v/stable)](https://github.com/deliverist/downloader/releases)
[![License](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://github.com/deliverist/downloader/blob/master/license.md)

<a href="https://www.janpecha.cz/donate/"><img src="https://buymecoffee.intm.org/img/donate-banner.v1.svg" alt="Donate" height="100"></a>


## Installation

[Download a latest package](https://github.com/deliverist/downloader/releases) or use [Composer](http://getcomposer.org/):

```
composer require deliverist/downloader
```

`Deliverist\Downloader` requires PHP 8.0 or later.


## Usage

### GitDownloader

``` php
<?php

use Deliverist\Downloader\GitDownloader;

$downloader = new GitDownloader('https://github.com/deliverist/downloader.git', 'master');
$downloader->download('/path/to/destination/directory');

```

------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/
