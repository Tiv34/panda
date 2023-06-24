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
            url: '/img/gallery/IMG_0052.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_0324.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_0601.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_0730.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_0999.JPG',
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
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_1622.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_2163.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-05-32.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_2737.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_3320.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-06-11.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_3689.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_3832.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4113.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4136.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4297.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4429.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4506.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4547.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4582.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4621.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4639.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4654.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4736.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4798.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4829.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4837.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_4920.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5004.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5150.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5195.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5265.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-11-42.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5625.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5985.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_5998.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6166.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6198.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6489.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-14-50.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6700.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6786.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6916.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-14-20.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_6974.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_7061.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_7098.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-12-23.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_7244.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_7341.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_7446.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_8223.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-16-50.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_8264.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-16-29.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_8373.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_8402.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_8958.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/photo_2023-06-24_20-15-43.jpg',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_9281.JPG',
        },
        {
            descripcion: '',
            titulo: '',
            url: '/img/gallery/IMG_9370.JPG',
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