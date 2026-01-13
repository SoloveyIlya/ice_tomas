<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Показать список статей
     */
    public function index()
    {
        $articles = Article::where('is_published', true)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return view('blog.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Показать отдельную статью
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->where('published_at', '<=', now())
            ->firstOrFail();

        // Увеличиваем счетчик просмотров
        $article->increment('views');

        // Получаем похожие статьи
        $relatedArticles = Article::where('is_published', true)
            ->where('published_at', '<=', now())
            ->where('id', '!=', $article->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('blog.show', [
            'article' => $article,
            'relatedArticles' => $relatedArticles
        ]);
    }
}
