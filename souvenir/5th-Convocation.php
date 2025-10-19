<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>5th convocation</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />

    <!-- Flipbook Stylesheet -->
    <link href="../dflip/css/dflip.min.css" rel="stylesheet" type="text/css" />
    <link href="../dflip/css/themify-icons.min.css" rel="stylesheet" type="text/css" />

    <style>
      /* Make body and html full height, no margin */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Remove scrollbars */
      }

      /* Make flipbook fill the viewport */
      #df_manual_book {
        width: 100vw;
        height: 100vh;
      }
    </style>
  </head>

  <body>
    <!-- Full-page flipbook backgroundcolor="teal" -->
    <div
      class="_df_book"
      id="df_manual_book"
      webgl="true"
      
      backgroundcolor="#6b7095"
      source="../pdfs/5th-Convocation.pdf"
    ></div>

    <!-- jQuery -->
    <script src="../dflip/js/libs/jquery.min.js" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="../dflip/js/dflip.min.js" type="text/javascript"></script>
  </body>
</html>
