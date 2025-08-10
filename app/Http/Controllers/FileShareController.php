<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserFile;
use Illuminate\Support\Facades\Storage;

class FileShareController extends Controller
{
    

	public function show($token)
	{
	    $file = UserFile::where('share_token', $token)->firstOrFail();

	    return response()->file(storage_path("app/public/{$file->filename}"));
	}


}
