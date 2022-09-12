<?php
include 'heading.html'; // produces a warning without stopping the script
require 'heading.html'; // produces a fatal error and stops the script
include_once 'heading.html'; // doesn't display as file only allowed once
