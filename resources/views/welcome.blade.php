<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- react -->
        <script src="/react/react.development.js" crossorigin></script>
        <script src="/react/react-dom.development.js" crossorigin></script>

        <!-- babel -->
        <script src="/react/babel.min.js"></script>

        <!-- bootstrap -->
        <script src="/react/jquery-3.3.1.slim.min.js"></script>
        <script src="/react/popper.min.js"></script>
        <script src="/react/bootstrap.min.js"></script>

        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!--<script src="prop-types.js"></script>-->
        <!--<script src="react-tabs.development.js"></script>-->

        <!-- jQuery UI -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
        <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

    </head>
    <body>
        <div id="main"></div>
    </body>

    <script type="text/babel">

        class Title extends React.Component {

            constructor(props) {
                super(props);
            }

            render() {
                return (
                    <div class="title m-b-md">
                        Laravel
                    </div>
                )
            }
        }

        class Links extends React.Component {

            constructor(props) {
                super(props);
            }

            render() {
                return (
                    <div class="links">
                        <a href="https://laravel.com/docs">Documentation</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                )
            }
        }

        class Main extends React.Component {
            constructor(props) {
                super(props);
                this.state = {context: '', namespace: ''};
            }

            render() {
                return (
                    <div class="flex-center position-ref full-height">
                        <div class="content">
                            <Title />
                            <Links />
                        </div>
                    </div>
                )
            }
        }

        ReactDOM.render(<Main/>, document.querySelector('#main'));

    </script>

</html>
