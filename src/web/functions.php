<?php
/**
 * The $airports variable contains array of arrays of airports (see airports.php)
 * What can be put instead of placeholder so that function returns the unique first letter of each airport name
 * in alphabetical order
 *
 * Create a PhpUnit test (GetUniqueFirstLettersTest) which will check this behavior
 *
 * @param  array  $airports
 * @return string[]
 */
function getUniqueFirstLetters(array $airports)
    {
        $letter = array();
        foreach ($airports as $airport) {
            $currentLetter = mb_substr($airport['name'], 0, 1);
                $letter[] = $currentLetter;
        }
        $first = array_unique($letter);
        sort($first);
        return $first;

    }



function filteringAirportByFirstLetter($airports, $letter)
{
    $arr = [];
    foreach ($airports as $air) {
        if ($air['name'][0] === $letter) {
            $arr[] = $air;
        }
    }
    return $arr;
}


function filterAirportByState($airports)
{
    $columns = array_column($airports, 'state');
    array_multisort($columns, SORT_ASC, $airports);
    return $airports;

}
function filterAirportByName($airports)
{
    $columns = array_column($airports, 'name');
    array_multisort($columns, SORT_ASC, $airports);
    return $airports;

}
function filterAirportByCity($airports)
{
    $columns = array_column($airports, 'city');
    array_multisort($columns, SORT_ASC, $airports);
    return $airports;

}
function filterAirportByCode($airports)
{
    $columns = array_column($airports, 'code');
    array_multisort($columns, SORT_ASC, $airports);
    return $airports;

}
