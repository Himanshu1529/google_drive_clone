<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\UserFile;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FileController extends Controller
{
	public function dashboard()
	{
	    $user = auth()->user();
	    $dateLimit = Carbon::now()->subDays(15);

	    // Fetch files uploaded in last 15 days, newest first
	    $files = UserFile::where('user_id', $user->id)
              ->where('created_at', '>=', $dateLimit)
              ->where('is_delete', 0)
              ->orderBy('created_at', 'desc')
              ->get();
	    $allfiles = UserFile::where('user_id', $user->id)->where('is_delete', 0)->get();
	    $used = $files->sum('size');

	    return view('dashboard', compact('files','allfiles', 'used'));
	}

	public function allFile()
	{
	    $user = auth()->user();
	   
	    // Fetch files uploaded in last 15 days, newest first
	    $files = UserFile::where('user_id', $user->id)
              ->where('is_delete', 0)
              ->get();
	    $allfiles = UserFile::where('user_id', $user->id)->where('is_delete', 0)->get();
	    $used = $files->sum('size');

	    return view('all-files', compact('files','allfiles', 'used'));
	}

	

	public function fileUpload()
	{
		$user = auth()->user();
	    $files = UserFile::where('user_id', $user->id)->get();
		$used = $files->sum('size');
	    return view('file-upload',compact('used'));
	}



   	public function upload(Request $request)
	{
	    $request->validate([
	        'files' => 'required|array',
	        'files.*' => 'file|max:25600' // each file max 25MB
	    ]);

	    $user = auth()->user();

	    // Total storage limit (25GB)
	    $maxLimit = 25 * 1024 * 1024 * 1024; // 25 GB
	    $used = UserFile::where('user_id', $user->id)->sum('size');

	    foreach ($request->file('files') as $file) {
	        $fileSize = $file->getSize();

	        if ($used + $fileSize > $maxLimit) {
	            return back()->with('error', 'Storage limit exceeded. Cannot upload more files.');
	        }

	        // Store file
	        $path = $file->store("user-files/{$user->id}", 'public');
	        $shareToken = Str::uuid();
	        // Save record in DB
	        UserFile::create([
			    'user_id' => $user->id,
			    'filename' => $path,
			    'original_name' => $file->getClientOriginalName(),
			    'size' => $fileSize,
			    'share_token' => $shareToken,
			]);

	        $used += $fileSize; // Update used storage
	    }

	    return redirect('all-files')->with('success', 'Files uploaded successfully!');
	}


	public function download($id)
	{
	    $file = UserFile::findOrFail($id);

	    // Ensure the file belongs to the authenticated user
	    if ($file->user_id !== auth()->id()) {
	        abort(403, 'Unauthorized access to file.');
	    }

	    $filePath = storage_path("app/{$file->filename}");

	    if (!file_exists($filePath)) {
	        abort(404, 'File not found.');
	    }

	    return response()->download($filePath, $file->original_name);
	}


	public function delete($id)
	{
		$file = UserFile::findOrFail($id);
        $file->is_delete = 1;
        $file->save();
        return redirect()->back()->with('success', 'File deleted successfully.');
	}

	public function restore($id)
	{
		$file = UserFile::findOrFail($id);
        $file->is_delete = 0;
        $file->save();
        return redirect()->back()->with('success', 'File deleted successfully.');
	}

	public function deleteFile()
	{
		$user = auth()->user();
	   
	    // Fetch files uploaded in last 15 days, newest first
	    $files = UserFile::where('user_id', $user->id)
              ->where('is_delete', 1)
              ->get();
	    $used = $files->sum('size');
	    return view('delete-files', compact('files', 'used'));
	}
}
