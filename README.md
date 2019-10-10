# Words to numbers

## Usage
```php
<?php

require "vendor/autoload.php";

use WordsToNumbers\WordsToNumbers;

$numberTransformer = WordsToNumbers::getWordsTransformer('ru');

$numberTransformer->toNumbers('два'); \\ 2
$numberTransformer->toNumbers('девятнадцать'); \\ 19
```
