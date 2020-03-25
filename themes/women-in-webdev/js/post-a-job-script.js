(function ($) {
    let fullTitle = $('.gf_progressbar_title');
    let changedTitle = fullTitle[0].innerText.replace(/Step 1 of 3 -|Step 2 of 3 -|Step 3 of 3 -/g, '');
    let titleWrapper = $('.gf_progressbar_wrapper').empty();
    titleWrapper[0].innerHTML = `<h2> ${changedTitle} </h2>`;
    const firstTitle = $('#gform_page_3_1');
    const secondTitle = $('#gform_page_3_2');
    const thridTitle = $('#gform_page_3_3');
        //Hides the selected page title for displaying outside it
        //first page hidden
        if (firstTitle.css('display') == 'none') {
            $(".gf-job-first-title").css('display', "inline");
        }else{
            $(".gf-job-first-title").css('display', 'none');
        }
        //second page hidden
        if (secondTitle.css('display') == 'none') {
            $(".gf-job-second-title").css('display', "inline");
        }else{
            $(".gf-job-second-title").css('display', 'none');
        }
        //thrid page hidden
        if (thridTitle.css('display') == 'none') {
            $(".gf-job-thrid-title").css('display', "inline");
        }else{
            $(".gf-job-thrid-title").css('display', 'none');
        }
})(jQuery);