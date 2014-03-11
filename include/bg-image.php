<?php //Anzahl der Bilder herausfinden
$handle=opendir("include/img/"); // hier wird der gewünschte Ordner angegeben
     $count=0; // counter wird auf 0 gesetzt
    while ($file = readdir ($handle))
             { 
              if ($file != "." && $file != "..") 
                   { 
                    $count++; // counter wird erhöht
                      echo "$filen"; // hier könntest du dieeinzelnen files
                                     // ausgeben lassen
                   } 
            }
          closedir($handle);
?>