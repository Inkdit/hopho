<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Gather timeout="30" numDigits="1" action="routing-options.php" method="POST">
		<Play>http://hopho.orchestra.io/Phone-Message.mp3</Play>
	</Gather>
</Response>