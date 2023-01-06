<?php

namespace App\Service;

use Exception;
use PHPUnit\Framework\Warning;


class GeniusService
{
    private string $apiKey = '';

    /**
     * @throws Exception
     */
    public function __construct()
    {
        if (!isset($_ENV['GENIUS_TOKEN'])) {
            throw new Warning('No Genius API key provided');
        }
        else {
            $this->apiKey = $_ENV['GENIUS_TOKEN'];
        }
    }

//    public function getAlbumId(string $artist, string $album): bool|int
//    {
//        dd($this->getArtistMeta('lil uzi vert'));
//        $url = 'https://api.genius.com/search?q=' . urlencode($artist) . '-' . urlencode($album) . '&access_token=' . $this->apiKey;
//        $response = json_decode(file_get_contents($url), true);
//        $response = $response['response']['hits'];
//        dd($response,$url);
//        foreach ($response as $hit) {
//            if ($hit['result']['primary_artist']['name'] === $artist && $hit['result']['title'] === $album) {
//                return $hit['result']['id'];
//            }
//        }
//        return false;
//    }

    public function getAlbum(int $id) {
        $url = 'https://api.genius.com/albums/' . $id . '?access_token=' . $this->apiKey;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    public function getArtistProfilePic(string $artist) {
        return $this->getArtistMeta($artist)['image_url'];
    }

    public function getArtistHeaderPic(string $artist) {
        return $this->getArtistMeta($artist)['header_image_url'];
    }

    function getArtistMeta(string $artist) {
        $url = 'https://api.genius.com/artists/' . $this->getArtistId($artist) . '?access_token=' . $this->apiKey;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response['response']['artist'];
    }

    public function getArtistId(string $artist): int|null {
        $url = 'https://api.genius.com/search?q=' . urlencode($artist) . '&access_token=' . $this->apiKey;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);

        return $response['response']['hits'][0]['result']['primary_artist']['id'] ?? null;
    }

    public function searchJson(string $query) {
        $query = urlencode($query);
        dump($query);
        $url = 'https://api.genius.com/search?q=' . $query . '&access_token=' . $this->apiKey;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    public function searchHtml(string $query, string $colClass = 'col-12') {
        $json = $this->searchJson($query);

        if (!isset($json['response']['hits'])) return null;

        $hits = $json['response']['hits'];
        $html = '<div class="row"><div class="' . $colClass . '"><h2>More on "' . $query . '"</h2>';

        foreach ($hits as $hit=>$data) {
            $data = $data['result'];
            $html .= '<div class="row"><div class="col-12"><h3>' . $data['title'] . '  <a href="' . $data['relationships_index_url'] . '"><i class="fe fe-external-link"></i> Genius</a></h3></div></div>';
            $html .= '<div class="row"><div class="col-12"><a href="' . $data['relationships_index_url'] . '"><img src="' . $data["song_art_image_url"] . '" width="100%"/></a></div></div>';
            $html .= '<hr class="my-2">';
        }

        $html .= '</div></div>';
        return $html;

    }

}