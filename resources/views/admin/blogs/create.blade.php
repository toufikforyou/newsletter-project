@extends('admin.layout')

@section('title', 'Create Blog Post')
@section('page_title', 'Create New Blog Post')

@section('content')
    <div class="max-w-5xl">
        <div class="bg-white rounded-lg shadow">
            <form method="POST" action="{{ route('admin.blogs.store') }}" class="space-y-8 p-8">
                @csrf

                <!-- Title & Slug Section -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
                        <span class="material-icons text-blue-600">description</span>
                        Post Information
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-slate-900 mb-2">Title *</label>
                            <input type="text" id="title" name="title" required class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('title') border-red-500 @enderror" value="{{ old('title') }}" placeholder="Enter your blog post title">
                            @error('title')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="slug" class="block text-sm font-medium text-slate-900 mb-2">Slug</label>
                                <input type="text" id="slug" name="slug" class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none" value="{{ old('slug') }}" placeholder="Auto-generated from title">
                                @error('slug')
                                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="category" class="block text-sm font-medium text-slate-900 mb-2">Category *</label>
                                <input type="text" id="category" name="category" required class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none" value="{{ old('category', 'Tech News') }}" placeholder="e.g., Web Development">
                                @error('category')
                                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border-slate-200" />

                <!-- Content Section -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
                        <span class="material-icons text-blue-600">article</span>
                        Content
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="excerpt" class="block text-sm font-medium text-slate-900 mb-2">Excerpt</label>
                            <textarea id="excerpt" name="excerpt" rows="2" class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none" placeholder="Brief summary of the post (shown in blog listings)...">{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-slate-500 mt-1">This will be displayed as a preview in blog listings</p>
                        </div>

                        <div>
                            <label for="content" class="block text-sm font-medium text-slate-900 mb-2">Full Content *</label>
                            <textarea id="content" name="content" rows="12" required class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none font-mono text-sm" placeholder="Write your complete blog post content here...">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="border-slate-200" />

                <!-- Media & Settings Section -->
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 mb-4 flex items-center gap-2">
                        <span class="material-icons text-blue-600">image</span>
                        Media & Settings
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="featured_image" class="block text-sm font-medium text-slate-900 mb-2">Featured Image URL</label>
                            <input type="url" id="featured_image" name="featured_image" class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none" value="{{ old('featured_image') }}" placeholder="https://example.com/image.jpg">
                            @error('featured_image')
                                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-slate-500 mt-1">Enter a URL to an image that will be displayed with the post</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="read_time" class="block text-sm font-medium text-slate-900 mb-2">Read Time (minutes) *</label>
                                <input type="number" id="read_time" name="read_time" required min="1" max="60" class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none" value="{{ old('read_time', 5) }}">
                                @error('read_time')
                                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="status" class="block text-sm font-medium text-slate-900 mb-2">Status *</label>
                                <select id="status" name="status" required class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white">
                                    <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="archived" {{ old('status') === 'archived' ? 'selected' : '' }}>Archived</option>
                                </select>
                                @error('status')
                                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Author Info (Display Only) -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <p class="text-sm text-blue-900">
                        <span class="font-semibold">📝 Author:</span> This post will be authored by <strong>{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</strong> ({{ Auth::guard('admin')->user()->role ?? 'Admin' }})
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-3 pt-6 border-t border-slate-200">
                    <button type="submit" class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium inline-flex items-center justify-center gap-2">
                        <span class="material-icons text-sm">check</span>
                        Create Blog Post
                    </button>
                    <a href="{{ route('admin.blogs.index') }}" class="flex-1 px-6 py-3 bg-slate-200 text-slate-900 rounded-lg hover:bg-slate-300 transition-colors font-medium text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
