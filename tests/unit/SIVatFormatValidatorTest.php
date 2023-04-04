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
                'vatNumber',
                'isValid',
            ],
        ];
    }
}
