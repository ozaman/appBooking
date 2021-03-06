<?php
header('Content-type: text/html; charset=utf-8');
echo link_tag('files/css/classic.css');
echo link_tag('files/css/classic.date.css');
$json = json_encode($results);
$adate = date('Y-m-d');
$date = date("Y-m-d",strtotime("-1 month",strtotime($adate)));
$latedate = date("Y-m-t",strtotime($adate));
if ($_COOKIE['lng'] == 'en') {
  //echo 'en';
  $lng_search_order = 'Search by order (e.x. 7033496)';
  $paysuccess = 'Already paid';
  $pend = 'Pending';
  $norecord = 'No Record';
  $owe = '';
  $paydriver = 'Pay Driver';
  $paynow = 'Pay Now';
  $myod = 'My Order';
  $friendod = 'Reference Order';
}
else if ($_COOKIE['lng'] == 'th' || !$_COOKIE['lng']) {
  //echo 'th';
  $lng_search_order = 'ค้นหาตามใบสั่งซื้อ (e.x. 7033496)';
  $paysuccess = 'ชำระแล้ว';
  $pend = 'รอดำเนินการ';
  $norecord = 'ไม่มีการบันทึก';
  $owe = '';
  $paydriver = 'จ่ายกับคนขับ';
  $paynow = 'จ่ายตอนนี้';
  $myod = 'ออร์เดอร์ของฉัน';
  $friendod = 'ออร์เดอร์แนะนำ';
}
else if ($_COOKIE['lng'] == 'cn') {
  // echo 'cn';
  $lng_search_order = '按订单搜索（e.x. 7033496）';
  $paysuccess = '等待付款';
  $pend = '有待';
  $norecord = '没有记录';
  $owe = '';
  $paydriver = '薪酬司机';
  $paynow = '現在付款';
  $myod = '我的訂單';
  $friendod = '參考訂單';
}
?>
<script type="text/javascript" src="<?php echo base_url();?>files/js/picker.js?v=<?=time()?>">
</script>
<script type="text/javascript" src="<?php echo base_url();?>files/js/picker.date.js?v=<?=time()?>">
</script>

