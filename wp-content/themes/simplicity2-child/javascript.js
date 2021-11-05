//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。

( function ($){
    $(function (){
        $("#breadcrumb div:first-child a").text("桑の葉茶・桑茶ランキングホーム");
    });
} )(jQuery);