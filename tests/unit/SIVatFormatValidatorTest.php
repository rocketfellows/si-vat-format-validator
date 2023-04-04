<?php

namespace rocketfellows\SIVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class SIVatFormatValidatorTest extends TestCase
{
    /**
     * @var SIVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new SIVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'SI00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SI11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SI99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SI12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SI123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'SI1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Si12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'sI12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'si12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
