<?php
use App\Models\Post;
use App\Models\PostCategory;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_route_displays_view()
    {
        $response = $this->get(route('posts.index'));

        $response->assertViewIs('cms.posts.index');
        $response->assertOk();
    }

    /** @test */
    public function index_route_returns_correct_data()
    {
        $post = Post::factory()->create([
            'title' => 'Test post',
            'content' => 'Lorem ipsum dolor sit amet',
            'featured_img' => 'post.jpg',
        ]);
        $response = $this->getJson(route('posts.index'));
        $response->assertJsonFragment(['title' => 'Test post']);
        $response->assertJsonFragment(['content' => 'Lorem ipsum dolor sit amet']);
        $response->assertJsonFragment(['featured_img' => 'post.jpg']);
    }

    /** @test */
    public function create_route_displays_view()
    {
        $response = $this->get(route('posts.create'));

        $response->assertViewIs('cms.posts.create');
        $response->assertOk();
    }

    /** @test */
    public function store_route_creates_new_post()
    {
        Storage::fake('public');
        $postCategory = PostCategory::factory()->create();
        $postData = [
            'title' => 'Test post',
            'content' => 'Lorem ipsum dolor sit amet',
            'featuredimg' => UploadedFile::fake()->image('post.jpg'),
            'category_id' => $postCategory->id,
        ];

        $response = $this->post(route('posts.store'), $postData);

        $response->assertRedirect(route('posts.index'));
        $this->assertDatabaseHas('posts', [
            'title' => 'Test post',
            'content' => 'Lorem ipsum dolor sit amet',
            'featured_img' => 'posts/' . $postData['featuredimg']->hashName(),
            'category_id' => $postCategory->id,
        ]);
        Storage::disk('public')->assertExists('posts/' . $postData['featuredimg']->hashName());
    }

    /** @test */
    public function show_route_displays_correct_post()
    {
        $post = Post::factory()->create();

        $response = $this->get(route('posts.show', $post->id));

        $response->assertOk();
        $response->assertViewHas('post', $post);
    }

    /** @test */
    public function edit_route_displays_correct_post()
    {
        $post = Post::factory()->create();
        $response = $this->get(route('posts.edit', $post->id));

        $response->assertOk();
        $response->assertViewHas('post', $post);
    }

    /** @test */
    public function update_route_updates_post()
    {
        Storage::fake('public');
        $post = Post::factory()->create();
        $postData = [
            'title' => 'Updated test post',
            'content' => 'Lorem ipsum dolor sit amet',
            'featuredimg' => UploadedFile::fake()->image('updated_post.jpg'),
            'category_id' => $post->category_id,
        ];
        $response = $this->put(route('posts.update', $post->id), $postData);

        $response->assertRedirect(route('posts.index'));
    }
}