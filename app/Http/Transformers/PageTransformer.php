<?php namespace App\Http\Transformers;


use App\Models\Page;
use League\Fractal;

class PageTransformer extends Fractal\TransformerAbstract {

    /**
     * Transform the output.
     *
     * @param Page $page
     * @return array
     */
    public function transform(Page $page)
    {
        return [
            'page_title'        => $page->title,
            'page_description'  => $page->description,
            'page_keywords'     => $page->keywords,
            'page_content'      => $page->content
        ];
    }
}