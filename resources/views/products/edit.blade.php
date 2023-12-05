@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div
                class="m-2 max-w-sm bg-white border border-gray-200 shadow dark:bg-off-white dark:border-gray-700 items-center text-center">
                <div class="p-5">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text"
                                   class="form-control @error('name') border-red-500 @enderror"
                                   id="name"
                                   name="name"
                                   placeholder="Product Name"
                                   value="{{ old('name') ?? $product->name }}">
                            @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea class="form-control @error('description') border-red-500 @enderror"
                                      id="description"
                                      name="description"
                                      rows="3">{{ old('description') ?? $product->description }}</textarea>
                            @error('description')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number"
                                   class="form-control @error('price') border-red-500 @enderror"
                                   id="price"
                                   name="price"
                                   placeholder="Product Price"
                                   value="{{ old('price') ?? $product->price }}">
                            @error('price')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="material" class="form-label">material</label>
                            <input type="text"
                                   class="form-control @error('material') border-red-500 @enderror"
                                   id="material"
                                   name="material"
                                   placeholder = "material"
                                     value="{{ old('material') ?? $product->material }}">
                            @error('material')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file"
                                   class="form-control @error('image') border-red-500 @enderror"
                                   id="image"
                                   name="image">
                            @error('image')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger inline-flex items-center px-3 py-2 my-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-french-grey dark:hover:bg-cool-grey dark:focus:ring-black-800 ">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
