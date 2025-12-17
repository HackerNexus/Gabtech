
<?php
if (file_exists('reviews.txt')) {
  $reviews = file_get_contents('reviews.txt');
  echo nl2br(htmlspecialchars($reviews));
} else {
  echo "<p>No reviews yet.</p>";
}
?>
