<?php
declare(strict_types=1);

namespace Mharbers\AdventOfCodeTest\Day1;

use Mharbers\AdventOfCode\Day1\Captcha;
use PHPUnit\Framework\TestCase;

class CaptchaTest extends TestCase
{
    /** @test */
    public function it should be initializable():void
    {
        $this->assertInstanceOf(Captcha::class, Captcha::fromString('123443'));
    }

    /** @test */
    public function it should return 3 for 1122()
    {
        $captcha = Captcha::fromString('1122');
        $this->assertEquals(3, $captcha->score());
    }

    /** @test */
    public function it should return 4 for 1111()
    {
        $captcha = Captcha::fromString('1111');
        $this->assertEquals(4, $captcha->score());
    }

    /** @test */
    public function it should return 0 for 1234()
    {
        $captcha = Captcha::fromString('1234');
        $this->assertEquals(0, $captcha->score());
    }

    /** @test */
    public function it should return 9 for 91212129()
    {
        $captcha = Captcha::fromString('91212129');
        $this->assertEquals(9, $captcha->score());
    }
}
