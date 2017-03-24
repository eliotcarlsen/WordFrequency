<?php
    require_once "src/Word.php";

    class WordTest extends PHPUnit_Framework_TestCase
    {
        function test_two_words()
        {
            $test_Word = new Word;
            $input = "horse";
            $sentence = "horse";

            $result = $test_Word->RepeatCounter($input, $sentence);

            $this->assertEquals(1, $result);
        }
    }


?>
