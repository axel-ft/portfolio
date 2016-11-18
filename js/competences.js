function progressBar(idElement, valueMax, couleurFin) {
    var element = document.getElementById(idElement)
    var bar = new ProgressBar.Circle(element, {
        color: '#aaa',
        strokeWidth: 4,
        trailWidth: 1,
        easing: 'easeOut',
        duration: 2000,
        text: {
            autoStyleContainer: false
        },
        from: {
            color: '#ff0000',
            width: 1
        },
        to: {
            color: couleurFin,
            width: 4
        },
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

progressBar('html5', 0.9, '#339933');
progressBar('css3', 0.8, '#66cc33');
progressBar('js', 0.5, "#ffcc33");
progressBar('jquery', 0.6, "#cccc33");
progressBar('sql', 0.8, '#66cc33');
progressBar('php', 0.5, '#ffcc33');

progressBar('bash', 1.0, '#009933');
progressBar('c', 0.6, '#cccc33');
progressBar('cpp', 0.01, '#ff00000');
progressBar('java', 0.6, '#cccc33');
progressBar('python', 0.01, '#ff0000');
progressBar('git', 0.8, '#66cc33');