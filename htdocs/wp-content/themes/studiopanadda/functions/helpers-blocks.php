<?php
/**
 * Create spacer variable
 */
function custom_spacer($spacer_top, $spacer_bottom): ?string
{
    $spacer_top_class    = $spacer_top ? 'pt-4 pt-md-5 pt-lg-6' : '';
    $spacer_bottom_class = $spacer_bottom ? 'pb-4 pb-md-5 pb-lg-6' : '';
    $spacer              = null;

    if ( $spacer_top_class && $spacer_bottom_class ) {
        $spacer = ' ' . $spacer_top_class . ' ' . $spacer_bottom_class;
    } elseif ( $spacer_top_class ) {
        $spacer = ' ' . $spacer_top_class;
    } elseif ( $spacer_bottom_class ) {
        $spacer = ' ' . $spacer_bottom_class;
    }
    return $spacer;
}
/**
 * Get thumbnail for Block Video
 */
function custom_get_thumbnail($url){
    // YouTube
    // https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg
    if (str_contains($url, 'youtube')) {
        $query = parse_url($url)['query'];
        parse_str($query, $params);
        return 'https://img.youtube.com/vi/' . $params['v'] . '/hq720.jpg';
    }
    // Vimeo
    if (str_contains($url, 'vimeo')) {
        $api_video = 'https://vimeo.com/api/oembed.json?url=' . urlencode($url);
        // create curl resource
        $ch = curl_init();
        // set url
        curl_setopt($ch, CURLOPT_URL, $api_video);
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        $output = curl_exec($ch);
        // close curl resource to free up system resources
        curl_close($ch);

        $json_video    = json_decode($output);
        $thumbnail_url = $json_video->thumbnail_url;
        $thumbnail_url = strstr($thumbnail_url, '-d_', true);

        return $thumbnail_url . '-d_';
    }
    return null;
}
