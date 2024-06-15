<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateFileExtensionsSeeder extends Seeder
{
    public function run()
    {
        $contents = [
            'Python_Introduccion.pptx' => 'Python_Introduccion.pdf',
            'DevOps_Introduccion.pptx' => 'DevOps_Introduccion.pdf',
            'Machine_Learning_Introduccion.pptx' => 'Machine_Learning_Introduccion.pdf',
        ];

        foreach ($contents as $old => $new) {
            DB::table('contents')
                ->where('file_path', 'LIKE', "%$old")
                ->update(['file_path' => DB::raw("REPLACE(file_path, '$old', '$new')")]);
        }
    }
}
