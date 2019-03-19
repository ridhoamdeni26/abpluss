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
        <h2>Advertisement</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a></li>
              <li><a href="#">Settings 2</a></li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <form action="#" method="post" id="demo-form" data-parsley-validate>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="title" name="title" required="required" class="form-control" placeholder="Simple Wrap Branding">
            </div>
            <div class="clearfix"></div>
          </div>
          <br>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gps Type</label>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="checkbox" style="padding-right: 45px">
                <label>
                  <input type="checkbox" name="gps_car"> GPS in-car
                </label>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="checkbox" style="padding-right: 45px">
                <label>
                  <input type="checkbox" name="gps_hp"> GPS Mobile Phone
                </label>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Agent</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" name="agent" id="agent">
                <option value="ABPluss">ABPluss</option>
                <option value="option1">Option one</option>
                <option value="option2">Option two</option>
                <option value="option3">Option three</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Advertiser</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="advertiser" name="advertiser" required="required" class="form-control">
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">Description</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup"
                data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                data-parsley-validation-threshold="10" placeholder=" Tag Heuer - Simple Wrap Branding"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Ads</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" name="type_ads" id="type_ads">
                <option value="rear_window">Rear Window</option>
                <option value="option1">Option one</option>
                <option value="option2">Option two</option>
                <option value="option3">Option three</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Time Zone</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" name="time_zone" id="time_zone">
                <option value="+7">+7</option>
                <option value="+8">+8</option>
                <option value="+9">+9</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Duration</label>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="1" id="duration_1" name="duration" onclick="showOption(1);"> 1 Month
                </label>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="2" id="duration_2" name="duration" onclick="showOption(2);"> 2 Month
                </label>
              </div>
            </div>

            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_3" name="duration" onclick="showOption(3);"> 3 Month
                </label>
              </div>
            </div>

            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_6" name="duration" onclick="showOption(6);"> 6 Month
                </label>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_9" name="duration" onclick="showOption(9);"> 9 Month
                </label>
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="radio">
                <label>
                  <input type="radio" value="3" id="duration_12" name="duration" onclick="showOption(12);"> 12 Month
                </label>
              </div>
            </div>
            <br>
            <br>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period1">
              <label for="bonus_period_1">Bonus period 1</label>
              <input type="text" id="period_1" name="period_1" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period2">
              <label for="bonus_period_2">Bonus period 2</label>
              <input type="text" id="period_2" name="period_2" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period3">
              <label for="bonus_period_3">Bonus period 3</label>
              <input type="text" id="period_3" name="period_3" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period4">
              <label for="bonus_period_4">Bonus period 4</label>
              <input type="text" id="period_4" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period5">
              <label for="bonus_period_5">Bonus period 5</label>
              <input type="text" id="period_5" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period6">
              <label for="bonus_period_6">Bonus period 6</label>
              <input type="text" id="period_6" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period7">
              <label for="bonus_period_7">Bonus period 7</label>
              <input type="text" id="period_7" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period8">
              <label for="bonus_period_8">Bonus period 8</label>
              <input type="text" id="period_8" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period9">
              <label for="bonus_period_9">Bonus period 9</label>
              <input type="text" id="period_9" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period10">
              <label for="bonus_period_10">Bonus period 10</label>
              <input type="text" id="period_10" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period11">
              <label for="bonus_period_11">Bonus period 11</label>
              <input type="text" id="period_11" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="hidden col-md-3 col-sm-4 col-xs-12 form-group has-feedback" id="period12">
              <label for="bonus_period_12">Bonus period 12</label>
              <input type="text" id="period_12" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- </div> -->

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Term and Condition</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <div id="alerts"></div>
              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                <div class="btn-group">
                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  </ul>
                </div>

                <div class="btn-group">
                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b
                      class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a data-edit="fontSize 5">
                        <p style="font-size:17px">Huge</p>
                      </a>
                    </li>
                    <li>
                      <a data-edit="fontSize 3">
                        <p style="font-size:14px">Normal</p>
                      </a>
                    </li>
                    <li>
                      <a data-edit="fontSize 1">
                        <p style="font-size:11px">Small</p>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="btn-group">
                  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                </div>

                <div class="btn-group">
                  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                  <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                  <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                </div>

                <div class="btn-group">
                  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                </div>

                <div class="btn-group">
                  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                  <div class="dropdown-menu input-append">
                    <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                    <button class="btn" type="button">Add</button>
                  </div>
                  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                </div>

                <div class="btn-group">
                  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                  <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                </div>

                <div class="btn-group">
                  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                </div>
              </div>
              <!-- start editor -->
              <div id="editor-one" class="editor-wrapper"></div>
              <!-- start text area -->
              <textarea name="descr" id="descr" style="display:none;"></textarea>
              <br />
            </div>
            <div class="clearfix"></div>
          </div>
          <br>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Area Converage</label>
            <div class="col-md-9 col-sm-9 col-xs-12"></div>
            <div class="clearfix"></div>
          </div>

          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Province</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <select class="form-control" name="province_adv" id="province_adv">
                <option> - Choose Province - </option>
                <option value="jawa">Jawa</option>
                <option value="option1">Option one</option>
                <option value="option2">Option two</option>
                <option value="option3">Option three</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="city">City</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <select class="form-control" name="province_adv" id="province_adv">
                <option> - Choose City - </option>
                <option value="jakarta">Jakarta Pusat</option>
                <option value="option1">Jakarta Selatan</option>
                <option value="option2">Jakarta Barat</option>
                <option value="option3">Jakarta Timur</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <button type="button" class="btn btn-success">Add</button>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <select class="select2_multiple form-control" multiple="multiple">
                <option>Jakarta Pusat</option>
                <option>Option one</option>
                <option>Option two</option>
              </select>
            </div>
            <button type="button" class="btn btn-danger">Delete Area</button>
            <div class="clearfix"></div>
          </div>

          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">The Number of Vehicle</label>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <input type="number" id="number_vehicle" name="number_vehicle" required="required" class="form-control">
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Vehicle Type</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <select class="form-control" name="province_adv" id="province_adv">
                <option value="car">Car</option>
                <option value="option1">Option one</option>
                <option value="option2">Option two</option>
                <option value="option3">Option three</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="publish">Publish Start-End Date</label>
            <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
              <input type="text" id="pub_start" name="pub_start" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left"
                value="" placeholder="Date" />
              <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
              <input type="text" id="pub_end" name="pub_end" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left"
                value="" placeholder="Date" />
              <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="installation">Installation Start-End Date</label>
            <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
              <input type="text" id="ins_start" name="ins_start" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left"
                value="" placeholder="Date" />
              <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
              <input type="text" id="ins_end" name="ins_end" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left"
                value="" placeholder="Date" />
              <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="campaign">Campaign Start-End Date</label>
            <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
              <input type="text" id="cam_start" name="cam_start" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left"
                value="" placeholder="Date" />
              <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12 item has-feedback">
              <input type="text" id="cam_end" name="cam_end" required="required" class="form-control col-md-7 col-xs-12 dtpicker has-feedback-left"
                value="" placeholder="Date" />
              <span class="glyphicon glyphicon-calendar form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="min_mileage">Minimum Mileage</label>
            <div class="col-md-2 col-sm-4 col-xs-12 form-group has-feedback" id="period2">
              <input type="number" class="form-control has-feedback-right">
              <span class="form-control-feedback right" aria-hidden="true">KM</span>
            </div>

            <label class="control-label col-md-2 col-sm-3 col-xs-12" for="min_payment">Minimum Payment</label>
            <div class="col-md-2 col-sm-4 col-xs-12 form-group has-feedback" id="period2">
              <input type="text" id="min_payment" class="form-control has-feedback-left">
              <span class="form-control-feedback left" aria-hidden="true">Rp</span>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="special_campaign">Special Campaign Point</label>
            <div class="col-md-2 col-sm-4 col-xs-12 form-group" id="period2">
              <input type="number" class="form-control">
            </div>
            <div class="clearfix"></div>
          </div>
          <br>
          <br>

          <label class="control-label col-md-12 col-sm-12 col-xs-12" for="installation">Vehicle Converage</label>
          <br>
          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Vehicle Brand</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <select class="form-control" name="vehicle_brand" id="vehicle_brand">
                <option> - Choose Brand - </option>
                <option value="option">Option</option>
                <option value="option1">Option one</option>
                <option value="option2">Option two</option>
                <option value="option3">Option three</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="model">Model</label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <select class="form-control" name="vehicle_model" id="vehicle_model">
                <option> - Choose Model - </option>
                <option value="option">Option</option>
                <option value="option1">Option1</option>
                <option value="option2">Option2</option>
                <option value="option3">Option3</option>
                <option value="option4">Option four</option>
              </select>
            </div>
            <button type="button" class="btn btn-success">Add</button>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <select class="select2_multiple form-control" multiple="multiple">
                <option>C63 AMD</option>
                <option>Alphard</option>
                <option>AMG GT</option>
              </select>
            </div>
            <button type="button" class="btn btn-danger">Delete Car</button>
            <div class="clearfix"></div>
          </div>

          <div class="ln_solid"></div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="instal_address">Installation Address</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="instal_address" required="required" class="form-control" name="instal_address"
                data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100"
                data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                data-parsley-validation-threshold="10"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="instal_address">Picture Sample</label>
            <input type="file" name="pic" id="image-source" onchange="previewImage_picture();">
            <br>
            <div class="clearfix"></div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <img id="image-preview-picture" alt="image preview" />
            <div class="clearfix"></div>
          </div>

          <button type="button" class="btn btn-success">Update Ads</button>


        </form>


      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function previewImage_picture() {
    document.getElementById("image-preview-picture").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview-picture").src = oFREvent.target.result;
    };
  };
</script>

<script src="<?php echo base_url() ?>assets/select/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  function showOption(amount) {
    for (var i = 1; i <= 12; i++) {
      var ele = document.getElementById('period' + i);
      ele.classList.add('hidden')
    }
    for (var i = 1; i <= amount; i++) {
      var ele = document.getElementById('period' + i);
      ele.classList.remove('hidden')
    }
  }
</script>
<script type="text/javascript">
  $(document).ready(function () {
    $('#period_1').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_2').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_3').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_4').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_5').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_6').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_7').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_8').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_9').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_10').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_11').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#period_12').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
    $('#min_payment').maskMoney({
      thousands: '.',
      decimal: ',',
      precision: 0
    });
  });
</script>
<!-- script upload image -->
<script type="text/javascript">
  function previewImage_picture() {
    document.getElementById("image-preview-picture").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("image-preview-picture").src = oFREvent.target.result;
    };
  };
</script>