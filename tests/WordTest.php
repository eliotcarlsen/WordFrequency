<?php
    require_once "src/Word.php";

    class WordTest extends PHPUnit_Framework_TestCase
    {
        function test_two_words()
        {
            $test_Word = new Word;
            $input = "horse";
            $input2 = "horse";

            $result = $test_Word->RepeatCounter($input, $input2);

            $this->assertEquals(1, $result);
        }
    }


?>
