<?php
    class RepeatCounter
    {
        function countRepeats($word_input, $sentence_input)
        {
            $result_array = array();
            $lowercase_word_input = strtolower($word_input);
            $lowercase_sentence = strtolower($sentence_input);
            $lowercase_sentence_array = explode(" ", $lowercase_sentence);

            foreach ($lowercase_sentence_array as $word)
            {
                if ($word == $lowercase_word_input)
                {
                    array_push($result_array, $word);
                }
            }
            return sizeof($result_array);
        }
    }
?>
