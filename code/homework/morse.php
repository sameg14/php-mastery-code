<?php
$data = 'I hope you are hAving a good day!';
$morseEquivalent = englishToMorse($data);

echo 'English::<br/>';
echo $data . '<hr/>';

echo 'Morse::<br/>';
echo $morseEquivalent;

/**
 * Convert a block of text to morse code
 * @param string $englishText User input in english
 * @return string
 */
function englishToMorse($englishText)
{
    $morseJson = '{
  "0": "-----",
  "1": ".----",
  "2": "..---",
  "3": "...--",
  "4": "....-",
  "5": ".....",
  "6": "-....",
  "7": "--...",
  "8": "---..",
  "9": "----.",
  "a": ".-",
  "b": "-...",
  "c": "-.-.",
  "d": "-..",
  "e": ".",
  "f": "..-.",
  "g": "--.",
  "h": "....",
  "i": "..",
  "j": ".---",
  "k": "-.-",
  "l": ".-..",
  "m": "--",
  "n": "-.",
  "o": "---",
  "p": ".--.",
  "q": "--.-",
  "r": ".-.",
  "s": "...",
  "t": "-",
  "u": "..-",
  "v": "...-",
  "w": ".--",
  "x": "-..-",
  "y": "-.--",
  "z": "--..",
  ".": ".-.-.-",
  ",": "--..--",
  "?": "..--..",
  "!": "-.-.--",
  "-": "-....-",
  "/": "-..-.",
  "@": ".--.-.",
  "(": "-.--.",
  ")": "-.--.-"
}';


    $returnData = [];

    echo '<pre>';

    // stdClass object? into an array??
    $jsonData = json_decode($morseJson, true);

    $englishText = strtolower($englishText);

    for ($i = 0; $i < strlen($englishText); $i++) {

        $char = $englishText[$i];
        $morseCharacter = isset($jsonData[$char]) ? $jsonData[$char] : null;

        $returnData[] = $morseCharacter;

        //echo $char . "\t" . $morseCharacter . "\n";
    }

    //explode: create an array based on some delimiter(glue)
    //implode: collapse an array with a delimiter(glue)

    return implode('/', $returnData);
}