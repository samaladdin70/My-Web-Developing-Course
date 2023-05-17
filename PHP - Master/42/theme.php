<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- End Bootstrap -->

    <link rel="stylesheet" href="./css/style.css">
    <title>Tasks</title>
</head>

<body>
    <div class="container d-flex flex-column vh-100 py-1">
        <header class="bg-secondary text-white d-flex justify-content-center align-items-center w-100">
            <h2>My Tasks</h2>
        </header>
        <form action="" class="my-3">
            <div class="input-group">
                <input type="text" name="" id="" class="form-control task-input">
                <button type="submit" class="btn btn-secondary">ADD</button>
            </div>
        </form>
        <main>
            <div class="row shadow-sm px-2 ">
                <div class="col-8 task">
                    <input type="checkbox" name="" id="" class="form-check ms-2">
                    <h4>Task1</h4>
                </div>
                <div class="col-4 group">
                    <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete">delete</a>
                    <a href="" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#edit">edit</a>
                </div>

                <!-- Modals Start -->
                <!-- delete Modal -->
                <!-- Modal  -->
                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
                    style="direction: ltr;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Task</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are You Sure ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End delete modal -->
                <!-- modal edit -->
                <!-- Modal  -->
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
                    style="direction: ltr;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Task</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="my-3">
                                    <div class="input-group">
                                        <input type="text" name="" id="" class="form-control task-input">
                                        <button type="submit" class="btn btn-secondary">Update</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal edit -->
                <!-- End Modals -->
            </div>
            <div class="row shadow-sm px-2 ">
                <div class="col-8 task">
                    <input type="checkbox" name="" id="" class="form-check ms-2">
                    <h4>Task2</h4>
                </div>
                <div class="col-4 group">
                    <a href="" class="btn btn-sm btn-danger">delete</a>
                    <a href="" class="btn btn-sm btn-info">edit</a>
                </div>
            </div>
            <div class="row shadow-sm px-2 ">
                <div class="col-8 task">
                    <input type="checkbox" name="" id="" class="form-check ms-2">
                    <h4>Task3</h4>
                </div>
                <div class="col-4 group">
                    <a href="" class="btn btn-sm btn-danger">delete</a>
                    <a href="" class="btn btn-sm btn-info">edit</a>
                </div>
            </div>
            <div class="row shadow-sm px-2 ">
                <div class="col-8 task">
                    <input type="checkbox" name="" id="" class="form-check ms-2">
                    <h4>Task4</h4>
                </div>
                <div class="col-4 group">
                    <a href="" class="btn btn-sm btn-danger">delete</a>
                    <a href="" class="btn btn-sm btn-info">edit</a>
                </div>
            </div>

        </main>
        <footer class="d-flex justify-content-center align-items-center w-100">
            &copy; Aladdin
        </footer>
    </div>
    <script src="./js/app.js"></script>
</body>

</html>