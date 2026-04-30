<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <base href="../"/>
    <!-- begin::NexLink Meta Basic -->
    <meta charset="utf-8"/>
    <meta content="#5955D1" name="theme-color"/>
    <meta content="index, follow" name="robots"/>
    <meta content="LayoutDrop" name="author"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta content="Bootstrap Admin Template, CRM Dashboard, Admin Panel, Bootstrap 5 Dashboard, Project Management, Analytics Template, Responsive Admin" name="keywords"/>
    <meta content="NexLink is a modern Bootstrap 5 CRM Admin Dashboard Template designed for managing sales, analytics, projects, and team performance with clean UI, responsive layout, and prebuilt pages." name="description"/>
    <!-- end::NexLink Meta Basic -->
    <!-- begin::NexLink Meta Social -->
    <meta content=".../" property="og:url"/>
    <meta content="NexLink | CRM Admin Dashboard Template" property="og:site_name"/>
    <meta content="website" property="og:type"/>
    <meta content="en_US" property="og:locale"/>
    <meta content="NexLink | CRM Admin Dashboard Template" property="og:title"/>
    <meta content="NexLink is a modern Bootstrap 5 CRM Admin Dashboard Template designed for managing sales, analytics, projects, and team performance with clean UI, responsive layout, and prebuilt pages." property="og:description"/>
    <meta content=".../preview.png" property="og:image"/>
    <!-- end::NexLink Meta Social -->
    <!-- begin::NexLink Meta Twitter -->
    <meta content="summary" name="twitter:card"/>
    <meta content=".../" name="twitter:url"/>
    <meta content="@layoutdrop" name="twitter:creator"/>
    <meta content="NexLink | CRM Admin Dashboard Template" name="twitter:title"/>
    <meta content="NexLink is a modern Bootstrap 5 CRM Admin Dashboard Template designed for managing sales, analytics, projects, and team performance with clean UI, responsive layout, and prebuilt pages." name="twitter:description"/>
    <!-- end::NexLink Meta Twitter -->
    <!-- begin::NexLink Website Page Title -->
    <title>
        @yield('title')
    </title>
    <!-- end::NexLink Website Page Title -->
    <!-- begin::NexLink Mobile Specific -->
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <!-- end::NexLink Mobile Specific -->
    <!-- begin::NexLink Favicon Tags -->
    <link href="./admin/assets/images/favicon.png" rel="icon" type="image/png"/>
    <link href="./admin/assets/images/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
    <!-- end::NexLink Favicon Tags -->
    <!-- begin::NexLink Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&amp;display=swap" rel="stylesheet"/>
    <!-- end::NexLink Google Fonts -->
    <!-- begin::NexLink Required Stylesheet -->
    <link href="./admin/assets/libs/flaticon/css/all/all.css" rel="stylesheet"/>
    <link href="./admin/assets/libs/lucide/lucide.css" rel="stylesheet"/>
    <link href="./admin/assets/libs/fontawesome/css/all.min.css" rel="stylesheet"/>
    <link href="./admin/assets/libs/simplebar/simplebar.css" rel="stylesheet"/>
    <link href="./admin/assets/libs/node-waves/waves.css" rel="stylesheet"/>
    <link href="./admin/assets/libs/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet"/>
    <!-- end::NexLink Required Stylesheet -->
    <!-- begin::NexLink CSS Stylesheet -->
    <link href="./admin/assets/css/styles.css" rel="stylesheet"/>
    <link href="./admin/assets/css/custom.css" rel="stylesheet"/>

    <!-- end::NexLink CSS Stylesheet -->
    <!-- begin::NexLink Googletagmanager -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XWVQM68HHQ">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XWVQM68HHQ', {
            'cookie_flags': 'SameSite=None;Secure',
            'send_page_view': true
        });
    </script>
    <!-- end::NexLink Googletagmanager -->
</head>
<body>


@yield('content')

<!-- begin::NexLink Page Scripts -->
<script src="./admin/assets/libs/global/global.min.js">
</script>
<script src="./admin/assets/js/appSettings.js">
</script>
<script src="./admin/assets/js/main.js">
</script>
<!-- end::NexLink Page Scripts -->
</body>
</html>
