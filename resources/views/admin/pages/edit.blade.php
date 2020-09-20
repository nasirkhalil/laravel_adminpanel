
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">Create</div>
    <div class="card-body">
       <form action="{{ route("admin.pages.update", [$page->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Parent</label>
            <select id="parent" name="parent" class="form-control">
                <option value="0">--Select--</option>
                @forelse ($parents as $parent)
                <option value="{{ $parent->id }}" {{ $parent->id == $page->parent ? 'selected' : '' }} >{{ $parent->name }}</option>
                @empty
                <option value="">No Data found.</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name*</label>
            <input type="text" id="name" name="name" value="{{ $page->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Meta Title</label>
            <input type="text" id="meta_title" name="meta_title" value="{{ $page->meta_title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Meta Tag</label>
            <input type="text" id="meta_tag" name="meta_tag" value="{{ $page->meta_tag }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Meta Description</label>
            <input type="text" id="meta_descriptions" name="meta_descriptions" value="{{ $page->meta_descriptions }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Short Description</label>
            <textarea name="short_description" id="short_description">{{ $page->short_description }}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Details</label>
            <textarea name="details" id="details">{{ $page->details }}</textarea>
        </div>
        <div class="form-group">
            <label for="name">Banner Image</label>
            <input type="file" id="banner" name="banner" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Banner Alt</label>
            <input type="text" id="banner_alt" name="banner_alt" value="{{ $page->banner_alt }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Banner Title</label>
            <input type="text" id="banner_title" name="banner_title" value="{{ $page->banner_title }}" class="form-control">
        </div>
        <div>
            <input class="btn btn-danger" type="submit" value="Save">
        </div>
    </form>
</div>
</div>

@endsection