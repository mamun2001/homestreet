<?php

namespace App\Controllers;

class Resource extends BaseController
{
    public function index($filename)
    {

        $filepath = WRITEPATH . 'uploads/' . $filename;

        $mime = mime_content_type($filepath);
        header('Content-Length: ' . filesize($filepath));
        header("Content-Type: $mime");
        header('Content-Disposition: inline; filename="' . $filepath . '";');
        readfile($filepath);
        exit();

    }
}