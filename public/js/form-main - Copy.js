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
        // onStepChanging: function(e, currentIndex, newIndex) {
        //     var fv = $('#wizard').data('formValidation'), // FormValidation instance
        //         // The current step container
        //         $container = $('#wizard').find('section[data-step="' + currentIndex +'"]');

        //     // Validate the container
        //     fv.validateContainer($container);

        //     var isValidStep = fv.isValidContainer($container);
        //     if (isValidStep === false || isValidStep === null) {
        //         // Do not jump to the next step
        //         return false;
        //     }

        //     return true;
        // },
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
