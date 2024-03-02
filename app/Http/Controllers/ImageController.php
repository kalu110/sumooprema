<?php

namespace App\Http\Controllers;

use App\Helper\ImageManager;
use App\Models\Image;
use Illuminate\Http\Request;

class TutorialController extends Controller
{   
    use ImageManager;

    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = storage_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        if($file = $request->file('image')) {
            $fileData = $this->uploads($file,$path);
            Image::create([
                'name' => $fileData['fileName'],
                'type' => $fileData['fileType'],
                'path' => $fileData['filePath'],
                'size' => $fileData['fileSize']
            ]);
        }

        return redirect()
            ->back()
            ->with('success', 'Image successfully upload.');
    }
}
