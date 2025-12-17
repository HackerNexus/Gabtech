<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $review = htmlspecialchars($_POST["review"]);

    $entry = "Name: $name\nReview: $review\n------------------\n";

    file_put_contents("reviews.txt", $entry, FILE_APPEND);

    // Redirect to Gabmotech.html with a success flag
    header("Location: Gabmotech.html?success=1");
    exit();
} else {
    echo "Invalid request.";
}
?>
