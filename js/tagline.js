jQuery(function () {
    var $els = $('div[id^=quote]'),
        i = 0,
        len = $els.length;

    $els.slice(1).hide();
    setInterval(function () {
        $els.eq(i).fadeOut(function () {
            i = (i + 1) % len
            $els.eq(i).fadeIn();
        })
    }, 3500)
})