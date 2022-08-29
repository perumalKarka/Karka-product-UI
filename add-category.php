<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Karka-Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo-karka.png">
    
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    
    <!-- third party css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <?php include 'includes/nav.php'; ?>
    <div class="wrapper">
    <?php include 'includes/aside.php'; ?>
    <div class="content-page content-page-overview">
        <div class="container-fluid">       
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right topic-path">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Karka</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Topic</a></li>
                                <li class="breadcrumb-item active">Add Category</li>
                            </ol>
                        </div>
                        <h4 class="page-title topic-head">Category list</h4>
                    </div>
                </div>
            </div>
            <form action="/" method="post">  
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">        
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group mb-3">
                                            <label for="example-palaceholder">Category</label>
                                            <input type="text" id="example-palaceholder" class="form-control" placeholder="Enter new category">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div>
                                           <button type="button" class="btn mt-4 add-category-btn btn-bg-color">Add</button>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>   
                    </div>
                </div>
            </form> 
            <div class="row">
                <div class="col-xl-12">
                    <!-- <div class="card">
                        <div class="card-body"> -->
                        <div class="table-responsive-sm">
                                <table class="table table-striped table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>HTML</td>
                                                <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>CSS</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>javascript</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <!-- </div> 
                    </div> -->
                </div>
            </div>  
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>

    <!-- file preview template -->
            <div class="d-none" id="uploadPreviewTemplate">
                <div class="card mt-1 mb-0 shadow-none border">
                    <div class="p-2">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <img data-dz-thumbnail class="avatar-sm rounded bg-light" alt="">
                            </div>
                            <div class="col pl-0">
                                <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                                <p class="mb-0" data-dz-size></p>
                            </div>
                            <div class="col-auto">
                                <!-- Button -->
                                <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                    <i class="dripicons-cross"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</body>
     <!-- App js -->
     <script src="assets/js/app.min.js"></script>
     
</html>    