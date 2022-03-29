<?php
$obj_adminBack = new adminBack();

if (isset($_POST['u_banner_btn'])) {
    $msg = $obj_adminBack->updateBanner($_POST);
}
if (isset($_GET['status'])) {
    $id = $_GET['id'];
    if ($_GET['status'] == 'update') {
        $view_banner = $obj_adminBack->view_edit_banner($id);
    }
}
?>

<h2 class="mb-4">Upload Banner Image</h2>
<?php if (isset($msg)) {
    echo $msg;
} ?>



<form action="" method="POST" class="w-100 ctg-form" enctype="multipart/form-data">
    <input type="hidden" name="banner_id" value="<?php echo $view_banner['banner_id'] ?>">
    <div class="img-wrapper mx-auto">
        <div class="upload_image">
            <img id="upload_img" src="./../assets/images/banner/<?php echo $view_banner['banner_img'] ?>" alt="">
        </div>
        <div class="content">
            <span class="icon"><i class="fas fa-cloud-upload-alt"></i></span>
            <span class="no-file text--danger">No file Chosen yet! <br> [1920 * 1080]</span>
            <div id="cancel-button"><i class="fas fa-times"></i></div>
            <div class="file-name d-none">this is banner image</div>
        </div>
    </div>
    <button onclick="uploadBtnActive()" id="upload_btn" type="button" class="btn btn-primary w-100">Add Banner Image</button>
    <input name="u_banner_img" id="banner_img" type="file" class="form-control" placeholder="Enter Banner Image" hidden>
    <button name="u_banner_btn" type="submit" class="btn btn-primary w-100 mt-4">Upload Banner Image</button>
</form>



<script>
    const inputField = document.querySelector('#banner_img'),
        form = document.querySelector('form'),
        uploadImg = document.querySelector('#upload_img'),
        fileName = document.querySelector('.file-name'),
        imgWrapper = document.querySelector('.img-wrapper'),
        uploadBtn = document.querySelector('#upload_btn'),
        cancelBtn = document.querySelector('#cancel-button');
    let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;


    function uploadBtnActive() {
        inputField.click();
    }
    inputField.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                const result = reader.result;
                uploadImg.src = result;
                imgWrapper.classList.add("active");
                fileName.classList.add("d-block");
            }
            reader.readAsDataURL(file);
        }
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function() {
                uploadImg.src = "";
                fileName.textContent = "add a file !";
                imgWrapper.classList.remove("active");
            })
        }
        if (this.value) {
            let valueStore = this.value.match(regExp);
            fileName.textContent = valueStore;
        }
    })
</script>