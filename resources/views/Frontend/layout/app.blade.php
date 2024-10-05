<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trading-Hyips - MONITORING PORTAL</title>
    <link rel="alternate" type="application/rss+xml" title="Trading-Hyips - MONITORING PORTAL - New Listings RSS"
        href="../new/type/rss/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Trading-Hyips - MONITORING PORTAL - News RSS"
        href="../news/type/rss/index.html" />


    <link rel="icon" href="styles/images/favicon.png">

    <link href='{{ asset('assets/css/style.css') }}' rel='stylesheet' type='text/css'>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        checkEmail = function(email) {
          if (!email)
          {
            return 1;
          }
          else
          {
            a = email.indexOf('@');
            b = email.indexOf('@', a+1);
            c = email.lastIndexOf('.');
            if (a == -1 || b != -1 || c <= a + 2 || a < 1 || c + 2 >= email.length || c + 5 < email.length)
            {
              return 2;
            }
          }
          return 0;
        }

        startList = function() {
              if (document.all&&document.getElementById) {
                    navRoot = document.getElementById("nav");
                    for (i=0; i<navRoot.childNodes.length; i++) {
                          node = navRoot.childNodes[i];
                          if (node.nodeName=="LI") {
                                node.onmouseover=function() { this.className+=" over"; }
                                node.onmouseout=function() { this.className=this.className.replace(" over", ""); }
                          }
                    }
              }
        }
        window.onload=startList;
    </script>


</head>

<body>


    @yield('content')




</body>

</html>
