// console.log(window.location.pathname);

$.validator.addMethod('companyRegYear', function(value) {
    return parseFloat(value) > 1800;
}, 'Registration Year must be greater than 1800');

var form = $("#wizard");
form.validate({
    // errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        /* === Company === */
        company_name: {
            required: true,
            maxlength: 255,
        },
        company_reg_year: {
            required: true,
            digits: true,
            minlength: 4,
            maxlength: 4,
            companyRegYear: true,            
        },
        // company_reg_num: {
        //     required: true,
        // },
        company_phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10,
            // phoneUS: true,
        },
        company_nu_molding_machines: {
            required: true,
            digits: true,
        },
        companey_nu_sites: {
            required: true,
            digits: true,
        },
        // company_reg_doc: {
        //     required: true,
        //     accept: "doc,pdf,docx,zip,jpeg,bmp,png,gif,svg,jpg"
        // },
        /* === Address === */
        company_address_line_1: {
            required: true,
            maxlength: 255,
        },
        company_address_zip: {
            required: true,
        },
        company_address_city: {
            required: true,
            maxlength: 15,
        },
        company_address_state: {
            required: true,
            maxlength: 20,
        },
        company_address_country: {
            required: true,
            maxlength: 50,
        },
        /* === Personal === */
        first_name: {
            required: true,
            maxlength: 50,
        },
        last_name: {
            required: true,
            maxlength: 50,
        },
        email: {
            required: true,
            email: true,
            maxlength: 255,
        },
        designation: {
            required: true,
            maxlength: 50,
        },
        phone_nu: {
            required: true,
            minlength: 10,
            maxlength: 10,
            // phoneUS: true,
            digits: true,
        },
    }
});

$(function(){
    // function adjustIframeHeight() {
    //     var $body   = $('body'),
    //         $iframe = $body.data('iframe.fv');
    //     if ($iframe) {
    //         // Adjust the height of iframe
    //         $iframe.height($body.height());
    //     }
    // }

	$("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        labels: {
            finish: "Submit",
            next: "Next",
            previous: "Back"
        },
        onStepChanging: function(e, currentIndex, newIndex) {

            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
    
            // var fv = $('#wizard').data('formValidation'),
            // $container = $('#wizard').find('section[data-step="' + currentIndex +'"]');

            // fv.validateContainer($container);
            
            // var isValidStep = fv.isValidContainer($container);
            // if (isValidStep === false || isValidStep === null) {
            //     // Do not jump to the next step
            //     return false;
            // }
            // return true;
        },
        onFinished: function (event, currentIndex) {
            $('#user_submit_button').trigger('click');
        },

    })
    // .formValidation({
    //     framework: 'bootstrap',
    //     icon: {
    //         valid: 'glyphicon glyphicon-ok',
    //         invalid: 'glyphicon glyphicon-remove',
    //         validating: 'glyphicon glyphicon-refresh'
    //     },
    //     // This option will not ignore invisible fields which belong to inactive panels
    //     excluded: ':disabled',
    //     fields: {
    //         company_name: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The Company name is required'
    //                 },
    //                 stringLength: {
    //                     min: 6,
    //                     max: 30,
    //                     message: 'The Company name must be more than 6 and less than 30 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z0-9_\.]+$/,
    //                     message: 'The Company name can only consist of alphabetical, number, dot and underscore'
    //                 }
    //             }
    //         },
    //     }
    // });
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custome Jquery Step Button
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Select Dropdown
    $('html').click(function() {
        $('.select .dropdown').hide(); 
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })    
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
    })
})
