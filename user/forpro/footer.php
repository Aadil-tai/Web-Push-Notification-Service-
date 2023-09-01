<?php
session_start();

if (!isset($_SESSION['admin'])) {
  header("location: login.php");
}
else {
    include('config.php');
?>

<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <p class="mb-0">Gaussian Texture</p>
        <hr>
        <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
        </ul>
        <hr>
        <p class="mb-0">Gradient Background</p>
        <hr>
        <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
        </ul>
    </div>
</div>
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--app JS-->
<script src="assets/js/app.js"></script>
<script>
    // to do list 
     var todos = [{
        text: "take out the trash",
        done: false,
        id: 0
    }];
    var currentTodo = {
        text: "",
        done: false,
        id: 0
    }
    document.getElementById("todo-input").oninput = function (e) {
        currentTodo.text = e.target.value;
    };
    /*
        //jQuery Version
        $('#todo-input').on('input',function(e){
            currentTodo.text = e.target.value;
           });
        */
    function DrawTodo(todo) {
        var newTodoHTML = `
        <div class="pb-3 todo-item" todo-id="${todo.id}">
            <div class="input-group">
                
                    <div class="input-group-text">
                        <input type="checkbox" onchange="TodoChecked(${todo.id})" aria-label="Checkbox for following text input" ${todo.done&& "checked"}>
                    </div>
                
                <input type="text" readonly class="form-control ${todo.done&&" todo-done "} " aria-label="Text input with checkbox" value="${todo.text}">
                
                    <button todo-id="${todo.id}" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo(this);" id="button-addon2 ">X</button>
                
            </div>
        </div>
          `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML;
        document.getElementById("todo-container").appendChild(dummy.children[0]);
        /*
            //jQuery version
             var newTodo = $.parseHTML(newTodoHTML);
             $("#todo-container").append(newTodo);
            */
    }

    function RenderAllTodos() {
        var container = document.getElementById("todo-container");
        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }
        /*
            //jQuery version
              $("todo-container").empty();
            */
        for (var i = 0; i < todos.length; i++) {
            DrawTodo(todos[i]);
        }
    }
    RenderAllTodos();

    function DeleteTodo(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
            //jQuery version
              var deleteID = parseInt($(button).attr("todo-id"));
            */
        for (let i = 0; i < todos.length; i++) {
            if (todos[i].id === deleteID) {
                todos.splice(i, 1);
                RenderAllTodos();
                break;
            }
        }
    }

    function TodoChecked(id) {
        todos[id].done = !todos[id].done;
        RenderAllTodos();
    }

    function CreateTodo() {
        newtodo = {
            text: currentTodo.text,
            done: false,
            id: todos.length
        }
        todos.push(newtodo);
        RenderAllTodos();
    }
</script>
<?php } ?>