<link rel="stylesheet" type="text/css" href="/wp-content/plugins/wvh-psychographics/includes/wvhPluginStyle.css">
<div id="wvhPsychographicPlugin">
    <form id="wvhPsychographicsForm">
        <div id="wvhPaywall">
            <div>
                <label for="name">Full Name</label>
                <input id="name" name="name" type="text" value="">
            </div>
            <div>
                <label for="company">Company Name</label>
                <input id="company" name="company" type="text" value="">
            </div>
            <div>
                <label for="email">Email Address</label>
                <input id="email" name="email" type="text" value="">
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" type="text" value="">
            </div>
            <button id="page1-continue-btn" class="wvhButton" onclick="pageOneContinue(event)">Continue</button>
            <div class="clearboth">&nbsp;</div>
        </div>
        <div id="wvhSurvey">
            <div id="question-1" class="wvhQuestion">
                <label>I believe that I can directly influence how long I will live, regardless of my family history.</label>
                <div class="wvhRadioWrapper"><input class="answer-1" name="answer[1]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-1" name="answer[1]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-1" name="answer[1]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-1" name="answer[1]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-1" name="answer[1]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-2" class="wvhQuestion">
                <label>I’m more worried about other family members’ health than my own.</label>
                <div class="wvhRadioWrapper"><input class="answer-2" name="answer[2]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-2" name="answer[2]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-2" name="answer[2]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-2" name="answer[2]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-2" name="answer[2]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-3" class="wvhQuestion">
                <label>I prefer alternative medicine to standard medical practice.</label>
                <div class="wvhRadioWrapper"><input class="answer-3" name="answer[3]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-3" name="answer[3]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-3" name="answer[3]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-3" name="answer[3]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-3" name="answer[3]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-4" class="wvhQuestion">
                <label>I believe alternative/holistic/natural medicines are effective for helping maintain my health and well being.</label>
                <div class="wvhRadioWrapper"><input class="answer-4" name="answer[4]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-4" name="answer[4]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-4" name="answer[4]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-4" name="answer[4]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-4" name="answer[4]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-5" class="wvhQuestion">
                <label>I don’t let being sick get in the way of my work.</label>
                <div class="wvhRadioWrapper"><input class="answer-5" name="answer[5]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-5" name="answer[5]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-5" name="answer[5]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-5" name="answer[5]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-5" name="answer[5]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-6" class="wvhQuestion">
                <label>There are better things in life to focus on than healthy behavior.</label>
                <div class="wvhRadioWrapper"><input class="answer-6" name="answer[6]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-6" name="answer[6]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-6" name="answer[6]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-6" name="answer[6]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-6" name="answer[6]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-7" class="wvhQuestion">
                <label>I am successful in maintaining healthy nutritional habits.</label>
                <div class="wvhRadioWrapper"><input class="answer-7" name="answer[7]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-7" name="answer[7]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-7" name="answer[7]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-7" name="answer[7]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-7" name="answer[7]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-8" class="wvhQuestion">
                <label>I will go to the Doctor at the first sign of health concerns.</label>
                <div class="wvhRadioWrapper"><input class="answer-8" name="answer[8]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-8" name="answer[8]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-8" name="answer[8]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-8" name="answer[8]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-8" name="answer[8]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-9" class="wvhQuestion">
                <label>My doctor is the most credible authority for my health & wellness needs.</label>
                <div class="wvhRadioWrapper"><input class="answer-9" name="answer[9]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-9" name="answer[9]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-9" name="answer[9]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-9" name="answer[9]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-9" name="answer[9]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-10" class="wvhQuestion">
                <label>I actively seek information about nutrition and healthy diets.</label>
                <div class="wvhRadioWrapper"><input class="answer-10" name="answer[10]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-10" name="answer[10]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-10" name="answer[10]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-10" name="answer[10]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-10" name="answer[10]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-11" class="wvhQuestion">
                <label>I would be willing to experience major delays in getting a doctor appointment if it meant everyone could get the health care they need.</label>
                <div class="wvhRadioWrapper"><input class="answer-11" name="answer[11]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-11" name="answer[11]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-11" name="answer[11]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-11" name="answer[11]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-11" name="answer[11]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <div id="question-12" class="wvhQuestion">
                <label>I give a significant amount of money to charity.</label>
                <div class="wvhRadioWrapper"><input class="answer-12" name="answer[12]" type="radio" value="5"> Strongly Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-12" name="answer[12]" type="radio" value="4"> Agree</div>
                <div class="wvhRadioWrapper"><input class="answer-12" name="answer[12]" type="radio" value="3"> Neither Agree nor Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-12" name="answer[12]" type="radio" value="2"> Disagree</div>
                <div class="wvhRadioWrapper"><input class="answer-12" name="answer[12]" type="radio" value="1"> Strongly Disagree</div>
            </div>
            <button id="page2-continue-btn" class="wvhButton" onclick="pageTwoContinue(event)">Submit</button>
            <div class="clearboth">&nbsp;</div>
        </div>
    </form>
