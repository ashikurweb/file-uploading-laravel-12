<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>File Uploading With Laravel Tailwind Css</title>
</head>
<body>
    <div class="container mx-auto px-4">
        <div class="mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
            <h3 class="bg-gray-800 text-white text-lg font-semibold p-4 flex items-center">
                <i class="fa fa-star mr-2"></i> Laravel 12 File Upload Example Tailwind Css
            </h3>
            <div class="p-6">
                
                @session('success')
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ $value }}
                    </div>
                @endsession
    
                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2" for="inputFile">File:</label>
                        <input 
                            type="file" 
                            name="file" 
                            id="inputFile" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 @error('file') border-red-500 @enderror">
                        
                        @error('file')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
    
                    <div>
                        <button type="submit" class="bg-violet-600 hover:bg-violet-700 text-white font-medium py-2 px-4 rounded-lg flex items-center">
                            <i class="fa-solid fa-floppy-disk mr-2"></i> Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script></script>
</body>
</html>
