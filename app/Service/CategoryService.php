<?php


namespace App\Service;


use App\Models\Category;
use App\Repositories\CategoryRepository;
use Throwable;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
       return $this->categoryRepository->getAllCategories();
    }

    public function update($request, $category)
    {
        try {
            $category->update($request->toArray());
        }
        catch (Throwable $e) {
            report($e);
            abort(500);
        }
    }

    public function store($request)
    {
        try {
            $category = Category::create($request->toArray());
        }
        catch (Throwable $e) {
            report($e);
            abort(500);
        }

        return $category;
    }
    public function delete($category)
    {
        try {
            $category->delete();
        }
        catch (Throwable $e) {
            report($e);
            abort(500);
        }
    }

}
