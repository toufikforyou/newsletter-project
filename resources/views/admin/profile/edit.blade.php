@extends('admin.layout')

@section('title', 'Profile Settings')
@section('page_title', 'Profile Settings')

@section('content')
    <div class="max-w-4xl">
        <div class="bg-white rounded-lg shadow p-8">
            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                @csrf

                <!-- Profile Picture -->
                <div class="mb-8 text-center">
                    <div class="inline-block relative">
                        @if($admin->profile_picture)
                            <img id="profilePreview" src="{{ asset('storage/' . $admin->profile_picture) }}" alt="Profile" class="w-32 h-32 rounded-full object-cover border-4 border-slate-200">
                        @else
                            <div id="profilePreview" class="w-32 h-32 rounded-full bg-slate-200 flex items-center justify-center border-4 border-slate-300">
                                <span class="material-icons text-slate-500 text-5xl">account_circle</span>
                            </div>
                        @endif
                        <label for="profile_picture" class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition-colors">
                            <span class="material-icons text-sm">camera_alt</span>
                        </label>
                        <input type="file" id="profile_picture" name="profile_picture" accept="image/*" class="hidden" onchange="previewImage(event)">
                    </div>
                    @error('profile_picture')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-slate-500 mt-2">Allowed: JPG, PNG, GIF (Max: 2MB)</p>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-900 mb-2">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $admin->name) }}" required
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-900 mb-2">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" required
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role" class="block text-sm font-semibold text-slate-900 mb-2">Role/Position</label>
                        <input type="text" name="role" id="role" value="{{ old('role', $admin->role) }}" placeholder="e.g., Chief Editor, Admin"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('role') border-red-500 @enderror">
                        @error('role')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Leave blank if don't want to change password -->
                    <div class="col-span-2">
                        <h3 class="text-lg font-semibold text-slate-900 mb-4 mt-6">Change Password</h3>
                        <p class="text-sm text-slate-600 mb-4">Leave blank if you don't want to change your password</p>
                    </div>

                    <!-- New Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-900 mb-2">New Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none @error('password') border-red-500 @enderror"
                            placeholder="Minimum 8 characters">
                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-slate-900 mb-2">Confirm New Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none"
                            placeholder="Re-enter new password">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8 flex gap-4">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium inline-flex items-center gap-2">
                        <span class="material-icons text-sm">save</span>
                        Update Profile
                    </button>
                    <a href="{{ route('admin.dashboard') }}" class="px-6 py-3 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 transition-colors font-medium">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('profilePreview');
                    preview.innerHTML = `<img src="${e.target.result}" alt="Profile" class="w-32 h-32 rounded-full object-cover border-4 border-slate-200">`;
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
