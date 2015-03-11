
$(document).ready(function() {

    $dataStyle = $('[data-style]');

    $dataStyle.each(function() {
        var el = this,
            mode = $(el).data('style'),
            code = $(el).html();

        code = code.replace(/&lt;/g, '<');
        code = code.replace(/&gt;/g, '>');

        var editor = CodeMirror(function(elt) {
            el.parentNode.appendChild(elt);
        }, {
            mode: mode,
            value: code,
            lineNumbers: true,
            indentUnit: 4,
            indentWithTabs: true,
            readOnly: true,
            theme: "base16-light",
            viewportMargin: Infinity
        });

        editor.setSize('auto', 'auto');
    });
});