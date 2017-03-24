<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
      function test_two_words()
      {
          $test_Word = new RepeatCounter;
          $input = "hOrse";
          $sentence = "apple";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(0, $result);
      }
      function test_two_words_weirdcase()
      {
          $test_Word = new RepeatCounter;
          $input = "hOrse";
          $sentence = "horse";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(1, $result);
      }
      function test_oneword_onesentence()
      {
          $test_Word = new RepeatCounter;
          $input = "apple";
          $sentence = "apple sauce";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(1, $result);
      }
      function test_oneword_onesentence2()
      {
          $test_Word = new RepeatCounter;
          $input = "apple";
          $sentence = "pasta sauce";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(0, $result);
      }
      function test_oneword_onesentence3()
      {
          $test_Word = new RepeatCounter;
          $input = "apple";
          $sentence = "the apple sauce is made with an apple";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(2, $result);
      }
      function test_oneword_onesentence4()
      {
          $test_Word = new RepeatCounter;
          $input = "the";
          $sentence = "The brown dog ran the entire length of the field.";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(3, $result);
      }
      function test_oneword_onesentence5()
      {
          $test_Word = new RepeatCounter;
          $input = "the";
          $sentence = "The brown dog ran the entire length of the field. The end.";

          $result = $test_Word->countRepeats($input, $sentence);

          $this->assertEquals(4, $result);
      }

    }


?>
