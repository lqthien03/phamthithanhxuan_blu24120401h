!(function (t) {
    function n(n, e, i, r) {
        var c = n.text().split(e),
            s = "";
        c.length &&
            (t(c).each(function (t, n) {
                s += '<span class="' + i + (t + 1) + '">' + n + "</span>" + r;
            }),
                n.empty().append(s));
    }
    var e = {
        init: function () {
            return this.each(function () {
                n(t(this), "", "char", "");
            });
        },
        words: function () {
            return this.each(function () {
                n(t(this), " ", "word", " ");
            });
        },
        lines: function () {
            return this.each(function () {
                var e = "eefec303079ad17405c889e092e105b0";
                n(t(this).children("br").replaceWith(e).end(), e, "line", "");
            });
        },
    };
    t.fn.lettering = function (n) {
        return n && e[n]
            ? e[n].apply(this, [].slice.call(arguments, 1))
            : "letters" !== n && n
                ? (t.error("Method " + n + " does not exist on jQuery.lettering"), this)
                : e.init.apply(this, [].slice.call(arguments, 0));
    };
})(jQuery);