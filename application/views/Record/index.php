<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile fixed">
            <div class="x_title">
                <h2>Dashboard</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
            <br>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table id="record" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Plat</th>
                                <th>Last Update</th>
                                <th>Detail Record</th>
                            </tr>
                        </thead>
                        <tbody id="tableLicenses">
                        </tbody>
                    </table>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="recordModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Route</h4>
            </div>
            <div class="modal-body">
                <div id="googleHeatMap" style="width:100%;height:700px;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script>
    var SITE_URL = "http://marugame.abplusscar.com/";
    var licenses;
    $(document).ready(function () {
        prepareTable()
        getLicenses()
        initMap()
    });

    function prepareTable() {
        $('#record').DataTable({
            "searching": true,
        });
    }

    function getLicenses() {
        $.ajax({
            url: SITE_URL + 'gps/record/all/',
            method: 'get',
            dataType: 'json',
            async: false,
            cache: false,
            success: function (result) {
                var data = result['results'][0]['data']
                var table_licenses = ''
                for (var i = 0; i < data.length; i++) {
                    var beach = data[i];
                    // console.log(beach['created_date'])
                    // console.log(beach['license_no'])
                    table_licenses += "<tr><td>" + (i + 1) +
                        "</td><td>" +
                        beach['license_no'] +
                        "</td>"
                    table_licenses += "<td>" +
                        beach['created_date'] +
                        "</td>"
                    table_licenses += "<td>" + "<button type='button'" +
                        "class='btn btn-info' data-toggle='modal'" +
                        "onclick='getRecord(" + '"' + beach['license_no'] + '"' + ")'" +
                        "data-target='#recordModal'>Detail</button>" +
                        "</td></tr>"
                }
                $('#record').DataTable().destroy()
                $('#tableLicenses').html(table_licenses);
                prepareTable()
            }
        });
    }
    var allRecordData;
    var mapCenter = {
        lat: -6.21462,
        lng: 106.84513
    };
    var marker;
    var map;
    var currentIndex = 0;
    var iterateTimeout;

    function getRecord(license_no) {
        $.ajax({
            url: SITE_URL + 'gps/record/' + license_no + '/',
            method: 'get',
            dataType: 'json',
            async: false,
            cache: false,
            success: function (result) {
                var data = result['results'][0]['data']
                var table_licenses = ''
                for (var i = 0; i < data.length; i++) {
                    var beach = data[i];
                    if (i == 0) {
                        mapCenter = {
                            lat: parseFloat(beach['lat']),
                            lng: parseFloat(beach['lng'])
                        };
                    }
                }
                clearTimeout(iterateTimeout)
                deleteMarkers()
                allRecordData = data
                map.setCenter(mapCenter)
                placeMarker()
                currentIndex += 1;
                iterateTimeout = setTimeout(function () {
                    iterateRecord()
                }, 6000);
            }
        });
    }
</script>
<script>
    function iterateRecord() {
        var beach = allRecordData[currentIndex]
        mapCenter = {
            lat: parseFloat(beach['lat']),
            lng: parseFloat(beach['lng'])
        };
        // console.log(mapCenter)
        deleteMarkers()
        map.setCenter(mapCenter)
        placeMarker()
        currentIndex += 1;
        if (currentIndex < allRecordData.length) {
            iterateTimeout = setTimeout(function () {
                iterateRecord()
            }, 300);
        }
    }

    function deleteMarkers() {
        marker.setMap(null);
    };

    function placeMarker() {
        marker = new google.maps.Marker({
            position: mapCenter,
            map: map,
            icon: "../assets/build/images/mobil.png",
        });
    }

    function initMap() {
        // The map, centered at Uluru
        map = new google.maps.Map(
            document.getElementById('googleHeatMap'), {
                zoom: 20,
                gestureHandling: 'greedy',
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: mapCenter
            });
        // The marker, positioned at Uluru
        placeMarker()
    }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj7tSdjukVN4virXCXLUnKLJ4UR_gXVG0&callback=initMap">
</script>