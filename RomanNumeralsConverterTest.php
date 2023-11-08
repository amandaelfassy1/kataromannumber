<?php
use PHPUnit\Framework\TestCase;

require_once 'RomanNumeralsConverter.php';

class RomanNumeralsConverterTest extends TestCase {
    // test qui vérifie la conversion de nombres valides en chiffres romains.
    public function testConvertToRoman_One()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(1);
        $this->assertEquals('I', $result);
        
        echo "Test ConvertToRoman_One: $result\n";
    }

    public function testConvertToRoman_Four()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(4);
        $this->assertEquals('IV', $result);
        
        echo "Test ConvertToRoman_Four: $result\n";
    }


    public function testConvertToRoman_Nine()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(9);
        $this->assertEquals('IX', $result);
        echo "Test ConvertToRoman_Four: $result\n";

    }

    public function testConvertToRoman_Ten()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(10);
        $this->assertEquals('X', $result);
        echo "Test ConvertToRoman_Four: $result\n";

    }

    public function testConvertToRoman_Fifty()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(50);
        $this->assertEquals('L', $result);
        echo "Test ConvertToRoman_Four: $result\n";

    }

    public function testConvertToRoman_OneHundred()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(100);
        $this->assertEquals('C', $result);
        echo "Test ConvertToRoman_Four: $result\n";

    }

    public function testConvertToRoman_FiveHundred()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(500);
        $this->assertEquals('D', $result);
    }
    public function testConvertToRoman_OneThousand()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(1000);
        $this->assertEquals('M', $result);
    }

    public function testConvertToRoman_TwoThousand()
    {
        $converter = new RomanNumeralsConverter();
        $result = $converter->convertToRoman(2000);
        $this->assertEquals('MM', $result);
    }
    
    // Un test qui vérifie que l'exception est levée pour des entrées hors de portée.
    public function testConvertToRomanWithOutOfRangeInput() {
        $converter = new RomanNumeralsConverter();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Number out of range (1-3999)");
        
        // Appeler la méthode convertToRoman avec une valeur en dehors de la plage autorisée.
        $converter->convertToRoman(0);
    }

    public function testConvertToRomanWithInvalidInput() {
        $converter = new RomanNumeralsConverter();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Number out of range (1-3999)");

        $converter->convertToRoman(4000);
    }
    
   
}
?>
