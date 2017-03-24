<?php
    class RepeatCounter
    {
        function countRepeats($word_input, $sentence_input)
        {
            $result_array = array();
            $lowercase_word_input = strtolower($word_input);
            $lowercase_sentence = strtolower($sentence_input);
            $remove_punctuation_sentence = str_replace(",", " ", $lowercase_sentence);
            $remove_punctuation_sentence2 = str_replace(":", " ", $remove_punctuation_sentence);
            $remove_punctuation_sentence3 = str_replace(";", " ", $remove_punctuation_sentence2);
            $remove_punctuation_sentence4 = str_replace("!", " ", $remove_punctuation_sentence3);
            $remove_punctuation_sentence5 = str_replace('"', " ", $remove_punctuation_sentence4);
            $remove_punctuation_sentence6 = str_replace("'", " ", $remove_punctuation_sentence5);
            $remove_punctuation_sentence7 = str_replace("?", " ", $remove_punctuation_sentence6);
            $remove_punctuation_sentence8 = str_replace("$", " ", $remove_punctuation_sentence7);
            $remove_punctuation_sentence9 = str_replace("#", " ", $remove_punctuation_sentence8);
            $remove_punctuation_sentence10 = str_replace("@", " ", $remove_punctuation_sentence9);
            $remove_punctuation_sentence11 = str_replace("%", " ", $remove_punctuation_sentence10);
            $lowercase_sentence_array = explode(" ", $remove_punctuation_sentence11);


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
