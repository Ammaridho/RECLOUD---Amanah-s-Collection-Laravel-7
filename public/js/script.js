//cekbox hapus keranjang
    function hapusKeranjang(checkboxName) {
        var checkboxes = document.querySelectorAll('input[name="' + checkboxName + '"]:checked'), values = [];
        Array.prototype.forEach.call(checkboxes, function(el) {
            values.push(el.value);
        });

        var konfirmasi = confirm("kamu yakin?");

        if(konfirmasi){

            //delete keranjang
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });
            $.ajax({ 
                type: "POST", 
                url:"/keranjang/deletemulti", 
                data:{values:values},
                success: function(data) {
                    alert(data.id);
                }
            }); 
        } 
    }


//checkbox cekout keranjang
    function cekoutKeranjang(checkboxName) {
        var checkboxes = document.querySelectorAll('input[name="' + checkboxName + '"]:checked'), values = [];
        Array.prototype.forEach.call(checkboxes, function(el) {
            values.push(el.value);
        });

        $.get("/cekout", {values:values}, function(data) {      //masuk ke controller
            $('body > .contentUtama').html(data);

            $('#bankTujuan').find('input').on('click',function () {

                if($(this).val() == 'Bank BNI'){
                    $('#noRek').val('12345');
                    $('#namaRek').val('Ammaridho Siregar');
                }else if($(this).val() == 'Bank BRI'){
                    $('#noRek').val('67890');
                    $('#namaRek').val('Ammaridho Siregar');
                }else{
                    $('#noRek').val('111213');
                    $('#namaRek').val('Ammaridho Siregar');
                    
                }   

                // $('#noRek').val($(this).val().substr(0,6));
                // $('#namaRek').val($(this).val().substr(6));
            })

            $('#pilihkurir').on('change',function () {

                if($('#pilihkurir').val() == 'Gosend'){
                    var hargaOngkir = 25000;
                }else{
                    var hargaOngkir = 30000;
                }

                $('#hargaOngkir').val(hargaOngkir);

                $('#ongkir').val(hargaOngkir);

                $('#totalTagihan').val(parseInt($('#biayaPenyewaan').val())+parseInt($('#uangJaminan').val())+parseInt($('#ongkir').val()));

            })

            
            // button bayar (ke rincian cekout)
            $('#buttonBayar').on('click', function () {
    
                var vartest = 'bisaa';

                var konfirmasi = confirm("kamu yakin cekout?");

                // console.log(konfirmasi);

                if(konfirmasi){

                    nama = $('#formcek input[name="nama"]').val();
                    alamat = $('#formcek textarea[name="alamat"]').val();
                    kodePos = $('#formcek input[name="kodePos"]').val();
                    noTelp = $('#formcek input[name="noTelp"]').val();
                    emaill = $('#formcek input[name="emaill"]').val();
                    pilihkurir = $('#formcek select[name="pilihkurir"]').val();
                    bankTujuan = $('#formcek input[name="bankTujuan"]').val();
                    biayaPenyewaan = $('#formcek input[name="biayaPenyewaan"]').val();
                    uangJaminan = $('#formcek input[name="uangJaminan"]').val();
                    ongkir = $('#formcek input[name="ongkir"]').val();
                    totalTagihan = $('#formcek input[name="totalTagihan"]').val();
                    noRek = $('#formcek input[name="noRek"]').val();
                    namaRek = $('#formcek input[name="namaRek"]').val();

                    $.get("/rincianCekout", {nama:nama,alamat:alamat,kodePos:kodePos,noTelp:noTelp,emaill:emaill,pilihkurir:pilihkurir,bankTujuan:bankTujuan,biayaPenyewaan:biayaPenyewaan,uangJaminan:uangJaminan,ongkir:ongkir,totalTagihan:totalTagihan,noRek:noRek,namaRek:namaRek}, function (data) {
                        $('body > .contentUtama').html(data);
                    })
                
                }

            })

        });
    }


// edit keranjang
    function openDetailKeranjang(keranjang_id) {
        $.get("/keranjang/edit", {keranjang_id:keranjang_id}, function(data) {
            $('.modal-content').find("#modalEditKeranjang").html(data);
        });
        // $('.modal-content').find("#modalEditKeranjang").html('<h1>BISAAAA</h1>');
    }


// Button Keranjang ===
    $('#buttonKeranjang').on('click', function() {
        var emailSession = $(this).val();
        $.get("/keranjang",{emailSession:emailSession}, function(data) {
            $("#listKeranjang").html(data);

            //menchachked semuanya
            $('#cekboxpilihsemua').on('click', function () {        //lokasi karena didalam action js lain maka harus ditaruh didalamnya
                
                if(!($('#cekboxpilihsemua').prop("checked"))){
                    $('.cekboxsatu > #cekboxsatu').prop('checked', false);
                    // console.log('cekboxallfalse');
                }else{
                    $('.cekboxsatu > #cekboxsatu').prop('checked', true);
                    // console.log('cekboxalltrue');
                }

                if($('.cekboxsatu > #cekboxsatu').on('click', function(){
                    $('#cekboxpilihsemua').prop('checked',false);
                    // console.log('cekboxone');
                }));

                
            })
            var total = 0;
            $('.cekboxsatu > #cekboxsatu').on('click',function () {

                var checkboxes = document.querySelectorAll('.cekboxsatu > #cekboxsatu:checked'), values = []; //ambil checkbox checked
                
                Array.prototype.forEach.call(checkboxes, function(el) { //jadikan array
                    values.push(el.value);
                });

                console.log(values); //INI MASIH MENGAMBIL ID SAJA BELUM DI FIX


                // if(($('#cekboxsatu').prop("checked"))){
                //     $('.cekboxsatu > #cekboxsatu').on('click',function () {
                //     console.log( parseInt($(this).attr( "data-valuetwo" )));
                //     // total += parseInt($(this).attr( "data-valuetwo" ));
                //     })
                // }
                // }else{
                //     $('.cekboxsatu > #cekboxsatu').on('click',function () {
                //     // console.log( $(this).attr( "data-valuetwo" ));
                //     total -=  $(this).attr( "data-valuetwo" )
                //     })
                // }
                // console.log(total);
            })
        });
    })
  


    

