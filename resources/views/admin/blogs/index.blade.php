@extends('admin.layout')

@section('title', 'Blog Posts')
@section('page_title', 'Blog Posts')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-slate-600">Manage and publish your blog posts</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
            <span class="material-icons text-sm">add</span>
            New Blog Post
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <form method="GET" class="flex gap-4 flex-wrap">
            <input type="text" name="search" placeholder="Search by title or author..." value="{{ request('search') }}" class="flex-1 min-w-64 px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
            <select name="status" class="px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white">
                <option value="">All Status</option>
                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="archived" {{ request('status') === 'archived' ? 'selected' : '' }}>Archived</option>
            </select>
            <select name="category" class="px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none bg-white">
                <option value="">All Categories</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat }}" {{ request('category') === $cat ? 'selected' : '' }}>{{ $cat }}</option>
                @endforeach
            </select>
            <button type="submit" class="px-6 py-2 bg-slate-600 text-white rounded-lg hover:bg-slate-700 transition-colors font-medium inline-flex items-center gap-2">
                <span class="material-icons text-sm">search</span>
                Filter
            </button>
        </form>
    </div>

    <!-- Blogs Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Title</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Author</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Category</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Status</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-slate-900">Published</th>
                    <th class="px-6 py-3 text-right text-sm font-semibold text-slate-900">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse($blogs as $blog)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-sm">
                            <div class="font-medium text-slate-900">{{ $blog->title }}</div>
                            <div class="text-xs text-slate-500 mt-1">{{ Str::limit($blog->excerpt, 50) }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            <div class="font-medium">{{ $blog->author_name }}</div>
                            <div class="text-xs text-slate-500">{{ $blog->author_role }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">{{ $blog->category }}</td>
                        <td class="px-6 py-4 text-sm">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium"
                                @if($blog->status === 'published')
                                    style="background-color: #dbeafe; color: #1e40af;"
                                @elseif($blog->status === 'draft')
                                    style="background-color: #f3f4f6; color: #374151;"
                                @else
                                    style="background-color: #fee2e2; color: #991b1b;"
                                @endif
                            >
                                {{ ucfirst($blog->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-600">
                            @if($blog->published_at)
                                <div class="flex items-center gap-1">
                                    <span class="material-icons text-sm text-green-600">check_circle</span>
                                    {{ $blog->published_at->format('M d, Y') }}
                                </div>
                            @else
                                <span class="text-slate-400">-</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right text-sm space-x-2">
                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition-colors text-xs font-medium">
                                <span class="material-icons text-sm">edit</span>
                            </a>
                            <form method="POST" action="{{ route('admin.blogs.destroy', $blog) }}" class="inline" onsubmit="return confirm('Are you sure? This cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 transition-colors text-xs font-medium">
                                    <span class="material-icons text-sm">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <span class="material-icons text-5xl text-slate-300">article</span>
                                <p class="text-slate-500 font-medium">No blog posts found</p>
                                <a href="{{ route('admin.blogs.create') }}" class="text-blue-600 hover:underline text-sm font-medium">Create your first blog post</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $blogs->links() }}
    </div>
@endsection
