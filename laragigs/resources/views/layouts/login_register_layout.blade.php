<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login_register.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/visitor.css')}}">
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <a href="{{route('visitor')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
        <div class="container">
            <a class="link-container" href="{{route('login')}}">
                <div class="box">
                    <div>Login</div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" id="SVGRoot" version="1.1">
                            <defs id="defs2"/>
                            <g id="layer1">
                            <path d="M 9 2 A 1.0001 1.0001 0 0 0 8 3 L 8 8 A 1 1 0 0 0 9 9 A 1 1 0 0 0 10 8 L 10 4 L 18 4 L 18 20 L 10 20 L 10 16 A 1 1 0 0 0 9 15 A 1 1 0 0 0 8 16 L 8 21 A 1.0001 1.0001 0 0 0 9 22 L 19 22 A 1.0001 1.0001 0 0 0 20 21 L 20 3 A 1.0001 1.0001 0 0 0 19 2 L 9 2 z M 12.029297 9 A 1 1 0 0 0 11.292969 9.2929688 A 1 1 0 0 0 11.292969 10.707031 L 11.585938 11 L 5 11 A 1 1 0 0 0 4 12 A 1 1 0 0 0 5 13 L 11.585938 13 L 11.292969 13.292969 A 1 1 0 0 0 11.292969 14.707031 A 1 1 0 0 0 12.707031 14.707031 L 14.6875 12.726562 A 1 1 0 0 0 14.707031 12.707031 A 1.0001 1.0001 0 0 0 14.716797 12.697266 A 1 1 0 0 0 14.763672 12.644531 A 1 1 0 0 0 14.814453 12.578125 A 1.0001 1.0001 0 0 0 14.845703 12.533203 A 1 1 0 0 0 14.861328 12.507812 A 1.0001 1.0001 0 0 0 14.871094 12.490234 A 1 1 0 0 0 14.900391 12.433594 A 1.0001 1.0001 0 0 0 14.923828 12.382812 A 1 1 0 0 0 14.933594 12.357422 A 1.0001 1.0001 0 0 0 14.935547 12.349609 A 1 1 0 0 0 14.958984 12.285156 A 1 1 0 0 0 14.960938 12.277344 A 1.0001 1.0001 0 0 0 14.974609 12.222656 A 1 1 0 0 0 14.980469 12.195312 A 1.0001 1.0001 0 0 0 14.990234 12.140625 A 1 1 0 0 0 14.992188 12.128906 A 1.0001 1.0001 0 0 0 14.998047 12.056641 A 1 1 0 0 0 15 12.029297 A 1.0001 1.0001 0 0 0 14.998047 11.970703 A 1 1 0 0 0 14.998047 11.945312 A 1.0001 1.0001 0 0 0 14.996094 11.916016 A 1 1 0 0 0 14.990234 11.861328 A 1.0001 1.0001 0 0 0 14.988281 11.853516 A 1 1 0 0 0 14.974609 11.777344 A 1 1 0 0 0 14.958984 11.71875 A 1 1 0 0 0 14.953125 11.697266 A 1.0001 1.0001 0 0 0 14.943359 11.669922 A 1 1 0 0 0 14.941406 11.662109 A 1.0001 1.0001 0 0 0 14.912109 11.591797 A 1 1 0 0 0 14.888672 11.541016 A 1.0001 1.0001 0 0 0 14.875 11.515625 A 1 1 0 0 0 14.847656 11.46875 A 1.0001 1.0001 0 0 0 14.832031 11.445312 A 1 1 0 0 0 14.798828 11.398438 A 1.0001 1.0001 0 0 0 14.78125 11.376953 A 1 1 0 0 0 14.746094 11.333984 A 1.0001 1.0001 0 0 0 14.726562 11.3125 A 1 1 0 0 0 14.707031 11.292969 L 14.666016 11.253906 L 12.707031 9.2929688 A 1 1 0 0 0 12.029297 9 z " id="path6287" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1;opacity:1"/>
                            </g>
                        </svg>
                </div>
            </a>
            <a class="link-container" href="{{route('register')}}">
                <div class="box">
                    <div>Register</div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 328 328" xml:space="preserve" style="&#10;">
                            <g id="XMLID_455_">
                                <path id="XMLID_458_" d="M15,286.75h125.596c19.246,24.348,49.031,40,82.404,40c57.897,0,105-47.103,105-105s-47.103-105-105-105   c-34.488,0-65.145,16.716-84.298,42.47c-7.763-1.628-15.694-2.47-23.702-2.47c-63.411,0-115,51.589-115,115   C0,280.034,6.716,286.75,15,286.75z M223,146.75c41.355,0,75,33.645,75,75s-33.645,75-75,75s-75-33.645-75-75   S181.645,146.75,223,146.75z"/>
                                <path id="XMLID_461_" d="M115,1.25c-34.602,0-62.751,28.15-62.751,62.751S80.398,126.75,115,126.75   c34.601,0,62.75-28.148,62.75-62.749S149.601,1.25,115,1.25z"/>
                                <path id="XMLID_462_" d="M193,236.75h15v15c0,8.284,6.716,15,15,15s15-6.716,15-15v-15h15c8.284,0,15-6.716,15-15s-6.716-15-15-15   h-15v-15c0-8.284-6.716-15-15-15s-15,6.716-15,15v15h-15c-8.284,0-15,6.716-15,15S184.716,236.75,193,236.75z"/>
                            </g>
                        </svg>
                </div>
            </a>
        </div>
    </header>

    <div class="login-register-content">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
