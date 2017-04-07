<!DOCTYPE html>
<html>
    <head>
        <title>@yield('page_title','Halaman awal') | Laboratorium Pemrograman FW<</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         
        <link rel="stylesheet" type="text/css"
        href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" type="text/css"
        href="{{asset('component/font-awesome/css/font-awesome.min.css')}} ">
        <style type="text/css">

           
            body {
                padding-top: 70px;
                padding-bottom: 70px;
                width: 50%;
                display: table;
                font-weight: 50;
                font-family: 'Lato';
           }

           .starter-template{
            padding: 40px 15px;
            text-align: center;
           }

           .form-horizontal{
            padding: 15px 10px;
           }

           footer{
            padding-top: 15px;
            text-align: right;
           }

/*            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

*/            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
     <body>
       <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle-collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand">laravel -5</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Mahasiswa <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('mahasiswa')}}">Data Mahasiswa</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('jadwalmatakuliah')}}">Jadwal Mahasiswa</a></li>
                            </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dosen <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('dosen')}}">Data Dosen</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('dosenmatakuliah')}}">Jadwal Dosen Mengajar</a></li>
                            </ul>
                    </li>

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('pengguna')}}">Pengguna</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('ruangan')}}">Ruangan</a></li>
                                <li><a href="{{url('matakuliah')}}">Matakuliah</a></li>
                            </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
            <div class="container">
            <div class="content">
                <div class="title">Praktikum Pemograman Framework</div>
                <div class="title">Yunia F.T</div>
                <div class="title">"1515015221"</div>
            </div>
        </div>
       <script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                $('[data-toggle="tolltip"]').tolltip()
            });
        </script>

        </div>
       </nav>
       <div class="clearfix"></div>
       <div class="container">
           @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}

                </div>
            @endif
            @yield('container')
       </div>

       <nav class="navbar navbar-default navbar-fixed-bottom">
           <footer class="container">
               <!   please dont delete this >
               created by <a href="#">
               <span><i class="fa fa-facebook" style="color: #1da1f2"></i>@Yunia.F.T</span></a> <!--/   please dont delete this    -->
           </footer>
       </nav>

        
    </body>
</html>
