<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CreAmp - Amplify Creation</title>
    <script src="/bower_components/jquery/jquery.js"></script>
    <script src="/bower_components/underscore/underscore.js"></script>
    <script src="/bower_components/Eventable/eventable.js"></script>
    <script src="/bower_components/sir-trevor-js/sir-trevor.js"></script>

    <link rel="stylesheet" type="text/css" href="/bower_components/sir-trevor-js/sir-trevor.css">
    <link rel="stylesheet" type="text/css" href="/bower_components/sir-trevor-js/sir-trevor-icons.css">
</head>
<body>
    <form method="post" action="/onepager">
        <textarea class="js-st-instance" name="sirtrevor">{{ $sirTrevorJson }}</textarea>
        <input type="submit">
    </form>
    <script>
        new SirTrevor.Editor({ el: $('.js-st-instance') });
    </script>
</body>
</html>
