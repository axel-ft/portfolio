function progressBar(idElement, valueMax, couleurFin) {
    var competence = document.getElementById(idElement)
    var bar = new ProgressBar.Circle(competence, {
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

function estVisible(progressBarElement) {
    var currElementPosY = 0,
        obj = document.getElementById(progressBarElement);
    while (obj != null) {
        currElementPosY += obj.offsetTop;
        obj = obj.offsetParent;
    }
    var
        viewPortHeight = document.documentElement.clientHeight,
        scrollTop = window.scrollY,
        elementHeight = document.getElementById(progressBarElement).offsetHeight;
    return (currElementPosY + elementHeight > scrollTop && currElementPosY < (viewPortHeight + scrollTop))
}

window.addEventListener("scroll", function () {
    if (estVisible('fr') && estVisible('esp') && estVisible('eng')) {
        if (!document.getElementById('fr').getElementsByTagName('svg')[0] && !document.getElementById('esp').getElementsByTagName('svg')[0] && !document.getElementById('eng').getElementsByTagName('svg')[0]) {
            progressBar('fr', 1.0, '#009933');
            progressBar('esp', 0.95, '#009933');
            progressBar('eng', 0.7, '#99cc33');
        }
    }

    if (estVisible('html5') && estVisible('css3')) {
        if (!document.getElementById('html5').getElementsByTagName('svg')[0] && !document.getElementById('css3').getElementsByTagName('svg')[0]) {
            progressBar('html5', 0.9, '#339933');
            progressBar('css3', 0.8, '#66cc33');
        }
    }
    if (estVisible('js') && estVisible('jquery')) {
        if (!document.getElementById('js').getElementsByTagName('svg')[0] && !document.getElementById('jquery').getElementsByTagName('svg')[0]) {
            progressBar('js', 0.5, "#ffcc33");
            progressBar('jquery', 0.6, "#cccc33");
        }
    }
    if (estVisible('sql') && estVisible('php')) {
        if (!document.getElementById('sql').getElementsByTagName('svg')[0] && !document.getElementById('php').getElementsByTagName('svg')[0]) {
            progressBar('sql', 0.8, '#66cc33');
            progressBar('php', 0.5, '#ffcc33');
        }
    }

    if (estVisible('bash') && estVisible('c')) {
        if (!document.getElementById('bash').getElementsByTagName('svg')[0] && !document.getElementById('c').getElementsByTagName('svg')[0]) {
            progressBar('bash', 1.0, '#009933');
            progressBar('c', 0.6, '#cccc33');
        }
    }
    if (estVisible('cpp') && estVisible('java')) {
        if (!document.getElementById('cpp').getElementsByTagName('svg')[0] && !document.getElementById('java').getElementsByTagName('svg')[0]) {
            progressBar('cpp', 0.01, '#ff00000');
            progressBar('java', 0.6, '#cccc33');
        }
    }
    if (estVisible('python') && estVisible('git')) {
        if (!document.getElementById('python').getElementsByTagName('svg')[0] && !document.getElementById('git').getElementsByTagName('svg')[0]) {
            progressBar('python', 0.01, '#ff0000');
            progressBar('git', 0.8, '#66cc33');
        }
    }

    if (estVisible('acrodc') && estVisible('photoshop')) {
        if (!document.getElementById('acrodc').getElementsByTagName('svg')[0] && !document.getElementById('photoshop').getElementsByTagName('svg')[0]) {
            progressBar('acrodc', 1.0, '#009933');
            progressBar('photoshop', 0.9, '#339933');
        }
    }
    if (estVisible('illustrator') && estVisible('premiere')) {
        if (!document.getElementById('illustrator').getElementsByTagName('svg')[0] && !document.getElementById('premiere').getElementsByTagName('svg')[0]) {
            progressBar('illustrator', 0.8, '#66cc33');
            progressBar('premiere', 0.8, '#66cc33');
        }
    }
    if (estVisible('ae') && estVisible('studiomax')) {
        if (!document.getElementById('ae').getElementsByTagName('svg')[0] && !document.getElementById('studiomax').getElementsByTagName('svg')[0]) {
            progressBar('ae', 0.6, '#cccc33');
            progressBar('studiomax', 0.7, '#99cc33');
        }
    }
});