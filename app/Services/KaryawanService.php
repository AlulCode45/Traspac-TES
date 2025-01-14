<?php

namespace App\Services;

use App\Traits\UploadTrait;
use Illuminate\Http\File;

class KaryawanService
{
    use UploadTrait;
    public function validateAndUpload(string $disk, object $file, string $old_file = null): string
    {
        if ($old_file) $this->remove($old_file);

        return $this->upload($disk, $file);
    }
}
