<?php
 
    // if the caller pressed anything but 4 or 6 send them back
    if($_REQUEST['Digits'] != '4' and $_REQUEST['Digits'] != '6') {
        header("Location: automated-attendant.php");
        die;
    }
     
     
    // otherwise, if 4 or 6 was pressed, send them on their way.
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<?php if ($_REQUEST['Digits'] == '4') { ?>
    <Dial>+17809952789</Dial>
    <Say>The call to Gregg failed.  Goodbye.</Say>
<?php } elseif ($_REQUEST['Digits'] == '6') { ?>
    <Dial>+17802325399</Dial>
    <Say>The call to Margaret failed.  Goodbye.</Say>
<?php } ?>
</Response>