<style>

  /* The container */
  .container-cb {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default checkbox */
  .container-cb input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }

  /* Create a custom checkbox */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 5px;
  }

  /* On mouse-over, add a grey background color */
  .container-cb:hover input ~ .checkmark {
    background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */
  .container-cb input:checked ~ .checkmark {
    background-color: #3b5998;
  }

  /* Create the checkmark/indicator (hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */
  .container-cb input:checked ~ .checkmark:after {
    display: block;
  }

  /* Style the checkmark/indicator */
  .container-cb .checkmark:after {
    left: 8px;
    top: 2px;
    width: 10px;
    height: 16px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  /* Progress Bar */
  .progress {
    position: relative;
    height: 4px;
    display: block;
    width: 100%;
    background-color: #acece6;
    border-radius: 2px;
    background-clip: padding-box;
    margin: 0.5rem 0 1rem 0;
    overflow: hidden; }
  .progress .determinate {
    position: absolute;
    background-color: inherit;
    top: 0;
    bottom: 0;
    background-color: #26a69a;
    transition: width .3s linear; }
  .progress .indeterminate {
    background-color: #26a69a; }
  .progress .indeterminate:before {
    content: '';
    position: absolute;
    background-color: inherit;
    top: 0;
    left: 0;
    bottom: 0;
    will-change: left, right;
    -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite; }
  .progress .indeterminate:after {
    content: '';
    position: absolute;
    background-color: inherit;
    top: 0;
    left: 0;
    bottom: 0;
    will-change: left, right;
    -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s; }

  @-webkit-keyframes indeterminate {
    0% {
      left: -35%;
      right: 100%; }
    60% {
      left: 100%;
      right: -90%; }
    100% {
      left: 100%;
      right: -90%; } }
  @keyframes indeterminate {
    0% {
      left: -35%;
      right: 100%; }
    60% {
      left: 100%;
      right: -90%; }
    100% {
      left: 100%;
      right: -90%; } }
  @-webkit-keyframes indeterminate-short {
    0% {
      left: -200%;
      right: 100%; }
    60% {
      left: 107%;
      right: -8%; }
    100% {
      left: 107%;
      right: -8%; } }
  @keyframes indeterminate-short {
    0% {
      left: -200%;
      right: 100%; }
    60% {
      left: 107%;
      right: -8%; }
    100% {
      left: 107%;
      right: -8%; } }
  .confirm {
    text-align: center;
    background-color: rgb(35, 53, 91) !important;
    width: 100px !important;
    border-radius: 25px !important;
  }

  .cancel {
    padding: 10px 0 !important;
    text-align: center;
    background-color: #C1C1C1 !important;
    width: 100px !important;
    border-radius: 25px !important;
  }

  .btn-close {
    /* width: 200px; */
    /*    background: #4BB1C1;*/
    background: #3b5998;
    /* text-transform: uppercase; */
    text-align: center;
    color: #ffffff;
    border: 1px solid #3b5998;
    /* position: absolute; */
    right: 15px;
    padding: 12px 20px;
    bottom: 15px;
    border-radius: 25px;
  }

  .btn-silver {
    background-color: #777;
  }

  /* .modal-transparent */

  .modal-transparent {
    background: transparent;
  }

  .modal-transparent .modal-content {
    background: transparent;
  }

  .modal-backdrop.modal-backdrop-transparent {
    background: #ffffff;
  }

  .modal-backdrop.modal-backdrop-transparent.in {
    opacity: .9;
    filter: alpha(opacity=90);
  }

  /* .modal-fullscreen */

  .modal-fullscreen {
    background: transparent;
  }

  .modal-fullscreen .modal-content {
    background: transparent;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .modal-backdrop.modal-backdrop-fullscreen {
    background: #ffffff;
  }

  .modal-backdrop.modal-backdrop-fullscreen.in {
    opacity: .97;
    filter: alpha(opacity=97);
  }

  /* .modal-fullscreen size: we use Bootstrap media query breakpoints */

  .modal-fullscreen .modal-dialog {
    margin: 0;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
  }

  @media (min-width: 768px) {
    .modal-fullscreen .modal-dialog {
      width: 750px;
    }
  }

  @media (min-width: 992px) {
    .modal-fullscreen .modal-dialog {
      width: 970px;
    }
  }

  @media (min-width: 1200px) {
    .modal-fullscreen .modal-dialog {
      width: 1170px;
    }
  }
</style>
<script>
  $(document).ready(function () {
    $("#user_view").addClass("active");
    var base_url = '<?php echo base_url();?>';

    $(window).scroll(function () {
      var scrollTop = $(this).scrollTop();

      var check = $(document).height() / 3;
      if ($(window).scrollTop() + $(window).height() >= $(document).height() - 400) {
        $('#top-end_btn').show(700);
      }
      if (scrollTop <= 200) {
        $('#top-end_btn').hide(700);
      }
    });

  });
</script>


<style>
  .end-page {
    position: fixed;
    left: auto;
    right: 0;
    top: 260px;
    opacity: .9;
    z-index: 3;
    padding: 1rem;
    overflow-y: auto;
    cursor: default;
  }

  .top-page {
    position: fixed;
    left: auto;
    right: 0;
    /* top: 160px; */
    bottom: 150px;
    opacity: .9;
    z-index: 3;
    padding: 10px;
    overflow-y: auto;
    /* cursor: default; */
    background: #c5bfbf;
  }

  .table-responsive {
    margin-bottom: 0 !important;
    border: none !important;
  }

  @media screen and (max-width: 767px) {
    #bodyClick {
      right: 229px !important;
    }
  }
</style>
<section>

  <div class="container" style="padding: 0 10px;margin-top: 40px;margin-bottom: 100px;">
    <h4 class="lng-booking-infomation" style="text-align: center; margin-bottom: 15px;"></h4>
    <div style="display: none;" id="top-end_btn"> 
      <div class="top-page " style="" onclick="scrollWin('top');" style="cursor: pointer; display: none;"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    </div>

    <div class="toolbar" style="    background: #ffffff;
         padding: 8px;
         margin-bottom: 10px;">
      <div class="input-group" style="display: block;">
        <table width="100%">
          <tr>
            <td width="49%">
              <input id="date1" class="datepicker" name="date" type="text" value="<?=$date;?>" style="    width: 100%;
                     padding: 10px;
                     border: 1px solid #3b5998;
                     border-radius: 25px;">
            </td>
            <td width="2%"></td>
            <td width="49%">
              <input id="date2" class="datepicker" name="date" type="text" value="<?=$latedate;?>" style="    width: 100%;
                     padding: 10px;
                     border: 1px solid #3b5998;
                     border-radius: 25px;">
            </td>
          </tr>
        </table>
        <div style="  margin: 15px 0;
             margin-bottom: 0;">
          <input id="search_order" class="" name="date" type="text" value="" onkeyup="search()" placeholder="<? echo $lng_search_order;?>" style="padding: 10px;
                 border: 1px solid #3b5998;
                 border-radius: 25px;
                 width: 100%;">

        </div>

      </div>
    </div>
    <div class="">

      <div style="padding: 5px 20px;">
        <table width="100%">
          <tr>
            <td>
              <label class="container-cb"><?=$myod;?>
                <input type="checkbox" checked="checked" onclick="selectOrderCat(this, 0);" >
                <span class="checkmark"></span>
              </label>
            </td>
            <td>
              <label class="container-cb"><?=$friendod;?>
                <input type="checkbox" onclick="selectOrderCat(this, 1);">
                <span class="checkmark"></span>
              </label>
            </td>
          </tr>
          <input type="hidden" value="0" id="category" />
        </table>
      </div>

      <div style="padding: 8px;
           border-radius: 12px;
           border: 1px solid #3b5998;">

        <style>
          .tr-hover:hover {
            /*    color: hotpink;*/
            color: #038cfc;
            /*background-color: #f96c3e;*/
            cursor: pointer;
          }

          .tr-hover {
            text-align: center;
          }

          .pagination.pagination-info>.active>a,
          .pagination.pagination-info>.active>a:focus,
          .pagination.pagination-info>.active>a:hover,
          .pagination.pagination-info>.active>span,
          .pagination.pagination-info>.active>span:focus,
          .pagination.pagination-info>.active>span:hover {
            background-color: #07c284;
            ;
            border-color: #00bcd4;
            box-shadow: 0 4px 5px 0 rgba(0, 188, 212, .14), 0 1px 10px 0 rgba(0, 188, 212, .12), 0 2px 4px -1px rgba(0, 188, 212, .2)
          }

          .inputDate::placeholder {
            color: rgba(51, 51, 51, 0.57);
          }

          .inputDate {
            display: block;
            width: 100%;
            padding: .5rem .75rem;
            /* font-size: 1rem; */
            line-height: 1.25;
            color: #464a4c;
            background-color: #fff;
            background-image: none;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 0.25rem;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
          }

          .btn-voucher {

            display: block;

            text-decoration: none;
            cursor: pointer;

            text-align: center;
            color: #ffffff;
            background-color: #3b5998;
            border-radius: 25px;
          }

          .display-none {
            display: none;
          }

          .btn-custom-pay {
            border-radius: 25px;
            background-color: #4caf50;
            display: block;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            color: #ffffff;
          }

          input::-webkit-input-placeholder,
          textarea::-webkit-input-placeholder {
            color: #333;
          }

          input:-moz-placeholder,
          textarea:-moz-placeholder {
            color: #333;
          }

          input::-moz-placeholder,
          textarea::-moz-placeholder {
            color: #333;
          }

          input:-ms-input-placeholder,
          textarea:-ms-input-placeholder {
            color: #333;
          }
        </style>
        <?php if ($levelme == 1) {?>
          <div class="table-responsive">
            <table id="bootstrap-table1" class="table table-hover">
              <thead>
                  <!-- <th data-field="state" data-checkbox="true" style="display: none;"></th>-->
              <th class="text-center">
                <p>ID</p>
              </th>
              <th data-sortable="true" class="text-center">
                <p class="lng-name_d">Name</p>
              </th>
              <th data-sortable="true" class="text-center ">
                <p class="lng-username_d">UserName</p>
              </th>
              <th data-sortable="true" class="text-center email">
                <p class="lng-email_d">Email</p>
              </th>
              <th data-sortable="true" class="text-center Cr">
                <p class="lng-cr_d">Cutomer Reference</p>
              </th>
              <th data-field="actions" class="td-actions text-center code" data-events="operateEvents" data-formatter="operateFormatter">
                <p class="lng-code_d">Code</p>
              </th>
              <th data-sortable="true" class="text-center">
                <p class="lng-amount_d">Amount</p>
              </th>
              </thead>
              <tbody style="display: none;" class="data-row">
                <?php foreach ($results as $show) {?>
                  <tr class="tr-hover" onclick="view_ref('<?=$show['i_id'];?>', '<?=$show['s_code'];?>');">
                      <!--<td style="display: none;"></td>-->
                    <td>
                      <?=$show['i_id'];?>
                    </td>
                    <td>
                      <?=$show['s_name'];?>
                    </td>
                    <td>
                      <?=$show['s_username'];?>
                    </td>
                    <td>
                      <?=$show['s_email'];?>
                    </td>
                    <td>
                      <?=$show['num_ref'];?>
                    </td>
                    <td>
                      <?=$show['s_code'];?>
                    </td>
                    <td>
                      <?=$show['total_am'];?>
                    </td>
                  </tr>
                <?php }?>

              </tbody>
            </table>
          </div>
        <?php }
        ?>
        <div class="table-responsive">
          <table id="bootstrap-table" class="table table-hover">
            <thead style="background: #ddd;">
            <th class="text-center "><span class="lng-date"></span></th>
            <center></center>
            <th class="text-center"><span class="lng-order"></span></th>
            <th class="text-center"><span class="lng-payment"></span></th>
            </thead>

            <tbody style="display: nones;" class="data-row" id="tb_data_lv2">
            </tbody>
          </table>
        </div>

      </div> <!-- end col-md-12 -->
    </div>
</section>


<style>
  .dialog {
    z-index: 300;
    position: fixed;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    /* padding: 15px; */
    background: #f5f5f5;
    display: none;
    overflow: auto;
  }
</style>
<!-- -->
<div class="dialog" id="dialog">
  <div id="show_order"></div>
</div>

<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal_showdata">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--End Modal -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-fullscreen" id="open_modal" style="display: none;">Open Modal</button>



<script>
  var first_run = false;
  var process_bar = '<tr><td colspan="3"><div class="progress"><div class="indeterminate"></div></div></td></tr>';

  $('#tb_data_lv2').html(process_bar);
  function search() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("search_order");
    filter = input.value.toUpperCase();
    table = document.getElementById("bootstrap-table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  function view_order_level2(order_id, type) {
    console.log(type)
    //			$( "#show_order" ).html( '<div align="center" ><img src="'+base_url+'dasboard/ring.gif" /></div>' );
    $("#show_order").html('<div align="center" ></div>');
    $('#loading').css('display', 'block');
    $('#content').css('display', 'none');

    $.post("https://www.welovetaxi.com/app/booking2/dashboard/voucher?order_id=" + order_id, {
      check: "yes"
    }, function (data) {
      $('#loading').css('display', 'none');
      $('#content').css('display', 'block');
      $("#show_order").html(data);

      //					console.log(data);


    });
    // $('#sectionsNav').hide();
    $('#dialog').show();
    $('body').css('overflow', 'hidden');
    //	$('#open_modal').click();
  }
  $(".modal-fullscreen").on('show.bs.modal', function () {
    setTimeout(function () {
      $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    }, 0);
  });
  $(".modal-fullscreen").on('hidden.bs.modal', function () {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  });

  $(document).ready(function () {
//                            console.log(<?=$json;?>);
    // findRowDate();
    findBookingBetweenDate();
//                            alert();
  });

  function findRowDate() {
    //		alert(555);
    console.log('findRowDate');
    $('tr[class="tr-hover"]').css('display', '');


    var dateFrom = $('#date1').val();
    var dataTo = $('#date2').val();
    var result;

    var arry = [];
    $('#bootstrap-table tr[class="tr-hover"]').each(function (i, el) {
      var dataCheck = $(this).find('td').eq(0).text();

      result = checkBetween(dateFrom, dataTo, dataCheck);

      console.log(dataCheck + " : " + result);
      if (result == false) {
        //		  	$(this).css('background-color','red');

        $(this).css('display', 'none');
      }
    });


    //	    var rows = $("#bootstrap-table  tr[class='tr-hover']:not('.display-none')");
    //	    var rows = $("#bootstrap-table  tr[class='tr-hover']").css('display');

    var rows = $("tr[class='tr-hover']").filter(function () {
      return $(this).css('display') !== 'none';
    }).length;
    //	    alert(rows);

    if (rows <= 0) {
      $('.no-record').css('display', '');
    } else {
      $('.no-record').css('display', 'none');
    }
    $('.data-row').show();
  }

  function checkBetween(dateFrom, dateTo, dateCheck) {

    var dateFrom = formatDate(dateFrom);
    var dateCheck = formatDate(dateCheck);
    var dateTo = formatDate(dateTo);


    var d1 = dateFrom.split("/");
    var d2 = dateTo.split("/");
    var c = dateCheck.split("/");

    var from = new Date(d1[2], parseInt(d1[1]) - 1, d1[0]); // -1 because months are from 0 to 11
    var to = new Date(d2[2], parseInt(d2[1]) - 1, d2[0]);
    var check = new Date(c[2], parseInt(c[1]) - 1, c[0]);

    //	console.log(check <= to );
    //	console.log(" :::" + dateFrom+' | '+dateCheck+' | '+dateTo );
    var date_before_to = check <= to;
    var date_behind_from = check >= from;
    console.log(date_before_to + " :: " + date_behind_from);
    var result_check = false;
    if (date_before_to == true && date_behind_from == true) {
      result_check = true;
    }
    //		return (check => from && check <= to);
    return result_check;

  }

  function formatDate(input) {

    var datePart = input.match(/\d+/g),
            year = datePart[0].substring(0), // get only two digits
            month = datePart[1],
            day = datePart[2];

    return day + '/' + month + '/' + year;
  }

  function scrollWin(type) {
    if (type == "top") {
      $('#top-end_btn').hide(700);
      $('html, body').animate({
        scrollTop: 0
      }, '500');
      //window.scrollTo(0,document.body.scrollHeight-document.body.scrollHeight);

    } else if (type == "end") {
      window.scrollTo(0, document.body.scrollHeight);
    }

  }

  $('.picker__frame').append('<div style="position: fixed; padding: 0 12px; width: 100%;bottom: 12px;" class="close_pickerdate"><div class="btn-close lng-close">Close</div></div>');

  $('.close_pickerdate').click(function () {

    var $input = $('#date1').pickadate();
    var picker = $input.pickadate('picker');
    picker.close();

    var $input2 = $('#date2').pickadate();
    var picker2 = $input2.pickadate('picker');
    picker2.close();
  });

  function findBookingBetweenDate() {

    $('#tb_data_lv2').html(process_bar);
    var d1 = $('#date1').val();
    var d2 = $('#date2').val();
    var category = $('#category').val();

    console.log(d1 + " : " + d2);

    var url = base_url + "dashboard/find_booking";
    var param = {
      d1: d1,
      d2: d2,
      category: category
    };
    console.log(param);
    $.ajax({
      type: 'POST',
      url: url,
      data: param,
      cache: false,
//					          contentType: false,
//					          processData: false,
      dataType: 'json',
      beforeSend: function () {
      },
      success: function (obj) {
        console.log(obj)
        var res = obj.results;
        console.log('----------------------')
        console.log(res)
        $('#tb_data_lv2').html('');

        if (res.length <= 0) {
          $('.no-record').show();
          return;
        } else {
          $('.no-record').hide();
        }
        $.each(res, function (index, value) {
          console.log(value);
          if (value.invoice != "" && value.invoice != null && value.invoice != "") {
            var class_btn = "btn-voucher";
          } else {
            var class_btn = "";
          }

          var txt_status_pay = '';
          if (value.status_pay == 0) {
            if (value.status_pay_driver == 1) {
              txt_status_pay = "<?=$paydriver;?>";
            } else {
              txt_status_pay = '<a class=" btn-xs btn-custom-pay" style="font-size: 15px;" href="https://www.welovetaxi.com/app/booking2/dashboard/payment?data=' + value.invoice + '&type=' + value.type + '"><span class="lng-paynow"><?=$paynow;?></span></a>';
            }
          } else if (value.status_pay == 1) {
            txt_status_pay = "<?=$paysuccess;?>";
          }
          else if (value.status_pay == 2) {
            txt_status_pay = "<?=$paysuccess;?>";
          }
          
          if(value.i_status_complete == 1){
            var icon_completed = '<i class="fa fa-check-circle" aria-hidden="true" style="color:#4caf50;position: absolute;left: 23px;margin-top: 1px;" ></i>';
          }else{
             var icon_completed = '';
          }
          var html =
                  '<tr class="tr-hover">'
                  + '<td>'+icon_completed
                  + '<span class="date_time">' + value.date_time + '</span>'
                  + '</td>'
                  + '<td>'
                  + '<div class="' + class_btn + '" onclick="view_order_level2(' + value.invoice + ',\'' + value.type + '\');">'
                  + '<span class="invoice">' + value.invoice + '</span>'
                  + '</div>'
                  + '</td>'
                  + '<td>'
//										         +value.status_pay+" : "+value.status_pay_driver
                  + txt_status_pay
                  + '</td>'
                  + '</tr>';
          $('#tb_data_lv2').append(html);

        });
        first_run = true;
      },
      error: function (data) {
        console.log(data);
      }
    });

  }

  function selectOrderCat(el, category) {
    $('#category').val(category);
    $("input[type='checkbox']").prop("checked", false);
//							console.log(el);
    $(el).prop("checked", true);
    findBookingBetweenDate();
  }
</script>

<script>

  var date = $('#date1').val();
  $('#date1').pickadate({
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy/mm/dd',
    closeOnSelect: true,
    closeOnClear: false,
    "showButtonPanel": false,
    onStart: function () {
      this.set('select', date);
      //            findRowDate();// Set to current date on load
      //            setTimeout(function(){  findRowDate(); }, 1000);
    },
    onSet: function (context) {
      //		 		findRowDate();
      if (first_run == true) {
        setTimeout(function () {

          findBookingBetweenDate();

        }, 1000);
      }


    }
  });
</script>

<script>
  var date = $('#date2').val();
  $('#date2').pickadate({
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy/mm/dd',
    closeOnSelect: true,
    closeOnClear: false,
    "showButtonPanel": false,
    onStart: function () {
      this.set('select', date);
      //            findRowDate();// Set to current date on load
      //setTimeout(function(){  findRowDate(); }, 1000);
    },
    onSet: function (context) {
      //		 		findRowDate();
      if (first_run == true) {
        setTimeout(function () {

          findBookingBetweenDate();

        }, 1000);
      }


    }
  });
</script>