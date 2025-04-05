<?php
require_once 'HTMLPurifier.auto.php';

$title = htmlspecialchars($_POST['blog_title'] ?? '');
$category = htmlspecialchars($_POST['blog_category'] ?? '');
$content = $_POST['blog_content'] ?? '';

// Further sanitization for database storage
$cleanContent = strip_tags($content, [
  'p',
  'h1',
  'h2',
  'h3',
  'blockquote',
  'strong',
  'em',
  'u',
  'a',
  'ul',
  'ol',
  'li',
  'span',
  'font'
]);

// Allowed attributes for tags
$allowedAttributes = [
  'a' => ['href', 'title', 'target'],
  'span' => ['style'],
  'font' => ['color', 'face', 'size']
];

// Additional sanitization with HTML Purifier
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.Allowed', implode(',', array_keys($allowedAttributes)));
foreach ($allowedAttributes as $tag => $attrs) {
  $config->set("HTML.AllowedAttributes.$tag", implode(',', $attrs));
}
$purifier = new HTMLPurifier($config);
$cleanContent = $purifier->purify($content);

// Save to database or file
// ...
