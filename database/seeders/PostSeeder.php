<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Category;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run()
    {
        $users = User::where('role', 'user')->get();

        if ($users->count() === 0) {
            $this->command->warn('No users with role "user" found.');
            return;
        }

        // Get all categories to match posts with their respective categories
        $categories = Category::all();

        if ($categories->count() === 0) {
            $this->command->warn('No categories found.');
            return;
        }

        $posts = array_merge(
            $this->realLifePosts(),
            $this->technologyPosts(),
            $this->businessPosts(),
            $this->schoolPosts()
        );

        foreach ($posts as $postData) {
            $author = $users->random();

            // Find the category based on the post's category name
            $category = $categories->firstWhere('name', $postData['category']); // Use category name to find category

            // Check if category exists, if not, skip the post
            if ($category) {
                $post = Post::create([
                    'user_id' => $author->id,
                    'cover_image' => $this->getCoverImage($postData['title']), // Assign the correct cover image
                    'category_id' => $category->id,  // Assign the category_id based on the category name
                    'title' => $postData['title'],
                    'short_description' => $postData['short_description'],
                    'body' => $postData['body'],
                    'slug' => Str::slug($postData['title']),
                    'status' => 'published',
                    'published_at' => now(),
                ]);

                // Creating comments for the post
                foreach ($users->random(rand(1, 3)) as $commentUser) {
                    Comment::create([
                        'post_id' => $post->id,
                        'user_id' => $commentUser->id,
                        'body' => 'This is a comment from ' . $commentUser->fullname,
                    ]);
                }

                // Creating likes for the post
                foreach ($users->random(rand(1, min(5, $users->count()))) as $likeUser) {
                    Like::firstOrCreate([
                        'post_id' => $post->id,
                        'user_id' => $likeUser->id,
                    ]);
                }
            } else {
                $this->command->warn('Category not found for post: ' . $postData['title']);
            }
        }
    }

    private function getCoverImage($title)
    {
        $coverImages = [
            'The Power of Community in Real Life' => 'storage/post_cover_images/The Power of Community.jpg',
            'The Importance of Mental Health Awareness' => 'storage/post_cover_images/Mental Health.jpg',
            'The Rise of Artificial Intelligence in Everyday Life' => 'storage/post_cover_images/artificial-intelligence.jpg',
            'The Future of Cloud Computing: What You Need to Know' => 'storage/post_cover_images/technology-background.jpg',
            'How to Build a Successful Online Business' => 'storage/post_cover_images/Online Business.jpg',
            'Top 5 Strategies for Small Business Growth' => null, // No cover image
            'How Technology is Shaping Modern Education' => 'storage/post_cover_images/Education Technology.jpg',
            'The Importance of Extracurricular Activities for Students' => 'storage/post_cover_images/extra-curicullar-act.jpg',
        ];

        return $coverImages[$title] ?? 'images/default-cover.jpg'; // Return default if no image found
    }

    private function realLifePosts()
    {
        return [
            [
                'title' => 'The Power of Community in Real Life',
                'short_description' => 'How communities shape our real-life experiences and growth.',
                'body' => 'In every corner of the world, people come together to form communities — not just physical ones, but emotional and social bonds that shape our lives...',
                'category' => 'Lifestyle',
            ],
            [
                'title' => 'The Importance of Mental Health Awareness',
                'short_description' => 'A look into how mental health is a crucial aspect of real life.',
                'body' => 'Mental health plays a critical role in shaping our thoughts, emotions, behaviors, and overall well-being...',
                'category' => 'Lifestyle',
            ],
        ];
    }

    private function technologyPosts()
    {
        return [
            [
                'title' => 'The Rise of Artificial Intelligence in Everyday Life',
                'short_description' => 'How AI is changing the way we live and work.',
                'body' => 'Artificial Intelligence (AI) has transformed from a futuristic idea into a practical part of our daily lives...',
                'category' => 'Technology',
            ],
            [
                'title' => 'The Future of Cloud Computing: What You Need to Know',
                'short_description' => 'Exploring the evolving landscape of cloud computing and its benefits.',
                'body' => 'Cloud computing has revolutionized how businesses operate, offering scalable resources, cost-efficiency, and global accessibility...',
                'category' => 'Technology',
            ],
        ];
    }

    private function businessPosts()
    {
        return [
            [
                'title' => 'How to Build a Successful Online Business',
                'short_description' => 'Tips and tricks for building a thriving online business.',
                'body' => 'Starting an online business requires more than just an idea...',
                'category' => 'Business',
            ],
            [
                'title' => 'Top 5 Strategies for Small Business Growth',
                'short_description' => 'The key strategies that will help small businesses grow.',
                'body' => 'Small businesses are the heart of local economies. To grow, they must adopt smart strategies...',
                'category' => 'Business',
            ],
        ];
    }

    private function schoolPosts()
    {
        return [
            [
                'title' => 'How Technology is Shaping Modern Education',
                'short_description' => 'The role of technology in classrooms and learning experiences.',
                'body' => 'Education has entered a new era, driven by digital innovation...',
                'category' => 'Education',
            ],
            [
                'title' => 'The Importance of Extracurricular Activities for Students',
                'short_description' => 'Why extracurriculars are vital for student development.',
                'body' => 'Extracurricular activities play a critical role in shaping well-rounded students...',
                'category' => 'Education',
            ],
        ];
    }
}
