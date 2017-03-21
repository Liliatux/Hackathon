<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BlogController extends Controller {

	public function displayArticle(){

		$url = "http://www.groupe-adonis.fr/blog/feed";
		$rss = simplexml_load_file($url);
		echo '<ul>';

		foreach ($rss->channel->item as $item){
			echo '<li><a href="'.$item->link.'">'.($item->title).'</li>';
		}

	}

}