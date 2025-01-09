<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponse;

class ArticleController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $articles = Article::with(['creator', 'updater'])->get();
        return $this->success($articles, 'Data retreived successfully.', 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:3000',
            'thumbnail' => 'nullable|string',
        ]);

        $article = Article::create([
            ...$validated,
            'created_by' => Auth::id(),
        ]);

        return $this->success($article, 'Data created successfully.', 201);
    }

    public function show($id)
    {
        $article = Article::with(['creator', 'updater'])->findOrFail($id);
        return $this->success($article, 'Data retreived successfully.', 200);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string|max:3000',
            'thumbnail' => 'nullable|string',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            ...$validated,
            'updated_by' => Auth::id(),
        ]);

        return $this->success($article, 'Data updated successfully.', 201);
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return $this->success($article, 'Data deleted successfully.', 200);
    }
}
