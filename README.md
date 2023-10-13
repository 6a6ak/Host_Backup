# Host_Backup

## Description

This PHP script creates a ZIP file backup of the current directory. The ZIP file will be named `Backup_[current_time].zip`, where `[current_time]` is the timestamp at which the backup is created.

## Installation

1. Download the `backup.php` file.
2. Upload it to the directory you wish to backup on your web server.

## Usage

There are two ways to manually run the script:

### Method 1: Through the Web Browser

1. Open your web browser.
2. Navigate to the URL where `backup.php` resides. For example:
    ```
    http://yourdomain.com/path/to/backup_script.php
    ```

### Method 2: Through the Terminal

1. SSH into your web server.
2. Navigate to the directory where `backup.php` is located.
3. Run the following command:
    ```
    php backup.php
    ```

After running the script, a ZIP file will be created in the current directory. The ZIP file will contain all the files and subdirectories in the current directory, excluding the script itself.

## Requirements

- PHP 5.2.0 or newer
- ZipArchive PHP extension

## Notes

- Make sure the PHP ZipArchive extension is installed on your server to run this script.
- Please be cautious when running this script, as it will create a ZIP file that includes all files in the current directory where the script is located.
