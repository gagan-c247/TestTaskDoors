var form = $("#wizard");
form.validate({
    // errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        /* === Step 1 === */
        series: {
            required: true,
        },
        product_type: {
            required: true,
        },
        door_opening_type: {
            required: true,
        },
        opening_option: {
            required: true,
        },
        standerd_size: {
            required: true,
        },
        /* === Step 2 === */
        ratting: {
            required: true,
        },
        core_material: {
            required: true,
        },
        agency: {
            required: true,
        },
        /* === Step 3 === */
        face_type: {
            required: true,
        },
        cut: {
            required: true,
        },
        Grade: {
            required: true,
        },
        /* === Step 4 === */
        hardware_type: {
            required: true,
        },
        sub_category: {
            required: true,
        },
        hinge_height: {
            required: true,
        },
    }
});

$(function(){
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
        },
        onFinished: function (event, currentIndex) {
            $('#user_submit_button').trigger('click');
        },

    })

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