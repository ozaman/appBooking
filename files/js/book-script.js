var area, namecountry, datacountry, program_name, num_cars = 1,
selectcar = 1,
num_adult = 1,
num_child = 0,
ondate,
ontime, time_h = '00',
time_m = '00',
name, phone, phonecode,
other = '', total_adult = 0,
total_child = 0,
total_price = 0,
person = 0,
sum_adult_child = num_adult + num_child,
checksumperson = 0,
place_name, toplace_name, adress, adress_to, terminal, car_model,
service, code, visa = 0, guestcountry,
code_r, s_email,s_code,
flight, cost_a_nett, lng_getcountry = '', adresss,newDate = '',getcosereltime = 0;
var data, from, to;
var Checkacceptance = false;
var ckgetuser = false;
// var base_url = 'https://www.welovetaxi.com/app/booking2/';
// var url = 'https://www.welovetaxi.com/app/booking2/';
// var urlimg = 'https://www.welovetaxi.com/app/booking2/';
var getemail,getphone ,b_from,b_to,b_lat_f,b_lng_f,b_lat_t,b_lng_t,b_fashion,b_data,costdotcars  ;
var costproduct, costdotcars, type, costdotcars, pro_id, place, to_place,lang_to_map,getnewdate,place_from,place_to;
var protype = $.cookie("type")
console.log($.cookie("type"))
$(document).ready(function() {   
    $('#loading').css('display', 'block');
    $('#content').css('display', 'none');
    setTimeout(function() {
        console.log("aaaaa")
        $('#loading').css('display', 'none');
        $('#content').css('display', 'block');
    }, 3000);
    $('#on_date').each(function() {
        var $date = $(this),
        date = $date.val().split('-'),
        format = ['year', 'month', 'day'];
        $.each(format, function(i, v) {
            $date.attr('data-' + v, +date[i]);
        });
    });
    if ($.cookie("lng") == 'cn') {
        lng_getcountry = '请选择国家';
        $('.terms-of-use').html('<span>' +
            '<B>一. </B> 请注意，黄色或者绿色车牌为合法运营车辆。如看到其他颜色牌照可拒绝上车，并请联系我们热线。<br /><br />' +
            '<B>二. </B> 上⻋车请系好安全带，不然如遇警察检查需自己付罚款，如有意外保险⽆无法赔偿。<br /><br />' +
            '<B>三. </B> 上下车请保管好自己的物品。如有遗失，概不负责。<br /><br />' +
            '<B>四. </B> 如发生司机由于不可抗力因素未接到，在约定时间后5-15分钟内，请客人及时联系我们的24小时中文热线，如等待超过30分钟，请客人需及时自行打车离开！<br /><br />' +
            '我们会退还订单费用，如客人有打车凭证提供，我们将补偿打车费用，但是其他费用一律不负责赔偿，请知晓！</span>');
    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
        lng_getcountry = 'Please select country';
        $('.terms-of-use').html('<span  ><B >1.</B>  Please note that only green or yellow license plates vehicle legally are used as public vehicles. If you see other colors license plates vehicle, could refuse to get on and please contact our hotline.<br /><br>' +

            '<B>2.</B> Please remember to fasten your seat belt in the vehicle. Otherwise, in case of police check required to pay fines by you own and in case of any traffic accident, you would be unable to get any insurance compensation.<br /><br>' +

            '<B>3.</B> Please check your belongings before leaving. We are not responsible for any loss.<br /><br>' +

            '<B>4.</B> If the driver did not arrive on time in 5-15 minutes, please contact our 24-hour hotline,Such as waiting for more than 30 minutes, please kindly get another taxi. We will refund the cost of the order, if the guest able to provide the taxi voucher that they took, we will refund the taxi costs. Please be noticed the other fees are not responsible for refund..</span>');

    } else if ($.cookie("lng") == 'th') {
        lng_getcountry = 'โปรดเลือกประเทศ';
        $('.terms-of-use').html('<span >' +
            '<B>1.</B> โปรดทราบว่ามีเพียงแผ่นป้ายทะเบียนรถสีเขียวหรือสีเหลืองเท่านั้นที่ใช้เป็นยานพาหนะขนส่งสาธารณะที่ถูกต้องตามกฎหมาย หากคุณเห็นป้ายทะเบียนรถเป็นสีอื่น คุณสามารถปฏิเสธการโดยสารได้ และโปรดติดต่อสายด่วนของเรา<br /><br />' +
            '<B >2.</B> กรุณาคาดเข็มขัดนิรภัย มิฉะนั้นในกรณีที่มีการเรียกตรวจสอบจากตำรวจ คุณต้องต้องจ่ายค่าปรับเอง และในกรณีที่เกิดอุบัติเหตุ คุณจะไม่สามารถได้รับค่าชดเชยจากบริษัทประกันภัย<br /><br />' +
            '<B>3.</B> โปรดตรวจสอบทรัพย์สินของคุณก่อนที่รถจะออกเดินทางหรือรถถึงที่หมาย เราจะไม่รับผิดชอบต่อความสูญเสียในกรณีใดๆ ทั้งสิ้น<br /><br />' +
            '<B>4.</B> ในกรณีที่มีเหตุสุดวิสัยคนขับไม่ได้รับรอเกิน 5-15 นาทีจากเวลาที่ตกลงกัน โปรดติดต่อศูนย์บริการตลอด 24 ชั่วโมงสายด่วนทันที ถ้ารอคอยมากกว่า 30 นาที กรุณาเรียกรถเอง! เราจะคืนเงินให้ท่าน100%ในการจอง และจะคืนเงินที่ท่านเรียกรถ (แต่ต้องมีหลักฐานใบเสร็จหรือรูปยืนยัน) แต่จะไม่รับผิดชอบค่าเสียหายอื่น  โปรดทราบ!</span> ');

    } 
    $('#sumnum').html(parseInt(sum_adult_child));
    getnewdate = new Date();
    console.log(getnewdate.getDate())
    console.log(getnewdate.getMonth())
    console.log(getnewdate.getFullYear())
    console.log(getnewdate.getMonth()+1)
    newmonth = getnewdate.getMonth()+1;
    newDate = getnewdate.getFullYear()+'-'+newmonth +'-'+getnewdate.getDate();
    console.log(newDate)
    $('#Rondatetext').html(newDate)
    // if ($.cookie("login")) {
    //     console.log($.cookie("login"))
    //     $.ajax({
    //         type: 'POST',
    //         url: base_url+'getuser_control/mainpage',
    //         data: { 'id': $.cookie("login") },
    //         //contentType: "application/json",
    //         dataType: 'json',
    //         success: function(data) {
    //             console.log(data)
    //             code_r = data[0].s_code;
    //             code_ref = data[0].s_code_ref;
    //             datauser = data;
    //             s_email = data[0].s_email
    //             console.log(data[0].s_image)
    //             $('.box-login').show();
    //             $('.box-login-non').hide();
    //             $('.box-desboard').show();
    //             if (data[0].s_image == '') {
    //                 $('#photo_profile').html('<img class="" src="' + base_url + 'pic/default-avatar.png">');
    //                 $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');
    //             } else {
    //                 $('#photo_profile').html('<img   src="' + base_url + 'pic/' + data[0].s_image + '">');
    //                 $('.box-login').html('<img class="imgmemu" src="' + base_url + 'pic/' + data[0].s_image + '">');
    //             }
    //             $('#usernamess').html(data[0].s_username);
    //             $('#getname').html(data[0].s_name);
    //             $('#btnlogin').css('display', 'none')
    //             $('#btnuser').css('display', 'block')
    //             $('.caret').css('display', 'inline-block')
    //         }
    //     });

    // } else {        

    //     $('#photo_non-login').html('<img class="imgmemu" src="' + base_url + 'pic/default-avatar.png">');
    //     $('.box-login').hide();
    //     $('.box-desboard').hide();
    //     $('.box-login-non').show();
    //     $('#btnlogin').css('display', 'block')
    //     $('#btnuser').css('display', 'none')
    //     $('.caret').css('display', 'none')
    // }

    $('#previous').on('click', function() {
        $('#addbook').css('display', 'none');
        $('#acceptance').prop('checked', false);
    })
    $('#acceptance').change(function() {
        if (this.checked) {
            Checkacceptance = true;
        } else {
            Checkacceptance = false;
        }
    })

    $('#on_date').each(function() {
        var val = $(this).val();
        date = moment(val).toDate();

    });
    $('.btn-cale').click(function() {
        var $input = $('#on_date').pickadate();
        var picker = $input.pickadate('picker');
        picker.close();


    });
    $('#on_date').pickadate({
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
        closeOnSelect: true,
        closeOnClear: false,
        selectMonths: true,
        selectYears: true,
        "showButtonPanel": false,
        onStart: function() {
            this.set('select', date); // Set to current date on load
        }
    });
    
    

    var getemail, getphone;
    $('#acceptanceuser').change(function() {
        if ($.cookie("detect_user") != undefined) {

            $('#name_lastname').css('border','1px solid #dfdfdf')
            $('#phone').css('border','1px solid #dfdfdf')
            $('#email').css('border','1px solid #dfdfdf')
            ckgetuser = true;
            if (this.checked) {
                console.log('in case user')
                console.log(datauser)
                $.ajax({
                    type: 'POST',
                    url: base_url+'getcountry_control/getcountry_by_id',
                    data: { 'id': datauser[0].i_country },
                    //contentType: "application/json",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)

                        
                        $('#phonecode').append('<span id="codetext">' + '+' + data[0].phonecode + '</span>');
                        $('#inputphonecode').val(data[0].phonecode)
                        if ( datauser[0].s_phone_code != '') {
                            $('#textcountry').text('');
                            if ($.cookie("lng") == 'cn') {
                            $('#textcountry').append('<span id="select"><img id="imgcountry" src="' + base_url + 'files/img/flag/icon/' + data[0].country_code + '.png' + '">' + '<span>(+' +data[0].phonecode + ')' + ' ' + data[0].name_cn + '</span></span>');

                        } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                            $('#textcountry').append('<span id="select"><img id="imgcountry" src="' + base_url + 'files/img/flag/icon/' + data[0].country_code + '.png' + '">' + '<span>(+' + data[0].phonecode+ ')' + ' ' + data[0].name_en + '</span></span>');

                        } else if ($.cookie("lng") == 'th') {
                            $('#textcountry').append('<span id="select"><img id="imgcountry" src="' + base_url + 'files/img/flag/icon/' + data[0].country_code + '.png' + '">' + '<span>(+' + data[0].phonecode + ')' + ' ' + data[0].name_th + '</span></span>');

                        }
                    }
                        
                    }
                });
                phonecode = datauser[0].s_phone_code;
                $('#codecountry').hide();

                 // $('#phonecode').append('<span id="codetext">' + '+' + x + '</span>');
                    // $('#numbercountry').append('<span id="select"><img id="imgcountry" src="' + urlimg + 'files/img/flag/icon/' + img + '.png' + '">' + '<span>(+' + x + ')' + ' ' + name + '</span></span>');
                    s_code =  datauser[0].id;
                    console.log(s_code)
                    // code_ref = datauser[0].s_code_ref;
                    console.log($('#email').val(datauser[0].email))
                    getemail = datauser[0].email;
                    getphone = datauser[0].phone;
                    $('#s_username').val(datauser[0].email);
                    $('#email').val(datauser[0].email);
                    $('.phonecode').text('+' + datauser[0].s_phone_code );

                    $('#phone').val(' ' + datauser[0].phone);
                    $('#name_lastname').val(datauser[0].name);
                    $('.label-floating').addClass('is-focused');
                    $('#summaryphone').html('+' + datauser[0].s_phone_code + datauser[0].phone);
                    $('#summaryemail').html(datauser[0].email);

                } else {
                    ckgetuser = false;
                    $('#email').val('');
                    $('#s_username').val('');
                    $('#phone').val('');
                    $('#codetext').remove();
                    $('.guestcountry').val('');
                    $('#name_lastname').val('');
                    $('.label-floating').removeClass('is-focused');
                    $('.phonecode').html('')
                    if ($.cookie("lng") == 'cn') {
                        $('#textcountry').html('请选择国家')  
                    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                        $('#textcountry').html('Please select country')
                    } else if ($.cookie("lng") == 'th') {
                        $('#textcountry').html('โปรดเลือกประเทศ');
                    } 
                }
            } else {
                console.log(this.checked)
                if (this.checked == false) {
                    $('#pleselogin').hide()
                } else {
                    $('#pleselogin').show()
                }
            }
        }) 
