<?php
	echo "hello world";
?>

The process of setting up the server is not easy for beginners, especially when setting up vagrant and virtual box because the user is required to use several commands such as commands for setting up vagrant (vagrant init, vagrant up, vagrant upgrade) as well as commands for installing WampServer and configuring phpMyAdmin on virtual box. The main issues encountered are port numbers conflict because I have a WampServer in the host machine and setting up the IP address in vagrant file to access root directory.

I have been using wamp server on my windows machine for the last 2 years, setting up WampServer does not require the use of commands. WampServer does not allow users to upload images that exceed 2MB so PHP.in the file should be modified to increase the maximum file size that can be uploaded into WampServer.