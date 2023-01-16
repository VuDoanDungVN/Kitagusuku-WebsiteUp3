//Load more image home
$(document).ready(function () {
    $(".img-load").slice(0, 5).fadeIn()
    $(".load-more").click(function () {
        $(".img-load").slice(0, 12).fadeIn()
        $(this).fadeOut()
    })
})
//Load more comment
$(document).ready(function () {
    $(".main-comment").slice(0, 1).fadeIn()
    $(".load-more").click(function () {
        $(".main-comment").slice(0, 12).fadeIn()
        $(this).fadeOut()
    })
})