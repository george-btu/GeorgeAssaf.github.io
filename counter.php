<?php
$counterFile = 'resources/visit_count.txt'; // Replace with the path to your storage file

if (file_exists($counterFile)) {
    $visitCount = intval(file_get_contents($counterFile));
    $visitCount++;
    file_put_contents($counterFile, $visitCount);
} else {
    $visitCount = 1;
    file_put_contents($counterFile, $visitCount);
}

echo $visitCount;
?>
