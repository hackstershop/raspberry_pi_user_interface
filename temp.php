<?php
shell_exec('cd /home/pi/Adafruit_Python_DHT/examples; sudo python AdafruitDHT.py 11 18');
sleep(2);
$temp_file = fopen("/home/pi/Adafruit_Python_DHT/examples/temp_data", "r") or die("Unable to open file!");
echo fread($temp_file,filesize("/home/pi/Adafruit_Python_DHT/examples/temp_data"));
fclose($temp_file);

?>
