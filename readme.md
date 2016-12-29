
# Deliverist\Downloader

## Usage

### GitDownloader

``` php
<?php

use Deliverist\Downloader\GitDownloader;

$downloader = new GitDownloader('https://github.com/deliverist/downloader.git', 'master');
$downloader->download('/path/to/destination/directory');

```


Installation
------------

[Download a latest package](https://github.com/deliverist/downloader/releases) or use [Composer](http://getcomposer.org/):

```
composer require [--dev] deliverist/downloader
```

`Deliverist\Downloader` requires PHP 5.4.0 or later.


------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/
