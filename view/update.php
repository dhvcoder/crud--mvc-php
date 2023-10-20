<?php
    require_once './controller/employeeContr.php';
    if(isset($_GET['id_up'])){
      $id= $_GET['id_up'];
      $user1 = new EmployeeContr();
      $getbyID=$user1->getByID($id);
    }
?>


<!-- Form trong file HTML -->
<form class="mx-5 my-5" action="index.php?page_layout=employees" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="hidden" class="form-control" name="id_up" value="<?php echo $getbyID['id']; ?>">
    <input type="text" class="form-control" name="name_up" value="<?php echo $getbyID['name']; ?>">
    <input type="text" class="form-control" name="age_up" value="<?php echo $getbyID['age']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit_up">Update</button>
</form>