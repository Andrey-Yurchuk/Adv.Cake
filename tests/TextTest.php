<?php

declare(strict_types=1);

namespace Tests;

use App\Classes\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    private Text $text;

    public function setUp(): void
    {
        $this->text = new Text();
    }

    public function testStringRevers()
    {
        $this->assertEquals("тевирП! онваД ен ьсиледив.", $this->text->revertCharacters(
            "Привет! Давно не виделись."
        ));
        $this->assertIsString($this->text->revertCharacters("Привет! Давно не виделись."));
    }

    public function testEmptyStrings()
    {
        $this->assertEquals("", $this->text->revertCharacters(""));
        $this->assertIsString($this->text->revertCharacters(""));
    }
}
