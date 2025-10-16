<?php
include '../lib/db-conn.php';
if (isset($_POST['add-categories'])) {
    $cate_id = mt_rand(11111, 99999);
    $cate_name = $_POST['cate_name'];
    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $slug_url = SlugUrl($cate_name);
    $added_on = date('M d, Y h:i:s A');
    $updated_on = date('M d, Y h:i:s A');
    echo $added_on;

    $sql = "INSERT INTO fk_categories (cate_id, cate_name, meta_title, meta_key, meta_desc, slug_url, status, added_on, updated_on) VALUES ('$cate_id', '$cate_name', '$meta_title', '$meta_key', '$meta_desc', '$slug_url', 1, '$added_on', '$updated_on')";

    $check = mysqli_query($conn, $sql);
    if ($check) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function SlugUrl($string)
{
    $slug = trim($string); // trim the string
    $slug = preg_replace('/[^a-zA-Z0-9 -]/', '', $slug); // only take alphanumerical characters, but keep the spaces and dashes too ...
    $slug = str_replace(' ', '-', $slug); // replace spaces by dashes
    $slug = strtolower($slug); // make it lowercase
    return $slug;
}
