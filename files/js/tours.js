
var base_url = 'https://www.welovetaxi.com/app/booking2/';
var dataitem;
var itemTourforpro = [];
var itemTourforproid =[];
var dataitemdetail;
var getpricetour,time_around,headertour,bath;
var slideIndex = 1;
var optiondate;
var dateon = [];
var date_on = [];
var product_item,getlng,product_id;
var c_transfer,paramtour,id_placeto,id_place,name_placeto,name_place,start_time,date,ontime = '00:00',passnotransfer = 0;
//var myVar = setInterval(plusDivs(1),5000);
var region = '';
console.log(optiondate)
console.log(optiondate)

$(document).ready(function() {
    if($.cookie("lng") == undefined){
    getlng = 'en'
}
else{
    getlng = $.cookie("lng")
}
if($.cookie("type") == 'Tour'){
    $('.box-list').hide(500);
    $('.box-history').hide(500);
}
getProvince();

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }
    console.log(getParameterByName('section'))
    $('.btn_back_tour').click( function() {
         $('#get_html_book_tours').hide(500);
    });
    $('#num_adult_tour').on('change', function() {
        num_adult = this.value;
        ondate = $('#on_date').val();
        $('#ondate_samary_tour').html(ondate)
        $('#adultsummary_tour').html(num_adult)
        $('#childsummary_tour').html(num_child)
        total_adult = parseInt(getpricetour) * parseInt(num_adult);
        total_price = parseInt(total_adult) + parseInt(total_child);
        sum_adult_child = parseInt(num_adult) + parseInt(num_child);
        console.log(sum_adult_child)
        console.log(total_adult)
        console.log(getpricetour)
       
            $('#sumnum_tour').html(parseInt(sum_adult_child));
            $('#totalprice_tour').html(total_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
            
            $('#numsumprice_tour').html(total_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
        
    })
    $('#num_child_tour').on('change', function() {
        num_child = this.value;
        ondate = $('#on_date').val();

        $('#ondate_samary_tour').html(ondate)
        $('#childsummary_tour').html(num_child)
        total_child = parseInt(getpricetour) * parseInt(num_child);
        total_price = parseInt(total_adult) + parseInt(total_child);
        sum_adult_child = parseInt(num_adult) + parseInt(num_child);
        console.log(sum_adult_child)
        console.log(checksumperson)
       
        
       
       
            $('#sumnum_tour').html(parseInt(sum_adult_child));
            $('#selectcar_tour').html(selectcar)
            $('#checksum_tour').html(checksumperson)
            
            $('#numsumprice_tour').html(total_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
        
    })

    $('.select_round').on('change', function() {
       
        time_around = this.value;
        
        console.log(time_around)
        
    });
$('#on_date2').each(function() {
        var val = $(this).val();
        date = moment(val).toDate();
    });
// if (dateon[0] == 1) {//
//       x0 = 0;
//     }
//     else{
//       x0 = null;
//     }
//     if (dateon[1] ==1) {
//       x1 = 1;
//     }
//     else{
//       x1 = null;
//     }
//     if (dateon[2] == 1) {
//       x2 = 2;
//     }
//     else{
//       x2 = null;
//     }
//     if (dateon[3] == 1) {
//       x3 = 3;
//     }
//     else{
//       x3 = null;
//     }
//     if (dateon[4] == 1) {
//       x4 = 4;
//     }
//     else{
//       x4 = null;
//     }
//     if (dateon[5] == 1) {
//       x5 = 5;
//     }
//     else{
//       x5 = null;
//     }
//     if (dateon[6] == 1) {
//       x6 = 6;
//     }
//     else{
//       x6 = null;
//     }
    $('#on_date2').pickadate({
         //disable: date_on,
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
        closeOnSelect: true,
        closeOnClear: false,
        selectMonths: true,
        selectYears: true,
        min:true,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        }
    //     beforeShowDay: function(date){
    //   var day = date.getDay();
    //  return [ day == x0 ||
    //           day == x1 ||
    //           day == x2 ||
    //           day == x3 ||
    //           day == x4 ||
    //           day == x5 ||
    //           day == x6,'']; 
    // }
    });

    $('#search-place').keyup(function() {
        dataplace = ''
        
        input = document.getElementById("search-place");
        console.log(input.value)
        if (input.value.length >= 3) {
            $.ajax({
                type: 'POST',
                url: base_url+'service/servicepro.php',
                data: { 'input': input.value.toLowerCase() },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    dataplace = data
                    var setpicupbox = '';
                    if (data.length > 0) {
                        console.log(data.length)
                        $('.box-picupfrom').css('display', 'block')
                        // sendValuetojs(data);
                        $.each(dataplace, function(i, val) {
                            setpicupbox += '<li class="sendpicup" id="transferplace' + dataplace[i].id + '" dataname ="' + dataplace[i].topic + '" lat_f="' + dataplace[i].latitude + '" lng_f="' + dataplace[i].longitude + '" datapro="' + dataplace[i].pro + '" dataaum="' + dataplace[i].pro + '"onclick="sendpicup(\'' + dataplace[i].id + '\',\'' + dataplace[i].topic + '\');"><i class="material-icons " style="float: left; margin-right: 15px;font-size: 30px; color: #3b599;">add_location</i><div style="margin-left: 40px;"><span class="name">' + dataplace[i].topic + '</span><br><span style="text-align: left;font-size:13px;">' + dataplace[i].address + '</div></li>';

                        });
                        $('#box-picupfrom').html(setpicupbox)
                    } else if (data.length <= 0 || input.value == '') {
                        $('.box-picupfrom').css('display', 'none');
                    }
                }
            });
        } else {
            $('#box-picupfrom').html('');
            $('.box-picupfrom').css('display', 'none');
        }
    });
    $('#search-place-to').keyup(function() {
        dataplace = ''
        
        input = document.getElementById("search-place-to");
        console.log(input.value)
        if (input.value.length >= 3) {
            $.ajax({
                type: 'POST',
                url: base_url+'service/servicepro.php',
                data: { 'input': input.value.toLowerCase() },
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    dataplace = data
                    var setpicupbox = '';
                    if (data.length > 0) {
                        console.log(data.length)
                        $('.box-picupto').css('display', 'block')
                        // sendValuetojs(data);
                        $.each(dataplace, function(i, val) {
                            setpicupbox += '<li class="sendpicup" id="transferplaceto' + dataplace[i].id + '" dataname ="' + dataplace[i].topic + '" lat_f="' + dataplace[i].latitude + '" lng_f="' + dataplace[i].longitude + '" datapro="' + dataplace[i].pro + '" dataaum="' + dataplace[i].pro + '"onclick="sendpicupto(\'' + dataplace[i].id + '\',\'' + dataplace[i].topic + '\');"><i class="material-icons " style="float: left; margin-right: 15px;font-size: 30px; color: #3b599;">add_location</i><div style="margin-left: 40px;"><span class="name">' + dataplace[i].topic + '</span><br><span style="text-align: left;font-size:13px;">' + dataplace[i].address + '</div></li>';

                        });
                        $('#box-picupto').html(setpicupbox)
                    } else if (data.length <= 0 || input.value == '') {
                        $('.box-picupto').css('display', 'none');
                    }
                }
            });
        } else {
            $('#box-picupto').html('');
            $('.box-picupto').css('display', 'none');
        }
    });
    $('#tour_time_h').on('change', function() {
        time_h = this.value;
        ontime = time_h + ':' + time_m
        console.log(ontime)
       // $('#ontime_samary').html(ontime)
    })
    $('#tour_time_m').on('change', function() {
        time_m = this.value;
        ontime = time_h + ':' + time_m
        console.log(ontime)

       // $('#ontime_samary').html(ontime)
    })
// var datecheck = new Date();
//   var text1 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 00:00:00";
//   var text2 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 18:00:00";
//   var text3 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 18:00:00";
//   var text4 = datecheck.getFullYear()+'-'+[parseInt(datecheck.getMonth())+1]+'-'+datecheck.getDate()+" 23:59:59";
//   //------test time ----------
//   //var text5 = "2016-3-30 20:30:01";
//   //--------------------------
//   var datenow = new Date(); 
//   var x = $.cookie('dateon');
//   console.log(x);
//   var dateon = x.split(','); 
//   console.log(dateon)
//     if (dateon[0] == 1) {//
//       x0 = 0;
//     }
//     else{
//       x0 = null;
//     }
//     if (dateon[1] ==1) {
//       x1 = 1;
//     }
//     else{
//       x1 = null;
//     }
//     if (dateon[2] == 1) {
//       x2 = 2;
//     }
//     else{
//       x2 = null;
//     }
//     if (dateon[3] == 1) {
//       x3 = 3;
//     }
//     else{
//       x3 = null;
//     }
//     if (dateon[4] == 1) {
//       x4 = 4;
//     }
//     else{
//       x4 = null;
//     }
//     if (dateon[5] == 1) {
//       x5 = 5;
//     }
//     else{
//       x5 = null;
//     }
//     if (dateon[6] == 1) {
//       x6 = 6;
//     }
//     else{
//       x6 = null;
//     }
  
    
//   if(datenow >= new Date(text1) && datenow <= new Date(text2))
//   {
//     var to = new Date();
//     to.setDate(to.getDate());
//   }
//   else if(datenow > new Date(text3) && datenow <= new Date(text4))
//   {
//     var to = new Date();
//     to.setDate(to.getDate()+1);
//      console.log(to)
//   }
 
//   var from = new Date();
//   console.log(from)
//   $.datepicker.setDefaults($.datepicker.regional['idround']);
//   $('.booking-input').datepicker({    
//     minDate : to,
//     beforeShowDay: function(date){
//       var day = date.getDay();
//      return [ day == x0 ||
//               day == x1 ||
//               day == x2 ||
//               day == x3 ||
//               day == x4 ||
//               day == x5 ||
//               day == x6,'']; 
//     }
    
   

//   });
});//END READY 

