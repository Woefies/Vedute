@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="m-2 max-w-sm bg-white border border-gray-200 shadow dark:bg-off-white dark:border-gray-700 items-center text-center">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-5">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"> {{ old('description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="material" class="form-label">material</label>
                                <input type="text" class="form-control" id="material" name="material" placeholder="material" value="{{ old('material') }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Product Price" value=" {{ old('price') }}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="text" class="form-control" id="image" name="image" placeholder="image url">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-control" id="category" name="category">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
