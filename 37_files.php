<?php

//writing to a file in php

// $fptr = fopen("file1","w");
// fwrite($fptr,"This is the best file on this plannet. Please dont argue with me on this one.\n");
// fwrite($fptr, "This is another content\n");
// fwrite($fptr, "This is another content3\n");
// fclose($fptr);


//Appending to  a file in php

$fptr = fopen("file1","a");
fwrite($fptr,"This is being appended to the file.\n");
fclose($fptr);


?>