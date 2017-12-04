# InstafeedJsExample

How to fetch instagam images using instafeed.min.js

### Create instagram token using this link http://instagram.pixelunion.net/

### Create instagram client id using developer account.

### Get your User ID  using this link https://smashballoon.com/instagram-feed/find-instagram-user-id/

### Use following basic code

~~~ javascript

<div id="instafeed">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<script type="text/javascript">
var userFeed = new Instafeed({
    get: 'user',
    userId: '', // Your User ID
    clientId: '', // Client ID
    accessToken: '', // Token
    resolution: 'standard_resolution',
    template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
    sortBy: 'most-recent',
    limit: 4,
    links: false
});
userFeed.run();
</script>

~~~