// Buka Menu slide ===
    function openMenu() {
        document.getElementById("pilihan").style.transform = "translatex(0%)";
    }

    function closeMenu() {
        document.getElementById("pilihan").style.transform = "translatex(100%)";
    }

    function openDetail() {
        document.getElementById("pilihan").style.transform = "translatex(100%)";
        document.getElementById("detail").style.transform = "translatex(0%)";
    }

    function closeDetail() {
        document.getElementById("pilihan").style.transform = "translatex(0%)";
        document.getElementById("detail").style.transform = "translatex(100%)";
    }

    
// button logout ============
    function logout() {

        var confirmation = confirm("Are u sure?");

        if (confirmation == true) {
            window.location.href = "/logout";
        }
    }

    
//button highlight ===
    $('.nav-item').on('click',function() {
        $('.nav-item').removeClass('active');
            $(this).addClass('active');
    })

    
//Alert Must Login
    function alertGagalforrent() {
        alert('You have to login for rent!');
    }

    function alertGagalkeranjang() {
        alert('You have to login for keranjang!');
    }

     
//button login =============
    function Tombollogin(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(0%)";
        x.style.transition = "transform 1.3s";
        var y = document.getElementById("kotakhitam");
        y.style.visibility = "visible";
        var z = document.getElementById("kotaklogin");
        z.style.visibility = "visible";
        var p = document.getElementById("kotakdaftar");
        p.style.visibility = "hidden";
        var c = document.getElementById("navbar");
        c.style.zIndex = "1";
    }

    function ValidateInputan(){
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (password.length >= 6 && email.match(mailformat)){
            var elem = document.getElementById("tombolmasuk");
            elem.style.color = "white";
            elem.style.backgroundColor = " #FF7A00";
            elem.style.cursor = "pointer";
            elem.disabled = false;
        }
        else{
            var elem = document.getElementById("tombolmasuk");
            elem.style.color = "rgb(167, 167, 167)";
            elem.style.backgroundColor = "#e2e2e2";
            elem.style.cursor = "not-allowed";
            elem.disabled = true;
        }
    }
    function ValidateLogin(){
        var alert = document.getElementById("alert");
        alert.style.display = "block";
        var kotakputih = document.getElementById("kotakputih");
        var button = document.getElementById("tombolmasuk");
        kotakputih.style.height = "333px";
        button.style.marginTop = "0px";
        alert("mantap");
    }
    function Tombolcloselogin(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(-200%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        var z = document.getElementById("kotakhitam");
        z.style.visibility = "hidden";
        var c = document.getElementById("kotaklogin");
        c.style.visibility = "hidden";
    }
    function Tombolclosedaftar(){
        var x = document.getElementById("msform");
        x.style.transform = "translateY(-200%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        var z = document.getElementById("kotakhitam");
        z.style.visibility = "hidden";
        var c = document.getElementById("kotakdaftar");
        c.style.visibility = "hidden";
    }
    function Gantidaftar(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(-200%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        var z = document.getElementById("kotaklogin");
        z.style.visibility = "hidden";
        var l = document.getElementById("kotakdaftar");
        l.style.visibility = "visible";
        var p = document.getElementById("msform");
        p.style.visibility = "visible";
        p.style.transform = "translateY(0%)";
        p.style.transition = "transform 1.3s";
        p.style.transitionDelay = "1s";
    }
    
    function Gantilogin(){
        var x = document.getElementById("kotakputih");
        x.style.transform = "translateY(0%)";
        x.style.transition = "transform 1.3s";
        x.style.visibility = "visible";
        x.style.transitionDelay = "1s";
        var z = document.getElementById("kotaklogin");
        z.style.visibility = "visible";
        var l = document.getElementById("kotakdaftar");
        l.style.visibility = "hidden";
        var p = document.getElementById("msform");
        p.style.visibility = "visible";
        p.style.transform = "translateY(-200%)";
        p.style.transition = "transform 1.3s";
    }

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            $('#nextBtn').removeAttr("type").attr("type","submit");  //rubah typenya jadi submit
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;


        $password1 = $('#password1').val();
        $password2 = $('#password2').val();
    
        if ($password1 != $password2) {
            alert('Password not Match!');
            return false;
        }
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }
    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, alamat, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }

        alamat = $('#alamat').val();

        if (currentTab == 1) {
            if (alamat == '') {
                valid = false;
            }
        }

        if (valid == false) {
            alert('empty field detected!');
        }
        return valid; // return the valid status
    }
    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        for (j = 0; j <= n; j++) {
            x[j].className += " active";
        }
    }