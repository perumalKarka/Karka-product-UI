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
    <div class="wrapper">
        <?php include 'includes/nav.php'; ?>
        <?php include 'includes/aside.php'; ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right topic-path">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Karka</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Topic</a></li>
                                        <li class="breadcrumb-item active">Topic Table</li>
                                    </ol>
                                </div>
                                <h4 class="page-title topic-head">Topic Table</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive-sm">
                                <table class="table table-striped table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Tags content</th>
                                            <th>Text content</th>
                                            <th>Category</th>
                                            <th>File</th>
                                            <th>Video and Web link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-user">
                                                Risa D. Pearson
                                            </td>
                                            <td>AC336 508 2157</td>
                                            <td>July 24, 1950</td>
                                            <td>HTML</td>
                                            <td>AC336 508 2157</td>
                                            <td>July 24, 1950</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-user">
                                                Ann C. Thompson
                                            </td>
                                            <td>SB646 473 2057</td>
                                            <td>January 25, 1959</td>
                                            <td>Css</td>
                                            <td>AC336 508 2157</td>
                                            <td>July 24, 1950</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-user">
                                                Paul J. Friend
                                            </td>
                                            <td>DL281 308 0793</td>
                                            <td>September 1, 1939</td>
                                            <td>Js</td>
                                            <td>AC336 508 2157</td>
                                            <td>July 24, 1950</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-user">
                                                Sean C. Nguyen
                                            </td>
                                            <td>CA269 714 6825</td>
                                            <td>February 5, 1994</td>
                                            <td>React</td>
                                            <td>AC336 508 2157</td>
                                            <td>July 24, 1950</td>
                                            <td class="table-action">
                                                <a href="new-topic.php" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php' ?>
    </div>
</body>
     <!-- App js -->
     <script src="assets/js/app.min.js"></script>
     
     <!-- Dropzone js -->
     <script src="assets/js/vendor/dropzone.min.js"></script>

      <!-- File upload js -->
      <script src="assets/js/ui/component.fileupload.js"></script>

        <!-- demo app -->
        <script src="assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->
</html>    