</div>
<div class="clearboth">&nbsp;</div>
<div id="dialog" title="Dialog Title">
<div id="message"></div>
<a id="button" href="#">Learn More</a>
</div>
<script>
    jQuery(document).ready(function($) {
        jQuery("#wvhSurvey").hide();


    $("#dialog").dialog({ autoOpen: false, modal: true, height: 590, width: 1005 });

            $("#OpenDialog").click(function () {
                $("#dialog").dialog('open');
            });

    });

    function pageOneContinue(e)
    {
        e.preventDefault();

        var name = jQuery("#name").val();
        var company = jQuery("#company").val();
        var email = jQuery("#email").val();
        var phone = jQuery("#phone").val();

        if(!name || !company || !email || !phone)
        {
            if(!name) { jQuery("#name").addClass("wvhFieldError"); } else { jQuery("#name").removeClass("wvhFieldError"); }
            if(!company) { jQuery("#company").addClass("wvhFieldError"); } else { jQuery("#company").removeClass("wvhFieldError"); }
            if(!email) { jQuery("#email").addClass("wvhFieldError"); } else { jQuery("#email").removeClass("wvhFieldError"); }
            if(!phone) { jQuery("#phone").addClass("wvhFieldError"); } else { jQuery("#phone").removeClass("wvhFieldError"); }
        }
        else
        {
            jQuery("#wvhPaywall").hide();
            jQuery("#wvhSurvey").show();
        }
    }
    function pageTwoContinue(e)

    {
        e.preventDefault();

        var hasError = 0;
        var answerArray = Array();
        for(i=1; i<=12; i++)
        {
            answerArray[i] = jQuery("input:radio[class=answer-" + i + "]:checked").val();
            if(!answerArray[i])
            {
                jQuery("#question-" + i).addClass("wvhFieldError");
                hasError = 1;
            }
            else
            {
                jQuery("#question-" + i).removeClass("wvhFieldError");
            }
        }

        if(hasError == 1)
        {
            // Scroll to errors
            jQuery('html, body').animate({
                scrollTop: ( (jQuery('.wvhFieldError').first().offset().top) - 50)
            }, 20);
        }
        else
        {
            var data = jQuery('#wvhPsychographicsForm').serialize();
            console.log(data);

            jQuery.ajax({
                type: 'POST',
                url: '/wp-content/plugins/wvh-psychographics/postHandler.php',
                data: data,
                success: function(response)
                {
                    jQuery("#dialog").dialog('open');
                    jQuery("#dialog").dialog('option', 'title', response);
                    jQuery("#message").html("You are a " + response);
                    jQuery("#button").attr("href", "../" + response.toLowerCase().replace(/ /g,"-") );

                }
            });


        }
    }
</script>
