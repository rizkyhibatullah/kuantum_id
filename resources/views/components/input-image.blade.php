@props(['name', 'image'])

<div id="{{ $imagePreviewId }}" style="background-image: url({{ $image }}); background-size: cover;" {{ $attributes->merge(['class' => 'ms-2 mb-3 image-preview']) }}>
    <label for="{{ $imageUploadId }}" id="{{ $imageLabelId }}">Choose File</label>
    <input type="file" name="{{ $name }}" id="{{ $imageUploadId }}" />
</div>
