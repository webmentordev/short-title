<?php 

    $sentence = "o add support for other word breaks like commas and dashes, preg_match gives a quick way and doesn't.";

    if(str_word_count($sentence) > 10){
        $s1 = explode(' ', $sentence);
        $s2 = array_slice($s1, 0, 10);
        $s3 = implode(' ', $s2);
        $result = $s3 . '...';
        echo $result;
    }else{
        echo $sentence;
    }

?>