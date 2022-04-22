<?php
  // variable declaration. These variables will be used in the cat form
  $id_cat = 0;
  $cat_name = "";
  $cat_desc = "";

  //$email = "";
  //$password = "";
  //$passwordConf = "";
  //$profile_picture = "";
  $isEditing = false;
  $cats = array();
  $errors = array();

  function getAllcats(){
    global $conn;
    $sql = "SELECT id, category_name, details FROM category";
    $cats = getMultipleRecords($sql);
    return $cats;
  }


  // ACTION: update cat
  if (isset($_cat['update_cat'])) {
      $id_cat = $_cat['id_cat'];
      updatecat($id_cat);
  }
  // ACTION: Save cat
  if (isset($_POST['save_cat'])) {
      savecat();
  }
  // ACTION: fetch cat for editting
  if (isset($_GET["edit_cat"])) {
    $id_cat = $_GET['edit_cat'];
    editcat($id_cat);
  }
  // ACTION: Delete cat
  if (isset($_GET['delete_cat'])) {
    $id_cat = $_GET['delete_cat'];
    deletecat($id_cat);
  }
  // Save cat to database
  function savecat(){
    global $conn,  $cat_nombre;
    $errors = validateCat($_POST, ['save_cat']);
    if (count($errors) === 0) {
       // receive form values
       $cat_nombre = $_POST['nombre'];
       //$id_cat = $_cat['cat_id'];
       $sql = "INSERT INTO categories SET nombre=?";
       $result = modifyRecord($sql, 's', [$cat_nombre]);

       if ($result) {
         $_SESSION['success_msg'] = "cat created successfully";
         header("location: " . BASE_URL . "admin/cats/catList.php");
         exit(0);
       } else {
         $_SESSION['error_msg'] = "Something went wrong. Could not save cat in Database";
       }
    }
  }
  function updatecat($id_cat){
    global $conn,  $nombre, $isEditting; // pull in global form variables into function
    $errors = validatecat($_cat, ['update_cat']); // validate form
    if (count($errors) === 0) {
      // receive form values
      $nombre = $_cat['nombre'];
      $id_cat = $_cat['cat_id'];
      $sql = "UPDATE cats SET nombre=?, cat_id=? WHERE id=?";
      $result = modifyRecord($sql, 'ssi', [$nombre, $id_cat, $id_cat]);

      if ($result) {
        $_SESSION['success_msg'] = "cat successfully updated";
        $isEditting = false;
        header("location: " . BASE_URL . "admin/cats/catList.php");
        exit(0);
      } else {
        $_SESSION['error_msg'] = "Something went wrong. Could not save cat in Database";
      }
    }
  }
  function editcat($id_cat){
    global $conn, $nombre, $id_cat, $isEditting;
    $sql = "SELECT * FROM cats WHERE id=? LIMIT 1";
    $cat = getSingleRecord($sql, 'i', [$id_cat]);

    $id_cat = $cat['id'];
    $nombre = $cat['nombre'];
    $id_cat = $cat['cat_id'];
    $isEditting = true;
  }

  function deletecat($id_cat) {
    global $conn;
    $sql = "DELETE FROM cats WHERE id=?";
    $result = modifyRecord($sql, 'i', [$id_cat]);
    if ($result) {
      $_SESSION['success_msg'] = "cat trashed!!";
      header("location: " . BASE_URL . "admin/cats/catList.php");
      exit(0);
    }
  }
