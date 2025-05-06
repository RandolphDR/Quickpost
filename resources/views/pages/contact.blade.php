@section('title', 'Contact Us')

<x-app-layout>
    {{-- Contact Info --}}
    <section class="w-full max-w-6xl px-4 py-12 mx-auto text-center flex flex-col items-center gap-6">
        <h1 class="text-3xl md:text-4xl font-semibold text-gray-800 dark:text-neutral-200">
            Get in Touch
        </h1>
        <p class="max-w-2xl text-base text-gray-600 dark:text-neutral-400">
            Have questions or feedback about QuickPost? We’d love to hear from you.
        </p>

        <div class="w-full max-w-3xl grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
            <div class="p-4 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
                <h2 class="text-lg font-bold text-gray-800 dark:text-neutral-100 mb-1">Email Us</h2>
                <p class="text-gray-600 dark:text-neutral-300">quickpost.dev@gmail.com</p>
            </div>
            <div class="p-4 rounded-lg bg-white dark:bg-gray-800 shadow-sm">
                <h2 class="text-lg font-bold text-gray-800 dark:text-neutral-100 mb-1">Call Us</h2>
                <p class="text-gray-600 dark:text-neutral-300">+63 912 345 6789</p>
            </div>
        </div>
    </section>

    <hr class="w-full max-w-6xl my-6 border-blue-500" />

    {{-- Contact Form --}}
    <section class="w-full max-w-3xl px-4 py-10 mx-auto">
        <form class="space-y-5 bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
            @csrf
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white text-center">Send a Message</h2>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name" id="name" required
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                <textarea name="message" id="message" rows="4" required
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="px-5 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-md font-semibold shadow hover:shadow-md transition">
                    Send Message
                </button>
            </div>
        </form>
    </section>

    <hr class="w-full max-w-6xl my-6 border-blue-500" />

    {{-- Privacy Policy --}}
    <section id="privacy" class="w-full max-w-4xl px-4 py-10 mx-auto text-left flex flex-col gap-4">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Privacy Policy</h1>
        <p class="text-base text-gray-600 dark:text-gray-400">
            Your privacy is important to us. This policy explains how we collect and use your information.
        </p>
        <div class="text-sm text-gray-700 dark:text-gray-300 space-y-4">
            <div>
                <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">1. Information We Collect</h2>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Email address</li>
                    <li>Name and profile photo (optional)</li>
                    <li>Securely hashed account credentials</li>
                    <li>Comments and blog activity</li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">2. How We Use Your Information</h2>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Manage your account</li>
                    <li>Moderate comments</li>
                    <li>Improve the QuickPost system</li>
                </ul>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">3. Data Protection</h2>
                <p>We use Laravel’s security features to safeguard your data, including encryption and access control.</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">4. Third-Party Services</h2>
                <p>We only share your data with essential providers like authentication and hosting services.</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">5. Your Rights</h2>
                <p>You may request to view or delete your data anytime via our support page.</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-blue-600 dark:text-blue-400">6. Updates</h2>
                <p>This policy may change. Updates will be shown here with a new date.</p>
            </div>
        </div>
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-4">Last updated: {{ now()->format('F d, Y') }}</p>
    </section>

    <hr class="w-full max-w-6xl my-6 border-blue-500" />

    {{-- Terms --}}
    <section class="w-full max-w-4xl px-4 py-10 mx-auto" id="terms">
        <h1 class="text-3xl font-bold mb-4 text-center text-gray-800 dark:text-white">Terms of Service</h1>
        <div class="text-sm space-y-4 text-gray-700 dark:text-gray-300">
            <p>By using QuickPost, you agree to follow these terms.</p>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">1. User Responsibility</h2>
            <p>You're responsible for the content you post. Avoid harmful or illegal content.</p>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">2. Content Ownership</h2>
            <p>You own your content but grant us rights to display it on the platform.</p>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">3. Account Suspension</h2>
            <p>We may suspend accounts that violate the rules or abuse the system.</p>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">4. Changes to Terms</h2>
            <p>Terms may change. We'll notify users of major updates.</p>
        </div>
    </section>

    <hr class="w-full max-w-6xl my-6 border-blue-500" />

    {{-- FAQ --}}
    <section class="w-full max-w-5xl px-4 py-10 mx-auto" id="faqs">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 dark:text-white">FAQs</h1>
        <div class="space-y-6 text-sm text-gray-700 dark:text-gray-300">
            <div>
                <h2 class="font-semibold text-blue-600 dark:text-blue-400">What is QuickPost?</h2>
                <p>It’s a simple blogging platform for posting and sharing ideas quickly.</p>
            </div>
            <div>
                <h2 class="font-semibold text-blue-600 dark:text-blue-400">Is it free?</h2>
                <p>Yes, it's completely free for everyone.</p>
            </div>
            <div>
                <h2 class="font-semibold text-blue-600 dark:text-blue-400">How do I publish a post?</h2>
                <p>Login and use the “Create Post” button from your dashboard.</p>
            </div>
            <div>
                <h2 class="font-semibold text-blue-600 dark:text-blue-400">Can I edit or delete posts?</h2>
                <p>Yes. You can manage your posts anytime from your dashboard.</p>
            </div>
        </div>
    </section>

    <hr class="w-full max-w-6xl my-6 border-blue-500" />

    {{-- Cookies Policy --}}
    <section class="w-full max-w-4xl px-4 py-10 mx-auto" id="cookies">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 dark:text-white">Cookies Policy</h1>
        <div class="text-sm space-y-4 text-gray-700 dark:text-gray-300">
            <p>We use cookies to improve your experience and track site usage.</p>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">What are cookies?</h2>
            <p>Small text files stored on your device that help remember your preferences.</p>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">Why we use cookies</h2>
            <ul class="list-disc pl-6 space-y-1">
                <li>Keep you logged in</li>
                <li>Remember theme preferences</li>
                <li>Analyze traffic</li>
            </ul>

            <h2 class="font-semibold text-blue-600 dark:text-blue-400">Can I disable them?</h2>
            <p>Yes, via browser settings—but some features may not work properly.</p>
        </div>
    </section>
</x-app-layout>
