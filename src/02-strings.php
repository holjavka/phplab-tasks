<?php
header('Content-Type: text/html; charset=utf-8');
/**
 * The $input variable contains text in snake case (i.e. hello_world or this_is_home_task)
 * Transform it into camel cased string and return (i.e. helloWorld or thisIsHomeTask)
 * @see http://xahlee.info/comp/camelCase_vs_snake_case.html
 *
 * @param  string  $input
 * @return string
 */
function snakeCaseToCamelCase(string $input)
{
            $input = str_replace("_", " ", $input);
            $input = ucwords($input);
            $input = str_replace(" ", "", $input);
            $input = lcfirst($input);
            return $input;


}

/**
 * The $input variable contains multibyte text like 'ФЫВА олдж'
 * Mirror each word individually and return transformed text (i.e. 'АВЫФ ждло')
 * !!! do not change words order
 *
 * @param  string  $input
 * @return string
 */
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
function mirrorMultibyteString(string $input )
{

    $words = mb_split(' ', $input);
    $result = '';

    foreach ($words as $word){
        $result .= mb_strrev($word).' ';

    }
    return rtrim($result);

}

/**
 * My friend wants a new band name for her band.
 * She likes bands that use the formula: 'The' + a noun with first letter capitalized.
 * However, when a noun STARTS and ENDS with the same letter,
 * she likes to repeat the noun twice and connect them together with the first and last letter,
 * combined into one word like so (WITHOUT a 'The' in front):
 * dolphin -> The Dolphin
 * alaska -> Alaskalaska
 * europe -> Europeurope
 * Implement this logic.
 *
 * @param  string  $noun
 * @return string
 */
function getBrandName(string $noun)
{
    if ($noun[0] === $noun[-1]){
        $noun.=substr($noun, 1);
        return ucfirst($noun);}
    else{

        $noun = "The ".ucfirst($noun);
        return $noun;}
}