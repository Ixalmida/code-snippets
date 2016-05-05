# code-snippets
Random code snippets

````
// Open a file
Route::get('file/{id}', 'HomeController@getFile');

````


````
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

````