console.log("readysss!");
$('#selectcar').html('1')

/***************************************/
/*************GET POST URL**************/
/***************************************/

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
/*******END*******/

    // $('.box-login-non').click(function() {
    //     console.log(data + " " + from + " " + to);
    //     window.location.href = "https://www.welovetaxi.com/app/booking/register?by=book&data=" + data + "&from=" + from + "&to=" + to + "&lat_f=" + b_lat_f+ "&lng_f=" + b_lng_f+ "&lat_t=" + b_lat_t+ "&lng_t=" + b_lng_t + "&book=" + b_fashion;

    // });
    $('.btn_back_book').click(function() {
        $('#get_html_book').hide()
        $('#box-image').remove()        
    })
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://www.welovetaxi.com/app/booking/getcountry_control/process',
    //     //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data)
    //             //datacountry = data;
    //             // $('#codecountry').modal('show');
    //         $.each(data, function(i, val) {
    //             $('.guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
    //             //dataProvince.push(data[i])
    //             //$('#select-name').append('<li id="ct'+data[i].phonecode+'" value="'+data[i].phonecode+'" dataname ="'+data[i].name_en+'" img="'+data[i].country_code+'" onclick="sendCountry('+data[i].phonecode+');"><img id="imgcountry" src="'+url+'files/img/flag/icon/'+data[i].country_code+'.png'+'">'+'<span id="span-phonecode">('+'+'+data[i].phonecode+')</span>'+data[i].name_en+'</li>');


    //         });

    //     }
    // });
    // $('#numbercountry').append('<span id="textcountry">' + lng_getcountry + '</span>');
    // $('#code').append('<span id="textcode">code country</span>');

    // $('#datetimepicker11').datetimepicker({
    //     format: 'YYYY-MM-DD'

    //     // daysOfWeekDisabled: [0, 6]
    // });
    //$('#numbercountry').html('');
    //$('#code').html('code country')
    $('.select-country').click(function() {

        $('#codecountry').show(500);
        $('.select-name').html('')
        $.ajax({
            type: 'POST',
            url: base_url+'getcountry_control/process',
            //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
            //contentType: "application/json",
            dataType: 'json',
            success: function(data) {
                console.log(data)
                datacountry = data;

                $.each(data, function(i, val) {
                    $('.select-name').append('<li id="ct' + data[i].phonecode + '" value="' + data[i].phonecode + '" dataname ="' + data[i].name_en + '" img="' + data[i].country_code + '" onclick="sendCountry(' + data[i].phonecode + ');"><img id="imgcountry" src="' + base_url + 'files/img/flag/icon/' + data[i].country_code + '.png' + '">' + '<span id="span-phonecode">(' + '+' + data[i].phonecode + ')</span>' + data[i].name_en + '</li>');
                });
            }
        });
    });
    for (var i = 1; i <= 5; i++) {
        console.log(i)
        $('#num_cars').append('<option value="' + i + '" label="' + i + '"></option>');
    }
    $('#num_cars').on('change', function() {
        console.log('aaaaa')
        num_cars = this.value;
        if (type != 'Join') {
            $('#numsumprice').html(parseInt(costproduct) * parseInt(num_cars) + ' ' + '฿')
        }
        $('#selectcar').html(this.value)
        selectcar = this.value;
        checksumperson = parseInt(person) * parseInt(selectcar)
        $('#checksum').html(checksumperson)
        console.log('sumperson-' + checksumperson)
        $('#carsummary').html(selectcar)
        $('#costproduct').html(costproduct + ' ' + '฿')
        if (type != 'Join') {
            costdotcars = parseInt(costproduct) * parseInt(selectcar);
            $('#totalprice').html(costdotcars + ' ' + '฿')
            $('#costsummary').html(costdotcars + ' ' + '฿')
        }
    });
    $('#visa').on('change', function() {
        visa = this.value;
        console.log(visa)
        if (type != 'Join') {
        }
    });
    $('.guestcountry').on('change', function() {
        namecountry = this.value;
        console.log(namecountry)
    });
    $('#terminal').on('change', function() {
        terminal = this.value;
        console.log(terminal)
    });
    $('#num_adult').on('change', function() {
        num_adult = this.value;
        ondate = $('#on_date').val();
        $('#ondate_samary').html(ondate)
        $('#adultsummary').html(num_adult)
        $('#childsummary').html(num_child)
        total_adult = parseInt(costproduct) * parseInt(num_adult);
        total_price = parseInt(total_adult) + parseInt(total_child);
        sum_adult_child = parseInt(num_adult) + parseInt(num_child);
        console.log(sum_adult_child)
        console.log(checksumperson)
        console.log(sum_adult_child / parseInt(person));
        var s = sum_adult_child / parseInt(person);
        if (sum_adult_child <= parseInt(person)) {
            selectcar = 1;
        }
        if (sum_adult_child > parseInt(person) && (checksumperson != sum_adult_child)) {
            selectcar = parseInt(s) + 1;
            $('#checknumcar').html(selectcar)
            $('#selsect_car_pop').show(500)
        }
        if ((parseInt(s) * parseInt(person)) == sum_adult_child) {
            selectcar = parseInt(s);
        }

        console.log(selectcar)
        checksumperson = parseInt(person) * parseInt(selectcar)
        console.log('sumperson-' + checksumperson)
        total_price = parseInt(costproduct) * parseInt(selectcar);
        if (type == 'Join') {
            total_price = parseInt(costproduct) * parseInt(sum_adult_child);
            $('#numsumprice').html(total_price + ' ' + '฿')
            $('#totalprice').html(total_price + ' ' + '฿')
        } else {
            $('#sumnum').html(parseInt(sum_adult_child));
            $('#totalprice').html(total_price + ' ' + '฿')
            $('#selectcar').html(selectcar)
            $('#num_cars').html('')
            $('#num_cars').append('<option value="' + selectcar + '" label="' + selectcar + '" none=""></option>');
            for (var i = 1; i <= 5; i++) {
                console.log(i)
                $('#num_cars').append('<option value="' + i + '" label="' + i + '"></option>');
            }
            $('#checksum').html(checksumperson)
            $('#numsumprice').html(total_price + ' ' + '฿')
        }
    })
    $('#num_child').on('change', function() {
        num_child = this.value;
        ondate = $('#on_date').val();

        $('#ondate_samary').html(ondate)
        $('#childsummary').html(num_child)
        total_child = parseInt(costproduct) * parseInt(num_child);
        total_price = parseInt(total_adult) + parseInt(total_child);
        sum_adult_child = parseInt(num_adult) + parseInt(num_child);
        console.log(sum_adult_child)
        console.log(checksumperson)
        console.log(sum_adult_child / parseInt(person));
        var s = sum_adult_child / parseInt(person);
        if (sum_adult_child <= parseInt(person)) {
            selectcar = 1;
        }
        if (sum_adult_child > parseInt(person) && (checksumperson != sum_adult_child)) {
            selectcar = parseInt(s) + 1;
            $('#checknumcar').html(selectcar)
            $('#selsect_car_pop').show(500)
        }
        if ((parseInt(s) * parseInt(person)) == sum_adult_child) {
            selectcar = parseInt(s);
        }       
        checksumperson = parseInt(person) * parseInt(selectcar)
        console.log('sumperson2-' + checksumperson)
        total_price = parseInt(costproduct) * parseInt(selectcar);
        if (type == 'Join') {
            total_price = parseInt(costproduct) * parseInt(sum_adult_child);
            costdotcars = parseInt(costproduct) * (parseInt(num_adult) + parseInt(num_child));
            $('#totalprice').html(total_price + ' ' + '฿')
            $('#numsumprice').html(total_price + ' ' + '฿')
        } else {
            $('#sumnum').html(parseInt(sum_adult_child));
            $('#selectcar').html(selectcar)
            $('#checksum').html(checksumperson)
            $('#num_cars').html('')
            $('#num_cars').append('<option value="' + selectcar + '" label="' + selectcar + '" none=""></option>');
            for (var i = 1; i <= 5; i++) {
                console.log(i)
                $('#num_cars').append('<option value="' + i + '" label="' + i + '"></option>');
            }
            $('#numsumprice').html(total_price + ' ' + '฿')
        }
    })
    $('#on_date').on('change', function() {
    })
    $('#time_h').on('change', function() {
        time_h = this.value;
        ontime = time_h + ':' + time_m
        $('#ontime_samary').html(ontime)
    })
    $('#time_m').on('change', function() {
        time_m = this.value;
        ontime = time_h + ':' + time_m
        $('#ontime_samary').html(ontime)
    })
    $('#name_lastname').on('change', function() {
        name = this.value;
        console.log(name)
        $('#summaryname').html(name)

    })
    $('#phone').on('change', function() {
        phone = this.value;
        phonecode = $('#inputphonecode').val();
        console.log(phonecode)
        $('#summaryphone').html('+' + phonecode + phone);

    })
    $('#email').on('change', function() {
        email = this.value;
        console.log(email)
        $('#summaryemail').html(email)
        s_email = email;
    })
    $('#other').on('change', function() {
        other = this.value;
        console.log(other)
        $('#summaryother').html(other)
    })
    $('#flight').on('change', function() {
        flight = this.value;
        console.log(flight)
        $('#textflight').html(flight)
    })
    $('.btn-close').on('click', function() {
        $('#waning-flight').hide(500);
    });
    $('.icon-close').on('click', function() {
        $('#acceptance_pin_pop').hide(500)
        $('#selsect_car_pop').hide(500)
        $('#input_data_pop').hide(500) 
    })
}) 
function selecetBook(){
    $('#loading').show()
    console.log(b_fashion)  
    phone = $('#phone').val();
    email = $('#email').val();
     name = $('#name_lastname').val();
    $('.loader-wrapper').css('display', 'block')
    var data;
    if (ckgetuser == true) {
        //email = getemail;
        // phone = getphone;
    }        
    if(b_fashion == 'Reservation' || b_fashion == 'Service'){            
        console.log(ontime)
        if(ontime == undefined){
            ontime = '00:00';
            $('#time_h option:selected').focus();
        }
        if(ondate == undefined){
            ondate = $('#on_date').val();
        }
    }
    if(b_fashion == 'Realtime'){
        ondate = newDate;
       
        console.log(newDate)
        var newHours;
        var newMinutes;
        num_cars = 1;
        console.log(getnewdate.getHours().length)
        console.log(getnewdate.getMinutes().length)
        if(getnewdate.getHours()<10){
            newHours = '0'+getnewdate.getHours()
        }
        else{
            newHours = getnewdate.getHours()
        }
        if(getnewdate.getMinutes() <10){
            newMinutes = '0'+getnewdate.getMinutes()
        }
        else{
            newMinutes = getnewdate.getMinutes()                
        }               
        ontime =newHours+':'+newMinutes;
        console.log(ontime)
        total_price = getcosereltime;
    }
    if ((area == 'In' || area == 'Out') && flight == undefined ) {
        $('#flight').focus();
        $('#flight').css('border','1px solid #f44336')
         $('#loading').hide()
        swal("กรุณาป้อนข้อมูล","ตรวจสอบอีกครั้งหรือติดต่อเจ้าหน้าที่","error");
        

        return false;
    } else {
        $('#flight').css('border','1px solid #dfdfdf')
    }

//ckgetuser == false
    if($('#name_lastname').val() == '' ){
        $('#name_lastname').focus()
        $('#name_lastname').css('border','1px solid #f44336')
        $('#loading').hide()
        swal("กรุณาป้อนข้อมูล","ตรวจสอบอีกครั้งหรือติดต่อเจ้าหน้าที่","error");
        

        return false;
    }
    else{
        $('#name_lastname').css('border','1px solid #dfdfdf')
    }
    if($('#phone').val() == '' ){
        $('.select-country').click();
        $('#phone').focus()
        $('#phone').css('border','1px solid #f44336')
        $('#loading').hide()
        swal("กรุณาป้อนข้อมูล","ตรวจสอบอีกครั้งหรือติดต่อเจ้าหน้าที่","error");
        return false;
    }
    else{
        $('#phone').css('border','1px solid #dfdfdf')
    }
    if(phonecode == '' || phonecode == undefined){
        $('.select-country').click();
       $('#loading').hide()
        return false;
    }
    if ($.cookie("detect_user") == undefined) {
        if($('#email').val() == ''){
            $('#loading').hide()
           swal("คุณไม่ได้จองในสถานะสมาชิก","จำเป็นต้องป้อนอีเมล ระบบจะส่งข้อมูลการจองเข้าอีเมลของคุณ","error");
           
            return false;
        }
}
    if(Checkacceptance == false){
        // $('#acceptance_pin_pop').show(500) 
        $('#loading').hide()
        swal("กรุณายอมรับ","ข้อตกลง","error");

        return false;           
    }        
    console.log(ckgetuser+'*********************************')
    console.log(code)
    console.log(namecountry)
    console.log(num_cars)
    console.log(selectcar)
    console.log(num_adult)
    console.log(num_child)
    console.log(ondate)
    console.log(ontime)
    console.log(time_h)
    console.log(time_m)
    console.log(name)
    console.log(phone)

    console.log(other)
    console.log(email)
    console.log(place)
    console.log(to_place)
    console.log(costdotcars)
    console.log(s_code + 'code')
    console.log(code_ref + 'code_ref');
    console.log(area)
    console.log(cost_a_nett)
    // var url2 = 'https://welovetaxi.com/app/booking/';    
    console.log(flight)
    console.log(area)
    console.log(phonecode)
    console.log(flight)
    var o = ondate.split('-');
    var m,d ;
// return false;
    if($('#current').val() != '' && $('#pac-input').val() != ''){
        place_from = $('#current').val();
        place_to = $('#pac-input').val();

    }

    console.log(o[2].length)
    console.log(place_from)
    console.log(place_to)
    console.log(check_type_book)
    if(o[2].length == 1  || o[1].length == 1){
        if(o[1].length == 1){
            m = '0'+o[1];
        }
        else{
            m = o[1];
        }
        if(o[2].length == 1){
            d = '0'+o[2];
        }
        else{
            d = o[2];
        }
        ondate = o[0]+'-'+m+'-'+d;
    }            
    console.log(ondate)               

    if((area == 'In' || area == 'Out') ) {
        if(flight != undefined){
            if(b_fashion == 'Reservation' || b_fashion == 'Service'){                                
                console.log(ontime)
                if(ontime == undefined){
                    ontime = '00:00';
                    $('#time_h option:selected').focus();
                }
                if(ondate == undefined){
                    ondate = $('#on_date').val();
                }
                addbooking();
            }
            else{
                addbooking();
            }  
        }
        else{
            $('#loading').hide()

            $('#input_data_pop').hide()
        }                        
    }
    else{
        if(b_fashion == 'Reservation' || b_fashion == 'Service'){                            
            console.log(ontime)
            if(ontime == undefined){
                ontime = '00:00';
                $('#time_h option:selected').focus();
            }
            if(ondate == undefined){
                ondate = $('#on_date').val();
            }
            addbooking();
        }
        else{
            addbooking();
        }
    }

}
function addbooking(){
    console.log(s_code + 'code')
    var irealtime = 0;
    if ($('#email').val() == '') {
      email = '';
  }
  if (b_fashion == 'Realtime') {
    irealtime = 1;
}

$.ajax({
    type: 'POST',
    url: base_url+'savebook_control/process',
    data: {
        'from': b_from,
        'to': b_to,
        'numcar': selectcar,
        'program': b_data,
        'adult': num_adult,
        'child': num_child,
        'onndate': ondate,
        'pax': sum_adult_child,
        'ontime': ontime,
        'name': name,
        'phone': $('#phone').val(),
        'phonecode': phonecode,
        'email': email,
        'cost': total_price,
        'other': other,
        'guest_other': namecountry,
        'arrival_flight': flight,
        'visa': visa,
        'code': code_r,
        's_code': s_code,
        'code_ref': code_ref,
        'cost_a_nett': cost_a_nett,
        'lat_f': b_lat_f,
        'lng_f': b_lng_f,
        'lat_t': b_lat_t,
        'lng_t': b_lng_t,
        'book': b_fashion,
        'place_from': place_from,
        'place_to': place_to,
        'terminal': terminal,
        'product_type': protype,
        'i_realtime': irealtime

    },
        // contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            agent_ref = data;
            $('.loader-wrapper').css('display', 'none')
            if (type == 'Join') {
                if (area == 'Point' || area == 'In') {
                    var param = {
                        "agent_ref": data,
                        "guest_english": name,
                        "guest_other": namecountry,
                        "phone": '+' + phonecode + $('#phone').val(),
                        "email": email,
                        "social_wechat": "",
                        "social_qq": "",
                        "social_wangwang": "",
                        "social_line": "",
                        "social_skype": "",
                        "social_whatapp": "",
                        "social_facebook": "",
                        "product": code,
                        "arrival_date": ondate,
                        "arrival_time": ontime,
                        "arrival_flight": flight,
                        "arrival_visa": 0,
                        "total_pax": sum_adult_child,
                        "baggage": 0,
                        "to_place": toplace_name,
                        "to_place_address": adress_to,
                        "remark": other,
                        "type": type,
                        "area": area,
                        'code': code_r,
                         's_code': s_code,
                        'code_ref': code_ref,
                        'cost_a_nett': cost_a_nett,
                        'product_type': protype,
                        'i_realtime': irealtime,
                        'ondate': ondate,
                        'ontime': ontime,
                        'lat_f': b_lat_f,
                        'lng_f': b_lng_f,
                        'lat_t': b_lat_t,
                        'lng_t': b_lng_t,
                        'address_from' : $('#current').val(),
                        'address_to' : $('#pac-input').val()
                    };
                }
            }
            if (type == 'Join') {
                if (area == 'Out') {
                    var param = {
                        "agent_ref": data,
                        "guest_english": name,
                        "guest_other": namecountry,
                        "phone": '+' + phonecode + $('#phone').val(),
                        "email": email,
                        "social_wechat": "",
                        "social_qq": "",
                        "social_wangwang": "",
                        "social_line": "",
                        "social_skype": "",
                        "social_whatapp": "",
                        "social_facebook": "",
                        "product": code,
                        "departure_date": ondate,
                        "departure_time": ontime,
                        "departure_flight": flight,
                        "departure_terminal": terminal,
                        "total_pax": sum_adult_child,
                        "baggage": "3",
                        "pickup_place": place_name,
                        "pickup_place_address": adresss,
                        "service_time": ontime,
                        "remark": other,
                        "type": type,
                        "area": area,
                        'code': code_r,
                         's_code': s_code,
                        'code_ref': code_ref,
                        'cost_a_nett': cost_a_nett,
                        'product_type': protype,
                        'i_realtime': irealtime,
                        'ondate': ondate,
                        'ontime': ontime,
                        'lat_f': b_lat_f,
                        'lng_f': b_lng_f,
                        'lat_t': b_lat_t,
                        'lng_t': b_lng_t,
                        'address_from' : $('#current').val(),
                        'address_to' : $('#pac-input').val()
                    };
                }
            }
            if (type == 'Private') {
                if (area == 'In') {
                    var param = {
                        "agent_ref": data,
                        "guest_english": name,
                        "guest_other": namecountry,
                        "phone": '+' + phonecode + $('#phone').val(),
                        "email": email,
                        "social_wechat": "",
                        "social_qq": "",
                        "social_wangwang": "",
                        "social_line": "",
                        "social_skype": "",
                        "social_whatapp": "",
                        "social_facebook": "",
                        "product": code,
                        "arrival_date": ondate,
                        "arrival_time": ontime,
                        "arrival_flight": flight,
                        "total_pax": sum_adult_child,
                        "baggage": "",
                        "to_place": toplace_name,
                        "to_place_address": adress_to,
                        "number_car": selectcar,
                        "remark": other,
                        "type": type,
                        "area": area,
                        'visa': visa,
                        'code': code_r,
                         's_code': s_code,
                        'code_ref': code_ref,
                        'cost_a_nett': cost_a_nett,
                        'product_type': protype,
                        'i_realtime': irealtime,
                        'ondate': ondate,
                        'ontime': ontime,
                        'lat_f': b_lat_f,
                        'lng_f': b_lng_f,
                        'lat_t': b_lat_t,
                        'lng_t': b_lng_t,
                        'address_from' : $('#current').val(),
                        'address_to' : $('#pac-input').val()
                    };
                }
            }
            if (type == 'Private') {
                if (area == 'Out') {
                    var param = {
                        "agent_ref": data,
                        "guest_english": name,
                        "guest_other": namecountry,
                        "phone": '+' + phonecode + $('#phone').val(),
                        "email": email,
                        "social_wechat": "",
                        "social_qq": "",
                        "social_wangwang": "",
                        "social_line": "",
                        "social_skype": "",
                        "social_whatapp": "",
                        "social_facebook": "",
                        "product": code,
                        "departure_date": ondate,
                        "departure_time": ontime,
                        "departure_flight": flight,
                        "departure_terminal": terminal,
                        "total_pax": sum_adult_child,
                        "baggage": "",
                        "pickup_place": place_name,
                        "pickup_place_address": adresss,
                        "service_time": service,
                        "number_car": selectcar,
                        "remark": other,
                        "type": type,
                        "area": area,
                        'code': code_r,
                         's_code': s_code,
                        'code_ref': code_ref,
                        'cost_a_nett': cost_a_nett,
                        'product_type': protype,
                        'i_realtime': irealtime,
                        'ondate': ondate,
                        'ontime': ontime,
                        'lat_f': b_lat_f,
                        'lng_f': b_lng_f,
                        'lat_t': b_lat_t,
                        'lng_t': b_lng_t,
                        'address_from' : $('#current').val(),
                        'address_to' : $('#pac-input').val()
                    };
                }
            }
            if (type == 'Point To Point') {
                var param = {
                    "agent_ref": data,
                    "guest_english": name,
                    "guest_other": namecountry,
                    "phone": '+' + phonecode + $('#phone').val(),
                    "email": email,
                    "social_wechat": "",
                    "social_qq": "",
                    "social_wangwang": "",
                    "social_line": "",
                    "social_skype": "",
                    "social_whatapp": "",
                    "social_facebook": "",
                    "product": code,
                    "service_date": ondate,
                    "service_time": ontime,
                    "total_pax": sum_adult_child,
                    "number_car": selectcar,
                    "pickup_place": place_name,
                    "to_place": toplace_name,
                    "remark": other,
                    "type": type,
                    "area": area,
                    'code': code_r,
                     's_code': s_code,
                    'code_ref': code_ref,
                    'cost_a_nett': cost_a_nett,
                    'product_type': protype,
                    'i_realtime': irealtime,
                    'ondate': ondate,
                    'ontime': ontime,
                    'lat_f': b_lat_f,
                    'lng_f': b_lng_f,
                    'lat_t': b_lat_t,
                    'lng_t': b_lng_t,
                    'address_from' : $('#current').val(),
                    'address_to' : $('#pac-input').val()
                };
            }
            if (type == 'Private' && area == 'Service') {
                var param = {
                    "agent_ref": data,
                    "guest_english": name,
                    "guest_other": namecountry,
                    "phone": '+' + phonecode + $('#phone').val(),
                    "email": email,
                    "social_wechat": "",
                    "social_qq": "",
                    "social_wangwang": "",
                    "social_line": "",
                    "social_skype": "",
                    "social_whatapp": "",
                    "social_facebook": "",
                    "product": code,
                    "service_date": ondate,
                    "service_time": ontime,
                    "total_pax": sum_adult_child,
                    "number_car": selectcar,
                    "pickup_place": place_name,
                    "pickup_place_address": adresss,
                    "to_place": toplace_name,
                    "to_place_address": adress_to,
                    "car_use_plan": "",
                    "remark": other,
                    "type": type,
                    "area": area,
                    'code': code_r,
                     's_code': s_code,
                    'code_ref': code_ref,
                    'cost_a_nett': cost_a_nett,
                    'product_type': protype,
                    'i_realtime': irealtime,
                    'ondate': ondate,
                    'ontime': ontime,
                    'lat_f': b_lat_f,
                    'lng_f': b_lng_f,
                    'lat_t': b_lat_t,
                    'lng_t': b_lng_t,
                    'address_from' : $('#current').val(),
                        'address_to' : $('#pac-input').val()
                };
            }
            if (type == 'Private' && area == 'Point') {
                var param = {
                    "agent_ref": data,
                    "guest_english": name,
                    "guest_other": namecountry,
                    "phone": '+' +  phonecode + $('#phone').val(),
                    "email": email,
                    "product": code,
                    "service_date": ondate,
                    "service_time": ontime,
                    "departure_terminal": terminal,
                    "total_pax": sum_adult_child,
                    "social_wechat": "",
                    "social_qq": "",
                    "social_wangwang": "",
                    "social_line": "",
                    "social_skype": "",
                    "social_whatapp": "",
                    "social_facebook": "",
                    "pickup_place": place_name,
                    "pickup_place_address": adresss,
                    "to_place": toplace_name,
                    "to_place_address": adress_to,
                    "number_car": selectcar,
                    "remark": other,
                    "type": type,
                    "area": area,
                    'code': code_r,
                     's_code': s_code,
                    'code_ref': code_ref,
                    'cost_a_nett': cost_a_nett,
                    'product_type': protype,
                    'i_realtime': irealtime,
                    'ondate': ondate,
                    'ontime': ontime,
                    'lat_f': b_lat_f,
                    'lng_f': b_lng_f,
                    'lat_t': b_lat_t,
                    'lng_t': b_lng_t,
                    'address_from' : $('#current').val(),
                        'address_to' : $('#pac-input').val()
                };
            }
            // var lng_please_accept= 'Please accept the agreement.';
            // $('.lng_please_accept').html('请接受协议。')
            console.log(param)
           
            $.ajax({
                type: 'POST',
                url: base_url+'savebook_control/saveapi',
                data: param,
                //contentType: "application/json",
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    console.log(email);
                     // return false;
                    if (data.arr_order_api.status == 202) {
                        // if ($('#email').val() != '') {
                        $.ajax({
                            type: 'POST',
                            url: base_url+'sendemail.php',
                            data: { 'mail': email, 'voucher': data.arr_order.invoice},
                            //contentType: "application/json",
                           // dataType: 'json',
                            success: function(data2) {
                            console.log(data2);
                                console.log(s_email);
                                if($.cookie("detect_user") != undefined){
                                    window.location.href = base_url+"dashboard/view_user";

                                }
                                else{
                                    // $('#input_data_pop').show(500)
                                   // $('#loading').hide()
                                    window.location.href = base_url+'dashboard/voucher?order_id='+data.arr_order_api.invoice;
                                }
                            }
                        });
                    // }
                    // else{
                    //    //$('#loading').hide()
                    //                 window.location.href = base_url+'dashboard/voucher?order_id='+data.arr_order_api.invoice; 
                    // }
                        //$('#loading').hide()

                    } else {
                        $('#loading').hide()
                         swal("ทำรายการไม่สำเร็จ","กรุณาตรวจสอบอีกครั้งหรือติดต่อเจ้าหน้าที่","error");
                        // $('#input_data_pop').show(500)

                    }


                }
            });

        }
    });
}

