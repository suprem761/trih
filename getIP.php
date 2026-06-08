<?php

$data = getenv("REMOTE_ADDR");

echo json_encode($data);


?>