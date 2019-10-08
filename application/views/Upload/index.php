<div class="">
    <div class="page-title">
        <div class="title_left">
        </div>
    </div>
</div>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Report Photo</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Plat Nomor</th>
                            <th>Foto 1</th>
                            <th>Foto 2</th>
                            <th>Foto 3</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo site_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var SITE_URL = "<?php echo site_url()?>";

        var table = $('#example').DataTable({
            ajax: {
                "url": SITE_URL + 'assets/test.json',
                "type": "GET",
                "cache": true,
                "dataSrc": "data"
            },

            columns: [{
                    data: 'id'
                },
                {
                    data: 'nomor_plat'
                },
                {
                    data: "foto",
                    "render": function (data, type, row) {
                        if (row.foto === "") {
                            return '<img height="25%" width="25%" src="<?php echo base_url() ?>assets/build/images/no-photo.png">'
                        } else {
                            return '<img height="50%" width="50%" src="' + row.foto + '">'
                        }
                    }
                },
                {
                    data: "foto2",
                    "render": function (data, type, row) {
                        if (row.foto2 === "") {
                            return '<img height="25%" width="25%" src="<?php echo base_url() ?>assets/build/images/no-photo.png">'
                        } else {
                            return '<img height="50%" width="50%" src="' + row.foto2 + '">'
                        }
                    }
                },
                {
                    data: "foto3",
                    "render": function (data, type, row) {
                        if (row.foto3 === "") {
                            return '<img height="25%" width="25%" src="<?php echo base_url() ?>assets/build/images/no-photo.png">'
                        } else {
                            return '<img height="50%" width="50%" src="' + row.foto3 + '">'
                        }
                    }
                }
            ],
            columnDefs: [{
                orderable: false,
                targets: [2, 3, 4],
            }]
        })
    });
</script>