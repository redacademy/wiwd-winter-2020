(function ($) {
    let fullTitle = $('.gf_progressbar_title');
    let changedTitle = fullTitle[0].innerText.replace(/Step 1 of 3 -|Step 2 of 3 -|Step 3 of 3 -/g, '');
    let titleWrapper = $('.gf_progressbar_wrapper').empty();
    titleWrapper[0].innerHTML = `<h2> ${changedTitle} </h2>`;
    const firstTitle= $('#gform_page_3_1');
    if (firstTitle.css('display') == 'none') {
        console.log('yes');
    }
})(jQuery);