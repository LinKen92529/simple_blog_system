function render(template, context) {

    var tokenReg = /(\\)?\{([^\{\}\\]+)(\\)?\}/g;

    return template.replace(tokenReg, function (word, slash1, token, slash2) {
        if (slash1 || slash2) {
            return word.replace('\\', '');
        }

        var variables = token.replace(/\s/g, '').split('.');
        var currentObject = context;
        var i, length, variable;

        for (i = 0, length = variables.length; i < length; ++i) {
            variable = variables[i];
            currentObject = currentObject[variable];
            if (currentObject === undefined || currentObject === null) return '';
        }
        return currentObject;
    });
}
String.prototype.render = function (context) {
    return render(this, context);
};

var re = /x/;
console.log(re);
re.toString = function () {
    showMessage('好孩子別亂按F12喔', 5000);
    return '';
};

$(document).on('copy', function () {
    showMessage('如果要轉貼文章記得加上轉至TON喔', 5000);
});

$.ajax({
    cache: true,
    url: "plugin/live2d//waifu-tips.json",
    dataType: "json",
    success: function (result) {
        $.each(result.mouseover, function (index, tips) {
            $(document).on("mouseover", tips.selector, function () {
                var text = tips.text;
                if (Array.isArray(tips.text)) text = tips.text[Math.floor(Math.random() * tips.text.length + 1) - 1];
                text = text.render({ text: $(this).text() });
                showMessage(text, 3000);
            });
        });
        $.each(result.click, function (index, tips) {
            $(document).on("click", tips.selector, function () {
                var text = tips.text;
                if (Array.isArray(tips.text)) text = tips.text[Math.floor(Math.random() * tips.text.length + 1) - 1];
                text = text.render({ text: $(this).text() });
                showMessage(text, 3000);
            });
        });
    }
}); 

window.setInterval(showHitokoto, 30000);

function showHitokoto() {
    $.getJSON('https://api.imjad.cn/hitokoto/?cat=&charset=utf-8&length=28&encode=json', function (result) {
        showMessage(result.hitokoto, 5000);
    });
}

function showMessage(text, timeout) {
    if (Array.isArray(text)) text = text[Math.floor(Math.random() * text.length + 1) - 1];
    console.log(text);
    $('.waifu-tips').stop();
    $('.waifu-tips').html(text).fadeTo(200, 1);
    if (timeout === null) timeout = 5000;
    hideMessage(timeout);
}
function hideMessage(timeout) {
    $('.waifu-tips').stop().css('opacity', 1);
    if (timeout === null) timeout = 5000;
    $('.waifu-tips').delay(timeout).fadeTo(200, 0);
}