<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test contacts
        Contact::create([
            'ticket_id' => 'TICKET-F17Y5VAH',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@example.com',
            'subject' => 'Issue with newsletter subscription',
            'message' => 'I subscribed to your newsletter but I\'m not receiving the weekly updates. I checked my spam folder and it\'s not there. Can you help me?',
            'status' => 'open',
            'admin_notes' => null,
            'replied_at' => null,
        ]);

        Contact::create([
            'ticket_id' => 'TICKET-K9M2B4X1',
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane@example.com',
            'subject' => 'Blog post suggestion',
            'message' => 'I would love to see more content about AI and machine learning in your blog. Your current posts are great!',
            'status' => 'resolved',
            'admin_notes' => 'Sent reply thanking for the suggestion',
            'replied_at' => now(),
        ]);

        // Create test subscribers
        Subscriber::create([
            'email' => 'subscriber1@example.com',
            'name' => 'Alice Johnson',
            'status' => 'active',
            'subscribed_at' => now(),
        ]);

        Subscriber::create([
            'email' => 'subscriber2@example.com',
            'name' => 'Bob Williams',
            'status' => 'active',
            'subscribed_at' => now()->subDays(5),
        ]);

        // Create test blogs
        Blog::create([
            'title' => 'Getting Started with Laravel 11',
            'slug' => 'getting-started-with-laravel-11',
            'excerpt' => 'Learn the basics of Laravel 11 and build your first web application.',
            'content' => 'Laravel 11 brings exciting new features and improvements. In this comprehensive guide, we\'ll explore everything you need to know to get started...',
            'category' => 'Web Development',
            'author_name' => 'Sarah Developer',
            'author_role' => 'Senior Developer',
            'read_time' => 8,
            'status' => 'published',
            'published_at' => now()->subDays(3),
        ]);

        Blog::create([
            'title' => 'The Future of AI in 2025',
            'slug' => 'future-of-ai-2025',
            'excerpt' => 'Explore the latest trends and predictions for artificial intelligence in 2025.',
            'content' => 'Artificial Intelligence continues to evolve at a rapid pace. Here are the top trends we expect to see in 2025...',
            'category' => 'AI & Machine Learning',
            'author_name' => 'Mike AI Expert',
            'author_role' => 'AI Researcher',
            'read_time' => 12,
            'status' => 'published',
            'published_at' => now()->subDays(1),
        ]);
    }
}
