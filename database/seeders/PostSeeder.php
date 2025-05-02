<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Get all the users with 'user' role
        $users = User::where('role', 'user')->get();

        // Real-life blog posts
        $realLifePosts = [
            [
                'title' => 'The Power of Community in Real Life',
                'short_description' => 'How communities shape our real-life experiences and growth.',
                'body' => 'In real life, we are not alone. Communities play a vital role in shaping our lives. Whether it’s a group of friends, family, or local networks, the connections we form can make all the difference in how we handle life’s challenges.',
                'category' => 'real life',
            ],
            [
                'title' => 'The Importance of Mental Health Awareness',
                'short_description' => 'A look into how mental health is a crucial aspect of real life.',
                'body' => 'In recent years, mental health awareness has become a major conversation in many communities. Taking care of our mental well-being is just as important as our physical health. In this post, we explore ways to improve mental health in daily life.',
                'category' => 'real life',
            ],
        ];

        // Technology blog posts
        $technologyPosts = [
            [
                'title' => 'The Rise of Artificial Intelligence in Everyday Life',
                'short_description' => 'How AI is changing the way we live and work.',
                'body' => 'Artificial Intelligence (AI) has become a fundamental part of our daily lives, from voice assistants to automated systems. This post discusses how AI is transforming industries and what the future holds for AI integration in our personal lives.',
                'category' => 'technology',
            ],
            [
                'title' => 'The Future of Cloud Computing: What You Need to Know',
                'short_description' => 'Exploring the evolving landscape of cloud computing and its benefits.',
                'body' => 'Cloud computing is one of the fastest-growing technologies today. From data storage to running applications, cloud services have changed how businesses operate. In this post, we dive deep into the future of cloud computing and its potential for businesses.',
                'category' => 'technology',
            ],
        ];

        // Business blog posts
        $businessPosts = [
            [
                'title' => 'How to Build a Successful Online Business',
                'short_description' => 'Tips and tricks for building a thriving online business.',
                'body' => 'Starting an online business can be a challenging yet rewarding experience. This blog post will guide you through the process, from identifying a niche to scaling your business for long-term success.',
                'category' => 'business',
            ],
            [
                'title' => 'Top 5 Strategies for Small Business Growth',
                'short_description' => 'The key strategies that will help small businesses grow in a competitive market.',
                'body' => 'Running a small business requires strategic thinking and planning. In this post, we share 5 proven strategies that can help your small business thrive, even in tough economic conditions.',
                'category' => 'business',
            ],
        ];

        // School blog posts
        $schoolPosts = [
            [
                'title' => 'How Technology is Shaping Modern Education',
                'short_description' => 'The role of technology in classrooms and how it’s transforming education.',
                'body' => 'In the modern era, technology is deeply integrated into the education system. From online learning platforms to smart classrooms, technology has reshaped the way students learn and interact with educators. This post explores the positive impacts of technology in education.',
                'category' => 'schools',
            ],
            [
                'title' => 'The Importance of Extracurricular Activities for Students',
                'short_description' => 'Why extracurriculars are vital for student development.',
                'body' => 'Extracurricular activities provide students with opportunities to grow beyond the classroom. From sports to clubs, these activities help build character, teamwork, and leadership skills. This post explores how extracurriculars contribute to a student’s holistic development.',
                'category' => 'schools',
            ],
        ];

        $posts = array_merge($realLifePosts, $technologyPosts, $businessPosts, $schoolPosts);

        foreach ($posts as $postData) {
            $post = Post::create([
                'user_id' => $users->random()->id,
                'cover_image' => 'images/default-cover.jpg',
                'category' => $postData['category'],
                'title' => $postData['title'],
                'short_description' => $postData['short_description'],
                'body' => $postData['body'],
                'slug' => \Str::slug($postData['title']),
                'status' => 'published',
                'published_at' => now(),
            ]);
        }
    }
}
