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

    <!--Include the JS & CSS-->
    <link rel="stylesheet" href="assets/richtexteditor/richtexteditor/rte_theme_default.css" />
    
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
                                <li class="breadcrumb-item active">Add Topic</li>
                            </ol>
                        </div>
                        <h4 class="page-title topic-head">Libray topic</h4>
                    </div>
                </div>
            </div>
            <form action="/" method="post" class="dz-clickable" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">  
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">        
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-palaceholder">Title</label>
                                            <input type="text" id="example-palaceholder" class="form-control" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                <div class="row mt-4 mb-4">
                                    <div class="col-xl-12">
                                        <label for="example-palaceholder">Text content</label>
                                        <div id="div_editor1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="card">
                            <div class="card-body"> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-select">Content</label>
                                            <select class="form-control" id="example-select">
                                                <option>Select</option>
                                                <option>File</option>
                                                <option>JPG & PNG</option>
                                                <option>Video Url</option>
                                                <option>Web link</option>                                        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-palaceholder">Link</label>
                                            <input type="text" id="example-palaceholder" class="form-control" placeholder="Enter Link">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="example-select">Category</label>
                                            <select class="form-control" id="example-select">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-12">
                                        <label for="example-select">File upload</label>
                                            <div class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">
                                                    <strong>PDF and Document only Upload</strong>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label for="example-textarea">Purpose of file</label>
                                            <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </form> 
            <div class="modal-footer model-footer-view">
                    <button type="button" class="btn my-2 btn-bg-color">Add</button>
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
     
     <!-- Dropzone js -->
     <script src="assets/js/vendor/dropzone.min.js"></script>

      <!-- File upload js -->
      <script src="assets/js/ui/component.fileupload.js"></script>

      <!-- Typehead -->
      <script src="assets/js/vendor/handlebars.min.js"></script>
      <script src="assets/js/vendor/typeahead.bundle.min.js"></script>
      
      <!-- Demo -->
      <script src="assets/js/pages/demo.typehead.js"></script>


      <!-- risk tetx editer js -->
      <script type="text/javascript" src="./assets/richtexteditor/richtexteditor/rte.js"></script>
      <script type="text/javascript" src="./assets/richtexteditor/richtexteditor/plugins/all_plugins.js"></script>
      
      <script>
        var editor1 = new RichTextEditor("#div_editor1");
        //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
      </script>
</html>    