function phonecodesend(x) {
    phonecode = x;
    console.log(phonecode)
}


function sendCountry(x) {
 $('#codetext').remove();
 $('#inputphonecode').val(x)
    // alert(x)
    // var url = 'https://welovetaxi.com/app/booking2/';
    console.log(x)
    if (x == undefined) {
        $.cookie("phonecode", '');
        x = '';
    } else {
        $.cookie("phonecode", x);
    }
    $('#inputphonecode').val(x);
    phonecode = x;
    $('#codecountry').hide();
    var name = $('#ct' + x).attr('dataname');
    var img = $('#ct' + x).attr('img');
    //$('#code').html(x)
    console.log(name);
    //phonecodesend(x);
    $('#textcountry').remove();
    $('#textcode').remove();

    $('#select').remove();
    $('#codetext').remove();
    $('.numbercountry').append('<span id="select"><img id="imgcountry" src="' + base_url + 'files/img/flag/icon/' + img + '.png' + '">' + '<span>(+' + x + ')' + ' ' + name + '</span></span>');
    $('#phonecode').append('<span id="codetext">' + '+' + x + '</span>');
    //$('#numbercountry').val('(+'+x+')'+' '+name);
}
function bookingdetailservice(transfer_id,from,to,topic_from,topic_to,lat_f,lng_f,lat_t,lng_t,book){
    $('#get_html_book').show(500)
    console.log('======================')
    console.log(lat_f)
    console.log(lng_f)
    getDetailbookservice(from,to,lat_f,lng_f,his_lat_t,his_lng_t,book,transfer_id,topic_from,topic_to)

}
function bookingdetail(transfer_id,from,to,lat_f,lng_f,lat_t,lng_t,book){
    console.log(transfer_id+'-'+from+'-'+to+'-'+lat_f+'-'+lng_f+'-'+lat_t+'-'+lng_t+'-'+book)
    var datalocation;
    his_transfer_id = transfer_id;
    his_from = from;
    his_to = to;
    his_lat_f = lat_f;
    his_lng_f = lng_f;
    his_lat_t = lat_t;
    his_lng_t = lng_t
    his_fashion = book;
    
    // $('#history_pop').show(500)
    // href="book?data=' + compae1private[i].transfer_id + '&from=' + dataPlacefrom + '&to=' + dataPlaceto + '&lat_f='+lat_f+'&lng_f='+lng_f+'&lat_t='+lat_t+'&lng_t='+lng_t+'&book='+booking+'" >
    if ($.cookie("detect_user") && check_type_book != 'his') {
        $('#history_pop').show(500)
        //getDetailbook(his_from,his_to,his_lat_f,his_lng_f,his_lat_t,his_lng_t,his_fashion,his_transfer_id)


    }
    else{
        // console.log(base_url + 'book?data=' + transfer_id + '&from=' + dataPlacefrom + '&to=' + dataPlaceto + '&lat_f='+lat_f+'&lng_f='+lng_f+'&lat_t='+lat_t+'&lng_t='+lng_t+'&book='+booking)
        console.log($.cookie("detect_user"))
        $('#get_html_book').show(500)
        getDetailbook(his_from,his_to,his_lat_f,his_lng_f,his_lat_t,his_lng_t,his_fashion,his_transfer_id)        
        // window.location.href = base_url + 'book?data=' + transfer_id + '&from=' + dataPlacefrom + '&to=' + dataPlaceto + '&lat_f='+lat_f+'&lng_f='+lng_f+'&lat_t='+lat_t+'&lng_t='+lng_t+'&book='+booking;
    }
}
function getDetailbook(a,b,c,d,e,f,g,h){
    b_from = a;
    b_to = b;
    b_lat_f = c;
    b_lng_f = d;
    b_lat_t = e;
    b_lng_t = f;
    b_fashion = g;
    b_data = h;
    // alert(b_fashion)
    if ($.cookie("lng") == 'cn') {
        lang_to_map = 'zh-CN';
        // document.getElementById("current").value = "你的位置...";
    } else if ($.cookie("lng") == 'th') {
        lang_to_map = 'th';
    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {

        lang_to_map = 'en';

    }
    console.log($('#current').val()+'*************************************')
    console.log($('#pac-input').val()+'******************************')
    $('#placefrom').html($('#current').val())
     $('#placeto').html($('#pac-input').val())
     // $('#placefrom').html(data.results[0].formatted_address)
     // $('#placeto').html(data.results[0].formatted_address)
    
    // url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + b_lat_f + ',' + b_lng_f + '&sensor=true&language=' + lang_to_map;
    
//     $.post(url, function(data) {
//         console.log(data);
//         $('#placefrom').html(data.results[0].formatted_address)
//         place_from = data.results[0].formatted_address;
//                     // infowindow.close();
//                     // infowindow.setContent('<div id="setmap">' + data.results[0].formatted_address + '</div> <input id="changesetname1" name="changesetname1" onchange="changesetname2(changesetname1)" placeholder="'+set_name+'" type="text" style=""  ><input id="changesetphone2" name="changesetphone2" onchange="changesetphone2(changesetphone2)" placeholder="'+phoneplace+'" type="text" style=""  ><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" border-radius: 25px;style="display: inline-block;" onclick="savePlaceOften(' + type_call + ',' + lat_f + ',' + lng_f + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
//                     // infowindow.open(map, markerPlaceOfften);
//                     //$('#often-input2').show(500);
//     //<div class="btn btn-sm Klsetname" onclick="Klsetname();" style="display: inline-block;background: rgb(22, 179, 177);">' + set_name + '</div>
//     url2 = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + b_lat_t + ',' + b_lng_t + '&sensor=true&language=' + lang_to_map;
    
// //     $.post(url2, function(data) {
// //         console.log(data);
// //         $('#placeto').html(data.results[0].formatted_address)
// //         place_to = data.results[0].formatted_address;
// //                     // infowindow.close();
// //                     // infowindow.setContent('<div id="setmap">' + data.results[0].formatted_address + '</div> <input id="changesetname1" name="changesetname1" onchange="changesetname2(changesetname1)" placeholder="'+set_name+'" type="text" style=""  ><input id="changesetphone2" name="changesetphone2" onchange="changesetphone2(changesetphone2)" placeholder="'+phoneplace+'" type="text" style=""  ><div class="btn btn-sm ' + btn_color + ' pull-right btn-part" border-radius: 25px;style="display: inline-block;" onclick="savePlaceOften(' + type_call + ',' + lat_f + ',' + lng_f + ',\'' + data.results[0].place_id + '\',\'' + type_place + '\')">' + txt_save + '</div>');
// //                     // infowindow.open(map, markerPlaceOfften);
// //                     //$('#often-input2').show(500);
// //     //<div class="btn btn-sm Klsetname" onclick="Klsetname();" style="display: inline-block;background: rgb(22, 179, 177);">' + set_name + '</div>
    
// // });
// });

    if(b_fashion == 'Realtime'){
        $('#car-show').hide();
        $('#select_date').hide();
        // $('#select_date').disabled = true;
        $('#selece_time').hide()
        $('#select_adult_child').hide()
        
        $('.box-list-cars ').hide()
        $('#Rondatetext ').show()
        $('#visa-show ').hide();
        $('#box_price ').hide();
        $('.btn-realtime').css({ 'background': '#3b5998', 'color': '#ffffff' });
        
        
        $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#333' });
        
        
        
    }
    else if(b_fashion == 'Reservation'){
        $('.btn-reservation').css({ 'background': '#3b5998', 'color': '#ffffff' });
        
        
        $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-car-service').css({ 'background': '#ffffff', 'color': '#333' });
        $('#Rondate').hide()
        $('#Rondatetext ').hide()
        $('#select_date').show()
        $('#selece_time').show()
        $('#select_adult_child').show()
        
    }
    else{
        $('.btn-car-service').css({ 'background': '#3b5998', 'color': '#ffffff' });        
        // $('.btn-car-service').css('color', '#16B3B1');        
        $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
        $('#Rondate').hide()
        $('#Rondatetext ').hide() 
    }
    $.ajax({
        type: 'POST',
        url: base_url+'getcountry_control/process',
        //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            $.each(data, function(i, val) {
                $('.guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
            });
        }
    });
    $('.numbercountry').append('<span id="textcountry">' + lng_getcountry + '</span>');
    $('#code').append('<span id="textcode">code country</span>');


    // GET DETAIL


    $.ajax({
        type: 'POST',
        url: base_url+'service/getDetail.php',
        data: { 'id': b_data },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            getcosereltime = data[0].cost_a_sell;
            if (data[0].area == "Service") {
                $('.box-program').hide();
                $('.boxs-to').hide();
                $('.boxs-from').hide();
            }
            console.log(data[0].province_name_en)
            if ($.cookie("lng") == 'cn') {
                $('#name_lastname').attr('placeholder','名 - 姓');
                $('#phone').attr('placeholder','电话');
                $('#email').attr('placeholder','电子邮件');
                $('#flight').attr('placeholder','航班');
                $('#other').attr('placeholder','其他');
                $('.lng-have').html('有');                
                $('.lng-none-have').html('沒有');
                $('.lng-demestic').html('國內');                       
                $('.lng-international').html('國際');
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_cn);
                    $('#province_to').html(data[0].province_name_to_cn);
                }
                $('#province').html(data[0].province_name_cn);
                $('#province_to').html(data[0].province_name_to_cn);
                $('#cars_persion').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_cn)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_en);
                    $('#province_to').html(data[0].province_name_to_en);
                }                
                $('#name_lastname').attr('placeholder','First Name - Last Name');
                $('#phone').attr('placeholder','Phone');
                $('#email').attr('placeholder','Email');
                $('#flight').attr('placeholder','Flight');
                $('#other').attr('placeholder','Other');
                $('.lng-have').html('Have');                
                $('.lng-none-have').html('None');
                $('.lng-demestic').html('Domestic');                       
                $('.lng-international').html('International');                
                $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_en)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_th);
                    $('#province_to').html(data[0].province_name_to_th);
                }
                $('#name_lastname').attr('placeholder','ชื่อ - นามสกุล');
                $('#phone').attr('placeholder','โทรศัพท์');
                $('#email').attr('placeholder','อีเมล์');
                $('#flight').attr('placeholder','เที่ยวบิน');
                $('#other').attr('placeholder','อื่น ๆ');               
                $('.lng-have').html('มี');                       
                $('.lng-none-have').html('ไม่มี');
                $('.lng-demestic').html('ในประเทศ');                       
                $('.lng-international').html('ระหว่างประเทศ'); 
                $('#cars_persion').html(data[0].car_topic_th + data[0].pax_th)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_th)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_th + data[0].pax_th)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            }
            costproduct = data[0].cost_a;
            type = data[0].type;
            cost_a_nett = data[0].cost_a_nett;
            if (data[0].area == 'In' || data[0].area == 'Out') {
                $('.flight-box').show();

            } else {
                $('.flight-box').hide();

            }
            console.log(type)
            console.log($.cookie("lng"))
            if (data[0].type == 'Private' && data[0].area == 'In') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('到达日期:')
                    $('#texttime').html('到达时间:')
                    $('#date-final').html('到达日期:')
                    $('#time-final').html('到达时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Arrival date:')
                    $('#texttime').html('Arrival time:')
                    $('#date-final').html('Arrival date:')
                    $('#time-final').html('Arrival time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันที่มาถึง:')
                    $('#texttime').html('เวลาถึง:')
                    $('#date-final').html('วันที่มาถึง:')
                    $('#time-final').html('เวลาถึง:')
                } 


            }
            if (data[0].type == 'Join' && data[0].area == 'In') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html(' 到达日期:')
                    $('#texttime').html(' 到达时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html(' 到达日期:')
                    $('#time-final').html(' 到达时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Arrival date:')
                    $('#texttime').html('Arrival time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Arrival date:')
                    $('#time-final').html('Arrival time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันที่มาถึง:')
                    $('#texttime').html(' เวลาถึง:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่มาถึง:')
                    $('#time-final').html('เวลาถึง:')
                } 
            }
            if (data[0].type == 'Join' && data[0].area == 'Out') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html(' 出发日期:')
                    $('#texttime').html(' 出发时间:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('出发日期:')
                    $('#time-final').html('出发时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันเดินทาง:')
                    $('#texttime').html('เวลาออกเดินทาง:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#box-terminal').css('display', 'block')
                    $('#date-final').html('วันเดินทาง:')
                    $('#time-final').html('เวลาออกเดินทาง:')
                } 
            }
            if (data[0].type == 'Private' && data[0].area == 'Point') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('使用日期:')
                    $('#texttime').html('使用时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('使用日期:')
                    $('#time-final').html('使用时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันที่ใช้บริการ:')
                    $('#texttime').html('เวลาใช้บริการ:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่ใช้บริการ:')
                    $('#time-final').html('เวลาใช้บริการ:')
                }
            }
            if (data[0].type == 'Private' && data[0].area == 'Service') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('使用日期:')
                    $('#texttime').html('使用时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('使用日期:')
                    $('#time-final').html('使用时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันที่ใช้บริการ:')
                    $('#texttime').html('เวลาใช้บริการ:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่ใช้บริการ:')
                    $('#time-final').html('เวลาใช้บริการ:')
                } 
            }
            if (data[0].type == 'Join' && data[0].area == 'Point') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('出发日期:')
                    $('#texttime').html('出发时间:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('出发日期:')
                    $('#time-final').html(' 出发时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันเดินทาง:')
                    $('#texttime').html('เวลาออกเดินทาง:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('วันเดินทาง:')
                    $('#time-final').html('เวลาออกเดินทาง:')
                }
            }
            if (data[0].type == 'Private' && data[0].area == 'Out') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('出发日期:')
                    $('#texttime').html('出发时间:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('出发日期:')
                    $('#time-final').html('出发时间:')
                    $('#box-terminal').css('display', 'block')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Departure date:')
                    $('#texttime').html('Departure time:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('Departure date:')
                    $('#time-final').html('Departure time:')
                    $('#box-terminal').css('display', 'block')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันเดินทาง:')
                    $('#texttime').html('เวลาออกเดินทาง:')
                    $('#visa-show').css('display', 'none')
                    $('#car-show').css('display', 'none')
                    $('#date-final').html('วันเดินทาง:')
                    $('#time-final').html('เวลาออกเดินทาง:')
                    $('#box-terminal').css('display', 'block')
                }
            }
            pro_id = data[0].transfer_id;
            person = data[0].person;
            checksumperson = person;
            program_name = data[0].topic_en;
            area = data[0].area;
            car_model = data[0].car_model;
            code = data[0].code;
            console.log(code)
            $('#checksum').html(checksumperson)
            console.log(data[0].transfer_icon)
            $('#images-icon').append('<img src="'+base_url+'files/images/carmodelicon/' + data[0].transfer_icon + '.jpg" id="box-image">');
        }
    });
