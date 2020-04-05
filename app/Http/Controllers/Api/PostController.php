<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
  public function index(Request $request)
  {
      $tag_id = "php";

      $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
      $method = "GET";

      //接続
      $client = new Client();

      $response = $client->request($method, $url);

      $posts = $response->getBody();
      $posts = json_decode($posts, true);

      return view('index', ['posts' => $posts]);
  }
}
