<?php

namespace App\Service;

use phpseclib3\Net\SFTP;

class FTPService {

    private $sftp;

    public function __construct() {

        $this->sftp = new SFTP($_ENV['FTP_HOST']);
        $this->sftp->login($_ENV['FTP_USER'], $_ENV['FTP_PASS']);

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