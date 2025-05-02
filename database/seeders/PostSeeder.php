<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
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

        $posts = array_merge(
            $this->realLifePosts(),
            $this->technologyPosts(),
            $this->businessPosts(),
            $this->schoolPosts()
        );

        foreach ($posts as $postData) {
            $author = $users->random();

            $post = Post::create([
                'user_id' => $author->id,
                'cover_image' => 'images/default-cover.jpg',
                'category' => $postData['category'],
                'title' => $postData['title'],
                'short_description' => $postData['short_description'],
                'body' => $postData['body'],
                'slug' => Str::slug($postData['title']),
                'status' => 'published',
                'published_at' => now(),
            ]);

            foreach ($users->random(rand(1, 3)) as $commentUser) {
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => $commentUser->id,
                    'body' => 'This is a comment from ' . $commentUser->fullname,
                ]);
            }

            foreach ($users->random(rand(1, min(5, $users->count()))) as $likeUser) {
                Like::firstOrCreate([
                    'post_id' => $post->id,
                    'user_id' => $likeUser->id,
                ]);
            }
        }
    }

    private function realLifePosts()
    {
        return [
            [
                'title' => 'The Power of Community in Real Life',
                'short_description' => 'How communities shape our real-life experiences and growth.',
                'body' => 'In every corner of the world, people come together to form communities — not just physical ones, but emotional and social bonds that shape our lives. Whether it’s through neighborhoods, workplaces, online groups, or shared interests, these communities offer support, understanding, and connection. The strength of a community lies in its ability to lift individuals up during tough times and celebrate their successes. Real-life stories of people coming together to help one another during crises or simply sharing everyday joys remind us that we are not alone. As humans, we thrive in environments where we are seen, heard, and valued. Building and nurturing communities is more than just a social activity — it’s a path to collective growth and emotional resilience.',
                'category' => 'Lifestyle',
            ],
            [
                'title' => 'The Importance of Mental Health Awareness',
                'short_description' => 'A look into how mental health is a crucial aspect of real life.',
                'body' => 'Mental health plays a critical role in shaping our thoughts, emotions, behaviors, and overall well-being. Yet for years, it has been overlooked or surrounded by stigma. Raising awareness means acknowledging the challenges individuals face and creating safe spaces for open conversations. When people understand that mental health is just as important as physical health, it becomes easier to seek help, provide support, and promote healing. Schools, workplaces, and families must all play a part in breaking the silence. Through education, empathy, and accessible resources, we can build a culture that values emotional wellness and provides help without judgment. Mental health awareness is not a one-time campaign — it’s a continuous commitment to humanity.',
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
                'body' => 'Artificial Intelligence (AI) has transformed from a futuristic idea into a practical part of our daily lives. From smart assistants like Siri and Alexa to personalized recommendations on streaming platforms and online stores, AI is everywhere. In healthcare, it’s helping diagnose diseases faster. In finance, it powers fraud detection systems. As AI becomes more integrated, questions arise about ethics, job displacement, and data privacy. It’s important for society to adapt, educate, and regulate responsibly. AI is not just a tool — it’s a catalyst that will continue to reshape how we live, work, and interact with the world.',
                'category' => 'Technology',
            ],
            [
                'title' => 'The Future of Cloud Computing: What You Need to Know',
                'short_description' => 'Exploring the evolving landscape of cloud computing and its benefits.',
                'body' => 'Cloud computing has revolutionized how businesses operate, offering scalable resources, cost-efficiency, and global accessibility. Companies no longer need massive servers in-house. Instead, they rely on cloud providers like AWS, Azure, and Google Cloud for everything from data storage to machine learning tools. As we move forward, trends like edge computing, serverless architecture, and enhanced security protocols will define the next generation of cloud services. Understanding how to leverage cloud infrastructure is now a competitive advantage for startups and enterprises alike. The future of cloud is fast, flexible, and fundamental.',
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
                'body' => 'Starting an online business requires more than just an idea. It demands clear goals, knowledge of the market, a compelling product or service, and a user-friendly website. Successful entrepreneurs invest time in understanding customer behavior, leveraging social media for outreach, and using analytics to refine strategies. Digital tools like Shopify, Stripe, and SEO platforms have made launching easier than ever. However, it’s the persistence, creativity, and adaptability of the founder that determines long-term success. In a world of endless competition, the best online businesses stand out by solving real problems, offering great service, and constantly evolving.',
                'category' => 'Business',
            ],
            [
                'title' => 'Top 5 Strategies for Small Business Growth',
                'short_description' => 'The key strategies that will help small businesses grow.',
                'body' => 'Small businesses are the heart of local economies. To grow, they must adopt smart strategies like focusing on customer satisfaction, embracing digital marketing, improving operational efficiency, exploring new revenue streams, and investing in employee development. Listening to feedback, staying agile in decision-making, and embracing innovation all contribute to long-term sustainability. Even with limited resources, small businesses can thrive through smart planning, community engagement, and staying true to their core values. Success isn’t always about scaling big — it’s about growing smart.',
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
                'body' => 'Education has entered a new era, driven by digital innovation. Online learning platforms, interactive whiteboards, and education apps are redefining how students learn and teachers teach. With access to resources beyond textbooks, students can explore topics deeply and at their own pace. Teachers can personalize learning using data and AI-powered tools. While the digital divide remains a challenge, the benefits of technology in education are undeniable. It’s not just about access — it’s about empowerment. The future classroom will likely be a hybrid model, combining physical presence with digital flexibility.',
                'category' => 'Education',
            ],
            [
                'title' => 'The Importance of Extracurricular Activities for Students',
                'short_description' => 'Why extracurriculars are vital for student development.',
                'body' => 'Extracurricular activities play a critical role in shaping well-rounded students. Sports, music, arts, clubs, and volunteer work help build social skills, confidence, and time management. They also provide a healthy outlet for stress and foster a sense of belonging. Universities and employers increasingly value students who demonstrate passion and initiative beyond academics. Encouraging participation in such activities helps students discover their talents, build lifelong friendships, and prepare for real-world challenges. Education isn’t just what happens in the classroom — it’s the full experience that counts.',
                'category' => 'Education',
            ],
        ];
    }
}
