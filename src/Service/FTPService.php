<?php

namespace App\Service;

use phpseclib3\Net\SFTP;

class FTPService {

    private $sftp;

    public function __construct() {

        $this->sftp = new SFTP($_ENV['FTP_HOST']);
        $this->sftp->login($_ENV['FTP_USER'], $_ENV['FTP_PASS']);

    }

    public function getAllFiles(): bool|array
    {
        $files = $this->sftp->nlist('Music/', true);
        $files = array_filter($files, fn($file) => !in_array($file, ['.', '..']) && !is_dir($file) && !str_ends_with($file, '.'));

        $data = [];
        foreach ($files as $index=>$file) {
            $data[$index]['name'] = pathinfo($file, PATHINFO_FILENAME);
            $data[$index]['path'] = $file;
            $data[$index]['extension'] = pathinfo($file, PATHINFO_EXTENSION);
            $data[$index]['artist'] = pathinfo($file, PATHINFO_DIRNAME);
        }

        return $data;
    }

    public function getDirectories(): bool|array {
        return array_filter($this->sftp->nlist('Music/', false), fn($file) => !in_array($file, ['.', '..']));
    }

    public function test($path = '/') {
        return $this->sftp->nlist($path);
    }

    public function uploadFile(string $localFile, string $remoteFile) {
    }

    public function downloadFile(string $remoteFile, string $localName) {

        if (!file_exists('assets/downloads/' . $localName) && $this->sftp->file_exists($remoteFile)) file_put_contents('assets/downloads/' . $localName, $this->sftp->get($remoteFile));
        return $this->sftp->file_exists($remoteFile) ? 'assets/downloads/' . $localName : null;
    }

    public function deleteFile(string $remoteFile) {
    }

    public function __destruct() {
    }


}