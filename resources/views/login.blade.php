<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bem Vindo</title>
    
    <link rel="stylesheet" href="{{ url('css/login.css')}}">

    </head>
    <body>    
        <div class="container">
            <!-- header -->
            <header class="header">
                <div class="header-titles">
                    <span class="header-title-login">LOG IN</span>
                    <span class="header-title-signup">SIGN UP</span>
                </div>
                <input type="checkbox" id="header-toggler-checkbox">
                <label for="header-toggler-checkbox">
                    <div class="header-toggler">
                        <div class="header-toggler-circle">
                        <svg class="toggler-arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="17" y1="17" x2="7" y2="7"></line>
                            <polyline points="7 17 7 7 17 7"></polyline>
                        </svg>
                        </div>
                    </div>
                </label>
            </header>
            <!-- body -->
            <section class="body">
                <!-- login -->
                <div class="login-container">
                    <div class="login-content">
                        <div class="login-header">
                        <div class="login-header-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 181.42 181.42" style="enable-background:new 0 0 181.42 181.42;" xml:space="preserve">
                                <g>
                                    <g>
                                    <path fill="rgba(255,255,255,.7)" d="M166.385,173.853c-7.344-2.606-21.492-7.443-36.275-11.477l-1.853-14.791c-0.244-1.952-1.902-3.413-3.866-3.413h-2.062			V126.68c4.33-5.259,8.01-11.644,10.769-18.687c2.203-0.026,4.334-0.75,6.127-2.101c2.218-1.678,3.657-4.129,4.045-6.899			l2.241-15.94c0.392-2.778-0.316-5.537-1.998-7.763c-1.179-1.564-2.74-2.74-4.517-3.429c-0.213-6.203-1.02-12.298-2.405-18.17			c0.194-1.644,0.293-3.311,0.293-4.958c0-14.494-7.401-27.736-19.928-35.899c0.32-4.543-0.476-7.858-2.405-10.088			C113.463,1.495,111.483,0,108.222,0c-7.485,0-18.68,3.489-24.924,5.658c-22.154,3.368-38.81,21.819-38.81,43.075			c0,1.648,0.099,3.314,0.293,4.958c-1.393,5.913-2.203,12.055-2.409,18.307c-4.345,1.724-7.127,6.271-6.446,11.115l2.222,15.799			c0.719,5.126,5.073,8.862,10.076,8.954c2.767,7.093,6.461,13.524,10.818,18.813v17.493h-2.036c-1.963,0-3.623,1.465-3.866,3.413			l-1.849,14.791c-14.821,4.041-28.935,8.866-36.256,11.469c-2.028,0.723-3.086,2.949-2.367,4.977			c0.719,2.024,2.953,3.078,4.977,2.367c7.626-2.709,22.725-7.869,38.185-11.964c1.537-0.407,2.671-1.709,2.869-3.284l1.747-13.977			h2.492h55.492h2.519l1.75,13.977c0.198,1.575,1.332,2.877,2.869,3.284c15.415,4.087,30.556,9.254,38.205,11.971			c0.434,0.152,0.871,0.224,1.305,0.224c1.602,0,3.105-0.997,3.672-2.591C169.472,176.802,168.414,174.573,166.385,173.853z			 M115.486,122.696c-0.616,0.712-0.955,1.617-0.955,2.557v18.92H66.837v-0.001v-18.92c0-0.94-0.339-1.845-0.955-2.557			c-4.757-5.472-8.703-12.538-11.408-20.434c-0.346-1.001-1.081-1.819-2.039-2.268c-0.963-0.449-2.062-0.483-3.048-0.106			c-0.209,0.084-0.407,0.133-0.613,0.164c-1.427,0.194-2.702-0.776-2.907-2.222L43.644,82.03c-0.202-1.446,0.757-2.736,2.523-2.961			c0.019,0,0.034,0,0.049,0c1.024,0,2.009-0.403,2.736-1.123c0.742-0.734,1.161-1.731,1.161-2.77			c0.004-6.979,0.814-13.821,2.412-20.339c0.114-0.479,0.141-0.97,0.076-1.457c-0.213-1.537-0.32-3.101-0.32-4.646			c0-17.527,13.977-32.752,32.508-35.415c0.247-0.038,0.495-0.099,0.734-0.183c9.695-3.395,17.968-5.343,22.697-5.343			c0.297,0,0.418,0.046,0.426,0.046c0.034,0.042,1.062,1.286,0.312,6.473c-0.224,1.575,0.529,3.132,1.91,3.931			c11.408,6.591,18.219,17.987,18.219,30.491c0,1.545-0.106,3.109-0.32,4.646c-0.065,0.487-0.038,0.982,0.076,1.457			c1.591,6.48,2.401,13.284,2.412,20.217c0,1.039,0.601,2.051,1.34,2.782c0.742,0.731,1.994,1.282,2.964,1.134			c0.696,0.099,1.309,0.457,1.728,1.008c0.426,0.567,0.605,1.271,0.502,1.986l-2.241,15.944c-0.099,0.715-0.464,1.34-1.028,1.766			c-0.552,0.418-1.256,0.582-1.948,0.498c-0.209-0.03-0.403-0.08-0.586-0.152c-0.989-0.399-2.093-0.373-3.067,0.076			c-0.966,0.445-1.713,1.267-2.059,2.272C124.155,110.222,120.22,117.25,115.486,122.696z"/>
                                    </g>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </div>
                        </div>
                        <!-- login inputs -->
                        <div class="login-input-container">
                        <div class="login-input">
                            <div class="login-input-icon input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <input type="text" class="login-input-input input" autocomplete="off" spellcheck="false" placeholder="email" maxlength="50">
                        </div>
                        <div class="login-input">
                            <div class="login-input-icon input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                </svg>
                            </div>
                            <input type="password" class="login-input-input input" autocomplete="off" spellcheck="false" placeholder="Password" maxlength="16">
                        </div>
                        <div class="forget-password">
                            <span>Forget password</span>
                        </div>
                        </div>
                        <!-- login button -->
                        <div class="login-button-container">
                        <button type="button" class="login-button">
                            <span class="login-button-title">Log in</span>
                            <span class="login-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                    <polyline points="10 17 15 12 10 7"></polyline>
                                    <line x1="15" y1="12" x2="3" y2="12"></line>
                                </svg>
                            </span>
                        </button>
                        </div>
                    </div>
                    <img draggable="false" src="http://upir.ir/images/pnohpxzkvd513silj3jx.svg" class="form-wave" alt="waves">
                </div>
                <!-- signup -->
                <div class="signup-container">
                    <div class="signup-content">
                        <div class="signup-header">
                        <div class="signup-header-icon">
                            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                <g>
                                    <path fill="rgba(255,255,255,.7)" d="M47,32.5c-0.728,0-1.438,0.075-2.133,0.191c1.168-1.693,2.115-3.561,2.806-5.573C49.084,26.47,50,25.075,50,23.5v-4		c0-0.963-0.36-1.896-1-2.625v-5.319c0.056-0.55,0.276-3.824-2.092-6.525C44.854,2.688,41.521,1.5,37,1.5s-7.854,1.188-9.908,3.53		c-1.435,1.637-1.918,3.481-2.064,4.805C23.314,8.949,21.294,8.5,19,8.5c-10.389,0-10.994,8.855-11,9v4.579		c-0.648,0.706-1,1.521-1,2.33v3.454c0,1.079,0.483,2.085,1.311,2.765c0.825,3.11,2.854,5.46,3.644,6.285v2.743		c0,0.787-0.428,1.509-1.171,1.915l-6.653,4.173C1.583,47.134,0,49.801,0,52.703V56.5h14h2h24.104c2.002,1.26,4.362,2,6.896,2		c7.168,0,13-5.832,13-13S54.168,32.5,47,32.5z M14,52.262V54.5H2v-1.797c0-2.17,1.184-4.164,3.141-5.233l6.652-4.173		c1.333-0.727,2.161-2.121,2.161-3.641v-3.591l-0.318-0.297c-0.026-0.024-2.683-2.534-3.468-5.955l-0.091-0.396l-0.342-0.22		C9.275,28.899,9,28.4,9,27.863v-3.454c0-0.36,0.245-0.788,0.671-1.174L10,22.938l-0.002-5.38C10.016,17.271,10.537,10.5,19,10.5		c2.393,0,4.408,0.553,6,1.644v4.731c-0.64,0.729-1,1.662-1,2.625v4c0,0.304,0.035,0.603,0.101,0.893		c0.027,0.116,0.081,0.222,0.118,0.334c0.055,0.168,0.099,0.341,0.176,0.5c0.001,0.002,0.002,0.003,0.003,0.005		c0.256,0.528,0.629,1,1.099,1.377c0.005,0.019,0.011,0.036,0.016,0.054c0.06,0.229,0.123,0.457,0.191,0.68l0.081,0.261		c0.014,0.046,0.031,0.093,0.046,0.139c0.035,0.108,0.069,0.216,0.105,0.322c0.06,0.175,0.123,0.355,0.196,0.553		c0.031,0.083,0.065,0.156,0.097,0.237c0.082,0.209,0.164,0.411,0.25,0.611c0.021,0.048,0.039,0.1,0.06,0.147l0.056,0.126		c0.026,0.058,0.053,0.11,0.079,0.167c0.098,0.214,0.194,0.421,0.294,0.622c0.016,0.032,0.031,0.067,0.047,0.099		c0.063,0.125,0.126,0.243,0.189,0.363c0.108,0.206,0.214,0.4,0.32,0.588c0.052,0.092,0.103,0.182,0.154,0.269		c0.144,0.246,0.281,0.472,0.414,0.682c0.029,0.045,0.057,0.092,0.085,0.135c0.242,0.375,0.452,0.679,0.626,0.916		c0.046,0.063,0.086,0.117,0.125,0.17c0.022,0.029,0.052,0.071,0.071,0.097v3.309c0,0.968-0.528,1.856-1.377,2.32l-2.646,1.443		l-0.649,0.354l-5.626,3.069C15.801,45.924,14,48.958,14,52.262z M16,54.5v-2.238c0-2.571,1.402-4.934,3.659-6.164l8.921-4.866		C30.073,40.417,31,38.854,31,37.155v-4.018v-0.001l-0.194-0.232l-0.038-0.045c-0.002-0.003-0.064-0.078-0.165-0.21		c-0.006-0.008-0.012-0.016-0.019-0.024c-0.053-0.069-0.115-0.153-0.186-0.251c-0.001-0.002-0.002-0.003-0.003-0.005		c-0.149-0.207-0.336-0.476-0.544-0.8c-0.005-0.007-0.009-0.015-0.014-0.022c-0.098-0.154-0.202-0.32-0.308-0.497		c-0.008-0.013-0.016-0.026-0.024-0.04c-0.226-0.379-0.466-0.808-0.705-1.283l-0.001-0.002c-0.127-0.254-0.254-0.523-0.378-0.802		l0,0c-0.017-0.039-0.035-0.077-0.052-0.116h0c-0.055-0.125-0.11-0.256-0.166-0.391c-0.02-0.049-0.04-0.1-0.06-0.15		c-0.052-0.131-0.105-0.263-0.161-0.414c-0.102-0.272-0.198-0.556-0.29-0.849l-0.055-0.178c-0.006-0.02-0.013-0.04-0.019-0.061		c-0.094-0.316-0.184-0.639-0.26-0.971l-0.091-0.396l-0.341-0.22C26.346,24.803,26,24.176,26,23.5v-4		c0-0.561,0.238-1.084,0.67-1.475L27,17.728V11.5v-0.354l-0.027-0.021c-0.034-0.722,0.009-2.935,1.623-4.776		C30.253,4.458,33.081,3.5,37,3.5c3.905,0,6.727,0.951,8.386,2.828c1.947,2.201,1.625,5.017,1.623,5.041L47,17.728l0.33,0.298		C47.762,18.416,48,18.939,48,19.5v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495		c-0.669,2.081-1.622,4.003-2.834,5.713c-0.297,0.421-0.586,0.794-0.837,1.079L42,33.123v0.38c-0.252,0.105-0.494,0.229-0.737,0.349		c-0.062,0.031-0.125,0.059-0.186,0.09c-0.219,0.113-0.432,0.233-0.643,0.357c-0.111,0.065-0.22,0.132-0.328,0.199		c-0.192,0.121-0.383,0.243-0.568,0.374c-0.12,0.084-0.235,0.175-0.352,0.264c-0.289,0.218-0.568,0.448-0.837,0.689		c-0.129,0.116-0.26,0.229-0.385,0.35c-0.143,0.139-0.28,0.284-0.416,0.429c-0.115,0.122-0.228,0.245-0.338,0.372		c-0.132,0.152-0.263,0.305-0.388,0.462c-0.103,0.13-0.199,0.264-0.297,0.397c-0.208,0.284-0.404,0.576-0.59,0.877		c-0.087,0.141-0.177,0.28-0.258,0.424c-0.101,0.178-0.192,0.361-0.284,0.544c-0.075,0.148-0.147,0.297-0.217,0.449		c-0.083,0.182-0.164,0.364-0.238,0.55c-0.074,0.183-0.139,0.37-0.204,0.556c-0.076,0.217-0.149,0.435-0.213,0.658		c-0.08,0.276-0.153,0.554-0.215,0.836c-0.031,0.143-0.056,0.288-0.082,0.433c-0.047,0.255-0.086,0.512-0.118,0.771		c-0.016,0.129-0.032,0.258-0.044,0.389C34.024,44.712,34,45.104,34,45.5c0,0.435,0.023,0.867,0.066,1.294		c0.016,0.162,0.048,0.319,0.07,0.479c0.036,0.263,0.068,0.526,0.12,0.785c0.035,0.175,0.085,0.345,0.127,0.518		c0.058,0.239,0.112,0.479,0.184,0.714c0.049,0.159,0.11,0.313,0.165,0.47c0.084,0.243,0.167,0.487,0.266,0.724		c0.055,0.133,0.12,0.26,0.18,0.39c0.115,0.254,0.232,0.507,0.363,0.753c0.058,0.107,0.123,0.21,0.184,0.316		c0.148,0.259,0.298,0.515,0.464,0.763c0.061,0.091,0.128,0.177,0.191,0.267c0.176,0.25,0.356,0.498,0.551,0.736		c0.072,0.088,0.15,0.17,0.224,0.256c0.155,0.18,0.303,0.364,0.468,0.536H16z M47,56.5c-2.258,0-4.359-0.686-6.107-1.858		c-0.341-0.228-0.663-0.476-0.972-0.736c-0.108-0.092-0.21-0.19-0.314-0.286c-0.197-0.179-0.388-0.363-0.57-0.554		c-0.117-0.123-0.23-0.248-0.341-0.375c-0.164-0.189-0.318-0.384-0.468-0.583c-0.096-0.127-0.195-0.25-0.286-0.381		c-0.221-0.321-0.429-0.651-0.615-0.993c-0.043-0.08-0.077-0.164-0.118-0.245c-0.146-0.286-0.282-0.576-0.403-0.874		c-0.052-0.13-0.097-0.263-0.145-0.395c-0.094-0.262-0.18-0.528-0.255-0.797c-0.038-0.138-0.075-0.277-0.108-0.417		c-0.067-0.285-0.119-0.574-0.163-0.865c-0.019-0.125-0.043-0.248-0.057-0.374C36.031,46.348,36,45.926,36,45.5		c0-0.339,0.021-0.674,0.051-1.005c0.011-0.118,0.027-0.235,0.042-0.352c0.026-0.21,0.058-0.417,0.095-0.624		c0.026-0.139,0.052-0.278,0.083-0.416c0.04-0.18,0.088-0.356,0.137-0.532c0.041-0.146,0.077-0.294,0.124-0.439		c0.086-0.267,0.183-0.53,0.289-0.788c0.072-0.175,0.154-0.345,0.235-0.515c0.053-0.113,0.105-0.225,0.162-0.336		c0.087-0.17,0.18-0.337,0.276-0.502c0.06-0.103,0.122-0.204,0.185-0.304c0.103-0.165,0.207-0.33,0.319-0.489		c0.057-0.081,0.119-0.158,0.178-0.238c0.234-0.315,0.484-0.617,0.75-0.905c0.061-0.066,0.119-0.135,0.182-0.2		c0.137-0.141,0.281-0.276,0.426-0.41c0.083-0.077,0.167-0.155,0.253-0.23c0.15-0.131,0.304-0.258,0.461-0.381		c0.08-0.062,0.162-0.122,0.243-0.182c0.174-0.128,0.349-0.256,0.532-0.374c0.013-0.008,0.026-0.016,0.039-0.024		c0.685-0.44,1.426-0.808,2.214-1.092c0.066-0.024,0.131-0.05,0.198-0.073l0.295-0.104C44.791,34.671,45.876,34.5,47,34.5		c6.065,0,11,4.935,11,11S53.065,56.5,47,56.5z"/>
                                    <path fill="rgba(255,255,255,.7)" d="M53,44.5h-5v-5c0-0.553-0.448-1-1-1s-1,0.447-1,1v5h-5c-0.552,0-1,0.447-1,1s0.448,1,1,1h5v5c0,0.553,0.448,1,1,1		s1-0.447,1-1v-5h5c0.552,0,1-0.447,1-1S53.552,44.5,53,44.5z"/>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g></g>
                            </svg>
                        </div>
                        </div>
                        <!-- signup inputs -->
                        <div class="signup-input-container">
                        <div class="signup-input">
                            <div class="signup-input-icon input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <input type="email" class="signup-input-input input" autocomplete="off" spellcheck="false" placeholder="Email" maxlength="50">
                        </div>
                        <div class="signup-input">
                            <div class="signup-input-icon input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <input type="text" class="signup-input-input input" autocomplete="off" spellcheck="false" placeholder="nome" maxlength="15">
                        </div>
                        <div class="signup-input">
                            <div class="signup-input-icon input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                </svg>
                            </div>
                            <input type="password" class="signup-input-input input" autocomplete="off" spellcheck="false" placeholder="Password" maxlength="16">
                        </div>
                        </div>
                        <!-- signup button -->
                        <div class="signup-button-container">
                        <button type="button" class="signup-button">
                            <span class="signup-button-title">Sign up</span>
                            <span class="signup-button-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                    <polyline points="10 17 15 12 10 7"></polyline>
                                    <line x1="15" y1="12" x2="3" y2="12"></line>
                                </svg>
                            </span>
                        </button>
                        </div>
                    </div>
                    <img draggable="false" src="http://upir.ir/images/pnohpxzkvd513silj3jx.svg" class="form-wave" alt="waves">
                </div>
            </section>
        </div>
    </body>

    <script>
       // DOM
        const $ = document;
        const root = document.querySelector(":root");

        function select(query) {
            return $.querySelector(query);
        }

        function selectAll(query) {
            return $.querySelectorAll(query);
        }

        // select items 
        const items = {
            header: {
                togglerCheckbox: select("#header-toggler-checkbox"),
                title: {
                    login: select(".header-title-login"),
                    signup: select(".header-title-signup")
                }
            },
            body: select(".body"),
            input: {
                inputs: selectAll(".input"),
                icons: selectAll(".input-icon")
            }
        }

        let signStatus = "login";

        let loginDisplayTimeout;
        const chnageSignStatus = {
            login: () => {
                clearTimeout(loginDisplayTimeout);
                signStatus = "login";
                root.style.setProperty("--body-rotate", "rotateY(0deg)");
                root.style.setProperty("--background-position", "0 0");
                root.style.setProperty("--body-height", "380px");
                root.style.setProperty("--login-display", "flex");
            },
            signup: () => {
                clearTimeout(loginDisplayTimeout);
                signStatus = "signup";
                root.style.setProperty("--body-rotate", "rotateY(180deg)");
                root.style.setProperty("--background-position", "200% 100%");
                root.style.setProperty("--body-height", "430px");
                loginDisplayTimeout = setTimeout(() => {
                    if (signStatus != "login") {
                        root.style.setProperty("--login-display", "none");
                    }
                }, 500)
            }
        }

        function checkSignStatus() {
            switch (signStatus) {
                case "login":
                    chnageSignStatus.signup();
                    break;
                case "signup":
                    chnageSignStatus.login();
                    break;
            }
        }

        function setInputFocus(input, icon) {
            input.addEventListener("focus", () => {
                icon.classList.add("focused-icon");
                input.parentElement.classList.add("input-focused");
            })
            input.addEventListener("blur", () => {
                icon.classList.remove("focused-icon");
                input.parentElement.classList.remove("input-focused");
            });
        }

        for (let index in items.input.inputs) {
            if (typeof items.input.inputs[index] == "object") {
                setInputFocus(items.input.inputs[index], items.input.icons[index])
            }
        }

        // events
        items.header.togglerCheckbox.addEventListener("change", checkSignStatus);
        items.header.title.login.addEventListener("click", () => {
            chnageSignStatus.login();
            items.header.togglerCheckbox.checked = false;
        });
        items.header.title.signup.addEventListener("click", () => {
            chnageSignStatus.signup();
            items.header.togglerCheckbox.checked = true;
        });
    </script>
</html>