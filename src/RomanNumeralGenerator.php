<?php

namespace Larowlan\RomanNumeral;

/**
 * Defines a class for generating roman numerals from integers.
 */
class RomanNumeralGenerator {

    /**
   * Generates a roman numeral from an integer.
   *
   * @param int $number
   *   Integer to convert.
   * @param bool $lowerCase
   *   (optional) Pass TRUE to convert to lowercase. Defaults to FALSE.
   *
   * @return string
   *   Roman numeral representing the passed integer.
   */
  public function generate(int $number, bool $lowerCase = FALSE) : string {
      if ($lowerCase) {
          $table = array('m'=>1000, 'cm'=>900, 'd'=>500, 'cd'=>400, 'c'=>100, 'xc'=>90, 'l'=>50, 'xl'=>40, 'x'=>10, 'ix'=>9, 'v'=>5, 'iv'=>4, 'i'=>1);
      } else {
          $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1);
      }
      $return = '';
      while($number > 0)
      {
          foreach($table as $rom=>$arb)
          {
              if($number >= $arb)
              {
                  $number -= $arb;
                  $return .= $rom;
                  break;
              }
          }
      }

      return $return;
  }

}
