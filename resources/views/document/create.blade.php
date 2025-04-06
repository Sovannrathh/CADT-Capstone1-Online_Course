<x-layout>
    <h1>hi</h1>
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Upload a Document</h2>
    
        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Title</label>
                <input type="text" name="title" class="border p-2 w-full rounded-md" required>
            </div>
    
            <div class="mb-4">
                <label class="block text-sm font-medium">Upload File</label>
                <input type="file" name="document" class="border p-2 w-full rounded-md" required>
            </div>
    
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Upload
            </button>
        </form>
    </div>
</x-layout>