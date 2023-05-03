
# Deliverist\Downloader

<a href="https://www.janpecha.cz/donate/"><img src="https://buymecoffee.intm.org/img/donate-banner.v1.svg" alt="Donate" height="100"></a>


## Installation

[Download a latest package](https://github.com/deliverist/downloader/releases) or use [Composer](http://getcomposer.org/):

```
composer require deliverist/downloader
```

`Deliverist\Downloader` requires PHP 5.6 or later.


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
