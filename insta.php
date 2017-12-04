<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Instagram</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <script src="instafeed.min.js"></script> -->

        <style>
            #instafeed {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
            }
            
            #instafeed a {
                position: relative;
                width: 25%;
            }
                
            #instafeed a img {
                display: block;
                width: 100%;
                height: 100%;
            }
        
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="instafeed">
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
        <script type="text/javascript">
        var userFeed = new Instafeed({
            get: 'user',
            userId: '3163822831',
            clientId: '5d548d6352a743f6a0c5ae6c6f6952be',
            accessToken: '3163822831.1677ed0.7614542891c4458a8321d355437f4b8a',
            resolution: 'standard_resolution',
            template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
            sortBy: 'most-recent',
            limit: 4,
            links: false
        });
        userFeed.run();
        </script>
        
    </body>
</html>