<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyCartImages extends Command
{
    protected $signature = 'cart:copy-images {from}';
    protected $description = 'Copy images to storage/app/public/cart_images';

    public function handle()
    {
        $from = $this->argument('from');
        $to = storage_path('app/public/cart_images');

        if (!File::exists($to)) {
            File::makeDirectory($to, 0777, true);
        }

        $files = File::files($from);
        foreach ($files as $file) {
            File::copy($file->getRealPath(), $to . '/' . $file->getFilename());
            $this->info('Copied: ' . $file->getFilename());
        }
        $this->info('All images copied!');
    }
}