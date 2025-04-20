<?php

echo((string)json_decode(file_get_contents("http://localhost:8000/status-json.xsl"), true)["icestats"]["source"]["listeners"] - 1);