function getProvince(){
    
    
} 

function gettypetour(pro) {
    $('#box_pro_forregion').hide()

    $('#box_popup_typetour').show(500)
    $('.asdd').remove()

    console.log(pro)
    // headertour = types;
    // if (types == 'Day Tour') {
    //     type = 'Tour'
    // }
    // else{
    //  type = types
    // }
    // $.cookie("type",type);
    $.ajax({
            type: 'POST',
            url: base_url+'service/getTypetour.php',
            data: { 'pro': pro },
            //contentType: "application/json",
            dataType: 'json',
            success: function(res) {
              dataitem = res.data;
                console.log(res)
            var datapro = res.type;
            console.log(datapro)
            console.log(dataitem)
            var settyle = ''
            //     // dataitem = res.data;
            //     // console.log(datapro)
                $.each(datapro, function(i, val) {
                    var index2 = parseInt(i) + 1;
           
                if(datapro[i] == 'Day Tour'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = '一日游'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Day Tour'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'ทัวร์วันเดียว'
                    }
                   settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                    '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #00bcd4;">'+
                    '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                        
                            '<i class="demo-icon icon-new-uniF100-1" style="font-size: 45px;color: #00bcd4;"></i>'+
                        '<div><span class="lng_day_tour" style="font-size: 15px;color: #00bcd4;">'+texttype+'</span></div>'+
                    '</div>'+
                        '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Spa'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = 'Spa / 按摩'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Spa / Massage'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'สปา / นวด'
                    }
                    settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                                        '<div class="box_menu_tour"  onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #ff9800;">'+
                                            '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                            '<i class="demo-icon icon-new-uniF10A-4" style="font-size: 45px;color: #ff9800;"></i>'+
                        '<div><span class="lng_spa" style="font-size: 15px;color: #ff9800;">'+texttype+'</span></div>'+
                    '</div>'+
                    '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Boat'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = '包船'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Charter Boat'
                    } else if ($.cookie("lng") == 'th') {
                            texttype = 'เรือเช่าเหมาลำ'

                    }
                     settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                        '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #3b5998;">'+
                            '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                                    '<i class="demo-icon icon-new-uniF118-9" style="font-size: 45px;color:#3b5998 "></i>'+
                                '<div><span class="lng_boat" style="font-size: 15px;color:#3b5998 ">'+texttype+'</span></div>'+
                                '</div>'+
                            '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Wedding'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = '婚纱 / 拍照'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Wedding / Photo'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'เวดดิ้ง/ถ่ายภาพ'
                    }
                      settyle +='<div class="col-md-4 col-sm-6 col-xs-6">'+
                            '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #e91e63;    ">'+ 
                        '<div style="height: 125px;padding: 30px 15px; background: #f7f5f5;">'+
                            '<i class="demo-icon icon-new-uniF11E-8" style="font-size: 45px;color:#e91e63 "></i>'+
                            '<div><span class="lng_wedding" style="font-size: 15px;color:#e91e63">'+texttype+'</span></div>'+
                        '</div>'+
                        '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Diving'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = '潜水'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Diving'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'ดำน้ำ'
                    }
                     settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                        '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #ff9800; ">'+
                            '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                                    '<i class="demo-icon icon-new-uniF11F-6" style="font-size: 45px;color: #ff9800;"></i>'+
                                '<div><span class="lng_diving" style="font-size: 15px;color: #ff9800;">'+texttype+'</span></div>'+
                            '</div>'+
                                '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Golf'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = '高尔夫球'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Golf'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'กอล์ฟ'
                    }
                     settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                        '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #3b5998;">'+
                            '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                                    '<i class="demo-icon icon-new-uniF114-4" style="font-size: 45px;color:#3b5998 "></i>'+
                                '<div><span class="lng_golf" style="font-size: 15px;color:#3b5998">'+texttype+'</span></div>'+
                                '</div>'+
                            '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Tour Package'){
                    if ($.cookie("lng") == 'cn') {
                        texttype = '旅游套餐'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Package'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'แพ็คเกจทัวร์'
                    }
                             settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                        '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #e91e63;">'+
                            '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                                    '<i class="demo-icon icon-new-uniF12C-10" style="font-size: 45px;color: #e91e63"></i>'+
                                '<div><span class="lng_package" style="font-size: 15px;color: #e91e63">'+texttype+'</span></div>'+
                                '</div>'+
                            '</div>'+
                    '</div>'
                }
                else if (datapro[i] == 'Show'){
                     if ($.cookie("lng") == 'cn') {
                        texttype = '表演 / 门票'
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            texttype = 'Ticket / Show'
                    } else if ($.cookie("lng") == 'th') {
                          texttype = 'ตั๋ว / โชว์'
                    }
                   settyle += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                        '<div class="box_menu_tour" onclick="getItemtour(\''+datapro[i]+'\',\''+texttype+'\')" style="border-top: 3px solid #00bcd4; ">'+
                            '<div style="height: 125px;padding: 30px 15px;    background: #f7f5f5;">'+
                                   '<i class="demo-icon icon-new-uniF154-6" style="font-size: 45px;color: #00bcd4"></i>'+
                                '<div><span class="lng_show" style="font-size: 15px;color: #00bcd4">'+texttype+'</span></div>'+
                                '</div>'+
                            '</div>'+
                    '</div>'
                } 
                   
            }); 
 $('.gettype').html(settyle)
            }
        })
}
function gettypetourssssss(types) {
    $('#box_popup_tour').show(500)
    $('.protour').remove()

    console.log(types)
    headertour = types;
    if (types == 'Day Tour') {
        type = 'Tour'
    }
    else{
     type = types
    }
    $.cookie("type",type);
    $.ajax({
            type: 'POST',
            url: base_url+'service/getTourtype.php',
            data: { 'type': types },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
              
                console.log(data)
                var datapro = data.province;

                dataitem = data.data;
                console.log(datapro)
                $.each(datapro, function(i, val) {
                    var index2 = parseInt(i) + 1;
                   
                if ($.cookie("lng") == 'cn') {
                        $('#pro_tour').append('<li class="protour" id="typeserviceaa'+datapro[i].as+'"  onclick="sendprotour(\'' + datapro[i].as + '\') "><span>'+datapro[i].name_cn+'</span></li>');
                       

                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                        $('#pro_tour').append('<li class="protour" id="typeserviceaa'+datapro[i].as+'"  onclick="sendprotour(\'' + datapro[i].as + '\') "><span>'+datapro[i].name+'</span></li>');
                   

                   
                } else if ($.cookie("lng") == 'th') {
                        $('#pro_tour').append('<li class="protour" id="typeserviceaa'+datapro[i].as+'"  onclick="sendprotour(\'' + datapro[i].as + '\') "><span>'+datapro[i].name_th+'</span></li>');
                   
                    
                }
               
                    
                   
                }); 
                

            }
        })
}
function sendpicup(x,name) {
    
    
    // $('#current-addr').hide();
    id_placefrom = x;
    name_place = name;
    pro_from = $('#transferplace' + x).attr('datapro');
    var name = $('#transferplace' + x).attr('dataname');
    aum_from = $('#transferplace' + x).attr('dataaum');
    lat_from = $('#transferplace' + x).attr('lat_f');
    lng_from = $('#transferplace' + x).attr('lng_f');
    $('#search-place').val(name)
    $('.box-picupfrom').hide(500)
    // start_st = {
    //     lat: parseFloat(lat_from),
    //     lng: parseFloat(lng_from)
    // }
    // console.log(start_st);
    // startMarker.setVisible(true);
    // map.panTo(start_st);
    // startMarker.setPosition(start_st);
    // $('#clear-all').show(500);
}

