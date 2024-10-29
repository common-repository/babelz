jQuery(function() {
    // Add Cursor to Box Headers
    jQuery(".BabelZ-H").css("cursor","pointer");
    
    // Minimize/Maximize Boxes (On Stored Value)
    jQuery(".BabelZ-SH").each(function (i) {
	var a = jQuery(this).attr("target");
	if (jQuery("[name='"+ a +"']").val() == "hide") jQuery("[id='"+ a +"']").hide();
    });
    
    // Minimize/Maximize Boxes (On Click)
    jQuery(".BabelZ-H").click(function () {
	var a = jQuery(this).attr('target');
	if (jQuery("[id='"+ a +"']").is(":hidden")) {
	    jQuery("[name='"+ a +"']").val("show");
	    jQuery("[id='"+ a +"']").toggle("fast");
	} else {
	    jQuery("[name='"+ a +"']").val("hide");
	    jQuery("[id='"+ a +"']").toggle("fast");
	}
    });
	
    // Display Mode Image Toggle (On Stored Value)
    var a = jQuery("#BabelZ-Stored-Value2").val();
    if (a !== undefined) a = a.substr(a.length-7);
    if (a == "" || a == "ERTICAL") jQuery(".GMode2,.GMode3,.GMode4,.GMode5,.GMode6,.GMode7,.GMode8").hide();
    else if (a == "IZONTAL") jQuery(".GMode1,.GMode3,.GMode4,.GMode5,.GMode6,.GMode7,.GMode8").hide();
    else if (a == ".SIMPLE") jQuery(".GMode1,.GMode2,.GMode4,.GMode5,.GMode6,.GMode7,.GMode8").hide();
    else if (a == "M_RIGHT") jQuery(".GMode1,.GMode2,.GMode3,.GMode5,.GMode6,.GMode7,.GMode8").hide();
    else if (a == "OM_LEFT") jQuery(".GMode1,.GMode2,.GMode3,.GMode4,.GMode6,.GMode7,.GMode8").hide();
    else if (a == "P_RIGHT") jQuery(".GMode1,.GMode2,.GMode3,.GMode4,.GMode5,.GMode7,.GMode8").hide();
    else if (a == "OP_LEFT") jQuery(".GMode1,.GMode2,.GMode3,.GMode4,.GMode5,.GMode6,.GMode8").hide();
	
    // Display Mode Image Toggle (On Click)
    jQuery("#BabelZ-Toggle2").click(function () {
	if (jQuery("#GMode1").is(":selected")) {
	    jQuery(".GMode1").show();
	    jQuery(".GMode2,.GMode3,.GMode4,.GMode5,.GMode6,.GMode7,.GMode8").hide();
	} else if (jQuery("#GMode2").is(":selected")) {
	    jQuery(".GMode2").show();
	    jQuery(".GMode1,.GMode3,.GMode4,.GMode5,.GMode6,.GMode7,.GMode8").hide();
	} else if (jQuery("#GMode3").is(":selected")) {
	    jQuery(".GMode3").show();
	    jQuery(".GMode1,.GMode2,.GMode4,.GMode5,.GMode6,.GMode7,.GMode8").hide();
	} else if (jQuery("#GMode4").is(":selected")) {
	    jQuery(".GMode4").show();
	    jQuery(".GMode1,.GMode2,.GMode3,.GMode5,.GMode6,.GMode7,.GMode8").hide();
	} else if (jQuery("#GMode5").is(":selected")) {
	    jQuery(".GMode5").show();
	    jQuery(".GMode1,.GMode2,.GMode3,.GMode4,.GMode6,.GMode7,.GMode8").hide();
	} else if (jQuery("#GMode6").is(":selected")) {
	    jQuery(".GMode6").show();
	    jQuery(".GMode1,.GMode2,.GMode3,.GMode4,.GMode5,.GMode7,.GMode8").hide();
	} else if (jQuery("#GMode7").is(":selected")) {
	    jQuery(".GMode7").show();
	    jQuery(".GMode1,.GMode2,.GMode3,.GMode4,.GMode5,.GMode6,.GMode8").hide();
	}
    });
	
    // Checkbox Toggle (On Stored Value)
    var i = 0;
    jQuery(".BabelZLanguageChecks:checked").each(function() {
	i += 1;
	if (i == 103) jQuery("#checkToggle").val("Uncheck all");
    });
	
    // Checkbox Toggle (On Click)
    jQuery("#checkToggle").click(function() {
	if (jQuery(this).val() == "Check all") {
	    jQuery(this).val("Uncheck all");
	    jQuery(".BabelZLanguageChecks").attr('checked', true);
	} else {
	    jQuery(this).val("Check all");
	    jQuery(".BabelZLanguageChecks").attr('checked', false);
	}
    });
	
    // Analytics Show/Hide (On Stored Value)
    if (jQuery('#BabelZ-G-AnalyticsA').attr('checked') === undefined) jQuery("#analyticsID").hide();
	
    // Analytics Show/Hide (On Click)
    jQuery('#BabelZ-G-AnalyticsA').click(function() {
	jQuery("#analyticsID").toggle(this.checked);
    });
});
