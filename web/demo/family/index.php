<?php

// require Detector so we can popular identify the browser & populate $ua
require("../../../lib/Detector/Detector.php"); 

print featureFamily::find($ua);

?>