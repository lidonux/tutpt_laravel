<h1>Dear {{ $name }}</h1>
<p>Sending Mail from Laravel.</p>
<?php 
    echo Hash::make($name.$salt);
    echo "This is ".$name." ".$salt;
?>
