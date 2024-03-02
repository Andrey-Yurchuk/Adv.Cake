<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

use App\Classes\Text;

$text = new Text();
echo $text->revertCharacters("Привет! Давно не виделись.");

