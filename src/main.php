<?php

echo 'php!' . PHP_EOL;

$archive = new ZipArchive();

if ($archive->open('/tmp/hoge.zip', ZipArchive::CREATE) === false) {
    echo 'open fail' . PHP_EOL;
    exit();
}

$archive->addFile('./tests/file/foo.txt', 'foo.txt');
$archive->close();

echo 'zip success' . PHP_EOL;