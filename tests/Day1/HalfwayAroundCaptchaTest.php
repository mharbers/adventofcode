<?php
/**
 * Date: 03-12-17
 * Time: 21:38
 */

namespace Mharbers\AdventOfCodeTest\Day1;

use Mharbers\AdventOfCode\Day1\Captcha;
use Mharbers\AdventOfCode\Day1\HalfwayAroundCaptcha;
use PHPUnit\Framework\TestCase;

class HalfwayAroundCaptchaTest extends TestCase
{
    /** @test */
    public function it should be initializable(): void
    {
        $this->assertInstanceOf(HalfwayAroundCaptcha::class, HalfwayAroundCaptcha::fromString('33'));
    }

    /**
     * @test
     * @dataProvider captchaScoreDataProvider
     */
    public function it should return the captcha score($sequence, $score)
    {
        $captcha = HalfwayAroundCaptcha::fromString($sequence);
        $this->assertEquals($score, $captcha->score());
    }

    public function captchaScoreDataProvider()
    {
        return [
            ['1212', 6],
            ['1221', 0],
            ['123425', 4],
            ['123123', 12],
            ['12131415', 4],
        ];
    }
}
