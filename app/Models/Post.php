<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post extends Model
{
    // use HasFactory;

    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all($columns = [])
    {
        return cache()->remember('posts.all', function () {
            return collect(File::files(resource_path("posts")));
            $posts = array_map(function ($file) {
                $document = YamlFrontMatter::parseFile($file);
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                );
            }, $_FILES);
        });

        //     ->map(function($file) => YamlFrontMatter::parseFile($file))
        //     ->map(function($document) => new Post(
        //             $document->title,
        //             $document->excerpt,
        //             $document->date,
        //             $document->body(),
        //             $document->slug
        //     ))

        //     ->sortBy('date');
    }

    public static function find($slug)
    {

        $posts = static::all();

        $posts->firstWhere('slug', $slug);


        //     if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
        //         throw new ModelNotFoundException();
        //     }

        //     return cache()->remember("posts.{$slug}", 7, function () use ($path) {
        //         return file_get_contents($path));
        // }
    }
}
