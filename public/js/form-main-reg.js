$(document).ready(function(){
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    var flag_step1 = false;
    var flag_step2 = false;
    var flag_step3 = false;

    /* ===== NEXT BUTTON CLICK ===== */
    $(".next").click(function(){
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        var currect_step = current_fs.attr('class');
        var next_step = next_fs.attr('class');

        var num_regex = /^[0-9\s]*$/;

        /* ===== STEP 1 ===== */
        if(currect_step == 'step1' && next_step == 'step2'){
            var company_name                = $('#company_name').val();
            var company_reg_year            = $('#company_reg_year').val();
            var company_phone               = $('#company_phone').val();
            var company_nu_molding_machines = $('#company_nu_molding_machines').val();
            var companey_nu_sites           = $('#companey_nu_sites').val();

            if(company_name == ''){
                $('#company_name-error').css('display', 'block');
            }else{
                $('#company_name-error').css('display', 'none');
            }

            if(company_reg_year == ''){
                $('#company_reg_year-error').css('display', 'block');
                $('#company_reg_year_len-error').css('display', 'none');
                $('#company_reg_year_num-error').css('display', 'none');
            }else if(company_reg_year.length != '4' && company_reg_year != ''){
                $('#company_reg_year_len-error').css('display', 'block');
                $('#company_reg_year_num-error').css('display', 'none');
                $('#company_reg_year-error').css('display', 'none');
            }else if(num_regex.test(company_reg_year) == false && company_reg_year != ''){
                $('#company_reg_year_num-error').css('display', 'block');
                $('#company_reg_year_len-error').css('display', 'none');
                $('#company_reg_year-error').css('display', 'none');
            }else{
                $('#company_reg_year-error').css('display', 'none');
                $('#company_reg_year_len-error').css('display', 'none');
                $('#company_reg_year_num-error').css('display', 'none');
            }

            if(company_reg_year < '1800' && company_reg_year != ''){
                $('#company_reg_year_val-error').css('display', 'block');
                $('#company_reg_year_len-error').css('display', 'none');
                $('#company_reg_year_num-error').css('display', 'none');
                $('#company_reg_year-error').css('display', 'none');
            }else{
                $('#company_reg_year_val-error').css('display', 'none');
            }

            if(company_phone == ''){
                $('#company_phone-error').css('display', 'block');
            }else{
                $('#company_phone-error').css('display', 'none');
            }

            if(num_regex.test(company_phone) == false && company_phone != ''){
                $('#company_phone_num-error').css('display', 'block');
            }else{
                $('#company_phone_num-error').css('display', 'none');
            }

            if(company_phone.length <= 8 && company_phone != ''){
                $('#company_phone_len-error').css('display', 'block');
            }else if(company_phone.length >= 15 && company_phone != ''){
                $('#company_phone_len-error').css('display', 'block');
            }else{
                $('#company_phone_len-error').css('display', 'none');
            }

            if(company_nu_molding_machines == ''){
                $('#company_nu_molding_machines-error').css('display', 'block');
            }else{
                $('#company_nu_molding_machines-error').css('display', 'none');
            }

            if(num_regex.test(company_nu_molding_machines) == false && company_nu_molding_machines != ''){
                $('#company_nu_molding_machines_num-error').css('display', 'block');
            }else{
                $('#company_nu_molding_machines_num-error').css('display', 'none');
            }

            if(companey_nu_sites == ''){
                $('#companey_nu_sites-error').css('display', 'block');
            }else{
                $('#companey_nu_sites-error').css('display', 'none');
            }

            if(num_regex.test(companey_nu_sites) == false && companey_nu_sites != ''){
                $('#companey_nu_sites_num-error').css('display', 'block');
            }else{
                $('#companey_nu_sites_num-error').css('display', 'none');
            }

            if((company_name != '') && (company_reg_year != '') && (company_reg_year > '1800') && (num_regex.test(company_reg_year) == true) && (company_phone != '') && (company_nu_molding_machines != '') && (companey_nu_sites != '') && (num_regex.test(company_phone) == true) && (company_phone.length >= 8) && (company_phone.length <= 15) && (company_reg_year.length == '4') && (num_regex.test(company_nu_molding_machines) == true) && (num_regex.test(companey_nu_sites) == true)){
                flag_step1 = true;

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            }
        }

        /* ===== STEP 2 ===== */        
        if(currect_step == 'step2' && next_step == 'step3'){
            var company_address_line_1 = $('#company_address_line_1').val();
            var company_address_zip = $('#company_address_zip').val();
            var company_address_city = $('#company_address_city').val();
            var company_address_country = $('#company_address_country').val();
            var company_address_state = $('#company_address_state').val();

            if(company_address_line_1 == ''){
                $('#company_address_line_1-error').css('display', 'block');
            }else{
                $('#company_address_line_1-error').css('display', 'none');
            }

            if(company_address_zip == ''){
                $('#company_address_zip-error').css('display', 'block');
            }else{
                $('#company_address_zip-error').css('display', 'none');
            }

            if(company_address_city == ''){
                $('#company_address_city-error').css('display', 'block');
            }else{
                $('#company_address_city-error').css('display', 'none');
            }

            if(company_address_country == ''){
                $('#company_address_country-error').css('display', 'block');
            }else{
                $('#company_address_country-error').css('display', 'none');
            }

            if(company_address_state == ''){
                $('#company_address_state-error').css('display', 'block');
            }else{
                $('#company_address_state-error').css('display', 'none');
            }

            if(company_address_line_1 != '' && company_address_zip != '' && company_address_city != '' && company_address_country != '' && company_address_state != ''){
                flag_step2 = true;

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            }
        }

        /* ===== STEP 3 ===== */
        if(currect_step == 'step3' && next_step == 'step4'){
            var first_name  = $('#first_name').val();
            var last_name   = $('#last_name').val();
            var email       = $('#email').val();
            var designation = $('#designation').val();
            var phone_nu    = $('#phone_nu').val();

            var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;

            if(first_name == ''){
                $('#first_name-error').css('display', 'block');
            }else{
                $('#first_name-error').css('display', 'none');
            }

            if(last_name == ''){
                $('#last_name-error').css('display', 'block');
            }else{
                $('#last_name-error').css('display', 'none');
            }

            if(email == ''){
                $('#email-error').css('display', 'block');
            }else{
                $('#email-error').css('display', 'none');
            }

            if(email_regex.test(email) == false && email != ''){
                $('#email_val-error').css('display', 'block');
            }else{
                $('#email_val-error').css('display', 'none');
            }

            if(designation == ''){
                $('#designation-error').css('display', 'block');
            }else{
                $('#designation-error').css('display', 'none');
            }

            if(phone_nu == ''){
                $('#phone_nu-error').css('display', 'block');
            }else{
                $('#phone_nu-error').css('display', 'none');
            }

            if(num_regex.test(phone_nu) == false && phone_nu != ''){
                $('#phone_nu_num-error').css('display', 'block');
            }else{
                $('#phone_nu_num-error').css('display', 'none');
            }

            if(phone_nu.length <= 8 && phone_nu != ''){
                $('#phone_nu_len-error').css('display', 'block');
            }else if(phone_nu.length >= 15 && phone_nu != ''){
                $('#phone_nu_len-error').css('display', 'block');
            }else{
                $('#phone_nu_len-error').css('display', 'none');
            }

            if((first_name != '') && (last_name != '') && (email != '') && (designation != '') && (phone_nu != '') && (email_regex.test(email) == true) && (num_regex.test(phone_nu) == true) && (phone_nu.length >= 8) && (phone_nu.length <= 15)){
                flag_step3 = true;

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 600
                });
            }
        }

        if(flag_step1 == true && flag_step2 == true && flag_step3 == true){              
            $.ajax({
				url: '/register' ,
				type: "POST",
				data: $('#msform').serialize(),
				success: function( response ) {
					console.log('Registration Success');
				}
			});
        }

    });

    $(".previous").click(function(){
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
});