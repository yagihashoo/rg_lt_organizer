<?php
$headers = array("Content-Type" => "text/html; charset=UTF-8", "Content-Security-Policy" => "default-src 'self'", "X-XSS-Protection" => "1; mode=block", "X-Content-Type-Options" => "nosniff", "X-Frame-Options" => "deny");
foreach ($headers as $key => $val)
  header("{$key}: {$val}");
