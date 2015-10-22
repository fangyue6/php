<?php
/*
filedir    用户  组  其它
	   
	   rwx  rwx  rwx  
	   6    4--9   6
	   7    7    7
           rw_  r__  rw_	    
	   r__  _w_  ___  
	   r = 4--9
	   w = 2.2
	   x = 1

	   chmod 777 filename
	   chmod 644 filename
 */

	mkdir("meizie");
	mkdir("fengge", 0644);

