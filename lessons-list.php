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
            <div class="content pt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right topic-path">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lessons</a></li>
                                        <li class="breadcrumb-item active">List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title topic-head">Lessons list</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="app-search">
                                                    <form>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" placeholder="Search...">
                                                            <span class="mdi mdi-magnify search-icon-bg"></span>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-search-bg" type="submit">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mb-3">
                                                    <label for="example-select">Category</label>
                                                    <select class="form-control" id="example-select">
                                                        <option>Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="example-palaceholder">Tag content</label>
                                                <select class="select2 form-control select2-multiple select2-hidden-accessible" data-toggle="select2" multiple="" data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                    <optgroup label="HTML">
                                                        <option value="AK">inline-tag</option>
                                                        <option value="HI">block-tag</option>
                                                    </optgroup>
                                                    <optgroup label="CSS">
                                                        <option value="CA">inline-css</option>
                                                        <option value="NV">inheritance-css</option>
                                                        <option value="OR">external-css</option>
                                                    </optgroup>
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row" data-plugin="dragula" data-containers="[&quot;handle-dragula-left&quot;, &quot;handle-dragula-right&quot;]" data-handleclass="dragula-handle">
                                            <div class="col-md-6">
                                                <div class="bg-dragula p-2 p-lg-4">
                                                    <h4 class="mt-0">Topics</h4>
                                                    <div id="handle-dragula-left" class="py-2">

                                                        <div class="card mb-0 mt-2">
                                                            <div class="card-body">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <h5 class="mb-1 mt-1">Louis K. Bond</h5>
                                                                        <p class="mb-0"> Founder &amp; CEO </p>
                                                                    </div> <!-- end media-body -->
                                                                    <span class="dragula-handle dragula-bg"></span>
                                                                </div> <!-- end media -->
                                                            </div> <!-- end card-body -->
                                                        </div> <!-- end col -->

                                                        <div class="card mb-0 mt-2">
                                                            <div class="card-body">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <h5 class="mb-1 mt-1">Dennis N. Cloutier</h5>
                                                                        <p class="mb-0"> Software Engineer </p>
                                                                    </div> <!-- end media-body -->
                                                                    <span class="dragula-handle dragula-bg"></span>
                                                                </div> <!-- end media -->
                                                            </div> <!-- end card-body -->
                                                        </div> <!-- end col -->

                                                        <div class="card mb-0 mt-2">
                                                            <div class="card-body">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <h5 class="mb-1 mt-1">Susan J. Sander</h5>
                                                                        <p class="mb-0"> Web Designer </p>
                                                                    </div> <!-- end media-body -->
                                                                    <span class="dragula-handle dragula-bg"></span>
                                                                </div> <!-- end media -->
                                                            </div> <!-- end card-body -->
                                                        </div> <!-- end col -->
                                                        
                                                    </div> <!-- end company-list-1-->
                                                </div> <!-- end div.bg-light-->
                                            </div> <!-- end col -->

                                            <div class="col-md-6">
                                                <div class="bg-dragula p-2 p-lg-4">
                                                    <h4 class="mt-0">Add lessons</h4>
                                                    <div id="handle-dragula-right" class="py-2">
                                                    
                                                    </div> <!-- end company-list-2-->
                                                </div> <!-- end div.bg-light-->
                                            </div> <!-- end col -->

                                        </div> <!-- end row -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
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

    <!-- dragula js-->
    <script src="assets/js/vendor/dragula.min.js"></script>

    <!-- component js -->
    <script src="assets/js/ui/component.dragula.js"></script>

</html>    