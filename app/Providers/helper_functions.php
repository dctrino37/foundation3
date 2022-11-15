<?php
    
use Artesaos\SEOTools\Facades\SEOMeta;

function generate_seo(){

	// dd(request()->path());

    $seo_page = DB::table('admin_seo')->where('page_uri',request()->path())->first();

    SEOMeta::setTitle($seo_page->meta_title);
    SEOMeta::setDescription($seo_page->meta_description);
    SEOMeta::setKeywords(explode(',', $seo_page->meta_keywords));

}

function generate_category_seo($category_id){

    $category = DB::table('forum_categories')->where('id',$category_id)->first();

    SEOMeta::setTitle($category->meta_title);
    SEOMeta::setDescription($category->meta_description);
    SEOMeta::setKeywords(explode(',', $category->meta_keywords));

}