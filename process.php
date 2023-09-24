<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $text = $_POST['text'];
    $sort= $_POST['sort'];
    $limit = $_POST['limit'];
   }
    function calculate_Word_Frequency($text, $sort, $limit) {
        // Tokenize the input text into words
        $words = str_word_count($text, 1);

        // Define common stop words to ignore
        $stopWords = ["the", "and", "in"];

        // Calculate word frequencies, filter out stop words
        $wordCounts = array_count_values(array_diff($words, $stopWords));

        // Sort the word frequencies based on the sorting choice
        if ($sort === "asc") {
            asort($wordCounts);
        } else {
            arsort($wordCounts);
        }

        // Limit the number of words to display
        $wordCounts = array_slice($wordCounts, 0, $limit);

        return $wordCounts;
    }

        if (!empty($text)) {
            $wordFrequencies = calculate_Word_Frequency($text, $sort, $limit);

            echo "<h2>Word Frequency:</h2>";
            echo "<ul>";
            foreach ($wordFrequencies as $word => $frequency) {
                echo "<li>$word: $frequency</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Please enter some text.</p>";
        }
        
    ?>

