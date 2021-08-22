//$(document).on('click','.make_reserve',function(){
//    let id = $(this).attr('data-id');
//    let color = $('#reserveProduct .product_color').val();
//    let capacity = $('#reserveProduct .product_capacity').val();
//    let form = new FormData();
//    form.append('product_id', id);
//    form.append('product_color', color);
//    form.append('product_capacity', capacity);
//    axios.post('/make_reserve', form).then(function (resp) {
//        if(resp.data.status=="success"){
//            callNotifyModal('Успешно', "Заявка отправлена ожидайте ответ");
//        }else{
//            callNotifyModal('Неудалось забронировать', "Попробуйте через некоторое время");
//        }
//
//    });
//});

$(document).on('click','.module',function(){
    let price = 0;
    let converted = 0;
    let modules = []
    let current_price = parseInt($(".current-product-price").val());
    let current_converted = parseInt($(".current-product-converted").val());
    let module_price = 0;
    let module_converted = 0;

    $('.product-modules .module.active').each(function () {
        module_price = parseInt($(this).attr('data-price'));
        module_converted = parseInt($(this).attr('data-converted'));
        price += module_price;
        converted += module_converted;

        modules.push({'name':$(this).find('.title').html(),'price':module_price,'converted':module_converted})
    });
    let main_price = $(".product-price-main span");
    let converted_price = $(".product-price-secondary span");

    main_price.html(price + parseInt(main_price.attr('data-price')));
    converted_price.html(converted + parseInt(converted_price.attr('data-price')));

    $('.main-btn.toBasket').attr('data-modules', JSON.stringify(modules));
    $('.modules').val(JSON.stringify(modules));

    $('.product-modules .module').each(function () {
        module_price = parseInt($(this).attr('data-price'));
        module_converted = parseInt($(this).attr('data-converted'));
        if($(this).attr('data-count') != 0){
            let counter = parseInt($(this).attr('data-count')) - 1;
            let module = $('.product-modules .module.active[data-count="'+counter+'"]');
            module_price = parseInt(module.find('.price.main span').html()) + module_price;
            module_converted = parseInt(module.find('.price.converted span').html()) + module_converted;

            $(this).find('.price.main span').html(module_price)
            $(this).find('.price.converted span').html(module_converted)
        }else{
            $(this).find('.price.main span').html(current_price + module_price)
            $(this).find('.price.converted span').html(current_converted + module_converted)
        }
    });

});
$(document).on('click', '.showPreview', function () {
    
    $('#imagePreviewModal').css({
        'display': 'block'
    });
    // console.log(($(this).attr('index')))
    // $('#imagePreviewModal').slick().slickGoTo($(this).attr('data-index'))
    // $('.image-preview').attr('src', this.src);
})
$(document).on('click', '.close-preview', function () {
    $('#imagePreviewModal').css({
        'display': 'none'
    });
});
$(document).ready(function () {
    $('.thumbnail-images').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    centerPadding: '50px',
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            }
        ],
        prevArrow: '<img class="rotate180 abs-center-left" src="/static/img/right.svg" alt="">',
        nextArrow: '<img class="abs-center-right" src="/static/img/right.svg" alt="">'
    });
    $('.change-slide-img.active').trigger('click');
    let color = $('.color');
    if(color.length){
        $(function () {
          $('.color').tooltip()
        })
    }
});

$(document).on('click', '.change-slide-img', function () {
    let imgs = $(this).attr('data-imgs');
    let result = imgs.replace(/[\[\]']+/g, '').replace(/\s/g, '').split(',');
    let slider = $('.product-img-slider');
    slider.find('.productSlide').remove();
    $('.thumbnail-images').slick('removeSlide', null, null, true);
    $.each(result, function (key, image) {
        let display = '';
        if (key == 0) {
            display = 'active';
        }
        slider.find('.carousel-inner').append(`
                <div class="productSlide carousel-item ` + display + `">
                    <img src="` + image + `" class="showPreview" data-target="#imagePreviewModal" data-slide-to="`+key+`">
                </div>
            `);
        slider.find('.thumbnail-images').append(`
            <div class="column cursor" data-target="#productCarousel" data-slide-to="` + key + `">
                <img class="productSlideImg " src="` + image + `">
            </div>
        `);
    });
    $('.thumbnail-images')[0].slick.refresh();
    let color = $('.color.active').attr('data-color');
    let capacity = $('.capacity.active').attr('data-capacity');
    if (!capacity) {
        capacity = 'None';
    }
    let id = $('.product-price-main').attr('data-id');
    let form = new FormData();
    form.append('color', color);
    form.append('capacity', capacity);
    form.append('id', id);
    axios.post('/catalog/getProductPrice', form).then(function (resp) {
        $('.product-price-main span').html(parseFloat(resp.data.main_price).toFixed(2)).attr('data-price', (resp.data.main_price).toFixed(2));
        $('.product-price-secondary span').html(parseInt(resp.data.secondary_price)).attr('data-price',resp.data.secondary_price);
        if(parseInt(resp.data.quantity) > 0){
            $('.product-in-stock').html('Товар в наличии');
            $('.toBasketParent').removeClass('d-none');
            $('.createLoanParent').removeClass('d-none').addClass('d-lg-flex d-block');
        }else{
            $('.product-in-stock').html('Нет в наличии');
            $('.toBasketParent').addClass('d-none');
            $('.createLoanParent').addClass('d-none').removeClass('d-lg-flex d-block');
        }
        $('.product-modules .module.active').first().trigger('click');
    })
    $('#reserveProduct').find('.product_color').val(color);
    $('#reserveProduct').find('.product_capacity').val(capacity);
    $('.main-btn.toBasket').attr('data-color', color);
    $('.main-btn.toBasket').attr('data-capacity', capacity);
});

$('.product-capacities').on('click', '.capacity', function () {
    $(this).parent().find('.capacity').removeClass('active');
    $(this).addClass('active');
    let colors = $(this).attr('data-colors').replace(/[\[\]']+/g, '').replace(/\s/g, '').split(',');
    let images = $(this).attr('data-imgs').replace(/\s/g, '').split('],[');
    let colors_name = JSON.parse($('.colors-name').val());
    let compare = $('.compare-color');
    let active_color = $('.compare-color .color.active').attr('data-color');
    compare.html('');
    $.each(colors, function (key, color) {
        let display = '';
        if (color == active_color) {
            display = 'active';
        }

        compare.append(`
            <div class="color mt-2 el change-slide-img ` + display + `" data-toggle="tooltip" data-placement="top"
            title="`+colors_name[color]+`" data-imgs="` + images[key] + `" data-color="` + color + `"
            style="background: ` + color + `">
            </div>`);
    });
    let active =  $('.compare-color .color.active').attr('data-color');
    if(!active.length){
        $('.compare-color .color').first().addClass('active');
    }
    $(function () {
      $('.color').tooltip()
    })
    $('.change-slide-img.active').trigger('click');
});

