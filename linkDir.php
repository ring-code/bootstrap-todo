<?php
/**
 * Checks the given directory for sub-directories and creates links to them in an unordered list.
 * @param object $dir the directory to search
 * @returns unordered list of links to the subdirs
 */
function linkDir($dir) {
    $items = scandir($dir);
    //filter out directories
    $links = array_filter($items, function($item) use ($dir) {
        return is_dir($dir . '/' . $item) && $item !== '.' && $item !== '..';
    });

    //generate links
    $output = '<ul>';
    foreach ($links as $link) {
        $output .= "<li><a href='" . htmlspecialchars($dir . $link) . "'>" . htmlspecialchars($link) . "</a></li>";
    }
    $output .= '</ul>';
    
    return $output;
}

?>