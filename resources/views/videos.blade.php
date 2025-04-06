<form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <label for="path">Video File:</label>
    <input type="file" name="path" id="path">

    <button type="submit">Upload Video</button>
</form>