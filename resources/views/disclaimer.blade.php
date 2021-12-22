<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if IE 7]><html lang="{{ app()->getLocale() }}" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="{{ app()->getLocale() }}" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="{{ app()->getLocale() }}" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if !IE]><html lang="{{ app()->getLocale() }}"><![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Meta Beschrijving" />
    <meta name="keywords" content="Keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="//db.onlinewebfonts.com/c/247337a1c1af6633c9ed10e68a850825?family=RomainBPTextRegular" rel="stylesheet" type="text/css"/>
    <!-- Admin scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nav.js') }}"></script>
</head>
<body>

<main class="grid grid-cols-12 disclaimer">

    <div class="col-span-12 lg:col-start-3 lg:col-span-8 mt-10">

        <div class="bg-white shadow-md overflow-hidden login-container mx-7">

            <div class="p-8">

                <a href="{{ url()->previous() }}">Go Back</a>

                <h3 class="block mt-1 text-lg leading-tight font-medium text-black mb-3">Disclaimer</h3>

                <p>Last updated: April 27, 2021</p>
                <h3>Interpretation and Definitions</h3>
                <h3>Interpretation</h3>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions.
                    The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                <h3>Definitions</h3>
                <p>For the purposes of this Disclaimer:</p>
                <ul>
                    <li><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Disclaimer) refers to Degroof Petercam, Nijverheidsstraat 44, 1040 Brussel.</li>
                    <li><strong>Service</strong> refers to the Website.</li>
                    <li><strong>You</strong> means the individual accessing the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
                    <li><strong>Website</strong> refers to Degroof Petercam On Air, accessible from <a href="https://www.dponair.com/" rel="external nofollow noopener" target="_blank">https://www.dponair.com/</a></li>
                </ul>
                <h3>Disclaimer</h3>
                <p>The information contained on the Service is for general information purposes only.</p>
                <p>The Company assumes no responsibility for errors or omissions in the contents of the Service.</p>
                <p>In no event shall the Company be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. The Company reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice.</p>
                <p>The Company does not warrant that the Service is free of viruses or other harmful components.</p>
                <h3>External Links Disclaimer</h3>
                <p>The Service may contain links to external websites that are not provided or maintained by or in any way affiliated with the Company.</p>
                <p>Please note that the Company does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>
                <h3>Errors and Omissions Disclaimer</h3>
                <p>The information given by the Service is for general guidance on matters of interest only. Even if the Company takes every precaution to insure that the content of the Service is both current and accurate, errors can occur. Plus, given the changing nature of laws, rules and regulations, there may be delays, omissions or inaccuracies in the information contained on the Service.</p>
                <p>The Company is not responsible for any errors or omissions, or for the results obtained from the use of this information.</p>
                <h3>Fair Use Disclaimer</h3>
                <p>The Company may use copyrighted material which has not always been specifically authorized by the copyright owner. The Company is making such material available for criticism, comment, news reporting, teaching, scholarship, or research.</p>
                <p>The Company believes this constitutes a &quot;fair use&quot; of any such copyrighted material as provided for in section 107 of the United States Copyright law.</p>
                <p>If You wish to use copyrighted material from the Service for your own purposes that go beyond fair use, You must obtain permission from the copyright owner.</p>
                <h3>Views Expressed Disclaimer</h3>
                <p>The Service may contain views and opinions which are those of the authors and do not necessarily reflect the official policy or position of any other author, agency, organization, employer or company, including the Company.</p>
                <p>Comments published by users are their sole responsibility and the users will take full responsibility, liability and blame for any libel or litigation that results from something written in or as a direct result of something written in a comment. The Company is not liable for any comment published by users and reserve the right to delete any comment for any reason whatsoever.</p>
                <h3>No Responsibility Disclaimer</h3>
                <p>The information on the Service is provided with the understanding that the Company is not herein engaged in rendering legal, accounting, tax, or other professional advice and services. As such, it should not be used as a substitute for consultation with professional accounting, tax, legal or other competent advisers.</p>
                <p>In no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever arising out of or in connection with your access or use or inability to access or use the Service.</p>
                <h3>&quot;Use at Your Own Risk&quot; Disclaimer</h3>
                <p>All information in the Service is provided &quot;as is&quot;, with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied, including, but not limited to warranties of performance, merchantability and fitness for a particular purpose.</p>
                <p>The Company will not be liable to You or anyone else for any decision made or action taken in reliance on the information given by the Service or for any consequential, special or similar damages, even if advised of the possibility of such damages.</p>
                <h3>Contact Us</h3>
                <p>If you have any questions about this Disclaimer, You can contact Us:</p>
                <ul>
                    <li>By phone number: +32 2 287 91 11</li>
                </ul>

            </div>

        </div>

    </div>

</main>

@include('includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
