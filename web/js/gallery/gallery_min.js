$(function () {
    const strL = 'https://images.unsplash.com/photo-';
    const strR = '?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ';
    const imgs = [
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1134.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-04-09.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1135.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1137.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_18-31-36.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1138.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-01-17.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1141.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_18-32-29.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_0730.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1073.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-02-21.jpg',
        },
    ]

    $.each(imgs, function (i, img) {
        $('.galeria .contenedorImgs').append(`
      <div class="imagen" style="background-image:url('${img.url}')">
        <p class="nombre">${img.titulo}</p>
      </div>`
        );
    })
    setTimeout(() => {
        $('.galeria').addClass('vis');
    }, 1000)
    $('.galeria').on('click', '.contenedorImgs .imagen', function () {
        var imagen = imgs[$(this).index()].url;
        var titulo = imgs[$(this).index()].titulo;
        var descripcion = imgs[$(this).index()].descripcion;
        $('.galeria').addClass('scale');
        $(this).addClass('activa');
        if (!$('.fullPreview').length) {
            $('body').append(`
        <div class="fullPreview">
          <div class="cerrarModal"></div>
          <div class="wrapper">
            <div class="blur" style="background-image:url(${imagen})"></div>
            <p class="titulo">${titulo}</p>
            <img src="${imagen}">
            <p class="desc">${descripcion}</p>
          </div>
          <div class="controles">
            <div class="control av"></div>
            <div class="control ret"></div>
          </div>
        </div>`
            )
            $('.fullPreview').fadeIn().css('display', 'flex');
        }
    })
    $('body').on('click', '.fullPreview .cerrarModal', function () {
        $('.contenedorImgs .imagen.activa').removeClass('activa');
        $('.galeria').removeClass('scale');
        $(this).parent().fadeOut(function () {
            $(this).remove();
        })
    })
    $('body').on('click', '.fullPreview .control', function () {
        var activa = $('.contenedorImgs .imagen.activa');
        var index;
        if ($(this).hasClass('av')) {
            index = activa.next().index();
            if (index < 0) index = 0;
        } else {
            index = activa.prev().index();
            if (index < 0) index = imgs.length - 1;
        }
        $('.fullPreview').addClass('anim');
        setTimeout(() => {
            $('.contenedorImgs .imagen.activa').removeClass('activa');
            $('.contenedorImgs .imagen').eq(index).addClass('activa');
            $('.fullPreview').find('.blur').css('background-image', 'url(' + imgs[index].url + ')');
            $('.fullPreview').find('img').attr('src', imgs[index].url);
            $('.fullPreview').find('.titulo').text(imgs[index].titulo);
            $('.fullPreview').find('.desc').text(imgs[index].descripcion);
            $('.fullPreview').removeClass('anim');
        }, 500)
    })
})