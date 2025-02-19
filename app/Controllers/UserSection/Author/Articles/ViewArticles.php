<?php

namespace App\Controllers\UserSection\Author\Articles;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\ArticleModel;
use App\Models\ArticleTagModel;
use App\Models\TagModel;

class ViewArticles extends BaseController
{
    public function viewArticles()
    {
        $userModel = new UserModel();
        $articleModel = new ArticleModel();
        $articleTagModel = new ArticleTagModel();
        $tagModel = new TagModel();

        $data['articles'] = $articleModel
            ->select('articles.*, first_name as author_name, last_name as author_surname')
            ->join('users', 'articles.author_id = users.id')
            ->where('users.role_id', 2)
            ->findAll();

        foreach ($data['articles'] as &$article) {
            $tagIDs = $articleTagModel->where('article_id', $article['id'])->findColumn('tag_id');
            $article['tags'] = $tagModel->whereIn('id', $tagIDs)->findAll();
        }

        return view('pages/userSection/author/articles/view', $data);
    }
}

