        </div>
        <div class="socials">
            <script type="text/javascript">
            var addthis_share = {
                url: "<?php echo SITE_URL ?>",
                title: "1-click QR code generator and url shortener",
                description: "In just one click, get a short url and a QRcode of any URL. Transfert any address to your phone, to your friends, on a forum, as quickly as a click !"
            }
            </script>
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style"
                addthis:url="<?php echo SITE_URL ?>"
                addthis:title="1-click QR code generator and url shortener"
                addthis:description="In just one click, get a short url and a QRcode of any URL. Transfert any address to your phone, to your friends, on a forum, as quickly as a click !">
                <a class="addthis_button_facebook" fb:like:href="<?php echo SITE_URL ?>"></a>
                <a class="addthis_button_twitter" tw:url="<?php echo SITE_URL ?>"></a>
                <a class="addthis_button_google_plusone_share"></a>
                <a class="addthis_button_linkedin"></a>
                <a class="addthis_button_digg"></a>
                <a class="addthis_button_reddit"></a>
                <a class="addthis_button_email"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
            </div>
        </div>
        <div class="footer">
            Drag this to your bookmarks bar : <a href="javascript:void(location.href='<?php echo SITE_URL ?>/index.php?alias=&url='+escape(location.href))">Shorten URL</a>
            - Powered by <a href="https://github.com/onlinecreation/QRL" target="_blank">QRL</a>, fork of <a href="http://code.google.com/p/phurl">Phurl</a> & <a href="http://phpqrcode.sourceforge.net/">PHP QR Code</a>
            - Hosted and made by <a href="http://www.onlinecreation.pro" target="_blank" title="Agence web Bordeaux">OnLineCreation.pro</a>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            var addthis_config = addthis_config||{};
            addthis_config.data_track_clickback = false;
            addthis_config.data_track_addressbar = false;
        </script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-519bd6235ebd3bf1"></script>
        <script type="text/javascript">
            $(function(){
                $('#url').focus();
            });
        </script>
    </body>
</html>