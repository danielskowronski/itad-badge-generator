# ITAD Badge Generator
Simple PHP script for generating badges for events like ITAD.

Input format is simple - CSV file (ludzie.csv) with following columns: Name, Surname, Function, where Function is aslo for coloring badge header - configured in $funkcje variable at beginning of index.php file.

For back of badge use cytaty.php - $cytat is for text setup. You can specyfify number of copies by loop variable limit or just by printing more copies by your printer options. For simpliciy you are supposed to do manual duplex printing - first font, load it again on reverse, then print back side with text.

Simple PHP execution via vagrant.