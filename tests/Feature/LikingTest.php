<?php

namespace Tests\Feature;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Affiliation;

class LikingTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_post_can_be_liked(): void
    {
        $this->actingAs((User::factory()->create()));
        // $post = factory(Post::class)->create();
        $post = Post::factory()->create();

        $post->like();

        $this->assertCount(1, $post->likes);
        $this->assertTrue($post->likes->contains('id', auth()->id()));
    }

    public function test_a_comment_can_be_liked()
    {
        $this->actingAs((User::factory()->create()));
        $comment = Comment::factory()->create();

        $comment->like();

        $this->assertCount(1, $comment->likes);
    
    }
}