function sendpicupto(x,name) {
    
    
    // $('#current-addr').hide();
    id_placeto = x;
    name_placeto = name;
    console.log(id_placeto)
    console.log(name_placeto)
    // pro_from = $('#transferplace' + x).attr('datapro');
    // var name = $('#transferplace' + x).attr('dataname');
    // aum_from = $('#transferplace' + x).attr('dataaum');
    // lat_from = $('#transferplace' + x).attr('lat_f');
    // lng_from = $('#transferplace' + x).attr('lng_f');
    $('#search-place-to').val(name)
    $('.box-picupto').hide(500)
    // start_st = {
    //     lat: parseFloat(lat_from),
    //     lng: parseFloat(lng_from)
    // }
    // console.log(start_st);
    // startMarker.setVisible(true);
    // map.panTo(start_st);
    // startMarker.setPosition(start_st);
    // $('#clear-all').show(500);
}
function getItemtour(type,head) {
    console.log(dataitem)
    itemTourforpro = [];
    headertour = type;
    // $.ajax({
    //         type: 'POST',
    //         url: base_url+'service/getTourtype.php',
    //         data: { 'type': type },
    //         //contentType: "application/json",
    //         dataType: 'json',
    //         success: function(data) {
              
    //             console.log(data)
    //             var datapro = data.province;

    //             dataitem = data.data;
    //         }
    //     });
    console.log(type)
     
    $('#box_popup_touritem').show(500)
    $('.a-link-item2').remove()
    console.log(headertour)
    $('.headertour').html(head)
    // if (headertour == 'Day Tour') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('遊覽')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Day Tour')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('การท่องเที่ยว')
    //     }
    // }
    // if (headertour == 'Golf') {
    //     $('.headertour').html(head)
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html(head)
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Golf')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('กอล์ฟ')
    //     }
    // }
    // if (headertour == 'Spa') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('溫泉')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Spa')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('สปา')
    //     }
    // }
    // if (headertour == 'Boat') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('船')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Boat')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('เรือ')
    //     }
    // }
    // if (headertour == 'Wedding') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('婚禮')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Wedding')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('งานแต่งงาน')
    //     }
    // }
    // if (headertour == 'Diving') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('潛水')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Diving')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('ดำน้ำ')
    //     }
    // }
    // if (headertour == 'Show') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('表明')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Show')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('การแสดง')
    //     }
    // }
    // if (headertour == 'Package') {
    //     if ($.cookie("lng") == 'cn') {
    //         $('.headertour').html('包')
    //     } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
    //         $('.headertour').html('Package')
    //     } else if ($.cookie("lng") == 'th') {
    //         $('.headertour').html('แพ็คเกจ')
    //     }
    // }
var urlicon = base_url + 'files/images/carmodelicon/';
     $.each(dataitem, function(i, val) {
         if (type == dataitem[i].type) {
            //console.log(dataitem[i])
         itemTourforpro.push(dataitem[i])
     }
       
        // var indexs = parseInt(i) + 1;
        


    });
    $.each(itemTourforpro, function(i, val) {
         var indexs = parseInt(i) + 1;
       
           
            if ($.cookie("lng") == 'cn') {
            car_topic = itemTourforpro[i].topic_cn;
            lngbook = '預訂';
            lngcapacityinfo = '車容量';
            lngdetails = '细节';
            lngfacilities = '设施';
            bath = '銖'
        } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
            car_topic = itemTourforpro[i].topic_en;
            lngbook = 'Book';
            lngcapacityinfo = 'Capacity';
            lngdetails = 'details';            
            lngfacilities = 'Facilities';
            bath = 'Baht'

        } else if ($.cookie("lng") == 'th') {
            car_topic = itemTourforpro[i].topic_th;
            lngbook = 'จอง';
            lngcapacityinfo = 'ความจุรถ ';
            lngdetails = 'รายละเอียด';
            lngfacilities = 'สิ่งอำนวยความสะดวก';
            bath = 'บาท'

        } 
        $('#pro_tour_item').append('<div class="a-link-item2 col-lg-12" >' +
            
            '<table width="100%">' +
            '<tr>' +
            '<td  colspan="2" style="width: 100%">' +
            '<h2 class="searchresult_name"title="product name"><span>' + car_topic + '</span></h2>' +
            '</td>' +
            '</tr>' +
            '<tr>'+
            '<td align="center">'+
          
            '<span class="numutour">' + indexs + '</span>' +
            
             '<div class="item-thumimage" onclick="getimagee(\'' + itemTourforpro[i].id + '\') ">' +
            '<img src="http://www.t-booking.com/uploads/gallery_list_supplier/1019/1/1.jpg">' +
            '</div>' +
            '</td >'+ 
           
            '<td  align="center" valign="top">'+
             '<div id="i-listtour"   onclick="getdetailtour(\'' + itemTourforpro[i].id + '\')">' +
           '<p id=""><div ">' + lngdetails + '</div></p>' +
           '<i class="material-icons">search</i>' +
           '</div>' +    
            '</td >'+
                           
            '</tr>'+
            '<tr>'+
            '<td >'+
          
           
            '</td >'+ 
           
            '<td  align="center" valign="top">'+
            '<div id="">' +
            '<div class="product_r">' +
            '<span class="base_price"></span>' +
            '<span class="sala">' + itemTourforpro[i].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' '+ bath + '</span>' +
            '</div>' +
            '<div class="views-item" onclick="bookingtours('+ itemTourforpro[i].id+')">' +
            '<a > <span >' + lngbook + '</span></a>' +
            '</div>' +
            '</div>' +  
            '</td >'+
            '</tr>'+
            '</table>' +
            '</div>'
        );
        
    });
}
function bookingtours(id) {
    product_item = id
    $('.mySlidesicon').remove()
    $('.mySlidesicon').remove()
    $('#textcountry').remove()
    itemTourforproid = []
               

    
     $('#get_html_book_tours').show(500)
     $('.round').remove()
     $.ajax({
            type: 'POST',
            url: base_url+'service/getRoundtime.php',
            data: { 'product': id },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                if(data.status == '402'){
                    $('#check_round').hide()
                    $('#check_roundno').show()
                }
                else{
                    if (true) {}
                    $('#check_roundno').hide()
                    $('#check_round').show()
                   if (data.length == 1) {
                        time_around = data[0].show_h+':'+data[0].show_m+' - '+data[0].show_h_finish+':'+data[0].show_m_finish;
                        console.log(time_around)
                    }
                   $.each(data, function(i, val) {
                        console.log(data)
                        $('.select_round').append('<option class="round" value="'+data[i].show_h+':'+data[i].show_m+' - '+data[i].show_h_finish+':'+data[i].show_m_finish+ '" >'+data[i].show_h+':'+data[i].show_m+' - '+data[i].show_h_finish+':'+data[i].show_m_finish+ '</option>');
                        //$('.select_round').append('<li class="round" id="round'+data[i].id+'"  onclick="sendroundtour(\'' + data[i].id + '\') "><span>'+data[i].show_h+':'+data[i].show_m+' - '+data[i].show_h_finish+':'+data[i].show_m_finish+ '</span></li>');
                    }); 
                }
                console.log(data.length)
                
            }
        });
     $.ajax({
                    type: 'POST',
                    url: base_url+'tours/loadgallery',
                    data: { 'id': id },
                    //contentType: "application/json",
                    dataType: 'json',
                    success: function(res) {
                        console.log(res)
                        console.log('Gallery')
                        if (res.status != '402') {
                        $.each(res, function(i, val) {
                            console.log(res[i])
                            console.log('<img src="'+base_url+'pic/'+res[0].b_company+'/'+res[0].b_directory+'/'+res[0].b_gallery +'"/>')
                            //var ss = '<img src="'+base_url+'pic/'+res[i].b_company+'/'+res[i].b_directory+'/'+res[i].b_gallery +'"/>'
                            $('.images_icon').append('<img class="mySlidesicon" style="width: 100%; display: none;" src="'+base_url+'pic/'+res[0].b_company+'/'+res[0].b_directory+'/'+res[0].b_gallery +'"/>');
                            // $('#mySlides').append('<img class="mySlides" style="width: 100%; display: none;" src="'+base_url+'pic/'+res[i].b_company+'/'+res[i].b_directory+'/'+res[i].b_gallery +'"/>');
                        });
                        
                        } 
                        else{
                             $('.images_icon').append('<img class="mySlidesicon" style="width: 100%;border-radius: 15px; " src="http://www.t-booking.com/uploads/gallery_list_supplier/1019/1/1.jpg"/>');
                        }
                    }
                });
     $.ajax({
            type: 'POST',
            url: base_url+'service/getTourbyid.php',
            data: { 'id': id },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                $.ajax({
                    type: 'POST',
                    url: base_url+'service/getHotelplace.php',
                    data: { 'pro': data.data[0].province },
                    //contentType: "application/json",
                    dataType: 'json',
                    success: function(res) {
                        console.log(res)
                    }
                });
                 /******* CUSTOM DATEPICKER ********/
                date_on = []
                if (data.data[0].open_Sun == 0) {
                    date_on.push(1)
                }
                else if (data.data[0].open_Mon == 0) {
                    date_on.push(2)
                }
                else if (data.data[0].open_Tue == 0) {
                    date_on.push(3)
                }
                else if (data.data[0].open_Wed == 0) {
                    date_on.push(4)
                }
                else if (data.data[0].open_Thu == 0) {
                    date_on.push(5)
                }
                else if (data.data[0].open_Fri == 0) {
                    date_on.push(6)
                }
                else if (data.data[0].open_Sat == 0) {
                    date_on.push(7)
                }
               
                var $input = $('#on_date2').pickadate();
                var picker = $input.pickadate('picker');
                if (date_on.length != 0) {
                 picker.set('disable', date_on);

                }
                else{
                 picker.set('disable',false );

                }
                /************* END ***************/
                console.log(date_on)
                console.log(data)
                c_transfer = data.data[0].in_transfer
                cost_a_nett = data.data[0].cost_a_agent_all
                if (c_transfer != 1) {                    
                    $('.showtransfer').hide()
                }
                else{                    
                     $('.showtransfer').show()
                }

                getpricetour = data.data[0].cost_a_agent_all;
                $('#numsumprice_tour').html(getpricetour.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
                // var datapro = data.province;
                dataitemdetail = data.data;
                product =  data.data[0].code;
                product_id = data.data[0].id;
                //start_time = data.data[0].code;
                console.log('=====================')
                console.log(dataitemdetail)
                if ($.cookie("lng") == 'cn') {
                $('#search-place').attr('placeholder','酒店名稱或位置');
                $('#search-place-to').attr('placeholder','酒店名稱或位置');
                $('#name_lastname').attr('placeholder','名 - 姓');
                $('#phone').attr('placeholder','电话');
                $('#email').attr('placeholder','电子邮件');
                $('#flight').attr('placeholder','航班');
                $('#other').attr('placeholder','其他');
                
                $('#price_tour').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
                $('#product').html(dataitemdetail[0].topic_cn)
                // $('#name_product').html(dataitemdetail[0].topic_car)
                
                $('#costsummary').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
                $('#numsumprice').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
            } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                 $('#search-place').attr('placeholder','Name of Hotel or Location');     
                 $('#search-place-to').attr('placeholder','Name of Hotel or Location');     
                $('#name_lastname').attr('placeholder','First Name - Last Name');
                $('#phone').attr('placeholder','Phone');
                $('#email').attr('placeholder','Email');
                $('#flight').attr('placeholder','Flight');
                $('#other').attr('placeholder','Other');
                
                $('#price_tour').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
                $('#product').html(dataitemdetail[0].topic_en)
                // $('#name_product').html(dataitemdetail[0].topic_car)
                
                $('#costsummary').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
                $('#numsumprice').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
            } else if ($.cookie("lng") == 'th') {
                 $('#search-place').attr('placeholder','ชื่อโรงแรมหรือสถานที่ตั้ง'); 
                 $('#search-place-to').attr('placeholder','ชื่อโรงแรมหรือสถานที่ตั้ง'); 
                $('#name_lastname').attr('placeholder','ชื่อ - นามสกุล');
                $('#phone').attr('placeholder','โทรศัพท์');
                $('#email').attr('placeholder','อีเมล์');
                $('#flight').attr('placeholder','เที่ยวบิน');
                $('#other').attr('placeholder','อื่น ๆ');               
                
                $('#price_tour').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' +  'Bath')
                $('#product').html(dataitemdetail[0].topic_th)
                // $('#name_product').html(dataitemdetail[0].topic_car)
                // $('#cars_type').html(dataitemdetail[0].car_topic_th + dataitemdetail[0].pax_th)
                $('#costsummary').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
                $('#numsumprice').html(dataitemdetail[0].cost_a_agent_all.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + ' ' + 'Bath')
            }
                // console.log(datapro)

               
                

            }
        })
     console.log(dataitemdetail)
        $.ajax({
            type: 'POST',
            url: url + 'getcountry_control/process',
            //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                datacountry = data;

                $.each(data, function(i, val) {
                    $('#select-name').append('<li id="ct' + data[i].phonecode + '" value="' + data[i].phonecode + '" dataname ="' + data[i].name_en + '" img="' + data[i].country_code + '" onclick="sendCountry(' + data[i].phonecode + ');"><img id="imgcountry" src="' + url + 'files/img/flag/icon/' + data[i].country_code + '.png' + '">' + '<span id="span-phonecode">(' + '+' + data[i].phonecode + ')</span>' + data[i].name_en + '</li>');
                });
            }
        });
         
    //  $.ajax({
    //     type: 'POST',
    //     url: base_url+'getcountry_control/process',
    //     //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data)
    //         $.each(data, function(i, val) {
    //             $('.guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
    //        });

    //     }
    // });
    $('.numbercountry').append('<span id="textcountry">' + lng_getcountry + '</span>');
    $('#code').append('<span id="textcode">code country</span>');
    $('#codecountry').css({ 'z-index': '301', 'height': '100vh' });

     $('.box_in_country').css({ 'z-index': '301', 'height': '100vh' });
}
function getdetailtour(id) {
    console.log(id)
    $('.mySlides').remove()
    $('#box_popup_tourdetail').show(500)
    // jssor_1_slider_init2();
    $.ajax({
                    type: 'POST',
                    url: base_url+'tours/loadgallery',
                    data: { 'id': id },
                    //contentType: "application/json",
                    dataType: 'json',
                    success: function(res) {
                        console.log('Gallery')
                        console.log(res)
                        console.log(res.status)
                        if (res.status != '402') {
                        $.each(res, function(i, val) {
                            console.log(res[i])
                            console.log('<img src="'+base_url+'pic/'+res[i].b_company+'/'+res[i].b_directory+'/'+res[i].b_gallery +'"/>')
                            //var ss = '<img src="'+base_url+'pic/'+res[i].b_company+'/'+res[i].b_directory+'/'+res[i].b_gallery +'"/>'
                            $('#mySlides').append('<img class="mySlides" style="width: 100%; display: none;" src="'+base_url+'pic/'+res[i].b_company+'/'+res[i].b_directory+'/'+res[i].b_gallery +'"/>');
                        });
                        
                        } 
                        else{
                             $('#mySlides').append('<img class="mySlides" style="width: 100%; display: none;" src="http://www.t-booking.com/uploads/gallery_list_supplier/1019/1/1.jpg"/>');
                        }
                        showDivs(slideIndex);
                      // $('#mySlides:first-child').css('display','block') 
                    }
                });
    $('.dateopen').remove()
    $.ajax({
            type: 'POST',
            url: base_url+'service/getTourdetail.php',
            data: { 'id': id },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
               // var x1 = 1,x2 = 2,x3 = 3,x4 = 4,x5 = 5,x6 = 6, x7 = 7;
               // $.each(data, function(i, val) {
                console.log(data)
                
              optiondate  = [ {name_en:'Sunday', name_cn:'星期日',name_th:'อาทิตย์', status: data.data[0].open_Sun}
                            ,{name_en:'Monday', name_cn:'星期一',name_th:'จันทร์', status: data.data[0].open_Mon}
                            ,{name_en:'Tuesday', name_cn:'星期二',name_th:'อังคาร', status: data.data[0].open_Tue}
                            ,{name_en:'Wednesday', name_cn:'星期三',name_th:'พุธ', status: data.data[0].open_Wed}
                            ,{name_en:'Thursday', name_cn:'星期四',name_th:'พฤหัสบดี', status: data.data[0].open_Thu}
                            ,{name_en:'Friday', name_cn:'星期五',name_th:'ศุกร์', status: data.data[0].open_Fri}
                            ,{name_en:'Saturday', name_cn:'星期六',name_th:'เสาร์', status: data.data[0].open_Sat} ];
            console.log(optiondate)
              $.each(optiondate, function(i, val) {
                if (optiondate[i].status == 1) {
                    if ($.cookie("lng") == 'cn') {
                        $('#open_tour').append('<li class="dateopen"><span>'+optiondate[i].name_cn+'</span></li>');
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                        $('#open_tour').append('<li class="dateopen"><span>'+optiondate[i].name_en+'</span></li>'); 
                    } else if ($.cookie("lng") == 'th') {
                        $('#open_tour').append('<li class="dateopen"><span>'+optiondate[i].name_th+'</span></li>');
                    }
                }
              });
                if ($.cookie("lng") == 'cn') {
                   $('#productdetail').html(data.data[0].topic_cn)
                   $('#productdetailview').html(data.data[0].detail_cn)

                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#productdetail').html(data.data[0].topic_en)
                   $('#productdetailview').html(data.data[0].detail_en)

                } else if ($.cookie("lng") == 'th') {
                    $('#productdetail').html(data.data[0].topic_th)
                   $('#productdetailview').html(data.data[0].detail_th)

                }
                
                //$('.open_tour').append('<li class="round" id="round'+data[i].id+'"  onclick="sendroundtour(\'' + data[i].id + '\') "><span>'+data[i].show_h+':'+data[i].show_m+' - '+data[i].show_h_finish+':'+data[i].show_m_finish+ '</span></li>');
            // });
            }
        });

}



