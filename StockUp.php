<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>StockUpCafe- Side Lake Cafe</title>
        <!-- bootsrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
       <!-- jquery -->
       <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
       <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" />
        <!-- icon -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- css -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <style>
            .dataTables_empty{
                display: none;
            }
        </style>
        <script>
            $(document).ready( function () {
                $('#example').DataTable();
            });
        </script>
        
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
                                <div class="sb-nav-link-icon"></i></div>
                                Menu Cafe
                            </a>
                            <a class="nav-link" href="product.html">
                                <div class="sb-nav-link-icon"></i></div>
                                Product Cafe
                            </a>
                            <a class="nav-link" href="StockUp.php">
                                <div class="sb-nav-link-icon"></i></div>
                                Stock Up Cafe
                            </a>
                            <a class="nav-link" href="StockDown.html">
                                <div class="sb-nav-link-icon"></i></div>
                                Stock Down Cafe
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
                        </div>
                        <div class="modal-body">
                            Produk Terhapus
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">StockUpname</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Menu</a></li>
                            <li class="breadcrumb-item active">StockUpname</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Tabel Pemasukaan Barang</h2>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <a href="AddStock.html" class="btn btn-success"> 
                                            <i class="fa-solid fa-circle-plus fa-sm" style="color: #ffffff;"></i>
                                            <span>Tambah Barang </span>
                                        </a>					
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-hover" style="width:100%; text-align: center;" >
                                    <thead style="position: sticky !important; top: 56px; background: white;">
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Nama Barang</th>
                                            <th style="text-align: center;">Stock Tersedia</th>
                                            <th style="text-align: center;">Satuan</th>
                                            <th style="text-align: center;">Expired</th>
                                            <th style="text-align: center;">Last Update</th>
                                            <th style="text-align: center;">Update</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="js/table.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            const getDataTable = () => {
                $.ajax({
                    url : "https://attractive-wetsuit-pig.cyclic.app/api/v1/item/stockup",
                    method : "GET",
                    success: (data) => {
                        data.data.map((val, i) => {
                            $("<tr>", {
                                html : `<td>${i + 1} </td>
                                        <td>${val.item_name}</td>
                                        <td>${val.item_stock}</td>
                                        <td>${val.item_satuan}</td>
                                        <td>
                                            <span class="badge text-bg-danger">${val.item_expired}</span>
                                        </td>
                                        <td>
                                            <span class="badge text-bg-warning">${val.item_lastupdate}</span>
                                        </td>
                                        <td>
                                            <form action="formstock.php" method="get">
                                                <input type="text" name="item_id" id="item_id" value="${val.item_id}" hidden>
                                                <button type="submit" class="btn btn-secondary">
                                                    <i class="fa-solid fa-pen-to-square" style="color: #f7f7f8;"></i>
                                                </button>
                                        </form>
                                        </td>
                                        <td>
                                            <button type="button" id="del${val.item_id}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash" style="color: #f9fafa;"></i>
                                            </button>
                                        </td>`
                            }).appendTo($("#table-body"))

                            $(`#del${val.item_id}`).click((e) => {
                                e.preventDefault()

                                $.ajax({
                                    url : `https://attractive-wetsuit-pig.cyclic.app/api/v1/item/stockup/delete`,
                                    method : "POST",
                                    data : {
                                        "itemId" : val.item_id
                                    },
                                    success : (data) => {
                                        location.reload()
                                    },
                                    error : (err) => {
                                        console.log(err);
                                    }
                                })
                            })
                            console.log(val);
                        })
                    }
                })
            }

            getDataTable()
        </script>
        
    </body>
</html>
