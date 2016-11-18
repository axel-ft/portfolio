function progressBar(idElement, valueMax) {
    // progressbar.js@1.0.0 version is used
    // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/
    var element = document.getElementById(idElement)
    var bar = new ProgressBar.Circle(element, {
        color: '#aaa',
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 4,
        trailWidth: 1,
        easing: 'easeOut',
        duration: 1400,
        text: {
            autoStyleContainer: false
        },
        from: {
            color: '#ff0000',
            width: 1
        },
        to: {
            color: '#10811d',
            width: 4
        },
        // Set default step function for all animate calls
        step: function (state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('0');
            } else {
                circle.setText(value);
            }

        }
    });
    bar.text.style.fontFamily = '"Catamaran", Helvetica, sans-serif';
    bar.text.style.fontSize = '4rem';

    bar.animate(valueMax); // Number from 0.0 to 1.0
}

progressBar('html5', 0.9);
progressBar('css3', 0.8);
progressBar('js', 0.5);
progressBar('jquery', 0.6)
progressBar('sql', 0.8);
progressBar('php', 0.5);