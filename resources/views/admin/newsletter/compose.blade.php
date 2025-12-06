@extends('admin.layout')

@section('title', 'Send Newsletter Email')
@section('page_title', 'Send Newsletter Email')

@section('content')
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <style>
        .ql-container {
            font-size: 16px;
        }
        
        .ql-editor {
            min-height: 200px;
            overflow-y: visible !important;
            font-size: 16px;
            line-height: 1.6;
        }
        
        .ql-toolbar {
            border-color: #e2e8f0;
        }
        
        .ql-toolbar button {
            font-size: 14px;
        }
        
        #preview-body {
            font-size: 16px;
            line-height: 1.8;
        }
        
        #preview-body p {
            margin-bottom: 1rem;
        }
        
        #preview-body h1 {
            font-size: 1.875rem;
            font-weight: 700;
            margin: 1.5rem 0 0.75rem;
        }
        
        #preview-body h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1.5rem 0 0.75rem;
        }
        
        #preview-body h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 1rem 0 0.5rem;
        }
        
        #preview-body ul, #preview-body ol {
            margin: 1rem 0;
            padding-left: 2rem;
        }
        
        #preview-body li {
            margin-bottom: 0.5rem;
        }
    </style>
    <div class="max-w-5xl mx-auto">
        <p class="text-slate-600 mb-8">Compose and send emails to your active subscribers</p>

        <!-- Stats -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg border border-slate-200 p-6">
                <div class="text-sm text-slate-600 mb-2">Active Subscribers</div>
                <div class="text-3xl font-bold text-slate-900">{{ $activeSubscribersCount }}</div>
            </div>
            <div class="bg-white rounded-lg border border-slate-200 p-6">
                <div class="text-sm text-slate-600 mb-2">Total Subscribers</div>
                <div class="text-3xl font-bold text-slate-900">{{ $totalSubscribersCount }}</div>
            </div>
            <div class="bg-white rounded-lg border border-slate-200 p-6">
                <div class="text-sm text-slate-600 mb-2">Bounced</div>
                <div class="text-3xl font-bold text-slate-900">{{ $bouncedSubscribersCount }}</div>
            </div>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('admin.newsletter.send') }}" class="bg-white rounded-lg border border-slate-200 p-8 space-y-6">
            @csrf

            <div>
                <label for="subject" class="block text-sm font-semibold text-slate-900 mb-2">Email Subject *</label>
                <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="e.g., Weekly Tech Insights - December 7"
                    class="w-full px-4 py-2 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none"
                    required
                    value="{{ old('subject') }}"
                />
                @error('subject')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="body" class="block text-sm font-semibold text-slate-900 mb-2">Email Content *</label>
                <div id="editor-toolbar" class="bg-slate-50 border border-slate-200 rounded-t-lg p-3 flex flex-wrap gap-1">
                    <button type="button" class="ql-bold" title="Bold"></button>
                    <button type="button" class="ql-italic" title="Italic"></button>
                    <button type="button" class="ql-underline" title="Underline"></button>
                    <button type="button" class="ql-strike" title="Strike"></button>
                    <div class="ql-formats">
                        <button type="button" class="ql-header" value="1"></button>
                        <button type="button" class="ql-header" value="2"></button>
                    </div>
                    <button type="button" class="ql-list" value="ordered"></button>
                    <button type="button" class="ql-list" value="bullet"></button>
                    <button type="button" class="ql-link"></button>
                    <button type="button" class="ql-image"></button>
                    <button type="button" class="ql-clean" title="Clear formatting"></button>
                </div>
                <div id="editor" class="w-full min-h-32 bg-white border border-slate-200 rounded-b-lg editor-auto-height"></div>
                <textarea name="body" id="body" class="hidden">{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p class="text-slate-500 text-xs mt-2">Tip: Format your content with bold, italic, headings, lists, links, and images</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-900 mb-3">Send To *</label>
                <div class="space-y-2">
                    <div>
                        <input
                            type="radio"
                            name="recipient_type"
                            id="active_only"
                            value="active"
                            checked
                            class="w-4 h-4 text-blue-600 focus:ring-blue-500"
                        />
                        <label for="active_only" class="inline text-sm text-slate-700 ml-2">
                            Active Subscribers Only ({{ $activeSubscribersCount }})
                        </label>
                    </div>
                    <div>
                        <input
                            type="radio"
                            name="recipient_type"
                            id="all_subscribers"
                            value="all"
                            class="w-4 h-4 text-blue-600 focus:ring-blue-500"
                        />
                        <label for="all_subscribers" class="inline text-sm text-slate-700 ml-2">
                            All Subscribers ({{ $totalSubscribersCount }})
                        </label>
                    </div>
                </div>
                @error('recipient_type')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button
                    type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium inline-flex items-center gap-2"
                >
                    <span class="material-icons text-sm">send</span>
                    Send Newsletter
                </button>
                <a href="{{ route('admin.dashboard') }}" class="px-6 py-2 bg-slate-200 text-slate-900 rounded-lg hover:bg-slate-300 transition-colors font-medium">
                    Cancel
                </a>
            </div>
        </form>

        <!-- Preview Section -->
        <div class="mt-8">
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-4">Email Preview</h2>
            <div class="bg-slate-50 rounded-lg p-4 sm:p-6 lg:p-8 border border-slate-200 w-full">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-4 sm:px-6 py-3 sm:py-4">
                        <p class="text-white text-sm sm:text-base font-medium">From: TechNews Team</p>
                        <p class="text-blue-100 text-sm sm:text-base font-semibold" id="preview-subject">Subject: Your email subject will appear here</p>
                    </div>
                    <div class="p-4 sm:p-6 lg:p-8 text-base sm:text-lg bg-white max-h-80 sm:max-h-96 overflow-y-auto leading-relaxed" id="preview-body">
                        Your email content will appear here
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Quill editor
        const quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: '#editor-toolbar'
            },
            placeholder: 'Write your email content here...',
        });

        // Auto-height functionality
        function adjustEditorHeight() {
            const editor = document.querySelector('#editor .ql-editor');
            if (editor) {
                editor.style.height = 'auto';
                const scrollHeight = editor.scrollHeight;
                editor.style.height = Math.max(scrollHeight, 200) + 'px';
            }
        }

        // Set initial content from old() helper if available
        @if(old('body'))
            quill.root.innerHTML = `{{ old('body') }}`;
            adjustEditorHeight();
        @endif

        // Adjust height on text change
        quill.on('text-change', function() {
            adjustEditorHeight();
        });

        // Get elements
        const subjectInput = document.getElementById('subject');
        const previewSubject = document.getElementById('preview-subject');
        const previewBody = document.getElementById('preview-body');
        const form = document.querySelector('form');
        const bodyTextarea = document.querySelector('#body');

        // Update preview function
        function updatePreview() {
            const subject = subjectInput.value || 'Your email subject will appear here';
            const body = quill.root.innerHTML || '<p>Your email content will appear here</p>';
            
            previewSubject.textContent = 'Subject: ' + subject;
            previewBody.innerHTML = body;
        }

        // Sync hidden textarea with Quill content
        function syncBodyField() {
            const content = quill.root.innerHTML;
            bodyTextarea.value = content;
            return content;
        }

        // Add event listeners
        subjectInput.addEventListener('input', updatePreview);
        quill.on('text-change', function() {
            updatePreview();
            syncBodyField();
        });

        // Image upload handler
        const imageInput = document.createElement('input');
        imageInput.setAttribute('type', 'file');
        imageInput.setAttribute('accept', 'image/*');

        const imageButton = document.querySelector('.ql-image');
        if (imageButton) {
            imageButton.addEventListener('click', function(e) {
                e.preventDefault();
                imageInput.click();
            });
        }

        imageInput.addEventListener('change', function() {
            if (imageInput.files && imageInput.files[0]) {
                const file = imageInput.files[0];
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const range = quill.getSelection();
                    if (range) {
                        quill.insertEmbed(range.index, 'image', e.target.result);
                    }
                };
                
                reader.readAsDataURL(file);
            }
        });

        // Sync hidden textarea with Quill content before form submission
        form.addEventListener('submit', function(e) {
            const content = syncBodyField();
            
            // Validate that content is not empty
            if (!content || content === '<p><br></p>') {
                e.preventDefault();
                alert('Please write some email content');
                return false;
            }
        });

        // Initial preview update after a small delay to ensure Quill is ready
        setTimeout(function() {
            updatePreview();
        }, 100);
    </script>
@endsection
