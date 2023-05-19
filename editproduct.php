<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Product's - Side Lake Cafe</title>
        <!-- bootsrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- jquery -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <!-- CSS -->
        <link href="css/styles.css" rel="stylesheet"/>
        <!-- button -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- navbar Brand -->
            <a class="navbar-brand ps-3" href="index.html">
                <!-- Sidebar toggle -->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                    <i class="fas fa-bars"></i>
                </button>
            </a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 ">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
             <!-- Navbar-->
             <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <a class="nav-link" href="keranjang.html" role="button" aria-expanded="false"> <i class="fa-solid fa-basket-shopping"></i> </a>
                <a class="nav-link" role="button" aria-expanded="false"> Barista <i class="fas fa-user fa-fw"></i></a>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" aria-label="">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">
                                <img src="/assets/img/Picture1.png" alt="png">
                                <br><br>
                                <br>
                                <h5 class="nameCafe">
                                    Side Lake Cafe
                                </h5>
                            </div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"></div>
                                Menu Cafe
                            </a>
                            <a class="nav-link" href="product.html">
                                <div class="sb-nav-link-icon"></div>
                                Product Cafe
                            </a>
                            <a class="nav-link" href="StockUp.html">
                                <div class="sb-nav-link-icon"></i></div>
                                Stock Update
                            </a>
                            <a class="nav-link" href="StockDown.html">
                                <div class="sb-nav-link-icon"></i></div>
                                Stock Log
                            </a>
                        </div>
                        
                    </div>
                    <div class="buttonLogout justify-content-lg-center d-flex m-3 p-4">
                        <button type="button" class="btn btn-danger">Logout</button>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Barista
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <div id="dialog">
                    <h2>Update Item Berhasil</h2>
                </div>
                <main>
                    <!-- isi form -->
                    <div class="container">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div class="text-start mt-3 p-lg-2">
                                        <a href="javascript:window.history.back();" style="color: black; text-decoration: none; font-size: large;"> <i class="fa-solid fa-arrow-left"></i> &nbspBack </a>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col">
                                                <h1>Edit Product</h1>
                                            </div>
                                            <div class="col-md-15 py-2">
                                                <form>
                                                    <input hidden type="text" name="InputId" id="InputId" value="<?php echo $_GET["menu_id"];?>">
                                                    <div class="mb-3">
                                                      <label for="InputName" class="form-label">Nama Product</label>
                                                      <input type="text" class="form-control" id="InputName">
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="InputName" class="form-label">Harga Product(Rp)</label>
                                                      <input type="number" class="form-control" id="InputPrice">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="InputName" class="form-label">Kategori</label>
                                                        <select class="form-select" aria-label="Default select example" id="InputCategory">
                                                            <option selected>Pilih satuan</option>
                                                            <option value="Coffee">Coffee</option>
                                                            <option value="Non-Coffee">Non-Coffee</option>
                                                            <option value="Ice">Ice</option>
                                                            <option value="Non-Ice">Non-Ice</option>
                                                          </select>
                                                    </div>
                                                    <div class="text-end">
                                                        <button id="submit" type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                  </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="js/date.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            var dialog;

            dialog = $("#dialog").dialog({
                autoOpen : false,
                height : 500,
                witdh : 350,
                modal : true,
                buttons : {
                    Cancel : () => {
                        dialog.dialog("close")
                        location.replace("product.html")
                    }
                }
            })

            $.ajax({
                url : `http://localhost:3000/api/v1/menu/${$("#InputId").val()}`,
                method : "GET",
                success : (data) => {
                    data.data.map((val, i) => {
                        $("#InputName").val(val.menu_name)
                        $("#InputPrice").val(val.menu_price)
                        $("#InputCategory").val(val.menu_category)
                    })
                }
            })

            $("#submit").click((e) => {
                e.preventDefault()

                $.ajax({
                    url : "https://attractive-wetsuit-pig.cyclic.app/api/v1/menu/post",
                    method : "POST",
                    data : {
                        id : $("#InputId").val(),
                        name : $("#InputName").val(),
                        price : $("#InputPrice").val(),
                        category : $("#InputCategory").val()
                    },
                    success : (data) => {
                        console.log(data);
                        dialog.dialog("open")
                    }
                })
            })
        </script>
    </body>
</html>