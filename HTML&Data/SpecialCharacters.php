<code>
<?php
    echo "a \t b<br/>";
    echo "a \n b<br/>";
    echo "a \$ b<br/>";
    echo "a \\ b<br/>";
    $myLongText = <<<FMB
    Some<br/>
    Very<br/>
    Long</br/>
    Text with ""
FMB;
    echo 'And inside I also want a \' in the middle<br/>';
    echo "And inside I also want a \" in the middle<br/>";
    echo $myLongText;


?>
</code>
