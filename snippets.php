<?php

// Open a file
Route::get('file/{id}', 'HomeController@getFile');

/**
 * Open file
 */
public function getFile($filename)
{
    // Full path
    $path = storage_path('app/' . $filename);

    // Determine the mime type
    $mimetype = mime_content_type($path);

    // Return the file
    return response()->file($path, ['Content-Type: ' . $mimetype . '; charset=utf-8']);
}

/**
 * Open a file
 */
public function getFile($filename)
{
    // Full path
    $path = storage_path('app/' . $filename);

    // Determine the mime type
    if (function_exists('mime_content_type')) {
        $mimetype = mime_content_type($path);
    } else {
        $mime_types = [
            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'docx' => 'application/msword',
            'xls' => 'application/vnd.ms-excel',
            'xlsx' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',
            'pptx' => 'application/vnd.ms-powerpoint',
            'rtf' => 'application/rtf',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        ];

        // Get extension
        $ext = strtolower(array_pop(explode('.', $filename)));

        // Match to mime type
        if (array_key_exists($ext, $mime_types)) {
            $mimetype = $mime_types[$ext];
        } else {
            $mimetype = 'application/octet-stream';
        }
    }

    // Return the file
    return response()->file($path, ['Content-Type: ' . $mimetype . '; charset=utf-8']);
}

    // Usages
    public function usage()
    {
        return $this->belongsToMany('App\Usage', 'variant_usage', 'variant_id', 'usage_id');
        // Note: these extra parameters wouldn't be necessary...
        // ...if the 'variant_usage' table were named 'product_variant_usage'
        // ...or if 'product_variant' were simply named 'variant'
        // ...(i.e. - product_variants --> product_variant_usage --> usage)

        // Also Note: the ID parameters are the connecting points in variant_usage
        // ...(i.e. - product_variants --> {variant_id --> usage_id} --> usage)
    }

// Redirect:
return redirect()->back()->withInput();

// Retrieve flashed input
$first_name = old('first_name');

// Blade:
{{ old('first_name') }}
