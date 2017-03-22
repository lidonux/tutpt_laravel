<h1>Hi, {{ $name }}</h1>
<p>Sending Mail from Laravel.</p>
<?php 
    echo Hash::make($name.$salt);
    echo $name." ".$salt;
?>
