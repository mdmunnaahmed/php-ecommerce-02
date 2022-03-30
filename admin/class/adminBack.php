<?php
class adminBack
{
    private $conn;
    public function __construct()
    {
        $dbhost = "127.0.0.1";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "ecom02";

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Error");
        }
    }

    // Login Logout Method
    function admin_login($data)
    {
        $admin_email =  $_POST['admin_email'];
        $admin_pass =  md5($_POST['admin_pass']);

        $query = "SELECT * FROM adminLog WHERE admin_email = '$admin_email' AND admin_pass = '$admin_pass'";

        if (mysqli_query($this->conn, $query)) {
            $result = mysqli_query($this->conn, $query);
            $admin_info = mysqli_fetch_assoc($result);

            if ($admin_info) {
                header("Location: dashboard.php");
                session_start();
                $_SESSION['id'] = $admin_info['id'];
                $_SESSION['admin_email'] = $admin_info['admin_email'];
            } else {
                $msg = "Your Username or Password is Incorrect";
                return $msg;
            }
        }
    }
    function adminLogout()
    {
        unset($_SESSION['id']);
        header('location: index.php');
    }


    // Category Method
    function add_category($data)
    {
        $ctg_name = $data['ctg_name'];
        $ctg_icon = $data['ctg_icon'];
        $ctg_des = $data['ctg_des'];
        $ctg_status = $data['ctg_status'];

        $query = "INSERT INTO category(ctg_name, ctg_icon, ctg_des, ctg_status) VALUE ('$ctg_name', '$ctg_icon', '$ctg_des', $ctg_status)";
        if (!"ctg_name" == $ctg_name) {
            if (mysqli_query($this->conn, $query)) {
                $message = "Category Added Successfully";
                return $message;
                header('location:manage-category.php');
            } else {
                $message = "Failded to Add Categroy";
                return $message;
            }
        } else {
            $message = "This Category is Already in Category List";
            return $message;
        }
    }

    function displayCategory()
    {
        $query = "SELECT * FROM category";
        if (mysqli_query($this->conn, $query)) {
            $result_ctg = mysqli_query($this->conn, $query);
            return $result_ctg;
        } else {
            echo "Couldn't Load Data Correctly";
        }
    }

    function publishedDisplayCategory()
    {
        $query = "SELECT * FROM category WHERE ctg_status = 1";
        if (mysqli_query($this->conn, $query)) {
            $result_ctg = mysqli_query($this->conn, $query);
            return $result_ctg;
        } else {
            echo "Couldn't Fetch Data Correctly";
        }
    }

    function publishCategory($id)
    {
        $query = "UPDATE category SET ctg_status=1 WHERE ctg_id=$id";
        mysqli_query($this->conn, $query);
        $msg = "Category Successfully Published";
        return $msg;
    }
    function unPublishCategory($id)
    {
        $query = "UPDATE category SET ctg_status=0 WHERE ctg_id=$id";
        mysqli_query($this->conn, $query);
        $msg = "Category Successfully Unpublished";
        return $msg;
    }

    function deleteCategory($id)
    {
        $query = "DELETE FROM category WHERE ctg_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Category Successfully Deleted";
            return $msg;
        }
    }

    function editToShow($id)
    {
        $query = "SELECT * FROM category WHERE ctg_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $cat_info = mysqli_query($this->conn, $query);
            $cat_fetch = mysqli_fetch_assoc($cat_info);
            return $cat_fetch;
        }
    }

    function updateCategory($recieve_data)
    {
        $id = $recieve_data['ctg_id'];
        $ctg_name = $recieve_data['u_ctg_name'];
        $ctg_des = $recieve_data['u_ctg_des'];
        $ctg_status = $recieve_data['u_ctg_status'];

        $query = "UPDATE category SET ctg_name = '$ctg_name', ctg_des = '$ctg_des', ctg_status = $ctg_status WHERE ctg_id = '$id' ";
        if (!"ctg_name" == $ctg_name) {
            if (mysqli_query($this->conn, $query)) {
                $msg = "Category Successfully Updated";
                return $msg;
            }
        } else {
            $message = "This Category is Already in Category List";
            return $message;
        }
    }

    function addProduct($recieve_data)
    {
        $product_name = $recieve_data['product_name'];
        $product_price = $recieve_data['product_price'];
        $product_des = $recieve_data['product_des'];
        $product_ctg = $recieve_data['product_ctg'];

        $product_img_name = $_FILES['product_img']['name'];
        $product_img_size = $_FILES['product_img']['size'];
        $product_img_tmp_name = $_FILES['product_img']['tmp_name'];
        $product_ext = pathinfo($product_img_name, PATHINFO_EXTENSION);

        $product_type = $recieve_data['product_type'];
        $product_status = $recieve_data['product_status'];

        if ($product_ext == 'png' or $product_ext == 'jpg' or $product_ext == 'jpeg') {
            if ($product_img_size <= 20097152) {

                $query = "INSERT INTO products(product_name, product_price, product_des, product_ctg, product_img, product_type ,product_status) VALUE ('$product_name',  $product_price, '$product_des', $product_ctg, '$product_img_name', $product_type, $product_status)";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($product_img_tmp_name, './../assets/images/products/' . $product_img_name);
                    $msg = "Product Added Successfully";
                    return $msg;
                } else {
                    $msg = "Faild to add Product";
                    return $msg;
                }
            } else {
                $msg = "your file size should be less than 2Mib";
                return $msg;
            }
        } else {
            $msg = "Your file format not supported";
            return $msg;
        }
    }

    function displayProduct()
    {
        $query = "SELECT * FROM products_details_info";
        if (mysqli_query($this->conn, $query)) {
            $product = mysqli_query($this->conn, $query);
            return $product;
        }
    }

    function displayFeatureProduct()
    {
        $query = "SELECT * FROM products_details_info WHERE product_type = 1";
        if (mysqli_query($this->conn, $query)) {
            $product = mysqli_query($this->conn, $query);
            return $product;
        }
    }

    function displayTrandingProduct()
    {
        $query = "SELECT * FROM products_details_info WHERE product_type = 2";
        if (mysqli_query($this->conn, $query)) {
            $product = mysqli_query($this->conn, $query);
            return $product;
        }
    }

    function displayHotProduct()
    {
        $query = "SELECT * FROM products_details_info WHERE product_type = 3 LIMIT 5";
        if (mysqli_query($this->conn, $query)) {
            $product = mysqli_query($this->conn, $query);
            return $product;
        }
    }

    function displayLatestProduct()
    {
        $query = "SELECT * FROM products_details_info WHERE product_type = 4";
        if (mysqli_query($this->conn, $query)) {
            $product = mysqli_query($this->conn, $query);
            return $product;
        }
    }

    function deleteProduct($data)
    {
        $query = "DELETE FROM products WHERE product_id = $data";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Product has been successfully deleted";
            return $msg;
        }
    }

    function getEditProduct($id)
    {
        $query = "SELECT * FROM products_details_info WHERE product_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $product_info = mysqli_query($this->conn, $query);
            $product_data = mysqli_fetch_assoc($product_info);
            return $product_data;
        }
    }

    function updateSingleProduct($recieve_data)
    {
        $id = $recieve_data['product_id'];
        $product_name = $recieve_data['u_product_name'];
        $product_price = $recieve_data['u_product_price'];
        $product_des = $recieve_data['u_product_des'];

        $product_img_name = $_FILES['u_product_img']['name'];
        $product_img_size = $_FILES['u_product_img']['size'];
        $product_img_tmp_name = $_FILES['u_product_img']['tmp_name'];
        $product_ext = pathinfo($product_img_name, PATHINFO_EXTENSION);

        $product_ctg = $recieve_data['u_product_ctg'];
        $product_status = $recieve_data['u_product_status'];

        if ($product_ext == 'png' or $product_ext == 'jpg' or $product_ext == 'jpeg') {
            if ($product_img_size <= 20097152) {

                $query = "UPDATE products SET product_name = '$product_name', product_price = $product_price, product_des = '$product_des', product_img = '$product_img_name', product_ctg = '$product_ctg', product_status = $product_status WHERE product_id = $id";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($product_img_tmp_name, 'upload/' . $product_img_name);
                    $msg = "Product Updated Successfully";
                    return $msg;
                } else {
                    $msg = "Faild to add Product";
                    return $msg;
                }
            } else {
                $msg = "your file size should be less than 2Mib";
                return $msg;
            }
        } else {
            $msg = "Your file format not supported";
            return $msg;
        }
    }

    function view_product_by_ctg($id)
    {
        $query = "SELECT * FROM products_details_info WHERE ctg_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $pro_info = mysqli_query($this->conn, $query);
            return $pro_info;
        }
    }

    function view_single_product($id)
    {

        $query = "SELECT * FROM products_details_info WHERE product_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $pro_info = mysqli_query($this->conn, $query);
            return $pro_info;
        }
    }

    function view_ctg($id)
    {
        $query = "SELECT * FROM products_details_info WHERE id = $id";
        if (mysqli_query($this->conn, $query)) {
            $pro_info = mysqli_query($this->conn, $query);
            $ctg_info = mysqli_fetch_assoc($pro_info);
            return $ctg_info;
        }
    }


    // Front-end Starts
    function addBanner($image_info)
    {
        $banner_img_name = $_FILES['banner_img']['name'];
        $banner_img_size = $_FILES['banner_img']['size'];
        $banner_img_tmp_name = $_FILES['banner_img']['tmp_name'];
        $banner_ext = pathinfo($banner_img_name, PATHINFO_EXTENSION);

        if ($banner_ext == 'png' or $banner_ext == 'jpg' or $banner_ext == 'jpeg') {
            if ($banner_img_size <= 20097152) {

                $query = "INSERT INTO banner(banner_img) VALUE ('$banner_img_name')";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($banner_img_tmp_name, './../assets/images/banner/' . $banner_img_name);
                    $msg = "Banner Image Successfully Uploaded";
                    return $msg;
                } else {
                    $msg = "Faild to add";
                    return $msg;
                }
            } else {
                $msg = "Your file size should be less than 2Mib";
                return $msg;
            }
        } else {
            $msg = "Your file format not supported";
            return $msg;
        }
    }

    function view_banner()
    {
        $query = "SELECT * FROM banner";
        if (mysqli_query($this->conn, $query)) {
            $banner_info = mysqli_query($this->conn, $query);
            return $banner_info;
        }
    }

    function view_edit_banner($id)
    {
        $query = "SELECT * FROM banner WHERE banner_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $banner_info = mysqli_query($this->conn, $query);
            $banner_info = mysqli_fetch_assoc($banner_info);
            return $banner_info;
        }
    }

    function deleteBanner($id)
    {
        $query = "DELETE FROM banner WHERE banner_id = $id";
        if (mysqli_query($this->conn, $query)) {
            $msg = "Banner Successfully Deleted";
            return $msg;
        }
    }

    function updateBanner($id)
    {
        $banner_id = $id['banner_id'];
        $banner_img_name = $_FILES['u_banner_img']['name'];
        $banner_img_size = $_FILES['u_banner_img']['size'];
        $banner_img_tmp_name = $_FILES['u_banner_img']['tmp_name'];
        $banner_ext = pathinfo($banner_img_name, PATHINFO_EXTENSION);

        if ($banner_ext == 'png' or $banner_ext == 'jpg' or $banner_ext == 'jpeg') {
            if ($banner_img_size <= 20097152) {

                $query = "UPDATE banner SET banner_img = '$banner_img_name' WHERE banner_id = $banner_id";

                if (mysqli_query($this->conn, $query)) {
                    move_uploaded_file($banner_img_tmp_name, './../assets/images/banner/' . $banner_img_name);
                    $msg = "Banner Image Successfully Updated";
                    return $msg;
                } else {
                    $msg = "Faild to add";
                    return $msg;
                }
            } else {
                $msg = "Your file size should be less than 2Mib";
                return $msg;
            }
        } else {
            $msg = "Your file format not supported";
            return $msg;
        }
    }
}
