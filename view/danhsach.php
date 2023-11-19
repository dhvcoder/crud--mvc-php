<?php
require_once './controller/employeeContr.php';

function showData() {
    $employeeCt = new EmployeeContr();
    $employees = $employeeCt->getAllUser();
    $stt = 1;

    foreach ($employees as $employee) {
        echo ' <tr>
                    <th scope="row">'.$stt++.'</th>
                    <td>'.$employee['name'].'</td>
                    <td>'.$employee['age'].'</td>
                    <td>
                      <button type="button" class="btn btn-danger">
                        <a class="text-decoration-none text-white" href= "index.php?page_layout=employees&id='.$employee['id'].'">Delete</a>
                      </button>
                      <button type="button" class="btn btn-warning">
                        <a class="text-decoration-none text-white" href= "index.php?page_layout=indexContr&action=update&id_up='.$employee['id'].'">Update</a>
                      </button>
                     
                    </td>
                </tr>';
    }
}
?>

<div>
    <button type="button" class="btn btn-primary mx-2 mt-3">
      <a class="text-decoration-none text-white" href= "index.php?page_layout=indexContr&action=add">Create</a>
    </button>
</div>

<table class="table mx-2 my-3">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th class="" scope="col">Quan Li</th>
    </tr>
  </thead>
  <tbody>
        <?php
            showData();
        ?>
  </tbody>
</table>

<div class="card">
  <div class="card-header">
    Header
  </div>
  <div class="card-body">
  </div>
  <div class="card-footer text-muted">
    Footer
  </div>
</div>