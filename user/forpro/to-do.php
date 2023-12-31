
<?php
session_start();

if (!isset($_SESSION['admin'])) {
  header("location: login.php");
}
else {
    include('config.php');

?>
<? include('side.php');?>
<div class="card">
    <div class="card-body">
        <h4 class="mb-0">To Do List</h4>
        <hr/>
        <div class="row gy-3">
            <div class="col-md-10">
                <input id="todo-input" type="text" class="form-control" value="">
            </div>
            <div class="col-md-2 text-end d-grid">
                <button type="button" onclick="CreateTodo();" class="btn btn-light">Add todo</button>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col-12">
                <div id="todo-container"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
?>
<? include('footer.php');?>
<?php } ?>