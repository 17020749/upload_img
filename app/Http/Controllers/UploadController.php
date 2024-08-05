<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Uploads;
use Illuminate\Http\Request;
use Kreait\Firebase\Storage\Bucket;
use Illuminate\Http\RedirectResponse;
class UploadController extends Controller
{
    public function index()
    {
        return view('pages.upload');
    }

    /**
     * The Upload function 
     * 
     */
    public function upload(Request $request):RedirectResponse
    {
        try {

            // $request->validate([
            //     'img_url' => 'required',
            //     'content' => 'required'
            // ]);
            // dd('dm');
            // dd($request->all());
            if ($request->hasFile('img_url')) {
                // Retrieve the file from the request
                $file = $request->file('img_url');

                // Create an instance of the Firebase Storage client
                $firebase = app('firebase.storage');
                $storage = $firebase->getBucket();
                // Set the desired storage location and filename
                $storagePath = 'images/';
                $filename = $file->getClientOriginalName();
                // Upload the file to Firebase Storage
                $upload = $storage->upload(
                    fopen($file->getRealPath(), 'r'),
                    [
                        'predefinedAcl' => 'publicRead',
                        'name' => $storagePath . $filename,
                    ]
                );
                // Get the public URL of the uploaded file
                $publicUrl = $upload->info()['mediaLink'];
                dd($publicUrl);
                // Return the public URL to the uploaded file
                // Uploads::create([
                //     'content' => $publicUrl
                // ]);
                return back()->with('info', ' file was uploaded.');
            } else {
                return back()->with('error', 'No file was uploaded.');
            }
        } catch (error) {
            dd('dm');
            return back()->with('error', 'error uploading.');
        }
    }

    public function display()
    {
        $uploads = Uploads::all();
    return view('pages.display', ['uploads' => $uploads]);
    }
}

