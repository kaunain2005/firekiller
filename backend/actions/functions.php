<?php
include 'lib/db-conn.php';
// Add Categories
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
        header('Location: ../view-categories.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
// Add Sub Categories
if (isset($_POST['add-sub-categories'])) {
    $cate_id = mt_rand(11111, 99999);
    $cate_name = $_POST['cate_name'];
    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $slug_url = SlugUrl($cate_name);
    $parent_id = $_POST['parent_id'];
    $added_on = date('M d, Y h:i:s A');
    $updated_on = date('M d, Y h:i:s A');
    echo $added_on;

    $sql = "INSERT INTO fk_sub_categories (cate_id, parent_id, cate_name, meta_title, meta_key, meta_desc, slug_url, status, added_on, updated_on) VALUES ('$cate_id', '$parent_id', '$cate_name', '$meta_title', '$meta_key', '$meta_desc', '$slug_url', 1, '$added_on', '$updated_on')";

    $check = mysqli_query($conn, $sql);
    if ($check) {
        header('Location: ../view-sub-categories.php');
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

// Get Categories Function
function getCategories()
{
    global $conn;
    $sql = "SELECT * FROM fk_categories ORDER BY id DESC";
    $check = mysqli_query($conn, $sql);
    $output = "";
    $sno = 1;
    while ($res = mysqli_fetch_assoc($check)) {
        $output .= "
            <tr>
                <td>" . $sno++ . "</td>
                <td>" . $res['cate_id'] . "</td>
                <td>" . $res['cate_name'] . "</td>
                <td>" . $res['slug_url'] . "</td>
                <td>" . $res['status'] . "</td>
                <td>" . $res['added_on'] . "</td>
                <td>" . $res['updated_on'] . "</td>
            </tr>
        ";
    }
    return $output;
}

// Get Sub Categories Function
function getSubCategories()
{
    global $conn;
    $sql = "SELECT * FROM fk_sub_categories ORDER BY id DESC";
    $check = mysqli_query($conn, $sql);
    $output = "";
    $sno = 1;
    while ($res = mysqli_fetch_assoc($check)) {
        $sql2 = "SELECT cate_name FROM fk_categories WHERE cate_id='" . $res['parent_id'] . "'";
        $check2 = mysqli_query($conn, $sql2);
        $parent_cat = mysqli_fetch_assoc($check2);
        $output .= "
            <tr>
                <td>" . $sno++ . "</td>
                <td>" . $res['cate_id'] . "</td>
                <td>" . $res['cate_name'] . "</td>
                <td>" . ucwords($parent_cat['cate_name']) . "</td>
                <td>" . ucwords($res['slug_url']) . "</td>
                <td>" . $res['status'] . "</td>
                <td>" . $res['added_on'] . "</td>
                <td>" . $res['updated_on'] . "</td>
            </tr>
        ";
    }
    return $output;
}
