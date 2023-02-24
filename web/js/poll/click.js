const burst = new mojs.Burst({
    left: 0, top: 0,
    radius:   { 4: 32 },
    angle:    45,
    count:    14,
    children: {
        radius:       4.5,
        fill:         '#99339a',
        scale:        { 1: 0, easing: 'quad.in' },
        pathScale:    [ .8, null ],
        degreeShift:  [ 13, null ],
        duration:     [ 500, 700 ],
        easing:       'quint.out'
    }
});

document.addEventListener( 'click', function (e) {
    const coords = { x: e.pageX, y: e.pageY };
    burst
        .tune(coords)
        .replay();
});