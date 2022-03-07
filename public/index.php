<?php

use testing\App;

require_once dirname(__DIR__).'/config/init.php';

//require_once APP.'/views/Post/index.php';

new App();

throw new Exception("фАЙЛ НЕ БЫЛ НАЙДЕН",404);