$.ajax({
    type: 'POST',
    url: base_url+'service/getplace.php',
    data: { 'from': b_from, 'to': b_to },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data[0])
            console.log(data[1])
            $('#pickup_from').html(data[0].topic + '(' + data[0].name + ')');
            $('#pickup_to').html(data[1].topic + '(' + data[1].name + ')');
            place = data[0].id;
            to_place = data[1].id;
            place_name = data[0].topic;
            toplace_name = data[1].topic;
            adresss = data[0].address;
            adress_to = data[1].address;
            $('#province').html(data[0].name);
            $('#province_to').html(data[1].name);
        }
    });
}
function getDetailbookservice(a,b,c,d,e,f,g,h,x,y){
    b_from = a;
    b_to = b;
    b_lat_f = c;
    b_lng_f = d;
    b_lat_t = e;
    b_lng_t = f;
    b_fashion = g;
    b_data = h;
    if ($.cookie("lng") == 'cn') {
        lang_to_map = 'zh-CN';
    } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
        lang_to_map = 'th';
    } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {       
        lang_to_map = 'en';       
    }
    $('#placefrom').html(x)                   
    $('#placeto').html(y)                  

    $('.btn-car-service').css({ 'background': '#3b5998', 'color': '#ffffff' });        
        // $('.btn-car-service').css('color', '#16B3B1');        
        $('.btn-realtime').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-reservation').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-home').css({ 'background': '#ffffff', 'color': '#333' });
        $('.btn-management').css({ 'background': '#ffffff', 'color': '#333' });
        $('#Rondate').hide()
        $('#Rondatetext ').hide() 

        $.ajax({
            type: 'POST',
            url: base_url+'getcountry_control/process',
        //data: {'province':province,'field' :field_nane,'request':request,'method_name':method_name,'from':table },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            $.each(data, function(i, val) {
                $('.guestcountry').append('<option value="' + data[i].name_en + '" label="' + data[i].name_en + '" none=""></option>');
            });

        }
    });
        $('.numbercountry').append('<span id="textcountry">' + lng_getcountry + '</span>');
        $('#code').append('<span id="textcode">code country</span>');

    // GET DETAIL
    $.ajax({
        type: 'POST',
        url: base_url+'service/getDetail.php',
        data: { 'id': b_data },
        //contentType: "application/json",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            getcosereltime = data[0].cost_a_sell;
            if (data[0].area == "Service") {
                // $('.box-program').hide();
                $('.boxs-to').hide();
                $('.boxs-from').hide();
            }
            console.log(data[0].province_name_en)
            if ($.cookie("lng") == 'cn') {
                $('#name_lastname').attr('placeholder','名 - 姓');
                $('#phone').attr('placeholder','电话');
                $('#email').attr('placeholder','电子邮件');
                $('#flight').attr('placeholder','航班');
                $('#other').attr('placeholder','其他');
                $('.lng-have').html('有');                
                $('.lng-none-have').html('沒有');
                $('.lng-demestic').html('國內');                       
                $('.lng-international').html('國際'); 
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_cn);
                    $('#province_to').html(data[0].province_name_to_cn);
                }
                $('#province').html(data[0].province_name_cn);
                $('#province_to').html(data[0].province_name_to_cn);
                $('#cars_persion').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_cn)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_cn + data[0].pax_cn)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_en);
                    $('#province_to').html(data[0].province_name_to_en);
                }                
                $('#name_lastname').attr('placeholder','First Name - Last Name');
                $('#phone').attr('placeholder','Phone');
                $('#email').attr('placeholder','Email');
                $('#flight').attr('placeholder','Flight');
                $('#other').attr('placeholder','Other');
                $('.lng-have').html('Have');                
                $('.lng-none-have').html('None');
                $('.lng-demestic').html('Domestic');                       
                $('.lng-international').html('International');                
                $('#cars_persion').html(data[0].car_topic_en + data[0].pax_en)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_en)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_en + data[0].pax_en)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                if(data[0].area == 'Service_day' || data[0].area == 'Service'){
                    $('#province').html(data[0].province_name_th);
                    $('#province_to').html(data[0].province_name_to_th);
                }
                $('#name_lastname').attr('placeholder','ชื่อ - นามสกุล');
                $('#phone').attr('placeholder','โทรศัพท์');
                $('#email').attr('placeholder','อีเมล์');
                $('#flight').attr('placeholder','เที่ยวบิน');
                $('#other').attr('placeholder','อื่น ๆ');               
                $('.lng-have').html('มี');                       
                $('.lng-none-have').html('ไม่มี');
                $('.lng-demestic').html('ในประเทศ');                       
                $('.lng-international').html('ระหว่างประเทศ');  
                $('#cars_persion').html(data[0].car_topic_th + data[0].pax_th)
                $('#price').html(data[0].cost_a + ' ' + '฿')
                $('#product').html(data[0].topic_th)
                $('#name_product').html(data[0].topic_car)
                $('#cars_type').html(data[0].car_topic_th + data[0].pax_th)
                $('#costsummary').html(data[0].cost_a + ' ' + '฿')
                $('#numsumprice').html(data[0].cost_a + ' ' + '฿')
            }

            costproduct = data[0].cost_a;
            type = data[0].type;
            cost_a_nett = data[0].cost_a_nett;
            if (data[0].area == 'In' || data[0].area == 'Out') {
                $('.flight-box').show();
            } else {
                $('.flight-box').hide();
            }
            console.log(type)
            console.log($.cookie("lng"))           
            if (data[0].type == 'Private' && data[0].area == 'Service') {
                if ($.cookie("lng") == 'cn') {
                    $('#datetext').html('使用日期:')
                    $('#texttime').html('使用时间:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('使用日期:')
                    $('#time-final').html('使用时间:')
                } else if ($.cookie("lng") == 'en' || $.cookie("lng") == undefined) {
                    $('#datetext').html('Use date:')
                    $('#texttime').html('Use time:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('Use date:')
                    $('#time-final').html('Use time:')
                } else if ($.cookie("lng") == 'th' || $.cookie("lng") == 'th-TH') {
                    $('#datetext').html('วันที่ใช้บริการ:')
                    $('#texttime').html('เวลาใช้บริการ:')
                    $('#visa-show').css('display', 'none')
                    $('#date-final').html('วันที่ใช้บริการ:')
                    $('#time-final').html('เวลาใช้บริการ:')

                } 
            }
            pro_id = data[0].transfer_id;
            person = data[0].person;
            checksumperson = person;
            program_name = data[0].topic_en;
            area = data[0].area;
            car_model = data[0].car_model;
            code = data[0].code;
            console.log(code)
            $('#checksum').html(checksumperson)
            console.log(data[0].transfer_icon)
            $('#images-icon').append('<img src="'+base_url+'files/images/carmodelicon/' + data[0].transfer_icon + '.jpg" id="box-image">');

        }
    });
    // $.ajax({
    //     type: 'POST',
    //     url: 'https://www.welovetaxi.com/app/booking/service/getplace.php',
    //     data: { 'from': b_from, 'to': b_to },
    //     //contentType: "application/json",
    //     dataType: 'json',
    //     success: function(data) {
    //         console.log(data[0])
    //         console.log(data[1])
    //         $('#pickup_from').html(data[0].topic + '(' + data[0].name + ')');
    //         $('#pickup_to').html(data[1].topic + '(' + data[1].name + ')');
    //         place = data[0].id;
    //         to_place = data[1].id;
    //         place_name = data[0].topic;
    //         toplace_name = data[1].topic;
    //         adresss = data[0].address;
    //         adress_to = data[1].address;
    //         // $('#placefrom').html(data[0].topic);
    //         // $('#placeto').html(data[1].topic);
    //         $('#province').html(data[0].name);
    //         $('#province_to').html(data[1].name);
    //     }
    // });
}