function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {

  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}



function closepopup(section) {
    console.log(section)
    if (section == 'popprovince') {
        $('#box_pro_forregion').hide()
        $('#box_popup_region').show(500)
    }
    else if (section == 'poptouritem') {
        $('#box_popup_touritem').hide(500)

    }
    else if (section == 'country') {
        $('#codecountry').hide(500)

    }
    else if (section == 'poptourdetail') {
        $('#box_popup_tourdetail').hide(500)

    }
    else if (section == 'poptypetour') {
        $('#box_popup_typetour').hide()
        $('#box_pro_forregion').show(500)


    }
    else if (section == 'poptourregion') {
        $('#box_popup_region').hide()
        $('#secttion_box_country').show(500)

    }
    else if (section == 'poptourprovince') {
        $('#box_popup_region').show(500)
        $('#box_pro_forregion').hide()

    }

}
function selectpark(){
     $('#box_region').html('')
     region = '';
    // $('#box_pro_forregion').show(500)
     $.ajax({
            type: 'POST',
            url: base_url+'service/getPark.php',
            //data: { 'product': id },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                $.each(data, function(i, val) {
                $('#secttion_box_country').hide(500)
                $('#box_popup_region').show(500)

                if ($.cookie("lng") == 'cn') {
                    region_name = data[i].topic_cn;
                    
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    region_name = data[i].topic_en;
                   

                } else if ($.cookie("lng") == 'th') {
                    region_name = data[i].topic_th;
                    

                } 
                  region += '<div class="col-md-4 col-sm-6 col-xs-6">'+
                        '<div class="box_menu_tour" onclick="getProvinceforregion('+data[i].id+')" style="margin-top: 20px;">'+
                            '<div style="height: 125px;padding: 30px 15px;font-size: 16px; background: #f7f5f5;border: 1px solid #3b5998;    border-radius: 15px;">'+
                                    // '<i class="demo-icon icon-new-uniF12C-10" style="font-size: 45px;color: #e91e63"></i>'+
                                '<div><span class="lng_package" style="font-size: 15px;color: #3b5998">'+region_name+'</span></div>'+
                                '</div>'+
                            '</div>'+
                    '</div>'
                });
     $('#box_region').html(region)

            }
        });
}
function getProvinceforregion(x){
    $('#box_pro_forregion').show(500)
                $('#box_popup_region').hide()

    $('.protour2').remove()
     $.ajax({
            type: 'POST',
            url: base_url+'service/getProvincetour.php',
            data: { 'lng': getlng,'id':x },
            //contentType: "application/json",
            dataType: 'json',
            success: function(res) {
                console.log(res)
                var datapro2 = res[0].data1;
                $.each(datapro2, function(i, val) {
                    var index2 = parseInt(i) + 1;
                   
                if ($.cookie("lng") == 'cn') {
                        $('#first_pro_tour').append('<li class="protour2" id="typeserviceaa'+datapro2[i].province+'"  onclick="gettypetour(\'' + datapro2[i].province + '\') "><span>'+datapro2[i].name_cn+'</span></li>');
                       

                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                        $('#first_pro_tour').append('<li class="protour2" id="typeserviceaa'+datapro2[i].province+'"  onclick="gettypetour(\'' + datapro2[i].province + '\') "><span>'+datapro2[i].name+'</span></li>');
                   

                   
                } else if ($.cookie("lng") == 'th') {
                        $('#first_pro_tour').append('<li class="protour2" id="typeserviceaa'+datapro2[i].province+'"  onclick="gettypetour(\'' + datapro2[i].province + '\') "><span>'+datapro2[i].name_th+'</span></li>');
                   
                    
                }
            
        });
            }
        });
}
function selecetBooktours(){
    ondate = $('#on_date2').val()
   
    email = $('#email').val()
    name = $('#name_lastname').val()
    phone = $('#phone').val()
    if(time_around != undefined){
       ontime = time_around;  
    }
    console.log(product)
    console.log(id_placefrom)
    console.log(id_placeto)
    console.log(name_place)
    console.log(name_placeto)
    console.log(product_item)
    console.log($('#on_date2').val())
    console.log(num_adult)
    console.log(num_child)
    console.log($('#name_lastname').val())
    console.log($('#phone').val())
    console.log($('#email').val())
    console.log(time_around)
    console.log(ontime)
    console.log(ckgetuser)
    console.log(name)
    console.log(phone)
        if ($('#search-place').val() == '' && c_transfer == 1) {
             $('#search-place').focus()
            $('#search-place').css('border','1px solid #f44336')
        }
        else{
            console.log('in else')
            console.log( $('#search-place').val())
           
            $('#search-place').css('border','1px solid #dfdfdf')            
        }  
        if ($('#search-place-to').val() == '' && $('#search-place').val() != '' && c_transfer == 1) {
             $('#search-place-to').focus()
            $('#search-place-to').css('border','1px solid #f44336')
        }
        
        else{
            console.log('in else')
            console.log( $('#search-place-to').val())
           
            $('#search-place-to').css('border','1px solid #dfdfdf')            
        }
         if ( c_transfer == 1) {
            if ($('#search-place-to').val() != '' && $('#search-place').val() != '') {
                passnotransfer = 1 
            }
            else{
                 passnotransfer = 0
            }
            // if ($('#search-place-to').val() != '' && $('#search-place').val() != '' ) {}
            // $('#search-place-to').val() == '' && $('#search-place').val() != '' 
        } 
        else{
            passnotransfer = 1
        }
        if(name == '' && ckgetuser == false && passnotransfer == 1){
            $('#name_lastname').focus()
            $('#name_lastname').css('border','1px solid #f44336')
        }
        else{
            $('#name_lastname').css('border','1px solid #dfdfdf')
        }
        if(phone == '' && name != ''  && ckgetuser == false){
            $('#phone').focus()
            $('#phone').css('border','1px solid #f44336')
        }
        else{
            $('#phone').css('border','1px solid #dfdfdf')
        }
        if((ckgetuser == false && $('#email').val() == '') && ($('#phone').val() != '' && $('#name_lastname').val() != '') ){
            console.log('in if')            
            $('#email').focus()
            $('#email').css('border','1px solid #f44336')
        }
        else{
            console.log('in else')
            console.log( $('#phone').val())
            console.log( $('#name_lastname').val())
            $('#email').css('border','1px solid #dfdfdf')            
        }
        if(Checkacceptance == false && (ckgetuser == false && $('#email').val() != '') && ($('#phone').val() != '' && $('#name_lastname').val() != '')){
            $('#acceptance_pin_pop').show(500)            
        }
        
    console.log(total_price)
    console.log(headertour)
    
    console.log(protype)
    
    console.log(paramtour)
     if(($('#email').val() != '' && Checkacceptance != false) && ($('#phone').val() != '' && $('#name_lastname').val() != '') && passnotransfer == 1){
    $.ajax({
        type: 'POST',
        url: base_url+'savebook_control/tour',
        data: {
            'from': id_placefrom,
            'to': id_placeto,
            'name_from': name_place,
            'name_to': name_placeto,
            "guest_other": namecountry,
            'program': product_id,
            'adult': num_adult,
            'child': num_child,
            'ondate': ondate,
            'ontime': ontime,
            'name': name,
            'phone': phone,
            'phonecode': $.cookie("phonecode"),
            'email': email,
            'cost': total_price,
            'code': code_r,
            'code_ref': code_ref,
            'other': other,
            'place_from': name_place,
            'place_to': name_placeto,
            'guest_other': namecountry,
            'product_type': headertour,
            'cost_a_nett': cost_a_nett,


        },
        // contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            agent_ref = data;
            if (c_transfer == 1) {
            paramtour = {//transfer
                        "agent_ref": data,
                        "guest_english": name,
                        "guest_other": namecountry,
                        "phone": '+' + $.cookie("phonecode") + $('#phone').val(),
                        "email": email,
                        "social_wechat": "",
                        "social_qq": "",
                        "social_wangwang": "",
                        "social_line": "",
                        "social_skype": "",
                        "social_whatapp": "",
                        "social_facebook": "",
                        "product": product,
                        "adult": num_adult,
                        "child": num_child,
                        "ondate": ondate,
                        "program_start": ontime,
                        "pickup_place" : name_place,
                        "to_place" : name_placeto,
                        "remark": other,
                        "c_transfer": c_transfer
            }
    }
    
    else{
        paramtour = {//no transfer
                        "agent_ref": data,
                        "guest_english": name,
                        "guest_other": namecountry,
                        "phone": '+' + $.cookie("phonecode") + $('#phone').val(),
                        "email": email,
                        "social_wechat": "",
                        "social_qq": "",
                        "social_wangwang": "",
                        "social_line": "",
                        "social_skype": "",
                        "social_whatapp": "",
                        "social_facebook": "",
                        "product": product,
                        "adult": num_adult,
                        "child": num_child,
                        "ondate": ondate,
                        "program_start": ontime,                       
                        "remark": other,
                        "c_transfer": c_transfer
        }
    }
        console.log(paramtour)
         $.ajax({
                    type: 'POST',
                    url: base_url+'savebook_control/saveapitour',
                    data: paramtour,
                    //contentType: "application/json",
                   dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        console.log(s_email);
                        if (data.status == 202) {
                            $.ajax({
                                type: 'POST',
                                url: base_url+'sendemail.php',
                                data: { 'mail': s_email, 'voucher': data.invoice },
                                //contentType: "application/json",
                                dataType: 'json',
                                success: function(data) {
                                    console.log(data);
                                    //console.log(s_email);


                                }
                            });
                            //$('#loading').hide()
                            if($.cookie("login") != undefined){
                            window.location.href = base_url+"dashboard/view_user";
                            
                            }
                            else{
                                window.location.href = base_url+'dashboard/voucher?order_id='+data.invoice;
                            }

                        } else {
                                $('#input_data_pop').show(500)

                        }


                    }
                });
            
            }
        });
    }
}