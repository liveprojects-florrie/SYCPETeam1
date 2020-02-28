<?php
require_once "header.php";
echo "Hello there! Unfortunately someone has been affected by your driving!";
echo <<<_END
<div>
	<button class="btn blue" id="apologise">Apologise to the stranger</button>
	<button class="btn" id="ignore">Ignore</button>
</div>
_END;
require_once "footer.php";
?>