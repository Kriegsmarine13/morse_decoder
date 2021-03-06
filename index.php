<?php

function get_morse() {
    return array(
        " " => "   ",
        "a" => "·− ",
        "b" => "−··· ",
        "c" => "−·−· ",
        "d" => "−·· ",
        "e" => "· ",
        "f" => "··−· ",
        "g" => "−−· ",
        "h" => "···· ",
        "i" => "·· ",
        "j" => "·−−− ",
        "k" => "−·− ",
        "l" => "·−·· ",
        "m" => "−− ",
        "n" => "−· ",
        "o" => "−−− ",
        "p" => "·−−· ",
        "q" => "−−·− ",
        "r" => "·−· ",
        "s" => "··· ",
        "t" => "− ",
        "u" => "··− ",
        "v" => "···− ",
        "w" => "·−− ",
        "x" => "−··− ",
        "y" => "−·−− ",
        "z" => "−−·· ",
        "." => "·−−−·−−−·−−− ",
        "," => "−−−−−−··−−−−−− ",
        "?" => "··−−−−−−·· ",
        ":" => "−−−−−−−−−··· ",
        "/" => "−−−··−−−· ",
        '"' => "·−−−··−−−· ",
        "'" => "·−−−−−−−−−−−−· ",
        ";" => "−−−·−−−·−−−· ",
        "SOS" => "···−−−··· "
    );
}

function morse_decoder($word) {
    $morse = array_map("trim", get_morse());
    $output = "";
    foreach (explode(" ", $word) as $value) {
        $output .= array_search($value, $morse);
    }
    return strtoupper($output);
}

echo(morse_decoder("···· · −·−−   ·−−− ··− −·· ·"));