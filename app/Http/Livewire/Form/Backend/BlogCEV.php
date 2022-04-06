<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $title, $image, $tags, $excerpt, $description;

    // Custom Values
    public $action, $isUploaded = false, $blog;

    protected $rules = [
        'title' => '',
        'image' => '',
        'tags' => '',
        'excerpt' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('blog_images');
        }

        Blog::create($validatedData);

        return $this->redirectRoute('admin.blog.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('blog_images');
        }

        Blog::where('id', $this->blog)->update($validatedData);

        return $this->redirectRoute('admin.blog.index');
    }

    public function mount($blog)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Blog::findOrFail($blog);
            $this->title = $data->title;
            $this->image = $data->image;
            $this->tags = $data->tags;
            $this->excerpt = $data->excerpt;
            $this->description = $data->description;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.blog-c-e-v');
    }
}
