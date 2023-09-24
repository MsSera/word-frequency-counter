/**
 * Calculate the total price of an array of widgets.
 *
 * This function takes an array of widgets, where each widget is represented as an associative array
 * with 'name' and 'price' keys. It calculates and returns the total price of all the widgets in the array.
 *
 * @param array $widgets_items An array of widgets, where each widget is represented as an associative array.
 *
 * @return float The total price of all the widgets in the array.
 */

<?php	
// Define a function to calculate the total price of all items in the array
function calculate_Total_Price(array $widgets_items):float {
    $total_Price = 0;

    foreach ($widgets_items as $widgets_items) {
        if ($widgets_items['price']) {
            $total_Price += $widgets_items['price'];
        }
    }

    return $total_Price;
}
$widgets_items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];	
// Call the function and output the result
$total = calculate_Total_Price($widgets_items);
echo "Total Price: $" . $total;
?>

/**
 * Manipulate a string by removing spaces and converting it to lowercase.
 *
 * This function takes a string as input, removes all spaces from the string,
 * and converts it to lowercase. The modified string is then returned.
 *
 * @param string $string_input The input string to be manipulated.
 *
 * @return string The modified string with spaces removed and converted to lowercase.
 */
<?php
function string¬_Manipulations(string $string_input): string {
    $string_input = str_replace(' ', '', $string_input);
    $string_input = strtolower($string_input);
    return $string_input;
}

$input_string = "This is a poorly written program with little structure and readability.";
$modified_string = string_Manipulations($input_string);
echo "\nModified string: " . $modified_string;
?>

/**
 * Check if a number is even or odd.
 *
 * This function takes an integer as input and checks if it is even or odd. 
 * It prints a message indicating whether the number is even or odd and 
 * returns the input number.
 *
 * @param int $number The number to be checked.
 *
 * @return int The input number.
 */
<?php
function number_Checking(int $number): int
{
    if ($number % 2 == 0) {
        echo "\nThe number " . $number . " is even.";
    } else {
        echo "\nThe number " . $number . " is odd.";
    }
    
    return $number;
}

$number = 42;
$number_Checker = number_Checking($number);
?>

