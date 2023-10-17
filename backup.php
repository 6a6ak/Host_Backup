<?php
// Set timezone
date_default_timezone_set('UTC');
// Get current time to append to the backup file name
$current_time = date("Y-m-d_H-i-s");
$zipFileName = "Backup_" . $current_time . ".zip";
// Create a new ZIP archive
$zip = new ZipArchive();
if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    exit("Could not open archive");
}
// Initialize an iterator to go through all files and folders in the current directory
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('.'),
    RecursiveIteratorIterator::SELF_FIRST
);
// Loop through all the files and add them to the ZIP archive
foreach ($files as $file) {
    $filename = $file->getFilename();
    if ($filename != '.' && $filename != '..' && $filename != basename(__FILE__) && $filename != $zipFileName) {
        if ($file->isDir()) {
            $zip->addEmptyDir($file);
        } else {
            $zip->addFile($file);
        }
    }
}
// Close the ZIP archive
$zip->close();
echo "ZIP archive created: " . $zipFileName;
?>
