@extends('layouts.app')

@section('title', 'Subscribe to TechNews Newsletter')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-indigo-50/30 py-16 md:py-24">
        <div class="max-w-2xl mx-auto px-6">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Subscribe to TechNews</h1>
                <p class="text-lg text-slate-600">Get weekly insights on software engineering, AI, and tech trends.</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-8 md:p-12">
                <form id="subscribeForm" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-900 mb-3">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none transition-all"
                            required
                        />
                    </div>

                    <button
                        type="submit"
                        id="submitBtn"
                        class="w-full py-3 px-6 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-colors shadow-lg shadow-blue-200"
                    >
                        Subscribe Now
                    </button>

                    <div id="messageBox" class="hidden p-4 rounded-xl"></div>
                </form>

                <div class="mt-8 pt-8 border-t border-slate-100 space-y-4">
                    <p class="text-sm text-slate-600">✓ No spam, unsubscribe anytime</p>
                    <p class="text-sm text-slate-600">✓ Join 50,000+ developers and engineers</p>
                    <p class="text-sm text-slate-600">✓ Get curated tech insights every week</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const form = document.getElementById('subscribeForm');
        const submitBtn = document.getElementById('submitBtn');
        const messageBox = document.getElementById('messageBox');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const csrfToken = document.querySelector('input[name="_token"]').value;

            submitBtn.disabled = true;
            submitBtn.textContent = 'Subscribing...';
            messageBox.classList.add('hidden');

            try {
                const response = await fetch('{{ route("subscribe.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({ email }),
                });

                const data = await response.json();

                messageBox.classList.remove('hidden');
                messageBox.textContent = data.message;

                if (data.success) {
                    messageBox.classList.add('bg-green-50', 'text-green-700', 'border', 'border-green-200');
                    messageBox.classList.remove('bg-amber-50', 'text-amber-700', 'border-amber-200', 'bg-red-50', 'text-red-700', 'border-red-200');
                    form.reset();
                    setTimeout(() => {
                        submitBtn.textContent = 'Subscribe Now';
                    }, 2000);
                    setTimeout(() => {
                        messageBox.classList.add('hidden');
                    }, 5000);
                } else {
                    messageBox.classList.add('bg-amber-50', 'text-amber-700', 'border', 'border-amber-200');
                    messageBox.classList.remove('bg-green-50', 'text-green-700', 'border-green-200', 'bg-red-50', 'text-red-700', 'border-red-200');
                    submitBtn.textContent = 'Subscribe Now';
                    setTimeout(() => {
                        messageBox.classList.add('hidden');
                    }, 5000);
                }
            } catch (error) {
                messageBox.classList.remove('hidden');
                messageBox.classList.add('bg-red-50', 'text-red-700', 'border', 'border-red-200');
                messageBox.classList.remove('bg-green-50', 'text-green-700', 'border-green-200', 'bg-amber-50', 'text-amber-700', 'border-amber-200');
                messageBox.textContent = 'An error occurred. Please try again.';
                submitBtn.textContent = 'Subscribe Now';
                setTimeout(() => {
                    messageBox.classList.add('hidden');
                }, 5000);
            } finally {
                submitBtn.disabled = false;
            }
        });
    </script>
@endsection
