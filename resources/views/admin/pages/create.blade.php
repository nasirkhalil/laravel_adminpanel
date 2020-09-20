@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">Create</div>
    <div class="card-body">
        <form action="{{ route("admin.pages.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Parent</label>
                <select id="parent" name="parent" class="form-control">
                    <option value="0">--Select--</option>
                    @forelse ($parents as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                    @empty
                    <option value="">No Data found.</option>
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Meta Title</label>
                <input type="text" id="meta_title" name="meta_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Meta Tag</label>
                <input type="text" id="meta_tag" name="meta_tag" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Meta Description</label>
                <input type="text" id="meta_descriptions" name="meta_descriptions" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Short Description</label>
                <textarea name="short_description" id="short_description"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Details</label>
                <textarea name="details" id="details"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Meta Tag</label>
                <input type="file" id="banner" name="banner" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Banner Alt</label>
                <input type="text" id="banner_alt" name="banner_alt" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Banner Title</label>
                <input type="text" id="banner_title" name="banner_title" class="form-control">
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection