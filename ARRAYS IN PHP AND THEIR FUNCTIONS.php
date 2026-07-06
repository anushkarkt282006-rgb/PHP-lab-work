<?php
// 1. Print the values of an array entered by the user
    if (isset($_POST['user_items'])) {
        $input1 = $_POST['user_items'];
        
        // Convert comma-separated string into a PHP array and trim spaces
        $array1 = array_map('trim', explode(",", $input1));
        
        echo "--- 1. Print Array Values ---<br>";
        foreach ($array1 as $value) {
            echo "Value: " . htmlspecialchars($value) . "<br>";
        }
        echo "<br>";
    }

    // 2. Reverse an array values entered by user
    if (isset($_POST['reverse_items'])) {
        $input2 = $_POST['reverse_items'];
        $array2 = array_map('trim', explode(",", $input2));
        
        // Using array_reverse() function
        $reversed_array = array_reverse($array2);
        
        echo "--- 2. Reversed Array ---<br>";
        echo "<pre>";
        print_r($reversed_array);
        echo "</pre><br>";
    }

    // 3. Merge two arrays
    if (isset($_POST['merge_items_1']) && isset($_POST['merge_items_2'])) {
        $input3_a = $_POST['merge_items_1'];
        $input3_b = $_POST['merge_items_2'];
        
        $arr_a = array_map('trim', explode(",", $input3_a));
        $arr_b = array_map('trim', explode(",", $input3_b));
        
        // Using array_merge() function
        $merged_array = array_merge($arr_a, $arr_b);
        
        echo "--- 3. Merged Array ---<br>";
        echo "<pre>";
        print_r($merged_array);
        echo "</pre>";
    }
?>