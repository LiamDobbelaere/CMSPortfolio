(function ($) {
    var typeChar = '█';

    $(function () {
        $('.button-collapse').sideNav();
        $.each($('.typewriter'), function(index, element) {
            var $element = $(element);

            var textGoal = $element.text();
            var textCurrent = "";

            var currentIndex = 0;

            $element.text(textCurrent);

            var typeFunction = function () {
                currentIndex++;

                textCurrent = textGoal.substring(0, currentIndex) + typeChar;

                $element.text(textCurrent);

                if (currentIndex === textGoal.length) {
                    textCurrent = textGoal.substring(0, currentIndex);
                    $element.text(textCurrent);
                    createTypeCursor($element);
                } else {
                    setTimeout(typeFunction, 25 + Math.floor(Math.random() * 100));
                }
            };

            setTimeout(typeFunction, 25 + Math.floor(Math.random() * 100));
        });

        /*$.each($('.fancy-type'), (function (index, element) {
            var $element = $(element);

            var textTemplate = $element.text().split('');
            var textResult = new Array(textTemplate.length);
            var indices = new Array(textTemplate.length);

            for (var i = 0; i < textTemplate.length; i++) {
                textResult[i] = "█";
                indices[i] = i;
            }

            $element.text(textResult.join(''));

            var interval = setInterval(function () {
                var index = Math.floor(Math.random() * indices.length);
                var arrayIndex = indices.splice(index, 1);

                textResult[arrayIndex] = textTemplate[arrayIndex];

                $element.text(textResult.join(''));

                if (indices.length === 0) {
                    clearInterval(interval);
                    i = 0;
                }
            }, 50);
        }));*/


    });

    function createTypeCursor($element) {
        var text = $element.text();
        var flag = true;
        var times = 6;

        var interval = setInterval(function () {
            if (flag)
                $element.text(text + typeChar);
            else
                $element.text(text);

            flag = !flag;

            times--;

            if (times <= 0) clearInterval(interval);
        }, 500);
    }

})(jQuery);