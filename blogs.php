<?php

// Include necessary files
include('blogsData.php'); // Ensure this file defines the $blogs array
include('header.php');

echo '<div class="flex">';
// Loop through each blog in the $blogs array
foreach ($blogs as $blog) {
    echo '<div class="blogContainer"><h1>' . $blog['title'] . '</h1>';
    echo '<p>' . $blog['description'] . '</p></div>';
}
echo '</div>';
// Include the footer
include('footer.php');
?>