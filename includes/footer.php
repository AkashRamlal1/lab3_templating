<!-- jouw HTML voor een Footer komt hier... 
Benoem hier ten minste je naam en de tijd
-->
<footer>

<?php

date_default_timezone_set('Europe/Amsterdam'); // Replace 'Your_Timezone' with your desired timezone, such as 'America/New_York'

// Get the current date
$currentDate = date('Y-m-d'); // Format can be adjusted based on your preference, such as 'Y-m-d H:i:s' for date and time

// Display the current date
echo "(Akash Ramlal,$currentDate);"

?>
</footer>